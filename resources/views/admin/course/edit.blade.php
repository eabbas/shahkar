<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @extends('admin.app.dashboard')
    @section('content')
        <form action="{{ route('course.update') }}" enctype='multipart/form-data' method="POST">
            @csrf
            <div class="min-h-screen flex items-start justify-center">
                <div class="bg-white rounded-2xl shadow-md p-3 w-full md:w-9/12">
                    <!-- هدر -->
                    <div class="text-center mb-4">
                    </div class="w-full">
                    <div class="md:flex md:flex-row md:w-full md:items-center md:gap-5">

                        <div class="md:flex md:flex-col md:w-full">
                            <input type="hidden" name="id" value="{{ $course->id }}">

                            <fieldset class="mt-2 text-sm md:text-base border border-gray-400 rounded-[15px] py-1 pr-3">
                                <legend
                                    class="kelass p-1 w-30 bg-[#1cb7fd] text-white rounded-full flex flex-row justify-center text-sm">
                                    عکس</legend>
                                <input type="file" name='img'
                                    class="w-full px-2 py-1 md:px-2 outline-none text-gray-500">
                            </fieldset>

                            <fieldset class="mt-2 text-sm md:text-base border border-gray-400 rounded-[15px] py-1 pr-3">
                                <legend
                                    class="kelass p-1 w-30 bg-[#1cb7fd] text-white rounded-full flex flex-row justify-center text-sm">
                                    ویدیو</legend>
                                <input type="file" name='video'
                                    class="w-full px-2 py-1 md:px-2 outline-none text-gray-500">
                            </fieldset>

                            <fieldset class="mt-2 text-sm md:text-base border border-gray-400 rounded-[15px] py-1 pr-3">
                                <legend
                                    class="p-1 w-30 bg-[#1cb7fd] text-white rounded-full flex flex-row justify-center text-sm">
                                    عنوان</legend>
                                <input type="text" name='title'
                                    class="w-full px-2 py-1 md:px-2 outline-none text-gray-500"
                                    value="{{ $course->title }}">
                            </fieldset>
                        </div>

                        <div class="md:flex md:flex-col md:w-full">
                            <fieldset class="mt-2 text-sm md:text-base border border-gray-400 rounded-[15px] py-1 pr-3">
                                <legend
                                    class="p-1 w-30 bg-[#1cb7fd] text-white rounded-full flex flex-row justify-center text-sm">
                                    توضیحات</legend>
                                <input type="text" name='description'
                                    class="w-full px-2 py-1 md:px-2 outline-none text-gray-500"
                                    value="{{ $course->description }}">
                            </fieldset>
                        </div>
                        <div class="md:flex md:flex-col md:w-full">
                            <fieldset class="mt-2 text-sm md:text-base border border-gray-400 rounded-[15px] py-1 pr-3">
                                <legend
                                    class="p-1 w-30 bg-[#1cb7fd] text-white rounded-full flex flex-row justify-center text-sm">
                                    خلاصه</legend>
                                <input type="text" name='summary'
                                    class="w-full px-2 py-1 md:px-2 outline-none text-gray-500"value="{{ $course->summary }}">
                            </fieldset>
                        </div>
                        <div class="md:flex md:flex-col md:w-full">
                            <fieldset class="mt-2 text-sm md:text-base border border-gray-400 rounded-[15px] py-1 pr-3">
                                <legend
                                    class="p-1 w-30 bg-[#1cb7fd] text-white rounded-full flex flex-row justify-center text-sm">
                                    قیمت</legend>
                                <input type="text" name='price'
                                    class="w-full px-2 py-1 md:px-2 outline-none text-gray-500"value="{{ $course->price }}">
                            </fieldset>
                        </div>
                        <div class="md:flex md:flex-col md:w-full">
                            <fieldset class="mt-2 text-sm md:text-base border border-gray-400 rounded-[15px] py-1 pr-3">
                                <legend
                                    class="p-1 w-30 bg-[#1cb7fd] text-white rounded-full flex flex-row justify-center text-sm">
                                    مدت دوره</legend>
                                <input type="text" name='duration'
                                    class="w-full px-2 py-1 md:px-2 outline-none text-gray-500"value="{{ $course->duration }}">
                            </fieldset>
                        </div>
                        <div class="md:flex md:flex-col md:w-full">
                            <fieldset class="mt-2 text-sm md:text-base border border-gray-400 rounded-[15px] py-1 pr-3">
                                <legend
                                    class="p-1 w-30 bg-[#1cb7fd] text-white rounded-full flex flex-row justify-center text-sm">
                                    رشد</legend>
                                <input type="text" name='progress'
                                    class="w-full px-2 py-1 md:px-2 outline-none text-gray-500"value="{{ $course->progress }}">
                            </fieldset>
                        </div>
                        <div class="md:flex md:flex-col md:w-full">
                            <fieldset class="mt-2 text-sm md:text-base border border-gray-400 rounded-[15px] py-1 pr-3">
                                <legend
                                    class="p-1 w-30 bg-[#1cb7fd] text-white rounded-full flex flex-row justify-center text-sm">
                                    تخفیف</legend>
                                <input type="text" name='discount'
                                    class="w-full px-2 py-1 md:px-2 outline-none text-gray-500"value="{{ $course->discount }}">
                            </fieldset>
                        </div>

                    </div>
                    <label for="free">free:</label>
                    <input type="checkbox" name="free" value="1"
                        @if ($course->free) {{ 'checked' }} @endif>


                    <div>
                        <label for="show_in_home">Showhome:</label>
                        <input type="checkbox" name="homes" value="1"
                            @if ($course->show_in_home) {{ 'checked' }} @endif>
                    </div>

                    <label for="category">category:</label>
                    <select name="category_id">
                        <option value="0">بدون والد</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                @if ($category->id == $course->category_id) {{ 'selected' }} @endif>{{ $category->title }}
                            </option>
                        @endforeach
                    </select>
                    <label for="teacher">teacher:</label>
                    <select name="teacher_id">
                        @foreach ($teachers as $teacher)
                            <option value="{{ $teacher->id }}"
                                @foreach ($course->teachers as $courseTeacher) @if ($teacher->id == $courseTeacher->id) {{ 'selected' }}  @endif @endforeach>
                                {{ $teacher->name }}</option>
                        @endforeach
                    </select>
                    <label for="level">level:</label>
                    <select name="level_id">
                        @foreach ($levels as $level)
                            <option value="{{ $level->id }}"
                                @if ($course->level_id == $level->id) {{ 'selected' }} @endif>{{ $level->title }}</option>
                        @endforeach
                    </select>
                    <label for="status">status:</label>
                    <select name="status_id">
                        @foreach ($statuses as $status)
                            <option value="{{ $status->id }}"
                                @if ($course->status_id == $status->id) {{ 'selected' }} @endif>{{ $status->title }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <button type="submit"
                class="active:bg-[#0080e5] mt-2 w-full bg-[#03A9F4] text-white py-3 rounded-md hover:bg-blue-700 transition duration-200 font-medium">
                ارسال اطلاعات
            </button>
            </div>
            </div>
            </fieldset>
        </form>
    @endsection
</body>

</html>
