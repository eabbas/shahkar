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
    </style>
</head>

<body class="bg-[#f8f8f8] max-w-[1700px] mx-auto">

    <header class="w-full h-[100vh] flex flex-col items-center ">
        <div class="w-full flex flex-col rounded-4xl pb-4 ">

            <div class="w-full fixed top-3 flex justify-center items-center z-5">
                {{--  header+menu_start--}}
                <div class="w-11/12 h-full max-lg:py-2 lg:py-4 rounded-2xl flex justify-between xl:justify-end bg-white shadow_boxs">
                    <div class="xl:w-19/20 w-full flex flex-col gap-4 justify-between max-lg:px-4 pr-7 max-lg:py-4">
                        <div class="w-full h-full flex items-center justify-between ">

                            <!-- hamburger_menu_svg -->
                            <div class="min-w-[68px] flex flex-col gap-1 items-start justify-center lg:hidden" onclick="hamburger_menu('open')">
                                <span class="w-7 h-1 bg-black rounded-full"></span>
                                <span class="w-7 h-1 bg-black rounded-full"></span>
                                <span class="w-7 h-1 bg-black rounded-full"></span>
                            </div>
                            <!-- hamburger_menu_svg -->
                            <div class=" h-full xl:gap-20 flex  gap-12 items-center max-lg:hidden ">
                                <ul class="h-full flex xl:gap-12 gap-8 text-xl font-bold" style="font-weight: 600;">
                                    <li class="h-full flex justify-center items-center border-b-2 border-red-500 text-red-500">خانه
                                    </li>
                                    <li class="h-full flex justify-center items-center">محصولات</li>
                                    <li class="h-full flex justify-center items-center text-nowrap">درباره ما</li>
                                    <li class="h-full flex justify-center items-center text-nowrap">تماس با ما</li>
                                </ul>
                                <!-- search_box_start -->
                                <div class="xl:min-w-11/24 relative flex justify-center items-center">

                                    <div class="w-full bg-white rounded-full flex gap-3 justify-between items-center shadow_boxs px-6 py-3">
                                        <div class="flex gap-4 items-center">
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="size-4">
                                                    <path
                                                            d="M368 208A160 160 0 1 0 48 208a160 160 0 1 0 320 0zM337.1 371.1C301.7 399.2 256.8 416 208 416C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208c0 48.8-16.8 93.7-44.9 129.1L505 471c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L337.1 371.1z" />
                                                </svg>
                                            </div>
                                            <input type="text" placeholder="کالای مورد نظر خود را جستجو کنید."
                                                   class="outline-none text-sm font-bold" onclick="search_focus_box('open')">
                                        </div>
{{--                                        <div>--}}
{{--                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="size-4">--}}
{{--                                                <path--}}
{{--                                                        d="M378.4 71.4c8.5-10.1 7.2-25.3-2.9-33.8s-25.3-7.2-33.8 2.9L192 218.7 42.4 40.6C33.9 30.4 18.7 29.1 8.6 37.6S-2.9 61.3 5.6 71.4L160.7 256 5.6 440.6c-8.5 10.2-7.2 25.3 2.9 33.8s25.3 7.2 33.8-2.9L192 293.3 341.6 471.4c8.5 10.1 23.7 11.5 33.8 2.9s11.5-23.7 2.9-33.8L223.3 256l155-184.6z" />--}}
{{--                                            </svg>--}}
{{--                                        </div>--}}
                                    </div>
                                    {{--focus_search_item--}}
                                    <div class="w-full h-dvh fixed top-0 right-0 z-4 bg-black/40 invisible opacity-0  transition-all duration-300" onclick="search_focus_box('close')" id="search_focus_box_item_close_document"></div>
                                    <div class="w-full h-0 overflow-hidden bg-white absolute top-0 z-4 right-auto left-auto rounded-xl  transition-all duration-300" id="search_focus_box_item">
                                        <div class="w-full py-2 px-4 rounded-full bg-white border-2 border-[#efeff0] flex justify-between items-center">
                                            <input type="text" placeholder="کالای مورد نظر خود را جستجو کنید." class="outline-none text-[13px] font-bold">
                                            <div class="px-3 py-2 rounded-lg font-bold text-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="size-4">
                                                    <path d="M368 208A160 160 0 1 0 48 208a160 160 0 1 0 320 0zM337.1 371.1C301.7 399.2 256.8 416 208 416C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208c0 48.8-16.8 93.7-44.9 129.1L505 471c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L337.1 371.1z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    {{--focus_search_item--}}
                                </div>


                                <!-- search_box_end -->
                            </div>
                            <div class="md:w-1/12 max-md:w-2/12 h-full flex items-center lg:hidden">
                                <img src="{{asset('assets/img/logo.png')}}" alt="" class="w-full object-fit">
                            </div>
                            <div class="h-full flex items-center justify-between gap-5 lg:pl-7">
                                {{--search_svg--}}
                                <div class="lg:hidden" onclick="pup_up_search('open')">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="size-5">
                                        <path
                                                d="M368 208A160 160 0 1 0 48 208a160 160 0 1 0 320 0zM337.1 371.1C301.7 399.2 256.8 416 208 416C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208c0 48.8-16.8 93.7-44.9 129.1L505 471c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L337.1 371.1z" />
                                    </svg>
                                </div>
                                {{-- search_svg--}}
                                <div class="lg:px-3 py-2 lg:border-l-2 lg:border-[#c2c2c2] relative pr-2">
                                    <span class="w-4 h-4 bg-red-500 rounded-full absolute right-0 top-0  flex justify-center items-center text-[12px] text-white font-bold">2</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="size-6" fill="#000">
                                        <path
                                                d="M16 0H0V32H16 67.2l77.2 339.5 2.8 12.5H160 496h16V352H496 172.8l-14.5-64H496L566 64l10-32H542.5 100L95.6 12.5 92.8 0H80 16zm91.3 64H532.5l-60 192H151L107.3 64zM184 432a24 24 0 1 1 0 48 24 24 0 1 1 0-48zm0 80a56 56 0 1 0 0-112 56 56 0 1 0 0 112zm248-56a24 24 0 1 1 48 0 24 24 0 1 1 -48 0zm80 0a56 56 0 1 0 -112 0 56 56 0 1 0 112 0z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="h-2/3 bg-white rounded-full flex justify-between items-center shadow_boxs px-6 gap-4 max-lg:hidden">
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
                <section class="w-full h-dvh fixed top-0 right-0 z-5 lg:hidden translate-x-full transition-all duration-300"
                         id="hamburger_menu_item">
                    <div class="w-full h-full bg-black/40 absolute top-0 right-0 invisible opacity-0  transition-all duration-300 delay-190"
                         onclick="hamburger_menu('close') " id="close_hamburger_document"></div>
                    <div class="md:w-6/12 sm:w-7/12 w-10/12 h-full bg-white rounded-l-4xl flex flex-col gap-5  justify-between pt-9 relative pb-5">
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
{{--                            <span class="w-full h-[1px] bg-[#e6e6e6]"></span>--}}
                            <div class="w-11/12 flex flex-col gap-3 items-center pr-5">
                                <div class="w-full py-3 border-b-1 border-[#e6e6e6] flex items-center justify-start md:gap-5 gap-3 px-3">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                             class="size-6 fill-red-500">
                                            <path
                                                    d="M272.5 5.7c9-7.6 22.1-7.6 31.1 0l264 224c10.1 8.6 11.4 23.7 2.8 33.8s-23.7 11.3-33.8 2.8L512 245.5V432c0 44.2-35.8 80-80 80H144c-44.2 0-80-35.8-80-80V245.5L39.5 266.3c-10.1 8.6-25.3 7.3-33.8-2.8s-7.3-25.3 2.8-33.8l264-224zM288 55.5L112 204.8V432c0 17.7 14.3 32 32 32h48V312c0-22.1 17.9-40 40-40H344c22.1 0 40 17.9 40 40V464h48c17.7 0 32-14.3 32-32V204.8L288 55.5zM240 464h96V320H240V464z" />
                                        </svg>
                                    </div>
                                    <span class="text-[15px] md:text-lg text-red-500 font-bold">خانه</span>
                                </div>
                                <div class="w-full py-3 border-b-1 border-[#e6e6e6] flex items-center justify-start gap-4 px-3">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="size-6">
                                            <path
                                                    d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z" />
                                        </svg>
                                    </div>
                                    <span class="text-[15px] md:text-lg font-bold" style="font-weight: 600;">ورود / ثبت نام</span>
                                </div>
                                <div class="w-full py-3 border-b-1 border-[#e6e6e6] flex items-center justify-start gap-4 px-3">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="size-6">
                                            <path
                                                    d="M258.8 50.7c-1.8-.7-3.8-.7-5.7 0L63.6 122.6 256 198.2l192.4-75.6L258.8 50.7zM48 377.9c0 3.3 2.1 6.3 5.2 7.5L232 453.2V240.4L48 168.1V377.9zm232 75.3l178.8-67.8c3.1-1.2 5.2-4.2 5.2-7.5V168.1L280 240.4V453.2zM236.1 5.9c12.8-4.9 26.9-4.9 39.7 0l200 75.9C497.6 90 512 110.8 512 134.1V377.9c0 23.3-14.4 44.1-36.1 52.4l-200 75.9c-12.8 4.9-26.9 4.9-39.7 0l-200-75.9C14.4 422 0 401.2 0 377.9V134.1C0 110.8 14.4 90 36.1 81.7l200-75.9z" />
                                        </svg>
                                    </div>
                                    <span class="text-[15px] md:text-lg font-bold" style="font-weight: 600;">محصولات</span>
                                </div>
                                <div class="w-full py-3 border-b-1 border-[#e6e6e6] flex items-center justify-start gap-4 px-3">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="size-6">
                                            <path
                                                    d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z" />
                                        </svg>
                                    </div>
                                    <span class="text-[15px] md:text-lg font-bold" style="font-weight: 600;">درباره ما</span>
                                </div>
                                <div class="w-full py-3 flex items-center justify-start gap-4 px-3">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="size-6">
                                            <path
                                                    d="M375.8 275.2c-16.4-7-35.4-2.4-46.7 11.4l-33.2 40.6c-46-26.7-84.4-65.1-111.1-111.1L225.3 183c13.8-11.3 18.5-30.3 11.4-46.7l-48-112C181.2 6.7 162.3-3.1 143.6 .9l-112 24C13.2 28.8 0 45.1 0 64v0C0 295.2 175.2 485.6 400.1 509.5c9.8 1 19.6 1.8 29.6 2.2c0 0 0 0 0 0c0 0 .1 0 .1 0c6.1 .2 12.1 .4 18.2 .4l0 0c18.9 0 35.2-13.2 39.1-31.6l24-112c4-18.7-5.8-37.6-23.4-45.1l-112-48zM441.5 464C225.8 460.5 51.5 286.2 48.1 70.5l99.2-21.3 43 100.4L154.4 179c-18.2 14.9-22.9 40.8-11.1 61.2c30.9 53.3 75.3 97.7 128.6 128.6c20.4 11.8 46.3 7.1 61.2-11.1l29.4-35.9 100.4 43L441.5 464zM48 64v0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0s0 0 0 0">
                                            </path>
                                        </svg>
                                    </div>
                                    <span class="text-[15px] md:text-lg font-bold" style="font-weight: 600;">تماس با ما</span>
                                </div>
                            </div>
                        </div>
                        <div class="w-full border-t-1 border-[#e6e6e6] flex flex-col items-center justify-between">
                            <div class="w-full py-6 flex items-center justify-center gap-10">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="sm:size-6 size-5">
                                        <path
                                                d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                                    </svg>
                                </div>
                                <div>
                                    <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg" class="sm:size-6 size-5"><path d="M1764 11q33 24 27 64l-256 1536q-5 29-32 45-14 8-31 8-11 0-24-5l-527-215-298 327q-18 21-47 21-14 0-23-4-19-7-30-23.5t-11-36.5v-452l-472-193q-37-14-40-55-3-39 32-59l1664-960q35-21 68 2zm-342 1499l221-1323-1434 827 336 137 863-639-478 797z"></path></svg>
                                </div>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="sm:size-6 size-5">
                                        <path
                                                d="M464 258.2c0 2.7-1 5.2-4.2 8c-3.8 3.1-10.1 5.8-17.8 5.8H344c-53 0-96 43-96 96c0 6.8 .7 13.4 2.1 19.8c3.3 15.7 10.2 31.1 14.4 40.6l0 0c.7 1.6 1.4 3 1.9 4.3c5 11.5 5.6 15.4 5.6 17.1c0 5.3-1.9 9.5-3.8 11.8c-.9 1.1-1.6 1.6-2 1.8c-.3 .2-.8 .3-1.6 .4c-2.9 .1-5.7 .2-8.6 .2C141.1 464 48 370.9 48 256S141.1 48 256 48s208 93.1 208 208c0 .7 0 1.4 0 2.2zm48 .5c0-.9 0-1.8 0-2.7C512 114.6 397.4 0 256 0S0 114.6 0 256S114.6 512 256 512c3.5 0 7.1-.1 10.6-.2c31.8-1.3 53.4-30.1 53.4-62c0-14.5-6.1-28.3-12.1-42c-4.3-9.8-8.7-19.7-10.8-29.9c-.7-3.2-1-6.5-1-9.9c0-26.5 21.5-48 48-48h97.9c36.5 0 69.7-24.8 70.1-61.3zM160 256a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm0-64a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm128-64a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm64 64a32 32 0 1 0 0-64 32 32 0 1 0 0 64z" />
                                    </svg>
                                </div>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="sm:size-6 size-5">
                                        <path
                                                d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                            <div class="w-full h-1/3 flex border-t-1 border-[#e6e6e6] items-center justify-center gap-5">
                                <span class="text-[13px] md:text-lg text-[#515151]">پشتیبانی:09925718265</span>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-6" viewBox="0 0 64 64" fill="none">
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
                                        <path d="M18 28C18 20.3 24.3 14 32 14C39.7 14 46 20.3 46 28" stroke="url(#stroke)"
                                              stroke-width="3.5" stroke-linecap="round" fill="none"></path>

                                        <!-- Left ear cup -->
                                        <path
                                                d="M18 28H16C13.8 28 12 29.8 12 32V40C12 42.2 13.8 44 16 44H19C20.7 44 22 42.7 22 41V31C22 29.3 20.7 28 19 28H18Z"
                                                stroke="url(#stroke)" stroke-width="3.5" stroke-linejoin="round" fill="none"></path>

                                        <!-- Right ear cup -->
                                        <path
                                                d="M46 28H48C50.2 28 52 29.8 52 32V40C52 42.2 50.2 44 48 44H45C43.3 44 42 42.7 42 41V31C42 29.3 43.3 28 45 28H46Z"
                                                stroke="url(#stroke)" stroke-width="3.5" stroke-linejoin="round" fill="none"></path>

                                        <!-- Mic -->
                                        <path d="M42 44V47C42 49.2 40.2 51 38 51H35" stroke="url(#stroke)" stroke-width="3.5"
                                              stroke-linecap="round" fill="none"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- hamburger_menu_item -->

                {{--header+menu_end--}}
            </div>
            <!-- search_box_in_mobile -->
            <div class="w-full h-0 fixed top-0 right-0  lg:hidden z-4 flex items-start justify-center overflow-hidden transition-all duration-300" id="pup_up_search_item">
                <div class="w-full h-full bg-black/30 absolute top-0 right-0 -z-1" onclick="pup_up_search('close')"></div>
                <div class="w-11/12 mx-auto h-0 overflow-hidden bg-white rounded-xl flex justify-between items-start  shadow_boxs px-3 pt-2 lg:hidden transition-all duration-300" id="pup_up_search_item_box">
                    <div class="w-full flex  gap-2 justify-center items-center">
{{--                        <button class="flex gap-4 items-center">--}}
{{--                            <div>--}}
{{--                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="size-3">--}}
{{--                                    <path--}}
{{--                                            d="M368 208A160 160 0 1 0 48 208a160 160 0 1 0 320 0zM337.1 371.1C301.7 399.2 256.8 416 208 416C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208c0 48.8-16.8 93.7-44.9 129.1L505 471c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L337.1 371.1z" />--}}
{{--                                </svg>--}}
{{--                            </div>--}}
{{--                        </button>--}}

                        <div class="w-full py-2 px-4 rounded-full bg-white border-2 border-[#efeff0] flex justify-between items-center">
                            <input type="text" placeholder="کالای مورد نظر خود را جستجو کنید." class="outline-none text-[13px] font-bold">
                            <div class="px-3 py-2 rounded-lg font-bold text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="size-4">
                                    <path d="M368 208A160 160 0 1 0 48 208a160 160 0 1 0 320 0zM337.1 371.1C301.7 399.2 256.8 416 208 416C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208c0 48.8-16.8 93.7-44.9 129.1L505 471c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L337.1 371.1z"></path>
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
            <!-- search_box_in_mobile -->
        </div>


        <!-- sub_heder_start -->
        <div class="w-full flex flex-col gap-2 items-center lg:items-start justify-between mt-24 pb-5 lg:bg-[url({{asset('assets/img/background_heder.jpg')}})] lg:bg-cover lg:bg-center  lg:flex">
            <div class="lg:w-23/24 w-11/12 h-full flex flex-col max-lg:gap-1 lg:flex-row justify-between">
                <div class="lg:w-9/12 w-full w-full flex max-lg:bg-white  max-lg:justify-center max-lg:shadow_boxs max-lg:rounded-4xl max-lg:py-3">
                    <div class="lg:w-6/24 w-1/2 flex lg:items-end items-center lg:pb-20">
                        <img src="{{asset('assets/img/ChatGPT Image Jun 29, 2026, 07_32_33 PM.png')}}" alt="" class="lg:w-full w-9/12 object-fit max-lg:rounded-4xl">
                    </div>
                    <div class="xl:w-9/12 lg:w-8/12 w-1/2 flex flex-col gap-1 items-center lg:justify-end justify-center lg:pb-10 ">
                        <img src="{{asset('assets/img/logo.png')}}" alt="" class="xl:w-7/12 lg:w-10/12 w-10/12">
                        <div class="lg:w-8/12 w-full flex items-center md:text-[20px] sm:text-[17px]  text-[8px] lg:text-nowrap font-bold justify-between px-2">
                            <span class="lg:pl-4">چاپ بنر</span>
                            <span class="h-2/3 min-w-0.5 bg-red-500 rounded-full"></span>
                            <span class="lg:px-4">تابلو سازی چلنیوم</span>
                            <span class="h-2/3 min-w-0.5 bg-red-500 rounded-full"></span>
                            <span class="lg:pr-4">چاپ روی فلکس</span>
                        </div>
                        <div class="w-8/12 md:text-[17px] sm:text-[14px]  text-[8px] flex justify-center items-center font-bold">
                            <p>ایده شما با کیفیت <span class="text-red-500">شاهکار</span> ما اجرا میشود.</p>
                        </div>
                        <div class="w-11/12 flex items-center hidden lg:flex">
                            <div class="w-1/4 px-2 h-full flex flex-col justify-center items-center text-nowrap">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-8" viewBox="0 0 64 64"
                                        fill="none">
                                        <defs>
                                            <linearGradient id="grad" x1="14" y1="52" x2="54" y2="12"
                                                gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#E53935" />
                                                <stop offset="0.35" stop-color="#2B2B2B" />
                                                <stop offset="0.7" stop-color="#2B2B2B" />
                                                <stop offset="1" stop-color="#E53935" />
                                            </linearGradient>

                                            <linearGradient id="hand" x1="28" y1="22" x2="36" y2="40"
                                                gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#F28B82" />
                                                <stop offset="1" stop-color="#C2185B" />
                                            </linearGradient>
                                        </defs>

                                        <!-- Speed lines -->
                                        <path d="M6 25H18" stroke="url(#grad)" stroke-width="3.2"
                                            stroke-linecap="round" />
                                        <path d="M2 31H20" stroke="url(#grad)" stroke-width="3.2"
                                            stroke-linecap="round" />
                                        <path d="M8 37H18" stroke="url(#grad)" stroke-width="3.2"
                                            stroke-linecap="round" />

                                        <!-- Clock circle -->
                                        <path d="M24 10
                                            A22 22 0 1 1 20 49" stroke="url(#grad)" stroke-width="4"
                                            stroke-linecap="round" fill="none" />

                                        <!-- Clock hands -->
                                        <path d="M32 18V31L39 37" stroke="url(#hand)" stroke-width="3.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <span class="xl:text-lg lg:text-[15px] font-bold">پشتبیانی حرفه ای</span>
                                <span class="xl:text-sm lg:text-[10px] text-[#515151]"> مشاوره رایگان</span>
                            </div>
                            <span class="w-0.5 h-7/12 bg-[#e8e8e8] rounded-full"></span>
                            <div class="w-1/4 px-2 h-full flex flex-col justify-center items-center text-nowrap">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128" class="size-8"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">

                                        <!-- Badge -->
                                        <path d="M64 18
                                            C70 14 78 16 82 22
                                            C90 20 98 25 100 33
                                            C108 36 112 44 110 52
                                            C116 58 116 68 110 74
                                            C112 82 108 90 100 94
                                            C98 102 90 108 82 106
                                            C78 112 70 114 64 110
                                            C58 114 50 112 46 106
                                            C38 108 30 102 28 94
                                            C20 90 16 82 18 74
                                            C12 68 12 58 18 52
                                            C16 44 20 36 28 33
                                            C30 25 38 20 46 22
                                            C50 16 58 14 64 18Z" stroke="#222" stroke-width="4" />

                                        <!-- Inner Circle -->
                                        <circle cx="64" cy="58" r="20" stroke="red" stroke-width="4" />

                                        <!-- Red Highlight -->
                                        <circle cx="64" cy="58" r="20" stroke="#E86A7A" stroke-width="2.5"
                                            opacity="0.7" />

                                        <!-- Left Ribbon -->
                                        <path d="M48 88
                                            L38 116
                                            L54 104
                                            L60 122
                                            L66 94" stroke="red" stroke-width="4" />

                                        <!-- Right Ribbon -->
                                        <path d="M80 88
                                            L90 116
                                            L74 104
                                            L68 122
                                            L62 94" stroke="red" stroke-width="4" />

                                        <!-- Red Ribbon Shadows -->
                                        <path d="M90 116L74 104" stroke="#E86A7A" stroke-width="2.5" opacity="0.7" />

                                        <path d="M38 116L54 104" stroke="#E86A7A" stroke-width="2.5" opacity="0.4" />
                                    </svg>
                                </div>
                                <span class="xl:text-lg lg:text-[15px] font-bold">ضمانت کیفیت</span>
                                <span class="xl:text-sm lg:text-[10px] text-[#515151]">تضمین کیفیت چاپ</span>
                            </div>
                            <span class="w-0.5 h-7/12 bg-[#e8e8e8] rounded-full"></span>


                            <div class="w-1/4 h-full px-2 flex flex-col justify-center items-center text-nowrap">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-8" viewBox="0 0 64 64"
                                        fill="none">
                                        <defs>
                                            <linearGradient id="grad" x1="14" y1="52" x2="54" y2="12"
                                                gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#E53935" />
                                                <stop offset="0.35" stop-color="#2B2B2B" />
                                                <stop offset="0.7" stop-color="#2B2B2B" />
                                                <stop offset="1" stop-color="#E53935" />
                                            </linearGradient>

                                            <linearGradient id="hand" x1="28" y1="22" x2="36" y2="40"
                                                gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#F28B82" />
                                                <stop offset="1" stop-color="#C2185B" />
                                            </linearGradient>
                                        </defs>

                                        <!-- Speed lines -->
                                        <path d="M6 25H18" stroke="url(#grad)" stroke-width="3.2"
                                            stroke-linecap="round" />
                                        <path d="M2 31H20" stroke="url(#grad)" stroke-width="3.2"
                                            stroke-linecap="round" />
                                        <path d="M8 37H18" stroke="url(#grad)" stroke-width="3.2"
                                            stroke-linecap="round" />

                                        <!-- Clock circle -->
                                        <path d="M24 10
                                            A22 22 0 1 1 20 49" stroke="url(#grad)" stroke-width="4"
                                            stroke-linecap="round" fill="none" />

                                        <!-- Clock hands -->
                                        <path d="M32 18V31L39 37" stroke="url(#hand)" stroke-width="3.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <span class="xl:text-lg lg:text-[15px] font-bold">تحویل سریع</span>
                                <span class="text-sm text-[#515151]">در کوتاه ترین زمان</span>
                            </div>
                            <span class="w-0.5 h-7/12 bg-[#e8e8e8] rounded-full"></span>

                            <div class="w-1/4 px-2 h-full flex flex-col justify-center items-center text-nowrap">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-8" viewBox="0 0 64 64"
                                        fill="none">
                                        <defs>
                                            <linearGradient id="grad" x1="14" y1="52" x2="54" y2="12"
                                                gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#E53935" />
                                                <stop offset="0.35" stop-color="#2B2B2B" />
                                                <stop offset="0.7" stop-color="#2B2B2B" />
                                                <stop offset="1" stop-color="#E53935" />
                                            </linearGradient>

                                            <linearGradient id="hand" x1="28" y1="22" x2="36" y2="40"
                                                gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#F28B82" />
                                                <stop offset="1" stop-color="#C2185B" />
                                            </linearGradient>
                                        </defs>

                                        <!-- Speed lines -->
                                        <path d="M6 25H18" stroke="url(#grad)" stroke-width="3.2"
                                            stroke-linecap="round" />
                                        <path d="M2 31H20" stroke="url(#grad)" stroke-width="3.2"
                                            stroke-linecap="round" />
                                        <path d="M8 37H18" stroke="url(#grad)" stroke-width="3.2"
                                            stroke-linecap="round" />

                                        <!-- Clock circle -->
                                        <path d="M24 10
                                            A22 22 0 1 1 20 49" stroke="url(#grad)" stroke-width="4"
                                            stroke-linecap="round" fill="none" />

                                        <!-- Clock hands -->
                                        <path d="M32 18V31L39 37" stroke="url(#hand)" stroke-width="3.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <span class="xl:text-lg lg:text-[13px] font-bold">کیفیت رنگ بی نظیر</span>
                                <span class="xl:text-sm lg:text-[11px] text-[#515151]">چاپ با جدیدترین دستگاه ها</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lg:w-7/24 w-full max-lg:shadow_box max-lg:py-3">
                    <!-- form_order -->
                    <div class="w-full bg-white rounded-4xl flex flex-col justify-between gap-3 items-center xl:px-7 px-4 py-4 shadow_boxs">
                        <div class="flex flex-col items-center justify-center">

                            <div class="flex items-center justify-center gap-3">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="xl:size-5 size-3 size-5" viewBox="0 0 24 24"
                                        fill="red">

                                        <path d="M14 2L5 13h5v9l9-11h-5l0-9z" />
                                    </svg>
                                </div>
                                <span class="xl:text-[28px] lg:text-[23px] text-[28px] font-bold">ثبت سفارش <span
                                        class="text-red-500">سریع</span></span>
                            </div>
                            <p class="xl:text-[13px] lg:text-[10px] text-[13px] text-[#515151] font-bold">سفارش خود را در کمتر از 1 دقیقه ثبت کنید</p>
                        </div>
                        <div class="w-full flex gap-2 items-center justify-between">
                            <div
                                class="w-1/2 bg-white rounded-lg shadow_boxs_form_sub_heder flex gap-4 items-center px-4 py-3 lg:py-2">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="size-4">
                                        <path
                                            d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z" />
                                    </svg>
                                </div>
                                <input type="text" class="outline-none w-full xl:text-sm text-[12px] font-bold"
                                    placeholder="نام و نام خانوادگی">
                            </div>
                            <div
                                class="w-1/2 bg-white rounded-lg shadow_boxs_form_sub_heder flex gap-4 items-center px-4 py-3 lg:py-1.5">
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
                            class="w-full bg-white rounded-lg shadow_boxs_form_sub_heder flex gap-4 items-center justify-between px-4 py-3 lg:py-1.5">
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
                            class="w-full bg-white rounded-lg shadow_boxs_form_sub_heder flex gap-4 items-start justify-between p-4 ">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="size-4">
                                    <path
                                        d="M375.8 275.2c-16.4-7-35.4-2.4-46.7 11.4l-33.2 40.6c-46-26.7-84.4-65.1-111.1-111.1L225.3 183c13.8-11.3 18.5-30.3 11.4-46.7l-48-112C181.2 6.7 162.3-3.1 143.6 .9l-112 24C13.2 28.8 0 45.1 0 64v0C0 295.2 175.2 485.6 400.1 509.5c9.8 1 19.6 1.8 29.6 2.2c0 0 0 0 0 0c0 0 .1 0 .1 0c6.1 .2 12.1 .4 18.2 .4l0 0c18.9 0 35.2-13.2 39.1-31.6l24-112c4-18.7-5.8-37.6-23.4-45.1l-112-48zM441.5 464C225.8 460.5 51.5 286.2 48.1 70.5l99.2-21.3 43 100.4L154.4 179c-18.2 14.9-22.9 40.8-11.1 61.2c30.9 53.3 75.3 97.7 128.6 128.6c20.4 11.8 46.3 7.1 61.2-11.1l29.4-35.9 100.4 43L441.5 464zM48 64v0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0s0 0 0 0" />
                                </svg>
                            </div>
                            <!-- <input type="text" class="outline-none w-full text-sm font-bold" placeholder="شماره تماس"> -->
                            <textarea name="" rows="2" class="outline-none w-full xl:text-sm text-[12px] font-bold"
                                placeholder="توضیحات سفارش متزاز ، جنس طرح و ...."></textarea>
                        </div>
                        <div
                            class="w-full py-5 lg:py-2 bg-[#f7f7f7] rounded-lg border-2 border-[#dedede] flex gap-4 items-start justify-between relative">

                            <input type="file" id="file" class="invisible">
                            <label for="file" class="w-full h-full absolute top-0 Left-0 flex items-center justify-end cursor-pointer">
                                <div class="w-full  h-full flex  items-center justify-between  px-4 py-5 lg:py-1.5">
                                    <span class="size-5"></span>
                                    <div class="flex flex-col justify-center items-center">
                                        <p class="xl:text-sm lg:text-[12px] sm:text-[17px] text-[13px] font-bold">فایل خود را انتخاب کنید یا اینجا بکشید</p>
                                        <p class="xl:text-[9px] lg:text-[9px] sm:text-[14px] text-[11px] text-[#918c8c]">10MBحداگثر حجم :JPG,PNG,PDF,AI,CDR,ZIP</p>
                                    </div>
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="lg:size-5 xl:size-7 size-5">
                                            <path
                                                d="M354.9 121.7c13.8 16 36.5 21.1 55.9 12.5c8.9-3.9 18.7-6.2 29.2-6.2c39.8 0 72 32.2 72 72c0 4-.3 7.9-.9 11.7c-3.5 21.6 8.1 42.9 28.1 51.7C570.4 276.9 592 308 592 344c0 46.8-36.6 85.2-82.8 87.8c-.6 0-1.3 .1-1.9 .2H504 144c-53 0-96-43-96-96c0-41.7 26.6-77.3 64-90.5c19.2-6.8 32-24.9 32-45.3l0-.2v0 0c0-66.3 53.7-120 120-120c36.3 0 68.8 16.1 90.9 41.7zM512 480v-.2c71.4-4.1 128-63.3 128-135.8c0-55.7-33.5-103.7-81.5-124.7c1-6.3 1.5-12.8 1.5-19.3c0-66.3-53.7-120-120-120c-17.4 0-33.8 3.7-48.7 10.3C360.4 54.6 314.9 32 264 32C171.2 32 96 107.2 96 200l0 .2C40.1 220 0 273.3 0 336c0 79.5 64.5 144 144 144H464h40 8zM223 255c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l39-39V384c0 13.3 10.7 24 24 24s24-10.7 24-24V249.9l39 39c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-80-80c-9.4-9.4-24.6-9.4-33.9 0l-80 80z" />
                                        </svg>
                                    </div>

                                </div>
                            </label>
                        </div>
                        <div class="w-full py-3 lg:py-1.5 bg-red-500 flex gap-3 items-center justify-center rounded-xl">
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
{{--                        <div class="flex gap-3 items-center justify-center">--}}
{{--                            <div>--}}
{{--                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="size-4"--}}
{{--                                    fill="#918c8c">--}}
{{--                                    <path--}}
{{--                                        d="M224 64c44.2 0 80 35.8 80 80v48H144V144c0-44.2 35.8-80 80-80zM80 144v48H64c-35.3 0-64 28.7-64 64V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V256c0-35.3-28.7-64-64-64H368V144C368 64.5 303.5 0 224 0S80 64.5 80 144zM256 320v64c0 17.7-14.3 32-32 32s-32-14.3-32-32V320c0-17.7 14.3-32 32-32s32 14.3 32 32z" />--}}
{{--                                </svg>--}}
{{--                            </div>--}}
{{--                            <p class="text-[13px] text-[#918c8c]">اطلاعات شما نزد ما محفوظ است.</p>--}}
{{--                        </div>--}}
                    </div>
                    <!-- form_order -->

                </div>
                <!-- services_mobile -->
                <div class="w-full sm:flex max-sm:grid max-sm:grid-cols-2 max-sm:grid-rows-2 gap-y-4 gap-x-4 items-center justify-between items-center lg:hidden max-lg:bg-white max-lg:shadow_boxs mx-auto p-4 rounded-2xl mb-2 ">

                            <div class="w-full h-full flex flex-col justify-center items-center text-nowrap">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128" class="sm:size-8 size-10"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">

                                        <!-- Badge -->
                                        <path d="M64 18
                                            C70 14 78 16 82 22
                                            C90 20 98 25 100 33
                                            C108 36 112 44 110 52
                                            C116 58 116 68 110 74
                                            C112 82 108 90 100 94
                                            C98 102 90 108 82 106
                                            C78 112 70 114 64 110
                                            C58 114 50 112 46 106
                                            C38 108 30 102 28 94
                                            C20 90 16 82 18 74
                                            C12 68 12 58 18 52
                                            C16 44 20 36 28 33
                                            C30 25 38 20 46 22
                                            C50 16 58 14 64 18Z" stroke="#222" stroke-width="4" />

                                        <!-- Inner Circle -->
                                        <circle cx="64" cy="58" r="20" stroke="red" stroke-width="4" />

                                        <!-- Red Highlight -->
                                        <circle cx="64" cy="58" r="20" stroke="#E86A7A" stroke-width="2.5"
                                            opacity="0.7" />

                                        <!-- Left Ribbon -->
                                        <path d="M48 88
                                            L38 116
                                            L54 104
                                            L60 122
                                            L66 94" stroke="red" stroke-width="4" />

                                        <!-- Right Ribbon -->
                                        <path d="M80 88
                                            L90 116
                                            L74 104
                                            L68 122
                                            L62 94" stroke="red" stroke-width="4" />

                                        <!-- Red Ribbon Shadows -->
                                        <path d="M90 116L74 104" stroke="#E86A7A" stroke-width="2.5" opacity="0.7" />

                                        <path d="M38 116L54 104" stroke="#E86A7A" stroke-width="2.5" opacity="0.4" />
                                    </svg>
                                </div>
                                <span class="xl:text-lg lg:text-[15px]  text-[17px] font-bold">پشتبیانی حرفه ای</span>
                                <span class="xl:text-sm lg:text-[10px]  text-[14px] text-[#515151]"> مشاوره رایگان</span>
                            </div>
                            <span class="w-0.5 h-7/12 max-lg:hidden bg-[#e8e8e8] rounded-full"></span>
                            <div class="w-full h-full flex flex-col justify-center items-center text-nowrap ">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128" class="sm:size-8 size-10"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">

                                        <!-- Badge -->
                                        <path d="M64 18
                                            C70 14 78 16 82 22
                                            C90 20 98 25 100 33
                                            C108 36 112 44 110 52
                                            C116 58 116 68 110 74
                                            C112 82 108 90 100 94
                                            C98 102 90 108 82 106
                                            C78 112 70 114 64 110
                                            C58 114 50 112 46 106
                                            C38 108 30 102 28 94
                                            C20 90 16 82 18 74
                                            C12 68 12 58 18 52
                                            C16 44 20 36 28 33
                                            C30 25 38 20 46 22
                                            C50 16 58 14 64 18Z" stroke="#222" stroke-width="4" />

                                        <!-- Inner Circle -->
                                        <circle cx="64" cy="58" r="20" stroke="red" stroke-width="4" />

                                        <!-- Red Highlight -->
                                        <circle cx="64" cy="58" r="20" stroke="#E86A7A" stroke-width="2.5"
                                            opacity="0.7" />

                                        <!-- Left Ribbon -->
                                        <path d="M48 88
                                            L38 116
                                            L54 104
                                            L60 122
                                            L66 94" stroke="red" stroke-width="4" />

                                        <!-- Right Ribbon -->
                                        <path d="M80 88
                                            L90 116
                                            L74 104
                                            L68 122
                                            L62 94" stroke="red" stroke-width="4" />

                                        <!-- Red Ribbon Shadows -->
                                        <path d="M90 116L74 104" stroke="#E86A7A" stroke-width="2.5" opacity="0.7" />

                                        <path d="M38 116L54 104" stroke="#E86A7A" stroke-width="2.5" opacity="0.4" />
                                    </svg>
                                </div>
                                <span class="xl:text-lg lg:text-[15px] text-[17px] font-bold">ضمانت کیفیت</span>
                                <span class="xl:text-sm lg:text-[10px] text-[14px] text-[#515151]">تضمین کیفیت چاپ</span>
                            </div>
                            <span class="w-0.5 h-7/12 max-lg:hidden bg-[#e8e8e8] rounded-full"></span>


                            <div class="w-full h-full flex flex-col justify-center items-center text-nowrap">
                                <div>
                                    <!-- <svg xmlns="http://www.w3.org/2000/svg" class="size-8" viewBox="0 0 64 64"
                                        fill="none">
                                        <defs>
                                            <linearGradient id="grad" x1="14" y1="52" x2="54" y2="12"
                                                gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#E53935" />
                                                <stop offset="0.35" stop-color="#2B2B2B" />
                                                <stop offset="0.7" stop-color="#2B2B2B" />
                                                <stop offset="1" stop-color="#E53935" />
                                            </linearGradient>

                                            <linearGradient id="hand" x1="28" y1="22" x2="36" y2="40"
                                                gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#F28B82" />
                                                <stop offset="1" stop-color="#C2185B" />
                                            </linearGradient>
                                        </defs>

                                        Speed lines
                                        <path d="M6 25H18" stroke="url(#grad)" stroke-width="3.2"
                                            stroke-linecap="round" />
                                        <path d="M2 31H20" stroke="url(#grad)" stroke-width="3.2"
                                            stroke-linecap="round" />
                                        <path d="M8 37H18" stroke="url(#grad)" stroke-width="3.2"
                                            stroke-linecap="round" />

                                        Clock circle
                                        <path d="M24 10
                                            A22 22 0 1 1 20 49" stroke="url(#grad)" stroke-width="4"
                                            stroke-linecap="round" fill="none" />

                                        Clock hands
                                        <path d="M32 18V31L39 37" stroke="url(#hand)" stroke-width="3.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg> -->
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128" class="sm:size-8 size-10"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">

                                        <!-- Badge -->
                                        <path d="M64 18
                                            C70 14 78 16 82 22
                                            C90 20 98 25 100 33
                                            C108 36 112 44 110 52
                                            C116 58 116 68 110 74
                                            C112 82 108 90 100 94
                                            C98 102 90 108 82 106
                                            C78 112 70 114 64 110
                                            C58 114 50 112 46 106
                                            C38 108 30 102 28 94
                                            C20 90 16 82 18 74
                                            C12 68 12 58 18 52
                                            C16 44 20 36 28 33
                                            C30 25 38 20 46 22
                                            C50 16 58 14 64 18Z" stroke="#222" stroke-width="4" />

                                        <!-- Inner Circle -->
                                        <circle cx="64" cy="58" r="20" stroke="red" stroke-width="4" />

                                        <!-- Red Highlight -->
                                        <circle cx="64" cy="58" r="20" stroke="#E86A7A" stroke-width="2.5"
                                            opacity="0.7" />

                                        <!-- Left Ribbon -->
                                        <path d="M48 88
                                            L38 116
                                            L54 104
                                            L60 122
                                            L66 94" stroke="red" stroke-width="4" />

                                        <!-- Right Ribbon -->
                                        <path d="M80 88
                                            L90 116
                                            L74 104
                                            L68 122
                                            L62 94" stroke="red" stroke-width="4" />

                                        <!-- Red Ribbon Shadows -->
                                        <path d="M90 116L74 104" stroke="#E86A7A" stroke-width="2.5" opacity="0.7" />

                                        <path d="M38 116L54 104" stroke="#E86A7A" stroke-width="2.5" opacity="0.4" />
                                    </svg>
                                </div>
                                <span class="xl:text-lg lg:text-[15px] text-[17px] font-bold">تحویل سریع</span>
                                <span class="xl:text-sm lg:text-[10px] text-[14px] text-[#515151]">در کوتاه ترین زمان</span>
                            </div>
                            <span class="w-0.5 h-7/12 max-lg:hidden bg-[#e8e8e8] rounded-full"></span>
                            <div class="w-full h-full flex flex-col justify-center items-center text-nowrap">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128" class="sm:size-8 size-10"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">

                                        <!-- Badge -->
                                        <path d="M64 18
                                            C70 14 78 16 82 22
                                            C90 20 98 25 100 33
                                            C108 36 112 44 110 52
                                            C116 58 116 68 110 74
                                            C112 82 108 90 100 94
                                            C98 102 90 108 82 106
                                            C78 112 70 114 64 110
                                            C58 114 50 112 46 106
                                            C38 108 30 102 28 94
                                            C20 90 16 82 18 74
                                            C12 68 12 58 18 52
                                            C16 44 20 36 28 33
                                            C30 25 38 20 46 22
                                            C50 16 58 14 64 18Z" stroke="#222" stroke-width="4" />

                                        <!-- Inner Circle -->
                                        <circle cx="64" cy="58" r="20" stroke="red" stroke-width="4" />

                                        <!-- Red Highlight -->
                                        <circle cx="64" cy="58" r="20" stroke="#E86A7A" stroke-width="2.5"
                                            opacity="0.7" />

                                        <!-- Left Ribbon -->
                                        <path d="M48 88
                                            L38 116
                                            L54 104
                                            L60 122
                                            L66 94" stroke="red" stroke-width="4" />

                                        <!-- Right Ribbon -->
                                        <path d="M80 88
                                            L90 116
                                            L74 104
                                            L68 122
                                            L62 94" stroke="red" stroke-width="4" />

                                        <!-- Red Ribbon Shadows -->
                                        <path d="M90 116L74 104" stroke="#E86A7A" stroke-width="2.5" opacity="0.7" />

                                        <path d="M38 116L54 104" stroke="#E86A7A" stroke-width="2.5" opacity="0.4" />
                                    </svg>
                                </div>
                                <span class="xl:text-lg lg:text-[15px] text-[17px] font-bold">کیفیت رنگ  عالی</span>
                                <span class="xl:text-sm lg:text-[10px] text-[14px] text-[#515151]">چاپ با جدیدترین دستگاه ها</span>
                            </div>
                        </div>




            </div>
            <!-- services_mobile -->
            <div class="w-11/12 lg:bg-white h-full mx-auto flex flex-col  items-end rounded-2xl lg:shadow_boxs pb-2">
                <div class="lg:w-11/12 w-full flex flex-col max-lg:gap-3 lg:flex-row lg:justify-between lg:items-center ">
                    <div class="lg:w-4/12 max-lg:bg-white w-full max-lg:shadow_boxs flex flex-col lg:flex-row gap-5 border-l-1 border-[#e8e8e8] items-center justify-start  max-lg:rounded-2xl py-4">
                        <span class="w-0.5 h-8/12 bg-red-500 rounded-full hidden"></span>
                        <div class="flex flex-col max-lg:items-center lg:gap-1 gap-2 justify-center items-start">
                            <h2 class="text-2xl font-bold">مجموعه چاپ <span class="text-red-500">شاهکار</span></h2>
                             <span class="w-2/12 h-0.5 bg-red-500 rounded-full lg:hidden"></span>
                            <div class="xl:text-sm lg:text-[11px] sm:text-[17px] text-[12px] font-bold flex flex-col items-center lg:items-start">
                                <p>این مجموعه با هدف خلق آثار هنری ماندگار و به همراه</p>
                                <p>محصولات متنوع در صنعت چاپ در خدمت همه مشتریان عزیز میباشد</p>
                            </div>
                        </div>
                    </div>
{{--                    <div class="min-w-10  bg-red-500 flex"></div>--}}
                    <div class="lg:w-8/12 w-full max-lg:bg-white h-full max-lg:shadow_boxs flex flex-col gap-4 lg:px-7 max-lg:order-1 max-lg:rounded-2xl p-4">
                        <div class="w-full flex gap-5 items-center justify-center">
                            <span class="w-full h-0.5 bg-[#e8e8e8] rounded-full"></span>
                            <span class="xl:text-2xl lg:text-xl font-bold flex justify-center items-center text-nowrap">ارتباط با
                                ما</span>
                            <span class="w-full h-0.5 bg-[#e8e8e8] rounded-full"></span>
                        </div>
                        <div class="w-full h-full sm:flex max-sm:grid max-sm:grid-cols-2 max-sm:grid-rows-2 gap-y-4 gap-x-4 items-center justify-between">
                            <div class="w-full h-full flex lg:gap-4 gap-2 justify-center items-center">
                                <div class="flex flex-col items-end justify-center xl:text-sm text-[11px]">
                                    <span class=" font-bold">صنعت چاپ در خدمت</span>
                                    <span class="font-bold">همه مشتریان عزیز</span>
                                </div>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="xl:size-7 lg:size-6 size-5">
                                        <path
                                            d="M368 192c0-97.2-78.8-176-176-176S16 94.8 16 192c0 18.7 6.4 42.5 17.8 69.6c11.3 26.9 27.1 55.8 44.7 84.3c35.2 57 76.8 111.4 102.3 143.2c5.9 7.3 16.6 7.3 22.4 0c25.5-31.8 67.1-86.2 102.3-143.2c17.6-28.5 33.4-57.4 44.7-84.3C361.6 234.5 368 210.7 368 192zm16 0c0 87.4-117 243-168.3 307.2c-12.3 15.3-35.1 15.3-47.4 0C117 435 0 279.4 0 192C0 86 86 0 192 0S384 86 384 192zM192 112a80 80 0 1 1 0 160 80 80 0 1 1 0-160zm64 80a64 64 0 1 0 -128 0 64 64 0 1 0 128 0z" />
                                    </svg>
                                </div>
                            </div>
{{--                            <span class="min-w-[2px] h-1/2 bg-[#e8e8e8] rounded-full lg:hidden"></span>--}}
                            <div class="w-full h-full flex lg:gap-4 gap-1 justify-center items-center">
                                <div class="flex flex-col items-end justify-center xl:text-sm text-[12px]">
                                    <span class="font-bold">www.ringaa.ir</span>
                                    <span class="font-bold">صفحه رینگا</span>
                                </div>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        viewBox="0 0 20 20" id="entypo-dribbble" class="xl:size-7 lg:size-6 size-5">
                                        <g>
                                            <path
                                                d="M9.565 7.421C8.207 5.007 6.754 3.038 6.648 2.893A7.876 7.876 0 0 0 2.311 8.38c.206.004 3.482.043 7.254-.959zm.978 2.64a11 11 0 0 1 .309-.094 26.219 26.219 0 0 0-.637-1.336C6.169 9.843 2.287 9.755 2.15 9.751c-.003.084-.007.166-.007.25 0 2.019.763 3.861 2.016 5.252l-.005-.006s2.15-3.814 6.389-5.186zm-5.372 6.133v-.004c-.058-.045-.12-.086-.178-.135.106.085.178.139.178.139zM8.118 2.372a.546.546 0 0 1-.015.004c.006-.002.014-.002.014-.002l.001-.002zm7.071 1.732A7.83 7.83 0 0 0 10 2.143c-.639 0-1.258.078-1.852.221.12.16 1.595 2.119 2.938 4.584 2.962-1.109 4.081-2.812 4.103-2.844zM10 19.2a9.2 9.2 0 0 1-9.199-9.199A9.199 9.199 0 0 1 10 .8a9.2 9.2 0 0 1 9.2 9.201A9.2 9.2 0 0 1 10 19.2zm1.336-7.914c-4.611 1.607-6.134 4.838-6.165 4.904a7.818 7.818 0 0 0 4.828 1.666 7.83 7.83 0 0 0 3.067-.621c-.116-.689-.573-3.096-1.679-5.967a1.464 1.464 0 0 1-.051.018zm.354-3.166c.184.373.358.754.523 1.139.059.135.114.272.17.406 2.713-.342 5.385.238 5.473.256a7.84 7.84 0 0 0-1.787-4.912c-.018.023-1.279 1.843-4.379 3.111zm1.171 2.785c1.031 2.836 1.449 5.142 1.529 5.611a7.858 7.858 0 0 0 3.367-5.27c-.156-.05-2.356-.747-4.896-.341z">
                                            </path>
                                        </g>
                                    </svg>
                                </div>
                            </div>
{{--                            <span class="min-w-[2px] h-1/2 bg-[#e8e8e8] rounded-full lg:hidden"></span>--}}
                            <div class="w-full h-full flex lg:gap-4 gap-1 justify-center items-center">
                                <div class="flex flex-col items-end justify-center xl:text-sm text-[12px]">
                                    <span class="font-bold">shahkar.print</span>
                                    <span class="font-bold">اینستاگرام</span>
                                </div>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="xl:size-7 size-5"
                                        fill="red">
                                        <path
                                            d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                                    </svg>
                                </div>
                            </div>
{{--                            <span class="min-w-[2px] h-1/2 bg-[#e8e8e8] rounded-full"></span>--}}
                            <div class="w-full h-full flex lg:gap-4 gap-1 justify-center items-center">
                                <div class="flex flex-col items-end justify-center xl:text-sm text-[12px]">
                                    <span class="font-bold">09371509497</span>
                                    <span class="font-bold">شماره تماس</span>
                                </div>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="xl:size-7 lg:size-6 size-5">
                                        <path
                                            d="M375.8 275.2c-16.4-7-35.4-2.4-46.7 11.4l-33.2 40.6c-46-26.7-84.4-65.1-111.1-111.1L225.3 183c13.8-11.3 18.5-30.3 11.4-46.7l-48-112C181.2 6.7 162.3-3.1 143.6 .9l-112 24C13.2 28.8 0 45.1 0 64v0C0 295.2 175.2 485.6 400.1 509.5c9.8 1 19.6 1.8 29.6 2.2c0 0 0 0 0 0c0 0 .1 0 .1 0c6.1 .2 12.1 .4 18.2 .4l0 0c18.9 0 35.2-13.2 39.1-31.6l24-112c4-18.7-5.8-37.6-23.4-45.1l-112-48zM441.5 464C225.8 460.5 51.5 286.2 48.1 70.5l99.2-21.3 43 100.4L154.4 179c-18.2 14.9-22.9 40.8-11.1 61.2c30.9 53.3 75.3 97.7 128.6 128.6c20.4 11.8 46.3 7.1 61.2-11.1l29.4-35.9 100.4 43L441.5 464zM48 64v0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0s0 0 0 0">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- sub_heder_end -->
    </header>
{{--    <main class="h-500">--}}
{{--    </main>--}}





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
                pup_up_search_item_box.classList.add('mt-26')

                // pup_up_search_item.classList.remove('opacity-0')
            }
            if (item == 'close') {
                pup_up_search_item.classList.add('h-0')
                pup_up_search_item.classList.remove('h-dvh')
                // pup_up_search_item.classList.remove('pb-25')

                pup_up_search_item_box.classList.add('h-0')
                pup_up_search_item_box.classList.remove('h-1/2')
                pup_up_search_item_box.classList.remove('mt-26')

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