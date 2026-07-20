<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> --}}
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}" type="text/css">
    <title>@yield('title')</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/IMG_20251225_131334_688.png') }}">
    <script src="{{ asset('assets/js/tailwind.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <style>
        :root {
            <?php
            foreach ($settings as $setting) {
                echo $setting->meta_key . ': ' . $setting->meta_value . ';';
            }
            ?>
        }
    </style>
</head>

<body>

    {{-- اسلایدر نوشته شده توسط مهدی بندعلی رو اضافه کردیم --}}
    {{-- و چون که داخل کد های هدر کامنت بود به همین دلیل نمیشد کل هدر رو کامنت کرد و از این رو پاکش کردم اما در برنچ زیر آخرین نسخه هدر موجود هست --}}
    {{-- mr.olyafam_debuging --}}

    <!-- hamburger side menu -->
    <aside id="responsiveHamburgerMenu"
        class="sm:hidden flex fixed z-5 w-full h-dvh transition-all duration-800 invisible opacity-0 -right-full top-0 delay-250 shadow-md">
        <div class="w-10/12 md:w-4/12 bg-[#E2E2E2] flex flex-col items-center gap-10 p-5">
            <div class="w-full relative" onclick="hamburgerMenu('close')">
                <button class="absolute top-0 left-0 size-5 flex flex-col justify-center items-center cursor-pointer">
                    <span class="w-full h-[2.5px] rounded-full bg-black rotate-45 translate-y-1/2"></span>
                    <span class="w-full h-[2.5px] rounded-full bg-black -rotate-45 -translate-y-1/2"></span>
                </button>
            </div>
            <img src="{{ asset('assets/img/IMG_20251225_131334_688.png') }}" alt="logo" class="w-1/2">
            <ul class="flex flex-col justify-between items-start gap-10 w-full">
                <li class="group">
                    <a href="{{ route('home') }}"
                        class="flex items-center gap-2 font-bold text-sm text-[var(--light-theme-text-color)]">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M10.8787 2.87868C11.5038 2.25357 12.517 2.25357 13.1421 2.87868L20.1421 9.87868C20.4428 10.1794 20.4428 10.6669 20.1421 10.9676C19.8413 11.2684 19.3538 11.2684 19.0531 10.9676L12.0531 3.96762C12.014 3.92857 11.9508 3.92857 11.9117 3.96762L4.91169 10.9676C4.61094 11.2684 4.12338 11.2684 3.82263 10.9676C3.52188 10.6669 3.52188 10.1794 3.82263 9.87868L10.8787 2.87868ZM6.75 10.75C7.16421 10.75 7.5 11.0858 7.5 11.5V18C7.5 18.4142 7.83579 18.75 8.25 18.75H15.75C16.1642 18.75 16.5 18.4142 16.5 18V11.5C16.5 11.0858 16.8358 10.75 17.25 10.75C17.6642 10.75 18 11.0858 18 11.5V18C18 19.2426 16.9926 20.25 15.75 20.25H8.25C7.00736 20.25 6 19.2426 6 18V11.5C6 11.0858 6.33579 10.75 6.75 10.75Z"
                                fill="currentColor" />
                        </svg>
                        <span class="group-hover:text-[var(--primary-color)] transition">خانه</span>
                    </a>
                </li>
                <li class="group">
                    <a href="{{ route('category.index') }}"
                        class="flex items-center gap-2 font-bold text-sm text-[var(--light-theme-text-color)]">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="" width="22" height="22"
                            class="fill-[var(--light-theme-text-color)] group-hover:fill-[var(--primary-color)] transition"
                            viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                            <path
                                d="M22.5,19.7h20c1.4,0,2.5,1.1,2.5,2.5v54.9c0,1.4-1.1,2.5-2.5,2.5h-20c-1.4,0-2.5-1.1-2.5-2.5V22.2  C20,20.8,21.1,19.7,22.5,19.7z">
                            </path>
                            <path
                                d="M57.5,19.6h20c1.4,0,2.5,1.1,2.5,2.5V42c0,1.4-1.1,2.5-2.5,2.5h-20c-1.4,0-2.5-1.1-2.5-2.5V22.1  C55,20.7,56.1,19.6,57.5,19.6z">
                            </path>
                            <path
                                d="M57.5,54.6h20c1.4,0,2.5,1.1,2.5,2.5v19.9c0,1.4-1.1,2.5-2.5,2.5h-20c-1.4,0-2.5-1.1-2.5-2.5V57.1  C55,55.8,56.1,54.6,57.5,54.6z">
                            </path>
                        </svg>
                        <span class="group-hover:text-[var(--primary-color)] transition">دسته بندی محصولات</span>
                    </a>
                </li>
                <li class="group">
                    <a href="{{ route('product-index') }}"
                        class="flex items-center gap-2 font-bold text-sm text-[var(--light-theme-text-color)]">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M10.9608 2.58241C11.6154 2.25405 12.3846 2.25405 13.0392 2.58241L18.7892 5.46627C19.5504 5.84803 20.0312 6.62605 20.0312 7.47767V16.5223C20.0312 17.3739 19.5504 18.152 18.7892 18.5337L13.0392 21.4176C12.3846 21.746 11.6154 21.746 10.9608 21.4176L5.21078 18.5337C4.44959 18.152 3.96875 17.3739 3.96875 16.5223V7.47767C3.96875 6.62605 4.44959 5.84803 5.21078 5.46627L10.9608 2.58241ZM11.6323 3.92305C11.3999 3.80648 11.1261 3.80648 10.8937 3.92305L5.8828 6.43689L12 9.50435L18.1172 6.43689L13.1063 3.92305C12.8739 3.80648 12.6001 3.80648 12.3677 3.92305H11.6323ZM5.46875 7.71191V16.5223C5.46875 16.8059 5.62899 17.0653 5.8828 17.1925L11.25 19.8848V10.8267L5.46875 7.71191ZM12.75 19.8848L18.1172 17.1925C18.371 17.0653 18.5312 16.8059 18.5312 16.5223V7.71191L12.75 10.8267V19.8848Z"
                                fill="currentColor" />
                        </svg>
                        <span class="group-hover:text-[var(--primary-color)] transition">محصولات</span>
                    </a>
                </li>
                <li class="group">
                    <a href="{{ route('aboutus-index') }}"
                        class="flex items-center gap-2 font-bold text-sm text-[var(--light-theme-text-color)]">
                        <svg width="22" height="22" viewBox="0 0 25 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                            class="fill-[var(--light-theme-text-color)] group-hover:fill-[var(--primary-color)] transition">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M8.77539 8C8.77539 6.20524 10.23 4.75 12.0248 4.75C13.8196 4.75 15.2742 6.20524 15.2742 8C15.2742 9.79476 13.8196 11.25 12.0248 11.25C10.23 11.25 8.77539 9.79476 8.77539 8ZM12.0248 6.25C11.0588 6.25 10.2754 7.03334 10.2754 8C10.2754 8.96666 11.0588 9.75 12.0248 9.75C12.9908 9.75 13.7742 8.96666 13.7742 8C13.7742 7.03334 12.9908 6.25 12.0248 6.25Z"
                                fill=""></path>
                            <path
                                d="M7.63831 15.9322C8.61335 14.5496 10.308 13.75 12.0254 13.75C13.7428 13.75 15.4374 14.5496 16.4125 15.9322C16.6512 16.2707 17.1191 16.3516 17.4576 16.1129C17.7961 15.8742 17.877 15.4063 17.6383 15.0678C16.3534 13.2457 14.1781 12.25 12.0254 12.25C9.87273 12.25 7.6974 13.2457 6.41247 15.0678C6.17375 15.4063 6.25465 15.8742 6.59315 16.1129C6.93166 16.3516 7.39959 16.2707 7.63831 15.9322Z"
                                fill=""></path>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M8.39239 0.25H15.6584C16.7505 0.249995 17.616 0.24999 18.3137 0.306988C19.027 0.365274 19.6307 0.486882 20.1818 0.76772C21.0756 1.22312 21.8023 1.94978 22.2577 2.84355C22.5385 3.39472 22.6601 3.99834 22.7184 4.71173C22.7754 5.40935 22.7754 6.27484 22.7754 7.36698V13.633C22.7754 14.7252 22.7754 15.5906 22.7184 16.2883C22.6601 17.0017 22.5385 17.6053 22.2577 18.1565C21.8023 19.0502 21.0756 19.7769 20.1818 20.2323C19.6307 20.5131 19.027 20.6347 18.3137 20.693C17.616 20.75 16.7505 20.75 15.6584 20.75L14.9315 20.75L13.9754 22.2146C13.7674 22.5334 13.5839 22.8145 13.4155 23.0275C13.2416 23.2473 13.0189 23.4815 12.702 23.6144C12.2692 23.7959 11.7816 23.7959 11.3487 23.6144C11.0318 23.4815 10.8091 23.2473 10.6353 23.0275C10.4668 22.8145 10.2834 22.5335 10.0753 22.2146L9.11931 20.75L8.39237 20.75C7.30024 20.75 6.43474 20.75 5.73712 20.693C5.02374 20.6347 4.42011 20.5131 3.86894 20.2323C2.97517 19.7769 2.24851 19.0502 1.79311 18.1565C1.51227 17.6053 1.39066 17.0017 1.33238 16.2883C1.27538 15.5906 1.27539 14.7252 1.27539 13.633V7.367C1.27539 6.27486 1.27538 5.40935 1.33238 4.71173C1.39066 3.99835 1.51227 3.39472 1.79311 2.84355C2.24851 1.94978 2.97517 1.22312 3.86894 0.76772C4.42011 0.486882 5.02374 0.365274 5.73712 0.306988C6.43474 0.24999 7.30025 0.249995 8.39239 0.25ZM5.85927 1.80201C5.23864 1.85271 4.85439 1.94909 4.54992 2.10423C3.9384 2.41582 3.44121 2.913 3.12962 3.52453C2.97448 3.829 2.8781 4.21325 2.8274 4.83388C2.77597 5.46326 2.77539 6.26752 2.77539 7.4V13.6C2.77539 14.7325 2.77597 15.5367 2.8274 16.1661C2.8781 16.7867 2.97448 17.171 3.12962 17.4755C3.44121 18.087 3.9384 18.5842 4.54992 18.8958C4.85439 19.0509 5.23864 19.1473 5.85927 19.198C6.48866 19.2494 7.29291 19.25 8.42539 19.25H9.09224L9.12556 19.2499C9.24264 19.2492 9.43566 19.248 9.62138 19.305C9.78004 19.3537 9.92742 19.4335 10.0549 19.5397C10.2042 19.6641 10.3087 19.8264 10.3721 19.9248L10.3902 19.9528L11.3136 21.3674C11.5449 21.7218 11.691 21.9442 11.8118 22.097C11.8863 22.1912 11.9264 22.2256 11.9381 22.2348C11.9944 22.2558 12.0564 22.2558 12.1127 22.2348C12.1244 22.2256 12.1644 22.1912 12.239 22.097C12.3598 21.9442 12.5059 21.7218 12.7372 21.3674L13.6606 19.9528L13.6787 19.9248C13.7421 19.8264 13.8466 19.6641 13.9959 19.5397C14.1234 19.4335 14.2707 19.3537 14.4294 19.305C14.6151 19.248 14.8081 19.2492 14.9252 19.2499L14.9585 19.25H15.6254C16.7579 19.25 17.5621 19.2494 18.1915 19.198C18.8121 19.1473 19.1964 19.0509 19.5009 18.8958C20.1124 18.5842 20.6096 18.087 20.9212 17.4755C21.0763 17.171 21.1727 16.7867 21.2234 16.1661C21.2748 15.5367 21.2754 14.7325 21.2754 13.6V7.4C21.2754 6.26752 21.2748 5.46326 21.2234 4.83388C21.1727 4.21325 21.0763 3.829 20.9212 3.52453C20.6096 2.913 20.1124 2.41582 19.5009 2.10423C19.1964 1.94909 18.8121 1.85271 18.1915 1.80201C17.5621 1.75058 16.7579 1.75 15.6254 1.75H8.42539C7.29291 1.75 6.48866 1.75058 5.85927 1.80201Z"
                                fill=""></path>
                        </svg>
                        <span class="group-hover:text-[var(--primary-color)] transition">درباره ما</span>
                    </a>
                </li>
                <li class="group">
                    <a href="#"
                        class="flex items-center gap-2 font-bold text-sm text-[var(--light-theme-text-color)]">
                        <svg width="22" height="22" viewBox="0 0 25 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                            class="fill-[var(--light-theme-text-color)] group-hover:fill-[var(--primary-color)] transition">
                            <g clip-path="url(#clip0_683_2259)">
                                <path
                                    d="M11.8637 10.7163C11.4558 10.6444 11.0668 10.9167 10.9949 11.3247C10.9229 11.7326 11.1953 12.1216 11.6032 12.1935L17.5121 13.2354C17.92 13.3073 18.309 13.0349 18.3809 12.627C18.4528 12.2191 18.1805 11.8301 17.7725 11.7582L11.8637 10.7163Z"
                                    fill=""></path>
                                <path
                                    d="M11.6892 7.38538C11.7611 6.97746 12.1501 6.70509 12.558 6.77701L16.2215 7.42298C16.6294 7.49491 16.9018 7.8839 16.8299 8.29182C16.7579 8.69974 16.3689 8.97212 15.961 8.90019L12.2976 8.25422C11.8896 8.1823 11.6173 7.7933 11.6892 7.38538Z"
                                    fill=""></path>
                                <path
                                    d="M11.4461 14.7044C11.0382 14.6325 10.6492 14.9048 10.5773 15.3128C10.5053 15.7207 10.7777 16.1097 11.1856 16.1816L17.0945 17.2235C17.5024 17.2954 17.8914 17.023 17.9633 16.6151C18.0352 16.2072 17.7629 15.8182 17.3549 15.7463L11.4461 14.7044Z"
                                    fill=""></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M14.9488 1.6388L18.2629 2.22317C19.2009 2.38855 19.9499 2.52061 20.5461 2.6767C21.1576 2.8368 21.6725 3.03724 22.1186 3.3734C22.8354 3.91353 23.3628 4.66672 23.6252 5.52502C23.7885 6.05919 23.8007 6.61159 23.742 7.24097C23.6848 7.85461 23.5527 8.6036 23.3873 9.54156L22.0302 17.2381C21.8648 18.1761 21.7328 18.9251 21.5767 19.5213C21.4166 20.1328 21.2161 20.6477 20.88 21.0938C20.3398 21.8105 19.5867 22.3379 18.7284 22.6003C18.1942 22.7637 17.6418 22.7759 17.0124 22.7172C16.3988 22.66 15.6498 22.5279 14.7119 22.3625L12.0262 21.8889L9.33969 22.3626C8.40188 22.528 7.65266 22.6601 7.03909 22.7173C6.40972 22.7761 5.85731 22.7638 5.32314 22.6005C4.46485 22.3381 3.71166 21.8107 3.17152 21.0939C2.83536 20.6478 2.63492 20.1329 2.47483 19.5214C2.31874 18.9252 2.18668 18.1762 2.0213 17.2382L0.664189 9.54171C0.498794 8.60375 0.366722 7.85476 0.309482 7.24112C0.250773 6.61174 0.263019 6.05934 0.426332 5.52517C0.688738 4.66687 1.21613 3.91368 1.93291 3.37355C2.37901 3.03739 2.89391 2.83695 3.50542 2.67685C4.10162 2.52077 4.85059 2.38871 5.78854 2.22333L6.10068 2.16829C6.5086 2.09636 6.8976 2.36874 6.96952 2.77666C7.04145 3.18458 6.76907 3.57357 6.36115 3.6455L6.08119 3.69487C5.1038 3.86721 4.41528 3.9892 3.88532 4.12795C3.36385 4.26447 3.06061 4.40197 2.83564 4.5715C2.37183 4.921 2.03058 5.40836 1.86079 5.96373C1.77843 6.23312 1.75293 6.56509 1.803 7.10181C1.85388 7.64726 1.97473 8.33599 2.14707 9.31338L3.49284 16.9456C3.66518 17.923 3.78718 18.6115 3.92592 19.1415C4.06244 19.663 4.19994 19.9662 4.36947 20.1912C4.71897 20.655 5.20633 20.9962 5.7617 21.166C6.03109 21.2484 6.36307 21.2739 6.89978 21.2238C7.26716 21.1896 7.69952 21.1236 8.2413 21.0314C7.98998 20.9215 7.75794 20.7906 7.54201 20.6279C6.82522 20.0878 6.29783 19.3346 6.03543 18.4763C5.87211 17.9421 5.85987 17.3897 5.91858 16.7603C5.97582 16.1467 6.10789 15.3977 6.27329 14.4597L7.63039 6.76321C7.79577 5.82524 7.92783 5.07624 8.08392 4.48002C8.24402 3.86852 8.44446 3.35362 8.78062 2.90752C9.32075 2.19074 10.0739 1.66335 10.9322 1.40094C11.4664 1.23763 12.0188 1.22538 12.6482 1.28409C13.2618 1.34133 14.0108 1.47341 14.9488 1.6388ZM14.9401 20.8796L11.6903 20.3066C10.7129 20.1342 10.0244 20.0122 9.49441 19.8735C8.97294 19.737 8.6697 19.5995 8.44473 19.4299C7.98093 19.0804 7.63968 18.5931 7.46988 18.0377C7.38752 17.7683 7.36203 17.4363 7.41209 16.8996C7.46297 16.3542 7.58382 15.6654 7.75616 14.6881L9.10193 7.0558C9.27427 6.07841 9.39627 5.38989 9.53502 4.85992C9.67154 4.33846 9.80904 4.03522 9.97857 3.81024C10.3281 3.34644 10.8154 3.00519 11.3708 2.8354C11.6402 2.75304 11.9722 2.72754 12.5089 2.77761C13.0543 2.82849 13.7431 2.94934 14.7204 3.12168L17.9703 3.69471C18.9477 3.86705 19.6362 3.98905 20.1662 4.1278C20.6877 4.26432 20.9909 4.40182 21.2159 4.57135C21.6797 4.92085 22.0209 5.40821 22.1907 5.96357C22.2731 6.23296 22.2986 6.56494 22.2485 7.10166C22.1976 7.64711 22.0768 8.33584 21.9044 9.31323L20.5587 16.9455C20.3863 17.9229 20.2643 18.6114 20.1256 19.1414C19.9891 19.6628 19.8516 19.9661 19.682 20.191C19.3325 20.6548 18.8452 20.9961 18.2898 21.1659C18.0204 21.2482 17.6884 21.2737 17.1517 21.2237C16.6063 21.1728 15.9175 21.0519 14.9401 20.8796Z"
                                    fill=""></path>
                            </g>
                            <defs>
                                <clipPath id="clip0_683_2259">
                                    <rect width="24" height="24" fill="white"
                                        transform="translate(0.0253906)">
                                    </rect>
                                </clipPath>
                            </defs>
                        </svg>
                        <span class="group-hover:text-[var(--primary-color)] transition">مقالات</span>
                    </a>
                </li>
                <li class="group">
                    <a href="{{ route('contactus-create') }}"
                        class="flex items-center gap-2 font-bold text-sm text-[var(--light-theme-text-color)]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="22" height="18"
                            class="fill-[var(--light-theme-text-color)] group-hover:fill-[var(--primary-color)] transition">
                            <path
                                d="M240 48H416c8.8 0 16 7.2 16 16V448c0 8.8-7.2 16-16 16H240V48zm-48 0V464H128c-8.8 0-16-7.2-16-16V416h24c13.3 0 24-10.7 24-24s-10.7-24-24-24H112V280h24c13.3 0 24-10.7 24-24s-10.7-24-24-24H112V144h24c13.3 0 24-10.7 24-24s-10.7-24-24-24H112V64c0-8.8 7.2-16 16-16h64zM64 416v32c0 35.3 28.7 64 64 64H416c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H128C92.7 0 64 28.7 64 64V96H24C10.7 96 0 106.7 0 120s10.7 24 24 24H64v88H24c-13.3 0-24 10.7-24 24s10.7 24 24 24H64v88H24c-13.3 0-24 10.7-24 24s10.7 24 24 24H64z" />
                        </svg>
                        <span class="group-hover:text-[var(--primary-color)] transition">تماس با ما</span>
                    </a>
                </li>
                <li class="group">
                    <a href="#"
                        class="flex items-center gap-2 font-bold text-sm text-[var(--light-theme-text-color)]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="22" height="18"
                            class="fill-[var(--light-theme-text-color)] group-hover:fill-[var(--primary-color)] transition">
                            <path
                                d="M512 80c8.8 0 16 7.2 16 16V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V96c0-8.8 7.2-16 16-16H512zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM208 256a64 64 0 1 0 0-128 64 64 0 1 0 0 128zm-32 32c-44.2 0-80 35.8-80 80c0 8.8 7.2 16 16 16H304c8.8 0 16-7.2 16-16c0-44.2-35.8-80-80-80H176zM376 144c-13.3 0-24 10.7-24 24s10.7 24 24 24h80c13.3 0 24-10.7 24-24s-10.7-24-24-24H376zm0 96c-13.3 0-24 10.7-24 24s10.7 24 24 24h80c13.3 0 24-10.7 24-24s-10.7-24-24-24H376z" />
                        </svg>
                        <span class="group-hover:text-[var(--primary-color)] transition">نمونه کار ها</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="w-7/12 md:w-8/12 bg-[#333333]/50 invisible opacity-0 transition-all duration-500 backdrop-blur-[5px]"
            onclick="hamburgerMenu('close')"></div>
    </aside>
    <!-- end hamburger side menu -->

    <!-- searchbar popup -->
    <div id="searchbar"
        class="w-full h-dvh fixed top-0 left-0 flex justify-center items-center invisible opacity-0 transition-all duration-300 z-5 md:hidden">
        <div class="size-full bg-black/50 absolute" onclick="closeSearchbar()"></div>
        <div class="relative w-10/12 sm:w-2/3">
            <button
                class="absolute z-5 -top-4 -left-4 size-6 flex flex-col justify-center items-center cursor-pointer bg-white rounded-full "
                onclick="closeSearchbar()">
                <span class="w-2/3 h-[2.5px] rounded-full bg-black rotate-45
              translate-y-1/2"></span>
                <span class="w-2/3 h-[2.5px] rounded-full bg-black -rotate-45 -translate-y-1/2"></span>
            </button>
            <div class="size-full rounded-lg">
                <form action="{{ route('search-search') }}" method="POST"
                    class="w-full flex flex-col gap-10 p-5 rounded-[36px] bg-white">
                    @csrf
                    <div class="flex flex-col gap-4">
                        <label for="searchedValue" class="text-xs">کالای مورد نظر خود را جستجو کنید.</label>
                        <div class="flex items-center border-[1px] border-gray-300 rounded-lg px-2">
                            <input type="text" name="searchedValue" id="searchedValue"
                                placeholder="مثال:تابلوی چنلیووم"
                                class="w-full text-right text-[14px] py-3 outline-none">
                        </div>
                    </div>
                    <button type="submit"
                        class="w-1/2 mx-auto rounded-lg px-2 py-3 text-center cursor-pointer bg-gray-500 text-white outline-none font-bold">
                        جستجو
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- end searchbar popup -->

    <div>
        @yield('slider')
    </div>
    <main class="2xl:container 2xl:px-4 w-11/12 2xl:w-11/12 mx-auto mt-5">
        @yield('content')
    </main>



    <footer class="text-(--color-text) pt-3 bg-(--color-primary-btn) 2xl:container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 px-3">
            @foreach ($footerColumns as $footerColumn)
                <div class="p-6">
                    <p class="text-gray-700 font-bold mb-4">{{ $footerColumn['section_title'] }}</p>
                    @foreach ($footerColumn['rows'] as $row)
                        <p>
                            <a href="{{ $row['row_href'] }}">{{ $row['row_content'] }}</a>
                        </p>
                    @endforeach
                </div>
            @endforeach
            <div class="p-6 flex flex-col gap-10">
                @if ($footer_form_column)
                    <div class="">
                        <p class="text-gray-700 font-bold mb-4">{{ $footer_form_column['section_title'] }}</p>
                    </div>
                    <div class="flex justify-between items-center">
                        @foreach ($footer_form_column['images'] as $image)
                            <a href="{{ $image['link'] }}">
                                <img src="{{ asset('storage/' . $image['path']) }}" alt="{{ $image['alt'] }}"
                                    class="size-10 rounded-full">
                            </a>
                        @endforeach
                    </div>
                    <div class="">
                        <form action="{{ route('homeForm-store') }}" method="post" class="flex flex-col gap-4">
                            @csrf
                            <label for=""
                                class="">{{ $footer_form_column['texts'][0]['text'] }}</label>
                            <div class="flex gap-4">
                                <input type="string" required
                                    class="w-3/4 outline-none py-2 px-9 bg-[#F9F9F9] rounded-xl focus:border"
                                    name="contactMethod" id=""
                                    placeholder="{{ $footer_form_column['texts'][0]['placeholder'] }}" required>
                                <button type="submit"
                                    class="w-1/4 py-2 px-7 rounded-[10px] bg-(--color-btn-contact) text-(--color-primary-text) hover:bg-(--color-btn-contact-hover) transition-all duration-300 text-white cursor-pointer">ثبت</button>
                            </div>
                        </form>
                    </div>
                @endif
            </div>
        </div>
        <hr>
        <div class="py-8">
            <p class="text-center">
                طراحی شده توسط
                <span class="font-bold">فائوس</span>
            </p>
            <p class="text-center">
                عباس ملکی:
                <a class="font-bold" href="tel:09147794595">09147794595</a>
            </p>
        </div>
    </footer>

    <script src="{{ url('assets/js/slider.js') }}"></script>
    <script>
        const csrfToken = "{{ csrf_token() }}"
        const route = "{{ route('relatedProducts') }}"
    </script>
    <script src="{{ url('assets/js/main.js') }}"></script>
</body>

</html>
