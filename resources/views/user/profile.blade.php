<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>panel</title>
</head>
<body>
    <header class="2xl:container mx-auto w-full border-b border-gray-300">
        <!-- desktop menu -->
        <div class="w-11/12 mx-auto hidden lg:flex flex-row justify-between items-center py-7">
            <div class="w-7/12">
                <ul class="w-ful flex flex-row gap-5">
                    <li>
                        <a href="#">
                            تست
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            تست
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            تست
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            تست
                        </a>
                    </li>
                </ul>
            </div>
            <div class="w-3/12 flex flex-row justify-end items-center gap-3">
                <span class="text-sm font-semibold text-gray-600"> {{$user -> name}}   {{$user -> family}}</span>
                <img src="https://picsum.photos/200/300" class="size-10 rounded-full border-2 border-gray-500" alt="user picture">
            </div>
        </div>
        <!-- desktop menu -->

        <!-- mobile menu -->
         <div class="lg:hidden w-11/12 mx-auto py-2 flex flex-row justify-between items-center">
            <div class="flex flex-row justify-start items-center gap-3">
                <img src="https://picsum.photos/200/300" class="size-10 rounded-full border-2 border-gray-500" alt="user picture">
                <span class="text-xs font-semibold text-gray-600">حاج محمد اکبرنژاد</span>
            </div>
            <div class="w-8 h-5 flex flex-col justify-between items-center" onclick="mobileMenu('open')">
                <span class="inline-block w-full h-px bg-gray-600"></span>
                <span class="inline-block w-full h-px bg-gray-600"></span>
                <span class="inline-block w-full h-px bg-gray-600"></span>
            </div>
            <div class="fixed top-0 -right-full w-full h-svh bg-black/50 flex flex-row transition-all duration-500 ease-in-out" id="hamburgerMenu">
                <div class="w-8/12 h-full bg-white">
                    <div class="border-b border-gray-300 p-2">
                        <div class="w-full flex flex-row justify-start items-center gap-3">
                            <img src="https://picsum.photos/200/300" class="size-10 rounded-full border-2 border-gray-500" alt="user picture">
                            <span class="text-xs font-semibold text-gray-600">حاج محمد اکبرنژاد</span>
                        </div>
                    </div>
                    <div class="h-[537px] overflow-y-auto">
                        <ul class="w-full p-2">
                            <li class="border-b border-gray-300">
                                <a href="{{route('user_edit' ,$user -> id)}}" class="inline-block w-full py-3 px-4 text-sm">ادیت پروفایل</a>
                            </li>
                            <li class="border-b border-gray-300">
                                <a href="{{route('user_delete' , $user -> id)}}" class="inline-block w-full py-3 px-4 text-sm">حذف حساب کاربری</a>
                            </li>
                            <li class="border-b border-gray-300">
                                <a href="{{route('user_logOtu')}}" class="inline-block w-full py-3 px-4 text-sm">خروج از حساب کاربری</a>
                            </li>
                            
                            @if($user -> is_admin == "1")
                                <li class="border-b border-gray-300">
                                    <a href="{{route('user_index')}}" class="inline-block w-full py-3 px-4 text-sm">نمایش کاربران</a>
                                </li>
                            @endif

                            <li class="border-b border-gray-300">
                                <a href="#" class="inline-block w-full py-3 px-4 text-sm">تست</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="w-4/12 h-full bg-transparent" onclick="mobileMenu('close')"></div>
            </div>
         </div>
       
        <!-- mobile menu -->
    </header>

    <main class="w-full flex flex-row">
  

    <aside class="hidden w-3/12 lg:h-[500px] border-l border-gray-300 lg:block">
        <ul class="w-full p-2">
            <li class="border-b border-gray-300">
                <a href="{{route('user_edit' ,$user -> id)}}" class="inline-block w-full py-3 px-4 text-sm">ادیت پروفایل</a>
            </li>
            <li class="border-b border-gray-300">
                <a href="{{route('user_delete' , $user -> id)}}" class="inline-block w-full py-3 px-4 text-sm">حذف حساب کاربری</a>
            </li>
            <li class="border-b border-gray-300">
                <a href="{{route('user_logOtu')}}" class="inline-block w-full py-3 px-4 text-sm">خروج از حساب کاربری</a>
            </li>
                                        
            @if($user -> is_admin == "1")
                <li class="border-b border-gray-300">
                    <a href="{{route('user_index')}}" class="inline-block w-full py-3 px-4 text-sm">نمایش کاربران</a>
                </li>
            @endif

            <li class="border-b border-gray-300">
                <a href="#" class="inline-block w-full py-3 px-4 text-sm">تست</a>
            </li>
        </ul>
    </aside>


    <div class="w-9/12">
        
    </div>





    </main>

    <script>
        
        let hamburgerMenu = document.getElementById('hamburgerMenu')
        function mobileMenu(state){
            if (state == "open") {
                hamburgerMenu.classList.remove('-right-full')
                hamburgerMenu.classList.add('right-0')
            }
            if (state == "close") {
                hamburgerMenu.classList.remove('right-0')
                hamburgerMenu.classList.add('-right-full')
            }
        }
        
    </script>
</body>
</html>