<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="{{ url('assets/css/style.css') }}" type="text/css">
   <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
   <title>create product attributes</title>
</head>

<body>
   <div class="w-full h-svh bg-[url('https://keenthemes.com/static/metronic/tailwind/dist/assets/media/images/2600x1200/bg-10.png')] bg-cover bg-no-repeat">
      <h2 class="text-3xl text-center font-bold py-5 text-[#425A8B]">فرم ایجاد ویژگی های محصول</h2>
      <div class="w-2/3 mx-auto border border-[#D5DFE4] rounded-[10px] text-[#425A8B] p-5 bg-white">
         <form action="{{route('productAttribute-store')}}" method="post">
            @csrf
            <div class="flex flex-col gap-3">
               <label for="product_id" class="mb-2 flex flex-row items-center">
                  <span>محصول : </span>
                  <span class="text-rose-500">*</span>
               </label>
               <select name="product_id" id="product_id" class="md:w-1/2 bg-[#F9F9F9] py-3 pr-5 rounded-[10px]" required>
                  <option hidden value="">یک محصول انتخاب کنید</option>
                  @foreach($products as $product)
                  <option value="{{$product->id}}">{{$product->title}}</option>
                  @endforeach
               </select>
            </div>
            <div class="mt-4 w-full flex flex-col">
               <label for="attribute_key" class="mb-2 flex flex-row items-center">
                  <span>نام ویژگی محصول:</span>
                  <span class="text-rose-500">*</span>
               </label>
               <input type="text" class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4]" name="attribute_key" id="attribute_key" placeholder="نام ویژگی محصول را وارد کنید" required>
            </div>
            <div class="mt-4 w-full flex flex-col">
               <label for="attribute_value" class="mb-2 flex flex-row items-center">
                  <span>مقدار ویژگی محصول:</span>
                  <span class="text-rose-500">*</span>
               </label>
               <input type="text" class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4]" name="attribute_value" id="attribute_value" placeholder="مقدار ویژگی محصول را وارد کنید" required>
            </div>
            <div class="mt-5 text-center">
               <button type="submit" class="py-3 px-10 rounded-[10px] bg-[#1B84FF] hover:bg-[#056EE9] text-white cursor-pointer">ثبت</button>
            </div>
         </form>
      </div>
   </div>
</body>

</html>