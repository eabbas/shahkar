<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="{{ url('assets/css/style.css') }}" type="text/css">
   <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
   <title>edit footer form column</title>
</head>

<body>
   <div class="w-full pb-5 bg-[url('https://keenthemes.com/static/metronic/tailwind/dist/assets/media/images/2600x1200/bg-10.png')] bg-cover bg-no-repeat">
      <h2 class="text-3xl text-center font-bold py-5 text-[#425A8B]">فرم ویرایش ستون فرم فوتر</h2>
      <div class="w-2/3 mx-auto border border-[#D5DFE4] rounded-[10px] text-[#425A8B] p-5 bg-white">
         <form action="{{route('footer-footerFormMedia-update')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="flex flex-col w-full p-6 border border-[#D5DFE4] rounded-[10px]">
               <div class="pt-2 pb-5">
                  <label for="title">عنوان ستون :
                     <span class="text-rose-500">*</span>
                  </label>
                  <input class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4] w-full" type="text" name="title[4]" id="title" required value="{{$footerFormMediaColumn[0]['section_title']}}">
               </div>
               <div class="pt-2 pb-5">
                  <label for="text">متن فرم :
                     <span class="text-rose-500">*</span>
                  </label>
                  <input class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4] w-full" type="text" name="text" id="text" required value="{{$footerFormMediaColumn[0]['texts'][0]['text']}}">
               </div>
               <div class="pt-2 pb-5">
                  <label for="placeholder">متن داخل اینپوت :
                     <span class="text-rose-500">*</span>
                  </label>
                  <input class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4] w-full" type="text" name="placeholder" id="placeholder" required value="{{$footerFormMediaColumn[0]['texts'][0]['placeholder']}}">
               </div>
               @foreach($footerFormMediaColumn[0]['images'] as $image)
               <div class="border border-[#D5DFE4] rounded-[10px] px-2 mt-2">
                  <div class="py-2">
                     <label>تصویر :
                        <span class="text-rose-500">*</span>
                     </label>
                     <input class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4] w-full" type="file" name="image[4][]" required value="{{$image['path']}}">
                  </div>
                  <div class="py-2">
                     <label>مقصد تصویر :
                        <span class="text-rose-500">*</span>
                     </label>
                     <input class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4] w-full" type="text" name="imageHref[4][]" required value="{{$image['link']}}">
                  </div>
                  <div class="py-2">
                     <label>متن جایگزین :
                        <span class="text-rose-500">*</span>
                     </label>
                     <input class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4] w-full" type="text" name="imageAlt[4][]" required value="{{$image['alt']}}">
                  </div>
                  <div class="text-center" onclick="removeDiv(this)">
                     <span class="cursor-pointer text-[10px] my-2">حذف تصویر
                        <span class="text-rose-500 text-sm">×</span>
                     </span>
                  </div>
               </div>
               @endforeach
               <div id="icons">
               </div>
               <div class="text-center cursor-pointer text-[10px] my-2" onclick="addImage()"> افزودن تصویر
                  <span class="text-green-500 text-sm">+</span>
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