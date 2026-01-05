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
            <form action="{{ route('user.setPassword') }}" method="post" class="flex flex-col gap-5 p-10 bg-white" id="loginForm">
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
                    <label for="phoneNumber" class="kt-form-label text-[#0b0809]">شماره تلفن</label>
                    <input type="number" name="phoneNumber" id="phoneNumber" class="kt-input"
                        placeholder="09141234567">
                </div>

                <div class="w-full flex flex-row gap-3 items-end">
                    <div class="w-2/3 flex flex-col gap-1">
                        <label for="code" class="kt-form-label text-[#0b0809]">کد</label>
                        <input type="number" name="code" id="code" class="kt-input outline-none">
                    </div>
                    <div class="w-1/3 bg-sky-500 hover:bg-sky-600 rounded-md cursor-pointer">
                        <button onclick="sendCode()" type="button" class="block w-full text-xs text-center text-white py-[9px]">
                            ارسال کد
                        </button>
                    </div>
                </div>
                <button onclick="checkAuth(event)"
                    class="py-1.5 rounded-md text-white text-sm font-bold bg-[#2b7fff] cursor-pointer hover:bg-[#2b7fff]/90">ورود
                </button>
            </form>
        </div>
    </main>
    <script>
        let code = document.getElementById('code')

        function sendCode() {
            let phoneNumber = document.getElementById('phoneNumber')
            if (phoneNumber.value == "") {
                alert('لطفا شماره تلفن را وارد نمایید')
            } else {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    }
                })
                $.ajax({
                    url: "{{ route('user.sendSMS') }}",
                    type: "POST",
                    dataType: "json",
                    data: {
                        'phoneNumber': phoneNumber.value,
                    },
                    success: function(data) {
                        console.log(data)
                    },
                    error: function() {
                        alert('خطا در دریافت داده')
                    }
                })
            }
        }

        let loginForm = document.getElementById('loginForm')

        function checkAuth(e) {
            e.preventDefault()
            let phoneNumber = document.getElementById('phoneNumber')
            if (phoneNumber.value == "" && code.value == "") {
                alert('لطفا همه فیلد هارا پر کنید')
            } else {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    }
                })
                $.ajax({
                    url: "{{ route('user.checkAuth') }}",
                    type: "POST",
                    dataType: "json",
                    data: {
                        'phoneNumber': phoneNumber.value,
                        'code': code.value
                    },
                    success: function(user) {
                        console.log(user)
                        if (!user.validate) {
                            alert("شما قبلا با این شماره ثبت نام نکرده اید")
                            location.assign("{{ route('user.login') }}")
                        } else {
                            if (!user.checkCode) {
                                alert('کد وارد شده نامعتبر')
                            }
                            if (user.checkCode) {
                                loginForm.submit()
                            }
                        }
                    },
                    error: function() {
                        alert('خطا در بارگیری اطلاعات')
                    }
                })
            }
        }
    </script>
</body>

</html>
