@extends('app.document')
@section('title', 'دسته بندی ها')
@section('content')
     <div class="grid grid-cols-2 mx:grid-cols-3 lg:grid-cols-5 xl:grid-cols-7 items-center gap-5 p-5">
            @foreach ($categories as $category)
                @if ($category->title == 'تخفیفات ویژه')
                    @php
                        $cat = $category;
                    @endphp
                @endif
                <div class="p-2 xl:p-4 border border-(--color-border) rounded-[10px]">
                    <a href="{{ route('category-show', [$category]) }}" class="block mb-1 w-full" target="_blank">
                        <img src="{{ asset($category->image) }}" class="w-[115px] max-h-20 mx-auto" alt="">
                        <span class="inline-block w-full text-center pt-2">{{ $category->title }}</span>
                    </a>
                    <span
                        class="block text-center text-[10px] text-(--color-secondary-text) max-h-[42px] h-[42px]">{{ $category->description }}</span>
                </div>
            @endforeach
        </div>
@endsection
