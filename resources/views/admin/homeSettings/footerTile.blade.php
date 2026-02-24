
    @extends('admin.app.dashboard')
    @section('title', 'شاهکار | ایجاد کاشی فوتر')
    @section('content')
        <div
            class="w-full pb-5 bg-[url('https://keenthemes.com/static/metronic/tailwind/dist/assets/media/images/2600x1200/bg-10.png')] bg-cover bg-no-repeat">
            <h2 class="text-3xl text-center font-bold py-5 text-[#425A8B]">فرم ایجاد کاشی فوتر</h2>
            <div class="w-full lg:w-2/3 mx-auto border border-[#D5DFE4] rounded-[10px] text-[#425A8B] p-5 bg-white">
                <form action="{{ route('banners-upsert') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="footerTile" value="{{ $footerTile->id }}">
                    <div class="flex flex-col w-full lg:p-6">
                        <div class="py-4">
                            <label for="img">تصویر :
                                <span class="text-rose-500">*</span>
                            </label>
                            <input class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4] w-full"
                                type="file" name="img" id="img" required value="{{ $footerTile->image }}">
                        </div>
                        <div class="py-4">
                            <label for="bg_img">تصویر پس زمینه :
                                <span class="text-rose-500">*</span>
                            </label>
                            <input class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4] w-full"
                                type="file" name="bg_img" id="bg_img" required value="{{ $footerTile->bg_img }}">
                        </div>
                        <div class="py-4">
                            <label for="title">عنوان :
                                <span class="text-rose-500">*</span>
                            </label>
                            <input class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4] w-full"
                                type="text" name="title" id="title" required value="{{ $footerTile->title }}">
                        </div>
                        <div class="py-4">
                            <label for="text">متن :
                                <span class="text-rose-500">*</span>
                            </label>
                            <input class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4] w-full"
                                type="text" name="text" id="text" required value="{{ $footerTile->text }}">
                        </div>
                    </div>
                    <div class="pt-4 text-center">
                        <button type="submit"
                            class="py-3 px-10 rounded-[10px] bg-[#1B84FF] hover:bg-[#056EE9] text-white cursor-pointer">ثبت</button>
                    </div>
                </form>
            </div>
        </div>
    @endsection
