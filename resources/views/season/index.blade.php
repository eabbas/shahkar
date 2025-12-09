<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لیست فصل‌ها</title>
    <style>
        body { font-family: sans-serif; background: #f5f5f5; padding: 20px; }
        table { width: 90%; margin: auto; border-collapse: collapse; background: white; border-radius: 10px; overflow: hidden; }
        th, td { padding: 12px; border: 1px solid #ddd; text-align: center; }
        th { background: #03A9F4; color: white; }
        a { margin: 0 5px; text-decoration: none; color: #007bff; }
        a:hover { text-decoration: underline; }
        button.delete-btn { background: red; color: white; border: none; padding: 5px 10px; border-radius: 5px; cursor: pointer; }
    </style>
</head>
<body>

<h2 style="text-align:center; margin-bottom:20px;">لیست فصل‌های {{$course -> title}}</h2>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>عنوان</th>
            <th>توضیحات</th>
            <th>قیمت</th>
            <th>رایگان</th>
            <th>ترتیب</th>
            <th>دوره والد</th>
            <th>عملیات</th>
        </tr>
    </thead>
    <tbody>
        @php 
          
        @endphp
        @foreach($seasons as $season)
        <tr>
            <td>{{ $season->id }}</td>
            <td>{{ $season->title }}</td>
            <td>{{ $season->description }}</td>
            <td>{{ $season->price }}</td>
            <td>{{ $season->free ? 'بله' : 'خیر' }}</td>
            <td>{{ $season->order }}</td>
            <td>{{ $season->course ? $season->course->title : '-' }}</td>
            <td>
                <a href="{{ route('season.show', [$season]) }}">نمایش</a>
                <a href="{{ route('season.edit', [$season]) }}">ویرایش</a>
                <a href="{{ route('season.delete', [$season]) }}">حذف</a>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>
