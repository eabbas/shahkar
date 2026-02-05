
    @extends('app.document')
    @section('title')
        شاهکار | {{ $course->title }}
    @endsection
    @section('content')
        <table>
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
        </table>
    @endsection

