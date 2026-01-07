<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>



<section class="2xl:container mx-auto">
    <div class="w-11/12 mx-auto">
        <div class="my-10">
            <h1 class="lg:text-3xl md:text-2xl text-md font-bold text-center text-gray-700">لیست کاربران دوره
                {{ $course->title }} </h1>
        </div>

        <div class="overflow-x-auto">

            <table class="w-full border-collapse">
                <thead>
                    <tr class="text-gray-700 border-b border-gray-400">
                        <th class="text-right px-4 py-2">آیدی</th>
                        <th class="text-right px-4 py-2">نام</th>
                        <th class="text-right px-4 py-2">ایمیل</th>
                        <th class="px-4 py-2 text-left">دکمه ها</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($courseUsers as $user)
                        <tr class="border-b border-gray-400">
                            <td class="text-right px-4 py-2">{{ $user->id }}</td>
                            <td class="text-right px-4 py-2">{{ $user->name }}</td>
                            <td class="text-right px-4 py-2">{{ $user->email }}</td>
                            <td class="px-4 py-2 flex justify-start gap-2">
                                <a href="{{ route('userCourse.edit', [$user['pivot']['id']]) }}"
                                    class="px-2 py-1 bg-blue-500 text-white rounded-md hover:bg-blue-600">ویرایش دوره
                                    کاربر</a>
                                <a href="{{ route('userCourse.delete', [$user['pivot']['id']]) }}"
                                    class="px-2 py-1 bg-red-400 text-white rounded-md hover:bg-red-500">حذف دوره</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
</section>
</body>

</html>
