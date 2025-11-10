<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}" type="text/css">
    <title>home</title>
    <style>
        :root {
            <?php
            foreach ($settings as $setting) {
                echo "--color-" . $setting->meta_key . ": " . $setting->meta_value . ";";
            }
            ?>
        }
    </style>
</head>

<body>

    <!-- ads -->
    <div class="w-full h-10 bg-[var(--color-primary)] flex flex-row justify-around">
        <span class="text-[var(--color-primary-text)] py-2 px-4 font-medium flex justify-start items-center">
            <img src="https://s.w.org/images/core/emoji/16.0.1/svg/1f6d2.svg" class="size-4 mx-2" alt="">
            ارسال رایگان برای سفارش‌های بالای ۵۰ دلار
        </span>
        <span class="text-[var(--color-primary-text)] py-2 px-4 font-medium flex justify-start items-center">
            <img src="https://s.w.org/images/core/emoji/16.0.1/svg/1f6d2.svg" class="size-4 mx-2" alt="">
            ارسال رایگان برای سفارش‌های بالای ۵۰ دلار
        </span>
        <span class="text-[var(--color-primary-text)] py-2 px-4 font-medium flex justify-start items-center">
            <img src="https://s.w.org/images/core/emoji/16.0.1/svg/1f6d2.svg" class="size-4 mx-2" alt="">
            ارسال رایگان برای سفارش‌های بالای ۵۰ دلار
        </span>
    </div>
    <!-- ads -->

    <header class="2xl:container 2xl:px-4 mx-auto w-full border-b border-[var(--color-border)] py-3">

        <!-- desktop header -->

        <div class="2xl:w-full w-[98%] mx-auto lg:flex xl:flex-row hidden lg:flex-col items-center gap-5">
            <div class="xl:w-8/12 w-full flex flex-row justify-center gap-5 xl:justify-start items-center">
                <!-- logo -->
                <div class="w-1/12 h-[33px]">
                    @foreach($logo as $l)
                    <a href="{{$l['link_href']}}" class="inline-block size-full">
                        <img src="{{$l['logo']}}"
                            class="size-full" alt="{{$l['alt_text']}}">
                    </a>
                    @endforeach
                </div>
                <!-- logo -->

                <div class="2xl:w-5/12 xl:w-6/12 ">
                    <form action="" method=""
                        class="border border-[var(--color-border)] rounded-full min-w-[395px] w-[395px] p-1 text-sm flex flex-row">
                        <select name="category" class="min-w-[150px] text-[var(--color-text)]" id="">
                            <option value="all">
                                همه دسته ها
                            </option>
                            @foreach($categories as $category)
                            <option value="{{$category['id']}}">{{$category['title']}}</option>
                            @endforeach
                        </select>
                        <input type="text"
                            class="w-full border-r border-[var(--color-border)] pr-1.5 mr-1.5 text-[var(--color-text)] text-sm py-1 outline-none rounded-l-full"
                            placeholder="جست و جوی دسته بندی، محصول ..." name="" id="">
                    </form>
                </div>

                <!-- chocolate menu -->

                <div class="size-9 p-2 hidden 2xl:hidden lg:flex flex-col gap-1 bg-[var(--color-primary-btn)] rounded-sm cursor-pointer"
                    id="chocIcon">
                    <div class="flex flex-row justify-between items-center">
                        <span class="size-1 bg-[var(--color-text)] rounded-full"></span>
                        <span class="size-1 bg-[var(--color-text)] rounded-full"></span>
                        <span class="size-1 bg-[var(--color-text)] rounded-full"></span>
                    </div>
                    <div class="flex flex-row justify-between items-center">
                        <span class="size-1 bg-[var(--color-text)] rounded-full"></span>
                        <span class="size-1 bg-[var(--color-text)] rounded-full"></span>
                        <span class="size-1 bg-[var(--color-text)] rounded-full"></span>
                    </div>
                    <div class="flex flex-row justify-between items-center">
                        <span class="size-1 bg-[var(--color-text)] rounded-full"></span>
                        <span class="size-1 bg-[var(--color-text)] rounded-full"></span>
                        <span class="size-1 bg-[var(--color-text)] rounded-full"></span>
                    </div>
                </div>



                <!-- chocolate menu -->

                <!-- 2xl menu -->
                <ul class="w-6/12 hidden 2xl:flex flex-row justify-start items-center gap-4 text-[var(--color-text)]">
                    <li>
                        <a href="#" class="font-semibold text-sm gap-1 transition-all duration-300 py-4 menuLink">
                            خانه
                        </a>
                    </li>
                    <li class="menuItemParent">
                        <a href="#"
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
                            class="absolute w-full py-5 max-h-0 border border-[var(--color-border)] bg-white opacity-0 mt-8 right-0 invisible z-[9999] transition-all duration-500">
                            <div class="w-11/12 mx-auto flex flex-row items-start gap-10">
                                <div class="w-1/5 flex flex-col justify-start gap-4">
                                    <button
                                        class="block rounded-[10px] text-[var(--color-text)] py-4 px-9 bg-[var(--color-primary-btn)] transitin-all duration-300 hover:bg-[var(--color-bg-hover-btn)] hover:text-[var(--color-primary-text)] cursor-pointer activeSubMenuCat subMenuCat">عنوان
                                        تستی</button>
                                    <button
                                        class="block rounded-[10px] text-[var(--color-text)] py-4 px-9 bg-[var(--color-primary-btn)] transitin-all duration-300 hover:bg-[var(--color-bg-hover-btn)] hover:text-[var(--color-primary-text)] cursor-pointer subMenuCat">عنوان
                                        تستی</button>
                                    <button
                                        class="block rounded-[10px] text-[var(--color-text)] py-4 px-9 bg-[var(--color-primary-btn)] transitin-all duration-300 hover:bg-[var(--color-bg-hover-btn)] hover:text-[var(--color-primary-text)] cursor-pointer subMenuCat">عنوان
                                        تستی</button>
                                    <button
                                        class="block rounded-[10px] text-[var(--color-text)] py-4 px-9 bg-[var(--color-primary-btn)] transitin-all duration-300 hover:bg-[var(--color-bg-hover-btn)] hover:text-[var(--color-primary-text)] cursor-pointer subMenuCat">عنوان
                                        تستی</button>
                                    <button
                                        class="block rounded-[10px] text-[var(--color-text)] py-4 px-9 bg-[var(--color-primary-btn)] transitin-all duration-300 hover:bg-[var(--color-bg-hover-btn)] hover:text-[var(--color-primary-text)] cursor-pointer subMenuCat">عنوان
                                        تستی</button>
                                </div>
                                <div class="w-4/5">
                                    <!-- contents -->
                                    <div class="grid grid-cols-4 gap-4 max-h-[575px] overflow-y-auto">
                                        <div class="p-4 border border-[var(--color-border)] rounded-[10px]">
                                            <a href="#" class="block mb-1">
                                                <img src="https://elango.steelthemes.com/ecom/el2/wp-content/uploads/2025/07/category-1.png"
                                                    class="w-[85px] h-20 mx-auto" alt="product">
                                                <span class="inline-block w-full text-center pt-3">محصول تستی</span>
                                            </a>
                                            <span class="block text-center text-[14px] text-[var(--color-secondary-text)]">تست آیتم</span>
                                            <span class="block text-center text-[12px] text-[var(--color-secondary-text)]">10 آیتم</span>
                                        </div>
                                        <div class="p-4 border border-[var(--color-border)] rounded-[10px]">
                                            <a href="#" class="block mb-1">
                                                <img src="https://elango.steelthemes.com/ecom/el2/wp-content/uploads/2025/07/category-1.png"
                                                    class="w-[85px] h-20 mx-auto" alt="product">
                                                <span class="inline-block w-full text-center pt-3">محصول تستی</span>
                                            </a>
                                            <span class="block text-center text-[14px] text-[var(--color-secondary-text)]">تست آیتم</span>
                                            <span class="block text-center text-[12px] text-[var(--color-secondary-text)]">10 آیتم</span>
                                        </div>
                                        <div class="p-4 border border-[var(--color-border)] rounded-[10px]">
                                            <a href="#" class="block mb-1">
                                                <img src="https://elango.steelthemes.com/ecom/el2/wp-content/uploads/2025/07/category-1.png"
                                                    class="w-[85px] h-20 mx-auto" alt="product">
                                                <span class="inline-block w-full text-center pt-3">محصول تستی</span>
                                            </a>
                                            <span class="block text-center text-[14px] text-[var(--color-secondary-text)]">تست آیتم</span>
                                            <span class="block text-center text-[12px] text-[var(--color-secondary-text)]">10 آیتم</span>
                                        </div>
                                        <div class="p-4 border border-[var(--color-border)] rounded-[10px]">
                                            <a href="#" class="block mb-1">
                                                <img src="https://elango.steelthemes.com/ecom/el2/wp-content/uploads/2025/07/category-1.png"
                                                    class="w-[85px] h-20 mx-auto" alt="product">
                                                <span class="inline-block w-full text-center pt-3">محصول تستی</span>
                                            </a>
                                            <span class="block text-center text-[14px] text-[var(--color-secondary-text)]">تست آیتم</span>
                                            <span class="block text-center text-[12px] text-[var(--color-secondary-text)]">10 آیتم</span>
                                        </div>
                                        <div class="p-4 border border-[var(--color-border)] rounded-[10px]">
                                            <a href="#" class="block mb-1">
                                                <img src="https://elango.steelthemes.com/ecom/el2/wp-content/uploads/2025/07/category-1.png"
                                                    class="w-[85px] h-20 mx-auto" alt="product">
                                                <span class="inline-block w-full text-center pt-3">محصول تستی</span>
                                            </a>
                                            <span class="block text-center text-[14px] text-[var(--color-secondary-text)]">تست آیتم</span>
                                            <span class="block text-center text-[12px] text-[var(--color-secondary-text)]">10 آیتم</span>
                                        </div>
                                        <div class="p-4 border border-[var(--color-border)] rounded-[10px]">
                                            <a href="#" class="block mb-1">
                                                <img src="https://elango.steelthemes.com/ecom/el2/wp-content/uploads/2025/07/category-1.png"
                                                    class="w-[85px] h-20 mx-auto" alt="product">
                                                <span class="inline-block w-full text-center pt-3">محصول تستی</span>
                                            </a>
                                            <span class="block text-center text-[14px] text-[var(--color-secondary-text)]">تست آیتم</span>
                                            <span class="block text-center text-[12px] text-[var(--color-secondary-text)]">10 آیتم</span>
                                        </div>
                                        <div class="p-4 border border-[var(--color-border)] rounded-[10px]">
                                            <a href="#" class="block mb-1">
                                                <img src="https://elango.steelthemes.com/ecom/el2/wp-content/uploads/2025/07/category-1.png"
                                                    class="w-[85px] h-20 mx-auto" alt="product">
                                                <span class="inline-block w-full text-center pt-3">محصول تستی</span>
                                            </a>
                                            <span class="block text-center text-[14px] text-[var(--color-secondary-text)]">تست آیتم</span>
                                            <span class="block text-center text-[12px] text-[var(--color-secondary-text)]">10 آیتم</span>
                                        </div>
                                        <div class="p-4 border border-[var(--color-border)] rounded-[10px]">
                                            <a href="#" class="block mb-1">
                                                <img src="https://elango.steelthemes.com/ecom/el2/wp-content/uploads/2025/07/category-1.png"
                                                    class="w-[85px] h-20 mx-auto" alt="product">
                                                <span class="inline-block w-full text-center pt-3">محصول تستی</span>
                                            </a>
                                            <span class="block text-center text-[14px] text-[var(--color-secondary-text)]">تست آیتم</span>
                                            <span class="block text-center text-[12px] text-[var(--color-secondary-text)]">10 آیتم</span>
                                        </div>



                                    </div>
                                    <!-- contents -->
                                </div>
                            </div>
                        </div>
                    </li>


                    <li class="relative menuItemParent">
                        <a href="#"
                            class="text-[var(--color-text)] font-semibold text-sm flex flex-row items-center gap-1 transition-all duration-300 py-4 menuLink">
                            <span>
                                فروشگاه
                            </span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-3" viewBox="0 0 448 512">
                                <path fill="var(--color-fill)"
                                    d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z" />
                            </svg>
                        </a>


                        <ul
                            class="absolute min-w-[250px] py-4 px-6 border border-[var(--color-border)] bg-white top-full opacity-0 mt-8 right-0 invisible z-[9999] transition-all duration-500 menuItemChild">
                            <li>
                                <a href="#"
                                    class="block py-2.5 text-sm font-semibold transitin-all duration-300 hover:text-[var(--color-primary)]">عنوان
                                    تستی</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block py-2.5 text-sm font-semibold transitin-all duration-300 hover:text-[var(--color-primary)]">عنوان
                                    تستی</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block py-2.5 text-sm font-semibold transitin-all duration-300 hover:text-[var(--color-primary)]">عنوان
                                    تستی</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block py-2.5 text-sm font-semibold transitin-all duration-300 hover:text-[var(--color-primary)]">عنوان
                                    تستی</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block py-2.5 text-sm font-semibold transitin-all duration-300 hover:text-[var(--color-primary)]">عنوان
                                    تستی</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block py-2.5 text-sm font-semibold transitin-all duration-300 hover:text-[var(--color-primary)]">عنوان
                                    تستی</a>
                            </li>
                        </ul>


                    </li>


                    <li class="relative menuItemParent">
                        <a href="#"
                            class="text-[var(--color-text)] font-semibold text-sm flex flex-row items-center gap-1 transition-all duration-300 py-4 menuLink">
                            <span>
                                دست فروش
                            </span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-3" viewBox="0 0 448 512">
                                <path fill="var(--color-fill)"
                                    d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z" />
                            </svg>
                        </a>
                        <ul
                            class="absolute min-w-[250px] py-4 px-6 border border-[var(--color-border)] bg-white top-full opacity-0 mt-8 right-0 invisible z-[9999] transition-all duration-500 menuItemChild">
                            <li>
                                <a href="#"
                                    class="block py-2.5 text-sm font-semibold transitin-all duration-300 hover:text-[var(--color-primary)]">عنوان
                                    تستی</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block py-2.5 text-sm font-semibold transitin-all duration-300 hover:text-[var(--color-primary)]">عنوان
                                    تستی</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block py-2.5 text-sm font-semibold transitin-all duration-300 hover:text-[var(--color-primary)]">عنوان
                                    تستی</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="{{route('aboutus-index')}}"
                            class="text-[var(--color-text)] font-semibold text-sm gap-1 transition-all duration-300 py-4 menuLink">درباره ما</a>
                    </li>
                    <li>
                        <a href="{{route('contactus-create')}}"
                            class="text-[var(--color-text)] font-semibold text-sm gap-1 transition-all duration-300 py-4 menuLink">تماس با ما</a>
                    </li>

                </ul>
                <!-- 2xl menu -->


            </div>
            <div class="xl:w-4/12 w-full">
                <div class="flex flex-row md:justify-center xl:justify-end items-center gap-5">
                    <div class="flex items-center gap-5">
                        <div class="size-6">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-full" viewBox="0 0 448 512">
                                <path fill="var(--color-fill)"
                                    d="M320 128a96 96 0 1 0 -192 0 96 96 0 1 0 192 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM32 480H416c-1.2-79.7-66.2-144-146.3-144H178.3c-80 0-145 64.3-146.3 144zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z" />
                            </svg>
                        </div>
                        @if($user)
                        <div>
                            <span class="block text-[var(--color-text)] leading-[22px] font-medium text-sm">{{$user['name']}} {{$user['family']}}</span>
                            <a href="{{route('user.profile',[$user->id])}}" class="block text-[var(--color-text)] leading-[22px] text-xs">مشاهده پروفایل</a>
                        </div>
                        @else
                        <div>
                            <a class="block text-[var(--color-text)] leading-[22px] font-medium text-sm" href="{{route('user.login')}}">ورود</a>
                            <a class="block text-[var(--color-text)] leading-[22px] text-xs" href="{{route('user.signup')}}">ثبت نام</a>
                        </div>
                        @endif
                    </div>
                    <a href="#" class="inline-block w-8 h-6 relative">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-6" viewBox="0 0 512 512">
                            <path fill="var(--color-fill)"
                                d="M225.8 468.2l-2.5-2.3L48.1 303.2C17.4 274.7 0 234.7 0 192.8v-3.3c0-70.4 50-130.8 119.2-144C158.6 37.9 198.9 47 231 69.6c9 6.4 17.4 13.8 25 22.3c4.2-4.8 8.7-9.2 13.5-13.3c3.7-3.2 7.5-6.2 11.5-9c0 0 0 0 0 0C313.1 47 353.4 37.9 392.8 45.4C462 58.6 512 119.1 512 189.5v3.3c0 41.9-17.4 81.9-48.1 110.4L288.7 465.9l-2.5 2.3c-8.2 7.6-19 11.9-30.2 11.9s-22-4.2-30.2-11.9zM239.1 145c-.4-.3-.7-.7-1-1.1l-17.8-20c0 0-.1-.1-.1-.1c0 0 0 0 0 0c-23.1-25.9-58-37.7-92-31.2C81.6 101.5 48 142.1 48 189.5v3.3c0 28.5 11.9 55.8 32.8 75.2L256 430.7 431.2 268c20.9-19.4 32.8-46.7 32.8-75.2v-3.3c0-47.3-33.6-88-80.1-96.9c-34-6.5-69 5.4-92 31.2c0 0 0 0-.1 .1s0 0-.1 .1l-17.8 20c-.3 .4-.7 .7-1 1.1c-4.5 4.5-10.6 7-16.9 7s-12.4-2.5-16.9-7z" />
                        </svg>
                        <span
                            class="flex justify-center items-center -top-2.5 -left-2.5 absolute size-5 bg-[var(--color-primary)] rounded-full text-[var(--color-primary-text)] text-sm">0</span>
                    </a>
                    <a href="#" class="inline-block w-8 h-6 relative">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-6" viewBox="0 0 448 512">
                            <path fill="var(--color-fill)"
                                d="M103 497c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-55-55L424 408c13.3 0 24-10.7 24-24s-10.7-24-24-24L81.9 360l55-55c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0L7 367c-9.4 9.4-9.4 24.6 0 33.9l96 96zM441 145c9.4-9.4 9.4-24.6 0-33.9L345 15c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l55 55L24 104c-13.3 0-24 10.7-24 24s10.7 24 24 24l342.1 0-55 55c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l96-96z" />
                        </svg>
                        <span
                            class="flex justify-center items-center -top-2.5 -left-2.5 absolute size-5 bg-[var(--color-primary)] rounded-full text-[var(--color-primary-text)] text-sm">0</span>
                    </a>
                    <a href="#" class="inline-block w-8 h-6 relative">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-6 rotate-y-180" viewBox="0 0 576 512">
                            <path fill="var(--color-fill)"
                                d="M24 0C10.7 0 0 10.7 0 24S10.7 48 24 48H69.5c3.8 0 7.1 2.7 7.9 6.5l51.6 271c6.5 34 36.2 58.5 70.7 58.5H488c13.3 0 24-10.7 24-24s-10.7-24-24-24H199.7c-11.5 0-21.4-8.2-23.6-19.5L170.7 288H459.2c32.6 0 61.1-21.8 69.5-53.3l41-152.3C576.6 57 557.4 32 531.1 32h-411C111 12.8 91.6 0 69.5 0H24zM131.1 80H520.7L482.4 222.2c-2.8 10.5-12.3 17.8-23.2 17.8H161.6L131.1 80zM176 512a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm336-48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0z" />
                        </svg>
                        <span
                            class="flex justify-center items-center -top-2.5 -left-2.5 absolute size-5 bg-[var(--color-primary)] rounded-full text-[var(--color-primary-text)] text-sm">0</span>
                    </a>
                    <div
                        class="flex flex-row items-center gap-5 p-2 border border-[var(--color-border)] rounded-full cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 384 512">
                            <path fill="var(--color-fill)"
                                d="M336 192c0-79.5-64.5-144-144-144S48 112.5 48 192c0 12.4 4.5 31.6 15.3 57.2c10.5 24.8 25.4 52.2 42.5 79.9c28.5 46.2 61.5 90.8 86.2 122.6c24.8-31.8 57.8-76.4 86.2-122.6c17.1-27.7 32-55.1 42.5-79.9C331.5 223.6 336 204.4 336 192zm48 0c0 87.4-117 243-168.3 307.2c-12.3 15.3-35.1 15.3-47.4 0C117 435 0 279.4 0 192C0 86 86 0 192 0S384 86 384 192zm-160 0a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm-112 0a80 80 0 1 1 160 0 80 80 0 1 1 -160 0z" />
                        </svg>
                        <span class="text-sm text-[var(--color-text)]">
                            بناب
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- desktop header -->

        <!-- mobile header -->

        <div class="w-11/12 mx-auto lg:hidden flex flex-row justify-between items-center py-4">
            <!-- logo -->
            <div class="h-[33px]">
                @foreach($logo as $l)
                <a href="{{$l['link_href']}}" class="inline-block size-full">
                    <img src="{{$l['logo']}}"
                        class="size-full" alt="{{$l['alt_text']}}">
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
                        class="flex justify-center items-center -top-2 -left-2 absolute size-4 bg-[var(--color-primary)] rounded-full text-[var(--color-primary-text)] text-sm">0</span>
                </a>
                <a href="#" class="inline-block w-8 h-6 relative">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 448 512">
                        <path fill="var(--color-fill)"
                            d="M103 497c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-55-55L424 408c13.3 0 24-10.7 24-24s-10.7-24-24-24L81.9 360l55-55c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0L7 367c-9.4 9.4-9.4 24.6 0 33.9l96 96zM441 145c9.4-9.4 9.4-24.6 0-33.9L345 15c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l55 55L24 104c-13.3 0-24 10.7-24 24s10.7 24 24 24l342.1 0-55 55c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l96-96z" />
                    </svg>
                    <span
                        class="flex justify-center items-center -top-2 -left-2 absolute size-4 bg-[var(--color-primary)] rounded-full text-[var(--color-primary-text)] text-sm">0</span>
                </a>
                <!-- chocolate menu -->

                <div class="size-7 p-1 flex flex-col gap-1 bg-[var(--color-primary-btn)] rounded-sm cursor-pointer" id="chocIconMobile">
                    <div class="flex flex-row justify-between items-center">
                        <span class="size-1 bg-[var(--color-text)] rounded-full"></span>
                        <span class="size-1 bg-[var(--color-text)] rounded-full"></span>
                        <span class="size-1 bg-[var(--color-text)] rounded-full"></span>
                    </div>
                    <div class="flex flex-row justify-between items-center">
                        <span class="size-1 bg-[var(--color-text)] rounded-full"></span>
                        <span class="size-1 bg-[var(--color-text)] rounded-full"></span>
                        <span class="size-1 bg-[var(--color-text)] rounded-full"></span>
                    </div>
                    <div class="flex flex-row justify-between items-center">
                        <span class="size-1 bg-[var(--color-text)] rounded-full"></span>
                        <span class="size-1 bg-[var(--color-text)] rounded-full"></span>
                        <span class="size-1 bg-[var(--color-text)] rounded-full"></span>
                    </div>
                </div>



                <!-- chocolate menu -->
            </div>
        </div>

        <!-- mobile header -->


        <!-- modal -->
        <div class="fixed z-[9999] w-full h-svh bg-black/70 top-0 -right-full transition-all duration-500"
            id="chocolateMenu">
            <div class="relative w-11/12 mx-auto mt-5 bg-white rounded-md h-[565px] p-7 opacity-0  transition-all duration-300 delay-600"
                id="boxC">
                <button
                    class="absolute size-10 rounded-full bg-[var(--color-primary-btn)] font-bold -top-3 -right-3 z-20 flex justify-center items-center cursor-pointer"
                    onclick="closeChocMenu()">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-7" viewBox="0 0 384 512">
                        <path fill="var(--color-fill)"
                            d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                    </svg>
                </button>
                <ul class="w-full h-[444px] overflow-y-auto">
                    <li class="my-1">
                        <a href="#"
                            class="inline-block w-full text-[var(--color-text)] font-semibold py-3 transition-all duration-300 px-3 rounded-lg hover:bg-[var(--color-primary-btn-hover)]">
                            خانه
                        </a>
                    </li>
                    <li class="my-1">
                        <div
                            class="flex flex-row justify-between items-center gap-1 transition-all duration-300 px-3 rounded-lg hover:bg-[var(--color-primary-btn-hover)]">
                            <a href="#" class="inline-block w-11/12 text-[var(--color-text)] font-semibold py-3 ">
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






                            <div class="w-full flex flex-col xl:flex-row items-start gap-10">
                                <div class="w-full xl:w-1/4 flex flex-row xl:flex-col justify-between gap-4 overflow-x-auto px-3 xl:px-0">
                                    <button
                                        class="block rounded-[10px] text-[var(--color-text)] py-4 px-9 bg-[var(--color-primary-btn)] transitin-all duration-300 hover:bg-[var(--color-bg-hover-btn)] hover:text-[var(--color-primary-text)] cursor-pointer activeSubMenuCat subMenuCat">عنوان
                                        تستی</button>
                                    <button
                                        class="block rounded-[10px] text-[var(--color-text)] py-4 px-9 bg-[var(--color-primary-btn)] transitin-all duration-300 hover:bg-[var(--color-bg-hover-btn)] hover:text-[var(--color-primary-text)] cursor-pointer subMenuCat">عنوان
                                        تستی</button>
                                    <button
                                        class="block rounded-[10px] text-[var(--color-text)] py-4 px-9 bg-[var(--color-primary-btn)] transitin-all duration-300 hover:bg-[var(--color-bg-hover-btn)] hover:text-[var(--color-primary-text)] cursor-pointer subMenuCat">عنوان
                                        تستی</button>
                                    <button
                                        class="block rounded-[10px] text-[var(--color-text)] py-4 px-9 bg-[var(--color-primary-btn)] transitin-all duration-300 hover:bg-[var(--color-bg-hover-btn)] hover:text-[var(--color-primary-text)] cursor-pointer subMenuCat">عنوان
                                        تستی</button>
                                    <button
                                        class="block rounded-[10px] text-[var(--color-text)] py-4 px-9 bg-[var(--color-primary-btn)] transitin-all duration-300 hover:bg-[var(--color-bg-hover-btn)] hover:text-[var(--color-primary-text)] cursor-pointer subMenuCat">عنوان
                                        تستی</button>
                                </div>
                                <div class="w-full xl:w-3/4 xl:overflow-y-auto">
                                    <!-- contents -->
                                    <div class="grid sm:grid-cols-2 grid-cols-1 gap-4 max-h-[575px] overflow-y-auto text-[var(--color-text)]">
                                        <div class="p-4 border border-[var(--color-border)] rounded-[10px]">
                                            <a href="#" class="block mb-1">
                                                <img src="https://elango.steelthemes.com/ecom/el2/wp-content/uploads/2025/07/category-1.png"
                                                    class="w-[85px] h-20 mx-auto" alt="product">
                                                <span class="inline-block w-full text-center pt-3">محصول
                                                    تستی</span>
                                            </a>
                                            <span class="block text-center text-[14px] text-[var(--color-secondary-text)]">تست
                                                آیتم</span>
                                            <span class="block text-center text-[12px] text-[var(--color-secondary-text)]">10
                                                آیتم</span>
                                        </div>
                                        <div class="p-4 border border-[var(--color-border)] rounded-[10px]">
                                            <a href="#" class="block mb-1">
                                                <img src="https://elango.steelthemes.com/ecom/el2/wp-content/uploads/2025/07/category-1.png"
                                                    class="w-[85px] h-20 mx-auto" alt="product">
                                                <span class="inline-block w-full text-center pt-3">محصول
                                                    تستی</span>
                                            </a>
                                            <span class="block text-center text-[14px] text-[var(--color-secondary-text)]">تست
                                                آیتم</span>
                                            <span class="block text-center text-[12px] text-[var(--color-secondary-text)]">10
                                                آیتم</span>
                                        </div>
                                        <div class="p-4 border border-[var(--color-border)] rounded-[10px]">
                                            <a href="#" class="block mb-1">
                                                <img src="https://elango.steelthemes.com/ecom/el2/wp-content/uploads/2025/07/category-1.png"
                                                    class="w-[85px] h-20 mx-auto" alt="product">
                                                <span class="inline-block w-full text-center pt-3">محصول
                                                    تستی</span>
                                            </a>
                                            <span class="block text-center text-[14px] text-[var(--color-secondary-text)]">تست
                                                آیتم</span>
                                            <span class="block text-center text-[12px] text-[var(--color-secondary-text)]">10
                                                آیتم</span>
                                        </div>
                                        <div class="p-4 border border-[var(--color-border)] rounded-[10px]">
                                            <a href="#" class="block mb-1">
                                                <img src="https://elango.steelthemes.com/ecom/el2/wp-content/uploads/2025/07/category-1.png"
                                                    class="w-[85px] h-20 mx-auto" alt="product">
                                                <span class="inline-block w-full text-center pt-3">محصول
                                                    تستی</span>
                                            </a>
                                            <span class="block text-center text-[14px] text-[var(--color-secondary-text)]">تست
                                                آیتم</span>
                                            <span class="block text-center text-[12px] text-[var(--color-secondary-text)]">10
                                                آیتم</span>
                                        </div>
                                        <div class="p-4 border border-[var(--color-border)] rounded-[10px]">
                                            <a href="#" class="block mb-1">
                                                <img src="https://elango.steelthemes.com/ecom/el2/wp-content/uploads/2025/07/category-1.png"
                                                    class="w-[85px] h-20 mx-auto" alt="product">
                                                <span class="inline-block w-full text-center pt-3">محصول
                                                    تستی</span>
                                            </a>
                                            <span class="block text-center text-[14px] text-[var(--color-secondary-text)]">تست
                                                آیتم</span>
                                            <span class="block text-center text-[12px] text-[var(--color-secondary-text)]">10
                                                آیتم</span>
                                        </div>
                                        <div class="p-4 border border-[var(--color-border)] rounded-[10px]">
                                            <a href="#" class="block mb-1">
                                                <img src="https://elango.steelthemes.com/ecom/el2/wp-content/uploads/2025/07/category-1.png"
                                                    class="w-[85px] h-20 mx-auto" alt="product">
                                                <span class="inline-block w-full text-center pt-3">محصول
                                                    تستی</span>
                                            </a>
                                            <span class="block text-center text-[14px] text-[var(--color-secondary-text)]">تست
                                                آیتم</span>
                                            <span class="block text-center text-[12px] text-[var(--color-secondary-text)]">10
                                                آیتم</span>
                                        </div>
                                        <div class="p-4 border border-[var(--color-border)] rounded-[10px]">
                                            <a href="#" class="block mb-1">
                                                <img src="https://elango.steelthemes.com/ecom/el2/wp-content/uploads/2025/07/category-1.png"
                                                    class="w-[85px] h-20 mx-auto" alt="product">
                                                <span class="inline-block w-full text-center pt-3">محصول
                                                    تستی</span>
                                            </a>
                                            <span class="block text-center text-[14px] text-[var(--color-secondary-text)]">تست
                                                آیتم</span>
                                            <span class="block text-center text-[12px] text-[var(--color-secondary-text)]">10
                                                آیتم</span>
                                        </div>
                                        <div class="p-4 border border-[var(--color-border)] rounded-[10px]">
                                            <a href="#" class="block mb-1">
                                                <img src="https://elango.steelthemes.com/ecom/el2/wp-content/uploads/2025/07/category-1.png"
                                                    class="w-[85px] h-20 mx-auto" alt="product">
                                                <span class="inline-block w-full text-center pt-3">محصول
                                                    تستی</span>
                                            </a>
                                            <span class="block text-center text-[14px] text-[var(--color-secondary-text)]">تست
                                                آیتم</span>
                                            <span class="block text-center text-[12px] text-[var(--color-secondary-text)]">10
                                                آیتم</span>
                                        </div>



                                    </div>
                                    <!-- contents -->
                                </div>
                            </div>









                        </div>
                    </li>
                    <li class="my-1">
                        <div
                            class="flex flex-row justify-between items-center gap-1 transition-all duration-300 px-3 rounded-lg hover:bg-[var(--color-primary-btn-hover)]">
                            <a href="#" class="inline-block w-11/12 text-[var(--color-text)] font-semibold py-3 ">
                                فروشگاه
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
                            <li>
                                <a href="#"
                                    class="inline-block w-full text-[var(--color-text)] font-semibold py-3 transition-all duration-300 px-3 rounded-lg hover:bg-[var(--color-primary-btn-hover)]">
                                    asiodfhkjaldshf
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="inline-block w-full text-[var(--color-text)] font-semibold py-3 transition-all duration-300 px-3 rounded-lg hover:bg-[var(--color-primary-btn-hover)]">
                                    asiodfhkjaldshf
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="inline-block w-full text-[var(--color-text)] font-semibold py-3 transition-all duration-300 px-3 rounded-lg hover:bg-[var(--color-primary-btn-hover)]">
                                    asiodfhkjaldshf
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="inline-block w-full text-[var(--color-text)] font-semibold py-3 transition-all duration-300 px-3 rounded-lg hover:bg-[var(--color-primary-btn-hover)]">
                                    asiodfhkjaldshf
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="my-1">
                        <div
                            class="flex flex-row justify-between items-center gap-1 transition-all duration-300 px-3 rounded-lg hover:bg-[var(--color-primary-btn-hover)]">
                            <a href="#" class="inline-block w-11/12 text-[var(--color-text)] font-semibold py-3 ">
                                تست
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
                            <li>
                                <a href="#"
                                    class="inline-block w-full text-[var(--color-text)] font-semibold py-3 transition-all duration-300 px-3 rounded-lg hover:bg-[var(--color-primary-btn-hover)]">
                                    asiodfhkjaldshf
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="inline-block w-full text-[var(--color-text)] font-semibold py-3 transition-all duration-300 px-3 rounded-lg hover:bg-[var(--color-primary-btn-hover)]">
                                    asiodfhkjaldshf
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="inline-block w-full text-[var(--color-text)] font-semibold py-3 transition-all duration-300 px-3 rounded-lg hover:bg-[var(--color-primary-btn-hover)]">
                                    asiodfhkjaldshf
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="inline-block w-full text-[var(--color-text)] font-semibold py-3 transition-all duration-300 px-3 rounded-lg hover:bg-[var(--color-primary-btn-hover)]">
                                    asiodfhkjaldshf
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="my-1">
                        <a href="#"
                            class="inline-block w-full text-[var(--color-text)] font-semibold py-3 transition-all duration-300 px-3 rounded-lg hover:bg-[var(--color-primary-btn-hover)] ">
                            <span>
                                ارتباط با ما
                            </span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <!-- modal -->


    </header>

    <main class="2xl:container 2xl:px-4 w-11/12 lg:w-[98%] mx-auto mt-5">
        <!-- sub header -->
        <section class="flex flex-col lg:flex-row gap-5 text-[var(--color-text)]">
            @foreach($bigTile as $bt)
            <div
                class="lg:w-2/3 w-full rounded-md bg-[var(--color-primary-btn)] bg-center bg-[url({{$bt['bg_img']}})] bg-cover bg-no-repeat p-8 lg:py-12 lg:px-20 relative overflow-hidden h-[440px] lg:h-auto max-h-[501px]">
                <div class="w-2/3">
                    <span class="font-medium mb-4 text-xs md:text-base leading-[20px]">{{$bt['header']}}</span>
                    <div
                        class="2xl:text-[60px] xl:text-[48px] lg:text-[42px] md:text-[36px] text-base 2xl:leading-[60px] font-bold mb-4">
                        {{$bt['title']}}
                    </div>
                    <p class="w-fit mb-6">{{$bt['text']}}</p>
                    <div class="flex flex-row justify-start items-center gap-5">
                        <a href="{{$bt['btn1_href']}}"
                            class="bg-[var(--color-subheader-btn)] text-sm lg:text-base rounded-[10px] py-2 px-5 text-[var(--color-primary-text)] font-semibold transition-all duration-500 ease-in-out hover:bg-[var(--color-bg-hover-btn)]">{{$bt['btn1_content']}}</a>
                        <a href="{{$bt['btn2_href']}}"
                            class="py-1 leading-[24px] text-sm lg:text-base transition-all duration-[0.25s] ease-in-out hover:-translate-y-[2px]">{{$bt['btn2_content']}}</a>
                    </div>
                </div>
                <img src="{{asset($bt['img'])}}"
                    class="w-full sm:w-8/12 absolute bottom-0 -left-10 sm:-left-[109px]" alt="this is image">
            </div>
            @endforeach
            <div class="lg:w-1/3 w-full flex flex-col sm:flex-row lg:flex-col gap-5">
                @foreach($tileBanners as $tileBanner)
                <div
                    class="sm:w-1/2 lg:w-full bg-[var(--color-primary-btn)] bg-[url({{$tileBanner->image}})] bg-cover rotate-y-180 bg-bottom-right bg-no-repeat min-h-[225px] rounded-[10px] p-[30px]">
                    <div class="rotate-y-180 flex flex-col gap-5">
                        <h2 class="font-bold xl:text-[28px] 2xl:text-[24px] leading-8">
                            {{$tileBanner->title}}
                        </h2>
                        <div class="flex">
                            <a href="{{$tileBanner->link_href}}"
                                class="bg-[var(--color-subheader-btn)] rounded-[10px] text-sm lg:text-base py-2 px-5 text-[var(--color-primary-text)] font-semibold transition-all duration-500 ease-in-out hover:bg-[var(--color-bg-hover-btn)] flex items-center gap-2 buttonLink">
                                <span>{{$tileBanner->link_content}}</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-2.5 h-5" viewBox="0 0 320 512">
                                    <path fill="white"
                                        d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </section>
        <!-- sub header -->

        <!-- category -->
        <section class="text-[var(--color-text)] pt-3">
            <!-- title section -->
            <div class="flex flex-row justify-between items-center py-10">
                <h2 class="font-bold text-[24px] leading-8">دسته بندی ها</h2>
                <div class="flex flex-row justify-end items-center gap-5">
                    <span class="size-[35px] rounded-[12px] border border-[var(--color-border)] flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 320 512">
                            <path fill="#8C9EC5"
                                d="M273 239c9.4 9.4 9.4 24.6 0 33.9L113 433c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l143-143L79 113c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0L273 239z" />
                        </svg>
                    </span>
                    <span class="size-[35px] rounded-[12px] border border-[var(--color-border)] flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 320 512">
                            <path fill="#8C9EC5"
                                d="M47 239c-9.4 9.4-9.4 24.6 0 33.9L207 433c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9L97.9 256 241 113c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0L47 239z" />
                        </svg>
                    </span>
                </div>
            </div>
            <!-- title section -->

            <div class="grid grid-cols-1 sm:grid-cols-3 md:grid-cols-5 lg:grid-cols-7 gap-5">
                @foreach($categories as $category)
                <div class="p-4 border border-[var(--color-border)] rounded-[10px]">
                    <a href="{{route('search', [$category])}}" class="block mb-1" target="_blank">
                        <img src="{{$category->image}}"
                            class="w-[85px] h-20 mx-auto" alt="">
                        <span class="inline-block w-full text-center pt-2">{{$category->title}}</span>
                    </a>
                    <span class="block text-center text-[14px] text-[var(--color-secondary-text)]">{{$category->description}}</span>
                </div>
                @endforeach
            </div>

        </section>
        <!-- category -->

        <!-- top pruducts -->
        <section class="text-[var(--color-text)] pt-3">
            <!-- title section -->
            <div class="flex flex-col lg:flex-row justify-between gap-8 lg:gap-0 lg:items-center py-5 lg:py-10">
                <h2 class="font-bold lg:text-[24px] leading-8">تخفیفات ویژه</h2>
                <!-- <div
                    class="flex flex-row flex-wrap lg:justify-end items-center text-xs lg:text-base gap-5 font-semibold">
                    <a href="#" class="text-[var(--color-text)]">
                        همه دسته ها
                    </a>
                    <a href="#" class="text-[var(--color-secondary-text)]">
                        تست 1
                    </a>
                    <a href="#" class="text-[var(--color-secondary-text)]">
                        تست 2
                    </a>
                    <a href="#" class="text-[var(--color-secondary-text)]">
                        تست 3
                    </a>
                </div> -->
            </div>
            <!-- title section -->

            <div class="grid 2xl:grid-cols-6 grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2.5 lg:gap-5">
                <!-- 12 -->

                <!-- <div class="p-2 md:p-3 lg:p-4 xl:p-5 border border-[var(--color-border)] rounded-[10px] relative productItem productItemNone">
                    <div
                        class="absolute top-[5px] lg:top-2.5 left-[5px] lg:left-2.5 hidden md:flex flex-col gap-2 z-[555] overflow-hidden">
                        <button
                            class="size-8 border border-[var(--color-border)] buttonProduct bg-white rounded-[4px] flex justify-center items-center -translate-x-4 opacity-0 cursor-pointer transition-all duration-500 delay-[50ms]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 512 512">
                                <path fill="var(--color-fill)"
                                    d="M244 130.6l-12-13.5-4.2-4.7c-26-29.2-65.3-42.8-103.8-35.8c-53.3 9.7-92 56.1-92 110.3v3.5c0 32.3 13.4 63.1 37.1 85.1L253 446.8c.8 .7 1.9 1.2 3 1.2s2.2-.4 3-1.2L443 275.5c23.6-22 37-52.8 37-85.1v-3.5c0-54.2-38.7-100.6-92-110.3c-38.5-7-77.8 6.6-103.8 35.8l-4.2 4.7-12 13.5c-3 3.4-7.4 5.4-12 5.4s-8.9-2-12-5.4zm34.9-57.1C311 48.4 352.7 37.7 393.7 45.1C462.2 57.6 512 117.3 512 186.9v3.5c0 36-13.1 70.6-36.6 97.5c-3.4 3.8-6.9 7.5-10.7 11l-184 171.3c-.8 .8-1.7 1.5-2.6 2.2c-6.3 4.9-14.1 7.5-22.1 7.5c-9.2 0-18-3.5-24.8-9.7L47.2 299c-3.8-3.5-7.3-7.2-10.7-11C13.1 261 0 226.4 0 190.4v-3.5C0 117.3 49.8 57.6 118.3 45.1c40.9-7.4 82.6 3.2 114.7 28.4c6.7 5.3 13 11.1 18.7 17.6l4.2 4.7 4.2-4.7c4.2-4.7 8.6-9.1 13.3-13.1c1.8-1.5 3.6-3 5.4-4.5z" />
                            </svg>
                        </button>
                        <button
                            class="size-8 border border-[var(--color-border)] buttonProduct bg-white rounded-[4px] flex justify-center items-center -translate-x-4 opacity-0 cursor-pointer transition-all duration-500 delay-[100ms]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 448 512">
                                <path fill="var(--color-fill)"
                                    d="M443.3 139.3c6.2-6.2 6.2-16.4 0-22.6l-96-96c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6L393.4 112 16 112c-8.8 0-16 7.2-16 16s7.2 16 16 16l377.4 0-68.7 68.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0l96-96zm-342.6 352c6.2 6.2 16.4 6.2 22.6 0s6.2-16.4 0-22.6L54.6 400 432 400c8.8 0 16-7.2 16-16s-7.2-16-16-16L54.6 368l68.7-68.7c6.2-6.2 6.2-16.4 0-22.6s-16.4-6.2-22.6 0l-96 96c-6.2 6.2-6.2 16.4 0 22.6l96 96z" />
                            </svg>
                        </button>



                        <button
                            class="size-8 border border-[var(--color-border)] buttonProduct bg-white rounded-[4px] flex justify-center items-center -translate-x-4 opacity-0 cursor-pointer transition-all duration-500 delay-[150ms]"">
                            <svg xmlns=" http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 576 512">
                            <path fill="var(--color-fill)"
                                d="M117.2 136C160.3 96 217.6 64 288 64s127.7 32 170.8 72c43.1 40 71.9 88 85.2 120c-13.3 32-42.1 80-85.2 120c-43.1 40-100.4 72-170.8 72s-127.7-32-170.8-72C74.1 336 45.3 288 32 256c13.3-32 42.1-80 85.2-120zM288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM192 256a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zm224 0a128 128 0 1 0 -256 0 128 128 0 1 0 256 0z" />
                            </svg>
                        </button>


                    </div>
                    <div
                        class="absolute top-[5px] lg:top-2.5 left-[5px] lg:left-2.5 md:hidden flex flex-col gap-2 z-[555] overflow-hidden">

                        <button
                            class="size-5 sm:size-7 border border-[var(--color-border)] bg-white rounded-[4px] flex justify-center items-center cursor-pointer productAnimation">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-3 sm:size-4" viewBox="0 0 448 512">
                                <path fill="var(--color-fill)"
                                    d="M306.8 6.3C311.4 2.2 317.3 0 323.4 0c17.2 0 29.2 17.1 23.4 33.3L278.7 224H389c14.9 0 27 12.1 27 27c0 7.8-3.3 15.1-9.1 20.3L141.1 505.8c-4.5 4-10.4 6.2-16.5 6.2c-17.2 0-29.2-17.1-23.5-33.3L169.3 288H57.8C43.6 288 32 276.4 32 262.2c0-7.4 3.2-14.4 8.7-19.3L306.8 6.3zm.5 42.4L74.1 256H192c5.2 0 10.1 2.5 13.1 6.8s3.7 9.7 2 14.6L140.6 463.6 375.8 256H256c-5.2 0-10.1-2.5-13.1-6.8s-3.7-9.7-2-14.6l66.4-186z" />
                            </svg>
                        </button>
                        <button
                            class="size-5 sm:size-7 border border-[var(--color-border)] bg-white rounded-[4px] flex justify-center items-center cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-3 sm:size-4" viewBox="0 0 512 512">
                                <path fill="var(--color-fill)"
                                    d="M244 130.6l-12-13.5-4.2-4.7c-26-29.2-65.3-42.8-103.8-35.8c-53.3 9.7-92 56.1-92 110.3v3.5c0 32.3 13.4 63.1 37.1 85.1L253 446.8c.8 .7 1.9 1.2 3 1.2s2.2-.4 3-1.2L443 275.5c23.6-22 37-52.8 37-85.1v-3.5c0-54.2-38.7-100.6-92-110.3c-38.5-7-77.8 6.6-103.8 35.8l-4.2 4.7-12 13.5c-3 3.4-7.4 5.4-12 5.4s-8.9-2-12-5.4zm34.9-57.1C311 48.4 352.7 37.7 393.7 45.1C462.2 57.6 512 117.3 512 186.9v3.5c0 36-13.1 70.6-36.6 97.5c-3.4 3.8-6.9 7.5-10.7 11l-184 171.3c-.8 .8-1.7 1.5-2.6 2.2c-6.3 4.9-14.1 7.5-22.1 7.5c-9.2 0-18-3.5-24.8-9.7L47.2 299c-3.8-3.5-7.3-7.2-10.7-11C13.1 261 0 226.4 0 190.4v-3.5C0 117.3 49.8 57.6 118.3 45.1c40.9-7.4 82.6 3.2 114.7 28.4c6.7 5.3 13 11.1 18.7 17.6l4.2 4.7 4.2-4.7c4.2-4.7 8.6-9.1 13.3-13.1c1.8-1.5 3.6-3 5.4-4.5z" />
                            </svg>
                        </button>
                        <button
                            class="size-5 sm:size-7 border border-[var(--color-border)] bg-white rounded-[4px] flex justify-center items-center cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-3 sm:size-4" viewBox="0 0 448 512">
                                <path fill="var(--color-fill)"
                                    d="M443.3 139.3c6.2-6.2 6.2-16.4 0-22.6l-96-96c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6L393.4 112 16 112c-8.8 0-16 7.2-16 16s7.2 16 16 16l377.4 0-68.7 68.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0l96-96zm-342.6 352c6.2 6.2 16.4 6.2 22.6 0s6.2-16.4 0-22.6L54.6 400 432 400c8.8 0 16-7.2 16-16s-7.2-16-16-16L54.6 368l68.7-68.7c6.2-6.2 6.2-16.4 0-22.6s-16.4-6.2-22.6 0l-96 96c-6.2 6.2-6.2 16.4 0 22.6l96 96z" />
                            </svg>
                        </button>
                        <button
                            class="size-5 sm:size-7 border border-[var(--color-border)] bg-white rounded-[4px] flex justify-center items-center cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-3 sm:size-4" viewBox="0 0 576 512">
                                <path fill="var(--color-fill)"
                                    d="M117.2 136C160.3 96 217.6 64 288 64s127.7 32 170.8 72c43.1 40 71.9 88 85.2 120c-13.3 32-42.1 80-85.2 120c-43.1 40-100.4 72-170.8 72s-127.7-32-170.8-72C74.1 336 45.3 288 32 256c13.3-32 42.1-80 85.2-120zM288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM192 256a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zm224 0a128 128 0 1 0 -256 0 128 128 0 1 0 256 0z" />
                            </svg>
                        </button>

                    </div>
                    <span
                        class="inline-block absolute top-[5px] lg:top-2.5 right-[5px] lg:right-2.5 py-[3px] px-2 bg-[var(--color-discount-bg)] text-[var(--color-primary-text)] rounded-full text-[8px] lg:text-[12px] text-center z-[11]">18%</span>
                    <div>
                        <a href="#" class="flex justify-center mb-1 overflow-hidden">
                            <img src="https://elango.steelthemes.com/ecom/el2/wp-content/uploads/2025/07/onion-pro-1.jpg"
                                class="size-full transition-all duration-500 hover:scale-[1.04] relative z-10"
                                alt="product">
                        </a>
                    </div>
                    <div>
                        <div class="mb-1">
                            <a href="#" class="text-[12px] lg:text-[14px] text-[var(--color-text)]">تست آیتم</a>
                        </div>





                        <div class="relative">
                            <div class="absolute w-3/4 h-3/4 bg-[var(--color-primary-btn)] bottom-0 right-0 p-3 hidden showMetric">
                                <div class="flex flex-row flex-wrap gap-1 text-[var(--color-text)]">
                                    <button type="button" class="px-[5px] py-[3px] text-xs rounded-[4px] border border-[var(--color-border)] translate-all duration-300 hover:border-black cursor-pointer">
                                        1 کیلو گرم
                                    </button>
                                    <button type="button" class="px-[5px] py-[3px] text-xs rounded-[4px] border border-[var(--color-border)] translate-all duration-300 hover:border-black cursor-pointer">
                                        2 کیلو گرم
                                    </button>
                                    <button type="button" class="px-[5px] py-[3px] text-xs rounded-[4px] border border-[var(--color-border)] translate-all duration-300 hover:border-black cursor-pointer">
                                        250 گرم
                                    </button>
                                    <button type="button" class="px-[5px] py-[3px] text-xs rounded-[4px] border border-[var(--color-border)] translate-all duration-300 hover:border-black cursor-pointer">
                                        500 گرم
                                    </button>
                                </div>
                            </div>
                            <div class="mb-2 font-semibold text-[14px] lg:text-base">
                                <a href="#">توضیحات محصول تستی محصول تستی محصول </a>
                            </div>
                            <div class="flex flex-row items-center mb-3 gap-2">
                                <div class="w-1/2 flex flex-row items-center text-[12px]">
                                    <div class="text-[var(--color-secondary-text)] flex flex-row items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-3 lg:size-4" viewBox="0 0 576 512">
                                            <path fill="#8C9EC5"
                                                d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-3 lg:size-4" viewBox="0 0 576 512">
                                            <path fill="#8C9EC5"
                                                d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-3 lg:size-4" viewBox="0 0 576 512">
                                            <path fill="#8C9EC5"
                                                d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-3 lg:size-4" viewBox="0 0 576 512">
                                            <path fill="#8C9EC5"
                                                d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-3 lg:size-4" viewBox="0 0 576 512">
                                            <path fill="#8C9EC5"
                                                d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z" />
                                        </svg>
                                    </div>
                                    <span>(0)</span>
                                </div>
                                <div>
                                    <span
                                        class="lg:py-[3px] py-px px-0.5 lg:px-[5px] bg-[var(--color-secondary)] text-[var(--color-primary-text)] rounded-full text-[10px]">
                                        تستی
                                    </span>
                                </div>
                            </div>
                            <div class="hidden lg:flex flex-row items-center gap-2 text-[var(--color-text)] mb-3 text-[18px] font-bold">
                                <span>$15.22</span>
                                <span>-</span>
                                <span>$140.00</span>
                            </div>
                        </div>





                        <div class="flex lg:hidden flex-row items-start gap-2 text-[var(--color-text)] mb-3 font-bold">
                            <span>$15.22</span>

                            <del class="text-xs text-[var(--color-secondary-text)]">$140.00</del>
                        </div>
                        <div class="flex flex-col lg:flex-row gap-2 lg:gap-4 relative">
                            <div class="absolute size-full bg-white/70 cursor-not-allowed"></div>
                            <div
                                class="w-full lg:w-1/2 flex flex-row justify-between items-center border border-[var(--color-border)] rounded-[10px] p-1">
                                <button
                                    class="bg-[var(--color-primary-btn)] rounded-[10px] size-9 lg:size-[27px] flex items-center justify-center cursor-pointer" disabled>-</button>
                                <input type="text" class="w-[30px] outline-none text-center text-xs" value="1" min="0"
                                    name="" id="" disabled>
                                <button
                                    class="bg-[var(--color-primary-btn)] rounded-[10px] size-9 lg:size-[27px] flex items-center justify-center cursor-pointer" disabled>+</button>
                            </div>
                            <div class="w-full lg:w-1/2">
                                <button
                                    class="w-full h-full py-3 lg:py-1 text-[12px] lg:text-[14px] text-[var(--color-primary-text)] bg-[var(--color-bg-card-btn)] leading-5 rounded-[10px] cursor-pointer" disabled>ناموجود</button>
                            </div>
                        </div>
                    </div>
                </div> -->

                @foreach($specialDiscounts[0]['products'] as $specialDiscountProduct)
                @if($specialDiscountProduct['is_in_home'] == 1)
                <div class="p-2 md:p-3 lg:p-4 xl:p-5 border border-[var(--color-border)] rounded-[10px] relative productItem">
                    <div
                        class="absolute top-[5px] lg:top-2.5 left-[5px] lg:left-2.5 hidden md:flex flex-col gap-2 z-[555] overflow-hidden">

                        <button
                            class="size-8 border border-[var(--color-border)] buttonProduct btnAnimation bg-white rounded-[4px] flex justify-center items-center -translate-x-4 opacity-0 cursor-pointer transition-all duration-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 448 512">
                                <path fill="var(--color-fill)"
                                    d="M306.8 6.3C311.4 2.2 317.3 0 323.4 0c17.2 0 29.2 17.1 23.4 33.3L278.7 224H389c14.9 0 27 12.1 27 27c0 7.8-3.3 15.1-9.1 20.3L141.1 505.8c-4.5 4-10.4 6.2-16.5 6.2c-17.2 0-29.2-17.1-23.5-33.3L169.3 288H57.8C43.6 288 32 276.4 32 262.2c0-7.4 3.2-14.4 8.7-19.3L306.8 6.3zm.5 42.4L74.1 256H192c5.2 0 10.1 2.5 13.1 6.8s3.7 9.7 2 14.6L140.6 463.6 375.8 256H256c-5.2 0-10.1-2.5-13.1-6.8s-3.7-9.7-2-14.6l66.4-186z" />
                            </svg>
                        </button>
                        <button
                            class="size-8 border border-[var(--color-border)] buttonProduct bg-white rounded-[4px] flex justify-center items-center -translate-x-4 opacity-0 cursor-pointer transition-all duration-500 delay-[50ms]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 512 512">
                                <path fill="var(--color-fill)"
                                    d="M244 130.6l-12-13.5-4.2-4.7c-26-29.2-65.3-42.8-103.8-35.8c-53.3 9.7-92 56.1-92 110.3v3.5c0 32.3 13.4 63.1 37.1 85.1L253 446.8c.8 .7 1.9 1.2 3 1.2s2.2-.4 3-1.2L443 275.5c23.6-22 37-52.8 37-85.1v-3.5c0-54.2-38.7-100.6-92-110.3c-38.5-7-77.8 6.6-103.8 35.8l-4.2 4.7-12 13.5c-3 3.4-7.4 5.4-12 5.4s-8.9-2-12-5.4zm34.9-57.1C311 48.4 352.7 37.7 393.7 45.1C462.2 57.6 512 117.3 512 186.9v3.5c0 36-13.1 70.6-36.6 97.5c-3.4 3.8-6.9 7.5-10.7 11l-184 171.3c-.8 .8-1.7 1.5-2.6 2.2c-6.3 4.9-14.1 7.5-22.1 7.5c-9.2 0-18-3.5-24.8-9.7L47.2 299c-3.8-3.5-7.3-7.2-10.7-11C13.1 261 0 226.4 0 190.4v-3.5C0 117.3 49.8 57.6 118.3 45.1c40.9-7.4 82.6 3.2 114.7 28.4c6.7 5.3 13 11.1 18.7 17.6l4.2 4.7 4.2-4.7c4.2-4.7 8.6-9.1 13.3-13.1c1.8-1.5 3.6-3 5.4-4.5z" />
                            </svg>
                        </button>
                        <button
                            class="size-8 border border-[var(--color-border)] buttonProduct bg-white rounded-[4px] flex justify-center items-center -translate-x-4 opacity-0 cursor-pointer transition-all duration-500 delay-[100ms]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 448 512">
                                <path fill="var(--color-fill)"
                                    d="M443.3 139.3c6.2-6.2 6.2-16.4 0-22.6l-96-96c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6L393.4 112 16 112c-8.8 0-16 7.2-16 16s7.2 16 16 16l377.4 0-68.7 68.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0l96-96zm-342.6 352c6.2 6.2 16.4 6.2 22.6 0s6.2-16.4 0-22.6L54.6 400 432 400c8.8 0 16-7.2 16-16s-7.2-16-16-16L54.6 368l68.7-68.7c6.2-6.2 6.2-16.4 0-22.6s-16.4-6.2-22.6 0l-96 96c-6.2 6.2-6.2 16.4 0 22.6l96 96z" />
                            </svg>
                        </button>
                        <button
                            class="size-8 border border-[var(--color-border)] buttonProduct bg-white rounded-[4px] flex justify-center items-center -translate-x-4 opacity-0 cursor-pointer transition-all duration-500 delay-[150ms]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 576 512">
                                <path fill="var(--color-fill)"
                                    d="M117.2 136C160.3 96 217.6 64 288 64s127.7 32 170.8 72c43.1 40 71.9 88 85.2 120c-13.3 32-42.1 80-85.2 120c-43.1 40-100.4 72-170.8 72s-127.7-32-170.8-72C74.1 336 45.3 288 32 256c13.3-32 42.1-80 85.2-120zM288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM192 256a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zm224 0a128 128 0 1 0 -256 0 128 128 0 1 0 256 0z" />
                            </svg>
                        </button>

                    </div>
                    <div
                        class="absolute top-[5px] lg:top-2.5 left-[5px] lg:left-2.5 md:hidden flex flex-col gap-2 z-[555] overflow-hidden">

                        <button
                            class="size-5 sm:size-7 border border-[var(--color-border)] bg-white rounded-[4px] flex justify-center items-center cursor-pointer productAnimation">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-3 sm:size-4" viewBox="0 0 448 512">
                                <path fill="var(--color-fill)"
                                    d="M306.8 6.3C311.4 2.2 317.3 0 323.4 0c17.2 0 29.2 17.1 23.4 33.3L278.7 224H389c14.9 0 27 12.1 27 27c0 7.8-3.3 15.1-9.1 20.3L141.1 505.8c-4.5 4-10.4 6.2-16.5 6.2c-17.2 0-29.2-17.1-23.5-33.3L169.3 288H57.8C43.6 288 32 276.4 32 262.2c0-7.4 3.2-14.4 8.7-19.3L306.8 6.3zm.5 42.4L74.1 256H192c5.2 0 10.1 2.5 13.1 6.8s3.7 9.7 2 14.6L140.6 463.6 375.8 256H256c-5.2 0-10.1-2.5-13.1-6.8s-3.7-9.7-2-14.6l66.4-186z" />
                            </svg>
                        </button>
                        <button
                            class="size-5 sm:size-7 border border-[var(--color-border)] bg-white rounded-[4px] flex justify-center items-center cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-3 sm:size-4" viewBox="0 0 512 512">
                                <path fill="var(--color-fill)"
                                    d="M244 130.6l-12-13.5-4.2-4.7c-26-29.2-65.3-42.8-103.8-35.8c-53.3 9.7-92 56.1-92 110.3v3.5c0 32.3 13.4 63.1 37.1 85.1L253 446.8c.8 .7 1.9 1.2 3 1.2s2.2-.4 3-1.2L443 275.5c23.6-22 37-52.8 37-85.1v-3.5c0-54.2-38.7-100.6-92-110.3c-38.5-7-77.8 6.6-103.8 35.8l-4.2 4.7-12 13.5c-3 3.4-7.4 5.4-12 5.4s-8.9-2-12-5.4zm34.9-57.1C311 48.4 352.7 37.7 393.7 45.1C462.2 57.6 512 117.3 512 186.9v3.5c0 36-13.1 70.6-36.6 97.5c-3.4 3.8-6.9 7.5-10.7 11l-184 171.3c-.8 .8-1.7 1.5-2.6 2.2c-6.3 4.9-14.1 7.5-22.1 7.5c-9.2 0-18-3.5-24.8-9.7L47.2 299c-3.8-3.5-7.3-7.2-10.7-11C13.1 261 0 226.4 0 190.4v-3.5C0 117.3 49.8 57.6 118.3 45.1c40.9-7.4 82.6 3.2 114.7 28.4c6.7 5.3 13 11.1 18.7 17.6l4.2 4.7 4.2-4.7c4.2-4.7 8.6-9.1 13.3-13.1c1.8-1.5 3.6-3 5.4-4.5z" />
                            </svg>
                        </button>
                        <button
                            class="size-5 sm:size-7 border border-[var(--color-border)] bg-white rounded-[4px] flex justify-center items-center cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-3 sm:size-4" viewBox="0 0 448 512">
                                <path fill="var(--color-fill)"
                                    d="M443.3 139.3c6.2-6.2 6.2-16.4 0-22.6l-96-96c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6L393.4 112 16 112c-8.8 0-16 7.2-16 16s7.2 16 16 16l377.4 0-68.7 68.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0l96-96zm-342.6 352c6.2 6.2 16.4 6.2 22.6 0s6.2-16.4 0-22.6L54.6 400 432 400c8.8 0 16-7.2 16-16s-7.2-16-16-16L54.6 368l68.7-68.7c6.2-6.2 6.2-16.4 0-22.6s-16.4-6.2-22.6 0l-96 96c-6.2 6.2-6.2 16.4 0 22.6l96 96z" />
                            </svg>
                        </button>
                        <button
                            class="size-5 sm:size-7 border border-[var(--color-border)] bg-white rounded-[4px] flex justify-center items-center cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-3 sm:size-4" viewBox="0 0 576 512">
                                <path fill="var(--color-fill)"
                                    d="M117.2 136C160.3 96 217.6 64 288 64s127.7 32 170.8 72c43.1 40 71.9 88 85.2 120c-13.3 32-42.1 80-85.2 120c-43.1 40-100.4 72-170.8 72s-127.7-32-170.8-72C74.1 336 45.3 288 32 256c13.3-32 42.1-80 85.2-120zM288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM192 256a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zm224 0a128 128 0 1 0 -256 0 128 128 0 1 0 256 0z" />
                            </svg>
                        </button>

                    </div>
                    <span
                        class="inline-block absolute top-[5px] lg:top-2.5 right-[5px] lg:right-2.5 py-[3px] px-2 bg-[var(--color-discount-bg)] text-[var(--color-primary-text)] rounded-full text-[8px] lg:text-[12px] text-center z-[11]">18%</span>
                    <div>
                        <a href="{{route('product-show', [$specialDiscountProduct])}}" class="flex justify-center mb-1 overflow-hidden">
                            <img src="@foreach($specialDiscountProduct->medias as $media) @if($media['is_main'] == 1) {{asset($media['path'])}} @endif @endforeach"
                                class="size-full transition-all duration-500 hover:scale-[1.04] relative z-10"
                                alt="product">
                        </a>
                    </div>
                    <div>
                        <div class="mb-1">
                            <a href="{{route('product-show', [$specialDiscountProduct])}}" class="text-[12px] lg:text-[14px] text-[var(--color-text)]">{{$specialDiscountProduct->title}}</a>
                        </div>
                        <div>
                            <div class="mb-2 font-semibold text-[14px] lg:text-base">
                                <a href="{{route('product-show', [$specialDiscountProduct])}}">{{$specialDiscountProduct->description}}</a>
                            </div>
                            <div class="flex flex-row items-center mb-3 gap-2">
                                <div class="w-1/2 flex flex-row items-center text-[12px]">
                                    <div class="text-[var(--color-secondary-text)] flex flex-row items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-3 lg:size-4" viewBox="0 0 576 512">
                                            <path fill="#8C9EC5"
                                                d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-3 lg:size-4" viewBox="0 0 576 512">
                                            <path fill="#8C9EC5"
                                                d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-3 lg:size-4" viewBox="0 0 576 512">
                                            <path fill="#8C9EC5"
                                                d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-3 lg:size-4" viewBox="0 0 576 512">
                                            <path fill="#8C9EC5"
                                                d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-3 lg:size-4" viewBox="0 0 576 512">
                                            <path fill="#8C9EC5"
                                                d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z" />
                                        </svg>
                                    </div>
                                    <span>(0)</span>
                                </div>
                                <div>
                                    <span
                                        class="lg:py-[3px] py-px px-0.5 lg:px-[5px] bg-[var(--color-secondary)] text-[var(--color-primary-text)] rounded-full text-[10px]">
                                        تستی
                                    </span>
                                </div>
                            </div>
                            <div class="hidden lg:flex flex-row items-center gap-2 text-[var(--color-text)] mb-3 text-[18px] font-bold">
                                <span>$15.22</span>
                                <span>-</span>
                                <span>$140.00</span>
                            </div>
                        </div>

                        <div class="flex lg:hidden flex-row items-start gap-2 text-[var(--color-text)] mb-3 font-bold">
                            <span>$15.22</span>

                            <del class="text-xs text-[var(--color-secondary-text)]">$140.00</del>
                        </div>
                        <div class="flex flex-col lg:flex-row gap-2 lg:gap-4">
                            <div
                                class="w-full lg:w-1/2 flex flex-row justify-between items-center border border-[var(--color-border)] rounded-[10px] p-1">
                                <button
                                    class="bg-[var(--color-primary-btn)] rounded-[10px] size-9 lg:size-[27px] flex items-center justify-center cursor-pointer">-</button>
                                <input type="text" class="w-[30px] outline-none text-center text-xs" value="1" min="0"
                                    name="" id="">
                                <button
                                    class="bg-[var(--color-primary-btn)] rounded-[10px] size-9 lg:size-[27px] flex items-center justify-center cursor-pointer">+</button>
                            </div>
                            <div class="w-full lg:w-1/2">
                                <button
                                    class="w-full h-full py-3 lg:py-1 text-[12px] lg:text-[14px] text-[var(--color-primary-text)] bg-[var(--color-bg-card-btn)] leading-5 rounded-[10px] cursor-pointer">خرید</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach

            </div>
        </section>
        <!-- top products -->

        <!-- offers -->
        <section class="text-[var(--color-text)] pt-3">
            <div class="grid grid-cols-1 sm:grid-cols-2 2xl:grid-cols-4 gap-[30px] py-10">
                @foreach($banners as $banner)
                <div class="bg-[var(--color-primary-btn)] p-2.5 rounded-[10px] flex flex-col lg:flex-row items-center gap-2.5">
                    <div class="lg:w-5/12">
                        <img src="{{$banner->image}}"
                            class="w-[220px] sm:w-[80%] mx-auto lg:w-full" alt="product image">
                    </div>
                    <div class="lg:w-7/12 p-2.5">
                        <div class="mb-1">
                            <h2 class="text-lg font-semibold leading-8">
                                {{$banner->title}}
                            </h2>
                        </div>
                        <div>
                            <a href="{{$banner->link_href}}"
                                class="flex flex-row items-center gap-2 transitin-all duration-[.25s] hover:-translate-y-[2px]">
                                <span class="leading-10 text-sm font-semibold">{{$banner->link_content}}</span>
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
        <section class="text-[var(--color-text)] pt-3">
            <div class="flex flex-col xl:flex-row items-start gap-10 py-10">


                <!-- height problem -->
                @foreach($bigBanner as $bb)
                <div
                    class="w-full children hidden xl:block xl:w-1/4 p-[30px] rounded-[12px] bg-[url({{$bb->image}})] bg-bottom-right bg-cover bg-no-repeat rotate-y-180">
                    <div class="rotate-y-180 h-[415px]">
                        <h2 class="text-[28px] leading-12 font-bold">
                            {{$bb->title}}
                        </h2>
                        <div class="flex mt-3">
                            <a href="{{$bb->link_href}}"
                                class="flex flex-row items-center gap-2 bg-[var(--color-primary)] rounded-[10px] py-2 px-5 text-[var(--color-primary-text)] font-semibold">
                                <span>{{$bb->link_content}}</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 320 512">
                                    <path fill="#fff"
                                        d="M47 239c-9.4 9.4-9.4 24.6 0 33.9L207 433c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9L97.9 256 241 113c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0L47 239z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach

                <!-- height problem -->

                <div class="w-full children xl:w-3/4">
                    <div class="flex flex-row justify-between items-center pb-3">
                        <div class="flex flex-row justify-end items-center gap-5 font-semibold">
                            <a href="#" class="text-[var(--color-text)]">
                                همه دسته ها
                            </a>
                            @foreach($categories as $category)
                            <a href="#" class="text-[var(--color-secondary-text)]">{{$category['title']}}</a>
                            @endforeach
                        </div>
                        <div class="flex flex-row justify-end items-center gap-5">
                            <span
                                class="size-[35px] rounded-[12px] border border-[var(--color-border)] flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 320 512">
                                    <path fill="#8C9EC5"
                                        d="M273 239c9.4 9.4 9.4 24.6 0 33.9L113 433c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l143-143L79 113c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0L273 239z" />
                                </svg>
                            </span>
                            <span
                                class="size-[35px] rounded-[12px] border border-[var(--color-border)] flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 320 512">
                                    <path fill="#8C9EC5"
                                        d="M47 239c-9.4 9.4-9.4 24.6 0 33.9L207 433c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9L97.9 256 241 113c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0L47 239z" />
                                </svg>
                            </span>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5">
                        @foreach($products as $product)
                        <div
                            class="p-2 md:p-3 lg:p-4 xl:p-5 border border-[var(--color-border)] rounded-[10px] relative productItem">
                            <div
                                class="absolute top-[5px] lg:top-2.5 left-[5px] lg:left-2.5 hidden md:flex flex-col gap-2 z-[555] overflow-hidden">

                                <button
                                    class="size-8 border border-[var(--color-border)] buttonProduct bg-white rounded-[4px] flex justify-center items-center -translate-x-4 opacity-0 cursor-pointer transition-all duration-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 448 512">
                                        <path fill="var(--color-fill)"
                                            d="M306.8 6.3C311.4 2.2 317.3 0 323.4 0c17.2 0 29.2 17.1 23.4 33.3L278.7 224H389c14.9 0 27 12.1 27 27c0 7.8-3.3 15.1-9.1 20.3L141.1 505.8c-4.5 4-10.4 6.2-16.5 6.2c-17.2 0-29.2-17.1-23.5-33.3L169.3 288H57.8C43.6 288 32 276.4 32 262.2c0-7.4 3.2-14.4 8.7-19.3L306.8 6.3zm.5 42.4L74.1 256H192c5.2 0 10.1 2.5 13.1 6.8s3.7 9.7 2 14.6L140.6 463.6 375.8 256H256c-5.2 0-10.1-2.5-13.1-6.8s-3.7-9.7-2-14.6l66.4-186z" />
                                    </svg>
                                </button>
                                <button
                                    class="size-8 border border-[var(--color-border)] buttonProduct bg-white rounded-[4px] flex justify-center items-center -translate-x-4 opacity-0 cursor-pointer transition-all duration-500 delay-[50ms]">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 512 512">
                                        <path fill="var(--color-fill)"
                                            d="M244 130.6l-12-13.5-4.2-4.7c-26-29.2-65.3-42.8-103.8-35.8c-53.3 9.7-92 56.1-92 110.3v3.5c0 32.3 13.4 63.1 37.1 85.1L253 446.8c.8 .7 1.9 1.2 3 1.2s2.2-.4 3-1.2L443 275.5c23.6-22 37-52.8 37-85.1v-3.5c0-54.2-38.7-100.6-92-110.3c-38.5-7-77.8 6.6-103.8 35.8l-4.2 4.7-12 13.5c-3 3.4-7.4 5.4-12 5.4s-8.9-2-12-5.4zm34.9-57.1C311 48.4 352.7 37.7 393.7 45.1C462.2 57.6 512 117.3 512 186.9v3.5c0 36-13.1 70.6-36.6 97.5c-3.4 3.8-6.9 7.5-10.7 11l-184 171.3c-.8 .8-1.7 1.5-2.6 2.2c-6.3 4.9-14.1 7.5-22.1 7.5c-9.2 0-18-3.5-24.8-9.7L47.2 299c-3.8-3.5-7.3-7.2-10.7-11C13.1 261 0 226.4 0 190.4v-3.5C0 117.3 49.8 57.6 118.3 45.1c40.9-7.4 82.6 3.2 114.7 28.4c6.7 5.3 13 11.1 18.7 17.6l4.2 4.7 4.2-4.7c4.2-4.7 8.6-9.1 13.3-13.1c1.8-1.5 3.6-3 5.4-4.5z" />
                                    </svg>
                                </button>
                                <button
                                    class="size-8 border border-[var(--color-border)] buttonProduct bg-white rounded-[4px] flex justify-center items-center -translate-x-4 opacity-0 cursor-pointer transition-all duration-500 delay-[100ms]">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 448 512">
                                        <path fill="var(--color-fill)"
                                            d="M443.3 139.3c6.2-6.2 6.2-16.4 0-22.6l-96-96c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6L393.4 112 16 112c-8.8 0-16 7.2-16 16s7.2 16 16 16l377.4 0-68.7 68.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0l96-96zm-342.6 352c6.2 6.2 16.4 6.2 22.6 0s6.2-16.4 0-22.6L54.6 400 432 400c8.8 0 16-7.2 16-16s-7.2-16-16-16L54.6 368l68.7-68.7c6.2-6.2 6.2-16.4 0-22.6s-16.4-6.2-22.6 0l-96 96c-6.2 6.2-6.2 16.4 0 22.6l96 96z" />
                                    </svg>
                                </button>
                                <button
                                    class="size-8 border border-[var(--color-border)] buttonProduct bg-white rounded-[4px] flex justify-center items-center -translate-x-4 opacity-0 cursor-pointer transition-all duration-500 delay-[150ms]">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 576 512">
                                        <path fill="var(--color-fill)"
                                            d="M117.2 136C160.3 96 217.6 64 288 64s127.7 32 170.8 72c43.1 40 71.9 88 85.2 120c-13.3 32-42.1 80-85.2 120c-43.1 40-100.4 72-170.8 72s-127.7-32-170.8-72C74.1 336 45.3 288 32 256c13.3-32 42.1-80 85.2-120zM288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM192 256a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zm224 0a128 128 0 1 0 -256 0 128 128 0 1 0 256 0z" />
                                    </svg>
                                </button>

                            </div>
                            <div
                                class="absolute top-[5px] lg:top-2.5 left-[5px] lg:left-2.5 md:hidden flex flex-col gap-2 z-[555] overflow-hidden">

                                <button
                                    class="size-5 sm:size-7 border border-[var(--color-border)] bg-white rounded-[4px] flex justify-center items-center cursor-pointer productAnimation">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-3 sm:size-4"
                                        viewBox="0 0 448 512">
                                        <path fill="var(--color-fill)"
                                            d="M306.8 6.3C311.4 2.2 317.3 0 323.4 0c17.2 0 29.2 17.1 23.4 33.3L278.7 224H389c14.9 0 27 12.1 27 27c0 7.8-3.3 15.1-9.1 20.3L141.1 505.8c-4.5 4-10.4 6.2-16.5 6.2c-17.2 0-29.2-17.1-23.5-33.3L169.3 288H57.8C43.6 288 32 276.4 32 262.2c0-7.4 3.2-14.4 8.7-19.3L306.8 6.3zm.5 42.4L74.1 256H192c5.2 0 10.1 2.5 13.1 6.8s3.7 9.7 2 14.6L140.6 463.6 375.8 256H256c-5.2 0-10.1-2.5-13.1-6.8s-3.7-9.7-2-14.6l66.4-186z" />
                                    </svg>
                                </button>
                                <button
                                    class="size-5 sm:size-7 border border-[var(--color-border)] bg-white rounded-[4px] flex justify-center items-center cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-3 sm:size-4"
                                        viewBox="0 0 512 512">
                                        <path fill="var(--color-fill)"
                                            d="M244 130.6l-12-13.5-4.2-4.7c-26-29.2-65.3-42.8-103.8-35.8c-53.3 9.7-92 56.1-92 110.3v3.5c0 32.3 13.4 63.1 37.1 85.1L253 446.8c.8 .7 1.9 1.2 3 1.2s2.2-.4 3-1.2L443 275.5c23.6-22 37-52.8 37-85.1v-3.5c0-54.2-38.7-100.6-92-110.3c-38.5-7-77.8 6.6-103.8 35.8l-4.2 4.7-12 13.5c-3 3.4-7.4 5.4-12 5.4s-8.9-2-12-5.4zm34.9-57.1C311 48.4 352.7 37.7 393.7 45.1C462.2 57.6 512 117.3 512 186.9v3.5c0 36-13.1 70.6-36.6 97.5c-3.4 3.8-6.9 7.5-10.7 11l-184 171.3c-.8 .8-1.7 1.5-2.6 2.2c-6.3 4.9-14.1 7.5-22.1 7.5c-9.2 0-18-3.5-24.8-9.7L47.2 299c-3.8-3.5-7.3-7.2-10.7-11C13.1 261 0 226.4 0 190.4v-3.5C0 117.3 49.8 57.6 118.3 45.1c40.9-7.4 82.6 3.2 114.7 28.4c6.7 5.3 13 11.1 18.7 17.6l4.2 4.7 4.2-4.7c4.2-4.7 8.6-9.1 13.3-13.1c1.8-1.5 3.6-3 5.4-4.5z" />
                                    </svg>
                                </button>
                                <button
                                    class="size-5 sm:size-7 border border-[var(--color-border)] bg-white rounded-[4px] flex justify-center items-center cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-3 sm:size-4"
                                        viewBox="0 0 448 512">
                                        <path fill="var(--color-fill)"
                                            d="M443.3 139.3c6.2-6.2 6.2-16.4 0-22.6l-96-96c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6L393.4 112 16 112c-8.8 0-16 7.2-16 16s7.2 16 16 16l377.4 0-68.7 68.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0l96-96zm-342.6 352c6.2 6.2 16.4 6.2 22.6 0s6.2-16.4 0-22.6L54.6 400 432 400c8.8 0 16-7.2 16-16s-7.2-16-16-16L54.6 368l68.7-68.7c6.2-6.2 6.2-16.4 0-22.6s-16.4-6.2-22.6 0l-96 96c-6.2 6.2-6.2 16.4 0 22.6l96 96z" />
                                    </svg>
                                </button>
                                <button
                                    class="size-5 sm:size-7 border border-[var(--color-border)] bg-white rounded-[4px] flex justify-center items-center cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-3 sm:size-4"
                                        viewBox="0 0 576 512">
                                        <path fill="var(--color-fill)"
                                            d="M117.2 136C160.3 96 217.6 64 288 64s127.7 32 170.8 72c43.1 40 71.9 88 85.2 120c-13.3 32-42.1 80-85.2 120c-43.1 40-100.4 72-170.8 72s-127.7-32-170.8-72C74.1 336 45.3 288 32 256c13.3-32 42.1-80 85.2-120zM288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM192 256a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zm224 0a128 128 0 1 0 -256 0 128 128 0 1 0 256 0z" />
                                    </svg>
                                </button>

                            </div>
                            <span
                                class="inline-block absolute top-[5px] lg:top-2.5 right-[5px] lg:right-2.5 py-[3px] px-2 bg-[var(--color-discount-bg)] text-[var(--color-primary-text)] rounded-full text-[8px] lg:text-[12px] text-center z-[11]">18%</span>
                            <div>
                                <a href="http://localhost/shahkar/public/product/show/{{$product->id}}" class="flex justify-center mb-1 overflow-hidden">
                                    <img src="@foreach($product->medias as $media) @if($media['is_main'] == 1) {{asset($media['path'])}} @endif @endforeach"
                                        class="size-full transition-all duration-500 hover:scale-[1.04] relative z-10"
                                        alt="product">
                                </a>
                            </div>
                            <div class="mb-1">
                                <a href="http://localhost/shahkar/public/product/show/{{$product->id}}" class="text-[12px] lg:text-[14px] text-[var(--color-text)]">{{$product->title}}</a>
                            </div>
                            <div class="mb-2 font-semibold text-[14px] lg:text-base">
                                <a href="http://localhost/shahkar/public/product/show/{{$product->id}}">{{$product->description}}</a>
                            </div>
                            <div class="flex flex-row items-center mb-3 gap-3">
                                <div class="lg:w-1/2 flex flex-row items-center text-[12px]">
                                    <div class="text-[var(--color-secondary-text)] flex flex-row items-center">
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
                                        class="lg:py-[3px] py-px px-0.5 lg:px-[5px] bg-[var(--color-secondary)] text-[var(--color-primary-text)] rounded-full text-[10px]">
                                        تستی
                                    </span>
                                </div>
                            </div>
                            <div
                                class="hidden lg:flex flex-row items-center gap-2 text-[var(--color-text)] mb-3 text-[18px] font-bold">
                                <span>$15.22</span>
                                <span>-</span>
                                <span>$140.00</span>
                            </div>
                            <div class="flex lg:hidden flex-row items-start gap-2 text-[var(--color-text)] mb-3 font-bold">
                                <span>$15.22</span>

                                <del class="text-xs text-[var(--color-secondary-text)]">$140.00</del>
                            </div>
                            <div class="flex flex-col lg:flex-row gap-2 lg:gap-4">
                                <div
                                    class="w-full lg:w-1/2 flex flex-row justify-between items-center border border-[var(--color-border)] rounded-[10px] p-1">
                                    <button
                                        class="bg-[var(--color-primary-btn)] rounded-[10px] size-9 lg:size-[27px] flex items-center justify-center cursor-pointer">-</button>
                                    <input type="text" class="w-[30px] outline-none text-center text-xs" value="1"
                                        min="0" name="" id="">
                                    <button
                                        class="bg-[var(--color-primary-btn)] rounded-[10px] size-9 lg:size-[27px] flex items-center justify-center cursor-pointer">+</button>
                                </div>
                                <div class="w-full lg:w-1/2">
                                    <button
                                        class="w-full h-full py-3 lg:py-1 text-[12px] lg:text-[14px] text-[var(--color-primary-text)] bg-[var(--color-bg-card-btn)] leading-5 rounded-[10px] cursor-pointer">خرید</button>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>



                </div>
            </div>
        </section>
        <!-- related products -->

        <section class="text-[var(--color-text)] pt-3">
            @foreach($footerTile as $ft)
            <div class="py-10">
                <div
                    class="flex flex-col xl:flex-row items-stretch gap-5 rounded-[10px] bg-[var(--color-bg-contact-section)] bg-[url({{$ft['bg_img']}})] bg-cover bg-no-repeat bg-center">
                    <div class="w-full xl:w-1/2 px-[50px] pt-[60px] pb-[70px] flex flex-col justify-start gap-5">
                        <div>
                            <h2 class="text-[var(--color-primary-text)] sm:text-3xl lg:text-[50px] 2xl:leading-[75px] font-bold mb-1">
                                {{$ft['title']}}
                            </h2>
                            <p class="text-[var(--color-primary-text)] py-5">
                                {{$ft['text']}}
                            </p>
                        </div>
                        <div class="w-full bg-white rounded-[10px] p-3">
                            <form action="" method="post">
                                <div class="rounded-[8px] 2xl:border-none border border-gray-300 relative">
                                    <input type="email"
                                        class="block w-full 2xl:w-2/3 2xl:mx-auto outline-none p-5 2xl:mb-4 rounded-[8px]"
                                        placeholder="ایمیل خود را وارد کنید" name="" id="">
                                    <button
                                        class="absolute left-3 top-2 2xl:static py-3 px-8 rounded-[8px] 2xl:mx-auto 2xl:block bg-[var(--color-btn-contact)] text-[var(--color-primary-text)] hover:bg-[var(--color-btn-contact-hover)] transition-all duration-300">ثبت
                                        نام</button>

                                </div>
                            </form>
                        </div>
                    </div>
                    <div
                        class="w-full xl:w-1/2 bg-[url({{$ft['img']}})] bg-cover bg-center bg-no-repeat">
                    </div>
                </div>
            </div>
            @endforeach
        </section>


    </main>

    <footer class="text-[var(--color-text)] pt-3 bg-[var(--color-primary-btn)] 2xl:container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 px-4">
            @foreach($footerColumns as $footerColumn)
            <div class="p-6">
                <p class="text-gray-700 font-bold mb-4">{{$footerColumn['section_title']}}</p>
                @foreach($footerColumn['rows'] as $row)
                <p>
                    <a href="{{$row['row_href']}}">{{$row['row_content']}}</a>
                </p>
                @endforeach
            </div>
            @endforeach
            @foreach($footer_form_column as $ffc)
            <div class="p-6 flex flex-col gap-10">
                <div class="">
                    <p class="text-gray-700 font-bold mb-4">{{$ffc['section_title']}}</p>
                </div>
                <div class="flex justify-between items-center">
                    @foreach($ffc['images'] as $image)
                    <a href="{{$image['link']}}">
                        <img src="{{asset('storage/' . $image['path'])}}" alt="{{$image['alt']}}" class="size-10 rounded-full">
                    </a>
                    @endforeach
                </div>
                <div class="">
                    <form action="" class="flex flex-col gap-4">
                        <label for="" class="">{{$ffc['texts'][0]['text']}}</label>
                        <div class="flex gap-4">
                            <input type="email" class="w-3/4 outline-none py-2 px-9 bg-[#F9F9F9] rounded-[12px] focus:border-1" name="" id="" placeholder="{{$ffc['texts'][0]['placeholder']}}" required>
                            <button type="submit" class="w-1/4 py-2 px-7 rounded-[10px] bg-[var(--color-btn-contact)] text-[var(--color-primary-text)] hover:bg-[var(--color-btn-contact-hover)] transition-all duration-300 text-white cursor-pointer">ثبت</button>
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

    <script src="{{ url('assets/js/main.js') }}"></script>
</body>

</html>