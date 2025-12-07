<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\coursestatus;

class CourseStatusController extends Controller
{
    public function create()
    {
        return view("status.create");
    }
    public function store(Request $request)
    {
            coursestatus::create([
                'title'=>$request->title , 
            ]);
        return redirect('/status/statuses');
        }
        
    public function index()
    {
        $statuses = coursestatus::all();
        return view("status.index" , ['statuses'=>$statuses]);
    }

    public function show(coursestatus $status)
    {
        return view("status.single" , ['status'=>$status]);
    }

    public function edit(coursestatus $status)
    {
        return view('status.edit' , ['status'=>$status]);
    }

    public function update(Request $request)
    {
        $status = coursestatus::find($request->id);
        $status->title = $request->title;
        $status->save();
        return redirect('/status/statuses');
    }

    public function delete(coursestatus $coursestatus)
    {
        $coursestatus->delete();
        return redirect('/status/statuses');
    }
}
