<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}" type="text/css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/IMG_20251225_131334_688.png') }}">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>شاهکار | ثبت نام</title>
</head>

<body>
    <main class="w-full lg:h-dvh flex flex-row items-center p-4">
        <div class="w-full lg:w-1/2 lg:h-full p-4 lg:p-10 flex flex-col items-center gap-10">
            <h2 class="text-2xl font-bold text-gray-800 text-center mt-10">ثبت نام</h2>
            <div class="flex flex-row items-center gap-2">
                <span class="text-gray-400 text-xs">حساب کاربری دارید؟</span>
                <a href="{{ route('user.login') }}" class="text-xs text-gray-800 font-bold">ورود</a>
            </div>
            <form action="{{ route('user.store') }}" method="post" class="flex flex-col gap-4" id="signupForm">
                @csrf
                <div class="w-full grid grid-cols-1 lg:grid-cols-2 gap-4">
                    <input type="text"
                        class="w-full outline-none px-5 py-2 border border-gray-300 rounded-lg placeholder-gray-300 transition-all duration-300 focus:border-blue-700/30 focus:bg-blue-100/30 focus:inset-shadow-sm inset-shadow-blue-700/10"
                        name="name" id="name" placeholder="نام">
                    <input type="text"
                        class="w-full outline-none px-5 py-2 border border-gray-300 rounded-lg placeholder-gray-300 transition-all duration-300 focus:border-blue-700/30 focus:bg-blue-100/30 focus:inset-shadow-sm inset-shadow-blue-700/10"
                        name="family" id="family" placeholder="نام خانوادگی">
                </div>
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
                <div class="w-full flex flex-row items-center gap-4">
                    <input type="number"
                        class="w-3/4 outline-none px-5 py-2 border border-gray-300 rounded-lg placeholder-gray-300 transition-all duration-300 focus:border-blue-700/30 focus:bg-blue-100/30 focus:inset-shadow-sm inset-shadow-blue-700/10"
                        name="code" id="code" placeholder="کد ارسال شده">
                    <button type="button"
                        class="w-1/4 py-2.5 lg:py-0 text-sm lg:text-base h-full bg-sky-500 flex items-center justify-center rounded-lg text-white transition-all duration-300 hover:bg-sky-600 cursor-pointer"
                        onclick="sendCode()" id="countDown">
                        ارسال کد
                    </button>
                </div>
                <div class="w-full flex flex-row items-center gap-2">
                    <input type="checkbox" name="accept" id="accept">
                    <label for="accept" class="text-sm text-[#0b0809] flex flex-row justify-start items-center gap-2 text-gray-400">
                        <a href="#" class="text-gray-800 font-bold">شرایط و قوانین</a>
                        را میپذیرم
                    </label>
                </div>
                <button onclick="checkAuth(event)"
                    class="py-3 rounded-md text-white text-sm font-bold bg-sky-500 cursor-pointer transition-all duration-300 hover:bg-sky-600">ثبت
                    نام</button>
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
                        counter()
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

        let countDown = document.getElementById('countDown')

        function counter() {
            let phoneNumber = document.getElementById('phoneNumber')
            countDown.classList.add('cursor-no-drop')
            countDown.classList.remove('cursor-pointer')
            countDown.classList.remove('hover:bg-sky-600')
            countDown.classList.add('hover:bg-sky-500/50')
            countDown.classList.remove('bg-sky-500')
            countDown.classList.add('bg-sky-500/50')
            countDown.setAttribute('disabled', true)
            countDown.setAttribute('dir', 'ltr')
            let count = 120
            let result = setInterval(() => {
                let minute = Math.floor(count / 60)
                let seconds = count % 60
                count -= 1
                if (count < 0) {

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': "{{ csrf_token() }}"
                        }
                    })
                    $.ajax({
                        url: "{{ route('removeActivationCode') }}",
                        type: "POST",
                        dataType: "json",
                        data: {
                            'phoneNumber': phoneNumber.value
                        },
                        success: function(data) {
                            console.log(data)
                            countDown.classList.remove('cursor-no-drop')
                            countDown.classList.add('bg-[#eb3254]')
                            countDown.classList.remove('bg-[#eb3254]/50')
                            countDown.classList.add('cursor-pointer')
                            countDown.classList.add('hover:bg-[#d52b4a]')
                            countDown.classList.remove('hover:bg-[#d52b4a]/50')
                            countDown.removeAttribute('disabled')
                            countDown.removeAttribute('dir')
                            countDown.innerText = "ارسال مجدد"
                        },
                        error: function() {
                            showMessage('open')
                            element.innerHTML = `
                                <span>❌</span>
                                <span class="text-shadw-lg">خطا در دریافت اطلاعات!</span>
                            `
                            message.children[0].appendChild(element)
                            setTimeout(() => {
                                showMessage('close')
                            }, 2500)
                        }
                    })
                    clearInterval(result)
                }
                countDown.innerText = minute.toString().padStart(2, "0") + " : " + seconds.toString().padStart(2,
                    "0");
            }, 1000)
        }

    </script>
</body>

</html>
