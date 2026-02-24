@extends('admin.app.dashboard')
@section('title')
    شاهکار | ویرایش دوره {{ $course->title }}
@endsection
@section('content')
    <div class="w-full h-full pb-10">
        <h2 class="text-3xl text-center font-bold py-10 text-[#425A8B]">ویرایش دوره {{ $course->title }}</h2>
        <div class="lg:w-2/3 w-full mx-auto border border-[#D5DFE4] rounded-[10px] text-[#425A8B] p-5 bg-white">
            <form action="{{ route('course.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $course->id }}">
                <div class="w-full grid grid-cols-1 lg:grid-cols-2 gap-3 lg:gap-5">
                    <div class="w-full flex flex-col">
                        <label for="catTitle" class="mb-2 flex flex-row items-center">
                            <span>
                                عنوان دوره:
                                <span class="text-rose-500">*</span>
                            </span>
                        </label>
                        <input type="text" class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4]"
                            name="title" id="catTitle" placeholder=" عنوان دوره را وارد کنید" required
                            value="{{ $course->summary }}">
                    </div>

                    <div class="w-full flex flex-col">
                        <label for="cat_desc" class="mb-2">خلاصه دوره:</label>
                        <textarea rows="1" class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4]"
                            placeholder="خلاصه" name="summary">{{ $course->summary }}</textarea>
                    </div>

                    <div class="w-full flex flex-col">
                        <label for="category_id">دسته بندی :</label>
                        <select name="category_id" id="category_id" class="w-full bg-[#F9F9F9] py-3 pr-5 rounded-[10px]">
                            <option value="0">بدون والد</option>
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}" @if ($category->id == $course->category_id) {{ 'selected' }} @endif>{{$category->title}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="w-full flex flex-col">
                        <label for="teacher">انتخاب استاد :</label>
                        <select name="teacher" id="teacher" class="w-full bg-[#F9F9F9] py-3 pr-5 rounded-[10px]">
                             @foreach ($teachers as $teacher)
                            <option value="{{$teacher->id}}" @foreach ($course->teachers as $courseTeacher) @if ($teacher->id == $courseTeacher->id) {{ 'selected' }}  @endif @endforeach>{{$teacher->name}} {{ $teacher->family }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="w-full flex flex-col">
                        <label for="level_id">انتخاب سطح :</label>
                        <select name="level_id" id="level_id" class="w-full bg-[#F9F9F9] py-3 pr-5 rounded-[10px]">
                             @foreach ($levels as $level)
                            <option value="{{ $level->id }}"  @if ($course->level_id == $level->id) {{ 'selected' }} @endif>{{ $level->title }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="w-full flex flex-col">
                        <label for="status_id">انتخاب وضعیت :</label>
                        <select name="status_id" id="status_id" class="w-full bg-[#F9F9F9] py-3 pr-5 rounded-[10px]">
                             @foreach ($statuses as $status)
                            <option value="{{ $status->id }}"  @if ($course->status_id == $status->id) {{ 'selected' }} @endif>{{ $status->title }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="w-full flex flex-col">
                        <label for="image" class="mb-2">میزان رشد دوره:</label>
                        <input type="number"
                            class="w-full outline-none pr-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4]"
                            name="progress" id="progress" value="{{ $course->progress }}">
                    </div>
                    <div class="w-full flex flex-col">
                        <label for="image" class="mb-2">مدت دوره:</label>
                        <input type="text"
                            class="w-full outline-none pr-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4]"
                            name="duration" id="duration" value="{{ $course->duration }}">
                    </div>
                    <div class="w-full flex flex-col">
                        <label for="image" class="mb-2">قیمت دوره:</label>
                        <input type="number"
                            class="w-full outline-none pr-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4]"
                            name="price" id="price" value="{{ $course->price }}">
                    </div>
                    <div class="w-full flex flex-col">
                        <label for="image" class="mb-2">تخفیف دوره:</label>
                        <input type="text"
                            class="w-full outline-none pr-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4]"
                            name="discount" id="discount" value="{{ $course->discount }}">
                    </div>
                    <div class="w-full flex flex-col">
                        <label for="image" class="mb-2">تصویر دوره:</label>
                        <input type="file"
                            class="w-full outline-none pr-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4]"
                            name="img" id="img">
                    </div>
                    <div class="w-full flex flex-col">
                        <label for="image" class="mb-2">ویدیو معرفی دوره:</label>
                        <input type="file"
                            class="w-full outline-none pr-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4]"
                            name="video" id="video">
                    </div>
                    <div class="w-full flex flex-row items-center gap-3 lg:gap-5">
                        <label for="image" class="mb-2">رایگان :</label>
                        <input type="checkbox" class="w-full outline-none pr-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4]" name="free" value="1" @if ($course->free) {{ 'checked' }} @endif>
                    </div>
                    <div class="w-full flex flex-row items-center gap-3 lg:gap-5">
                        <label for="image" class="mb-2">نمایش در خانه :</label>
                        <input type="checkbox" class="w-full outline-none pr-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4]" name="homes" value="1" @if ($course->show_in_home) {{ 'checked' }} @endif>
                    </div>
                    <div class="w-full flex flex-col lg:col-span-2">
                        <label for="cat_desc" class="mb-2">توضیحات دوره:</label>
                        <textarea class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4]" placeholder="توضیحات"
                            name="description">{{ $course->description }}</textarea>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit"
                        class="py-3 px-10 rounded-[10px] bg-[#1B84FF] hover:bg-[#056EE9] text-white cursor-pointer">ثبت</button>
                </div>
            </form>
        </div>
    </div>
@endsection
