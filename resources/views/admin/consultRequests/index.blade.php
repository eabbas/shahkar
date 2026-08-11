@extends('admin.app.dashboard')
@section('title', 'شاهکار | درخواست های مشاوره')
@section('content')




<div class="w-full flex flex-col justify-start items-center gap-5 mt-9">
    @foreach($consultRequests as $request)
    <div class="w-full flex h-45 flex-col justify-start items-start bg-[var(--background)] border-3 border-[var(--gold)] rounded-xl overflow-y-hidden transition_root cursor-pointer max-sm:hidden">
        <div class="w-full px-4 py-3  flex flex-col justify-start items-start">
            <div class="w-full h-15 flex justify-between items-center">
                <h5 class="w-1/6 max-xl:text-sm max-lg:text-[10px] text-[var(--text)] flex justify-start font-bold">{{$request['name']}} {{$request['family']}}</h5>
                <h3 class="w-3/6 xl:text-lg max-lg:text-sm font-bold text-[var(--text)] flex justify-center text-center">{{$request['subject']}}</h3>
                <span class="w-1/6 xl:text-sm lg:text-xs text-[10px]  text-[var(--text-secondary)] flex justify-end">{{$request['created_at']}}</span>
            </div>
            <div class="w-full flex justify-between items-end">
                <span class="w-1/3 max-xl:text-sm max-lg:text-xs font-bold text-[var(--text)] flex justify-start">{{$request['phoneNumber']}}</span>
                <span class="w-1/3 max-xl:text-sm max-lg:text-xs font-bold text-[var(--text)] flex justify-center text-center">{{$request['email']}}</span>
                <div  class="w-1/3  text-sm flex flex-col gap-4 justify-start items-end">
                    <div class="w-full h-10 flex gap-4 justify-end items-center">
                        <div class="flex gap-2 justify-start items-center">
                            <span class="xl:text-sm text-xs text-[var(--text-secondary)]">پاسخ داده شده</span>
                            <label for="show_in_home" class="w-[50px] h-[28px] flex rounded-full cursor-pointer relative">
                                <input type="checkbox" name="show_in_home" value="1" id="show_in_home" hidden="" class="peer">
                                <span class="size-full bg-gray-300 shadow-inner rounded-full peer-checked:bg-[var(--gold)] transition-all duration-300"></span>
                                <span class="size-[20px] rounded-full bg-white absolute top-1 left-1 peer-checked:translate-x-[22px] transition-all duration-300 shadow-md"></span>
                            </label>
                        </div>
                        <span class="w-fit flex flex-row items-center justify-center bg-red-500 hover:bg-red-600 p-1 rounded-sm cursor-pointer" title="حذف">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 448 512">
                                <path fill="white" d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z"></path>
                            </svg>
                        </span>
                    </div>
                    <span class="px-4 py-2 bg-[#1B84FF] text-[var(--text)] max-lg:text-sm font-bold rounded-xl question_common_onclick">مشاهده درخواست</span>
                </div>
            </div>
        </div>
        <div class="w-full h-full flex flex-col gap-4 justify-start items-start px-4 max-xl:mt-1">
            <span class="w-full h-0.5 bg-[#272A2F]"></span>
            <div
                class="px-6 flex gap-2 max-h-30 overflow-y-auto justify-center items-cneter [&::-webkit-scrollbar]:w-1  [&::-webkit-scrollbar-thumb]:bg-[var(--gold)]  [&::-webkit-scrollbar-thumb]:rounded-full">
                <span class="min-w-2 min-h-2 max-w-2 max-h-2 bg-[var(--gold)] rounded-full mt-1"></span>
                <p
                    class="max-xl:text-sm max-sm:text-[10px] text-[var(--text-secondary)] text-justify leading-6">
                    بهترین و استانداردترین فرمت، PDF (با کیفیت بالا) است. همچنین فایل‌های AI، PSD، CDR، EPS و
                    تصاویر JPG/PNG با رزولوشن بالا را نیز  ین فرمت، PDF (با کیفیت بالا) است. همچنین فایل‌های AI، PSD، CDR، EPS و
                    تصاویر JPG/PNG با رزولوشن ین فرمت، PDF (با کیفیت بالا) است. همچنین فایل‌های AI، PSD، CDR، EPS و
                    تصاویر JPG/PNG با رزولوشن ین فرمت، PDF (با کیفیت بالا) است. همچنین فایل‌های AI، PSD، CDR، EPS و
                    تصاویر JPG/PNG با رزولوشن ین فرمت، PDF (با کیفیت بالا) است. همچنین فایل‌های AI، PSD، CDR، EPS و
                    تصاویر JPG/PNG با رزولوشن ین فرمت، PDF (با کیفیت بالا) است. همچنین فایل‌های AI، PSD، CDR، EPS و
                    تصاویر JPG/PNG با رزولوشن پشتیبانی می‌کنیم. لطفاً برای جلوگیری از به هم ریختگی
                    فونت، متن‌ها را به منحنی (Outline) تبدیل کنید یا فونت‌ها را همراه فایل ارسال کنید.</p>
            </div>
        </div>
    </div>
    <div class="w-full flex h-45 flex-col justify-start items-start bg-[var(--background)] border-2 border-[var(--gold)] rounded-xl overflow-y-hidden transition_root cursor-pointer sm:hidden">
        <div class="w-full px-4 py-3  flex flex-col justify-start items-start">
            <div class="w-full h-12 flex gap-4 justify-between items-center">
                <h3 class="text-xs text-[var(--text)]">{{$request['subject']}}</h3>
                <div>
                    <span class="min-w-7 max-w-7 min-h-7 max-h-7 bg-[#1B84FF] font-bold rounded-md question_common_onclick flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-2/3 fill-white transition-all duration-300 ">
                            <path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z" clip-rule="evenodd"></path>
                        </svg>
                    </span>
                </div>
            </div>
            <div class="w-full h-25 flex flex-col gap-2 pt-1 justify-start items-center">
                <span class="w-full h-0.5 bg-[#272A2F]"></span>
                <div class="w-full h-full flex flex-col gap-2 justify-start items-center">
                    <div class="w-full flex justify-between items-center">
                        <span class="text-xs text-[var(--text)]">{{$request['name']}} {{$request['family']}}</span>
                        <span class="text-xs text-[var(--text-secondary)]">{{$request['created_at']}}</span>
                    </div>
                    <div class="w-full flex justify-between items-center">
                        <span class="text-xs text-[var(--text)]">{{$request['phoneNumber']}}</span>
                        <span class="text-xs text-[var(--text)]">{{$request['email']}}</span>
                    </div>
                    <div class="w-full flex gap-4 justify-between items-center">
                        <div class="flex gap-2 justify-start items-center">
                            <span class="xl:text-sm text-xs text-[var(--text-secondary)]">پاسخ داده شده</span>
                            <label for="show_in_home" class="w-[50px] h-[28px] flex rounded-full cursor-pointer relative">
                                <input type="checkbox" name="show_in_home" value="1" id="show_in_home" hidden="" class="peer">
                                <span class="size-full bg-gray-300 shadow-inner rounded-full peer-checked:bg-[var(--gold)] transition-all duration-300"></span>
                                <span class="size-[20px] rounded-full bg-white absolute top-1 left-1 peer-checked:translate-x-[22px] transition-all duration-300 shadow-md"></span>
                            </label>
                        </div>
                        <span class="w-fit flex flex-row items-center justify-center bg-red-500 hover:bg-red-600 p-1 rounded-sm cursor-pointer" title="حذف">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 448 512">
                                <path fill="white" d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z"></path>
                            </svg>
                        </span>
                    </div>
                </div>

            </div>
            <!-- <div class="w-full h-15 flex justify-between items-center">
                <h5 class="w-1/6 max-xl:text-sm max-lg:text-[10px] text-[var(--text)] flex justify-start font-bold">{{$request['name']}} {{$request['family']}}</h5>
                <h3 class="w-3/6 xl:text-lg max-lg:text-sm font-bold text-[var(--text)] flex justify-center text-center">{{$request['subject']}}</h3>
                <span class="w-1/6 xl:text-sm lg:text-xs text-[10px]  text-[var(--text-secondary)] flex justify-end">{{$request['created_at']}}</span>
            </div> -->
            <!-- <div class="w-full flex justify-between items-end">
                <span class="w-1/3 max-xl:text-sm max-lg:text-xs font-bold text-[var(--text)] flex justify-start">{{$request['phoneNumber']}}</span>
                <span class="w-1/3 max-xl:text-sm max-lg:text-xs font-bold text-[var(--text)] flex justify-center text-center">{{$request['email']}}</span>
                <div  class="w-1/3  text-sm flex flex-col gap-4 justify-start items-end">
                    <div class="w-full h-10 flex gap-4 justify-end items-center">
                        <div class="flex gap-2 justify-start items-center">
                            <span class="xl:text-sm text-xs text-[var(--text-secondary)]">پاسخ داده شده</span>
                            <label for="show_in_home" class="w-[50px] h-[28px] flex rounded-full cursor-pointer relative">
                                <input type="checkbox" name="show_in_home" value="1" id="show_in_home" hidden="" class="peer">
                                <span class="size-full bg-gray-300 shadow-inner rounded-full peer-checked:bg-[var(--gold)] transition-all duration-300"></span>
                                <span class="size-[20px] rounded-full bg-white absolute top-1 left-1 peer-checked:translate-x-[22px] transition-all duration-300 shadow-md"></span>
                            </label>
                        </div>
                        <span class="w-fit flex flex-row items-center justify-center bg-red-500 hover:bg-red-600 p-1 rounded-sm cursor-pointer" title="حذف">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 448 512">
                                <path fill="white" d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z"></path>
                            </svg>
                        </span>
                    </div>
                    <span class="px-4 py-2 bg-[#1B84FF] text-[var(--text)] max-lg:text-sm font-bold rounded-xl question_common_onclick">مشاهده درخواست</span>
                </div>
            </div> -->
        </div>
        <div class="w-full h-full flex flex-col gap-4 justify-start items-start px-4 max-xl:mt-1">
            <span class="w-full h-0.5 bg-[#272A2F]"></span>
            <div
                class="px-6 flex gap-2 max-h-30 overflow-y-auto justify-center items-cneter [&::-webkit-scrollbar]:w-1  [&::-webkit-scrollbar-thumb]:bg-[var(--gold)]  [&::-webkit-scrollbar-thumb]:rounded-full">
                <span class="min-w-2 min-h-2 max-w-2 max-h-2 bg-[var(--gold)] rounded-full mt-1"></span>
                <p
                    class="max-xl:text-sm max-sm:text-[10px] text-[var(--text-secondary)] text-justify leading-6">
                    بهترین و استانداردترین فرمت، PDF (با کیفیت بالا) است. همچنین فایل‌های AI، PSD، CDR، EPS و
                    تصاویر JPG/PNG با رزولوشن بالا را نیز  ین فرمت، PDF (با کیفیت بالا) است. همچنین فایل‌های AI، PSD، CDR، EPS و
                    تصاویر JPG/PNG با رزولوشن ین فرمت، PDF (با کیفیت بالا) است. همچنین فایل‌های AI، PSD، CDR، EPS و
                    تصاویر JPG/PNG با رزولوشن ین فرمت، PDF (با کیفیت بالا) است. همچنین فایل‌های AI، PSD، CDR، EPS و
                    تصاویر JPG/PNG با رزولوشن ین فرمت، PDF (با کیفیت بالا) است. همچنین فایل‌های AI، PSD، CDR، EPS و
                    تصاویر JPG/PNG با رزولوشن ین فرمت، PDF (با کیفیت بالا) است. همچنین فایل‌های AI، PSD، CDR، EPS و
                    تصاویر JPG/PNG با رزولوشن پشتیبانی می‌کنیم. لطفاً برای جلوگیری از به هم ریختگی
                    فونت، متن‌ها را به منحنی (Outline) تبدیل کنید یا فونت‌ها را همراه فایل ارسال کنید.</p>
            </div>
        </div>
    </div>
    @endforeach
</div>




<script>
    let question_common_onclick = document.querySelectorAll('.question_common_onclick')
question_common_onclick.forEach((item) => {
    item.addEventListener('click', function () {
        if (item.parentElement.classList.contains('min-h-12')) {
            question_common_onclick.forEach((element) => {
                element.parentElement.parentElement.parentElement.parentElement.classList.add('h-45')
                element.parentElement.parentElement.parentElement.parentElement.classList.remove('h-87')
                // element.children[1].classList.remove('-rotate-90')
            })
        }
        item.parentElement.parentElement.parentElement.parentElement.classList.toggle('h-45')
        item.parentElement.parentElement.parentElement.parentElement.classList.toggle('h-87')
        // item.children[1].classList.toggle('-rotate-90')
    })
})

</script>
@endsection