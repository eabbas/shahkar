@extends('app.document')
@section('title')
    شاهکار | {{ $course->title }}
@endsection
@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/course.css') }}">
    {{-- <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>عنوان</th>
                    <th>توضیحات</th>
                    <th>خلاصه</th>
                    <th>قیمت</th>
                    <th>تخفیف</th>
                    <th>مدت</th>
                    <th>پیشرفت</th>
                    <th>مدرس‌ها</th>
                    <th>صفحه اصلی</th>
                    <th>رایگان</th>
                    <th>عکس</th>
                    <th>ویدیو</th>
                    <th>دسته‌بندی</th>
                    <th>سطح</th>
                    <th>وضعیت</th>
                    <th>عملیات</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>{{ $course->id }}</td>
                    <td>{{ $course->title }}</td>
                    <td>{{ $course->description }}</td>
                    <td>{{ $course->summary }}</td>
                    <td>{{ $course->price }}</td>
                    <td>{{ $course->discount }}</td>
                    <td>{{ $course->duration }}</td>
                    <td>{{ $course->progress }}</td>

                    <td class="teachers-box">
                        @foreach ($course->teachers as $teacher)
                            <span>{{ $teacher->name }}</span>
                        @endforeach
                    </td>

                    <td>
                        @if ($course->show_in_home)
                            <span class="tag-yes">✔ نمایش</span>
                        @else
                            <span class="tag-no">✘ مخفی</span>
                        @endif
                    </td>

                    <td>
                        @if ($course->free)
                            <span class="tag-yes">رایگان</span>
                        @else
                            <span class="tag-no">غیررایگان</span>
                        @endif
                    </td>

                    <td>
                        <img src="{{ asset('storage/' . $course->img) }}" class="thumb">
                    </td>

                    <td>
                        <img src="{{ asset('storage/' . $course->video) }}" class="thumb">
                    </td>

                    <td>
                        @if ($cat_course)
                            {{ $cat_course->title }}
                        @else
                            <span class="tag-no">ندارد</span>
                        @endif
                    </td>

                    <td>
                        @if ($levels)
                            {{ $levels->title }}
                        @endif
                    </td>

                    <td>
                        @if ($statuses)
                            {{ $statuses->title }}
                        @endif
                    </td>

                    @php
                        $userCourse = [];
                        if (auth()->user()) {
                            $roles = auth()->user()->roles->pluck('id')->toArray();
                            $userCourse = auth()->user()->courses->pluck('id')->toArray();
                        }
                    @endphp
                    @if (!in_array($course->id, $userCourse))
                        <a href="{{ route('userCourse.store', [$course->id]) }}" class="btn btn-register">
                            🎓 ثبت‌نام
                        </a>
                    @else
                        <P class="btn btn-register">شما شرکت کردین</P>
                    @endif

                    <a href="{{ route('course.seasons', [$course]) }}" class="btn btn-edit">
                        فصل ها
                    </a>

                    </td>

                </tr>
            </tbody>
        </table> --}}




    {{--  <header class="flex w-full  flex-col items-center gap-30"> --}}
    {{-- <div class="flex w-full justify-center flex-col items-center bg-[#fff] z-10  ">
            <div class="w-full flex justify-center fixed top-0 left-0 h-25 bg-[#fff] px-5">
                <section class="xl:w-10/12 w-11/12 lg:h-30 h-25 w-full flex justify-between items-center  ">
                        <div class="flex gap-5 items-center  hidden lg:flex">
                            <img src="https://elhammat.com/wp-content/uploads/2025/04/logo-v1-1.png" alt="" class="xl:w-[160px] lg:w-[140px]">
                            <div class=" w-50 h-11 bg-[#dcf0d8] flex items-center justify-center gap-2 rounded-xl heder_hover_item cursor-pointer">
                               
                               

                                    <img src="	https://elhammat.com/wp-content/uploads/2025/04/Widget-1.svg" alt=""  >
                                    <span class="text-[15px] text-[#35B40E]">دسته بندی دوره ها</span>
                                    <img src="https://icongr.am/entypo/chevron-small-down.svg?size=30&color=11ff00" alt="">
                                    <!-- <div class="invisible opacity-0   ">
                                        <ul class="flex flex-col w-50 h-100 fixed top-20 right-5  gap-2 bg-green-500 lg:text-[18px] text-[14px] text-[#fff] pb-2">
                                            <li class="w-full h-13 hover:bg-[#fff]  hover:text-[#000] flex items-center gap-3 pr-2">
                                                <img src="https://elhammat.com/wp-content/uploads/2025/04/Chat-Square-Code.svg" alt="" class="w-6"> 
                                                <a href=" "> برنامه نویسی</a>
                                            </li>
                                            <li class="w-full h-13 hover:bg-[#fff] hover:text-[#000] flex items-center gap-3 pr-2">
                                                <img src="https://elhammat.com/wp-content/uploads/2025/04/Shield-Check.svg" alt="" class="w-6"> 
                                            <a href="">امنیت</a>
                                            </li>
                                            <li class="w-full h-13 hover:bg-[#fff] hover:text-[#000] flex items-center gap-3 pr-2">
                                                <img src="https://elhammat.com/wp-content/uploads/2025/04/Windows-Linear-32px.svg" alt="">
                                                <a href="">سیستم عامل</a>
                                            </li>
                                            <li class="w-full h-13 hover:bg-[#fff] hover:text-[#000] flex items-center gap-3 pr-2">
                                                <img src="https://elhammat.com/wp-content/uploads/2025/04/Ruler-Pen.svg" alt="">
                                                <a href="">طراحی گرافیک</a>
                                            </li>
                                            <li class="w-full h-13 hover:bg-[#fff] hover:text-[#000] flex items-center gap-3 pr-2">
                                                <img src="https://elhammat.com/wp-content/uploads/2025/04/gps.svg" alt="">
                                                <a href="">وردپرس</a>
                                            </li>
                                            <li class="w-full h-13 hover:bg-[#fff] hover:text-[#000] flex items-center gap-3 pr-2">
                                                <img src="https://elhammat.com/wp-content/uploads/2025/04/Square-Academic-Cap-2-1.svg" alt="">
                                                <a href="">مهارت نرم</a>
                                            </li>
    
                                        </ul>
                                    </div> -->
                                        <div class="absolute w-2000 h-2000 dark_background bg-black/20 hidden  opacity-0 transition-all duration-250 ease-in delay-250ms"></div>
                                        <div class="absolute top-23 bg-[#fff] rounded-2xl invisible opacity-0 transition-all duration-250 ease-in delay-250 heder_hover_items_item">
                                            <ul class=" w-45 h-42 flex flex-col gap-3 justify-center pr-4 text-[#838383]">
                                                <li class="w-full  hover:text-green-600">حساب کاربری</li>
                                                <li class="w-full  hover:text-green-600">سبد خرید</li>
                                                <li class="w-full  hover:text-green-600">پرداخت</li>
                                                <li class="w-full  hover:text-green-600">پروفایل مدرس</li>
                                            </ul>
                                        </div>
                                    
                            </div>
                        </div>
                        <div class="flex items-center xl:gap-6 lg:gap-2 ">
                            <div class="hidden lg:flex">
                                
                                <ul class="flex xl:gap-5 lg:gap-1 text-[16px]">
                                    <li class="w-24 h-9 flex justify-center rounded-2xl hover:bg-[#ceedc5] hover:text-green-600">
                                        <a href="">صفحه اصلی</a> 
                                    </li>
                                    <li class="w-15 h-9 flex justify-center rounded-2xl hover:bg-[#ceedc5] hover:text-green-600 heder_hover_item">
                                        <div class="absolute w-2000 h-2000 dark_background bg-black/20 hidden  opacity-0 transition-all duration-250 ease-in delay-250ms"></div>
                                        <div class="absolute top-23 r  bg-[#fff] rounded-2xl invisible opacity-0 transition-all duration-250 ease-in delay-250 heder_hover_items_item">
                                            <ul class=" w-45 h-42 flex flex-col gap-3 justify-center pr-4 text-[#838383]">
                                                <li class="w-full  hover:text-green-600">حساب کاربری</li>
                                                <li class="w-full  hover:text-green-600">سبد خرید</li>
                                                <li class="w-full  hover:text-green-600">پرداخت</li>
                                                <li class="w-full  hover:text-green-600">پروفایل مدرس</li>
                                            </ul>
                                        </div>
                                    <a href="">دوره ها</a>
                                    </li>
                                    <li class="w-13 h-9 flex justify-center rounded-2xl hover:bg-[#ceedc5] hover:text-green-600 heder_hover_item">
                                        <div class="absolute w-2000 h-2000 dark_background bg-black/40 hidden  opacity-0 transition-all duration-250 ease-in delay-250ms "></div> 
                                        <div class="absolute top-23 bg-[#fff] rounded-2xl invisible opacity-0 transition-all duration-250 ease-in delay-250ms heder_hover_items_item">
                                            <ul class=" w-60 h-35 flex flex-col gap-3 justify-center pr-4 text-[#838383]">
                                                <li class="w-full  hover:text-green-600">
                                                    <a href="">وبلاگ</a>
                                                </li>
                                                <li class="w-full  hover:text-green-600">
                                                    <a href="">نوشته فرمت ویدئوی</a>
                                                </li>
                                                <li class="w-full  hover:text-green-600">
                                                    <a href="">نوشته فرمت صوتی</a>
                                                </li>
                                                

                                            </ul>
                                        </div>
                                    <a href="">وبلاگ</a>
                                    </li>
                                    <li class="w-17 h-9 flex justify-center rounded-2xl hover:bg-[#ceedc5] hover:text-green-600">
                                    <a href="">درباره ما</a>
                                    </li>
                                    <li class="w-21 h-9 flex justify-center rounded-2xl hover:bg-[#ceedc5] hover:text-green-600">
                                        <a href="">تماس با ما </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="flex xl:gap-4 lg:gap-2 items-center hidden lg:flex">
                                <span class="w-[2px] h-6 bg-[#f7f7f7]"></span>
                                <img src="https://elhammat.com/wp-content/uploads/2025/04/Magnifer.svg" alt="">
                                <div class="flex gap-2 w-36 h-13 items-center rounded-2xl justify-center border-1 border-[#f7f7f7] text-[#333333] hover:text-[#827878]" onclick="lagin('opan')" >
                                    <img src="https://icongr.am/clarity/user.svg?size=26&color=currentColor" alt="" onclick="lagin('opan')">
                                    <div class="w-36">ورود / ثبت نام</div>
                                </div>
                            </div>
                        </div>
                        <div class="w-11 h-11 bg-[#35b50e] rounded-full flex justify-center items-center  hidden lg:flex relative " >
                            <img src="	https://elhammat.com/wp-content/uploads/2025/04/Bag-3.svg" alt="" onclick="sopping_basket('open')"> 
                            
                            <div class="absolute top-0 right-8  w-5 h-5 bg-red-600 rounded-full flex justify-center items-center text-sm  hidden lg:flex">0</div>
                        </div>

                        <div class="lg:hidden w-full flex justify-between items-center px-5">
                            <div class=" flex gap-3 items-centerm w-18 h-8 ">
                                <img onclick="hambarger_meno('open')" src="https://icongr.am/clarity/bars.svg?size=20&color=currentColor" alt="">
                                <span>منو</span>
                            </div>
                            <img src="https://elhammat.com/wp-content/uploads/2025/04/logo-v1-1.png" alt="" class="w-30">
                            <div>
                                <img src="https://icongr.am/clarity/shopping-bag.svg?size=25&color=currentColor" alt="" class="w-7 " onclick="sopping_basket('open')"> 
                                <span class=" absolute top-5 left-3 w-5 h-5 bg-red-500 rounded-full flex justify-center items-center">0</span>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div> --}}
    {{-- <div class="fixed top-0 left-0 w-full bg-black/50 backdrop-blur-sm h-[100vh] bg-[#fff] lg:hidden flex flex-row invisible opacity-0 transition-all duration-300 z-11" id="element-hambarger">
            <!-- همبرگر منو -->
             <div class="md:w-2/3 w-1/3 h-full" onclick="hambarger_meno('close')"></div>
             <div class="md:w-1/3 w-2/3 h-full bg-white flex flex-col">
                 <div class="w-[100%] h-20 flex items-center justify-between px-3">
                     <input type="text" class="outline-none w-[80%]" placeholder="جستجوی محصولات">
                     <img src="https://elhammat.com/wp-content/uploads/2025/04/Magnifer.svg" alt="" class="w-6">
                 </div>
                 <div class="w-full h-20 flex justify-between items-center bg-[#f5f5f5]">
                     <button class="w-1/2 h-full hover:bg-[#e8e8e8]" onclick="hambargermeno_meno()">منو</button>
                     <button class="w-1/2 h-full hover:bg-[#e8e8e8]" onclick="hambargermeno_section()">دسته بندی ها</button>
                 </div>
                 <div class="w-full hidden  transition-all duration-300" id="hambarger_meno_sextion">
                     <ul class="flex flex-col gap-2 text-[16px] text-[#000]">
                                 <li class="w-full h-13 flex items-center gap-3 pr-2">
                                     <img src="https://elhammat.com/wp-content/uploads/2025/04/Chat-Square-Code.svg" alt="" class="w-6"> 
                                     <a href=" "> برنامه نویسی</a>
                                 </li>
                                 <li class="w-full h-13 flex items-center gap-3 pr-2">
                                      <img src="https://elhammat.com/wp-content/uploads/2025/04/Shield-Check.svg" alt="" class="w-6"> 
                                     <a href="">امنیت</a>
                                  </li>
                                 <li class="w-full h-13 flex items-center gap-3 pr-2">
                                     <img src="https://elhammat.com/wp-content/uploads/2025/04/Windows-Linear-32px.svg" alt="">
                                     <a href="">سیستم عامل</a>
                                  </li>
                                  <li class="w-full h-13 flex items-center gap-3 pr-2">
                                     <img src="https://elhammat.com/wp-content/uploads/2025/04/Ruler-Pen.svg" alt="">
                                     <a href="">طراحی گرافیک</a>
                                  </li>
                                 <li class="w-full h-13 flex items-center gap-3 pr-2">
                                     <img src="https://elhammat.com/wp-content/uploads/2025/04/gps.svg" alt="">
                                     <a href="">وردپرس</a>
                                  </li>
                                  <li class="w-full h-13 flex items-center gap-3 pr-2">
                                     <img src="https://elhammat.com/wp-content/uploads/2025/04/Square-Academic-Cap-2-1.svg" alt="">
                                     <a href="">مهارت نرم</a>
                                  </li>
     
                     </ul>
                 </div>
                 <div class="w-full">
                     <div class=" w-full flex flex-col transition-all duration-600" id="hambarger_meno_meno">   
                         <ul class=" w-full flex xl:gap-5 lg:gap-1 text-[16px] flex flex-col">
                             <li class="w-full h-16 flex items-center">صفحه اصلی</li>
                             <li class="w-full flex flex-col">
                                <div class="w-full h-20 flex hambergermeno_meno_items justify-between">

                                    <span class="w-[80%] h-full border-1 border-[#e3e3e3] flex items-center"> دوره ها</span>
                                   <div class="w-[20%] h-full border-1 border-[#e3e3e3] flex justify-center items-center ">
                                         <img src="https://icongr.am/entypo/chevron-small-left.svg?size=37&color=887c7c" alt="">
                                   </div>
                                </div>
                                 <div class=" w-full bg-[#fff] rounded-2xl overflow-hidden max-h-0 transition-all duration-250 ease-in delay-250ms  ">
                                     <ul class=" w-45 h-42 flex flex-col gap-3 justify-center pr-4 text-[#838383]">
                                         <li class="w-full  hover:text-green-600">حساب کاربری</li>
                                         <li class="w-full  hover:text-green-600">سبد خرید</li>
                                         <li class="w-full  hover:text-green-600">پرداخت</li>
                                         <li class="w-full  hover:text-green-600">پروفایل مدرس</li>
                                     </ul>
                                 </div>
                             </li>
                             <li class="w-full   flex flex-col">
                                <div class="w-full h-20 flex hambergermeno_meno_items justify-between">

                                    <span class="w-[80%] h-full border-1 border-[#e3e3e3] flex items-center"> دوره ها</span>
                                   <div class="w-[20%] h-full border-1 border-[#e3e3e3] flex justify-center items-center ">
                                         <img src="https://icongr.am/entypo/chevron-small-left.svg?size=37&color=887c7c" alt="">
                                   </div>
                                </div>
                                 <div class=" w-full bg-[#fff] rounded-2xl overflow-hidden max-h-0 transition-all duration-250 ease-in delay-250ms  ">
                                     <ul class=" w-45 h-42 flex flex-col gap-3 justify-center pr-4 text-[#838383]">
                                         <li class="w-full  hover:text-green-600">حساب کاربری</li>
                                         <li class="w-full  hover:text-green-600">سبد خرید</li>
                                         <li class="w-full  hover:text-green-600">پرداخت</li>
                                         <li class="w-full  hover:text-green-600">پروفایل مدرس</li>
                                     </ul>
                                 </div>
                             </li>
                             <li class="w-full h-16 flex items-center">درباره ما</li>
                             <li class="w-full h-16 flex items-center">تماس با ما</li>
                         </ul>
                     </div>
                 </div>
             </div>

        </div> --}}
    {{-- <div class="fixed top-0 left-0 w-full bg-black/50 backdrop-blur-sm h-[100vh]  flex flex-row invisible opacity-0 transition-all duration-300 z-11" id="element-shopping">
            <div class="md:w-2/3 w-1/3 h-full" onclick="sopping_basket('onopen')" ></div>

            <div class="md:w-1/3 w-2/3 h-full bg-[#fff] flex flex-col ">
                <!-- سبد خرید -->
                <div class="w-full h-20 flex items-center justify-between px-3 border-b-1 border-[#928c8c]">
                    <span>سبد خرید</span>
                    <div class="flex gap-2  ">
                        <img src="https://icongr.am/clarity/close.svg?size=29&color=564d4d" alt=""  onclick="sopping_basket('onopen')">
                        <span>بستن</span>
                    </div>
                    
                </div>

            </div>

        </div> --}}
    {{-- <div class="fixed top-0 left-0 w-full h-[100vh] bg-black/50 backdrop-blur-sm flex invisible opacity-0 transition-all duration-300 z-11 hidden lg:flex" id="element-lagin" >
            <div class="xl:w-3/4 lg:w-2/4 h-full" onclick="lagin('cluse')"></div>
            <div class=" xl:w-1/4 lg:w-2/4 h-[100vh] bg-[#fff] flex flex-col gap-4 p-2 ">
                <!-- ورود و ثبت نام  -->
                 <div class="w-full h-20 flex items-center justify-between px-3 border-b-1 border-[#928c8c]">
                    <span>ورود </span>
                    <div class="flex gap-2  ">
                        <img src="https://icongr.am/clarity/close.svg?size=29&color=564d4d" alt="" onclick="lagin('cluse')">
                        <span>بستن</span>
                    </div>
                </div>
                <form action="" class="flex flex-col gap-5 ">
                    <label for="name-enter text-[#242424]">نام کاربری یا آدرس ایمیل *</label>
                    <input type="text" id="name-enter" class="w-[98%] h-10 border-1 rounded-2xl outline-none border-1 border-[#3A3A3A]">
                    <label for="password-enter text-[#242424] ">رمز عبور *</label>
                    <input type="password" id="password-enter" class="w-[98%] h-10 border-1 rounded-2xl outline-none border-1 border-[#3A3A3A] ">
                    <input type="submit" value="ورود" class="w-[98%] h-9 bg-[#35b50e] text-[#fff] mx-auto ">
                </form>
                <div class="flex justify-between text-[15px] border-b-1 border-[#3A3A3A] pb-5  ">
                    <div class="flex gap-2">
                        <input type="checkbox">
                        <span> مرا به خاطر بسپار</span>
                    </div>
                    <a href="" class="text-[#35b50e]">رمز عبور را فراموش کرده اید؟</a>
                </div>
                <div class="flex justify-center flex-col items-center ">
                    <img src="https://icongr.am/material/account.svg?size=101&color=b9b1b1" alt="" class="w-40">
                    <p>هنوز حساب کاربری ندارید؟</p>
                    <a href="" class="underline decoration-[#35b50e] decoration-[3px]  underline-offset-7 ">ایجاد حساب کاربری</a>
                </div>
    
            </div>
        </div> --}}




    {{--    </header> --}}















































    <div class="w-full bg-[f7f7f7]">
        <div class="sm:w-11/12 w-full mx-auto flex flex-col items-center gap-10 mt-10">

            <section class="w-full mx-auto bg-white flex bg-[#fff] justify-center pt-3">
                <div class="w-full flex flex-col items-center">
                    <div class="w-full h-10 flex text-(--color-secondary-text) flex gap-2">
                        <a href="">خانه</a>
                        <span>/</span>
                        <a href="">آموزش پروژه محور فریمورک</a>
                        <span>/</span>
                        <a href="">Fastify</a>
                    </div>
                    <div class="w-full flex lg:flex-row flex-col gap-4 items-center mb-5">
                        <div class="lg:w-1/2 w-full flex flex-col gap-2 order-1 lg:order-0">
                            <h2 class=" md:text-[26px] text-[18px] font-bold text-(--color-text)">آموزش پروژه محور فریمورک
                                Fastify</h2>
                            <span>
                                <img src="https://icongr.am/entypo/star-outlined.svg?size=23&color=7a7171" alt="">
                            </span>
                            <span class="text-(--color-secondary-text)">0رای</span>
                            <span class="text-(--color-secondary-text) text-[17px]">حدود 99 ساعت آموزش جامع و تخصصی ری اکت!
                                شما در دوره آموزش ری اکت ReactJS ، این کتابخانه قدرتمند و پر استفاده جاوا اسکریپت را به صورت
                                کاملا پروژه محور و کاربردی یاد میگیرید…</span>
                            <div
                                class="flex lg:items-center gap-3 items-end justify-between mt-5 flex sm:flex-row flex-col">
                                <button
                                    class="lg:w-[45%] sm:w-[50%] w-full h-13 bg-(--color-btn-contact) rounded-xl order-1 sm:order-0">
                                    <a href="" class="text-[#fff] text-[18px]">ثبت نام در دوره</a>
                                </button>

                                <span
                                    class="lg:text-[25px] text-xl flex justify-self-end font-boldn text-(--color-text)">7,900,000
                                    تومان</span>
                            </div>
                        </div>
                        <div class="lg:w-1/2 w-full flex justify-center items-center">
                            <video src="{{ asset('assets/img/course/motion-graphic-6.mp4') }}" controls
                                class="w-full h- order-0"></video>
                        </div>
                    </div>
                    <div class="w-full h-20 flex justify-between items-center border-t-1 border-[#edeef2]">
                        <div
                            class=" md:w-[70%] w-full h-15 flex justify-startc  items-center gap-5 overflow-auto text-(--color-secondary-text)">
                            <div class="min-w-27 h-10 rounded-xl hover:bg-[#fafbfc] flex items-center justify-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M3 14V10C3 6.22876 3 4.34315 4.17157 3.17157C5.34315 2 7.22876 2 11 2H13C16.7712 2 18.6569 2 19.8284 3.17157C20.4816 3.82476 20.7706 4.69989 20.8985 6M21 10V14C21 17.7712 21 19.6569 19.8284 20.8284C18.6569 22 16.7712 22 13 22H11C7.22876 22 5.34315 22 4.17157 20.8284C3.51839 20.1752 3.22937 19.3001 3.10149 18"
                                        stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path>
                                    <path d="M8 14H13" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path>
                                    <path d="M8 10H9M16 10H12" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round">
                                    </path>
                                </svg>
                                <a href="#moreitems">توصیحات</a>
                            </div>
                            <div class="min-w-27 h-10 rounded-xl hover:bg-[#fafbfc] flex items-center justify-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 24 24" fill="none">
                                    <path d="M2 5.5L3.21429 7L7.5 3" stroke="#1C274C" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M2 12.5L3.21429 14L7.5 10" stroke="#1C274C" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M2 19.5L3.21429 21L7.5 17" stroke="#1C274C" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M22 12H17M12 12H13.5" stroke="#1C274C" stroke-width="1.5"
                                        stroke-linecap="round"></path>
                                    <path d="M12 19H17M20.5 19H22" stroke="#1C274C" stroke-width="1.5"
                                        stroke-linecap="round"></path>
                                    <path d="M22 5L12 5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path>
                                </svg>
                                <a href="#jlasat">جلسات دوره</a>
                            </div>
                            <div class="min-w-27 h-10 rounded-xl hover:bg-[#fafbfc] flex items-center justify-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M3.09155 6.63659L9.78267 3.49965C11.2037 2.83345 12.7961 2.83345 14.2171 3.49965L20.9083 6.63664C22.3638 7.31899 22.3638 9.68105 20.9083 10.3634L14.2172 13.5003C12.7962 14.1665 11.2038 14.1665 9.78275 13.5003L4.99995 11.2581"
                                        stroke="#1C274D" stroke-width="1.5" stroke-linecap="round"></path>
                                    <path opacity="0.5"
                                        d="M2.5 15V12.1376C2.5 10.8584 2.5 10.2188 2.83032 9.71781C3.16064 9.21687 3.74853 8.96492 4.92432 8.461L6 8"
                                        stroke="#1C274D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    </path>
                                    <path opacity="0.5"
                                        d="M19 11.5V16.6254C19 17.6334 18.4965 18.5772 17.6147 19.0656C16.1463 19.8787 13.796 21 12 21C10.204 21 7.8537 19.8787 6.38533 19.0656C5.5035 18.5772 5 17.6334 5 16.6254V11.5"
                                        stroke="#1C274D" stroke-width="1.5" stroke-linecap="round"></path>
                                </svg>
                                <a href="#asatid">اساتید دوره</a>
                            </div>
                            <div class="min-w-27 h-10 rounded-xl hover:bg-[#fafbfc] flex items-center justify-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M3.09155 6.63659L9.78267 3.49965C11.2037 2.83345 12.7961 2.83345 14.2171 3.49965L20.9083 6.63664C22.3638 7.31899 22.3638 9.68105 20.9083 10.3634L14.2172 13.5003C12.7962 14.1665 11.2038 14.1665 9.78275 13.5003L4.99995 11.2581"
                                        stroke="#1C274D" stroke-width="1.5" stroke-linecap="round"></path>
                                    <path opacity="0.5"
                                        d="M2.5 15V12.1376C2.5 10.8584 2.5 10.2188 2.83032 9.71781C3.16064 9.21687 3.74853 8.96492 4.92432 8.461L6 8"
                                        stroke="#1C274D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    </path>
                                    <path opacity="0.5"
                                        d="M19 11.5V16.6254C19 17.6334 18.4965 18.5772 17.6147 19.0656C16.1463 19.8787 13.796 21 12 21C10.204 21 7.8537 19.8787 6.38533 19.0656C5.5035 18.5772 5 17.6334 5 16.6254V11.5"
                                        stroke="#1C274D" stroke-width="1.5" stroke-linecap="round"></path>
                                </svg>
                                <a href="#comment">دیدگاه ها</a>
                            </div>
                            <div class="min-w-40 h-10 rounded-xl hover:bg-[#fafbfc] flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 24 24"
                                    fill="none">
                                    <path
                                        d="M5.46 18.49v-2.92c0-.97.76-1.84 1.84-1.84.97 0 1.84.76 1.84 1.84v2.81c0 1.95-1.62 3.57-3.57 3.57-1.95 0-3.57-1.63-3.57-3.57v-6.16C1.89 6.6 6.33 2.05 11.95 2.05 17.57 2.05 22 6.6 22 12.11v6.16c0 1.95-1.62 3.57-3.57 3.57-1.95 0-3.57-1.62-3.57-3.57v-2.81c0-.97.76-1.84 1.84-1.84.97 0 1.84.76 1.84 1.84v3.03"
                                        stroke="#555555" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </svg>
                                <a href="#moshaver">درخواست مشاوره</a>
                            </div>
                        </div>
                        <div
                            class="w-10 h-10 hover:bg-(--color-primary) flex justify-center items-center rounded-xl hidden md:flex">
                            <img src="https://icongr.am/entypo/heart-outlined.svg?size=23&color=7a7171" alt="">
                        </div>
                    </div>

                </div>
            </section>

            <section class="w-full flex lg:flex-row flex-col gap-5">
                <div class="lg:w-[70%] w-[95%] flex flex-col gap-10 mx-auto">
                    <div
                        class=" w-[100%] grid md:grid-cols-3 md:grid-rows-[70px_70px]  md:gap-8 grid-cols-2  grid-rows-[70px_70px_70px] gap-5 justify-between">
                        <div class=" bg-[#fff] flex justify-between items-center rounded-md text-[12px] shadow-md px-3">
                            <div class="flex items-center gap-2">
                                <img src="https://elhammat.com/wp-content/uploads/2025/04/Backpack.svg" alt=""
                                    class="w-7">
                                <span class="text-[12px] text-(--color-text) font-bold">نوع دوره</span>
                            </div>
                            <span class="text-(--color-secondary-text)">حضوری</span>
                        </div>

                        <div class=" bg-[#fff] flex justify-between items-center rounded-md text-[12px] shadow-md px-3">
                            <div class="flex items-center gap-2">
                                <img src="https://elhammat.com/wp-content/uploads/2025/04/History.svg" alt=""
                                    class="w-7">
                                <span class="text-[12px] text-(--color-text)">زمان دوره</span>
                            </div>
                            <span class="text-(--color-secondary-text) text-end"> 180 دقیقه</span>
                        </div>

                        <div class=" bg-[#fff] flex justify-between items-center rounded-md text-[12px] shadow-md px-3">
                            <div class="flex items-center gap-2">
                                <img src="https://elhammat.com/wp-content/uploads/2025/04/Documents.svg" alt=""
                                    class="w-7">
                                <span class="text-[12px] font-bold text-(--color-text)">تعداد جلسات </span>
                            </div>
                            <span class="text-(--color-secondary-text) text-end">12 جلسه</span>
                        </div>

                        <div class=" bg-[#fff] flex justify-between items-center rounded-md text-[12px] shadow-md px-3">
                            <div class="flex items-center gap-2">
                                <img src="https://elhammat.com/wp-content/uploads/2025/04/Passport.svg" alt=""
                                    class="w-7">
                                <span class="text-[12px] font-bold text-(--color-text)">سطح دوره</span>
                            </div>
                            <span class="text-(--color-secondary-text) text-end"> پیشرفته ,متوسط</span>
                        </div>

                        <div class=" bg-[#fff] flex justify-between items-center rounded-md text-[12px] shadow-md px-3">
                            <div class="flex items-center gap-2">
                                <img src="https://elhammat.com/wp-content/uploads/2025/04/Diploma.svg" alt=""
                                    class="w-7">
                                <span class="text-[12px] font-bold text-(--color-text)">گواهی پایان دوره </span>
                            </div>
                            <span class="text-(--color-secondary-text) text-end">گواهی آموزشی</span>
                        </div>

                        <div class=" bg-[#fff] flex justify-between items-center rounded-md text-[12px] shadow-md px-3">
                            <div class="flex items-center gap-2">
                                <img src="https://elhammat.com/wp-content/uploads/2025/04/Book-Bookmark.svg"
                                    alt="" class="w-7">
                                <span class="text-[12px] font-bold text-(--color-text)">وضعیت دوره</span>
                            </div>
                            <span class="text-(--color-secondary-text) text-end">تکمیل شده </span>
                        </div>
                    </div>
                    <div class="w-full max-h-160 flex bg-[#fff] flex-col overflow-hidden rounded-xl gap-10 p-5 relative shadow-md"
                        id="description_more_item">
                        <div class="w-full  flex flex-col overflow-hidden gap-10">
                            <div class="w-full flex flex-col gap-10">

                                <h2 class="md:text-[24px] text-[20px] text-(--color-text) font-bold">توضیحات</h2>
                                <h3 class="md:text-[22px] text-[18px] text-(--color-text) font-bold">معرفی دوره آموزش جامع
                                    api نویسی با PHP</h3>
                                <p class="md:text-[15px] text-[13px] text-(--color-secondary-text)">اگر می‌خواهید Laravel
                                    را به‌صورت عملی و پروژه‌محور یاد بگیرید، این دوره برای شماست! در این دوره، به جای
                                    آموزش‌های تئوری، ۱۰ پروژه کاربردی را از صفر تا صد پیاده‌سازی می‌کنیم تا بتوانید در دنیای
                                    واقعی از مهارت‌های لاراولی خود استفاده کنید.</p>
                                <span class="md:text-[15px] text-[13px] text-(--color-secondary-text)">چه چیزهایی یاد
                                    می‌گیرید؟</span>
                                <div class="flex flex-col md:text-[15px] text-[13px] text-(--color-secondary-text)">
                                    <span>🔹 ساخت سیستم احراز هویت چندگانه (ایمیل، موبایل، رمز، OTP)</span>
                                    <span>🔹 ساخت سیستم احراز هویت چندگانه (ایمیل، موبایل، رمز، OTP)</span>
                                    <span>🔹 ساخت سیستم احراز هویت چندگانه (ایمیل، موبایل، رمز، OTP)</span>
                                    <span>🔹 ساخت سیستم احراز هویت چندگانه (ایمیل، موبایل، رمز، OTP)</span>
                                    <span>🔹 ساخت سیستم احراز هویت چندگانه (ایمیل، موبایل، رمز، OTP)</span>
                                    <span>🔹 ساخت سیستم احراز هویت چندگانه (ایمیل، موبایل، رمز، OTP)</span>
                                    <span>🔹 ساخت سیستم احراز هویت چندگانه (ایمیل، موبایل، رمز، OTP)</span>
                                    <span>🔹 ساخت سیستم احراز هویت چندگانه (ایمیل، موبایل، رمز، OTP)</span>
                                    <span>🔹 ساخت سیستم احراز هویت چندگانه (ایمیل، موبایل، رمز، OTP)</span>
                                    <span>🔹 ساخت سیستم احراز هویت چندگانه (ایمیل، موبایل، رمز، OTP)</span>
                                </div>
                            </div>
                            <h2 class="md:text-[24px] text-[20px] text-(--color-text) font-bold">مزایا یادگیری لاراول
                                به‌صورت پروژه محور</h2>
                            <p class="md:text-[15px] text-[13px] text-(--color-secondary-text)">یادگیری لاراول به‌صورت
                                پروژه‌محور باعث می‌شود مفاهیم تئوری را به‌طور عمیق‌تر و کاربردی‌تر درک کنید. در این روش، به
                                جای تمرکز صرف بر تعاریف و مفاهیم انتزاعی، با چالش‌های واقعی مواجه می‌شوید و توانایی حل مسئله
                                در شما تقویت می‌شود. همچنین، این سبک آموزش موجب تثبیت بهتر مباحث شده و اعتمادبه‌نفس شما برای
                                ورود به بازار کار را افزایش می‌دهد. علاوه بر این، با انجام پروژه‌های عملی، نمونه‌کارهای
                                ارزشمندی برای نمایش در گیت‌هاب (GitHub) ایجاد خواهید کرد که به تقویت رزومه و افزایش شانس
                                استخدام شما در شرکت‌های معتبر کمک فراوانی می‌کند.</p>
                        </div>


                        <div class="w-full h-[143px]  absolute bottom-0 gradient " id="mahdi">
                        </div>
                        <span
                            class=" w-25 h-10 text-[13px] text-(--color-secondary-text) hover:bg-[#cbd1de] flex justify-center items-center mx-auto rounded-md cursor-pointer z-1"
                            onclick="description_more()" id="innerText.more">بیشتر بخوانید</span>


                    </div>
                    <div class="w-full bg-[#ffff] rounded-xl shadow-md" id="jlasat">
                        <div class="w-full h-20 flex items-center gap-3 p-4">
                            <div class="p-3 rounded-full flex justify-center items-center bg-(--color-primary)">
                                <svg xmlns="http://www.w3.org/2000/svg" class="md:w-9 w-5 md:h-9 h-5" viewBox="0 0 24 24"
                                    fill="none">
                                    <path
                                        d="m21.67 14.3-.4 5c-.15 1.53-.27 2.7-2.98 2.7H5.71C3 22 2.88 20.83 2.73 19.3l-.4-5c-.08-.83.18-1.6.65-2.19l.02-.02C3.55 11.42 4.38 11 5.31 11h13.38c.93 0 1.75.42 2.29 1.07.01.01.02.02.02.03.49.59.76 1.36.67 2.2Z"
                                        stroke="#ffffff" stroke-width="1.5" stroke-miterlimit="10"></path>
                                    <path
                                        d="M3.5 11.43V6.28c0-3.4.85-4.25 4.25-4.25h1.27c1.27 0 1.56.38 2.04 1.02l1.27 1.7c.32.42.51.68 1.36.68h2.55c3.4 0 4.25.85 4.25 4.25v1.79M9.43 17h5.14"
                                        stroke="#ffffff" stroke-width="1.5" stroke-miterlimit="10"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </div>
                            <span class=" min-w-30 text-[20px] text-(--color-text) font-bold">جلسات دوره</span>
                            <span class="w-[75%] h-[2px] bg-[#e3e3e3]"></span>
                        </div>
                        <div class="w-full flex flex-col items-center md:gap-5 gap-8 pb-15">
                            <!-- اول -->
                            <div
                                class="w-[95%]  bg-[#fff] flex justify-between items-center rounded-xl shadow-md px-5 relative flex-col">
                                <div
                                    class="w-full md:h-20 h-28 flex justify-between items-center course_meetings cursor-pointer">

                                    <div class="flex gap-4">
                                        <img src="https://elhammat.com/wp-content/uploads/2025/11/wordpress.svg"
                                            alt="" class="w-10">
                                        <div class="flex flex-col gap-1">
                                            <h4
                                                class="lg:text-[18px] sm:text-[14px] text-[12px] text-(--color-text) font-bold">
                                                ساخت سایت بدون برنامه نویسی</h4>
                                            <span class="lg:text-[14px] text-[11px] text-(--color-secondary-text)">همین
                                                ابتدای کار یک وب‌سایت بصورت عملی راه‌اندازی می‌کنیم.</span>
                                        </div>
                                    </div>
                                    <div>
                                        <img src="https://icongr.am/entypo/chevron-small-down.svg?size=39&color=797272"
                                            alt="" class="transition-all duration-300">
                                    </div>
                                </div>

                                <!-- نسلیبشمنیلسبق -->
                                <div
                                    class="w-full flex flex-col items-center overflow-hidden max-h-0 transition-all duration-300">
                                    <div class="w-full flex flex-col  items-center">

                                        <div
                                            class="w-full h-20  bg-[#fff] border-y-1 border-[#e9ecf0] flex items-center justify-between hover:bg-[#e9ecf0] cursor-pointer  course_meetings_items transition-all duration-300 px-5 ">
                                            <div class="flex items-center gap-3 ">
                                                <img src="https://icongr.am/feather/play.svg?size=27&color=696363"
                                                    alt="" class="w-5">
                                                <div class="flex flex-col">
                                                    <div class="flex sm:flex-row flex-col gap-2">
                                                        <span
                                                            class="sm:text-[13px] md:text-[16px] text-[12px] text-(--color-text) font-bold">راه
                                                            اندازی سایت اختصاصی</span>
                                                        <span
                                                            class="md:w-15 md:h-7 w-10 h-5 md:text-[16px] text-[11px] bg-[#8be66a] flex justify-center items-center rounded-md text-[#fff]">رایگان</span>
                                                    </div>
                                                    <span
                                                        class="text-[14px] text-(--color-secondary-text) sm:flex hidden">اصول
                                                        کارکرد یک وب‌سایت بصورت عملی</span>
                                                </div>
                                            </div>
                                            <div class="flex gap-2 ">
                                                <div class="md:inline-block hidden ">

                                                    <div
                                                        class="w-30 h-10 bg-(--color-subheader-btn) flex justify-center items-center text-[#fff] gap-2 rounded-2xl pop_up_on cursor-pointer">
                                                        <img src="https://icongr.am/feather/play-circle.svg?size=16&color=ffffff"
                                                            alt="">
                                                        <span class="text-[14px]">پیش نمایش</span>
                                                    </div>
                                                    <div
                                                        class="fixed top-0 right-0 left-0  bg-black/50 w-1500 h-[100vh] flex items-center z-11 pop_up_off hidden">
                                                        <div class="absolute w-full h-[100vh] z-0 "></div>
                                                        <img src="{{ asset('assets/img/course/Wallpaper_4Kl3D ( 45312 ).jpg') }}"
                                                            alt="" class="w-80 mx-170 z-1 ">
                                                    </div>

                                                </div>
                                                <div
                                                    class="w-10 h-10 bg-(--color-primary) rounded-full flex justify-center items-center ">
                                                    <img src="https://icongr.am/entypo/download.svg?size=16&color=ffffff"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-full h-100  flex justify-center items-center overflow-hidden max-h-0  transition-all duration-300 "
                                            id="vidio">
                                            <video src="" controls class="w-160"></video>
                                        </div>
                                    </div>


                                    <div class="w-full flex flex-col  items-center">

                                        <div
                                            class="w-full h-20 bg-[#fff] border-b-1 border-[#e9ecf0] flex items-center justify-between hover:bg-[#e9ecf0] course_meetings_items transition-all duration-300 px-5 cursor-pointer ">
                                            <div class="flex items-center gap-3">
                                                <img src="https://icongr.am/feather/play.svg?size=27&color=696363"
                                                    alt="" class="w-5">
                                                <div class="flex flex-col">
                                                    <div class="flex sm:flex-row flex-col gap-2">
                                                        <span
                                                            class="sm:text-[13px] md:text-[16px] text-[12px] text-(--color-text) font-bold">نصب
                                                            وردپرس روی هاست </span>
                                                        <span
                                                            class="md:w-20 md:h-7 w-15 h-5 md:text-[16px] text-[11px] bg-[#a66287] flex justify-center items-center rounded-md text-[#fff]">فایل
                                                            صوتی</span>
                                                    </div>
                                                    <span
                                                        class="text-[14px] text-(--color-secondary-text) sm:flex hidden">تغییر
                                                        پیشوند جداول دیتابیس برای افزایش امنیت سایت</span>
                                                </div>
                                            </div>
                                            <div class="flex gap-2">
                                                <img src="https://icongr.am/feather/lock.svg?size=16&color=655d5d"
                                                    alt="">
                                                <span class="text-(--color-secondary-text) md:flex hidden">خصوصی</span>
                                            </div>
                                        </div>
                                        <div class="w-[95%] h-10  flex justify-center items-center overflow-hidden max-h-0 transition-all duration-300"
                                            id="kfjh">

                                            <span class="text-(--color-secondary-text) md:text-[16px] text-[11px]">این درس
                                                خصوصی است. برای مشاهده باید دوره را خریداری کنید.</span>
                                        </div>

                                    </div>


                                    <div class="w-full flex flex-col  items-center">

                                        <div
                                            class="w-full h-20 bg-[#fff] border-b-1 border-[#e9ecf0] flex items-center justify-between hover:bg-[#e9ecf0] course_meetings_items transition-all duration-300 px-5 cursor-pointer">
                                            <div class="flex items-center gap-3">
                                                <img src="https://icongr.am/feather/play.svg?size=27&color=696363"
                                                    alt="" class="w-5">
                                                <div class="flex flex-colsm:flex-row flex-col">
                                                    <div class="flex md:flex-row flex-col gap-2">
                                                        <span
                                                            class="sm:text-[13px] md:text-[16px] text-[12px] text-(--color-text) font-bold">کار
                                                            با نوشته‌ها و مقالات سایت</span>
                                                        <span
                                                            class="md:w-15 md:h-7 w-10 h-5 md:text-[16px] text-[11px] bg-[#bd84f0] flex justify-center items-center rounded-md text-[#fff]">کوئیز</span>
                                                    </div>
                                                    <span
                                                        class="text-[14px] text-(--color-secondary-text) sm:flex hidden">انواع
                                                        نوشته و حالت های انتشار مطالب</span>
                                                </div>
                                            </div>
                                            <div class="flex gap-2">
                                                <img src="https://icongr.am/feather/lock.svg?size=16&color=655d5d"
                                                    alt="">
                                                <span class="text-(--color-secondary-text) md:flex hidden">خصوصی</span>
                                            </div>
                                        </div>
                                        <div
                                            class="w-[95%] h-10  flex justify-center items-center overflow-hidden max-h-0 transition-all duration-300">

                                            <span class="text-(--color-secondary-text) md:text-[16px] text-[11px]">این درس
                                                خصوصی است. برای مشاهده باید دوره را خریداری کنید.</span>
                                        </div>

                                    </div>

                                </div>

                            </div>
                            <!--دوم -->

                            <div
                                class="w-[95%]  bg-[#fff] flex flex-col justify-between items-center rounded-xl shadow-md px-5">
                                <div
                                    class="w-full md:h-20 h-32 flex justify-between  items-center course_meetings cursor-pointer">

                                    <div class="flex gap-4">
                                        <img src="https://elhammat.com/wp-content/uploads/2025/11/online-shop.svg"
                                            alt="" class="w-10">
                                        <div class="flex flex-col gap-1">
                                            <h4
                                                class="lg:text-[18px] sm:text-[14px] text-[12px] text-(--color-text) font-bold">
                                                ساخت فروشگاه اینترنتی با قابلیت فروش محصولات فیزیکی و دانلودی</h4>
                                            <span class="lg:text-[14px] text-[11px] text-(--color-secondary-text)">یک
                                                وب‌سایت فروشگاهی می‌سازیم و اولین محصول خود را برای فروش قرار
                                                می‌دهیم.</span>
                                        </div>
                                    </div>
                                    <div>
                                        <img src="https://icongr.am/entypo/chevron-small-down.svg?size=39&color=797272"
                                            alt="" class="transition-all duration-300">
                                    </div>
                                </div>

                                <div
                                    class=" w-full flex flex-col items-center overflow-hidden max-h-0 transition-all duration-300">
                                    <div class="w-full flex flex-col  items-center">

                                        <div
                                            class="w-full h-20 bg-[#fff] border-y-1 border-[#e9ecf0] flex items-center justify-between hover:bg-[#e9ecf0] course_meetings_items transition-all duration-300 px-5 cursor-pointer">
                                            <div class="flex items-center gap-3">
                                                <img src="https://icongr.am/feather/play.svg?size=22&color=594545"
                                                    alt="" class="w-5">
                                                <div class="flex flex-col">
                                                    <div class="flex sm:flex-row flex-col gap-2">
                                                        <span
                                                            class="sm:text-[13px] md:text-[16px] text-[12px] text-(--color-text) font-bold">راه
                                                            اندازی سایت اختصاصی</span>
                                                        <span
                                                            class="md:w-15 md:h-7 w-10 h-5 md:text-[16px] text-[11px] p-1 bg-[#68e8b7] flex justify-center items-center rounded-md text-[#fff]">رایگان</span>
                                                    </div>
                                                    <span
                                                        class="text-[14px] text-(--color-secondary-text) sm:flex hidden">اصول
                                                        کارکرد یک وب‌سایت بصورت عملی</span>
                                                </div>
                                            </div>
                                            <div class="flex gap-2">
                                                <div class="md:inline-block hidden">

                                                    <div
                                                        class="w-30 h-10 bg-(--color-subheader-btn) flex justify-center items-center text-[#fff] gap-2 rounded-2xl pop_up_on">
                                                        <img src="https://icongr.am/feather/play-circle.svg?size=16&color=ffffff"
                                                            alt="" class="w-7">
                                                        <span class="text-[14px]">پیش نمایش</span>
                                                    </div>
                                                    <div
                                                        class="fixed top-0 right-0 left-0  bg-black/50 w-1500 h-[100vh] flex  items-center z-11 pop_up_off hidden">
                                                        <div class="absolute w-full h-[100vh] z-0 "></div>
                                                        <img src="{{ asset('assets/img/course/Wallpaper_4Kl3D ( 45312 ).jpg') }}"
                                                            alt="" class="w-80 mx-150 z-1 ">
                                                    </div>

                                                </div>
                                                <div
                                                    class="w-10 h-10 bg-(--color-primary) rounded-full flex justify-center items-center ">
                                                    <img src="https://icongr.am/entypo/download.svg?size=16&color=ffffff"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="w-[95%] h-10 bg-[#fff] flex items-center overflow-hidden max-h-0 transition-all duration-300">

                                            <span class="text-(--color-secondary-text)">محهتنه</span>
                                        </div>

                                    </div>


                                    <div class="w-full flex flex-col  items-center">

                                        <div
                                            class="w-full h-20 bg-[#fff] border-b-1 border-[#e9ecf0] flex items-center justify-between hover:bg-[#e9ecf0] course_meetings_items transition-all duration-300 px-5 cursor-pointer ">
                                            <div class="flex items-center gap-3">
                                                <img src="https://icongr.am/feather/play.svg?size=27&color=696363"
                                                    alt="" class="w-5">
                                                <div class="flex flex-col">
                                                    <div class="flex sm:flex-row flex-col gap-2">
                                                        <span
                                                            class="sm:text-[13px] md:text-[16px] text-[12px] text-(--color-text) font-bold">نصب
                                                            وردپرس روی هاست </span>
                                                        <span
                                                            class="md:text-[16px] md:w-auto w-10 text-[11px] bg-[#65bded] flex justify-center items-center rounded-md p-1 text-[#fff]">ویدئو</span>
                                                    </div>
                                                    <span
                                                        class="text-[14px] text-(--color-secondary-text) sm:flex hidden">تغییر
                                                        پیشوند جداول دیتابیس برای افزایش امنیت سایت</span>
                                                </div>
                                            </div>
                                            <div class="flex gap-2">
                                                <img src="https://icongr.am/feather/lock.svg?size=16&color=655d5d"
                                                    alt="">
                                                <span class="text-(--color-secondary-text) md:flex hidden">خصوصی</span>
                                            </div>
                                        </div>
                                        <div
                                            class="w-[95%] h-10 bg-[#fff] flex items-center overflow-hidden max-h-0 transition-all duration-300">

                                            <span class="text-(--color-secondary-text) md:text-[16px] text-[11px]">این درس
                                                خصوصی است. برای مشاهده باید دوره را خریداری کنید.</span>
                                        </div>

                                    </div>

                                </div>

                            </div>
                            <!-- سوم -->
                            <div
                                class="w-[95%]  bg-[#fff] flex flex-col justify-between items-center rounded-xl shadow-md px-5">
                                <div
                                    class="w-full md:h-20 h-32 flex justify-between  items-center course_meetings cursor-pointer">

                                    <div class="flex gap-4">
                                        <img src="https://elhammat.com/wp-content/uploads/2025/11/online-shop.svg"
                                            alt="" class="w-10">
                                        <div class="flex flex-col gap-1">
                                            <h4 class="lg:text-[18px] text-[14px] font-bold">ساخت فروشگاه اینترنتی با
                                                قابلیت فروش محصولات فیزیکی و دانلودی</h4>
                                            <span class="lg:text-[14px] text-[11px] ">یک وب‌سایت فروشگاهی می‌سازیم و اولین
                                                محصول خود را برای فروش قرار می‌دهیم.</span>
                                        </div>
                                    </div>
                                    <div>
                                        <img src="https://icongr.am/entypo/chevron-small-down.svg?size=39&color=797272"
                                            alt="" class="transition-all duration-300">
                                    </div>
                                </div>

                                <div
                                    class=" w-full flex flex-col items-center overflow-hidden max-h-0 transition-all duration-300">
                                    <div class="w-full flex flex-col  items-center">

                                        <div
                                            class="w-full h-20 bg-[#fff] border-y-1 border-[#e9ecf0] flex items-center justify-between hover:bg-[#e9ecf0] course_meetings_items transition-all duration-300 px-5 cursor-pointer">
                                            <div class="flex items-center gap-3">
                                                <img src="https://icongr.am/feather/play.svg?size=27&color=696363"
                                                    alt="" class="w-5">
                                                <div class="flex flex-col">
                                                    <div class="flex sm:flex-row flex-col">
                                                        <span class="text-[13px] md:text-[16px] font-bold">راه اندازی سایت
                                                            اختصاصی</span>
                                                        <span
                                                            class=" md:w-15 md:h-7 w-10 h-5 md:text-[16px] text-[11px] p-1 bg-[#e89368] flex justify-center items-center rounded-md">رایگان</span>
                                                    </div>
                                                    <span class="text-[14px] text-[#ADB5BD] sm:flex hidden">اصول کارکرد یک
                                                        وب‌سایت بصورت عملی</span>
                                                </div>
                                            </div>
                                            <div class="flex gap-2">
                                                <div class="md:inline-block hidden">

                                                    <div
                                                        class="w-30 h-10 bg-[#ff6161] flex justify-center items-center text-[#fff] gap-2 rounded-2xl pop_up_on">
                                                        <img src="https://icongr.am/feather/play.svg?size=27&color=696363"
                                                            alt="" class="w-7">
                                                        <span class="text-[14px]">پیش نمایش</span>
                                                    </div>
                                                    <div
                                                        class="fixed top-0 right-0 left-0  bg-black/50 w-1500 h-[100vh] flex  items-center z-11 pop_up_off hidden">
                                                        <div class="absolute w-full h-[100vh] z-0 "></div>
                                                        <img src="{{ asset('assets/img/course/Wallpaper_4Kl3D ( 45312 ).jpg') }}"
                                                            alt="" class="w-80 mx-150 z-1 ">
                                                    </div>

                                                </div>
                                                <div
                                                    class="w-10 h-10 bg-[#4fcf3e] rounded-full flex justify-center items-center ">
                                                    <img src="https://icongr.am/entypo/download.svg?size=16&color=ffffff"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="w-[95%] h-10 bg-[#fff] flex items-center overflow-hidden max-h-0 transition-all duration-300">

                                            <span class="text-[#c4c4c4]">محهتنه</span>
                                        </div>

                                    </div>


                                    <div class="w-full flex flex-col  items-center">

                                        <div
                                            class="w-full h-20 bg-[#fff] border-b-1 border-[#e9ecf0] flex items-center justify-between hover:bg-[#e9ecf0] course_meetings_items transition-all duration-300 px-5 cursor-pointer ">
                                            <div class="flex items-center gap-3">
                                                <img src="https://icongr.am/feather/play.svg?size=27&color=696363"
                                                    alt="" class="w-5">
                                                <div class="flex flex-col">
                                                    <div class="flex sm:flex-row flex-col">
                                                        <span class="text-[13px] md:text-[16px] font-bold">نصب وردپرس روی
                                                            هاست </span>
                                                        <span
                                                            class="md:text-[16px] md:w-auto w-10 bg-[#66beed] flex justify-center items-center rounded-md p-1">ویدئو</span>
                                                    </div>
                                                    <span class="text-[14px] text-[#ADB5BD] sm:flex hidden">تغییر پیشوند
                                                        جداول دیتابیس برای افزایش امنیت سایت</span>
                                                </div>
                                            </div>
                                            <div class="flex gap-2">
                                                <img src="https://icongr.am/feather/lock.svg?size=16&color=655d5d"
                                                    alt="">
                                                <span class="text-[#8c8c8c] md:flex hidden">خصوصی</span>
                                            </div>
                                        </div>
                                        <div
                                            class="w-[95%] h-10 bg-[#fff] flex items-center overflow-hidden max-h-0 transition-all duration-300">

                                            <span class="text-[#c4c4c4] md:text-[16px] text-[11px]">این درس خصوصی است. برای
                                                مشاهده باید دوره را خریداری کنید.</span>
                                        </div>

                                    </div>

                                </div>

                            </div>
                            <!-- چهارم -->
                            <div
                                class="w-[95%]  bg-[#fff] flex justify-between items-center rounded-xl shadow-md px-5 relative flex-col">
                                <div
                                    class="w-full md:h-20 h-28 flex justify-between items-center course_meetings cursor-pointer">

                                    <div class="flex gap-4">
                                        <img src="https://elhammat.com/wp-content/uploads/2025/11/wordpress.svg"
                                            alt="" class="w-10">
                                        <div class="flex flex-col gap-1">
                                            <h4 class="lg:text-[18px] text-[14px] font-bold">ساخت سایت بدون برنامه نویسی
                                            </h4>
                                            <span class="lg:text-[14px] text-[11px] ">همین ابتدای کار یک وب‌سایت بصورت عملی
                                                راه‌اندازی می‌کنیم.</span>
                                        </div>
                                    </div>
                                    <div>
                                        <img src="https://icongr.am/entypo/chevron-small-down.svg?size=39&color=797272"
                                            alt="" class="transition-all duration-300">
                                    </div>
                                </div>

                                <!-- نسلیبشمنیلسبق -->
                                <div
                                    class="w-full flex flex-col items-center overflow-hidden max-h-0 transition-all duration-300">
                                    <div class="w-full flex flex-col  items-center">

                                        <div
                                            class="w-full h-20 bg-[#fff] border-y-1 border-[#e9ecf0] flex items-center justify-between hover:bg-[#e9ecf0]  course_meetings_items transition-all duration-300 px-5 cursor-pointer">
                                            <div class="flex items-center gap-3 ">
                                                <img src="https://icongr.am/feather/play.svg?size=27&color=696363"
                                                    alt="" class="w-5">
                                                <div class="flex flex-col">
                                                    <div class="flexsm:flex-row flex-col">
                                                        <span class="text-[13px] md:text-[16px] font-bold">راه اندازی سایت
                                                            اختصاصی</span>
                                                        <span
                                                            class="md:w-15 md:h-7 w-10 h-5 md:text-[16px] text-[11px] bg-[#8be66a] flex justify-center items-center rounded-md">رایگان</span>
                                                    </div>
                                                    <span class="text-[14px] text-[#ADB5BD] sm:flex hidden">اصول کارکرد یک
                                                        وب‌سایت بصورت عملی</span>
                                                </div>
                                            </div>
                                            <div class="flex gap-2 ">
                                                <div class="md:inline-block hidden">

                                                    <div
                                                        class="w-30 h-10 bg-[#ff6161] flex justify-center items-center text-[#fff] gap-2 rounded-2xl pop_up_on">
                                                        <img src="https://icongr.am/feather/play.svg?size=27&color=696363"
                                                            alt="" class="w-7">
                                                        <span class="text-[14px]">پیش نمایش</span>
                                                    </div>
                                                    <div
                                                        class="fixed top-0 right-0 left-0  bg-black/50 w-1500 h-[100vh] flex  items-center z-11 pop_up_off hidden">
                                                        <div class="absolute w-full h-[100vh] z-0 "></div>
                                                        <img src="{{ asset('assets/img/course/Wallpaper_4Kl3D ( 45312 ).jpg') }}"
                                                            alt="" class="w-80 mx-150 z-1 ">
                                                    </div>

                                                </div>
                                                <div
                                                    class="w-10 h-10 bg-[#4fcf3e] rounded-full flex justify-center items-center ">
                                                    <img src="https://icongr.am/entypo/download.svg?size=16&color=ffffff"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-full h-10 flex justify-center items-center overflow-hidden max-h-0  transition-all duration-300 "
                                            id="vidio">

                                        </div>
                                    </div>


                                    <div class="w-full flex flex-col  items-center">

                                        <div
                                            class="w-full h-20 bg-[#fff] border-b-1 border-[#e9ecf0] flex items-center justify-between hover:bg-[#e9ecf0] course_meetings_items transition-all duration-300 px-5 cursor-pointer">
                                            <div class="flex items-center gap-3">
                                                <img src="https://icongr.am/feather/play.svg?size=27&color=696363"
                                                    alt="" class="w-5">
                                                <div class="flex flex-col">
                                                    <div class="flexsm:flex-row flex-col">
                                                        <span class="text-[13px] md:text-[16px] font-bold">نصب وردپرس روی
                                                            هاست </span>
                                                        <span
                                                            class="md:w-20 md:h-7 w-15 h-5 md:text-[16px] text-[11px] bg-[#a66287] flex justify-center items-center rounded-md">فایل
                                                            صوتی</span>
                                                    </div>
                                                    <span class="text-[14px] text-[#ADB5BD] sm:flex hidden">تغییر پیشوند
                                                        جداول دیتابیس برای افزایش امنیت سایت</span>
                                                </div>
                                            </div>
                                            <div class="flex gap-2">
                                                <img src="https://icongr.am/feather/lock.svg?size=16&color=655d5d"
                                                    alt="">
                                                <span class="text-[#8c8c8c] md:flex hidden">خصوصی</span>
                                            </div>
                                        </div>
                                        <div class="w-[95%] h-10  flex justify-center items-center overflow-hidden max-h-0 transition-all duration-300"
                                            id="kfjh">

                                            <span class="text-[#c4c4c4] md:text-[16px] text-[11px]">این درس خصوصی است. برای
                                                مشاهده باید دوره را خریداری کنید.</span>
                                        </div>

                                    </div>


                                    <div class="w-full flex flex-col  items-center">

                                        <div
                                            class="w-full h-20 bg-[#fff] border-b-1 border-[#e9ecf0] flex items-center justify-between hover:bg-[#e9ecf0] course_meetings_items transition-all duration-300 px-5 cursor-pointer">
                                            <div class="flex items-center gap-3">
                                                <img src="https://icongr.am/feather/play.svg?size=27&color=696363"
                                                    alt="" class="w-5">
                                                <div class="flex flex-colsm:flex-row flex-col">
                                                    <div class="flex md:flex-row flex-col">
                                                        <span class="text-[13px] md:text-[16px] font-bold">کار با نوشته‌ها
                                                            و مقالات سایت</span>

                                                        <span
                                                            class="md:w-15 md:h-7 w-10 h-5 md:text-[16px] text-[11px] bg-[#bd84f0] flex justify-center items-center rounded-md">کوئیز</span>
                                                    </div>
                                                    <span class="text-[14px] text-[#ADB5BD] sm:flex hidden">انواع نوشته و
                                                        حالت های انتشار مطالب</span>
                                                </div>
                                            </div>
                                            <div class="flex gap-2">
                                                <img src="https://icongr.am/feather/lock.svg?size=16&color=655d5d"
                                                    alt="">
                                                <span class="text-[#8c8c8c] md:flex hidden">خصوصی</span>
                                            </div>
                                        </div>
                                        <div class="w-[95%] h-10  flex justify-center items-center overflow-hidden max-h-0 transition-all duration-300"
                                            id="pruvateone">

                                            <span class="text-[#c4c4c4] md:text-[16px] text-[11px]">این درس خصوصی است. برای
                                                مشاهده باید دوره را خریداری کنید.</span>
                                        </div>

                                    </div>

                                </div>

                            </div>
                            <!-- پنجم -->
                            <div
                                class="w-[95%]  bg-[#fff] flex justify-between items-center rounded-xl shadow-md px-5 relative flex-col">
                                <div
                                    class="w-full md:h-20 h-28 flex justify-between items-center course_meetings cursor-pointer">

                                    <div class="flex gap-4">
                                        <img src="https://elhammat.com/wp-content/uploads/2025/11/wordpress.svg"
                                            alt="" class="w-10">
                                        <div class="flex flex-col gap-1">
                                            <h4 class="lg:text-[18px] text-[14px] font-bold">ساخت سایت بدون برنامه نویسی
                                            </h4>
                                            <span class="lg:text-[14px] text-[11px] ">همین ابتدای کار یک وب‌سایت بصورت عملی
                                                راه‌اندازی می‌کنیم.</span>
                                        </div>
                                    </div>
                                    <div>
                                        <img src="https://icongr.am/entypo/chevron-small-down.svg?size=39&color=797272"
                                            alt="" class="transition-all duration-300">
                                    </div>
                                </div>

                                <!-- نسلیبشمنیلسبق -->
                                <div
                                    class="w-full flex flex-col items-center overflow-hidden max-h-0 transition-all duration-300">
                                    <div class="w-full flex flex-col  items-center">

                                        <div
                                            class="w-full h-20 bg-[#fff] border-y-1 border-[#e9ecf0] flex items-center justify-between hover:bg-[#e9ecf0]  course_meetings_items transition-all duration-300 px-5 cursor-pointer">
                                            <div class="flex items-center gap-3 ">
                                                <img src="https://icongr.am/feather/play.svg?size=27&color=696363"
                                                    alt="" class="w-5">
                                                <div class="flex flex-col">
                                                    <div class="flexsm:flex-row flex-col">
                                                        <span class="text-[13px] md:text-[16px] font-bold">راه اندازی سایت
                                                            اختصاصی</span>
                                                        <span
                                                            class="md:w-15 md:h-7 w-10 h-5 md:text-[16px] text-[11px] bg-[#8be66a] flex justify-center items-center rounded-md">رایگان</span>
                                                    </div>
                                                    <span class="text-[14px] text-[#ADB5BD] sm:flex hidden">اصول کارکرد یک
                                                        وب‌سایت بصورت عملی</span>
                                                </div>
                                            </div>
                                            <div class="flex gap-2 ">
                                                <div class="md:inline-block hidden">

                                                    <div
                                                        class="w-30 h-10 bg-[#ff6161] flex justify-center items-center text-[#fff] gap-2 rounded-2xl pop_up_on">
                                                        <img src="https://icongr.am/feather/play.svg?size=27&color=696363"
                                                            alt="" class="w-7">
                                                        <span class="text-[14px]">پیش نمایش</span>
                                                    </div>
                                                    <div
                                                        class="fixed top-0 right-0 left-0  bg-black/50 w-1500 h-[100vh] flex  items-center z-11 pop_up_off hidden">
                                                        <div class="absolute w-full h-[100vh] z-0 "></div>
                                                        <img src="{{ asset('assets/img/course/Wallpaper_4Kl3D ( 45312 ).jpg') }}"
                                                            alt="" class="w-80 mx-150 z-1 ">
                                                    </div>

                                                </div>
                                                <div
                                                    class="w-10 h-10 bg-[#4fcf3e] rounded-full flex justify-center items-center ">
                                                    <img src="https://icongr.am/entypo/download.svg?size=16&color=ffffff"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-full h-10 flex justify-center items-center overflow-hidden max-h-0  transition-all duration-300 "
                                            id="vidio">

                                        </div>
                                    </div>


                                    <div class="w-full flex flex-col  items-center">

                                        <div
                                            class="w-full h-20 bg-[#fff] border-b-1 border-[#e9ecf0] flex items-center justify-between hover:bg-[#e9ecf0] course_meetings_items transition-all duration-300 px-5 cursor-pointer">
                                            <div class="flex items-center gap-3">
                                                <img src="https://icongr.am/feather/play.svg?size=27&color=696363"
                                                    alt="" class="w-5">
                                                <div class="flex flex-col">
                                                    <div class="flexsm:flex-row flex-col">
                                                        <span class="text-[13px] md:text-[16px] font-bold">نصب وردپرس روی
                                                            هاست </span>
                                                        <span
                                                            class="md:w-20 md:h-7 w-15 h-5 md:text-[16px] text-[11px] bg-[#a66287] flex justify-center items-center rounded-md">فایل
                                                            صوتی</span>
                                                    </div>
                                                    <span class="text-[14px] text-[#ADB5BD] sm:flex hidden">تغییر پیشوند
                                                        جداول دیتابیس برای افزایش امنیت سایت</span>
                                                </div>
                                            </div>
                                            <div class="flex gap-2">
                                                <img src="https://icongr.am/feather/lock.svg?size=16&color=655d5d"
                                                    alt="">
                                                <span class="text-[#8c8c8c] md:flex hidden">خصوصی</span>
                                            </div>
                                        </div>
                                        <div class="w-[95%] h-10  flex justify-center items-center overflow-hidden max-h-0 transition-all duration-300"
                                            id="kfjh">

                                            <span class="text-[#c4c4c4] md:text-[16px] text-[11px]">این درس خصوصی است. برای
                                                مشاهده باید دوره را خریداری کنید.</span>
                                        </div>

                                    </div>


                                    <div class="w-full flex flex-col  items-center">

                                        <div
                                            class="w-full h-20 bg-[#fff] border-b-1 border-[#e9ecf0] flex items-center justify-between hover:bg-[#e9ecf0] course_meetings_items transition-all duration-300 px-5 cursor-pointer">
                                            <div class="flex items-center gap-3">
                                                <img src="https://icongr.am/feather/play.svg?size=27&color=696363"
                                                    alt="" class="w-5">
                                                <div class="flex flex-colsm:flex-row flex-col">
                                                    <div class="flex md:flex-row flex-col">
                                                        <span class="text-[13px] md:text-[16px] font-bold">کار با نوشته‌ها
                                                            و مقالات سایت</span>

                                                        <span
                                                            class="md:w-15 md:h-7 w-10 h-5 md:text-[16px] text-[11px] bg-[#bd84f0] flex justify-center items-center rounded-md">کوئیز</span>
                                                    </div>
                                                    <span class="text-[14px] text-[#ADB5BD] sm:flex hidden">انواع نوشته و
                                                        حالت های انتشار مطالب</span>
                                                </div>
                                            </div>
                                            <div class="flex gap-2">
                                                <img src="https://icongr.am/feather/lock.svg?size=16&color=655d5d"
                                                    alt="">
                                                <span class="text-[#8c8c8c] md:flex hidden">خصوصی</span>
                                            </div>
                                        </div>
                                        <div class="w-[95%] h-10  flex justify-center items-center overflow-hidden max-h-0 transition-all duration-300"
                                            id="pruvateone">

                                            <span class="text-[#c4c4c4] md:text-[16px] text-[11px]">این درس خصوصی است. برای
                                                مشاهده باید دوره را خریداری کنید.</span>
                                        </div>

                                    </div>

                                </div>

                            </div>
                            <!-- ششم -->
                            <div
                                class="w-[95%]  bg-[#fff] flex justify-between items-center rounded-xl shadow-md px-5 relative flex-col">
                                <div
                                    class="w-full md:h-20 h-28 flex justify-between items-center course_meetings cursor-pointer">

                                    <div class="flex gap-4">
                                        <img src="https://elhammat.com/wp-content/uploads/2025/11/wordpress.svg"
                                            alt="" class="w-10">
                                        <div class="flex flex-col gap-1">
                                            <h4 class="lg:text-[18px] text-[14px] font-bold">ساخت سایت بدون برنامه نویسی
                                            </h4>
                                            <span class="lg:text-[14px] text-[11px] ">همین ابتدای کار یک وب‌سایت بصورت عملی
                                                راه‌اندازی می‌کنیم.</span>
                                        </div>
                                    </div>
                                    <div>
                                        <img src="https://icongr.am/entypo/chevron-small-down.svg?size=39&color=797272"
                                            alt="" class="transition-all duration-300">
                                    </div>
                                </div>

                                <!-- نسلیبشمنیلسبق -->
                                <div
                                    class="w-full flex flex-col items-center overflow-hidden max-h-0 transition-all duration-300">
                                    <div class="w-full flex flex-col  items-center">

                                        <div
                                            class="w-full h-20 bg-[#fff] border-y-1 border-[#e9ecf0] flex items-center justify-between hover:bg-[#e9ecf0]  course_meetings_items transition-all duration-300 px-5 cursor-pointer">
                                            <div class="flex items-center gap-3 ">
                                                <img src="https://icongr.am/feather/play.svg?size=27&color=696363"
                                                    alt="" class="w-5">
                                                <div class="flex flex-col">
                                                    <div class="flexsm:flex-row flex-col">
                                                        <span class="text-[13px] md:text-[16px] font-bold">راه اندازی سایت
                                                            اختصاصی</span>
                                                        <span
                                                            class="md:w-15 md:h-7 w-10 h-5 md:text-[16px] text-[11px] bg-[#8be66a] flex justify-center items-center rounded-md">رایگان</span>
                                                    </div>
                                                    <span class="text-[14px] text-[#ADB5BD] sm:flex hidden">اصول کارکرد یک
                                                        وب‌سایت بصورت عملی</span>
                                                </div>
                                            </div>
                                            <div class="flex gap-2 ">
                                                <div class="md:inline-block hidden">

                                                    <div
                                                        class="w-30 h-10 bg-[#ff6161] flex justify-center items-center text-[#fff] gap-2 rounded-2xl pop_up_on">
                                                        <img src="https://icongr.am/feather/play.svg?size=27&color=696363"
                                                            alt="" class="w-7">
                                                        <span class="text-[14px]">پیش نمایش</span>
                                                    </div>
                                                    <div
                                                        class="fixed top-0 right-0 left-0  bg-black/50 w-1500 h-[100vh] flex  items-center z-11 pop_up_off hidden">
                                                        <div class="absolute w-full h-[100vh] z-0 "></div>
                                                        <img src="{{ asset('assets/img/course/Wallpaper_4Kl3D ( 45312 ).jpg') }}"
                                                            alt="" class="w-80 mx-150 z-1 ">
                                                    </div>

                                                </div>
                                                <div
                                                    class="w-10 h-10 bg-[#4fcf3e] rounded-full flex justify-center items-center ">
                                                    <img src="https://icongr.am/entypo/download.svg?size=16&color=ffffff"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-full h-10 flex justify-center items-center overflow-hidden max-h-0  transition-all duration-300 "
                                            id="vidio">

                                        </div>
                                    </div>


                                    <div class="w-full flex flex-col  items-center">

                                        <div
                                            class="w-full h-20 bg-[#fff] border-b-1 border-[#e9ecf0] flex items-center justify-between hover:bg-[#e9ecf0] course_meetings_items transition-all duration-300 px-5 cursor-pointer">
                                            <div class="flex items-center gap-3">
                                                <img src="https://icongr.am/feather/play.svg?size=27&color=696363"
                                                    alt="" class="w-5">
                                                <div class="flex flex-col">
                                                    <div class="flexsm:flex-row flex-col">
                                                        <span class="text-[13px] md:text-[16px] font-bold">نصب وردپرس روی
                                                            هاست </span>
                                                        <span
                                                            class="md:w-20 md:h-7 w-15 h-5 md:text-[16px] text-[11px] bg-[#a66287] flex justify-center items-center rounded-md">فایل
                                                            صوتی</span>
                                                    </div>
                                                    <span class="text-[14px] text-[#ADB5BD] sm:flex hidden">تغییر پیشوند
                                                        جداول دیتابیس برای افزایش امنیت سایت</span>
                                                </div>
                                            </div>
                                            <div class="flex gap-2">
                                                <img src="https://icongr.am/feather/lock.svg?size=16&color=655d5d"
                                                    alt="">
                                                <span class="text-[#8c8c8c] md:flex hidden">خصوصی</span>
                                            </div>
                                        </div>
                                        <div class="w-[95%] h-10  flex justify-center items-center overflow-hidden max-h-0 transition-all duration-300"
                                            id="kfjh">

                                            <span class="text-[#c4c4c4] md:text-[16px] text-[11px]">این درس خصوصی است. برای
                                                مشاهده باید دوره را خریداری کنید.</span>
                                        </div>

                                    </div>


                                    <div class="w-full flex flex-col  items-center">

                                        <div
                                            class="w-full h-20 bg-[#fff] border-b-1 border-[#e9ecf0] flex items-center justify-between hover:bg-[#e9ecf0] course_meetings_items transition-all duration-300 px-5 cursor-pointer">
                                            <div class="flex items-center gap-3">
                                                <img src="https://icongr.am/feather/play.svg?size=27&color=696363"
                                                    alt="" class="w-5">
                                                <div class="flex flex-colsm:flex-row flex-col">
                                                    <div class="flex md:flex-row flex-col">
                                                        <span class="text-[13px] md:text-[16px] font-bold">کار با نوشته‌ها
                                                            و مقالات سایت</span>

                                                        <span
                                                            class="md:w-15 md:h-7 w-10 h-5 md:text-[16px] text-[11px] bg-[#bd84f0] flex justify-center items-center rounded-md">کوئیز</span>
                                                    </div>
                                                    <span class="text-[14px] text-[#ADB5BD] sm:flex hidden">انواع نوشته و
                                                        حالت های انتشار مطالب</span>
                                                </div>
                                            </div>
                                            <div class="flex gap-2">
                                                <img src="https://icongr.am/feather/lock.svg?size=16&color=655d5d"
                                                    alt="">
                                                <span class="text-[#8c8c8c] md:flex hidden">خصوصی</span>
                                            </div>
                                        </div>
                                        <div
                                            class="w-[95%] h-10  flex justify-center items-center overflow-hidden max-h-0 transition-all duration-300">

                                            <span class="text-[#c4c4c4] md:text-[16px] text-[11px]">این درس خصوصی است. برای
                                                مشاهده باید دوره را خریداری کنید.</span>
                                        </div>

                                    </div>

                                </div>

                            </div>
                            <!-- هفتم -->
                            <div
                                class="w-[95%]  bg-[#fff] flex justify-between items-center rounded-xl shadow-md px-5 relative flex-col">
                                <div
                                    class="w-full md:h-20 h-28 flex justify-between items-center course_meetings cursor-pointer">

                                    <div class="flex gap-4">
                                        <img src="https://elhammat.com/wp-content/uploads/2025/11/wordpress.svg"
                                            alt="" class="w-10">
                                        <div class="flex flex-col gap-1">
                                            <h4 class="lg:text-[18px] text-[14px] font-bold">ساخت سایت بدون برنامه نویسی
                                            </h4>
                                            <span class="lg:text-[14px] text-[11px] ">همین ابتدای کار یک وب‌سایت بصورت عملی
                                                راه‌اندازی می‌کنیم.</span>
                                        </div>
                                    </div>
                                    <div>
                                        <img src="https://icongr.am/entypo/chevron-small-down.svg?size=39&color=797272"
                                            alt="" class="transition-all duration-300">
                                    </div>
                                </div>

                                <!-- نسلیبشمنیلسبق -->
                                <div
                                    class="w-full flex flex-col items-center overflow-hidden max-h-0 transition-all duration-300">
                                    <div class="w-full flex flex-col  items-center">

                                        <div
                                            class="w-full h-20 bg-[#fff] border-y-1 border-[#e9ecf0] flex items-center justify-between hover:bg-[#e9ecf0]  course_meetings_items transition-all duration-300 px-5 cursor-pointer">
                                            <div class="flex items-center gap-3 ">
                                                <img src="https://icongr.am/feather/play.svg?size=27&color=696363"
                                                    alt="" class="w-5">
                                                <div class="flex flex-col">
                                                    <div class="flexsm:flex-row flex-col">
                                                        <span class="text-[13px] md:text-[16px] font-bold">راه اندازی سایت
                                                            اختصاصی</span>
                                                        <span
                                                            class="md:w-15 md:h-7 w-10 h-5 md:text-[16px] text-[11px] bg-[#8be66a] flex justify-center items-center rounded-md">رایگان</span>
                                                    </div>
                                                    <span class="text-[14px] text-[#ADB5BD] sm:flex hidden">اصول کارکرد یک
                                                        وب‌سایت بصورت عملی</span>
                                                </div>
                                            </div>
                                            <div class="flex gap-2 ">
                                                <di class="md:inline-block hidden"v>

                                                    <div
                                                        class="w-30 h-10 bg-[#ff6161] flex justify-center items-center text-[#fff] gap-2 rounded-2xl pop_up_on">
                                                        <img src="https://icongr.am/feather/play.svg?size=27&color=696363"
                                                            alt="" class="w-7">
                                                        <span class="text-[14px]">پیش نمایش</span>
                                                    </div>
                                                    <div
                                                        class="fixed top-0 right-0 left-0  bg-black/50 w-1500 h-[100vh] flex  items-center z-11 pop_up_off hidden">
                                                        <div class="absolute w-full h-[100vh] z-0 "></div>
                                                        <img src="{{ asset('assets/img/course/Wallpaper_4Kl3D ( 45312 ).jpg') }}"
                                                            alt="" class="w-80 mx-150 z-1 ">
                                                    </div>

                                                </di>
                                                <div
                                                    class="w-10 h-10 bg-[#4fcf3e] rounded-full flex justify-center items-center ">
                                                    <img src="https://icongr.am/entypo/download.svg?size=16&color=ffffff"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-full h-10 flex justify-center items-center overflow-hidden max-h-0  transition-all duration-300 "
                                            id="vidio">

                                        </div>
                                    </div>


                                    <div class="w-full flex flex-col  items-center">

                                        <div
                                            class="w-full h-20 bg-[#fff] border-b-1 border-[#e9ecf0] flex items-center justify-between hover:bg-[#e9ecf0] course_meetings_items transition-all duration-300 px-5 cursor-pointer">
                                            <div class="flex items-center gap-3">
                                                <img src="https://icongr.am/feather/play.svg?size=27&color=696363"
                                                    alt="" class="w-5">
                                                <div class="flex flex-col">
                                                    <div class="flexsm:flex-row flex-col">
                                                        <span class="text-[13px] md:text-[16px] font-bold">نصب وردپرس روی
                                                            هاست </span>
                                                        <span
                                                            class="md:w-20 md:h-7 w-15 h-5 md:text-[16px] text-[11px] bg-[#a66287] flex justify-center items-center rounded-md">فایل
                                                            صوتی</span>
                                                    </div>
                                                    <span class="text-[14px] text-[#ADB5BD] sm:flex hidden">تغییر پیشوند
                                                        جداول دیتابیس برای افزایش امنیت سایت</span>
                                                </div>
                                            </div>
                                            <div class="flex gap-2">
                                                <img src="https://icongr.am/feather/lock.svg?size=16&color=655d5d"
                                                    alt="">
                                                <span class="text-[#8c8c8c] md:flex hidden">خصوصی</span>
                                            </div>
                                        </div>
                                        <div class="w-[95%] h-10  flex justify-center items-center overflow-hidden max-h-0 transition-all duration-300"
                                            id="kfjh">

                                            <span class="text-[#c4c4c4] md:text-[16px] text-[11px]">این درس خصوصی است. برای
                                                مشاهده باید دوره را خریداری کنید.</span>
                                        </div>

                                    </div>


                                    <div class="w-full flex flex-col  items-center">

                                        <div
                                            class="w-full h-20 bg-[#fff] border-b-1 border-[#e9ecf0] flex items-center justify-between hover:bg-[#e9ecf0] course_meetings_items transition-all duration-300 px-5 cursor-pointer">
                                            <div class="flex items-center gap-3">
                                                <img src="https://icongr.am/feather/play.svg?size=27&color=696363"
                                                    alt="" class="w-5">
                                                <div class="flex flex-colsm:flex-row flex-col">
                                                    <div class="flex md:flex-row flex-col">
                                                        <span class="text-[13px] md:text-[16px] font-bold">کار با نوشته‌ها
                                                            و مقالات سایت</span>

                                                        <span
                                                            class="md:w-15 md:h-7 w-10 h-5 md:text-[16px] text-[11px] bg-[#bd84f0] flex justify-center items-center rounded-md">کوئیز</span>
                                                    </div>
                                                    <span class="text-[14px] text-[#ADB5BD] sm:flex hidden">انواع نوشته و
                                                        حالت های انتشار مطالب</span>
                                                </div>
                                            </div>
                                            <div class="flex gap-2">
                                                <img src="https://icongr.am/feather/lock.svg?size=16&color=655d5d"
                                                    alt="">
                                                <span class="text-[#8c8c8c] md:flex hidden">خصوصی</span>
                                            </div>
                                        </div>
                                        <div class="w-[95%] h-10  flex justify-center items-center overflow-hidden max-h-0 transition-all duration-300"
                                            id="pruvateone">

                                            <span class="text-[#c4c4c4] md:text-[16px] text-[11px]">این درس خصوصی است. برای
                                                مشاهده باید دوره را خریداری کنید.</span>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="w-full rounded-xl flex flex-col bg-[#fff] gap-5 shadow-md p-4 " id="asatid">
                        <div class="w-full h-20 flex items-center gap-3">
                            <div class="p-3 rounded-full flex justify-center items-center bg-(--color-primary) ">
                                <svg xmlns="http://www.w3.org/2000/svg" class="md:w-9 w-5 md:h-9 h-5" viewBox="0 0 24 24"
                                    fill="none">
                                    <path
                                        d="m21.67 14.3-.4 5c-.15 1.53-.27 2.7-2.98 2.7H5.71C3 22 2.88 20.83 2.73 19.3l-.4-5c-.08-.83.18-1.6.65-2.19l.02-.02C3.55 11.42 4.38 11 5.31 11h13.38c.93 0 1.75.42 2.29 1.07.01.01.02.02.02.03.49.59.76 1.36.67 2.2Z"
                                        stroke="#ffffff" stroke-width="1.5" stroke-miterlimit="10"></path>
                                    <path
                                        d="M3.5 11.43V6.28c0-3.4.85-4.25 4.25-4.25h1.27c1.27 0 1.56.38 2.04 1.02l1.27 1.7c.32.42.51.68 1.36.68h2.55c3.4 0 4.25.85 4.25 4.25v1.79M9.43 17h5.14"
                                        stroke="#ffffff" stroke-width="1.5" stroke-miterlimit="10"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </div>
                            <span class="min-w-30 text-[20px] text-(--color-text)">اساتید دوره</span>
                            <span class="w-[75%] h-[2px] bg-[#e3e3e3]"></span>
                        </div>
                        <div class="flex gap-2 items-center">
                            <img src="https://elhammat.com/wp-content/uploads/2025/11/UuOpT1pgTeYzd0zE-150x150.jpg"
                                alt="" class="w-18  rounded-full shadow-md shadow-[#91a4ab] ">
                            <div class="flex flex-col gap-3">
                                <h5 class="text-[14px] text-(--color-secondary-text)">محسن ستاری</h5>
                                <span class="text-[12px] text-(--color-secondary-text)">متخصص ارشد سون لرن</span>
                            </div>
                        </div>
                    </div>
                    <div class="w-full bg-[#fff] flex flex-col gap-5 rounded-xl p-4 shadow-md" id="comment">
                        <div class="w-full h-20 flex items-center gap-3">
                            <div class="p-3 rounded-full flex justify-center items-center bg-(--color-primary)">
                                <svg xmlns="http://www.w3.org/2000/svg" class="md:w-9 w-5 md:h-9 h-5" viewBox="0 0 24 24"
                                    fill="none">
                                    <path
                                        d="M13.0867 21.3877L13.7321 21.7697L13.0867 21.3877ZM13.6288 20.4718L12.9833 20.0898L13.6288 20.4718ZM10.3712 20.4718L9.72579 20.8539H9.72579L10.3712 20.4718ZM10.9133 21.3877L11.5587 21.0057L10.9133 21.3877ZM1.25 10.5C1.25 10.9142 1.58579 11.25 2 11.25C2.41421 11.25 2.75 10.9142 2.75 10.5H1.25ZM3.07351 15.6264C2.915 15.2437 2.47627 15.062 2.09359 15.2205C1.71091 15.379 1.52918 15.8177 1.68769 16.2004L3.07351 15.6264ZM7.78958 18.9915L7.77666 19.7413L7.78958 18.9915ZM5.08658 18.6194L4.79957 19.3123H4.79957L5.08658 18.6194ZM21.6194 15.9134L22.3123 16.2004V16.2004L21.6194 15.9134ZM16.2104 18.9915L16.1975 18.2416L16.2104 18.9915ZM18.9134 18.6194L19.2004 19.3123H19.2004L18.9134 18.6194ZM19.6125 2.7368L19.2206 3.37628L19.6125 2.7368ZM21.2632 4.38751L21.9027 3.99563V3.99563L21.2632 4.38751ZM4.38751 2.7368L3.99563 2.09732V2.09732L4.38751 2.7368ZM2.7368 4.38751L2.09732 3.99563H2.09732L2.7368 4.38751ZM9.40279 19.2098L9.77986 18.5615L9.77986 18.5615L9.40279 19.2098ZM13.7321 21.7697L14.2742 20.8539L12.9833 20.0898L12.4412 21.0057L13.7321 21.7697ZM9.72579 20.8539L10.2679 21.7697L11.5587 21.0057L11.0166 20.0898L9.72579 20.8539ZM12.4412 21.0057C12.2485 21.3313 11.7515 21.3313 11.5587 21.0057L10.2679 21.7697C11.0415 23.0767 12.9585 23.0767 13.7321 21.7697L12.4412 21.0057ZM10.5 2.75H13.5V1.25H10.5V2.75ZM21.25 10.5V11.5H22.75V10.5H21.25ZM7.8025 18.2416C6.54706 18.2199 5.88923 18.1401 5.37359 17.9265L4.79957 19.3123C5.60454 19.6457 6.52138 19.7197 7.77666 19.7413L7.8025 18.2416ZM1.68769 16.2004C2.27128 17.6093 3.39066 18.7287 4.79957 19.3123L5.3736 17.9265C4.33223 17.4951 3.50486 16.6678 3.07351 15.6264L1.68769 16.2004ZM21.25 11.5C21.25 12.6751 21.2496 13.5189 21.2042 14.1847C21.1592 14.8438 21.0726 15.2736 20.9265 15.6264L22.3123 16.2004C22.5468 15.6344 22.6505 15.0223 22.7007 14.2868C22.7504 13.5581 22.75 12.6546 22.75 11.5H21.25ZM16.2233 19.7413C17.4786 19.7197 18.3955 19.6457 19.2004 19.3123L18.6264 17.9265C18.1108 18.1401 17.4529 18.2199 16.1975 18.2416L16.2233 19.7413ZM20.9265 15.6264C20.4951 16.6678 19.6678 17.4951 18.6264 17.9265L19.2004 19.3123C20.6093 18.7287 21.7287 17.6093 22.3123 16.2004L20.9265 15.6264ZM13.5 2.75C15.1512 2.75 16.337 2.75079 17.2619 2.83873C18.1757 2.92561 18.7571 3.09223 19.2206 3.37628L20.0044 2.09732C19.2655 1.64457 18.4274 1.44279 17.4039 1.34547C16.3915 1.24921 15.1222 1.25 13.5 1.25V2.75ZM22.75 10.5C22.75 8.87781 22.7508 7.6085 22.6545 6.59611C22.5572 5.57256 22.3554 4.73445 21.9027 3.99563L20.6237 4.77938C20.9078 5.24291 21.0744 5.82434 21.1613 6.73809C21.2492 7.663 21.25 8.84876 21.25 10.5H22.75ZM19.2206 3.37628C19.7925 3.72672 20.2733 4.20752 20.6237 4.77938L21.9027 3.99563C21.4286 3.22194 20.7781 2.57144 20.0044 2.09732L19.2206 3.37628ZM10.5 1.25C8.87781 1.25 7.6085 1.24921 6.59611 1.34547C5.57256 1.44279 4.73445 1.64457 3.99563 2.09732L4.77938 3.37628C5.24291 3.09223 5.82434 2.92561 6.73809 2.83873C7.663 2.75079 8.84876 2.75 10.5 2.75V1.25ZM2.75 10.5C2.75 8.84876 2.75079 7.663 2.83873 6.73809C2.92561 5.82434 3.09223 5.24291 3.37628 4.77938L2.09732 3.99563C1.64457 4.73445 1.44279 5.57256 1.34547 6.59611C1.24921 7.6085 1.25 8.87781 1.25 10.5H2.75ZM3.99563 2.09732C3.22194 2.57144 2.57144 3.22194 2.09732 3.99563L3.37628 4.77938C3.72672 4.20752 4.20752 3.72672 4.77938 3.37628L3.99563 2.09732ZM11.0166 20.0898C10.8136 19.7468 10.6354 19.4441 10.4621 19.2063C10.2795 18.9559 10.0702 18.7304 9.77986 18.5615L9.02572 19.8582C9.07313 19.8857 9.13772 19.936 9.24985 20.0898C9.37122 20.2564 9.50835 20.4865 9.72579 20.8539L11.0166 20.0898ZM7.77666 19.7413C8.21575 19.7489 8.49387 19.7545 8.70588 19.7779C8.90399 19.7999 8.98078 19.832 9.02572 19.8582L9.77986 18.5615C9.4871 18.3912 9.18246 18.3215 8.87097 18.287C8.57339 18.2541 8.21375 18.2487 7.8025 18.2416L7.77666 19.7413ZM14.2742 20.8539C14.4916 20.4865 14.6287 20.2564 14.7501 20.0898C14.8622 19.936 14.9268 19.8857 14.9742 19.8582L14.2201 18.5615C13.9298 18.7304 13.7204 18.9559 13.5379 19.2063C13.3646 19.4441 13.1864 19.7468 12.9833 20.0898L14.2742 20.8539ZM16.1975 18.2416C15.7862 18.2487 15.4266 18.2541 15.129 18.287C14.8175 18.3215 14.5129 18.3912 14.2201 18.5615L14.9742 19.8582C15.0192 19.832 15.096 19.7999 15.2941 19.7779C15.5061 19.7545 15.7842 19.7489 16.2233 19.7413L16.1975 18.2416Z"
                                        fill="white"></path>
                                    <path d="M8 11H8.009M11.991 11H12M15.991 11H16" stroke="white" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </div>
                            <span class="text-[20px] text-(--color-text)"> دیدگاه‌ها</span>
                            <span class="w-[85%] h-[2px] bg-[#e3e3e3]"></span>
                        </div>
                        <div class=" w-full sm:h-15  flex justify-between items-cente sm:flex-row flex-col gap-5">
                            <span class="text-(--color-text)">نقد و بررسی‌ها</span>
                            <div
                                class="relative w-38 h-10 border-1 border-[#e6e6e6] bg-[#fff] rounded-2xl flex justify-between items-center px-2 ">

                                <select name="" id="" class="text-[#3A3A3A] outline-none">
                                    <option value="" class="border-4 ">پیش فرض</option>
                                    <option value="">جدید ترین</option>
                                    <option value=""> قدیمی ترین </option>
                                    <option value="">کمک کننده ترین</option>
                                    <option value="">بیشترین امتیاز</option>
                                    <option value="">کمترین امتیاز </option>
                                </select>
                            </div>
                        </div>
                        <div class="w-full flex flex-col gap-5">
                            <span class="text-(--color-secondary-text) text-[14px] md:text-[16px]">هنوز بررسی‌ای ثبت نشده
                                است.</span>
                            <p class="text-(--color-text) font-bold text-[15px]">اولین کسی باشید که دیدگاهی می نویسد “آموزش
                                پروژه محور فریمورک Fastify”</p>
                            <p class="text-(--color-secondary-text) text-[14px] md:text-[16px]">نشانی ایمیل شما منتشر
                                نخواهد شد. بخش‌های موردنیاز علامت‌گذاری شده‌اند *</p>
                            <div class="flex">
                                <span class="text-(--color-secondary-text) text-[14px] md:text-[16px]"> <span>امتیاز
                                        شما</span>
                                    <span class="text-[red]">*</span></span>
                                <img src="{{ asset('assets/img/course/star.svg') }}" alt="">
                                <img src="{{ asset('assets/img/course/star.svg') }}" alt="">
                                <img src="{{ asset('assets/img/course/star.svg') }}" alt="">
                                <img src="{{ asset('assets/img/course/star.svg') }}" alt="">
                                <img src="{{ asset('assets/img/course/star.svg') }}" alt="">
                            </div>
                            <form action="" class="w-full flex flex-col gap-3">
                                <label for="text-comment"
                                    class="text-(--color-secondary-text) text-[14px] md:text-[16px]"> <span>دیدگاه
                                        شما</span>
                                    <span class="text-[red]">*</span></label>
                                <textarea name="" id="text-comment" cols="50" rows="7"
                                    class="rounded-2xl outline-none border-1 border-[#e8e8e8] p-3"></textarea>
                                <div class="w-full flex lg:flex-col md:flex-row flex-col">
                                    <div class="md:w-[49%] lg:w-[95%] w-[95%] lg:w-full flex flex-col">
                                        <label for="text-name">
                                            <span class="text-[14px] md:text-[16px] text-(--color-secondary-text)">
                                                نام</span>
                                            <span class="text-[red]">*</span>
                                        </label>
                                        <input type="text"
                                            class="outline-none border-1 border-[#e8e8e8] h-12 rounded-2xl lg:w-full w-full p-4"
                                            id="text-name">
                                    </div>
                                    <div class="md:w-[49%] lg:w-[95%] w-[95%] lg:w-full flex flex-col">
                                        <label for="text-name">
                                            <span
                                                class="text-[14px] md:text-[16px] text-(--color-secondary-text)">ایمیل</span>
                                            <span class="text-[red]">*</span>
                                        </label>
                                        <input type="email" id="text-email"
                                            class=" outline-none border-1 border-[#e8e8e8] rounded-2xl h-12 p-4 lg:w-full w-full">
                                    </div>
                                </div>
                                <div class="flex gap-2">
                                    <input type="checkbox">
                                    <span class="text-(--color-secondary-text) text-[14px] md:text-[16px]">ذخیره نام، ایمیل
                                        و وبسایت من در مرورگر برای زمانی که دوباره دیدگاهی می‌نویسم.</span>
                                </div>
                                <input type="submit"
                                    class="w-20 h-13 bg-(--color-btn-contact) flex justify-center items-cente text-md text-[#fff] rounded-lg"
                                    value=" ثبت">
                            </form>
                        </div>
                    </div>
                    <div class="w-full bg-[#fff] rounded-xl shadow-md p-4 py-2" id="moshaver">
                        <div class="w-full h-20 flex items-center gap-3">
                            <div class="p-3 rounded-full flex justify-center items-center bg-(--color-primary)">
                                <svg xmlns="http://www.w3.org/2000/svg" class="md:w-9 w-5 md:h-9 h-5" viewBox="0 0 24 24"
                                    fill="none">
                                    <path
                                        d="M5.46 18.49v-2.92c0-.97.76-1.84 1.84-1.84.97 0 1.84.76 1.84 1.84v2.81c0 1.95-1.62 3.57-3.57 3.57-1.95 0-3.57-1.63-3.57-3.57v-6.16C1.89 6.6 6.33 2.05 11.95 2.05 17.57 2.05 22 6.6 22 12.11v6.16c0 1.95-1.62 3.57-3.57 3.57-1.95 0-3.57-1.62-3.57-3.57v-2.81c0-.97.76-1.84 1.84-1.84.97 0 1.84.76 1.84 1.84v3.03"
                                        stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </svg>
                            </div>
                            <span class="min-w-40 text-[20px] text-(--color-text)">درخواست مشاوره</span>
                            <span class="w-[70%] h-[2px] bg-[#e3e3e3]"></span>
                        </div>
                        <div class="w-full flex sm:flex-row flex-col justify-between  items-center sm:px-3 gap-20 p-10 ">
                            <span
                                class="sm:w-[49%] w-full text-(--color-secondary-text) sm:text-[16px] text-[15px] text-justify ">شماره
                                همراه خود را وارد کنید، تا مشاوران ما طی دو روز کاری آینده در ساعت کاری (۹ صبح تا ۶ بعد از
                                ظهر) برای مشاوره رایگان سرمایه‌گذاری با شما در ارتباط باشند.</span>
                            <span class="sm:w-[49%] w-full text-[#cfcfcf] text-center">محل قرارگیری فرم مشاوره و ارتباط
                                شما</span>
                        </div>
                    </div>
                </div>
                <div class="lg:w-[29%] w-[95%] h-170  flex flex-col gap-5 lg:sticky lg:top-0 mx-auto">
                    <div class="w-full bg-[#fff] p-4 shadow-md flex flex-col gap-8 rounded-2xl">

                        <span
                            class="text-(--color-text) xl:text-[32px] lg:text-[25px] text-[25px] flex justify-end font-bold">7,900,000
                            تومان</span>
                        <div class="flex flex-col gap-5">
                            <div class="flex gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                    viewBox="0 0 17 17" fill="none">
                                    <circle cx="8.5" cy="8.5" r="8.5" fill="#FD9636"></circle>
                                    <path d="M12.2727 6L7.27273 11L5 8.72727" stroke="#F5FBED"></path>
                                </svg>
                                <span class="text-(--color-secondary-text) md:text-[14px] text-[13px] font-bold ">6 ماه
                                    پشتیبانی تضمینی</span>
                            </div>
                            <div class="flex gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                    viewBox="0 0 17 17" fill="none">
                                    <circle cx="8.5" cy="8.5" r="8.5" fill="#FD9636"></circle>
                                    <path d="M12.2727 6L7.27273 11L5 8.72727" stroke="#F5FBED"></path>
                                </svg>
                                <span class="text-(--color-secondary-text) md:text-[14px] text-[13px] font-bold ">بدون نیاز
                                    به لایسنس فعال سازی و نصب نا محدود</span>
                            </div>
                            <div class="flex gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                    viewBox="0 0 17 17" fill="none">
                                    <circle cx="8.5" cy="8.5" r="8.5" fill="#FD9636"></circle>
                                    <path d="M12.2727 6L7.27273 11L5 8.72727" stroke="#F5FBED"></path>
                                </svg>
                                <span class="text-(--color-secondary-text) md:text-[14px] text-[13px] font-bold ">آپدیت
                                    رایگان، دسترسی مادام العمر به فایل</span>
                            </div>
                            <div class="flex gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                    viewBox="0 0 17 17" fill="none">
                                    <circle cx="8.5" cy="8.5" r="8.5" fill="#FD9636"></circle>
                                    <path d="M12.2727 6L7.27273 11L5 8.72727" stroke="#F5FBED"></path>
                                </svg>
                                <span class="text-(--color-secondary-text) md:text-[14px] text-[13px] font-bold ">همراه با
                                    بسته نصبی سریع و آسان</span>
                            </div>
                        </div>
                        <div
                            class="w-full h-15 bg-(--color-btn-contact) mx-auto flex justify-center items-center mt-5 hover:bg-(--color-bg-hover-btn) rounded-lg">
                            <span class="text-[#fff]">ثبت نام دز دوره</span>
                        </div>

                    </div>

                    <div
                        class="w-full h-80 bg-[#fff] p-4 shadow-md flex flex-col gap-3 rounded-2xl  justify-center items-center">
                        <a href=""
                            class="flex gap-3 w-[95%] h-10 items-center rounded-2xl hover:bg-[#fafbfc] pr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M3 14V10C3 6.22876 3 4.34315 4.17157 3.17157C5.34315 2 7.22876 2 11 2H13C16.7712 2 18.6569 2 19.8284 3.17157C20.4816 3.82476 20.7706 4.69989 20.8985 6M21 10V14C21 17.7712 21 19.6569 19.8284 20.8284C18.6569 22 16.7712 22 13 22H11C7.22876 22 5.34315 22 4.17157 20.8284C3.51839 20.1752 3.22937 19.3001 3.10149 18"
                                    stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path>
                                <path d="M8 14H13" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path>
                                <path d="M8 10H9M16 10H12" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round">
                                </path>
                            </svg>
                            <span class="text-(--color-text) font-bold md:text-[16px] text-[14px]">توضیحات</span>
                        </a>
                        <a href=""
                            class="flex gap-3 w-[95%] h-10 items-center rounded-2xl hover:bg-[#fafbfc] pr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 24 24" fill="none">
                                <path d="M2 5.5L3.21429 7L7.5 3" stroke="#1C274C" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M2 12.5L3.21429 14L7.5 10" stroke="#1C274C" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M2 19.5L3.21429 21L7.5 17" stroke="#1C274C" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M22 12H17M12 12H13.5" stroke="#1C274C" stroke-width="1.5"
                                    stroke-linecap="round"></path>
                                <path d="M12 19H17M20.5 19H22" stroke="#1C274C" stroke-width="1.5"
                                    stroke-linecap="round"></path>
                                <path d="M22 5L12 5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path>
                            </svg>
                            <span class="text-(--color-text) font-bold md:text-[16px] text-[14px]">جلسات دوره</span>
                        </a>
                        <a href=""
                            class="flex gap-3 w-[95%] h-10 items-center rounded-2xl hover:bg-[#fafbfc] pr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M3.09155 6.63659L9.78267 3.49965C11.2037 2.83345 12.7961 2.83345 14.2171 3.49965L20.9083 6.63664C22.3638 7.31899 22.3638 9.68105 20.9083 10.3634L14.2172 13.5003C12.7962 14.1665 11.2038 14.1665 9.78275 13.5003L4.99995 11.2581"
                                    stroke="#1C274D" stroke-width="1.5" stroke-linecap="round"></path>
                                <path opacity="0.5"
                                    d="M2.5 15V12.1376C2.5 10.8584 2.5 10.2188 2.83032 9.71781C3.16064 9.21687 3.74853 8.96492 4.92432 8.461L6 8"
                                    stroke="#1C274D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                                <path opacity="0.5"
                                    d="M19 11.5V16.6254C19 17.6334 18.4965 18.5772 17.6147 19.0656C16.1463 19.8787 13.796 21 12 21C10.204 21 7.8537 19.8787 6.38533 19.0656C5.5035 18.5772 5 17.6334 5 16.6254V11.5"
                                    stroke="#1C274D" stroke-width="1.5" stroke-linecap="round"></path>
                            </svg>
                            <span class="text-(--color-text) font-bold md:text-[16px] text-[14px]">اساتید دوره</span>
                        </a>
                        <a href=""
                            class="flex gap-3 w-[95%] h-10 items-center rounded-2xl hover:bg-[#fafbfc] pr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M3.09155 6.63659L9.78267 3.49965C11.2037 2.83345 12.7961 2.83345 14.2171 3.49965L20.9083 6.63664C22.3638 7.31899 22.3638 9.68105 20.9083 10.3634L14.2172 13.5003C12.7962 14.1665 11.2038 14.1665 9.78275 13.5003L4.99995 11.2581"
                                    stroke="#1C274D" stroke-width="1.5" stroke-linecap="round"></path>
                                <path opacity="0.5"
                                    d="M2.5 15V12.1376C2.5 10.8584 2.5 10.2188 2.83032 9.71781C3.16064 9.21687 3.74853 8.96492 4.92432 8.461L6 8"
                                    stroke="#1C274D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                                <path opacity="0.5"
                                    d="M19 11.5V16.6254C19 17.6334 18.4965 18.5772 17.6147 19.0656C16.1463 19.8787 13.796 21 12 21C10.204 21 7.8537 19.8787 6.38533 19.0656C5.5035 18.5772 5 17.6334 5 16.6254V11.5"
                                    stroke="#1C274D" stroke-width="1.5" stroke-linecap="round"></path>
                            </svg>
                            <span class="text-(--color-text) font-bold md:text-[16px] text-[14px]">دیدگاه ها </span>
                        </a>
                        <a href=""
                            class="flex gap-3 w-[95%] h-10 items-center rounded-2xl hover:bg-[#fafbfc] pr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M5.46 18.49v-2.92c0-.97.76-1.84 1.84-1.84.97 0 1.84.76 1.84 1.84v2.81c0 1.95-1.62 3.57-3.57 3.57-1.95 0-3.57-1.63-3.57-3.57v-6.16C1.89 6.6 6.33 2.05 11.95 2.05 17.57 2.05 22 6.6 22 12.11v6.16c0 1.95-1.62 3.57-3.57 3.57-1.95 0-3.57-1.62-3.57-3.57v-2.81c0-.97.76-1.84 1.84-1.84.97 0 1.84.76 1.84 1.84v3.03"
                                    stroke="#555555" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                            </svg>
                            <span class="text-(--color-text) font-bold md:text-[16px] text-[14px]">درخواست مشاوره </span>
                        </a>

                    </div>
                </div>
            </section>



            <section class="w-full flex justify-center pt-10 mb-20">
                <div class="w-full bg-[#fff] shadow-md flex flex-col gap-5 p-4">
                    <div class="flex items-center gap-3">
                        <div class="p-3 bg-(--color-primary) flex justify-center items-center rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="md:w-9 w-5 md:h-9 h-5" viewBox="0 0 24 24"
                                fill="none">
                                <path
                                    d="m21.67 14.3-.4 5c-.15 1.53-.27 2.7-2.98 2.7H5.71C3 22 2.88 20.83 2.73 19.3l-.4-5c-.08-.83.18-1.6.65-2.19l.02-.02C3.55 11.42 4.38 11 5.31 11h13.38c.93 0 1.75.42 2.29 1.07.01.01.02.02.02.03.49.59.76 1.36.67 2.2Z"
                                    stroke="#ffffff" stroke-width="1.5" stroke-miterlimit="10"></path>
                                <path
                                    d="M3.5 11.43V6.28c0-3.4.85-4.25 4.25-4.25h1.27c1.27 0 1.56.38 2.04 1.02l1.27 1.7c.32.42.51.68 1.36.68h2.55c3.4 0 4.25.85 4.25 4.25v1.79M9.43 17h5.14"
                                    stroke="#ffffff" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg>
                        </div>
                        <h6 class="min-w-40 text-[20px] text-(--color-text)">محصولات مشابه</h6>
                        <span class="w-[75%] h-[2px] bg-[#e3e3e3]"></span>
                    </div>
                    <div class="w-full flex gap-2 pt-5 overflow-auto">
                        <div
                            class="lg:min-w-[28%] sm:min-w-[33%] min-w-[50%] bg-[#fff] rounded-xl pb-3 product_box lg:overflow-hidden ">
                            <div class="relative">
                                <span
                                    class="absolute right-1/20 top-1/12 sm:w-18 sm:h-6 w-12 h-4 sm:text-[11px] text-[8px] bg-[#cccccc] rounded-2xl rounded-br-[0px] flex justify-center items-center">تکمیل
                                    شده</span>
                                <img src="https://elhammat.com/wp-content/uploads/2025/04/IMAGE-1402-12-23-17_50_51-1-300x169.webp"
                                    alt="" class=" w-full rounded-xl">
                            </div>
                            <div
                                class="px-5 pb-5 pt-2 flex flex-col gap-1 product_hover_box bg-[#fff] transition-all duration-250 ease-in delay-250ms rounded-2xl overflow-hidden">
                                <span class="md:text-[17px] text-=[14px] text-(--color-text) font-bold">وب سوکت در لاراول
                                    با Reverb</span>
                                <div class="text-(--color-secondary-text) text-[14px] text-nowrap">
                                    <a href="">برنامه نویسی</a>
                                    <a href="">وردپرس</a>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-[#45ba22] md:text-[15px] text-[13px] ">7,900,900 تومان</span>
                                    <div class="flex gap-2 items-center">
                                        <span class="md:text-[15px] text-[11px] text-(--color-secondary-text)">13</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="md:w-8 w-6" viewBox="0 0 24 24"
                                            fill="none">
                                            <path
                                                d="M9.16 10.87c-.1-.01-.22-.01-.33 0a4.42 4.42 0 0 1-4.27-4.43C4.56 3.99 6.54 2 9 2a4.435 4.435 0 0 1 .16 8.87ZM16.41 4c1.94 0 3.5 1.57 3.5 3.5 0 1.89-1.5 3.43-3.37 3.5a1.13 1.13 0 0 0-.26 0M4.16 14.56c-2.42 1.62-2.42 4.26 0 5.87 2.75 1.84 7.26 1.84 10.01 0 2.42-1.62 2.42-4.26 0-5.87-2.74-1.83-7.25-1.83-10.01 0ZM18.34 20c.72-.15 1.4-.44 1.96-.87 1.56-1.17 1.56-3.1 0-4.27-.55-.42-1.22-.7-1.93-.86"
                                                stroke="#878f9b" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div
                                    class="flex gap-5 items-center product_hover_button_box lg:invisible lg:opacity-0 mt-2 justify-between  ">
                                    <div
                                        class="lg:w-[75%] w-full h-9 bg-(--color-btn-contact) flex justify-center items-center overflow-hidden product_box_button_hover hover:bg-(--color-bg-hover-btn) transition-all duration-250 ease-in delay-250ms relative rounded-md">
                                        <span
                                            class=" md:text-[15px] text-[13px] text-[#fff] product_box_button_hover_change_items1 transition-all duration-250 ease-in delay-250ms ">ثبت
                                            نام در دوره</span>
                                        <img src="https://icongr.am/feather/shopping-cart.svg?size=25&color=ffffff"
                                            alt=""
                                            class=" product_box_button_hover_change_items2 invisible opacity-0 flex justify-self-end absolute bottom-[-5] transition-all duration-250 ease-in delay-250ms ">
                                    </div>
                                    <img src="https://elhammat.com/wp-content/uploads/2025/04/Magnifer.svg"
                                        alt="" class="w-5 lg:flex hidden">
                                    <img src="https://icongr.am/entypo/heart-outlined.svg?size=21&color=currentColor"
                                        alt="" class="w-5 lg:flex hidden ">
                                </div>

                            </div>
                        </div>

                        <div
                            class="lg:min-w-[28%] sm:min-w-[33%] min-w-[50%] bg-[#fff] rounded-xl pb-3 product_box lg:overflow-hidden ">
                            <div class="relative">
                                <span
                                    class="absolute right-1/20 top-1/12 sm:w-18 sm:h-6 w-12 h-4 sm:text-[11px] text-[8px] bg-[#cccccc] rounded-2xl rounded-br-[0px] flex justify-center items-center">تکمیل
                                    شده</span>
                                <img src="https://elhammat.com/wp-content/uploads/2025/04/IMAGE-1402-12-23-17_50_51-1-300x169.webp"
                                    alt="" class=" w-full rounded-xl">
                            </div>
                            <div
                                class="px-5 pb-5 pt-2 flex flex-col gap-1 product_hover_box bg-[#fff] transition-all duration-250 ease-in delay-250ms rounded-2xl overflow-hidden">
                                <span class="md:text-[17px] text-=[14px] font-bold">وب سوکت در لاراول با Reverb</span>
                                <div class="text-[#A5A5A5] text-[14px] text-nowrap">
                                    <a href="">برنامه نویسی</a>
                                    <a href="">وردپرس</a>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-(--color-secondary-text) md:text-[15px] text-[13px] ">7,900,900
                                        تومان</span>
                                    <div class="flex gap-2 items-center">
                                        <span class="md:text-[15px] text-[11px]">13</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="md:w-8 w-6" viewBox="0 0 24 24"
                                            fill="none">
                                            <path
                                                d="M9.16 10.87c-.1-.01-.22-.01-.33 0a4.42 4.42 0 0 1-4.27-4.43C4.56 3.99 6.54 2 9 2a4.435 4.435 0 0 1 .16 8.87ZM16.41 4c1.94 0 3.5 1.57 3.5 3.5 0 1.89-1.5 3.43-3.37 3.5a1.13 1.13 0 0 0-.26 0M4.16 14.56c-2.42 1.62-2.42 4.26 0 5.87 2.75 1.84 7.26 1.84 10.01 0 2.42-1.62 2.42-4.26 0-5.87-2.74-1.83-7.25-1.83-10.01 0ZM18.34 20c.72-.15 1.4-.44 1.96-.87 1.56-1.17 1.56-3.1 0-4.27-.55-.42-1.22-.7-1.93-.86"
                                                stroke="#878f9b" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div
                                    class="flex gap-5 items-center product_hover_button_box lg:invisible lg:opacity-0 mt-2 justify-between  ">
                                    <div
                                        class="lg:w-[75%] w-full h-9 bg-[#35b50e] flex justify-center items-center overflow-hidden product_box_button_hover hover:bg-[#2d9c0c] transition-all duration-250 ease-in delay-250ms relative rounded-md">
                                        <span
                                            class=" md:text-[15px] text-[13px] text-[#fff] product_box_button_hover_change_items1 transition-all duration-250 ease-in delay-250ms ">ثبت
                                            نام در دوره</span>
                                        <img src="https://icongr.am/feather/shopping-cart.svg?size=25&color=ffffff"
                                            alt=""
                                            class=" product_box_button_hover_change_items2 invisible opacity-0 flex justify-self-end absolute bottom-[-5] transition-all duration-250 ease-in delay-250ms ">
                                    </div>
                                    <img src="https://elhammat.com/wp-content/uploads/2025/04/Magnifer.svg"
                                        alt="" class="w-5 lg:flex hidden">
                                    <img src="https://icongr.am/entypo/heart-outlined.svg?size=21&color=currentColor"
                                        alt="" class="w-5 lg:flex hidden ">
                                </div>

                            </div>
                        </div>

                        <div
                            class="lg:min-w-[28%] sm:min-w-[33%] min-w-[50%] bg-[#fff] rounded-xl pb-3 product_box lg:overflow-hidden ">
                            <div class="relative">
                                <span
                                    class="absolute right-1/20 top-1/12 sm:w-18 sm:h-6 w-12 h-4 sm:text-[11px] text-[8px] bg-[#cccccc] rounded-2xl rounded-br-[0px] flex justify-center items-center">تکمیل
                                    شده</span>
                                <img src="https://elhammat.com/wp-content/uploads/2025/04/IMAGE-1402-12-23-17_50_51-1-300x169.webp"
                                    alt="" class=" w-full rounded-xl">
                            </div>
                            <div
                                class="px-5 pb-5 pt-2 flex flex-col gap-1 product_hover_box bg-[#fff] transition-all duration-250 ease-in delay-250ms rounded-2xl overflow-hidden">
                                <span class="md:text-[17px] text-=[14px] font-bold">وب سوکت در لاراول با Reverb</span>
                                <div class="text-[#A5A5A5] text-[14px] text-nowrap">
                                    <a href="">برنامه نویسی</a>
                                    <a href="">وردپرس</a>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-[#45ba22] md:text-[15px] text-[13px] ">7,900,900 تومان</span>
                                    <div class="flex gap-2 items-center">
                                        <span class="md:text-[15px] text-[11px]">13</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="md:w-8 w-6" viewBox="0 0 24 24"
                                            fill="none">
                                            <path
                                                d="M9.16 10.87c-.1-.01-.22-.01-.33 0a4.42 4.42 0 0 1-4.27-4.43C4.56 3.99 6.54 2 9 2a4.435 4.435 0 0 1 .16 8.87ZM16.41 4c1.94 0 3.5 1.57 3.5 3.5 0 1.89-1.5 3.43-3.37 3.5a1.13 1.13 0 0 0-.26 0M4.16 14.56c-2.42 1.62-2.42 4.26 0 5.87 2.75 1.84 7.26 1.84 10.01 0 2.42-1.62 2.42-4.26 0-5.87-2.74-1.83-7.25-1.83-10.01 0ZM18.34 20c.72-.15 1.4-.44 1.96-.87 1.56-1.17 1.56-3.1 0-4.27-.55-.42-1.22-.7-1.93-.86"
                                                stroke="#878f9b" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div
                                    class="flex gap-5 items-center product_hover_button_box lg:invisible lg:opacity-0 mt-2 justify-between  ">
                                    <div
                                        class="lg:w-[75%] w-full h-9 bg-[#35b50e] flex justify-center items-center overflow-hidden product_box_button_hover hover:bg-[#2d9c0c] transition-all duration-250 ease-in delay-250ms relative rounded-md">
                                        <span
                                            class=" md:text-[15px] text-[13px] text-[#fff] product_box_button_hover_change_items1 transition-all duration-250 ease-in delay-250ms ">ثبت
                                            نام در دوره</span>
                                        <img src="https://icongr.am/feather/shopping-cart.svg?size=25&color=ffffff"
                                            alt=""
                                            class=" product_box_button_hover_change_items2 invisible opacity-0 flex justify-self-end absolute bottom-[-5] transition-all duration-250 ease-in delay-250ms ">
                                    </div>
                                    <img src="https://elhammat.com/wp-content/uploads/2025/04/Magnifer.svg"
                                        alt="" class="w-5 lg:flex hidden">
                                    <img src="https://icongr.am/entypo/heart-outlined.svg?size=21&color=currentColor"
                                        alt="" class="w-5 lg:flex hidden ">
                                </div>

                            </div>
                        </div>

                        <div
                            class="lg:min-w-[28%] sm:min-w-[33%] min-w-[50%] bg-[#fff] rounded-xl pb-3 product_box lg:overflow-hidden ">
                            <div class="relative">
                                <span
                                    class="absolute right-1/20 top-1/12 sm:w-18 sm:h-6 w-12 h-4 sm:text-[11px] text-[8px] bg-[#cccccc] rounded-2xl rounded-br-[0px] flex justify-center items-center">تکمیل
                                    شده</span>
                                <img src="https://elhammat.com/wp-content/uploads/2025/04/IMAGE-1402-12-23-17_50_51-1-300x169.webp"
                                    alt="" class=" w-full rounded-xl">
                            </div>
                            <div
                                class="px-5 pb-5 pt-2 flex flex-col gap-1 product_hover_box bg-[#fff] transition-all duration-250 ease-in delay-250ms rounded-2xl overflow-hidden">
                                <span class="md:text-[17px] text-=[14px] font-bold">وب سوکت در لاراول با Reverb</span>
                                <div class="text-[#A5A5A5] text-[14px] text-nowrap">
                                    <a href="">برنامه نویسی</a>
                                    <a href="">وردپرس</a>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-[#45ba22] md:text-[15px] text-[13px] ">7,900,900 تومان</span>
                                    <div class="flex gap-2 items-center">
                                        <span class="md:text-[15px] text-[11px]">13</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="md:w-8 w-6" viewBox="0 0 24 24"
                                            fill="none">
                                            <path
                                                d="M9.16 10.87c-.1-.01-.22-.01-.33 0a4.42 4.42 0 0 1-4.27-4.43C4.56 3.99 6.54 2 9 2a4.435 4.435 0 0 1 .16 8.87ZM16.41 4c1.94 0 3.5 1.57 3.5 3.5 0 1.89-1.5 3.43-3.37 3.5a1.13 1.13 0 0 0-.26 0M4.16 14.56c-2.42 1.62-2.42 4.26 0 5.87 2.75 1.84 7.26 1.84 10.01 0 2.42-1.62 2.42-4.26 0-5.87-2.74-1.83-7.25-1.83-10.01 0ZM18.34 20c.72-.15 1.4-.44 1.96-.87 1.56-1.17 1.56-3.1 0-4.27-.55-.42-1.22-.7-1.93-.86"
                                                stroke="#878f9b" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div
                                    class="flex gap-5 items-center product_hover_button_box lg:invisible lg:opacity-0 mt-2 justify-between  ">
                                    <div
                                        class="lg:w-[75%] w-full h-9 bg-[#35b50e] flex justify-center items-center overflow-hidden product_box_button_hover hover:bg-[#2d9c0c] transition-all duration-250 ease-in delay-250ms relative rounded-md">
                                        <span
                                            class=" md:text-[15px] text-[13px] text-[#fff] product_box_button_hover_change_items1 transition-all duration-250 ease-in delay-250ms ">ثبت
                                            نام در دوره</span>
                                        <img src="https://icongr.am/feather/shopping-cart.svg?size=25&color=ffffff"
                                            alt=""
                                            class=" product_box_button_hover_change_items2 invisible opacity-0 flex justify-self-end absolute bottom-[-5] transition-all duration-250 ease-in delay-250ms ">
                                    </div>
                                    <img src="https://elhammat.com/wp-content/uploads/2025/04/Magnifer.svg"
                                        alt="" class="w-5 lg:flex hidden">
                                    <img src="https://icongr.am/entypo/heart-outlined.svg?size=21&color=currentColor"
                                        alt="" class="w-5 lg:flex hidden ">
                                </div>

                            </div>
                        </div>

                        <div
                            class="lg:min-w-[28%] sm:min-w-[33%] min-w-[50%] bg-[#fff] rounded-xl pb-3 product_box lg:overflow-hidden ">
                            <div class="relative">
                                <span
                                    class="absolute right-1/20 top-1/12 sm:w-18 sm:h-6 w-12 h-4 sm:text-[11px] text-[8px] bg-[#cccccc] rounded-2xl rounded-br-[0px] flex justify-center items-center">تکمیل
                                    شده</span>
                                <img src="https://elhammat.com/wp-content/uploads/2025/04/IMAGE-1402-12-23-17_50_51-1-300x169.webp"
                                    alt="" class=" w-full rounded-xl">
                            </div>
                            <div
                                class="px-5 pb-5 pt-2 flex flex-col gap-1 product_hover_box bg-[#fff] transition-all duration-250 ease-in delay-250ms rounded-2xl overflow-hidden">
                                <span class="md:text-[17px] text-=[14px] font-bold">وب سوکت در لاراول با Reverb</span>
                                <div class="text-[#A5A5A5] text-[14px] text-nowrap">
                                    <a href="">برنامه نویسی</a>
                                    <a href="">وردپرس</a>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-[#45ba22] md:text-[15px] text-[13px] ">7,900,900 تومان</span>
                                    <div class="flex gap-2 items-center">
                                        <span class="md:text-[15px] text-[11px]">13</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="md:w-8 w-6" viewBox="0 0 24 24"
                                            fill="none">
                                            <path
                                                d="M9.16 10.87c-.1-.01-.22-.01-.33 0a4.42 4.42 0 0 1-4.27-4.43C4.56 3.99 6.54 2 9 2a4.435 4.435 0 0 1 .16 8.87ZM16.41 4c1.94 0 3.5 1.57 3.5 3.5 0 1.89-1.5 3.43-3.37 3.5a1.13 1.13 0 0 0-.26 0M4.16 14.56c-2.42 1.62-2.42 4.26 0 5.87 2.75 1.84 7.26 1.84 10.01 0 2.42-1.62 2.42-4.26 0-5.87-2.74-1.83-7.25-1.83-10.01 0ZM18.34 20c.72-.15 1.4-.44 1.96-.87 1.56-1.17 1.56-3.1 0-4.27-.55-.42-1.22-.7-1.93-.86"
                                                stroke="#878f9b" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div
                                    class="flex gap-5 items-center product_hover_button_box lg:invisible lg:opacity-0 mt-2 justify-between  ">
                                    <div
                                        class="lg:w-[75%] w-full h-9 bg-[#35b50e] flex justify-center items-center overflow-hidden product_box_button_hover hover:bg-[#2d9c0c] transition-all duration-250 ease-in delay-250ms relative rounded-md">
                                        <span
                                            class=" md:text-[15px] text-[13px] text-[#fff] product_box_button_hover_change_items1 transition-all duration-250 ease-in delay-250ms ">ثبت
                                            نام در دوره</span>
                                        <img src="https://icongr.am/feather/shopping-cart.svg?size=25&color=ffffff"
                                            alt=""
                                            class=" product_box_button_hover_change_items2 invisible opacity-0 flex justify-self-end absolute bottom-[-5] transition-all duration-250 ease-in delay-250ms ">
                                    </div>
                                    <img src="https://elhammat.com/wp-content/uploads/2025/04/Magnifer.svg"
                                        alt="" class="w-5 lg:flex hidden">
                                    <img src="https://icongr.am/entypo/heart-outlined.svg?size=21&color=currentColor"
                                        alt="" class="w-5 lg:flex hidden ">
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
        </div>

        </section>
    </div>
    </div>

    <script src="{{ asset('assets/js/course.js') }}"></script>
@endsection
