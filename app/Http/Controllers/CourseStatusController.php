<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\status;

class CourseStatusController extends Controller
{
    public function create()
    {
        return view("status.create");
    }
    public function store(Request $request)
    {
            status::create([
                'title'=>$request->title , 
            ]);
        return redirect('/status/statuses');
        }
        
    public function index()
    {
        $statuses = status::all();
        return view("status.index" , ['statuses'=>$statuses]);
    }

    public function show(status $status)
    {
        return view("status.single" , ['status'=>$status]);
    }

    public function edit(status $status)
    {
        return view('status.edit' , ['status'=>$status]);
    }

    public function update(Request $request)
    {
        $status = status::find($request->id);
        $status->title = $request->title;
        $status->save();
        return redirect('/status/statuses');
    }

    public function delete(status $status)
    {
        $status->delete();
        return redirect('/status/statuses');
    }
}
