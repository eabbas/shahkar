<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use App\Models\contactUs;
use App\Models\footer_column;
use App\Models\logo;
use App\Models\course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\settings;
use Illuminate\Support\Facades\Storage;
use DB;

class ContactUsController extends Controller
{
    public function getProductMedias($products)
    {
        foreach ($products as $product) {
            $product->load(['medias' => function ($query) {
                $query->select('product_id', DB::raw("IFNULL(path , 'images/noImage.png') path"))->where('is_main', 1);
            }]);
            foreach ($product->medias as $media) {
                $product['img'] = asset('storage/images/noImage.png');
                if (Storage::disk('public')->exists($media['path'])) {
                    $product['img'] = asset('storage/' . $media['path']);
                }
            }
        }
        return $products;
    }
    public function create()
    {
        $courses = course::all();
        $products = product::all();
        $products = $this->getProductMedias($products);
        $settings = settings::all();
        $user = Auth::user();
        $cats = category::all();
        $logo = logo::first();
        $footer_columns = footer_column::whereIn('section_number', [1, 2, 3])->with('rows')->get();
        $footer_form_column = footer_column::where('section_number', 4)->with('images')->with('texts')->first();
        return view('user.contactus.create', [
            'courses' => $courses,
            'products' => $products,
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
        $logo = logo::first();
        return view('admin.contactus.index', [
            'contactus' => $contactus,
            'logo' => $logo
        ]);
    }

    public function show(contactUs $contactUs)
    {
        $logo = logo::first();
        return view('admin.contactus.show', [
            'cu' => $contactUs,
            'logo' => $logo
        ]);
    }

    public function edit(contactUs $contactUs)
    {
        $logo = logo::first();
        return view('admin.contactus.edit', [
            'cu' => $contactUs,
            'logo' => $logo
        ]);
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
        $courses = course::all();
        $products = product::all();
        $products = $this->getProductMedias($products);
        $settings = settings::all();
        $cats = category::all();
        $logo = logo::first();
        $footer_columns = footer_column::whereIn('section_number', [1, 2, 3])->with('rows')->get();
        $footer_form_column = footer_column::where('section_number', 4)->with('images')->with('texts')->first();
        return view('user.contactus.usersContacts.usersContact', [
            'courses' => $courses,
            'products' => $products,
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
        $courses = course::all();
        $settings = settings::all();
        $cats = category::all();
        $logo = logo::first();
        $footer_columns = footer_column::whereIn('section_number', [1, 2, 3])->with('rows')->get();
        $footer_form_column = footer_column::where('section_number', 4)->with('images')->with('texts')->first();
        $user = Auth::user();
        return view('user.contactus.usersContacts.usersContactEdit', [
            'courses' => $courses,
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
