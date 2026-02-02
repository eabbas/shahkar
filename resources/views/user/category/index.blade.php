@extends('app.document')
@section('title', 'دسته بندی ها')
@section('content')
    {{-- <div>
        <h2> لیست دسته بندی ها</h2>
        <table border="1" style="border-collapse: collapse;">
            <thead>
                <tr>
                    <th>آیدی</th>
                    <th>عنوان دسته بندی</th>
                    <th>توضیحات دسته بندی</th>
                    <th>دسته بندی فرزند</th>
                    <th>تصویر</th>
                    <th>عملیات</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->title }}</td>
                        <td>{{ $category->description }}</td>
                        <td>
                            @if ($category->children)
                                @foreach ($category->children as $child)
                                    {{ $child->title }}
                                    <br>
                                @endforeach
                            @endif
                        </td>
                        <td>{{ $category->image }}</td>
                        <td>
                            <a href="{{ route('category-show', [$category]) }}">نمایش</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div> --}}

    {{-- <div class="w-full flex flex-col pb-4">
        <div class="bg-white rounded-lg">

            <h2 class="text-lg font-bold text-gray-800 p-4 text-center">لیست دسته بندی ها</h2>

            <div class="flex flex-col gap-5">

                <div
                    class="w-full shadow-md rounded mb-5 overflow-x-auto [&::-webkit-scrollbar]:hidden lg:overflow-visible">
                    <div
                        class="w-full flex flex-row lg:grid lg:grid-cols-6 items-center divide-x divide-[#f1f1f4] sticky -top-5">

                        <div class="px-1 lg:px-6 py-3 text-center text-xs font-medium text-gray-600 bg-gray-100">
                            <span class="block w-10 lg:w-full text-center">ردیف</span>
                        </div>
                        <div class="px-1 lg:px-6 py-3 text-center text-xs font-medium text-gray-600 bg-gray-100 col-span-2">
                            <span class="block w-20 lg:w-full">تصویر</span>
                        </div>
                        <div class="px-1 lg:px-6 py-3 text-center text-xs font-medium text-gray-600 bg-gray-100 col-span-2">
                            <span class="block w-20 lg:w-full">عنوان</span>
                        </div>
                        <div class="px-1 lg:px-6 py-3 text-center text-xs font-medium text-gray-600 bg-gray-100">
                            <span class="block w-20 lg:w-full">عملیات</span>
                        </div>

                    </div>
                    <div class="bg-white divide-y divide-[#f1f1f4]">
                        @php
                            $i = 1;
                        @endphp

                        @foreach ($categories as $category)
                            @if ($category)
                                <div
                                    class="w-full flex flex-row lg:grid lg:grid-cols-6 items-center divide-x divide-[#f1f1f4]">
                                    <div
                                        class="p-1 lg:p-3 text-xs lg:text-sm h-full flex items-center justify-center text-gray-900 text-center">
                                        <span class="block w-10 lg:w-full">{{ $i }}</span>
                                    </div>
                                    <div
                                        class="p-1 lg:p-3 text-xs lg:text-sm h-full flex items-center justify-center text-gray-900 col-span-2">
                                        <div class="w-20 lg:w-full">
                                            <img class="w-20 max-h-20 xl:w-40 xl:max-h-40 mx-auto object-fit"
                                                src="{{ asset( $category->image) }}">
                                        </div>
                                    </div>
                                    <div
                                        class="p-1 lg:p-3 text-xs lg:text-sm h-full flex items-center justify-center text-gray-900 text-center col-span-2">
                                        <span class="block w-20 lg:w-full">{{ $category->title }}</span>
                                    </div>
                                    <div
                                        class="p-1 lg:p-3 text-xs lg:text-sm h-full flex items-center justify-center text-gray-900 text-center">
                                        <div class="w-20 lg:w-full flex flex-row justify-center items-center">
                                            <a href="{{ route('category-show', [$category]) }}"
                                                class="w-fit flex flex-row items-center justify-center bg-sky-500 hover:bg-sky-600 p-1 rounded-sm"
                                                title="مشاهده">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 576 512">
                                                    <path fill="white"
                                                        d="M288 80c-65.2 0-118.8 29.6-159.9 67.7C89.6 183.5 63 226 49.4 256c13.6 30 40.2 72.5 78.6 108.3C169.2 402.4 222.8 432 288 432s118.8-29.6 159.9-67.7C486.4 328.5 513 286 526.6 256c-13.6-30-40.2-72.5-78.6-108.3C406.8 109.6 353.2 80 288 80zM95.4 112.6C142.5 68.8 207.2 32 288 32s145.5 36.8 192.6 80.6c46.8 43.5 78.1 95.4 93 131.1c3.3 7.9 3.3 16.7 0 24.6c-14.9 35.7-46.2 87.7-93 131.1C433.5 443.2 368.8 480 288 480s-145.5-36.8-192.6-80.6C48.6 356 17.3 304 2.5 268.3c-3.3-7.9-3.3-16.7 0-24.6C17.3 208 48.6 156 95.4 112.6zM288 336c44.2 0 80-35.8 80-80s-35.8-80-80-80c-.7 0-1.3 0-2 0c1.3 5.1 2 10.5 2 16c0 35.3-28.7 64-64 64c-5.5 0-10.9-.7-16-2c0 .7 0 1.3 0 2c0 44.2 35.8 80 80 80zm0-208a128 128 0 1 1 0 256 128 128 0 1 1 0-256z" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>



                                </div>
                            @else
                                <div>
                                    <div class="px-1 lg:px-6 py-4 text-center text-xs lg:text-sm text-gray-500">
                                        هیچ اطلاعاتی یافت نشد
                                    </div>
                                </div>
                            @endif
                            @php
                                $i++;
                            @endphp
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div> --}}

     <div class="grid grid-cols-2 mx:grid-cols-3 lg:grid-cols-5 xl:grid-cols-7 items-center gap-5 p-5">
            @foreach ($categories as $category)
                @if ($category->title == 'تخفیفات ویژه')
                    @php
                        $cat = $category;
                    @endphp
                @endif
                <div class="p-2 xl:p-4 border border-(--color-border) rounded-[10px]">
                    <a href="{{ route('category-show', [$category]) }}" class="block mb-1 w-full" target="_blank">
                        <img src="{{ asset($category->image) }}" class="w-[115px] max-h-20 mx-auto" alt="">
                        <span class="inline-block w-full text-center pt-2">{{ $category->title }}</span>
                    </a>
                    <span
                        class="block text-center text-[10px] text-(--color-secondary-text) max-h-[42px] h-[42px]">{{ $category->description }}</span>
                </div>
            @endforeach
        </div>
@endsection
