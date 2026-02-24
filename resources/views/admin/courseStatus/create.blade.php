@extends('admin.app.dashboard')
@section('title', 'شاهکار | ایجاد وضعیت')
@section('content')

    <h2 class="text-3xl text-center font-bold py-10 text-[#425A8B]">فرم ایجاد وضعیت</h2>
    <div class="lg:w-2/3 w-full mx-auto border border-[#D5DFE4] rounded-[10px] text-[#425A8B] p-5 bg-white">
        <form action="{{ route('status.store') }}" method="post">
            @csrf
            <div class="w-full flex flex-col">
                <label for="title" class="mb-2 flex flex-row items-center">
                    <span>
                        عنوان :
                        <span class="text-rose-500">*</span>
                    </span>
                </label>
                <input type="text" class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4]"
                    name="title" id="title" placeholder="عنوان را وارد کنید" required>
            </div>
            <div class="mt-5 text-center">
                <button type="submit"
                    class="py-3 px-10 rounded-[10px] bg-[#1B84FF] hover:bg-[#056EE9] text-white cursor-pointer">ثبت</button>
            </div>
        </form>
    </div>
@endsection
