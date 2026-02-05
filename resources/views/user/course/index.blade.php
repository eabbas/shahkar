@extends('app.document')
@section('title', 'شاهکار | دوره ها')
@section('content')
    <div class="w-full flex flex-col pb-4">
        <div class="bg-white rounded-lg">
            <h2 class="text-lg font-bold text-gray-800 p-4">لیست دوره های شاهکار</h2>
            {{-- <div class="flex flex-col gap-5">
                <div
                    class="w-11/12 lg:w-10/12 mx-auto shadow-md rounded mb-5 overflow-x-auto [&::-webkit-scrollbar]:hidden lg:overflow-visible">
                    <div
                        class="w-full flex flex-row lg:grid lg:grid-cols-9 items-center divide-x divide-[#f1f1f4] sticky -top-5">
                        <div class="px-1 lg:px-6 py-3 text-center text-xs font-medium text-gray-600 bg-gray-100">
                            <span class="block w-10 lg:w-full">ردیف</span>
                        </div>
                        <div class="px-1 lg:px-6 py-3 text-center text-xs font-medium text-gray-600 bg-gray-100">
                            <span class="block w-20 lg:w-full">تصویر</span>
                        </div>
                        <div class="px-1 lg:px-6 py-3 text-center text-xs font-medium text-gray-600 bg-gray-100 col-span-2">
                            <span class="block w-30 lg:w-full">عنوان</span>
                        </div>
                        <div class="px-1 lg:px-6 py-3 text-center text-xs font-medium text-gray-600 bg-gray-100 col-span-2">
                            <span class="block w-40 lg:w-full">خلاصه</span>
                        </div>
                        <div class="px-1 lg:px-6 py-3 text-center text-xs font-medium text-gray-600 bg-gray-100 col-span-2">
                            <span class="block w-30 lg:w-full">تعداد شرکت کنندگان</span>
                        </div>
                        <div class="px-1 lg:px-6 py-3 text-center text-xs font-medium text-gray-600 bg-gray-100">
                            <span class="block w-[90px] lg:w-full">عملیات</span>
                        </div>
                    </div>
                    <div class="bg-white divide-y divide-[#f1f1f4]">
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($courses as $course)
                            <div class="w-full flex flex-row lg:grid lg:grid-cols-9 items-center divide-x divide-[#f1f1f4]">
                                <div
                                    class="p-1 lg:p-3 text-xs lg:text-sm h-full flex items-center justify-center text-gray-900 text-center">
                                    <span class="block w-10 lg:w-full">{{ $i }}</span>
                                </div>
                                <div
                                    class="p-1 lg:p-3 text-xs lg:text-sm h-full flex items-center justify-center text-gray-900">
                                    <div class="w-20 lg:w-full">
                                        <img class="max-w-[50px] max-h-[50px] mx-auto size-12 object-cover rounded-md"
                                            src={{ asset('storage/' . $course->img) }}>
                                    </div>
                                </div>
                                <div
                                    class="p-1 lg:p-3 text-xs lg:text-sm h-full flex items-center justify-center text-gray-900 text-center col-span-2">
                                    <span class="block w-30 lg:w-full">{{ $course->title }}</span>
                                </div>
                                <div
                                    class="p-1 lg:p-3 text-xs lg:text-sm h-full flex items-center justify-center text-gray-900 text-center col-span-2">
                                    <span class="block w-40 lg:w-full truncate">{{ $course->summary }}</span>
                                </div>
                                <div
                                    class="p-1 lg:p-3 text-xs lg:text-sm h-full flex items-center justify-center text-gray-900 text-center col-span-2">
                                    <span class="block w-30 lg:w-full">{{ count($course->users) }}</span>
                                </div>
                                <div>
                                    <ul class="w-[90px] lg:w-full text-sm mt-1 rounded-sm p-1">
                                        <li class="flex justify-center">
                                            <a href="{{ route('course.show', [$course]) }}"
                                                class="w-fit flex flex-row items-center justify-center bg-sky-500 hover:bg-sky-600 p-1 rounded-sm"
                                                title="مشاهده">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="size-4"
                                                    viewBox="0 0 576 512">
                                                    <path fill="white"
                                                        d="M288 80c-65.2 0-118.8 29.6-159.9 67.7C89.6 183.5 63 226 49.4 256c13.6 30 40.2 72.5 78.6 108.3C169.2 402.4 222.8 432 288 432s118.8-29.6 159.9-67.7C486.4 328.5 513 286 526.6 256c-13.6-30-40.2-72.5-78.6-108.3C406.8 109.6 353.2 80 288 80zM95.4 112.6C142.5 68.8 207.2 32 288 32s145.5 36.8 192.6 80.6c46.8 43.5 78.1 95.4 93 131.1c3.3 7.9 3.3 16.7 0 24.6c-14.9 35.7-46.2 87.7-93 131.1C433.5 443.2 368.8 480 288 480s-145.5-36.8-192.6-80.6C48.6 356 17.3 304 2.5 268.3c-3.3-7.9-3.3-16.7 0-24.6C17.3 208 48.6 156 95.4 112.6zM288 336c44.2 0 80-35.8 80-80s-35.8-80-80-80c-.7 0-1.3 0-2 0c1.3 5.1 2 10.5 2 16c0 35.3-28.7 64-64 64c-5.5 0-10.9-.7-16-2c0 .7 0 1.3 0 2c0 44.2 35.8 80 80 80zm0-208a128 128 0 1 1 0 256 128 128 0 1 1 0-256z" />
                                                </svg>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            @php
                                $i++;
                            @endphp
                        @endforeach
                    </div>
                </div>
            </div> --}}
            <div class="w-full grid grid-cols-1 lg:grid-cols-3 gap-5">
                @foreach ($courses as $course)
                    <div class="w-full flex flex-col overflow-hidden">
                        <a href="{{ route('course.show', [$course]) }}" class="relative w-full h-[252px]">
                            <span class="absolute top-3 right-5 px-3 py-0.5 text-xs bg-white text-gray-500 rounded-t-full rounded-bl-full">{{ $course->statuses->title }}</span>
                            <img class="size-full object-cover rounded-lg" src="{{ asset('storage/' . $course->img) }}" alt="{{ $course->title }}">
                        </a>
                        <div class="w-full flex flex-col p-4 gap-3">
                            <a href="{{ route('course.show', [$course]) }}">
                                <p class="text-sm font-bold text-justify text-gray-800">{{ $course->title }}</p>
                            </a>
                            <div>
                                <span class="text-xs text-justify font-light text-gray-400">{{ $course->categories->title }}</span>
                            </div>
                            <div class="w-full flex flex-row justify-between items-center">
                                <div class="text-sm text-(--color-primary) font-bold">{{ $course->price }} تومان</div>
                                <div class="flex flex-row justify-end items-center gap-3">
                                    <span class="text-xs text-gray-500">{{ count($course->users) }}</span>
                                    <svg class="size-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                        <path fill="var(--color-fill)" d="M96 80a48 48 0 1 1 96 0A48 48 0 1 1 96 80zm128 0A80 80 0 1 0 64 80a80 80 0 1 0 160 0zm96 80a64 64 0 1 1 0 128 64 64 0 1 1 0-128zm0 160a96 96 0 1 0 0-192 96 96 0 1 0 0 192zm-58.7 64H378.7c54.2 0 98.4 42.5 101.2 96H160.1c2.8-53.5 47-96 101.2-96zm0-32C187.7 352 128 411.7 128 485.3c0 14.7 11.9 26.7 26.7 26.7H485.3c14.7 0 26.7-11.9 26.7-26.7C512 411.7 452.3 352 378.7 352H261.3zM512 32a48 48 0 1 1 0 96 48 48 0 1 1 0-96zm0 128A80 80 0 1 0 512 0a80 80 0 1 0 0 160zm16 64c44.2 0 80 35.8 80 80c0 8.8 7.2 16 16 16s16-7.2 16-16c0-61.9-50.1-112-112-112H444c2.6 10.2 4 21 4 32h80zm-336 0c0-11 1.4-21.8 4-32H112C50.1 192 0 242.1 0 304c0 8.8 7.2 16 16 16s16-7.2 16-16c0-44.2 35.8-80 80-80h80z"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="w-full flex flex-row items-center justify-between gap-5">
                                <div class="lg:w-3/4 w-full">
                                    <a href="{{ route('course.show', [$course]) }}" class="block text-xs text-center font-bold bg-(--color-primary) rounded-md py-2.5 text-white">ثبت نام در دوره</a>
                                </div>
                                <div class="w-1/4 lg:grid grid-cols-2 gap-3 hidden">
                                    <a href="#" class="flex justify-center items-center" title="مشاهده سریع">
                                        <svg class="size-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path fill="var(--color-fill)" d="M384 208A176 176 0 1 0 32 208a176 176 0 1 0 352 0zM343.3 366C307 397.2 259.7 416 208 416C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208c0 51.7-18.8 99-50 135.3L507.3 484.7c6.2 6.2 6.2 16.4 0 22.6s-16.4 6.2-22.6 0L343.3 366z"/>
                                        </svg>
                                    </a>
                                    <a href="#" class="flex justify-center items-center">
                                        <svg class="size-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path fill="var(--color-fill)" d="M244 130.6l-12-13.5-4.2-4.7c-26-29.2-65.3-42.8-103.8-35.8c-53.3 9.7-92 56.1-92 110.3v3.5c0 32.3 13.4 63.1 37.1 85.1L253 446.8c.8 .7 1.9 1.2 3 1.2s2.2-.4 3-1.2L443 275.5c23.6-22 37-52.8 37-85.1v-3.5c0-54.2-38.7-100.6-92-110.3c-38.5-7-77.8 6.6-103.8 35.8l-4.2 4.7-12 13.5c-3 3.4-7.4 5.4-12 5.4s-8.9-2-12-5.4zm34.9-57.1C311 48.4 352.7 37.7 393.7 45.1C462.2 57.6 512 117.3 512 186.9v3.5c0 36-13.1 70.6-36.6 97.5c-3.4 3.8-6.9 7.5-10.7 11l-184 171.3c-.8 .8-1.7 1.5-2.6 2.2c-6.3 4.9-14.1 7.5-22.1 7.5c-9.2 0-18-3.5-24.8-9.7L47.2 299c-3.8-3.5-7.3-7.2-10.7-11C13.1 261 0 226.4 0 190.4v-3.5C0 117.3 49.8 57.6 118.3 45.1c40.9-7.4 82.6 3.2 114.7 28.4c6.7 5.3 13 11.1 18.7 17.6l4.2 4.7 4.2-4.7c4.2-4.7 8.6-9.1 13.3-13.1c1.8-1.5 3.6-3 5.4-4.5z"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
