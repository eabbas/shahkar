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

    {{-- mahdi slider --}}
    <div class="w-full h-dvh bg-[#281315] relative flex justify-center items-center">
        <img src="{{ asset('assets/img/Emberwood.jpg') }}" alt="" class="object-cover w-full h-full">
        <div class="w-full h-full bg-black/40 absolute top-0 right-0 z-1 opacity-[60%]"></div>
        <div class="w-full absolute top-8 flex justify-center items-center z-2">
            <div class="w-9/10 flex justify-between items-center uppercase">
                <span
                    class="text-[#b7b6b4] hover:text-white md:text-[16px] text-[12px] font-bold hover:border-b-1  transition-all duration-100 py-[1px] cursor-pointer"
                    onclick="border_chaleng('her')" id="FOR_HER">for her</span>
                <span
                    class="text-white font-bold md:text-md text-[13px]  border-white border-y-1 py-[1px] cursor-pointer">perfumora</span>
                <span
                    class="text-[#b7b6b4] hover:text-white md:text-[16px] text-[12px] font-bold  border-white border-b-1 hover:border-b-0 hover:border-t-1 transition-all duration-100 py-[1px] cursor-pointer"
                    onclick="border_chaleng('him')" id="FOR_HIM">for him</span>
            </div>
        </div>
        <div class="w-full absolute bottom-8 flex justify-center items-center z-3">
            <div class="w-9/10 flex flex-col">
                <div class="w-full flex justify-between items-center pr-5">
                    <h1
                        class="lg:text-[5rem] md:text-[4rem] sm:text-[3rem] text-[2rem] font-bold text-[#e9e8e8] classss">
                        EMBERWOOD</h1>
                    <div class="flex lg:gap-4 sm:gap-2 gap-1 items-center">
                        <button
                            class="lg:size-20 sm:size-15 size-12 rounded-full bg-[#534b43] flex justify-center items-center border-1 border-[#6d6861] active:bg-red-500 classss">
                            <svg class="size-3/5 -rotate-90" viewBox="0 0 97.69 75.09" xml:space="preserve">
                                <g>
                                    <path
                                        d="M97.69,36.54v2c-20.15,0-36.54,16.39-36.54,36.54h-2C59.15,53.83,76.44,36.54,97.69,36.54z"
                                        style="fill: rgb(255, 255, 255);"></path>
                                </g>
                                <g>
                                    <path
                                        d="M59.15,0h2c0,20.15,16.39,36.54,36.54,36.54v2H0v-2h85.43C70.17,31.41,59.15,16.97,59.15,0z"
                                        style="fill: rgb(255, 255, 255);"></path>
                                </g>
                            </svg>
                        </button>
                        <button
                            class="lg:size-20 sm:size-15 size-12 rounded-full bg-[#534b43] flex justify-center items-center border-1 border-[#6d6861] active:bg-red-500 classss">
                            <svg class="size-3/5 rotate-90" viewBox="0 0 97.69 75.09" xml:space="preserve">
                                <g>
                                    <path
                                        d="M97.69,36.54v2c-20.15,0-36.54,16.39-36.54,36.54h-2C59.15,53.83,76.44,36.54,97.69,36.54z"
                                        style="fill: rgb(255, 255, 255);"></path>
                                </g>
                                <g>
                                    <path
                                        d="M59.15,0h2c0,20.15,16.39,36.54,36.54,36.54v2H0v-2h85.43C70.17,31.41,59.15,16.97,59.15,0z"
                                        style="fill: rgb(255, 255, 255);"></path>
                                </g>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="w-full flex flex-col gap-4 ">
                    <span class="text-[#e9e8e8] text-sm">Elixir</span>
                    <span class="w-full h-[2px] bg-[#785a4e] rounded-xl"></span>
                    <div class="w-full flex max-md:flex-col max-md:gap-4" style="direction: ltr">
                        <div class="w-1/2 max-md:w-full flex flex-col gap-2 items-start md:pr-35 max-sm:hidden classss">
                            <h3 class="text-[#e9e8e8] text-[19px] uppercase font-bold" style="font-weight: 700;">Fire in
                                the Frost</h3>
                            <p class="text-[#b6b4b1]" style="line-height:22px; font-weight: 500;">For the man whose
                                presence lingers like a slow-burning ember, Emberwood is a rich blend of spice and
                                smoke, a bold contrast to the crisp winter air.</p>
                        </div>
                        <div class="w-1/4 max-md:w-full flex flex-col gap-2 font-bold classss">
                            <h4 class="text-[#e9e8e8]  text-lg uppercase">notes</h4>
                            <p class="text-[#b6b4b1]"><span class="text-[#e9e8e8]">TOP: </span> Spiced cinnamon, blood
                                orange</p>
                            <p class="text-[#b6b4b1]"><span class="text-[#e9e8e8]">HEART: </span> Smoked cedar, vetiver
                            </p>
                            <p class="text-[#b6b4b1]"><span class="text-[#e9e8e8]">BASE: </span> Amber, tonka bean</p>
                        </div>
                        <div
                            class="w-1/4 min-h-full max-md:w-full flex md:justify-end items-end lg:items-start max-sm:mt-5 classss transition-all duration-300">
                            <span
                                class="h-6 text-[#e9e8e8]  hover:text-white text-[16px] font-bold  border-white border-b-1 hover:border-b-0 hover:border-t-1 transition-all duration-100 cursor-pointer uppercase"
                                onclick="border_chaleng('him')" id="FOR_HIM">Buy Emberwood</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end mahdi slider --}}




    <main class="2xl:container 2xl:px-4 w-11/12 lg:w-[98%] mx-auto mt-5">
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
                            <label for="" class="">{{ $footer_form_column['texts'][0]['text'] }}</label>
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
