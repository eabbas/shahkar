<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}" type="text/css">
    <title>forget password</title>

</head>

<body>
    <main
        class="w-full h-svh bg-[url('https://keenthemes.com/static/metronic/tailwind/dist/assets/media/images/2600x1200/bg-10.png')] bg-cover bg-no-repeat flex flex-row justify-center items-center">
        <div class="kt-card max-w-[370px] w-full">
            <form action="{{ route('user.savePassword') }}" method="post" class="flex flex-col gap-5 p-10 bg-white"
                id="form">
                @csrf
                <input type="hidden" name="user_id" value="{{ $user->id }}">
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
                        <img src="https://keenthemes.com/static/metronic/tailwind/dist/assets/media/brand-logos/google.svg"
                            class="size-3.5 shrink-0" alt="google logo">
                        استفاده از گوگل
                    </a>
                    <a href="#" class="kt-btn kt-btn-outline flex items-center justify-center">
                        <img src="https://keenthemes.com/static/metronic/tailwind/dist/assets/media/brand-logos/apple-black.svg"
                            class="size-3.5 shrink-0" alt="google logo">
                        استفاده از اپل
                    </a>
                </div>
                <div class="flex items-center gap-2">
                    <span class="border-t border-[#eeeaeb] w-full"></span>
                    <span class="text-xs text-[#1b1718] uppercase">یا</span>
                    <span class="border-t border-[#eeeaeb] w-full"></span>
                </div>
                <div class="flex flex-col gap-1">
                    <label for="password" class="kt-form-label text-[#0b0809]">رمز جدید</label>
                    <input type="password" name="password" id="password" class="kt-input">
                </div>
                <button onclick="checkAuth(event)"
                    class="py-1.5 rounded-md text-white text-sm font-bold bg-[#2b7fff] cursor-pointer hover:bg-[#2b7fff]/90">ثبت
                </button>
            </form>
        </div>
    </main>
    <script>
        let form = document.getElementById('form')

        function checkAuth(e) {
            let pass = document.getElementById('password')
            e.preventDefault()
            if (pass.value == '') {
                alert('رمز خود را وارد کنید!')
            } else {
                form.submit()
            }
        }
    </script>
</body>

</html>
