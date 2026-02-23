
   @extends('admin.app.dashboard')
   @section('title', 'شاهکار | ویرایش ستون های فوتر')
   @section('content')
   <div class="w-full pb-5">
      <h2 class="text-3xl text-center font-bold py-5 text-[#425A8B]">فرم ویرایش ستون های فوتر</h2>
      <div class="w-full border border-[#D5DFE4] rounded-[10px] text-[#425A8B] p-2 lg:p-5 bg-white">
         <form action="{{route('footer-update')}}" method="post">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
               <div class="flex flex-col w-full lg:p-6 border border-[#D5DFE4] rounded-[10px] p-2">
                  <div class="py-4 text-center">
                     <h4 class="text-2xl font-bold">بخش اول</h4>
                  </div>
                  <div class="pt-2 pb-5 px-2">
                     <label for="title1">عنوان ستون :
                        <span class="text-rose-500">*</span>
                     </label>
                     <input class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4] w-full" type="text" name="title[1]" id="title1" required value="{{$footerColumns[0]['section_title']}}">
                  </div>
                  @foreach($footerColumns[0]['rows'] as $row)
                  <div class="border border-[#D5DFE4] rounded-[10px] px-2 mt-2">
                     <div class="py-2">
                        <label>محتوای ردیف :
                           <span class="text-rose-500">*</span>
                        </label>
                        <input class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4] w-full" type="text" name="linkContent[1][]" required value="{{$row['row_content']}}">
                     </div>
                     <div class="py-2">
                        <label>مقصد ردیف :
                           <span class="text-rose-500">*</span>
                        </label>
                        <input class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4] w-full" type="text" name="linkHref[1][]" required value="{{$row['row_href']}}">
                     </div>
                     <div class="text-center" onclick="removeDiv(this)">
                        <span class="cursor-pointer text-[10px] my-2">حذف ردیف
                           <span class="text-rose-500 text-sm">×</span>
                        </span>
                     </div>
                  </div>
                  @endforeach
                  <div id="firstSection">
                  </div>
                  <div class="text-center cursor-pointer text-[10px] my-2" onclick="addRowFirstSection()"> افزودن ردیف
                     <span class="text-green-500 text-sm">+</span>
                  </div>
               </div>
               <div class="flex flex-col w-full p-2 lg:p-6 border border-[#D5DFE4] rounded-[10px]">
                  <div class="py-4 text-center">
                     <h4 class="text-2xl font-bold">بخش دوم</h4>
                  </div>
                  <div class="pt-2 pb-5">
                     <label for="title2">عنوان ستون :
                        <span class="text-rose-500">*</span>
                     </label>
                     <input class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4] w-full" type="text" name="title[2]" id="title2" required value="{{$footerColumns[1]['section_title']}}">
                  </div>
                  @foreach($footerColumns[1]['rows'] as $row)
                  <div class="border border-[#D5DFE4] rounded-[10px] px-2 mt-2">
                     <div class="py-2">
                        <label>محتوای ردیف :
                           <span class="text-rose-500">*</span>
                        </label>
                        <input class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4] w-full" type="text" name="linkContent[2][]" required value="{{$row['row_content']}}">
                     </div>
                     <div class="py-2">
                        <label>مقصد ردیف :
                           <span class="text-rose-500">*</span>
                        </label>
                        <input class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4] w-full" type="text" name="linkHref[2][]" required value="{{$row['row_href']}}">
                     </div>
                     <div class="text-center" onclick="removeDiv(this)">
                        <span class="cursor-pointer text-[10px] my-2">حذف ردیف
                           <span class="text-rose-500 text-sm">×</span>
                        </span>
                     </div>
                  </div>
                  @endforeach
                  <div id="secondSection">
                  </div>
                  <div class="text-center cursor-pointer text-[10px] my-2" onclick="addRowSecondSection()"> افزودن ردیف
                     <span class="text-green-500 text-sm">+</span>
                  </div>
               </div>
               <div class="flex flex-col w-full p-2 lg:p-6 border border-[#D5DFE4] rounded-[10px]">
                  <div class="py-4 text-center">
                     <h4 class="text-2xl font-bold">بخش سوم</h4>
                  </div>
                  <div class="pt-2 pb-5">
                     <label for="title3">عنوان ستون :
                        <span class="text-rose-500">*</span>
                     </label>
                     <input class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4] w-full" type="text" name="title[3]" id="title3" required value="{{$footerColumns[2]['section_title']}}">
                  </div>
                  @foreach($footerColumns[2]['rows'] as $row)
                  <div class="border border-[#D5DFE4] rounded-[10px] px-2 mt-2">
                     <div class="py-2">
                        <label>محتوای ردیف :
                           <span class="text-rose-500">*</span>
                        </label>
                        <input class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4] w-full" type="text" name="linkContent[3][]" required value="{{$row['row_content']}}">
                     </div>
                     <div class="py-2">
                        <label>مقصد ردیف :
                           <span class="text-rose-500">*</span>
                        </label>
                        <input class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4] w-full" type="text" name="linkHref[3][]" required value="{{$row['row_href']}}">
                     </div>
                     <div class="text-center" onclick="removeDiv(this)">
                        <span class="cursor-pointer text-[10px] my-2">حذف ردیف
                           <span class="text-rose-500 text-sm">×</span>
                        </span>
                     </div>
                  </div>
                  @endforeach
                  <div id="thirdSection">
                  </div>
                  <div class="text-center cursor-pointer text-[10px] my-2" onclick="addRowThirdSection()"> افزودن ردیف
                     <span class="text-green-500 text-sm">+</span>
                  </div>
               </div>
            </div>
            <div class="pt-8 text-center">
               <button type="submit" class="py-3 px-10 rounded-[10px] bg-[#1B84FF] hover:bg-[#056EE9] text-white cursor-pointer">ثبت</button>
            </div>
         </form>
      </div>
   </div>
   <script src="{{asset('assets/js/app.js')}}"></script>
   @endsection
