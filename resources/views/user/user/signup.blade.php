<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}" type="text/css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>signup</title>
</head>

<body>
    <main
        class="w-full h-svh bg-[url('https://keenthemes.com/static/metronic/tailwind/dist/assets/media/images/2600x1200/bg-10.png')] bg-cover bg-no-repeat flex flex-row justify-center items-center">
        <div class="kt-card max-w-[370px] w-full">
            <form action="{{ route('user.store') }}" method="post" class="flex flex-col gap-5 p-10 bg-white"
                id="signupForm">
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
                    <label for="name" class="kt-form-label text-[#0b0809]">نام</label>
                    <input type="text" name="name" id="name" class="kt-input" placeholder="نام ">
                </div>
                <div class="flex flex-col gap-1">
                    <label for="name" class="kt-form-label text-[#0b0809]"> نام خانوادگی</label>
                    <input type="text" name="family" id="name" class="kt-input" placeholder="نام خانوادگی">
                </div>
                <div class="flex flex-col gap-1">
                    <label for="phoneNumber" class="kt-form-label text-[#0b0809]">شماره تماس</label>
                    <input type="number" name="phoneNumber" id="phoneNumber" class="kt-input" maxlength="11"
                        placeholder="09141234567">
                </div>
                <div class="flex flex-col gap-1">
                    <label for="password" class="kt-form-label text-[#0b0809]">گذرواژه</label>
                    <div class="kt-input">
                        <input type="password" name="password" id="password" class="outline-none">

                    </div>
                </div>
                <div class="flex flex-col gap-1">
                    <label for="code" class="kt-form-label text-[#0b0809]">کد ارسال شده</label>
                    <div class="flex flex-row items-center gap-3">
                        <input type="number" name="code" id="code"
                            class="outline-none inline-block w-9/12 border border-gray-300">
                        <button type="button"
                            class="py-3 inline-block w-3/12 bg-sky-500 rounded-lg text-white cursor-pointer"
                            onclick="sendCode()">
                            ارسال کد
                        </button>

                    </div>
                </div>
                <div class="flex flex-row justify-start items-center">
                    <input type="checkbox" name="accept" id="accept">
                    <label for="accept" class="text-sm text-[#0b0809] mr-2 flex flex-row justify-start items-center">
                        <a href="#">شرایط و قوانین</a>
                        را میپذیرم
                    </label>
                </div>
                <button onclick="checkAuth(event)"
                    class="py-1.5 rounded-md text-white text-sm font-bold bg-[#2b7fff] cursor-pointer hover:bg-[#2b7fff]/90">ثبت
                    نام</button>
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

        let signupForm = document.getElementById('signupForm')

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
                        if (user.validate) {
                            alert("شما قبلا با این شماره ثبت نام کرده اید")
                            location.assign("{{ route('user.login') }}")
                        } else {
                            if (!user.checkCode) {
                                alert('کد وارد شده نامعتبر')
                            }
                            if (user.checkCode) {
                                signupForm.submit()
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
