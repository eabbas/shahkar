@extends('app.document')
@section('title', 'خانه')
@section('content')

    <!-- sub header -->
    <section class="flex flex-col lg:flex-row gap-5 text-(--color-text)">
        <div
            class="hidden sm:block lg:w-2/3 w-full rounded-md bg-(--color-primary-btn) bg-center bg-[url({{ $bigTile['bg_img'] }})] bg-cover bg-no-repeat p-8 lg:py-12 lg:px-20 relative overflow-hidden h-[440px] lg:h-auto max-h-[501px]">
            <div class="w-2/3 flex flex-col gap-5">
                <span class="font-medium mb-4 text-xs md:text-base leading-5">{{ $bigTile['header'] }}</span>
                <div
                    class="2xl:text-[60px] xl:text-[48px] lg:text-[42px] md:text-[36px] text-base 2xl:leading-[60px] font-bold mb-4">
                    {{ $bigTile['title'] }}
                </div>
                <p class="w-fit mb-6">{{ $bigTile['text'] }}</p>
                <div class="flex flex-row justify-start items-center gap-5">
                    <a href="{{ $bigTile['btn1_href'] }}"
                        class="bg-(--color-subheader-btn) text-sm lg:text-base rounded-[10px] py-2 px-5 text-(--color-primary-text) font-bold transition-all duration-500 ease-in-out hover:bg-(--color-bg-hover-btn)">{{ $bigTile['btn1_content'] }}</a>
                    <a href="{{ $bigTile['btn2_href'] }}"
                        class="py-1 leading-6 text-sm lg:text-base transition-all duration-[0.25s] ease-in-out hover:-translate-y-0.5">{{ $bigTile['btn2_content'] }}</a>
                </div>
            </div>
            <img src="{{ asset($bigTile['img']) }}" class="w-full sm:w-8/12 absolute bottom-0 -left-10 sm:-left-[109px]"
                alt="this is image">
        </div>
        {{-- big tile on mobile --}}
        <div
            class="sm:hidden w-full rounded-md bg-(--color-primary-btn) relative before:absolute before:content-[''] before:size-full before:top-0 before:right-0 before:bg-black/50 bg-center bg-[url({{ asset($bigTile['img']) }})] bg-cover bg-no-repeat overflow-hidden h-[440px] max-h-[501px]">
            <div class="p-5 flex flex-col gap-5 text-white relative z-50">
                <span class="font-medium mb-4 text-base leading-5">{{ $bigTile['header'] }}</span>
                <div class="text-[48px] leading-[60px] font-bold mb-4">{{ $bigTile['title'] }}</div>
                <p class="w-fit mb-6">{{ $bigTile['text'] }}</p>
                <div class="flex flex-row justify-start items-center gap-5">
                    <a href="{{ $bigTile['btn1_href'] }}"
                        class="bg-(--color-subheader-btn) text-base rounded-[10px] py-2 px-5 text-(--color-primary-text) font-bold transition-all duration-500 ease-in-out hover:bg-(--color-bg-hover-btn)">{{ $bigTile['btn1_content'] }}</a>
                    <a href="{{ $bigTile['btn2_href'] }}"
                        class="py-1 leading-6 text-base transition-all duration-[0.25s] ease-in-out hover:-translate-y-0.5">{{ $bigTile['btn2_content'] }}</a>
                </div>
            </div>
        </div>
        {{-- end big tile on mobile --}}
        <div class="lg:w-1/3 w-full flex flex-col sm:flex-row lg:flex-col gap-5">
            @foreach ($tileBanners as $tileBanner)
                <div
                    class="relative before:absolute before:content-[''] before:size-full before:top-0 before:right-0 before:bg-black/50 before:rounded-[10px] md:before:bg-black/0 sm:w-1/2 lg:w-full bg-(--color-primary-btn) bg-[url({{ $tileBanner->image }})] bg-cover rotate-y-180 bg-bottom-right bg-no-repeat min-h-[225px] rounded-[10px] p-[30px]">
                    <div class="rotate-y-180 flex flex-col gap-5 text-white md:text-(--color-text-) z-50">
                        <h2 class="font-bold xl:text-[28px] 2xl:text-[24px] leading-8">
                            {{ $tileBanner->title }}
                        </h2>
                        <div class="flex">
                            <a href="{{ $tileBanner->link_href }}"
                                class="bg-(--color-subheader-btn) rounded-[10px] text-sm lg:text-base py-2 px-5 text-(--color-primary-text) font-bold transition-all duration-500 ease-in-out hover:bg-(--color-bg-hover-btn) flex items-center gap-2 buttonLink">
                                <span>{{ $tileBanner->link_content }}</span>
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
    <section class="text-(--color-text) pt-3">
        <!-- title section -->
        <div class="flex flex-row justify-between items-center py-10">
            <h2 class="font-bold text-[24px] leading-8">دسته بندی ها</h2>
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
                <div class="p-4 border border-(--color-border) rounded-[10px]">
                    <a href="{{ route('search-cat-products', [$category]) }}" class="block mb-1 w-[137px]" target="_blank">
                        <img src="{{ $category->image }}" class="w-[85px] h-20 mx-auto" alt="">
                        <span class="inline-block w-full text-center pt-2">{{ $category->title }}</span>
                    </a>
                    <span
                        class="block text-center text-[14px] text-(--color-secondary-text) max-h-[42px] h-[42px]">{{ $category->description }}</span>
                </div>
            @endforeach
        </div>

    </section>
    <!-- category -->

    <!-- top pruducts -->
    <section class="text-(--color-text) pt-3">
        <!-- title section -->
        @if ($specialDiscounts->isNotEmpty())
            <div class="flex flex-col lg:flex-row justify-between gap-8 lg:gap-0 lg:items-center py-5 lg:py-10">
                <h2 class="font-bold lg:text-[24px] leading-8">تخفیفات ویژه</h2>
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
        <!-- title section -->

        <div class="grid 2xl:grid-cols-6 grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-2.5 lg:gap-4">
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
                    class="p-2 border border-(--color-border) rounded-[10px] relative flex flex-col justify-between productItem">
                    <div
                        class="absolute top-[5px] lg:top-2.5 left-[5px] lg:left-2.5 hidden md:flex flex-col gap-2 z-555 overflow-hidden">
                        <button
                            class="size-8 border border-(--color-border) buttonProduct btnAnimation bg-white rounded-sm flex justify-center items-center -translate-x-4 opacity-0 cursor-pointer transition-all duration-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 448 512">
                                <path fill="var(--color-fill)"
                                    d="M306.8 6.3C311.4 2.2 317.3 0 323.4 0c17.2 0 29.2 17.1 23.4 33.3L278.7 224H389c14.9 0 27 12.1 27 27c0 7.8-3.3 15.1-9.1 20.3L141.1 505.8c-4.5 4-10.4 6.2-16.5 6.2c-17.2 0-29.2-17.1-23.5-33.3L169.3 288H57.8C43.6 288 32 276.4 32 262.2c0-7.4 3.2-14.4 8.7-19.3L306.8 6.3zm.5 42.4L74.1 256H192c5.2 0 10.1 2.5 13.1 6.8s3.7 9.7 2 14.6L140.6 463.6 375.8 256H256c-5.2 0-10.1-2.5-13.1-6.8s-3.7-9.7-2-14.6l66.4-186z" />
                            </svg>
                        </button>
                        {{-- <button
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
                            </button> --}}
                        <button
                            class="size-8 border border-(--color-border) buttonProduct bg-white rounded-sm flex justify-center items-center -translate-x-4 opacity-0 cursor-pointer transition-all duration-500 delay-150">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 576 512">
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
                        {{-- <button
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
                            </button> --}}
                        <button
                            class="size-5 sm:size-7 border border-(--color-border) bg-white rounded-sm flex justify-center items-center cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-3 sm:size-4" viewBox="0 0 576 512">
                                <path fill="var(--color-fill)"
                                    d="M117.2 136C160.3 96 217.6 64 288 64s127.7 32 170.8 72c43.1 40 71.9 88 85.2 120c-13.3 32-42.1 80-85.2 120c-43.1 40-100.4 72-170.8 72s-127.7-32-170.8-72C74.1 336 45.3 288 32 256c13.3-32 42.1-80 85.2-120zM288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM192 256a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zm224 0a128 128 0 1 0 -256 0 128 128 0 1 0 256 0z" />
                            </svg>
                        </button>

                    </div>
                    {{-- <span
                            class="inline-block absolute top-[5px] lg:top-2.5 right-[5px] lg:right-2.5 py-[3px] px-2 bg-(--color-discount-bg) text-(--color-primary-text) rounded-full text-[8px] lg:text-[12px] text-center z-11">18%</span> --}}
                    <div>
                        <a href="{{ route('product-show', [$specialDiscountProduct]) }}"
                            class="flex justify-center mb-1 overflow-hidden">
                            <img src=" {{ $specialDiscountProduct['img'] }}  "
                                class="w-full transition-all duration-500 hover:scale-[1.04] relative z-10 max-h-[276px] lg:max-h-[186px] md:max-h-[348px] xl:max-h-[254px]"
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
                                    onclick="addToShoppingCart('{{ $specialDiscountProduct->id }}', '{{ $specialDiscountProduct->title }}', '{{ $specialDiscountProduct->description }}', '{{ $specialDiscountProduct['img'] }}', '{{ $specialDiscountProduct->price['price'] }}')"
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
            <div
                class="w-full children hidden xl:block xl:w-1/4 p-[30px] rounded-xl bg-[url({{ $bigBanner->image }})] bg-bottom-right bg-cover bg-no-repeat rotate-y-180">
                <div class="rotate-y-180 h-[415px]">
                    <h2 class="text-[28px] leading-12 font-bold">
                        {{ $bigBanner->title }}
                    </h2>
                    <div class="flex mt-3">
                        <a href="{{ $bigBanner->link_href }}"
                            class="flex flex-row items-center gap-2 bg-(--color-primary) rounded-[10px] py-2 px-5 text-(--color-primary-text) font-bold">
                            <span>{{ $bigBanner->link_content }}</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 320 512">
                                <path fill="#fff"
                                    d="M47 239c-9.4 9.4-9.4 24.6 0 33.9L207 433c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9L97.9 256 241 113c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0L47 239z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- height problem -->

            <div class="w-full children xl:w-3/4">
                <div class="w-full flex flex-row justify-between items-center pb-3">
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
                    <div class="flex flex-row justify-end items-center gap-5 pb-3">
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

                <div class="flex flex-row items-stretch justify-start overflow-x-scroll gap-4 p-5" id="relatedProducts"
                    style="scrollbar-width: thin; scrollbar-color: var(--color-primary) var(--color-primary-text);">
                    @foreach ($products as $product)
                        <div
                            class="p-2 min-w-55 border border-(--color-border) rounded-[10px] relative flex flex-col justify-between productItem">
                            <div
                                class="absolute top-[5px] lg:top-2.5 left-[5px] lg:left-2.5 hidden md:flex flex-col gap-2 z-555 overflow-hidden">

                                <button
                                    class="size-8 border border-(--color-border) buttonProduct bg-white rounded-sm flex justify-center items-center -translate-x-4 opacity-0 cursor-pointer transition-all duration-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 448 512">
                                        <path fill="var(--color-fill)"
                                            d="M306.8 6.3C311.4 2.2 317.3 0 323.4 0c17.2 0 29.2 17.1 23.4 33.3L278.7 224H389c14.9 0 27 12.1 27 27c0 7.8-3.3 15.1-9.1 20.3L141.1 505.8c-4.5 4-10.4 6.2-16.5 6.2c-17.2 0-29.2-17.1-23.5-33.3L169.3 288H57.8C43.6 288 32 276.4 32 262.2c0-7.4 3.2-14.4 8.7-19.3L306.8 6.3zm.5 42.4L74.1 256H192c5.2 0 10.1 2.5 13.1 6.8s3.7 9.7 2 14.6L140.6 463.6 375.8 256H256c-5.2 0-10.1-2.5-13.1-6.8s-3.7-9.7-2-14.6l66.4-186z" />
                                    </svg>
                                </button>
                                {{-- <button
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
                                </button> --}}
                                <button
                                    class="size-8 border border-(--color-border) buttonProduct bg-white rounded-sm flex justify-center items-center -translate-x-4 opacity-0 cursor-pointer transition-all duration-500 delay-150">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 576 512">
                                        <path fill="var(--color-fill)"
                                            d="M117.2 136C160.3 96 217.6 64 288 64s127.7 32 170.8 72c43.1 40 71.9 88 85.2 120c-13.3 32-42.1 80-85.2 120c-43.1 40-100.4 72-170.8 72s-127.7-32-170.8-72C74.1 336 45.3 288 32 256c13.3-32 42.1-80 85.2-120zM288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM192 256a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zm224 0a128 128 0 1 0 -256 0 128 128 0 1 0 256 0z" />
                                    </svg>
                                </button>

                            </div>
                            <div
                                class="absolute top-[5px] lg:top-2.5 left-[5px] lg:left-2.5 md:hidden flex flex-col gap-2 z-555 overflow-hidden">

                                <button
                                    class="size-5 sm:size-7 border border-(--color-border) bg-white rounded-sm flex justify-center items-center cursor-pointer productAnimation">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-3 sm:size-4"
                                        viewBox="0 0 448 512">
                                        <path fill="var(--color-fill)"
                                            d="M306.8 6.3C311.4 2.2 317.3 0 323.4 0c17.2 0 29.2 17.1 23.4 33.3L278.7 224H389c14.9 0 27 12.1 27 27c0 7.8-3.3 15.1-9.1 20.3L141.1 505.8c-4.5 4-10.4 6.2-16.5 6.2c-17.2 0-29.2-17.1-23.5-33.3L169.3 288H57.8C43.6 288 32 276.4 32 262.2c0-7.4 3.2-14.4 8.7-19.3L306.8 6.3zm.5 42.4L74.1 256H192c5.2 0 10.1 2.5 13.1 6.8s3.7 9.7 2 14.6L140.6 463.6 375.8 256H256c-5.2 0-10.1-2.5-13.1-6.8s-3.7-9.7-2-14.6l66.4-186z" />
                                    </svg>
                                </button>
                                {{-- <button
                                    class="size-5 sm:size-7 border border-(--color-border) bg-white rounded-sm flex justify-center items-center cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-3 sm:size-4"
                                        viewBox="0 0 512 512">
                                        <path fill="var(--color-fill)"
                                            d="M244 130.6l-12-13.5-4.2-4.7c-26-29.2-65.3-42.8-103.8-35.8c-53.3 9.7-92 56.1-92 110.3v3.5c0 32.3 13.4 63.1 37.1 85.1L253 446.8c.8 .7 1.9 1.2 3 1.2s2.2-.4 3-1.2L443 275.5c23.6-22 37-52.8 37-85.1v-3.5c0-54.2-38.7-100.6-92-110.3c-38.5-7-77.8 6.6-103.8 35.8l-4.2 4.7-12 13.5c-3 3.4-7.4 5.4-12 5.4s-8.9-2-12-5.4zm34.9-57.1C311 48.4 352.7 37.7 393.7 45.1C462.2 57.6 512 117.3 512 186.9v3.5c0 36-13.1 70.6-36.6 97.5c-3.4 3.8-6.9 7.5-10.7 11l-184 171.3c-.8 .8-1.7 1.5-2.6 2.2c-6.3 4.9-14.1 7.5-22.1 7.5c-9.2 0-18-3.5-24.8-9.7L47.2 299c-3.8-3.5-7.3-7.2-10.7-11C13.1 261 0 226.4 0 190.4v-3.5C0 117.3 49.8 57.6 118.3 45.1c40.9-7.4 82.6 3.2 114.7 28.4c6.7 5.3 13 11.1 18.7 17.6l4.2 4.7 4.2-4.7c4.2-4.7 8.6-9.1 13.3-13.1c1.8-1.5 3.6-3 5.4-4.5z" />
                                    </svg>
                                </button>
                                <button
                                    class="size-5 sm:size-7 border border-(--color-border) bg-white rounded-sm flex justify-center items-center cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-3 sm:size-4"
                                        viewBox="0 0 448 512">
                                        <path fill="var(--color-fill)"
                                            d="M443.3 139.3c6.2-6.2 6.2-16.4 0-22.6l-96-96c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6L393.4 112 16 112c-8.8 0-16 7.2-16 16s7.2 16 16 16l377.4 0-68.7 68.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0l96-96zm-342.6 352c6.2 6.2 16.4 6.2 22.6 0s6.2-16.4 0-22.6L54.6 400 432 400c8.8 0 16-7.2 16-16s-7.2-16-16-16L54.6 368l68.7-68.7c6.2-6.2 6.2-16.4 0-22.6s-16.4-6.2-22.6 0l-96 96c-6.2 6.2-6.2 16.4 0 22.6l96 96z" />
                                    </svg>
                                </button> --}}
                                <button
                                    class="size-5 sm:size-7 border border-(--color-border) bg-white rounded-sm flex justify-center items-center cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-3 sm:size-4"
                                        viewBox="0 0 576 512">
                                        <path fill="var(--color-fill)"
                                            d="M117.2 136C160.3 96 217.6 64 288 64s127.7 32 170.8 72c43.1 40 71.9 88 85.2 120c-13.3 32-42.1 80-85.2 120c-43.1 40-100.4 72-170.8 72s-127.7-32-170.8-72C74.1 336 45.3 288 32 256c13.3-32 42.1-80 85.2-120zM288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM192 256a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zm224 0a128 128 0 1 0 -256 0 128 128 0 1 0 256 0z" />
                                    </svg>
                                </button>

                            </div>
                            {{-- <span
                                class="inline-block absolute top-[5px] lg:top-2.5 right-[5px] lg:right-2.5 py-[3px] px-2 bg-(--color-discount-bg) text-(--color-primary-text) rounded-full text-[8px] lg:text-[12px] text-center z-11">18%</span> --}}
                            <div>
                                <a href="{{ route('product-show', [$product]) }}"
                                    class="flex justify-center mb-1 overflow-hidden">
                                    <img src="{{ $product['img'] }}"
                                        class="w-full transition-all duration-500 hover:scale-[1.04] relative z-10 max-h-[276px] lg:max-h-[186px] md:max-h-[348px] xl:max-h-[171px]"
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
                                {{-- <div>
                                    <span
                                        class="lg:py-[3px] py-px px-0.5 lg:px-[5px] bg-(--color-secondary) text-(--color-primary-text) rounded-full text-[10px]">
                                        تستی
                                    </span>
                                </div> --}}
                            </div>
                            <div class="">
                                <div
                                    class="hidden lg:flex flex-row items-center gap-2 text-(--color-text) mb-3 text-[18px] font-bold">
                                    <span class="font-bold text-lg">{{ $product->price['price'] }}</span>
                                    <span class="text-sm">تومان</span>
                                </div>
                                <div class="flex lg:hidden flex-row items-start gap-2 text-(--color-text) mb-3 font-bold">
                                    <span class="font-bold text-lg">{{ $product->price['price'] }}</span>
                                    <span class="text-sm">تومان</span>
                                </div>
                            </div>
                            <div class="flex flex-col lg:flex-row gap-2 lg:gap-4">
                                <div class="w-full h-12">
                                    <button
                                        onclick="addToShoppingCart('{{ $product->id }}', '{{ $product->title }}', '{{ $product->description }}', '{{ $product['img'] }}', '{{ $product->price['price'] }}')"
                                        class="w-full h-full py-3 lg:py-1 text-[12px] lg:text-[14px] text-(--color-primary-text) bg-(--color-bg-card-btn) leading-5 rounded-[10px] cursor-pointer">افزودن
                                        به سبد خرید</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- related products -->

    <section class="text-(--color-text) pt-3">
        <div class="py-10">
            <div
                class="flex flex-col xl:flex-row items-stretch gap-5 rounded-[10px] bg-(--color-bg-contact-section) bg-[url({{ $footerTile['bg_img'] }})] bg-cover bg-no-repeat bg-center">
                <div class="w-full xl:w-1/2 px-[50px] pt-[60px] pb-[70px] flex flex-col justify-start gap-5">
                    <div>
                        <h2
                            class="text-(--color-primary-text) sm:text-3xl lg:text-[50px] 2xl:leading-[75px] font-bold mb-1">
                            {{ $footerTile['title'] }}
                        </h2>
                        <p class="text-(--color-primary-text) py-5">
                            {{ $footerTile['text'] }}
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
                    class="w-full xl:w-1/2 bg-[url({{ $footerTile['img'] }})] bg-cover bg-center bg-no-repeat rounded-l-[10px]">
                </div>
            </div>
        </div>
    </section>


@endsection
