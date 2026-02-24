<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/IMG_20251225_131334_688.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>شاهکار | ویرایش {{ $user->name }} {{ $user->family }}</title>

</head>

<body>
    {{-- <section class="2xl:container mx-auto">
        <div class="w-11/12 mx-auto">
            <div class="my-10">
                <h1 class="lg:text-3xl md:text-2xl text-md font-bold text-center text-gray-700">ثبت نام</h1>
            </div>
            <form action="{{ route('user.update') }}" method="post"
                class="w-11/12 lg:w-3/4 mx-auto p-5 rounded-lg border">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-5 lg:gap-10">
                    <div class="w-full flex flex-col">
                        <input type="hidden" name ="id" value ="{{ $user->id }}">
                        <label class="text-sm md:text-base" for="first_name">نام :</label>
                        <input type="text" name="name" id="first_name" value="{{ $user->name }}"
                            class="w-full px-2 py-1 lg:px-5 lg:px-2 outline-none border-b" required>
                    </div>
                    <div class="w-full flex flex-col">
                        <label class="text-sm md:text-base" for="last_name">نام خانوادگی :</label>
                        <input type="text" name="family" value="{{ $user->family }}" id="last_name"
                            class="w-full px-2 py-1 lg:px-5 lg:px-2 outline-none border-b" required>
                    </div>
                    <div class="w-full flex flex-col">
                        <label class="text-sm md:text-base" for="email">ایمیل :</label>
                        <input type="email" name="email" value="{{ $user->email }}" id="email"
                            class="w-full px-2 py-1 lg:px-5 lg:px-2 outline-none border-b" required>
                    </div>
                    <div class="w-full flex flex-col">
                        <label class="text-sm md:text-base" for="password">تغییر رمز عبور :</label>
                        <input type="password" name="password" id="password"
                            class="w-full px-2 py-1 lg:px-5 lg:px-2 outline-none border-b" required>
                    </div>

                </div>
                <div class="md:text-left text-center md:px-12 mt-5 lg:mt-10">
                    <button
                        class="px-5 py-2 lg:px-10 lg:py-3 border rounded-md transition-all duration-150 hover:bg-gray-400 hover:border-gray-400 hover:text-white">ثبت</button>
                </div>
            </form>
        </div>
    </section> --}}

    <div class="w-full h-full pb-10">
        <h2 class="text-3xl text-center font-bold py-10 text-[#425A8B]">{{ $user->name }} {{ $user->famiy }}</h2>
        <div class="lg:w-2/3 w-full mx-auto border border-[#D5DFE4] rounded-[10px] text-[#425A8B] p-5 bg-white">
            <form action="{{ route('user.update') }}" method="post" enctype="multipart/form-data" class="w-full grid grid-cols-1 lg:grid-cols-2 gap-5">
                @csrf
                <input type="hidden" name="id" value="{{ $user->id }}">
                <div class="w-full flex flex-col">
                    <label for="catTitle" class="mb-2 flex flex-row items-center">
                        <span>
                            نام :
                            <span class="text-rose-500">*</span>
                        </span>
                    </label>
                    <input type="text" class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4]" value="{{ $user->name }}"
                        name="name" placeholder="نام را وارد کنید" required>
                </div>
                <div class="w-full flex flex-col">
                    <label for="catTitle" class="mb-2 flex flex-row items-center">
                        <span>
                            نام خانوادگی :
                            <span class="text-rose-500">*</span>
                        </span>
                    </label>
                    <input type="text" class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4]" value="{{ $user->family }}"
                        name="family" placeholder="نام خانوادگی را وارد کنید" required>
                </div>
                <div class="w-full flex flex-col">
                    <label for="catTitle" class="mb-2 flex flex-row items-center">
                        <span>
                            شماره تلفن :
                            <span class="text-rose-500">*</span>
                        </span>
                    </label>
                    <input type="number" class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4]" value="{{ $user->phoneNumber }}"
                        name="phoneNumber" placeholder="0912345678" required>
                </div>
                <div class="w-full flex flex-col">
                    <label for="catTitle" class="mb-2 flex flex-row items-center">
                        <span>
                            رمز عبور :
                            <span class="text-rose-500">*</span>
                        </span>
                    </label>
                    <input type="password" class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4]"
                        name="password" required>
                </div>
        
                <div class="mt-5 text-center lg:col-span-2">
                    <button type="submit"
                        class="py-3 px-10 rounded-[10px] bg-[#1B84FF] hover:bg-[#056EE9] text-white cursor-pointer">ثبت</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
