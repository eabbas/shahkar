<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teachers</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background-color: #f9f9f9;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
        }

        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
            font-size: 14px;
        }

        th {
            background-color: salmon;
            color: #fff;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        img {
            width: 50px;
            height: 50px;
            object-fit: cover;
            border-radius: 5px;
        }

        a {
            text-decoration: none;
            color: #007bff;
            margin: 0 5px;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <h2 style="text-align:center; margin-bottom:20px;">لیست اساتید</h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Expertise</th>
                <th>Phone</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($teachers as $teacher)
            <tr>
                <td>{{ $teacher->id }}</td>
                <td>{{ $teacher->name }}</td>
                <td>{{ $teacher->expertise }}</td>
                <td>{{ $teacher->phone }}</td>
                <td>
                    @if($teacher->img)
                        <img src="{{ asset('storage/' . $teacher->img) }}" alt="{{ $teacher->name }}">
                    @else
                        —
                    @endif
                </td>
                <td>
                    <a href="{{ route('teacher.show', [$teacher]) }}">نمایش</a>
                    <a href="{{ route('teacher.edit', [$teacher]) }}">ویرایش</a>
                    <a href="{{ route('teacher.delete', [$teacher]) }}">حذف</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
