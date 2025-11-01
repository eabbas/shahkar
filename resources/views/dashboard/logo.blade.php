<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="{{ url('assets/css/style.css') }}" type="text/css">
   <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
   <title>create logo</title>
</head>

<body>
   <div class="w-full pb-5 bg-[url('https://keenthemes.com/static/metronic/tailwind/dist/assets/media/images/2600x1200/bg-10.png')] bg-cover bg-no-repeat">
      <h2 class="text-3xl text-center font-bold py-5 text-[#425A8B]">فرم ایجاد لوگو</h2>
      <div class="w-2/3 mx-auto border border-[#D5DFE4] rounded-[10px] text-[#425A8B] p-5 bg-white">
         <form action="{{route('banners-upsert')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="logo_id" value="@if(count($logo)==1){{$logo[0]->id}}@endif">
            <div class="flex flex-col w-full p-6">
               <div class="py-4">
                  <label for="logo">تصویر :
                     <span class="text-rose-500">*</span>
                  </label>
                  <input class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4] w-full" type="file" name="logo" id="logo" required value="@if(count($logo)==1){{$logo[0]->logo}}@endif">
               </div>
               <div class="py-4">
                  <label for="link_href">مقصد لینک :
                     <span class="text-rose-500">*</span>
                  </label>
                  <input class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4] w-full" type="text" name="link_href" id="link_href" required value="@if(count($logo)==1){{$logo[0]->link_href}}@endif">
               </div>
               <div class="py-4">
                  <label for="alt_text">متن جایگزین :
                     <span class="text-rose-500">*</span>
                  </label>
                  <input class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4] w-full" type="text" name="alt_text" id="alt_text" required value="@if(count($logo)==1){{$logo[0]->alt_text}}@endif">
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