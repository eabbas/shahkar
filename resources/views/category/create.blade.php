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

   
   <div class="2xl:contaner mx-auto w-8/10 max-h-[100vh]">
        <form action="#">
            <div class="mx-[3%]">
                <div class="flex justify-between">
                    <div>
                        <h1 class="font-bold">افزودن دسته بندی</h1>
                        <span class="text-[#071437bf]">خانه - تجارت - کاتالوگ</span>
                    </div>
                    <!-- <div class="flex flex-row-reverse">
                        <a href="#"
                            class="rounded-md bg-[#1B84FF] p-[10px] m-[5px]  text-white w-[100px] text-center">ساختن</a>
                        <a href="#"
                            class="rounded-md bg-[#F1F1F4] p-[10px] m-[5px] flex flex-row-reverse justify-evenly items-center w-[100px] text-center items-center">
                            <span>فیلتر</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5 
                            stroke=" currentColor" class="size-4 fill-black items-end">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 0 1-.659 1.591l-5.432 5.432a2.25 2.25 0 0 0-.659 1.591v2.927a2.25 2.25 0 0 1-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 0 0-.659-1.591L3.659 7.409A2.25 2.25 0 0 1 3 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0 1 12 3Z" />
                            </svg>

                        </a>
                    </div> -->
                </div>
            </div>
            <div class="grid grid-cols-[40%_60%] max-md:grid-cols-[100%]">
                <div>
                    <div
                        class="flex flex-col items-center text-center p-[40px] m-[20px] rounded-lg shadow-xl/30]">
                        <div class="w-full text-right mb-[7%]">
                            <h2 class="text-[130%] font-bold">
                                عکس محصول
                            </h2>
                        </div>
                        <div
                        class="flex flex-col items-center text-center">
                            <div class="rounded-lg shadow-xl/30] w-[50%] mb-[1/14] font-bold">
                              <!-- This photo was in a previous project. Now solve the problem with this photo yourself. -->
                                <img src="../../../../imags/download.png" alt="">
                                <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                            </svg> -->
                            </div>

                            <span class="text-[#99A1B7] text-[75%] w-[93%] p-[4%]">
                                Set the category thumbnail image. Only
                                *.png, *.jpg and *.jpeg image files are
                                accepted.
                            </span>
                        </div>
                    </div>
                    <div
                        class="flex flex-col items-center text-center p-[10%] m-[5%] rounded-lg shadow-xl/30] bg-white">
                        <div class="flex items-center justify-between w-full">
                            <h1 class="text-[130%] font-bold">
                              دسته بندی
                            </h1>
                            <div class="bg-[aqua] w-[10px] h-[10px] rounded-lg"></div>
                        </div>
                        <select name="#" id="#"
                            class="solid rounded-lg border border-solid border-[#C4CADA] h-[50px] w-full">
                            <option value="#" selected>
                              بدون والد
                            </option>
                        </select>
                        <span class="text-[75%] text-right text-[#99A1B7] w-full p-2">
                            دسته بندی والد رو انتخواب کنید.
                        </span>
                    </div>
                </div>
                <div>
                    <div class="flex flex-col items-flex-start p-[4%] m-[20px] rounded-lg shadow-xl/30] bg-white">
                        <h1 class="text-right text-[130%] font-bold">عمومی</h1>
                        <div class="text-right w-full mt-[20px]">
                            <span class="text-[85%] block mb-2">
                                عنوان دسته بندی: *
                            </span>
                            <input type="text" placeholder="نام دسته بندی"
                                class="solid rounded-lg border border-solid border-[#C4CADA] h-[50px] w-full p-2">
                            <span class="text-[#99A1B7] text-[75%] p-2">نام دسته مورد نیاز است و توصیه می شود منحصر به
                                فرد
                                باشد.</span>
                        </div>
                        <div class="text-right w-full mt-[20px]">
                            <span class="text-[85%] block mb-p2">
                              توضیحات دسته بندی:
                            </span>
                            <div class="border border-solid rounded-lg border-[#C4CADA]">
                                <div class="flex h-8">
                                    <div class="flex gap-8 items-center">
                                        <span>Normal</span>
                                        <svg viewBox="0 0 18 18" class="size-[30px]">
                                            <polygon class="ql-stroke" points="7 11 9 13 11 11 7 11"></polygon>
                                            <polygon class="ql-stroke" points="7 7 9 5 11 7 7 7"></polygon>
                                        </svg>
                                    </div>
                                    <div class="flex gap-4 items-center">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M17.995 3.744v7.5a6 6 0 1 1-12 0v-7.5m-2.25 16.502h16.5"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M5.248 20.246H9.05m0 0h3.696m-3.696 0 5.893-16.502m0 0h-3.697m3.697 0h3.803">
                                                </path>
                                            </svg>

                                        </div>
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                                <path stroke-linejoin="round"
                                                    d="M6.75 3.744h-.753v8.25h7.125a4.125 4.125 0 0 0 0-8.25H6.75Zm0 0v.38m0 16.122h6.747a4.5 4.5 0 0 0 0-9.001h-7.5v9h.753Zm0 0v-.37m0-15.751h6a3.75 3.75 0 1 1 0 7.5h-6m0-7.5v7.5m0 0v8.25m0-8.25h6.375a4.125 4.125 0 0 1 0 8.25H6.75m.747-15.38h4.875a3.375 3.375 0 0 1 0 6.75H7.497v-6.75Zm0 7.5h5.25a3.75 3.75 0 0 1 0 7.5h-5.25v-7.5Z">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="flex gap-4 items-center">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M8.25 15 12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <hr class="border-[#C4CADA]">
                                <div contenteditable="true" class="h-[150px]">
                                    <span>
                                       توضیحات خود را اینجا بنویسید.
                                    </span>
                                </div>
                            </div>

                            <span class="text-[#99A1B7] text-[75%] p-2">
                                برای مشاهده بهتر، یک توضیح برای دسته تنظیم کنید.
                            </span>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="text-left flex justify-end">
                <a href="#" class=" bg-[#F1F1F4] block m-[20px] h-[50px] min-w-[130px] rounded-[10px] p-[10px] text-center">
                    انصراف
                </a>
                <button class="block m-[20px] bg-[blue] h-[50px] min-w-[130px] rounded-[10px] p-[10px] text-center text-white">
                    ذخیره تغییرات
                </button>
            </div>
        </form>
    </div>
    
<!-- 
    <hr>
    <hr>
    <hr>
    <hr>
   <div class="w-full h-svh bg-[url('https://keenthemes.com/static/metronic/tailwind/dist/assets/media/images/2600x1200/bg-10.png')] bg-cover bg-no-repeat">
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
                  <label for="image" class="mb-2">عکس محصول:</label>
                  <input type="file" class="w-fit outline-none pr-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4]" name="image" id="image">
               </div>
            </div>
            <div class="mt-5 text-center">
               <button type="submit" class="py-3 px-10 rounded-[10px] bg-[#1B84FF] hover:bg-[#056EE9] text-white cursor-pointer">ثبت</button>
            </div>
         </form>
      </div>
   </div> -->
</body>

</html>