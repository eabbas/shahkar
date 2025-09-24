<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="{{ url('assets/css/style.css') }}" type="text/css">
   <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
   <title>create product</title>
</head>

<body>
   <div class="w-full h-full bg-[url('https://keenthemes.com/static/metronic/tailwind/dist/assets/media/images/2600x1200/bg-10.png')] bg-cover bg-no-repeat">
      <h2 class="text-3xl text-center font-bold py-5 text-[#425A8B]">فرم ایجاد محصول</h2>
      <div class="w-2/3 mx-auto border border-[#D5DFE4] rounded-[10px] text-[#425A8B] p-5 bg-white">
         <form action="{{route('product-store')}}" method="post">
            @csrf
               <div class="w-full flex flex-col">
                  <label for="title" class="mb-2 flex flex-row items-center">
                     <span>نام محصول:</span>
                     <span class="text-rose-500">*</span>
                  </label>
                  <input type="text" class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4]" name="title" id="title" placeholder="نام محصول را وارد کنید" required>
               </div>
               <div class="w-full flex flex-col mt-5">
                  <label for="description" class="mb-2">توضیحات محصول:</label>
                  <textarea name="description" class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4]" rows="4" id="description" placeholder="توضیحات محصول را وارد کنید"></textarea>
               </div>
            <div class="flex flex-col-reverse md:flex-row gap-5 md:gap-10 mt-5">
               <div class="md:w-1/2 flex flex-col">
                  <label for="image" class="mb-2">عکس محصول:</label>
                  <input type="file" class="w-fit outline-none pr-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4]" name="image" id="image">
               </div>
               <div class="md:w-1/2 flex flex-col">
                  <label for="summary" class="mb-2">خلاصه محصول:</label>
                  <input type="text" class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4]" placeholder="خلاصه" name="summary" id="summary">
               </div>
            </div>
            <div class="mt-5 flex flex-col gap-3">
               <label for="category_id">دسته بندی :</label>
               <select name="category_id" id="categoroy_id" class="md:w-2/3">
                  <option hidden>یک دسته بندی برای محصول انتخاب کنید</option>
                  @foreach($categories as $category)
                  <option value="{{$category->id}}">{{$category->title}}</option>
                  @endforeach
               </select>
            </div>
           <div class="mt-5 text-center">
              <button type="submit" class="py-3 px-5 rounded-[10px] bg-[#1B84FF] hover:bg-[#056EE9] text-white cursor-pointer">ثبت</button>
           </div>
         </form>
      </div>
   </div>
</body>

</html>