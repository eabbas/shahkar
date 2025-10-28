<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="{{ url('assets/css/style.css') }}" type="text/css">
   <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
   <title>create footer tile</title>
</head>

<body>
   <div class="w-full pb-5 bg-[url('https://keenthemes.com/static/metronic/tailwind/dist/assets/media/images/2600x1200/bg-10.png')] bg-cover bg-no-repeat">
      <h2 class="text-3xl text-center font-bold py-5 text-[#425A8B]">فرم ایجاد کاشی فوتر</h2>
      <div class="w-2/3 mx-auto border border-[#D5DFE4] rounded-[10px] text-[#425A8B] p-5 bg-white">
         <form action="{{route('banners-upsert')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="footerTile" value="@if(count($footerTile)==1){{$footerTile[0]->id}}@endif">
            <div class="flex flex-col w-full p-6">
               <div class="py-4">
                  <label for="img">تصویر :
                     <span class="text-rose-500">*</span>
                  </label>
                  <input class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4] w-full" type="file" name="img" id="img" required value="@if(count($footerTile)==1){{$footerTile[0]->image}}@endif">
               </div>
               <div class="py-4">
                  <label for="bg_img">تصویر پس زمینه :
                     <span class="text-rose-500">*</span>
                  </label>
                  <input class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4] w-full" type="file" name="bg_img" id="bg_img" required value="@if(count($footerTile)==1){{$footerTile[0]->bg_img}}@endif">
               </div>
               <div class="py-4">
                  <label for="title">عنوان :
                     <span class="text-rose-500">*</span>
                  </label>
                  <input class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4] w-full" type="text" name="title" id="title" required value="@if(count($footerTile)==1){{$footerTile[0]->title}}@endif">
               </div>
               <div class="py-4">
                  <label for="text">متن :
                     <span class="text-rose-500">*</span>
                  </label>
                  <input class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4] w-full" type="text" name="text" id="text" required value="@if(count($footerTile)==1){{$footerTile[0]->text}}@endif">
               </div>
            </div>
            <div class="pt-8 text-center">
               <button type="submit" class="py-3 px-10 rounded-[10px] bg-[#1B84FF] hover:bg-[#056EE9] text-white cursor-pointer">ثبت</button>
            </div>
         </form>
      </div>
   </div>
</body>

</html>