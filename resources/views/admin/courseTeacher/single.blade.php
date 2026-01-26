<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Details</title>

    <style>
        body {
            font-family: sans-serif;
            background: #f5f5f5;
            direction: rtl;
        }

        table {
            width: 80%;
            margin: 40px auto;
            border-collapse: collapse;
            background: white;
            border-radius: 10px;
            overflow: hidden;
        }

        th {
            background: #03A9F4;
            padding: 14px;
            color: white;
            font-size: 16px;
        }

        td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: center;
            font-size: 15px;
        }

        .avatar {
            width: 90px;
            height: 90px;
            border-radius: 10px;
            object-fit: cover;
            border: 2px solid #03A9F4;
        }

        .social-link {
            color: #007bff;
            font-weight: bold;
            text-decoration: none;
            display: block;
            margin: 3px 0;
        }

        .social-link:hover {
            text-decoration: underline;
        }

        .no-image {
            color: #999;
            font-size: 14px;
        }
    </style>
</head>

<body>
    @extends('admin.app.dashboard')
    @section('content')
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>نام</th>
                    <th>تخصص</th>
                    <th>شماره تماس</th>
                    <th>بیو</th>
                    <th>شبکه‌های اجتماعی</th>
                    <th>عکس</th>
                </tr>
            </thead>

            <tbody>

                <tr>
                    <td>{{ $teacher->id }}</td>

                    <td>{{ $teacher->name }}</td>

                    <td>{{ $teacher->expertise }}</td>

                    <td>{{ $teacher->phone }}</td>

                    <td>{{ $teacher->bio }}</td>

                    <!-- شبکه‌های اجتماعی -->
                    <td>
                        @if ($teacher->social_media)
                            @php $socials = json_decode($teacher->social_media, true); @endphp

                            @foreach ($socials as $key => $link)
                                <a href="{{ $link }}" target="_blank" class="social-link">
                                    {{ ucfirst($key) }}
                                </a>
                            @endforeach
                        @else
                            <span>—</span>
                        @endif
                    </td>

                    <!-- عکس -->
                    <td>
                        @if ($teacher->profile_img && File::exists(public_path('storage/' . $teacher->profile_img)))
                            <img src="{{ asset('storage/' . $teacher->profile_img) }}" class="avatar">
                        @else
                            <span class="no-image">عکس موجود نیست</span>
                        @endif
                    </td>
                </tr>

            </tbody>
        </table>
    @endsection
</body>

</html>
