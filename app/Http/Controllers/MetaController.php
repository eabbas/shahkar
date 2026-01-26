<?php

namespace App\Http\Controllers;

use App\Models\logo;
use Illuminate\Http\Request;
use App\Models\meta;

class MetaController extends Controller
{
    public function create()
    {
        $logo = logo::first();
        return view("admin.meta.create", ['logo' => $logo]);
    }

    public function store(Request $request)
    {
        meta::create($request->all());
        return to_route("meta_index");
    }

    public function index()
    {
        $metas = meta::all();
        $logo = logo::first();
        return view("admin.meta.index", [
            "metas" => $metas,
            'logo' => $logo
        ]);
    }

    public function edit(meta $meta)
    {
        $logo = logo::first();
        return view("admin.meta.edit", [
            "meta" => $meta,
            'logo' => $logo
        ]);
    }

    public function update(Request $request, meta $meta)
    {
        $meta->title = $request->title;
        $meta->save();
        return to_route("meta_index");
    }

    public function delete(meta $meta)
    {
        $meta->delete();
        return to_route("meta_index");
    }

    public function show(meta $meta)
    {
        $logo = logo::first();
        return view("admin.meta.show", [
            "meta" => $meta,
            'logo' => $logo
        ]);
    }
}
