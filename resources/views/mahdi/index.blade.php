@extends('app.document')
@section('title', 'شاهکار | خانه')
@section('homeHeader')
    <header class="w-full lg:h-dvh flex flex-col items-center">
        <section
            class="w-full xl:h-21/24 lg:h-full flex flex-col gap-2 items-center lg:items-start justify-between relative">
            <div class="w-full h-full relative flex flex-col gap-3 justify-center items-center">
                @if ($header)
                    <img src="{{ asset('storage/' . $header->img) }}" alt=""
                        class="bg-center min-w-full lg:max-h-full lg:min-h-full max-lg:hidden">
                    <img src="{{ asset('storage/' . $header->mobileImg) }}" alt=""
                        class="w-full lg:hidden max-lg:order-1">

                    {{-- item --}}
                    <div
                        class="lg:w-23/24 w-11/12 lg:h-full max-lg:py-1.5 flex flex-col items-end justify-center py-5 lg:absolute lg:top-0 lg:right-0  max-lg:order-2 max-lg:mx-auto">
                        <div class="lg:w-4/12 w-full h-2/3 flex flex-col gap-7 justify-center items-center">
                            <div
                                class="text-xl sm:text-3xl leading-12 lg:text-4xl text-white font-bold flex flex-col sm:gap-8 gap-4 justify-center items-center">
                                <h2>
                                    {{ $header->title }}
                                    <span class="text-[var(--gold)]"></span>
                                </h2>
                            </div>
                            <div
                                class="text-xs lg:text-sm leading-7 text-[var(--text-secondary)] flex flex-col justify-center items-center">
                                <p>{{ $header->subTitle }}</p>
                            </div>
                            <!-- bottoms -->
                            <div
                                class="lg:w-full sm:w-9/12 w-full flex max-sm:flex-col gap-5 items-center justify-end py-5 ">
                                <a href="{{ $header->rightBtnLink }}"
                                    class="sm:w-1/2 w-full py-3 flex gap-3 justify-center items-center rounded-2xl gradient_box1 gradient_box1_hover_chang border-2 border-[var(--gold)] transition_root">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                            class="xl:size-5 size-4" fill="white">
                                            <path
                                                d="M16 0H0V32H16 67.2l77.2 339.5 2.8 12.5H160 496h16V352H496 172.8l-14.5-64H496L566 64l10-32H542.5 100L95.6 12.5 92.8 0H80 16zm91.3 64H532.5l-60 192H151L107.3 64zM184 432a24 24 0 1 1 0 48 24 24 0 1 1 0-48zm0 80a56 56 0 1 0 0-112 56 56 0 1 0 0 112zm248-56a24 24 0 1 1 48 0 24 24 0 1 1 -48 0zm80 0a56 56 0 1 0 -112 0 56 56 0 1 0 112 0z">
                                            </path>
                                        </svg>
                                    </div>
                                    <span class="xl:text-md text-sm text-white font-bold">{{ $header->rightBtnText }}</span>
                                </a>
                                <a href="{{ $header->leftBtnLink }}"
                                    class="sm:w-1/2 w-full py-3 flex gap-3 justify-center items-center rounded-2xl border-2 border-[var(--gold)] rezume_gradient transition_root">
                                    <span
                                        class="xl:text-md sm:text-sm text-sm font-bold text-white">{{ $header->leftBtnText }}</span>
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
                @endif
            </div>

        </section>
    </header>
@endsection
@section('content')
    @if (session('success'))
        <div
            class="modal py-5 px-8 rounded-lg shadow-lg bg-green-300 fixed top-10 right-10 z-5 flex justify-center items-center transition-all duration-300">
            <span class="text-sm text-[var(--light-theme-text-color)]"> {{ session('success') }} </span>
        </div>
    @endif
    @if (session('failure'))
        <div
            class="modal py-5 px-8 rounded-lg shadow-lg bg-red-300 fixed top-10 right-10 z-5 flex justify-center items-center transition-all duration-300">
            <span class="text-sm text-[var(--light-theme-text-color)]"> {{ session('failure') }} </span>
        </div>
    @endif
    <section class="w-full h-full flex items-center justify-center">
        <div class="w-11/12 h-full flex flex-col gap-8 items-center justify-center">
            <div class="w-full flex flex-col gap-3 items-center justify-center">
                <h3 class="xl:text-4xl lg:text-2xl text-xl text-white font-bold">خدمات ما</h3>
                <div class="flex gap-0.5 items-center justify-center">
                    <span class="size-1 rounded-full bg-[var(--gold)]"></span>
                    <span class="w-8 h-0.5 bg-[var(--gold)] rounded-full"></span>
                </div>
            </div>
            <div
                class="w-full grid lg:grid-cols-6 lg:grid-rows-1 sm:grid-cols-2 sm:grid-rows-3 grid-cols-1 gird-rows-6  xl:gap-4 gap-4 items-center justify-center sm:justify-between">
                @foreach ($services as $service)
                    <div
                        class="w-full h-full border-1 relative border-[var(--gold)] bg-[#181819] rounded-2xl flex lg:flex-col gap-5 lg:gap-18 justify-between p-1 scale transition_root">
                        <div class="lg:w-full w-1/2 lg:h-7/12 flex items-cebter">
                            @if ($service->img)
                                <img src="{{ asset('storage/' . $service->img) }}" alt=""
                                    class="object-fit w-full h-45 lg:rounded-t-2xl rounded-2xl">
                            @else
                                <img src="{{ asset('storage/default.jpg') }}" alt=""
                                    class="object-fit w-full h-45 lg:rounded-t-2xl rounded-2xl">
                            @endif
                        </div>
                        <div
                            class="lg:w-full w-1/2 h-full text-white rounded-b-2xl relative flex flex-col max-lg:gap-5 justify-start">
                            <div class="w-full lg:absolute lg:-top-28 lg:right-0 flex justify-center items-center">
                                <div
                                    class=" w-11/12 sm:pb-4 pb-2 sm:pt-2 pt-1 rounded-xl bg-[var(--background-2)] flex flex-col gap-1 items-center justify-center">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="size-12">
                                            <g fill="none" stroke="#D4A23A" stroke-width="10" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <!-- Outer Card -->
                                                <rect x="90" y="110" width="332" height="220" rx="10" />
                                                <!-- Inner Border -->
                                                <rect x="120" y="140" width="272" height="160" rx="2" />
                                                <!-- Top Right Circle -->
                                                <circle cx="340" cy="175" r="18" />
                                                <!-- Logo -->
                                                <path
                                                    d="
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
                                    <h4 class="xl:text-sm lg:text-xs sm:text-[10px] md:text-sm text-sm font-bold">
                                        {{ $service->title }}</h4>
                                </div>
                            </div>
                            <div class="w-full text-xs text-[var(--text-secondary)] px-2 pb-4">
                                <p>{{ $service->subTitle }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- servis_end -->

    <!-- identify_vidio -->

    <section class="w-full flex items-center justify-center">
        <div class="w-11/12 h-full flex flex-col gap-10  justify-center items-center">
            <div class="w-full flex flex-col gap-3 items-center justify-center">
                <h3 class="xl:text-4xl lg:text-2xl text-white font-bold">چرا شاهکار ؟</h3>
                <div class="flex gap-0.5 items-center justify-center">
                    <span class="size-1 rounded-full bg-[var(--gold)]"></span>
                    <span class="w-6 h-0.5 bg-[var(--gold)] rounded-full"></span>
                </div>
            </div>
            @if ($introduction)
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
                                <span
                                    class="xl:text-3xl lg:text-2xl texl-xl font-bold text-[var(--gold)]">{{ $introduction->firstBoxNumber }}</span>
                                <span
                                    class="xl:text-lg lg:text-md text-xs font-bold text-[var(--text)]">{{ $introduction->firstBoxText }}</span>
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
                                <span
                                    class="xl:text-3xl lg:text-2xl texl-xl font-bold text-[var(--gold)]">{{ $introduction->secondBoxNumber }}</span>
                                <span
                                    class="xl:text-lg lg:text-md text-xs font-bold text-[var(--text)]">{{ $introduction->secondBoxText }}</span>
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
                                <span
                                    class="txl:text-3xl lg:text-2xl texl-xl font-bold text-[var(--gold)]">{{ $introduction->thirdBoxNumber }}</span>
                                <span
                                    class="xl:text-lg lg:text-md text-xs font-bold text-[var(--text)]">{{ $introduction->thirdBoxText }}</span>
                            </div>
                        </div>
                    </div>
                    <div
                        class="sm:w-8/12 max-sm:w-full h-full border-2 border-[var(--gold)] relative flex justify-center items-center rounded-lg max-sm:order-1">
                        <video id="video" src="{{ asset('storage/' . $introduction->video) }}"
                            poster="{{ asset('storage/' . $introduction->videoCover) }}" controls
                            class="object-cover w-full h-full rounded-lg"></video>
                        <div class="p-4 bg-[var(--background)]  border-2 border-[var(--gold)] absolute flex justify-center items-center rounded-full animation_play_vidio transition-all duration-300"
                            id="play_icon_vidio" onclick="playVideo('play',this)">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="size-6 fill-white">
                                <path
                                    d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                            </svg>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>


    <!-- identify_vidio -->
    <!-- rezimes_start -->
    <section id="products" class="w-full flex flex-col items-center justify-center">
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
                    class="overflow-auto [&::-webkit-scrollbar]:h-1 [&::-webkit-scrollbar-thumb]:bg-[var(--gold)] [&::-webkit-scrollbar-thumb]:rounded-full flex gap-2 items-center xl:text-md sm:text-sm text-xs py-4 px-1">
                    <span
                        class="px-6 py-2 bg-[var(--gold)] rounded-full font-bold text-white flex justify-center items-center shadow_item cursor-pointer">همه</span>
                    @foreach ($categories as $category)
                        @if ($category['products']->isNotEmpty())
                            <span
                                class="px-6 py-2 border border-[var(--border)] hover:border-[var(--gold)] rounded-full font-bold text-[var(--text-secondary)] scale hover:text-[var(--text)] transition_root flex justify-center items-center shadow_item text-nowrap cursor-pointer">{{ $category->title }}</span>
                        @endif
                    @endforeach
                </div>
            </div>
            <!-- category_rezume -->
            <!-- rezumes items -->
            <div
                class="w-full flex pb-3 lg:h-90 h-80 items-center xl:justify-between gap-2 overflow-auto max-sm:pb-5 [&::-webkit-scrollbar]:h-1 [&::-webkit-scrollbar-thumb]:bg-[var(--gold)] [&::-webkit-scrollbar-thumb]:rounded-full">
                <div
                    class="min-w-45 md:w-2/12 h-full border border-[var(--gold)] rounded-xl px-[0.3px] py-[0.7px] overflow-hidden">
                    @if (isset($products[0]))
                        <a href="{{ route('product.show', [$products[0]]) }}">
                            <img src="{{ asset('storage/' . $products[0]->mainImg) }}" alt=""
                                class="object-fit w-full h-full rounded-xl scale transition_root">
                        </a>
                    @endif
                </div>
                <div class="min-w-100 md:w-8/12 h-full flex flex-col justify-between items-center">
                    <div class="w-full h-49/100 flex gap-1 justify-between items-center">
                        <div
                            class="w-1/2 h-full border border-[var(--gold)] rounded-xl px-[0.3px] py-[0.7px] overflow-hidden">
                            @if (isset($products[1]))
                                <a href="{{ route('product.show', [$products[1]]) }}">
                                    <img src="{{ asset('storage/' . $products[1]->mainImg) }}" alt=""
                                        class="object-fit w-full h-full rounded-xl scale transition_root">
                                </a>
                            @endif
                        </div>
                        <div
                            class="w-1/2 h-full border border-[var(--gold)] rounded-xl px-[0.3px] py-[0.7px] overflow-hidden">
                            @if (isset($products[2]))
                                <a href="{{ route('product.show', [$products[2]]) }}">
                                    <img src="{{ asset('storage/' . $products[2]->mainImg) }}" alt=""
                                        class="object-fit w-full h-full rounded-xl scale transition_root">
                                </a>
                            @endif
                        </div>
                    </div>
                    <div class="w-full h-49/100 flex gap-1 justify-between items-center">
                        <div
                            class="sm:w-1/3 w-1/2 h-full border border-[var(--gold)] rounded-xl px-[0.3px] py-[0.7px] overflow-hidden">
                            @if (isset($products[3]))
                                <a href="{{ route('product.show', [$products[3]]) }}">
                                    <img src="{{ asset('storage/' . $products[3]->mainImg) }}" alt=""
                                        class="object-fit w-full h-full rounded-xl scale transition_root">
                                </a>
                            @endif
                        </div>
                        <div
                            class="sm:w-1/3 w-1/2 h-full border border-[var(--gold)] rounded-xl px-[0.3px] py-[0.7px] overflow-hidden">
                            @if (isset($products[4]))
                                <a href="{{ route('product.show', [$products[4]]) }}">
                                    <img src="{{ asset('storage/' . $products[4]->mainImg) }}" alt=""
                                        class="object-fit w-full h-full rounded-xl scale transition_root">
                                </a>
                            @endif
                        </div>
                        <div
                            class="sm:w-1/3 w-1/2 h-full border border-[var(--gold)] rounded-xl px-[0.3px] py-[0.7px] overflow-hidden">
                            @if (isset($products[5]))
                                <a href="{{ route('product.show', [$products[5]]) }}">
                                    <img src="{{ asset('storage/' . $products[5]->mainImg) }}" alt=""
                                        class="object-fit w-full h-full rounded-xl scale transition_root">
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
                <div
                    class="min-w-45 md:w-2/12 h-full border border-[var(--gold)] rounded-xl px-[0.3px] py-[0.7px] overflow-hidden">
                    @if (isset($products[6]))
                        <a href="{{ route('product.show', [$products[6]]) }}">
                            <img src="{{ asset('storage/' . $products[6]->mainImg) }}" alt=""
                                class="object-fit w-full h-full rounded-xl scale transition_root">
                        </a>
                    @endif
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
            <div class="w-full h-full lg:absolute lg:bottom-0 lg:right-0 flex flex-col items-center justify-start">
                <div class="w-11/12 h-full flex flex-col gap-9">
                    <!-- property -->
                    <div
                        class="w-full lg:h-30 lg:border-y-1 lg:border-[var(--border)] max-lg:border sm:border-[var(--gold)] flex max-sm:flex max-sm:flex-col gap-4 items-center justify-between max-lg:grid grid-cols-2 lg:py-4 py-3 max-lg:px-5 max-sm:bg-[var(--background)] max-lg:bg-[var(--background-2)]">
                        <div
                            class="w-full lg:w-1/6 h-full flex items-center justify-center max-lg:bg-[var(--background)] max-lg:rounded-xl max-lg:border-1 sm:border-[var(--border)] border-[var(--gold)] max-lg:py-2 max-lg:px-2">
                            <div
                                class="group max-sm:w-9/12 msx-sm:h-full flex max-lg:flex-col gap-2 justify-center items-center">

                                <div class="group-hover:scale-[1.05] group-active:scale-[1.3] transition_root">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                        class="xl:size-13 lg:size-9 size-7 fill-[var(--gold)]">
                                        <path
                                            d="M73 127L256 49.4 439 127c5.9 2.5 9.1 7.8 9 12.8c-.4 91.4-38.4 249.3-186.3 320.1c-3.6 1.7-7.8 1.7-11.3 0C102.4 389 64.5 231.2 64 139.7c0-5 3.1-10.2 9-12.8zM457.7 82.8L269.4 2.9C265.2 1 260.7 0 256 0s-9.2 1-13.4 2.9L54.3 82.8c-22 9.3-38.4 31-38.3 57.2c.5 99.2 41.3 280.7 213.6 363.2c16.7 8 36.1 8 52.8 0C454.8 420.7 495.5 239.2 496 140c.1-26.2-16.3-47.9-38.3-57.2zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z">
                                        </path>
                                    </svg>
                                </div>
                                <div
                                    class="flex flex-col sm:gap-2 gap-1 lg:items-start items-center max-sm:items-center justify-center">
                                    <h5 class="xl:text-lg sm:text-xs text-sm font-bold text-[var(--text)]">کیفیت
                                        تضمینی</h5>
                                    <div
                                        class="text-justify flex flex-col lg:items-start items-center max-sm:items-start justify-center xl:text-[11px] sm:text-[7px] text-[10px] text-[var(--text-secondary)]">
                                        <span class=" font-bold">از تفکیک دقیق رنگ ها تابرش و صحافی، تمام مراحل با حساسترین
                                            استاندارد ها رعایت میشوند.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span class="w-0.5 h-full bg-[var(--border)] rounded-full max-lg:hidden"></span>
                        <div
                            class="w-full lg:w-1/6 h-full flex items-center justify-center max-lg:bg-[var(--background)] max-lg:rounded-xl max-lg:border-1 sm:border-[var(--border)] border-[var(--gold)] max-lg:py-2 max-lg:px-2">
                            <div
                                class="group max-sm:w-9/12 msx-sm:h-full flex max-lg:flex-col gap-2 justify-center items-center">

                                <div class="group-hover:scale-[1.05] group-active:scale-[1.3] transition_root">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"
                                        class="xl:size-13 lg:size-9 size-7 fill-[var(--gold)]">
                                        <path
                                            d="M128 128a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM269.7 336c80 0 145 64.3 146.3 144H32c1.2-79.7 66.2-144 146.3-144h91.4zM224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3zm431 208c17 0 30.7-13.8 30.7-30.7C640 392.2 567.8 320 478.7 320H417.3c-4.4 0-8.8 .2-13.2 .5c11.3 9.4 21.6 19.9 30.7 31.5h43.9c71 0 128.6 57.2 129.3 128H480c0 .8 0 1.5 0 2.3c0 10.8-2.8 20.9-7.6 29.7H609.3zM432 256c61.9 0 112-50.1 112-112s-50.1-112-112-112c-24.8 0-47.7 8.1-66.3 21.7c5.2 9.8 9.3 20.3 12.4 31.2C392.3 71.9 411.2 64 432 64c44.2 0 80 35.8 80 80s-35.8 80-80 80c-25.2 0-47.6-11.6-62.3-29.8c-4.7 10.3-10.4 19.9-17 28.9C373 243.4 401 256 432 256z" />
                                    </svg>
                                </div>
                                <div
                                    class="flex flex-col sm:gap-2 gap-1 lg:items-start items-center max-sm:items-center justify-center">
                                    <h5 class="xl:text-lg sm:text-xs text-sm font-bold text-[var(--text)]">تیم
                                        حرفه‌ای</h5>
                                    <div
                                        class="text-justify flex flex-col lg:items-start items-center max-sm:items-start justify-center xl:text-[11px] sm:text-[7px] text-[10px] text-[var(--text-secondary)]">
                                        <span class=" font-bold">تیم ما متشکل از کارشناسان با تجربه در زمینه چاپ و طراحی و
                                            گرافیک و هنر است.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="w-full lg:w-2/6 h-full flex items-center justify-center max-lg:bg-[var(--background)] max-lg:rounded-xl max-lg:border-1 sm:border-[var(--border)] border-[var(--gold)] max-lg:py-2 px-2 max-lg:col-span-2 gradient_box1 rounded-xl">
                            <div
                                class="group max-sm:w-9/12 msx-sm:h-full flex max-lg:flex-col gap-2 justify-center items-center">

                                <div class="group-hover:scale-[1.05] group-active:scale-[1.6] transition_root">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="xl:size-13 size-9" viewBox="0 0 24 24"
                                        fill="none" stroke="#fff" stroke-width="1.6" stroke-linecap="round"
                                        stroke-linejoin="round">

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
                                                                                                                                                                                                                        C10.4 3.5 11.3 3.6 12 3Z" />

                                        <!-- Inner circle -->
                                        <circle cx="12" cy="9.8" r="4.2" />

                                        <!-- Ribbons -->
                                        <path d="M9.8 14.6L7.7 20H10L12 17.7" />
                                        <path d="M14.2 14.6L16.3 20H14L12 17.7" />

                                    </svg>
                                </div>
                                <div
                                    class="flex flex-col sm:gap-2 gap-1 lg:items-start items-center max-sm:items-center justify-center">
                                    <h5 class="xl:text-lg text-md font-bold text-[var(--text)]">چرا ما را انتخاب
                                        کنید</h5>
                                    <div
                                        class="text-justify flex flex-col lg:items-start items-center max-sm:items-start justify-center xl:text-[11px] text-[10px] text-[var(--text)]">
                                        <span class=" font-bold">ما با دانش فنی بالا و کادر مجرب و به روز همراه شما در مسیر
                                            خلق یک اثر ماندگار هستیم.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="w-full lg:w-1/6 h-full flex items-center justify-center max-lg:bg-[var(--background)] max-lg:rounded-xl max-lg:border-1 sm:border-[var(--border)] border-[var(--gold)] max-lg:py-2 max-lg:px-2">
                            <div
                                class="group max-sm:w-9/12 msx-sm:h-full flex max-lg:flex-col gap-2 justify-center items-center">

                                <div class="group-hover:scale-[1.05] group-active:scale-[1.3] transition_root">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        class="xl:size-13 lg:size-9 size-7 fill-none" stroke="var(--gold)"
                                        stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M2 7h11v10H2z"></path>
                                        <path d="M13 10h4l4 3.5V17h-8z"></path>
                                        <circle cx="6" cy="18.5" r="1.6"></circle>
                                        <circle cx="17" cy="18.5" r="1.6"></circle>
                                    </svg>
                                </div>
                                <div
                                    class="flex flex-col sm:gap-2 gap-1 lg:items-start items-center max-sm:items-center justify-center">
                                    <h5 class="xl:text-lg sm:text-xs text-sm font-bold text-[var(--text)]">تحویل
                                        سریع</h5>
                                    <div
                                        class="text-justify flex flex-col lg:items-start items-center max-sm:items-start justify-center xl:text-[11px] sm:text-[7px]  text-[10px] text-[var(--text-secondary)]">
                                        <span class=" font-bold">با فرایند تولید بهینه و منسجم سفارش شما در سریع ترین زمان
                                            ممکن آماده میشود.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span class="w-0.5 h-full bg-[var(--border)] rounded-full max-lg:hidden"></span>
                        <div
                            class="w-full lg:w-1/6 h-full flex items-center justify-center max-lg:bg-[var(--background)] max-lg:rounded-xl max-lg:border-1 sm:border-[var(--border)] border-[var(--gold)] max-lg:py-2 max-lg:px-2">
                            <div
                                class="group max-sm:w-9/12 msx-sm:h-full flex max-lg:flex-col gap-2 justify-center items-center">

                                <div class="group-hover:scale-[1.05] group-active:scale-[1.3] transition_root">
                                    <svg class="xl:size-13 lg:size-9 size-7" viewBox="0 0 64 64" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <!-- Circle -->
                                        <circle cx="32" cy="32" r="22" stroke="#D4A437" stroke-width="3.5"
                                            stroke-linecap="round" stroke-dasharray="132 12" />

                                        <!-- Top & Bottom marks -->
                                        <line x1="32" y1="6" x2="32" y2="11"
                                            stroke="#D4A437" stroke-width="3" stroke-linecap="round" />
                                        <line x1="32" y1="53" x2="32" y2="58"
                                            stroke="#D4A437" stroke-width="3" stroke-linecap="round" />

                                        <!-- Dollar -->
                                        <text x="32" y="42" text-anchor="middle" font-size="28"
                                            font-family="Arial, sans-serif" font-weight="700" fill="#D4A437">$</text>
                                    </svg>
                                </div>
                                <div
                                    class="flex flex-col sm:gap-2 gap-1 lg:items-start items-center max-sm:items-center justify-center">
                                    <h5 class="xl:text-lg sm:text-xs text-sm font-bold text-[var(--text)]">قیمت
                                        مناسب</h5>
                                    <div
                                        class="text-justify flex flex-col lg:items-start items-center max-sm:items-start justify-center xl:text-[11px] sm:text-[7px] text-[10px] text-[var(--text-secondary)]">
                                        <span class=" font-bold">با بهینه سازی مصرف مواد اولیه و کاهش هزینه های اضافه به
                                            صرفه ترین قیمت ها را داریم.</span>
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
                                کارکنان حرفه ای ، برخورد مناسب ، و تحویل سریع و به موقع واقعا کارتون حرف نداره دمتون گرم.
                            </p>
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
                                        {{-- <span
                                            class="xl:text-xs lg:text-[11px] sm:text-[9px] md:text-[10px] text-[11px] text-[var(--text-secondary)] font-bold text-nowrap">طراح
                                            سابت</span> --}}
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
                                بهترین و با کیفیت ترین محصولات رو دارن با تنوع زیاد من یکی که از تابلو هاشون خیلی خوشم اومد
                                .</p>
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
                                            امیر فرامرزی</h5>
                                        {{-- <span
                                            class="xl:text-xs lg:text-[11px] sm:text-[9px] md:text-[10px] text-[11px] text-[var(--text-secondary)] font-bold text-nowrap">طراح
                                            سابت</span> --}}

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
                                قیمت هاشون خیلی معقول و به صرفه بود در عین حال کیفیت محصولاتشون خیلی خوب بود و صفر تا صر کار
                                رو خودشون انجام میدن.</p>
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
                                            عباس ملکی</h5>
                                        {{-- <span
                                            class="xl:text-xs lg:text-[11px] sm:text-[9px] md:text-[10px] text-[11px] text-[var(--text-secondary)] font-bold text-nowrap">طراح
                                            سابت</span> --}}

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

    <script>
        let video = document.getElementById('video')
        let play_icon_vidio = document.getElementById('play_icon_vidio')

        function playVideo(state, el) {
            if (state == 'play') {
                video.play()
                play_icon_vidio.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="size-6 fill-white">
                                        <path d="M48 64C21.5 64 0 85.5 0 112V400c0 26.5 21.5 48 48 48H80c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48H48zm192 0c-26.5 0-48 21.5-48 48V400c0 26.5 21.5 48 48 48h32c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48H240z" />
                                    </svg>`
                play_icon_vidio.setAttribute('onclick', "playVideo('pause',this)")
                play_icon_vidio.classList.add('opacity-0')
            }
            if (state == 'pause') {
                video.pause()
                play_icon_vidio.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="size-6 fill-white">
                                        <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                                    </svg>`
                play_icon_vidio.setAttribute('onclick', "playVideo('play',this)")
                play_icon_vidio.classList.remove('opacity-0')
            }
        }

        video.addEventListener('play', () => {
            video.play()
            play_icon_vidio.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="size-6 fill-white">
                                        <path d="M48 64C21.5 64 0 85.5 0 112V400c0 26.5 21.5 48 48 48H80c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48H48zm192 0c-26.5 0-48 21.5-48 48V400c0 26.5 21.5 48 48 48h32c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48H240z" />
                                    </svg>`
            play_icon_vidio.setAttribute('onclick', "playVideo('pause',this)")
            play_icon_vidio.classList.add('opacity-0')
        })
        video.addEventListener('pause', () => {
            video.pause()
            play_icon_vidio.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="size-6 fill-white">
                                        <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                                    </svg>`
            play_icon_vidio.setAttribute('onclick', "playVideo('play',this)")
            play_icon_vidio.classList.remove('opacity-0')
        })
    </script>
@endsection
