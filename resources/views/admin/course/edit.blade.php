<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="{{ url('/assets/css/style.css') }}" type="text/css">
   <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
   <title>edit course</title>
</head>

<body>
   @extends('admin.app.dashboard')
   @section('content')
   <div class="w-full h-svh bg-[url('https://keenthemes.com/static/metronic/tailwind/dist/assets/media/images/2600x1200/bg-10.png')] bg-cover bg-no-repeat">
      <h2 class="text-3xl text-center font-bold py-5 text-[#425A8B]">فرم ویرایش دوره</h2>
      <div class="w-2/3 mx-auto border border-[#D5DFE4] rounded-[10px] text-[#425A8B] p-5 bg-white">
         <form action="{{route('course-update')}}" method="post">
            <input type="hidden" name="course_id" value="{{$course->id}}">
            @csrf
            <div class="w-full flex flex-col">
               <label for="title" class="mb-2 flex flex-row items-center">
                  <span>نام دوره:</span>
                  <span class="text-rose-500">*</span>
               </label>
               <input type="text" name="title" id="title" class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4]" placeholder="نام دوره را وارد کنید" required value="{{$course->title}}">
            </div>
            <div class="w-full flex flex-col mt-5">
               <label for="description" class="mb-2">توضیحات دوره:</label>
               <input type="text" name="description" id="description" class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4]" placeholder="توضیحات دوره را وارد کنید" value="{{$course->description}}">
            </div>
            <div class="mt-5 flex flex-col gap-3">
               <label>دسته بندی دوره :</label>
               <select name="courseCategory_id" class="md:w-1/2 bg-[#F9F9F9] py-3 pr-5 rounded-[10px]">
                  <option value="0">بدون والد</option>
                  @foreach($courseCategories as $courseCategory)
                  <option value="{{$courseCategory->id}}" @if($courseCategory->id == $course->courseCategory_id) selected @endif >{{$courseCategory->title}}</option>
                  @endforeach
               </select>
            </div>
            <div class="mt-5 text-center">
               <button type="submit" class="py-3 px-10 rounded-[10px] bg-[#1B84FF] hover:bg-[#056EE9] text-white cursor-pointer">ثبت</button>
            </div>
         </form>
      </div>
   </div>
   @endsection
</body>

</html>