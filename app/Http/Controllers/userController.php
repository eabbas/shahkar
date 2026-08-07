<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\logo;
use App\Models\phoneCode;
use App\Models\product;
use App\Models\role;
use App\Models\service;
use App\Models\User;
use App\Models\user_role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use DB;
use Log;

class userController extends Controller
{
    public function login()
    {
        return view('user.user.login');
    }
    public function loginWithCode()
    {
        return view('user.user.loginWithCode');
    }
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
    public function checkUserWithCode(Request $request)
    {
        $user = User::where('phoneNumber', $request['phoneNumber'])->first();
        Auth::login($user);
        return to_route('home')->with('success', "$user->name $user->family عزیز خوش آمدید.");
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
        $name = Auth::user()->name;
        Auth::logout();
        return to_route('home')->with('failure', $name . ' عزیز به امید دیدار.');
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
        if ($user['mainImage']) {
            Storage::disk('public')->delete($user['mainImage']);
        }
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
                'roles' => ['required'],
            ],
            [
                'name.required' => 'پر کردن این فیلد الزامی است.',
                'family.required' => 'پر کردن این فیلد الزامی است.',
                'phoneNumber.required' => 'پر کردن این فیلد الزامی است.',
                'email.email' => 'ساختار ایمیل را رعایت کنید.',
                'roles.required' => 'پر کردن این فیلد الزامی است.',
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
    public function profile($user = null)
    {
        if (!$user) {
            $user = Auth::user();
        }
        $roles = [];
        foreach ($user->roles as $role) {
            if ($role['name'] == 'admin') {
                $roles[] = 'ادمین';
            }
            if ($role['name'] == 'general_user') {
                $roles[] = 'کاربر عمومی';
            }
        }
        $user['persianRoles'] = $roles;
        $products = product::all();
        $cats = category::all();
        $logo = logo::first();
        $services = service::all();
        return view('user.user.profile', [
            'products' => $products,
            'user' => $user,
            'categories' => $cats,
            'logo' => $logo,
            'services' => $services,
        ]);
    }
    public function profileEdit(Request $request)
    {
        $user = User::find($request['id']);
        if ($user->mainImage) {
            $user->mainImage = asset('storage/' . $user['mainImage']);
        }
        return response()->json($user);
    }
    public function updateProfile(Request $request)
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
        if (isset($request['removedImg'])) {
            Storage::disk('public')->delete($request['removedImg']);
            $user = User::where('mainImage', $request['removedImg'])->first();
            $user->mainImage = null;
            $user->save();
        }
        $user = User::find($request->user_id);
        if (isset($request['mainImage'])) {
            if ($user['mainImage']) {
                Storage::disk('public')->delete($user['mainImage']);
            }
            $img_path = $request->mainImage->store('userImgs', 'public');
        } else {
            $img_path = $user['mainImage'];
        }
        $user->name = $request->name;
        $user->family = $request->family;
        $user->phoneNumber = $request->phoneNumber;
        $user->email = $request->email;
        if ($request->password) {
            $password = Hash::make($request->password);
            $user->password = $password;
        }
        $user->mainImage = $img_path;
        $user->save();
        return redirect()->back()->with('message',  'پروفایل شما با موفقیت به روزرسانی شد.');
    }
    // -----------------------------------------------------------




















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
