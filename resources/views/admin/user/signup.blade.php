@extends('admin.app.dashboard')
@section('content')
    {{-- <main class="w-full h-svh bg-[url('https://keenthemes.com/static/metronic/tailwind/dist/assets/media/images/2600x1200/bg-10.png')] bg-cover bg-no-repeat flex flex-row justify-center items-center">
        <div class="kt-card max-w-[370px] w-full">
            <form action="{{route('user.store')}}" method="post" class="flex flex-col gap-5 p-10 bg-white">
                @csrf
                <div class="text-center mb-2.5">
                    <h3 class="text-lg font-medium text-mono leading-none mb-2.5">
                        ثبت نام
                    </h3>
                    <div class="flex items-center justify-center">
                        <span class="text-sm text-secondary-foreground me-1.5">
                            اکانت دارید؟
                        </span>
                        <a href="{{ route('user.login') }}" class="text-sm">ورود</a>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2.5">
                    <a href="#" class="kt-btn kt-btn-outline flex items-center justify-center">
                        <img src="https://keenthemes.com/static/metronic/tailwind/dist/assets/media/brand-logos/google.svg" class="size-3.5 shrink-0" alt="google logo">
                        استفاده از گوگل
                    </a>
                    <a href="#" class="kt-btn kt-btn-outline flex items-center justify-center">
                        <img src="https://keenthemes.com/static/metronic/tailwind/dist/assets/media/brand-logos/apple-black.svg" class="size-3.5 shrink-0" alt="google logo">
                        استفاده از اپل
                    </a>
                </div>
                <div class="flex items-center gap-2">
                    <span class="border-t border-[#eeeaeb] w-full"></span>
                    <span class="text-xs text-[#1b1718] uppercase">یا</span>
                    <span class="border-t border-[#eeeaeb] w-full"></span>
                </div>
                <div class="flex flex-col gap-1">
                    <label for="name" class="kt-form-label text-[#0b0809]">نام</label>
                    <input type="text" name="name" id="name" class="kt-input" placeholder="نام ">
                </div>
                <div class="flex flex-col gap-1">
                    <label for="name" class="kt-form-label text-[#0b0809]"> نام خانوادگی</label>
                    <input type="text" name="family" id="name" class="kt-input" placeholder="نام خانوادگی">
                </div>
                <div class="flex flex-col gap-1">
                    <label for="phoneNumber" class="kt-form-label text-[#0b0809]">شماره تماس</label>
                    <input type="number" name="phoneNumber" id="phoneNumber" class="kt-input" placeholder="09141234567">
                </div>
                <div class="flex flex-col gap-1">
                    <label for="password" class="kt-form-label text-[#0b0809]">گذرواژه</label>
                    <div class="kt-input">
                        <input type="password" name="password" id="password" class="outline-none">

                    </div>
                </div>
                <div class="flex flex-row justify-start items-center">
                    <input type="checkbox" name="accept" id="accept">
                    <label for="accept" class="text-sm text-[#0b0809] mr-2 flex flex-row justify-start items-center">
                        <a href="#">شرایط و قوانین</a>
                        را میپذیرم
                    </label>
                </div>
                <button class="py-1.5 rounded-md text-white text-sm font-bold bg-[#2b7fff] cursor-pointer hover:bg-[#2b7fff]/90">ثبت نام</button>
            </form>
        </div>
    </main> --}}

    <div class="w-full h-full pb-10">
        <h2 class="text-3xl text-center font-bold py-10 text-[#425A8B]">فرم ایجاد دسته بندی</h2>
        <div class="lg:w-2/3 w-full mx-auto border border-[#D5DFE4] rounded-[10px] text-[#425A8B] p-5 bg-white">
            <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data" class="w-full grid grid-cols-1 lg:grid-cols-2 gap-5">
                @csrf
                <div class="w-full flex flex-col">
                    <label for="catTitle" class="mb-2 flex flex-row items-center">
                        <span>
                            نام :
                            <span class="text-rose-500">*</span>
                        </span>
                    </label>
                    <input type="text" class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4]"
                        name="name" placeholder="نام را وارد کنید" required>
                </div>
                <div class="w-full flex flex-col">
                    <label for="catTitle" class="mb-2 flex flex-row items-center">
                        <span>
                            نام خانوادگی :
                            <span class="text-rose-500">*</span>
                        </span>
                    </label>
                    <input type="text" class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4]"
                        name="family" placeholder="نام خانوادگی را وارد کنید" required>
                </div>
                <div class="w-full flex flex-col">
                    <label for="catTitle" class="mb-2 flex flex-row items-center">
                        <span>
                            شماره تلفن :
                            <span class="text-rose-500">*</span>
                        </span>
                    </label>
                    <input type="number" class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4]"
                        name="phoneNumber" placeholder="0912345678" required>
                </div>
                <div class="w-full flex flex-col">
                    <label for="catTitle" class="mb-2 flex flex-row items-center">
                        <span>
                            رمز عبور :
                            <span class="text-rose-500">*</span>
                        </span>
                    </label>
                    <input type="password" class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4]"
                        name="password" required>
                </div>
        
                <div class="mt-5 text-center lg:col-span-2">
                    <button type="submit"
                        class="py-3 px-10 rounded-[10px] bg-[#1B84FF] hover:bg-[#056EE9] text-white cursor-pointer">ثبت</button>
                </div>
            </form>
        </div>
    </div>
@endsection
