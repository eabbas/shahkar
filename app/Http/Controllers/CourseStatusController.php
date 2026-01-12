<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\coursestatus;
use App\Models\logo;

class CourseStatusController extends Controller
{
    public function create()
    {
        $logo = logo::first();
        return view("admin.courseStatus.create", ['logo' => $logo]);
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
        $logo = logo::first();
        return view("admin.courseStatus.index", [
            'statuses' => $statuses,
            'logo' => $logo
        ]);
    }

    public function show(coursestatus $coursestatus)
    {
        $logo = logo::first();
        return view("admin.courseStatus.single", [
            'status' => $coursestatus,
            'logo' => $logo
        ]);
    }

    public function edit(coursestatus $coursestatus)
    {
        $logo = logo::first();
        return view('admin.courseStatus.edit', [
            'status' => $coursestatus,
            'logo' => $logo
        ]);
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
