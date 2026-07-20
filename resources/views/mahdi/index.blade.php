<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="{{ asset('assets/js/tailwind.js') }}"></script>
</head>
<style>
    @import url({{ asset('assets/css/fontiran.css') }});

    * {
        font-family: IRANSansXFaNum;
    }

    :root {
        --background: #07070B;
        --background-2: #1B1C1E;
        --card: #2F272C;
        --card-2: #443F43;

        --gold: #f18e15;
        --gold-dark: #6A3922;

        --purple: #26275F;
        --magenta: #A02164;

        --text: #E3E1E1;
        --text-secondary: #B8AFAC;
        --text-muted: #8D8786;
        --border: #666162;
        --star: #D7B437;
    }

    .transition_root {
        transition: all 300ms ease-in;
    }

    .gradient_box1 {
        background: linear-gradient(275deg, rgba(170, 117, 44, 1) 27%, rgba(224, 180, 73, 1) 90%);

    }

    .gradient_box1_hover_chang:hover {
        background: var(--background);
    }

    .gradient_comment_box {
        background: linear-gradient(305deg, rgba(19, 15, 53, 1) 0%, rgba(7, 7, 11, 1) 16%, rgba(9, 8, 13, 1) 89%, rgba(32, 22, 33, 1) 100%);
    }

    .cheng_text_colot_hover:hover .gradent_text_sub_heder {
        width: 100%;

    }

    .rezume_gradient:hover {
        background: linear-gradient(275deg, rgba(170, 117, 44, 1) 27%, rgba(224, 180, 73, 1) 90%);

    }

    .scale:hover {
        transform: scale(1.03);
    }

    .scale:active {
        transform: scale(1.03);
    }

    /* .servis_pup_up_hover:hover :nth-child(3){
        display:block;
    } */

    .animation_play_vidio {

        border: 1px dashed red;
        animation: animation_play_vidio infinite 1.3s linear;

    }

    @keyframes animation_play_vidio {
        0% {
            box-shadow: 0px 0px 1px 1px #ff8c00;
            /* box-shadow; */
        }

        25% {
            box-shadow: 0px 0px 2px 2px #f18a0c;

        }

        50% {
            box-shadow: 0px 0px 3px 3px #ed8c17;

        }

        75% {
            box-shadow: 0px 0px 4px 4px #f4992a;

        }

        100% {
            box-shadow: 0px 0px 5px 5px #ed9a35;

        }


    }
</style>

<body class="max-w-[1700px] bg-[var(--background)] mx-auto">
    <header class="w-full lg:h-dvh flex flex-col items-cener">
        <!-- menu -->
        <section class="w-full flex justify-center items-center fixed top-3 right-0 z-2">
            <div class="w-11/12 py-3 flex justify-between bg-[var(--background)] items-center px-3 rounded-2xl">
                <div class="w-1/3 flex justify-start lg:hidden">
                    <!-- hamburger_menu_svg -->
                    <div class="min-w-[68px] flex flex-col gap-1 items-start justify-center cursor-pointer"
                        onclick="hamburger_menu('open')">
                        <span class="w-7 h-1 bg-white rounded-full"></span>
                        <span class="w-7 h-1 bg-white rounded-full"></span>
                        <span class="w-7 h-1 bg-white rounded-full"></span>
                    </div>
                    <!-- hamburger_menu_svg -->
                </div>
                <div
                    class="max-lg:w-1/3 lg:w-1/5 h-full flex lg:items-center justify-center max-lg:justify-center justify-start cursor-pointer">
                    <img src="{{ asset('assets/img/logo.png') }}" alt=""
                        class="object-fit lg:w-10/24 w-6/12 h-full">
                </div>
                <div class="lg:w-9/12 w-1/3 h-8/12 flex lg:justify-between justify-end items-end">
                    <ul
                        class="h-9/12 h-full flex items-center xl:gap-10 lg:gap-6 gap-8 xl:text-md lg:text-sm font-bold max-lg:hidden">

                        <li>
                            <a href="" class="flex justify-center items-center py-3 relative">
                                <sapn class="transition_root text-nowrap font-bold text-[var(--gold)]">صفحه اصلی</sapn>
                                <div
                                    class="w-full absolute bottom-0 right-auto left-auto  oveflow-hidden flex justify-center items-center transition_root">
                                    <div class="w-full h-[2px] bg-[var(--gold)] rounded-full"></div>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href=""
                                class="flex gap-1 font-bold justify-center items-center py-3 relative cheng_text_colot_hover text-[var(--text)] servis_pup_up_hover">
                                <span>خدمات</span>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                        class="size-4 fill-[var(--gold)]">
                                        <path
                                            d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z">
                                        </path>
                                    </svg>
                                </div>
                                <div
                                    class="w-0 absolute bottom-0 right-auto left-auto gradent_text_sub_heder oveflow-hidden flex justify-center items-center transition_root">
                                    <div class="w-full h-[2px] bg-white rounded-full"></div>
                                </div>
                            </a>
                            <!-- items_serviss -->
                            <div
                                class="w-full h-dvh fixed top-17 right-0 flex justify-end items-start invisible opacity-0 transition_root servis_pup_up_item">
                                <div class="w-full h-full bg-black/30 absolute top-0 right-0 servis_pup_up_hover_close">
                                </div>
                                <div class="w-66/100 flex justify-start items-start">
                                    <div
                                        class="w-100 bg-[var(--background-2)] relative flex flex-col items-start justify-start p-4">

                                        <div
                                            class="group  w-11/12 mx-auto py-1.5 flex items-center justify-start gap-4">
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                    class="xl:size-8 size-11 fill-[var(--gold)]">

                                                    <g fill="none" stroke="var(--gold)" stroke-width="10"
                                                        stroke-linecap="round" stroke-linejoin="round">

                                                        <!-- Outer Card -->
                                                        <rect x="90" y="110" width="332" height="220"
                                                            rx="10"></rect>

                                                        <!-- Inner Border -->
                                                        <rect x="120" y="140" width="272" height="160"
                                                            rx="2"></rect>

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
                                                        <line x1="220" y1="225" x2="305"
                                                            y2="225"></line>

                                                        <!-- Corner Accent -->
                                                        <path d="M375 270 L375 295 L350 295"></path>

                                                    </g>
                                                </svg>
                                            </div>
                                            <span
                                                class="text-[15px] md:text-md font-bold text-white group-hover:pr-5 group-hover:text-[var(--gold)] transition_root">چاپ
                                                کارت ویزیت</span>
                                        </div>
                                        <span class="w-full h-[1px] bg-[#292931]"></span>

                                    </div>
                                </div>
                            </div>
                            <!-- items_serviss -->

                        </li>
                        <li>
                            <a href=""
                                class="flex justify-center items-center py-3 relative cheng_text_colot_hover">
                                <sapn class="transition_root text-nowrap font-bold text-[var(--text)]">نمونه کار ها
                                </sapn>
                                <div
                                    class="w-0 absolute bottom-0 right-auto left-auto gradent_text_sub_heder oveflow-hidden flex justify-center items-center transition_root">
                                    <div class="w-full h-[2px] bg-white rounded-full"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=""
                                class="flex justify-center items-center py-3 relative cheng_text_colot_hover">
                                <sapn class="transition_root text-nowrap font-bold text-[var(--text)]">قیمت ها</sapn>
                                <div
                                    class="w-0 absolute bottom-0 right-auto left-auto gradent_text_sub_heder oveflow-hidden flex justify-center items-center transition_root">
                                    <div class="w-full h-[2px] bg-white rounded-full"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=""
                                class="flex justify-center items-center py-3 relative cheng_text_colot_hover">
                                <sapn class="transition_root text-nowrap font-bold text-[var(--text)]">مقالات</sapn>
                                <div
                                    class="w-0 absolute bottom-0 right-auto left-auto gradent_text_sub_heder oveflow-hidden flex justify-center items-center transition_root">
                                    <div class="w-full h-[2px] bg-white rounded-full"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=""
                                class="flex justify-center items-center py-3 relative cheng_text_colot_hover">
                                <sapn class="transition_root text-nowrap font-bold text-[var(--text)]">درباره ما</sapn>
                                <div
                                    class="w-0 absolute bottom-0 right-auto left-auto gradent_text_sub_heder oveflow-hidden flex justify-center items-center transition_root">
                                    <div class="w-full h-[2px] bg-white rounded-full"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=""
                                class="flex justify-center items-center py-3 relative cheng_text_colot_hover">
                                <sapn class="transition_root text-nowrap font-bold text-[var(--text)]">تماس با ما</sapn>
                                <div
                                    class="w-0 absolute bottom-0 right-auto left-auto gradent_text_sub_heder oveflow-hidden flex justify-center items-center transition_root">
                                    <div class="w-full h-[2px] bg-white rounded-full"></div>
                                </div>
                            </a>
                        </li>

                    </ul>
                    <a href=""
                        class="xl:px-7 sm:px-5 px-3 sm:py-2 py-2 rounded-xl flex gap-2 justify-center items-center gradient_box1">

                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                class="sm:size-4 size-2 fill-white">
                                <path
                                    d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z" />
                            </svg>
                        </div>
                        <span class="lg:text-md sm:text-sm text-[12px] text-white">ورود / ثبت نام</span>

                    </a>
                </div>
            </div>

            <!-- !-- hamburger_menu_item -->
            <section class="w-full h-dvh fixed top-0 right-0 z-5 lg:hidden translate-x-full transition_root"
                id="hamburger_menu_item">
                <div class="w-full h-full bg-black/40 absolute top-0 right-0 invisible opacity-0  transition_root delay-190"
                    onclick="hamburger_menu('close') " id="close_hamburger_document"></div>
                <div
                    class="md:w-6/12 sm:w-7/12 w-11/12 max-h-full min-h-full overflow-y-auto bg-[var(--background-2)] rounded-l-4xl flex flex-col gap-5  justify-between pt-9 relative pb-5 overflow-y-auto [&::-webkit-scrollbar]:w-2  [&::-webkit-scrollbar-thumb]:bg-[var(--gold)]  [&::-webkit-scrollbar-thumb]:rounded-full">
                    <div class="w-full flex flex-col gap-5">
                        <div class="absolute top-9 right-6" onclick="hamburger_menu('close')">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"
                                class="size-5 fill-[var(--gold)]">
                                <path
                                    d="M378.4 71.4c8.5-10.1 7.2-25.3-2.9-33.8s-25.3-7.2-33.8 2.9L192 218.7 42.4 40.6C33.9 30.4 18.7 29.1 8.6 37.6S-2.9 61.3 5.6 71.4L160.7 256 5.6 440.6c-8.5 10.2-7.2 25.3 2.9 33.8s25.3 7.2 33.8-2.9L192 293.3 341.6 471.4c8.5 10.1 23.7 11.5 33.8 2.9s11.5-23.7 2.9-33.8L223.3 256l155-184.6z">
                                </path>
                            </svg>
                        </div>
                        <div class="w-full flex flex-col gap-3 items-center">
                            <img src="{{ asset('assets/img/logo.png') }}" alt="" class="w-5/12">
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
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        class="size-6 fill-[var(--gold)]" stroke="#000" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path
                                            d="M12.6 3.6l6.8 6.8a2 2 0 0 1 0 2.8l-7.2 7.2a2 2 0 0 1-2.8 0l-6.8-6.8a2 2 0 0 1-.6-1.4V5.2a1.6 1.6 0 0 1 1.6-1.6h7.6a2 2 0 0 1 1.4.6z">
                                        </path>
                                        <circle cx="7.5" cy="8.5" r="1.2" fill="#FF5A5F" stroke="none">
                                        </circle>
                                    </svg>
                                </div>
                                <span
                                    class="text-[15px] md:text-lg font-bold text-white group-active:pr-5 group-active:text-[var(--gold)] transition_root">قیمت
                                    ها</span>
                            </div>
                            <span class="w-full h-[1px] bg-[#292931]"></span>

                            <div
                                class="group w-11/12 mx-auto py-1.5 flex jsutify-between items-center px-3 pu_up_servis_hamburger_menu">
                                <div class="w-full flex items-center justify-start gap-4">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                            class="size-6 fill-[var(--gold)]">
                                            <path
                                                d="M176 56V96H336V56c0-4.4-3.6-8-8-8H184c-4.4 0-8 3.6-8 8zM128 96V56c0-30.9 25.1-56 56-56H328c30.9 0 56 25.1 56 56V96h64c35.3 0 64 28.7 64 64V280 416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V280 160c0-35.3 28.7-64 64-64h64zM48 304V416c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V304H320v16c0 17.7-14.3 32-32 32H224c-17.7 0-32-14.3-32-32V304H48zm144-48H320 464V160c0-8.8-7.2-16-16-16H360 152 64c-8.8 0-16 7.2-16 16v96H192z" />
                                        </svg>
                                    </div>
                                    <span
                                        class="text-[15px] md:text-lg font-bold text-white group-active:pr-5 group-active:text-[var(--gold)] transition_root">نمونه
                                        کارها</span>
                                </div>
                                <div class="transition_root">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                        class="size-4 fill-[var(--gold)]">
                                        <path
                                            d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z">
                                        </path>
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
                                    <span
                                        class="text-[15px] md:text-lg font-bold text-white group-active:pr-5 group-active:text-[var(--gold)] transition_root">چاپ
                                        کارت ویزیت</span>
                                </div>
                                <div class="group w-11/12 mx-auto py-1.5 flex items-center justify-start gap-4 px-3">
                                    <div class="size-6 flex justify-center items-center">
                                        <span class="size-2 rounded-full bg-[var(--gold)]"></span>
                                    </div>
                                    <span
                                        class="text-[15px] md:text-lg font-bold text-white group-active:pr-5 group-active:text-[var(--gold)] transition_root">چاپ
                                        کارت ویزیت</span>
                                </div>
                            </div>
                            <!-- rezume_item_hamburger_menu -->

                            <span class="w-full h-[1px] bg-[#292931]"></span>

                            <div
                                class="group w-11/12 mx-auto py-1.5 flex jsutify-between items-center px-3 pu_up_servis_hamburger_menu">
                                <div class="w-full flex items-center justify-start gap-4">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                            class="size-6 fill-[var(--gold)]">
                                            <path
                                                d="M258.8 50.7c-1.8-.7-3.8-.7-5.7 0L63.6 122.6 256 198.2l192.4-75.6L258.8 50.7zM48 377.9c0 3.3 2.1 6.3 5.2 7.5L232 453.2V240.4L48 168.1V377.9zm232 75.3l178.8-67.8c3.1-1.2 5.2-4.2 5.2-7.5V168.1L280 240.4V453.2zM236.1 5.9c12.8-4.9 26.9-4.9 39.7 0l200 75.9C497.6 90 512 110.8 512 134.1V377.9c0 23.3-14.4 44.1-36.1 52.4l-200 75.9c-12.8 4.9-26.9 4.9-39.7 0l-200-75.9C14.4 422 0 401.2 0 377.9V134.1C0 110.8 14.4 90 36.1 81.7l200-75.9z" />
                                        </svg>
                                    </div>
                                    <span
                                        class="text-[15px] md:text-lg font-bold text-white group-active:pr-5 group-active:text-[var(--gold)] transition_root">خدمات</span>
                                </div>
                                <div class="transition_root">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                        class="size-4 fill-[var(--gold)]">
                                        <path
                                            d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z">
                                        </path>
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
                                    <span
                                        class="text-[15px] md:text-lg font-bold text-white group-active:pr-5 group-active:text-[var(--gold)] transition_root">چاپ
                                        کارت ویزیت</span>
                                </div>
                                <div class="group w-11/12 mx-auto py-1.5 flex items-center justify-start gap-4 px-3">
                                    <div class="size-6 flex justify-center items-center">
                                        <span class="size-2 rounded-full bg-[var(--gold)]"></span>
                                    </div>
                                    <span
                                        class="text-[15px] md:text-lg font-bold text-white group-active:pr-5 group-active:text-[var(--gold)] transition_root">چاپ
                                        کارت ویزیت</span>
                                </div>
                            </div>
                            <!-- servis_item_hamburger_menu -->
                            <span class="w-full h-[1px] bg-[#292931]"></span>
                            <div class="group w-11/12 mx-auto py-1.5 flex items-center justify-start gap-4 px-3">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                        class="size-6 fill-[var(--gold)]">
                                        <path
                                            d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z" />
                                    </svg>
                                </div>
                                <span
                                    class="text-[15px] md:text-lg font-bold text-white group-active:pr-5 group-active:text-[var(--gold)] transition_root">درباره
                                    ما</span>
                            </div>
                            <span class="w-full h-[1px] bg-[#292931]"></span>

                            <div class="group w-11/12 mx-auto py-1.5 flex items-center justify-start gap-4 px-3">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-6 fill-[var(--gold)]"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-file-text">
                                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                        <polyline points="14 2 14 8 20 8"></polyline>
                                        <line x1="16" y1="13" x2="8" y2="13"></line>
                                        <line x1="16" y1="17" x2="8" y2="17"></line>
                                        <polyline points="10 9 9 9 8 9"></polyline>
                                    </svg>
                                </div>
                                <span
                                    class="text-[15px] md:text-lg font-bold text-white group-active:pr-5 group-active:text-[var(--gold)] transition_root">مقالات</span>
                            </div>
                            <span class="w-full h-[1px] bg-[#292931]"></span>
                            <div class="group w-11/12 mx-auto py-1.5 flex items-center justify-start gap-4 px-3">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                        class="size-6 fill-[var(--gold)]">
                                        <path
                                            d="M375.8 275.2c-16.4-7-35.4-2.4-46.7 11.4l-33.2 40.6c-46-26.7-84.4-65.1-111.1-111.1L225.3 183c13.8-11.3 18.5-30.3 11.4-46.7l-48-112C181.2 6.7 162.3-3.1 143.6 .9l-112 24C13.2 28.8 0 45.1 0 64v0C0 295.2 175.2 485.6 400.1 509.5c9.8 1 19.6 1.8 29.6 2.2c0 0 0 0 0 0c0 0 .1 0 .1 0c6.1 .2 12.1 .4 18.2 .4l0 0c18.9 0 35.2-13.2 39.1-31.6l24-112c4-18.7-5.8-37.6-23.4-45.1l-112-48zM441.5 464C225.8 460.5 51.5 286.2 48.1 70.5l99.2-21.3 43 100.4L154.4 179c-18.2 14.9-22.9 40.8-11.1 61.2c30.9 53.3 75.3 97.7 128.6 128.6c20.4 11.8 46.3 7.1 61.2-11.1l29.4-35.9 100.4 43L441.5 464zM48 64v0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0s0 0 0 0">
                                        </path>
                                    </svg>
                                </div>
                                <span
                                    class="text-[15px] md:text-lg font-bold text-white group-active:pr-5 group-active:text-[var(--gold)] transition_root">تماس
                                    با
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

        <!-- sub_heder_start -->
        <section
            class="w-full xl:h-10/12 lg:h-full flex flex-col gap-2 items-center lg:items-start justify-between xl:mt-25  mt-23 relative">
            <div class="w-full h-full relative flex flex-col gap-3 justify-center items-center">
                <img src="{{ asset('assets/img/background_sub_heder.jpg') }}" alt=""
                    class="bg-center min-w-full lg:max-h-full lg:min-h-full max-lg:hidden">
                <img src="{{ asset('assets/img/background_sub_heder_mobile.jpg') }}" alt=""
                    class="w-full lg:hidden max-lg:order-1">

                {{-- item --}}
                <div
                    class="lg:w-23/24 w-11/12 lg:h-full max-lg:py-1.5 flex flex-col items-end justify-center py-5 lg:absolute lg:top-0 lg:right-0  max-lg:order-2 max-lg:mx-auto">
                    <div class="lg:w-4/12 w-full h-2/3 flex flex-col gap-7 justify-center items-center">
                        <div
                            class="xl:text-5xl sm:text-4xl text-4xl text-white font-bold flex flex-col sm:gap-8 gap-4 justify-center items-center">
                            <h2>چاپ حرفه‌ای</h2>
                            <h2>برای <span class="text-[var(--gold)]">برندهای</span> خاص</h2>
                        </div>
                        <div
                            class="xl:text-lg lg:text-xs sm:text-lg text-sm text-[var(--text-secondary)] flex flex-col justify-center items-center">
                            <p>ز کارت ویزیت تا بیلبوردهای شهری،</p>
                            <p>با جدیدترین تکنولوژی روز دنیا، کیفیتی بی‌رقیب را تجربه کنید.</p>
                        </div>
                        <!-- bottoms -->
                        <div
                            class="lg:w-full sm:w-9/12 w-full flex max-sm:flex-col gap-5 items-center justify-end py-5 ">
                            <a href="#"
                                class="sm:w-1/2 w-full py-3 flex gap-3 justify-center items-center rounded-2xl gradient_box1 gradient_box1_hover_chang border-2 border-[var(--gold)] transition_root">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                        class="xl:size-5 size-4" fill="white">
                                        <path
                                            d="M16 0H0V32H16 67.2l77.2 339.5 2.8 12.5H160 496h16V352H496 172.8l-14.5-64H496L566 64l10-32H542.5 100L95.6 12.5 92.8 0H80 16zm91.3 64H532.5l-60 192H151L107.3 64zM184 432a24 24 0 1 1 0 48 24 24 0 1 1 0-48zm0 80a56 56 0 1 0 0-112 56 56 0 1 0 0 112zm248-56a24 24 0 1 1 48 0 24 24 0 1 1 -48 0zm80 0a56 56 0 1 0 -112 0 56 56 0 1 0 112 0z">
                                        </path>
                                    </svg>
                                </div>
                                <span class="xl:text-md text-sm text-white font-bold">سفارش آنلاین</span>
                            </a>
                            <a href="#"
                                class="sm:w-1/2 w-full py-3 flex gap-3 justify-center items-center rounded-2xl border-2 border-[var(--gold)] rezume_gradient transition_root">
                                <span class="xl:text-md sm:text-sm text-sm font-bold text-white">مشاهده نمونه کار
                                    ها</span>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                        class="xl:size-5 size-4 fill-white rotate-180">
                                        <path
                                            d="M440.6 273.4c4.7-4.5 7.4-10.8 7.4-17.4s-2.7-12.8-7.4-17.4l-176-168c-9.6-9.2-24.8-8.8-33.9 .8s-8.8 24.8 .8 33.9L364.1 232 24 232c-13.3 0-24 10.7-24 24s10.7 24 24 24l340.1 0L231.4 406.6c-9.6 9.2-9.9 24.3-.8 33.9s24.3 9.9 33.9 .8l176-168z">
                                        </path>
                                    </svg>
                                </div>
                            </a>

                        </div>
                        <!-- bottoms -->
                    </div>
                </div>
                {{-- item --}}
            </div>






        </section>

        <!-- sub_heder_end -->
    </header>
    <main class="mt-20 flex flex-col gap-20 items-center">
        <!-- servis_start -->
        <section class="w-full h-full flex items-center justify-center">
            <div class="w-11/12 h-full flex flex-col gap-8 items-center justify-center">
                <div class="w-full flex flex-col gap-3 items-center justify-center">
                    <!-- <div class="flex gap-0.5 items-center justify-center">
                    <span class="w-10 h-1 bg-[#B84C75] rounded-full" style="background:linear-gradient(91deg,rgba(185, 1, 112, 1) 1%, rgba(54, 4, 130, 1) 38%, rgba(255, 255, 255, 1) 91%);"></span>
                    <span class="size-2 rounded-full bg-[#FDB448]"></span>
                </div> -->
                    <h3 class="xl:text-4xl lg:text-2xl text-xl text-white font-bold">محصولات و خدمات ما</h3>
                    <div class="flex gap-0.5 items-center justify-center">
                        <span class="size-1 rounded-full bg-[var(--gold)]"></span>
                        <span class="w-8 h-0.5 bg-[var(--gold)] rounded-full"></span>
                    </div>
                </div>
                <div
                    class="w-full grid lg:grid-cols-6 lg:grid-rows-1 sm:grid-cols-2 sm:grid-rows-3 grid-cols-1 gird-rows-6  xl:gap-4 gap-4 items-center justify-center sm:justify-between">
                    <div
                        class="w-full h-full border-1 relative border-[var(--gold)] bg-[#181819] rounded-2xl flex lg:flex-col items-center justify-between scale transition_root">
                        <div class="lg:w-full w-1/2 lg:h-7/12 h-full">
                            <img src="{{ asset('assets/img/kart_servis.jpg') }}" alt=""
                                class="object-fit w-full xl:h-50 lg:h-40 md:h-45 sm:h-39 h-40  lg:rounded-t-2xl rounded-2xl">
                        </div>
                        <div
                            class="lg:w-full lg:h-5/12 max-lg:hidden bg-black/60 blur-[5px]  absolute bottom-0 left-0 rounded-b-2xl -z-0">
                        </div>
                        <div
                            class="lg:w-full w-1/2 h-full  text-white  rounded-b-2xl relative flex flex-col max-lg:gap-5 justify-end">
                            <div class="w-full lg:absolute lg:-top-10 lg:right-0 flex justify-center items-center">
                                <div
                                    class="lg:w-2/3 w-11/12 sm:pb-4 pb-2 sm:pt-2 pt-1 rounded-xl bg-[var(--background-2)] flex flex-col gap-1 items-center justify-center">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                            class="xl:xl:size-13 lg:size-9 size-7 lg:size-8 size-11">

                                            <g fill="none" stroke="#D4A23A" stroke-width="10"
                                                stroke-linecap="round" stroke-linejoin="round">

                                                <!-- Outer Card -->
                                                <rect x="90" y="110" width="332" height="220" rx="10" />

                                                <!-- Inner Border -->
                                                <rect x="120" y="140" width="272" height="160" rx="2" />

                                                <!-- Top Right Circle -->
                                                <circle cx="340" cy="175" r="18" />

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
                                            Z" />

                                                <!-- Text Line -->
                                                <line x1="220" y1="225" x2="305" y2="225" />

                                                <!-- Corner Accent -->
                                                <path d="M375 270 L375 295 L350 295" />

                                            </g>
                                        </svg>
                                    </div>
                                    <h4 class="xl:text-sm lg:text-xs sm:text-[10px] md:text-sm text-sm font-bold">چاپ
                                        کارت ویزیت</h4>
                                </div>
                            </div>
                            <div
                                class="w-full flex flex-col gap-1 justify-center items-center xl:text-sm lg:text-xs sm:text-[11px] md:text-sm text-xs text-[var(--text-secondary)] pb-3 xl:pt-13 lg:pt-10">
                                <p>طراحی و چاپ کارت ویزیت</p>
                                <p>لوکس و اختصاصی</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="w-full h-full border-1 relative border-[var(--gold)] bg-[#181819] rounded-2xl flex lg:flex-col items-center justify-between scale transition_root">
                        <div class="lg:w-full w-1/2 lg:h-7/12">
                            <img src="{{ asset('assets/img/bibord_servis.jpg') }}" alt=""
                                class="object-fit w-full xl:h-50 lg:h-40 md:h-45 sm:h-39 h-40  lg:rounded-t-2xl rounded-2xl">
                        </div>
                        <div
                            class="lg:w-full lg:h-5/12 max-lg:hidden bg-black/60 blur-[5px]  absolute bottom-0 left-0 rounded-b-2xl -z-0">
                        </div>
                        <div
                            class="lg:w-full w-1/2 h-full  text-white  rounded-b-2xl relative flex flex-col max-lg:gap-5 justify-end">
                            <div class="w-full lg:absolute lg:-top-10 lg:right-0 flex justify-center items-center">
                                <div
                                    class="lg:w-2/3 w-11/12 sm:pb-4 pb-2 sm:pt-2 pt-1 rounded-xl bg-[var(--background-2)] flex flex-col gap-1 items-center justify-center">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                            class="xl:size-13 lg:size-8 size-11">

                                            <g fill="none" stroke="#D4A23A" stroke-width="10"
                                                stroke-linecap="round" stroke-linejoin="round">

                                                <!-- Outer Card -->
                                                <rect x="90" y="110" width="332" height="220" rx="10" />

                                                <!-- Inner Border -->
                                                <rect x="120" y="140" width="272" height="160" rx="2" />

                                                <!-- Top Right Circle -->
                                                <circle cx="340" cy="175" r="18" />

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
                                            Z" />

                                                <!-- Text Line -->
                                                <line x1="220" y1="225" x2="305" y2="225" />

                                                <!-- Corner Accent -->
                                                <path d="M375 270 L375 295 L350 295" />

                                            </g>
                                        </svg>
                                    </div>
                                    <h4 class="xl:text-sm lg:text-xs sm:text-[10px] md:text-sm text-sm font-bold">چاپ
                                        کارت ویزیت</h4>
                                </div>
                            </div>
                            <div
                                class="w-full flex flex-col gap-1 justify-center items-center xl:text-sm lg:text-xs sm:text-[11px] md:text-sm text-xs text-[var(--text-secondary)] pb-3 xl:pt-13 lg:pt-10">
                                <p>طراحی و چاپ کارت ویزیت</p>
                                <p>لوکس و اختصاصی</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="w-full h-full border-1 relative border-[var(--gold)] bg-[#181819] rounded-2xl flex lg:flex-col items-center justify-between scale transition_root">
                        <div class="lg:w-full w-1/2 lg:h-7/12 h-full">
                            <img src="{{ asset('assets/img/kart_servis.jpg') }}" alt=""
                                class="object-fit w-full xl:h-50 lg:h-40 md:h-45 sm:h-39 h-40  lg:rounded-t-2xl rounded-2xl">
                        </div>
                        <div
                            class="lg:w-full lg:h-5/12 max-lg:hidden bg-black/60 blur-[5px]  absolute bottom-0 left-0 rounded-b-2xl -z-0">
                        </div>
                        <div
                            class="lg:w-full w-1/2 h-full  text-white  rounded-b-2xl relative flex flex-col max-lg:gap-5 justify-end">
                            <div class="w-full lg:absolute lg:-top-10 lg:right-0 flex justify-center items-center">
                                <div
                                    class="lg:w-2/3 w-11/12 sm:pb-4 pb-2 sm:pt-2 pt-1 rounded-xl bg-[var(--background-2)] flex flex-col gap-1 items-center justify-center">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                            class="xl:size-13 lg:size-8 size-11">

                                            <g fill="none" stroke="#D4A23A" stroke-width="10"
                                                stroke-linecap="round" stroke-linejoin="round">

                                                <!-- Outer Card -->
                                                <rect x="90" y="110" width="332" height="220" rx="10" />

                                                <!-- Inner Border -->
                                                <rect x="120" y="140" width="272" height="160" rx="2" />

                                                <!-- Top Right Circle -->
                                                <circle cx="340" cy="175" r="18" />

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
                                            Z" />

                                                <!-- Text Line -->
                                                <line x1="220" y1="225" x2="305" y2="225" />

                                                <!-- Corner Accent -->
                                                <path d="M375 270 L375 295 L350 295" />

                                            </g>
                                        </svg>
                                    </div>
                                    <h4 class="xl:text-sm lg:text-xs sm:text-[10px] md:text-sm text-sm font-bold">چاپ
                                        کارت ویزیت</h4>
                                </div>
                            </div>
                            <div
                                class="w-full flex flex-col gap-1 justify-center items-center xl:text-sm lg:text-xs sm:text-[11px] md:text-sm text-xs text-[var(--text-secondary)] pb-3 xl:pt-13 lg:pt-10">
                                <p>طراحی و چاپ کارت ویزیت</p>
                                <p>لوکس و اختصاصی</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="w-full h-full border-1 relative border-[var(--gold)] bg-[#181819] rounded-2xl flex lg:flex-col items-center justify-between scale transition_root">
                        <div class="lg:w-full w-1/2 lg:h-7/12">
                            <img src="{{ asset('assets/img/bibord_servis.jpg') }}" alt=""
                                class="object-fit w-full xl:h-50 lg:h-40 md:h-45 sm:h-39 h-40  lg:rounded-t-2xl rounded-2xl">
                        </div>
                        <div
                            class="lg:w-full lg:h-5/12 max-lg:hidden bg-black/60 blur-[5px]  absolute bottom-0 left-0 rounded-b-2xl -z-0">
                        </div>
                        <div
                            class="lg:w-full w-1/2 h-full  text-white  rounded-b-2xl relative flex flex-col max-lg:gap-5 justify-end">
                            <div class="w-full lg:absolute lg:-top-10 lg:right-0 flex justify-center items-center">
                                <div
                                    class="lg:w-2/3 w-11/12 sm:pb-4 pb-2 sm:pt-2 pt-1 rounded-xl bg-[var(--background-2)] flex flex-col gap-1 items-center justify-center">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                            class="xl:size-13 lg:size-8 size-11">

                                            <g fill="none" stroke="#D4A23A" stroke-width="10"
                                                stroke-linecap="round" stroke-linejoin="round">

                                                <!-- Outer Card -->
                                                <rect x="90" y="110" width="332" height="220" rx="10" />

                                                <!-- Inner Border -->
                                                <rect x="120" y="140" width="272" height="160" rx="2" />

                                                <!-- Top Right Circle -->
                                                <circle cx="340" cy="175" r="18" />

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
                                            Z" />

                                                <!-- Text Line -->
                                                <line x1="220" y1="225" x2="305" y2="225" />

                                                <!-- Corner Accent -->
                                                <path d="M375 270 L375 295 L350 295" />

                                            </g>
                                        </svg>
                                    </div>
                                    <h4 class="xl:text-sm lg:text-xs sm:text-[10px] md:text-sm text-sm font-bold">چاپ
                                        کارت ویزیت</h4>
                                </div>
                            </div>
                            <div
                                class="w-full flex flex-col gap-1 justify-center items-center xl:text-sm lg:text-xs sm:text-[11px] md:text-sm text-xs text-[var(--text-secondary)] pb-3 xl:pt-13 lg:pt-10">
                                <p>طراحی و چاپ کارت ویزیت</p>
                                <p>لوکس و اختصاصی</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="w-full h-full border-1 relative border-[var(--gold)] bg-[#181819] rounded-2xl flex lg:flex-col items-center justify-between scale transition_root">
                        <div class="lg:w-full w-1/2 lg:h-7/12 h-full">
                            <img src="{{ asset('assets/img/kart_servis.jpg') }}" alt=""
                                class="object-fit w-full xl:h-50 lg:h-40 md:h-45 sm:h-39 h-40  lg:rounded-t-2xl rounded-2xl">
                        </div>
                        <div
                            class="lg:w-full lg:h-5/12 max-lg:hidden bg-black/60 blur-[5px]  absolute bottom-0 left-0 rounded-b-2xl -z-0">
                        </div>
                        <div
                            class="lg:w-full w-1/2 h-full  text-white  rounded-b-2xl relative flex flex-col max-lg:gap-5 justify-end">
                            <div class="w-full lg:absolute lg:-top-10 lg:right-0 flex justify-center items-center">
                                <div
                                    class="lg:w-2/3 w-11/12 sm:pb-4 pb-2 sm:pt-2 pt-1 rounded-xl bg-[var(--background-2)] flex flex-col gap-1 items-center justify-center">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                            class="xl:size-9 lg:size-8 size-11">

                                            <g fill="none" stroke="#D4A23A" stroke-width="10"
                                                stroke-linecap="round" stroke-linejoin="round">

                                                <!-- Outer Card -->
                                                <rect x="90" y="110" width="332" height="220" rx="10" />

                                                <!-- Inner Border -->
                                                <rect x="120" y="140" width="272" height="160" rx="2" />

                                                <!-- Top Right Circle -->
                                                <circle cx="340" cy="175" r="18" />

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
                                            Z" />

                                                <!-- Text Line -->
                                                <line x1="220" y1="225" x2="305" y2="225" />

                                                <!-- Corner Accent -->
                                                <path d="M375 270 L375 295 L350 295" />

                                            </g>
                                        </svg>
                                    </div>
                                    <h4 class="xl:text-sm lg:text-xs sm:text-[10px] md:text-sm text-sm font-bold">چاپ
                                        کارت ویزیت</h4>
                                </div>
                            </div>
                            <div
                                class="w-full flex flex-col gap-1 justify-center items-center xl:text-sm lg:text-xs sm:text-[11px] md:text-sm text-xs text-[var(--text-secondary)] pb-3 xl:pt-13 lg:pt-10">
                                <p>طراحی و چاپ کارت ویزیت</p>
                                <p>لوکس و اختصاصی</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="w-full h-full border-1 relative border-[var(--gold)] bg-[#181819] rounded-2xl flex lg:flex-col items-center justify-between scale transition_root">
                        <div class="lg:w-full w-1/2 lg:h-7/12">
                            <img src="{{ asset('assets/img/bibord_servis.jpg') }}" alt=""
                                class="object-fit w-full xl:h-50 lg:h-40 md:h-45 sm:h-39 h-40  lg:rounded-t-2xl rounded-2xl">
                        </div>
                        <div
                            class="lg:w-full lg:h-5/12 max-lg:hidden bg-black/60 blur-[5px]  absolute bottom-0 left-0 rounded-b-2xl -z-0">
                        </div>
                        <div
                            class="lg:w-full w-1/2 h-full  text-white  rounded-b-2xl relative flex flex-col max-lg:gap-5 justify-end">
                            <div class="w-full lg:absolute lg:-top-10 lg:right-0 flex justify-center items-center">
                                <div
                                    class="lg:w-2/3 w-11/12 sm:pb-4 pb-2 sm:pt-2 pt-1 rounded-xl bg-[var(--background-2)] flex flex-col gap-1 items-center justify-center">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                            class="xl:size-9 lg:size-8 size-11">

                                            <g fill="none" stroke="#D4A23A" stroke-width="10"
                                                stroke-linecap="round" stroke-linejoin="round">

                                                <!-- Outer Card -->
                                                <rect x="90" y="110" width="332" height="220" rx="10" />

                                                <!-- Inner Border -->
                                                <rect x="120" y="140" width="272" height="160" rx="2" />

                                                <!-- Top Right Circle -->
                                                <circle cx="340" cy="175" r="18" />

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
                                            Z" />

                                                <!-- Text Line -->
                                                <line x1="220" y1="225" x2="305" y2="225" />

                                                <!-- Corner Accent -->
                                                <path d="M375 270 L375 295 L350 295" />

                                            </g>
                                        </svg>
                                    </div>
                                    <h4 class="xl:text-sm lg:text-xs sm:text-[10px] md:text-sm text-sm font-bold">چاپ
                                        کارت ویزیت</h4>
                                </div>
                            </div>
                            <div
                                class="w-full flex flex-col gap-1 justify-center items-center xl:text-sm lg:text-xs sm:text-[11px] md:text-sm text-xs text-[var(--text-secondary)] pb-3 xl:pt-13 lg:pt-10">
                                <p>طراحی و چاپ کارت ویزیت</p>
                                <p>لوکس و اختصاصی</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- servis_end -->

        <!-- identify_vidio -->

        <section class="w-full flex items-center justify-center">
            <div class="w-11/12 h-full flex flex-col gap-10  justify-center items-center">
                <div class="w-full flex flex-col gap-3 items-center justify-center">
                    <h3 class="xl:text-4xl lg:text-2xl text-white font-bold">شاهکار چیست!؟</h3>
                    <div class="flex gap-0.5 items-center justify-center">
                        <span class="size-1 rounded-full bg-[var(--gold)]"></span>
                        <span class="w-6 h-0.5 bg-[var(--gold)] rounded-full"></span>
                    </div>
                </div>
                <div
                    class="w-full xl:h-120 lg:h-90 sm:h-60 flex max-sm:flex-col gap-3 max-sm:gap-6 justify-between max-sm:justify-center items-center">
                    <div
                        class="sm:w-4/12 max-sm:w-full h-full flex flex-col gap-4 justify-center items-start max-sm:order-2">
                        <div
                            class="w-full sm:h-1/3 max-sm:py-3 bg-[var(--background-2)] border-2 border-[var(--gold)] flex gap-7 justify-center items-center rounded-lg">
                            <div
                                class="lg:p-2 p-1.5 rounded-full bg-[var(--background)] border border-[var(--gold)] flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                    class="lg:size-6 size-3 fill-[var(--gold)]">
                                    <path
                                        d="M464 258.2c0 2.7-1 5.2-4.2 8c-3.8 3.1-10.1 5.8-17.8 5.8H344c-53 0-96 43-96 96c0 6.8 .7 13.4 2.1 19.8c3.3 15.7 10.2 31.1 14.4 40.6l0 0c.7 1.6 1.4 3 1.9 4.3c5 11.5 5.6 15.4 5.6 17.1c0 5.3-1.9 9.5-3.8 11.8c-.9 1.1-1.6 1.6-2 1.8c-.3 .2-.8 .3-1.6 .4c-2.9 .1-5.7 .2-8.6 .2C141.1 464 48 370.9 48 256S141.1 48 256 48s208 93.1 208 208c0 .7 0 1.4 0 2.2zm48 .5c0-.9 0-1.8 0-2.7C512 114.6 397.4 0 256 0S0 114.6 0 256S114.6 512 256 512c3.5 0 7.1-.1 10.6-.2c31.8-1.3 53.4-30.1 53.4-62c0-14.5-6.1-28.3-12.1-42c-4.3-9.8-8.7-19.7-10.8-29.9c-.7-3.2-1-6.5-1-9.9c0-26.5 21.5-48 48-48h97.9c36.5 0 69.7-24.8 70.1-61.3zM160 256a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm0-64a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm128-64a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm64 64a32 32 0 1 0 0-64 32 32 0 1 0 0 64z" />
                                </svg>
                            </div>
                            <div class="flex flex-col gap-2 justify-center items-center">
                                <span class="xl:text-3xl lg:text-2xl texl-xl font-bold text-[var(--gold)]">+10</span>
                                <span class="xl:text-lg lg:text-md text-xs font-bold text-[var(--text)]">تجربه
                                    درخشان</span>
                            </div>
                        </div>
                        <div
                            class="w-full sm:h-1/3 max-sm:py-3 bg-[var(--background-2)] border-2 border-[var(--gold)] flex gap-7 justify-center items-center rounded-lg">
                            <div
                                class="p-2 rounded-full bg-[var(--background)] border border-[var(--gold)] flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                    class="sm:size-6 size-4 fill-[var(--gold)]">
                                    <path
                                        d="M464 258.2c0 2.7-1 5.2-4.2 8c-3.8 3.1-10.1 5.8-17.8 5.8H344c-53 0-96 43-96 96c0 6.8 .7 13.4 2.1 19.8c3.3 15.7 10.2 31.1 14.4 40.6l0 0c.7 1.6 1.4 3 1.9 4.3c5 11.5 5.6 15.4 5.6 17.1c0 5.3-1.9 9.5-3.8 11.8c-.9 1.1-1.6 1.6-2 1.8c-.3 .2-.8 .3-1.6 .4c-2.9 .1-5.7 .2-8.6 .2C141.1 464 48 370.9 48 256S141.1 48 256 48s208 93.1 208 208c0 .7 0 1.4 0 2.2zm48 .5c0-.9 0-1.8 0-2.7C512 114.6 397.4 0 256 0S0 114.6 0 256S114.6 512 256 512c3.5 0 7.1-.1 10.6-.2c31.8-1.3 53.4-30.1 53.4-62c0-14.5-6.1-28.3-12.1-42c-4.3-9.8-8.7-19.7-10.8-29.9c-.7-3.2-1-6.5-1-9.9c0-26.5 21.5-48 48-48h97.9c36.5 0 69.7-24.8 70.1-61.3zM160 256a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm0-64a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm128-64a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm64 64a32 32 0 1 0 0-64 32 32 0 1 0 0 64z" />
                                </svg>
                            </div>
                            <div class="flex flex-col gap-2 justify-center items-center">
                                <span class="xl:text-3xl lg:text-2xl texl-xl font-bold text-[var(--gold)]">+5000</span>
                                <span class="xl:text-lg lg:text-md text-xs font-bold text-[var(--text)]">پروژه
                                    موفق</span>
                            </div>
                        </div>
                        <div
                            class="w-full sm:h-1/3 max-sm:py-3 bg-[var(--background-2)] border-2 border-[var(--gold)] flex gap-7 justify-center items-center rounded-lg">
                            <div
                                class="p-2 rounded-full bg-[var(--background)] border border-[var(--gold)] flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                    class="sm:size-6 size-4 fill-[var(--gold)]">
                                    <path
                                        d="M464 258.2c0 2.7-1 5.2-4.2 8c-3.8 3.1-10.1 5.8-17.8 5.8H344c-53 0-96 43-96 96c0 6.8 .7 13.4 2.1 19.8c3.3 15.7 10.2 31.1 14.4 40.6l0 0c.7 1.6 1.4 3 1.9 4.3c5 11.5 5.6 15.4 5.6 17.1c0 5.3-1.9 9.5-3.8 11.8c-.9 1.1-1.6 1.6-2 1.8c-.3 .2-.8 .3-1.6 .4c-2.9 .1-5.7 .2-8.6 .2C141.1 464 48 370.9 48 256S141.1 48 256 48s208 93.1 208 208c0 .7 0 1.4 0 2.2zm48 .5c0-.9 0-1.8 0-2.7C512 114.6 397.4 0 256 0S0 114.6 0 256S114.6 512 256 512c3.5 0 7.1-.1 10.6-.2c31.8-1.3 53.4-30.1 53.4-62c0-14.5-6.1-28.3-12.1-42c-4.3-9.8-8.7-19.7-10.8-29.9c-.7-3.2-1-6.5-1-9.9c0-26.5 21.5-48 48-48h97.9c36.5 0 69.7-24.8 70.1-61.3zM160 256a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm0-64a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm128-64a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm64 64a32 32 0 1 0 0-64 32 32 0 1 0 0 64z" />
                                </svg>
                            </div>
                            <div class="flex flex-col gap-2 justify-center items-center">
                                <span class="txl:text-3xl lg:text-2xl texl-xl font-bold text-[var(--gold)]">%100</span>
                                <span class="xl:text-lg lg:text-md text-xs font-bold text-[var(--text)]">رضایت
                                    مشتری</span>
                            </div>
                        </div>
                    </div>
                    <div
                        class="sm:w-8/12 max-sm:w-full h-full border-2 border-[var(--gold)] relative flex justify-center items-center rounded-lg max-sm:order-1">
                        <video src="{{ asset('assets/img/identify_vidio.mkv') }}" controls
                            class="object-fit w-full h-full rounded-lg" onclick="vidio_onclic_play()"></video>
                        <!-- <div class="w-full h-full flex justify-center items-center  top-0 right-0" onclick="play_vidio_identify(this)"> -->
                        <div class="p-4 bg-[var(--background)]  border-2 border-[var(--gold)] absolute flex justify-center items-center rounded-full animation_play_vidio transition-all duration-300"
                            id="play_icon_vidio">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="size-6 fill-white">
                                <path
                                    d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                            </svg>
                        </div>
                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </section>


        <!-- identify_vidio -->
        <!-- rezimes_start -->
        <section class="w-full flex flex-col items-center justify-center">
            <div class="w-11/12 h-full flex flex-col lg:gap-8 sm:gap-6 gap-5 items-center">
                <!-- title rezume -->
                <div class="w-full flex flex-col gap-3 items-center justify-center">
                    <h3 class="xl:text-4xl lg:text-2xl text-xl text-white font-bold">نمونه کار های شاهکار</h3>
                    <div class="flex gap-0.5 items-center justify-center">
                        <span class="size-1 rounded-full bg-[var(--gold)]"></span>
                        <span class="w-8 h-0.5 bg-[var(--gold)] rounded-full"></span>
                    </div>
                </div>
                <!-- title rezume -->
                <!-- category_rezume -->
                <div class="w-full flex justify-center items-center">
                    <div
                        class="overflow-auto [&::-webkit-scrollbar]:h-2  [&::-webkit-scrollbar-thumb]:bg-[var(--gold)]  [&::-webkit-scrollbar-thumb]:rounded-full flex gap-2 items-center xl:text-md sm:text-sm text-xs py-4 px-1">
                        <span
                            class="px-6 py-2 bg-[var(--gold)] rounded-full font-bold text-white flex justify-center items-center shadow_item cursor-pointer">همه</span>
                        <span
                            class="px-6 py-2 border border-[var(--border)] hover:border-[var(--gold)] rounded-full font-bold text-[var(--text-secondary)] scale hover:text-[var(--text)] transition_root flex justify-center items-center shadow_item text-nowrap cursor-pointer">تابلو
                            سازی</span>
                        <span
                            class="px-6 py-2 border border-[var(--border)] hover:border-[var(--gold)] rounded-full font-bold text-[var(--text-secondary)] scale hover:text-[var(--text)] transition_root flex justify-center items-center shadow_item text-nowrap cursor-pointer">تابلو
                            سازی</span>
                        <span
                            class="px-6 py-2 border border-[var(--border)] hover:border-[var(--gold)] rounded-full font-bold text-[var(--text-secondary)] scale hover:text-[var(--text)] transition_root flex justify-center items-center shadow_item text-nowrap cursor-pointer">تابلو
                            سازی</span>
                        <span
                            class="px-6 py-2 border border-[var(--border)] hover:border-[var(--gold)] rounded-full font-bold text-[var(--text-secondary)] scale hover:text-[var(--text)] transition_root flex justify-center items-center shadow_item text-nowrap cursor-pointer">تابلو
                            سازی</span>
                        <span
                            class="px-6 py-2 border border-[var(--border)] hover:border-[var(--gold)] rounded-full font-bold text-[var(--text-secondary)] scale hover:text-[var(--text)] transition_root flex justify-center items-center shadow_item text-nowrap cursor-pointer">تابلو
                            سازی</span>
                        <span
                            class="px-6 py-2 border border-[var(--border)] hover:border-[var(--gold)] rounded-full font-bold text-[var(--text-secondary)] scale hover:text-[var(--text)] transition_root flex justify-center items-center shadow_item text-nowrap cursor-pointer">تابلو
                            سازی</span>
                    </div>
                </div>
                <!-- category_rezume -->
                <!-- rezumes items -->
                <div
                    class="max-w-full min-w-full flex xl:h-100 lg:h-80 md:h-50 sm:h-45 h-40 items-center xl:justify-between gap-2">
                    <div
                        class="w-5/24 h-full border border-[var(--gold)] rounded-xl px-[0.3px] py-[0.7px] max-sm:hidden overflow-hidden">
                        <img src="{{ asset('assets/img/poster_desk.jpg') }}" alt=""
                            class="object-fit w-full h-full rounded-xl scale transition_root">
                    </div>
                    <div class="w-6/12 h-full flex flex-col justify-between items-center">
                        <div class="w-full h-49/100 flex gap-2 justify-between items-center">
                            <div
                                class="sm:w-1/2 w-full h-full border border-[var(--gold)] rounded-xl px-[0.3px] py-[0.7px] overflow-hidden">
                                <img src="{{ asset('assets/img/kart_rezume.jpg') }}" alt=""
                                    class="object-fit w-full h-full rounded-xl scale transition_root">
                            </div>
                            <div
                                class="w-1/2 h-full max-sm:hidden border border-[var(--gold)] rounded-xl px-[0.3px] py-[0.7px] overflow-hidden">
                                <img src="{{ asset('assets/img/kart_rezume.jpg') }}" alt=""
                                    class="object-fit w-full h-full rounded-xl scale transition_root">
                            </div>
                        </div>
                        <div class="w-full h-49/100 flex gap-1 justify-between items-center">
                            <div
                                class="sm:w-1/3 w-1/2 h-full border border-[var(--gold)] rounded-xl px-[0.3px] py-[0.7px] overflow-hidden">
                                <img src="{{ asset('assets/img/kart_rezume.jpg') }}" alt=""
                                    class="object-fit w-full h-full rounded-xl scale transition_root">
                            </div>
                            <div
                                class="sm:w-1/3 w-1/2 h-full border border-[var(--gold)] rounded-xl px-[0.3px] py-[0.7px] overflow-hidden">
                                <img src="{{ asset('assets/img/kart_rezume.jpg') }}" alt=""
                                    class="object-fit w-full h-full rounded-xl scale transition_root">
                            </div>
                            <div
                                class="sm:w-1/3 w-1/2 max-sm:hidden h-full border border-[var(--gold)] rounded-xl px-[0.3px] py-[0.7px] overflow-hidden">
                                <img src="{{ asset('assets/img/kart_rezume.jpg') }}" alt=""
                                    class="object-fit w-full h-full rounded-xl scale transition_root">
                            </div>
                        </div>
                    </div>
                    <div
                        class="sm:w-7/24 max-sm:w-1/2 h-full border border-[var(--gold)] rounded-xl px-[0.3px] py-[0.7px] overflow-hidden">
                        <img src="{{ asset('assets/img/bibord_servis.jpg') }}" alt=""
                            class="object-fit w-full h-full rounded-xl scale transition_root">
                    </div>


                </div>
                <!-- rezumes items -->
                <!-- show all rezume -->
                <a href="#"
                    class="px-10 py-2 flex gap-8 justify-center items-center rounded-2xl border-2 border-[var(--border)] hover:border-[var(--gold)] transition_root">
                    <span class="xl:text-md sm:text-sm text-xs font-bold text-white">مشاهده نمونه کار ها</span>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                            class="xl:size-5 size-4 fill-white rotate-180">
                            <path
                                d="M440.6 273.4c4.7-4.5 7.4-10.8 7.4-17.4s-2.7-12.8-7.4-17.4l-176-168c-9.6-9.2-24.8-8.8-33.9 .8s-8.8 24.8 .8 33.9L364.1 232 24 232c-13.3 0-24 10.7-24 24s10.7 24 24 24l340.1 0L231.4 406.6c-9.6 9.2-9.9 24.3-.8 33.9s24.3 9.9 33.9 .8l176-168z">
                            </path>
                        </svg>
                    </div>
                </a>
                <!-- show all rezume -->
            </div>
        </section>
        <!-- rezimes_end -->
        <!-- comment -->
        <section class="w-full flex justify-center items-center">
            <div class="w-full lg:h-full h-full flex justify-center items-center relative">
                <img src="{{ asset('assets/img/background_commant.jpg') }}" alt=""
                    class="object-fit w-full h-85 max-lg:hidden">
                <!-- <img src="../img_1/background_property_mobile.jpg" alt="" class="object-cover w-full :hidden rounded-2xl sm:hidden"> -->
                <div class="w-full h-full lg:absolute lg:bottom-0 lg:right-0 flex flex-col items-center justify-start">
                    <div class="w-11/12 h-full flex flex-col gap-9">
                        <!-- property -->
                        <div
                            class="w-full lg:h-30 lg:border-y-1 lg:border-[var(--border)] max-lg:border sm:border-[var(--gold)] flex max-sm:flex-col gap-3 items-center justify-between lg:py-4 py-2 lg:px-5 max-sm:bg-[var(--background)] max-lg:bg-[var(--background-2)]">
                            <div
                                class="sm:w-3/14 w-full h-full flex lg:gap-4  sm:justify-center max-sm:justify-end items-center max-lg:bg-[var(--background)] max-lg:rounded-xl max-lg:border-1 sm:border-[var(--border)] border-[var(--gold)] max-lg:py-2">
                                <div
                                    class="group max-sm:w-9/12 msx-sm:h-full flex max-lg:flex-col max-sm:flex-row gap-2 jsutify-start items-center">

                                    <div class="group-hover:scale-[1.05] group-active:scale-[1.3] transition_root">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                            class="xl:size-13 lg:size-9 size-7 fill-[var(--gold)]">
                                            <path
                                                d="M73 127L256 49.4 439 127c5.9 2.5 9.1 7.8 9 12.8c-.4 91.4-38.4 249.3-186.3 320.1c-3.6 1.7-7.8 1.7-11.3 0C102.4 389 64.5 231.2 64 139.7c0-5 3.1-10.2 9-12.8zM457.7 82.8L269.4 2.9C265.2 1 260.7 0 256 0s-9.2 1-13.4 2.9L54.3 82.8c-22 9.3-38.4 31-38.3 57.2c.5 99.2 41.3 280.7 213.6 363.2c16.7 8 36.1 8 52.8 0C454.8 420.7 495.5 239.2 496 140c.1-26.2-16.3-47.9-38.3-57.2zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div
                                        class="flex flex-col sm:gap-2 gap-1 lg:items-start items-center max-sm:items-start justify-center">
                                        <h5 class="xl:text-lg sm:text-xs text-sm font-bold text-[var(--text)]">کیفیت
                                            تضمینی</h5>
                                        <div
                                            class="flex flex-col lg:items-start items-center max-sm:items-start justify-center xl:text-[11px] sm:text-[7px] text-[10px] text-[var(--text-secondary)]">
                                            <span class=" font-bold">استفاده از رنگ با کیفیت عالی</span>
                                            <span class="font-bold">با دستگاه های پیشرفته</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <span class="w-0.5 h-full bg-[var(--border)] rounded-full max-lg:hidden"></span>
                            <div
                                class="sm:w-3/14 w-full h-full flex lg:gap-4  sm:justify-center max-sm:justify-end items-center max-lg:bg-[var(--background)] max-lg:rounded-xl max-lg:border-1 sm:border-[var(--border)] border-[var(--gold)] max-lg:py-2">
                                <div
                                    class="group max-sm:w-9/12 msx-sm:h-full flex max-lg:flex-col max-sm:flex-row gap-2 jsutify-start items-center">

                                    <div class="group-hover:scale-[1.05] group-active:scale-[1.3] transition_root">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"
                                            class="xl:size-13 lg:size-9 size-7 fill-[var(--gold)]">
                                            <path
                                                d="M128 128a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM269.7 336c80 0 145 64.3 146.3 144H32c1.2-79.7 66.2-144 146.3-144h91.4zM224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3zm431 208c17 0 30.7-13.8 30.7-30.7C640 392.2 567.8 320 478.7 320H417.3c-4.4 0-8.8 .2-13.2 .5c11.3 9.4 21.6 19.9 30.7 31.5h43.9c71 0 128.6 57.2 129.3 128H480c0 .8 0 1.5 0 2.3c0 10.8-2.8 20.9-7.6 29.7H609.3zM432 256c61.9 0 112-50.1 112-112s-50.1-112-112-112c-24.8 0-47.7 8.1-66.3 21.7c5.2 9.8 9.3 20.3 12.4 31.2C392.3 71.9 411.2 64 432 64c44.2 0 80 35.8 80 80s-35.8 80-80 80c-25.2 0-47.6-11.6-62.3-29.8c-4.7 10.3-10.4 19.9-17 28.9C373 243.4 401 256 432 256z" />
                                        </svg>
                                    </div>
                                    <div
                                        class="flex flex-col sm:gap-2 gap-1 lg:items-start items-center max-sm:items-start justify-center">
                                        <h5 class="xl:text-lg sm:text-xs text-sm font-bold text-[var(--text)]">تیم
                                            حرفه‌ای</h5>
                                        <div
                                            class="flex flex-col lg:items-start items-center max-sm:items-start justify-center xl:text-[11px] sm:text-[7px] text-[10px] text-[var(--text-secondary)]">
                                            <span class=" font-bold">استفاده از رنگ با کیفیت عالی</span>
                                            <span class="font-bold">با دستگاه های پیشرفته</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div
                                class="sm:w-4/14 w-full h-full flex lg:gap-4  sm:justify-center max-sm:justify-end items-center max-lg:bg-[var(--background)] max-lg:rounded-xl max-lg:border-1 sm:border-[var(--border)] border-[var(--gold)] max-lg:py-2 gradient_box1 rounded-xl">
                                <div
                                    class="group max-sm:w-9/12 msx-sm:h-full flex max-lg:flex-col max-sm:flex-row gap-2 jsutify-start items-center">

                                    <div class="group-hover:scale-[1.05] group-active:scale-[1.6] transition_root">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="xl:size-13 size-9"
                                            viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.6"
                                            stroke-linecap="round" stroke-linejoin="round">

                                            <!-- Scalloped medal -->
                                            <path d="
                                                    M12 3
                                                    C12.7 3.6 13.6 3.5 14.3 3.9
                                                    C15.1 4.2 15.5 5 16.2 5.4
                                                    C17 5.8 17.8 6.3 18 7.2
                                                    C18.3 8 19 8.8 19 9.8
                                                    C19 10.8 18.3 11.6 18 12.4
                                                    C17.8 13.3 17 13.8 16.2 14.2
                                                    C15.5 14.6 15.1 15.4 14.3 15.7
                                                    C13.6 16.1 12.7 16 12 16.6
                                                    C11.3 16 10.4 16.1 9.7 15.7
                                                    C8.9 15.4 8.5 14.6 7.8 14.2
                                                    C7 13.8 6.2 13.3 6 12.4
                                                    C5.7 11.6 5 10.8 5 9.8
                                                    C5 8.8 5.7 8 6 7.2
                                                    C6.2 6.3 7 5.8 7.8 5.4
                                                    C8.5 5 8.9 4.2 9.7 3.9
                                                    C10.4 3.5 11.3 3.6 12 3Z" />

                                            <!-- Inner circle -->
                                            <circle cx="12" cy="9.8" r="4.2" />

                                            <!-- Ribbons -->
                                            <path d="M9.8 14.6L7.7 20H10L12 17.7" />
                                            <path d="M14.2 14.6L16.3 20H14L12 17.7" />

                                        </svg>
                                    </div>
                                    <div
                                        class="flex flex-col sm:gap-2 gap-1 lg:items-start items-center max-sm:items-start justify-center">
                                        <h5 class="xl:text-lg text-md font-bold text-[var(--text)]">چرا ما را انتخاب
                                            کنید</h5>
                                        <div
                                            class="flex flex-col lg:items-start items-center max-sm:items-start justify-center xl:text-[11px] text-[10px] text-[var(--text)]">
                                            <span class=" font-bold">استفاده از رنگ با کیفیت عالی</span>
                                            <span class="font-bold">با دستگاه های پیشرفته</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div
                                class="sm:w-3/14 w-full h-full flex lg:gap-4  sm:justify-center max-sm:justify-end items-center max-lg:bg-[var(--background)] max-lg:rounded-xl max-lg:border-1 sm:border-[var(--border)] border-[var(--gold)] max-lg:py-2">
                                <div
                                    class="group max-sm:w-9/12 msx-sm:h-full flex max-lg:flex-col max-sm:flex-row gap-2 jsutify-start items-center">

                                    <div class="group-hover:scale-[1.05] group-active:scale-[1.3] transition_root">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            class="xl:size-13 lg:size-9 size-7" stroke="var(--gold)" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M2 7h11v10H2z"></path>
                                            <path d="M13 10h4l4 3.5V17h-8z"></path>
                                            <circle cx="6" cy="18.5" r="1.6"></circle>
                                            <circle cx="17" cy="18.5" r="1.6"></circle>
                                        </svg>
                                    </div>
                                    <div
                                        class="flex flex-col sm:gap-2 gap-1 lg:items-start items-center max-sm:items-start justify-center">
                                        <h5 class="xl:text-lg sm:text-xs text-sm font-bold text-[var(--text)]">تحویل
                                            سریع</h5>
                                        <div
                                            class="flex flex-col lg:items-start items-center max-sm:items-start justify-center xl:text-[11px] sm:text-[7px]  text-[10px] text-[var(--text-secondary)]">
                                            <span class=" font-bold">استفاده از رنگ با کیفیت عالی</span>
                                            <span class="font-bold">با دستگاه های پیشرفته</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <span class="w-0.5 h-full bg-[var(--border)] rounded-full max-lg:hidden"></span>
                            <div
                                class="sm:w-3/14 w-full h-full flex lg:gap-4  sm:justify-center max-sm:justify-end items-center max-lg:bg-[var(--background)] max-lg:rounded-xl max-lg:border-1 sm:border-[var(--border)] border-[var(--gold)] max-lg:py-2">
                                <div
                                    class="group max-sm:w-9/12 msx-sm:h-full flex max-lg:flex-col max-sm:flex-row gap-2 jsutify-start items-center">

                                    <div class="group-hover:scale-[1.05] group-active:scale-[1.3] transition_root">
                                        <svg class="xl:size-13 lg:size-9 size-7" viewBox="0 0 64 64" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <!-- Circle -->
                                            <circle cx="32" cy="32" r="22" stroke="#D4A437"
                                                stroke-width="3.5" stroke-linecap="round"
                                                stroke-dasharray="132 12" />

                                            <!-- Top & Bottom marks -->
                                            <line x1="32" y1="6" x2="32" y2="11"
                                                stroke="#D4A437" stroke-width="3" stroke-linecap="round" />
                                            <line x1="32" y1="53" x2="32" y2="58"
                                                stroke="#D4A437" stroke-width="3" stroke-linecap="round" />

                                            <!-- Dollar -->
                                            <text x="32" y="42" text-anchor="middle" font-size="28"
                                                font-family="Arial, sans-serif" font-weight="700"
                                                fill="#D4A437">$</text>
                                        </svg>
                                    </div>
                                    <div
                                        class="flex flex-col sm:gap-2 gap-1 lg:items-start items-center max-sm:items-start justify-center">
                                        <h5 class="xl:text-lg sm:text-xs text-sm font-bold text-[var(--text)]">قیمت
                                            مناسب</h5>
                                        <div
                                            class="flex flex-col lg:items-start items-center max-sm:items-start justify-center xl:text-[11px] sm:text-[7px] text-[10px] text-[var(--text-secondary)]">
                                            <span class=" font-bold">استفاده از رنگ با کیفیت عالی</span>
                                            <span class="font-bold">با دستگاه های پیشرفته</span>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <!-- property -->
                        <!-- commend_coustomer -->
                        <div class="w-full flex max-sm:flex-col max-sm:gap-4 justify-between items-center">
                            <div
                                class="sm:w-32/100 w-full h-full gradient_comment_box flex flex-col gap-4 items-center justify-center border border-[var(--gold)] rounded-xl py-4 scale transition_root">
                                <!-- star -->
                                <div class="flex gap-0.5 items-center justify-center max-sm:hidden">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                        class="size-4 fill-[var(--star)]">
                                        <defs></defs>
                                        <path class="fa-secondary"
                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                        <path class="fa-primary" d="" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                        class="size-4 fill-[var(--star)]">
                                        <defs></defs>
                                        <path class="fa-secondary"
                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                        <path class="fa-primary" d="" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                        class="size-4 fill-[var(--star)]">
                                        <defs></defs>
                                        <path class="fa-secondary"
                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                        <path class="fa-primary" d="" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                        class="size-4 fill-[var(--star)]">
                                        <defs></defs>
                                        <path class="fa-secondary"
                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                        <path class="fa-primary" d="" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                        class="size-4 fill-[var(--star)]">
                                        <defs></defs>
                                        <path class="fa-secondary"
                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                        <path class="fa-primary" d="" />
                                    </svg>
                                </div>
                                <!-- star -->
                                <!-- comment_ttem -->
                                <p
                                    class="xl:w-9/12 w-11/12 xl:text-sm lg:text-xs sm:text-[9px] md:text-[10px] text-xs text-center text-[var(--text-secondary)]">
                                    چاپ شاهکار با سال‌ها تجربه در زمینه چاپ دیجیتال و تبلیغات محیطی، همراه مطمئن شما در
                                    مسیر برندسازی و معرفی کسب‌وکار است</p>
                                <!-- comment_ttem -->
                                <div
                                    class="max-sm:w-full flex max-sm:justify-between justify-center max-sm:items-center max-sm:px-5">
                                    <div
                                        class="xl:w-1/2 sm:w-10/12 w-1/2 flex justify-center max-sm:justify-start items-center gap-4">
                                        <img src="{{ asset('assets/img/user.png') }}" alt=""
                                            class="object-cover lg:size-10 sm:size-6 size-7 rounded-full bg-white">
                                        <div class="flex flex-col items-start justify-center">
                                            <h5
                                                class="xl:text-sm lg:text-xs sm:text-[9px] md:text-[10px] text-xs font-bold text-[var(--text)] text-nowrap">
                                                محمد مهدی بندعلی</h5>
                                            <span
                                                class="xl:text-xs lg:text-[11px] sm:text-[9px] md:text-[10px] text-[11px] text-[var(--text-secondary)] font-bold text-nowrap">طراح
                                                سابت</span>

                                        </div>

                                    </div>
                                    <!-- star_mobile -->
                                    <div class="w-1/2 flex gap-0.5 items-center justify-end sm:hidden">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                            class="size-4 fill-[var(--star)]">
                                            <defs></defs>
                                            <path class="fa-secondary"
                                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                            <path class="fa-primary" d="" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                            class="size-4 fill-[var(--star)]">
                                            <defs></defs>
                                            <path class="fa-secondary"
                                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                            <path class="fa-primary" d="" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                            class="size-4 fill-[var(--star)]">
                                            <defs></defs>
                                            <path class="fa-secondary"
                                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                            <path class="fa-primary" d="" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                            class="size-4 fill-[var(--star)]">
                                            <defs></defs>
                                            <path class="fa-secondary"
                                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                            <path class="fa-primary" d="" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                            class="size-4 fill-[var(--star)]">
                                            <defs></defs>
                                            <path class="fa-secondary"
                                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                            <path class="fa-primary" d="" />
                                        </svg>
                                    </div>
                                    <!-- star_mobile -->
                                </div>
                            </div>
                            <div
                                class="sm:w-32/100 w-full h-full gradient_comment_box flex flex-col gap-4 items-center justify-center border border-[var(--gold)] rounded-xl py-4 scale transition_root">
                                <!-- star -->
                                <div class="flex gap-0.5 items-center justify-center max-sm:hidden">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                        class="size-4 fill-[var(--star)]">
                                        <defs></defs>
                                        <path class="fa-secondary"
                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                        <path class="fa-primary" d="" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                        class="size-4 fill-[var(--star)]">
                                        <defs></defs>
                                        <path class="fa-secondary"
                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                        <path class="fa-primary" d="" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                        class="size-4 fill-[var(--star)]">
                                        <defs></defs>
                                        <path class="fa-secondary"
                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                        <path class="fa-primary" d="" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                        class="size-4 fill-[var(--star)]">
                                        <defs></defs>
                                        <path class="fa-secondary"
                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                        <path class="fa-primary" d="" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                        class="size-4 fill-[var(--star)]">
                                        <defs></defs>
                                        <path class="fa-secondary"
                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                        <path class="fa-primary" d="" />
                                    </svg>
                                </div>
                                <!-- star -->
                                <!-- comment_ttem -->
                                <p
                                    class="xl:w-9/12 w-11/12 xl:text-sm lg:text-xs sm:text-[9px] md:text-[10px] text-xs text-center text-[var(--text-secondary)]">
                                    چاپ شاهکار با سال‌ها تجربه در زمینه چاپ دیجیتال و تبلیغات محیطی، همراه مطمئن شما در
                                    مسیر برندسازی و معرفی کسب‌وکار است</p>
                                <!-- comment_ttem -->
                                <div
                                    class="max-sm:w-full flex max-sm:justify-between justify-center max-sm:items-center max-sm:px-5">
                                    <div
                                        class="xl:w-1/2 sm:w-10/12 w-1/2 flex justify-center max-sm:justify-start items-center gap-4">
                                        <img src="{{ asset('assets/img/user.png') }}" alt=""
                                            class="object-cover lg:size-10 sm:size-6 size-7 rounded-full bg-white">
                                        <div class="flex flex-col items-start justify-center">
                                            <h5
                                                class="xl:text-sm lg:text-xs sm:text-[9px] md:text-[10px] text-xs font-bold text-[var(--text)] text-nowrap">
                                                محمد مهدی بندعلی</h5>
                                            <span
                                                class="xl:text-xs lg:text-[11px] sm:text-[9px] md:text-[10px] text-[11px] text-[var(--text-secondary)] font-bold text-nowrap">طراح
                                                سابت</span>

                                        </div>

                                    </div>
                                    <!-- star_mobile -->
                                    <div class="w-1/2 flex gap-0.5 items-center justify-end sm:hidden">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                            class="size-4 fill-[var(--star)]">
                                            <defs></defs>
                                            <path class="fa-secondary"
                                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                            <path class="fa-primary" d="" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                            class="size-4 fill-[var(--star)]">
                                            <defs></defs>
                                            <path class="fa-secondary"
                                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                            <path class="fa-primary" d="" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                            class="size-4 fill-[var(--star)]">
                                            <defs></defs>
                                            <path class="fa-secondary"
                                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                            <path class="fa-primary" d="" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                            class="size-4 fill-[var(--star)]">
                                            <defs></defs>
                                            <path class="fa-secondary"
                                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                            <path class="fa-primary" d="" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                            class="size-4 fill-[var(--star)]">
                                            <defs></defs>
                                            <path class="fa-secondary"
                                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                            <path class="fa-primary" d="" />
                                        </svg>
                                    </div>
                                    <!-- star_mobile -->
                                </div>
                            </div>
                            <div
                                class="sm:w-32/100 w-full h-full gradient_comment_box flex flex-col gap-4 items-center justify-center border border-[var(--gold)] rounded-xl py-4 scale transition_root">
                                <!-- star -->
                                <div class="flex gap-0.5 items-center justify-center max-sm:hidden">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                        class="size-4 fill-[var(--star)]">
                                        <defs></defs>
                                        <path class="fa-secondary"
                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                        <path class="fa-primary" d="" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                        class="size-4 fill-[var(--star)]">
                                        <defs></defs>
                                        <path class="fa-secondary"
                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                        <path class="fa-primary" d="" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                        class="size-4 fill-[var(--star)]">
                                        <defs></defs>
                                        <path class="fa-secondary"
                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                        <path class="fa-primary" d="" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                        class="size-4 fill-[var(--star)]">
                                        <defs></defs>
                                        <path class="fa-secondary"
                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                        <path class="fa-primary" d="" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                        class="size-4 fill-[var(--star)]">
                                        <defs></defs>
                                        <path class="fa-secondary"
                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                        <path class="fa-primary" d="" />
                                    </svg>
                                </div>
                                <!-- star -->
                                <!-- comment_ttem -->
                                <p
                                    class="xl:w-9/12 w-11/12 xl:text-sm lg:text-xs sm:text-[9px] md:text-[10px] text-xs text-center text-[var(--text-secondary)]">
                                    چاپ شاهکار با سال‌ها تجربه در زمینه چاپ دیجیتال و تبلیغات محیطی، همراه مطمئن شما در
                                    مسیر برندسازی و معرفی کسب‌وکار است</p>
                                <!-- comment_ttem -->
                                <div
                                    class="max-sm:w-full flex max-sm:justify-between justify-center max-sm:items-center max-sm:px-5">
                                    <div
                                        class="xl:w-1/2 sm:w-10/12 w-1/2 flex justify-center max-sm:justify-start items-center gap-4">
                                        <img src="{{ asset('assets/img/user.png') }}" alt=""
                                            class="object-cover lg:size-10 sm:size-6 size-7 rounded-full bg-white">
                                        <div class="flex flex-col items-start justify-center">
                                            <h5
                                                class="xl:text-sm lg:text-xs sm:text-[9px] md:text-[10px] text-xs font-bold text-[var(--text)] text-nowrap">
                                                محمد مهدی بندعلی</h5>
                                            <span
                                                class="xl:text-xs lg:text-[11px] sm:text-[9px] md:text-[10px] text-[11px] text-[var(--text-secondary)] font-bold text-nowrap">طراح
                                                سابت</span>

                                        </div>

                                    </div>
                                    <!-- star_mobile -->
                                    <div class="w-1/2 flex gap-0.5 items-center justify-end sm:hidden">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                            class="size-4 fill-[var(--star)]">
                                            <defs></defs>
                                            <path class="fa-secondary"
                                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                            <path class="fa-primary" d="" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                            class="size-4 fill-[var(--star)]">
                                            <defs></defs>
                                            <path class="fa-secondary"
                                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                            <path class="fa-primary" d="" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                            class="size-4 fill-[var(--star)]">
                                            <defs></defs>
                                            <path class="fa-secondary"
                                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                            <path class="fa-primary" d="" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                            class="size-4 fill-[var(--star)]">
                                            <defs></defs>
                                            <path class="fa-secondary"
                                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                            <path class="fa-primary" d="" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                            class="size-4 fill-[var(--star)]">
                                            <defs></defs>
                                            <path class="fa-secondary"
                                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                            <path class="fa-primary" d="" />
                                        </svg>
                                    </div>
                                    <!-- star_mobile -->
                                </div>
                            </div>


                        </div>
                        <!-- commend_coustomer -->

                    </div>
                </div>
            </div>
        </section>
        <!-- comment -->

    </main>
    <footer
        class="w-full mt-20 flex justify-center items-start bg-[var(--background-2)] border-t-1 border-[var(--border)] pt-6">
        <section class="w-11/12 flex max-lg:flex-col gap-4 lg:justify-between items-start">
            <div class="lg:w-8/12 w-full flex max-sm:flex-col max-sm:gap-4 lg:justify-between items-start">
                <!-- address -->
                <div class="sm:w-1/2 w-full h-full flex flex-col gap-2 sm:items-start items-center justify-start">

                    <!-- <p class="w-10/12 xl:text-lg text-sm font-bold text-[var(--text-secondary)]  max-sm:text-center">مجموعه شاهکار اراعه دهنده خدمات چاپ و تلیغات با بهترین کیفیت و قیمت مناسب</p> -->
                    <h5 class="xl:text-2xl lg:text-xl font-bold text-[var(--text)]">اطلاعات تماس</h5>
                    <div class="flex flex-col gap-2 items-start">

                        <div class="flex justify-center items-center gap-4">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                    class="lg:size-4 size-3 fill-[var(--gold)]">
                                    <path
                                        d="M375.8 275.2c-16.4-7-35.4-2.4-46.7 11.4l-33.2 40.6c-46-26.7-84.4-65.1-111.1-111.1L225.3 183c13.8-11.3 18.5-30.3 11.4-46.7l-48-112C181.2 6.7 162.3-3.1 143.6 .9l-112 24C13.2 28.8 0 45.1 0 64v0C0 295.2 175.2 485.6 400.1 509.5c9.8 1 19.6 1.8 29.6 2.2c0 0 0 0 0 0c0 0 .1 0 .1 0c6.1 .2 12.1 .4 18.2 .4l0 0c18.9 0 35.2-13.2 39.1-31.6l24-112c4-18.7-5.8-37.6-23.4-45.1l-112-48zM441.5 464C225.8 460.5 51.5 286.2 48.1 70.5l99.2-21.3 43 100.4L154.4 179c-18.2 14.9-22.9 40.8-11.1 61.2c30.9 53.3 75.3 97.7 128.6 128.6c20.4 11.8 46.3 7.1 61.2-11.1l29.4-35.9 100.4 43L441.5 464zM48 64v0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0s0 0 0 0">
                                    </path>
                                </svg>
                            </div>
                            <span
                                class="xl:text-lg sm:text-sm font-bold text-[var(--text-secondary)]">09925718265</span>
                        </div>
                        <div class="flex justify-center items-center gap-4">
                            <div>
                                <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"
                                    class="lg:size-4 size-3 fill-[var(--gold)]">
                                    <path
                                        d="M1664 1504v-768q-32 36-69 66-268 206-426 338-51 43-83 67t-86.5 48.5-102.5 24.5h-2q-48 0-102.5-24.5t-86.5-48.5-83-67q-158-132-426-338-37-30-69-66v768q0 13 9.5 22.5t22.5 9.5h1472q13 0 22.5-9.5t9.5-22.5zm0-1051v-24.5l-.5-13-3-12.5-5.5-9-9-7.5-14-2.5h-1472q-13 0-22.5 9.5t-9.5 22.5q0 168 147 284 193 152 401 317 6 5 35 29.5t46 37.5 44.5 31.5 50.5 27.5 43 9h2q20 0 43-9t50.5-27.5 44.5-31.5 46-37.5 35-29.5q208-165 401-317 54-43 100.5-115.5t46.5-131.5zm128-37v1088q0 66-47 113t-113 47h-1472q-66 0-113-47t-47-113v-1088q0-66 47-113t113-47h1472q66 0 113 47t47 113z">
                                    </path>
                                </svg>
                            </div>
                            <span
                                class="xl:text-lg sm:text-sm font-bold text-[var(--text-secondary)]">@gmail.com</span>
                        </div>
                        <div class="flex justify-center items-center gap-4">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"
                                    class="lg:size-4 size-3 fill-[var(--gold)]">
                                    <path
                                        d="M336 192c0-79.5-64.5-144-144-144S48 112.5 48 192c0 16.3 7.7 42 24.7 75.4c16.4 32.2 38.8 66.4 62.1 98.3c20.3 27.9 40.7 53.3 57.2 73.1c16.5-19.8 36.9-45.2 57.2-73.1c23.2-31.9 45.6-66.2 62.1-98.3C328.3 234 336 208.3 336 192zm48 0c0 83.1-105.6 219-160.2 283.6C204.8 498.1 192 512 192 512s-12.8-13.9-31.8-36.4C105.6 411 0 275.1 0 192C0 86 86 0 192 0S384 86 384 192zm-160 0a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm-112 0a80 80 0 1 1 160 0 80 80 0 1 1 -160 0z" />
                                </svg>
                            </div>
                            <span class="xl:text-lg sm:text-sm font-bold text-[var(--text-secondary)]">آذربایجان شرقی
                                بناب</span>
                        </div>
                    </div>

                </div>
                <!-- address -->
                <!-- servis -->
                <div class="sm:w-1/2 w-full h-full flex flex-col justify-start items-center">
                    <div class="flex w-full h-full pb-15">
                        <div class="w-1/2 h-full flex flex-col gap-3 justify-start sm:items-start items-center">
                            <h5 class="xl:text-2xl lg:text-xl font-bold text-[var(--text)]">خدمات ما</h5>
                            <div
                                class="w-full flex flex-col gap-1 sm:items-start items-center justify-start xl:text-md lg:text-sm text-xs font-bold text-[#A4A4A5]">
                                <span>چاپ بنر و فلکس</span>
                                <span>چاپ بنر و فلکس</span>
                                <span>چاپ بنر و فلکس</span>
                                <span>چاپ بنر و فلکس</span>
                                <span>چاپ بنر و فلکس</span>
                            </div>
                        </div>
                        <div class="w-1/2 h-full flex flex-col gap-3 justify-start sm:items-start items-center">
                            <h5 class="xl:text-2xl lg:text-xl font-bold text-[var(--text)]">دسترسی سریع</h5>
                            <div
                                class="flex flex-col gap-1 sm:items-start items-center justify-start xl:text-md lg:text-sm text-xs font-bold text-[#A4A4A5]">
                                <span>چاپ بنر و فلکس</span>
                                <span>چاپ بنر و فلکس</span>
                                <span>چاپ بنر و فلکس</span>
                                <span>چاپ بنر و فلکس</span>
                                <span>چاپ بنر و فلکس</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-1 items-center justify-center sm:hidden lg:flex">
                        <p class="xl:text-[15px] lg:text-[12px] text-[13px] text-[var(--text-secondary)]">طراحی و توسعه
                            <span class="font-bold">شرکت اندیشه گران طراحان دیجیتال<span class="text-[var(--gold)]">(
                                    فائوس)</span> </span></p>
                        <span
                            class="xl:text-[15px] lg:text-[12px] text-[15px] font-bold text-[var(--gold)]">09147794595</span>
                    </div>
                </div>
                <!-- servis -->
            </div>

            <!-- news -->
            <div class="lg:w-7/24 w-full h-full flex flex-col justify-center items-start">
                <div class="flex flex-col gap-3 justify-center lg:items-start items-center">
                    <h5 class="xl:text-2xl lg:text-xl font-bold text-[var(--text)]">درباره ما</h5>
                    <p class="w-10/12 xl:text-lg text-sm font-bold text-[var(--text-secondary)]  max-lg:text-center">
                        چاپ <span class="text-[var(--gold)]">شاهکار</span> با سال‌ها تجربه در زمینه چاپ دیجیتال و
                        تبلیغات محیطی، همراه مطمئن شما در مسیر برندسازی و معرفی کسب‌وکار است.</p>
                </div>
                <!-- social_network_svg -->
                <div class="w-full py-6 flex items-center justify-center gap-10">
                    <div
                        class="p-2 rounded-full bg-[var(--background)] border border-[var(--gold)] flex justify-center items-center cursor-pointer scale transition_root">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                            class="sm:size-4 size-4 fill-[var(--gold)]">
                            <path
                                d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                        </svg>
                    </div>
                    <div
                        class="p-2 rounded-full bg-[var(--background)] border border-[var(--gold)] flex justify-center items-center cursor-pointer scale transition_root">
                        <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"
                            class="sm:size-4 size-4 fill-[var(--gold)]">
                            <path
                                d="M1764 11q33 24 27 64l-256 1536q-5 29-32 45-14 8-31 8-11 0-24-5l-527-215-298 327q-18 21-47 21-14 0-23-4-19-7-30-23.5t-11-36.5v-452l-472-193q-37-14-40-55-3-39 32-59l1664-960q35-21 68 2zm-342 1499l221-1323-1434 827 336 137 863-639-478 797z">
                            </path>
                        </svg>
                    </div>
                    <div
                        class="p-2 rounded-full bg-[var(--background)] border border-[var(--gold)] flex justify-center items-center cursor-pointer scale transition_root">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                            class="sm:size-4 size-4 fill-[var(--gold)]">
                            <path
                                d="M464 258.2c0 2.7-1 5.2-4.2 8c-3.8 3.1-10.1 5.8-17.8 5.8H344c-53 0-96 43-96 96c0 6.8 .7 13.4 2.1 19.8c3.3 15.7 10.2 31.1 14.4 40.6l0 0c.7 1.6 1.4 3 1.9 4.3c5 11.5 5.6 15.4 5.6 17.1c0 5.3-1.9 9.5-3.8 11.8c-.9 1.1-1.6 1.6-2 1.8c-.3 .2-.8 .3-1.6 .4c-2.9 .1-5.7 .2-8.6 .2C141.1 464 48 370.9 48 256S141.1 48 256 48s208 93.1 208 208c0 .7 0 1.4 0 2.2zm48 .5c0-.9 0-1.8 0-2.7C512 114.6 397.4 0 256 0S0 114.6 0 256S114.6 512 256 512c3.5 0 7.1-.1 10.6-.2c31.8-1.3 53.4-30.1 53.4-62c0-14.5-6.1-28.3-12.1-42c-4.3-9.8-8.7-19.7-10.8-29.9c-.7-3.2-1-6.5-1-9.9c0-26.5 21.5-48 48-48h97.9c36.5 0 69.7-24.8 70.1-61.3zM160 256a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm0-64a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm128-64a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm64 64a32 32 0 1 0 0-64 32 32 0 1 0 0 64z" />
                        </svg>
                    </div>
                    <div
                        class="p-2 rounded-full bg-[var(--background)] border border-[var(--gold)] flex justify-center items-center cursor-pointer scale transition_root">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                            class="sm:size-4 size-4 fill-[var(--gold)]">
                            <path
                                d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                            </path>
                        </svg>
                    </div>
                </div>
                <!-- social_network_svg -->
            </div>
            <!-- news -->
            <div class="mx-auto flex flex-col gap-1 items-center justify-center lg:hidden max-sm:hidden">
                <p class="text-[17px] text-[var(--text-secondary)]">طراحی و توسعه <span class="font-bold">شرکت اندیشه
                        گران طراحان دیجیتال<span class="text-[var(--gold)]">( فائوس)</span> </span></p>
                <span class="text-[17px] font-bold text-[var(--gold)]">09147794595</span>
            </div>
        </section>
    </footer>


    <script>
        let hamburger_menu_item = document.getElementById('hamburger_menu_item')
        let close_hamburger_document = document.getElementById('close_hamburger_document')

        function hamburger_menu(item) {
            if (item == 'open') {
                hamburger_menu_item.classList.remove('translate-x-full')
                hamburger_menu_item.classList.add('translate-x-0')
                close_hamburger_document.classList.remove('invisible')
                close_hamburger_document.classList.remove('opacity-0')
                // close_search
                pup_up_search_item.classList.add('h-0')
                pup_up_search_item.classList.remove('h-dvh')
                pup_up_search_item_box.classList.add('h-0')
                pup_up_search_item_box.classList.remove('h-1/2')
                // close_search

            }
            if (item == 'close') {
                hamburger_menu_item.classList.add('translate-x-full')
                hamburger_menu_item.classList.remove('translate-x-0')
                close_hamburger_document.classList.add('invisible')
                close_hamburger_document.classList.add('opacity-0')
            }
        }
        ////////
        let servis_pup_up_hover = document.querySelector('.servis_pup_up_hover')
        let servis_pup_up_item = document.querySelector('.servis_pup_up_item')
        let servis_pup_up_hover_close = document.querySelector('.servis_pup_up_hover_close')

        servis_pup_up_hover.addEventListener('mouseenter', function() {
            servis_pup_up_item.classList.remove('invisible')
            servis_pup_up_item.classList.remove('opacity-0')
        })
        servis_pup_up_item.addEventListener('mouseenter', function() {
            servis_pup_up_item.classList.remove('invisible')
            servis_pup_up_item.classList.remove('opacity-0')
        })
        servis_pup_up_hover.addEventListener('mouseleave', function() {
            servis_pup_up_item.classList.add('invisible')
            servis_pup_up_item.classList.add('opacity-0')
        })
        servis_pup_up_hover_close.addEventListener('mouseenter', function() {
            servis_pup_up_item.classList.add('invisible')
            servis_pup_up_item.classList.add('opacity-0')
        })
        ////////

        let pu_up_servis_hamburger_menu = document.querySelectorAll('.pu_up_servis_hamburger_menu')
        pu_up_servis_hamburger_menu.forEach((item) => {
            item.addEventListener('click', function() {
                console.log('skdf')
                item.nextElementSibling.classList.toggle('h-0')
                item.nextElementSibling.classList.toggle('h-30')
                item.children[1].classList.toggle('rotate-180')
            })
        })

        let play_icon_vidio = document.getElementById('play_icon_vidio')

        function vidio_onclic_play() {
            console.log('slfls')
            play_icon_vidio.classList.toggle('invisible')
            play_icon_vidio.classList.toggle('opacity-0')

        }
    </script>
</body>

</html>
