@extends('admin.app.dashboard')
@section('title', 'شاهکار | ثبت نام استاد')
@section('content')
    <div class="w-full h-full pb-10">
        <h2 class="text-3xl text-center font-bold py-10 text-[#425A8B]">ثبت نام استاد</h2>
        <div class="lg:w-2/3 w-full mx-auto border border-[#D5DFE4] rounded-[10px] text-[#425A8B] p-5 bg-white">
            <form action="{{ route('teacher.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id">
                <div class="w-full grid grid-cols-1 lg:grid-cols-2 gap-3 lg:gap-5">
                    <div class="w-full flex flex-col">
                        <label class="mb-2 flex flex-row items-center">
                            نام و نام خانوادگی :
                        </label>
                        <input type="text" class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4]"
                            name="name" placeholder="نام و نام خانوادگی را وارد کنید" required>
                    </div>
                    <div class="w-full flex flex-col">
                        <label for="image" class="mb-2">تصویر :</label>
                        <input type="file"
                            class="w-full outline-none pr-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4]"
                            name="profile_img" id="profile_img">
                    </div>
                    <div class="w-full flex flex-col">
                        <label for="expertise" class="mb-2">تخصص :</label>
                        <input type="text"
                            class="w-full outline-none pr-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4]"
                            name="expertise" placeholder="تخصص را وارد کنید">
                    </div>
                    <div class="w-full flex flex-col">
                        <label for="phone" class="mb-2">شماره تلفن :</label>
                        <input type="number"
                            class="w-full outline-none pr-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4]"
                            name="phone" placeholder="0912345678">
                    </div>
                    <div class="w-full flex flex-col">
                        <label for="instagram" class="mb-2">اینستاگرام :</label>
                        <input type="text"
                            class="w-full outline-none pl-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4]"
                            dir="ltr" name="social_media[instagram]">
                    </div>
                    <div class="w-full flex flex-col">
                        <label for="telegram" class="mb-2">تلگرام :</label>
                        <input type="text"
                            class="w-full outline-none pl-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4]"
                            dir="ltr" name="social_media[telegram]">
                    </div>
                    <div class="w-full flex flex-col">
                        <label for="whatsapp" class="mb-2">واتساپ :</label>
                        <input type="text"
                            class="w-full outline-none pl-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4]"
                            dir="ltr" name="social_media[whatsapp]">
                    </div>
                    <div class="w-full flex flex-col lg:col-span-2">
                        <label for="cat_desc" class="mb-2">بیوگرافی :</label>
                        <textarea class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4]" placeholder="بیوگرافی استاد"
                            name="bio"></textarea>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit"
                        class="py-3 px-10 rounded-[10px] bg-[#1B84FF] hover:bg-[#056EE9] text-white cursor-pointer">ثبت</button>
                </div>
            </form>
        </div>
    </div>
@endsection
