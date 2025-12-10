<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}" type="text/css">
    <title>@yield('title')</title>
    <style>
        :root {
            <?php
            foreach ($settings as $setting) {
                echo '--color-' . $setting->meta_key . ': ' . $setting->meta_value . ';';
            }
            ?>
        }
    </style>
</head>

<body>

    <!-- ads -->
    <!-- <div class="w-full h-10 bg-(--color-primary) flex flex-row justify-around">
        <span class="text-(--color-primary-text) py-2 px-4 font-medium flex justify-start items-center">
            <img src="https://s.w.org/images/core/emoji/16.0.1/svg/1f6d2.svg" class="size-4 mx-2" alt="">
            ارسال رایگان برای سفارش‌های بالای ۵۰ دلار
        </span>
        <span class="text-(--color-primary-text) py-2 px-4 font-medium flex justify-start items-center">
            <img src="https://s.w.org/images/core/emoji/16.0.1/svg/1f6d2.svg" class="size-4 mx-2" alt="">
            ارسال رایگان برای سفارش‌های بالای ۵۰ دلار
        </span>
        <span class="text-(--color-primary-text) py-2 px-4 font-medium flex justify-start items-center">
            <img src="https://s.w.org/images/core/emoji/16.0.1/svg/1f6d2.svg" class="size-4 mx-2" alt="">
            ارسال رایگان برای سفارش‌های بالای ۵۰ دلار
        </span>
    </div>  -->
    <!-- ads -->

    <header class="2xl:container 2xl:px-4 mx-auto w-full border-b border-(--color-border) py-3">

        <!-- desktop header -->

        <div class="2xl:w-full w-[98%] mx-auto lg:flex xl:flex-row hidden lg:flex-col items-center gap-5">
            <div class="xl:w-8/12 w-full flex flex-row justify-center gap-5 xl:justify-start items-center">
                <!-- logo -->
                <div class="w-1/12 h-[33px]">
                    @foreach ($logo as $l)
                        <a href="{{ $l['link_href'] }}" class="inline-block size-full">
                            <img src="{{ asset($l['logo']) }}" class="size-full" alt="{{ $l['alt_text'] }}">
                        </a>
                    @endforeach
                </div>
                <!-- logo -->

                <div class="2xl:w-5/12 xl:w-6/12 ">
                    <form action="{{ route('search-search') }}" method="post"
                        class="border border-(--color-border) rounded-full min-w-[395px] w-[395px] p-1 text-sm flex flex-row">
                        @csrf
                        <select name="category" class="min-w-[150px] text-(--color-text)" id="">
                            <option value="all">
                                همه دسته ها
                            </option>
                            @foreach ($categories as $category)
                                <option value="{{ $category['id'] }}">{{ $category['title'] }}</option>
                            @endforeach
                        </select>
                        <input type="text" required
                            class="w-full border-r border-(--color-border) pr-1.5 mr-1.5 text-(--color-text) text-sm py-1 outline-none rounded-l-full"
                            placeholder="جست و جوی دسته بندی، محصول ..." name="searchedValue" id="">
                        <button type="submit" class="cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-5">
                                <path fill="black"
                                    d="M368 208A160 160 0 1 0 48 208a160 160 0 1 0 320 0zM337.1 371.1C301.7 399.2 256.8 416 208 416C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208c0 48.8-16.8 93.7-44.9 129.1L505 471c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L337.1 371.1z" />
                            </svg>
                        </button>
                    </form>
                </div>

                <!-- chocolate menu -->
                <div class="size-9 p-2 hidden 2xl:hidden lg:flex flex-col gap-1 bg-(--color-primary-btn) rounded-sm cursor-pointer"
                    id="chocIcon">
                    <div class="flex flex-row justify-between items-center">
                        <span class="size-1 bg-(--color-text) rounded-full"></span>
                        <span class="size-1 bg-(--color-text) rounded-full"></span>
                        <span class="size-1 bg-(--color-text) rounded-full"></span>
                    </div>
                    <div class="flex flex-row justify-between items-center">
                        <span class="size-1 bg-(--color-text) rounded-full"></span>
                        <span class="size-1 bg-(--color-text) rounded-full"></span>
                        <span class="size-1 bg-(--color-text) rounded-full"></span>
                    </div>
                    <div class="flex flex-row justify-between items-center">
                        <span class="size-1 bg-(--color-text) rounded-full"></span>
                        <span class="size-1 bg-(--color-text) rounded-full"></span>
                        <span class="size-1 bg-(--color-text) rounded-full"></span>
                    </div>
                </div>
                <!-- chocolate menu -->

                <!-- 2xl menu -->
                <ul class="w-6/12 hidden 2xl:flex flex-row justify-start items-center gap-4 text-(--color-text)">
                    <li class="menuItemParent">
                        <a href="{{ route('category-index') }}"
                            class="font-semibold text-sm flex flex-row items-center gap-1 transition-all duration-300 py-4 menuLink">
                            <span>
                                دسته بندی
                            </span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-3" viewBox="0 0 448 512">
                                <path fill="var(--color-fill)"
                                    d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z" />
                            </svg>
                        </a>
                        <div
                            class="absolute w-full py-5 max-h-0 border border-(--color-border) bg-white opacity-0 mt-8 right-0 invisible z-9999 transition-all duration-500">
                            <div class="h-100 w-11/12 mx-auto flex flex-row items-start gap-10">
                                <div class="h-90 w-1/5 flex flex-col justify-start gap-4 overflow-y-auto">
                                    @foreach ($categories as $category)
                                        <a href="{{ route('search-cat-products', [$category]) }}"
                                            class="block rounded-[10px] text-(--color-text) py-4 px-9 bg-(--color-primary-btn) transition-all duration-300 hover:bg-(--color-bg-hover-btn) hover:text-(--color-primary-text) cursor-pointer subMenuCat">{{ $category->title }}</a>
                                    @endforeach
                                </div>
                                <div class="w-4/5">
                                    <!-- contents -->
                                    <div class="h-90 grid grid-cols-4 gap-4 max-h-[575px] overflow-y-auto">
                                        @foreach ($products as $product)
                                            <div class="p-4 border border-(--color-border) rounded-[10px] h-1/2">
                                                <a href="http://localhost/shahkar/public/product/show/{{ $product->id }}"
                                                    class="block mb-1">
                                                    @if ($product->medias)
                                                        @foreach ($product->medias as $media)
                                                            @if ($media['is_main'] == 1)
                                                                <img src=" {{ asset('storage/' . $media['path']) }}  "
                                                                    class="w-[85px] h-20 mx-auto" alt="product">
                                                                @break

                                                            @else
                                                                <img src="{{ asset('assets/img/noImage.png') }}"
                                                                    class="w-[85px] h-20 mx-auto" alt="product">
                                                                @break
                                                            @endif
                                                        @endforeach
                                                    @else
                                                        <img src="{{ asset('assets/img/noImage.png') }}"
                                                            class="w-[85px] h-20 mx-auto" alt="product">
                                                    @endif
                                                    <span
                                                        class="inline-block w-full text-center pt-3">{{ $product->title }}</span>
                                                    <span
                                                        class="block text-center text-[14px] text-(--color-secondary-text)">{{ $product->description }}</span>
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                    <!-- contents -->
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="relative menuItemParent">
                        <a href="{{ route('course.list') }}"
                            class="text-(--color-text) font-semibold text-sm flex flex-row items-center gap-1 transition-all duration-300 py-4 menuLink">
                            <span>
                                دوره ها
                            </span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-3" viewBox="0 0 448 512">
                                <path fill="var(--color-fill)"
                                    d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z" />
                            </svg>
                        </a>
                        <ul
                            class="absolute min-w-[250px] py-4 px-6 border border-(--color-border) bg-white top-full opacity-0 mt-8 right-0 invisible z-9999 transition-all duration-500 menuItemChild">
                            @foreach ($courses as $course)
                                <li>
                                    <a href="{{ route('course.show', [$course]) }}"
                                        class="block py-2.5 text-sm font-semibold transition-all duration-300 hover:text-(--color-primary)">{{ $course['title'] }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="relative menuItemParent">
                        <a href="{{ route('product-index') }}"
                            class="text-(--color-text) font-semibold text-sm flex flex-row items-center gap-1 transition-all duration-300 py-4 menuLink">
                            <span>
                                محصولات
                            </span>
                            {{-- <svg xmlns="http://www.w3.org/2000/svg" class="size-3" viewBox="0 0 448 512">
                                <path fill="var(--color-fill)"
                                    d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z" />
                            </svg> --}}
                        </a>
                        {{-- <ul
                            class="absolute min-w-[250px] py-4 px-6 border border-(--color-border) bg-white top-full opacity-0 mt-8 right-0 invisible z-9999 transition-all duration-500 menuItemChild">
                            <li>
                                <a href=""
                                    class="block py-2.5 text-sm font-semibold transition-all duration-300 hover:text-(--color-primary)"></a>
                            </li>
                        </ul> --}}
                    </li>
                    {{-- @foreach ($menuItems as $menuItem)
                        @if ($menuItem['active'] && $menuItem['parent_id'] == 0)
                            <li class="relative menuItemParent">
                                <a href="{{ $menuItem['link'] }}"
                                    class="text-(--color-text) font-semibold text-sm flex flex-row items-center gap-1 transition-all duration-300 py-4 menuLink">
                                    <span>
                                        {{ $menuItem['title'] }}
                                    </span>
                                    @if (count($menuItem['children']) != 0)
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-3" viewBox="0 0 448 512">
                                            <path fill="var(--color-fill)"
                                                d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z" />
                                        </svg>
                                    @endif
                                </a>
                                @if (count($menuItem['children']) != 0)
                                    <ul
                                        class="absolute min-w-[250px] py-4 px-6 border border-(--color-border) bg-white top-full opacity-0 mt-8 right-0 invisible z-9999 transition-all duration-500 menuItemChild">
                                        @foreach ($menuItem['children'] as $child)
                                            @if ($child['active'])
                                                <li>
                                                    <a href="{{ $child['link'] }}"
                                                        class="block py-2.5 text-sm font-semibold transition-all duration-300 hover:text-(--color-primary)">{{ $child['title'] }}</a>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endif
                    @endforeach --}}
                    <li>
                        <a href="{{ route('aboutus-index') }}"
                            class="text-(--color-text) font-semibold text-sm gap-1 transition-all duration-300 py-4 menuLink">درباره
                            ما</a>
                    </li>
                    <li>
                        <a href="{{ route('contactus-create') }}"
                            class="text-(--color-text) font-semibold text-sm gap-1 transition-all duration-300 py-4 menuLink">تماس
                            با ما</a>
                    </li>
                </ul>
                <!-- 2xl menu -->


            </div>
            <div class="xl:w-4/12 w-full">
                <div class="flex flex-row md:justify-center xl:justify-end items-center gap-5">
                    <div class="relative menuItemParent flex items-center gap-5 cursor-pointer">
                        @if ($user)
                            <div class="size-6">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-full" viewBox="0 0 448 512">
                                    <path fill="var(--color-fill)"
                                        d="M320 128a96 96 0 1 0 -192 0 96 96 0 1 0 192 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM32 480H416c-1.2-79.7-66.2-144-146.3-144H178.3c-80 0-145 64.3-146.3 144zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z" />
                                </svg>
                            </div>
                            <div
                                class="absolute min-w-[250px] py-4 px-6 border border-(--color-border) bg-white top-10 opacity-0 -left-full invisible z-9999 transition-all duration-500 mt-10">
                                <ul class="text-(--color-text)">
                                    <li class="flex justify-between items-center">
                                        <a href="{{ route('user.profile', [$user]) }}"
                                            class="block py-2.5 text-sm font-semibold transition-all duration-300 hover:text-(--color-primary)">{{ $user['name'] }}
                                            {{ $user['family'] }}</a>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-3" viewBox="0 0 320 512">
                                            <path fill="var(--color-fill)"
                                                d="M47 239c-9.4 9.4-9.4 24.6 0 33.9L207 433c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9L97.9 256 241 113c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0L47 239z">
                                            </path>
                                        </svg>
                                    </li>
                                    <li><a href="{{ route('user.edit', [$user]) }}"
                                            class="block py-2.5 text-sm font-semibold transition-all duration-300 hover:text-(--color-primary)">ویرایش
                                            پروفایل</a></li>
                                    <li><a href="{{ route('user.logout') }}"
                                            class="block py-2.5 text-sm font-semibold transition-all duration-300 hover:text-(--color-primary)">خروج
                                            از حساب کاربری</a></li>
                                    <li><a href="#"
                                            class="block py-2.5 text-sm font-semibold transition-all duration-300 hover:text-(--color-primary)">دیدگاه
                                            ها و پرسش ها</a></li>
                                </ul>
                            </div>
                        @else
                            <div class="border border-(--color-border) py-2 px-6 rounded-md">
                                <a href="{{ route('user.login') }}"
                                    class="block text-(--color-text) leading-[22px] font-medium text-sm">ورود | ثبت
                                    نام</a>
                            </div>
                        @endif
                    </div>
                    {{-- <a href="#" class="inline-block w-8 h-6 relative">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-6" viewBox="0 0 512 512">
                            <path fill="var(--color-fill)"
                                d="M225.8 468.2l-2.5-2.3L48.1 303.2C17.4 274.7 0 234.7 0 192.8v-3.3c0-70.4 50-130.8 119.2-144C158.6 37.9 198.9 47 231 69.6c9 6.4 17.4 13.8 25 22.3c4.2-4.8 8.7-9.2 13.5-13.3c3.7-3.2 7.5-6.2 11.5-9c0 0 0 0 0 0C313.1 47 353.4 37.9 392.8 45.4C462 58.6 512 119.1 512 189.5v3.3c0 41.9-17.4 81.9-48.1 110.4L288.7 465.9l-2.5 2.3c-8.2 7.6-19 11.9-30.2 11.9s-22-4.2-30.2-11.9zM239.1 145c-.4-.3-.7-.7-1-1.1l-17.8-20c0 0-.1-.1-.1-.1c0 0 0 0 0 0c-23.1-25.9-58-37.7-92-31.2C81.6 101.5 48 142.1 48 189.5v3.3c0 28.5 11.9 55.8 32.8 75.2L256 430.7 431.2 268c20.9-19.4 32.8-46.7 32.8-75.2v-3.3c0-47.3-33.6-88-80.1-96.9c-34-6.5-69 5.4-92 31.2c0 0 0 0-.1 .1s0 0-.1 .1l-17.8 20c-.3 .4-.7 .7-1 1.1c-4.5 4.5-10.6 7-16.9 7s-12.4-2.5-16.9-7z" />
                        </svg>
                        <span
                            class="flex justify-center items-center -top-2.5 -left-2.5 absolute size-5 bg-(--color-primary) rounded-full text-(--color-primary-text) text-sm">0</span>
                    </a>
                    <a href="#" class="inline-block w-8 h-6 relative">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-6" viewBox="0 0 448 512">
                            <path fill="var(--color-fill)"
                                d="M103 497c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-55-55L424 408c13.3 0 24-10.7 24-24s-10.7-24-24-24L81.9 360l55-55c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0L7 367c-9.4 9.4-9.4 24.6 0 33.9l96 96zM441 145c9.4-9.4 9.4-24.6 0-33.9L345 15c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l55 55L24 104c-13.3 0-24 10.7-24 24s10.7 24 24 24l342.1 0-55 55c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l96-96z" />
                        </svg>
                        <span
                            class="flex justify-center items-center -top-2.5 -left-2.5 absolute size-5 bg-(--color-primary) rounded-full text-(--color-primary-text) text-sm">0</span>
                    </a> --}}
                    <div class="relative menuItemParent">
                        <a href="#" class="inline-block w-8 h-6 relative">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-6 rotate-y-180"
                                viewBox="0 0 576 512">
                                <path fill="var(--color-fill)"
                                    d="M24 0C10.7 0 0 10.7 0 24S10.7 48 24 48H69.5c3.8 0 7.1 2.7 7.9 6.5l51.6 271c6.5 34 36.2 58.5 70.7 58.5H488c13.3 0 24-10.7 24-24s-10.7-24-24-24H199.7c-11.5 0-21.4-8.2-23.6-19.5L170.7 288H459.2c32.6 0 61.1-21.8 69.5-53.3l41-152.3C576.6 57 557.4 32 531.1 32h-411C111 12.8 91.6 0 69.5 0H24zM131.1 80H520.7L482.4 222.2c-2.8 10.5-12.3 17.8-23.2 17.8H161.6L131.1 80zM176 512a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm336-48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0z" />
                            </svg>
                            <span id="shoppingCartNumber"
                                class="flex justify-center items-center -top-2.5 -left-2.5 absolute size-5 bg-(--color-primary) rounded-full text-(--color-primary-text) text-sm">0</span>
                        </a>
                        {{-- shopping cart hover box by mr.olyafam --}}
                        {{-- <div
                            class="absolute left-5 top-10 w-90 bg-white p-2 border border-(--color-border) mt-10 z-9999 transition-all duration-500 invisible opacity-0">
                            <div class="text-(--color-text) font-light text-sm">
                                <span>1</span>
                                <span>کالا</span>
                            </div>

                            <div class="max-h-80 overflow-y-auto my-8">
                                <a href="#">
                                    <div class="w-full flex gap-3 mb-10">
                                        <div class="w-1/3">
                                            <img src="{{ asset('storage/images/6d170732-57e2-44e3-997b-a5ad762330aa_Parse2.jpg') }}"
                                                class="size-full" alt="">
                                        </div>
                                        <div class="flex flex-col gap-2 w-2/3">
                                            <span class="font-bold text-(--color-text)">محصول دوزایش</span>
                                            <span class="text-sm font-light text-(--color-secondary-text)">بو محصول
                                                فرق
                                                الی
                                                بتی بیزاد دی حتما آلون</span>
                                            <span class="text-sm font-light text-(--color-secondary-text)">
                                                <span>4000000</span>
                                                <span>تومان</span>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="flex justify-between items-center">
                                <div class="flex flex-col gap-2">
                                    <span class="text-(--color-text) font-light text-sm">مبلغ
                                        قابل پرداخت</span>
                                    <span>
                                        <span class="font-bold text-lg">40000000</span>
                                        <span class="text-sm">تومان</span>
                                    </span>
                                </div>
                                <div>
                                    <a href="#"
                                        class="bg-(--color-subheader-btn) rounded-[10px] text-base py-2 px-5 text-(--color-primary-text) font-semibold transition-all duration-500 ease-in-out hover:bg-(--color-bg-hover-btn) buttonLink">
                                        <span>ثبت سفارش</span>
                                    </a>
                                </div>
                            </div>
                        </div> --}}
                        {{-- end shopping cart hover box by mr.olyafam --}}
                    </div>
                    {{-- <div
                        class="flex flex-row items-center gap-5 p-2 border border-(--color-border) rounded-full cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 384 512">
                            <path fill="var(--color-fill)"
                                d="M336 192c0-79.5-64.5-144-144-144S48 112.5 48 192c0 12.4 4.5 31.6 15.3 57.2c10.5 24.8 25.4 52.2 42.5 79.9c28.5 46.2 61.5 90.8 86.2 122.6c24.8-31.8 57.8-76.4 86.2-122.6c17.1-27.7 32-55.1 42.5-79.9C331.5 223.6 336 204.4 336 192zm48 0c0 87.4-117 243-168.3 307.2c-12.3 15.3-35.1 15.3-47.4 0C117 435 0 279.4 0 192C0 86 86 0 192 0S384 86 384 192zm-160 0a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm-112 0a80 80 0 1 1 160 0 80 80 0 1 1 -160 0z" />
                        </svg>
                        <span class="text-sm text-(--color-text)">
                            بناب
                        </span>
                    </div> --}}
                </div>
            </div>
        </div>

        <!-- desktop header -->

        <!-- mobile header -->

        <div class="w-11/12 mx-auto lg:hidden flex flex-row justify-between items-center py-4">
            <!-- logo -->
            <div class="h-[33px]">
                @foreach ($logo as $l)
                    <a href="{{ $l['link_href'] }}" class="inline-block size-full">
                        <img src="{{ $l['logo'] }}" class="size-full" alt="{{ $l['alt_text'] }}">
                    </a>
                @endforeach
            </div>
            <!-- logo -->

            <div class="flex flex-row justify-end items-center gap-5">
                <a href="#" class="inline-block w-8 h-6 relative">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 512 512">
                        <path fill="var(--color-fill)"
                            d="M225.8 468.2l-2.5-2.3L48.1 303.2C17.4 274.7 0 234.7 0 192.8v-3.3c0-70.4 50-130.8 119.2-144C158.6 37.9 198.9 47 231 69.6c9 6.4 17.4 13.8 25 22.3c4.2-4.8 8.7-9.2 13.5-13.3c3.7-3.2 7.5-6.2 11.5-9c0 0 0 0 0 0C313.1 47 353.4 37.9 392.8 45.4C462 58.6 512 119.1 512 189.5v3.3c0 41.9-17.4 81.9-48.1 110.4L288.7 465.9l-2.5 2.3c-8.2 7.6-19 11.9-30.2 11.9s-22-4.2-30.2-11.9zM239.1 145c-.4-.3-.7-.7-1-1.1l-17.8-20c0 0-.1-.1-.1-.1c0 0 0 0 0 0c-23.1-25.9-58-37.7-92-31.2C81.6 101.5 48 142.1 48 189.5v3.3c0 28.5 11.9 55.8 32.8 75.2L256 430.7 431.2 268c20.9-19.4 32.8-46.7 32.8-75.2v-3.3c0-47.3-33.6-88-80.1-96.9c-34-6.5-69 5.4-92 31.2c0 0 0 0-.1 .1s0 0-.1 .1l-17.8 20c-.3 .4-.7 .7-1 1.1c-4.5 4.5-10.6 7-16.9 7s-12.4-2.5-16.9-7z" />
                    </svg>
                    <span
                        class="flex justify-center items-center -top-2 -left-2 absolute size-4 bg-(--color-primary) rounded-full text-(--color-primary-text) text-sm">0</span>
                </a>
                <a href="#" class="inline-block w-8 h-6 relative">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 448 512">
                        <path fill="var(--color-fill)"
                            d="M103 497c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-55-55L424 408c13.3 0 24-10.7 24-24s-10.7-24-24-24L81.9 360l55-55c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0L7 367c-9.4 9.4-9.4 24.6 0 33.9l96 96zM441 145c9.4-9.4 9.4-24.6 0-33.9L345 15c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l55 55L24 104c-13.3 0-24 10.7-24 24s10.7 24 24 24l342.1 0-55 55c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l96-96z" />
                    </svg>
                    <span
                        class="flex justify-center items-center -top-2 -left-2 absolute size-4 bg-(--color-primary) rounded-full text-(--color-primary-text) text-sm">0</span>
                </a>
                <!-- chocolate menu -->
                <div class="size-7 p-1 flex flex-col gap-1 bg-(--color-primary-btn) rounded-sm cursor-pointer"
                    id="chocIconMobile">
                    <div class="flex flex-row justify-between items-center">
                        <span class="size-1 bg-(--color-text) rounded-full"></span>
                        <span class="size-1 bg-(--color-text) rounded-full"></span>
                        <span class="size-1 bg-(--color-text) rounded-full"></span>
                    </div>
                    <div class="flex flex-row justify-between items-center">
                        <span class="size-1 bg-(--color-text) rounded-full"></span>
                        <span class="size-1 bg-(--color-text) rounded-full"></span>
                        <span class="size-1 bg-(--color-text) rounded-full"></span>
                    </div>
                    <div class="flex flex-row justify-between items-center">
                        <span class="size-1 bg-(--color-text) rounded-full"></span>
                        <span class="size-1 bg-(--color-text) rounded-full"></span>
                        <span class="size-1 bg-(--color-text) rounded-full"></span>
                    </div>
                </div>
                <!-- chocolate menu -->
            </div>
        </div>

        <!-- mobile header -->


        <!-- modal -->
        <div class="fixed z-9999 w-full h-svh bg-black/70 top-0 -right-full transition-all duration-500"
            id="chocolateMenu">
            <div class="relative w-11/12 mx-auto mt-5 bg-white rounded-md h-[565px] p-7 opacity-0  transition-all duration-300 delay-600"
                id="boxC">
                <button
                    class="absolute size-10 rounded-full bg-(--color-primary-btn) font-bold -top-3 -right-3 z-20 flex justify-center items-center cursor-pointer"
                    onclick="closeChocMenu()">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-7" viewBox="0 0 384 512">
                        <path fill="var(--color-fill)"
                            d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                    </svg>
                </button>
                <ul class="w-full h-[444px] overflow-y-auto">
                    <li class="my-1">
                        <div
                            class="flex flex-row justify-between items-center gap-1 transition-all duration-300 px-3 rounded-lg hover:bg-(--color-primary-btn-hover)">
                            <a href="{{ route('category-index') }}"
                                class="inline-block w-11/12 text-(--color-text) font-semibold py-3 ">
                                دسته بندی
                            </a>
                            <div class="w-1/12 flex items-center justify-end subMenuActive">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5 transition-all duration-150"
                                    viewBox="0 0 448 512">
                                    <path fill="var(--color-fill)"
                                        d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z" />
                                </svg>
                            </div>
                        </div>
                        <div class="w-full max-h-0 overflow-hidden transition-all duration-500 mt-2 subItem">
                            <div class="h-100 w-full flex flex-col xl:flex-row items-start gap-10">
                                <div
                                    class="h-90 overflow-y-auto w-full xl:w-1/4 flex flex-row xl:flex-col justify-between gap-4 overflow-x-auto px-3 xl:px-0">
                                    @foreach ($categories as $category)
                                        <a href="{{ route('search-cat-products', [$category]) }}"
                                            class="block rounded-[10px] text-(--color-text) py-4 px-9 bg-(--color-primary-btn) transition-all duration-300 hover:bg-(--color-bg-hover-btn) hover:text-(--color-primary-text) cursor-pointer subMenuCat">{{ $category->title }}</a>
                                    @endforeach
                                </div>
                                <div class="w-full xl:w-3/4 xl:overflow-y-auto">
                                    <!-- contents -->
                                    <div
                                        class="h-90 grid sm:grid-cols-2 grid-cols-1 gap-4 max-h-[575px] overflow-y-auto text-(--color-text)">
                                        @foreach ($products as $product)
                                            <div class="p-4 border border-(--color-border) rounded-[10px]">
                                                <a href="http://localhost/shahkar/public/product/show/{{ $product->id }}"
                                                    class="block mb-1">
                                                    @if ($product->medias)
                                                        @foreach ($product->medias as $media)
                                                            @if ($media['is_main'] == 1)
                                                                <img src=" {{ asset('storage/' . $media['path']) }}  "
                                                                    class="w-[85px] h-20 mx-auto" alt="product">
                                                                @break

                                                            @else
                                                                <img src="{{ asset('assets/img/noImage.png') }}"
                                                                    class="w-[85px] h-20 mx-auto" alt="product">
                                                                @break
                                                            @endif
                                                        @endforeach
                                                    @else
                                                        <img src="{{ asset('assets/img/noImage.png') }}"
                                                            class="w-[85px] h-20 mx-auto" alt="product">
                                                    @endif
                                                    <span
                                                        class="inline-block w-full text-center pt-3">{{ $product->title }}</span>
                                                    <span
                                                        class="block text-center text-[14px] text-(--color-secondary-text)">{{ $product->description }}</span>
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                    <!-- contents -->
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="my-1">
                        <div
                            class="flex flex-row justify-between items-center gap-1 transition-all duration-300 px-3 rounded-lg hover:bg-(--color-primary-btn-hover)">
                            <a href="{{ route('course.list') }}"
                                class="inline-block w-11/12 text-(--color-text) font-semibold py-3 ">
                                دوره ها
                            </a>
                            <div class="w-1/12 flex items-center justify-end subMenuActive">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5 transition-all duration-150"
                                    viewBox="0 0 448 512">
                                    <path fill="var(--color-fill)"
                                        d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z" />
                                </svg>
                            </div>
                        </div>
                        <ul class="w-full max-h-0 overflow-hidden transition-all duration-500 pr-5 mt-2 subItem">
                            @foreach ($courses as $course)
                                <li>
                                    <a href="{{ route('course.show', [$course]) }}"
                                        class="inline-block w-full text-(--color-text) font-semibold py-3 transition-all duration-300 px-3 rounded-lg hover:bg-(--color-primary-btn-hover)">
                                        {{ $course['title'] }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="my-1">
                        <div
                            class="flex flex-row justify-between items-center gap-1 transition-all duration-300 px-3 rounded-lg hover:bg-(--color-primary-btn-hover)">
                            <a href="{{ route('product-index') }}"
                                class="inline-block w-11/12 text-(--color-text) font-semibold py-3 ">
                                محصولات
                            </a>
                            {{-- <div class="w-1/12 flex items-center justify-end subMenuActive">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5 transition-all duration-150"
                                    viewBox="0 0 448 512">
                                    <path fill="var(--color-fill)"
                                        d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z" />
                                </svg>
                            </div> --}}
                        </div>
                        {{-- <ul class="w-full max-h-0 overflow-hidden transition-all duration-500 pr-5 mt-2 subItem">
                            <li>
                                <a href="#"
                                    class="inline-block w-full text-(--color-text) font-semibold py-3 transition-all duration-300 px-3 rounded-lg hover:bg-(--color-primary-btn-hover)">
                                    asiodfhkjaldshf
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="inline-block w-full text-(--color-text) font-semibold py-3 transition-all duration-300 px-3 rounded-lg hover:bg-(--color-primary-btn-hover)">
                                    asiodfhkjaldshf
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="inline-block w-full text-(--color-text) font-semibold py-3 transition-all duration-300 px-3 rounded-lg hover:bg-(--color-primary-btn-hover)">
                                    asiodfhkjaldshf
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="inline-block w-full text-(--color-text) font-semibold py-3 transition-all duration-300 px-3 rounded-lg hover:bg-(--color-primary-btn-hover)">
                                    asiodfhkjaldshf
                                </a>
                            </li>
                        </ul> --}}
                    </li>
                    <li class="my-1">
                        <a href="{{ route('aboutus-index') }}"
                            class="inline-block w-full text-(--color-text) font-semibold py-3 transition-all duration-300 px-3 rounded-lg hover:bg-(--color-primary-btn-hover) ">
                            درباره ما
                        </a>
                    </li>
                    <li class="my-1">
                        <a href="{{ route('contactus-create') }}"
                            class="inline-block w-full text-(--color-text) font-semibold py-3 transition-all duration-300 px-3 rounded-lg hover:bg-(--color-primary-btn-hover) ">
                            تماس با ما
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- modal -->


    </header>



    <main class="2xl:container 2xl:px-4 w-11/12 lg:w-[98%] mx-auto mt-5">
        @yield('content')
    </main>



    <footer class="text-(--color-text) pt-3 bg-(--color-primary-btn) 2xl:container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 px-4">
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
            @foreach ($footer_form_column as $ffc)
                <div class="p-6 flex flex-col gap-10">
                    <div class="">
                        <p class="text-gray-700 font-bold mb-4">{{ $ffc['section_title'] }}</p>
                    </div>
                    <div class="flex justify-between items-center">
                        @foreach ($ffc['images'] as $image)
                            <a href="{{ $image['link'] }}">
                                <img src="{{ asset('storage/' . $image['path']) }}" alt="{{ $image['alt'] }}"
                                    class="size-10 rounded-full">
                            </a>
                        @endforeach
                    </div>
                    <div class="">
                        <form action="{{ route('homeForm-store') }}" method="post" class="flex flex-col gap-4">
                            @csrf
                            <label for="" class="">{{ $ffc['texts'][0]['text'] }}</label>
                            <div class="flex gap-4">
                                <input type="string" required
                                    class="w-3/4 outline-none py-2 px-9 bg-[#F9F9F9] rounded-xl focus:border"
                                    name="contactMethod" id=""
                                    placeholder="{{ $ffc['texts'][0]['placeholder'] }}" required>
                                <button type="submit"
                                    class="w-1/4 py-2 px-7 rounded-[10px] bg-(--color-btn-contact) text-(--color-primary-text) hover:bg-(--color-btn-contact-hover) transition-all duration-300 text-white cursor-pointer">ثبت</button>
                            </div>
                        </form>
                    </div>
                </div>
            @endforeach
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

    <script>
        const csrfToken = "{{ csrf_token() }}"
        const route = "{{ route('relatedProducts') }}"
    </script>
    <script src="{{ url('assets/js/main.js') }}"></script>
</body>

</html>
