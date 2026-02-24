
    @extends('app.document')
    @section('title')
        شاهکار | {{ $course->title }}
    @endsection
    @section('content')
        {{-- <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>عنوان</th>
                    <th>توضیحات</th>
                    <th>خلاصه</th>
                    <th>قیمت</th>
                    <th>تخفیف</th>
                    <th>مدت</th>
                    <th>پیشرفت</th>
                    <th>مدرس‌ها</th>
                    <th>صفحه اصلی</th>
                    <th>رایگان</th>
                    <th>عکس</th>
                    <th>ویدیو</th>
                    <th>دسته‌بندی</th>
                    <th>سطح</th>
                    <th>وضعیت</th>
                    <th>عملیات</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>{{ $course->id }}</td>
                    <td>{{ $course->title }}</td>
                    <td>{{ $course->description }}</td>
                    <td>{{ $course->summary }}</td>
                    <td>{{ $course->price }}</td>
                    <td>{{ $course->discount }}</td>
                    <td>{{ $course->duration }}</td>
                    <td>{{ $course->progress }}</td>

                    <td class="teachers-box">
                        @foreach ($course->teachers as $teacher)
                            <span>{{ $teacher->name }}</span>
                        @endforeach
                    </td>

                    <td>
                        @if ($course->show_in_home)
                            <span class="tag-yes">✔ نمایش</span>
                        @else
                            <span class="tag-no">✘ مخفی</span>
                        @endif
                    </td>

                    <td>
                        @if ($course->free)
                            <span class="tag-yes">رایگان</span>
                        @else
                            <span class="tag-no">غیررایگان</span>
                        @endif
                    </td>

                    <td>
                        <img src="{{ asset('storage/' . $course->img) }}" class="thumb">
                    </td>

                    <td>
                        <img src="{{ asset('storage/' . $course->video) }}" class="thumb">
                    </td>

                    <td>
                        @if ($cat_course)
                            {{ $cat_course->title }}
                        @else
                            <span class="tag-no">ندارد</span>
                        @endif
                    </td>

                    <td>
                        @if ($levels)
                            {{ $levels->title }}
                        @endif
                    </td>

                    <td>
                        @if ($statuses)
                            {{ $statuses->title }}
                        @endif
                    </td>

                    @php
                        $userCourse = [];
                        if (auth()->user()) {
                            $roles = auth()->user()->roles->pluck('id')->toArray();
                            $userCourse = auth()->user()->courses->pluck('id')->toArray();
                        }
                    @endphp
                    @if (!in_array($course->id, $userCourse))
                        <a href="{{ route('userCourse.store', [$course->id]) }}" class="btn btn-register">
                            🎓 ثبت‌نام
                        </a>
                    @else
                        <P class="btn btn-register">شما شرکت کردین</P>
                    @endif

                    <a href="{{ route('course.seasons', [$course]) }}" class="btn btn-edit">
                        فصل ها
                    </a>

                    </td>

                </tr>
            </tbody>
        </table> --}}
        <div class="w-full flex flex-row items-center gap-3">
            <a href="{{ route('home') }}" class="text-sm text-gray-400">خانه</a>
            <span class="text-sm text-gray-400">/</span>
            <a href="{{ route('home') }}" class="text-sm text-gray-400">{{ $cat_course->title }}</a>
            <span class="text-sm text-gray-400">/</span>
            <a href="{{ route('home') }}" class="text-sm text-gray-800 font-bold">{{ $course->title }}</a>
        </div>
        <div class="w-full grid grid-cols-2 gap-8 mt-6">
            <div class="w-full flex flex-col gap-5">
                <h1 class="text-3xl font-bold text-gray-800">{{ $course->title }}</h1>
                <div class="flex flex-col gap-2">
                    <svg class="size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path fill="var(--color-fill)" d="M226.5 168.8L287.9 42.3l61.4 126.5c4.6 9.5 13.6 16.1 24.1 17.7l137.4 20.3-99.8 98.8c-7.4 7.3-10.8 17.8-9 28.1l23.5 139.5L303 407.7c-9.4-5-20.7-5-30.2 0L150.2 473.2l23.5-139.5c1.7-10.3-1.6-20.7-9-28.1L65 206.8l137.4-20.3c10.5-1.5 19.5-8.2 24.1-17.7zM424.9 509.1c8.1 4.3 17.9 3.7 25.3-1.7s11.2-14.5 9.7-23.5L433.6 328.4 544.8 218.2c6.5-6.4 8.7-15.9 5.9-24.5s-10.3-14.9-19.3-16.3L378.1 154.8 309.5 13.5C305.5 5.2 297.1 0 287.9 0s-17.6 5.2-21.6 13.5L197.7 154.8 44.5 177.5c-9 1.3-16.5 7.6-19.3 16.3s-.5 18.1 5.9 24.5L142.2 328.4 116 483.9c-1.5 9 2.2 18.1 9.7 23.5s17.3 6 25.3 1.7l137-73.2 137 73.2z"/>
                    </svg>
                    <span class="text-gray-400 text-sm">از 0 رای</span>
                </div>
                <p class="w-full truncate text-justify text-sm text-gray-800">{{ $course->summary }}</p>
                <div class="flex flex-row justify-between items-center">
                    <div class="w-1/3">
                        <a href="#" class="block w-full text-center py-3 rounded-lg bg-(--color-primary) text-(--color-primary-text)">ثبت نام در دوره</a>
                    </div>
                    <div class="text-(--color-text)">
                        <span class="text-xl font-bold">{{ number_format($course->price) }}</span>
                        <span class="text-xl font-bold">تومان</span>
                    </div>
                </div>
            </div>
            <div class="w-full relative">
                <span class=""></span>
                <img src="{{ asset('storage/' . $course->img) }}" class="w-[600px] max-h-[387px] rounded-lg" alt="">
            </div>
        </div>
    @endsection

