<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لیست عناوین</title>


</head>

<body>
    @extends('admin.app.dashboard')
    @section('content')
        <h2>لیست عناوین</h2>

        <div class="top-bar">
            <a href="{{ route('errortitle_create') }}" class="add-btn">➕ افزودن عنوان جدید</a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>ردیف</th>
                    <th>عنوان</th>
                    <th>عملیات</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($errortitles as $key => $item)
                    <tr style="border-bottom:1px solid #eee;">
                        <td style="padding:12px;">{{ $key + 1 }}</td>
                        <td style="padding:12px;">{{ $item->title }}</td>
                        <td style="padding:12px;">
                            <a href="{{ route('errortitle_edit', $item->id) }}"
                                style="background:#007bff; padding:6px 12px; border-radius:6px; color:#fff; text-decoration:none;">
                                ویرایش
                            </a>

                            <a href="{{ route('errortitle_delete', $item->id) }}"
                                style="background:#dc3545; padding:6px 12px; border-radius:6px; color:#fff; text-decoration:none;">
                                حذف
                            </a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    @endsection
</body>

</html>
