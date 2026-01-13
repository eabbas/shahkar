<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>

    <style>
        body {
            font-family: sans-serif;
            background: #f2f4f8;
            margin: 0;
            padding: 30px;
        }

        h1 {
            text-align: center;
            direction: rtl;
            margin-bottom: 25px;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
        }

        thead {
            background: salmon;
            color: white;
            font-size: 17px;
        }

        th,
        td {
            padding: 14px 12px;
            border-bottom: 1px solid #eee;
            text-align: center;
            direction: rtl;
        }

        tr:hover {
            background: #f8f8f8;
        }

        .actions a {
            background: #0ea5e9;
            padding: 6px 12px;
            margin: 0 4px;
            border-radius: 6px;
            color: white;
            text-decoration: none;
            font-size: 14px;
        }

        .actions a:hover {
            background: #0284c7;
        }

        .delete-btn {
            background: #ef4444 !important;
        }

        .delete-btn:hover {
            background: #dc2626 !important;
        }

        .status-yes {
            color: #16a34a;
            font-weight: bold;
        }

        .status-no {
            color: #ef4444;
            font-weight: bold;
        }

        @media (max-width: 768px) {
            table {
                font-size: 13px;
            }

            .actions a {
                padding: 4px 8px;
                font-size: 12px;
            }
        }
    </style>

</head>

<body>
    @extends('app.document')
    @section('title', 'دوره ها')
    @section('content')
        <h1>لیست دوره‌ها</h1>
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
                            $roles = auth()->user()->roles->pluck('id')->toArray();
                        @endphp
                        <td class="actions">
                            <a href="{{ route('course.show', [$course]) }}">نمایش</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endsection
</body>

</html>
