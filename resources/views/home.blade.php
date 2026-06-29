@extends('app.document')
@section('title', 'شاهکار | خانه')
@section('slider')
    {{-- mahdi slider --}}
    <div class="w-full h-dvh relative flex justify-center items-center">
        <img src="{{ asset('assets/img/slider-bg.jpg') }}" class="object-cover w-full h-full absolute top-0 right-0 z-1">
        <img src="{{ asset('assets/img/slider-logo.png') }}" alt=""
            class="object-cover max-w-11/12 max-h-11/12 min-w-5/12 min-h-6/12 absolute top-5 sm:top-10 right-auto left-auto z-2">
        <div class="w-full h-full bg-black absolute top-0 right-0 z-3 opacity-[30%]"></div>
        <div class="2xl:container 2xl:w-11/12 w-11/12 absolute top-0 flex justify-between items-center py-4 z-4">
            <div class="">
                <ul class="flex items-center gap-5 lg:gap-10 text-white max-sm:hidden">
                    <li><a href="{{ route('home') }}">خانه</a></li>
                    <li><a href="{{ route('product-index') }}">محصولات</a></li>
                    <li><a href="{{ route('aboutus-index') }}">درباره ما</a></li>
                    <li><a href="{{ route('contactus-create') }}">تماس با ما</a></li>
                </ul>
                <div class="flex flex-col items-center gap-[6px] sm:hidden cursor-pointer" onclick="hamburgerMenu('open')">
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
                        <svg viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="cursor-pointer">
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
            <div class="w-full flex flex-col gap-4 ">
                <span class="w-full h-[2px] bg-[#b6b4b1] rounded-xl"></span>
                <div class="w-full flex flex-col-reverse gap-10 sm:flex-row lg:gap-30 justify-between">
                    <div class="w-full md:w-1/2 flex flex-col gap-2 classss">
                        <h3 class="text-white text-md sm:text-2xl font-bold mb-5">مجموعه چاپ شاهکار</h3>
                        <p class="text-white text-xs sm:text-sm">این مجموعه با هدف خلق
                            آثار هنری ماندگار و به همراه محصولات متنوع در صنعت چاپ در خدمت همه مشتریان عزیز میباشد.
                        </p>
                    </div>
                    <div class="w-full md:w-1/2 flex items-start justify-between">
                        <div class="flex flex-col gap-2 classss">
                            <h3 class="text-white text-md sm:text-2xl font-bold mb-5">ارتباط با ما</h3>
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
                        <div class="flex gap-2 items-center">
                            <button
                                class="size-10 rounded-full bg-[#534b43] flex justify-center items-center border-1 border-[#6d6861] active:bg-red-500 classss">
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
                                class="size-10 rounded-full bg-[#534b43] flex justify-center items-center border-1 border-[#6d6861] active:bg-red-500 classss">
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
                </div>
            </div>
        </div>
        {{-- <form action="" method="POST"
            class="flex flex-col gap-4 p-3 rounded-[36px] border border-white absolute left-20 top-25 z-5 text-white">
            <h2 class="font-bold text-center">سفارش سریع</h2>
            @csrf
            <div class="flex flex-col gap-4">
                <label for="title" class="text-xs">عنوان : </label>
                <div class="border-[1px] border-gray-300 rounded-lg px-2">
                    <input type="text" name="title" id="title"
                        class="w-full text-right text-[14px] py-1 outline-none">
                </div>
            </div>
            <div class="flex flex-col gap-4">
                <label for="file" class="text-xs">فایل : </label>
                <div class="border-[1px] border-gray-300 rounded-lg px-2">
                    <input type="file" name="file" id="file"
                        class="w-full text-right text-[14px] py-1 outline-none">
                </div>
            </div>
            <div class="flex flex-col gap-4">
                <label for="description" class="text-xs">توضیحات : </label>
                <div class="border-[1px] border-gray-300 rounded-lg px-2">
                    <textarea name="description" id="description" class="w-full text-right text-[14px] py-1 outline-none"></textarea>
                </div>
            </div>
            <button type="button"
                class="w-25 mx-auto rounded-lg py-2 px-3 text-center cursor-pointer border white text-white outline-none font-bold text-xs">
                ثبت سفارش 
            </button>
        </form> --}}
    </div>
    {{-- end mahdi slider --}}
@endsection
@section('content')

    {{-- اسلایدر نوشته شده توسط مهدی بندعلی رو اضافه کردیم --}}
    {{-- و چون که داخل کد های ساب هدر کامنت بود به همین دلیل نمیشد کل ساب هدر رو کامنت کرد و از این رو پاکش کردم اما در برنچ زیر آخرین نسخه ساب هدر موجود هست --}}
    {{-- mr.olyafam_debuging --}}


    <!-- category -->
    @if ($categories->isNotEmpty())
        <section class="text-(--color-text) pt-3">
            <!-- title section -->
            <div class="flex flex-row justify-between items-center py-10">
                <h2 class="font-bold text-[24px] leading-8">
                    <a href="{{ route('category-index') }}">دسته بندی ها</a>
                </h2>
                <div class="flex flex-row justify-end items-center gap-5">
                    <span class="size-[35px] rounded-xl border border-(--color-border) flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 320 512">
                            <path fill="#8C9EC5"
                                d="M273 239c9.4 9.4 9.4 24.6 0 33.9L113 433c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l143-143L79 113c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0L273 239z" />
                        </svg>
                    </span>
                    <span class="size-[35px] rounded-xl border border-(--color-border) flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 320 512">
                            <path fill="#8C9EC5"
                                d="M47 239c-9.4 9.4-9.4 24.6 0 33.9L207 433c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9L97.9 256 241 113c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0L47 239z" />
                        </svg>
                    </span>
                </div>
            </div>
            <!-- title section -->

            {{-- grid grid-cols-1 sm:grid-cols-3 md:grid-cols-5 lg:grid-cols-7 --}}
            <div class="flex flex-row items-center gap-5 overflow-x-auto p-5"
                style="scrollbar-width: thin; scrollbar-color: var(--color-primary) var(--color-primary-text);">
                @foreach ($categories as $category)
                    @if ($category->title == 'تخفیفات ویژه')
                        @php
                            $cat = $category;
                        @endphp
                    @endif
                    <div
                        class="h-48 p-4 border border-(--color-border) rounded-[10px] flex flex-col items-center justify-between">
                        {{-- <a href="{{ route('search-cat-products', [$category]) }}" class="block mb-1 w-[137px]" target="_blank"> --}}
                        <a href="{{ route('category-show', [$category]) }}" class="block mb-1 w-[137px]" target="_blank">
                            <img src="{{ asset($category->image) }}" class="w-[115px] max-h-20 h-20 mx-auto"
                                alt="">
                            <span class="inline-block w-full text-center pt-2">{{ $category->title }}</span>
                        </a>
                        <span
                            class="block text-center text-[10px] text-(--color-secondary-text) max-h-[42px] h-[42px]">{{ $category->description }}</span>
                    </div>
                @endforeach
            </div>

        </section>
    @endif
    <!-- category -->

    <!-- top pruducts -->
    <section class="text-(--color-text) pt-3">
        <!-- title section -->
        @if ($specialDiscounts)
            @if ($specialDiscounts->isNotEmpty())
                <div class="flex flex-col lg:flex-row justify-between gap-8 lg:gap-0 lg:items-center py-5 lg:py-10">
                    <h2 class="font-bold lg:text-[24px] leading-8">
                        <a href="{{ route('category-show', [$cat]) }}">تخفیفات ویژه</a>
                    </h2>
                    {{-- <div class="flex flex-row flex-wrap lg:justify-end items-center text-xs lg:text-base gap-5 font-bold">
                <a href="#" class="text-(--color-text)">
                    همه دسته ها
                </a>
                <a href="#" class="text-(--color-secondary-text)">
                    تست 1
                </a>
                <a href="#" class="text-(--color-secondary-text)">
                    تست 2
                </a>
                <a href="#" class="text-(--color-secondary-text)">
                    تست 3
                </a>
            </div> --}}
                </div>
            @endif
        @endif
        <!-- title section -->

        {{-- <div class="grid 2xl:grid-cols-6 grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-2.5 lg:gap-4"> --}}
        <div class="w-full flex gap-5 overflow-x-auto p-5"
            style="scrollbar-width: thin; scrollbar-color: var(--color-primary) var(--color-primary-text);">
            <!-- 12 -->

            {{-- <div
                class="p-2 md:p-3 lg:p-4 xl:p-5 border border-(--color-border) rounded-[10px] relative productItem productItemNone">
                <div
                    class="absolute top-[5px] lg:top-2.5 left-[5px] lg:left-2.5 hidden md:flex flex-col gap-2 z-555 overflow-hidden">
                    <button
                        class="size-8 border border-(--color-border) buttonProduct bg-white rounded-sm flex justify-center items-center -translate-x-4 opacity-0 cursor-pointer transition-all duration-500 delay-[50ms]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 512 512">
                            <path fill="var(--color-fill)"
                                d="M244 130.6l-12-13.5-4.2-4.7c-26-29.2-65.3-42.8-103.8-35.8c-53.3 9.7-92 56.1-92 110.3v3.5c0 32.3 13.4 63.1 37.1 85.1L253 446.8c.8 .7 1.9 1.2 3 1.2s2.2-.4 3-1.2L443 275.5c23.6-22 37-52.8 37-85.1v-3.5c0-54.2-38.7-100.6-92-110.3c-38.5-7-77.8 6.6-103.8 35.8l-4.2 4.7-12 13.5c-3 3.4-7.4 5.4-12 5.4s-8.9-2-12-5.4zm34.9-57.1C311 48.4 352.7 37.7 393.7 45.1C462.2 57.6 512 117.3 512 186.9v3.5c0 36-13.1 70.6-36.6 97.5c-3.4 3.8-6.9 7.5-10.7 11l-184 171.3c-.8 .8-1.7 1.5-2.6 2.2c-6.3 4.9-14.1 7.5-22.1 7.5c-9.2 0-18-3.5-24.8-9.7L47.2 299c-3.8-3.5-7.3-7.2-10.7-11C13.1 261 0 226.4 0 190.4v-3.5C0 117.3 49.8 57.6 118.3 45.1c40.9-7.4 82.6 3.2 114.7 28.4c6.7 5.3 13 11.1 18.7 17.6l4.2 4.7 4.2-4.7c4.2-4.7 8.6-9.1 13.3-13.1c1.8-1.5 3.6-3 5.4-4.5z" />
                        </svg>
                    </button>
                    <button
                        class="size-8 border border-(--color-border) buttonProduct bg-white rounded-sm flex justify-center items-center -translate-x-4 opacity-0 cursor-pointer transition-all duration-500 delay-[100ms]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 448 512">
                            <path fill="var(--color-fill)"
                                d="M443.3 139.3c6.2-6.2 6.2-16.4 0-22.6l-96-96c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6L393.4 112 16 112c-8.8 0-16 7.2-16 16s7.2 16 16 16l377.4 0-68.7 68.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0l96-96zm-342.6 352c6.2 6.2 16.4 6.2 22.6 0s6.2-16.4 0-22.6L54.6 400 432 400c8.8 0 16-7.2 16-16s-7.2-16-16-16L54.6 368l68.7-68.7c6.2-6.2 6.2-16.4 0-22.6s-16.4-6.2-22.6 0l-96 96c-6.2 6.2-6.2 16.4 0 22.6l96 96z" />
                        </svg>
                    </button>
                    <button
                        class="size-8 border border-(--color-border) buttonProduct bg-white rounded-sm flex justify-center items-center -translate-x-4 opacity-0 cursor-pointer transition-all duration-500 delay-[150ms]"">
                        <svg xmlns=" http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 576 512">
                            <path fill="var(--color-fill)"
                                d="M117.2 136C160.3 96 217.6 64 288 64s127.7 32 170.8 72c43.1 40 71.9 88 85.2 120c-13.3 32-42.1 80-85.2 120c-43.1 40-100.4 72-170.8 72s-127.7-32-170.8-72C74.1 336 45.3 288 32 256c13.3-32 42.1-80 85.2-120zM288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM192 256a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zm224 0a128 128 0 1 0 -256 0 128 128 0 1 0 256 0z" />
                        </svg>
                    </button>
                </div>
                <div
                    class="absolute top-[5px] lg:top-2.5 left-[5px] lg:left-2.5 md:hidden flex flex-col gap-2 z-555 overflow-hidden">
                    <button
                        class="size-5 sm:size-7 border border-(--color-border) bg-white rounded-sm flex justify-center items-center cursor-pointer productAnimation">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-3 sm:size-4" viewBox="0 0 448 512">
                            <path fill="var(--color-fill)"
                                d="M306.8 6.3C311.4 2.2 317.3 0 323.4 0c17.2 0 29.2 17.1 23.4 33.3L278.7 224H389c14.9 0 27 12.1 27 27c0 7.8-3.3 15.1-9.1 20.3L141.1 505.8c-4.5 4-10.4 6.2-16.5 6.2c-17.2 0-29.2-17.1-23.5-33.3L169.3 288H57.8C43.6 288 32 276.4 32 262.2c0-7.4 3.2-14.4 8.7-19.3L306.8 6.3zm.5 42.4L74.1 256H192c5.2 0 10.1 2.5 13.1 6.8s3.7 9.7 2 14.6L140.6 463.6 375.8 256H256c-5.2 0-10.1-2.5-13.1-6.8s-3.7-9.7-2-14.6l66.4-186z" />
                        </svg>
                    </button>
                    <button
                        class="size-5 sm:size-7 border border-(--color-border) bg-white rounded-sm flex justify-center items-center cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-3 sm:size-4" viewBox="0 0 512 512">
                            <path fill="var(--color-fill)"
                                d="M244 130.6l-12-13.5-4.2-4.7c-26-29.2-65.3-42.8-103.8-35.8c-53.3 9.7-92 56.1-92 110.3v3.5c0 32.3 13.4 63.1 37.1 85.1L253 446.8c.8 .7 1.9 1.2 3 1.2s2.2-.4 3-1.2L443 275.5c23.6-22 37-52.8 37-85.1v-3.5c0-54.2-38.7-100.6-92-110.3c-38.5-7-77.8 6.6-103.8 35.8l-4.2 4.7-12 13.5c-3 3.4-7.4 5.4-12 5.4s-8.9-2-12-5.4zm34.9-57.1C311 48.4 352.7 37.7 393.7 45.1C462.2 57.6 512 117.3 512 186.9v3.5c0 36-13.1 70.6-36.6 97.5c-3.4 3.8-6.9 7.5-10.7 11l-184 171.3c-.8 .8-1.7 1.5-2.6 2.2c-6.3 4.9-14.1 7.5-22.1 7.5c-9.2 0-18-3.5-24.8-9.7L47.2 299c-3.8-3.5-7.3-7.2-10.7-11C13.1 261 0 226.4 0 190.4v-3.5C0 117.3 49.8 57.6 118.3 45.1c40.9-7.4 82.6 3.2 114.7 28.4c6.7 5.3 13 11.1 18.7 17.6l4.2 4.7 4.2-4.7c4.2-4.7 8.6-9.1 13.3-13.1c1.8-1.5 3.6-3 5.4-4.5z" />
                        </svg>
                    </button>
                    <button
                        class="size-5 sm:size-7 border border-(--color-border) bg-white rounded-sm flex justify-center items-center cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-3 sm:size-4" viewBox="0 0 448 512">
                            <path fill="var(--color-fill)"
                                d="M443.3 139.3c6.2-6.2 6.2-16.4 0-22.6l-96-96c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6L393.4 112 16 112c-8.8 0-16 7.2-16 16s7.2 16 16 16l377.4 0-68.7 68.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0l96-96zm-342.6 352c6.2 6.2 16.4 6.2 22.6 0s6.2-16.4 0-22.6L54.6 400 432 400c8.8 0 16-7.2 16-16s-7.2-16-16-16L54.6 368l68.7-68.7c6.2-6.2 6.2-16.4 0-22.6s-16.4-6.2-22.6 0l-96 96c-6.2 6.2-6.2 16.4 0 22.6l96 96z" />
                        </svg>
                    </button>
                    <button
                        class="size-5 sm:size-7 border border-(--color-border) bg-white rounded-sm flex justify-center items-center cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-3 sm:size-4" viewBox="0 0 576 512">
                            <path fill="var(--color-fill)"
                                d="M117.2 136C160.3 96 217.6 64 288 64s127.7 32 170.8 72c43.1 40 71.9 88 85.2 120c-13.3 32-42.1 80-85.2 120c-43.1 40-100.4 72-170.8 72s-127.7-32-170.8-72C74.1 336 45.3 288 32 256c13.3-32 42.1-80 85.2-120zM288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM192 256a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zm224 0a128 128 0 1 0 -256 0 128 128 0 1 0 256 0z" />
                        </svg>
                    </button>
                </div>
                <span
                    class="inline-block absolute top-[5px] lg:top-2.5 right-[5px] lg:right-2.5 py-[3px] px-2 bg-(--color-discount-bg) text-(--color-primary-text) rounded-full text-[8px] lg:text-[12px] text-center z-[11]">18%</span>
                <div>
                    <a href="#" class="flex justify-center mb-1 overflow-hidden">
                        <img src="https://elango.steelthemes.com/ecom/el2/wp-content/uploads/2025/07/onion-pro-1.jpg"
                            class="size-full transition-all duration-500 hover:scale-[1.04] relative z-10" alt="product">
                    </a>
                </div>
                <div>
                    <div class="mb-1">
                        <a href="#" class="text-[12px] lg:text-[14px] text-(--color-text)">تست آیتم</a>
                    </div>
                    <div class="relative">
                        <div class="absolute w-3/4 h-3/4 bg-(--color-primary-btn) bottom-0 right-0 p-3 hidden showMetric">
                            <div class="flex flex-row flex-wrap gap-1 text-(--color-text)">
                                <button type="button"
                                    class="px-[5px] py-[3px] text-xs rounded-sm border border-(--color-border) translate-all duration-300 hover:border-black cursor-pointer">
                                    1 کیلو گرم
                                </button>
                                <button type="button"
                                    class="px-[5px] py-[3px] text-xs rounded-sm border border-(--color-border) translate-all duration-300 hover:border-black cursor-pointer">
                                    2 کیلو گرم
                                </button>
                                <button type="button"
                                    class="px-[5px] py-[3px] text-xs rounded-sm border border-(--color-border) translate-all duration-300 hover:border-black cursor-pointer">
                                    250 گرم
                                </button>
                                <button type="button"
                                    class="px-[5px] py-[3px] text-xs rounded-sm border border-(--color-border) translate-all duration-300 hover:border-black cursor-pointer">
                                    500 گرم
                                </button>
                            </div>
                        </div>
                        <div class="mb-2 font-bold text-[14px] lg:text-base">
                            <a href="#">توضیحات محصول تستی محصول تستی محصول </a>
                        </div>
                        <div class="flex flex-row items-center mb-3 gap-2">
                            <div class="w-1/2 flex flex-row items-center text-[12px]">
                                <div class="text-(--color-secondary-text) flex flex-row items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-3 lg:size-4"
                                        viewBox="0 0 576 512">
                                        <path fill="#8C9EC5"
                                            d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-3 lg:size-4"
                                        viewBox="0 0 576 512">
                                        <path fill="#8C9EC5"
                                            d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-3 lg:size-4"
                                        viewBox="0 0 576 512">
                                        <path fill="#8C9EC5"
                                            d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-3 lg:size-4"
                                        viewBox="0 0 576 512">
                                        <path fill="#8C9EC5"
                                            d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-3 lg:size-4"
                                        viewBox="0 0 576 512">
                                        <path fill="#8C9EC5"
                                            d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z" />
                                    </svg>
                                </div>
                                <span>(0)</span>
                            </div>
                            <div>
                                <span
                                    class="lg:py-[3px] py-px px-0.5 lg:px-[5px] bg-(--color-secondary) text-(--color-primary-text) rounded-full text-[10px]">
                                    تستی
                                </span>
                            </div>
                        </div>
                        <div
                            class="hidden lg:flex flex-row items-center gap-2 text-(--color-text) mb-3 text-[18px] font-bold">
                            <span>$15.22</span>
                            <span>-</span>
                            <span>$140.00</span>
                        </div>
                    </div>
                    <div class="flex lg:hidden flex-row items-start gap-2 text-(--color-text) mb-3 font-bold">
                        <span>$15.22</span>

                        <del class="text-xs text-(--color-secondary-text)">$140.00</del>
                    </div>
                    <div class="flex flex-col lg:flex-row gap-2 lg:gap-4 relative">
                        <div class="absolute size-full bg-white/70 cursor-not-allowed"></div>
                        <div
                            class="w-full lg:w-1/2 flex flex-row justify-between items-center border border-(--color-border) rounded-[10px] p-1">
                            <button
                                class="bg-(--color-primary-btn) rounded-[10px] size-9 lg:size-[27px] flex items-center justify-center cursor-pointer"
                                disabled>-</button>
                            <input type="text" class="w-[30px] outline-none text-center text-xs" value="1"
                                min="0" name="" id="" disabled>
                            <button
                                class="bg-(--color-primary-btn) rounded-[10px] size-9 lg:size-[27px] flex items-center justify-center cursor-pointer"
                                disabled>+</button>
                        </div>
                        <div class="w-full lg:w-1/2">
                            <button
                                class="w-full h-full py-3 lg:py-1 text-[12px] lg:text-[14px] text-(--color-primary-text) bg-(--color-bg-card-btn) leading-5 rounded-[10px] cursor-pointer"
                                disabled>ناموجود</button>
                        </div>
                    </div>
                </div>
            </div> --}}
            @foreach ($specialDiscounts as $specialDiscountProduct)
                <div
                    class="min-w-64 p-2 border border-(--color-border) rounded-[10px] relative flex flex-col justify-between productItem">
                    {{-- <div
                        class="absolute top-[5px] lg:top-2.5 left-[5px] lg:left-2.5 hidden md:flex flex-col gap-2 z-555 overflow-hidden">
                        <button
                            class="size-8 border border-(--color-border) buttonProduct btnAnimation bg-white rounded-sm flex justify-center items-center -translate-x-4 opacity-0 cursor-pointer transition-all duration-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 448 512">
                                <path fill="var(--color-fill)"
                                    d="M306.8 6.3C311.4 2.2 317.3 0 323.4 0c17.2 0 29.2 17.1 23.4 33.3L278.7 224H389c14.9 0 27 12.1 27 27c0 7.8-3.3 15.1-9.1 20.3L141.1 505.8c-4.5 4-10.4 6.2-16.5 6.2c-17.2 0-29.2-17.1-23.5-33.3L169.3 288H57.8C43.6 288 32 276.4 32 262.2c0-7.4 3.2-14.4 8.7-19.3L306.8 6.3zm.5 42.4L74.1 256H192c5.2 0 10.1 2.5 13.1 6.8s3.7 9.7 2 14.6L140.6 463.6 375.8 256H256c-5.2 0-10.1-2.5-13.1-6.8s-3.7-9.7-2-14.6l66.4-186z" />
                            </svg>
                        </button>
                        <button
                                class="size-8 border border-(--color-border) buttonProduct bg-white rounded-sm flex justify-center items-center -translate-x-4 opacity-0 cursor-pointer transition-all duration-500 delay-50">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 512 512">
                                    <path fill="var(--color-fill)"
                                        d="M244 130.6l-12-13.5-4.2-4.7c-26-29.2-65.3-42.8-103.8-35.8c-53.3 9.7-92 56.1-92 110.3v3.5c0 32.3 13.4 63.1 37.1 85.1L253 446.8c.8 .7 1.9 1.2 3 1.2s2.2-.4 3-1.2L443 275.5c23.6-22 37-52.8 37-85.1v-3.5c0-54.2-38.7-100.6-92-110.3c-38.5-7-77.8 6.6-103.8 35.8l-4.2 4.7-12 13.5c-3 3.4-7.4 5.4-12 5.4s-8.9-2-12-5.4zm34.9-57.1C311 48.4 352.7 37.7 393.7 45.1C462.2 57.6 512 117.3 512 186.9v3.5c0 36-13.1 70.6-36.6 97.5c-3.4 3.8-6.9 7.5-10.7 11l-184 171.3c-.8 .8-1.7 1.5-2.6 2.2c-6.3 4.9-14.1 7.5-22.1 7.5c-9.2 0-18-3.5-24.8-9.7L47.2 299c-3.8-3.5-7.3-7.2-10.7-11C13.1 261 0 226.4 0 190.4v-3.5C0 117.3 49.8 57.6 118.3 45.1c40.9-7.4 82.6 3.2 114.7 28.4c6.7 5.3 13 11.1 18.7 17.6l4.2 4.7 4.2-4.7c4.2-4.7 8.6-9.1 13.3-13.1c1.8-1.5 3.6-3 5.4-4.5z" />
                                </svg>
                            </button>
                            <button
                                class="size-8 border border-(--color-border) buttonProduct bg-white rounded-sm flex justify-center items-center -translate-x-4 opacity-0 cursor-pointer transition-all duration-500 delay-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 448 512">
                                    <path fill="var(--color-fill)"
                                        d="M443.3 139.3c6.2-6.2 6.2-16.4 0-22.6l-96-96c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6L393.4 112 16 112c-8.8 0-16 7.2-16 16s7.2 16 16 16l377.4 0-68.7 68.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0l96-96zm-342.6 352c6.2 6.2 16.4 6.2 22.6 0s6.2-16.4 0-22.6L54.6 400 432 400c8.8 0 16-7.2 16-16s-7.2-16-16-16L54.6 368l68.7-68.7c6.2-6.2 6.2-16.4 0-22.6s-16.4-6.2-22.6 0l-96 96c-6.2 6.2-6.2 16.4 0 22.6l96 96z" />
                                </svg>
                            </button>
                        <button
                            class="size-8 border border-(--color-border) buttonProduct bg-white rounded-sm flex justify-center items-center -translate-x-4 opacity-0 cursor-pointer transition-all duration-500 delay-150">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 576 512">
                                <path fill="var(--color-fill)"
                                    d="M117.2 136C160.3 96 217.6 64 288 64s127.7 32 170.8 72c43.1 40 71.9 88 85.2 120c-13.3 32-42.1 80-85.2 120c-43.1 40-100.4 72-170.8 72s-127.7-32-170.8-72C74.1 336 45.3 288 32 256c13.3-32 42.1-80 85.2-120zM288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM192 256a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zm224 0a128 128 0 1 0 -256 0 128 128 0 1 0 256 0z" />
                            </svg>
                        </button>
                    </div> --}}
                    {{-- <div
                        class="absolute top-[5px] lg:top-2.5 left-[5px] lg:left-2.5 md:hidden flex flex-col gap-2 z-555 overflow-hidden">
                        <button
                            class="size-5 sm:size-7 border border-(--color-border) bg-white rounded-sm flex justify-center items-center cursor-pointer productAnimation">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-3 sm:size-4" viewBox="0 0 448 512">
                                <path fill="var(--color-fill)"
                                    d="M306.8 6.3C311.4 2.2 317.3 0 323.4 0c17.2 0 29.2 17.1 23.4 33.3L278.7 224H389c14.9 0 27 12.1 27 27c0 7.8-3.3 15.1-9.1 20.3L141.1 505.8c-4.5 4-10.4 6.2-16.5 6.2c-17.2 0-29.2-17.1-23.5-33.3L169.3 288H57.8C43.6 288 32 276.4 32 262.2c0-7.4 3.2-14.4 8.7-19.3L306.8 6.3zm.5 42.4L74.1 256H192c5.2 0 10.1 2.5 13.1 6.8s3.7 9.7 2 14.6L140.6 463.6 375.8 256H256c-5.2 0-10.1-2.5-13.1-6.8s-3.7-9.7-2-14.6l66.4-186z" />
                            </svg>
                        </button>
                        <button
                                class="size-5 sm:size-7 border border-(--color-border) bg-white rounded-sm flex justify-center items-center cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-3 sm:size-4" viewBox="0 0 512 512">
                                    <path fill="var(--color-fill)"
                                        d="M244 130.6l-12-13.5-4.2-4.7c-26-29.2-65.3-42.8-103.8-35.8c-53.3 9.7-92 56.1-92 110.3v3.5c0 32.3 13.4 63.1 37.1 85.1L253 446.8c.8 .7 1.9 1.2 3 1.2s2.2-.4 3-1.2L443 275.5c23.6-22 37-52.8 37-85.1v-3.5c0-54.2-38.7-100.6-92-110.3c-38.5-7-77.8 6.6-103.8 35.8l-4.2 4.7-12 13.5c-3 3.4-7.4 5.4-12 5.4s-8.9-2-12-5.4zm34.9-57.1C311 48.4 352.7 37.7 393.7 45.1C462.2 57.6 512 117.3 512 186.9v3.5c0 36-13.1 70.6-36.6 97.5c-3.4 3.8-6.9 7.5-10.7 11l-184 171.3c-.8 .8-1.7 1.5-2.6 2.2c-6.3 4.9-14.1 7.5-22.1 7.5c-9.2 0-18-3.5-24.8-9.7L47.2 299c-3.8-3.5-7.3-7.2-10.7-11C13.1 261 0 226.4 0 190.4v-3.5C0 117.3 49.8 57.6 118.3 45.1c40.9-7.4 82.6 3.2 114.7 28.4c6.7 5.3 13 11.1 18.7 17.6l4.2 4.7 4.2-4.7c4.2-4.7 8.6-9.1 13.3-13.1c1.8-1.5 3.6-3 5.4-4.5z" />
                                </svg>
                            </button>
                            <button
                                class="size-5 sm:size-7 border border-(--color-border) bg-white rounded-sm flex justify-center items-center cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-3 sm:size-4" viewBox="0 0 448 512">
                                    <path fill="var(--color-fill)"
                                        d="M443.3 139.3c6.2-6.2 6.2-16.4 0-22.6l-96-96c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6L393.4 112 16 112c-8.8 0-16 7.2-16 16s7.2 16 16 16l377.4 0-68.7 68.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0l96-96zm-342.6 352c6.2 6.2 16.4 6.2 22.6 0s6.2-16.4 0-22.6L54.6 400 432 400c8.8 0 16-7.2 16-16s-7.2-16-16-16L54.6 368l68.7-68.7c6.2-6.2 6.2-16.4 0-22.6s-16.4-6.2-22.6 0l-96 96c-6.2 6.2-6.2 16.4 0 22.6l96 96z" />
                                </svg>
                            </button>
                        <button
                            class="size-5 sm:size-7 border border-(--color-border) bg-white rounded-sm flex justify-center items-center cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-3 sm:size-4" viewBox="0 0 576 512">
                                <path fill="var(--color-fill)"
                                    d="M117.2 136C160.3 96 217.6 64 288 64s127.7 32 170.8 72c43.1 40 71.9 88 85.2 120c-13.3 32-42.1 80-85.2 120c-43.1 40-100.4 72-170.8 72s-127.7-32-170.8-72C74.1 336 45.3 288 32 256c13.3-32 42.1-80 85.2-120zM288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM192 256a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zm224 0a128 128 0 1 0 -256 0 128 128 0 1 0 256 0z" />
                            </svg>
                        </button>

                    </div> --}}
                    {{-- <span
                            class="inline-block absolute top-[5px] lg:top-2.5 right-[5px] lg:right-2.5 py-[3px] px-2 bg-(--color-discount-bg) text-(--color-primary-text) rounded-full text-[8px] lg:text-[12px] text-center z-11">18%</span> --}}
                    <div>
                        <a href="{{ route('product-show', [$specialDiscountProduct]) }}"
                            class="flex justify-center mb-1 overflow-hidden">
                            <img src=" {{ $specialDiscountProduct['img'] }}  "
                                class="w-full transition-all duration-500 hover:scale-[1.04] relative z-10 max-h-[276px] lg:max-h-[186px] md:max-h-[348px] xl:max-h-[254px] h-[254px] object-cover"
                                alt="product">
                        </a>
                    </div>
                    <div>
                        <div class="mb-2 font-bold text-[14px] lg:text-base">
                            <a href="{{ route('product-show', [$specialDiscountProduct]) }}"
                                class="text-[12px] lg:text-[14px] text-(--color-text)">{{ $specialDiscountProduct->title }}</a>
                        </div>
                        <div>
                            <div class="mb-1">
                                <a
                                    href="{{ route('product-show', [$specialDiscountProduct]) }}">{{ $specialDiscountProduct->description }}</a>
                            </div>
                            <div class="flex flex-row items-center mb-3 gap-2">
                                <div class="w-1/2 flex flex-row items-center text-[12px]">
                                    <div class="text-(--color-secondary-text) flex flex-row items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-3 lg:size-4"
                                            viewBox="0 0 576 512">
                                            <path fill="#8C9EC5"
                                                d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-3 lg:size-4"
                                            viewBox="0 0 576 512">
                                            <path fill="#8C9EC5"
                                                d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-3 lg:size-4"
                                            viewBox="0 0 576 512">
                                            <path fill="#8C9EC5"
                                                d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-3 lg:size-4"
                                            viewBox="0 0 576 512">
                                            <path fill="#8C9EC5"
                                                d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-3 lg:size-4"
                                            viewBox="0 0 576 512">
                                            <path fill="#8C9EC5"
                                                d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z" />
                                        </svg>
                                    </div>
                                    <span>(0)</span>
                                </div>
                                {{-- <div>
                                        <span
                                            class="lg:py-[3px] py-px px-0.5 lg:px-[5px] bg-(--color-secondary) text-(--color-primary-text) rounded-full text-[10px]">
                                            تستی
                                        </span>
                                    </div> --}}
                            </div>
                            <div
                                class="hidden lg:flex flex-row items-center gap-2 text-(--color-text) mb-3 text-[18px] font-bold">
                                <span class="font-bold text-lg">{{ $specialDiscountProduct->price['price'] }}</span>
                                <span class="text-sm">تومان</span>
                            </div>
                        </div>
                        <div class="flex lg:hidden flex-row items-start gap-2 text-(--color-text) mb-3 font-bold">
                            <span class="font-bold text-lg">{{ $specialDiscountProduct->price['price'] }}</span>
                            <span class="text-sm">تومان</span>
                        </div>
                        <div class="flex flex-col lg:flex-row gap-2 lg:gap-4">
                            <div class="w-full h-12">
                                <button
                                    onclick="addToShoppingCart(this,'{{ $specialDiscountProduct->id }}', '{{ $specialDiscountProduct->title }}', '{{ $specialDiscountProduct->description }}', '{{ $specialDiscountProduct['img'] }}', '{{ $specialDiscountProduct->price['price'] }}')"
                                    class="w-full h-full py-3 lg:py-1 text-[12px] text-(--color-primary-text) bg-(--color-bg-card-btn) leading-5 rounded-[10px] cursor-pointer">افزودن
                                    به سبد خرید</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </section>
    <!-- top products -->

    <!-- offers -->
    <section class="text-(--color-text) pt-3">
        <div class="grid grid-cols-1 sm:grid-cols-2 2xl:grid-cols-4 gap-[30px] py-10">
            @foreach ($banners as $banner)
                <div class="bg-(--color-primary-btn) p-2.5 rounded-[10px] flex flex-col lg:flex-row items-center gap-2.5">
                    <div class="lg:w-5/12">
                        <img src="{{ $banner->image }}" class="w-[220px] sm:w-[80%] mx-auto lg:w-full"
                            alt="product image">
                    </div>
                    <div class="lg:w-7/12 p-2.5">
                        <div class="mb-1">
                            <h2 class="text-lg font-bold leading-8">
                                {{ $banner->title }}
                            </h2>
                        </div>
                        <div>
                            <a href="{{ $banner->link_href }}"
                                class="flex flex-row items-center gap-2 transitin-all duration-[.25s] hover:-translate-y-0.5">
                                <span class="leading-10 text-sm font-bold">{{ $banner->link_content }}</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 320 512">
                                    <path fill="var(--color-fill)"
                                        d="M47 239c-9.4 9.4-9.4 24.6 0 33.9L207 433c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9L97.9 256 241 113c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0L47 239z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <!-- offers -->

    <!-- related products -->
    <section class="text-(--color-text) pt-3">
        <div class="flex flex-col xl:flex-row items-stretch gap-10 py-10">


            <!-- height problem -->
            @if ($bigBanner)
                <div
                    class="w-full children hidden xl:block xl:w-1/4 p-[30px] rounded-xl bg-[url({{ $bigBanner?->image }})] bg-bottom-right bg-cover bg-no-repeat rotate-y-180">
                    <div class="rotate-y-180 h-[415px]">
                        <h2 class="text-[28px] leading-12 font-bold">
                            {{ $bigBanner?->title }}
                        </h2>
                        <div class="flex mt-3">
                            <a href="{{ $bigBanner?->link_href }}"
                                class="flex flex-row items-center gap-2 bg-(--color-primary) rounded-[10px] py-2 px-5 text-(--color-primary-text) font-bold">
                                <span>{{ $bigBanner?->link_content }}</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 320 512">
                                    <path fill="#fff"
                                        d="M47 239c-9.4 9.4-9.4 24.6 0 33.9L207 433c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9L97.9 256 241 113c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0L47 239z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            @endif

            <!-- height problem -->
            @if ($categories->isNotEmpty())
                <div class="w-full children xl:w-3/4">
                    <div class="w-full flex flex-col gap-5">
                        {{-- [&::-webkit-scrollbar]:w-0 --}}
                        <div class="w-full flex flex-row justify-between items-center gap-5 font-bold overflow-x-auto pb-5 px-5"
                            style="scrollbar-width: thin; scrollbar-color: var(--color-primary) var(--color-primary-text);">
                            <p class="category-title cursor-pointer text-(--color-text)"
                                onclick="getRelatedProducts('all', 'home')">
                                <span class="inline-block w-[100px]">
                                    همه دسته ها
                                </span>
                            </p>
                            @foreach ($categories as $category)
                                <p class="category-title cursor-pointer text-(--color-secondary-text)"
                                    onclick="getRelatedProducts({{ $category->id }}, 'home')">
                                    <span class="inline-block text-center w-[110px]">
                                        {{ $category['title'] }}
                                    </span>
                                </p>
                            @endforeach
                        </div>

                        <div class="w-full flex flex-row justify-between items-center">
                            <div class="text-[14px] text-(--color-secondary-text)">
                                <span id="relatedProductsCount">{{ count($products) }}</span>
                                <span>محصول</span>
                            </div>
                            <div class="flex flex-row justify-end items-center gap-5">
                                <span
                                    class="size-[35px] rounded-xl border border-(--color-border) flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 320 512">
                                        <path fill="#8C9EC5"
                                            d="M273 239c9.4 9.4 9.4 24.6 0 33.9L113 433c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l143-143L79 113c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0L273 239z" />
                                    </svg>
                                </span>
                                <span
                                    class="size-[35px] rounded-xl border border-(--color-border) flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 320 512">
                                        <path fill="#8C9EC5"
                                            d="M47 239c-9.4 9.4-9.4 24.6 0 33.9L207 433c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9L97.9 256 241 113c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0L47 239z" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-row items-stretch justify-start overflow-x-scroll gap-4 py-5"
                        id="relatedProducts"
                        style="scrollbar-width: thin; scrollbar-color: var(--color-primary) var(--color-primary-text);">
                        @foreach ($products as $product)
                            <div
                                class="p-2 min-w-65 h-100 border border-(--color-border) rounded-[10px] relative flex flex-col justify-between productItem">

                                <div>
                                    <a href="{{ route('product-show', [$product]) }}"
                                        class="flex justify-center mb-1 overflow-hidden">
                                        <img src="{{ $product['img'] }}"
                                            class="w-full transition-all duration-500 hover:scale-[1.04] relative z-10 max-h-[182px] lg:max-h-[186px] md:max-h-[348px] xl:max-h-[171px]"
                                            alt="product">
                                    </a>
                                </div>
                                <div class="flex flex-col">
                                    <div class="mb-2 font-bold text-[14px] lg:text-base">
                                        <a href="{{ route('product-show', [$product]) }}"
                                            class="text-[12px] lg:text-[14px] text-(--color-text)">{{ $product->title }}</a>
                                    </div>
                                    <div class="mb-1">
                                        <a href="{{ route('product-show', [$product]) }}">{{ $product->description }}</a>
                                    </div>
                                </div>
                                <div class="flex flex-row items-center mb-3 gap-3">
                                    <div class="lg:w-1/2 flex flex-row items-center text-[12px]">
                                        <div class="text-(--color-secondary-text) flex flex-row items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-3 lg:size-4"
                                                viewBox="0 0 576 512">
                                                <path fill="#8C9EC5"
                                                    d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-3 lg:size-4"
                                                viewBox="0 0 576 512">
                                                <path fill="#8C9EC5"
                                                    d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-3 lg:size-4"
                                                viewBox="0 0 576 512">
                                                <path fill="#8C9EC5"
                                                    d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-3 lg:size-4"
                                                viewBox="0 0 576 512">
                                                <path fill="#8C9EC5"
                                                    d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-3 lg:size-4"
                                                viewBox="0 0 576 512">
                                                <path fill="#8C9EC5"
                                                    d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z" />
                                            </svg>
                                        </div>
                                        <span>(0)</span>
                                    </div>

                                </div>
                                <div class="">
                                    <div
                                        class="hidden lg:flex flex-row items-center gap-2 text-(--color-text) mb-3 text-[18px] font-bold">
                                        <span class="font-bold text-lg">{{ $product->price['price'] }}</span>
                                        <span class="text-sm">تومان</span>
                                    </div>
                                    <div
                                        class="flex lg:hidden flex-row items-start gap-2 text-(--color-text) mb-3 font-bold">
                                        <span class="font-bold text-lg">{{ $product->price['price'] }}</span>
                                        <span class="text-sm">تومان</span>
                                    </div>
                                </div>
                                <div class="flex flex-col lg:flex-row gap-2 lg:gap-4">
                                    <div class="w-full h-12">
                                        <button
                                            onclick="addToShoppingCart(this,'{{ $product->id }}', '{{ $product->title }}', '{{ $product->description }}', '{{ $product['img'] }}', '{{ $product->price['price'] }}')"
                                            class="w-full h-full py-3 lg:py-1 text-[12px] lg:text-[14px] text-(--color-primary-text) bg-(--color-bg-card-btn) leading-5 rounded-[10px] cursor-pointer">افزودن
                                            به سبد خرید</button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </section>
    <!-- related products -->

    @if ($footerTile)
        <section class="text-(--color-text) pt-3">
            <div class="py-10">
                <div
                    class="flex flex-col xl:flex-row items-stretch gap-5 rounded-[10px] bg-(--color-bg-contact-section) bg-[url({{ $footerTile?->bg_img }})] bg-cover bg-no-repeat bg-center">
                    <div class="w-full xl:w-1/2 px-[50px] pt-[60px] pb-[70px] flex flex-col justify-start gap-5">
                        <div>
                            <h2
                                class="text-(--color-primary-text) sm:text-3xl lg:text-[50px] 2xl:leading-[75px] font-bold mb-1">
                                {{ $footerTile?->title }}
                            </h2>
                            <p class="text-(--color-primary-text) py-5">
                                {{ $footerTile?->text }}
                            </p>
                        </div>
                        <div class="w-full bg-white rounded-[10px] p-3">
                            <form action="{{ route('homeForm-store') }}" method="post">
                                @csrf
                                <div class="rounded-lg 2xl:border-none border border-gray-300 relative">
                                    <input type="email" required
                                        class="block w-full 2xl:w-2/3 2xl:mx-auto outline-none p-5 2xl:mb-4 rounded-lg"
                                        placeholder="ایمیل خود را وارد کنید" name="contactMethod" id="">
                                    <button type="submit"
                                        class="absolute left-3 top-2 2xl:static py-3 px-8 rounded-lg 2xl:mx-auto 2xl:block bg-(--color-btn-contact) text-(--color-primary-text) hover:bg-(--color-btn-contact-hover) transition-all duration-300">ثبت
                                        نام</button>

                                </div>
                            </form>
                        </div>
                    </div>
                    <div
                        class="w-full xl:w-1/2 bg-[url({{ $footerTile?->img }})] bg-cover bg-center bg-no-repeat rounded-l-[10px]">
                    </div>
                </div>
            </div>
        </section>
    @endif


@endsection
