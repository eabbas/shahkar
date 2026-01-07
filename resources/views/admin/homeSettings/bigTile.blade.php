<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>create big tile</title>
</head>

<body>
    @extends('admin.app.dashboard')
    @section('content')
        <div
            class="w-full pb-5 bg-[url('https://keenthemes.com/static/metronic/tailwind/dist/assets/media/images/2600x1200/bg-10.png')] bg-cover bg-no-repeat">
            <h2 class="text-3xl text-center font-bold py-5 text-[#425A8B]">فرم ایجاد کاشی بزرگ</h2>
            <div class="w-2/3 mx-auto border border-[#D5DFE4] rounded-[10px] text-[#425A8B] p-5 bg-white">
                <form action="{{ route('banners-upsert') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="bigTile" value="{{ $bigTile->id }}">
                    <div class="flex flex-col w-full p-6">
                        <div class="py-4">
                            <label for="header">هدر :
                                <span class="text-rose-500">*</span>
                            </label>
                            <input class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4] w-full"
                                type="text" name="header" id="header" value="{{ $bigTile->header }}" required>
                        </div>
                        <div class="py-4">
                            <label for="title">عنوان :
                                <span class="text-rose-500">*</span>
                            </label>
                            <input class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4] w-full"
                                type="text" name="title" id="title" value="{{ $bigTile->title }}" required>
                        </div>
                        <div class="py-4">
                            <label for="text">متن :
                                <span class="text-rose-500">*</span>
                            </label>
                            <input class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4] w-full"
                                type="text" name="text" id="text" value="{{ $bigTile->text }}" required>
                        </div>
                        <div class="py-4">
                            <label for="btn1_content">محتوای دکمه اول :
                                <span class="text-rose-500">*</span>
                            </label>
                            <input class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4] w-full"
                                type="text" name="btn1_content" id="btn1_content" value="{{ $bigTile->btn1_content }}"
                                required>
                        </div>
                        <div class="py-4">
                            <label for="btn1_href">مقصد دکمه اول :
                                <span class="text-rose-500">*</span>
                            </label>
                            <input class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4] w-full"
                                type="text" name="btn1_href" id="btn1_href" value="{{ $bigTile->btn1_href }}" required>
                        </div>
                        <div class="py-4">
                            <label for="btn2_content">محتوای دکمه دوم :
                                <span class="text-rose-500">*</span>
                            </label>
                            <input class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4] w-full"
                                type="text" name="btn2_content" id="btn2_content" value="{{ $bigTile->btn2_content }}"
                                required>
                        </div>
                        <div class="py-4">
                            <label for="btn2_href">مقصد دکمه دوم :
                                <span class="text-rose-500">*</span>
                            </label>
                            <input class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4] w-full"
                                type="text" name="btn2_href" id="btn2_href" value="{{ $bigTile->btn2_href }}" required>
                        </div>
                        <div class="py-4">
                            <label for="img">تصویر :
                                <span class="text-rose-500">*</span>
                            </label>
                            <input class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4] w-full"
                                type="file" name="img" id="img" value="{{ $bigTile->img }}" required>
                        </div>
                        <div class="py-4">
                            <label for="bg_img">تصویر پس زمینه :
                                <span class="text-rose-500">*</span>
                            </label>
                            <input class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4] w-full"
                                type="file" name="bg_img" id="bg_img" value="{{ $bigTile->bg_img }}" required>
                        </div>
                    </div>
                    <div class="pt-8 text-center">
                        <button type="submit"
                            class="py-3 px-10 rounded-[10px] bg-[#1B84FF] hover:bg-[#056EE9] text-white cursor-pointer">ثبت</button>
                    </div>
                </form>
            </div>
        </div>
    @endsection
</body>

</html>
