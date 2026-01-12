
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>userCourses</title>

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
            box-shadow: 0 4px 10px rgba(0,0,0,0.08);
        }

        thead {
            background: salmon;
            color: white;
            font-size: 17px;
        }

        th, td {
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
<table>
    <thead>
        <tr>
            <th>نام دوره</th>
            <th>لینک جزئیات دوره</th>
            <th>پیشرفت</th>
            <th>وضعیت</th>
            <th>عملیات</th>
        </tr>
    </thead>
    <tbody>
        @php
            $roles = auth()->user()->roles->pluck('id')->toArray();
        @endphp
        @foreach($userCourses['user_courses'] as $course)
        <tr>
            <td>{{ $course['course']['title'] ?? '-' }}</td>
            <td>
                <a href="{{ route('course.show', [$course['course']['id'] ?? 0]) }}">
                    مشاهده جزئیات
                </a>
            </td>
            <td>{{ $course['progress'] }}%</td>
            <td>{{ $course['status'] == 1 ? 'فعال' : 'غیرفعال' }}</td>
            <td class="actions">
                @if(in_array(1, $roles) || in_array(2, $roles)) 
                    <a href="{{ route('userCourse.edit',  [$course['id']]) }}" class="btn btn-edit">
                        ✏️ ویرایش دوره کاربر
                    </a>
                    <a href="{{ route('userCourse.delete', [$course['id']]) }}" class="btn btn-edit">
                        ✏️ حذف دوره کاربر
                    </a>
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
