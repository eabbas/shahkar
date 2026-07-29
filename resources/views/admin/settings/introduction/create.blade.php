@extends('admin.app.dashboard')
@section('title', 'شاهکار | تنظیمات معرفی ما')
@section('content')
    @if (session('message'))
        <div
            class="modal py-5 px-8 rounded-lg shadow-lg bg-slate-100 fixed top-10 right-10 z-5 flex justify-center items-center transition-all duration-300">
            <span class="font-bold text-sm text-slate-500"> {{ session('message') }} </span>
        </div>
    @endif
    <div class="w-full h-full pb-10">
        <h2 class="text-3xl text-center font-bold py-5 text-[#425A8B]">فرم ایجاد و ویرایش اطلاعات معرفی ما</h2>
        <div class="w-full mx-auto border border-[#D5DFE4] rounded-[10px] text-[#425A8B] p-5 bg-white">
            <form action="{{ route('settings.introduction.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="flex flex-col items-center gap-10">
                    <div class="w-full">
                        <div class="w-full flex flex-col md:flex-row items-center gap-10 mt-10">
                            <div class="w-full md:w-1/2 flex flex-col">
                                <label for="video" class="mb-2 flex flex-row items-center">
                                    <span>ویدیوی معرفی : </span>
                                    <span class="text-rose-500">*</span>
                                </label>
                                <input type="file"
                                    class="outline-none pr-5 py-3 bg-[#F9F9F9] border border-slate-300 rounded-xl focus:bg-[#f1f1f4]"
                                    name="video" id="video">
                                @error('video')
                                    <span class="text-xs text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="w-full md:w-1/2">
                                @if (isset($intro['video']))
                                    <video src="{{ asset('storage/' . $intro['video']) }}" controls="controls"
                                        controlslist="nodownload" class="w-full h-50 rounded-xl"></video>
                                @endif
                            </div>
                        </div>
                        <div class="w-full flex flex-col md:flex-row items-center gap-10 mt-10">
                            <div class="w-full md:w-1/2 flex flex-col">
                                <label for="videoCover" class="mb-2">
                                    <span>کاور ویدیو : </span>
                                </label>
                                <input type="file"
                                    class="outline-none pr-5 py-3 bg-[#F9F9F9] border border-slate-300 rounded-xl focus:bg-[#f1f1f4]"
                                    name="videoCover" id="videoCover">
                                @error('videoCover')
                                    <span class="text-xs text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="w-full  md:w-1/2">
                                @if (isset($intro['videoCover']))
                                    <img src="{{ asset('storage/' . $intro['videoCover']) }}" alt=""
                                        class="w-full h-50 rounded-xl">
                                @endif
                            </div>
                        </div>
                        <div class="w-full border border-[#D5DFE4] rounded-[10px] mt-10 p-5">
                            <div class="w-full flex flex-col md:flex-row items-center gap-5">
                                <div class="w-full md:w-1/3">
                                    <label for="firstBoxText" class="mb-2 flex flex-row items-center">
                                        <span>متن باکس اول : </span>
                                        <span class="text-rose-500">*</span>
                                    </label>
                                    <input type="text" name="firstBoxText"
                                        class="w-full outline-none pr-5 py-3 bg-[#F9F9F9] border border-slate-300 rounded-xl focus:bg-[#f1f1f4]"
                                        rows="4" id="firstBoxText" placeholder="مثال : پروژه موفق"
                                        value="{{ old('firstBoxText', $intro['firstBoxText'] ?? '') }}">
                                    @error('firstBoxText')
                                        <span class="text-xs text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="w-full md:w-1/3">
                                    <label for="firstBoxNumber" class="mb-2 flex flex-row items-center">
                                        <span>عدد باکس اول : </span>
                                        <span class="text-rose-500">*</span>
                                    </label>
                                    <input type="text" name="firstBoxNumber"
                                        class="w-full outline-none pr-5 py-3 bg-[#F9F9F9] border border-slate-300 rounded-xl focus:bg-[#f1f1f4]"
                                        rows="4" id="firstBoxNumber" placeholder="مثال : 10"
                                        value="{{ old('firstBoxNumber', $intro['firstBoxNumber'] ?? '') }}">
                                    @error('firstBoxNumber')
                                        <span class="text-xs text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="w-full md:w-1/3">
                                    <div class="w-full flex items-center gap-3">
                                        <div class="w-2/3 flex flex-col">
                                            <label for="firstBoxIcon" class="mb-2">
                                                <span>آیکون باکس اول : </span>
                                            </label>
                                            <input type="file" name="firstBoxIcon"
                                                class="w-full outline-none pr-5 py-3 bg-[#F9F9F9] border border-slate-300 rounded-xl focus:bg-[#f1f1f4]"
                                                rows="4" id="firstBoxIcon">
                                            @error('firstBoxIcon')
                                                <span class="text-xs text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="w-1/3">
                                            @if (isset($intro['firstBoxIcon']))
                                                <img src="{{ asset('storage/' . $intro['firstBoxIcon']) }}" alt=""
                                                    class="size-20 rounded-xl">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full border border-[#D5DFE4] rounded-[10px] mt-10 p-5">
                            <div class="w-full flex flex-col md:flex-row items-center gap-5">
                                <div class="w-full md:w-1/3">
                                    <label for="secondBoxText" class="mb-2 flex flex-row items-center">
                                        <span>متن باکس دوم : </span>
                                        <span class="text-rose-500">*</span>
                                    </label>
                                    <input type="text" name="secondBoxText"
                                        class="w-full outline-none pr-5 py-3 bg-[#F9F9F9] border border-slate-300 rounded-xl focus:bg-[#f1f1f4]"
                                        rows="4" id="secondBoxText" placeholder="مثال : پروژه موفق"
                                        value="{{ old('secondBoxText', $intro['secondBoxText'] ?? '') }}">
                                    @error('secondBoxText')
                                        <span class="text-xs text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="w-full md:w-1/3">
                                    <label for="secondBoxNumber" class="mb-2 flex flex-row items-center">
                                        <span>عدد باکس دوم : </span>
                                        <span class="text-rose-500">*</span>
                                    </label>
                                    <input type="text" name="secondBoxNumber"
                                        class="w-full outline-none pr-5 py-3 bg-[#F9F9F9] border border-slate-300 rounded-xl focus:bg-[#f1f1f4]"
                                        rows="4" id="secondBoxNumber" placeholder="مثال : 10"
                                        value="{{ old('secondBoxNumber', $intro['secondBoxNumber'] ?? '') }}">
                                    @error('secondBoxNumber')
                                        <span class="text-xs text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="w-full md:w-1/3">
                                    <div class="w-full flex items-center gap-3">
                                        <div class="w-2/3 flex flex-col">
                                            <label for="secondBoxIcon" class="mb-2">
                                                <span>آیکون باکس دوم : </span>
                                            </label>
                                            <input type="file" name="secondBoxIcon"
                                                class="w-full outline-none pr-5 py-3 bg-[#F9F9F9] border border-slate-300 rounded-xl focus:bg-[#f1f1f4]"
                                                rows="4" id="secondBoxIcon">
                                            @error('secondBoxIcon')
                                                <span class="text-xs text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="w-1/3">
                                            @if (isset($intro['secondBoxIcon']))
                                                <img src="{{ asset('storage/' . $intro['secondBoxIcon']) }}"
                                                    alt="" class="size-20 rounded-xl">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full border border-[#D5DFE4] rounded-[10px] mt-10 p-5">
                            <div class="w-full flex flex-col md:flex-row items-center gap-5">
                                <div class="w-full md:w-1/3">
                                    <label for="thirdBoxText" class="mb-2 flex flex-row items-center">
                                        <span>متن باکس سوم : </span>
                                        <span class="text-rose-500">*</span>
                                    </label>
                                    <input type="text" name="thirdBoxText"
                                        class="w-full outline-none pr-5 py-3 bg-[#F9F9F9] border border-slate-300 rounded-xl focus:bg-[#f1f1f4]"
                                        rows="4" id="thirdBoxText" placeholder="مثال : پروژه موفق"
                                        value="{{ old('thirdBoxText', $intro['thirdBoxText'] ?? '') }}">
                                    @error('thirdBoxText')
                                        <span class="text-xs text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="w-full md:w-1/3">
                                    <label for="thirdBoxNumber" class="mb-2 flex flex-row items-center">
                                        <span>عدد باکس سوم : </span>
                                        <span class="text-rose-500">*</span>
                                    </label>
                                    <input type="text" name="thirdBoxNumber"
                                        class="w-full outline-none pr-5 py-3 bg-[#F9F9F9] border border-slate-300 rounded-xl focus:bg-[#f1f1f4]"
                                        rows="4" id="thirdBoxNumber" placeholder="مثال : 10"
                                        value="{{ old('thirdBoxNumber', $intro['thirdBoxNumber'] ?? '') }}">
                                    @error('thirdBoxNumber')
                                        <span class="text-xs text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="w-full md:w-1/3">
                                    <div class="w-full flex items-center gap-3">
                                        <div class="w-2/3 flex flex-col">
                                            <label for="thirdBoxIcon" class="mb-2">
                                                <span>آیکون باکس سوم : </span>
                                            </label>
                                            <input type="file" name="thirdBoxIcon"
                                                class="w-full outline-none pr-5 py-3 bg-[#F9F9F9] border border-slate-300 rounded-xl focus:bg-[#f1f1f4]"
                                                rows="4" id="thirdBoxIcon">
                                            @error('thirdBoxIcon')
                                                <span class="text-xs text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="w-1/3">
                                            @if (isset($intro['thirdBoxIcon']))
                                                <img src="{{ asset('storage/' . $intro['thirdBoxIcon']) }}"
                                                    alt="" class="size-20 rounded-xl">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit"
                        class="py-3 px-10 rounded-[10px] bg-[#1B84FF] hover:bg-[#056EE9] text-white cursor-pointer">ثبت</button>
                </div>
            </form>
        </div>
    </div>
@endsection
