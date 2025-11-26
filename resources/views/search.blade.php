@extends('app.document')
@section('title', 'جست و جو')
@section('content')

<!-- address nav -->

<nav class="w-full py-2 lg:py-5 flex flex-row items-center gap-3">
   <a href="#" class="text-xs leading-[2.17] text-[var(--color-secondary-text)]">
      فروشگاه اینترنتی شاهکار
   </a>
   <span class="text-xs leading-[2.17] text-[var(--color-secondary-text)]">/</span>
   <a href="#" class="text-xs leading-[2.17] text-[var(--color-secondary-text)]">
      @if($category) {{$category->title}} @else همه دسته بندی ها @endif
   </a>
</nav>

<!-- address nav -->



<!-- filter and products -->

<section class="text-[var(--color-text)]">
   <div class="flex flex-row gap-5">
      <aside class="min-w-[270px] w-[300px] hidden lg:block">

         <div
            class="sticky top-3 overflow-y-auto w-full border border-[var(--color-border)] rounded-lg px-5 py-4">
            <div class="text-lg font-semibold mb-4 leading-[2.17]">
               فیلتر ها
            </div>

            <div class="w-full cursor-pointer sidebarFeatures">
               <div class="w-full">
                  <div class="flex flex-row justify-between items-center py-3">
                     <span class="font-medium">
                        برند
                     </span>
                     <svg xmlns="http://www.w3.org/2000/svg" class="size-4 transition-all duration-300" viewBox="0 0 448 512">
                        <path fill="var(--color-fill)"
                           d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                     </svg>
                  </div>
               </div>
               <div class="w-full max-h-0 overflow-hidden pr-5 transitin-all duration-300 ease-in">

                  <div
                     class="w-full flex flex-row justify-between items-center py-3 border-b border-[var(--color-border)]">
                     <div class="flex flex-row items-center gap-3">
                        <input type="checkbox">
                        <label class="font-medium">آنر</label>
                     </div>
                     <span class="text-xs text-[var(--color-secondary-text)]">Honor</span>
                  </div>
                  <div
                     class="w-full flex flex-row justify-between items-center py-3 border-b border-[var(--color-border)]">
                     <div class="flex flex-row items-center gap-3">
                        <input type="checkbox">
                        <label class="font-medium">اپل</label>
                     </div>
                     <span class="text-xs text-[var(--color-secondary-text)]">Apple</span>
                  </div>
                  <div
                     class="w-full flex flex-row justify-between items-center py-3 border-b border-[var(--color-border)]">
                     <div class="flex flex-row items-center gap-3">
                        <input type="checkbox">
                        <label class="font-medium">سامسونگ</label>
                     </div>
                     <span class="text-xs text-[var(--color-secondary-text)]">Samsung</span>
                  </div>
                  <div
                     class="w-full flex flex-row justify-between items-center py-3 border-b border-[var(--color-border)]">
                     <div class="flex flex-row items-center gap-3">
                        <input type="checkbox">
                        <label class="font-medium">شیائومی</label>
                     </div>
                     <span class="text-xs text-[var(--color-secondary-text)]">Xiaomi</span>
                  </div>





               </div>
            </div>
            <div class="w-full cursor-pointer sidebarFeatures">
               <div class="w-full">
                  <div class="flex flex-row justify-between items-center py-3">
                     <span class="font-medium">
                        رنگ
                     </span>
                     <svg xmlns="http://www.w3.org/2000/svg" class="size-4 transition-all duration-300" viewBox="0 0 448 512">
                        <path fill="var(--color-fill)"
                           d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                     </svg>
                  </div>
               </div>
               <div class="w-full max-h-0 overflow-hidden pr-5 transitin-all duration-300 ease-in">

                  <div
                     class="w-full flex flex-row justify-between items-center py-3 border-b border-[var(--color-border)]">
                     <div class="flex flex-row items-center gap-3">
                        <input type="checkbox">
                        <label class="font-medium">آنر</label>
                     </div>
                     <span class="text-xs text-[var(--color-secondary-text)]">Honor</span>
                  </div>
                  <div
                     class="w-full flex flex-row justify-between items-center py-3 border-b border-[var(--color-border)]">
                     <div class="flex flex-row items-center gap-3">
                        <input type="checkbox">
                        <label class="font-medium">اپل</label>
                     </div>
                     <span class="text-xs text-[var(--color-secondary-text)]">Apple</span>
                  </div>
                  <div
                     class="w-full flex flex-row justify-between items-center py-3 border-b border-[var(--color-border)]">
                     <div class="flex flex-row items-center gap-3">
                        <input type="checkbox">
                        <label class="font-medium">سامسونگ</label>
                     </div>
                     <span class="text-xs text-[var(--color-secondary-text)]">Samsung</span>
                  </div>
                  <div
                     class="w-full flex flex-row justify-between items-center py-3 border-b border-[var(--color-border)]">
                     <div class="flex flex-row items-center gap-3">
                        <input type="checkbox">
                        <label class="font-medium">شیائومی</label>
                     </div>
                     <span class="text-xs text-[var(--color-secondary-text)]">Xiaomi</span>
                  </div>
               </div>
            </div>
            <div class="w-full cursor-pointer sidebarFeatures">
               <div class="w-full">
                  <div class="flex flex-row justify-between items-center py-3">
                     <span class="font-medium">
                        محدوده قیمت
                     </span>
                     <svg xmlns="http://www.w3.org/2000/svg" class="size-4 transition-all duration-300" viewBox="0 0 448 512">
                        <path fill="var(--color-fill)"
                           d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                     </svg>
                  </div>
               </div>
               <div class="w-full max-h-0 overflow-hidden pr-5 transitin-all duration-300 ease-in">

                  <div
                     class="w-full flex flex-row justify-between items-center py-3 border-b border-[var(--color-border)]">
                     <div class="flex flex-row items-center gap-3">
                        <input type="checkbox">
                        <label class="font-medium">آنر</label>
                     </div>
                     <span class="text-xs text-[var(--color-secondary-text)]">Honor</span>
                  </div>
                  <div
                     class="w-full flex flex-row justify-between items-center py-3 border-b border-[var(--color-border)]">
                     <div class="flex flex-row items-center gap-3">
                        <input type="checkbox">
                        <label class="font-medium">اپل</label>
                     </div>
                     <span class="text-xs text-[var(--color-secondary-text)]">Apple</span>
                  </div>
                  <div
                     class="w-full flex flex-row justify-between items-center py-3 border-b border-[var(--color-border)]">
                     <div class="flex flex-row items-center gap-3">
                        <input type="checkbox">
                        <label class="font-medium">سامسونگ</label>
                     </div>
                     <span class="text-xs text-[var(--color-secondary-text)]">Samsung</span>
                  </div>
                  <div
                     class="w-full flex flex-row justify-between items-center py-3 border-b border-[var(--color-border)]">
                     <div class="flex flex-row items-center gap-3">
                        <input type="checkbox">
                        <label class="font-medium">شیائومی</label>
                     </div>
                     <span class="text-xs text-[var(--color-secondary-text)]">Xiaomi</span>
                  </div>
               </div>
            </div>
            <div class="w-full">
               <div class="flex flex-row justify-between items-center py-3">
                  <span class="font-medium inline-block max-w-[168px]">
                     ارسال رایگان
                  </span>
                  <div class="w-10 h-5 border-2 border-gray-400 rounded-full cursor-pointer px-0.5 flex flex-row items-center justify-start transitin-all duration-300"
                     onclick="btn(this)">
                     <div
                        class="size-3 bg-gray-400 rounded-full transitin-all duration-300 translate-x-0">
                     </div>
                  </div>
               </div>
            </div>
            <div class="w-full">
               <div class="flex flex-row justify-between items-center py-3">
                  <span class="font-medium inline-block max-w-[168px]">
                     فقط کالا های موجود در انبار شاهکار
                  </span>
                  <div class="w-10 h-5 border-2 border-gray-400 rounded-full cursor-pointer px-0.5 flex flex-row items-center justify-start transitin-all duration-300"
                     onclick="btn(this)">
                     <div
                        class="size-3 bg-gray-400 rounded-full transitin-all duration-300 translate-x-0">
                     </div>
                  </div>
               </div>
            </div>
            <div class="w-full cursor-pointer sidebarFeatures">
               <div class="w-full">
                  <div class="flex flex-row justify-between items-center py-3">
                     <span class="font-medium">
                        نوع فروش
                     </span>
                     <svg xmlns="http://www.w3.org/2000/svg" class="size-4 transition-all duration-300" viewBox="0 0 448 512">
                        <path fill="var(--color-fill)"
                           d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                     </svg>
                  </div>
               </div>
               <div class="w-full max-h-0 overflow-hidden pr-5 transitin-all duration-300 ease-in">

                  <div
                     class="w-full flex flex-row justify-between items-center py-3 border-b border-[var(--color-border)]">
                     <div class="flex flex-row items-center gap-3">
                        <input type="checkbox">
                        <label class="font-medium">آنر</label>
                     </div>
                     <span class="text-xs text-[var(--color-secondary-text)]">Honor</span>
                  </div>
                  <div
                     class="w-full flex flex-row justify-between items-center py-3 border-b border-[var(--color-border)]">
                     <div class="flex flex-row items-center gap-3">
                        <input type="checkbox">
                        <label class="font-medium">اپل</label>
                     </div>
                     <span class="text-xs text-[var(--color-secondary-text)]">Apple</span>
                  </div>
                  <div
                     class="w-full flex flex-row justify-between items-center py-3 border-b border-[var(--color-border)]">
                     <div class="flex flex-row items-center gap-3">
                        <input type="checkbox">
                        <label class="font-medium">سامسونگ</label>
                     </div>
                     <span class="text-xs text-[var(--color-secondary-text)]">Samsung</span>
                  </div>
                  <div
                     class="w-full flex flex-row justify-between items-center py-3 border-b border-[var(--color-border)]">
                     <div class="flex flex-row items-center gap-3">
                        <input type="checkbox">
                        <label class="font-medium">شیائومی</label>
                     </div>
                     <span class="text-xs text-[var(--color-secondary-text)]">Xiaomi</span>
                  </div>
               </div>
            </div>





         </div>
      </aside>

      <div class="w-full">
         <div
            class="w-full border-b border-[var(--color-border)] lg:flex flex-row justify-between items-center hidden">
            <div class="flex flex-row items-center gap-4">

               <div class="flex flex-row items-center gap-2 py-3">
                  <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 576 512">
                     <path fill="var(--color-fill)"
                        d="M151.6 469.6C145.5 476.2 137 480 128 480s-17.5-3.8-23.6-10.4l-88-96c-11.9-13-11.1-33.3 2-45.2s33.3-11.1 45.2 2L96 365.7V64c0-17.7 14.3-32 32-32s32 14.3 32 32V365.7l32.4-35.4c11.9-13 32.2-13.9 45.2-2s13.9 32.2 2 45.2l-88 96zM320 480c-17.7 0-32-14.3-32-32s14.3-32 32-32h32c17.7 0 32 14.3 32 32s-14.3 32-32 32H320zm0-128c-17.7 0-32-14.3-32-32s14.3-32 32-32h96c17.7 0 32 14.3 32 32s-14.3 32-32 32H320zm0-128c-17.7 0-32-14.3-32-32s14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H320zm0-128c-17.7 0-32-14.3-32-32s14.3-32 32-32H544c17.7 0 32 14.3 32 32s-14.3 32-32 32H320z" />
                  </svg>
                  <span class="font-semibold text-sm">
                     مرتب سازی :
                  </span>
               </div>
               <ul class="flex flex-row items-center gap-4">
                  <li>
                     <a href="#" class="text-xs text-[var(--color-secondary-text)] py-4">
                        پرفروش ترین
                     </a>
                  </li>
                  <li>
                     <a href="#" class="text-xs text-[var(--color-secondary-text)] py-4">
                        مرتبط ترین
                     </a>
                  </li>
                  <li>
                     <a href="#" class="text-xs text-[var(--color-secondary-text)] py-4">
                        پربازدید ترین
                     </a>
                  </li>
                  <li>
                     <a href="#" class="text-xs text-[var(--color-secondary-text)] py-4">
                        جدید ترین
                     </a>
                  </li>
                  <li>
                     <a href="#" class="text-xs text-[var(--color-secondary-text)] py-4">
                        ارزان ترین
                     </a>
                  </li>
                  <li>
                     <a href="#" class="text-xs text-[var(--color-secondary-text)] py-4">
                        گران ترین
                     </a>
                  </li>
               </ul>

            </div>
            <!-- <span class="text-xs text-[var(--color-secondary-text)]">
                            3,633 کالا
                        </span> -->
         </div>


         <!-- navigation mobile -->

         <div class="py-2 flex flex-row items-center overflow-x-auto lg:hidden">

            <div class="px-3 py-1 ml-2 rounded-full border border-[var(--color-border)]">
               <div class=" flex flex-row items-center gap-1 cursor-pointer max-w-[100px] w-[74px]">
                  <svg xmlns="http://www.w3.org/2000/svg" class="size-3" viewBox="0 0 576 512">
                     <path fill="var(--color-fill)"
                        d="M151.6 469.6C145.5 476.2 137 480 128 480s-17.5-3.8-23.6-10.4l-88-96c-11.9-13-11.1-33.3 2-45.2s33.3-11.1 45.2 2L96 365.7V64c0-17.7 14.3-32 32-32s32 14.3 32 32V365.7l32.4-35.4c11.9-13 32.2-13.9 45.2-2s13.9 32.2 2 45.2l-88 96zM320 480c-17.7 0-32-14.3-32-32s14.3-32 32-32h32c17.7 0 32 14.3 32 32s-14.3 32-32 32H320zm0-128c-17.7 0-32-14.3-32-32s14.3-32 32-32h96c17.7 0 32 14.3 32 32s-14.3 32-32 32H320zm0-128c-17.7 0-32-14.3-32-32s14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H320zm0-128c-17.7 0-32-14.3-32-32s14.3-32 32-32H544c17.7 0 32 14.3 32 32s-14.3 32-32 32H320z" />
                  </svg>
                  <span class="text-xs">
                     مرتب سازی:
                  </span>

               </div>
            </div>

            <div class="px-3 py-1 ml-2 rounded-full border border-[var(--color-border)]">
               <div class=" flex flex-row items-center gap-1 cursor-pointer max-w-[100px]">

                  <svg xmlns="http://www.w3.org/2000/svg" class="size-3" viewBox="0 0 512 512">
                     <path fill="var(--color-fill)"
                        d="M0 416c0 17.7 14.3 32 32 32l54.7 0c12.3 28.3 40.5 48 73.3 48s61-19.7 73.3-48L480 448c17.7 0 32-14.3 32-32s-14.3-32-32-32l-246.7 0c-12.3-28.3-40.5-48-73.3-48s-61 19.7-73.3 48L32 384c-17.7 0-32 14.3-32 32zm128 0a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zM320 256a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm32-80c-32.8 0-61 19.7-73.3 48L32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l246.7 0c12.3 28.3 40.5 48 73.3 48s61-19.7 73.3-48l54.7 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-54.7 0c-12.3-28.3-40.5-48-73.3-48zM192 128a32 32 0 1 1 0-64 32 32 0 1 1 0 64zm73.3-64C253 35.7 224.8 16 192 16s-61 19.7-73.3 48L32 64C14.3 64 0 78.3 0 96s14.3 32 32 32l86.7 0c12.3 28.3 40.5 48 73.3 48s61-19.7 73.3-48L480 128c17.7 0 32-14.3 32-32s-14.3-32-32-32L265.3 64z" />
                  </svg>
                  <span class="text-xs">
                     فیلتر
                  </span>
               </div>
            </div>

            <div class="px-3 py-1 ml-2 rounded-full border border-[var(--color-border)]">
               <div class=" flex flex-row items-center gap-1 cursor-pointer max-w-[100px]">

                  <svg xmlns="http://www.w3.org/2000/svg" class="size-3" viewBox="0 0 448 512">
                     <path fill="var(--color-fill)"
                        d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                  </svg>
                  <span class="text-xs">
                     برند
                  </span>
               </div>
            </div>
            <div class="px-3 py-1 ml-2 rounded-full border border-[var(--color-border)]">
               <div class=" flex flex-row items-center gap-1 cursor-pointer max-w-[100px]">

                  <svg xmlns="http://www.w3.org/2000/svg" class="size-3" viewBox="0 0 448 512">
                     <path fill="var(--color-fill)"
                        d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                  </svg>
                  <span class="text-xs">
                     رنگ
                  </span>
               </div>
            </div>
            <div class="px-3 py-1 ml-2 rounded-full border border-[var(--color-border)]">
               <div class=" flex flex-row items-center gap-1 cursor-pointer max-w-[100px] w-[55px]">
                  <span class="text-xs">
                     ارسال سریع
                  </span>
               </div>
            </div>
            <div class="px-3 py-1 ml-2 rounded-full border border-[var(--color-border)]">
               <div class=" flex flex-row items-center gap-1 cursor-pointer max-w-[100px] w-[88px]">

                  <svg xmlns="http://www.w3.org/2000/svg" class="size-3" viewBox="0 0 448 512">
                     <path fill="var(--color-fill)"
                        d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                  </svg>
                  <span class="text-xs">
                     محدوده قیمت
                  </span>
               </div>
            </div>



         </div>

         <!-- navigation mobile -->


         <div
            class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 lg:divide-x lg:divide-y divide-[var(--color-border)]">
            @foreach($products as $product)
            <a href="{{route('product-show', [$product])}}" target="_blank"
               class="lg:block flex flex-row w-full py-5 border-b border-[var(--color-border)] lg:py-3 lg:px-2 productGrid">
               <div class="mb-1 hidden lg:flex items-center h-4"></div>
               <div class="w-1/3 lg:w-full relative">
                  <img src="@foreach($product->medias as $media) @if($media['is_main'] == 1) {{asset('storage/' . $media['path'])}} @endif @endforeach"
                     class="block size-[118px] lg:size-[240px] m-auto"
                     alt="product image">
                  <div
                     class="lg:absolute top-0 flex flex-row justify-center lg:justify-start my-3 lg:flex-col items-center gap-2 left-3">
                     <span class="inline-block size-1.5 bg-[#2196f3] rounded-full"></span>
                     <span class="inline-block size-1.5 bg-[#c99212] rounded-full"></span>
                     <span class="inline-block size-1.5 bg-[#212121] rounded-full"></span>
                     <svg xmlns="http://www.w3.org/2000/svg" class="size-2" viewBox="0 0 448 512">
                        <path fill="var(--color-fill)"
                           d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                     </svg>
                  </div>
               </div>
               <div class="w-2/3 lg:w-full">
                  <div class="h-7 flex flex-row items-center"></div>
                  <h3 class="text-sm font-medium hidden lg:block leading-[2.17]">{{$product->title}} <br> {{$product->description}}</h3>
                  <h3 class="text-xs font-medium lg:hidden leading-[180%]">{{$product->title}} <br> {{$product->description}}</h3>
                  <div class="flex flex-row justify-between items-center my-1">
                     <div class="flex flex-row items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="lg:size-5 size-3"
                           viewBox="0 0 448 512">
                           <path fill="var(--color-secondary)"
                              d="M240 64H342.4c12.6 0 24.1 7.4 29.2 19l34.2 77H240V64zm0 128H416V416c0 17.7-14.3 32-32 32H64c-17.7 0-32-14.3-32-32V192H208h32zm-32-32H42.1L76.3 83c5.1-11.6 16.6-19 29.2-19H208v96zM400.9 70c-10.3-23.1-33.2-38-58.5-38H105.6C80.3 32 57.4 46.9 47.1 70L5.5 163.6c-3.6 8.2-5.5 17-5.5 26V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V189.6c0-9-1.9-17.8-5.5-26L400.9 70zM331.3 251.3c6.2-6.2 6.2-16.4 0-22.6s-16.4-6.2-22.6 0L192 345.4l-52.7-52.7c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6l64 64c6.2 6.2 16.4 6.2 22.6 0l128-128z" />
                        </svg>
                        <span class="text-xs text-[var(--color-secondary-text)]">
                           موجود در انبار شاهکار
                        </span>
                     </div>
                     <div class="flex flex-row items-center gap-2">
                        <span class="text-xs">4.4</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="lg:size-4 size-2"
                           viewBox="0 0 576 512">
                           <path fill="gold"
                              d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                        </svg>

                     </div>
                  </div>
                  <div class="pt-1 flex flex-row justify-end items-center">
                     <span class="font-semibold lg:text-base text-xs">18,320,000</span>
                     <span class="text-xs">
                        تومان
                     </span>
                  </div>
               </div>
            </a>
            @endforeach
         </div>



      </div>

   </div>
</section>

<!-- filter and products end -->
@endsection