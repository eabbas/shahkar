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
            'title' => $request->title,
        ]);
        return to_route('status.list');
    }

    public function index()
    {
        $statuses = coursestatus::all();
        return view("status.index", ['statuses' => $statuses]);
    }

    public function show(coursestatus $coursestatus)
    {
        return view("status.single", ['status' => $coursestatus]);
    }

    public function edit(coursestatus $coursestatus)
    {
        return view('status.edit', ['status' => $coursestatus]);
    }

    public function update(Request $request)
    {
        $status = coursestatus::find($request->id);
        $status->title = $request->title;
        $status->save();
        return to_route('status.list');
    }

    public function delete(coursestatus $coursestatus)
    {
        $coursestatus->delete();
        return to_route('status.list');
    }
}
