@extends('app.document')
@section('title', 'فرم تماس با ما')
@section('content')

    @if (count($user['contactuss']) > 0)
        <div class="w-full flex justify-end">
           <a href="{{ route('contactus-usersContact-index', [$user]) }}" class="bg-blue-500 hover:bg-blue-600 text-white py-1.5 px-3 rounded">درخواست های من</a>
        </div>
    @endif
    <div class="w-full h-full pb-10">
        <h2 class="text-base lg:text-3xl text-center font-bold py-5 text-[#425A8B]">فرم تماس با ما</h2>
        <div class="w-full lg:w-3/4 mx-auto border border-[#D5DFE4] rounded-[10px] text-[#425A8B] p-5 bg-white">
            <form action="{{ route('contactus-store') }}" method="post"
                class="flex flex-col items-stretch justify-center gap-3 lg:gap-5">
                @csrf
                <input type="hidden" name="user_id" value="{{ $user['id'] }}">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div class="flex flex-col">
                        <label for="name" class="mb-2 flex flex-row items-center text-sm font-bold lg:text-base lg:font-normal">
                            <span>نام :</span>
                            <span class="text-rose-500">*</span>
                        </label>
                        <input type="text" class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4] text-sm font-bold lg:text-base lg:font-normal"
                            name="name" id="name" placeholder="نام را وارد کنید" required>
                    </div>
                    <div class="flex flex-col">
                        <label for="family" class="mb-2 flex flex-row items-center text-sm font-bold lg:text-base lg:font-normal">
                            <span>نام خانوادگی :</span>
                            <span class="text-rose-500">*</span>
                        </label>
                        <input type="text" class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4] text-sm font-bold lg:text-base lg:font-normal"
                            name="family" id="family" placeholder="نام خانوادگی را وارد کنید" required>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div class="flex flex-col">
                        <label for="email" class="mb-2 flex flex-row items-center text-sm font-bold lg:text-base lg:font-normal">
                            <span>ایمیل :</span>
                            <span class="text-rose-500">*</span>
                        </label>
                        <input type="email" class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4] text-sm font-bold lg:text-base lg:font-normal"
                            name="email" id="email" placeholder="ایمیل را وارد کنید" required>
                    </div>
                    <div class="flex flex-col">
                        <label for="phoneNum" class="mb-2 flex flex-row items-center text-sm font-bold lg:text-base lg:font-normal">
                            <span>شماره تماس :</span>
                            <span class="text-rose-500">*</span>
                        </label>
                        <input type="number" class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4] text-sm font-bold lg:text-base lg:font-normal"
                            name="phoneNum" id="phoneNum" placeholder="شماره تماس را وارد کنید" required>
                    </div>
                </div>
                <div class="">
                    <div class="flex flex-col">
                        <label for="description" class="mb-2 flex flex-row items-center text-sm font-bold lg:text-base lg:font-normal">
                            <span>توضیحات :</span>
                            <span class="text-rose-500">*</span>
                        </label>
                        <textarea class="h-20 lg:h-40 outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4] text-sm font-bold lg:text-base lg:font-normal" name="description"
                            id="description" placeholder="توضیحات را وارد کنید" required></textarea>
                    </div>
                </div>
                <div class="mt-5 text-center">
                    <button type="submit"
                        class="py-3 px-10 rounded-[10px] bg-[#1B84FF] hover:bg-[#056EE9] text-white cursor-pointer">ثبت</button>
                </div>
            </form>
        </div>
    </div>
@endsection
