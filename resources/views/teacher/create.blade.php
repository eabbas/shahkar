<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('teacher.store') }}"  enctype='multipart/form-data' method="POST">
        @csrf
           <div class="min-h-screen flex items-start justify-center">
            <div class="bg-white rounded-2xl shadow-md p-3 w-full md:w-9/12">
                <div class="text-center mb-4">
                </div class="w-full">
            <div class="md:flex md:flex-row md:w-full md:items-center md:gap-5">
              
                <div class="md:flex md:flex-col md:w-full">
                        <fieldset class="mt-2 text-sm md:text-base border border-gray-400 rounded-[15px] py-1 pr-3" >
                            <legend class="kelass p-1 w-30 bg-[#1cb7fd] text-white rounded-full flex flex-row justify-center text-sm">عکس</legend>
                            <input type="file" name='profile_img' class="w-full px-2 py-1 md:px-2 outline-none text-gray-500">
                        </fieldset>
              
                         <fieldset class="mt-2 text-sm md:text-base border border-gray-400 rounded-[15px] py-1 pr-3">
                            <legend class="p-1 w-30 bg-[#1cb7fd] text-white rounded-full flex flex-row justify-center text-sm">اسم</legend>
                            <input type="text" name='name'  class="w-full px-2 py-1 md:px-2 outline-none text-gray-500">
                        </fieldset>
                </div>
                
                <div class="md:flex md:flex-col md:w-full">
                          <fieldset class="mt-2 text-sm md:text-base border border-gray-400 rounded-[15px] py-1 pr-3">
                            <legend class="p-1 w-30 bg-[#1cb7fd] text-white rounded-full flex flex-row justify-center text-sm">بیوگرافی</legend>
                            <input type="text" name='bio' class="w-full px-2 py-1 md:px-2 outline-none text-gray-500">
                        </fieldset>
                </div>
                <div class="md:flex md:flex-col md:w-full">
                          <fieldset class="mt-2 text-sm md:text-base border border-gray-400 rounded-[15px] py-1 pr-3">
                            <legend class="p-1 w-30 bg-[#1cb7fd] text-white rounded-full flex flex-row justify-center text-sm">تخصص</legend>
                            <input type="text" name='expertise' class="w-full px-2 py-1 md:px-2 outline-none text-gray-500">
                        </fieldset>
                </div>
                <div class="md:flex md:flex-col md:w-full">
                          <fieldset class="mt-2 text-sm md:text-base border border-gray-400 rounded-[15px] py-1 pr-3">
                            <legend class="p-1 w-30 bg-[#1cb7fd] text-white rounded-full flex flex-row justify-center text-sm">شماره تلفن</legend>
                            <input type="text" name='phone' class="w-full px-2 py-1 md:px-2 outline-none text-gray-500">
                        </fieldset>
                </div>
               <ul class="w-full px-4 py-3  mt-2">
                        <li>
                                 <fieldset class="mt-2 text-sm md:text-base border border-gray-400 rounded-[10px] py-1 pr-3" for="province">
                            <legend class="w-20 rounded-full flex flex-row justify-center text-sm">اینستاگرام:</legend>
                            <input type="text" name='social_media[instagram]' placeholder="آدرس شبکه های اجتماعی" class="w-full px-2 py-1 md:px-2 outline-none text-gray-500">
                        </fieldset>
                        </li>   
                        <li>
                           
                                 <fieldset class="mt-2 text-sm md:text-base border border-gray-400 rounded-[10px] py-1 pr-3" for="province">
                            <legend class="w-15 rounded-full flex flex-row justify-center text-sm">تلگرام:</legend>
                            <input type="text" name='social_media[telegram]' placeholder="آدرس شبکه های اجتماعی" class="w-full px-2 py-1 md:px-2 outline-none text-gray-500">
                        </fieldset>
                        </li>
                        <li>
                                    <fieldset class="mt-2 text-sm md:text-base border border-gray-400 rounded-[10px] py-1 pr-3" for="province">
                            <legend class="w-17 rounded-full flex flex-row justify-center text-sm">واتساپ:</legend>
                            <input type="text" name='social_media[whatsapp]' placeholder="آدرس شبکه های اجتماعی" class="w-full px-2 py-1 md:px-2 outline-none text-gray-500">
                        </fieldset>
                        </li>
                    </ul>

            </div>

                </div>
            </div>

                <button type="submit"
                    class="active:bg-[#0080e5] mt-2 w-full bg-[#03A9F4] text-white py-3 rounded-md hover:bg-blue-700 transition duration-200 font-medium">
                    ارسال اطلاعات
                </button>
            </div>
        </div>
         </fieldset>
    </form>
</body>
</html>