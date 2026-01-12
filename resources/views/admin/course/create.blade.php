<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ایجاد دوره</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    @extends('admin.app.dashboard')
    @section('content')
        <div class="min-h-screen flex items-start justify-center py-10">
            <form action="{{ route('course.store') }}" method="POST" enctype="multipart/form-data"
                class="bg-white border border-gray-300 shadow-xl w-full md:w-10/12 lg:w-8/12 rounded-3xl p-6 space-y-6">
                @csrf

                <h2 class="text-2xl font-bold text-center text-blue-600 mb-4">فرم ایجاد دوره</h2>


                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div>
                        <label class="block font-bold text-gray-700 mb-1">عکس دوره</label>
                        <input type="file" name="img"
                            class="w-full bg-white border border-gray-300 rounded-xl border-gray-300 focus:ring-blue-400 focus:border-blue-400">
                    </div>

                    <div>
                        <label class="block font-bold text-gray-700 mb-1">ویدیو معرفی</label>
                        <input type="file" name="video"
                            class="w-full bg-white border border-gray-300 rounded-xl border-gray-300 focus:ring-blue-400 focus:border-blue-400">
                    </div>

                    <div>
                        <label class="block font-bold text-gray-700 mb-1">عنوان</label>
                        <input type="text" name="title"
                            class="w-full bg-white border border-gray-300 rounded-xl border-gray-300 focus:ring-blue-400 focus:border-blue-400">
                    </div>

                    <div>
                        <label class="block font-bold text-gray-700 mb-1">توضیحات</label>
                        <input type="text" name="description"
                            class="w-full bg-white border border-gray-300 rounded-xl border-gray-300 focus:ring-blue-400 focus:border-blue-400">
                    </div>

                    <div>
                        <label class="block font-bold text-gray-700 mb-1">خلاصه</label>
                        <input type="text" name="summary"
                            class="w-full bg-white border border-gray-300 rounded-xl border-gray-300 focus:ring-blue-400 focus:border-blue-400">
                    </div>

                    <div>
                        <label class="block font-bold text-gray-700 mb-1">قیمت</label>
                        <input type="text" name="price"
                            class="w-full bg-white border border-gray-300 rounded-xl border-gray-300 focus:ring-blue-400 focus:border-blue-400">
                    </div>

                    <div>
                        <label class="block font-bold text-gray-700 mb-1">مدت دوره</label>
                        <input type="text" name="duration"
                            class="w-full bg-white border border-gray-300 rounded-xl border-gray-300 focus:ring-blue-400 focus:border-blue-400">
                    </div>

                    <div>
                        <label class="block font-bold text-gray-700 mb-1">رشد</label>
                        <input type="text" name="progress"
                            class="w-full bg-white border border-gray-300 rounded-xl border-gray-300 focus:ring-blue-400 focus:border-blue-400">
                    </div>

                    <div>
                        <label class="block font-bold text-gray-700 mb-1">تخفیف</label>
                        <input type="text" name="discount"
                            class="w-full bg-white border border-gray-300 rounded-xl border-gray-300 focus:ring-blue-400 focus:border-blue-400">
                    </div>
                </div>


                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
                    <label class="flex items-center space-x-2 space-x-reverse cursor-pointer">
                        <input type="checkbox" name="free" value="1" class="w-5 h-5 text-blue-500">
                        <span class="font-medium">دوره رایگان</span>
                    </label>

                    <label class="flex items-center space-x-2 space-x-reverse cursor-pointer">
                        <input type="checkbox" name="show_in_home" value="1" class="w-5 h-5 text-blue-500">
                        <span class="font-medium">نمایش در صفحه اصلی</span>
                    </label>
                </div>


                <div>
                    <label class="block font-bold text-gray-700 mb-1">دسته‌بندی</label>
                    <select class="bg-white border border-gray-300" name="category_id"
                        class="w-full bg-white border border-gray-300 rounded-xl border-gray-300 focus:ring-blue-400 focus:border-blue-400">
                        <option value="0">بدون والد</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                        @endforeach
                    </select>
                </div>


                <div>
                    <label class="block font-bold text-gray-700 mb-2">انتخاب استاد (قابل انتخاب چندتایی)</label>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-2 bg-gray-50 p-3 rounded-2xl border">
                        @foreach ($teachers as $teacher)
                            <label class="flex items-center gap-2">
                                <input type="checkbox" name="teacher_id[]" value="{{ $teacher->id }}"
                                    class="w-5 h-5 text-blue-500">
                                <span>{{ $teacher->name }}</span>
                            </label>
                        @endforeach
                    </div>
                </div>


                <div>
                    <label class="block font-bold text-gray-700 mb-1">سطح دوره</label>
                    <select class="bg-white border border-gray-300" name="level_id"
                        class="w-full bg-white border border-gray-300 rounded-xl border-gray-300 focus:ring-blue-400 focus:border-blue-400">
                        @foreach ($levels as $level)
                            <option value="{{ $level->id }}">{{ $level->title }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label class="block font-bold text-gray-700 mb-1">وضعیت</label>
                    <select class="bg-white border border-gray-300" name="status_id"
                        class="w-full bg-white border border-gray-300 rounded-xl border-gray-300 focus:ring-blue-400 focus:border-blue-400">
                        @foreach ($statuses as $status)
                            <option value="{{ $status->id }}">{{ $status->title }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit"
                    class="w-full bg-blue border border-gray-300 py-3 bg-blue-500 hover:bg-blue-600 text-white font-bold rounded-2xl shadow-md transition-all">
                    ارسال اطلاعات
                </button>
            </form>
        </div>
    @endsection
</body>

</html>
