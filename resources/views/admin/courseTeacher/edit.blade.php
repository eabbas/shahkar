<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Teacher</title>
</head>

<body>
    @extends('admin.app.dashboard')
    @section('content')
        <form action="{{ route('teacher.update', $teacher->id) }}" enctype="multipart/form-data" method="POST">
            @csrf

            <div class="min-h-screen flex items-start justify-center">
                <div class="bg-white rounded-2xl shadow-md p-3 w-full md:w-9/12">

                    <div class="text-center mb-4">
                        <h2 class="text-xl font-bold">ویرایش اطلاعات معلم</h2>
                    </div>

                    <div class="md:flex md:flex-row md:w-full md:items-center md:gap-5">


                        <div class="md:flex md:flex-col md:w-full">


                            <fieldset class="mt-2 text-sm md:text-base border border-gray-400 rounded-[15px] py-1 pr-3">
                                <legend
                                    class="kelass p-1 w-30 bg-[#1cb7fd] text-white rounded-full flex justify-center text-sm">
                                    عکس</legend>

                                @if ($teacher->profile_img)
                                    <img src="{{ asset('storage/' . $teacher->profile_img) }}" alt="Teacher Image"
                                        width="80" class="mb-2 rounded">
                                @endif

                                <input type="file" name="profile_img"
                                    class="w-full px-2 py-1 outline-none text-gray-500">
                            </fieldset>

                            <fieldset class="mt-2 text-sm md:text-base border border-gray-400 rounded-[15px] py-1 pr-3">
                                <legend class="p-1 w-30 bg-[#1cb7fd] text-white rounded-full flex justify-center text-sm">
                                    اسم</legend>
                                <input type="text" name="name" value="{{ $teacher->name }}"
                                    class="w-full px-2 py-1 outline-none text-gray-500">
                            </fieldset>

                        </div>

                        <div class="md:flex md:flex-col md:w-full">

                            <fieldset class="mt-2 text-sm md:text-base border border-gray-400 rounded-[15px] py-1 pr-3">
                                <legend class="p-1 w-30 bg-[#1cb7fd] text-white rounded-full flex justify-center text-sm">
                                    بیوگرافی</legend>
                                <input type="text" name="bio" value="{{ $teacher->bio }}"
                                    class="w-full px-2 py-1 outline-none text-gray-500">
                            </fieldset>

                        </div>

                        <!-- ستون 3 -->
                        <div class="md:flex md:flex-col md:w-full">

                            <!-- تخصص -->
                            <fieldset class="mt-2 text-sm md:text-base border border-gray-400 rounded-[15px] py-1 pr-3">
                                <legend class="p-1 bg-[#1cb7fd] text-white rounded-full flex justify-center text-sm">تخصص
                                </legend>
                                <input type="text" name="expertise" value="{{ $teacher->expertise }}"
                                    class="w-full px-2 py-1 outline-none text-gray-500">
                            </fieldset>

                        </div>

                        <!-- ستون 4 -->
                        <div class="md:flex md:flex-col md:w-full">

                            <!-- شماره تلفن -->
                            <fieldset class="mt-2 text-sm md:text-base border border-gray-400 rounded-[15px] py-1 pr-3">
                                <legend class="p-1 bg-[#1cb7fd] text-white rounded-full flex justify-center text-sm">شماره
                                    تلفن</legend>
                                <input type="text" name="phone" value="{{ $teacher->phone }}"
                                    class="w-full px-2 py-1 outline-none text-gray-500">
                            </fieldset>

                        </div>

                    </div>

                    <!-- شبکه‌های اجتماعی -->
                    @php
                        $socials = json_decode($teacher->social_media, true);
                    @endphp

                    <ul class="w-full px-4 py-3 mt-2">

                        <li>
                            <fieldset class="mt-2 text-sm md:text-base border border-gray-400 rounded-[10px] py-1 pr-3">
                                <legend class="rounded-full flex justify-center text-sm">اینستاگرام:</legend>
                                <input type="text" name="social_media[instagram]"
                                    value="{{ $socials['instagram'] ?? '' }}"
                                    class="w-full px-2 py-1 outline-none text-gray-500">
                            </fieldset>
                        </li>

                        <li>
                            <fieldset class="mt-2 text-sm md:text-base border border-gray-400 rounded-[10px] py-1 pr-3">
                                <legend class="rounded-full flex justify-center text-sm">تلگرام:</legend>
                                <input type="text" name="social_media[telegram]" value="{{ $socials['telegram'] ?? '' }}"
                                    class="w-full px-2 py-1 outline-none text-gray-500">
                            </fieldset>
                        </li>

                        <li>
                            <fieldset class="mt-2 text-sm md:text-base border border-gray-400 rounded-[10px] py-1 pr-3">
                                <legend class="rounded-full flex justify-center text-sm">واتساپ:</legend>
                                <input type="text" name="social_media[whatsapp]" value="{{ $socials['whatsapp'] ?? '' }}"
                                    class="w-full px-2 py-1 outline-none text-gray-500">
                            </fieldset>
                        </li>

                    </ul>

                </div>
            </div>

            <!-- دکمه ارسال -->
            <button type="submit"
                class="active:bg-[#0080e5] mt-2 w-full bg-[#03A9F4] text-white py-3 rounded-md hover:bg-blue-700 transition duration-200 font-medium">
                بروزرسانی اطلاعات
            </button>

        </form>
    @endsection
</body>

</html>
