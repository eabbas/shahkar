<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>item</title>
</head>

<body>
    @extends('admin.app.dashboard')
    @section('content')
        <table border="1" style="border-collapse: collapse;">
            <thead>
                <tr>
                    <th>آیدی</th>
                    <th>عنوان</th>
                    <th>توضیحات</th>
                    <th>لینک</th>
                    <th>آیکون</th>
                    <th>تصویر</th>
                    <th>اولویت</th>
                    <th>نوع فعالیت</th>
                    <th>والد</th>
                    <th>عملیات</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->description }}</td>
                        <td>{{ $item->link }}</td>
                        <td>{{ $item->icon }}</td>
                        <td>{{ $item->image }}</td>
                        <td>{{ $item->priority }}</td>
                        <td>
                            @if ($item->active == 0)
                                غیر فعال
                                @endif @if ($item->active == 1)
                                    فعال
                                @endif
                        </td>
                        <td>
                            @if (!$item->parent)
                                بدون والد
                            @else
                                {{ $item->parent->title }}
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('menu-show', [$item]) }}">show</a>
                            <a href="{{ route('menu-edit', [$item]) }}">edit</a>
                            <a href="{{ route('menu-delete', [$item]) }}">delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endsection
</body>

</html>
