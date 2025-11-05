<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="{{ url('assets/css/style.css') }}" type="text/css">
   <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
   <title>create footer columns</title>
</head>

<body>
   <div class="w-full pb-5 bg-[url('https://keenthemes.com/static/metronic/tailwind/dist/assets/media/images/2600x1200/bg-10.png')] bg-cover bg-no-repeat">
      <h2 class="text-3xl text-center font-bold py-5 text-[#425A8B]">فرم ایجاد ستون های فوتر</h2>
      <div class="w-2/3 mx-auto border border-[#D5DFE4] rounded-[10px] text-[#425A8B] p-5 bg-white">
         <form action="{{route('footer-store')}}" method="post">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
               <div class="flex flex-col w-full p-6 border border-[#D5DFE4] rounded-[10px]">
                  <div class="py-4 text-center">
                     <h4 class="text-2xl font-bold">بخش اول</h4>
                  </div>
                  <div class="pt-2 pb-5">
                     <label for="title1">عنوان ستون :
                        <span class="text-rose-500">*</span>
                     </label>
                     <input class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4] w-full" type="text" name="title[1]" id="title1" required>
                  </div>
                  <div class="border border-[#D5DFE4] rounded-[10px] px-2 mt-2">
                     <div class="py-2">
                        <label>محتوای ردیف :
                           <span class="text-rose-500">*</span>
                        </label>
                        <input class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4] w-full" type="text" name="linkContent[1][]" required>
                     </div>
                     <div class="py-2">
                        <label>مقصد ردیف :
                           <span class="text-rose-500">*</span>
                        </label>
                        <input class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4] w-full" type="text" name="linkHref[1][]" required>
                     </div>
                     <div class="text-center" onclick="removeDiv(this)">
                        <span class="cursor-pointer text-[10px] my-2">حذف تصویر
                           <span class="text-rose-500 text-sm">×</span>
                        </span>
                     </div>
                  </div>
                  <div id="firstSection">
                  </div>
                  <div class="text-center cursor-pointer text-[10px] my-2" onclick="addRowFirstSection()"> افزودن ردیف
                     <span class="text-green-500 text-sm">+</span>
                  </div>
               </div>
               <div class="flex flex-col w-full p-6 border border-[#D5DFE4] rounded-[10px]">
                  <div class="py-4 text-center">
                     <h4 class="text-2xl font-bold">بخش دوم</h4>
                  </div>
                  <div class="pt-2 pb-5">
                     <label for="title2">عنوان ستون :
                        <span class="text-rose-500">*</span>
                     </label>
                     <input class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4] w-full" type="text" name="title[2]" id="title2" required>
                  </div>
                  <div class="border border-[#D5DFE4] rounded-[10px] px-2 mt-2">
                     <div class="py-2">
                        <label>محتوای ردیف :
                           <span class="text-rose-500">*</span>
                        </label>
                        <input class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4] w-full" type="text" name="linkContent[2][]" required>
                     </div>
                     <div class="py-2">
                        <label>مقصد ردیف :
                           <span class="text-rose-500">*</span>
                        </label>
                        <input class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4] w-full" type="text" name="linkHref[2][]" required>
                     </div>
                     <div class="text-center" onclick="removeDiv(this)">
                        <span class="cursor-pointer text-[10px] my-2">حذف تصویر
                           <span class="text-rose-500 text-sm">×</span>
                        </span>
                     </div>
                  </div>
                  <div id="secondSection">
                  </div>
                  <div class="text-center cursor-pointer text-[10px] my-2" onclick="addRowSecondSection()"> افزودن ردیف
                     <span class="text-green-500 text-sm">+</span>
                  </div>
               </div>
               <div class="flex flex-col w-full p-6 border border-[#D5DFE4] rounded-[10px]">
                  <div class="py-4 text-center">
                     <h4 class="text-2xl font-bold">بخش سوم</h4>
                  </div>
                  <div class="pt-2 pb-5">
                     <label for="title3">عنوان ستون :
                        <span class="text-rose-500">*</span>
                     </label>
                     <input class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4] w-full" type="text" name="title[3]" id="title3" required>
                  </div>
                  <div class="border border-[#D5DFE4] rounded-[10px] px-2 mt-2">
                     <div class="py-2">
                        <label>محتوای ردیف :
                           <span class="text-rose-500">*</span>
                        </label>
                        <input class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4] w-full" type="text" name="linkContent[3][]" required>
                     </div>
                     <div class="py-2">
                        <label>مقصد ردیف :
                           <span class="text-rose-500">*</span>
                        </label>
                        <input class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4] w-full" type="text" name="linkHref[3][]" required>
                     </div>
                     <div class="text-center" onclick="removeDiv(this)">
                        <span class="cursor-pointer text-[10px] my-2">حذف تصویر
                           <span class="text-rose-500 text-sm">×</span>
                        </span>
                     </div>
                  </div>
                  <div id="thirdSection">
                  </div>
                  <div class="text-center cursor-pointer text-[10px] my-2" onclick="addRowThirdSection()"> افزودن ردیف
                     <span class="text-green-500 text-sm">+</span>
                  </div>
               </div>
            </div>
            <div class="pt-8 text-center">
               <button type="submit" class="py-3 px-10 rounded-[10px] bg-[#1B84FF] hover:bg-[#056EE9] text-white cursor-pointer">ثبت</button>
            </div>
         </form>
      </div>
   </div>
   <script src="{{asset('assets/js/app.js')}}"></script>
</body>

</html>