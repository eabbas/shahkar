<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="{{ url('assets/css/style.css') }}" type="text/css">
   <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
   <title>create contact us</title>
</head>

<body>
   @extends('dashboard')
   @section('content')
   <div class="w-full h-full pb-10">
      <h2 class="text-3xl text-center font-bold py-5 text-[#425A8B]">فرم تماس با ما</h2>
      <div class="w-3/4 mx-auto border border-[#D5DFE4] rounded-[10px] text-[#425A8B] p-5 bg-white">
         <form action="{{route('contactus-update')}}" method="post" class="flex flex-col items-stretch justify-center gap-5">
            @csrf
            <input type="hidden" name="id" value="{{$cu['id']}}">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
               <div class="flex flex-col">
                  <label for="name" class="mb-2 flex flex-row items-center">
                     <span>نام :</span>
                     <span class="text-rose-500">*</span>
                  </label>
                  <input type="text" class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4]" name="name" id="name" placeholder="نام را وارد کنید" required value="{{$cu['name']}}">
               </div>
               <div class="flex flex-col">
                  <label for="family" class="mb-2 flex flex-row items-center">
                     <span>نام خانوادگی :</span>
                     <span class="text-rose-500">*</span>
                  </label>
                  <input type="text" class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4]" name="family" id="family" placeholder="نام خانوادگی را وارد کنید" required value="{{$cu['family']}}">
               </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
               <div class="flex flex-col">
                  <label for="email" class="mb-2 flex flex-row items-center">
                     <span>ایمیل :</span>
                     <span class="text-rose-500">*</span>
                  </label>
                  <input type="email" class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4]" name="email" id="email" placeholder="ایمیل را وارد کنید" required value="{{$cu['email']}}">
               </div>
               <div class="flex flex-col">
                  <label for="phoneNum" class="mb-2 flex flex-row items-center">
                     <span>شماره تماس :</span>
                     <span class="text-rose-500">*</span>
                  </label>
                  <input type="number" class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4]" name="phoneNum" id="phoneNum" placeholder="شماره تماس را وارد کنید" required value="{{$cu['phoneNum']}}">
               </div>
            </div>
            <div class="">
               <div class="flex flex-col">
                  <label for="description" class="mb-2 flex flex-row items-center">
                     <span>توضیحات :</span>
                     <span class="text-rose-500">*</span>
                  </label>
                  <textarea class="h-40 outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4]" name="description" id="description" placeholder="توضیحات را وارد کنید" required>{{$cu['description']}}</textarea>
               </div>
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