<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\course;
use Illuminate\Http\Request;
use App\Models\coursecategory;
use App\Models\footer_column;
use App\Models\logo;
use App\Models\product;
use App\Models\settings;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use DB;

class CoursecategoryController extends Controller
{
    public function getProductMedias($products)
    {
        foreach ($products as $product) {
            $product->load(['medias' => function ($query) {
                $query->select('product_id', DB::raw("IFNULL(path , 'images/noImage.png') path"))->where('is_main', 1);
            }]);
            foreach ($product->medias as $media) {
                $product['img'] = asset('storage/images/noImage.png');
                if (Storage::disk('public')->exists($media['path'])) {
                    $product['img'] = asset('storage/' . $media['path']);
                }
            }
        }
        return $products;
    }
    public function create()
    {
        $categories = coursecategory::all();
        $logo = logo::first();
        return view("admin.categorycourse.create", [
            'categories' => $categories,
            'logo' => $logo
        ]);
    }

    public function store(Request $request)
    {
        $path = "";
        /** میشود عکس دیفالت برای همه دسته بندی ها اگر عکس نداشت */

        if ($request->img) {
            $name = $request->img->getClientOriginalName();
            $fileName = Str::uuid() . "_" . $name;
            $path = $request->img->storeAs('files', $fileName, 'public');
        }
        coursecategory::create([
            'title'        => $request->title,
            'description'  => $request->description,
            'parent_id'    => $request->parent_id,
            'img'          => $path,
            'show_in_home' => $request->has('homes') ? 1 : 0,
        ]);

        return to_route('coursecategory.adminList');
    }
    public function adminIndex()
    {
        $categories = coursecategory::all();
        $logo = logo::first();
        return view("admin.categorycourse.index", [
            'categories' => $categories,
            'logo' => $logo
        ]);
    }
    public function index()
    {
        $courses = course::all();
        $products = product::all();
        $products = $this->getProductMedias($products);
        $settings = settings::all();
        $logo = logo::first();
        $footer_columns = footer_column::whereIn('section_number', [1, 2, 3])->with('rows')->get();
        $footer_form_column = footer_column::where('section_number', 4)->with('images')->with('texts')->first();
        $user = Auth::user();
        $courseCategories = coursecategory::all();
        $categories = category::all();
        return view("user.categorycourse.index", [
            'categories' => $categories,
            'courseCategories' => $courseCategories,
            'logo' => $logo,
            'courses' => $courses,
            'products' => $products,
            'settings' => $settings,
            'footerColumns' => $footer_columns,
            'footer_form_column' => $footer_form_column,
            'user' => $user
        ]);
    }

    public function adminShow(coursecategory $coursecategory)
    {
        $logo = logo::first();
        return view("admin.categorycourse.single", [
            'coursecategory' => $coursecategory,
            'logo' => $logo
        ]);
    }
    public function show(coursecategory $coursecategory)
    {
        $courses = course::all();
        $products = product::all();
        $products = $this->getProductMedias($products);
        $settings = settings::all();
        $logo = logo::first();
        $footer_columns = footer_column::whereIn('section_number', [1, 2, 3])->with('rows')->get();
        $footer_form_column = footer_column::where('section_number', 4)->with('images')->with('texts')->first();
        $user = Auth::user();
        $logo = logo::first();
        $categories = category::all();
        return view("user.categorycourse.single", [
            'categories' => $categories,
            'coursecategory' => $coursecategory,
            'logo' => $logo,
            'courses' => $courses,
            'products' => $products,
            'settings' => $settings,
            'footerColumns' => $footer_columns,
            'footer_form_column' => $footer_form_column,
            'user' => $user
        ]);
    }

    public function edit(coursecategory $coursecategory)
    {
        $categories = coursecategory::all();
        $logo = logo::first();
        return view('admin.categorycourse.edit', [
            'coursecategory' => $coursecategory,
            'categories' => $categories,
            'logo' => $logo
        ]);
    }

    public function update(Request $request)
    {
        $category = coursecategory::find($request->id);
        if ($request->img) {
            if ($category->img) {
                Storage::disk('public')->delete($category->img);
            }
            $file = $request->file('img');
            $fileName = Str::uuid() . '.' . $file->getClientOriginalExtension();
            $imgPath = $file->storeAs('files', $fileName, 'public');
            $category->img = $imgPath;
        }
        if (!$request->img) {
            $category->img = null;
        }
        $category->title = $request->title;
        $category->description = $request->description;
        $category->show_in_home = $request->has('homes') ? 1 : 0;
        $category->parent_id = $request->parent_id;
        $category->save();
        return to_route('coursecategory.adminList');
    }

    public function delete(coursecategory $coursecategory)
    {
        if ($coursecategory->img) {
            if (Storage::disk('public')->exists($coursecategory->img)) {
                Storage::disk('public')->delete($coursecategory->img);
            }
        }
        $coursecategory->delete();
        return to_route('coursecategory.adminList');
    }
}
