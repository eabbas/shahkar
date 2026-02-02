@extends('app.document')
@section('title')
    {{ $category->title }}
@endsection
@section('content')
    {{-- <h2>نمایش دسته بندی</h2>
   <table border="1" style="border-collapse: collapse;">
      <thead>
         <tr>
            <th>آیدی</th>
            <th>عنوان دسته بندی</th>
            <th>توضیحات دسته بندی</th>
            <th>دسته بندی فرزند</th>
            <th>تصویر</th>
         </tr>
      </thead>
      <tbody>
         <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->title}}</td>
            <td>{{$category->description}}</td>
            <td>@if ($category->children) @foreach ($category->children as $child) {{$child->title}} <br> @endforeach @endif</td>
            <td>{{$category->image}}</td>
      </tbody>
   </table>
   <a href="{{route('category-index')}}">برگشت</a> --}}


    <div class="w-full">
        <div class="pb-5 w-full">
            <h1 class="text-xl text-center lg:text-start font-bold">{{ $category->title }}</h1>
        </div>

        <div class="flex flex-row justify-center lg:justify-start border-none rounded-[7px]">
            
                    <img class="size-27 lg:size-41 rounded-lg mx-auto lg:m-0" src="{{ asset($category->image) }}"
                        alt="category image" />
              
        </div>


        <div class="w-full flex flex-row justify-end">

        </div>
        <div class="mt-4 lg:mt-5">
            <div class="bg-[#f2f2f2] shadow-md border border-gray-200 rounded-md lg:p-5 p-2 mb-3 lg:mb-5">
                <div class="flex flex-row justify-between items-center border-b border-gray-200">
                    <h1 class="lg:text-xl mt-5 font-bold pb-3">
                        جزئیات دسته
                    </h1>
                    <a href="{{ route('category-index') }}"
                        class="text-xs px-2 py-0.5 rounded-sm bg-gray-800 text-white">بازگشت</a>
                </div>

                <div class="w-full lg:w-1/2 flex flex-col gap-y-3 lg:gap-y-5 mt-5">
                    <div class="w-full lg:py-3 flex flex-col gap-2 lg:gap-0 lg:flex-row lg:items-center">
                        <div class="w-full lg:w-1/2 text-xs lg:text-sm text-gray-400">
                            عنوان دسته بندی
                        </div>
                        <div class="w-full lg:w-1/2 font-medium pr-3 lg:pr-0 text-sm lg:text-base">
                            {{ $category->title }}
                        </div>
                    </div>
                    <div class="w-full lg:py-3 flex flex-col gap-2 lg:gap-0 lg:flex-row lg:items-center">
                        <div class="w-full lg:w-1/2 text-xs lg:text-sm text-gray-400">
                            توضیحات
                        </div>
                        <div class="w-full lg:w-1/2 font-medium pr-3 lg:pr-0 text-sm lg:text-base">
                            {{ $category->description }}
                        </div>
                    </div>
                    @if ($category->children)
                        <div class="w-full lg:py-3 flex flex-col gap-2 lg:gap-0 lg:flex-row">
                            <div class="w-full lg:w-1/2 text-xs lg:text-sm text-gray-400">
                                زیر دسته بندی ها
                            </div>
                            <div class="w-1/2 flex flex-col items-center gap-3 pr-3 lg:pr-0">
                                @foreach ($category->children as $child)
                                    <div class="w-full flex flex-col lg:flex-row">
                                        <div class="w-1/2 text-xs lg:text-sm text-gray-400">
                                            {{ $child->title }}
                                        </div>

                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
