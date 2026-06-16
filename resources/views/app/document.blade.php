<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> --}}
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}" type="text/css">
    <title>@yield('title')</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/IMG_20251225_131334_688.png') }}">
    <script src="{{ asset('assets/js/tailwind.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <style>
        :root {
            <?php
            foreach ($settings as $setting) {
                echo $setting->meta_key . ': ' . $setting->meta_value . ';';
            }
            ?>
        }
    </style>
</head>

<body>

    {{-- اسلایدر نوشته شده توسط مهدی بندعلی رو اضافه کردیم --}}
    {{-- و چون که داخل کد های هدر کامنت بود به همین دلیل نمیشد کل هدر رو کامنت کرد و از این رو پاکش کردم اما در برنچ زیر آخرین نسخه هدر موجود هست --}}
    {{-- mr.olyafam_debuging --}}


    {{-- mahdi slider --}}
    <div class="w-full h-dvh relative flex justify-center items-center">
        <img src="https://shahkar.art/assets/img/slider-bg.jpg"
            class="object-cover w-full h-full absolute top-0 right-0 z-1">
        <img src="https://shahkar.art/assets/img/slider-logo.png" alt=""
            class="object-cover max-w-11/12 max-h-11/12 min-w-5/12 min-h-6/12 absolute top-20 sm:top-0 right-auto left-auto z-2">
        <div class="w-full h-full bg-black absolute top-0 right-0 z-3 opacity-[30%]"></div>
        <div class="2xl:container 2xl:w-11/12 w-11/12 absolute top-0 flex justify-between items-center py-4 z-4">
            <div class="">
                <ul class="flex items-center gap-5 lg:gap-10 text-white max-sm:hidden">
                    <li><a href="{{ route('home') }}">خانه</a></li>
                    <li><a href="{{ route('product-index') }}">محصولات</a></li>
                    <li><a href="{{ route('aboutus-index') }}">درباره ما</a></li>
                    <li><a href="{{ route('contactus-create') }}">تماس با ما</a></li>
                </ul>
                <div class="flex flex-col items-center gap-[6px] sm:hidden cursor-pointer"
                    onclick="hamburgerMenu('open')">
                    <span class="w-[30px] h-[2px] bg-white rounded-full"></span>
                    <span class="w-[30px] h-[2px] bg-white rounded-full"></span>
                    <span class="w-[30px] h-[2px] bg-white rounded-full"></span>
                </div>
            </div>
            <div class="w-1/3 rounded-full border border-white max-md:hidden">
                <form action="{{ route('search-search') }}" method="post"
                    class="px-4 flex gap-5 items-center rounded-lg w-full">
                    @csrf
                    <button type="submit" class="size-6">
                        <svg viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                            class="cursor-pointer">
                            <path
                                d="M22.0254 22L17.7833 17.7579M17.7833 17.7579C19.4537 16.0875 20.4869 13.7798 20.4869 11.2308C20.4869 6.13276 16.3542 2 11.2562 2C6.15815 2 2.02539 6.13276 2.02539 11.2308C2.02539 16.3288 6.15815 20.4615 11.2562 20.4615C13.8052 20.4615 16.1129 19.4284 17.7833 17.7579Z"
                                stroke="white" stroke-width="1.5" stroke-linecap="round">
                            </path>
                        </svg>
                    </button>
                    <input type="text" class="w-full py-2.5 outline-none text-white text-xs" name="searchedValue"
                        placeholder="کالای مورد نظر خود را جستجو کنید." required>
                    <button type="button" class="size-5 flex flex-col justify-center items-center cursor-pointer"
                        onclick="emptyInput(this)">
                        <span class="w-full h-[2.5px] rounded-full bg-white rotate-45 translate-y-1/2"></span>
                        <span class="w-full h-[2.5px] rounded-full bg-white -rotate-45 -translate-y-1/2"></span>
                    </button>
                </form>
            </div>
            <div class="flex items-center gap-3.5">
                <!-- buttons -->
                <!-- search magnifier -->
                <div id="searchBar" class="transition-all duration-300 md:hidden" onclick="showSearchbar()">
                    <button type="button" class="size-6 cursor-pointer" onclick="showSearchBar('open')">
                        <svg viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M22.0254 22L17.7833 17.7579M17.7833 17.7579C19.4537 16.0875 20.4869 13.7798 20.4869 11.2308C20.4869 6.13276 16.3542 2 11.2562 2C6.15815 2 2.02539 6.13276 2.02539 11.2308C2.02539 16.3288 6.15815 20.4615 11.2562 20.4615C13.8052 20.4615 16.1129 19.4284 17.7833 17.7579Z"
                                stroke="white" stroke-width="1.5" stroke-linecap="round">
                            </path>
                        </svg>
                    </button>
                </div>
                <span class="bg-gray-100 h-6 w-[1px] rounded-full"></span>
                <!-- end search magnifier -->
                <!-- shopping cart -->
                <div class="cursor-pointer relative menu-li">
                    <svg width="24" height="28" viewBox="0 0 24 22" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M2.27631 1C2.27631 0.585786 2.61209 0.25 3.02631 0.25H4.7082C5.83902 0.25 6.79416 1.08931 6.93953 2.21075L7.00943 2.75H22.0303C23.0663 2.75 23.8755 3.64496 23.7715 4.6757L22.9995 12.3263C22.8319 13.9864 21.4345 15.25 19.7659 15.25H7.77631C7.22402 15.25 6.77631 15.6977 6.77631 16.25C6.77631 16.8023 7.22402 17.25 7.77631 17.25H22.0263C22.4405 17.25 22.7763 17.5858 22.7763 18C22.7763 18.4142 22.4405 18.75 22.0263 18.75H21.6483C21.7312 18.9846 21.7763 19.237 21.7763 19.5C21.7763 20.7426 20.7689 21.75 19.5263 21.75C18.2837 21.75 17.2763 20.7426 17.2763 19.5C17.2763 19.237 17.3214 18.9846 17.4043 18.75H11.6483C11.7312 18.9846 11.7763 19.237 11.7763 19.5C11.7763 20.7426 10.7689 21.75 9.52631 21.75C8.28367 21.75 7.27631 20.7426 7.27631 19.5C7.27631 19.2272 7.32484 18.9658 7.41375 18.7239C6.20485 18.5483 5.27631 17.5076 5.27631 16.25C5.27631 15.0932 6.06201 14.1199 7.12889 13.8346C6.96436 13.5384 6.85248 13.2075 6.8066 12.8535L5.45198 2.40358C5.40352 2.02977 5.08514 1.75 4.7082 1.75H3.02631C2.61209 1.75 2.27631 1.41421 2.27631 1ZM18.7763 19.5C18.7763 19.0858 19.1121 18.75 19.5263 18.75C19.9405 18.75 20.2763 19.0858 20.2763 19.5C20.2763 19.9142 19.9405 20.25 19.5263 20.25C19.1121 20.25 18.7763 19.9142 18.7763 19.5ZM9.52631 18.75C9.11209 18.75 8.77631 19.0858 8.77631 19.5C8.77631 19.9142 9.11209 20.25 9.52631 20.25C9.94052 20.25 10.2763 19.9142 10.2763 19.5C10.2763 19.0858 9.94052 18.75 9.52631 18.75ZM19.7659 13.75H9.53378C8.90555 13.75 8.37491 13.2837 8.29415 12.6607L7.20388 4.25H22.0303C22.1783 4.25 22.2939 4.37785 22.2791 4.5251L21.507 12.1757C21.4168 13.0696 20.6643 13.75 19.7659 13.75Z"
                            fill="white"></path>
                        <path
                            d="M5.49213 12.1641C5.36509 11.91 5.10531 11.749 4.82123 11.749H3.02631C2.87716 11.749 2.73259 11.7935 2.61029 11.875L2.49604 11.9688L2.49506 11.9697C2.20217 12.2626 2.20217 12.7374 2.49506 13.0303L2.49604 13.0312C2.63669 13.1719 2.8274 13.251 3.02631 13.251H4.82221C5.08202 13.251 5.32322 13.1164 5.4599 12.8955C5.57945 12.7021 5.60379 12.4665 5.53022 12.2549L5.49311 12.166L5.49213 12.1641Z"
                            fill="white"></path>
                        <path
                            d="M5.09467 8.99902C5.09467 8.58481 4.75888 8.24902 4.34467 8.24902H2.02631C1.87716 8.24902 1.73259 8.29347 1.61029 8.375L1.49604 8.46875L1.49506 8.46973C1.20217 8.76262 1.20217 9.23738 1.49506 9.53027L1.49604 9.53125L1.61029 9.625C1.73259 9.70653 1.87716 9.75098 2.02631 9.75098H4.34467C4.75888 9.75098 5.09467 9.41519 5.09467 9.00098V8.99902Z"
                            fill="white"></path>
                        <path
                            d="M3.94428 4.75293L3.86713 4.74902H1.02631C0.877156 4.74902 0.732594 4.79347 0.610295 4.875L0.496037 4.96875L0.495061 4.96973C0.202167 5.26262 0.202167 5.73738 0.495061 6.03027L0.496037 6.03125L0.610295 6.125C0.732594 6.20653 0.877156 6.25098 1.02631 6.25098H3.86713C4.2553 6.25098 4.5746 5.95609 4.61322 5.57812L4.61713 5.50098V5.49902C4.61713 5.11086 4.32225 4.79155 3.94428 4.75293Z"
                            fill="white"></path>
                    </svg>
                    <div
                        class="w-80 h-10 flex justify-center items-center absolute top-15 -left-10 transition-all duration-500 bg-white shadow-md rounded-full text-sm text-[var(--light-theme-text-color)] opacity-0 invisible z-3 hover-menu-li">
                        <span>
                            سبد خرید شما خالی است.
                        </span>
                    </div>
                </div>
                <span class="bg-gray-300 h-6 w-[1px] rounded-full"></span>
                <!-- end shopping cart -->
                <!-- login signup -->
                <div class="">
                    <a href="{{ route('user.login') }}"
                        class="py-1 px-2 xl:py-2 xl:px-3 flex flex-row-reverse justify-between items-center">
                        <span class="text-white text-sm mr-2 max-lg:hidden">ورود و ثبت نام</span>
                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                            xmlns="http://www.w3.org/2000/svg" class="inline">
                            <path opacity="0.4"
                                d="M16.2476 2H12.8032C11.9819 2 11.3349 1.99999 10.8143 2.04253C10.2831 2.08593 9.83953 2.17609 9.43642 2.38148C8.77786 2.71703 8.24242 3.25247 7.90687 3.91103C7.70148 4.31414 7.61132 4.75771 7.56792 5.28889C7.52538 5.80954 7.52539 6.45652 7.52539 7.27779V17.7222C7.52539 18.5435 7.52538 19.1905 7.56792 19.7111C7.61132 20.2423 7.70148 20.6859 7.90687 21.089C8.24242 21.7475 8.77786 22.283 9.43642 22.6185C9.83953 22.8239 10.2831 22.9141 10.8143 22.9575C11.3349 23 11.9819 23 12.8032 23H16.2476C17.0689 23 17.7158 23 18.2365 22.9575C18.7677 22.9141 19.2113 22.8239 19.6144 22.6185C20.2729 22.283 20.8084 21.7475 21.1439 21.089C21.3493 20.6859 21.4395 20.2423 21.4829 19.7111C21.5254 19.1905 21.5254 18.5435 21.5254 17.7222V7.27778C21.5254 6.45651 21.5254 5.80954 21.4829 5.28889C21.4395 4.75771 21.3493 4.31413 21.1439 3.91103C20.8084 3.25247 20.2729 2.71703 19.6144 2.38148C19.2113 2.17609 18.7677 2.08593 18.2365 2.04253C17.7158 1.99999 17.0689 2 16.2476 2Z"
                                fill="white"></path>
                            <path
                                d="M12.8033 2H16.2477C17.069 2 17.716 1.99999 18.2366 2.04253C18.7678 2.08593 19.2114 2.17609 19.6145 2.38148C20.273 2.71703 20.8085 3.25247 21.144 3.91103C21.3494 4.31413 21.4396 4.75771 21.483 5.28889C21.5255 5.80952 21.5255 6.45647 21.5255 7.27769V17.7222C21.5255 18.5434 21.5255 19.1905 21.483 19.7111C21.4396 20.2423 21.3494 20.6859 21.144 21.089C20.8085 21.7475 20.273 22.283 19.6145 22.6185C19.2114 22.8239 18.7678 22.9141 18.2366 22.9575C17.716 23 17.069 23 16.2477 23H12.8033C11.982 23 11.335 23 10.8144 22.9575C10.2832 22.9141 9.83963 22.8239 9.43653 22.6185C8.77796 22.283 8.24253 21.7475 7.90697 21.089C7.70158 20.6859 7.61143 20.2423 7.56803 19.7111C7.52549 19.1905 7.52549 18.5435 7.5255 17.7222V16.5C7.5255 16.2239 7.74935 16 8.0255 16C8.30164 16 8.5255 16.2239 8.5255 16.5V17.7C8.5255 18.5483 8.52588 19.1545 8.56471 19.6297C8.60305 20.099 8.67639 20.3963 8.79798 20.635C9.03766 21.1054 9.42011 21.4878 9.89052 21.7275C10.1292 21.8491 10.4265 21.9224 10.8958 21.9608C11.371 21.9996 11.9772 22 12.8255 22H16.2255C17.0738 22 17.68 21.9996 18.1552 21.9608C18.6245 21.9224 18.9218 21.8491 19.1605 21.7275C19.6309 21.4878 20.0133 21.1054 20.253 20.635C20.3746 20.3963 20.4479 20.099 20.4863 19.6297C20.5251 19.1545 20.5255 18.5483 20.5255 17.7V7.3C20.5255 6.45167 20.5251 5.84549 20.4863 5.37032C20.4479 4.90099 20.3746 4.60366 20.253 4.36502C20.0133 3.89462 19.6309 3.51217 19.1605 3.27248C18.9218 3.15089 18.6245 3.07756 18.1552 3.03921C17.68 3.00039 17.0738 3 16.2255 3H12.8255C11.9772 3 11.371 3.00039 10.8958 3.03921C10.4265 3.07756 10.1292 3.15089 9.89052 3.27248C9.42011 3.51217 9.03766 3.89462 8.79798 4.36502C8.67639 4.60366 8.60305 4.90099 8.56471 5.37032C8.52588 5.84549 8.5255 6.45167 8.5255 7.3V8.5C8.5255 8.77614 8.30164 9 8.0255 9C7.74935 9 7.5255 8.77614 7.5255 8.5V7.27779C7.52549 6.45653 7.52549 5.80954 7.56803 5.28889C7.61143 4.75771 7.70158 4.31413 7.90697 3.91103C8.24253 3.25247 8.77796 2.71703 9.43653 2.38148C9.83963 2.17609 10.2832 2.08593 10.8144 2.04253C11.335 1.99999 11.982 2 12.8033 2Z"
                                fill="white"></path>
                            <path
                                d="M12.1721 8.64645C12.3674 8.45118 12.684 8.45118 12.8792 8.64645L16.3792 12.1464C16.5745 12.3417 16.5745 12.6583 16.3792 12.8536L12.8792 16.3536C12.684 16.5488 12.3674 16.5488 12.1721 16.3536C11.9769 16.1583 11.9769 15.8417 12.1721 15.6464L14.8186 13H3.02539C2.74925 13 2.52539 12.7761 2.52539 12.5C2.52539 12.2239 2.74925 12 3.02539 12H14.8186L12.1721 9.35355C11.9769 9.15829 11.9769 8.84171 12.1721 8.64645Z"
                                fill="white"></path>
                        </svg>
                    </a>
                </div>
                <!-- end login signup -->
                <!-- end buttons -->
            </div>
        </div>
        <div class="2xl:container 2xl:w-11/12 w-11/12 absolute bottom-8 flex justify-center items-center z-3">
            <div class="w-full flex flex-col gap-4">
                <div class="w-full flex justify-end items-center pr-5">
                    <div class="flex lg:gap-4 sm:gap-2 gap-1 items-center">
                        <button
                            class="lg:size-20 sm:size-15 size-12 rounded-full bg-[#534b43] flex justify-center items-center border-1 border-[#6d6861] active:bg-red-500 classss">
                            <svg class="size-3/5 -rotate-90" viewBox="0 0 97.69 75.09" xml:space="preserve">
                                <g>
                                    <path
                                        d="M97.69,36.54v2c-20.15,0-36.54,16.39-36.54,36.54h-2C59.15,53.83,76.44,36.54,97.69,36.54z"
                                        style="fill: rgb(255, 255, 255);"></path>
                                </g>
                                <g>
                                    <path
                                        d="M59.15,0h2c0,20.15,16.39,36.54,36.54,36.54v2H0v-2h85.43C70.17,31.41,59.15,16.97,59.15,0z"
                                        style="fill: rgb(255, 255, 255);"></path>
                                </g>
                            </svg>
                        </button>
                        <button
                            class="lg:size-20 sm:size-15 size-12 rounded-full bg-[#534b43] flex justify-center items-center border-1 border-[#6d6861] active:bg-red-500 classss">
                            <svg class="size-3/5 rotate-90" viewBox="0 0 97.69 75.09" xml:space="preserve">
                                <g>
                                    <path
                                        d="M97.69,36.54v2c-20.15,0-36.54,16.39-36.54,36.54h-2C59.15,53.83,76.44,36.54,97.69,36.54z"
                                        style="fill: rgb(255, 255, 255);"></path>
                                </g>
                                <g>
                                    <path
                                        d="M59.15,0h2c0,20.15,16.39,36.54,36.54,36.54v2H0v-2h85.43C70.17,31.41,59.15,16.97,59.15,0z"
                                        style="fill: rgb(255, 255, 255);"></path>
                                </g>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="w-full flex flex-col gap-4 ">
                    <span class="w-full h-[2px] bg-[#b6b4b1] rounded-xl"></span>
                    <div class="w-full flex flex-col gap-10 sm:flex-row sm:gap-20 lg:gap-50 justify-between">
                        <div class="w-full md:w-1/2 flex flex-col gap-2 classss">
                            <h3 class="text-red-500 text-md sm:text-2xl font-bold">مجموعه چاپ شاهکار</h3>
                            <p class="text-white text-xs sm:text-sm">این مجموعه با هدف خلق
                                آثار هنری ماندگار و به همراه محصولات متنوع در صنعت چاپ در خدمت همه مشتریان عزیز میباشد.
                            </p>
                        </div>
                        <div class="w-full md:w-1/2 flex flex-col gap-2 classss">
                            <h3 class="text-red-500 text-md sm:text-2xl font-bold">ارتباط با ما</h3>
                            <p class="text-white flex items-center gap-2 text-xs sm:text-sm">
                                <span class="font-bold">شماره تماس : </span>
                                <a href="tel:09371509497">09371509497</a>
                            </p>
                            <p class="text-white flex items-center gap-2 text-xs sm:text-sm">
                                <span class="font-bold">اینستاگرام : </span>
                                <a href="">shahkar</a>
                            </p>
                            <p class="text-white flex items-center gap-2 text-xs sm:text-sm">
                                <span class="font-bold">صفحه رینگا : </span>
                                <a href="">www.ringaa.ir</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end mahdi slider --}}


    <!-- hamburger side menu -->
    <aside id="responsiveHamburgerMenu"
        class="sm:hidden flex fixed z-5 w-full h-dvh transition-all duration-800 invisible opacity-0 -right-full top-0 delay-250 shadow-md">
        <div class="w-10/12 md:w-4/12 bg-[#E2E2E2] flex flex-col items-center gap-10 p-5">
            <div class="w-full relative" onclick="hamburgerMenu('close')">
                <button class="absolute top-0 left-0 size-5 flex flex-col justify-center items-center cursor-pointer">
                    <span class="w-full h-[2.5px] rounded-full bg-black rotate-45 translate-y-1/2"></span>
                    <span class="w-full h-[2.5px] rounded-full bg-black -rotate-45 -translate-y-1/2"></span>
                </button>
            </div>
            <img src="{{ asset('assets/img/IMG_20251225_131334_688.png') }}" alt="logo" class="w-1/2">
            <ul class="flex flex-col justify-between items-start gap-10 w-full">
                <li class="group">
                    <a href="{{ route('home') }}"
                        class="flex items-center gap-2 font-bold text-sm text-[var(--light-theme-text-color)]">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M10.8787 2.87868C11.5038 2.25357 12.517 2.25357 13.1421 2.87868L20.1421 9.87868C20.4428 10.1794 20.4428 10.6669 20.1421 10.9676C19.8413 11.2684 19.3538 11.2684 19.0531 10.9676L12.0531 3.96762C12.014 3.92857 11.9508 3.92857 11.9117 3.96762L4.91169 10.9676C4.61094 11.2684 4.12338 11.2684 3.82263 10.9676C3.52188 10.6669 3.52188 10.1794 3.82263 9.87868L10.8787 2.87868ZM6.75 10.75C7.16421 10.75 7.5 11.0858 7.5 11.5V18C7.5 18.4142 7.83579 18.75 8.25 18.75H15.75C16.1642 18.75 16.5 18.4142 16.5 18V11.5C16.5 11.0858 16.8358 10.75 17.25 10.75C17.6642 10.75 18 11.0858 18 11.5V18C18 19.2426 16.9926 20.25 15.75 20.25H8.25C7.00736 20.25 6 19.2426 6 18V11.5C6 11.0858 6.33579 10.75 6.75 10.75Z"
                                fill="currentColor" />
                        </svg>
                        <span class="group-hover:text-[var(--primary-color)] transition">خانه</span>
                    </a>
                </li>
                <li class="group">
                    <a href="{{ route('category-index') }}"
                        class="flex items-center gap-2 font-bold text-sm text-[var(--light-theme-text-color)]">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="" width="22" height="22"
                            class="fill-[var(--light-theme-text-color)] group-hover:fill-[var(--primary-color)] transition"
                            viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                            <path
                                d="M22.5,19.7h20c1.4,0,2.5,1.1,2.5,2.5v54.9c0,1.4-1.1,2.5-2.5,2.5h-20c-1.4,0-2.5-1.1-2.5-2.5V22.2  C20,20.8,21.1,19.7,22.5,19.7z">
                            </path>
                            <path
                                d="M57.5,19.6h20c1.4,0,2.5,1.1,2.5,2.5V42c0,1.4-1.1,2.5-2.5,2.5h-20c-1.4,0-2.5-1.1-2.5-2.5V22.1  C55,20.7,56.1,19.6,57.5,19.6z">
                            </path>
                            <path
                                d="M57.5,54.6h20c1.4,0,2.5,1.1,2.5,2.5v19.9c0,1.4-1.1,2.5-2.5,2.5h-20c-1.4,0-2.5-1.1-2.5-2.5V57.1  C55,55.8,56.1,54.6,57.5,54.6z">
                            </path>
                        </svg>
                        <span class="group-hover:text-[var(--primary-color)] transition">دسته بندی محصولات</span>
                    </a>
                </li>
                <li class="group">
                    <a href="{{ route('product-index') }}"
                        class="flex items-center gap-2 font-bold text-sm text-[var(--light-theme-text-color)]">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M10.9608 2.58241C11.6154 2.25405 12.3846 2.25405 13.0392 2.58241L18.7892 5.46627C19.5504 5.84803 20.0312 6.62605 20.0312 7.47767V16.5223C20.0312 17.3739 19.5504 18.152 18.7892 18.5337L13.0392 21.4176C12.3846 21.746 11.6154 21.746 10.9608 21.4176L5.21078 18.5337C4.44959 18.152 3.96875 17.3739 3.96875 16.5223V7.47767C3.96875 6.62605 4.44959 5.84803 5.21078 5.46627L10.9608 2.58241ZM11.6323 3.92305C11.3999 3.80648 11.1261 3.80648 10.8937 3.92305L5.8828 6.43689L12 9.50435L18.1172 6.43689L13.1063 3.92305C12.8739 3.80648 12.6001 3.80648 12.3677 3.92305H11.6323ZM5.46875 7.71191V16.5223C5.46875 16.8059 5.62899 17.0653 5.8828 17.1925L11.25 19.8848V10.8267L5.46875 7.71191ZM12.75 19.8848L18.1172 17.1925C18.371 17.0653 18.5312 16.8059 18.5312 16.5223V7.71191L12.75 10.8267V19.8848Z"
                                fill="currentColor" />
                        </svg>
                        <span class="group-hover:text-[var(--primary-color)] transition">محصولات</span>
                    </a>
                </li>
                <li class="group">
                    <a href="{{ route('aboutus-index') }}"
                        class="flex items-center gap-2 font-bold text-sm text-[var(--light-theme-text-color)]">
                        <svg width="22" height="22" viewBox="0 0 25 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                            class="fill-[var(--light-theme-text-color)] group-hover:fill-[var(--primary-color)] transition">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M8.77539 8C8.77539 6.20524 10.23 4.75 12.0248 4.75C13.8196 4.75 15.2742 6.20524 15.2742 8C15.2742 9.79476 13.8196 11.25 12.0248 11.25C10.23 11.25 8.77539 9.79476 8.77539 8ZM12.0248 6.25C11.0588 6.25 10.2754 7.03334 10.2754 8C10.2754 8.96666 11.0588 9.75 12.0248 9.75C12.9908 9.75 13.7742 8.96666 13.7742 8C13.7742 7.03334 12.9908 6.25 12.0248 6.25Z"
                                fill=""></path>
                            <path
                                d="M7.63831 15.9322C8.61335 14.5496 10.308 13.75 12.0254 13.75C13.7428 13.75 15.4374 14.5496 16.4125 15.9322C16.6512 16.2707 17.1191 16.3516 17.4576 16.1129C17.7961 15.8742 17.877 15.4063 17.6383 15.0678C16.3534 13.2457 14.1781 12.25 12.0254 12.25C9.87273 12.25 7.6974 13.2457 6.41247 15.0678C6.17375 15.4063 6.25465 15.8742 6.59315 16.1129C6.93166 16.3516 7.39959 16.2707 7.63831 15.9322Z"
                                fill=""></path>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M8.39239 0.25H15.6584C16.7505 0.249995 17.616 0.24999 18.3137 0.306988C19.027 0.365274 19.6307 0.486882 20.1818 0.76772C21.0756 1.22312 21.8023 1.94978 22.2577 2.84355C22.5385 3.39472 22.6601 3.99834 22.7184 4.71173C22.7754 5.40935 22.7754 6.27484 22.7754 7.36698V13.633C22.7754 14.7252 22.7754 15.5906 22.7184 16.2883C22.6601 17.0017 22.5385 17.6053 22.2577 18.1565C21.8023 19.0502 21.0756 19.7769 20.1818 20.2323C19.6307 20.5131 19.027 20.6347 18.3137 20.693C17.616 20.75 16.7505 20.75 15.6584 20.75L14.9315 20.75L13.9754 22.2146C13.7674 22.5334 13.5839 22.8145 13.4155 23.0275C13.2416 23.2473 13.0189 23.4815 12.702 23.6144C12.2692 23.7959 11.7816 23.7959 11.3487 23.6144C11.0318 23.4815 10.8091 23.2473 10.6353 23.0275C10.4668 22.8145 10.2834 22.5335 10.0753 22.2146L9.11931 20.75L8.39237 20.75C7.30024 20.75 6.43474 20.75 5.73712 20.693C5.02374 20.6347 4.42011 20.5131 3.86894 20.2323C2.97517 19.7769 2.24851 19.0502 1.79311 18.1565C1.51227 17.6053 1.39066 17.0017 1.33238 16.2883C1.27538 15.5906 1.27539 14.7252 1.27539 13.633V7.367C1.27539 6.27486 1.27538 5.40935 1.33238 4.71173C1.39066 3.99835 1.51227 3.39472 1.79311 2.84355C2.24851 1.94978 2.97517 1.22312 3.86894 0.76772C4.42011 0.486882 5.02374 0.365274 5.73712 0.306988C6.43474 0.24999 7.30025 0.249995 8.39239 0.25ZM5.85927 1.80201C5.23864 1.85271 4.85439 1.94909 4.54992 2.10423C3.9384 2.41582 3.44121 2.913 3.12962 3.52453C2.97448 3.829 2.8781 4.21325 2.8274 4.83388C2.77597 5.46326 2.77539 6.26752 2.77539 7.4V13.6C2.77539 14.7325 2.77597 15.5367 2.8274 16.1661C2.8781 16.7867 2.97448 17.171 3.12962 17.4755C3.44121 18.087 3.9384 18.5842 4.54992 18.8958C4.85439 19.0509 5.23864 19.1473 5.85927 19.198C6.48866 19.2494 7.29291 19.25 8.42539 19.25H9.09224L9.12556 19.2499C9.24264 19.2492 9.43566 19.248 9.62138 19.305C9.78004 19.3537 9.92742 19.4335 10.0549 19.5397C10.2042 19.6641 10.3087 19.8264 10.3721 19.9248L10.3902 19.9528L11.3136 21.3674C11.5449 21.7218 11.691 21.9442 11.8118 22.097C11.8863 22.1912 11.9264 22.2256 11.9381 22.2348C11.9944 22.2558 12.0564 22.2558 12.1127 22.2348C12.1244 22.2256 12.1644 22.1912 12.239 22.097C12.3598 21.9442 12.5059 21.7218 12.7372 21.3674L13.6606 19.9528L13.6787 19.9248C13.7421 19.8264 13.8466 19.6641 13.9959 19.5397C14.1234 19.4335 14.2707 19.3537 14.4294 19.305C14.6151 19.248 14.8081 19.2492 14.9252 19.2499L14.9585 19.25H15.6254C16.7579 19.25 17.5621 19.2494 18.1915 19.198C18.8121 19.1473 19.1964 19.0509 19.5009 18.8958C20.1124 18.5842 20.6096 18.087 20.9212 17.4755C21.0763 17.171 21.1727 16.7867 21.2234 16.1661C21.2748 15.5367 21.2754 14.7325 21.2754 13.6V7.4C21.2754 6.26752 21.2748 5.46326 21.2234 4.83388C21.1727 4.21325 21.0763 3.829 20.9212 3.52453C20.6096 2.913 20.1124 2.41582 19.5009 2.10423C19.1964 1.94909 18.8121 1.85271 18.1915 1.80201C17.5621 1.75058 16.7579 1.75 15.6254 1.75H8.42539C7.29291 1.75 6.48866 1.75058 5.85927 1.80201Z"
                                fill=""></path>
                        </svg>
                        <span class="group-hover:text-[var(--primary-color)] transition">درباره ما</span>
                    </a>
                </li>
                <li class="group">
                    <a href="#"
                        class="flex items-center gap-2 font-bold text-sm text-[var(--light-theme-text-color)]">
                        <svg width="22" height="22" viewBox="0 0 25 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                            class="fill-[var(--light-theme-text-color)] group-hover:fill-[var(--primary-color)] transition">
                            <g clip-path="url(#clip0_683_2259)">
                                <path
                                    d="M11.8637 10.7163C11.4558 10.6444 11.0668 10.9167 10.9949 11.3247C10.9229 11.7326 11.1953 12.1216 11.6032 12.1935L17.5121 13.2354C17.92 13.3073 18.309 13.0349 18.3809 12.627C18.4528 12.2191 18.1805 11.8301 17.7725 11.7582L11.8637 10.7163Z"
                                    fill=""></path>
                                <path
                                    d="M11.6892 7.38538C11.7611 6.97746 12.1501 6.70509 12.558 6.77701L16.2215 7.42298C16.6294 7.49491 16.9018 7.8839 16.8299 8.29182C16.7579 8.69974 16.3689 8.97212 15.961 8.90019L12.2976 8.25422C11.8896 8.1823 11.6173 7.7933 11.6892 7.38538Z"
                                    fill=""></path>
                                <path
                                    d="M11.4461 14.7044C11.0382 14.6325 10.6492 14.9048 10.5773 15.3128C10.5053 15.7207 10.7777 16.1097 11.1856 16.1816L17.0945 17.2235C17.5024 17.2954 17.8914 17.023 17.9633 16.6151C18.0352 16.2072 17.7629 15.8182 17.3549 15.7463L11.4461 14.7044Z"
                                    fill=""></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M14.9488 1.6388L18.2629 2.22317C19.2009 2.38855 19.9499 2.52061 20.5461 2.6767C21.1576 2.8368 21.6725 3.03724 22.1186 3.3734C22.8354 3.91353 23.3628 4.66672 23.6252 5.52502C23.7885 6.05919 23.8007 6.61159 23.742 7.24097C23.6848 7.85461 23.5527 8.6036 23.3873 9.54156L22.0302 17.2381C21.8648 18.1761 21.7328 18.9251 21.5767 19.5213C21.4166 20.1328 21.2161 20.6477 20.88 21.0938C20.3398 21.8105 19.5867 22.3379 18.7284 22.6003C18.1942 22.7637 17.6418 22.7759 17.0124 22.7172C16.3988 22.66 15.6498 22.5279 14.7119 22.3625L12.0262 21.8889L9.33969 22.3626C8.40188 22.528 7.65266 22.6601 7.03909 22.7173C6.40972 22.7761 5.85731 22.7638 5.32314 22.6005C4.46485 22.3381 3.71166 21.8107 3.17152 21.0939C2.83536 20.6478 2.63492 20.1329 2.47483 19.5214C2.31874 18.9252 2.18668 18.1762 2.0213 17.2382L0.664189 9.54171C0.498794 8.60375 0.366722 7.85476 0.309482 7.24112C0.250773 6.61174 0.263019 6.05934 0.426332 5.52517C0.688738 4.66687 1.21613 3.91368 1.93291 3.37355C2.37901 3.03739 2.89391 2.83695 3.50542 2.67685C4.10162 2.52077 4.85059 2.38871 5.78854 2.22333L6.10068 2.16829C6.5086 2.09636 6.8976 2.36874 6.96952 2.77666C7.04145 3.18458 6.76907 3.57357 6.36115 3.6455L6.08119 3.69487C5.1038 3.86721 4.41528 3.9892 3.88532 4.12795C3.36385 4.26447 3.06061 4.40197 2.83564 4.5715C2.37183 4.921 2.03058 5.40836 1.86079 5.96373C1.77843 6.23312 1.75293 6.56509 1.803 7.10181C1.85388 7.64726 1.97473 8.33599 2.14707 9.31338L3.49284 16.9456C3.66518 17.923 3.78718 18.6115 3.92592 19.1415C4.06244 19.663 4.19994 19.9662 4.36947 20.1912C4.71897 20.655 5.20633 20.9962 5.7617 21.166C6.03109 21.2484 6.36307 21.2739 6.89978 21.2238C7.26716 21.1896 7.69952 21.1236 8.2413 21.0314C7.98998 20.9215 7.75794 20.7906 7.54201 20.6279C6.82522 20.0878 6.29783 19.3346 6.03543 18.4763C5.87211 17.9421 5.85987 17.3897 5.91858 16.7603C5.97582 16.1467 6.10789 15.3977 6.27329 14.4597L7.63039 6.76321C7.79577 5.82524 7.92783 5.07624 8.08392 4.48002C8.24402 3.86852 8.44446 3.35362 8.78062 2.90752C9.32075 2.19074 10.0739 1.66335 10.9322 1.40094C11.4664 1.23763 12.0188 1.22538 12.6482 1.28409C13.2618 1.34133 14.0108 1.47341 14.9488 1.6388ZM14.9401 20.8796L11.6903 20.3066C10.7129 20.1342 10.0244 20.0122 9.49441 19.8735C8.97294 19.737 8.6697 19.5995 8.44473 19.4299C7.98093 19.0804 7.63968 18.5931 7.46988 18.0377C7.38752 17.7683 7.36203 17.4363 7.41209 16.8996C7.46297 16.3542 7.58382 15.6654 7.75616 14.6881L9.10193 7.0558C9.27427 6.07841 9.39627 5.38989 9.53502 4.85992C9.67154 4.33846 9.80904 4.03522 9.97857 3.81024C10.3281 3.34644 10.8154 3.00519 11.3708 2.8354C11.6402 2.75304 11.9722 2.72754 12.5089 2.77761C13.0543 2.82849 13.7431 2.94934 14.7204 3.12168L17.9703 3.69471C18.9477 3.86705 19.6362 3.98905 20.1662 4.1278C20.6877 4.26432 20.9909 4.40182 21.2159 4.57135C21.6797 4.92085 22.0209 5.40821 22.1907 5.96357C22.2731 6.23296 22.2986 6.56494 22.2485 7.10166C22.1976 7.64711 22.0768 8.33584 21.9044 9.31323L20.5587 16.9455C20.3863 17.9229 20.2643 18.6114 20.1256 19.1414C19.9891 19.6628 19.8516 19.9661 19.682 20.191C19.3325 20.6548 18.8452 20.9961 18.2898 21.1659C18.0204 21.2482 17.6884 21.2737 17.1517 21.2237C16.6063 21.1728 15.9175 21.0519 14.9401 20.8796Z"
                                    fill=""></path>
                            </g>
                            <defs>
                                <clipPath id="clip0_683_2259">
                                    <rect width="24" height="24" fill="white"
                                        transform="translate(0.0253906)">
                                    </rect>
                                </clipPath>
                            </defs>
                        </svg>
                        <span class="group-hover:text-[var(--primary-color)] transition">مقالات</span>
                    </a>
                </li>
                <li class="group">
                    <a href="{{ route('contactus-create') }}"
                        class="flex items-center gap-2 font-bold text-sm text-[var(--light-theme-text-color)]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="22" height="18"
                            class="fill-[var(--light-theme-text-color)] group-hover:fill-[var(--primary-color)] transition">
                            <path
                                d="M240 48H416c8.8 0 16 7.2 16 16V448c0 8.8-7.2 16-16 16H240V48zm-48 0V464H128c-8.8 0-16-7.2-16-16V416h24c13.3 0 24-10.7 24-24s-10.7-24-24-24H112V280h24c13.3 0 24-10.7 24-24s-10.7-24-24-24H112V144h24c13.3 0 24-10.7 24-24s-10.7-24-24-24H112V64c0-8.8 7.2-16 16-16h64zM64 416v32c0 35.3 28.7 64 64 64H416c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H128C92.7 0 64 28.7 64 64V96H24C10.7 96 0 106.7 0 120s10.7 24 24 24H64v88H24c-13.3 0-24 10.7-24 24s10.7 24 24 24H64v88H24c-13.3 0-24 10.7-24 24s10.7 24 24 24H64z" />
                        </svg>
                        <span class="group-hover:text-[var(--primary-color)] transition">تماس با ما</span>
                    </a>
                </li>
                <li class="group">
                    <a href="#"
                        class="flex items-center gap-2 font-bold text-sm text-[var(--light-theme-text-color)]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="22" height="18"
                            class="fill-[var(--light-theme-text-color)] group-hover:fill-[var(--primary-color)] transition">
                            <path
                                d="M512 80c8.8 0 16 7.2 16 16V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V96c0-8.8 7.2-16 16-16H512zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM208 256a64 64 0 1 0 0-128 64 64 0 1 0 0 128zm-32 32c-44.2 0-80 35.8-80 80c0 8.8 7.2 16 16 16H304c8.8 0 16-7.2 16-16c0-44.2-35.8-80-80-80H176zM376 144c-13.3 0-24 10.7-24 24s10.7 24 24 24h80c13.3 0 24-10.7 24-24s-10.7-24-24-24H376zm0 96c-13.3 0-24 10.7-24 24s10.7 24 24 24h80c13.3 0 24-10.7 24-24s-10.7-24-24-24H376z" />
                        </svg>
                        <span class="group-hover:text-[var(--primary-color)] transition">نمونه کار ها</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="w-7/12 md:w-8/12 bg-[#333333]/50 invisible opacity-0 transition-all duration-500 backdrop-blur-[5px]"
            onclick="hamburgerMenu('close')"></div>
    </aside>
    <!-- end hamburger side menu -->

    <!-- searchbar popup -->
    <div id="searchbar"
        class="w-full h-dvh fixed top-0 left-0 flex justify-center items-center invisible opacity-0 transition-all duration-300 z-5 md:hidden">
        <div class="size-full bg-black/50 absolute" onclick="closeSearchbar()"></div>
        <div class="relative w-10/12 sm:w-2/3">
            <button
                class="absolute z-5 -top-4 -left-4 size-6 flex flex-col justify-center items-center cursor-pointer bg-white rounded-full "
                onclick="closeSearchbar()">
                <span class="w-2/3 h-[2.5px] rounded-full bg-black rotate-45
              translate-y-1/2"></span>
                <span class="w-2/3 h-[2.5px] rounded-full bg-black -rotate-45 -translate-y-1/2"></span>
            </button>
            <div class="size-full rounded-lg">
                <form action="{{ route('search-search') }}" method="POST"
                    class="w-full flex flex-col gap-10 p-5 rounded-[36px] bg-white">
                    @csrf
                    <div class="flex flex-col gap-4">
                        <label for="searchedValue" class="text-xs">کالای مورد نظر خود را جستجو کنید.</label>
                        <div class="flex items-center border-[1px] border-gray-300 rounded-lg px-2">
                            <input type="text" name="searchedValue" id="searchedValue"
                                placeholder="مثال:تابلوی چنلیووم"
                                class="w-full text-right text-[14px] py-3 outline-none">
                        </div>
                    </div>
                    <button type="submit"
                        class="w-1/2 mx-auto rounded-lg px-2 py-3 text-center cursor-pointer bg-gray-500 text-white outline-none font-bold">
                        جستجو
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- end searchbar popup -->


    <main class="2xl:container 2xl:px-4 w-11/12 2xl:w-11/12 mx-auto mt-5">
        @yield('content')
    </main>



    <footer class="text-(--color-text) pt-3 bg-(--color-primary-btn) 2xl:container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 px-3">
            @foreach ($footerColumns as $footerColumn)
                <div class="p-6">
                    <p class="text-gray-700 font-bold mb-4">{{ $footerColumn['section_title'] }}</p>
                    @foreach ($footerColumn['rows'] as $row)
                        <p>
                            <a href="{{ $row['row_href'] }}">{{ $row['row_content'] }}</a>
                        </p>
                    @endforeach
                </div>
            @endforeach
            <div class="p-6 flex flex-col gap-10">
                @if ($footer_form_column)
                    <div class="">
                        <p class="text-gray-700 font-bold mb-4">{{ $footer_form_column['section_title'] }}</p>
                    </div>
                    <div class="flex justify-between items-center">
                        @foreach ($footer_form_column['images'] as $image)
                            <a href="{{ $image['link'] }}">
                                <img src="{{ asset('storage/' . $image['path']) }}" alt="{{ $image['alt'] }}"
                                    class="size-10 rounded-full">
                            </a>
                        @endforeach
                    </div>
                    <div class="">
                        <form action="{{ route('homeForm-store') }}" method="post" class="flex flex-col gap-4">
                            @csrf
                            <label for=""
                                class="">{{ $footer_form_column['texts'][0]['text'] }}</label>
                            <div class="flex gap-4">
                                <input type="string" required
                                    class="w-3/4 outline-none py-2 px-9 bg-[#F9F9F9] rounded-xl focus:border"
                                    name="contactMethod" id=""
                                    placeholder="{{ $footer_form_column['texts'][0]['placeholder'] }}" required>
                                <button type="submit"
                                    class="w-1/4 py-2 px-7 rounded-[10px] bg-(--color-btn-contact) text-(--color-primary-text) hover:bg-(--color-btn-contact-hover) transition-all duration-300 text-white cursor-pointer">ثبت</button>
                            </div>
                        </form>
                    </div>
                @endif
            </div>
        </div>
        <hr>
        <div class="py-8">
            <p class="text-center">
                طراحی شده توسط
                <span class="font-bold">فائوس</span>
            </p>
            <p class="text-center">
                عباس ملکی:
                <a class="font-bold" href="tel:09147794595">09147794595</a>
            </p>
        </div>
    </footer>

    <script src="{{ url('assets/js/slider.js') }}"></script>
    <script>
        const csrfToken = "{{ csrf_token() }}"
        const route = "{{ route('relatedProducts') }}"
    </script>
    <script src="{{ url('assets/js/main.js') }}"></script>
</body>

</html>
