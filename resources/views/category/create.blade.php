<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="{{ url('assets/css/style.css') }}" type="text/css">
   <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
   <title>create category</title>
</head>


<body>
@extends('dashboard')
   @section('content')
   <div class="w-full h-full pb-10">
      <h2 class="text-3xl text-center font-bold py-10 text-[#425A8B]">فرم ایجاد دسته بندی</h2>
      <div class="w-2/3 mx-auto border border-[#D5DFE4] rounded-[10px] text-[#425A8B] p-5 bg-white">
         <form action="{{route('category-store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="w-full flex flex-col">
               <label for="catTitle" class="mb-2 flex flex-row items-center">
                  <span>
                     عنوان دسته بندی:
                     <span class="text-rose-500">*</span>
                  </span>
               </label>
               <input type="text" class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4]" name="title" id="catTitle" placeholder="نام دسته را وارد کنید" required>
            </div>
            <div class="w-full flex flex-col mt-5">
               <label for="cat_desc" class="mb-2">توضیحات دسته بندی:</label>
               <input type="text" class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4]" placeholder="توضیحات" name="description" id="cat_desc">
            </div>
            <div class="flex flex-col-reverse md:flex-row gap-5 md:gap-10 mt-5">
               <div class="md:w-1/2 flex flex-col">
                  <label for="parent_id">دسته بندی :</label>
                  <select name="parent_id" id="parent_id" class="md:w-1/2 bg-[#F9F9F9] py-3 pr-5 rounded-[10px]">
                     <option value="0">بدون والد</option>
                     @foreach($categories as $category)
                     <option value="{{$category->id}}">{{$category->title}}</option>
                     @endforeach
                  </select>
               </div>
               <div class="md:w-1/2 flex flex-col">
                  <label for="image" class="mb-2">عکس دسته بندی:</label>
                  <input type="file" class="w-fit outline-none pr-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4]" name="image" id="image">
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