
    @extends('app.document')
    @section('title', 'شاهکار | دوره ها')
    @section('content')
        {{-- <h1>لیست دوره‌ها</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>عنوان</th>
                    <th>توضیحات</th>
                    <th>خلاصه</th>
                    <td>تعداد شرکت کننده </td>
                    <th>نمایش در صفحه اصلی</th>
                    <th>عملیات</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $course)
                    <tr>
                        <td>{{ $course->id }}</td>
                        <td>{{ $course->title }}</td>
                        <td>{{ $course->description }}</td>
                        <td>{{ $course->summary }}</td>
                        <td> {{ count($course->users) }}</td>

                        <td>
                            @if ($course->show_in_home)
                                <span class="status-yes">✔ در صفحه اول وجود دارد</span>
                            @else
                                <span class="status-no">✘ مربوط به صفحه اول نیست</span>
                            @endif
                        </td>
                        @php
                            $roles = auth()->user()?->roles->pluck('id')->toArray();
                        @endphp
                        <td class="actions">
                            <a href="{{ route('course.show', [$course]) }}">نمایش</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table> --}}


            <div class="w-full flex flex-col pb-4">
        <div class="bg-white rounded-lg">
            <h2 class="text-lg font-bold text-gray-800 p-4 text-center">لیست دوره های شاهکار</h2>
            <div class="flex flex-col gap-5">
                
                
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
                                            src={{ asset('storage/'.$course->img) }}>
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
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/checkAll.js') }}"></script>
    @endsection
