<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\contactUs;
use App\Models\footer_column;
use App\Models\logo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\settings;

class ContactUsController extends Controller
{
    public function create()
    {
        if (!Auth::check()) {
            return to_route('user.login');
        }
        $settings = settings::all();
        $user = Auth::user();
        $cats = category::all();
        $logo = logo::all();
        $footer_columns = footer_column::whereIn('section_number', [1, 2, 3])->with('rows')->get();
        $footer_form_column = footer_column::whereIn('section_number', [4])->with('images')->with('texts')->get();
        return view('user.contactus.create', [
            'settings' => $settings,
            'user' => $user,
            'categories' => $cats,
            'logo' => $logo,
            'footerColumns' => $footer_columns,
            'footer_form_column' => $footer_form_column,
        ]);
    }

    public function store(Request $request)
    {
        contactUs::create($request->all());
        return to_route('contactus-create');
    }

    public function index()
    {
        $contactus = contactUs::all();
        return view('admin.contactus.index', ['contactus' => $contactus]);
    }

    public function show(contactUs $contactUs)
    {
        return view('admin.contactus.show', ['cu' => $contactUs]);
    }

    public function edit(contactUs $contactUs)
    {
        return view('admin.contactus.edit', ['cu' => $contactUs]);
    }

    public function update(Request $request)
    {
        $contactUs = contactUs::find($request->id);
        $contactUs->user_id = $request->user_id;
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

    public function usersContact(User $user)
    {
        $settings = settings::all();
        $cats = category::all();
        $logo = logo::all();
        $footer_columns = footer_column::whereIn('section_number', [1, 2, 3])->with('rows')->get();
        $footer_form_column = footer_column::whereIn('section_number', [4])->with('images')->with('texts')->get();
        return view('user.contactus.usersContacts.usersContact', [
            'settings' => $settings,
            'user' => $user,
            'categories' => $cats,
            'logo' => $logo,
            'footerColumns' => $footer_columns,
            'footer_form_column' => $footer_form_column,
        ]);
    }

    public function usersContactEdit(contactUs $contactUs)
    {
        $settings = settings::all();
        $cats = category::all();
        $logo = logo::all();
        $footer_columns = footer_column::whereIn('section_number', [1, 2, 3])->with('rows')->get();
        $footer_form_column = footer_column::whereIn('section_number', [4])->with('images')->with('texts')->get();
        $user = Auth::user();
        return view('user.contactus.usersContacts.usersContactEdit', [
            'settings' => $settings,
            'cu' => $contactUs,
            'categories' => $cats,
            'logo' => $logo,
            'footerColumns' => $footer_columns,
            'footer_form_column' => $footer_form_column,
            'user' => $user
        ]);
    }

    public function usersContactUpdate(Request $request)
    {
        $contactUs = contactUs::find($request->id);
        $contactUs->user_id = $request->user_id;
        $contactUs->name = $request->name;
        $contactUs->family = $request->family;
        $contactUs->email = $request->email;
        $contactUs->phoneNum = $request->phoneNum;
        $contactUs->description = $request->description;
        $contactUs->save();
        $user = Auth::user();
        return to_route('contactus-usersContact-index', [$user]);
    }

    public function usersContactDelete(contactUs $contactUs)
    {
        $user = Auth::user();
        $contactUs->delete();
        return to_route('contactus-usersContact-index', [$user]);
    }
}
