<?php

namespace App\Http\Controllers;

use App\Models\settings;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function createColor()
    {
        $settings = settings::all();
        return view('settings.colors.createColor', ['settings' => $settings]);
    }

    public function upsertColor(Request $request)
    {
        $datas = $request->except('_token');
        foreach ($datas as $key => $data) {
            $finalData[] = ['meta_key' => $key, 'meta_value' => $data];
        }
        settings::upsert($finalData, ['meta_key'], ['meta_value']);
        return to_route('home');
    }

    public function showColors()
    {
        dd(settings::all());
    }
}
