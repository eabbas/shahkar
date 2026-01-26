<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Info</title>
    <style>
        body {
            font-family: sans-serif;
            background: #f5f5f5;
            padding: 20px;
            direction: rtl;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        }

        thead {
            background: #2563eb;
            color: white;
        }

        th,
        td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #eee;
        }

        tr:hover {
            background: #f9fafb;
        }

        img.thumb {
            width: 70px;
            height: 70px;
            object-fit: cover;
            border-radius: 8px;
            border: 1px solid #ddd;
        }

        .btn {
            display: inline-block;
            padding: 8px 14px;
            border-radius: 6px;
            text-decoration: none;
            font-size: 14px;
            margin: 3px;
            color: white;
            transition: 0.2s;
        }

        .btn-edit {
            background: #0ea5e9;
        }

        .btn-edit:hover {
            background: #0284c7;
        }

        .btn-register {
            background: #22c55e;
        }

        .btn-register:hover {
            background: #16a34a;
        }

        .teachers-box span {
            background: #e2e8f0;
            padding: 4px 8px;
            margin: 2px;
            border-radius: 6px;
            display: inline-block;
            font-size: 12px;
        }

        .tag-yes {
            color: #16a34a;
            font-weight: bold;
        }

        .tag-no {
            color: #dc2626;
            font-weight: bold;
        }
    </style>
</head>

<body>
    @extends('app.document')
    @section('title', 'دوره')
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
</body>

</html>
