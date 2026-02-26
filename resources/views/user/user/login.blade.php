<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}" type="text/css">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/IMG_20251225_131334_688.png') }}">
    <title>شاهکار | ورود</title>
    
</head>
<body>
    {{-- <main class="w-full h-svh bg-[url('https://keenthemes.com/static/metronic/tailwind/dist/assets/media/images/2600x1200/bg-10.png')] bg-cover bg-no-repeat flex flex-row justify-center items-center">
        <div class="kt-card max-w-[370px] w-full">
            <form action="{{route('user.checkUser')}}" method="post" class="flex flex-col gap-5 p-10 bg-white">
                @csrf
                <div class="text-center mb-2.5">
                    <h3 class="text-lg font-medium text-mono leading-none mb-2.5">
                        ورود
                    </h3>
                    <div class="flex items-center justify-center">
                        <span class="text-sm text-secondary-foreground me-1.5">
                            اکانت ندارید؟
                        </span>
                        <a href="{{ route('user.signup') }}" class="text-sm">ثبت نام</a>
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
                    <label for="phoneNumber" class="kt-form-label text-[#0b0809]">شماره تلفن</label>
                    <input type="number" name="phoneNumber" id="phoneNumber" class="kt-input" placeholder="09141234567">
                </div>
                <div class="flex flex-col gap-1">
                    <label for="password" class="kt-form-label text-[#0b0809]">گذرواژه</label>
                    
                    <input type="password" name="password" id="password" class="kt-input outline-none">
                    
                </div>
                <div class="flex flex-row justify-start items-center">
                    <span for="accept" class="text-sm text-[#0b0809] mr-2 flex flex-row justify-start items-center">
                        گذرواژه خود را
                        <a href="{{route('user.forgetPassword')}}" class="text-blue-500 mr-1"> فراموش کردم </a>
                    </span>
                </div>
                <button class="py-1.5 rounded-md text-white text-sm font-bold bg-[#2b7fff] cursor-pointer hover:bg-[#2b7fff]/90">ورود </button>
            </form>
        </div>
    </main> --}}
    <div class="absolute z-999 top-0 opacity-0 invisible right-1/2 translate-x-1/2 w-2/3 lg:w-1/3 bg-white rounded-lg shadow-md transition-all duration-500"
        id="message">
        <div class="relative">
            <svg xmlns="http://www.w3.org/2000/svg"
                class="size-4 absolute top-1/2 -translate-y-1/2 right-3 cursor-pointer" onclick="showMessage('close')"
                viewBox="0 0 384 512">
                <path
                    d="M345 137c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-119 119L73 103c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l119 119L39 375c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l119-119L311 409c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-119-119L345 137z" />
            </svg>

        </div>
    </div>
    <main class="w-full lg:h-dvh flex flex-row items-center p-4">
        <div class="w-full lg:w-1/2 lg:h-full p-4 lg:p-10 flex flex-col items-center gap-10">
            <h2 class="text-2xl font-bold text-gray-800 text-center mt-10">ورود</h2>
            <div class="flex flex-row items-center gap-2">
                <span class="text-gray-400 text-xs">حساب کاربری ندارید؟</span>
                <a href="{{ route('user.signup') }}" class="text-xs text-gray-800 font-bold">ثبت نام</a>
            </div>
            <form action="{{ route('user.checkUser') }}" method="post" class="w-9/12 flex flex-col gap-4" id="signupForm">
                @csrf
                <div class="w-full">
                    <input type="number"
                        class="w-full outline-none px-5 py-2 border border-gray-300 rounded-lg placeholder-gray-300 transition-all duration-300 focus:border-blue-700/30 focus:bg-blue-100/30 focus:inset-shadow-sm inset-shadow-blue-700/10"
                        name="phoneNumber" id="phoneNumber" placeholder="شماره تلفن">
                </div>
                <div class="w-full">
                    <input type="password"
                        class="w-full outline-none px-5 py-2 border border-gray-300 rounded-lg placeholder-gray-300 transition-all duration-300 focus:border-blue-700/30 focus:bg-blue-100/30 focus:inset-shadow-sm inset-shadow-blue-700/10"
                        name="password" id="password" placeholder="رمز عبور">
                </div>
                <div class="w-full flex flex-row items-center gap-2">
                    <div for="accept" class="text-sm text-[#0b0809] flex flex-row justify-start items-center gap-2 text-gray-400">
                       رمز عبور خود را
                        <a href="{{route('user.forgetPassword')}}" class="text-gray-800 font-bold">فراموش کردم</a>
                    </div>
                </div>
                <button onclick="checkAuth(event)"
                    class="py-3 rounded-md text-white text-sm font-bold bg-sky-500 cursor-pointer transition-all duration-300 hover:bg-sky-600">ورود</button>
            </form>
        </div>
        <div
            class="hidden lg:flex items-center justify-center w-1/2 h-full bg-[url('{{ asset('assets/img/bg2.jpg') }}')] bg-center bg-no-repeat rounded-lg relative">
            <a href="{{ route('home') }}"
                class="px-4 py-1.5 bg-gray-700/30 rounded-full flex flex-row items-center absolute top-5 right-5 transition-all duration-300 hover:bg-gray-700/50">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    class="size-3 fill-white" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 12H5m14 0-4 4m4-4-4-4" />
                </svg>
                <span class="text-xs text-white">بازگشت به خانه</span>
            </a>
            <img src="{{ asset('assets/img/IMG_20251225_131336_507.png') }}" class="w-2/3 h-auto" alt="">
        </div>
    </main>
</body>
</html>