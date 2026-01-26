<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}" type="text/css">
    <title>پنل ادمین</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/IMG_20251225_131334_688.png') }}">
    <script src="{{ asset('assets/js/tailwind.js') }}"></script>
    {{-- زمان وصل شدن اینترنت ها اینو باید برداریم --}}
</head>

<body>
    <div class="2xl:container mx-auto flex flex-row">
        <div class="lg:hidden bg-white size-10 border rounded-md flex justify-center items-center cursor-pointer fixed top-2 right-2"
            onclick="responsive_menu('open')">
            <div class="w-7 h-6 flex flex-col justify-between items-center">
                <span class="inline-block w-full h-1/5 bg-black rounded-md"></span>
                <span class="inline-block w-full h-1/5 bg-black rounded-md"></span>
                <span class="inline-block w-full h-1/5 bg-black rounded-md"></span>
            </div>
        </div>
        <div class="hidden lg:block lg:w-3/12 bg-[#0D0E12] fixed right-0 top-0 h-dvh px-5">
            <div class="flex justify-center pt-5">
                <a href="{{route('dashboard')}}" class="right-0 mr-[15px]">
                    <img src="{{ asset($logo['logo']) }}" alt="{{ $logo['alt_text'] }}" class="w-40 h-15">
                </a>
            </div>
            <hr class="text-[darkslategray] mt-2.5">
            <div class="py-3 h-[80%] overflow-y-auto flex flex-col gap-3" style="scrollbar-width: none;">
                <div class="border-b border-gray-500 pb-3">
                    <a href="{{route('dashboard')}}" class="flex items-center py-1 px-3 rounded-md @if (Route::is('dashboard')) bg-[#383c4d] @endif">
                        <div class="flex flex-row-reverse items-center gap-2 text-white">
                            <span class="flex justify-end">داشبورد</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="800px" height="800px"
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
                    </a>
                </div>
                <div class="border-b border-gray-500 pb-3">
                    <div class="arrow-down cursor-pointer flex justify-between items-center flex-row-reverse py-1 px-3 rounded-md @if (Route::is('meta_*')) bg-[#383c4d] @endif">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="size-6 fill-white w-[15px] transition-all duration-300 @if (Route::is('meta_*')) rotate-180 @endif">
                            <path fill-rule="evenodd"
                                d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                                clip-rule="evenodd" />
                        </svg>
                        <div class="flex flex-row-reverse items-center gap-2 text-white">
                            <span class="flex justify-end">متا ها</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="800px" height="800px"
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
                    <div class="overflow-y-auto transition-all duration-300 @if (Route::is('meta_*')) max-h-100 @else max-h-0 @endif"
                    style="scrollbar-width: none;">
                        <ul class="gap-2.5 pr-3">
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('meta_index') }}"
                                    class="py-1 @if (Route::is('meta_index')) text-[#FF0000] @endif">همه متا ها</a>
                            </li>
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('meta_create') }}"
                                    class="py-1 @if (Route::is('meta_create')) text-[#FF0000] @endif">ایجاد متای جدید</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="border-b border-gray-500 pb-3">
                    <div class="arrow-down cursor-pointer flex justify-between items-center flex-row-reverse py-1 px-3 rounded-md @if (Route::is('settings.colors.createColor') || Route::is('menu-*') || Route::is('banners-*') || Route::is('footer-*') || Route::is('homeForm-*')) bg-[#383c4d] @endif">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="size-6 fill-white w-[15px] transition-all duration-300 @if (Route::is('settings.colors.createColor') || Route::is('menu-*') || Route::is('banners-*') || Route::is('footer-*') || Route::is('homeForm-*')) rotate-180 @endif">
                            <path fill-rule="evenodd"
                                d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                                clip-rule="evenodd" />
                        </svg>
                        <div class="flex flex-row-reverse items-center gap-2 text-white">
                            <span class="flex justify-end">تنظیمات خانه</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="800px" height="800px"
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
                    <div class="overflow-y-auto transition-all duration-300 @if (Route::is('settings.colors.createColor') || Route::is('menu-*') || Route::is('banners-*') || Route::is('footer-*') || Route::is('homeForm-*')) max-h-100 @else max-h-0 @endif" style="scrollbar-width: none;">
                        <ul class="gap-2.5 pr-3">
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('settings.colors.createColor') }}"
                                    class="py-1 @if (Route::is('settings.colors.createColor')) text-[#FF0000] @endif">تنظیمات
                                    رنگ ها</a>
                            </li>
                            {{-- <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('menu-index') }}" class="py-1 @if (Route::is('menu-index')) text-[#FF0000] @endif">منو</a>
                            </li>
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('menu-create') }}" class="py-1 @if (Route::is('menu-create')) text-[#FF0000] @endif">ایجاد منوی جدید</a>
                            </li> --}}
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('banners-logo-create') }}"
                                    class="py-1 @if (Route::is('banners-logo-create')) text-[#FF0000] @endif">لوگو</a>
                            </li>
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('banners-tiles-create') }}"
                                    class="py-1 @if (Route::is('banners-tiles-create')) text-[#FF0000] @endif">کاشی
                                    ها</a>
                            </li>
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('banners-bigTile-create') }}"
                                    class="py-1 @if (Route::is('banners-bigTile-create')) text-[#FF0000] @endif">کاشی
                                    بزرگ</a>
                            </li>
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('banners-create') }}"
                                    class="py-1 @if (Route::is('banners-create')) text-[#FF0000] @endif">بنر
                                    ها</a>
                            </li>
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('banners-bigBanner-create') }}"
                                    class="py-1 @if (Route::is('banners-bigBanner-create')) text-[#FF0000] @endif">بنر
                                    بزرگ</a>
                            </li>
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('banners-footerTile-create') }}"
                                    class="py-1 @if (Route::is('banners-footerTile-create')) text-[#FF0000] @endif">کاشی
                                    فوتر</a>
                            </li>
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('footer-create') }}"
                                    class="py-1 @if (Route::is('footer-create')) text-[#FF0000] @endif">ستون
                                    های فوتر</a>
                            </li>
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('footer-footerFormMedia-create') }}"
                                    class="py-1 @if (Route::is('footer-footerFormMedia-create')) text-[#FF0000] @endif">فرم
                                    فوتر</a>
                            </li>
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('homeForm-index') }}"
                                    class="py-1 @if (Route::is('homeForm-index')) text-[#FF0000] @endif">راه
                                    های ارتباطی
                                    با
                                    کاربران</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="border-b border-gray-500 pb-3">
                    <div class="arrow-down cursor-pointer flex justify-between items-center flex-row-reverse py-1 px-3 rounded-md @if (Route::is('product-*')) bg-[#383c4d] @endif">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="size-6 fill-white w-[15px] transition-all duration-300 @if (Route::is('product-*')) rotate-180 @endif">
                            <path fill-rule="evenodd"
                                d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                                clip-rule="evenodd" />
                        </svg>
                        <div class="flex flex-row-reverse items-center gap-2 text-white">
                            <span class="flex justify-end">محصولات</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="800px" height="800px"
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
                    <div class="overflow-y-auto transition-all duration-300 @if (Route::is('product-*')) max-h-100 @else max-h-0 @endif"
                    style="scrollbar-width: none;">
                        <ul class="gap-2.5 pr-3">
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('product-adminIndex') }}"
                                    class="py-1 @if (Route::is('product-adminIndex')) text-[#FF0000] @endif">همه
                                    محصولات</a>
                            </li>
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('product-create') }}"
                                    class="py-1 @if (Route::is('product-create')) text-[#FF0000] @endif">ایجاد
                                    محصول
                                    جدید</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="border-b border-gray-500 pb-3">
                    <div class="arrow-down cursor-pointer flex justify-between items-center flex-row-reverse py-1 px-3 rounded-md @if (Route::is('category-*')) bg-[#383c4d] @endif">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="size-6 fill-white w-[15px] transition-all duration-300 @if (Route::is('category-*')) rotate-180 @endif">
                            <path fill-rule="evenodd"
                                d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                                clip-rule="evenodd" />
                        </svg>
                        <div class="flex flex-row-reverse items-center gap-2 text-white">
                            <span class="flex justify-end">دسته بندی ها</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="800px" height="800px"
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
                    <div class="overflow-y-auto transition-all duration-300 @if (Route::is('category-*')) max-h-100 @else max-h-0 @endif"
                    style="scrollbar-width: none;">
                        <ul class="gap-2.5 pr-3">
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('category-adminIndex') }}"
                                    class="py-1 @if (Route::is('category-adminIndex')) text-[#FF0000] @endif">همه
                                    دسته
                                    ها</a>
                            </li>
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('category-create') }}"
                                    class="py-1 @if (Route::is('category-create')) text-[#FF0000] @endif">ایجاد
                                    دسته
                                    جدید</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="border-b border-gray-500 pb-3">
                    <div class="arrow-down cursor-pointer flex justify-between items-center flex-row-reverse py-1 px-3 rounded-md  @if (Route::is('course.*') || Route::is('coursecategory.*') || Route::is('teacher.*') || Route::is('status.*') || Route::is('courseLevel.*') || Route::is('season.*') || Route::is('lesson_*') || Route::is('lessonComments_*') || Route::is('question_*') || Route::is('answer_*') || Route::is('suggestion_*') || Route::is('error_*') || Route::is('errortitle_*')) bg-[#383c4d] @endif">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="size-6 fill-white w-[15px] transition-all duration-300  @if (Route::is('course.*') || Route::is('coursecategory.*') || Route::is('teacher.*') || Route::is('status.*') || Route::is('courseLevel.*') || Route::is('season.*') || Route::is('lesson_*') || Route::is('lessonComments_*') || Route::is('question_*') || Route::is('answer_*') || Route::is('suggestion_*') || Route::is('error_*') || Route::is('errortitle_*')) rotate-180 @endif">
                            <path fill-rule="evenodd"
                                d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                                clip-rule="evenodd" />
                        </svg>
                        <div class="flex flex-row-reverse items-center gap-2 text-white">
                            <span class="flex justify-end">دوره ها</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="800px" height="800px"
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
                    <div class="overflow-y-auto transition-all duration-300 @if (Route::is('course.*') || Route::is('coursecategory.*') || Route::is('teacher.*') || Route::is('status.*') || Route::is('courseLevel.*') || Route::is('season.*') || Route::is('lesson_*') || Route::is('lessonComments_*') || Route::is('question_*') || Route::is('answer_*') || Route::is('suggestion_*') || Route::is('error_*') || Route::is('errortitle_*')) max-h-100 @else max-h-0 @endif"
                    style="scrollbar-width: none;">
                        <ul class="gap-2.5 pr-3">
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('coursecategory.adminList') }}"
                                    class="py-1 @if (Route::is('coursecategory.adminList')) text-[#FF0000] @endif">همه
                                    دسته
                                    بندی
                                    دوره ها</a>
                            </li>
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('coursecategory.create') }}"
                                    class="py-1 @if (Route::is('coursecategory.create')) text-[#FF0000] @endif">ایجاد
                                    دسته
                                    بندی دوره جدید</a>
                            </li>
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('course.adminList') }}"
                                    class="py-1 @if (Route::is('course.adminList')) text-[#FF0000] @endif">همه دوره ها</a>
                            </li>
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('course.create') }}"
                                    class="py-1 @if (Route::is('course.create')) text-[#FF0000] @endif">ایجاد
                                    دوره
                                    جدید</a>
                            </li>
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('teacher.list') }}"
                                    class="py-1 @if (Route::is('teacher.list')) text-[#FF0000] @endif">همه اساتید</a>
                            </li>
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('teacher.create') }}"
                                    class="py-1 @if (Route::is('teacher.create')) text-[#FF0000] @endif">ایجاد مدرس جدید</a>
                            </li>
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('status.list') }}"
                                    class="py-1 @if (Route::is('status.list')) text-[#FF0000] @endif">همه وضعیت ها</a>
                            </li>
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('status.create') }}"
                                    class="py-1 @if (Route::is('status.create')) text-[#FF0000] @endif">ایجاد وضعیت جدید</a>
                            </li>
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('courseLevel.list') }}"
                                    class="py-1 @if (Route::is('courseLevel.list')) text-[#FF0000] @endif">همه سطوح</a>
                            </li>
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('courseLevel.create') }}"
                                    class="py-1 @if (Route::is('courseLevel.create')) text-[#FF0000] @endif">ایجاد سطح جدید</a>
                            </li>
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('errortitle_index') }}"
                                    class="py-1 @if (Route::is('errortitle_index')) text-[#FF0000] @endif">همه خطا ها</a>
                            </li>
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('errortitle_create') }}"
                                    class="py-1 @if (Route::is('errortitle_create')) text-[#FF0000] @endif">ایجاد عنوان خطای جدید</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="border-b border-gray-500 pb-3">
                    <div class="arrow-down cursor-pointer flex justify-between items-center flex-row-reverse py-1 px-3 rounded-md @if (Route::is('user.*') || Route::is('admin_create_user')) bg-[#383c4d] @endif">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="size-6 fill-white w-[15px] transition-all duration-300 @if (Route::is('user.*') || Route::is('admin_create_user')) rotate-180 @endif">
                            <path fill-rule="evenodd"
                                d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                                clip-rule="evenodd" />
                        </svg>
                        <div class="flex flex-row-reverse items-center gap-2 text-white">
                            <span class="flex justify-end">کاربران</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="800px" height="800px"
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
                    <div class="overflow-y-auto transition-all duration-300 @if (Route::is('user.*') || Route::is('admin_create_user')) max-h-100 @else max-h-0 @endif"
                    style="scrollbar-width: none;">
                        <ul class="gap-2.5 pr-3">
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('user.index') }}"
                                    class="py-1 @if (Route::is('user.index')) text-[#FF0000] @endif">همه کاربران</a>
                            </li>
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('admin_create_user') }}"
                                    class="py-1 @if (Route::is('admin_create_user')) text-[#FF0000] @endif">ایجاد
                                    کاربر
                                    جدید</a>
                            </li>
                            {{-- <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('user.login') }}"
                                    class="py-1 @if (Route::is('user.login')) text-[#FF0000] @endif">ایجاد ادمین
                                    جدید</a>
                            </li> --}}
                        </ul>
                    </div>
                </div>
                <div class="border-b border-gray-500 pb-3">
                    <div class="arrow-down cursor-pointer flex justify-between items-center flex-row-reverse py-1 px-3 rounded-md @if (Route::is('aboutus-*') || Route::is('contactus-*')) bg-[#383c4d] @endif">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="size-6 fill-white w-[15px] transition-all duration-300 @if (Route::is('aboutus-*') || Route::is('contactus-*')) rotate-180 @endif">
                            <path fill-rule="evenodd"
                                d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                                clip-rule="evenodd" />
                        </svg>
                        <div class="flex flex-row-reverse items-center gap-2 text-white">
                            <span class="flex justify-end">ارتباط با ما</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="800px" height="800px"
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
                    <div class="overflow-y-auto transition-all duration-300 @if (Route::is('aboutus-*') || Route::is('contactus-*')) max-h-100 @else max-h-0 @endif"
                    style="scrollbar-width: none;">
                        <ul class="gap-2.5 pr-3">
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('aboutus-create') }}"
                                    class="py-1 @if (Route::is('aboutus-create')) text-[#FF0000] @endif">فرم
                                    درباره
                                    ما</a>
                            </li>
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('contactus-index') }}"
                                    class="py-1 @if (Route::is('contactus-index')) text-[#FF0000] @endif">لیست
                                    درخواست
                                    های
                                    تماس با ما</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="border-b border-gray-500 pb-3">
                    <div class="arrow-down cursor-pointer flex justify-between items-center flex-row-reverse py-1 px-3 rounded-md @if (Route::is('comment.*') || Route::is('answer-*') || Route::is('question-*')) bg-[#383c4d] @endif">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="size-6 fill-white w-[15px] transition-all duration-300 @if (Route::is('comment.*') || Route::is('answer-*') || Route::is('question-*')) rotate-180 @endif">
                            <path fill-rule="evenodd"
                                d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                                clip-rule="evenodd" />
                        </svg>
                        <div class="flex flex-row-reverse items-center gap-2 text-white">
                            <span class="flex justify-end">نظرات و پرسش و پاسخ</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="800px" height="800px"
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
                    <div class="overflow-y-auto transition-all duration-300 @if (Route::is('comment.*') || Route::is('answer-*') || Route::is('question-*')) max-h-100 @else max-h-0 @endif"
                    style="scrollbar-width: none;">
                        <ul class="gap-2.5 pr-3">
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('comment.index') }}"
                                    class="py-1 @if (Route::is('comment.index')) text-[#FF0000] @endif">همه
                                    نظرات</a>
                            </li>
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('question-index') }}"
                                    class="py-1 @if (Route::is('question-index')) text-[#FF0000] @endif">همه
                                    پرسش ها</a>
                            </li>
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('answer-index') }}"
                                    class="py-1 @if (Route::is('answer-index')) text-[#FF0000] @endif">همه
                                    پاسخ ها</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- responsive menu -->
        <div class="lg:hidden flex fixed z-1000 -right-full w-full h-dvh transition-all duration-500" id="menu">
            <div class="responsive-menu-shadow w-2/3 md:w-5/12 px-5 pt-10 bg-[#0D0E12]">
                <div class="relative" onclick="responsive_menu('close')">
                    <button
                        class="absolute -top-7 left-0 w-5 h-5 flex flex-col justify-center items-center cursor-pointer">
                        <span class="w-full h-[1.5px] bg-white rotate-45 translate-y-1/2"></span>
                        <span class="w-full h-[1.5px] bg-white -rotate-45 -translate-y-1/2"></span>
                    </button>
                </div>
                <div class="flex justify-center pt-5">
                    <a href="http://shahkar.art/dashboard" class="right-0 mr-[15px]">
                        <img src="{{ asset($logo['logo']) }}" alt="{{ $logo['alt_text'] }}" class="w-40 h-15">
                    </a>
                </div>
                <hr class="text-[darkslategray] mt-2.5">
                <div class="py-5 h-[80%] overflow-y-auto flex flex-col gap-3" style="scrollbar-width: none;">
                    <div class="border-b border-gray-500 pb-3">
                        <a href="{{route('dashboard')}}" class="flex items-center py-1 px-3 rounded-md @if (Route::is('dashboard')) bg-[#383c4d] @endif">
                            <div class="flex flex-row-reverse items-center gap-2 text-white">
                                <span class="flex justify-end">داشبورد</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="800px" height="800px"
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
                        </a>
                    </div>
                    <div class="border-b border-gray-500 pb-3">
                        <div class="arrow-down cursor-pointer flex justify-between items-center flex-row-reverse py-1 px-3 rounded-md @if (Route::is('meta_*')) bg-[#383c4d] @endif">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="size-6 fill-white w-[15px] transition-all duration-300 @if (Route::is('meta_*')) rotate-180 @endif">
                                <path fill-rule="evenodd"
                                    d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <div class="flex flex-row-reverse items-center gap-2 text-white">
                                <span class="flex justify-end">متا ها</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="800px" height="800px"
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
                        <div class="overflow-y-auto transition-all duration-300 @if (Route::is('meta_*')) max-h-100 @else max-h-0 @endif"
                        style="scrollbar-width: none;">
                            <ul class="gap-2.5 pr-3">
                                <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                    <span class="size-1 bg-white rounded-sm"></span>
                                    <a href="{{ route('meta_index') }}"
                                        class="py-1 @if (Route::is('meta_index')) text-[#FF0000] @endif">همه متا ها</a>
                                </li>
                                <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                    <span class="size-1 bg-white rounded-sm"></span>
                                    <a href="{{ route('meta_create') }}"
                                        class="py-1 @if (Route::is('meta_create')) text-[#FF0000] @endif">ایجاد متای جدید</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="border-b border-gray-500 pb-3">
                        <div class="arrow-down cursor-pointer flex justify-between items-center flex-row-reverse py-1 px-3 rounded-md @if (Route::is('settings.colors.createColor') || Route::is('menu-*') || Route::is('banners-*') || Route::is('footer-*') || Route::is('homeForm-*')) bg-[#383c4d] @endif">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="size-6 fill-white w-[15px] transition-all duration-300 @if (Route::is('settings.colors.createColor') || Route::is('menu-*') || Route::is('banners-*') || Route::is('footer-*') || Route::is('homeForm-*')) rotate-180 @endif">
                                <path fill-rule="evenodd"
                                    d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <div class="flex flex-row-reverse items-center gap-2 text-white">
                                <span class="flex justify-end">تنظیمات خانه</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="800px" height="800px"
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
                        <div class="overflow-y-auto transition-all duration-300 @if (Route::is('settings.colors.createColor') || Route::is('menu-*') || Route::is('banners-*') || Route::is('footer-*') || Route::is('homeForm-*')) max-h-100 @else max-h-0 @endif"
                            style="scrollbar-width: none;">
                            <ul class="gap-2.5 pr-3">
                                <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                    <span class="size-1 bg-white rounded-sm"></span>
                                    <a href="{{ route('settings.colors.createColor') }}"
                                        class="py-1 @if (Route::is('settings.colors.createColor')) text-[#FF0000] @endif">تنظیمات
                                        رنگ ها</a>
                                </li>
                                {{-- <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                    <span class="size-1 bg-white rounded-sm"></span>
                                    <a href="{{ route('menu-index') }}" class="py-1 @if (Route::is('menu-index')) text-[#FF0000] @endif">منو</a>
                                </li> --}}
                                {{-- <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                    <span class="size-1 bg-white rounded-sm"></span>
                                    <a href="{{ route('menu-create') }}" class="py-1 @if (Route::is('menu-create'')) text-[#FF0000] @endif">ایجاد منوی جدید</a>
                                </li> --}}
                                <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                    <span class="size-1 bg-white rounded-sm"></span>
                                    <a href="{{ route('banners-logo-create') }}"
                                        class="py-1 @if (Route::is('banners-logo-create')) text-[#FF0000] @endif">لوگو</a>
                                </li>
                                <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                    <span class="size-1 bg-white rounded-sm"></span>
                                    <a href="{{ route('banners-tiles-create') }}"
                                        class="py-1 @if (Route::is('banners-tiles-create')) text-[#FF0000] @endif">کاشی
                                        ها</a>
                                </li>
                                <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                    <span class="size-1 bg-white rounded-sm"></span>
                                    <a href="{{ route('banners-bigTile-create') }}"
                                        class="py-1 @if (Route::is('banners-bigTile-create')) text-[#FF0000] @endif">کاشی
                                        بزرگ</a>
                                </li>
                                <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                    <span class="size-1 bg-white rounded-sm"></span>
                                    <a href="{{ route('banners-create') }}"
                                        class="py-1 @if (Route::is('banners-create')) text-[#FF0000] @endif">بنر
                                        ها</a>
                                </li>
                                <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                    <span class="size-1 bg-white rounded-sm"></span>
                                    <a href="{{ route('banners-bigBanner-create') }}"
                                        class="py-1 @if (Route::is('banners-bigBanner-create')) text-[#FF0000] @endif">بنر
                                        بزرگ</a>
                                </li>
                                <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                    <span class="size-1 bg-white rounded-sm"></span>
                                    <a href="{{ route('banners-footerTile-create') }}"
                                        class="py-1 @if (Route::is('banners-footerTile-create')) text-[#FF0000] @endif">کاشی
                                        فوتر</a>
                                </li>
                                <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                    <span class="size-1 bg-white rounded-sm"></span>
                                    <a href="{{ route('footer-create') }}"
                                        class="py-1 @if (Route::is('footer-create')) text-[#FF0000] @endif">ستون
                                        های فوتر</a>
                                </li>
                                <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                    <span class="size-1 bg-white rounded-sm"></span>
                                    <a href="{{ route('footer-footerFormMedia-create') }}"
                                        class="py-1 @if (Route::is('footer-footerFormMedia-create')) text-[#FF0000] @endif">فرم
                                        فوتر</a>
                                </li>
                                <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                    <span class="size-1 bg-white rounded-sm"></span>
                                    <a href="{{ route('homeForm-index') }}"
                                        class="py-1 @if (Route::is('homeForm-index')) text-[#FF0000] @endif">راه
                                        های ارتباطی
                                        با
                                        کاربران</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="border-b border-gray-500 pb-3">
                        <div class="arrow-down cursor-pointer flex justify-between items-center flex-row-reverse py-1 px-3 rounded-md @if (Route::is('product-*')) bg-[#383c4d] @endif">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="size-6 fill-white w-[15px] transition-all duration-300 @if (Route::is('product-*')) rotate-180 @endif">
                                <path fill-rule="evenodd"
                                    d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <div class="flex flex-row-reverse items-center gap-2 text-white">
                                <span class="flex justify-end">محصولات</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="800px" height="800px"
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
                        <div class="overflow-y-auto transition-all duration-300 @if (Route::is('product-*')) max-h-100 @else max-h-0 @endif"
                        style="scrollbar-width: none;">
                            <ul class="gap-2.5 pr-3">
                                <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                    <span class="size-1 bg-white rounded-sm"></span>
                                    <a href="{{ route('product-adminIndex') }}"
                                        class="py-1 @if (Route::is('product-adminIndex')) text-[#FF0000] @endif">همه
                                        محصولات</a>
                                </li>
                                <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                    <span class="size-1 bg-white rounded-sm"></span>
                                    <a href="{{ route('product-create') }}"
                                        class="py-1 @if (Route::is('product-create')) text-[#FF0000] @endif">ایجاد
                                        محصول
                                        جدید</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="border-b border-gray-500 pb-3">
                        <div class="arrow-down cursor-pointer flex justify-between items-center flex-row-reverse py-1 px-3 rounded-md @if (Route::is('category-*')) bg-[#383c4d] @endif">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="size-6 fill-white w-[15px] transition-all duration-300 @if (Route::is('category-*')) rotate-180 @endif">
                                <path fill-rule="evenodd"
                                    d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <div class="flex flex-row-reverse items-center gap-2 text-white">
                                <span class="flex justify-end">دسته بندی ها</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="800px" height="800px"
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
                        <div class="overflow-y-auto transition-all duration-300 @if (Route::is('category-*')) max-h-100 @else max-h-0 @endif"
                        style="scrollbar-width: none;">
                            <ul class="gap-2.5 pr-3">
                                <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                    <span class="size-1 bg-white rounded-sm"></span>
                                    <a href="{{ route('category-adminIndex') }}"
                                        class="py-1 @if (Route::is('category-adminIndex')) text-[#FF0000] @endif">همه
                                        دسته
                                        ها</a>
                                </li>
                                <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                    <span class="size-1 bg-white rounded-sm"></span>
                                    <a href="{{ route('category-create') }}"
                                        class="py-1 @if (Route::is('category-create')) text-[#FF0000] @endif">ایجاد
                                        دسته
                                        جدید</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="border-b border-gray-500 pb-3">
                        <div class="arrow-down cursor-pointer flex justify-between items-center flex-row-reverse py-1 px-3 rounded-md @if (Route::is('course.*') || Route::is('coursecategory.*') || Route::is('teacher.*') || Route::is('status.*') || Route::is('courseLevel.*') || Route::is('season.*') || Route::is('lesson_*') || Route::is('lessonComments_*') || Route::is('question_*') || Route::is('answer_*') || Route::is('suggestion_*') || Route::is('error_*') || Route::is('errortitle_*')) bg-[#383c4d] @endif">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="size-6 fill-white w-[15px] transition-all duration-300 @if (Route::is('course.*') || Route::is('coursecategory.*') || Route::is('teacher.*') || Route::is('status.*') || Route::is('courseLevel.*') || Route::is('season.*') || Route::is('lesson_*') || Route::is('lessonComments_*') || Route::is('question_*') || Route::is('answer_*') || Route::is('suggestion_*') || Route::is('error_*') || Route::is('errortitle_*')) rotate-180 @endif">
                                <path fill-rule="evenodd"
                                    d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <div class="flex flex-row-reverse items-center gap-2 text-white">
                                <span class="flex justify-end">دوره ها</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="800px" height="800px"
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
                        <div class="overflow-y-auto transition-all duration-300 @if (Route::is('course.*') || Route::is('coursecategory.*') || Route::is('teacher.*') || Route::is('status.*') || Route::is('courseLevel.*') || Route::is('season.*') || Route::is('lesson_*') || Route::is('lessonComments_*') || Route::is('question_*') || Route::is('answer_*') || Route::is('suggestion_*') || Route::is('error_*') || Route::is('errortitle_*')) max-h-100 @else max-h-0 @endif"
                        style="scrollbar-width: none;">
                            <ul class="gap-2.5 pr-3">
                                <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                    <span class="size-1 bg-white rounded-sm"></span>
                                    <a href="{{ route('coursecategory.adminList') }}"
                                        class="py-1 @if (Route::is('coursecategory.adminList')) text-[#FF0000] @endif">همه
                                        دسته
                                        بندی
                                        دوره ها</a>
                                </li>
                                <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                    <span class="size-1 bg-white rounded-sm"></span>
                                    <a href="{{ route('coursecategory.create') }}"
                                        class="py-1 @if (Route::is('coursecategory.create')) text-[#FF0000] @endif">ایجاد
                                        دسته
                                        بندی دوره جدید</a>
                                </li>
                                <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                    <span class="size-1 bg-white rounded-sm"></span>
                                    <a href="{{ route('course.adminList') }}"
                                        class="py-1 @if (Route::is('course.adminList')) text-[#FF0000] @endif">همه دوره ها</a>
                                </li>
                                <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                    <span class="size-1 bg-white rounded-sm"></span>
                                    <a href="{{ route('course.create') }}"
                                        class="py-1 @if (Route::is('course.create')) text-[#FF0000] @endif">ایجاد
                                        دوره
                                        جدید</a>
                                </li>
                                <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                    <span class="size-1 bg-white rounded-sm"></span>
                                    <a href="{{ route('teacher.list') }}"
                                        class="py-1 @if (Route::is('teacher.list')) text-[#FF0000] @endif">همه اساتید</a>
                                </li>
                                <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                    <span class="size-1 bg-white rounded-sm"></span>
                                    <a href="{{ route('teacher.create') }}"
                                        class="py-1 @if (Route::is('teacher.create')) text-[#FF0000] @endif">ایجاد مدرس جدید</a>
                                </li>
                                <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                    <span class="size-1 bg-white rounded-sm"></span>
                                    <a href="{{ route('status.list') }}"
                                        class="py-1 @if (Route::is('status.list')) text-[#FF0000] @endif">همه وضعیت ها</a>
                                </li>
                                <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                    <span class="size-1 bg-white rounded-sm"></span>
                                    <a href="{{ route('status.create') }}"
                                        class="py-1 @if (Route::is('status.create')) text-[#FF0000] @endif">ایجاد وضعیت جدید</a>
                                </li>
                                <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                    <span class="size-1 bg-white rounded-sm"></span>
                                    <a href="{{ route('courseLevel.list') }}"
                                        class="py-1 @if (Route::is('courseLevel.list')) text-[#FF0000] @endif">همه سطوح</a>
                                </li>
                                <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                    <span class="size-1 bg-white rounded-sm"></span>
                                    <a href="{{ route('courseLevel.create') }}"
                                        class="py-1 @if (Route::is('courseLevel.create')) text-[#FF0000] @endif">ایجاد سطح جدید</a>
                                </li>
                                <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                    <span class="size-1 bg-white rounded-sm"></span>
                                    <a href="{{ route('errortitle_index') }}"
                                        class="py-1 @if (Route::is('errortitle_index')) text-[#FF0000] @endif">همه خطا ها</a>
                                </li>
                                <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                    <span class="size-1 bg-white rounded-sm"></span>
                                    <a href="{{ route('errortitle_create') }}"
                                        class="py-1 @if (Route::is('errortitle_create')) text-[#FF0000] @endif">ایجاد عنوان خطای جدید</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="border-b border-gray-500 pb-3">
                        <div class="arrow-down cursor-pointer flex justify-between items-center flex-row-reverse py-1 px-3 rounded-md @if (Route::is('user.*') || Route::is('admin_create_user')) bg-[#383c4d] @endif">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="size-6 fill-white w-[15px] transition-all duration-300 @if (Route::is('user.*') || Route::is('admin_create_user')) rotate-180 @endif">
                                <path fill-rule="evenodd"
                                    d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <div class="flex flex-row-reverse items-center gap-2 text-white">
                                <span class="flex justify-end">کاربران</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="800px" height="800px"
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
                        <div class="overflow-y-auto transition-all duration-300 @if (Route::is('user.*') || Route::is('admin_create_user')) max-h-100 @else max-h-0 @endif"
                        style="scrollbar-width: none;">
                            <ul class="gap-2.5 pr-3">
                                <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                    <span class="size-1 bg-white rounded-sm"></span>
                                    <a href="{{ route('user.index') }}"
                                        class="py-1 @if (Route::is('user.index')) text-[#FF0000] @endif">همه
                                        کاربران</a>
                                </li>
                                <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                    <span class="size-1 bg-white rounded-sm"></span>
                                    <a href="{{ route('admin_create_user') }}"
                                        class="py-1 @if (Route::is('admin_create_user')) text-[#FF0000] @endif">ایجاد
                                        کاربر
                                        جدید</a>
                                </li>
                                {{-- <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                    <span class="size-1 bg-white rounded-sm"></span>
                                    <a href="{{ route('user.login') }}" class="py-1 @if (Route::is('user.login')) text-[#FF0000] @endif">ایجاد ادمین جدید</a>
                                </li>  --}}
                            </ul>
                        </div>
                    </div>
                    <div class="border-b border-gray-500 pb-3">
                        <div class="arrow-down cursor-pointer flex justify-between items-center flex-row-reverse py-1 px-3 rounded-md @if (Route::is('aboutus-*') || Route::is('contactus-*')) bg-[#383c4d] @endif">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="size-6 fill-white w-[15px] transition-all duration-300 @if (Route::is('aboutus-*') || Route::is('contactus-*')) rotate-180 @endif">
                                <path fill-rule="evenodd"
                                    d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <div class="flex flex-row-reverse items-center gap-2 text-white">
                                <span class="flex justify-end">ارتباط با ما</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="800px" height="800px"
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
                        <div class="overflow-y-auto transition-all duration-300 @if (Route::is('aboutus-*') || Route::is('contactus-*')) max-h-100 @else max-h-0 @endif"
                        style="scrollbar-width: none;">
                            <ul class="gap-2.5 pr-3">
                                <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                    <span class="size-1 bg-white rounded-sm"></span>
                                    <a href="{{ route('aboutus-create') }}"
                                        class="py-1 @if (Route::is('aboutus-create')) text-[#FF0000] @endif">فرم
                                        درباره
                                        ما</a>
                                </li>
                                <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                    <span class="size-1 bg-white rounded-sm"></span>
                                    <a href="{{ route('contactus-index') }}"
                                        class="py-1 @if (Route::is('contactus-index')) text-[#FF0000] @endif">لیست
                                        درخواست
                                        های
                                        تماس با ما</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="border-b border-gray-500 pb-3">
                        <div class="arrow-down cursor-pointer flex justify-between items-center flex-row-reverse py-1 px-3 rounded-md @if (Route::is('comment.*') || Route::is('answer-*') || Route::is('question-*')) bg-[#383c4d] @endif">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="size-6 fill-white w-[15px] transition-all duration-300 @if (Route::is('comment.*') || Route::is('answer-*') || Route::is('question-*')) rotate-180 @endif">
                                <path fill-rule="evenodd"
                                    d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <div class="flex flex-row-reverse items-center gap-2 text-white">
                                <span class="flex justify-end">نظرات و پرسش و پاسخ</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="800px" height="800px"
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
                        <div class="overflow-y-auto transition-all duration-300 @if (Route::is('comment.*') || Route::is('answer-*') || Route::is('question-*')) max-h-100 @else max-h-0 @endif"
                        style="scrollbar-width: none;">
                            <ul class="gap-2.5 pr-3">
                                <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                    <span class="size-1 bg-white rounded-sm"></span>
                                    <a href="{{ route('comment.index') }}"
                                        class="py-1 @if (Route::is('comment.index')) text-[#FF0000] @endif">همه
                                        نظرات</a>
                                </li>
                                <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                    <span class="size-1 bg-white rounded-sm"></span>
                                    <a href="{{ route('question-index') }}"
                                        class="py-1 @if (Route::is('question-index')) text-[#FF0000] @endif">همه
                                        پرسش ها</a>
                                </li>
                                <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 mr-5 text-white">
                                    <span class="size-1 bg-white rounded-sm"></span>
                                    <a href="{{ route('answer-index') }}"
                                        class="py-1 @if (Route::is('answer-index')) text-[#FF0000] @endif">همه
                                        پاسخ ها</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/3 md:w-7/12 bg-black/50" onclick="responsive_menu('close')"></div>
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
