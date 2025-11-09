<?php

namespace App\Http\Controllers;

use App\Models\contactUs;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactUsController extends Controller
{
    public function create()
    {
        $user = Auth::user();
        if ($user) {
            return to_route('contactus-usersContact', [$user]);
        }
        if (!$user) {
            return view('contactus.create');
        }
    }
    public function usersContact(User $user)
    {
        return $user;
    }
    public function store(Request $request)
    {
        contactUs::create($request->all());
        return to_route('contactus-create');
    }
    public function index()
    {
        $contactus = contactUs::all();
        return view('contactus.index', ['contactus' => $contactus]);
    }
    public function show(contactUs $contactUs)
    {
        return view('contactus.show', ['cu' => $contactUs]);
    }
    public function edit(contactUs $contactUs)
    {
        return view('contactus.edit', ['cu' => $contactUs]);
    }
    public function update(Request $request)
    {
        $contactUs = contactUs::find($request->id);
        $contactUs->name = $request->name;
        $contactUs->family = $request->family;
        $contactUs->email = $request->email;
        $contactUs->phoneNum = $request->phoneNum;
        $contactUs->description = $request->description;
        $contactUs->save();
        return to_route('contactus-index');
    }
    public function delete(contactUs $contactUs)
    {
        $contactUs->delete();
        return to_route('contactus-index');
    }
}
