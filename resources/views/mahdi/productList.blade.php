<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index product</title>
    <script src="{{asset('assets/js/tailwind.js')}}"></script>


</head>
<style>
     @import url({{asset('assets/css/fontiran.css')}});

        * {
            font-family: IRANSansXFaNum;
        }
    :root{
    --background:#07070B;
    --background-2:#1B1C1E;
    --card:#2F272C;
    --card-2:#443F43;

    --gold:#f18e15;
    --gold-dark:#6A3922;

    --purple:#26275F;
    --magenta:#A02164;

    --text:#E3E1E1;
    --text-secondary:#B8AFAC;
    --text-muted:#8D8786;
    --border:#666162;
    --star:#D7B437;

    
}
    
   .transition_root{
        transition:all 300ms ease-in;
    }
    .gradient_box1{
        background: linear-gradient(275deg,rgba(170, 117, 44, 1) 27%, rgba(224, 180, 73, 1) 90%);

    }
    .gradient_box1_hover_chang:hover{
        background:var(--background);
    }

    .gradient_comment_box{
        background: linear-gradient(305deg,rgba(19, 15, 53, 1) 0%, rgba(7, 7, 11, 1) 16%, rgba(9, 8, 13, 1) 89%, rgba(32, 22, 33, 1) 100%);
    }

    .cheng_text_colot_hover:hover .gradent_text_sub_heder{
        width:100%;

    }

    .rezume_gradient:hover{
        background: linear-gradient(275deg,rgba(170, 117, 44, 1) 27%, rgba(224, 180, 73, 1) 90%);

    }
    .scale:hover{
        transform: scale(1.03);
    }
    .scale:active{
        transform: scale(1.03);
    }
   
</style>
<body class="max-w-[1700px] bg-[var(--background)] mx-auto [&::-webkit-scrollbar]:w-1  [&::-webkit-scrollbar-thumb]:bg-[var(--gold)]  [&::-webkit-scrollbar-thumb]:rounded-full">
    <header>
        <!-- menu -->
        <section class="w-full flex justify-center items-center fixed top-3 right-0 z-2">
            <div class="w-11/12 py-3 flex justify-between bg-[var(--background)] items-center px-3 rounded-2xl">
                <div class="w-1/3 flex justify-start lg:hidden">
                    <!-- hamburger_menu_svg -->
                    <div class="min-w-[68px] flex flex-col gap-1 items-start justify-center cursor-pointer" onclick="hamburger_menu('open')">
                        <span class="w-7 h-1 bg-white rounded-full"></span>
                        <span class="w-7 h-1 bg-white rounded-full"></span>
                        <span class="w-7 h-1 bg-white rounded-full"></span>
                    </div>
                    <!-- hamburger_menu_svg -->
                </div>
                <div class="max-lg:w-1/3 lg:w-1/5 h-full flex lg:items-center justify-center max-lg:justify-center justify-start cursor-pointer">
                    <img src="../img_2/logo.png" alt="" class="object-fit lg:w-10/24 w-6/12 h-full">
                </div>
                <div class="lg:w-9/12 w-1/3 h-8/12 flex lg:justify-between justify-end items-end">
                    <ul class="h-9/12 h-full flex items-center xl:gap-10 lg:gap-6 gap-8 xl:text-md lg:text-sm font-bold max-lg:hidden" >

                        <li>
                            <a href="" class="flex justify-center items-center py-3 relative">
                                <sapn class="transition_root text-nowrap font-bold text-[var(--gold)]">صفحه اصلی</sapn>
                                <div class="w-full absolute bottom-0 right-auto left-auto  oveflow-hidden flex justify-center items-center transition_root">
                                    <div class="w-full h-[2px] bg-[var(--gold)] rounded-full"></div>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="" class="flex gap-1 font-bold justify-center items-center py-3 relative cheng_text_colot_hover text-[var(--text)] servis_pup_up_hover">
                                <span>خدمات</span>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="size-4 fill-[var(--gold)]">
                                        <path d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z"></path>
                                    </svg>
                                </div>
                                <div class="w-0 absolute bottom-0 right-auto left-auto gradent_text_sub_heder oveflow-hidden flex justify-center items-center transition_root">
                                    <div class="w-full h-[2px] bg-white rounded-full"></div>
                                </div>
                            </a>
                            <!-- items_serviss -->
                            <div class="w-full h-dvh fixed top-17 right-0 flex justify-end items-start invisible opacity-0 transition_root servis_pup_up_item">
                                <div class="w-full h-full bg-black/30 absolute top-0 right-0 servis_pup_up_hover_close"></div>
                                <div class="w-66/100 flex justify-start items-start">
                                    <div class="w-100 bg-[var(--background-2)] relative flex flex-col items-start justify-start p-4">

                                        <div class="group  w-11/12 mx-auto py-1.5 flex items-center justify-start gap-4">
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="xl:size-8 size-11 fill-[var(--gold)]">

                                                    <g fill="none" stroke="var(--gold)" stroke-width="10" stroke-linecap="round" stroke-linejoin="round">

                                                        <!-- Outer Card -->
                                                        <rect x="90" y="110" width="332" height="220" rx="10"></rect>

                                                        <!-- Inner Border -->
                                                        <rect x="120" y="140" width="272" height="160" rx="2"></rect>

                                                        <!-- Top Right Circle -->
                                                        <circle cx="340" cy="175" r="18"></circle>

                                                        <!-- Logo -->
                                                        <path d="
                                                        M165 235
                                                        L165 205
                                                        Q165 180 188 180
                                                        L205 180
                                                        Q225 180 225 198
                                                        Q225 214 208 214
                                                        L188 214
                                                        L188 225
                                                        L215 225
                                                        Q235 225 235 245
                                                        L165 245
                                                        Z"></path>

                                                        <!-- Text Line -->
                                                        <line x1="220" y1="225" x2="305" y2="225"></line>

                                                        <!-- Corner Accent -->
                                                        <path d="M375 270 L375 295 L350 295"></path>

                                                    </g>
                                                </svg>
                                            </div>
                                            <span class="text-[15px] md:text-md font-bold text-white group-hover:pr-5 group-hover:text-[var(--gold)] transition_root" >چاپ کارت ویزیت</span>
                                        </div>
                                        <span class="w-full h-[1px] bg-[#292931]"></span>

                                    </div>
                                </div>
                            </div>
                            <!-- items_serviss -->

                        </li>
                        <li>
                            <a href="" class="flex justify-center items-center py-3 relative cheng_text_colot_hover">
                                <sapn class="transition_root text-nowrap font-bold text-[var(--text)]">نمونه کار ها</sapn>
                                <div class="w-0 absolute bottom-0 right-auto left-auto gradent_text_sub_heder oveflow-hidden flex justify-center items-center transition_root">
                                    <div class="w-full h-[2px] bg-white rounded-full"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="" class="flex justify-center items-center py-3 relative cheng_text_colot_hover">
                                <sapn class="transition_root text-nowrap font-bold text-[var(--text)]">قیمت ها</sapn>
                                <div class="w-0 absolute bottom-0 right-auto left-auto gradent_text_sub_heder oveflow-hidden flex justify-center items-center transition_root">
                                    <div class="w-full h-[2px] bg-white rounded-full"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="" class="flex justify-center items-center py-3 relative cheng_text_colot_hover">
                                <sapn class="transition_root text-nowrap font-bold text-[var(--text)]">مقالات</sapn>
                                <div class="w-0 absolute bottom-0 right-auto left-auto gradent_text_sub_heder oveflow-hidden flex justify-center items-center transition_root">
                                    <div class="w-full h-[2px] bg-white rounded-full"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="" class="flex justify-center items-center py-3 relative cheng_text_colot_hover">
                                <sapn class="transition_root text-nowrap font-bold text-[var(--text)]">درباره ما</sapn>
                                <div class="w-0 absolute bottom-0 right-auto left-auto gradent_text_sub_heder oveflow-hidden flex justify-center items-center transition_root">
                                    <div class="w-full h-[2px] bg-white rounded-full"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="" class="flex justify-center items-center py-3 relative cheng_text_colot_hover">
                                <sapn class="transition_root text-nowrap font-bold text-[var(--text)]">تماس با ما</sapn>
                                <div class="w-0 absolute bottom-0 right-auto left-auto gradent_text_sub_heder oveflow-hidden flex justify-center items-center transition_root">
                                    <div class="w-full h-[2px] bg-white rounded-full"></div>
                                </div>
                            </a>
                        </li>

                    </ul>
                    <a href="" class="xl:px-7 sm:px-5 px-3 sm:py-2 py-2 rounded-xl flex gap-2 justify-center items-center gradient_box1">

                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="sm:size-4 size-2 fill-white">
                                <path
                                        d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z" />
                            </svg>
                        </div>
                        <span class="lg:text-md sm:text-sm text-[12px] text-white" >ورود / ثبت نام</span>

                    </a>
                </div>
            </div>

            <!-- !-- hamburger_menu_item -->
            <section class="w-full h-dvh fixed top-0 right-0 z-5 lg:hidden translate-x-full transition_root"
                    id="hamburger_menu_item">
                <div class="w-full h-full bg-black/40 absolute top-0 right-0 invisible opacity-0  transition_root delay-190" onclick="hamburger_menu('close') " id="close_hamburger_document"></div>
                <div class="md:w-6/12 sm:w-7/12 w-11/12 max-h-full min-h-full overflow-y-auto bg-[var(--background-2)] rounded-l-4xl flex flex-col gap-5  justify-between pt-9 relative pb-5 overflow-y-auto [&::-webkit-scrollbar]:w-2  [&::-webkit-scrollbar-thumb]:bg-[var(--gold)]  [&::-webkit-scrollbar-thumb]:rounded-full">
                    <div class="w-full flex flex-col gap-5">
                        <div class="absolute top-9 right-6" onclick="hamburger_menu('close')">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="size-5 fill-[var(--gold)]">
                                <path
                                        d="M378.4 71.4c8.5-10.1 7.2-25.3-2.9-33.8s-25.3-7.2-33.8 2.9L192 218.7 42.4 40.6C33.9 30.4 18.7 29.1 8.6 37.6S-2.9 61.3 5.6 71.4L160.7 256 5.6 440.6c-8.5 10.2-7.2 25.3 2.9 33.8s25.3 7.2 33.8-2.9L192 293.3 341.6 471.4c8.5 10.1 23.7 11.5 33.8 2.9s11.5-23.7 2.9-33.8L223.3 256l155-184.6z">
                                </path>
                            </svg>
                        </div>
                        <div class="w-full flex flex-col gap-3 items-center">
                            <img src="../img_2/logo.png" alt="" class="w-5/12">
                            <h4 class="text-[15px] text-[#868686] font-bold ">چاپخانه آنلاین شاهکار</h4>
                            <span class="w-full h-[1px] bg-[#292931]"></span>
                        </div>

                        <div class="w-11/12 flex flex-col gap-3 items-center pr-5">
                            <div class=" w-11/12 mx-auto py-1.5 flex items-center justify-start md:gap-5 gap-3 px-3">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                        class="size-6 fill-[var(--gold)]">
                                        <path
                                                d="M272.5 5.7c9-7.6 22.1-7.6 31.1 0l264 224c10.1 8.6 11.4 23.7 2.8 33.8s-23.7 11.3-33.8 2.8L512 245.5V432c0 44.2-35.8 80-80 80H144c-44.2 0-80-35.8-80-80V245.5L39.5 266.3c-10.1 8.6-25.3 7.3-33.8-2.8s-7.3-25.3 2.8-33.8l264-224zM288 55.5L112 204.8V432c0 17.7 14.3 32 32 32h48V312c0-22.1 17.9-40 40-40H344c22.1 0 40 17.9 40 40V464h48c17.7 0 32-14.3 32-32V204.8L288 55.5zM240 464h96V320H240V464z" />
                                    </svg>
                                </div>
                                <span class="text-[15px] md:text-lg text-[var(--gold)] font-bold">خانه</span>
                            </div>
                            <span class="w-full h-[1px] bg-[#292931]"></span>
                            <!-- <div class=" w-11/12 mx-auto py-1.5 flex items-center justify-start gap-4 px-3">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="size-6 fill-[var(--gold)]">
                                        <path
                                            d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z" />
                                    </svg>
                                </div>
                                <span class="text-[15px] md:text-lg font-bold text-white group-hover:pr-5 group-hover:text-[var(--gold)] transition_root" >ورود / ثبت
                                    نام</span>
                            </div> -->
                            <div class="group w-11/12 mx-auto py-1.5 flex items-center justify-start gap-4 px-3">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="size-6 fill-[var(--gold)]" stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M12.6 3.6l6.8 6.8a2 2 0 0 1 0 2.8l-7.2 7.2a2 2 0 0 1-2.8 0l-6.8-6.8a2 2 0 0 1-.6-1.4V5.2a1.6 1.6 0 0 1 1.6-1.6h7.6a2 2 0 0 1 1.4.6z"></path>
                                        <circle cx="7.5" cy="8.5" r="1.2" fill="#FF5A5F" stroke="none"></circle>
                                    </svg>
                                </div>
                                <span class="text-[15px] md:text-lg font-bold text-white group-active:pr-5 group-active:text-[var(--gold)] transition_root" >قیمت ها</span>
                            </div>
                            <span class="w-full h-[1px] bg-[#292931]"></span>

                            <div class="group w-11/12 mx-auto py-1.5 flex jsutify-between items-center px-3 pu_up_servis_hamburger_menu">
                                <div class="w-full flex items-center justify-start gap-4">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="size-6 fill-[var(--gold)]"><path d="M176 56V96H336V56c0-4.4-3.6-8-8-8H184c-4.4 0-8 3.6-8 8zM128 96V56c0-30.9 25.1-56 56-56H328c30.9 0 56 25.1 56 56V96h64c35.3 0 64 28.7 64 64V280 416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V280 160c0-35.3 28.7-64 64-64h64zM48 304V416c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V304H320v16c0 17.7-14.3 32-32 32H224c-17.7 0-32-14.3-32-32V304H48zm144-48H320 464V160c0-8.8-7.2-16-16-16H360 152 64c-8.8 0-16 7.2-16 16v96H192z"/></svg>
                                    </div>
                                    <span class="text-[15px] md:text-lg font-bold text-white group-active:pr-5 group-active:text-[var(--gold)] transition_root" >نمونه کارها</span>
                                </div>
                                <div class="transition_root">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="size-4 fill-[var(--gold)]">
                                        <path d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z"></path>
                                    </svg>
                                </div>
                            </div>

                            <!-- rezume_item_hamburger_menu -->
                            <div class="w-full h-0 flex flex-col gap-2 overflow-y-hidden transition_root">
                                <span class="w-full h-[1px] bg-[#292931]"></span>

                                <div class="group w-11/12 mx-auto py-1.5 flex items-center justify-start gap-4 px-3">
                                    <div class="size-6 flex justify-center items-center">
                                        <span class="size-2 rounded-full bg-[var(--gold)]"></span>
                                    </div>
                                    <span class="text-[15px] md:text-lg font-bold text-white group-active:pr-5 group-active:text-[var(--gold)] transition_root" >چاپ کارت ویزیت</span>
                                </div>
                                <div class="group w-11/12 mx-auto py-1.5 flex items-center justify-start gap-4 px-3">
                                    <div class="size-6 flex justify-center items-center">
                                        <span class="size-2 rounded-full bg-[var(--gold)]"></span>
                                    </div>
                                    <span class="text-[15px] md:text-lg font-bold text-white group-active:pr-5 group-active:text-[var(--gold)] transition_root" >چاپ کارت ویزیت</span>
                                </div>
                            </div>
                            <!-- rezume_item_hamburger_menu -->

                            <span class="w-full h-[1px] bg-[#292931]"></span>

                            <div class="group w-11/12 mx-auto py-1.5 flex jsutify-between items-center px-3 pu_up_servis_hamburger_menu">
                                <div class="w-full flex items-center justify-start gap-4">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="size-6 fill-[var(--gold)]">
                                            <path
                                                    d="M258.8 50.7c-1.8-.7-3.8-.7-5.7 0L63.6 122.6 256 198.2l192.4-75.6L258.8 50.7zM48 377.9c0 3.3 2.1 6.3 5.2 7.5L232 453.2V240.4L48 168.1V377.9zm232 75.3l178.8-67.8c3.1-1.2 5.2-4.2 5.2-7.5V168.1L280 240.4V453.2zM236.1 5.9c12.8-4.9 26.9-4.9 39.7 0l200 75.9C497.6 90 512 110.8 512 134.1V377.9c0 23.3-14.4 44.1-36.1 52.4l-200 75.9c-12.8 4.9-26.9 4.9-39.7 0l-200-75.9C14.4 422 0 401.2 0 377.9V134.1C0 110.8 14.4 90 36.1 81.7l200-75.9z" />
                                        </svg>
                                    </div>
                                    <span class="text-[15px] md:text-lg font-bold text-white group-active:pr-5 group-active:text-[var(--gold)] transition_root">خدمات</span>
                                </div>
                                <div class="transition_root">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="size-4 fill-[var(--gold)]">
                                        <path d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z"></path>
                                    </svg>
                                </div>

                            </div>


                            <!-- servis_item_hamburger_menu -->
                            <div class="w-full h-0 flex flex-col gap-2 overflow-y-hidden transition_root">
                                <span class="w-full h-[1px] bg-[#292931]"></span>

                                <div class="group w-11/12 mx-auto py-1.5 flex items-center justify-start gap-4 px-3">
                                    <div class="size-6 flex justify-center items-center">
                                        <span class="size-2 rounded-full bg-[var(--gold)]"></span>
                                    </div>
                                    <span class="text-[15px] md:text-lg font-bold text-white group-active:pr-5 group-active:text-[var(--gold)] transition_root" >چاپ کارت ویزیت</span>
                                </div>
                                <div class="group w-11/12 mx-auto py-1.5 flex items-center justify-start gap-4 px-3">
                                    <div class="size-6 flex justify-center items-center">
                                        <span class="size-2 rounded-full bg-[var(--gold)]"></span>
                                    </div>
                                    <span class="text-[15px] md:text-lg font-bold text-white group-active:pr-5 group-active:text-[var(--gold)] transition_root" >چاپ کارت ویزیت</span>
                                </div>
                            </div>
                            <!-- servis_item_hamburger_menu -->
                            <span class="w-full h-[1px] bg-[#292931]"></span>
                            <div
                                    class="group w-11/12 mx-auto py-1.5 flex items-center justify-start gap-4 px-3">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="size-6 fill-[var(--gold)]">
                                        <path
                                                d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z" />
                                    </svg>
                                </div>
                                <span class="text-[15px] md:text-lg font-bold text-white group-active:pr-5 group-active:text-[var(--gold)] transition_root" >درباره
                                            ما</span>
                            </div>
                            <span class="w-full h-[1px] bg-[#292931]"></span>

                            <div
                                    class="group w-11/12 mx-auto py-1.5 flex items-center justify-start gap-4 px-3">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-6 fill-[var(--gold)]" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                </div>
                                <span class="text-[15px] md:text-lg font-bold text-white group-active:pr-5 group-active:text-[var(--gold)] transition_root" >مقالات</span>
                            </div>
                            <span class="w-full h-[1px] bg-[#292931]"></span>
                            <div class="group w-11/12 mx-auto py-1.5 flex items-center justify-start gap-4 px-3">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="size-6 fill-[var(--gold)]">
                                        <path
                                                d="M375.8 275.2c-16.4-7-35.4-2.4-46.7 11.4l-33.2 40.6c-46-26.7-84.4-65.1-111.1-111.1L225.3 183c13.8-11.3 18.5-30.3 11.4-46.7l-48-112C181.2 6.7 162.3-3.1 143.6 .9l-112 24C13.2 28.8 0 45.1 0 64v0C0 295.2 175.2 485.6 400.1 509.5c9.8 1 19.6 1.8 29.6 2.2c0 0 0 0 0 0c0 0 .1 0 .1 0c6.1 .2 12.1 .4 18.2 .4l0 0c18.9 0 35.2-13.2 39.1-31.6l24-112c4-18.7-5.8-37.6-23.4-45.1l-112-48zM441.5 464C225.8 460.5 51.5 286.2 48.1 70.5l99.2-21.3 43 100.4L154.4 179c-18.2 14.9-22.9 40.8-11.1 61.2c30.9 53.3 75.3 97.7 128.6 128.6c20.4 11.8 46.3 7.1 61.2-11.1l29.4-35.9 100.4 43L441.5 464zM48 64v0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0s0 0 0 0">
                                        </path>
                                    </svg>
                                </div>
                                <span class="text-[15px] md:text-lg font-bold text-white group-active:pr-5 group-active:text-[var(--gold)] transition_root" >تماس با
                                            ما</span>
                            </div>
                        </div>
                    </div>
                    <div class="w-full border-t-1 border-[#292931] flex flex-col items-center justify-between">
                        <div class="w-full py-6 flex items-center justify-center gap-10">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                    class="sm:size-6 size-5 fill-[var(--gold)]">
                                    <path
                                            d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                                </svg>
                            </div>
                            <div>
                                <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"
                                    class="sm:size-6 size-5 fill-[var(--gold)]">
                                    <path
                                            d="M1764 11q33 24 27 64l-256 1536q-5 29-32 45-14 8-31 8-11 0-24-5l-527-215-298 327q-18 21-47 21-14 0-23-4-19-7-30-23.5t-11-36.5v-452l-472-193q-37-14-40-55-3-39 32-59l1664-960q35-21 68 2zm-342 1499l221-1323-1434 827 336 137 863-639-478 797z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                    class="sm:size-6 size-5 fill-[var(--gold)]">
                                    <path
                                            d="M464 258.2c0 2.7-1 5.2-4.2 8c-3.8 3.1-10.1 5.8-17.8 5.8H344c-53 0-96 43-96 96c0 6.8 .7 13.4 2.1 19.8c3.3 15.7 10.2 31.1 14.4 40.6l0 0c.7 1.6 1.4 3 1.9 4.3c5 11.5 5.6 15.4 5.6 17.1c0 5.3-1.9 9.5-3.8 11.8c-.9 1.1-1.6 1.6-2 1.8c-.3 .2-.8 .3-1.6 .4c-2.9 .1-5.7 .2-8.6 .2C141.1 464 48 370.9 48 256S141.1 48 256 48s208 93.1 208 208c0 .7 0 1.4 0 2.2zm48 .5c0-.9 0-1.8 0-2.7C512 114.6 397.4 0 256 0S0 114.6 0 256S114.6 512 256 512c3.5 0 7.1-.1 10.6-.2c31.8-1.3 53.4-30.1 53.4-62c0-14.5-6.1-28.3-12.1-42c-4.3-9.8-8.7-19.7-10.8-29.9c-.7-3.2-1-6.5-1-9.9c0-26.5 21.5-48 48-48h97.9c36.5 0 69.7-24.8 70.1-61.3zM160 256a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm0-64a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm128-64a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm64 64a32 32 0 1 0 0-64 32 32 0 1 0 0 64z" />
                                </svg>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                    class="sm:size-6 size-5 fill-[var(--gold)]">
                                    <path
                                            d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                                    </path>
                                </svg>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!-- hamburger_menu_item -->

        </section>
        <!-- menu -->
    </header>
    <main class="w-full mt-25">
        <!-- index_product_start -->
        <section class="w-full flex justify-center items-start">
            <div class="w-11/12 h-full flex max-lg:flex-col justify-between items-start xl:gap-12 gap-6">
                <!-- filter_index_product -->
                 <div class="lg:w-3/12 w-full pt-1 pb-9 lg:sticky lg:top-25 lg:left-0 lg:max-h-[90vh] lg:overflow-auto lg:[&::-webkit-scrollbar]:w-1  lg:[&::-webkit-scrollbar-thumb]:bg-[var(--gold)]  lg:[&::-webkit-scrollbar-thumb]:rounded-full">
                     <div class=" w-full bg-[var(--background-2)] border border-[var(--gold)] max-sm:hidden rounded-2xl flex flex-col justify-start items-start pb-3 ">
                         <div class="w-full py-2 border-b border-[var(--gold)] flex justify-center items-center">
                             <div class="w-10/12 bg-[var(--background)] border border-[var(--border)] rounded-xl flex gap-3 justify-between items-center shadow_boxs xl:px-6 px-4 xl:py-5 py-4">
                                 <div class="flex xl:gap-4 gap-2 items-center">
                                     <div>
                                         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="xl:size-4 size-3 fill-[var(--text)]">
                                             <path d="M368 208A160 160 0 1 0 48 208a160 160 0 1 0 320 0zM337.1 371.1C301.7 399.2 256.8 416 208 416C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208c0 48.8-16.8 93.7-44.9 129.1L505 471c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L337.1 371.1z"></path>
                                         </svg>
                                     </div>
                                     <input type="text" placeholder="جستحوی مجصول..." class="outline-none xl:text-sm text-xs font-bold text-[var(--text-secondary)]" onclick="search_focus_box('open')">
                                 </div>
                             </div>
                         </div>
                         <form action="" class="w-full h-full  flex flex-col justify-start items-center">
                             <div class="w-full pb-3 flex flex-col gap-2 justify-start items-start  border-b border-[var(--gold)] overflow-y-hidden transition_root cursor-pointer">
                                 <label for="" class="w-full px-4 min-h-12 flex justify-between items-center filter_product_list">
                                     <span class="xl:text-lg text-sm text-[var(--text)]">دسته بندی</span>
                                     <div>
                                         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="xl:size-5 size-3 fill-[var(--gold)]">
                                             <path d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z"></path>
                                         </svg>
                                     </div>
                                 </label>
                                 <div class="w-full h-full flex flex-col gap-4 justify-start items-start px-4 pr-7 max-xl:mt-1">
                                     <div class="w-full max-h-50 overflow-y-auto flex flex-col gap-4 justify-start items-start [&amp;::-webkit-scrollbar]:w-1  [&amp;::-webkit-scrollbar-thumb]:bg-[var(--gold)]  [&amp;::-webkit-scrollbar-thumb]:rounded-full">
                                         <div class="w-full flex justify-start items-center gap-4">
                                             <input id="all" checked type="checkbox" class="appearance-none xl:size-5 size-4 checked:bg-[var(--gold)] bg-[var(--background)] border border-[var(--gold)] checked:bg-[var(--gold)] rounded-sm after:content-['✓'] after:flex after:justify-center after:items-center  after:opacity-0 checked:after:opacity-100 max-xl:after:text-xs after:text-white transition_root">
                                             <label for="all" class="xl:text-sm text-xs font-bold text-[var(--text-secondary)]">همه</label>
                                         </div>
                                         <div class="w-full flex justify-start items-center gap-4">
                                             <input id="kart" type="checkbox" class="appearance-none xl:size-5 size-4 checked:bg-[var(--gold)] bg-[var(--background)] border border-[var(--gold)] checked:bg-[var(--gold)] rounded-sm after:content-['✓'] after:flex after:justify-center after:items-center  after:opacity-0 checked:after:opacity-100 max-xl:after:text-xs after:text-white transition_root">
                                             <label for="kart" class="xl:text-sm text-xs font-bold text-[var(--text-secondary)]">کارت ویزیت</label>
                                         </div>
                                         <div class="w-full flex justify-start items-center gap-4">
                                             <input id="baner" type="checkbox" class="appearance-none xl:size-5 size-4 checked:bg-[var(--gold)] bg-[var(--background)] border border-[var(--gold)] checked:bg-[var(--gold)] rounded-sm after:content-['✓'] after:flex after:justify-center after:items-center  after:opacity-0 checked:after:opacity-100 max-xl:after:text-xs after:text-white transition_root">
                                             <label for="baner" class="xl:text-sm text-xs font-bold text-[var(--text-secondary)]">چاپ بنر</label>
                                         </div>
                                         <div class="w-full flex justify-start items-center gap-4">
                                             <input id="baner" type="checkbox" class="appearance-none xl:size-5 size-4 checked:bg-[var(--gold)] bg-[var(--background)] border border-[var(--gold)] checked:bg-[var(--gold)] rounded-sm after:content-['✓'] after:flex after:justify-center after:items-center  after:opacity-0 checked:after:opacity-100 max-xl:after:text-xs after:text-white transition_root">
                                             <label for="baner" class="xl:text-sm text-xs font-bold text-[var(--text-secondary)]">چاپ بنر</label>
                                         </div>
                                         <div class="w-full flex justify-start items-center gap-4">
                                             <input id="baner" type="checkbox" class="appearance-none xl:size-5 size-4 checked:bg-[var(--gold)] bg-[var(--background)] border border-[var(--gold)] checked:bg-[var(--gold)] rounded-sm after:content-['✓'] after:flex after:justify-center after:items-center  after:opacity-0 checked:after:opacity-100 max-xl:after:text-xs after:text-white transition_root">
                                             <label for="baner" class="xl:text-sm text-xs font-bold text-[var(--text-secondary)]">چاپ بنر</label>
                                         </div>
                                         <div class="w-full flex justify-start items-center gap-4">
                                             <input id="baner" type="checkbox" class="appearance-none xl:size-5 size-4 checked:bg-[var(--gold)] bg-[var(--background)] border border-[var(--gold)] checked:bg-[var(--gold)] rounded-sm after:content-['✓'] after:flex after:justify-center after:items-center  after:opacity-0 checked:after:opacity-100 max-xl:after:text-xs after:text-white transition_root">
                                             <label for="baner" class="xl:text-sm text-xs font-bold text-[var(--text-secondary)]">چاپ بنر</label>
                                         </div>
                                         <div class="w-full flex justify-start items-center gap-4">
                                             <input id="baner" type="checkbox" class="appearance-none xl:size-5 size-4 checked:bg-[var(--gold)] bg-[var(--background)] border border-[var(--gold)] checked:bg-[var(--gold)] rounded-sm after:content-['✓'] after:flex after:justify-center after:items-center  after:opacity-0 checked:after:opacity-100 max-xl:after:text-xs after:text-white transition_root">
                                             <label for="baner" class="xl:text-sm text-xs font-bold text-[var(--text-secondary)]">چاپ بنر</label>
                                         </div>
                                     </div>    
                                 </div>
                             </div>
                             <!-- <span class="w-full h-[1px] bg-[var(--gold)]"></span> -->
                             <div class="w-full h-12 pb-3 flex flex-col justify-start items-start border-b border-[var(--gold)] overflow-y-hidden transition_root cursor-pointer">
                                 <label for="" class="w-full min-h-12 px-4 flex justify-between items-center filter_product_list">
                                     <span class="xl:text-lg text-sm text-[var(--text)] flex justify-center items-center gap-2">رنج قیمت<span class="xl:text-base text-xs text-[var(--text-secondary)]">(تومان)</span></span>
                                     <div>
                                         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="xl:size-5 size-3 fill-[var(--gold)]">
                                             <path d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z"></path>
                                         </svg>
                                     </div>
                                 </label>
                                 <div class="w-full flex flex-col gap-7 justify-start items-center px-4 max-xl:mt-1 py-4">
                                     <div class="w-full flex justify-center items-start">
                                         <input type="range" class="w-11/12 xl:h-2 h-1.5 accent-[var(--gold)] bg-[var(--background-)]" min="0" max="20000" value="20000" dir="ltr">
                                         <input type="range" class="w-11/12 xl:h-2 h-1.5 accent-[var(--gold)] bg-[var(--background-)]" min="0" max="20000" value="20000">
                                     </div> 
                                     <div class="w-full flex justify-between items-start">
                                         <div class="w-1/2 flex justify-start items-center gap-2">
                                             <span class="text-[var(--text-secondary)] max-xl:text-sm">از</span>
                                             <input type="number" class="bg-[var(--backgorund)] border border-[var(--border)] text-[var(--text-secondary)] max-xl:text-sm w-2/3 px-2 py-1 rounded-md" placeholder="0">
                                         </div>
                                         <div class="w-1/2 flex justify-start items-center gap-2">
                                             <span class="text-[var(--text-secondary)] max-xl:text-sm">تا</span>
                                             <input type="number" class="bg-[var(--backgorund)] border border-[var(--border)] text-[var(--text-secondary)] max-xl:text-sm w-full px-2 py-1 rounded-md" placeholder="20,000">
                                         </div>
                                     </div>   
                                 </div>
                             </div>
                             <!-- <span class="w-full h-[1px] bg-[var(--gold)]"></span> -->
                             <div class="w-full h-12 pb-3 flex flex-col justify-start  border-b border-[var(--gold)] items-start overflow-y-hidden transition_root cursor-pointer">
                                 <label for="" class="w-full min-h-12 px-4 flex justify-between items-center filter_product_list">
                                     <span class="xl:text-lg text-sm text-[var(--text)]">رنگ</span>
                                     <div>
                                         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="xl:size-5 size-3 fill-[var(--gold)]">
                                             <path d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z"></path>
                                         </svg>
                                     </div>
                                 </label>
                                 <div class="w-full h-full flex flex-col gap-4 justify-start items-start px-4 pr-7 max-xl:mt-1">
                                     <div class="w-full pb-2 max-h-50 overflow-y-auto flex flex-col gap-4 justify-start items-start [&amp;::-webkit-scrollbar]:w-1  [&amp;::-webkit-scrollbar-thumb]:bg-[var(--gold)]  [&amp;::-webkit-scrollbar-thumb]:rounded-full">
                                         <div class="w-full flex justify-start items-center gap-4">
                                             <input id="all" checked type="checkbox" class="appearance-none xl:size-5 size-4 checked:bg-[var(--gold)] bg-[var(--background)] border border-[var(--gold)] checked:bg-[var(--gold)] rounded-sm after:content-['✓'] after:flex after:justify-center after:items-center  after:opacity-0 checked:after:opacity-100 max-xl:after:text-xs after:text-white transition_root">
                                             <label for="all" class="xl:text-sm text-xs font-bold text-[var(--text-secondary)]">همه</label>
                                         </div>
                                         <div class="w-full flex justify-start items-center gap-4">
                                             <input id="kart" type="checkbox" class="appearance-none xl:size-5 size-4 checked:bg-[var(--gold)] bg-[var(--background)] border border-[var(--gold)] checked:bg-[var(--gold)] rounded-sm after:content-['✓'] after:flex after:justify-center after:items-center  after:opacity-0 checked:after:opacity-100 max-xl:after:text-xs after:text-white transition_root">
                                             <label for="kart" class="xl:text-sm text-xs font-bold text-[var(--text-secondary)]">کارت ویزیت</label>
                                         </div>
                                         <div class="w-full flex justify-start items-center gap-4">
                                             <input id="baner" type="checkbox" class="appearance-none xl:size-5 size-4 checked:bg-[var(--gold)] bg-[var(--background)] border border-[var(--gold)] checked:bg-[var(--gold)] rounded-sm after:content-['✓'] after:flex after:justify-center after:items-center  after:opacity-0 checked:after:opacity-100 max-xl:after:text-xs after:text-white transition_root">
                                             <label for="baner" class="xl:text-sm text-xs font-bold text-[var(--text-secondary)]">چاپ بنر</label>
                                         </div>
                                         
                                     </div>    
                                 </div>
                             </div>
                             <div class="w-full flex flex-col gap-4 justify-start items-center mt-7">
                                 <button class="w-11/12 py-2 gradient_box1 rounded-xl flex gap-2 justify-center items-center">
                                     <div>
                                         <svg version="1.1" class="xl:size-4 size-3 fill-[var(--text)]" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M.75 3a.75.75 0 000 1.5h14.5a.75.75 0 000-1.5H.75zM3 7.75A.75.75 0 013.75 7h8.5a.75.75 0 010 1.5h-8.5A.75.75 0 013 7.75zm3 4a.75.75 0 01.75-.75h2.5a.75.75 0 010 1.5h-2.5a.75.75 0 01-.75-.75z"></path></svg>
                                     </div>
                                     <span class="max-xl:text-sm font-bold text-[var(--text)]">اعمال فیلتر</span>
                                 </button>
                                 <button class="w-11/12 py-2 rounded-xl flex gap-2 justify-center items-center">
                                     <div>
                                         <svg version="1.1" viewBox="0 0 36 36" class="size-4 fill-[var(--gold)]" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" focusable="false" role="img"><path class="clr-i-outline clr-i-outline-path-1" d="M22.4,11.65a1.09,1.09,0,0,0,1.09,1.09H34.43V1.81a1.09,1.09,0,1,0-2.19,0V8.95a16.41,16.41,0,1,0,1.47,15.86,1.12,1.12,0,0,0-2.05-.9,14.18,14.18,0,1,1-1.05-13.36H23.5A1.09,1.09,0,0,0,22.4,11.65Z"></path></svg>
                                     </div>
                                     <span class="xl:text-sm text-xs font-bold text-[var(--text)]">حذف فیلتر ها</span>
                                 </button>
                             </div>
                         </form>
                     </div>
                 </div>
                <!-- filter_index_product -->
                <!-- button_filter_mobile_start -->
                <div class="w-full flex flex-col gap-5 justify-start items-center sm:hidden relative">
                    <button class="w-11/12 py-2 gradient_box1 rounded-xl flex gap-2 justify-center items-center">
                        <div>
                            <svg version="1.1" class="xl:size-4 size-3 fill-[var(--text)]" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M.75 3a.75.75 0 000 1.5h14.5a.75.75 0 000-1.5H.75zM3 7.75A.75.75 0 013.75 7h8.5a.75.75 0 010 1.5h-8.5A.75.75 0 013 7.75zm3 4a.75.75 0 01.75-.75h2.5a.75.75 0 010 1.5h-2.5a.75.75 0 01-.75-.75z"></path></svg>
                        </div>
                        <span class="max-xl:text-sm font-bold text-[var(--text)]" onclick="filter_index_product_pop_up_mobile('open')"> فیلتر</span>
                    </button>
                     <!-- button_sort_product_mobile -->
                    <div class="w-full h-12 relative flex justify-center items-center">
                        <div class="w-11/12 h-12 bg-[var(--background-2)] border border-[var(--border)] flex flex-col  justify-between items-center rounded-xl overflow-y-hidden absolute top-0 left-auto right-auto transition_root z-1">
                            <div class="w-full min-h-12  flex justify-between gap-12 items-center px-4 cursor-pointer" onclick="sort_product(this)">
                                <div class="h-full flex xl:gap-2 gap-1 justify-start items-center">
                                    <span class="max-xl:text-xs max-sm:text-[10px] text-[var(--text)]">مرتب سازی :</span>
                                    <!-- value_item -->
                                    <span class="xl:text-lg text-sm text-[var(--text)]">پر فروش ترین</span>
                                    <!-- value_item -->
                                </div>
                                <div class="transition_root">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="xl:size-5 size-3 fill-[var(--gold)]">
                                        <path d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="w-full min-h-12 flex justify-between items-center px-4 cursor-pointer hover:border hover:border-[var(--gold)] hover:px-6 hover:bg-[var(--background)] active:border active:border-[var(--gold)] active:bg-[var(--background)] active::px-6 transition_root">
                                <div class="w-9/12 h-full flex gap-2 justify-start items-center">
                                    <span class="xl:text-lg text-sm text-[var(--text)]">همه</span>
                                </div>
                            </div>
                            <div class="w-full min-h-12 flex justify-between items-center px-4 cursor-pointer hover:border hover:border-[var(--gold)] hover:px-6 hover:bg-[var(--background)] active:border active:border-[var(--gold)] active:bg-[var(--background)] active::px-6 transition_root">
                                <div class="w-9/12 h-full flex gap-2 justify-start items-center">
                                    <span class="xl:text-lg text-sm text-[var(--text)]">جدید ترین</span>
                                </div>
                            </div>
                            <div class="w-full min-h-12  flex justify-between items-center px-4 cursor-pointer hover:border hover:border-[var(--gold)] hover:px-6 hover:bg-[var(--background)] active:border active:border-[var(--gold)] active:bg-[var(--background)] active::px-6 transition_root">
                                <div class="w-9/12 h-full flex gap-2 justify-start items-center">
                                    <span class="xl:text-lg text-sm text-[var(--text)]">پرفروش ترین</span>
                                </div>
                            </div>
                            <div class="w-full min-h-12  flex justify-between items-center px-4 cursor-pointer hover:border hover:border-[var(--gold)] hover:px-6 hover:bg-[var(--background)] active:border active:border-[var(--gold)] active:bg-[var(--background)] active::px-6 transition_root">
                                <div class="w-9/12 h-full flex gap-2 justify-start items-center">
                                    <span class="xl:text-lg text-sm text-[var(--text)]">محبوب ترین</span>
                                </div>
                            </div>
                        </div>
                    </div>
                     <!-- button_sort_product_mobile -->
                </div>
                <!-- button_filter_mobile_end -->
               
                 <!-- products -->
                <div class="lg:w-9/12 w-full h-full flex flex-col gap-10 justify-start items-center">
                    <div class="w-full flex justify-between max-sm:justify-center items-start relative pt-4">
                        <span class="text-sm text-[var(--text)]">87 محصول</span>
                        <div class="h-12 bg-[var(--background-2)] border border-[var(--border)] flex flex-col gap-2 justify-start items-center rounded-xl overflow-y-hidden absolute top-0 left-0 transition_root max-sm:hidden">
                            <div class="w-full min-h-12  flex justify-between gap-12 items-center px-4 cursor-pointer" onclick="sort_product(this)">
                                <div class="h-full flex xl:gap-2 gap-1 justify-start items-center">
                                    <span class="max-xl:text-xs max-sm:text-[10px] text-[var(--text)]">مرتب سازی :</span>
                                    <!-- value_item -->
                                    <span class="xl:text-lg text-sm text-[var(--text)]">پر فروش ترین</span>
                                    <!-- value_item -->
                                </div>
                                <div class="transition_root">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="xl:size-5 size-3 fill-[var(--gold)]">
                                        <path d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="w-full min-h-12 flex justify-between items-center px-4 cursor-pointer hover:border hover:border-[var(--gold)] hover:px-6 hover:bg-[var(--background)] active:border active:border-[var(--gold)] active:bg-[var(--background)] active::px-6 transition_root">
                                <div class="w-9/12 h-full flex gap-2 justify-start items-center">
                                    <span class="xl:text-lg text-sm text-[var(--text)]">همه</span>
                                </div>
                            </div>
                            <div class="w-full min-h-12 flex justify-between items-center px-4 cursor-pointer hover:border hover:border-[var(--gold)] hover:px-6 hover:bg-[var(--background)] active:border active:border-[var(--gold)] active:bg-[var(--background)] active::px-6 transition_root">
                                <div class="w-9/12 h-full flex gap-2 justify-start items-center">
                                    <span class="xl:text-lg text-sm text-[var(--text)]">جدید ترین</span>
                                </div>
                            </div>
                            <div class="w-full min-h-12  flex justify-between items-center px-4 cursor-pointer hover:border hover:border-[var(--gold)] hover:px-6 hover:bg-[var(--background)] active:border active:border-[var(--gold)] active:bg-[var(--background)] active::px-6 transition_root">
                                <div class="w-9/12 h-full flex gap-2 justify-start items-center">
                                    <span class="xl:text-lg text-sm text-[var(--text)]">پرفروش ترین</span>
                                </div>
                            </div>
                            <div class="w-full min-h-12  flex justify-between items-center px-4 cursor-pointer hover:border hover:border-[var(--gold)] hover:px-6 hover:bg-[var(--background)] active:border active:border-[var(--gold)] active:bg-[var(--background)] active::px-6 transition_root">
                                <div class="w-9/12 h-full flex gap-2 justify-start items-center">
                                    <span class="xl:text-lg text-sm text-[var(--text)]">محبوب ترین</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full grid xl:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-5 justify-start items-start">
                        <div class="w-full sm:h-110 h-40 bg-[var(--background-2)] flex sm:flex-col gap-2 justify-start items-center border border-[var(--gold)] rounded-xl">
                            <div class="w-full max-sm:w-1/2 h-1/2 max-sm:h-full max-sm:order-2">
                                <img src="{{asset('assets/img/kart_rezume.jpg')}}" alt="" class="object-fill w-full h-full">
                            </div>
                            <div class="w-full max-sm:w-1/2 h-1/2 max-sm:h-full flex flex-col justify-start max-sm:justify-center items-center gap-5 max-sm:gap-3 max-sm:order-1">
                                <h5 class="max-sm:text-sm font-bold text-[var(--text)]">چاپ استند و رول آب</h5>
                                <div class="w-full flex flex-col justify-start items-center gap-3 max-sm:gap-1">
                                    <span class="text-sm max-sm:text-xs text-[var(--text-secondary)]">شروع از</span>
                                    <span class="max-sm:text-xs font-bold text-[var(--gold)] text-nowrap">1,300,000 تومان</span>
                                </div>
                                <div class="flex gap-0.5 items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                </div>
                                <a href="#" class="w-9/12 py-1.5 max-sm:py-1 flex gap-4 justify-center items-center rounded-2xl border-2 border-[var(--gold)]">
                                    <span class="xl:text-sm sm:text-sm text-[8px] font-bold text-[var(--text-secondary)]">مشاهده محصول</span>
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="size-3 fill-white rotate-180"><path d="M440.6 273.4c4.7-4.5 7.4-10.8 7.4-17.4s-2.7-12.8-7.4-17.4l-176-168c-9.6-9.2-24.8-8.8-33.9 .8s-8.8 24.8 .8 33.9L364.1 232 24 232c-13.3 0-24 10.7-24 24s10.7 24 24 24l340.1 0L231.4 406.6c-9.6 9.2-9.9 24.3-.8 33.9s24.3 9.9 33.9 .8l176-168z"></path></svg>
                                    </div> 
                                </a>
                            </div>
                        </div>
                        <div class="w-full sm:h-110 h-40 bg-[var(--background-2)] flex sm:flex-col gap-2 justify-start items-center border border-[var(--gold)] rounded-xl">
                            <div class="w-full max-sm:w-1/2 h-1/2 max-sm:h-full max-sm:order-2">
                                <img src="{{asset('assets/img/kart_rezume.jpg')}}" alt="" class="object-fill w-full h-full">
                            </div>
                            <div class="w-full max-sm:w-1/2 h-1/2 max-sm:h-full flex flex-col justify-start max-sm:justify-center items-center gap-5 max-sm:gap-3 max-sm:order-1">
                                <h5 class="max-sm:text-sm font-bold text-[var(--text)]">چاپ استند و رول آب</h5>
                                <div class="w-full flex flex-col justify-start items-center gap-3 max-sm:gap-1">
                                    <span class="text-sm max-sm:text-xs text-[var(--text-secondary)]">شروع از</span>
                                    <span class="max-sm:text-xs font-bold text-[var(--gold)] text-nowrap">1,300,000 تومان</span>
                                </div>
                                <div class="flex gap-0.5 items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                </div>
                                <a href="#" class="w-9/12 py-1.5 max-sm:py-1 flex gap-4 justify-center items-center rounded-2xl border-2 border-[var(--gold)]">
                                    <span class="xl:text-sm sm:text-sm text-[8px] font-bold text-[var(--text-secondary)]">مشاهده محصول</span>
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="size-3 fill-white rotate-180"><path d="M440.6 273.4c4.7-4.5 7.4-10.8 7.4-17.4s-2.7-12.8-7.4-17.4l-176-168c-9.6-9.2-24.8-8.8-33.9 .8s-8.8 24.8 .8 33.9L364.1 232 24 232c-13.3 0-24 10.7-24 24s10.7 24 24 24l340.1 0L231.4 406.6c-9.6 9.2-9.9 24.3-.8 33.9s24.3 9.9 33.9 .8l176-168z"></path></svg>
                                    </div> 
                                </a>
                            </div>
                        </div>
                        <div class="w-full sm:h-110 h-40 bg-[var(--background-2)] flex sm:flex-col gap-2 justify-start items-center border border-[var(--gold)] rounded-xl">
                            <div class="w-full max-sm:w-1/2 h-1/2 max-sm:h-full max-sm:order-2">
                                <img src="{{asset('assets/img/kart_rezume.jpg')}}" alt="" class="object-fill w-full h-full">
                            </div>
                            <div class="w-full max-sm:w-1/2 h-1/2 max-sm:h-full flex flex-col justify-start max-sm:justify-center items-center gap-5 max-sm:gap-3 max-sm:order-1">
                                <h5 class="max-sm:text-sm font-bold text-[var(--text)]">چاپ استند و رول آب</h5>
                                <div class="w-full flex flex-col justify-start items-center gap-3 max-sm:gap-1">
                                    <span class="text-sm max-sm:text-xs text-[var(--text-secondary)]">شروع از</span>
                                    <span class="max-sm:text-xs font-bold text-[var(--gold)] text-nowrap">1,300,000 تومان</span>
                                </div>
                                <div class="flex gap-0.5 items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                </div>
                                <a href="#" class="w-9/12 py-1.5 max-sm:py-1 flex gap-4 justify-center items-center rounded-2xl border-2 border-[var(--gold)]">
                                    <span class="xl:text-sm sm:text-sm text-[8px] font-bold text-[var(--text-secondary)]">مشاهده محصول</span>
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="size-3 fill-white rotate-180"><path d="M440.6 273.4c4.7-4.5 7.4-10.8 7.4-17.4s-2.7-12.8-7.4-17.4l-176-168c-9.6-9.2-24.8-8.8-33.9 .8s-8.8 24.8 .8 33.9L364.1 232 24 232c-13.3 0-24 10.7-24 24s10.7 24 24 24l340.1 0L231.4 406.6c-9.6 9.2-9.9 24.3-.8 33.9s24.3 9.9 33.9 .8l176-168z"></path></svg>
                                    </div> 
                                </a>
                            </div>
                        </div>
                        <div class="w-full sm:h-110 h-40 bg-[var(--background-2)] flex sm:flex-col gap-2 justify-start items-center border border-[var(--gold)] rounded-xl">
                            <div class="w-full max-sm:w-1/2 h-1/2 max-sm:h-full max-sm:order-2">
                                <img src="{{asset('assets/img/kart_rezume.jpg')}}" alt="" class="object-fill w-full h-full">
                            </div>
                            <div class="w-full max-sm:w-1/2 h-1/2 max-sm:h-full flex flex-col justify-start max-sm:justify-center items-center gap-5 max-sm:gap-3 max-sm:order-1">
                                <h5 class="max-sm:text-sm font-bold text-[var(--text)]">چاپ استند و رول آب</h5>
                                <div class="w-full flex flex-col justify-start items-center gap-3 max-sm:gap-1">
                                    <span class="text-sm max-sm:text-xs text-[var(--text-secondary)]">شروع از</span>
                                    <span class="max-sm:text-xs font-bold text-[var(--gold)] text-nowrap">1,300,000 تومان</span>
                                </div>
                                <div class="flex gap-0.5 items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                </div>
                                <a href="#" class="w-9/12 py-1.5 max-sm:py-1 flex gap-4 justify-center items-center rounded-2xl border-2 border-[var(--gold)]">
                                    <span class="xl:text-sm sm:text-sm text-[8px] font-bold text-[var(--text-secondary)]">مشاهده محصول</span>
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="size-3 fill-white rotate-180"><path d="M440.6 273.4c4.7-4.5 7.4-10.8 7.4-17.4s-2.7-12.8-7.4-17.4l-176-168c-9.6-9.2-24.8-8.8-33.9 .8s-8.8 24.8 .8 33.9L364.1 232 24 232c-13.3 0-24 10.7-24 24s10.7 24 24 24l340.1 0L231.4 406.6c-9.6 9.2-9.9 24.3-.8 33.9s24.3 9.9 33.9 .8l176-168z"></path></svg>
                                    </div> 
                                </a>
                            </div>
                        </div>
                        <div class="w-full sm:h-110 h-40 bg-[var(--background-2)] flex sm:flex-col gap-2 justify-start items-center border border-[var(--gold)] rounded-xl">
                            <div class="w-full max-sm:w-1/2 h-1/2 max-sm:h-full max-sm:order-2">
                                <img src="{{asset('assets/img/kart_rezume.jpg')}}" alt="" class="object-fill w-full h-full">
                            </div>
                            <div class="w-full max-sm:w-1/2 h-1/2 max-sm:h-full flex flex-col justify-start max-sm:justify-center items-center gap-5 max-sm:gap-3 max-sm:order-1">
                                <h5 class="max-sm:text-sm font-bold text-[var(--text)]">چاپ استند و رول آب</h5>
                                <div class="w-full flex flex-col justify-start items-center gap-3 max-sm:gap-1">
                                    <span class="text-sm max-sm:text-xs text-[var(--text-secondary)]">شروع از</span>
                                    <span class="max-sm:text-xs font-bold text-[var(--gold)] text-nowrap">1,300,000 تومان</span>
                                </div>
                                <div class="flex gap-0.5 items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                </div>
                                <a href="#" class="w-9/12 py-1.5 max-sm:py-1 flex gap-4 justify-center items-center rounded-2xl border-2 border-[var(--gold)]">
                                    <span class="xl:text-sm sm:text-sm text-[8px] font-bold text-[var(--text-secondary)]">مشاهده محصول</span>
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="size-3 fill-white rotate-180"><path d="M440.6 273.4c4.7-4.5 7.4-10.8 7.4-17.4s-2.7-12.8-7.4-17.4l-176-168c-9.6-9.2-24.8-8.8-33.9 .8s-8.8 24.8 .8 33.9L364.1 232 24 232c-13.3 0-24 10.7-24 24s10.7 24 24 24l340.1 0L231.4 406.6c-9.6 9.2-9.9 24.3-.8 33.9s24.3 9.9 33.9 .8l176-168z"></path></svg>
                                    </div> 
                                </a>
                            </div>
                        </div>
                        <div class="w-full sm:h-110 h-40 bg-[var(--background-2)] flex sm:flex-col gap-2 justify-start items-center border border-[var(--gold)] rounded-xl">
                            <div class="w-full max-sm:w-1/2 h-1/2 max-sm:h-full max-sm:order-2">
                                <img src="{{asset('assets/img/kart_rezume.jpg')}}" alt="" class="object-fill w-full h-full">
                            </div>
                            <div class="w-full max-sm:w-1/2 h-1/2 max-sm:h-full flex flex-col justify-start max-sm:justify-center items-center gap-5 max-sm:gap-3 max-sm:order-1">
                                <h5 class="max-sm:text-sm font-bold text-[var(--text)]">چاپ استند و رول آب</h5>
                                <div class="w-full flex flex-col justify-start items-center gap-3 max-sm:gap-1">
                                    <span class="text-sm max-sm:text-xs text-[var(--text-secondary)]">شروع از</span>
                                    <span class="max-sm:text-xs font-bold text-[var(--gold)] text-nowrap">1,300,000 تومان</span>
                                </div>
                                <div class="flex gap-0.5 items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                </div>
                                <a href="#" class="w-9/12 py-1.5 max-sm:py-1 flex gap-4 justify-center items-center rounded-2xl border-2 border-[var(--gold)]">
                                    <span class="xl:text-sm sm:text-sm text-[8px] font-bold text-[var(--text-secondary)]">مشاهده محصول</span>
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="size-3 fill-white rotate-180"><path d="M440.6 273.4c4.7-4.5 7.4-10.8 7.4-17.4s-2.7-12.8-7.4-17.4l-176-168c-9.6-9.2-24.8-8.8-33.9 .8s-8.8 24.8 .8 33.9L364.1 232 24 232c-13.3 0-24 10.7-24 24s10.7 24 24 24l340.1 0L231.4 406.6c-9.6 9.2-9.9 24.3-.8 33.9s24.3 9.9 33.9 .8l176-168z"></path></svg>
                                    </div> 
                                </a>
                            </div>
                        </div>
                        <div class="w-full sm:h-110 h-40 bg-[var(--background-2)] flex sm:flex-col gap-2 justify-start items-center border border-[var(--gold)] rounded-xl">
                            <div class="w-full max-sm:w-1/2 h-1/2 max-sm:h-full max-sm:order-2">
                                <img src="{{asset('assets/img/kart_rezume.jpg')}}" alt="" class="object-fill w-full h-full">
                            </div>
                            <div class="w-full max-sm:w-1/2 h-1/2 max-sm:h-full flex flex-col justify-start max-sm:justify-center items-center gap-5 max-sm:gap-3 max-sm:order-1">
                                <h5 class="max-sm:text-sm font-bold text-[var(--text)]">چاپ استند و رول آب</h5>
                                <div class="w-full flex flex-col justify-start items-center gap-3 max-sm:gap-1">
                                    <span class="text-sm max-sm:text-xs text-[var(--text-secondary)]">شروع از</span>
                                    <span class="max-sm:text-xs font-bold text-[var(--gold)] text-nowrap">1,300,000 تومان</span>
                                </div>
                                <div class="flex gap-0.5 items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                </div>
                                <a href="#" class="w-9/12 py-1.5 max-sm:py-1 flex gap-4 justify-center items-center rounded-2xl border-2 border-[var(--gold)]">
                                    <span class="xl:text-sm sm:text-sm text-[8px] font-bold text-[var(--text-secondary)]">مشاهده محصول</span>
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="size-3 fill-white rotate-180"><path d="M440.6 273.4c4.7-4.5 7.4-10.8 7.4-17.4s-2.7-12.8-7.4-17.4l-176-168c-9.6-9.2-24.8-8.8-33.9 .8s-8.8 24.8 .8 33.9L364.1 232 24 232c-13.3 0-24 10.7-24 24s10.7 24 24 24l340.1 0L231.4 406.6c-9.6 9.2-9.9 24.3-.8 33.9s24.3 9.9 33.9 .8l176-168z"></path></svg>
                                    </div> 
                                </a>
                            </div>
                        </div>
                        <div class="w-full sm:h-110 h-40 bg-[var(--background-2)] flex sm:flex-col gap-2 justify-start items-center border border-[var(--gold)] rounded-xl">
                            <div class="w-full max-sm:w-1/2 h-1/2 max-sm:h-full max-sm:order-2">
                                <img src="{{asset('assets/img/kart_rezume.jpg')}}" alt="" class="object-fill w-full h-full">
                            </div>
                            <div class="w-full max-sm:w-1/2 h-1/2 max-sm:h-full flex flex-col justify-start max-sm:justify-center items-center gap-5 max-sm:gap-3 max-sm:order-1">
                                <h5 class="max-sm:text-sm font-bold text-[var(--text)]">چاپ استند و رول آب</h5>
                                <div class="w-full flex flex-col justify-start items-center gap-3 max-sm:gap-1">
                                    <span class="text-sm max-sm:text-xs text-[var(--text-secondary)]">شروع از</span>
                                    <span class="max-sm:text-xs font-bold text-[var(--gold)] text-nowrap">1,300,000 تومان</span>
                                </div>
                                <div class="flex gap-0.5 items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                </div>
                                <a href="#" class="w-9/12 py-1.5 max-sm:py-1 flex gap-4 justify-center items-center rounded-2xl border-2 border-[var(--gold)]">
                                    <span class="xl:text-sm sm:text-sm text-[8px] font-bold text-[var(--text-secondary)]">مشاهده محصول</span>
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="size-3 fill-white rotate-180"><path d="M440.6 273.4c4.7-4.5 7.4-10.8 7.4-17.4s-2.7-12.8-7.4-17.4l-176-168c-9.6-9.2-24.8-8.8-33.9 .8s-8.8 24.8 .8 33.9L364.1 232 24 232c-13.3 0-24 10.7-24 24s10.7 24 24 24l340.1 0L231.4 406.6c-9.6 9.2-9.9 24.3-.8 33.9s24.3 9.9 33.9 .8l176-168z"></path></svg>
                                    </div> 
                                </a>
                            </div>
                        </div>
                        <div class="w-full sm:h-110 h-40 bg-[var(--background-2)] flex sm:flex-col gap-2 justify-start items-center border border-[var(--gold)] rounded-xl">
                            <div class="w-full max-sm:w-1/2 h-1/2 max-sm:h-full max-sm:order-2">
                                <img src="{{asset('assets/img/kart_rezume.jpg')}}" alt="" class="object-fill w-full h-full">
                            </div>
                            <div class="w-full max-sm:w-1/2 h-1/2 max-sm:h-full flex flex-col justify-start max-sm:justify-center items-center gap-5 max-sm:gap-3 max-sm:order-1">
                                <h5 class="max-sm:text-sm font-bold text-[var(--text)]">چاپ استند و رول آب</h5>
                                <div class="w-full flex flex-col justify-start items-center gap-3 max-sm:gap-1">
                                    <span class="text-sm max-sm:text-xs text-[var(--text-secondary)]">شروع از</span>
                                    <span class="max-sm:text-xs font-bold text-[var(--gold)] text-nowrap">1,300,000 تومان</span>
                                </div>
                                <div class="flex gap-0.5 items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                </div>
                                <a href="#" class="w-9/12 py-1.5 max-sm:py-1 flex gap-4 justify-center items-center rounded-2xl border-2 border-[var(--gold)]">
                                    <span class="xl:text-sm sm:text-sm text-[8px] font-bold text-[var(--text-secondary)]">مشاهده محصول</span>
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="size-3 fill-white rotate-180"><path d="M440.6 273.4c4.7-4.5 7.4-10.8 7.4-17.4s-2.7-12.8-7.4-17.4l-176-168c-9.6-9.2-24.8-8.8-33.9 .8s-8.8 24.8 .8 33.9L364.1 232 24 232c-13.3 0-24 10.7-24 24s10.7 24 24 24l340.1 0L231.4 406.6c-9.6 9.2-9.9 24.3-.8 33.9s24.3 9.9 33.9 .8l176-168z"></path></svg>
                                    </div> 
                                </a>
                            </div>
                        </div>
                        <div class="w-full sm:h-110 h-40 bg-[var(--background-2)] flex sm:flex-col gap-2 justify-start items-center border border-[var(--gold)] rounded-xl">
                            <div class="w-full max-sm:w-1/2 h-1/2 max-sm:h-full max-sm:order-2">
                                <img src="{{asset('assets/img/kart_rezume.jpg')}}" alt="" class="object-fill w-full h-full">
                            </div>
                            <div class="w-full max-sm:w-1/2 h-1/2 max-sm:h-full flex flex-col justify-start max-sm:justify-center items-center gap-5 max-sm:gap-3 max-sm:order-1">
                                <h5 class="max-sm:text-sm font-bold text-[var(--text)]">چاپ استند و رول آب</h5>
                                <div class="w-full flex flex-col justify-start items-center gap-3 max-sm:gap-1">
                                    <span class="text-sm max-sm:text-xs text-[var(--text-secondary)]">شروع از</span>
                                    <span class="max-sm:text-xs font-bold text-[var(--gold)] text-nowrap">1,300,000 تومان</span>
                                </div>
                                <div class="flex gap-0.5 items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                </div>
                                <a href="#" class="w-9/12 py-1.5 max-sm:py-1 flex gap-4 justify-center items-center rounded-2xl border-2 border-[var(--gold)]">
                                    <span class="xl:text-sm sm:text-sm text-[8px] font-bold text-[var(--text-secondary)]">مشاهده محصول</span>
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="size-3 fill-white rotate-180"><path d="M440.6 273.4c4.7-4.5 7.4-10.8 7.4-17.4s-2.7-12.8-7.4-17.4l-176-168c-9.6-9.2-24.8-8.8-33.9 .8s-8.8 24.8 .8 33.9L364.1 232 24 232c-13.3 0-24 10.7-24 24s10.7 24 24 24l340.1 0L231.4 406.6c-9.6 9.2-9.9 24.3-.8 33.9s24.3 9.9 33.9 .8l176-168z"></path></svg>
                                    </div> 
                                </a>
                            </div>
                        </div>
                        <div class="w-full sm:h-110 h-40 bg-[var(--background-2)] flex sm:flex-col gap-2 justify-start items-center border border-[var(--gold)] rounded-xl">
                            <div class="w-full max-sm:w-1/2 h-1/2 max-sm:h-full max-sm:order-2">
                                <img src="{{asset('assets/img/kart_rezume.jpg')}}" alt="" class="object-fill w-full h-full">
                            </div>
                            <div class="w-full max-sm:w-1/2 h-1/2 max-sm:h-full flex flex-col justify-start max-sm:justify-center items-center gap-5 max-sm:gap-3 max-sm:order-1">
                                <h5 class="max-sm:text-sm font-bold text-[var(--text)]">چاپ استند و رول آب</h5>
                                <div class="w-full flex flex-col justify-start items-center gap-3 max-sm:gap-1">
                                    <span class="text-sm max-sm:text-xs text-[var(--text-secondary)]">شروع از</span>
                                    <span class="max-sm:text-xs font-bold text-[var(--gold)] text-nowrap">1,300,000 تومان</span>
                                </div>
                                <div class="flex gap-0.5 items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                </div>
                                <a href="#" class="w-9/12 py-1.5 max-sm:py-1 flex gap-4 justify-center items-center rounded-2xl border-2 border-[var(--gold)]">
                                    <span class="xl:text-sm sm:text-sm text-[8px] font-bold text-[var(--text-secondary)]">مشاهده محصول</span>
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="size-3 fill-white rotate-180"><path d="M440.6 273.4c4.7-4.5 7.4-10.8 7.4-17.4s-2.7-12.8-7.4-17.4l-176-168c-9.6-9.2-24.8-8.8-33.9 .8s-8.8 24.8 .8 33.9L364.1 232 24 232c-13.3 0-24 10.7-24 24s10.7 24 24 24l340.1 0L231.4 406.6c-9.6 9.2-9.9 24.3-.8 33.9s24.3 9.9 33.9 .8l176-168z"></path></svg>
                                    </div> 
                                </a>
                            </div>
                        </div>
                        <div class="w-full sm:h-110 h-40 bg-[var(--background-2)] flex sm:flex-col gap-2 justify-start items-center border border-[var(--gold)] rounded-xl">
                            <div class="w-full max-sm:w-1/2 h-1/2 max-sm:h-full max-sm:order-2">
                                <img src="{{asset('assets/img/kart_rezume.jpg')}}" alt="" class="object-fill w-full h-full">
                            </div>
                            <div class="w-full max-sm:w-1/2 h-1/2 max-sm:h-full flex flex-col justify-start max-sm:justify-center items-center gap-5 max-sm:gap-3 max-sm:order-1">
                                <h5 class="max-sm:text-sm font-bold text-[var(--text)]">چاپ استند و رول آب</h5>
                                <div class="w-full flex flex-col justify-start items-center gap-3 max-sm:gap-1">
                                    <span class="text-sm max-sm:text-xs text-[var(--text-secondary)]">شروع از</span>
                                    <span class="max-sm:text-xs font-bold text-[var(--gold)] text-nowrap">1,300,000 تومان</span>
                                </div>
                                <div class="flex gap-0.5 items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                </div>
                                <a href="#" class="w-9/12 py-1.5 max-sm:py-1 flex gap-4 justify-center items-center rounded-2xl border-2 border-[var(--gold)]">
                                    <span class="xl:text-sm sm:text-sm text-[8px] font-bold text-[var(--text-secondary)]">مشاهده محصول</span>
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="size-3 fill-white rotate-180"><path d="M440.6 273.4c4.7-4.5 7.4-10.8 7.4-17.4s-2.7-12.8-7.4-17.4l-176-168c-9.6-9.2-24.8-8.8-33.9 .8s-8.8 24.8 .8 33.9L364.1 232 24 232c-13.3 0-24 10.7-24 24s10.7 24 24 24l340.1 0L231.4 406.6c-9.6 9.2-9.9 24.3-.8 33.9s24.3 9.9 33.9 .8l176-168z"></path></svg>
                                    </div> 
                                </a>
                            </div>
                        </div>
                        <div class="w-full sm:h-110 h-40 bg-[var(--background-2)] flex sm:flex-col gap-2 justify-start items-center border border-[var(--gold)] rounded-xl">
                            <div class="w-full max-sm:w-1/2 h-1/2 max-sm:h-full max-sm:order-2">
                                <img src="{{asset('assets/img/kart_rezume.jpg')}}" alt="" class="object-fill w-full h-full">
                            </div>
                            <div class="w-full max-sm:w-1/2 h-1/2 max-sm:h-full flex flex-col justify-start max-sm:justify-center items-center gap-5 max-sm:gap-3 max-sm:order-1">
                                <h5 class="max-sm:text-sm font-bold text-[var(--text)]">چاپ استند و رول آب</h5>
                                <div class="w-full flex flex-col justify-start items-center gap-3 max-sm:gap-1">
                                    <span class="text-sm max-sm:text-xs text-[var(--text-secondary)]">شروع از</span>
                                    <span class="max-sm:text-xs font-bold text-[var(--gold)] text-nowrap">1,300,000 تومان</span>
                                </div>
                                <div class="flex gap-0.5 items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                </div>
                                <a href="#" class="w-9/12 py-1.5 max-sm:py-1 flex gap-4 justify-center items-center rounded-2xl border-2 border-[var(--gold)]">
                                    <span class="xl:text-sm sm:text-sm text-[8px] font-bold text-[var(--text-secondary)]">مشاهده محصول</span>
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="size-3 fill-white rotate-180"><path d="M440.6 273.4c4.7-4.5 7.4-10.8 7.4-17.4s-2.7-12.8-7.4-17.4l-176-168c-9.6-9.2-24.8-8.8-33.9 .8s-8.8 24.8 .8 33.9L364.1 232 24 232c-13.3 0-24 10.7-24 24s10.7 24 24 24l340.1 0L231.4 406.6c-9.6 9.2-9.9 24.3-.8 33.9s24.3 9.9 33.9 .8l176-168z"></path></svg>
                                    </div> 
                                </a>
                            </div>
                        </div>
                        <div class="w-full sm:h-110 h-40 bg-[var(--background-2)] flex sm:flex-col gap-2 justify-start items-center border border-[var(--gold)] rounded-xl">
                            <div class="w-full max-sm:w-1/2 h-1/2 max-sm:h-full max-sm:order-2">
                                <img src="{{asset('assets/img/kart_rezume.jpg')}}" alt="" class="object-fill w-full h-full">
                            </div>
                            <div class="w-full max-sm:w-1/2 h-1/2 max-sm:h-full flex flex-col justify-start max-sm:justify-center items-center gap-5 max-sm:gap-3 max-sm:order-1">
                                <h5 class="max-sm:text-sm font-bold text-[var(--text)]">چاپ استند و رول آب</h5>
                                <div class="w-full flex flex-col justify-start items-center gap-3 max-sm:gap-1">
                                    <span class="text-sm max-sm:text-xs text-[var(--text-secondary)]">شروع از</span>
                                    <span class="max-sm:text-xs font-bold text-[var(--gold)] text-nowrap">1,300,000 تومان</span>
                                </div>
                                <div class="flex gap-0.5 items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                </div>
                                <a href="#" class="w-9/12 py-1.5 max-sm:py-1 flex gap-4 justify-center items-center rounded-2xl border-2 border-[var(--gold)]">
                                    <span class="xl:text-sm sm:text-sm text-[8px] font-bold text-[var(--text-secondary)]">مشاهده محصول</span>
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="size-3 fill-white rotate-180"><path d="M440.6 273.4c4.7-4.5 7.4-10.8 7.4-17.4s-2.7-12.8-7.4-17.4l-176-168c-9.6-9.2-24.8-8.8-33.9 .8s-8.8 24.8 .8 33.9L364.1 232 24 232c-13.3 0-24 10.7-24 24s10.7 24 24 24l340.1 0L231.4 406.6c-9.6 9.2-9.9 24.3-.8 33.9s24.3 9.9 33.9 .8l176-168z"></path></svg>
                                    </div> 
                                </a>
                            </div>
                        </div>
                        <div class="w-full sm:h-110 h-40 bg-[var(--background-2)] flex sm:flex-col gap-2 justify-start items-center border border-[var(--gold)] rounded-xl">
                            <div class="w-full max-sm:w-1/2 h-1/2 max-sm:h-full max-sm:order-2">
                                <img src="{{asset('assets/img/kart_rezume.jpg')}}" alt="" class="object-fill w-full h-full">
                            </div>
                            <div class="w-full max-sm:w-1/2 h-1/2 max-sm:h-full flex flex-col justify-start max-sm:justify-center items-center gap-5 max-sm:gap-3 max-sm:order-1">
                                <h5 class="max-sm:text-sm font-bold text-[var(--text)]">چاپ استند و رول آب</h5>
                                <div class="w-full flex flex-col justify-start items-center gap-3 max-sm:gap-1">
                                    <span class="text-sm max-sm:text-xs text-[var(--text-secondary)]">شروع از</span>
                                    <span class="max-sm:text-xs font-bold text-[var(--gold)] text-nowrap">1,300,000 تومان</span>
                                </div>
                                <div class="flex gap-0.5 items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-4 size-3 fill-[var(--star)]"><defs></defs><path class="fa-secondary" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path><path class="fa-primary" d=""></path></svg>
                                </div>
                                <a href="#" class="w-9/12 py-1.5 max-sm:py-1 flex gap-4 justify-center items-center rounded-2xl border-2 border-[var(--gold)]">
                                    <span class="xl:text-sm sm:text-sm text-[8px] font-bold text-[var(--text-secondary)]">مشاهده محصول</span>
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="size-3 fill-white rotate-180"><path d="M440.6 273.4c4.7-4.5 7.4-10.8 7.4-17.4s-2.7-12.8-7.4-17.4l-176-168c-9.6-9.2-24.8-8.8-33.9 .8s-8.8 24.8 .8 33.9L364.1 232 24 232c-13.3 0-24 10.7-24 24s10.7 24 24 24l340.1 0L231.4 406.6c-9.6 9.2-9.9 24.3-.8 33.9s24.3 9.9 33.9 .8l176-168z"></path></svg>
                                    </div> 
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                 <!-- products -->
            </div>
            <!-- filter_mobild_item_start -->
            <div class="w-full h-dvh overflow-y-auto fixed top-0 z-2 flex justify-center items-start invisible opacity-0 transition_root sm:hidden [&amp;::-webkit-scrollbar]:w-1  [&amp;::-webkit-scrollbar-thumb]:bg-[var(--gold)]  [&amp;::-webkit-scrollbar-thumb]:rounded-full" id="filter_index_product_pop_up_mobile_item">
                <div class="w-full h-full bg-black/50 absolute -z-1" onclick="filter_index_product_pop_up_mobile('close')"></div>
                <div class="lg:w-3/12 w-full bg-[var(--background-2)] border border-[var(--gold)] rounded-2xl flex flex-col justify-start items-center pb-3">
                    <div class="w-full py-2 border-b border-[var(--gold)] flex justify-between items-center px-4">
                        <div onclick="filter_index_product_pop_up_mobile('close')">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="size-5 fill-[var(--gold)]"><path d="M440.6 273.4c4.7-4.5 7.4-10.8 7.4-17.4s-2.7-12.8-7.4-17.4l-176-168c-9.6-9.2-24.8-8.8-33.9 .8s-8.8 24.8 .8 33.9L364.1 232 24 232c-13.3 0-24 10.7-24 24s10.7 24 24 24l340.1 0L231.4 406.6c-9.6 9.2-9.9 24.3-.8 33.9s24.3 9.9 33.9 .8l176-168z"></path></svg>
                        </div>
                        <div class="w-9/12 bg-[var(--background)] border border-[var(--border)] rounded-xl flex gap-3 justify-between items-center shadow_boxs xl:px-6 px-4 xl:py-5 py-4">
                            <div class="flex xl:gap-4 gap-2 items-center">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="xl:size-4 size-3 fill-[var(--text)]">
                                        <path d="M368 208A160 160 0 1 0 48 208a160 160 0 1 0 320 0zM337.1 371.1C301.7 399.2 256.8 416 208 416C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208c0 48.8-16.8 93.7-44.9 129.1L505 471c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L337.1 371.1z"></path>
                                    </svg>
                                </div>
                                <input type="text" placeholder="جستحوی مجصول..." class="outline-none xl:text-sm text-xs font-bold text-[var(--text-secondary)]" onclick="search_focus_box('open')">
                            </div>
                        </div>
                    </div>
                    <form action="" class="w-full h-full  flex flex-col justify-start items-center">
                        <div class="w-full pb-3 flex flex-col gap-2 justify-start items-start  border-b border-[var(--gold)] overflow-y-hidden transition_root cursor-pointer">
                            <label for="" class="w-full px-4 min-h-12 flex justify-between items-center filter_product_list">
                                <span class="xl:text-lg text-sm text-[var(--text)]">دسته بندی</span>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="xl:size-5 size-3 fill-[var(--gold)]">
                                        <path d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z"></path>
                                    </svg>
                                </div>
                            </label>
                            <div class="w-full h-full flex flex-col gap-4 justify-start items-start px-4 pr-7 max-xl:mt-1">
                                <div class="w-full max-h-50 overflow-y-auto flex flex-col gap-4 justify-start items-start [&amp;::-webkit-scrollbar]:w-1  [&amp;::-webkit-scrollbar-thumb]:bg-[var(--gold)]  [&amp;::-webkit-scrollbar-thumb]:rounded-full">
                                    <div class="w-full flex justify-start items-center gap-4">
                                        <input id="all" checked type="checkbox" class="appearance-none xl:size-5 size-4 checked:bg-[var(--gold)] bg-[var(--background)] border border-[var(--gold)] checked:bg-[var(--gold)] rounded-sm after:content-['✓'] after:flex after:justify-center after:items-center  after:opacity-0 checked:after:opacity-100 max-xl:after:text-xs after:text-white transition_root">
                                        <label for="all" class="xl:text-sm text-xs font-bold text-[var(--text-secondary)]">همه</label>
                                    </div>
                                    <div class="w-full flex justify-start items-center gap-4">
                                        <input id="kart" type="checkbox" class="appearance-none xl:size-5 size-4 checked:bg-[var(--gold)] bg-[var(--background)] border border-[var(--gold)] checked:bg-[var(--gold)] rounded-sm after:content-['✓'] after:flex after:justify-center after:items-center  after:opacity-0 checked:after:opacity-100 max-xl:after:text-xs after:text-white transition_root">
                                        <label for="kart" class="xl:text-sm text-xs font-bold text-[var(--text-secondary)]">کارت ویزیت</label>
                                    </div>
                                    <div class="w-full flex justify-start items-center gap-4">
                                        <input id="baner" type="checkbox" class="appearance-none xl:size-5 size-4 checked:bg-[var(--gold)] bg-[var(--background)] border border-[var(--gold)] checked:bg-[var(--gold)] rounded-sm after:content-['✓'] after:flex after:justify-center after:items-center  after:opacity-0 checked:after:opacity-100 max-xl:after:text-xs after:text-white transition_root">
                                        <label for="baner" class="xl:text-sm text-xs font-bold text-[var(--text-secondary)]">چاپ بنر</label>
                                    </div>
                                    <div class="w-full flex justify-start items-center gap-4">
                                        <input id="baner" type="checkbox" class="appearance-none xl:size-5 size-4 checked:bg-[var(--gold)] bg-[var(--background)] border border-[var(--gold)] checked:bg-[var(--gold)] rounded-sm after:content-['✓'] after:flex after:justify-center after:items-center  after:opacity-0 checked:after:opacity-100 max-xl:after:text-xs after:text-white transition_root">
                                        <label for="baner" class="xl:text-sm text-xs font-bold text-[var(--text-secondary)]">چاپ بنر</label>
                                    </div>
                                    <div class="w-full flex justify-start items-center gap-4">
                                        <input id="baner" type="checkbox" class="appearance-none xl:size-5 size-4 checked:bg-[var(--gold)] bg-[var(--background)] border border-[var(--gold)] checked:bg-[var(--gold)] rounded-sm after:content-['✓'] after:flex after:justify-center after:items-center  after:opacity-0 checked:after:opacity-100 max-xl:after:text-xs after:text-white transition_root">
                                        <label for="baner" class="xl:text-sm text-xs font-bold text-[var(--text-secondary)]">چاپ بنر</label>
                                    </div>
                                    <div class="w-full flex justify-start items-center gap-4">
                                        <input id="baner" type="checkbox" class="appearance-none xl:size-5 size-4 checked:bg-[var(--gold)] bg-[var(--background)] border border-[var(--gold)] checked:bg-[var(--gold)] rounded-sm after:content-['✓'] after:flex after:justify-center after:items-center  after:opacity-0 checked:after:opacity-100 max-xl:after:text-xs after:text-white transition_root">
                                        <label for="baner" class="xl:text-sm text-xs font-bold text-[var(--text-secondary)]">چاپ بنر</label>
                                    </div>
                                    <div class="w-full flex justify-start items-center gap-4">
                                        <input id="baner" type="checkbox" class="appearance-none xl:size-5 size-4 checked:bg-[var(--gold)] bg-[var(--background)] border border-[var(--gold)] checked:bg-[var(--gold)] rounded-sm after:content-['✓'] after:flex after:justify-center after:items-center  after:opacity-0 checked:after:opacity-100 max-xl:after:text-xs after:text-white transition_root">
                                        <label for="baner" class="xl:text-sm text-xs font-bold text-[var(--text-secondary)]">چاپ بنر</label>
                                    </div>
                                </div>    
                            </div>
                        </div>
                        <!-- <span class="w-full h-[1px] bg-[var(--gold)]"></span> -->
                        <div class="w-full h-12  pb-3 flex flex-col justify-start items-start border-b border-[var(--gold)] overflow-y-hidden transition_root cursor-pointer">
                            <label for="" class="w-full min-h-12 px-4 flex justify-between items-center filter_product_list">
                                <span class="xl:text-lg text-sm text-[var(--text)] flex justify-center items-center gap-2">رنج قیمت<span class="xl:text-base text-xs text-[var(--text-secondary)]">(تومان)</span></span>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="xl:size-5 size-3 fill-[var(--gold)]">
                                        <path d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z"></path>
                                    </svg>
                                </div>
                            </label>
                            <div class="w-full flex flex-col gap-7 justify-start items-center px-4 max-xl:mt-1">
                                <div class="w-full flex justify-center items-start">
                                    <input type="range" class="w-11/12 xl:h-2 h-1.5 accent-[var(--gold)] bg-[var(--background-)]" min="0" max="20000" value="20000" dir="ltr">
                                    <input type="range" class="w-11/12 xl:h-2 h-1.5 accent-[var(--gold)] bg-[var(--background-)]" min="0" max="20000" value="20000">
                                </div> 
                                <div class="w-full flex justify-between items-start">
                                    <div class="w-1/2 flex justify-start items-center gap-2">
                                        <span class="text-[var(--text-secondary)] max-xl:text-sm">از</span>
                                        <input type="number" class="bg-[var(--backgorund)] border border-[var(--border)] text-[var(--text-secondary)] max-xl:text-sm w-2/3 px-2 py-1 rounded-md" placeholder="0">
                                    </div>
                                    <div class="w-1/2 flex justify-start items-center gap-2">
                                        <span class="text-[var(--text-secondary)] max-xl:text-sm">تا</span>
                                        <input type="number" class="bg-[var(--backgorund)] border border-[var(--border)] text-[var(--text-secondary)] max-xl:text-sm w-full px-2 py-1 rounded-md" placeholder="20,000">
                                    </div>
                                </div>   
                            </div>
                        </div>
                        <!-- <span class="w-full h-[1px] bg-[var(--gold)]"></span> -->
                        <div class="w-full h-12 pb-3 flex flex-col justify-start items-start rounded-xl overflow-y-hidden transition_root cursor-pointer">
                            <label for="" class="w-full min-h-12 px-4 flex justify-between items-center filter_product_list">
                                <span class="xl:text-lg text-sm text-[var(--text)]">رنگ</span>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="xl:size-5 size-3 fill-[var(--gold)]">
                                        <path d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z"></path>
                                    </svg>
                                </div>
                            </label>
                            <div class="w-full h-full flex flex-col gap-4 justify-start items-start px-4 pr-7 max-xl:mt-1">
                                <div class="w-full pb-2 max-h-50 overflow-y-auto flex flex-col gap-4 justify-start items-start [&amp;::-webkit-scrollbar]:w-1  [&amp;::-webkit-scrollbar-thumb]:bg-[var(--gold)]  [&amp;::-webkit-scrollbar-thumb]:rounded-full">
                                    <div class="w-full flex justify-start items-center gap-4">
                                        <input id="all" checked type="checkbox" class="appearance-none xl:size-5 size-4 checked:bg-[var(--gold)] bg-[var(--background)] border border-[var(--gold)] checked:bg-[var(--gold)] rounded-sm after:content-['✓'] after:flex after:justify-center after:items-center  after:opacity-0 checked:after:opacity-100 max-xl:after:text-xs after:text-white transition_root">
                                        <label for="all" class="xl:text-sm text-xs font-bold text-[var(--text-secondary)]">همه</label>
                                    </div>
                                    <div class="w-full flex justify-start items-center gap-4">
                                        <input id="kart" type="checkbox" class="appearance-none xl:size-5 size-4 checked:bg-[var(--gold)] bg-[var(--background)] border border-[var(--gold)] checked:bg-[var(--gold)] rounded-sm after:content-['✓'] after:flex after:justify-center after:items-center  after:opacity-0 checked:after:opacity-100 max-xl:after:text-xs after:text-white transition_root">
                                        <label for="kart" class="xl:text-sm text-xs font-bold text-[var(--text-secondary)]">کارت ویزیت</label>
                                    </div>
                                    <div class="w-full flex justify-start items-center gap-4">
                                        <input id="baner" type="checkbox" class="appearance-none xl:size-5 size-4 checked:bg-[var(--gold)] bg-[var(--background)] border border-[var(--gold)] checked:bg-[var(--gold)] rounded-sm after:content-['✓'] after:flex after:justify-center after:items-center  after:opacity-0 checked:after:opacity-100 max-xl:after:text-xs after:text-white transition_root">
                                        <label for="baner" class="xl:text-sm text-xs font-bold text-[var(--text-secondary)]">چاپ بنر</label>
                                    </div>
                                    
                                </div>    
                            </div>
                        </div>
                        <div class="w-full flex flex-col gap-4 justify-start items-center mt-4">
                            <button class="w-11/12 py-2 gradient_box1 rounded-xl flex gap-2 justify-center items-center">
                                <div>
                                    <svg version="1.1" class="xl:size-4 size-3 fill-[var(--text)]" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M.75 3a.75.75 0 000 1.5h14.5a.75.75 0 000-1.5H.75zM3 7.75A.75.75 0 013.75 7h8.5a.75.75 0 010 1.5h-8.5A.75.75 0 013 7.75zm3 4a.75.75 0 01.75-.75h2.5a.75.75 0 010 1.5h-2.5a.75.75 0 01-.75-.75z"></path></svg>
                                </div>
                                <span class="max-xl:text-sm font-bold text-[var(--text)]">اعمال فیلتر</span>
                            </button>
                            <button class="w-11/12 py-2 rounded-xl flex gap-2 justify-center items-center">
                                <div>
                                    <svg version="1.1" viewBox="0 0 36 36" class="size-4 fill-[var(--gold)]" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" focusable="false" role="img"><path class="clr-i-outline clr-i-outline-path-1" d="M22.4,11.65a1.09,1.09,0,0,0,1.09,1.09H34.43V1.81a1.09,1.09,0,1,0-2.19,0V8.95a16.41,16.41,0,1,0,1.47,15.86,1.12,1.12,0,0,0-2.05-.9,14.18,14.18,0,1,1-1.05-13.36H23.5A1.09,1.09,0,0,0,22.4,11.65Z"></path></svg>
                                </div>
                                <span class="xl:text-sm text-xs font-bold text-[var(--text)]">حذف فیلتر ها</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- filter_mobild_item_end -->
        </section>
        <!-- index_product_end -->
    </main>



    <script>
         let filter_product_list=document.querySelectorAll('.filter_product_list')
        filter_product_list.forEach((item)=>{
            item.addEventListener('click' , function(){    
                item.parentElement.classList.toggle('h-12')
                item.parentElement.classList.toggle('max-h-80')
                item.children[1].classList.toggle('rotate-180')

            })
        })

        let filter_index_product_pop_up_mobile_item=document.getElementById('filter_index_product_pop_up_mobile_item')
        function filter_index_product_pop_up_mobile(item){
            if(item=='open'){
                filter_index_product_pop_up_mobile_item.classList.remove('invisible')
                filter_index_product_pop_up_mobile_item.classList.remove('opacity-0')
            }
            if(item=='close'){
                filter_index_product_pop_up_mobile_item.classList.add('invisible')
                filter_index_product_pop_up_mobile_item.classList.add('opacity-0')
            }
        }

        function sort_product(item){
            item.parentElement.classList.toggle('h-12')
            item.parentElement.classList.toggle('h-71')
            item.children[1].classList.toggle('rotate-180')

        }
    </script>
</body>
</html>