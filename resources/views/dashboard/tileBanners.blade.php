<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="{{ url('assets/css/style.css') }}" type="text/css">
   <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
   <title>create tiles</title>
</head>

<body>
   <div class="w-full pb-5 bg-[url('https://keenthemes.com/static/metronic/tailwind/dist/assets/media/images/2600x1200/bg-10.png')] bg-cover bg-no-repeat">
      <h2 class="text-3xl text-center font-bold py-5 text-[#425A8B]">فرم ایجاد کاشی ها</h2>
      <div class="w-2/3 mx-auto border border-[#D5DFE4] rounded-[10px] text-[#425A8B] p-5 bg-white">
         <form action="{{route('banners-upsert')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="sectionName" value="tileBanners">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
               <div class="flex flex-col w-full p-6 border border-[#D5DFE4] rounded-[10px]">
                  <input type="hidden" name="firstTile" value="@if(count($tileBanners)==2){{$tileBanners[0]->id}}@endif">
                  <div class="py-4 text-center">
                     <h4 class="text-2xl font-bold">کاشی 1</h4>
                  </div>
                  <div class="py-4">
                     <label for="img1">تصویر 1:
                        <span class="text-rose-500">*</span>
                     </label>
                     <input class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4] w-full" type="file" name="img1" id="img1" required value="@if(count($tileBanners)==2){{$tileBanners[0]->image}}@endif">
                  </div>
                  <div class="py-4">
                     <label for="title1">عنوان 1:
                        <span class="text-rose-500">*</span>
                     </label>
                     <input class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4] w-full" type="text" name="title1" id="title1" required value="@if(count($tileBanners)==2){{$tileBanners[0]->title}}@endif">
                  </div>
                  <div class="py-4">
                     <label for="linkContent1">محتوای لینک 1:
                        <span class="text-rose-500">*</span>
                     </label>
                     <input class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4] w-full" type="text" name="linkContent1" id="linkContent1" required value="@if(count($tileBanners)==2){{$tileBanners[0]->link_content}}@endif">
                  </div>
                  <div class="py-4">
                     <label for="linkHref1">مقصد لینک 1:
                        <span class="text-rose-500">*</span>
                     </label>
                     <input class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4] w-full" type="text" name="linkHref1" id="linkHref1" required value="@if(count($tileBanners)==2){{$tileBanners[0]->link_href}}@endif">
                  </div>
               </div>
               <div class="flex flex-col w-full p-6 border border-[#D5DFE4] rounded-[10px]">
                  <input type="hidden" name="secondTile" value="@if(count($tileBanners)==2){{$tileBanners[1]->id}}@endif">
                  <div class="py-4 text-center">
                     <h4 class="text-2xl font-bold">کاشی 2</h4>
                  </div>
                  <div class="py-4">
                     <label for="img2">تصویر 2:
                        <span class="text-rose-500">*</span>
                     </label>
                     <input class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4] w-full" type="file" name="img2" id="img2" required value="@if(count($tileBanners)==2){{$tileBanners[1]->image}}@endif">
                  </div>
                  <div class="py-4">
                     <label for="title2">عنوان 2:
                        <span class="text-rose-500">*</span>
                     </label>
                     <input class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4] w-full" type="text" name="title2" id="title2" required value="@if(count($tileBanners)==2){{$tileBanners[1]->title}}@endif">
                  </div>
                  <div class="py-4">
                     <label for="linkContent2">محتوای لینک 2:
                        <span class="text-rose-500">*</span>
                     </label>
                     <input class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4] w-full" type="text" name="linkContent2" id="linkContent2" required value="@if(count($tileBanners)==2){{$tileBanners[1]->link_content}}@endif">
                  </div>
                  <div class="py-4">
                     <label for="linkHref2">مقصد لینک 2:
                        <span class="text-rose-500">*</span>
                     </label>
                     <input class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4] w-full" type="text" name="linkHref2" id="linkHref2" required value="@if(count($tileBanners)==2){{$tileBanners[1]->link_href}}@endif">
                  </div>
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