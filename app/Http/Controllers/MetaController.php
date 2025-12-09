<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\meta;

class MetaController extends Controller
{
    public function create(){
        return view("meta.create");
    }

    public function store(Request $request){
        meta::create($request->all());
        return to_route("meta_index");
    }

    public function index(){
        $metas =meta::all();
        return view("meta.index",["metas" => $metas]);
    }

    public function edit(meta $meta){
        return view("meta.edit",["meta" => $meta]);
    }

    public function update(Request $request , meta $meta){
        $meta -> title = $request -> title;
        $meta -> save();
        return to_route("meta_index");
    }

    public function delete(meta $meta){
        $meta -> delete();
        return to_route("meta_index");
    }

    public function show(meta $meta){
       return view("meta.show",["meta" => $meta]);
    }
}
