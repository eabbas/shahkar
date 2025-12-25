<?php

namespace App\Http\Controllers;

use App\Models\footer_column;
use App\Models\footer_row;
use App\Models\logo;
use App\Models\footerFormMedia;
use App\Models\footerFormText;
use Illuminate\Http\Request;

class FooterColumnController extends Controller
{
    public function create()
    {
        $footer_columns = footer_column::whereIn('section_number', [1, 2, 3])->with('rows')->get();
        $logo = logo::all();
        if (count($footer_columns) == 0) {
            return view('admin.footerColumns.create', ['logo' => $logo]);
        } else {
            return view('admin.footerColumns.edit', [
                'footerColumns' => $footer_columns,
                'logo' => $logo
            ]);
        }
    }
    public function store(Request $request)
    {
        foreach ($request->title as $section_num => $section_title) {
            $footer_column_id = footer_column::insertGetId([
                'section_number' => $section_num,
                'section_title' =>   $section_title
            ]);
            if (isset($request->linkContent[$section_num])) {
                foreach ($request->linkContent[$section_num] as $key => $linkContent) {
                    footer_row::create([
                        'footer_column_id' => $footer_column_id,
                        'row_content' => $linkContent,
                        'row_href' => $request->linkHref[$section_num][$key],
                    ]);
                }
            }
        }
        return to_route('home');
    }
    public function update(Request $request)
    {
        footer_column::whereIn('section_number', [1, 2, 3])->delete();
        footer_row::query()->delete();
        return $this->store($request);
    }
    public function footerFormMediaCreate()
    {
        $footer_form_column = footer_column::whereIn('section_number', [4])->with('images')->with('texts')->get();
        $logo = logo::all();
        if (count($footer_form_column) == 0) {
            return view('admin.footerColumns.createFooterFormMedia', ['logo' => $logo]);
        } else {
            return view('admin.footerColumns.editFooterFormMedia', [
                'footerFormMediaColumn' => $footer_form_column,
                'logo' => $logo
            ]);
        }
    }
    public function footerFormMediaStore(Request $request)
    {
        foreach ($request->title as $section_num => $section_title) {
            $footer_column_id = footer_column::insertGetId([
                'section_number' => $section_num,
                'section_title' =>   $section_title
            ]);
            footerFormText::create([
                'footer_column_id' => $footer_column_id,
                'text' => $request->text,
                'placeholder' => $request->placeholder
            ]);
            if (isset($request->imageHref[$section_num])) {
                foreach ($request->imageHref[$section_num] as $key => $imageHref) {
                    $imageOriginalName = request()->image[$section_num][$key]->getClientOriginalName();
                    $imagePath = $request->file('image')[$section_num][$key]->storeAs('images', time() . $imageOriginalName, 'public');
                    footerFormMedia::create([
                        'footer_column_id' => $footer_column_id,
                        'path' => $imagePath,
                        'alt' => $request->imageAlt[$section_num][$key],
                        'link' => $imageHref
                    ]);
                }
            }
        }
        return to_route('home');
    }
    public function footerFormMediaUpdate(Request $request)
    {
        footer_column::whereIn('section_number', [4])->delete();
        footerFormMedia::query()->delete();
        footerFormText::query()->delete();
        return $this->footerFormMediaStore($request);
    }
}
