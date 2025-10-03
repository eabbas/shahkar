<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="{{ url('/assets/css/style.css') }}" type="text/css">
   <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
   <title>create menu</title>
</head>

<body>
   <div class="w-full h-full bg-[url('https://keenthemes.com/static/metronic/tailwind/dist/assets/media/images/2600x1200/bg-10.png')] bg-cover bg-no-repeat">
      <h2 class="text-3xl text-center font-bold py-5 text-[#425A8B]">فرم ایجاد آیتم های منو</h2>
      <div class="w-2/3 mx-auto border border-[#D5DFE4] rounded-[10px] text-[#425A8B] p-5 bg-white">
         <form action="{{route('menu-store')}}" method="post">
            @csrf
            <div class="w-full flex flex-col">
               <label for="menu_title" class="mb-2 flex flex-row items-center">
                  <span>عنوان آیتم منو:</span>
                  <span class="text-rose-500">*</span>
               </label>
               <input type="text" name="title" id="menu_title" class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4]" placeholder="نام منو را وارد کنید" required>
            </div>
            <div class="w-full flex flex-col mt-5">
               <label for="description" class="mb-2">توضیحات آیتم منو:</label>
               <textarea name="description" class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4]" rows="4" id="description" placeholder="توضیحات منو را وارد کنید"></textarea>
            </div>
            <div class="w-full flex flex-col">
               <label for="menu_link" class="mb-2 flex flex-row items-center">
                  <span>لینک آیتم منو:</span>
                  <span class="text-rose-500">*</span>
               </label>
               <input type="text" name="link" id="menu_link" class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4]" placeholder="لینک منو را وارد کنید" required>
            </div>
            <div class="flex flex-col-reverse lg:flex-row gap-5 lg:gap-10 mt-5">
               <div class="xl:w-1/4 flex flex-col">
                  <label for="menu_icon" class="mb-2">آیکون آیتم منو:</label>
                  <input type="file" name="icon" class="w-full outline-none pr-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4]" id="menu_icon">
               </div>
               <div class="xl:w-1/4 flex flex-col">
                  <label for="menu_image" class="mb-2">تصویر آیتم منو:</label>
                  <input type="file" name="image" class="w-full outline-none pr-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4]" id="menu_image">
               </div>
               <div class="w-full xl:w-2/4 flex flex-col gap-5 items-start justify-center">
                  <span class="block">فعال بودن آیتم منو:</span>
                  <div class="flex flex-row items-center mr-5 lg:mr-10">
                     <div class="flex flex-row items-center">
                        <label for="active" class="mx-3 flex flex-row items-center">فعال</label>
                        <input type="radio" name="activity" value="1" id="active" checked>
                     </div>
                     <div class="flex flex-row items-center">
                        <label for="inactive" class="mx-3 flex flex-row items-center">غیر فعال</label>
                        <input type="radio" name="activity" value="0" id="inactive">
                     </div>
                  </div>
               </div>
            </div>
            <div class="flex flex-col lg:flex-row mt-5 gap-5">
               <div class="w-full lg:w-4/12 flex flex-col gap-3">
                  <label for="menu_priority" class="flex flex-row items-center">
                     <span>اولویت آیتم منو:</span>
                     <span class="text-rose-500">*</span>
                  </label>
                  <input type="number" name="priority" id="menu_priority" min="0" class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4]" placeholder="اولویت منو را با اعداد مشخص کنید" required>
               </div>
               <div class="w-full lg:w-8/12 flex flex-col gap-3">
                  <label>منوی والد :</label>
                  <select name="parent_id" class="w-full bg-[#F9F9F9] py-3 pr-5 rounded-[10px]">
                     <option value="0">بدون والد</option>
                     @foreach($items as $item)
                     <option value="{{$item->id}}">{{$item->title}}</option>
                     @endforeach
                  </select>
               </div>
            </div>
            <div class="mt-5 text-center">
               <button type="submit" class="py-3 px-10 rounded-[10px] bg-[#1B84FF] hover:bg-[#056EE9] text-white cursor-pointer">ثبت</button>
            </div>
         </form>
      </div>
   </div>
</body>

</html>