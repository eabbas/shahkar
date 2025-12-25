<!doctype html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}" type="text/css">
    <title>پنل ادمین</title>
</head>

<body>
    <div class="2xl:container mx-auto flex flex-row">
        <div class="lg:hidden size-15 border rounded-full flex justify-center items-center cursor-pointer fixed top-2 right-2"
            onclick="responsive_menu('open')">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="size-8">
                <path fill="black"
                    d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
            </svg>
        </div>
        <div class="hidden lg:block lg:w-3/12 bg-[#0D0E12] fixed right-0 top-0 h-dvh px-5">
            <div class="flex justify-center pt-5">
                @foreach ($logo as $l)
                    {{-- <a href="{{ $l['link_href'] }}" class="right-0 mr-[15px]"> --}}
                    <a href="http://localhost/shahkar/public/dashboard" class="right-0 mr-[15px]">
                        <img src="{{ asset($l['logo']) }}" alt="{{ $l['alt_text'] }}" class="w-40 h-15">
                    </a>
                @endforeach
            </div>
            <hr class="text-[darkslategray] mt-2.5">
            <div class="py-5 h-[80%] overflow-y-auto flex flex-col gap-5" style="scrollbar-width: none;">
                <div class="border-b border-gray-500">
                    <div class="flex justify-between flex-row-reverse">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="arrow-down size-6 fill-white w-[15px] cursor-pointer rotate-180 transition-all duration-300">
                            <path fill-rule="evenodd"
                                d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                                clip-rule="evenodd" />
                        </svg>
                        <div class="flex flex-row-reverse gap-2">
                            <span class=" text-[white] flex justify-end">تنظیمات خانه</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#000000" width="800px" height="800px"
                                class="w-[30px] h-[30px] fill-white " viewBox="0 0 100 100"
                                enable-background="new 0 0 100 100" xml:space="preserve">
                                <path
                                    d="M22.5,19.7h20c1.4,0,2.5,1.1,2.5,2.5v54.9c0,1.4-1.1,2.5-2.5,2.5h-20c-1.4,0-2.5-1.1-2.5-2.5V22.2  C20,20.8,21.1,19.7,22.5,19.7z" />
                                <path
                                    d="M57.5,19.6h20c1.4,0,2.5,1.1,2.5,2.5V42c0,1.4-1.1,2.5-2.5,2.5h-20c-1.4,0-2.5-1.1-2.5-2.5V22.1  C55,20.7,56.1,19.6,57.5,19.6z" />
                                <path
                                    d="M57.5,54.6h20c1.4,0,2.5,1.1,2.5,2.5v19.9c0,1.4-1.1,2.5-2.5,2.5h-20c-1.4,0-2.5-1.1-2.5-2.5V57.1  C55,55.8,56.1,54.6,57.5,54.6z" />
                            </svg>
                        </div>
                    </div>
                    <div class="max-h-0 invisible opacity-0 transition-all duration-300" style="scrollbar-width: none;">
                        <ul class="gap-2.5 mt-2.5 mb-2.5 pr-3">
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('settings.colors.createColor') }}" class=" text-white py-1">تنظیمات
                                    رنگ ها</a>
                            </li>
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('menu-index') }}" class=" text-white py-1">منو</a>
                            </li>
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('menu-create') }}" class=" text-white py-1">ایجاد منوی جدید</a>
                            </li>
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('banners-logo-create') }}" class=" text-white py-1">لوگو</a>
                            </li>
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('banners-tiles-create') }}" class=" text-white py-1">کاشی ها</a>
                            </li>
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('banners-bigTile-create') }}" class=" text-white py-1">کاشی
                                    بزرگ</a>
                            </li>
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('banners-create') }}" class=" text-white py-1">بنر ها</a>
                            </li>
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('banners-bigBanner-create') }}" class=" text-white py-1">بنر
                                    بزرگ</a>
                            </li>
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('banners-footerTile-create') }}" class=" text-white py-1">کاشی
                                    فوتر</a>
                            </li>
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('footer-create') }}" class=" text-white py-1">ستون های فوتر</a>
                            </li>
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('footer-footerFormMedia-create') }}" class=" text-white py-1">فرم
                                    فوتر</a>
                            </li>
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('homeForm-index') }}" class=" text-white py-1">راه های ارتباطی
                                    با
                                    کاربران</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="border-b border-gray-500">
                    <div class="flex justify-between flex-row-reverse">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="arrow-down size-6 fill-white w-[15px] cursor-pointer rotate-180 transition-all duration-300">
                            <path fill-rule="evenodd"
                                d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                                clip-rule="evenodd" />
                        </svg>
                        <div class="flex flex-row-reverse gap-2">
                            <span class=" text-[white] flex justify-end">محصولات</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#000000" width="800px" height="800px"
                                class="w-[30px] h-[30px] fill-white " viewBox="0 0 100 100"
                                enable-background="new 0 0 100 100" xml:space="preserve">
                                <path
                                    d="M22.5,19.7h20c1.4,0,2.5,1.1,2.5,2.5v54.9c0,1.4-1.1,2.5-2.5,2.5h-20c-1.4,0-2.5-1.1-2.5-2.5V22.2  C20,20.8,21.1,19.7,22.5,19.7z" />
                                <path
                                    d="M57.5,19.6h20c1.4,0,2.5,1.1,2.5,2.5V42c0,1.4-1.1,2.5-2.5,2.5h-20c-1.4,0-2.5-1.1-2.5-2.5V22.1  C55,20.7,56.1,19.6,57.5,19.6z" />
                                <path
                                    d="M57.5,54.6h20c1.4,0,2.5,1.1,2.5,2.5v19.9c0,1.4-1.1,2.5-2.5,2.5h-20c-1.4,0-2.5-1.1-2.5-2.5V57.1  C55,55.8,56.1,54.6,57.5,54.6z" />
                            </svg>
                        </div>
                    </div>
                    <div class="max-h-0 invisible opacity-0 transition-all duration-300">
                        <ul class="gap-2.5 mt-2.5 mb-2.5 pr-3">
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('product-adminIndex') }}" class=" text-white py-1">همه
                                    محصولات</a>
                            </li>
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('product-create') }}" class=" text-white py-1">ایجاد محصول
                                    جدید</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="border-b border-gray-500">
                    <div class="flex justify-between flex-row-reverse">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="arrow-down size-6 fill-white w-[15px] cursor-pointer rotate-180 transition-all duration-300">
                            <path fill-rule="evenodd"
                                d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                                clip-rule="evenodd" />
                        </svg>
                        <div class="flex flex-row-reverse gap-2">
                            <span class=" text-[white] flex justify-end">دسته بندی ها</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#000000" width="800px" height="800px"
                                class="w-[30px] h-[30px] fill-white " viewBox="0 0 100 100"
                                enable-background="new 0 0 100 100" xml:space="preserve">
                                <path
                                    d="M22.5,19.7h20c1.4,0,2.5,1.1,2.5,2.5v54.9c0,1.4-1.1,2.5-2.5,2.5h-20c-1.4,0-2.5-1.1-2.5-2.5V22.2  C20,20.8,21.1,19.7,22.5,19.7z" />
                                <path
                                    d="M57.5,19.6h20c1.4,0,2.5,1.1,2.5,2.5V42c0,1.4-1.1,2.5-2.5,2.5h-20c-1.4,0-2.5-1.1-2.5-2.5V22.1  C55,20.7,56.1,19.6,57.5,19.6z" />
                                <path
                                    d="M57.5,54.6h20c1.4,0,2.5,1.1,2.5,2.5v19.9c0,1.4-1.1,2.5-2.5,2.5h-20c-1.4,0-2.5-1.1-2.5-2.5V57.1  C55,55.8,56.1,54.6,57.5,54.6z" />
                            </svg>
                        </div>
                    </div>
                    <div class="max-h-0 invisible opacity-0 transition-all duration-300">
                        <ul class="gap-2.5 mt-2.5 mb-2.5 pr-3">
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('category-adminIndex') }}" class=" text-white py-1">همه دسته
                                    ها</a>
                            </li>
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('category-create') }}" class=" text-white py-1">ایجاد دسته
                                    جدید</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="border-b border-gray-500">
                    <div class="flex justify-between flex-row-reverse">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="arrow-down size-6 fill-white w-[15px] cursor-pointer rotate-180 transition-all duration-300">
                            <path fill-rule="evenodd"
                                d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                                clip-rule="evenodd" />
                        </svg>
                        <div class="flex flex-row-reverse gap-2">
                            <span class=" text-[white] flex justify-end">دوره ها</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#000000" width="800px" height="800px"
                                class="w-[30px] h-[30px] fill-white " viewBox="0 0 100 100"
                                enable-background="new 0 0 100 100" xml:space="preserve">
                                <path
                                    d="M22.5,19.7h20c1.4,0,2.5,1.1,2.5,2.5v54.9c0,1.4-1.1,2.5-2.5,2.5h-20c-1.4,0-2.5-1.1-2.5-2.5V22.2  C20,20.8,21.1,19.7,22.5,19.7z" />
                                <path
                                    d="M57.5,19.6h20c1.4,0,2.5,1.1,2.5,2.5V42c0,1.4-1.1,2.5-2.5,2.5h-20c-1.4,0-2.5-1.1-2.5-2.5V22.1  C55,20.7,56.1,19.6,57.5,19.6z" />
                                <path
                                    d="M57.5,54.6h20c1.4,0,2.5,1.1,2.5,2.5v19.9c0,1.4-1.1,2.5-2.5,2.5h-20c-1.4,0-2.5-1.1-2.5-2.5V57.1  C55,55.8,56.1,54.6,57.5,54.6z" />
                            </svg>
                        </div>
                    </div>
                    <div class="max-h-0 invisible opacity-0 transition-all duration-300">
                        <ul class="gap-2.5 mt-2.5 mb-2.5 pr-3">
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('course.list') }}" class=" text-white py-1">همه دوره ها</a>
                            </li>
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('course.create') }}" class=" text-white py-1">ایجاد دوره
                                    جدید</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="border-b border-gray-500">
                    <div class="flex justify-between flex-row-reverse">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="arrow-down size-6 fill-white w-[15px] cursor-pointer rotate-180 transition-all duration-300">
                            <path fill-rule="evenodd"
                                d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                                clip-rule="evenodd" />
                        </svg>
                        <div class="flex flex-row-reverse gap-2">
                            <span class=" text-[white] flex justify-end">دسته بندی دوره ها</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#000000" width="800px" height="800px"
                                class="w-[30px] h-[30px] fill-white " viewBox="0 0 100 100"
                                enable-background="new 0 0 100 100" xml:space="preserve">
                                <path
                                    d="M22.5,19.7h20c1.4,0,2.5,1.1,2.5,2.5v54.9c0,1.4-1.1,2.5-2.5,2.5h-20c-1.4,0-2.5-1.1-2.5-2.5V22.2  C20,20.8,21.1,19.7,22.5,19.7z" />
                                <path
                                    d="M57.5,19.6h20c1.4,0,2.5,1.1,2.5,2.5V42c0,1.4-1.1,2.5-2.5,2.5h-20c-1.4,0-2.5-1.1-2.5-2.5V22.1  C55,20.7,56.1,19.6,57.5,19.6z" />
                                <path
                                    d="M57.5,54.6h20c1.4,0,2.5,1.1,2.5,2.5v19.9c0,1.4-1.1,2.5-2.5,2.5h-20c-1.4,0-2.5-1.1-2.5-2.5V57.1  C55,55.8,56.1,54.6,57.5,54.6z" />
                            </svg>
                        </div>
                    </div>
                    <div class="max-h-0 invisible opacity-0 transition-all duration-300">
                        <ul class="gap-2.5 mt-2.5 mb-2.5 pr-3">
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('coursecategory.list') }}" class=" text-white py-1">همه دسته
                                    بندی
                                    دوره ها</a>
                            </li>
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('coursecategory.create') }}" class=" text-white py-1">ایجاد
                                    دسته
                                    بندی دوره جدید</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="border-b border-gray-500">
                    <div class="flex justify-between flex-row-reverse">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="arrow-down size-6 fill-white w-[15px] cursor-pointer rotate-180 transition-all duration-300">
                            <path fill-rule="evenodd"
                                d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                                clip-rule="evenodd" />
                        </svg>
                        <div class="flex flex-row-reverse gap-2">
                            <span class=" text-[white] flex justify-end">کاربران</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#000000" width="800px" height="800px"
                                class="w-[30px] h-[30px] fill-white " viewBox="0 0 100 100"
                                enable-background="new 0 0 100 100" xml:space="preserve">
                                <path
                                    d="M22.5,19.7h20c1.4,0,2.5,1.1,2.5,2.5v54.9c0,1.4-1.1,2.5-2.5,2.5h-20c-1.4,0-2.5-1.1-2.5-2.5V22.2  C20,20.8,21.1,19.7,22.5,19.7z" />
                                <path
                                    d="M57.5,19.6h20c1.4,0,2.5,1.1,2.5,2.5V42c0,1.4-1.1,2.5-2.5,2.5h-20c-1.4,0-2.5-1.1-2.5-2.5V22.1  C55,20.7,56.1,19.6,57.5,19.6z" />
                                <path
                                    d="M57.5,54.6h20c1.4,0,2.5,1.1,2.5,2.5v19.9c0,1.4-1.1,2.5-2.5,2.5h-20c-1.4,0-2.5-1.1-2.5-2.5V57.1  C55,55.8,56.1,54.6,57.5,54.6z" />
                            </svg>
                        </div>
                    </div>
                    <div class="max-h-0 invisible opacity-0 transition-all duration-300">
                        <ul class="gap-2.5 mt-2.5 mb-2.5 pr-3">
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('user.index') }}" class=" text-white py-1">همه کاربران</a>
                            </li>
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('admin_create_user') }}" class=" text-white py-1">ایجاد کاربر
                                    جدید</a>
                            </li>
                            <!-- <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('user.login') }}" class=" text-white py-1">ایجاد ادمین جدید</a>
                            </li> -->
                        </ul>
                    </div>
                </div>
                <div class="border-b border-gray-500">
                    <div class="flex justify-between flex-row-reverse">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="arrow-down size-6 fill-white w-[15px] cursor-pointer rotate-180 transition-all duration-300">
                            <path fill-rule="evenodd"
                                d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                                clip-rule="evenodd" />
                        </svg>
                        <div class="flex flex-row-reverse gap-2">
                            <span class=" text-[white] flex justify-end">ارتباط با ما</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#000000" width="800px" height="800px"
                                class="w-[30px] h-[30px] fill-white " viewBox="0 0 100 100"
                                enable-background="new 0 0 100 100" xml:space="preserve">
                                <path
                                    d="M22.5,19.7h20c1.4,0,2.5,1.1,2.5,2.5v54.9c0,1.4-1.1,2.5-2.5,2.5h-20c-1.4,0-2.5-1.1-2.5-2.5V22.2  C20,20.8,21.1,19.7,22.5,19.7z" />
                                <path
                                    d="M57.5,19.6h20c1.4,0,2.5,1.1,2.5,2.5V42c0,1.4-1.1,2.5-2.5,2.5h-20c-1.4,0-2.5-1.1-2.5-2.5V22.1  C55,20.7,56.1,19.6,57.5,19.6z" />
                                <path
                                    d="M57.5,54.6h20c1.4,0,2.5,1.1,2.5,2.5v19.9c0,1.4-1.1,2.5-2.5,2.5h-20c-1.4,0-2.5-1.1-2.5-2.5V57.1  C55,55.8,56.1,54.6,57.5,54.6z" />
                            </svg>
                        </div>
                    </div>
                    <div class="max-h-0 invisible opacity-0 transition-all duration-300">
                        <ul class="gap-2.5 mt-2.5 mb-2.5 pr-3">
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('aboutus-create') }}" class=" text-white py-1">فرم درباره
                                    ما</a>
                            </li>
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('contactus-index') }}" class=" text-white py-1">لیست درخواست
                                    های
                                    تماس با ما</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="border-b border-gray-500">
                    <div class="flex justify-between flex-row-reverse">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="arrow-down size-6 fill-white w-[15px] cursor-pointer rotate-180 transition-all duration-300">
                            <path fill-rule="evenodd"
                                d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                                clip-rule="evenodd" />
                        </svg>
                        <div class="flex flex-row-reverse gap-2">
                            <span class=" text-[white] flex justify-end">نظرات و پرسش و پاسخ</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#000000" width="800px" height="800px"
                                class="w-[30px] h-[30px] fill-white " viewBox="0 0 100 100"
                                enable-background="new 0 0 100 100" xml:space="preserve">
                                <path
                                    d="M22.5,19.7h20c1.4,0,2.5,1.1,2.5,2.5v54.9c0,1.4-1.1,2.5-2.5,2.5h-20c-1.4,0-2.5-1.1-2.5-2.5V22.2  C20,20.8,21.1,19.7,22.5,19.7z" />
                                <path
                                    d="M57.5,19.6h20c1.4,0,2.5,1.1,2.5,2.5V42c0,1.4-1.1,2.5-2.5,2.5h-20c-1.4,0-2.5-1.1-2.5-2.5V22.1  C55,20.7,56.1,19.6,57.5,19.6z" />
                                <path
                                    d="M57.5,54.6h20c1.4,0,2.5,1.1,2.5,2.5v19.9c0,1.4-1.1,2.5-2.5,2.5h-20c-1.4,0-2.5-1.1-2.5-2.5V57.1  C55,55.8,56.1,54.6,57.5,54.6z" />
                            </svg>
                        </div>
                    </div>
                    <div class="max-h-0 invisible opacity-0 transition-all duration-300">
                        <ul class="gap-2.5 mt-2.5 mb-2.5 pr-3">
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('comment.index') }}" class=" text-white py-1">همه نظرات</a>
                            </li>
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('question-index') }}" class=" text-white py-1">همه پرسش ها</a>
                            </li>
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('answer-index') }}" class=" text-white py-1">همه پاسخ ها</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- responsive menu -->
        <div class="lg:hidden flex fixed z-1000 -right-full w-full h-dvh transition-all duration-500" id="menu">
            <div class="responsive-menu-shadow w-5/12 px-5 pt-10  bg-[#0D0E12]">
                <div class="relative" onclick="responsive_menu('close')">
                    <button
                        class="absolute -top-7 left-3 w-5 h-5 flex flex-col justify-center items-center cursor-pointer">
                        <span class="w-full h-[1.5px] bg-white rotate-45 translate-y-1/2"></span>
                        <span class="w-full h-[1.5px] bg-white -rotate-45 -translate-y-1/2"></span>
                    </button>
                </div>
                <div class="flex justify-center pt-5">
                    @foreach ($logo as $l)
                        <a href="{{ $l['link_href'] }}" class="right-0 mr-[15px]">
                            <img src="{{ asset($l['logo']) }}" alt="{{ $l['alt_text'] }}" class="w-40 h-15">
                        </a>
                    @endforeach
                </div>
                <hr class="text-[darkslategray] mt-2.5">
                <div class="py-5 h-[80%] overflow-y-auto flex flex-col gap-5" style="scrollbar-width: none;">
                    <div class="border-b border-gray-500">
                        <div class="flex justify-between flex-row-reverse">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="arrow-down size-6 fill-white w-[15px] cursor-pointer rotate-180 transition-all duration-300">
                                <path fill-rule="evenodd"
                                    d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <div class="flex flex-row-reverse gap-2">
                                <span class=" text-[white] flex justify-end">تنظیمات خانه</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#000000" width="800px" height="800px"
                                    class="w-[30px] h-[30px] fill-white " viewBox="0 0 100 100"
                                    enable-background="new 0 0 100 100" xml:space="preserve">
                                    <path
                                        d="M22.5,19.7h20c1.4,0,2.5,1.1,2.5,2.5v54.9c0,1.4-1.1,2.5-2.5,2.5h-20c-1.4,0-2.5-1.1-2.5-2.5V22.2  C20,20.8,21.1,19.7,22.5,19.7z" />
                                    <path
                                        d="M57.5,19.6h20c1.4,0,2.5,1.1,2.5,2.5V42c0,1.4-1.1,2.5-2.5,2.5h-20c-1.4,0-2.5-1.1-2.5-2.5V22.1  C55,20.7,56.1,19.6,57.5,19.6z" />
                                    <path
                                        d="M57.5,54.6h20c1.4,0,2.5,1.1,2.5,2.5v19.9c0,1.4-1.1,2.5-2.5,2.5h-20c-1.4,0-2.5-1.1-2.5-2.5V57.1  C55,55.8,56.1,54.6,57.5,54.6z" />
                                </svg>
                            </div>
                        </div>
                        <div class="max-h-0 invisible opacity-0 transition-all duration-300"
                            style="scrollbar-width: none;">
                            <ul class="gap-2.5 mt-2.5 mb-2.5 pr-3">
                                <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5">
                                    <span class="size-1 bg-white rounded-sm"></span>
                                    <a href="{{ route('settings.colors.createColor') }}"
                                        class=" text-white py-1">تنظیمات
                                        رنگ ها</a>
                                </li>
                                <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5">
                                    <span class="size-1 bg-white rounded-sm"></span>
                                    <a href="{{ route('menu-index') }}" class=" text-white py-1">منو</a>
                                </li>
                                <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5">
                                    <span class="size-1 bg-white rounded-sm"></span>
                                    <a href="{{ route('menu-create') }}" class=" text-white py-1">ایجاد منوی جدید</a>
                                </li>
                                <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5">
                                    <span class="size-1 bg-white rounded-sm"></span>
                                    <a href="{{ route('banners-logo-create') }}" class=" text-white py-1">لوگو</a>
                                </li>
                                <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5">
                                    <span class="size-1 bg-white rounded-sm"></span>
                                    <a href="{{ route('banners-tiles-create') }}" class=" text-white py-1">کاشی
                                        ها</a>
                                </li>
                                <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5">
                                    <span class="size-1 bg-white rounded-sm"></span>
                                    <a href="{{ route('banners-bigTile-create') }}" class=" text-white py-1">کاشی
                                        بزرگ</a>
                                </li>
                                <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5">
                                    <span class="size-1 bg-white rounded-sm"></span>
                                    <a href="{{ route('banners-create') }}" class=" text-white py-1">بنر ها</a>
                                </li>
                                <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5">
                                    <span class="size-1 bg-white rounded-sm"></span>
                                    <a href="{{ route('banners-bigBanner-create') }}" class=" text-white py-1">بنر
                                        بزرگ</a>
                                </li>
                                <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5">
                                    <span class="size-1 bg-white rounded-sm"></span>
                                    <a href="{{ route('banners-footerTile-create') }}" class=" text-white py-1">کاشی
                                        فوتر</a>
                                </li>
                                <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5">
                                    <span class="size-1 bg-white rounded-sm"></span>
                                    <a href="{{ route('footer-create') }}" class=" text-white py-1">ستون های فوتر</a>
                                </li>
                                <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5">
                                    <span class="size-1 bg-white rounded-sm"></span>
                                    <a href="{{ route('footer-footerFormMedia-create') }}"
                                        class=" text-white py-1">فرم
                                        فوتر</a>
                                </li>
                                <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5">
                                    <span class="size-1 bg-white rounded-sm"></span>
                                    <a href="{{ route('homeForm-index') }}" class=" text-white py-1">راه های ارتباطی
                                        با
                                        کاربران</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="border-b border-gray-500">
                        <div class="flex justify-between flex-row-reverse">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="arrow-down size-6 fill-white w-[15px] cursor-pointer rotate-180 transition-all duration-300">
                                <path fill-rule="evenodd"
                                    d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <div class="flex flex-row-reverse gap-2">
                                <span class=" text-[white] flex justify-end">محصولات</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#000000" width="800px" height="800px"
                                    class="w-[30px] h-[30px] fill-white " viewBox="0 0 100 100"
                                    enable-background="new 0 0 100 100" xml:space="preserve">
                                    <path
                                        d="M22.5,19.7h20c1.4,0,2.5,1.1,2.5,2.5v54.9c0,1.4-1.1,2.5-2.5,2.5h-20c-1.4,0-2.5-1.1-2.5-2.5V22.2  C20,20.8,21.1,19.7,22.5,19.7z" />
                                    <path
                                        d="M57.5,19.6h20c1.4,0,2.5,1.1,2.5,2.5V42c0,1.4-1.1,2.5-2.5,2.5h-20c-1.4,0-2.5-1.1-2.5-2.5V22.1  C55,20.7,56.1,19.6,57.5,19.6z" />
                                    <path
                                        d="M57.5,54.6h20c1.4,0,2.5,1.1,2.5,2.5v19.9c0,1.4-1.1,2.5-2.5,2.5h-20c-1.4,0-2.5-1.1-2.5-2.5V57.1  C55,55.8,56.1,54.6,57.5,54.6z" />
                                </svg>
                            </div>
                        </div>
                        <div class="max-h-0 invisible opacity-0 transition-all duration-300">
                            <ul class="gap-2.5 mt-2.5 mb-2.5 pr-3">
                                <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5">
                                    <span class="size-1 bg-white rounded-sm"></span>
                                    <a href="{{ route('product-adminIndex') }}" class=" text-white py-1">همه
                                        محصولات</a>
                                </li>
                                <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5">
                                    <span class="size-1 bg-white rounded-sm"></span>
                                    <a href="{{ route('product-create') }}" class=" text-white py-1">ایجاد محصول
                                        جدید</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="border-b border-gray-500">
                        <div class="flex justify-between flex-row-reverse">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="arrow-down size-6 fill-white w-[15px] cursor-pointer rotate-180 transition-all duration-300">
                                <path fill-rule="evenodd"
                                    d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <div class="flex flex-row-reverse gap-2">
                                <span class=" text-[white] flex justify-end">دسته بندی ها</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#000000" width="800px" height="800px"
                                    class="w-[30px] h-[30px] fill-white " viewBox="0 0 100 100"
                                    enable-background="new 0 0 100 100" xml:space="preserve">
                                    <path
                                        d="M22.5,19.7h20c1.4,0,2.5,1.1,2.5,2.5v54.9c0,1.4-1.1,2.5-2.5,2.5h-20c-1.4,0-2.5-1.1-2.5-2.5V22.2  C20,20.8,21.1,19.7,22.5,19.7z" />
                                    <path
                                        d="M57.5,19.6h20c1.4,0,2.5,1.1,2.5,2.5V42c0,1.4-1.1,2.5-2.5,2.5h-20c-1.4,0-2.5-1.1-2.5-2.5V22.1  C55,20.7,56.1,19.6,57.5,19.6z" />
                                    <path
                                        d="M57.5,54.6h20c1.4,0,2.5,1.1,2.5,2.5v19.9c0,1.4-1.1,2.5-2.5,2.5h-20c-1.4,0-2.5-1.1-2.5-2.5V57.1  C55,55.8,56.1,54.6,57.5,54.6z" />
                                </svg>
                            </div>
                        </div>
                        <div class="max-h-0 invisible opacity-0 transition-all duration-300">
                            <ul class="gap-2.5 mt-2.5 mb-2.5 pr-3">
                                <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5">
                                    <span class="size-1 bg-white rounded-sm"></span>
                                    <a href="{{ route('category-adminIndex') }}" class=" text-white py-1">همه دسته
                                        ها</a>
                                </li>
                                <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5">
                                    <span class="size-1 bg-white rounded-sm"></span>
                                    <a href="{{ route('category-create') }}" class=" text-white py-1">ایجاد دسته
                                        جدید</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="border-b border-gray-500">
                        <div class="flex justify-between flex-row-reverse">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="arrow-down size-6 fill-white w-[15px] cursor-pointer rotate-180 transition-all duration-300">
                                <path fill-rule="evenodd"
                                    d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <div class="flex flex-row-reverse gap-2">
                                <span class=" text-[white] flex justify-end">دوره ها</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#000000" width="800px" height="800px"
                                    class="w-[30px] h-[30px] fill-white " viewBox="0 0 100 100"
                                    enable-background="new 0 0 100 100" xml:space="preserve">
                                    <path
                                        d="M22.5,19.7h20c1.4,0,2.5,1.1,2.5,2.5v54.9c0,1.4-1.1,2.5-2.5,2.5h-20c-1.4,0-2.5-1.1-2.5-2.5V22.2  C20,20.8,21.1,19.7,22.5,19.7z" />
                                    <path
                                        d="M57.5,19.6h20c1.4,0,2.5,1.1,2.5,2.5V42c0,1.4-1.1,2.5-2.5,2.5h-20c-1.4,0-2.5-1.1-2.5-2.5V22.1  C55,20.7,56.1,19.6,57.5,19.6z" />
                                    <path
                                        d="M57.5,54.6h20c1.4,0,2.5,1.1,2.5,2.5v19.9c0,1.4-1.1,2.5-2.5,2.5h-20c-1.4,0-2.5-1.1-2.5-2.5V57.1  C55,55.8,56.1,54.6,57.5,54.6z" />
                                </svg>
                            </div>
                        </div>
                        <div class="max-h-0 invisible opacity-0 transition-all duration-300">
                            <ul class="gap-2.5 mt-2.5 mb-2.5 pr-3">
                                <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5">
                                    <span class="size-1 bg-white rounded-sm"></span>
                                    <a href="{{ route('course.list') }}" class=" text-white py-1">همه دوره ها</a>
                                </li>
                                <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5">
                                    <span class="size-1 bg-white rounded-sm"></span>
                                    <a href="{{ route('course.create') }}" class=" text-white py-1">ایجاد دوره
                                        جدید</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="border-b border-gray-500">
                        <div class="flex justify-between flex-row-reverse">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="arrow-down size-6 fill-white w-[15px] cursor-pointer rotate-180 transition-all duration-300">
                                <path fill-rule="evenodd"
                                    d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <div class="flex flex-row-reverse gap-2">
                                <span class=" text-[white] flex justify-end">دسته بندی دوره ها</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#000000" width="800px" height="800px"
                                    class="w-[30px] h-[30px] fill-white " viewBox="0 0 100 100"
                                    enable-background="new 0 0 100 100" xml:space="preserve">
                                    <path
                                        d="M22.5,19.7h20c1.4,0,2.5,1.1,2.5,2.5v54.9c0,1.4-1.1,2.5-2.5,2.5h-20c-1.4,0-2.5-1.1-2.5-2.5V22.2  C20,20.8,21.1,19.7,22.5,19.7z" />
                                    <path
                                        d="M57.5,19.6h20c1.4,0,2.5,1.1,2.5,2.5V42c0,1.4-1.1,2.5-2.5,2.5h-20c-1.4,0-2.5-1.1-2.5-2.5V22.1  C55,20.7,56.1,19.6,57.5,19.6z" />
                                    <path
                                        d="M57.5,54.6h20c1.4,0,2.5,1.1,2.5,2.5v19.9c0,1.4-1.1,2.5-2.5,2.5h-20c-1.4,0-2.5-1.1-2.5-2.5V57.1  C55,55.8,56.1,54.6,57.5,54.6z" />
                                </svg>
                            </div>
                        </div>
                        <div class="max-h-0 invisible opacity-0 transition-all duration-300">
                            <ul class="gap-2.5 mt-2.5 mb-2.5 pr-3">
                                <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5">
                                    <span class="size-1 bg-white rounded-sm"></span>
                                    <a href="{{ route('coursecategory.list') }}" class=" text-white py-1">همه دسته
                                        بندی
                                        دوره ها</a>
                                </li>
                                <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5">
                                    <span class="size-1 bg-white rounded-sm"></span>
                                    <a href="{{ route('coursecategory.create') }}" class=" text-white py-1">ایجاد
                                        دسته
                                        بندی دوره جدید</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="border-b border-gray-500">
                        <div class="flex justify-between flex-row-reverse">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="arrow-down size-6 fill-white w-[15px] cursor-pointer rotate-180 transition-all duration-300">
                                <path fill-rule="evenodd"
                                    d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <div class="flex flex-row-reverse gap-2">
                                <span class=" text-[white] flex justify-end">کاربران</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#000000" width="800px" height="800px"
                                    class="w-[30px] h-[30px] fill-white " viewBox="0 0 100 100"
                                    enable-background="new 0 0 100 100" xml:space="preserve">
                                    <path
                                        d="M22.5,19.7h20c1.4,0,2.5,1.1,2.5,2.5v54.9c0,1.4-1.1,2.5-2.5,2.5h-20c-1.4,0-2.5-1.1-2.5-2.5V22.2  C20,20.8,21.1,19.7,22.5,19.7z" />
                                    <path
                                        d="M57.5,19.6h20c1.4,0,2.5,1.1,2.5,2.5V42c0,1.4-1.1,2.5-2.5,2.5h-20c-1.4,0-2.5-1.1-2.5-2.5V22.1  C55,20.7,56.1,19.6,57.5,19.6z" />
                                    <path
                                        d="M57.5,54.6h20c1.4,0,2.5,1.1,2.5,2.5v19.9c0,1.4-1.1,2.5-2.5,2.5h-20c-1.4,0-2.5-1.1-2.5-2.5V57.1  C55,55.8,56.1,54.6,57.5,54.6z" />
                                </svg>
                            </div>
                        </div>
                        <div class="max-h-0 invisible opacity-0 transition-all duration-300">
                            <ul class="gap-2.5 mt-2.5 mb-2.5 pr-3">
                                <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5">
                                    <span class="size-1 bg-white rounded-sm"></span>
                                    <a href="{{ route('user.index') }}" class=" text-white py-1">همه کاربران</a>
                                </li>
                                <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5">
                                    <span class="size-1 bg-white rounded-sm"></span>
                                    <a href="{{ route('admin_create_user') }}" class=" text-white py-1">ایجاد کاربر
                                        جدید</a>
                                </li>
                                <!-- <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('user.login') }}" class=" text-white py-1">ایجاد ادمین جدید</a>
                            </li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="border-b border-gray-500">
                        <div class="flex justify-between flex-row-reverse">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="arrow-down size-6 fill-white w-[15px] cursor-pointer rotate-180 transition-all duration-300">
                                <path fill-rule="evenodd"
                                    d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <div class="flex flex-row-reverse gap-2">
                                <span class=" text-[white] flex justify-end">ارتباط با ما</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#000000" width="800px" height="800px"
                                    class="w-[30px] h-[30px] fill-white " viewBox="0 0 100 100"
                                    enable-background="new 0 0 100 100" xml:space="preserve">
                                    <path
                                        d="M22.5,19.7h20c1.4,0,2.5,1.1,2.5,2.5v54.9c0,1.4-1.1,2.5-2.5,2.5h-20c-1.4,0-2.5-1.1-2.5-2.5V22.2  C20,20.8,21.1,19.7,22.5,19.7z" />
                                    <path
                                        d="M57.5,19.6h20c1.4,0,2.5,1.1,2.5,2.5V42c0,1.4-1.1,2.5-2.5,2.5h-20c-1.4,0-2.5-1.1-2.5-2.5V22.1  C55,20.7,56.1,19.6,57.5,19.6z" />
                                    <path
                                        d="M57.5,54.6h20c1.4,0,2.5,1.1,2.5,2.5v19.9c0,1.4-1.1,2.5-2.5,2.5h-20c-1.4,0-2.5-1.1-2.5-2.5V57.1  C55,55.8,56.1,54.6,57.5,54.6z" />
                                </svg>
                            </div>
                        </div>
                        <div class="max-h-0 invisible opacity-0 transition-all duration-300">
                            <ul class="gap-2.5 mt-2.5 mb-2.5 pr-3">
                                <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5">
                                    <span class="size-1 bg-white rounded-sm"></span>
                                    <a href="{{ route('aboutus-create') }}" class=" text-white py-1">فرم درباره
                                        ما</a>
                                </li>
                                <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5">
                                    <span class="size-1 bg-white rounded-sm"></span>
                                    <a href="{{ route('contactus-index') }}" class=" text-white py-1">لیست درخواست
                                        های
                                        تماس با ما</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="border-b border-gray-500">
                        <div class="flex justify-between flex-row-reverse">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="arrow-down size-6 fill-white w-[15px] cursor-pointer rotate-180 transition-all duration-300">
                                <path fill-rule="evenodd"
                                    d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <div class="flex flex-row-reverse gap-2">
                                <span class=" text-[white] flex justify-end">نظرات و پرسش و پاسخ</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#000000" width="800px" height="800px"
                                    class="w-[30px] h-[30px] fill-white " viewBox="0 0 100 100"
                                    enable-background="new 0 0 100 100" xml:space="preserve">
                                    <path
                                        d="M22.5,19.7h20c1.4,0,2.5,1.1,2.5,2.5v54.9c0,1.4-1.1,2.5-2.5,2.5h-20c-1.4,0-2.5-1.1-2.5-2.5V22.2  C20,20.8,21.1,19.7,22.5,19.7z" />
                                    <path
                                        d="M57.5,19.6h20c1.4,0,2.5,1.1,2.5,2.5V42c0,1.4-1.1,2.5-2.5,2.5h-20c-1.4,0-2.5-1.1-2.5-2.5V22.1  C55,20.7,56.1,19.6,57.5,19.6z" />
                                    <path
                                        d="M57.5,54.6h20c1.4,0,2.5,1.1,2.5,2.5v19.9c0,1.4-1.1,2.5-2.5,2.5h-20c-1.4,0-2.5-1.1-2.5-2.5V57.1  C55,55.8,56.1,54.6,57.5,54.6z" />
                                </svg>
                            </div>
                        </div>
                        <div class="max-h-0 invisible opacity-0 transition-all duration-300">
                            <ul class="gap-2.5 mt-2.5 mb-2.5 pr-3">
                                <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5">
                                    <span class="size-1 bg-white rounded-sm"></span>
                                    <a href="{{ route('comment.index') }}" class=" text-white py-1">همه نظرات</a>
                                </li>
                                <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5">
                                    <span class="size-1 bg-white rounded-sm"></span>
                                    <a href="{{ route('question-index') }}" class=" text-white py-1">همه پرسش ها</a>
                                </li>
                                <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5">
                                    <span class="size-1 bg-white rounded-sm"></span>
                                    <a href="{{ route('answer-index') }}" class=" text-white py-1">همه پاسخ ها</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-7/12 bg-black/50" onclick="responsive_menu('close')"></div>
        </div>
        <!-- end responsive menu -->
        <div class="w-full">
            <div class="w-full lg:w-9/12 float-end p-5 overflow-y-auto" style="scrollbar-width:none;">
                @yield('content')
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/app.js') }}" defer></script>
</body>

</html>
