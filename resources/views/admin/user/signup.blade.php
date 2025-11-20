<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>signup</title>
</head>

<body>
    @extends('admin.app.dashboard')
    @section('content')
    <main class="w-full h-svh bg-[url('https://keenthemes.com/static/metronic/tailwind/dist/assets/media/images/2600x1200/bg-10.png')] bg-cover bg-no-repeat flex flex-row justify-center items-center">
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
                    <label for="email" class="kt-form-label text-[#0b0809]">ایمیل</label>
                    <input type="email" name="email" id="email" class="kt-input" placeholder="test@example.com">
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
    </main>
    @endsection
</body>

</html>