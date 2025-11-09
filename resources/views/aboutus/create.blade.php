<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="{{ url('assets/css/style.css') }}" type="text/css">
   <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
   <title>create about us</title>
</head>


<body>
   @extends('dashboard')
   @section('content')
   <div class="w-full h-full pb-10">
      <h2 class="text-3xl text-center font-bold py-10 text-[#425A8B]">فرم ایجاد درباره ما</h2>
      <div class="w-2/3 mx-auto border border-[#D5DFE4] rounded-[10px] text-[#425A8B] p-5 bg-white">
         <form action="{{route('aboutus-upsert')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="w-full flex flex-col mt-5">
               <label for="aboutus_desc" class="mb-2">توضیحات درباره ما:</label>
               <textarea class="h-40 outline-none pr-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4]" placeholder="توضیحات" name="description" id="aboutus_desc">@if(count($aboutus) == 1) {{$aboutus[0]['description']}} @endif</textarea>
            </div>
            <div class="md:w-1/2 flex flex-col">
               <label for="image" class="mb-2">عکس درباره ما:</label>
               <input type="file" class="w-fit outline-none pr-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4]" name="image" id="image" value="@if(count($aboutus) == 1) {{$aboutus[0]['image']}} @endif">
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