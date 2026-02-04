@extends('app.document')
@section('title', 'درباره ما')
@section('content')
    <div class="flex flex-col lg:flex-row justify-center gap-8 lg:gap-0 lg:items-center py-3 lg:py-5">
                <h2 class="font-bold lg:text-[24px] leading-8 text-center">
                  درباره ما
                </h2>
            </div>
    @foreach ($aboutus as $au)
        <div class="w-11/12 mx-auto mt-5 flex flex-col items-center gap-10 mb-5">
            <div class="w-full">
                <img class="w-full max-h-40 lg:max-h-80 object-cover" src="{{ asset($au['image']) }}" alt="aboutus">
            </div>
            <p class="text-sm lg:text-md text-justify leading-[180%]"> {{ $au['description'] }} </p>
        </div>
    @endforeach
@endsection
