@extends('app.document')
@section('title', 'صفحه مورد نظر یافت نشد')
@section('content')
    <style>
        .gradient_text {
            /* background: linear-gradient(68deg, rgba(83, 58, 253, .08) .78%, rgba(255, 140, 108, .8) 30.61%, rgba(218, 75, 254, .8) 79.02%), #e3ecf7; */
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
    <div class="w-full h-[83vh] relative">
        <img src="{{ asset('assets/img/background_404.jpg') }}" alt="" class="w-full h-full">
        <div class="w-full h-full absolute top-0 right-0  flex flex-col gap-8 justify-center items-center">
            <div class="lg:text-[240px] sm:text-[180px] text-[120px] lg:leading-45 sm:leading-40 leading-22 font-bold gradient_text gradient_box1"
                style="font-family: Yekan;">404</div>
            <div class="flex flex-col justify-center items-center gap-6">
                <h1 class="lg:text-3xl sm:text-xl text-sm font-bold text-[var(--text)]">صفحه مورد نظر شما <span
                        class="text-[var(--gold)]">یافت نشد!</span></h1>
                <p
                    class="lg:w-9/12 xl:w-15/24 w-7/12 text-[var(--text-secondary)] text-center max-xl:text-sm max-lg:text-xs max-sm:text-[9px]">
                    متاسفانه صفحه ای که به دنبال آن هستید وجود ندارد یا به آدرس دیگری منتقل شده است.</p>
            </div>
            <a href="{{ route('home') }}"
                class="lg:px-7 px-5 lg:py-3 py-1.5 flex gap-3 justify-center items-center rounded-2xl border-2 border-[var(--gold)] rezume_gradient transition_root">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                        class="sm:size-6 size-4 fill-[var(--gold)]">
                        <path
                            d="M272.5 5.7c9-7.6 22.1-7.6 31.1 0l264 224c10.1 8.6 11.4 23.7 2.8 33.8s-23.7 11.3-33.8 2.8L512 245.5V432c0 44.2-35.8 80-80 80H144c-44.2 0-80-35.8-80-80V245.5L39.5 266.3c-10.1 8.6-25.3 7.3-33.8-2.8s-7.3-25.3 2.8-33.8l264-224zM288 55.5L112 204.8V432c0 17.7 14.3 32 32 32h48V312c0-22.1 17.9-40 40-40H344c22.1 0 40 17.9 40 40V464h48c17.7 0 32-14.3 32-32V204.8L288 55.5zM240 464h96V320H240V464z">
                        </path>
                    </svg>
                </div>
                <span class="max-lg:text-xs max-sm:text-[10px] font-bold text-white">بازگشت به صفحه اصلی</span>
            </a>
        </div>
    </div>
    <div class="absolute top-0 opacity-0 invisible right-1/2 translate-x-1/2 w-3/4 lg:w-1/3 bg-white rounded-lg shadow-md transition-all duration-500 z-99999999"
        id="message">
        <div class="relative">
            <svg xmlns="http://www.w3.org/2000/svg" class="size-4 absolute top-1/2 -translate-y-1/2 right-3 cursor-pointer"
                onclick="showMessage('close')" viewBox="0 0 384 512">
                <path
                    d="M345 137c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-119 119L73 103c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l119 119L39 375c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l119-119L311 409c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-119-119L345 137z" />
            </svg>

        </div>
    </div>
    <div id="authenticationDiv"
        class="w-full h-dvh fixed top-0 left-0 flex justify-center items-center invisible opacity-0 max-md:px-5 transition-all duration-300 z-5">
        <div class="size-full bg-black/50 absolute backdrop-blur-[5px]" onclick="closeLoginForm()"></div>
        <div class="max-h-120 overflow-auto relative p-4 sm:p-10 w-full md:w-3/4 xl:w-1/2 bg-[#1B1C1E] rounded-2xl"
            style="scrollbar-width: none">
            <button
                class="absolute z-1 top-1 left-1 size-6 flex flex-col justify-center items-center cursor-pointer bg-white rounded-full "
                onclick="closeLoginForm()">
                <span class=" w-2/3 h-[2.5px] rounded-full bg-slate-500 rotate-45
              translate-y-1/2"></span>
                <span class="w-2/3 h-[2.5px] rounded-full bg-slate-500 -rotate-45 -translate-y-1/2"></span>
            </button>
            <h3 class="text-center text-sm font-bold text-gray-400">ابتدا وارد شوید</h3>
            <form action="{{ route('user.checkUserPopup') }}" class="flex flex-col items-center my-6 gap-3 w-full"
                method="post" id="loginForm">
                @csrf
                <input type="number"
                    class="placeholder-gray-400 focus:border-1 focus:border-[#d5a743] p-2 md:p-[9px] mb-1 rounded-[7px] border-1 border-[#DBDFE9] focus:outline-none w-full"
                    name="phoneNumber" id="phoneNumber" placeholder="شماره تلفن" required>
                <div class="w-full" id="login">
                    <div class="w-full flex flex-row items-center gap-3">
                        <input type="number"
                            class="w-8/12 p-2 placeholder-gray-400 focus:border-[#d5a743] md:p-[9px] rounded-[7px] border-1 border-[#DBDFE9] outline-none"
                            name="code" placeholder="کد" required id="code">
                        <button type="button"
                            class="w-4/12 text-xs lg:text-base h-full p-2 md:p-[9px] rounded-[7px] bg-[#d5a743] text-white cursor-pointer"
                            onclick="sendCode()" id="countDown">ارسال کد
                        </button>
                    </div>
                </div>
                <div class="w-full flex flex-row items-center justify-between" id="loginWay">
                    <a href="{{ route('user.forgetPassword') }}"
                        class="text-[#d5a743] inline-block max-md:my-1 my-4 max-md:text-sm">فراموشی رمز عبور</a>
                    <span class="text-[#d5a743] inline-block max-md:my-1 my-4 max-md:text-sm cursor-pointer"
                        onclick="loginWithPassKey(this)">ورود با رمز عبور</span>
                </div>
                <button onclick="check(event)"
                    class="focus:bg-[#d5a743] hover:bg-[#d5a743] transition-all duration-400 text-center w-full bg-[#d5a743] p-2 md:p-3 rounded-[10px] text-white cursor-pointer">
                    ورود
                </button>
                <div class="w-full text-center">
                    <span class="text-[#4B5675] mt-1 md:mt-5 max-md:text-sm">
                        هنوز عضو نشدی؟
                        <a href="{{ route('user.signup') }}" class="text-[#d5a743] mr-2">ثبت نام!</a>
                    </span>
                </div>
            </form>
        </div>
    </div>
    <!-- Modal سبد خرید -->
    <div id="shoppingCartModal" class="fixed inset-0 z-50 hidden overflow-y-auto">
        <div class="flex items-center justify-center min-h-screen p-4">
            <!-- بک‌گراند -->
            <div class="fixed inset-0 bg-black/50 backdrop-blur-sm" onclick="closeShoppingCart()"></div>

            <!-- محتوای مودال -->
            <div
                class="relative bg-white dark:bg-gray-800 rounded-2xl w-full max-w-2xl max-h-[90vh] overflow-hidden shadow-2xl">
                <!-- هدر -->
                <div
                    class="sticky top-0 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700 px-6 py-4 flex justify-between items-center">
                    <h3 class="text-xl font-bold text-gray-800 dark:text-white">
                        🛒 سبد خرید
                    </h3>
                    <button onclick="closeShoppingCart()"
                        class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                            </path>
                        </svg>
                    </button>
                </div>

                <!-- لیست آیتم‌ها -->
                <div id="cartItemsList" class="p-6 overflow-y-auto max-h-[calc(90vh-180px)]">
                    {{-- <div id="cartLoading" class="flex justify-center items-center py-12">
                        <div class="w-8 h-8 border-4 border-primary border-t-transparent rounded-full animate-spin"></div>
                    </div> --}}
                    <div id="cartEmpty" class="hidden text-center py-12">
                        <svg class="w-24 h-24 mx-auto text-gray-400" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                        <p class="mt-4 text-gray-500 dark:text-gray-400">سبد خرید شما خالی است</p>
                    </div>
                    <div id="cartItemsContainer" class="hidden space-y-4">
                        <!-- آیتم‌ها با جاوااسکریپت اضافه می‌شوند -->
                    </div>
                </div>

                <!-- فوتر با دکمه‌ها -->
                <div
                    class="sticky bottom-0 bg-white dark:bg-gray-800 border-t border-gray-200 dark:border-gray-700 px-6 py-4">
                    <div class="flex justify-between items-center gap-4 flex-wrap">
                        <div class="flex items-center gap-2">
                            <span class="text-gray-600 dark:text-gray-300">جمع کل:</span>
                            <span id="cartTotalPrice" class="text-xl font-bold text-white">0</span>
                            <span class="text-gray-300">تومان</span>
                        </div>
                        <div class="flex gap-3">
                            <button onclick="canceleOrder()"
                                class="px-6 py-2 border border-gray-300 dark:border-gray-600 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 transition"
                                id="cancelOrderBtn">
                                لغو همه
                            </button>
                            <button onclick="submitOrder()"
                                class="px-6 py-2 bg-yellow-500 text-white rounded-lg hover:bg-primary-dark transition disabled:opacity-50 disabled:cursor-not-allowed"
                                id="submitOrderBtn">
                                ثبت سفارشات
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
