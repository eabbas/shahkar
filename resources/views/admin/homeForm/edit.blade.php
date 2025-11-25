<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="{{ url('/assets/css/style.css') }}" type="text/css">
   <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
   <title>edit contact method</title>
</head>

<body>
   @extends('admin.app.dashboard')
   @section('content')
   <div class="w-full h-svh bg-[url('https://keenthemes.com/static/metronic/tailwind/dist/assets/media/images/2600x1200/bg-10.png')] bg-cover bg-no-repeat">
      <h2 class="text-3xl text-center font-bold py-5 text-[#425A8B]">فرم ویرایش راه ارتباطی کاربر</h2>
      <div class="w-2/3 mx-auto border border-[#D5DFE4] rounded-[10px] text-[#425A8B] p-5 bg-white">
         <form action="{{route('homeForm-update')}}" method="post">
            <input type="hidden" name="id" value="{{$homeForms->id}}">
            @csrf
            <div class="w-full flex flex-col">
               <label for="title" class="mb-2 flex flex-row items-center">
                  <span>راه ارتباطی:</span>
                  <span class="text-rose-500">*</span>
               </label>
               <input type="text" name="contactMethod" id="title" class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4]" required value="{{$homeForms->contactMethod}}">
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