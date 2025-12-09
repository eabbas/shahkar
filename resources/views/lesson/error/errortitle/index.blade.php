<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لیست عناوین</title>

    <style>
        body {
            font-family: sans-serif;
            background: #f5f6fa;
            margin: 0;
            padding: 20px;
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
            font-size: 24px;
        }

        .top-bar {
            display: flex;
            justify-content: flex-end;
            margin-bottom: 15px;
        }

        .add-btn {
            background: #28a745;
            padding: 10px 16px;
            color: #fff;
            font-size: 14px;
            border-radius: 8px;
            text-decoration: none;
        }

        table {
            width: 100%;
            background: #fff;
            border-collapse: collapse;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }

        table th, table td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #eee;
        }

        table th {
            background: #f0f0f0;
        }

        .action-btn {
            padding: 6px 12px;
            border-radius: 6px;
            color: #fff;
            text-decoration: none;
            font-size: 13px;
            margin: 0 3px;
        }

        .edit-btn {
            background: #007bff;
        }

        .delete-btn {
            background: #dc3545;
        }
    </style>
</head>
<body>

    <h2>لیست عناوین</h2>

    <div class="top-bar">
        <a href="{{route('errortitle_create')}}" class="add-btn">➕ افزودن عنوان جدید</a>
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

        @foreach($errortitles as $key => $item)
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

</body>
</html>
