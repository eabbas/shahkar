<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>جزئیات فصل</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 py-10">
    @extends('admin.app.dashboard')
    @section('content')
        @php
            $roles = auth()->user()->roles->pluck('id')->toArray();
        @endphp
        <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-2xl overflow-hidden">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-teal-500">
                    <tr>
                        <th class="px-6 py-3 text-left text-black font-medium">عنوان</th>
                        <th class="px-6 py-3 text-left text-black font-medium">توضیحات</th>
                        <th class="px-6 py-3 text-left text-black font-medium">قیمت</th>
                        <th class="px-6 py-3 text-left text-black font-medium">دوره مربوطه</th>
                        <th class="px-6 py-3 text-left text-black font-medium">رایگان</th>
                        @if (in_array(1, $roles) || in_array(2, $roles))
                            <th class="px-6 py-3 text-left text-black font-medium"> ایجاد درس </th>
                        @endif
                        <th class="px-6 py-3 text-left text-yellow font-medium"> نمایش درس ها</th>
                        <th class="px-6 py-3 text-left text-yellow font-medium"> تعداد درس ها</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr class="hover:bg-gray-100 transition">
                        <td class="px-6 py-4">{{ $season->title }}</td>
                        <td class="px-6 py-4">{{ $season->description }}</td>
                        <td class="px-6 py-4">{{ $season->price }}</td>
                        <td class="px-6 py-4">{{ $season->course->title }}</td>
                        <td class="px-6 py-4">
                            @if ($season->free)
                                رایگان هست
                            @else
                                رایگان نیست
                            @endif
                        </td>
                        @if (in_array(1, $roles) || in_array(2, $roles))
                            <td class="px-6 py-4">
                                <a href="{{ route('lesson_create', [$season, $season->course]) }}" style="color:red;">ایجاد
                                    درس</a>
                            </td>
                        @endif
                        <td class="px-6 py-4">
                            <a href="{{ route('season.lessons', [$season]) }}" style="color:red;"> نمایش درس ها </a>
                        </td>

                        <td class="px-6 py-4">
                            <p style="color:blue;"> {{ count($season->lessons) }}</p>
                        </td>

                    </tr>
                </tbody>
            </table>
        </div>
    @endsection
</body>

</html>
