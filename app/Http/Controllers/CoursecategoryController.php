<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\coursecategory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CoursecategoryController extends Controller
{
    public function create(){
        $categories=coursecategory::all();
        return view("categorycourse.create",['categories'=>$categories]);
    }
    
    public function store(Request $request)
    {
        $path =""; /** میشود عکس دیفالت برای همه دسته بندی ها اگر عکس نداشت */

        if($request->img){
            $name = $request->img->getClientOriginalName();
            $fileName = Str::uuid()."_".$name; 
            $path = $request->img->storeAs('files', $fileName, 'public');
        }
       
        // if($request->homes){
        //     coursecategory::create([
        //         'title'=>$request->title , 
        //         'description' => $request->description ,
        //         'img' =>$path ,
        //         'parent_id' => $request->parent_id ,
        //         'show_in_home'=> $request->homes[0]
        //     ]);
        // }
        // else{
        //     coursecategory::create([
        //     'title'=>$request->title , 
        //     'description' => $request->description ,
        //     'parent_id' => $request->parent_id ,
        //     'img' =>$path ,

        //      ]);
        // }
        coursecategory::create([
            'title'        => $request->title,
            'description'  => $request->description,
            'parent_id'    => $request->parent_id,
            'img'          =>$path,
            'show_in_home' => $request->has('homes') ? 1 : 0,
        ]);

        return redirect('/coursecategory/categories');   
    }
    public function index()
    {
        $categories = coursecategory::all();
        return view("categorycourse.index" , ['categories'=>$categories]);
    }

    public function show(coursecategory $coursecategory){
        return view("categorycourse.single" , ['coursecategory'=>$coursecategory]);
    }

    public function edit(coursecategory $coursecategory){
        $categories = coursecategory::all();
        return view('categorycourse.edit' , ['coursecategory'=>$coursecategory , 'categories'=>$categories]);
    }

    public function update(Request $request)
    {
        $category = coursecategory::find($request->id);
         if ($request->img) {
            Storage::disk('public')->delete($category->img);
            $file = $request->file('img');
            $fileName = Str::uuid() . '.' . $file->getClientOriginalExtension();
            $imgPath = $file->storeAs('files', $fileName, 'public');
            $category->img = $imgPath;
        }
        $category->title = $request->title;
        $category->description = $request->description;
        $category->show_in_home = $request->homes;
        $category->parent_id =$request->parent_id;
        $category->save();
        return redirect('/coursecategory/categories');
    }

    public function delete(coursecategory $coursecategory){
        if(Storage::disk('public')->exists($coursecategory->img)) {
            Storage::disk('public')->delete($coursecategory->img);
        }
        $coursecategory->delete();
        return redirect('/coursecategory/categories');
    }

}
