<!doctype html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}" type="text/css">
    <title>dashboard</title>
</head>

<body>


    <div class="2xl:container mx-auto flex flex-row">
        <div class="hidden lg:block lg:w-3/12 bg-[#0D0E12] fixed right-0 top-0 h-dvh px-5">
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
                    <div class="max-h-0 invisible opacity-0 transition-all duration-300" style="scrollbar-width: none;">
                        <ul class="gap-2.5 mt-2.5 mb-2.5 pr-3">
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
                                <a href="{{ route('banners-create') }}" class=" text-white py-1">بنر ها</a>
                            </li>
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('banners-bigBanner-create') }}" class=" text-white py-1">بنر
                                    بزرگ</a>
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
                                <a href="{{ route('settings.colors.createColor') }}" class=" text-white py-1">تنظیمات
                                    رنگ ها</a>
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
        {{-- <div class="lg:hidden flex fixed z-[1000] -right-full w-full h-dvh transition-all duration-500 opacity-0"
            id="menu">
            <div class="responsive-menu-shadow w-5/12 pr-5 pt-10 bg-black">
                <div class="relative" onclick="responsive_menu('close')">
                    <button
                        class="absolute -top-7 left-3 w-5 h-5 flex flex-col justify-center items-center cursor-pointer">
                        <span class="w-full h-[1.5px] bg-white rotate-45 translate-y-1/2"></span>
                        <span class="w-full h-[1.5px] bg-white -rotate-45 -translate-y-1/2"></span>
                    </button>
                </div>
                <div class="w-30 mt-5 mb-10">
                    <a href="#">
                        <img src="assets/image/logo.png" alt="logo">
                    </a>
                </div>
                <nav class="">
                    <ul class="flex flex-col gap-8 text-white">
                        <li><a href="#">خانه</a></li>
                        <li class="flex items-center gap-2 relative menu-li">
                            <a href="#" class="menu-a">دسته بندی ها</a>
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-3.5 mt-1" viewBox="0 0 448 512">
                                <path fill="white"
                                    d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                            </svg>
                            <!-- <div
                     class="w-160 h-80 bg-white flex justify-between items-stretch p-4 absolute top-11 invisible menu-li-dropdown transition-all duration-300ms">
                     <div class="w-7/12 flex justify-between items-stretch text-black">
                        <div class="">
                           <h2 class="font-bold text-gray-800 mb-2"><a href="">VARIATION1</a></h2>
                           <ul class="h-5/6 flex flex-col justify-between">
                              <li class="">test test</li>
                              <li class="">Lorem, ipsum dolor.</li>
                              <li class="">test test</li>
                              <li class="">test test</li>
                              <li class="">test lorem</li>
                              <li class="">test test</li>
                              <li class="">test test</li>
                           </ul>
                        </div>
                        <div>
                           <h2 class="font-bold text-gray-800 mb-2"><a href="">VARIATION2</a></h2>
                           <ul class="h-5/6 flex flex-col justify-between">
                              <li>test test</li>
                              <li>test test</li>
                              <li>test test</li>
                              <li>test test</li>
                              <li>test test</li>
                              <li>test test</li>
                              <li>test test</li>
                           </ul>
                        </div>
                     </div>
                     <figure class="w-4/12 relative">
                        <img src="assets/image/menu-banner.jpg" class="h-full">
                        <h4 class="text-rose-500 absolute bottom-40 left-2">
                           <span class="text-3xl font-bold text-gray-600">UP TO</span><br>
                           <span class="text-3xl font-bold text-[#f4762a]">50%</span>
                           <span class="inline-block rotate-90 font-bold text-gray-600">OFF</span>
                        </h4>
                        <button
                           class="bg-gray-800 py-2 px-3 text-xs cursor-pointer absolute bottom-20 left-5 rounded-sm">shop
                           now</button>
                     </figure>
                  </div> -->
                        </li>
                        <li class="flex items-center gap-2 menu-li">
                            <a href="#">محصولات</a>
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-3.5 mt-1" viewBox="0 0 448 512">
                                <path fill="white"
                                    d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                            </svg>
                            <!-- <div
                     class="w-160 h-80 bg-white flex justify-between items-stretch p-4 absolute top-15 invisible menu-li-dropdown transition-all duration-300ms">
                     <div class="w-7/12 flex justify-between items-stretch text-black">
                        <div class="">
                           <h2 class="font-bold text-gray-800 mb-2"><a href="">VARIATION1</a></h2>
                           <ul class="h-5/6 flex flex-col justify-between">
                              <li class="">test test</li>
                              <li class="">Lorem, ipsum dolor.</li>
                              <li class="">test test</li>
                              <li class="">test test</li>
                              <li class="">test lorem</li>
                              <li class="">test test</li>
                              <li class="">test test</li>
                           </ul>
                        </div>
                        <div>
                           <h2 class="font-bold text-gray-800 mb-2"><a href="">VARIATION2</a></h2>
                           <ul class="h-5/6 flex flex-col justify-between">
                              <li>test test</li>
                              <li>test test</li>
                              <li>test test</li>
                              <li>test test</li>
                              <li>test test</li>
                              <li>test test</li>
                              <li>test test</li>
                           </ul>
                        </div>
                     </div>
                     <figure class="w-4/12 relative">
                        <img src="assets/image/menu-banner-1.jpg" class="size-full object-cover">
                        <h4 class="absolute top-0 right-0 text-end">
                           <span class="text-3xl font-bold text-gray-600">UP TO</span><br>
                           <span class="text-3xl font-bold text-gray-900">50%</span>
                           <span class="inline-block -rotate-90 absolute -left-40 top-10 text-8xl font-bold">OFF</span>
                        </h4>
                        <button
                           class="bg-gray-800 py-2 px-6 text-xs cursor-pointer absolute bottom-5 left-2 rounded-sm">shop
                           now</button>
                     </figure>
                  </div> -->
                        </li>
                        <li class="flex items-center gap-2 menu-li">
                            <a href="#">صفحات</a>
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-3.5 mt-1" viewBox="0 0 448 512">
                                <path fill="white"
                                    d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                            </svg>
                            <!-- <ul
                     class="w-50 h-79 bg-white flex flex-col justify-between items-end p-3 absolute top-15 invisible menu-li-dropdown transition-all duration-300ms text-black">
                     <li><a href="#">Wishlist</a></li>
                     <li><a href="#">Shopping Cart</a></li>
                     <li><a href="#">Checkout</a></li>
                     <li><a href="#">Dashboard</a></li>
                     <li><a href="#">About Us</a></li>
                     <li class="w-full flex flex-row-reverse justify-between cursor-pointer relative menu-li-child">
                        <a href="#">Blog</a>
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-3.5 mt-1" viewBox="0 0 320 512">
                           <path
                              d="M267.3 244.7c6.2 6.2 6.2 16.4 0 22.6l-160 160c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6L233.4 256 84.7 107.3c-6.2-6.2-6.2-16.4 0-22.6s16.4-6.2 22.6 0l160 160z" />
                        </svg>
                        <ul
                           class="absolute left-full w-40 text-end ml-3 bg-white menu-li-dropdown-child invisible transition-all duration-300ms">
                           <li class="p-2">Blog</li>
                           <li class="p-2">Blog Post</li>
                        </ul>
                     </li>
                     <li><a href="#">Contact Us</a></li>
                     <li><a href="#">Login</a></li>
                     <li><a href="#">Forgot Password</a></li>
                  </ul> -->
                        </li>
                        <li class="flex items-center gap-2 menu-li">
                            <a href="#" class="submenu-a">USD</a>
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-3.5 mt-1" viewBox="0 0 448 512">
                                <path fill="white"
                                    d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                            </svg>
                            <!-- <ul class="px-2 flex flex-col justify-between bg-white absolute top-11 invisible submenu-a-ul
                  transition-all duration-300ms">
                     <li class="w-full hover:bg-gray-100 transition-all duration-300ms">
                        <a href="#" class="text-xs text-black">USD</a>
                     </li>
                     <li class="w-full hover:bg-gray-100 transition-all duration-300ms">
                        <a href="#" class="text-xs text-black">EUR</a>
                     </li>
                  </ul> -->
                        </li>
                        <li class="flex items-center gap-2 menu-li">
                            <a href="#" class="submenu-a">FA</a>
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-3.5 mt-1" viewBox="0 0 448 512">
                                <path fill="white"
                                    d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                            </svg>
                            <!-- <ul
                     class="px-2 flex flex-col justify-between bg-white absolute top-11 invisible submenu-a-ul transition-all duration-300ms">
                     <li class="w-full hover:bg-gray-100 transition-all duration-300ms">
                        <a href="#" class="text-xs text-black">FA</a>
                     </li>
                     <li class="w-full hover:bg-gray-100 transition-all duration-300ms">
                        <a href="#" class="text-xs text-black">ENG</a>
                     </li>
                  </ul> -->
                        </li>
                        <li class="flex items-center gap-2 menu-li">
                            <a href="#" class="submenu-a">لینک ها</a>
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-3.5 mt-1" viewBox="0 0 448 512">
                                <path fill="white"
                                    d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                            </svg>
                            <ul
                                class="px-2 flex flex-col justify-between bg-white absolute top-11 invisible submenu-a-ul transition-all duration-300ms">
                                <li class="w-full hover:bg-gray-100 transition-all duration-300ms">
                                    <a href="#" class="text-xs text-black">درباره ما</a>
                                </li>
                                <li class="w-full hover:bg-gray-100 transition-all duration-300ms">
                                    <a href="#" class="text-xs text-black">تماس با ما</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">وبلاگ</a></li>
                        <li><a href="#">BUY PORTO!</a></li>
                    </ul>
                </nav>
            </div>
            <div class="w-7/12 bg-black/50" onclick="responsive_menu('close')"></div>
        </div> --}}
        <!-- end responsive menu -->

        <!-- کد های سپهر -->
        <div class="w-full">
            <!-- اون قسمت منو مانند بالا که هیچ کاربردی نداشت -->
            <!-- <div class="w-full fixed top-0 right-0 z-10">
                <div class="w-full float-end lg:w-9/12 py-3 flex flex-row-reverse px-5 backdrop-blur-sm shadowHeader relative z-20">
                    <div class="w-6/12 flex flex-row-reverse items-center">
                        <div class="">
                            <img src="file:///F:/Metronic%20v8.2.6/Html/demo1/demo1/assets/media/avatars/300-3.jpg"
                                alt="user__picture" class="w-11 rounded-xl">
                        </div>

                        <div class="flex gap-7 ml-7 ">
                            <div class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5">
                                    <defs>
                                        <style>
                                            .fa-secondary {
                                                opacity: .4
                                            }
                                        </style>
                                    </defs>
                                    <path class="fa-secondary"
                                        d="M208 64a144 144 0 1 1 0 288 144 144 0 1 1 0-288zm0 352A208 208 0 1 0 208 0a208 208 0 1 0 0 416z" />
                                    <path class="fa-primary"
                                        d="M330.7 376L457.4 502.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L376 330.7C363.3 348 348 363.3 330.7 376z" />
                                </svg>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5">
                                    <defs>
                                        <style>
                                            .fa-secondary {
                                                opacity: .4
                                            }
                                        </style>
                                    </defs>
                                    <path class="fa-secondary"
                                        d="M512 240c0 114.9-114.6 208-256 208c-37.1 0-72.3-6.4-104.1-17.9c-11.9 8.7-31.3 20.6-54.3 30.6C73.6 471.1 44.7 480 16 480c-6.5 0-12.3-3.9-14.8-9.9c-2.5-6-1.1-12.8 3.4-17.4l0 0 0 0 0 0 0 0 .3-.3c.3-.3 .7-.7 1.3-1.4c1.1-1.2 2.8-3.1 4.9-5.7c4.1-5 9.6-12.4 15.2-21.6c10-16.6 19.5-38.4 21.4-62.9C17.7 326.8 0 285.1 0 240C0 125.1 114.6 32 256 32s256 93.1 256 208z" />
                                    <path class="fa-primary" d="" />
                                </svg>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5">
                                    <defs>
                                        <style>
                                            .fa-secondary {
                                                opacity: .4
                                            }
                                        </style>
                                    </defs>
                                    <path class="fa-secondary"
                                        d="M256 448c141.4 0 256-93.1 256-208S397.4 32 256 32S0 125.1 0 240c0 45.1 17.7 86.8 47.7 120.9c-1.9 24.5-11.4 46.3-21.4 62.9c-5.5 9.2-11.1 16.6-15.2 21.6c-2.1 2.5-3.7 4.4-4.9 5.7c-.6 .6-1 1.1-1.3 1.4l-.3 .3 0 0 0 0 0 0 0 0c-4.6 4.6-5.9 11.4-3.4 17.4c2.5 6 8.3 9.9 14.8 9.9c28.7 0 57.6-8.9 81.6-19.3c22.9-10 42.4-21.9 54.3-30.6c31.8 11.5 67 17.9 104.1 17.9zM120 208H264c13.3 0 24 10.7 24 24s-10.7 24-24 24H120c-13.3 0-24-10.7-24-24s10.7-24 24-24zm224 0h48c13.3 0 24 10.7 24 24s-10.7 24-24 24H344c-13.3 0-24-10.7-24-24s10.7-24 24-24zM120 288h48c13.3 0 24 10.7 24 24s-10.7 24-24 24H120c-13.3 0-24-10.7-24-24s10.7-24 24-24zm128 0H392c13.3 0 24 10.7 24 24s-10.7 24-24 24H248c-13.3 0-24-10.7-24-24s10.7-24 24-24z" />
                                    <path class="fa-primary"
                                        d="M96 232c0-13.3 10.7-24 24-24H264c13.3 0 24 10.7 24 24s-10.7 24-24 24H120c-13.3 0-24-10.7-24-24zm224 0c0-13.3 10.7-24 24-24h48c13.3 0 24 10.7 24 24s-10.7 24-24 24H344c-13.3 0-24-10.7-24-24zM96 312c0-13.3 10.7-24 24-24h48c13.3 0 24 10.7 24 24s-10.7 24-24 24H120c-13.3 0-24-10.7-24-24zm128 0c0-13.3 10.7-24 24-24H392c13.3 0 24 10.7 24 24s-10.7 24-24 24H248c-13.3 0-24-10.7-24-24z" />
                                </svg>
                            </div>
                            <div class="relative">
                                <div
                                    class="bg-green-500 size-1/3 absolute -top-2.5 rounded-full right-1.5 active-circle">
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5">
                                    <defs>
                                        <style>
                                            .fa-secondary {
                                                opacity: .4
                                            }
                                        </style>
                                    </defs>
                                    <path class="fa-secondary"
                                        d="M188.3 408.7l44.5 89c4.4 8.8 13.3 14.3 23.2 14.3s18.8-5.5 23.2-14.3l44.5-89C432.2 384.5 512 303.8 512 208C512 93.1 397.4 0 256 0S0 93.1 0 208c0 95.8 79.8 176.5 188.3 200.7z" />
                                    <path class="fa-primary" d="" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="w-6/12 flex justify-start">
                        <ul class="flex gap-4 items-center text-black font-semibold ">
                            <li class="color__a text-[#4B5675]">
                                <a href="#" class="py-2">داشبورد ها</a>
                            </li>
                            <li class="color__a text-[#4B5675]">
                                <a href="#" class="py-2"> صفحات</a>
                            </li>
                            <li class="color__a text-[#4B5675]">
                                <a href="#" class="py-2"> اپلیکیشن</a>
                            </li>
                            <li class="color__a text-[#4B5675]">
                                <a href="#" class="py-2">قالب بندی ها</a>
                            </li>
                            <li class="color__a text-[#4B5675]">
                                <a href="#" class="py-2"> کمک</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> -->
            <!-- انتهای اون قسمت منو مانند -->
            <div class="w-9/12 float-end p-5 overflow-y-auto" style="scrollbar-width:none;">
                @yield('content')
            </div>
        </div>
    </div>



    <script src="{{ asset('assets/js/app.js') }}" defer></script>
</body>

</html>
