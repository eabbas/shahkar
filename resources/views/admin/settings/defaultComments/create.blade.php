@extends('admin.app.dashboard')
@section('title', 'شاهکار | تنظیمات نظرات پیش فرض')
@section('content')
    @if (session('message'))
        <div
            class="modal py-5 px-8 rounded-lg shadow-lg bg-slate-100 fixed top-10 right-10 z-5 flex justify-center items-center transition-all duration-300">
            <span class="font-bold text-sm text-slate-500"> {{ session('message') }} </span>
        </div>
    @endif
    <div class="w-full h-full pb-10">
        <h2 class="text-3xl text-center font-bold py-5 text-[#425A8B]">فرم ایجاد و ویرایش نظرات پیش فرض در صفحه اول</h2>
        <div class="w-full mx-auto border border-[#D5DFE4] rounded-[10px] text-[#425A8B] p-5 bg-white">
            <form action="{{ route('settings.defaultComment.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="flex flex-col items-center gap-10">
                    <div class="w-full">
                        <div class="w-full flex flex-col">
                            <label for="firstUserName" class="mb-2 flex flex-row items-center">
                                <span>نام و نام خانوادگی کاربر اول:</span>
                                <span class="text-rose-500">*</span>
                            </label>
                            <input type="text"
                                class="outline-none pr-5 py-3 bg-[#F9F9F9] border border-slate-300 rounded-xl focus:bg-[#f1f1f4]"
                                name="userNames[]" id="firstUserName" placeholder="نام کاربر را بنویسید"
                                value="{{ old('userNames.0', $defaultComments[0]['userName'] ?? '') }}">
                            @error('userNames.0')
                                <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="w-full flex flex-col mt-5">
                            <label for="firstComment" class="mb-2 flex flex-row items-center">
                                <span>کامنت کاربر اول :</span>
                                <span class="text-rose-500">*</span>
                            </label>
                            <textarea name="comments[]"
                                class="outline-none pr-5 py-3 bg-[#F9F9F9] border border-slate-300 rounded-xl focus:bg-[#f1f1f4]" rows="4"
                                id="firstComment" placeholder="کامنت مورد نظر خود را بنویسید.">{{ old('comments.0', $defaultComments[0]['comment'] ?? '') }}</textarea>
                            @error('comments.0')
                                <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="w-full">
                        <div class="w-full flex flex-col">
                            <label for="secondUserName" class="mb-2 flex flex-row items-center">
                                <span>نام و نام خانوادگی کاربر دوم</span>
                                <span class="text-rose-500">*</span>
                            </label>
                            <input type="text"
                                class="outline-none pr-5 py-3 bg-[#F9F9F9] border border-slate-300 rounded-xl focus:bg-[#f1f1f4]"
                                name="userNames[]" id="secondUserName" placeholder="نام کاربر را بنویسید"
                                value="{{ old('userNames.1', $defaultComments[1]['userName'] ?? '') }}">
                            @error('userNames.1')
                                <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="w-full flex flex-col mt-5">
                            <label for="secondComment" class="mb-2 flex flex-row items-center">
                                <span>کامنت کاربر دوم :</span>
                                <span class="text-rose-500">*</span>
                            </label>
                            <textarea name="comments[]"
                                class="outline-none pr-5 py-3 bg-[#F9F9F9] border border-slate-300 rounded-xl focus:bg-[#f1f1f4]" rows="4"
                                id="secondComment" placeholder="کامنت مورد نظر خود را بنویسید.">{{ old('comments.1', $defaultComments[1]['comment'] ?? '') }}</textarea>
                            @error('comments.1')
                                <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="w-full">
                        <div class="w-full flex flex-col">
                            <label for="thirdUserName" class="mb-2 flex flex-row items-center">
                                <span>نام و نام خانوادگی کاربر سوم : </span>
                                <span class="text-rose-500">*</span>
                            </label>
                            <input type="text"
                                class="outline-none pr-5 py-3 bg-[#F9F9F9] border border-slate-300 rounded-xl focus:bg-[#f1f1f4]"
                                name="userNames[]" id="thirdUserName" placeholder="نام کاربر را بنویسید"
                                value="{{ old('userNames.2', $defaultComments[2]['userName'] ?? '') }}">
                            @error('userNames.2')
                                <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="w-full flex flex-col mt-5">
                            <label for="thirdComment" class="mb-2 flex flex-row items-center">
                                <span>کامنت کاربر سوم :</span>
                                <span class="text-rose-500">*</span>
                            </label>
                            <textarea name="comments[]"
                                class="outline-none pr-5 py-3 bg-[#F9F9F9] border border-slate-300 rounded-xl focus:bg-[#f1f1f4]" rows="4"
                                id="thirdComment" placeholder="کامنت مورد نظر خود را بنویسید.">{{ old('comments.2', $defaultComments[2]['comment'] ?? '') }}</textarea>
                            @error('comments.2')
                                <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <button type="submit"
                        class="py-3 px-10 rounded-[10px] bg-[#1B84FF] hover:bg-[#056EE9] text-white cursor-pointer">ثبت</button>
                </div>
            </form>
        </div>
    </div>
@endsection
