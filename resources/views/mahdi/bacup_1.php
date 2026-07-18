<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shahkar</title>
    <script src="{{asset('assets/js/tailwind.js')}}"></script>
    <style>
        @import url({{asset('assets/css/fontiran.css')}});

        * {
            font-family: IRANSansXFaNum;
        }

        .shadow_boxs {
            box-shadow: 0px 0px 6px 1px #f2f2f2;

        }

        .shadow_boxs_form_sub_heder {
            box-shadow: 0px 0px 0px 2px #f2f2f2;
        }

        .shadow_item {
            box-shadow: 0px 0px 6px -2px #d8d8d8;
        }
        .gradient_box_property{
            background: linear-gradient(318deg,rgba(51, 16, 113, 1) 70%, rgba(168, 16, 141, 1) 98%);
        }
        /*.animaiton_rotate:hover .animaiton_rotate_item{*/
        /*    !*transform: rotate(10deg);*!*/
        /*    transform: translate(10px,-10px);*/
        /*}*/
        /*.animaiton_rotate:hover .animaiton_rotate_item{*/
        /*    !*transform: rotate(10deg);*!*/
        /*    transform: translate(10px,-10px);*/
        /*}*/

        /*.animaiton_rotate:active .animaiton_rotate_item{*/
        /*    !*transform: rotate(10deg);*!*/
        /*    !*animation:rotate_sambol 1s ease-in;*!*/
        /*    animation:rotate_sambol 1s 1 ease-out;*/
        /*    !*transition: all 1s ease-in 20ms;*!*/

        /*}*/
        /*@keyframes rotate_sambol{*/
        /*    0%{*/
        /*        transform: translate(0px,0px);*/
        /*    }*/
        /*    100%{*/
        /*        transform: translate(10px,-10px);*/
        /*    }*/
        /*}*/


    </style>
</head>

<body class=" max-w-[1700px] min-w-full mx-auto">

<header class="w-full lg:h-dvh flex flex-col items-center ">
    <div class="w-full lg:h-1/12 flex flex-col rounded-4xl pb-4 ">

        <div class="w-full fixed lg:top-1 top-0 flex justify-center items-center z-5 max-lg:bg-white max-lg:shadow_boxs">
            <!-- {{-- header+menu_start--}} -->
            <div class="w-11/12 h-full max-lg:py-2 lg:py-4 lg:rounded-2xl flex justify-between xl:justify-end bg-white lg:shadow_boxs">
                <div class="w-full flex flex-col gap-4 justify-between max-lg:py-4">
                    <div class="w-full h-full flex items-center justify-between ">

                        <!-- hamburger_menu_svg -->
                        <div class="min-w-[68px] flex flex-col gap-1 items-start justify-center lg:hidden"
                             onclick="hamburger_menu('open')">
                            <span class="w-7 h-1 bg-black rounded-full"></span>
                            <span class="w-7 h-1 bg-black rounded-full"></span>
                            <span class="w-7 h-1 bg-black rounded-full"></span>
                        </div>
                        <!-- hamburger_menu_svg -->
                        <div class=" h-full xl:gap-20 flex  gap-12 items-center max-lg:hidden ">
                            <ul class="h-full flex xl:gap-12 gap-8 text-xl font-bold" style="font-weight: 600;">
                                <li
                                        class="h-full flex justify-center items-center border-b-2 border-red-500 text-red-500 cursor-pointer">
                                    خانه
                                </li>
                                <li class="h-full flex justify-center items-center cursor-pointer">محصولات</li>
                                <li class="h-full flex justify-center items-center text-nowrap cursor-pointer">درباره ما</li>
                                <li class="h-full flex justify-center items-center text-nowrap cursor-pointer">تماس با ما</li>
                            </ul>
                            <!-- search_box_start -->
                            <div class="xl:min-w-11/24 relative flex justify-center items-center">

                                <div
                                        class="w-full bg-white cursor-pointer rounded-full flex gap-3 justify-between items-center shadow_boxs px-6 py-3">
                                    <div class="flex gap-4 items-center">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                 class="size-4">
                                                <path
                                                        d="M368 208A160 160 0 1 0 48 208a160 160 0 1 0 320 0zM337.1 371.1C301.7 399.2 256.8 416 208 416C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208c0 48.8-16.8 93.7-44.9 129.1L505 471c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L337.1 371.1z" />
                                            </svg>
                                        </div>
                                        <input type="text" placeholder="کالای مورد نظر خود را جستجو کنید."
                                               class="outline-none text-sm font-bold"
                                               onclick="search_focus_box('open')">
                                    </div>
                                    <!-- {{-- <div>--}}
                                    {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"
                                        class="size-4">--}}
                                    {{-- <path--}} {{--
                                                    d="M378.4 71.4c8.5-10.1 7.2-25.3-2.9-33.8s-25.3-7.2-33.8 2.9L192 218.7 42.4 40.6C33.9 30.4 18.7 29.1 8.6 37.6S-2.9 61.3 5.6 71.4L160.7 256 5.6 440.6c-8.5 10.2-7.2 25.3 2.9 33.8s25.3 7.2 33.8-2.9L192 293.3 341.6 471.4c8.5 10.1 23.7 11.5 33.8 2.9s11.5-23.7 2.9-33.8L223.3 256l155-184.6z" />--}}
                                    {{-- </svg>--}}
                                    {{-- </div>--}} -->
                                </div>
                                <!-- {{--focus_search_item--}} -->
                                <div class="w-full h-dvh fixed top-0 right-0 z-4 bg-black/40 invisible opacity-0  transition-all duration-300"
                                     onclick="search_focus_box('close')" id="search_focus_box_item_close_document">
                                </div>
                                <div class="w-full h-0 overflow-hidden bg-white absolute top-0 z-4 right-auto left-auto rounded-xl  transition-all duration-300"
                                     id="search_focus_box_item">
                                    <div
                                            class="w-full py-2 px-4 rounded-full bg-white border-2 border-[#efeff0] flex justify-between items-center cursor-pointer">
                                        <input type="text" placeholder="کالای مورد نظر خود را جستجو کنید."
                                               class="outline-none text-[13px] font-bold">
                                        <div class="px-3 py-2 rounded-lg font-bold text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                 class="size-4">
                                                <path
                                                        d="M368 208A160 160 0 1 0 48 208a160 160 0 1 0 320 0zM337.1 371.1C301.7 399.2 256.8 416 208 416C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208c0 48.8-16.8 93.7-44.9 129.1L505 471c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L337.1 371.1z">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <!-- {{--focus_search_item--}} -->
                            </div>


                            <!-- search_box_end -->
                        </div>
                        <div class="md:w-1/12 max-md:w-2/12 h-full flex items-center lg:hidden">
                            <img src="{{asset('assets/img/logo.png')}}" alt="" class="w-full object-fit cursor-pointer">
                        </div>
                        <div class="h-full flex items-center justify-between gap-5">
                            <!-- {{--search_svg--}} -->
                            <div class="lg:hidden cursor-pointer" onclick="pup_up_search('open')">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="size-5">
                                    <path
                                            d="M368 208A160 160 0 1 0 48 208a160 160 0 1 0 320 0zM337.1 371.1C301.7 399.2 256.8 416 208 416C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208c0 48.8-16.8 93.7-44.9 129.1L505 471c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L337.1 371.1z" />
                                </svg>
                            </div>
                            <!-- {{-- search_svg--}} -->
                            <div class="lg:px-3 py-2 lg:border-l-2 lg:border-[#c2c2c2] relative pr-2 cursor-pointer">
                                    <span
                                            class="w-4 h-4 bg-red-500 rounded-full absolute right-0 top-0  flex justify-center items-center text-[12px] text-white font-bold">2</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="size-6"
                                     fill="#000">
                                    <path
                                            d="M16 0H0V32H16 67.2l77.2 339.5 2.8 12.5H160 496h16V352H496 172.8l-14.5-64H496L566 64l10-32H542.5 100L95.6 12.5 92.8 0H80 16zm91.3 64H532.5l-60 192H151L107.3 64zM184 432a24 24 0 1 1 0 48 24 24 0 1 1 0-48zm0 80a56 56 0 1 0 0-112 56 56 0 1 0 0 112zm248-56a24 24 0 1 1 48 0 24 24 0 1 1 -48 0zm80 0a56 56 0 1 0 -112 0 56 56 0 1 0 112 0z">
                                    </path>
                                </svg>
                            </div>
                            <div
                                    class="h-2/3 bg-white rounded-full flex justify-between items-center shadow_boxs px-6 gap-4 max-lg:hidden cursor-pointer">
                                <span class="font-bold" style="font-weight: 600;">ورود / ثبت نام</span>

                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="size-4">
                                        <path
                                                d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- hamburger_menu_item -->
            <section
                    class="w-full h-dvh fixed top-0 right-0 z-5 lg:hidden translate-x-full transition-all duration-300"
                    id="hamburger_menu_item">
                <div class="w-full h-full bg-black/40 absolute top-0 right-0 invisible opacity-0  transition-all duration-300 delay-190"
                     onclick="hamburger_menu('close') " id="close_hamburger_document"></div>
                <div
                        class="md:w-6/12 sm:w-7/12 w-10/12 h-full bg-white rounded-l-4xl flex flex-col gap-5  justify-between pt-9 relative pb-5">
                    <div class="w-full flex flex-col gap-10">
                        <div class="absolute top-9 right-6" onclick="hamburger_menu('close')">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="size-5">
                                <path
                                        d="M378.4 71.4c8.5-10.1 7.2-25.3-2.9-33.8s-25.3-7.2-33.8 2.9L192 218.7 42.4 40.6C33.9 30.4 18.7 29.1 8.6 37.6S-2.9 61.3 5.6 71.4L160.7 256 5.6 440.6c-8.5 10.2-7.2 25.3 2.9 33.8s25.3 7.2 33.8-2.9L192 293.3 341.6 471.4c8.5 10.1 23.7 11.5 33.8 2.9s11.5-23.7 2.9-33.8L223.3 256l155-184.6z">
                                </path>
                            </svg>
                        </div>
                        <div class="w-full flex flex-col gap-3 items-center">
                            <img src="{{asset('assets/img/logo.png')}}" alt="" class="w-4/12">
                            <h4 class="text-[20px] text-[#868686] font-bold ">چاپخانه آنلاین شاهکار</h4>
                        </div>
                        <!-- {{-- <span class="w-full h-[1px] bg-[#e6e6e6]"></span>--}} -->
                        <div class="w-11/12 flex flex-col gap-3 items-center pr-5">
                            <div
                                    class="w-full py-3 border-b-1 border-[#e6e6e6] flex items-center justify-start md:gap-5 gap-3 px-3">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                         class="size-6 fill-red-500">
                                        <path
                                                d="M272.5 5.7c9-7.6 22.1-7.6 31.1 0l264 224c10.1 8.6 11.4 23.7 2.8 33.8s-23.7 11.3-33.8 2.8L512 245.5V432c0 44.2-35.8 80-80 80H144c-44.2 0-80-35.8-80-80V245.5L39.5 266.3c-10.1 8.6-25.3 7.3-33.8-2.8s-7.3-25.3 2.8-33.8l264-224zM288 55.5L112 204.8V432c0 17.7 14.3 32 32 32h48V312c0-22.1 17.9-40 40-40H344c22.1 0 40 17.9 40 40V464h48c17.7 0 32-14.3 32-32V204.8L288 55.5zM240 464h96V320H240V464z" />
                                    </svg>
                                </div>
                                <span class="text-[15px] md:text-lg text-red-500 font-bold">خانه</span>
                            </div>
                            <div
                                    class="w-full py-3 border-b-1 border-[#e6e6e6] flex items-center justify-start gap-4 px-3">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="size-6">
                                        <path
                                                d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z" />
                                    </svg>
                                </div>
                                <span class="text-[15px] md:text-lg font-bold" style="font-weight: 600;">ورود / ثبت
                                        نام</span>
                            </div>
                            <div
                                    class="w-full py-3 border-b-1 border-[#e6e6e6] flex items-center justify-start gap-4 px-3">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="size-6">
                                        <path
                                                d="M258.8 50.7c-1.8-.7-3.8-.7-5.7 0L63.6 122.6 256 198.2l192.4-75.6L258.8 50.7zM48 377.9c0 3.3 2.1 6.3 5.2 7.5L232 453.2V240.4L48 168.1V377.9zm232 75.3l178.8-67.8c3.1-1.2 5.2-4.2 5.2-7.5V168.1L280 240.4V453.2zM236.1 5.9c12.8-4.9 26.9-4.9 39.7 0l200 75.9C497.6 90 512 110.8 512 134.1V377.9c0 23.3-14.4 44.1-36.1 52.4l-200 75.9c-12.8 4.9-26.9 4.9-39.7 0l-200-75.9C14.4 422 0 401.2 0 377.9V134.1C0 110.8 14.4 90 36.1 81.7l200-75.9z" />
                                    </svg>
                                </div>
                                <span class="text-[15px] md:text-lg font-bold"
                                      style="font-weight: 600;">محصولات</span>
                            </div>
                            <div
                                    class="w-full py-3 border-b-1 border-[#e6e6e6] flex items-center justify-start gap-4 px-3">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="size-6">
                                        <path
                                                d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z" />
                                    </svg>
                                </div>
                                <span class="text-[15px] md:text-lg font-bold" style="font-weight: 600;">درباره
                                        ما</span>
                            </div>
                            <div class="w-full py-3 flex items-center justify-start gap-4 px-3">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="size-6">
                                        <path
                                                d="M375.8 275.2c-16.4-7-35.4-2.4-46.7 11.4l-33.2 40.6c-46-26.7-84.4-65.1-111.1-111.1L225.3 183c13.8-11.3 18.5-30.3 11.4-46.7l-48-112C181.2 6.7 162.3-3.1 143.6 .9l-112 24C13.2 28.8 0 45.1 0 64v0C0 295.2 175.2 485.6 400.1 509.5c9.8 1 19.6 1.8 29.6 2.2c0 0 0 0 0 0c0 0 .1 0 .1 0c6.1 .2 12.1 .4 18.2 .4l0 0c18.9 0 35.2-13.2 39.1-31.6l24-112c4-18.7-5.8-37.6-23.4-45.1l-112-48zM441.5 464C225.8 460.5 51.5 286.2 48.1 70.5l99.2-21.3 43 100.4L154.4 179c-18.2 14.9-22.9 40.8-11.1 61.2c30.9 53.3 75.3 97.7 128.6 128.6c20.4 11.8 46.3 7.1 61.2-11.1l29.4-35.9 100.4 43L441.5 464zM48 64v0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0s0 0 0 0">
                                        </path>
                                    </svg>
                                </div>
                                <span class="text-[15px] md:text-lg font-bold" style="font-weight: 600;">تماس با
                                        ما</span>
                            </div>
                        </div>
                    </div>
                    <div class="w-full border-t-1 border-[#e6e6e6] flex flex-col items-center justify-between">
                        <div class="w-full py-6 flex items-center justify-center gap-10">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                     class="sm:size-6 size-5">
                                    <path
                                            d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                                </svg>
                            </div>
                            <div>
                                <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"
                                     class="sm:size-6 size-5">
                                    <path
                                            d="M1764 11q33 24 27 64l-256 1536q-5 29-32 45-14 8-31 8-11 0-24-5l-527-215-298 327q-18 21-47 21-14 0-23-4-19-7-30-23.5t-11-36.5v-452l-472-193q-37-14-40-55-3-39 32-59l1664-960q35-21 68 2zm-342 1499l221-1323-1434 827 336 137 863-639-478 797z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                     class="sm:size-6 size-5">
                                    <path
                                            d="M464 258.2c0 2.7-1 5.2-4.2 8c-3.8 3.1-10.1 5.8-17.8 5.8H344c-53 0-96 43-96 96c0 6.8 .7 13.4 2.1 19.8c3.3 15.7 10.2 31.1 14.4 40.6l0 0c.7 1.6 1.4 3 1.9 4.3c5 11.5 5.6 15.4 5.6 17.1c0 5.3-1.9 9.5-3.8 11.8c-.9 1.1-1.6 1.6-2 1.8c-.3 .2-.8 .3-1.6 .4c-2.9 .1-5.7 .2-8.6 .2C141.1 464 48 370.9 48 256S141.1 48 256 48s208 93.1 208 208c0 .7 0 1.4 0 2.2zm48 .5c0-.9 0-1.8 0-2.7C512 114.6 397.4 0 256 0S0 114.6 0 256S114.6 512 256 512c3.5 0 7.1-.1 10.6-.2c31.8-1.3 53.4-30.1 53.4-62c0-14.5-6.1-28.3-12.1-42c-4.3-9.8-8.7-19.7-10.8-29.9c-.7-3.2-1-6.5-1-9.9c0-26.5 21.5-48 48-48h97.9c36.5 0 69.7-24.8 70.1-61.3zM160 256a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm0-64a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm128-64a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm64 64a32 32 0 1 0 0-64 32 32 0 1 0 0 64z" />
                                </svg>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                     class="sm:size-6 size-5">
                                    <path
                                            d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <div
                                class="w-full h-1/3 flex border-t-1 border-[#e6e6e6] items-center justify-center gap-5">
                            <span class="text-[13px] md:text-lg text-[#515151]">پشتیبانی:09925718265</span>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-6" viewBox="0 0 64 64"
                                     fill="none">
                                    <defs>
                                        <linearGradient id="stroke" x1="12" y1="54" x2="52" y2="10"
                                                        gradientUnits="userSpaceOnUse">
                                            <stop offset="0" stop-color="#E53935"></stop>
                                            <stop offset="0.35" stop-color="#2F2F2F"></stop>
                                            <stop offset="0.7" stop-color="#2F2F2F"></stop>
                                            <stop offset="1" stop-color="#E53935"></stop>
                                        </linearGradient>
                                    </defs>

                                    <!-- Headband -->
                                    <path d="M18 28C18 20.3 24.3 14 32 14C39.7 14 46 20.3 46 28"
                                          stroke="url(#stroke)" stroke-width="3.5" stroke-linecap="round" fill="none">
                                    </path>

                                    <!-- Left ear cup -->
                                    <path
                                            d="M18 28H16C13.8 28 12 29.8 12 32V40C12 42.2 13.8 44 16 44H19C20.7 44 22 42.7 22 41V31C22 29.3 20.7 28 19 28H18Z"
                                            stroke="url(#stroke)" stroke-width="3.5" stroke-linejoin="round"
                                            fill="none"></path>

                                    <!-- Right ear cup -->
                                    <path
                                            d="M46 28H48C50.2 28 52 29.8 52 32V40C52 42.2 50.2 44 48 44H45C43.3 44 42 42.7 42 41V31C42 29.3 43.3 28 45 28H46Z"
                                            stroke="url(#stroke)" stroke-width="3.5" stroke-linejoin="round"
                                            fill="none"></path>

                                    <!-- Mic -->
                                    <path d="M42 44V47C42 49.2 40.2 51 38 51H35" stroke="url(#stroke)"
                                          stroke-width="3.5" stroke-linecap="round" fill="none"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- hamburger_menu_item -->

            <!-- {{--header+menu_end--}} -->
        </div>
        <!-- search_mobile -->
        <div class="w-full h-0 fixed top-0 right-0 lg:hidden z-4 flex items-start justify-center overflow-hidden transition-all duration-300" id="pup_up_search_item">
            <div class="w-full h-full bg-black/30 absolute top-0 right-0 -z-1" onclick="pup_up_search('close')"></div>
            <div class="lg:w-11/12 w-full mx-auto h-0 overflow-hidden bg-white rounded-xl flex justify-between items-start  shadow_boxs px-3 pt-2 lg:hidden transition-all duration-300"
                 id="pup_up_search_item_box">
                <div class="w-full flex  gap-2 justify-center items-center">


                    <div
                            class="w-full py-2 px-4 rounded-full bg-white border-2 border-[#efeff0] flex justify-between items-center">
                        <input type="text" placeholder="کالای مورد نظر خود را جستجو کنید."
                               class="outline-none text-[13px] font-bold">
                        <div class="px-3 py-2 rounded-lg font-bold text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="size-4">
                                <path
                                        d="M368 208A160 160 0 1 0 48 208a160 160 0 1 0 320 0zM337.1 371.1C301.7 399.2 256.8 416 208 416C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208c0 48.8-16.8 93.7-44.9 129.1L505 471c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L337.1 371.1z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <div onclick="pup_up_search('close') ">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="size-4">
                            <path
                                    d="M378.4 71.4c8.5-10.1 7.2-25.3-2.9-33.8s-25.3-7.2-33.8 2.9L192 218.7 42.4 40.6C33.9 30.4 18.7 29.1 8.6 37.6S-2.9 61.3 5.6 71.4L160.7 256 5.6 440.6c-8.5 10.2-7.2 25.3 2.9 33.8s25.3 7.2 33.8-2.9L192 293.3 341.6 471.4c8.5 10.1 23.7 11.5 33.8 2.9s11.5-23.7 2.9-33.8L223.3 256l155-184.6z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <!-- search_mobile -->
    </div>


    <!-- sub_heder_start -->
    <div class="w-full xl:h-10/12 lg:h-full flex flex-col gap-2 items-center lg:items-start justify-between xl:mt-12.5 mt-12 relative">
        <div class="w-full h-full relative">
            <img src="{{asset('assets/img/background_hedeer.jpg')}}" alt="" class="bg-center min-w-full lg:max-h-full lg:min-h-full hidden lg:flex">
            <img src="{{asset('assets/img/background_heder_mobile.png')}}" alt="" class="w-full h-140 lg:hidden">
            <!-- bottoms -->
            <div class="w-full absolute bottom-0 right-0 flex flex-col gap-5 items-center justify-end py-5 lg:hidden">
                <a href="#" class="w-11/12 py-3 bg-blue-500 flex gap-3 justify-center items-center rounded-full bg-[#de2691]" style="background: linear-gradient(163deg,rgba(222, 38, 145, 1) 0%, rgba(119, 15, 129, 1) 64%);">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="size-5" fill="white">
                            <path d="M16 0H0V32H16 67.2l77.2 339.5 2.8 12.5H160 496h16V352H496 172.8l-14.5-64H496L566 64l10-32H542.5 100L95.6 12.5 92.8 0H80 16zm91.3 64H532.5l-60 192H151L107.3 64zM184 432a24 24 0 1 1 0 48 24 24 0 1 1 0-48zm0 80a56 56 0 1 0 0-112 56 56 0 1 0 0 112zm248-56a24 24 0 1 1 48 0 24 24 0 1 1 -48 0zm80 0a56 56 0 1 0 -112 0 56 56 0 1 0 112 0z">
                            </path>
                        </svg>
                    </div>
                    <span class="text-white font-bold">سفارش آنلاین</span>
                </a>
                <a href="#" class="w-11/12 py-3 flex gap-3 justify-center items-center rounded-full border-2 border-[#e2be5a] bg-white">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="size-5 fill-[#e2be5a]"><path d="M288 80c-65.2 0-118.8 29.6-159.9 67.7C89.6 183.5 63 226 49.4 256c13.6 30 40.2 72.5 78.6 108.3C169.2 402.4 222.8 432 288 432s118.8-29.6 159.9-67.7C486.4 328.5 513 286 526.6 256c-13.6-30-40.2-72.5-78.6-108.3C406.8 109.6 353.2 80 288 80zM95.4 112.6C142.5 68.8 207.2 32 288 32s145.5 36.8 192.6 80.6c46.8 43.5 78.1 95.4 93 131.1c3.3 7.9 3.3 16.7 0 24.6c-14.9 35.7-46.2 87.7-93 131.1C433.5 443.2 368.8 480 288 480s-145.5-36.8-192.6-80.6C48.6 356 17.3 304 2.5 268.3c-3.3-7.9-3.3-16.7 0-24.6C17.3 208 48.6 156 95.4 112.6zM288 336c44.2 0 80-35.8 80-80s-35.8-80-80-80c-.7 0-1.3 0-2 0c1.3 5.1 2 10.5 2 16c0 35.3-28.7 64-64 64c-5.5 0-10.9-.7-16-2c0 .7 0 1.3 0 2c0 44.2 35.8 80 80 80zm0-208a128 128 0 1 1 0 256 128 128 0 1 1 0-256z"/></svg>
                    </div>
                    <span class="font-bold">مشاهده نمونه کار ها</span>
                </a>

            </div>
            <!-- bottoms -->
        </div>

        <!-- form_order -->
        <div class="lg:w-12/14 w-11/12 max-lg:py-3 flex flex-col items-end justify-between py-5 lg:absolute lg:top-0 lg:right-0">
            <div class="lg:w-4/12 w-full bg-white rounded-4xl flex flex-col justify-between gap-3 items-center xl:px-7 px-4 py-4 shadow_boxs">
                <div class="flex flex-col items-center justify-center">

                    <div class="flex items-center justify-center gap-3">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="xl:size-5 size-3 size-5"
                                 viewBox="0 0 24 24" fill="red">

                                <path d="M14 2L5 13h5v9l9-11h-5l0-9z" />
                            </svg>
                        </div>
                        <span class="xl:text-[28px] lg:text-[23px] text-[28px] font-bold">ثبت سفارش <span
                                    class="text-red-500">سریع</span></span>
                    </div>
                    <p class="xl:text-[13px] lg:text-[10px] text-[13px] text-[#515151] font-bold">سفارش خود را
                        در کمتر از 1 دقیقه ثبت کنید</p>
                </div>
                <div class="w-full flex gap-2 items-center justify-between">
                    <div class="w-1/2 bg-white rounded-lg shadow_boxs_form_sub_heder flex gap-4 items-center px-4 py-3 lg:py-1.5 cursor-pointer">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="size-4">
                                <path
                                        d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z" />
                            </svg>
                        </div>
                        <input type="text" class="outline-none w-full xl:text-sm sm:text-[9px] text-[12px] font-bold"
                               placeholder="نام و نام خانوادگی">
                    </div>
                    <div
                            class="w-1/2 bg-white rounded-lg shadow_boxs_form_sub_heder flex gap-4 items-center px-4 py-3 lg:py-1.5 cursor-pointer">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="size-4">
                                <path
                                        d="M375.8 275.2c-16.4-7-35.4-2.4-46.7 11.4l-33.2 40.6c-46-26.7-84.4-65.1-111.1-111.1L225.3 183c13.8-11.3 18.5-30.3 11.4-46.7l-48-112C181.2 6.7 162.3-3.1 143.6 .9l-112 24C13.2 28.8 0 45.1 0 64v0C0 295.2 175.2 485.6 400.1 509.5c9.8 1 19.6 1.8 29.6 2.2c0 0 0 0 0 0c0 0 .1 0 .1 0c6.1 .2 12.1 .4 18.2 .4l0 0c18.9 0 35.2-13.2 39.1-31.6l24-112c4-18.7-5.8-37.6-23.4-45.1l-112-48zM441.5 464C225.8 460.5 51.5 286.2 48.1 70.5l99.2-21.3 43 100.4L154.4 179c-18.2 14.9-22.9 40.8-11.1 61.2c30.9 53.3 75.3 97.7 128.6 128.6c20.4 11.8 46.3 7.1 61.2-11.1l29.4-35.9 100.4 43L441.5 464zM48 64v0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0s0 0 0 0" />
                            </svg>
                        </div>
                        <input type="text" class="outline-none w-full xl:text-sm text-[12px] font-bold"
                               placeholder="شماره تماس">
                    </div>
                </div>
                <div
                        class="w-full bg-white rounded-lg shadow_boxs_form_sub_heder flex gap-4 items-center justify-between px-4 py-3 lg:py-1.5 cursor-pointer">
                    <div class=" flex gap-4 items-center">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="size-4">
                                <path
                                        d="M288 0c-8.5 0-17 1.7-24.8 5.1L53.9 94.8C40.6 100.5 32 113.5 32 128s8.6 27.5 21.9 33.2l209.3 89.7c7.8 3.4 16.3 5.1 24.8 5.1s17-1.7 24.8-5.1l209.3-89.7c13.3-5.7 21.9-18.8 21.9-33.2s-8.6-27.5-21.9-33.2L312.8 5.1C305 1.7 296.5 0 288 0zm-5.9 49.2C284 48.4 286 48 288 48s4 .4 5.9 1.2L477.7 128 293.9 206.8c-1.9 .8-3.9 1.2-5.9 1.2s-4-.4-5.9-1.2L98.3 128 282.1 49.2zM53.9 222.8C40.6 228.5 32 241.5 32 256s8.6 27.5 21.9 33.2l209.3 89.7c7.8 3.4 16.3 5.1 24.8 5.1s17-1.7 24.8-5.1l209.3-89.7c13.3-5.7 21.9-18.8 21.9-33.2s-8.6-27.5-21.9-33.2l-31.2-13.4L430 235.5 477.7 256 293.9 334.8c-1.9 .8-3.9 1.2-5.9 1.2s-4-.4-5.9-1.2L98.3 256 146 235.5 85.1 209.4 53.9 222.8zm0 128C40.6 356.5 32 369.5 32 384s8.6 27.5 21.9 33.2l209.3 89.7c7.8 3.4 16.3 5.1 24.8 5.1s17-1.7 24.8-5.1l209.3-89.7c13.3-5.7 21.9-18.8 21.9-33.2s-8.6-27.5-21.9-33.2l-31.2-13.4L430 363.5 477.7 384 293.9 462.8c-1.9 .8-3.9 1.2-5.9 1.2s-4-.4-5.9-1.2L98.3 384 146 363.5 85.1 337.4 53.9 350.8z" />
                            </svg>
                        </div>
                        <span class="xl:text-sm text-[12px] font-bold">نوع سفارش را انتخاب کنید</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="size-4">
                            <path
                                    d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z" />
                        </svg>
                    </div>
                </div>
                <div
                        class="w-full bg-white rounded-lg shadow_boxs_form_sub_heder flex gap-4 items-start justify-between p-4 cursor-pointer">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="size-4">
                            <path
                                    d="M375.8 275.2c-16.4-7-35.4-2.4-46.7 11.4l-33.2 40.6c-46-26.7-84.4-65.1-111.1-111.1L225.3 183c13.8-11.3 18.5-30.3 11.4-46.7l-48-112C181.2 6.7 162.3-3.1 143.6 .9l-112 24C13.2 28.8 0 45.1 0 64v0C0 295.2 175.2 485.6 400.1 509.5c9.8 1 19.6 1.8 29.6 2.2c0 0 0 0 0 0c0 0 .1 0 .1 0c6.1 .2 12.1 .4 18.2 .4l0 0c18.9 0 35.2-13.2 39.1-31.6l24-112c4-18.7-5.8-37.6-23.4-45.1l-112-48zM441.5 464C225.8 460.5 51.5 286.2 48.1 70.5l99.2-21.3 43 100.4L154.4 179c-18.2 14.9-22.9 40.8-11.1 61.2c30.9 53.3 75.3 97.7 128.6 128.6c20.4 11.8 46.3 7.1 61.2-11.1l29.4-35.9 100.4 43L441.5 464zM48 64v0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0s0 0 0 0" />
                        </svg>
                    </div>
                    <!-- <input type="text" class="outline-none w-full text-sm font-bold" placeholder="شماره تماس"> -->
                    <textarea name="" rows="2" class="outline-none w-full xl:text-sm text-[12px] font-bold cursor-pointer"
                              placeholder="توضیحات سفارش متزاز ، جنس طرح و ...."></textarea>
                </div>
                <div
                        class="w-full py-5 lg:py-2 bg-[#f7f7f7] rounded-lg border-2 border-[#dedede] flex gap-4 items-start justify-between relative cursor-pointer">

                    <input type="file" id="file" class="invisible">
                    <label for="file"
                           class="w-full h-full absolute top-0 Left-0 flex items-center justify-end cursor-pointer">
                        <div class="w-full  h-full flex  items-center justify-between  px-4 py-5 lg:py-1.5">
                            <span class="size-5"></span>
                            <div class="flex flex-col justify-center items-center">
                                <p class="xl:text-sm lg:text-[12px] sm:text-[17px] text-[13px] font-bold">فایل
                                    خود را انتخاب کنید یا اینجا بکشید</p>
                                <p
                                        class="xl:text-[9px] lg:text-[9px] sm:text-[14px] text-[11px] text-[#918c8c]">
                                    10MBحداگثر حجم :JPG,PNG,PDF,AI,CDR,ZIP</p>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"
                                     class="lg:size-5 xl:size-7 size-5">
                                    <path
                                            d="M354.9 121.7c13.8 16 36.5 21.1 55.9 12.5c8.9-3.9 18.7-6.2 29.2-6.2c39.8 0 72 32.2 72 72c0 4-.3 7.9-.9 11.7c-3.5 21.6 8.1 42.9 28.1 51.7C570.4 276.9 592 308 592 344c0 46.8-36.6 85.2-82.8 87.8c-.6 0-1.3 .1-1.9 .2H504 144c-53 0-96-43-96-96c0-41.7 26.6-77.3 64-90.5c19.2-6.8 32-24.9 32-45.3l0-.2v0 0c0-66.3 53.7-120 120-120c36.3 0 68.8 16.1 90.9 41.7zM512 480v-.2c71.4-4.1 128-63.3 128-135.8c0-55.7-33.5-103.7-81.5-124.7c1-6.3 1.5-12.8 1.5-19.3c0-66.3-53.7-120-120-120c-17.4 0-33.8 3.7-48.7 10.3C360.4 54.6 314.9 32 264 32C171.2 32 96 107.2 96 200l0 .2C40.1 220 0 273.3 0 336c0 79.5 64.5 144 144 144H464h40 8zM223 255c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l39-39V384c0 13.3 10.7 24 24 24s24-10.7 24-24V249.9l39 39c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-80-80c-9.4-9.4-24.6-9.4-33.9 0l-80 80z" />
                                </svg>
                            </div>

                        </div>
                    </label>
                </div>
                <div class="w-full py-3 lg:py-1.5 bg-red-500 flex gap-3 items-center justify-center rounded-xl cursor-pointer hover:bg-red-400 active:bg-red-400 transition-all duratiron-300 ">
                    <span class="xl:text-lg lg:text-[17px] text-lg font-bold text-white">ارسال سفارش</span>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                             viewBox="0 0 20 20" id="entypo-direction" width="18" height="18" fill="white">
                            <g>
                                <path
                                        d="M18.06 1.941c-.586-.586-1.144-.033-3.041.879C9.944 5.259 1.1 10.216 1.1 10.216L8.699 11.3l1.085 7.599s4.958-8.843 7.396-13.916c.912-1.898 1.465-2.456.88-3.042zm-1.824 1.955l-5.519 10.247-.561-4.655 6.08-5.592z">
                                </path>
                            </g>
                        </svg>
                    </div>
                </div>
                <!-- {{-- <div class="flex gap-3 items-center justify-center">--}}
                {{-- <div>--}}
                {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="size-4" --}}
                {{-- fill="#918c8c">--}}
                {{-- <path--}} {{--
                                        d="M224 64c44.2 0 80 35.8 80 80v48H144V144c0-44.2 35.8-80 80-80zM80 144v48H64c-35.3 0-64 28.7-64 64V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V256c0-35.3-28.7-64-64-64H368V144C368 64.5 303.5 0 224 0S80 64.5 80 144zM256 320v64c0 17.7-14.3 32-32 32s-32-14.3-32-32V320c0-17.7 14.3-32 32-32s32 14.3 32 32z" />--}}
                {{-- </svg>--}}
                {{-- </div>--}}
                {{-- <p class="text-[13px] text-[#918c8c]">اطلاعات شما نزد ما محفوظ است.</p>--}}
                {{-- </div>--}} -->
            </div>
        </div>
        <!-- form_order -->
        <!-- properti -->
        <div class="lg:w-12/14 w-full max-lg:py-3 flex items-center lg:justify-end justify-center py-5 lg:absolute lg:bottom-0 lg:right-0">
            <div class="lg:w-4/12 w-11/12  py-3 flex items-center   bg-white shadow_boxs rounded-xl">
                <div class="w-1/4 px-2 h-full flex flex-col gap-2 justify-center items-center text-nowrap">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="size-6" fill="none" stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 13v-1a8 8 0 0 1 16 0v1"/>
                            <rect x="2" y="13" width="5" height="7" rx="1.5"/>
                            <rect x="17" y="13" width="5" height="7" rx="1.5"/>
                            <path d="M20 20v1a3 3 0 0 1-3 3h-3"/>
                        </svg>
                    </div>
                    <span class="xl:text-sm lg:text-[9px] sm:text-[16px] text-[10px] font-bold">پشتبیانی حرفه ای</span>
                </div>
                <span class="w-0.5 h-7/12 bg-[#e8e8e8] rounded-full"></span>


                <div class="w-1/4 h-full px-2 flex flex-col gap-2 justify-center items-center text-nowrap">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="size-6" fill="none" stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M2 7h11v10H2z"/>
                            <path d="M13 10h4l4 3.5V17h-8z"/>
                            <circle cx="6" cy="18.5" r="1.6"/>
                            <circle cx="17" cy="18.5" r="1.6"/>
                        </svg>
                    </div>
                    <span class="xl:text-sm lg:text-[9px] sm:text-[16px] text-[10px] font-bold">تحویل سریع</span>
                </div>
                <span class="w-0.5 h-7/12 bg-[#e8e8e8] rounded-full"></span>
                <div class="w-1/4 px-2 h-full flex flex-col gap-2 justify-center items-center text-nowrap">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="size-6" fill="none" stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12.6 3.6l6.8 6.8a2 2 0 0 1 0 2.8l-7.2 7.2a2 2 0 0 1-2.8 0l-6.8-6.8a2 2 0 0 1-.6-1.4V5.2a1.6 1.6 0 0 1 1.6-1.6h7.6a2 2 0 0 1 1.4.6z"/>
                            <circle cx="7.5" cy="8.5" r="1.2" fill="#FF5A5F" stroke="none"/>
                        </svg>
                    </div>
                    <span class="xl:text-sm lg:text-[9px] sm:text-[16px] text-[10px] font-bold">قیمت مناسب</span>
                </div>
                <span class="w-0.5 h-7/12 bg-[#e8e8e8] rounded-full"></span>

                <div class="w-1/4 px-2 h-full flex flex-col gap-2 justify-center items-center text-nowrap">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="size-6"><path d="M73 127L256 49.4 439 127c5.9 2.5 9.1 7.8 9 12.8c-.4 91.4-38.4 249.3-186.3 320.1c-3.6 1.7-7.8 1.7-11.3 0C102.4 389 64.5 231.2 64 139.7c0-5 3.1-10.2 9-12.8zM457.7 82.8L269.4 2.9C265.2 1 260.7 0 256 0s-9.2 1-13.4 2.9L54.3 82.8c-22 9.3-38.4 31-38.3 57.2c.5 99.2 41.3 280.7 213.6 363.2c16.7 8 36.1 8 52.8 0C454.8 420.7 495.5 239.2 496 140c.1-26.2-16.3-47.9-38.3-57.2zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z"/></svg>
                    </div>
                    <span class="xl:text-sm lg:text-[9px] sm:text-[16px] text-[10px] font-bold">کیفیت تضمینی</span>
                </div>
            </div>
        </div>
        <!-- properti -->




    </div>

    <!-- sub_heder_end -->
</header>
<main class="mt-5 flex flex-col gap-5 items-center">


    <!-- servis_start -->
    <section class="w-full h-full flex items-center justify-center">
        <div class="w-11/12 h-full flex flex-col gap-4 items-center justify-center">
            <div class="w-full flex gap-5 items-center justify-center">
                <div class="flex gap-0.5 items-center justify-center">
                    <span class="w-10 h-1 bg-[#B84C75] rounded-full" style="background:linear-gradient(91deg,rgba(185, 1, 112, 1) 1%, rgba(54, 4, 130, 1) 38%, rgba(255, 255, 255, 1) 91%);"></span>
                    <span class="size-2 rounded-full bg-[#FDB448]"></span>
                </div>
                <h3 class="xl:text-4xl lg:text-2xl font-bold">محصولات و خدمات ما</h3>
                <div class="flex gap-0.5 items-center justify-center">
                    <span class="size-2 rounded-full bg-[#FDB448]"></span>
                    <span class="w-10 h-1 bg-[#B84C75] rounded-full" style="background: linear-gradient(268deg,rgba(184, 76, 117, 1) 22%, rgba(255, 255, 255, 1) 96%);"></span>
                </div>
            </div>
            <div class="w-full grid lg:grid-cols-6 lg:grid-rows-1 sm:grid-cols-2 sm:grid-rows-3 grid-cols-1 gird-rows-6  xl:gap-4 gap-2 items-center justify-center sm:justify-between">
                <div class="w-full lg:h-full pr-4 bg-white rounded-2xl flex lg:flex-col items-center justify-between sm:py-4 py-4 lg:py-7 shadow_item px-3 hover:scale-[1.03] active:scale-[1.03] trasition-all duration-400 cursor-pointer" style="background: linear-gradient(180deg, #c6e174 0%, #9dde26 28%, #5ea200 58%, #328100 82%, #0c5513 100%);">
                    <div class="lg:w-full w-1/2 lg:h-6/12 h-full flex flex-col justify-center items-center max-lg:order-2">
                        <img src="{{asset('assets/img/mag_service.png')}}" alt="" class="object-fit max-w-full max-h-full min-w-full m-h-full">
                    </div>
                    <div class="lg:w-full w-1/2 lg:h-6/12 h-full flex flex-col xl:gap-3 gap-2 lg:items-center items-start justify-center max-lg:order-1">
                        <div class="w-full flex flex-col gap-2 justify-center lg:items-center items-start">
                            <span class="lg:text-[1.5vw] sm:text-[3vw] text-[5.5vw] text-nowrap font-bold text-white">چاپ روی ماگ</span>
                            <div class="flex flex-col lg:items-center items-start justify-center">
                                <span class="xl:text-[1.3vw] lg:text-[1.1vw] sm:text-[2.2vw] text-[3.2vw] text-[#f2f2f2] font-bold">چاپ اختصاصی روی ماگ</span>
                                <span class="xl:text-[1.3vw] lg:text-[1.1vw] sm:text-[2.2vw] text-[3.2vw] text-[#f2f2f2] font-bold">هدابای تبلیغاتی خاص</span>
                            </div>
                        </div>

                        <div class="w-5/12 flex items-center justify-center bg-white hover:bg-[#f2eded] active:bg-[#f2eded] py-1 rounded-lg">
                            <span class="text-[#458f30] xl:text-[16px] lg:text-xs sm:text-[1.9vw] text-[3.2vw] font-bold">مشاهده</span>
                        </div>

                    </div>
                </div>
                <div class="w-full lg:h-full pr-4 bg-white rounded-2xl flex lg:flex-col items-center justify-between sm:py-4 py-4 shadow_item px-3 lg:py-6 hover:scale-[1.03] active:scale-[1.03] trasition-all duration-400 cursor-pointer" style="background: linear-gradient(169deg,rgba(252, 97, 157, 1) 14%, rgba(227, 49, 151, 1) 35%, rgba(212, 4, 137, 1) 66%, rgba(181, 3, 107, 1) 83%);">
                    <div class="lg:w-full w-1/2 lg:h-6/12 h-full flex flex-col justify-center items-center max-lg:order-2">
                        <img src="{{asset('assets/img/billbord_service.png')}}" alt="" class="object-fit max-w-full max-h-full min-w-full m-h-full">
                    </div>
                    <div class="lg:w-full w-1/2 lg:h-6/12 h-full flex flex-col gap-3 lg:items-center items-start justify-center max-lg:order-1">
                        <div class="w-full flex flex-col gap-2 justify-center lg:items-center items-start">
                            <span class="lg:text-[1.5vw] sm:text-[3vw] text-[5.5vw] text-nowrap font-bold text-white">ساخت تابلو تبلیغاتی</span>
                            <div class="flex flex-col lg:items-center items-start justify-center">
                                <span class="xl:text-[1.3vw] lg:text-[1.1vw] sm:text-[2.2vw] text-[3.2vw] text-[#f2f2f2] font-bold">چاپ اختصاصی روی ماگ</span>
                                <span class="xl:text-[1.3vw] lg:text-[1.1vw] sm:text-[2.2vw] text-[3.2vw] text-[#f2f2f2] font-bold">هدابای تبلیغاتی خاص</span>
                            </div>
                        </div>

                        <div class="w-5/12 flex items-center justify-center bg-white hover:bg-[#f2eded] active:bg-[#f2eded] py-1 rounded-xl">
                            <span class="text-[#B8036E] xl:text-[16px] lg:text-xs sm:text-[1.9vw] text-[3.2vw] font-bold">مشاهده</span>
                        </div>

                    </div>
                </div>
                <div class="w-full lg:h-full pr-4 bg-white rounded-2xl flex lg:flex-col items-center justify-between sm:py-4 py-4 shadow_item px-3 lg:py-6 hover:scale-[1.03] active:scale-[1.03] trasition-all duration-400 cursor-pointer" style="background:linear-gradient(169deg,rgba(142, 32, 172, 1) 0%, rgba(74, 20, 134, 1) 28%, rgba(43, 9, 94, 1) 69%, rgba(27, 5, 64, 1) 96%) ;">
                    <div class="lg:w-full w-1/2 lg:h-6/12 h-full flex flex-col justify-center items-center max-lg:order-2">
                        <img src="{{asset('assets/img/mag_service.png')}}" alt="" class="object-fit max-w-full max-h-full min-w-full m-h-full">
                    </div>
                    <div class="lg:w-full w-1/2 lg:h-6/12 h-full flex flex-col gap-3 lg:items-center items-start justify-center max-lg:order-1">
                        <div class="w-full flex flex-col gap-2 justify-center lg:items-center items-start">
                            <span class="lg:text-[1.5vw] sm:text-[3vw] text-[5.5vw] text-nowrap font-bold text-white">جاپ روی ماگ</span>
                            <div class="flex flex-col lg:items-center items-start justify-center">
                                <span class="xl:text-[1.3vw] lg:text-[1.1vw] sm:text-[2.2vw] text-[3.2vw] text-[#f2f2f2] font-bold">چاپ اختصاصی روی ماگ</span>
                                <span class="xl:text-[1.3vw] lg:text-[1.1vw] sm:text-[2.2vw] text-[3.2vw] text-[#f2f2f2] font-bold">هدابای تبلیغاتی خاص</span>
                            </div>
                        </div>

                        <div class="w-5/12 flex items-center justify-center bg-white hover:bg-[#f2eded] active:bg-[#f2eded] py-1 rounded-xl">
                            <span class="text-[#3A5673] xl:text-[16px] lg:text-xs sm:text-[1.9vw] text-[3.2vw] font-bold">مشاهده</span>
                        </div>

                    </div>
                </div>
                <div class="w-full lg:h-full pr-4 bg-white rounded-2xl flex lg:flex-col items-center justify-between sm:py-4 py-4 shadow_item px-3 lg:py-6 hover:scale-[1.03] active:scale-[1.03] trasition-all duration-400 cursor-pointer" style="background:linear-gradient(169deg,rgba(68, 111, 201, 1) 14%, rgba(25, 97, 212, 1) 35%, rgba(40, 96, 161, 1) 66%, rgba(8, 74, 128, 1) 83%);">
                    <div class="lg:w-full w-1/2 lg:h-6/12 h-full flex flex-col justify-center items-center max-lg:order-2">
                        <img src="{{asset('assets/img/billbord_service.png')}}" alt="" class="object-fit max-w-full max-h-full min-w-full m-h-full">
                    </div>
                    <div class="lg:w-full w-1/2 lg:h-6/12 h-full flex flex-col gap-3 lg:items-center items-start justify-center max-lg:order-1">
                        <div class="w-full flex flex-col gap-2 justify-center lg:items-center items-start">
                            <span class="lg:text-[1.5vw] sm:text-[3vw] text-[5.5vw] text-nowrap font-bold text-white">ساخت تابلو تبلیغاتی</span>
                            <div class="flex flex-col lg:items-center items-start justify-center">
                                <span class="xl:text-[1.3vw] lg:text-[1.1vw] sm:text-[2.2vw] text-[3.2vw] text-[#f2f2f2] font-bold">چاپ اختصاصی روی ماگ</span>
                                <span class="xl:text-[1.3vw] lg:text-[1.1vw] sm:text-[2.2vw] text-[3.2vw] text-[#f2f2f2] font-bold">هدابای تبلیغاتی خاص</span>
                            </div>
                        </div>

                        <div class="w-5/12 flex items-center justify-center bg-white hover:bg-[#f2eded] active:bg-[#f2eded] py-1 rounded-xl">
                            <span class="text-[#135AA5] xl:text-[16px] lg:text-xs sm:text-[1.9vw] text-[3.2vw] font-bold">مشاهده</span>
                        </div>

                    </div>
                </div>
                <div class="w-full lg:h-full pr-4 bg-white rounded-2xl flex lg:flex-col items-center justify-between sm:py-4 py-4 shadow_item px-3 lg:py-6 hover:scale-[1.03] active:scale-[1.03] trasition-all duration-400 cursor-pointer" style="background:linear-gradient(169deg,rgba(252, 176, 74, 1) 14%, rgba(254, 146, 20, 1) 35%, rgba(248, 137, 22, 1) 68%, rgba(224, 109, 15, 1) 82%);">
                    <div class="lg:w-full w-1/2 lg:h-6/12 h-full flex flex-col justify-center items-center max-lg:order-2">
                        <img src="{{asset('assets/img/mag_service.png')}}" alt="" class="object-fit max-w-full max-h-full min-w-full m-h-full">
                    </div>
                    <div class="lg:w-full w-1/2 lg:h-6/12 h-full flex flex-col gap-3 lg:items-center items-start justify-center max-lg:order-1">
                        <div class="w-full flex flex-col gap-2 justify-center lg:items-center items-start">
                            <span class="lg:text-[1.5vw] sm:text-[3vw] text-[5.5vw] text-nowrap font-bold text-white">ساخت تابلو تبلیغاتی</span>
                            <div class="flex flex-col lg:items-center items-start justify-center">
                                <span class="xl:text-[1.3vw] lg:text-[1.1vw] sm:text-[2.2vw] text-[3.2vw] text-[#f2f2f2] font-bold">چاپ اختصاصی روی ماگ</span>
                                <span class="xl:text-[1.3vw] lg:text-[1.1vw] sm:text-[2.2vw] text-[3.2vw] text-[#f2f2f2] font-bold">هدابای تبلیغاتی خاص</span>
                            </div>
                        </div>

                        <div class="w-5/12 flex items-center justify-center bg-white hover:bg-[#f2eded] active:bg-[#f2eded] py-1 rounded-xl">
                            <span class="text-[#E46E07] xl:text-[16px] lg:text-xs sm:text-[1.9vw] text-[3.2vw] font-bold">مشاهده</span>
                        </div>

                    </div>
                </div>
                <div class="w-full lg:h-full pr-4 bg-white rounded-2xl flex lg:flex-col items-center justify-between sm:py-4 py-4 shadow_item px-3 lg:py-6 hover:scale-[1.03] active:scale-[1.03] trasition-all duration-400 cursor-pointer" style="background:linear-gradient(186deg,rgba(211, 92, 152, 1) 0%, rgba(150, 41, 148, 1) 27%, rgba(94, 22, 132, 1) 61%, rgba(53, 9, 127, 1) 96%);">
                    <div class="lg:w-full w-1/2 lg:h-6/12 h-full flex flex-col justify-center items-center max-lg:order-2">
                        <img src="{{asset('assets/img/billbord_service.png')}}" alt="" class="object-fit max-w-full max-h-full min-w-full m-h-full">
                    </div>
                    <div class="lg:w-full w-1/2 lg:h-6/12 h-full flex flex-col gap-3 lg:items-center items-start justify-center max-lg:order-1">
                        <div class="w-full flex flex-col gap-2 justify-center lg:items-center items-start">
                            <span class="lg:text-[1.5vw] sm:text-[3vw] text-[5.5vw] text-nowrap font-bold text-white">ساخت تابلو تبلیغاتی</span>
                            <div class="flex flex-col lg:items-center items-start justify-center">
                                <span class="xl:text-[1.3vw] lg:text-[1.1vw] sm:text-[2.2vw] text-[3.2vw] text-[#f2f2f2] font-bold">چاپ اختصاصی روی ماگ</span>
                                <span class="xl:text-[1.3vw] lg:text-[1.1vw] sm:text-[2.2vw] text-[3.2vw] text-[#f2f2f2] font-bold">هدابای تبلیغاتی خاص</span>
                            </div>
                        </div>

                        <div class="w-6/12 flex items-center justify-center bg-white hover:bg-[#f2eded] active:bg-[#f2eded] py-1 rounded-xl">
                            <span class="text-[#350C75] xl:text-[16px] lg:text-xs sm:text-[1.9vw] text-[3.2vw] font-bold">مشاهده</span>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- servis_end -->
    <!-- work history start -->
    <section class="w-full xl:h-50 py-3 sm:bg-[url({{asset('assets/img/work_history_section.jpg')}})] sm:bg-cover sm:bg-center flex justify-center items-center">
        <div class="lg:w-10/12 sm:w-11/12 w-full h-full grid sm:grid-cols-5 sm:grid-row-1 grid-cols-[50%_3px_50%] grid-row-3  sm:gap-1 gap-y-1 sm:justify-between justify-center items-center">
            <div class="w-full px-2 h-full py-4 flex flex-col gap-0.5 justify-center items-center text-nowrap animaiton_rotate">
                <div class="w-full h-1/2 flex justify-center items-center">
                    <img src="{{asset('assets/img/fast.png')}}" alt="" class="w-5/12 h-full transition-all duration-500 animaiton_rotate_item">
                </div>
                <span class="xl:text-xl lg:text-[9px] sm:text-[13px] text-[20px] sm:text-white text-[#ffdb59] font-bold animaiton_rotate_item_text transition-all duration-500">تحویل  سریع</span>
                <span class="xl:text-lg lg:text-[9px] sm:text-[13px] text-[17px] font-bold sm:text-[#e4d4ff] animaiton_rotate_item_text transition-all duration-500">در سریع ترین زمان</span>
            </div>
            <span class="w-[3px] h-2/3 bg-[#edeaea] rounded-full sm:hidden"></span>
            <div class="w-full px-2 h-full py-4 flex flex-col gap-0.5 justify-center items-center text-nowrap">
                <div class="w-full h-1/2 flex justify-center items-center">
                    <img src="{{asset('assets/img/cap.png')}}" alt="" class="w-5/12 h-full">
                </div>
                <span class="xl:text-xl lg:text-[9px] sm:text-[13px] text-[20px] sm:text-white text-[#ffdb59] font-bold">کیفیت تضمیتی</span>
                <span class="xl:text-lg lg:text-[9px] sm:text-[13px] text-[17px] font-bold sm:text-[#e4d4ff]">بهترین متریال و جاب</span>
            </div>
            <div class="w-full px-2 py-4 h-full flex flex-col gap-0.5 justify-center items-center text-nowrap">
                <div class="w-full h-full flex justify-center items-center relative">
                    <img src="{{asset('assets/img/work_history.jpg')}}" alt="" class="w-full h-full max-sm:hidden">
                    <div class="w-full absolute flex flex-col justify-center items-center">
                        <h4 class="sm:text-[3.5vw] text-[8vw] font-bold sm:text-white text-[#ffdb59]">10+</h4>
                        <span class="sm:text-[1.5vw] text-[4vw] sm:text-white font-bold">سال سابقه درخشان </span>
                    </div>
                </div>
            </div>
            <span class="w-[3px] h-2/3 bg-[#edeaea] rounded-full sm:hidden"></span>
            <div class="w-full px-2 py-4 h-full flex flex-col gap-0.5 justify-center items-center text-nowrap">
                <div class="w-full h-1/2 flex justify-center items-center">
                    <img src="{{asset('assets/img/stiker_laugh.png')}}" alt="" class="w-5/12 h-full">
                </div>
                <span class="xl:text-xl lg:text-[9px] sm:text-[13px] text-[20px] sm:text-white text-[#ffdb59] font-bold">رضیایت مشتریان</span>
                <span class="xl:text-lg lg:text-[9px] sm:text-[13px] text-[10px] font-bold text-[#e4d4ff]">بیش از 5000 مشتری</span>
            </div>
            <div class="w-full px-2 h-full py-4 flex flex-col gap-0.5 justify-center items-center text-nowrap">
                <div class="w-full h-1/2 flex justify-center items-center">
                    <img src="{{asset('assets/img/discount.png')}}" alt="" class="w-5/12 h-full">
                </div>
                <span class="xl:text-xl lg:text-[9px] sm:text-[13px] text-[20px] sm:text-white text-[#ffdb59] font-bold">قیمت های ویژه</span>
                <span class="xl:text-lg lg:text-[9px] sm:text-[13px] text-[17px] font-bold sm:text-[#e4d4ff]">تطمین بهترین قیمت</span>
            </div>

        </div>
    </section>
    <!-- work history end -->
    <!-- rezimes_start -->
    <section class="w-full flex flex-col items-center justify-center">
        <div class="w-11/12 h-full flex flex-col gap-5 items-center">
            <!-- title rezume -->
            <div class="w-full flex gap-5 items-center justify-center">
                <div class="flex gap-0.5 items-center justify-center">
                    <span class="w-10 h-1 bg-[#B84C75] rounded-full" style="background:linear-gradient(91deg,rgba(185, 1, 112, 1) 1%, rgba(54, 4, 130, 1) 38%, rgba(255, 255, 255, 1) 91%);"></span>
                    <span class="size-2 rounded-full bg-[#FDB448]"></span>
                </div>
                <h3 class="xl:text-4xl lg:text-2xl font-bold text-[#170A43]">نمونه کارهای شاهکار</h3>
                <div class="flex gap-0.5 items-center justify-center">
                    <span class="size-2 rounded-full bg-[#FDB448]"></span>
                    <span class="w-10 h-1 bg-[#B84C75] rounded-full" style="background: linear-gradient(268deg,rgba(184, 76, 117, 1) 22%, rgba(255, 255, 255, 1) 96%);"></span>
                </div>
            </div>
            <!-- title rezume -->
            <!-- category_rezume -->
            <div class="max-w-full overflow-auto [&::-webkit-scrollbar]:h-2  [&::-webkit-scrollbar-thumb]:bg-[#6E2099]  [&::-webkit-scrollbar-thumb]:rounded-full flex gap-2 justify-center items-center py-4">
                <span class="px-6 py-1 bg-[#6E2099] rounded-full lg:text-xl sm:text-md text-sm font-bold text-white flex justify-center items-center shadow_item">همه</span>
                <span class="px-6 py-1 bg-[#fff] rounded-full lg:text-xl sm:text-md text-sm font-bold text-[#777779] flex justify-center items-center shadow_item text-nowrap">تابلو سازی</span>
                <span class="px-6 py-1 bg-[#fff] rounded-full lg:text-xl sm:text-md text-sm font-bold text-[#777779] flex justify-center items-center shadow_item text-nowrap">تابلو سازی</span>
                <span class="px-6 py-1 bg-[#fff] rounded-full lg:text-xl sm:text-md text-sm font-bold text-[#777779] flex justify-center items-center shadow_item text-nowrap">تابلو سازی</span>
                <span class="px-6 py-1 bg-[#fff] rounded-full lg:text-xl sm:text-md text-sm font-bold text-[#777779] flex justify-center items-center shadow_item text-nowrap">تابلو سازی</span>
            </div>
            <!-- category_rezume -->
            <!-- rezumes items -->
            <div class="max-w-full min-w-full overflow-auto [&::-webkit-scrollbar]:h-2  [&::-webkit-scrollbar-thumb]:bg-[#6E2099]  [&::-webkit-scrollbar-thumb]:rounded-full h-50  flex items-center xl:justify-between xl:gap-0 lg:gap-4 sm:gap-2 gap-1 py-4">
                <div class="xl:min-w-19/100 lg:min-w-24/100 sm:min-w-32/100 min-w-49/100 h-full flex flex-col gap-2 justify-between items-center">
                    <div class="w-full h-9/12">
                        <img src="{{asset('assets/img/mag_rezume.jpg')}}" alt="" class="object-fit w-full h-full rounded-lg">
                    </div>
                    <div class="w-full h-2/12 flex items-cener justify-center">
                        <span class="lg:text-xl sm:text-lg text-md font-bold">چاپ روی ماگ</span>
                    </div>
                </div>
                <div class="xl:min-w-19/100 lg:min-w-24/100 sm:min-w-32/100 min-w-49/100 h-full flex flex-col justify-between items-center">
                    <div class="w-full h-9/12">
                        <img src="{{asset('assets/img/billbord_rezume.jpg')}}" alt="" class="object-fit w-full h-full rounded-lg">
                    </div>
                    <div class="w-full h-2/12 flex items-cener justify-center">
                        <span class="lg:text-xl sm:text-lg text-md font-bold">چاپ بنز</span>
                    </div>
                </div>
                <div class="xl:min-w-19/100 lg:min-w-24/100 sm:min-w-32/100 min-w-49/100 h-full flex flex-col justify-between items-center">
                    <div class="w-full h-9/12">
                        <img src="{{asset('assets/img/mag_rezume.jpg')}}" alt="" class="object-fit w-full h-full rounded-lg">
                    </div>
                    <div class="w-full h-2/12 flex items-cener justify-center">
                        <span class="lg:text-xl sm:text-lg text-md font-bold">چاپ روی ماگ</span>
                    </div>
                </div>
                <div class="xl:min-w-19/100 lg:min-w-24/100 sm:min-w-32/100 min-w-49/100 h-full flex flex-col justify-between items-center">
                    <div class="w-full h-9/12">
                        <img src="{{asset('assets/img/billbord_rezume.jpg')}}" alt="" class="object-fit w-full h-full rounded-lg">
                    </div>
                    <div class="w-full h-2/12 flex items-cener justify-center">
                        <span class="lg:text-xl sm:text-lg text-md font-bold">چاپ بنز</span>
                    </div>
                </div>
                <div class="xl:min-w-19/100 lg:min-w-24/100 sm:min-w-32/100 min-w-49/100 h-full flex flex-col justify-between items-center">
                    <div class="w-full h-9/12">
                        <img src="{{asset('assets/img/mag_rezume.jpg')}}" alt="" class="object-fit w-full h-full rounded-lg">
                    </div>
                    <div class="w-full h-2/12 flex items-cener justify-center">
                        <span class="lg:text-xl sm:text-lg text-md font-bold">چاپ روی ماگ</span>
                    </div>
                </div>

            </div>
            <!-- rezumes items -->
            <!-- show all rezume -->
            <div class="w-full flex justify-center items-center">
                <a href="#" class="px-13 py-2 bg-red-500 flex justify-center items-center text-white xl:text-lg lg:text-md sm:text-sm text-xs font-bold text-nowrap rounded-full" style="background:linear-gradient(270deg,rgba(198, 0, 137, 1) 17%, rgba(253, 196, 72, 1) 95%);">مشاهده نمونه کار ها</a>
            </div>
            <!-- show all rezume -->
        </div>
    </section>
    <!-- rezimes_end -->

    <!-- property_order -->
    <section class="w-full flex justify-center items-center">
        <div class="w-11/12 lg:h-full sm:h-45 h-full flex justify-center items-center relative">
            <img src="{{asset('assets/img/property_background.png')}}" alt="" class="object-cover w-full h-55 max-lg:hidden">
            <img src="{{asset('assets/img/background_property_mobile.jpg')}}" alt="" class="object-cover w-full :hidden rounded-2xl sm:hidden">
            <div class="w-full lg:h-10/12 sm:h-full h-6/12 absolute bottom-0 right-0 flex gap-20 justify-start items-center">
                <div class="w-13/35 h-full flex jsutify-center items-center pr-5  max-lg:hidden">
                    <div class="w-1/3 h-full flex flex-col xl:gap-3 gap-2 justify-center items-center">
                        <span class="size-9 border-2 flex justify-center items-center text-2xl font-bold rounded-lg">1</span>
                        <h4 class="xl:text-lg lg:text-md sm:text-sm text-xs  font-bold text-nowrap">انتخاب محصول</h4>
                        <p class="xl:text-md lg:text-xs sm:text-xs text-[9px]  text-[#9A999F] font-bold text-center">مشتری مورد نظر خود را انتخاب کنید</p>
                    </div>
                    <div class="w-10 h-11/12 flex flex-col justify-center items-center">
                            <span class="w-0.5 h-1/3 bg-[#D8D7DE] flex items-end justify-center relative pb-1">
                                <span class="size-[1px] bg-[#6E2099] " style="box-shadow: 0px 0px 2px 2px #6E2099;"></span>
                            </span>
                        <span class="size-8 rounded-full bg-white flex justify-center items-center text-xl font-bold text-[#6E2099]">2</span>
                        <span class="w-0.5 h-1/3 bg-[#D8D7DE]"></span>
                    </div>
                    <div class="w-1/3 h-full flex flex-col gap-3 justify-center items-center">
                        <span class="size-9 border-2 flex justify-center items-center text-2xl font-bold rounded-lg">2</span>
                        <h4 class="xl:text-lg lg:text-md sm:text-sm text-xs font-bold text-nowrap">ثبت سفارش</h4>
                        <p class="xl:text-md lg:text-sm sm:text-xs text-[9px] text-[#9A999F] font-bold text-center">مشتری مورد نظر خود را  به راحتی ثبت کنید</p>
                    </div>
                    <div class="w-10 h-11/12 flex flex-col justify-center items-center">
                            <span class="w-0.5 h-1/3 bg-[#D8D7DE] flex items-end justify-center relative pb-1">
                                <span class="size-[1px] bg-[#6E2099] " style="box-shadow: 0px 0px 2px 2px #6E2099;"></span>
                            </span>
                        <span class="size-8 rounded-full bg-white flex justify-center items-center text-xl font-bold text-[#6E2099]">3</span>
                        <span class="w-0.5 h-1/3 bg-[#D8D7DE]"></span>
                    </div>
                    <div class="w-1/3 h-full flex flex-col gap-3 justify-center items-center">
                        <span class="size-9 border-2 flex justify-center items-center text-2xl font-bold rounded-lg text-[#6E2099]">3</span>
                        <h4 class="xl:text-lg lg:text-md sm:text-sm text-xs font-bold text-nowrap">تحویل سریع</h4>
                        <p class="xl:text-md lg:text-sm sm:text-xs text-[9px] text-[#9A999F] font-bold text-center">سفارش شما سریع ترین زمان به دست شما میرسد</p>
                    </div>
                </div>
                <!-- anline_order -->
                <div class="lg:w-11/35 w-full h-full flex flex-col sm:gap-2 gap-3 justify-center items-center rounded-3xl sm:hidden lg:flex bg-gradient">
                    <h3 class="lg:text-[2.3vw] text-[6vw] font-bold text-white text-nowrap">سفارش آنلاین ،سریع و آسان</h3>
                    <h3 class="lg:text-[1.5vw] text-[4vw] font-bold text-[#f2f2f2] text-nowrap">از سفارش تا تحویل،در کنار شما هستیم</h3>
                    <div class="w-full flex justify-center items-center">
                        <a href="#" class="px-9 py-1 bg-red-500 flex gap-2 justify-center items-center rounded-full" style="background:linear-gradient(270deg,rgba(198, 0, 137, 1) 17%, rgba(253, 196, 72, 1) 95%);">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="lg:size-5 size-3" fill="#fff">
                                    <path d="M16 0H0V32H16 67.2l77.2 339.5 2.8 12.5H160 496h16V352H496 172.8l-14.5-64H496L566 64l10-32H542.5 100L95.6 12.5 92.8 0H80 16zm91.3 64H532.5l-60 192H151L107.3 64zM184 432a24 24 0 1 1 0 48 24 24 0 1 1 0-48zm0 80a56 56 0 1 0 0-112 56 56 0 1 0 0 112zm248-56a24 24 0 1 1 48 0 24 24 0 1 1 -48 0zm80 0a56 56 0 1 0 -112 0 56 56 0 1 0 112 0z">
                                    </path>
                                </svg>
                            </div>
                            <span class="xl:text-lg lg:text-md text-sm font-bold text-white text-nowrap">همین حالا سفارش دهید</span>
                        </a>
                    </div>
                </div>
                <!-- anline_order -->
                <!-- anline_order_tablet -->
                <div class="w-full py-3 flex justify-center items-center rounded-3xl gradient_box_property hidden sm:flex lg:hidden">

                    <div class="w-1/2 h-full flex jsutify-center items-center pr-3">
                        <div class="w-1/3 h-full flex flex-col gap-2 justify-center items-center">
                            <span class="size-7 border-2 border-white flex justify-center items-center text-xl text-white font-bold rounded-lg">1</span>
                            <h4 class=" text-xs text-white font-bold text-nowrap">انتخاب محصول</h4>
                            <p class="text-[10px]  text-[#9A999F] font-bold text-center">مشتری مورد نظر خود را انتخاب کنید</p>
                        </div>
                        <div class="w-10 h-11/12 flex flex-col justify-center items-center">
                                <span class="w-0.5 h-11 bg-[#eaeaea] flex items-end justify-center relative pb-1">
                                    <span class="size-[1px] bg-[#6E2099] " style="box-shadow: 0px 0px 2px 2px #6E2099;"></span>
                                </span>
                            <span class="size-5 rounded-full bg-white flex justify-center items-center text-lg font-bold text-[#6E2099]">2</span>
                            <span class="w-0.5 h-11 bg-[#eaeaea]"></span>
                        </div>
                        <div class="w-1/3 h-full flex flex-col gap-2 justify-center items-center">
                            <span class="size-7 border-2 border-white flex justify-center items-center text-xl text-white font-bold rounded-lg">2</span>
                            <h4 class="text-xs text-white font-bold text-nowrap">ثبت سفارش</h4>
                            <p class="text-[10px] text-[#9A999F] font-bold text-center">مشتری مورد نظر خود را  به راحتی ثبت کنید</p>
                        </div>
                        <div class="w-10 h-11/12 flex flex-col justify-center items-center">
                                <span class="w-0.5 h-11 bg-[#eaeaea] flex items-end justify-center relative pb-1">
                                    <span class="size-[1px] bg-[#6E2099] " style="box-shadow: 0px 0px 2px 2px #6E2099;"></span>
                                </span>
                            <span class="size-5 rounded-full bg-white flex justify-center items-center text-lg font-bold text-[#6E2099]">3</span>
                            <span class="w-0.5 h-11 bg-[#eaeaea]"></span>
                        </div>
                        <div class="w-1/3 h-full flex flex-col gap-2 justify-center items-center">
                            <span class="size-7 border-2 border-white flex justify-center items-center text-xl text-white font-bold rounded-lg text-[#6E2099]">3</span>
                            <h4 class="text-xs text-white font-bold text-nowrap">تحویل سریع</h4>
                            <p class="text-[10px] text-[#9A999F] font-bold text-center">سفارش شما سریع ترین زمان به   </p>
                        </div>
                    </div>
                    <div class="w-1/2 h-full flex flex-col gap-2 justify-center items-center">
                        <h3 class="text-lg font-bold text-white text-nowrap">سفارش آنلاین ،سریع و آسان</h3>
                        <h3 class="text-md font-bold text-[#f2f2f2] text-nowrap">از سفارش تا تحویل،در کنار شما هستیم</h3>
                        <div class="w-full flex justify-center items-center">
                            <a href="#" class="px-6 py-1 bg-red-500 flex gap-2 justify-center items-center rounded-full" style="background:linear-gradient(270deg,rgba(198, 0, 137, 1) 17%, rgba(253, 196, 72, 1) 95%);">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="size-3" fill="#fff">
                                        <path d="M16 0H0V32H16 67.2l77.2 339.5 2.8 12.5H160 496h16V352H496 172.8l-14.5-64H496L566 64l10-32H542.5 100L95.6 12.5 92.8 0H80 16zm91.3 64H532.5l-60 192H151L107.3 64zM184 432a24 24 0 1 1 0 48 24 24 0 1 1 0-48zm0 80a56 56 0 1 0 0-112 56 56 0 1 0 0 112zm248-56a24 24 0 1 1 48 0 24 24 0 1 1 -48 0zm80 0a56 56 0 1 0 -112 0 56 56 0 1 0 112 0z">
                                        </path>
                                    </svg>
                                </div>
                                <span class="text-xs font-bold text-white text-nowrap">همین حالا سفارش دهید</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- anline_order_tablet -->
            </div>
        </div>
    </section>
    <!-- property_order -->


</main>
<footer class="w-full mt-10 mb-5 flex justify-center items-start">
    <section class="w-11/12 flex max-lg:flex-col gap-4 lg:justify-between items-start">
        <div class="lg:w-8/12 w-full flex max-sm:flex-col max-sm:gap-4 lg:justify-between items-start">
            <!-- address -->
            <div class="sm:w-1/2 w-full h-full flex flex-col gap-2 sm:items-start items-center justify-start">
                <img src="{{asset('assets/img/logo.png')}}" alt="" class="w-4/12">
                <p class="w-10/12 xl:text-lg text-sm font-bold text-[#A4A4A5] max-sm:text-center">مجموعه شاهکار اراعه دهنده خدمات چاپ و تلیغات با بهترین کیفیت و قیمت مناسب</p>
                <div class="flex flex-col gap-2 items-start">

                    <div class="flex justify-center items-center gap-4">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="lg:size-4 size-3">
                                <path d="M375.8 275.2c-16.4-7-35.4-2.4-46.7 11.4l-33.2 40.6c-46-26.7-84.4-65.1-111.1-111.1L225.3 183c13.8-11.3 18.5-30.3 11.4-46.7l-48-112C181.2 6.7 162.3-3.1 143.6 .9l-112 24C13.2 28.8 0 45.1 0 64v0C0 295.2 175.2 485.6 400.1 509.5c9.8 1 19.6 1.8 29.6 2.2c0 0 0 0 0 0c0 0 .1 0 .1 0c6.1 .2 12.1 .4 18.2 .4l0 0c18.9 0 35.2-13.2 39.1-31.6l24-112c4-18.7-5.8-37.6-23.4-45.1l-112-48zM441.5 464C225.8 460.5 51.5 286.2 48.1 70.5l99.2-21.3 43 100.4L154.4 179c-18.2 14.9-22.9 40.8-11.1 61.2c30.9 53.3 75.3 97.7 128.6 128.6c20.4 11.8 46.3 7.1 61.2-11.1l29.4-35.9 100.4 43L441.5 464zM48 64v0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0s0 0 0 0"></path>
                            </svg>
                        </div>
                        <span class="xl:text-lg sm:text-sm font-bold">09925718265</span>
                    </div>
                    <div class="flex justify-center items-center gap-4">
                        <div>
                            <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg" class="lg:size-4 size-3"><path d="M1664 1504v-768q-32 36-69 66-268 206-426 338-51 43-83 67t-86.5 48.5-102.5 24.5h-2q-48 0-102.5-24.5t-86.5-48.5-83-67q-158-132-426-338-37-30-69-66v768q0 13 9.5 22.5t22.5 9.5h1472q13 0 22.5-9.5t9.5-22.5zm0-1051v-24.5l-.5-13-3-12.5-5.5-9-9-7.5-14-2.5h-1472q-13 0-22.5 9.5t-9.5 22.5q0 168 147 284 193 152 401 317 6 5 35 29.5t46 37.5 44.5 31.5 50.5 27.5 43 9h2q20 0 43-9t50.5-27.5 44.5-31.5 46-37.5 35-29.5q208-165 401-317 54-43 100.5-115.5t46.5-131.5zm128-37v1088q0 66-47 113t-113 47h-1472q-66 0-113-47t-47-113v-1088q0-66 47-113t113-47h1472q66 0 113 47t47 113z"></path></svg>
                        </div>
                        <span class="xl:text-lg sm:text-sm font-bold">@gmail.com</span>
                    </div>
                    <div class="flex justify-center items-center gap-4">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="lg:size-4 size-3"><path d="M336 192c0-79.5-64.5-144-144-144S48 112.5 48 192c0 16.3 7.7 42 24.7 75.4c16.4 32.2 38.8 66.4 62.1 98.3c20.3 27.9 40.7 53.3 57.2 73.1c16.5-19.8 36.9-45.2 57.2-73.1c23.2-31.9 45.6-66.2 62.1-98.3C328.3 234 336 208.3 336 192zm48 0c0 83.1-105.6 219-160.2 283.6C204.8 498.1 192 512 192 512s-12.8-13.9-31.8-36.4C105.6 411 0 275.1 0 192C0 86 86 0 192 0S384 86 384 192zm-160 0a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm-112 0a80 80 0 1 1 160 0 80 80 0 1 1 -160 0z"/></svg>
                        </div>
                        <span class="xl:text-lg sm:text-sm font-bold">آذربایجان شرقی بناب</span>
                    </div>
                </div>
                <!-- social_network_svg -->
                <div class="w-full py-6 flex items-center justify-center gap-10">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                             class="sm:size-5 size-4">
                            <path
                                    d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                        </svg>
                    </div>
                    <div>
                        <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"
                             class="sm:size-5 size-4">
                            <path
                                    d="M1764 11q33 24 27 64l-256 1536q-5 29-32 45-14 8-31 8-11 0-24-5l-527-215-298 327q-18 21-47 21-14 0-23-4-19-7-30-23.5t-11-36.5v-452l-472-193q-37-14-40-55-3-39 32-59l1664-960q35-21 68 2zm-342 1499l221-1323-1434 827 336 137 863-639-478 797z">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                             class="sm:size-5 size-4">
                            <path
                                    d="M464 258.2c0 2.7-1 5.2-4.2 8c-3.8 3.1-10.1 5.8-17.8 5.8H344c-53 0-96 43-96 96c0 6.8 .7 13.4 2.1 19.8c3.3 15.7 10.2 31.1 14.4 40.6l0 0c.7 1.6 1.4 3 1.9 4.3c5 11.5 5.6 15.4 5.6 17.1c0 5.3-1.9 9.5-3.8 11.8c-.9 1.1-1.6 1.6-2 1.8c-.3 .2-.8 .3-1.6 .4c-2.9 .1-5.7 .2-8.6 .2C141.1 464 48 370.9 48 256S141.1 48 256 48s208 93.1 208 208c0 .7 0 1.4 0 2.2zm48 .5c0-.9 0-1.8 0-2.7C512 114.6 397.4 0 256 0S0 114.6 0 256S114.6 512 256 512c3.5 0 7.1-.1 10.6-.2c31.8-1.3 53.4-30.1 53.4-62c0-14.5-6.1-28.3-12.1-42c-4.3-9.8-8.7-19.7-10.8-29.9c-.7-3.2-1-6.5-1-9.9c0-26.5 21.5-48 48-48h97.9c36.5 0 69.7-24.8 70.1-61.3zM160 256a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm0-64a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm128-64a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm64 64a32 32 0 1 0 0-64 32 32 0 1 0 0 64z" />
                        </svg>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                             class="sm:size-5 size-4">
                            <path
                                    d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                            </path>
                        </svg>
                    </div>
                </div>
                <!-- social_network_svg -->
            </div>
            <!-- address -->
            <!-- servis -->
            <div class="sm:w-1/2 w-full h-full flex flex-col justify-start items-center">
                <div class="flex w-full h-full pb-15">
                    <div class="w-1/2 h-full flex flex-col gap-3 justify-start sm:items-start items-center">
                        <h5 class="xl:text-2xl lg:text-xl font-bold">خدمات ما</h5>
                        <div class="w-full flex flex-col gap-1 sm:items-start items-center justify-start xl:text-md text-sm font-bold text-[#A4A4A5]">
                            <span>چاپ بنر و فلکس</span>
                            <span>چاپ بنر و فلکس</span>
                            <span>چاپ بنر و فلکس</span>
                            <span>چاپ بنر و فلکس</span>
                            <span>چاپ بنر و فلکس</span>
                        </div>
                    </div>
                    <div class="w-1/2 h-full flex flex-col gap-3 justify-start sm:items-start items-center">
                        <h5 class="xl:text-2xl lg:text-xl font-bold">دسترسی سریع</h5>
                        <div class="flex flex-col gap-1 sm:items-start items-center justify-start xl:text-md text-sm font-bold text-[#A4A4A5]">
                            <span>چاپ بنر و فلکس</span>
                            <span>چاپ بنر و فلکس</span>
                            <span>چاپ بنر و فلکس</span>
                            <span>چاپ بنر و فلکس</span>
                            <span>چاپ بنر و فلکس</span>
                        </div>
                    </div>
                </div>
                <p class="xl:text-[15px] lg:text-[12px] text-[15px]">طراحی و توسعه <span class="font-bold">شرکت اندیشه گران طراحان دیجیتال ( فائوس) </span></p>
                <span class="xl:text-[15px] lg:text-[12px] text-[15px] font-bold">09147794595</span>
            </div>
            <!-- servis -->
        </div>
        <!-- news -->
        <div class="lg:w-7/24 w-full h-full flex justify-center items-start">
            <div class="w-full bg-[#F8F8F8] flex flex-col gap-6 lg:items-start items-center justify-center xl:p-7 p-4" style="box-shadow:-2px 0px 12px 2px #EFEFEF;">
                <div class="w-full flex flex-col gap-2 g:items-start items-center justify-start">
                    <h5 class="xl:text-2xl sm:text-xl font-bold">خبرنامه شاهکار</h5>
                    <p class="xl:text-lg lg:text-sm sm:text-lg font-bodl max-lg:text-center">با عضویت در خبر نامه از تخفیف ها و جدید ترین اخبار مطلع شوید.</p>
                </div>
                <div class="lg:w-full w-8/12 bg-white shadow_boxs_form_sub_heder rounded-full flex justify-between items-center">
                    <input type="text" class="outline-none h-full pr-5" placeholder="ایمیل">
                    <div class="xl:min-w-10 xl:min-h-10 min-w-7 min-h-7 rounded-full bg-[#6E2099] flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="xl:size-5 size-4 fill-white"><path d="M440.6 273.4c4.7-4.5 7.4-10.8 7.4-17.4s-2.7-12.8-7.4-17.4l-176-168c-9.6-9.2-24.8-8.8-33.9 .8s-8.8 24.8 .8 33.9L364.1 232 24 232c-13.3 0-24 10.7-24 24s10.7 24 24 24l340.1 0L231.4 406.6c-9.6 9.2-9.9 24.3-.8 33.9s24.3 9.9 33.9 .8l176-168z"/></svg>
                    </div>
                </div>
            </div>
        </div>
        <!-- news -->
    </section>
</footer>

<script>
    // search_mobile
    let pup_up_search_item = document.getElementById('pup_up_search_item')
    let pup_up_search_item_box = document.getElementById('pup_up_search_item_box')
    function pup_up_search(item) {
        if (item == 'open') {
            pup_up_search_item.classList.remove('h-0')
            pup_up_search_item.classList.add('h-dvh')
            // pup_up_search_item.classList.add('pb-25')

            pup_up_search_item_box.classList.remove('h-0')
            pup_up_search_item_box.classList.add('h-1/2')
            pup_up_search_item_box.classList.add('mt-22')

            // pup_up_search_item.classList.remove('opacity-0')
        }
        if (item == 'close') {
            pup_up_search_item.classList.add('h-0')
            pup_up_search_item.classList.remove('h-dvh')
            // pup_up_search_item.classList.remove('pb-25')

            pup_up_search_item_box.classList.add('h-0')
            pup_up_search_item_box.classList.remove('h-1/2')
            pup_up_search_item_box.classList.remove('mt-22')

            // pup_up_search_item.classList.add('opacity-0')
        }
    }
    // search_mobile
    // search_desktap


    let search_focus_box_item = document.getElementById('search_focus_box_item')
    let search_focus_box_item_close_document = document.getElementById('search_focus_box_item_close_document')
    function search_focus_box(item) {
        if (item == 'open') {
            search_focus_box_item.classList.remove('h-0')
            search_focus_box_item.classList.add('h-70')
            search_focus_box_item.classList.add('p-2')
            search_focus_box_item_close_document.classList.remove('opacity-0')
            search_focus_box_item_close_document.classList.remove('invisible')
            // pup_up_search_item.classList.remove('opacity-0')
        }
        if (item == 'close') {
            search_focus_box_item.classList.add('h-0')
            search_focus_box_item.classList.remove('h-70')
            search_focus_box_item.classList.remove('p-2')
            search_focus_box_item_close_document.classList.add('opacity-0')
            search_focus_box_item_close_document.classList.add('invisible')
            // pup_up_search_item.classList.add('opacity-0')
        }
    }
    // search_desktap

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

</script>
</body>

</html>