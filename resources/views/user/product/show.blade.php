@extends('app.document')
@section('title')
    شاهکار | {{ $product['title'] }}
@endsection
@section('content')
    <!-- order_box_start -->
    <section class="w-full flex justify-center items-center">
        <div class="w-11/12 h-full flex flex-col justify-between items-center">
            <!-- root_single -->
            <div class="w-full flex justify-start items-center gap-3 py-2">
                <a href="{{ route('home') }}"
                    class="xl:text-lg max-lg:text-xs text-nowrap font-bold text-[var(--text)] cursor-pointer">خانه</a>
                <span class="text-lg text-[var(--gold)]">/</span>
                <a href="{{ route('product.index') }}"
                    class="xl:text-lg max-lg:text-xs text-nowrap font-bold text-[var(--text)] cursor-pointer">محصولات</a>
                <span class="text-lg text-[var(--gold)]">/</span>
                <span
                    class="xl:text-lg max-lg:text-xs text-nowrap font-bold text-[var(--text)] cursor-pointer">{{ $product['title'] }}</span>
                <span class="text-lg text-[var(--gold)]">/</span>
            </div>
            <!-- root_single -->
            <div class="w-full flex max-sm:flex-col justify-between items-start gap-1">
                <!-- galeri -->

                <div class="sm:w-7/12 xl:h-150 lg:h-120 sm:h-100 h-90 w-full flex flex-col justify-between items-center">
                    <div class="w-full h-69/100 flex justify-center items-center">
                        <img src="{{ asset('storage/' . $product['mainImg']) }}" alt=""
                            class="w-full h-full rounded-xl gallery_product_primary transition_root">
                    </div>
                    <div
                        class="max-w-full min-w-full overflow-auto h-29/100 flex gap-2 justify-start items-center pb-2 [&::-webkit-scrollbar]:h-2  [&::-webkit-scrollbar-thumb]:bg-[var(--gold)]  [&::-webkit-scrollbar-thumb]:rounded-full">
                        @foreach ($product['media'] as $media)
                            @if (!$media['is_main'])
                                <div
                                    class="xl:min-w-19/100 lg:min-w-32/100 min-w-49/100 h-full flex justify-center items-center rounded-xl border-2 border-[var(--border)] hover:border-[var(--gold)] active:border-[var(--gold)] transition_root cursor-pointer">
                                    <img src="{{ asset('storage/' . $media['media_path']) }}" alt=""
                                        class="w-full h-full rounded-xl gallery_product_item">
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                <!-- galeri -->
                <!-- order -->
                <div
                    class="sm:w-40/100 w-full h-full border border-[var(--border)] bg-[var(--background-2)] rounded-xl lg:p-6 p-3 flex flex-col lg:gap-5 gap-3 justify-start items-start max-sm:items-center">
                    <!-- title_product -->
                    <div class="w-full flex justify-between max-sm:justify-center items-center">
                        <h2 class="lg:text-xl text-lg font-bold text-[var(--text)]">{{ $product['title'] }}</h2>
                        <div onclick="like_svg(this)" class="max-sm:hidden cursor-pointer">
                            <!-- unlike -->
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                class="lg:size-6 size-4 fill-[var(--gold)]">
                                <path
                                    d="M256 163.9L222.1 130l-24.2-24.2C181.4 89.3 159 80 135.8 80C87.3 80 48 119.3 48 167.8c0 23.3 9.2 45.6 25.7 62.1l24.2 24.2L256 412.1 414.1 254.1l24.2-24.2c16.5-16.5 25.7-38.8 25.7-62.1c0-48.5-39.3-87.8-87.8-87.8c-23.3 0-45.6 9.2-62.1 25.7L289.9 130 256 163.9zm33.9 282.2L256 480l-33.9-33.9L64 288 39.8 263.8C14.3 238.3 0 203.8 0 167.8C0 92.8 60.8 32 135.8 32c36 0 70.5 14.3 96 39.8L256 96l24.2-24.2c0 0 0 0 0 0c25.5-25.4 60-39.7 96-39.7C451.2 32 512 92.8 512 167.8c0 36-14.3 70.5-39.8 96L448 288 289.9 446.1z" />
                            </svg>
                            <!-- unlike -->
                            <!-- like -->
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                class="lg:size-6 size-4 fill-red-500 hidden">
                                <path
                                    d="M39.8 263.8L64 288 256 480 448 288l24.2-24.2c25.5-25.5 39.8-60 39.8-96C512 92.8 451.2 32 376.2 32c-36 0-70.5 14.3-96 39.8L256 96 231.8 71.8c-25.5-25.5-60-39.8-96-39.8C60.8 32 0 92.8 0 167.8c0 36 14.3 70.5 39.8 96z" />
                            </svg>
                            <!-- like -->
                        </div>
                    </div>
                    <!-- title_product -->
                    <!-- score -->
                    <div class="w-full max-sm:w-7/12 flex gap-4 justify-start max-sm:justify-between items-center">
                        <div class="flex justify-start items-center gap-4">
                            <span class="text-sm text-[var(--text-secondary)]">(4.9)</span>
                            <div class="flex justify-start items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                    class="lg:size-4 size-3 fill-[var(--star)]">
                                    <defs></defs>
                                    <path class="fa-secondary"
                                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                                    </path>
                                    <path class="fa-primary" d=""></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                    class="lg:size-4 size-3 fill-[var(--star)]">
                                    <defs></defs>
                                    <path class="fa-secondary"
                                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                                    </path>
                                    <path class="fa-primary" d=""></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                    class="lg:size-4 size-3 fill-[var(--star)]">
                                    <defs></defs>
                                    <path class="fa-secondary"
                                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                                    </path>
                                    <path class="fa-primary" d=""></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                    class="lg:size-4 size-3 fill-[var(--star)]">
                                    <defs></defs>
                                    <path class="fa-secondary"
                                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                                    </path>
                                    <path class="fa-primary" d=""></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                    class="lg:size-4 size-3 fill-[var(--star)]">
                                    <defs></defs>
                                    <path class="fa-secondary"
                                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                                    </path>
                                    <path class="fa-primary" d=""></path>
                                </svg>
                            </div>
                        </div>
                        <div onclick="like_svg(this)" class="sm:hidden">
                            <!-- unlike -->
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                class="lg:size-6 size-4 fill-[var(--gold)]">
                                <path
                                    d="M256 163.9L222.1 130l-24.2-24.2C181.4 89.3 159 80 135.8 80C87.3 80 48 119.3 48 167.8c0 23.3 9.2 45.6 25.7 62.1l24.2 24.2L256 412.1 414.1 254.1l24.2-24.2c16.5-16.5 25.7-38.8 25.7-62.1c0-48.5-39.3-87.8-87.8-87.8c-23.3 0-45.6 9.2-62.1 25.7L289.9 130 256 163.9zm33.9 282.2L256 480l-33.9-33.9L64 288 39.8 263.8C14.3 238.3 0 203.8 0 167.8C0 92.8 60.8 32 135.8 32c36 0 70.5 14.3 96 39.8L256 96l24.2-24.2c0 0 0 0 0 0c25.5-25.4 60-39.7 96-39.7C451.2 32 512 92.8 512 167.8c0 36-14.3 70.5-39.8 96L448 288 289.9 446.1z" />
                            </svg>
                            <!-- unlike -->
                            <!-- like -->
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                class="lg:size-6 size-4 fill-red-500 hidden">
                                <path
                                    d="M39.8 263.8L64 288 256 480 448 288l24.2-24.2c25.5-25.5 39.8-60 39.8-96C512 92.8 451.2 32 376.2 32c-36 0-70.5 14.3-96 39.8L256 96 231.8 71.8c-25.5-25.5-60-39.8-96-39.8C60.8 32 0 92.8 0 167.8c0 36 14.3 70.5 39.8 96z" />
                            </svg>
                            <!-- like -->
                        </div>
                    </div>
                    <!-- score -->
                    <!-- discription -->
                    <div class="lg:w-9/12 max-lg:w-full max-sm:w-9/12 flex justify-start items-center">
                        <p class="max-xl:text-xs max-lg:text-[9px] text-[var(--text-secondary)] max-sm:text-center">
                            {{ $product['summary'] }}</p>
                    </div>
                    <!-- discription -->
                    <!-- property_order -->
                    <div class="w-full flex sm:flex-col max-sm:flex-wrap sm:gap-1 max-sm:gap-y-2 justify-start items-start">
                        <div class="max-sm:w-1/2 flex justify-start max-sm:justify-center items-center xl:gap-4 gap-2">
                            <div
                                class="xl:size-4 lg:size-3 size-2 bg-[var(--gold)] flex justify-center items-center rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="size-2/3">
                                    <path
                                        d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                                </svg>
                            </div>
                            <p class="max-xl:text-sm max-lg:text-xs text-[var(--text-secondary)]">چاپ آگهی با کیفیت
                                بالا</p>
                        </div>
                        <div class="max-sm:w-1/2 flex justify-start max-sm:justify-center items-center xl:gap-4 gap-2">
                            <div
                                class="xl:size-4 lg:size-3 size-2 bg-[var(--gold)] flex justify-center items-center rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="size-2/3">
                                    <path
                                        d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                                </svg>
                            </div>
                            <p class="max-xl:text-sm max-lg:text-xs text-[var(--text-secondary)]">چاپ آگهی با کیفیت
                                بالا</p>
                        </div>
                        <div class="max-sm:w-1/2 flex justify-start max-sm:justify-center items-center xl:gap-4 gap-2">
                            <div
                                class="xl:size-4 lg:size-3 size-2 bg-[var(--gold)] flex justify-center items-center rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="size-2/3">
                                    <path
                                        d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                                </svg>
                            </div>
                            <p class="max-xl:text-sm max-lg:text-xs text-[var(--text-secondary)]">چاپ آگهی با کیفیت
                                بالا</p>
                        </div>
                        <div class="max-sm:w-1/2 flex justify-start max-sm:justify-center items-center xl:gap-4 gap-2">
                            <div
                                class="xl:size-4 lg:size-3 size-2 bg-[var(--gold)] flex justify-center items-center rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="size-2/3">
                                    <path
                                        d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                                </svg>
                            </div>
                            <p class="max-xl:text-sm max-lg:text-xs text-[var(--text-secondary)]">چاپ آگهی با کیفیت
                                بالا</p>
                        </div>
                    </div>
                    <!-- property_order -->
                    <!-- price -->
                    <div class="w-full flex gap-4 justify-start max-sm:justify-center items-center">
                        <span class="xl:text-xl lg:text-lg text-[var(--text)]">از</span>
                        <span
                            class="xl:text-xl lg:text-lg max-sm:text-lg text-[var(--gold)] font-bold">{{ $product['primary_price'] }}
                            تومان</span>
                    </div>
                    <!-- price -->
                    <!-- few_number -->
                    <div class="w-full flex lg:gap-4 gap-2 justify-start max-sm:justify-center items-center">
                        <h4 class="xl:text-lg max-lg:text-xs text-nowrap font-bold text-[var(--text)]">تعداد :</h4>
                        <div class="flex gap-2 justify-between items-center">
                            <div class="lg:p-2 p-1 border border-[var(--gold)] lg:rounded-lg rounded-sm text-2xl text-[var(--text)] flex justify-center items-center transition_root active:bg-[var(--background)] cursor-pointer"
                                onclick="number_order('plus')">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                    class="lg:size-4 size-2 fill-[var(--text)]">
                                    <path
                                        d="M248 72c0-13.3-10.7-24-24-24s-24 10.7-24 24V232H40c-13.3 0-24 10.7-24 24s10.7 24 24 24H200V440c0 13.3 10.7 24 24 24s24-10.7 24-24V280H408c13.3 0 24-10.7 24-24s-10.7-24-24-24H248V72z" />
                                </svg>
                            </div>
                            <input type="number"
                                class="w-30 border border-[var(--gold)] rounded-lg lg:text-xl text-[var(--text)] flex justify-center items-center outline-none text-center py-1 number_order_item"
                                value="1000">
                            <div class="lg:p-2 p-1 border border-[var(--gold)] lg:rounded-lg rounded-sm text-2xl text-[var(--text)] flex justify-center items-center transition_root active:bg-[var(--background)] cursor-pointer"
                                onclick="number_order('minez')">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                    class="lg:size-4 size-2 fill-[var(--text)]">
                                    <path
                                        d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <!-- few_number -->
                    <!-- coating_kart -->
                    <div class="w-full flex lg:gap-4 gap-2 justify-start max-sm:justify-center items-center">
                        <h4 class="xl:text-lg max-lg:text-xs text-nowrap font-bold text-[var(--text)]">روکش :</h4>
                        <div class="flex lg:gap-2 gap-1 justify-start items-center">
                            <div
                                class="xl:size-6 lg:size-4 size-3 border-2 border-[var(--border)] rounded-full flex justify-center items-center cursor-pointer">
                                <div class="size-1/2 bg-[var(--gold)] rounded-full"></div>
                            </div>
                            <span class="max-lg:text-xs text-[var(--text)]">مات</span>
                        </div>
                        <div class="flex lg:gap-2 gap-1 justify-start items-center">
                            <div
                                class="xl:size-6 lg:size-4 size-3 border-2 border-[var(--border)] rounded-full flex justify-center items-center cursor-pointer">
                                <div class="size-1/2 bg-[var(--gold)] rounded-full invisible opacity-0 transition_root">
                                </div>
                            </div>
                            <span class="max-lg:text-xs text-[var(--text)]">مات</span>
                        </div>
                        <div class="flex lg:gap-2 gap-1 justify-start items-center">
                            <div
                                class="xl:size-6 lg:size-4 size-3 border-2 border-[var(--border)] rounded-full flex justify-center items-center cursor-pointer">
                                <div class="size-1/2 bg-[var(--gold)] rounded-full invisible opacity-0 transition_root">
                                </div>
                            </div>
                            <span class="max-lg:text-xs text-[var(--text)]">مات</span>
                        </div>
                    </div>
                    <!-- coating_kart -->
                    <!-- material_kart -->
                    <div class="w-full flex lg:gap-4 gap-2 justify-start max-sm:justify-center items-center">
                        <h4 class="xl:text-lg max-lg:text-xs text-nowrap font-bold text-[var(--text)]">جنس :</h4>
                        <div class="flex lg:gap-2 gap-1 justify-start items-center">
                            <div
                                class="xl:size-6 lg:size-4 size-3 border-2 border-[var(--border)] rounded-full flex justify-center items-center cursor-pointer">
                                <div class="size-1/2 bg-[var(--gold)] rounded-full"></div>
                            </div>
                            <span class="max-lg:text-xs text-[var(--text)]">مات</span>
                        </div>
                        <div class="flex lg:gap-2 gap-1 justify-start items-center">
                            <div
                                class="xl:size-6 lg:size-4 size-3 border-2 border-[var(--border)] rounded-full flex justify-center items-center cursor-pointer">
                                <div class="size-1/2 bg-[var(--gold)] rounded-full invisible opacity-0 transition_root">
                                </div>
                            </div>
                            <span class="max-lg:text-xs text-[var(--text)]">مات</span>
                        </div>
                        <div class="flex lg:gap-2 gap-1 justify-start items-center">
                            <div
                                class="xl:size-6 lg:size-4 size-3 border-2 border-[var(--border)] rounded-full flex justify-center items-center cursor-pointer">
                                <div class="size-1/2 bg-[var(--gold)] rounded-full invisible opacity-0 transition_root">
                                </div>
                            </div>
                            <span class="max-lg:text-xs text-[var(--text)]">مات</span>
                        </div>
                    </div>
                    <!--material_kart -->
                    <!-- bottoms -->
                    <div class="w-full flex max-sm:flex-col lg:gap-5 gap-2 items-center justify-end ">
                        <a href="#"
                            class="sm:w-1/2 w-full xl:py-3 py-2 flex lg:gap-3 gap-1 justify-center items-center rounded-2xl border-2 border-[var(--gold)] rezume_gradient transition_root">
                            <span class="xl:text-md lg:text-sm text-[9px] font-bold text-white">مشاوره
                                رایکان</span>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="lg:size-6 size-4"
                                    fill="none" stroke="var(--gold)" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M4 13v-1a8 8 0 0 1 16 0v1" />
                                    <rect x="2" y="13" width="5" height="7" rx="1.5" />
                                    <rect x="17" y="13" width="5" height="7" rx="1.5" />
                                    <path d="M20 20v1a3 3 0 0 1-3 3h-3" />
                                </svg>
                            </div>
                        </a>
                        <a href="#"
                            class="sm:w-1/2 w-full xl:py-3 py-2 flex lg:gap-3 gap-1 justify-center items-center rounded-2xl gradient_box1 gradient_box1_hover_chang border-2 border-[var(--gold)] transition_root">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="xl:size-6 size-4"
                                    fill="white">
                                    <path
                                        d="M16 0H0V32H16 67.2l77.2 339.5 2.8 12.5H160 496h16V352H496 172.8l-14.5-64H496L566 64l10-32H542.5 100L95.6 12.5 92.8 0H80 16zm91.3 64H532.5l-60 192H151L107.3 64zM184 432a24 24 0 1 1 0 48 24 24 0 1 1 0-48zm0 80a56 56 0 1 0 0-112 56 56 0 1 0 0 112zm248-56a24 24 0 1 1 48 0 24 24 0 1 1 -48 0zm80 0a56 56 0 1 0 -112 0 56 56 0 1 0 112 0z">
                                    </path>
                                </svg>
                            </div>
                            <span class="xl:text-md lg:text-sm text-[9px] text-white font-bold">ثبت سفارش</span>
                        </a>

                    </div>
                    <!-- bottoms -->
                    <!-- servis_my_in_order -->
                    <div class="w-full flex justify-between items-center">
                        <div class="flex justify-start items-center gap-2">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    class="xl:size-8 lg:size-5 size-3" stroke="var(--gold)" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M2 7h11v10H2z"></path>
                                    <path d="M13 10h4l4 3.5V17h-8z"></path>
                                    <circle cx="6" cy="18.5" r="1.6"></circle>
                                    <circle cx="17" cy="18.5" r="1.6"></circle>
                                </svg>
                            </div>
                            <span class="xl:text-xs lg:text-[10px] text-[5px] text-[var(--text-secondary)]">ارسال
                                به سراسر کشور</span>
                        </div>
                        <div class="flex justify-start items-center gap-2">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    viewBox="0 0 20 20" id="entypo-wallet"
                                    class="xl:size-6 lg:size-5 size-3 fill-[var(--gold)]">
                                    <g>
                                        <path
                                            d="M16 6H3.5v-.5l11-.88v.88H16V4c0-1.1-.891-1.872-1.979-1.717L3.98 3.717C2.891 3.873 2 4.9 2 6v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2zm-1.5 7.006a1.5 1.5 0 1 1 .001-3.001 1.5 1.5 0 0 1-.001 3.001z">
                                        </path>
                                    </g>
                                </svg>
                            </div>
                            <span class="xl:text-xs lg:text-[10px] text-[5px] text-[var(--text-secondary)]">پرداخت
                                امن</span>
                        </div>
                        <div class="flex justify-start items-center gap-2">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    class="xl:size-8 lg:size-5 size-3" stroke="var(--gold)" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M2 7h11v10H2z"></path>
                                    <path d="M13 10h4l4 3.5V17h-8z"></path>
                                    <circle cx="6" cy="18.5" r="1.6"></circle>
                                    <circle cx="17" cy="18.5" r="1.6"></circle>
                                </svg>
                            </div>
                            <span class="xl:text-xs lg:text-[10px] text-[5px] text-[var(--text-secondary)]">ضمانت
                                بازگشت کالا</span>
                        </div>
                    </div>
                    <!-- servis_my_in_order -->
                </div>
                <!-- order -->
            </div>
        </div>
    </section>
    <!-- order_box_end -->

    <!-- property_bisinnes -->
    <section
        class="w-11/12 lg:border  lg:border-[var(--border)] max-lg:border sm:border-[var(--gold)] flex max-sm:flex-col gap-2 items-center justify-between lg:py-4 py-2 lg:px-5 bg-[var(--background-2)] rounded-xl">
        <div
            class="group sm:w-3/14 w-full h-full flex max-lg:flex-col max-sm:flex-row lg:gap-4 gap-2 justify-center items-center max-lg:bg-[var(--background)] max-lg:rounded-xl max-lg:border-1 sm:border-[var(--border)] border-[var(--gold)] max-lg:py-2">
            <div class="group-hover:scale-[1.05] group-active:scale-[1.3] transition_root">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                    class="xl:size-13 lg:size-9 size-7 fill-[var(--gold)]">
                    <path
                        d="M73 127L256 49.4 439 127c5.9 2.5 9.1 7.8 9 12.8c-.4 91.4-38.4 249.3-186.3 320.1c-3.6 1.7-7.8 1.7-11.3 0C102.4 389 64.5 231.2 64 139.7c0-5 3.1-10.2 9-12.8zM457.7 82.8L269.4 2.9C265.2 1 260.7 0 256 0s-9.2 1-13.4 2.9L54.3 82.8c-22 9.3-38.4 31-38.3 57.2c.5 99.2 41.3 280.7 213.6 363.2c16.7 8 36.1 8 52.8 0C454.8 420.7 495.5 239.2 496 140c.1-26.2-16.3-47.9-38.3-57.2zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z">
                    </path>
                </svg>
            </div>
            <div class="flex flex-col lg:items-start items-center justify-center">
                <h5 class="xl:text-lg text-sm font-bold text-[var(--text)]">کیفیت تضمینی</h5>
                <div
                    class="flex flex-col lg:items-start items-center justify-center xl:text-[11px] text-[7px] text-[var(--text-secondary)]">
                    <span class=" font-bold">استفاده از رنگ با کیفیت عالی</span>
                    <span class="font-bold">با دستگاه های پیشرفته</span>
                </div>
            </div>

        </div>
        <span class="w-0.5 h-full bg-[var(--border)] rounded-full max-lg:hidden"></span>
        <div
            class="group sm:w-3/14 w-full h-full flex max-lg:flex-col max-sm:flex-row lg:gap-4 gap-2 justify-center items-center max-lg:bg-[var(--background)] max-lg:rounded-xl max-lg:border-1 sm:border-[var(--border)] border-[var(--gold)] max-lg:py-2">

            <div class="group-hover:scale-[1.05] group-active:scale-[1.3] transition_root">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"
                    class="xl:size-13 lg:size-9 size-7 fill-[var(--gold)]">
                    <path
                        d="M128 128a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM269.7 336c80 0 145 64.3 146.3 144H32c1.2-79.7 66.2-144 146.3-144h91.4zM224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3zm431 208c17 0 30.7-13.8 30.7-30.7C640 392.2 567.8 320 478.7 320H417.3c-4.4 0-8.8 .2-13.2 .5c11.3 9.4 21.6 19.9 30.7 31.5h43.9c71 0 128.6 57.2 129.3 128H480c0 .8 0 1.5 0 2.3c0 10.8-2.8 20.9-7.6 29.7H609.3zM432 256c61.9 0 112-50.1 112-112s-50.1-112-112-112c-24.8 0-47.7 8.1-66.3 21.7c5.2 9.8 9.3 20.3 12.4 31.2C392.3 71.9 411.2 64 432 64c44.2 0 80 35.8 80 80s-35.8 80-80 80c-25.2 0-47.6-11.6-62.3-29.8c-4.7 10.3-10.4 19.9-17 28.9C373 243.4 401 256 432 256z" />
                </svg>
            </div>
            <div class="flex flex-col items-start justify-center">
                <h5 class="xl:text-lg text-sm font-bold text-[var(--text)]">تیم حرفه‌ای</h5>
                <div
                    class="flex flex-col items-start justify-center xl:text-[11px] text-[7px] text-[var(--text-secondary)]">
                    <span class=" font-bold">استفاده از رنگ با کیفیت عالی</span>
                    <span class="font-bold">با دستگاه های پیشرفته</span>
                </div>
            </div>

        </div>
        <div
            class="group sm:w-4/14 w-full h-full gradient_box1 rounded-xl flex max-lg:flex-col max-sm:flex-row lg:gap-4 gap-2 justify-center items-center max-lg:bg-[var(--background)] max-lg:rounded-xl max-lg:border-1 sm:border-[var(--border)] border-[var(--gold)] py-2">
            <div class="group-hover:scale-[1.07] group-active:scale-[1.7] transition_root">
                <svg xmlns="http://www.w3.org/2000/svg" class="xl:size-13 size-9" viewBox="0 0 24 24" fill="none"
                    stroke="#fff" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <!-- Scalloped medal -->
                    <path
                        d="
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
                                                                                                                                                                                                                                                                                        C10.4 3.5 11.3 3.6 12 3Z">
                    </path>
                    <!-- Inner circle -->
                    <circle cx="12" cy="9.8" r="4.2"></circle>
                    <!-- Ribbons -->
                    <path d="M9.8 14.6L7.7 20H10L12 17.7"></path>
                    <path d="M14.2 14.6L16.3 20H14L12 17.7"></path>

                </svg>
            </div>
            <div class="flex flex-col items-start justify-center">
                <h5 class="xl:text-lg text-sm font-bold text-[var(--text)]">چرا ما را انتخاب کنید</h5>
                <div
                    class="flex flex-col items-start justify-center xl:text-[11px] text-[7px] text-[var(--text-secondary)]">
                    <span class=" font-bold">استفاده از رنگ با کیفیت عالی</span>
                    <span class="font-bold">با دستگاه های پیشرفته</span>
                </div>
            </div>

        </div>
        <div
            class="group sm:w-3/14 w-full h-full flex max-lg:flex-col max-sm:flex-row lg:gap-4 gap-2 justify-center items-center max-lg:bg-[var(--background)] max-lg:rounded-xl max-lg:border-1 sm:border-[var(--border)] border-[var(--gold)] max-lg:py-2">

            <div class="group-hover:scale-[1.05] group-active:scale-[1.3] transition_root">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                    class="xl:size-13 lg:size-9 size-7 fill-[var(--background-2)]" stroke="var(--gold)" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M2 7h11v10H2z"></path>
                    <path d="M13 10h4l4 3.5V17h-8z"></path>
                    <circle cx="6" cy="18.5" r="1.6"></circle>
                    <circle cx="17" cy="18.5" r="1.6"></circle>
                </svg>
            </div>
            <div class="flex flex-col items-start justify-center">
                <h5 class="xl:text-lg text-sm font-bold text-[var(--text)]">تحویل سریع</h5>
                <div
                    class="flex flex-col items-start justify-center xl:text-[11px] text-[7px] text-[var(--text-secondary)]">
                    <span class=" font-bold">استفاده از رنگ با کیفیت عالی</span>
                    <span class="font-bold">با دستگاه های پیشرفته</span>
                </div>
            </div>

        </div>
        <span class="w-0.5 h-full bg-[var(--border)] rounded-full max-lg:hidden"></span>
        <div
            class="group sm:w-3/14 w-full h-full flex max-lg:flex-col max-sm:flex-row lg:gap-4 gap-2 justify-center items-center max-lg:bg-[var(--background)] max-lg:rounded-xl max-lg:border-1 sm:border-[var(--border)] border-[var(--gold)] max-lg:py-2">
            <div class="group-hover:scale-[1.05] group-active:scale-[1.3] transition_root">
                <svg class="xl:size-13 lg:size-9 size-7" viewBox="0 0 64 64" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <!-- Circle -->
                    <circle cx="32" cy="32" r="22" stroke="#D4A437" stroke-width="3.5"
                        stroke-linecap="round" stroke-dasharray="132 12"></circle>
                    <!-- Top & Bottom marks -->
                    <line x1="32" y1="6" x2="32" y2="11" stroke="#D4A437"
                        stroke-width="3" stroke-linecap="round"></line>
                    <line x1="32" y1="53" x2="32" y2="58" stroke="#D4A437"
                        stroke-width="3" stroke-linecap="round"></line>
                    <!-- Dollar -->
                    <text x="32" y="42" text-anchor="middle" font-size="28" font-family="Arial, sans-serif"
                        font-weight="700" fill="#D4A437">$</text>
                </svg>
            </div>
            <div class="flex flex-col items-start justify-center">
                <h5 class="xl:text-lg text-sm font-bold text-[var(--text)]">قیمت مناسب</h5>
                <div
                    class="flex flex-col items-start justify-center xl:text-[11px] text-[7px] text-[var(--text-secondary)]">
                    <span class=" font-bold">استفاده از رنگ با کیفیت عالی</span>
                    <span class="font-bold">با دستگاه های پیشرفته</span>
                </div>
            </div>

        </div>

    </section>
    <!-- property_bisinnes -->
    <!-- specification -->
    <section class="w-full flex justify-center items-center">
        <div
            class="w-11/12 flex flex-col gap-2 justify-start items-center bg-[var(--background-2)] border border-[var(--border)] rounded-xl py-4 px-5">
            <ul
                class="max-w-full min-w-full flex justify-start items-center gap-4 max-sm:gap-2 overflow-auto [&::-webkit-scrollbar]:h-2  [&::-webkit-scrollbar-thumb]:bg-[var(--gold)]  [&::-webkit-scrollbar-thumb]:rounded-full">
                <li class="px-3 py-1 bg-[#1A1F20] backdrop-blur-xl rounded-xl">
                    <a href="" class="flex justify-center items-center py-3 relative px-3">
                        <sapn
                            class="xl:text-xl lg:text-lg max-sm:text-sm transition_root text-nowrap font-bold text-[var(--gold)]">
                            توضیحات محصول</sapn>
                        <div
                            class="w-full absolute bottom-0 right-auto left-auto  oveflow-hidden flex justify-center items-center transition_root">
                            <div class="w-full h-[2px] bg-[var(--gold)] rounded-full"></div>
                        </div>
                    </a>
                </li>
                <li class="px-3 py-1 backdrop-blur-xl rounded-xl">
                    <a href="" class="flex justify-center items-center py-3 relative cheng_text_colot_hover px-3">
                        <sapn
                            class="xl:text-xl lg:text-lg max-sm:text-sm transition_root text-nowrap font-bold text-[var(--text)]">
                            مشخصات فنی</sapn>
                        <div
                            class="w-0 absolute bottom-0 right-auto left-auto gradent_text_sub_heder oveflow-hidden flex justify-center items-center transition_root">
                            <div class="w-full h-[2px] bg-[var(--gold)] rounded-full"></div>
                        </div>
                    </a>
                </li>
                {{-- <li class="px-3 py-1 backdrop-blur-xl rounded-xl">
                    <a href="" class="flex justify-center items-center py-3 relative cheng_text_colot_hover px-3">
                        <sapn
                            class="xl:text-xl lg:text-lg max-sm:text-sm transition_root text-nowrap font-bold text-[var(--text)]">
                            راهنمای طراحی فابل</sapn>
                        <div
                            class="w-0 absolute bottom-0 right-auto left-auto gradent_text_sub_heder oveflow-hidden flex justify-center items-center transition_root">
                            <div class="w-full h-[2px] bg-[var(--gold)] rounded-full"></div>
                        </div>
                    </a>
                </li> --}}
            </ul>
            <div class="w-full flex gap-6 justify-between items-center">
                <!-- desciption_product_start -->
                <div class="w-full h-full py-2">
                    <p class="xl:text-lg lg:text-sm sm:text-xs text-[10px] text-[var(--text)] leading-8 text-justify">
                        {{ $product['description'] }}</p>
                </div>
                <!-- desciption_product_end -->
                <!-- مشخصات فنی -->
                <div class="w-full h-full flex flex-col gap-1 items-center py-2 hidden">
                    <div class="w-full flex gap-1 justify-between">
                        <div class="w-1/2 flex justify-start items-center py-2 pr-4 bg-[#212224]">
                            <span
                                class="xl:text-lg max-lg:text-sm max-sm:text-xs font-bold text-[var(--text)]">ابعاد</span>
                        </div>
                        <div class="w-1/2 flex justify-start items-center py-2 px-3 max-sm:px-1 bg-[#212224]">
                            <span class="max-xl:text-sm max-lg:text-xs max-sm:text-[10px] text-[var(--text)]">Lorem
                                ipsum dolor sit amet consectetur adipisicing elit.</span>
                        </div>
                    </div>
                    <div class="w-full flex gap-1 justify-between">
                        <div class="w-1/2 flex justify-start items-center py-2 pr-4 bg-[#212224]">
                            <span class="xl:text-lg max-lg:text-sm max-sm:text-xs font-bold text-[var(--text)]">جنس</span>
                        </div>
                        <div class="w-1/2 flex justify-start items-center py-2 px-3 max-sm:px-1 bg-[#212224]">
                            <span class="max-xl:text-sm max-lg:text-xs max-sm:text-[10px] text-[var(--text)]">گلاسه
                                300گرم</span>
                        </div>
                    </div>
                    <div class="w-full flex gap-1 justify-between">
                        <div class="w-1/2 flex justify-start items-center py-2 pr-4 bg-[#212224]">
                            <span class="xl:text-lg max-lg:text-sm max-sm:text-xs font-bold text-[var(--text)]">روکش</span>
                        </div>
                        <div class="w-1/2 flex justify-start items-center py-2 px-3 max-sm:px-1 bg-[#212224]">
                            <span class="max-xl:text-sm max-lg:text-xs max-sm:text-[10px] text-[var(--text)]">لمینت
                                مات</span>
                        </div>
                    </div>
                </div>
                <!-- مشخصات فنی -->
                <!-- desigen_product_fill_start -->
                <div class="w-full h-full py-2 hidden">
                    <p class="xl:text-lg lg:text-sm sm:text-xs text-[10px] text-[var(--text)] leading-8 text-justify">
                        اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.لورم ایپسوم
                        متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و
                        متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد
                        نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه
                        درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد،</p>
                </div>
                <!-- design_product_fill_end -->
            </div>
        </div>
    </section>
    <!-- specification -->
    <!-- common_products_start -->
    <section class="w-full flex items-center justify-center">
        <div class="w-11/12 h-full flex flex-col gap-8 items-center justify-center">
            <div class="w-full flex flex-col gap-3 items-center justify-center">
                <h3 class="xl:text-4xl lg:text-2xl text-xl text-white font-bold">محصولات مرتبط</h3>
                <div class="flex gap-0.5 items-center justify-center">
                    <span class="size-1 rounded-full bg-[var(--gold)]"></span>
                    <span class="w-8 h-0.5 bg-[var(--gold)] rounded-full"></span>
                </div>
            </div>
            <div
                class="max-w-full min-w-full flex gap-4 items-center justify-start overflow-x-auto py-5 [&::-webkit-scrollbar]:h-1  [&::-webkit-scrollbar-thumb]:bg-[var(--gold)]  [&::-webkit-scrollbar-thumb]:rounded-full">
                @foreach ($product['categories'] as $category)
                    @foreach ($category['products'] as $pro)
                        @if ($pro['id'] != $product['id'])
                            <div
                                class="xl:min-w-15/100 xl:max-w-31/200 lg:min-w-19/100 sm:min-w-33/100 min-w-49/100 h-full border-1 border-[var(--gold)] bg-[#181819] rounded-2xl flex flex-col gap-5 items-center justify-between scale transition_root pb-2">
                                <a href="{{ route('product.show', [$pro]) }}" class="w-full lg:h-7/12 h-full">
                                    @foreach ($pro['media'] as $media)
                                        @if ($media['is_main'])
                                            @php
                                                $imgSrc = asset('storage/' . $media['media_path']);
                                            @endphp
                                            @break

                                        @else
                                            @php
                                                $imgSrc = asset('storage/default.jpg');
                                            @endphp
                                        @endif
                                    @endforeach
                                    <img src="{{ $imgSrc }}" alt=""
                                        class="object-fit w-full xl:h-50 lg:h-40 md:h-45 sm:h-39 h-40  lg:rounded-t-2xl rounded-2xl">
                                </a>
                                <div class="w-full flex gap-4 justify-between items-center px-4">
                                    <div class="size-11 gradient_box1 rounded-xl flex justify-center items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="size-1/2"
                                            fill="white">
                                            <path
                                                d="M16 0H0V32H16 67.2l77.2 339.5 2.8 12.5H160 496h16V352H496 172.8l-14.5-64H496L566 64l10-32H542.5 100L95.6 12.5 92.8 0H80 16zm91.3 64H532.5l-60 192H151L107.3 64zM184 432a24 24 0 1 1 0 48 24 24 0 1 1 0-48zm0 80a56 56 0 1 0 0-112 56 56 0 1 0 0 112zm248-56a24 24 0 1 1 48 0 24 24 0 1 1 -48 0zm80 0a56 56 0 1 0 -112 0 56 56 0 1 0 112 0z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div
                                        class="flex flex-col gap-1 justify-center items-start xl:text-sm lg:text-xs sm:text-[11px] md:text-sm text-xs">
                                        <p class="font-bold text-[var(--text)]">{{ $pro['title'] }}</p>
                                        <p class="text-[var(--gold)] w-full text-left">{{ $pro['primary_price'] }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                @endforeach
            </div>
        </div>
    </section>
    <!-- common_products_end -->
    <!-- customer_start -->
    <section class="w-full flex justify-center">
        <div class="w-11/12 flex max-lg:flex-col gap-3">
            <div
                class="lg:w-1/2 w-full h-full bg-[var(--background-2)] rounded-xl flex flex-col gap-4 justify-start items-start max-lg:items-center px-7 py-5">
                <h3 class="sm:text-xl text-lg text-[var(--text)] font-bold">سوالات متداول</h3>
                <div
                    class="w-full h-12 flex flex-col justify-start items-start bg-[#171A1F] border border-[#272A2F] rounded-xl overflow-y-hidden transition_root cursor-pointer">
                    <div class="w-full px-4 py-3  flex justify-between items-start question_common_onclick">
                        <div class="flex gap-2 justify-start items-center">
                            <div class="transition_root">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                    class="size-4 fill-[var(--gold)] -rotate-90">
                                    <path
                                        d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z">
                                    </path>
                                </svg>
                            </div>
                            <span class="max-xl:text-sm max-sm:text-[10px] text-[var(--text-secondary)]">زمان چاپ و
                                تحویل سفارش چقدر است ؟</span>
                        </div>
                        <div class="transition_root">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                class="xl:size-5 lg:size-4 size-2 fill-[var(--gold)]">
                                <path
                                    d="M248 72c0-13.3-10.7-24-24-24s-24 10.7-24 24V232H40c-13.3 0-24 10.7-24 24s10.7 24 24 24H200V440c0 13.3 10.7 24 24 24s24-10.7 24-24V280H408c13.3 0 24-10.7 24-24s-10.7-24-24-24H248V72z">
                                </path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                class="xl:size-5 lg:size-4 size-2 fill-[var(--gold)] hidden">
                                <path
                                    d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <div class="w-full h-full flex flex-col gap-4 justify-start items-start px-4 max-xl:mt-1">
                        <span class="w-full h-0.5 bg-[#272A2F]"></span>
                        <div
                            class="px-6 flex gap-2 max-h-30 overflow-y-auto justify-center items-cneter [&::-webkit-scrollbar]:w-1  [&::-webkit-scrollbar-thumb]:bg-[var(--gold)]  [&::-webkit-scrollbar-thumb]:rounded-full">
                            <span class="min-w-2 min-h-2 max-w-2 max-h-2 bg-[var(--gold)] rounded-full mt-1"></span>
                            <p
                                class="max-xl:text-sm max-sm:text-[10px] text-[var(--text-secondary)] text-justify leading-6">
                                اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار
                                گیرد.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از
                                طراحان گرافیک است، چاپگرها ت، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان
                                ک و متون بلکه ت، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان ک ت، چاپگرها
                                و متون بلکه روزنامه و مجله در ستون و سطرآنچنان ک ت، چاپگرها و متون بلکه روزنامه و
                                مجله در ستون و سطرآنچنان ک روزنامه و مجله در ستون و سطرآنچنان که لازم است،</p>
                        </div>
                    </div>
                </div>
                <div
                    class="w-full h-12 flex flex-col justify-start items-start bg-[#171A1F] border border-[#272A2F] rounded-xl overflow-y-hidden transition_root cursor-pointer">
                    <div class="w-full px-4 py-3  flex justify-between items-start question_common_onclick">
                        <div class="flex gap-2 justify-start items-center">
                            <div class="transition_root">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                    class="size-4 fill-[var(--gold)] -rotate-90">
                                    <path
                                        d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z">
                                    </path>
                                </svg>
                            </div>
                            <span class="max-xl:text-sm max-sm:text-[10px] text-[var(--text-secondary)]">زمان چاپ و
                                تحویل سفارش چقدر است ؟</span>
                        </div>
                        <div class="transition_root">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                class="xl:size-5 lg:size-4 size-2 fill-[var(--gold)]">
                                <path
                                    d="M248 72c0-13.3-10.7-24-24-24s-24 10.7-24 24V232H40c-13.3 0-24 10.7-24 24s10.7 24 24 24H200V440c0 13.3 10.7 24 24 24s24-10.7 24-24V280H408c13.3 0 24-10.7 24-24s-10.7-24-24-24H248V72z">
                                </path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                class="xl:size-5 lg:size-4 size-2 fill-[var(--gold)] hidden">
                                <path
                                    d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <div class="w-full h-full flex flex-col gap-4 justify-start items-start px-4 max-xl:mt-1">
                        <span class="w-full h-0.5 bg-[#272A2F]"></span>
                        <div
                            class="px-6 flex gap-2 max-h-30 overflow-y-auto justify-center items-cneter [&::-webkit-scrollbar]:w-1  [&::-webkit-scrollbar-thumb]:bg-[var(--gold)]  [&::-webkit-scrollbar-thumb]:rounded-full">
                            <span class="min-w-2 min-h-2 max-w-2 max-h-2 bg-[var(--gold)] rounded-full mt-1"></span>
                            <p
                                class="max-xl:text-sm max-sm:text-[10px] text-[var(--text-secondary)] text-justify leading-6">
                                اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار
                                گیرد.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از
                                طراحان گرافیک است، چاپگرها ت، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان
                                ک و متون بلکه ت، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان ک ت، چاپگرها
                                و متون بلکه روزنامه و مجله در ستون و سطرآنچنان ک ت، چاپگرها و متون بلکه روزنامه و
                                مجله در ستون و سطرآنچنان ک روزنامه و مجله در ستون و سطرآنچنان که لازم است،</p>
                        </div>
                    </div>
                </div>
                <div
                    class="w-full h-12 flex flex-col justify-start items-start bg-[#171A1F] border border-[#272A2F] rounded-xl overflow-y-hidden transition_root cursor-pointer">
                    <div class="w-full px-4 py-3  flex justify-between items-start question_common_onclick">
                        <div class="flex gap-2 justify-start items-center">
                            <div class="transition_root">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                    class="size-4 fill-[var(--gold)] -rotate-90">
                                    <path
                                        d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z">
                                    </path>
                                </svg>
                            </div>
                            <span class="max-xl:text-sm max-sm:text-[10px] text-[var(--text-secondary)]">زمان چاپ و
                                تحویل سفارش چقدر است ؟</span>
                        </div>
                        <div class="transition_root">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                class="xl:size-5 lg:size-4 size-2 fill-[var(--gold)]">
                                <path
                                    d="M248 72c0-13.3-10.7-24-24-24s-24 10.7-24 24V232H40c-13.3 0-24 10.7-24 24s10.7 24 24 24H200V440c0 13.3 10.7 24 24 24s24-10.7 24-24V280H408c13.3 0 24-10.7 24-24s-10.7-24-24-24H248V72z">
                                </path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                class="xl:size-5 lg:size-4 size-2 fill-[var(--gold)] hidden">
                                <path
                                    d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <div class="w-full h-full flex flex-col gap-4 justify-start items-start px-4 max-xl:mt-1">
                        <span class="w-full h-0.5 bg-[#272A2F]"></span>
                        <div
                            class="px-6 flex gap-2 max-h-30 overflow-y-auto justify-center items-cneter [&::-webkit-scrollbar]:w-1  [&::-webkit-scrollbar-thumb]:bg-[var(--gold)]  [&::-webkit-scrollbar-thumb]:rounded-full">
                            <span class="min-w-2 min-h-2 max-w-2 max-h-2 bg-[var(--gold)] rounded-full mt-1"></span>
                            <p
                                class="max-xl:text-sm max-sm:text-[10px] text-[var(--text-secondary)] text-justify leading-6">
                                اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار
                                گیرد.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از
                                طراحان گرافیک است، چاپگرها ت، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان
                                ک و متون بلکه ت، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان ک ت، چاپگرها
                                و متون بلکه روزنامه و مجله در ستون و سطرآنچنان ک ت، چاپگرها و متون بلکه روزنامه و
                                مجله در ستون و سطرآنچنان ک روزنامه و مجله در ستون و سطرآنچنان که لازم است،</p>
                        </div>
                    </div>
                </div>
                <div
                    class="w-full h-12 flex flex-col justify-start items-start bg-[#171A1F] border border-[#272A2F] rounded-xl overflow-y-hidden transition_root cursor-pointer">
                    <div class="w-full px-4 py-3  flex justify-between items-start question_common_onclick">
                        <div class="flex gap-2 justify-start items-center">
                            <div class="transition_root">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                    class="size-4 fill-[var(--gold)] -rotate-90">
                                    <path
                                        d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z">
                                    </path>
                                </svg>
                            </div>
                            <span class="max-xl:text-sm max-sm:text-[10px] text-[var(--text-secondary)]">زمان چاپ و
                                تحویل سفارش چقدر است ؟</span>
                        </div>
                        <div class="transition_root">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                class="xl:size-5 lg:size-4 size-2 fill-[var(--gold)]">
                                <path
                                    d="M248 72c0-13.3-10.7-24-24-24s-24 10.7-24 24V232H40c-13.3 0-24 10.7-24 24s10.7 24 24 24H200V440c0 13.3 10.7 24 24 24s24-10.7 24-24V280H408c13.3 0 24-10.7 24-24s-10.7-24-24-24H248V72z">
                                </path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                class="xl:size-5 lg:size-4 size-2 fill-[var(--gold)] hidden">
                                <path
                                    d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <div class="w-full h-full flex flex-col gap-4 justify-start items-start px-4 max-xl:mt-1">
                        <span class="w-full h-0.5 bg-[#272A2F]"></span>
                        <div
                            class="px-6 flex gap-2 max-h-30 overflow-y-auto justify-center items-cneter [&::-webkit-scrollbar]:w-1  [&::-webkit-scrollbar-thumb]:bg-[var(--gold)]  [&::-webkit-scrollbar-thumb]:rounded-full">
                            <span class="min-w-2 min-h-2 max-w-2 max-h-2 bg-[var(--gold)] rounded-full mt-1"></span>
                            <p
                                class="max-xl:text-sm max-sm:text-[10px] text-[var(--text-secondary)] text-justify leading-6">
                                اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار
                                گیرد.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از
                                طراحان گرافیک است، چاپگرها ت، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان
                                ک و متون بلکه ت، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان ک ت، چاپگرها
                                و متون بلکه روزنامه و مجله در ستون و سطرآنچنان ک ت، چاپگرها و متون بلکه روزنامه و
                                مجله در ستون و سطرآنچنان ک روزنامه و مجله در ستون و سطرآنچنان که لازم است،</p>
                        </div>
                    </div>
                </div>

            </div>
            <div
                class="lg:w-1/2 w-full h-full bg-[var(--background-2)] rounded-xl flex flex-col gap-4 justify-start items-start px-7 py-5">
                <div class="w-full flex justify-between items-center">
                    <h3 class="sm:text-xl text-lg text-[var(--text)] font-bold">نظرات مشتریان</h3>
                    <a href="#" class="sm:text-sm text-xs text-[var(--gold)]">مشاهده همه جزئیات</a>
                </div>
                <div
                    class="w-full px-6 py-4 flex gap-10 justify-start items-center bg-[#171A1F] border border-[#272A2F] rounded-xl overflow-y-hidden transition_root">
                    <div class="w-3/24 h-full flex justify-center items-center">
                        <div
                            class="sm:min-w-20 sm:min-h-20 sm:max-w-20 sm:max-h-15 min-w-15 min-h-15 max-w-15 border border-[var(--gold)] rounded-full">
                            <img src="{{ asset('assets/img/user.png') }}" alt=""
                                class="w-full h-full rounded-full">
                        </div>
                    </div>
                    <div class="w-21/24 h-full flex flex-col gap-2 justify-start items-start">
                        <div class="w-full flex justify-between items-center">
                            <!-- star -->
                            <div class="flex gap-0.5 items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                    class="sm:size-4 size-3 fill-[var(--star)]">
                                    <defs></defs>
                                    <path class="fa-secondary"
                                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    <path class="fa-primary" d="" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                    class="sm:size-4 size-3 fill-[var(--star)]">
                                    <defs></defs>
                                    <path class="fa-secondary"
                                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    <path class="fa-primary" d="" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                    class="sm:size-4 size-3 fill-[var(--star)]">
                                    <defs></defs>
                                    <path class="fa-secondary"
                                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    <path class="fa-primary" d="" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                    class="sm:size-4 size-3 fill-[var(--star)]">
                                    <defs></defs>
                                    <path class="fa-secondary"
                                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    <path class="fa-primary" d="" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                    class="sm:size-4 size-3 fill-[var(--star)]">
                                    <defs></defs>
                                    <path class="fa-secondary"
                                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    <path class="fa-primary" d="" />
                                </svg>
                            </div>
                            <!-- star -->
                            <span class="xl:text-sm sm:text-xs text-[10px] text-[var(--text-secondary)]">1405/05/04</span>
                        </div>
                        <p class="xl:text-sm sm:text-xs text-[10px] text-[var(--text)]">چاپ شاهکار با سال‌ها تجربه
                            در زمینه چاپ دیجیتال و تبلیغات محیطی، همراه مطمئن شما در مسیر برندسازی و معرفی کسب‌وکار
                            است</p>
                    </div>
                </div>
                <div
                    class="w-full px-6 py-4 flex gap-10 justify-start items-center bg-[#171A1F] border border-[#272A2F] rounded-xl overflow-y-hidden transition_root">
                    <div class="w-3/24 h-full flex justify-center items-center">
                        <div
                            class="sm:min-w-20 sm:min-h-20 sm:max-w-20 sm:max-h-15 min-w-15 min-h-15 max-w-15 border border-[var(--gold)] rounded-full">
                            <img src="{{ asset('assets/img/user.png') }}" alt=""
                                class="w-full h-full rounded-full">
                        </div>
                    </div>
                    <div class="w-21/24 h-full flex flex-col gap-2 justify-start items-start">
                        <div class="w-full flex justify-between items-center">
                            <!-- star -->
                            <div class="flex gap-0.5 items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                    class="sm:size-4 size-3 fill-[var(--star)]">
                                    <defs></defs>
                                    <path class="fa-secondary"
                                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    <path class="fa-primary" d="" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                    class="sm:size-4 size-3 fill-[var(--star)]">
                                    <defs></defs>
                                    <path class="fa-secondary"
                                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    <path class="fa-primary" d="" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                    class="sm:size-4 size-3 fill-[var(--star)]">
                                    <defs></defs>
                                    <path class="fa-secondary"
                                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    <path class="fa-primary" d="" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                    class="sm:size-4 size-3 fill-[var(--star)]">
                                    <defs></defs>
                                    <path class="fa-secondary"
                                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    <path class="fa-primary" d="" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                    class="sm:size-4 size-3 fill-[var(--star)]">
                                    <defs></defs>
                                    <path class="fa-secondary"
                                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    <path class="fa-primary" d="" />
                                </svg>
                            </div>
                            <!-- star -->
                            <span class="xl:text-sm sm:text-xs text-[10px] text-[var(--text-secondary)]">1405/05/04</span>
                        </div>
                        <p class="xl:text-sm sm:text-xs text-[10px] text-[var(--text)]">چاپ شاهکار با سال‌ها تجربه
                            در زمینه چاپ دیجیتال و تبلیغات محیطی، همراه مطمئن شما در مسیر برندسازی و معرفی کسب‌وکار
                            است</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- customer_end -->
    <!-- up_footer -->
    <section class="w-full flex justify-center">
        <div class="w-11/12 py-2 lg:px-10 px-5 bg-[#18092A] rounded-xl flex justify-between"
            style="background: linear-gradient(276deg,rgba(24, 9, 42, 1) 68%, rgba(34, 9, 48, 1) 100%);">
            <div class="max-sm:w-full h-full flex max-sm:flex-col justify-start items-center gap-5">
                <a href="#"
                    class="lg:px-8 sm:px-5 max-sm:w-full py-3 flex gap-3 justify-center items-center rounded-2xl gradient_box1 border-2 border-[var(--gold)] transition_root">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="lg:size-6 size-4"
                            fill="none" stroke="white" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M4 13v-1a8 8 0 0 1 16 0v1"></path>
                            <rect x="2" y="13" width="5" height="7" rx="1.5"></rect>
                            <rect x="17" y="13" width="5" height="7" rx="1.5"></rect>
                            <path d="M20 20v1a3 3 0 0 1-3 3h-3"></path>
                        </svg>
                    </div>
                    <span class="xl:text-lg max-lg:text-sm text-xs text-white font-bold">ثبت درخواست مشاوره</span>
                </a>
                <div class="max-sm:w-full flex flex-col gap-2 justify-center items-start max-sm:items-center">
                    <h5 class="lg:text-lg max-sm:text-sm text-[var(--text)]">نیاز به مشاوره دارید؟</h5>
                    <p class="max-lg:text-sm max-sm:text-xs text-[var(--text-secondary)]">همکارن ما آماده پاسگویی
                        به سوالات شما هستن</p>
                </div>
            </div>

            <div class="max-sm:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="lg:size-15 size-10" fill="none"
                    stroke="var(--gold)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M4 13v-1a8 8 0 0 1 16 0v1"></path>
                    <rect x="2" y="13" width="5" height="7" rx="1.5"></rect>
                    <rect x="17" y="13" width="5" height="7" rx="1.5"></rect>
                    <path d="M20 20v1a3 3 0 0 1-3 3h-3"></path>
                </svg>
            </div>
        </div>
    </section>
    <!-- up_footer -->
@endsection
