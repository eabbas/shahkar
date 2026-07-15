@extends('admin.app.dashboard')
@section('title', 'شاهکار | تنظیمات هدر')
@section('content')
    @if (session('message'))
        <div
            class="modal py-5 px-8 rounded-lg shadow-lg bg-slate-100 fixed top-10 right-10 z-5 flex justify-center items-center transition-all duration-300">
            <span class="font-bold text-sm text-slate-500"> {{ session('message') }} </span>
        </div>
    @endif
    <div class="w-full h-full pb-10">
        <h2 class="text-3xl text-center font-bold py-5 text-[#425A8B]">فرم ایجاد و ویرایش اطلاعات هدر</h2>
        <div class="w-full mx-auto border border-[#D5DFE4] rounded-[10px] text-[#425A8B] p-5 bg-white">
            <form action="{{ route('settings.header.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="flex flex-col items-center gap-10">
                    <div class="w-full">
                        <div class="w-full flex flex-col">
                            <label for="title" class="mb-2 flex flex-row items-center">
                                <span>عنوان اصلی:</span>
                                <span class="text-rose-500">*</span>
                            </label>
                            <textarea class="outline-none pr-5 py-3 bg-[#F9F9F9] border border-slate-300 rounded-xl focus:bg-[#f1f1f4]"
                                name="title" id="title" placeholder="عنوان اصلی را وارد کنید">{{ old('title', $header['title'] ?? '') }}</textarea>
                            @error('title')
                                <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="w-full flex flex-col mt-5">
                            <label for="subTitle" class="mb-2 flex flex-row items-center">
                                <span>توضیحات:</span>
                                <span class="text-rose-500">*</span>
                            </label>
                            <textarea name="subTitle"
                                class="outline-none pr-5 py-3 bg-[#F9F9F9] border border-slate-300 rounded-xl focus:bg-[#f1f1f4]" rows="4"
                                id="subTitle" placeholder="توضیحات را وارد کنید">{{ old('subTitle', $header['subTitle'] ?? '') }}</textarea>
                            @error('subTitle')
                                <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="w-full flex items-center gap-10">
                            <div class="w-1/2 flex flex-col mt-3 lg:mt-5">
                                <label for="rightBtnText" class="mb-2 flex flex-row items-center">
                                    <span>متن دکمه سمت راست:</span>
                                    <span class="text-rose-500">*</span>
                                </label>
                                <input type="text"
                                    class="outline-none pr-5 py-3 bg-[#F9F9F9] border border-slate-300 rounded-xl focus:bg-[#f1f1f4]"
                                    name="rightBtnText" id="rightBtnText"
                                    value="{{ old('rightBtnText', $header['rightBtnText'] ?? '') }}"
                                    placeholder="مثال : محصولات">
                                @error('rightBtnText')
                                    <span class="text-xs text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="w-1/2 flex flex-col mt-3 lg:mt-5">
                                <label for="leftBtnText" class="mb-2 flex flex-row items-center">
                                    <span>متن دکمه سمت چپ:</span>
                                    <span class="text-rose-500">*</span>
                                </label>
                                <input type="text"
                                    class="outline-none pr-5 py-3 bg-[#F9F9F9] border border-slate-300 rounded-xl focus:bg-[#f1f1f4]"
                                    name="leftBtnText" id="leftBtnText"
                                    value="{{ old('leftBtnText', $header['leftBtnText'] ?? '') }}"
                                    placeholder="مثال : سفارش سریع">
                                @error('leftBtnText')
                                    <span class="text-xs text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="w-full flex items-center gap-10">
                            <div class="w-1/2 flex flex-col mt-3 lg:mt-5">
                                <label for="rightBtnLink" class="mb-2 flex flex-row items-center">
                                    <span>لینک دکمه سمت راست:</span>
                                    <span class="text-rose-500">*</span>
                                </label>
                                <input type="text"
                                    class="outline-none pr-5 py-3 bg-[#F9F9F9] border border-slate-300 rounded-xl focus:bg-[#f1f1f4]"
                                    name="rightBtnLink" id="rightBtnLink"
                                    value="{{ old('rightBtnLink', $header['rightBtnLink'] ?? '') }}"
                                    placeholder="مثال : shahkar.art/products">
                                @error('rightBtnLink')
                                    <span class="text-xs text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="w-1/2 flex flex-col mt-3 lg:mt-5">
                                <label for="leftBtnLink" class="mb-2 flex flex-row items-center">
                                    <span>لینک دکمه سمت چپ:</span>
                                    <span class="text-rose-500">*</span>
                                </label>
                                <input type="text"
                                    class="outline-none pr-5 py-3 bg-[#F9F9F9] border border-slate-300 rounded-xl focus:bg-[#f1f1f4]"
                                    name="leftBtnLink" id="leftBtnLink"
                                    value="{{ old('leftBtnLink', $header['leftBtnLink'] ?? '') }}"
                                    placeholder="مثال : shahkar.art/orders">
                                @error('leftBtnLink')
                                    <span class="text-xs text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="w-full flex items-center gap-10">
                            <div class="w-1/3 mt-5">
                                <label for="img" class="mb-2 flex flex-row items-center">
                                    <span>تصویر هدر :</span>
                                    <span class="text-rose-500">*</span>
                                </label>
                                <input type="file"
                                    class="w-full outline-none pr-5 py-3 bg-[#F9F9F9] border border-slate-300 rounded-xl focus:bg-[#f1f1f4]"
                                    name="img" id="img">
                                @error('img')
                                    <span class="text-xs text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <img id="image" src="{{ old('img', asset('storage/' . $header?->img)) }}" alt=""
                                class="h-70 w-2/3 mt-10 @if (!$header) hidden @endif">
                        </div>
                    </div>
                    <button type="submit"
                        class="py-3 px-10 rounded-[10px] bg-[#1B84FF] hover:bg-[#056EE9] text-white cursor-pointer">ثبت</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        let modals = document.querySelectorAll('.modal');
        modals.forEach(modal => {
            setTimeout(() => {
                modal.classList.add('opacity-0', 'invisible')
            }, 3000)
        })
    </script>
@endsection
