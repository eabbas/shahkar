@extends('app.document')
@section('title', 'صفحه مورد نظر یافت نشد')
@section('content')
    <style>
        .gradient_text {
            /* background: linear-gradient(68deg, rgba(83, 58, 253, .08) .78%, rgba(255, 140, 108, .8) 30.61%, rgba(218, 75, 254, .8) 79.02%), #e3ecf7; */
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
    <div class="w-full h-[83vh] relative">
        <img src="{{ asset('assets/img/background_404.jpg') }}" alt="" class="w-full h-full">
        <div class="w-full h-full absolute top-0 right-0  flex flex-col gap-8 justify-center items-center">
            <div class="lg:text-[240px] sm:text-[180px] text-[120px] lg:leading-45 sm:leading-40 leading-22 font-bold gradient_text gradient_box1"
                style="font-family: Yekan;">404</div>
            <div class="flex flex-col justify-center items-center gap-6">
                <h1 class="lg:text-3xl sm:text-xl text-sm font-bold text-[var(--text)]">صفحه مورد نظر شما <span
                        class="text-[var(--gold)]">یافت نشد!</span></h1>
                <p
                    class="lg:w-9/12 xl:w-15/24 w-7/12 text-[var(--text-secondary)] text-center max-xl:text-sm max-lg:text-xs max-sm:text-[9px]">
                    متاسفانه صفحه ای که به دنبال آن هستید وجود ندارد یا به آدرس دیگری منتقل شده است.</p>
            </div>
            <a href="{{ route('home') }}"
                class="lg:px-7 px-5 lg:py-3 py-1.5 flex gap-3 justify-center items-center rounded-2xl border-2 border-[var(--gold)] rezume_gradient transition_root">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                        class="sm:size-6 size-4 fill-[var(--gold)]">
                        <path
                            d="M272.5 5.7c9-7.6 22.1-7.6 31.1 0l264 224c10.1 8.6 11.4 23.7 2.8 33.8s-23.7 11.3-33.8 2.8L512 245.5V432c0 44.2-35.8 80-80 80H144c-44.2 0-80-35.8-80-80V245.5L39.5 266.3c-10.1 8.6-25.3 7.3-33.8-2.8s-7.3-25.3 2.8-33.8l264-224zM288 55.5L112 204.8V432c0 17.7 14.3 32 32 32h48V312c0-22.1 17.9-40 40-40H344c22.1 0 40 17.9 40 40V464h48c17.7 0 32-14.3 32-32V204.8L288 55.5zM240 464h96V320H240V464z">
                        </path>
                    </svg>
                </div>
                <span class="max-lg:text-xs max-sm:text-[10px] font-bold text-white">بازگشت به صفحه اصلی</span>
            </a>
        </div>
    </div>
@endsection
