
    @extends('admin.app.dashboard')
    @section('title')
        شاهکار | ویرایش کاربر {{ $user->name }} {{ $user->family }}
    @endsection
    @section('content')
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
    @endsection
