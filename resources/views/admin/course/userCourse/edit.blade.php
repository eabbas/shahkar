@extends('admin.app.dashboard')
@section('title')
    شاهکار | ویرایش دوره کاربر
@endsection
@section('content')
    <div class="w-full h-full pb-10">
        <h2 class="text-3xl text-center font-bold py-10 text-[#425A8B]">فرم ویرایش دوره کاربر</h2>
        <div class="lg:w-2/3 w-full mx-auto border border-[#D5DFE4] rounded-[10px] text-[#425A8B] p-5 bg-white">
            <form action="{{ route('course.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type ="hidden" id="id" name="id" value="{{ $userCourse->id }}">
                <div class="w-full grid grid-cols-1 lg:grid-cols-2 gap-3 lg:gap-5">
                    <div class="w-full flex flex-col">
                        <label for="cat_desc" class="mb-2">پیشرفت :</label>
                        <input type="text" class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4]"
                            placeholder="روند پیشرفت" name="progress" required value="{{ $userCourse->progress }}">
                    </div>
                    <div class="w-full flex flex-col">
                        <label for="course" class="mb-2">دوره :</label>
                        <select name="course_id" id="course" class="w-full bg-[#F9F9F9] py-3 pr-5 rounded-[10px]">
                            @foreach ($courses as $course)
                                <option value="{{ $course->id }}"
                                    @if ($course->id == $userCourse->course_id) {{ 'selected' }} @endif>{{ $course->title }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <button type="submit"
                        class="py-3 px-10 rounded-[10px] bg-[#1B84FF] hover:bg-[#056EE9] text-white cursor-pointer">ثبت</button>
                </div>
            </form>
        </div>
    </div>
@endsection
