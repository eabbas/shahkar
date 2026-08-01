<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\course;
use App\Models\footer_column;
use App\Models\logo;
use App\Models\phoneCode;
use App\Models\product;
use App\Models\role;
use App\Models\settings;
use App\Models\User;
use App\Models\user_role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use DB;

class userController extends Controller
{
    // public function getProductMedias($products)
    // {
    //     foreach ($products as $product) {
    //         $product->load(['medias' => function ($query) {
    //             $query->select('product_id', DB::raw("IFNULL(path , 'images/noImage.png') path"))->where('is_main', 1);
    //         }]);
    //         foreach ($product->medias as $media) {
    //             $product['img'] = asset('storage/images/noImage.png');
    //             if (Storage::disk('public')->exists($media['path'])) {
    //                 $product['img'] = asset('storage/' . $media['path']);
    //             }
    //         }
    //     }
    //     return $products;
    // }
    public function login()
    {
        return view('user.user.login');
    }
    public function checkUser(Request $request)
    {
        $validated = $request->validate(
            [
                'phoneNumber' => ['required', 'min:11', 'max:11'],
                'password' => ['required'],
            ],
            [
                'phoneNumber.required' => 'شماره تلفن خود را وارد کنید.',
                'phoneNumber.min' => 'شماره تلفن باید 11 رقمی باشد',
                'phoneNumber.max' => 'شماره تلفن باید 11 رقمی باشد',
                'password.required' => 'رمز عبور خود را وارد کنید.',
            ]
        );
        $user = User::where('phoneNumber', $validated['phoneNumber'])->first();
        if ($user) {
            if (Hash::check($request['password'], $user['password'])) {
                Auth::login($user);
                return to_route('home')->with('success', "$user->name $user->family عزیز خوش آمدید.");
            } else {
                return redirect()->back()->with('failure', 'رمز عبور وارد شده اشتباه است.');
            }
        } else {
            return to_route('user.signup')->with('failure', 'شماره مورد نظر یافت نشد ، ابتدا ثبت نام کنید.');
        }
    }
    public function validate(Request $request)
    {
        $flag = false;
        $user = User::where('phoneNumber', $request->phoneNumber)->first();
        if ($user) {
            $password = Hash::check($request->password, $user->password);
            if ($password) {
                $flag = true;
            }
        }
        return response()->json($flag);
    }
    public function forgetPassword()
    {
        return view('user.user.forgetPassword');
    }
    public function send_code(Request $request)
    {
        $flag = false;
        $user = User::where('phoneNumber', $request->phoneNumber)->first();
        if ($user) {
            $flag = true;
        }
        if (!$flag) {
            $code = rand(1000, 10000);
            phoneCode::upsert(['phoneNumber' => $request->phoneNumber, 'code' => $code], ['phoneNumber'], ['code']);
            $apiKey = 'YTBhZjhlNDAtZGI1Zi00ZWQ1LTkwNmYtZWU2MWFhYTkzY2M0NTcxZGQ3ZjY2Yzk1MmNjZmFiM2M2ZjVmNjBhMDg2MTQ=';
            $client = new \IPPanel\Client($apiKey);
            $patternValues = [
                'activation_code' => $code,
            ];
            $bulkID = $client->sendPattern(
                '7fvdx77gveizxqn',  // pattern code
                '+983000505',  // originator
                $request->phoneNumber,  // recipient
                $patternValues,  // pattern values
            );
        }
        return response()->json($flag);
    }
    public function send_sms(Request $request)
    {
        $flag = false;
        $user = User::where('phoneNumber', $request->phoneNumber)->first();
        if ($user) {
            $flag = true;
        }
        if ($flag) {
            $code = rand(1000, 10000);
            phoneCode::upsert(['phoneNumber' => $request->phoneNumber, 'code' => $code], ['phoneNumber'], ['code']);
            $apiKey = 'YTBhZjhlNDAtZGI1Zi00ZWQ1LTkwNmYtZWU2MWFhYTkzY2M0NTcxZGQ3ZjY2Yzk1MmNjZmFiM2M2ZjVmNjBhMDg2MTQ=';
            $client = new \IPPanel\Client($apiKey);
            $patternValues = [
                'activation_code' => $code,
            ];
            $bulkID = $client->sendPattern(
                '7fvdx77gveizxqn',  // pattern code
                '+983000505',  // originator
                $request->phoneNumber,  // recipient
                $patternValues,  // pattern values
            );
        }
        return response()->json($flag);
    }
    public function setPassword(Request $request)
    {
        $user = User::where('phoneNumber', $request->phoneNumber)->first();
        return view('user.user.setPassword', ['user' => $user]);
    }
    public function savePassword(Request $request)
    {
        $user = User::find($request->user_id);
        $user->password = $request->password;
        $user->save();
        return to_route('user.login');
    }
    public function signup()
    {
        return view('user.user.signup');
    }
    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'name' => ['required'],
                'family' => ['required'],
                'phoneNumber' => ['required'],
                'password' => ['required'],
            ],
            [
                'name.required' => 'پر کردن این فیلد الزامی است.',
                'family.required' => 'پر کردن این فیلد الزامی است.',
                'phoneNumber.required' => 'پر کردن این فیلد الزامی است.',
                'password.required' => 'پر کردن این فیلد الزامی است.',
            ]
        );
        $userNumber = User::where('phoneNumber', $validated['phoneNumber'])->first();
        if ($userNumber) {
            return to_route('user.login')->with('failure', 'این شماره قبلا ثبت شده است ، لطفا وارد شوید.');
        }
        $user = User::create([
            'name' => $request->name,
            'family' => $request->family,
            'phoneNumber' => $request->phoneNumber,
            'password' => $request->password,
        ]);
        return to_route('user.login');
    }
    public function adminSignup()
    {
        $logo = logo::first();
        $roles = role::all();
        return view('admin.user.signup', ['logo' => $logo, 'roles' => $roles]);
    }
    public function adminStore(Request $request)
    {
        $validated = $request->validate(
            [
                'name' => ['required'],
                'family' => ['required'],
                'email' => ['nullable', 'email'],
                'phoneNumber' => ['required'],
                'password' => ['required'],
                'roles' => ['required'],
            ],
            [
                'name.required' => 'پر کردن این فیلد الزامی است.',
                'family.required' => 'پر کردن این فیلد الزامی است.',
                'phoneNumber.required' => 'پر کردن این فیلد الزامی است.',
                'password.required' => 'پر کردن این فیلد الزامی است.',
                'roles.required' => 'پر کردن این فیلد الزامی است.',
                'email.email' => 'ساختار ایمیل را رعایت کنید.',
            ]
        );
        $userNumber = User::where('phoneNumber', $request['phoneNumber'])->first();
        $userEmail = null;
        if ($request['email']) {
            $userEmail = User::where('email', $request['email'])->first();
        }
        if ($userEmail && $userNumber) {
            return redirect()->back()->with('failure', 'این شماره و ایمیل قبلا ثبت شده است ، لطفا وارد شوید.');
        }
        if ($userEmail) {
            return redirect()->back()->with('failure', 'این ایمیل قبلا ثبت شده است ، لطفا وارد شوید.');
        }
        if ($userNumber) {
            return redirect()->back()->with('failure', 'این شماره قبلا ثبت شده است ، لطفا وارد شوید.');
        }
        $user = User::create([
            'name' => $request->name,
            'family' => $request->family,
            'phoneNumber' => $request->phoneNumber,
            'password' => $request->password,
            'email' => $request->email,
        ]);
        foreach ($request->roles as $role) {
            user_role::create([
                'user_id' => $user['id'],
                'role_id' => $role
            ]);
        }
        return redirect()->back()->with('message', 'کاربر جدید برای سایت ایجاد شد.');
    }
    public function logout()
    {
        Auth::logout();
        return to_route('home')->with('failure', 'خارج شدید');
    }
    public function index()
    {
        $users = User::all();
        $logo = logo::first();
        return view('admin.user.index', [
            'users' => $users,
            'logo' => $logo
        ]);
    }
    public function delete(User $user)
    {
        $user->delete();
        return to_route('user.index')->with('message', $user['name'] . $user['family'] . " " . "حذف شد .");
    }
    public function edit(Request $request)
    {
        $user = User::find($request['id'])->load('roles');
        $roleIds = User::find($request['id'])->roles->pluck('id');
        $roles = role::all();
        return response()->json(['user' => $user, 'roles' => $roles, 'roleIds' => $roleIds]);
    }
    public function update(Request $request)
    {
        $validated = $request->validate(
            [
                'name' => ['required'],
                'family' => ['required'],
                'email' => ['nullable', 'email'],
                'phoneNumber' => ['required'],
            ],
            [
                'name.required' => 'پر کردن این فیلد الزامی است.',
                'family.required' => 'پر کردن این فیلد الزامی است.',
                'phoneNumber.required' => 'پر کردن این فیلد الزامی است.',
                'email.email' => 'ساختار ایمیل را رعایت کنید.',
            ]
        );
        $user = User::find($request->user_id);
        $name = $user->name;
        $user->name = $request->name;
        $user->family = $request->family;
        $user->phoneNumber = $request->phoneNumber;
        $user->email = $request->email;
        if ($request->password) {
            $password = Hash::make($request->password);
            $user->password = $password;
        }
        user_role::where('user_id', $user->id)->delete();
        foreach ($request->roles as $role) {
            user_role::create([
                'user_id' => $user->id,
                'role_id' => $role
            ]);
        }
        $user->save();
        return to_route('user.index')->with('message',  $name . ' به روز رسانی شد. ');
    }
    // -----------------------------------------------------------












    public function profile($user = null)
    {
        if (!$user) {
            $user = Auth::user();
        }
        $courses = course::all();
        $products = product::all();
        // $products = $this->getProductMedias($products);
        $settings = settings::all();
        $cats = category::all();
        $logo = logo::first();
        $footer_columns = footer_column::whereIn('section_number', [1, 2, 3])->with('rows')->get();
        $footer_form_column = footer_column::where('section_number', 4)->with('images')->with('texts')->first();
        return view('user.user.profile', [
            'courses' => $courses,
            'products' => $products,
            'user' => $user,
            'settings' => $settings,
            'categories' => $cats,
            'logo' => $logo,
            'footerColumns' => $footer_columns,
            'footer_form_column' => $footer_form_column,
        ]);
    }







    public function adminCourses(User $user)
    {
        $courses = $user->load('userCourses.course');
        $userCourses = $courses->toArray();
        $logo = logo::first();
        return view('admin.course.userCourse.courses', [
            'userCourses' => $userCourses,
            'courses' => $courses,
            'logo' => $logo,
        ]);
    }

    // public function courses(User $user)
    // {
    //     $courses = $user->load('userCourses.course');
    //     $userCourses = $courses->toArray();
    //     $courses = course::all();
    //     $logo = logo::first();
    //     $products = product::all();
    //     $products = $this->getProductMedias($products);
    //     $settings = settings::all();
    //     $footer_columns = footer_column::whereIn('section_number', [1, 2, 3])->with('rows')->get();
    //     $footer_form_column = footer_column::where('section_number', 4)->with('images')->with('texts')->first();
    //     $categories = category::all();
    //     return view('user.course.userCourse.courses', [
    //         'userCourses' => $userCourses,
    //         'user' => $user,
    //         'courses' => $courses,
    //         'logo' => $logo,
    //         'categories' => $categories,
    //         'courses' => $courses,
    //         'products' => $products,
    //         'settings' => $settings,
    //         'footerColumns' => $footer_columns,
    //         'footer_form_column' => $footer_form_column,
    //     ]);
    // }



    public function checkAuth(Request $request)
    {
        $data['validate'] = User::where('phoneNumber', $request->phoneNumber)->first();
        $data['checkCode'] = false;
        $phoneCode = phoneCode::where('phoneNumber', $request->phoneNumber)->first();
        if ($phoneCode->code == $request->code) {
            $data['checkCode'] = true;
        }
        return response()->json($data);
    }







    public function deleteAll(Request $request)
    {
        if (!isset($request->users)) {
            return redirect()->back();
        }
        foreach ($request->users as $user_id) {
            $user = User::find($user_id);
            $user->delete();
        }
        return redirect()->back();
    }

    public function removeActivationCode(Request $request)
    {
        $row = phoneCode::where('phoneNumber', $request->phoneNumber)->first();
        if ($row) {
            $row->delete();
        }
        return response()->json($row);
    }
}
