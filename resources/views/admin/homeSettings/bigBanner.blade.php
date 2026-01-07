<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="{{ url('assets/css/style.css') }}" type="text/css">
   <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
   <title>create big banner</title>
</head>

<body>
   @extends('admin.app.dashboard')
   @section('content')
   <div class="w-full pb-5 bg-[url('https://keenthemes.com/static/metronic/tailwind/dist/assets/media/images/2600x1200/bg-10.png')] bg-cover bg-no-repeat">
      <h2 class="text-3xl text-center font-bold py-5 text-[#425A8B]">فرم ایجاد بنر بزرگ</h2>
      <div class="w-2/3 mx-auto border border-[#D5DFE4] rounded-[10px] text-[#425A8B] p-5 bg-white">
         <form action="{{route('banners-upsert')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="sectionName" value="bigBanner">
            <div class="flex flex-col w-full p-6">
               <input type="hidden" name="bigBanner" value="{{$bigBanner->id}}">
               <div class="py-4">
                  <label for="img">تصویر :
                     <span class="text-rose-500">*</span>
                  </label>
                  <input class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4] w-full" type="file" name="img" id="img" required value="{{$bigBanner->image}}">
               </div>
               <div class="py-4">
                  <label for="title">عنوان :
                     <span class="text-rose-500">*</span>
                  </label>
                  <input class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4] w-full" type="text" name="title" id="title" required value="{{$bigBanner->title}}">
               </div>
               <div class="py-4">
                  <label for="linkContent">محتوای لینک :
                     <span class="text-rose-500">*</span>
                  </label>
                  <input class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4] w-full" type="text" name="linkContent" id="linkContent" required value="{{$bigBanner->link_content}}">
               </div>
               <div class="py-4">
                  <label for="linkHref">مقصد لینک :
                     <span class="text-rose-500">*</span>
                  </label>
                  <input class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4] w-full" type="text" name="linkHref" id="linkHref" required value="{{$bigBanner->link_href}}">
               </div>
            </div>
            <div class="pt-8 text-center">
               <button type="submit" class="py-3 px-10 rounded-[10px] bg-[#1B84FF] hover:bg-[#056EE9] text-white cursor-pointer">ثبت</button>
            </div>
         </form>
      </div>
   </div>
   @endsection
</body>

</html>