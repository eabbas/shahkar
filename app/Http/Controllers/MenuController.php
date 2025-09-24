<?php

namespace App\Http\Controllers;

use App\Models\menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function create()
    {
        $items = menu::select('title', 'id')->get();
        return view('menu.create', ['items' => $items]);
    }
    public function store(Request $request)
    {
        menu::create([
            'title' => $request->title,
            'description' => $request->description,
            'link' => $request->link,
            'icon' => $request->icon,
            'image' => $request->image,
            'priority' => $request->priority,
            'active' => $request->activity,
            'parent_id' => $request->parent_id
        ]);
        return to_route('menu-index');
    }
    public function index()
    {
        $items = menu::all();
        return view('menu.index', ['items' => $items]);
    }
    public function show(menu $menu)
    {
        $menu->parent;
        return view('menu.show', ['menu' => $menu]);
    }
    public function edit(menu $menu)
    {
        $items = menu::select('title', 'id')->get();
        return view('menu.edit', ['menu' => $menu, 'items' => $items]);
    }
    public function update(Request $request)
    {
        $menu = menu::find($request->menu_id);
        $menu->title = $request->title;
        $menu->description = $request->description;
        $menu->link = $request->link;
        $menu->icon = $request->icon;
        $menu->image = $request->image;
        $menu->priority = $request->priority;
        $menu->active = $request->activity;
        $menu->parent_id = $request->parent_id;
        $menu->save();
        return to_route('menu-index');
    }
    public function delete(menu $menu)
    {
        $menu->delete();
        return to_route('menu-index');
    }
}
