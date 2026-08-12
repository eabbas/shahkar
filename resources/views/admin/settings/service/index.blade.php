@extends('admin.app.dashboard')
@section('title', 'شاهکار | تنظیمات خدمات')
@section('content')
    @if (session('message'))
        <div
            class="modal py-5 px-8 rounded-lg shadow-lg bg-slate-100 fixed top-10 right-10 z-5 flex justify-center items-center transition-all duration-300">
            <span class="font-bold text-sm text-slate-500"> {{ session('message') }} </span>
        </div>
    @endif
    <div class="w-full h-full pb-10">
        <h2 class="text-3xl text-center font-bold py-5 text-[#425A8B]">فرم ایجاد خدمات</h2>
        <div class="w-full mx-auto border border-[#D5DFE4] rounded-[10px] text-[#425A8B] p-5 bg-white">
            <form action="{{ route('settings.service.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="flex flex-col items-center gap-10">
                    <div class="w-full">
                        <div class="w-full flex flex-col sm:flex-row items-center gap-10 mt-10">
                            <div class="w-full sm:w-1/2 flex flex-col">
                                <label for="title" class="mb-2 flex flex-row items-center">
                                    <span>عنوان : </span>
                                    <span class="text-rose-500">*</span>
                                </label>
                                <input type="text"
                                    class="outline-none pr-5 py-3 bg-[#F9F9F9] border border-slate-300 rounded-xl focus:bg-[#f1f1f4]"
                                    name="title" id="title" value="{{ old('title') }}"
                                    placeholder="مثال : چاپ تیشرت">
                                @error('title')
                                    <span class="text-xs text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="w-full sm:w-1/2 flex flex-col">
                                <label for="link" class="mb-2 flex flex-row items-center">
                                    <span>لینک : </span>
                                    <span class="text-rose-500">*</span>
                                </label>
                                <input type="text"
                                    class="outline-none pr-5 py-3 bg-[#F9F9F9] border border-slate-300 rounded-xl focus:bg-[#f1f1f4]"
                                    name="link" id="link" value="{{ old('link') }}"
                                    placeholder="مثال : shahkar.art/service/printTshirt">
                                @error('link')
                                    <span class="text-xs text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="w-full flex flex-col sm:flex-row items-center gap-10 mt-10">
                            <div class="w-full sm:w-1/2 flex flex-col">
                                <label for="img" class="mb-2">
                                    <span>تصویر :</span>
                                </label>
                                <input type="file"
                                    class="w-full outline-none pr-5 py-3 bg-[#F9F9F9] border border-slate-300 rounded-xl focus:bg-[#f1f1f4]"
                                    name="img" id="img">
                                @error('img')
                                    <span class="text-xs text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="w-full sm:w-1/2 flex flex-col">
                                <label for="icon" class="mb-2">
                                    <span>آیکون :</span>
                                </label>
                                <input type="file"
                                    class="w-full outline-none pr-5 py-3 bg-[#F9F9F9] border border-slate-300 rounded-xl focus:bg-[#f1f1f4]"
                                    name="icon" id="icon">
                                @error('icon')
                                    <span class="text-xs text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="w-full flex flex-col mt-5">
                            <label for="subTitle" class="mb-2">
                                <span>توضیحات:</span>
                            </label>
                            <textarea name="subTitle"
                                class="outline-none pr-5 py-3 bg-[#F9F9F9] border border-slate-300 rounded-xl focus:bg-[#f1f1f4]" rows="4"
                                id="subTitle" placeholder="مثال : چاپ انواع طرح ها بر روی تیشرت.">{{ old('subTitle') }}</textarea>
                            @error('subTitle')
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
    @if ($services->isNotEmpty())
        <div class="w-full h-full pb-10">
            <h2 class="text-3xl text-center font-bold py-5 text-[#425A8B]">لیست خدمات</h2>
            <div class="w-full mx-auto border border-[#D5DFE4] rounded-[10px] p-5 bg-white">
                <div
                    class="w-full h-full grid grid-cols-9 sm:grid-cols-15 py-3 divide-x divide-slate-500 bg-slate-400 rounded-xl mb-8">
                    <div class="col-span-1 text-center py-2">
                        <span class="text-sm font-bold text-slate-700">ردیف</span>
                    </div>
                    <div class="col-span-1 sm:col-span-2 text-center py-2">
                        <span class="text-sm font-bold text-slate-700">عنوان</span>
                    </div>
                    <div class="col-span-2 sm:col-span-3 text-center py-2">
                        <span class="text-sm font-bold text-slate-700">لینک</span>
                    </div>
                    <div class="col-span-3 sm:col-span-6 text-center py-2">
                        <span class="text-sm font-bold text-slate-700">توضیحات</span>
                    </div>
                    <div class="col-span-2 sm:col-span-3 text-center py-2">
                        <span class="text-sm font-bold text-slate-700">عملیات</span>
                    </div>
                </div>
                @php
                    $count = 0;
                @endphp
                @foreach ($services as $service)
                    @php
                        $count++;
                    @endphp
                    <div
                        class="w-full h-full grid grid-cols-9 sm:grid-cols-15 py-3 divide-x divide-slate-500 bg-slate-200 rounded-xl mt-3">
                        <div class="col-span-1 text-center py-2">
                            <span class="text-xs font-bold text-slate-600">{{ $count }}</span>
                        </div>
                        <div class="col-span-1 sm:col-span-2 text-center py-2 overflow-auto">
                            <span class="text-xs font-bold text-slate-700">{{ $service['title'] }}</span>
                        </div>
                        <div class="col-span-2 sm:col-span-3 text-center py-2 overflow-auto">
                            <span class="text-xs font-bold text-slate-700">{{ $service['link'] }}</span>
                        </div>
                        <div class="col-span-3 sm:col-span-6 text-center py-2 overflow-auto">
                            <span class="text-xs font-bold text-slate-700">{{ $service['subTitle'] }}</span>
                        </div>
                        <div class="col-span-2 sm:col-span-3 py-2">
                            <div class="flex flex-col sm:flex-row items-center justify-center gap-3">
                                <span class="p-1.5 rounded-lg bg-red-200 cursor-pointer" title="حذف"
                                    onclick="deleteService('open', {{ $service['id'] }}, '{{ $service['title'] }}')">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                        class="size-4 fill-red-600">
                                        <path
                                            d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z" />
                                    </svg>
                                </span>
                                <span class="p-1.5 rounded-lg bg-yellow-200 cursor-pointer" title="ویرایش"
                                    onclick="editForm('open', {{ $service['id'] }})">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                        class="size-4 fill-yellow-600">
                                        <path
                                            d="M441 58.9L453.1 71c9.4 9.4 9.4 24.6 0 33.9L424 134.1 377.9 88 407 58.9c9.4-9.4 24.6-9.4 33.9 0zM209.8 256.2L344 121.9 390.1 168 255.8 302.2c-2.9 2.9-6.5 5-10.4 6.1l-58.5 16.7 16.7-58.5c1.1-3.9 3.2-7.5 6.1-10.4zM373.1 25L175.8 222.2c-8.7 8.7-15 19.4-18.3 31.1l-28.6 100c-2.4 8.4-.1 17.4 6.1 23.6s15.2 8.5 23.6 6.1l100-28.6c11.8-3.4 22.5-9.7 31.1-18.3L487 138.9c28.1-28.1 28.1-73.7 0-101.8L474.9 25C446.8-3.1 401.2-3.1 373.1 25zM88 64C39.4 64 0 103.4 0 152V424c0 48.6 39.4 88 88 88H360c48.6 0 88-39.4 88-88V312c0-13.3-10.7-24-24-24s-24 10.7-24 24V424c0 22.1-17.9 40-40 40H88c-22.1 0-40-17.9-40-40V152c0-22.1 17.9-40 40-40H200c13.3 0 24-10.7 24-24s-10.7-24-24-24H88z" />
                                    </svg>
                                </span>
                                <span class="p-1.5 rounded-lg bg-blue-200 cursor-pointer" title="مشاهده"
                                    onclick="show('open', {{ $service['id'] }})">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4 fill-blue-600"
                                        viewBox="0 0 576 512">
                                        <path
                                            d="M288 80c-65.2 0-118.8 29.6-159.9 67.7C89.6 183.5 63 226 49.4 256c13.6 30 40.2 72.5 78.6 108.3C169.2 402.4 222.8 432 288 432s118.8-29.6 159.9-67.7C486.4 328.5 513 286 526.6 256c-13.6-30-40.2-72.5-78.6-108.3C406.8 109.6 353.2 80 288 80zM95.4 112.6C142.5 68.8 207.2 32 288 32s145.5 36.8 192.6 80.6c46.8 43.5 78.1 95.4 93 131.1c3.3 7.9 3.3 16.7 0 24.6c-14.9 35.7-46.2 87.7-93 131.1C433.5 443.2 368.8 480 288 480s-145.5-36.8-192.6-80.6C48.6 356 17.3 304 2.5 268.3c-3.3-7.9-3.3-16.7 0-24.6C17.3 208 48.6 156 95.4 112.6zM288 336c44.2 0 80-35.8 80-80s-35.8-80-80-80c-.7 0-1.3 0-2 0c1.3 5.1 2 10.5 2 16c0 35.3-28.7 64-64 64c-5.5 0-10.9-.7-16-2c0 .7 0 1.3 0 2c0 44.2 35.8 80 80 80zm0-208a128 128 0 1 1 0 256 128 128 0 1 1 0-256z" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
    {{-- start editForm popup --}}
    @error('editTitle')
        <div
            class="modal py-5 px-8 rounded-lg shadow-lg bg-red-100 fixed top-10 right-10 z-5 flex justify-center items-center transition-all duration-300">
            <span class="font-bold text-sm text-red-500"> {{ $message }} </span>
        </div>
    @enderror
    @error('editLink')
        <div
            class="modal py-5 px-8 rounded-lg shadow-lg bg-red-100 fixed top-30 right-10 z-5 flex justify-center items-center transition-all duration-300">
            <span class="font-bold text-sm text-red-500"> {{ $message }} </span>
        </div>
    @enderror
    <div id="editFormPopup" class="w-full h-dvh fixed top-0 left-0 invisible opacity-0 transition-all duration-400">
        <div class="size-full relative">
            <div class="size-full bg-black/40 absolute top-0 left-0 z-2" onclick="editForm('close')"></div>
            <div class="w-8/12 2xl:container 2xl:w-8/12 max-h-130 overflow-auto mx-auto border border-[#D5DFE4] rounded-[10px] text-[#425A8B] p-5 bg-white absolute right-1/2 translate-x-1/2 top-1/2 -translate-y-1/2 z-3"
                style="scrollbar-width: none">
                <div class="relative">
                    <button
                        class="absolute -top-4 -left-4 z-4 size-6 flex flex-col justify-center items-center cursor-pointer"
                        onclick="editForm('close')">
                        <span class="w-full h-0.5 rounded-full bg-slate-500 rotate-45 translate-y-1/2"></span>
                        <span class="w-full h-0.5 rounded-full bg-slate-500 -rotate-45 -translate-y-1/2"></span>
                    </button>
                </div>
                <form action="{{ route('settings.service.update') }}" method="post" enctype="multipart/form-data"
                    id="editForm">
                    @csrf
                    <input type="hidden" id="service_id" name="service_id">
                    <div class="flex flex-col items-center gap-10">
                        <div class="w-full">
                            <div class="w-full flex flex-col sm:flex-row items-center gap-10 mt-10">
                                <div class="w-full sm:w-1/2 flex flex-col">
                                    <label for="editTitle" class="mb-2 flex flex-row items-center">
                                        <span>عنوان : </span>
                                        <span class="text-rose-500">*</span>
                                    </label>
                                    <input type="text"
                                        class="outline-none pr-5 py-3 bg-[#F9F9F9] border border-slate-300 rounded-xl focus:bg-[#f1f1f4]"
                                        name="editTitle" id="editTitle" placeholder="مثال : چاپ تیشرت">
                                    @error('editTitle')
                                        <span class="text-xs text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="w-full sm:w-1/2 flex flex-col">
                                    <label for="editLink" class="mb-2 flex flex-row items-center">
                                        <span>لینک : </span>
                                        <span class="text-rose-500">*</span>
                                    </label>
                                    <input type="text"
                                        class="outline-none pr-5 py-3 bg-[#F9F9F9] border border-slate-300 rounded-xl focus:bg-[#f1f1f4]"
                                        name="editLink" id="editLink"
                                        placeholder="مثال : shahkar.art/service/printTshirt">
                                    @error('editLink')
                                        <span class="text-xs text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="w-full flex flex-col sm:flex-row items-center gap-10 mt-10">
                                <div class="w-full sm:w-1/2 flex flex-col">
                                    <label for="editImg" class="mb-2">
                                        <span>تصویر :</span>
                                    </label>
                                    <input type="file"
                                        class="w-full outline-none pr-5 py-3 bg-[#F9F9F9] border border-slate-300 rounded-xl focus:bg-[#f1f1f4]"
                                        name="editImg" id="editImg">
                                    @error('editImg')
                                        <span class="text-xs text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div id="service_img"
                                    class="w-full sm:w-1/2 h-40 flex justify-center items-center relative">
                                </div>
                            </div>
                            <div class="w-full flex flex-col sm:flex-row items-center gap-10 mt-10">
                                <div class="w-full sm:w-1/2 flex flex-col">
                                    <label for="editIcon" class="mb-2">
                                        <span>آیکون :</span>
                                    </label>
                                    <input type="file"
                                        class="w-full outline-none pr-5 py-3 bg-[#F9F9F9] border border-slate-300 rounded-xl focus:bg-[#f1f1f4]"
                                        name="editIcon" id="editIcon">
                                    @error('editIcon')
                                        <span class="text-xs text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div id="service_icon"
                                    class="w-full sm:w-1/2 h-40 flex justify-center items-center relative">
                                </div>
                            </div>
                            <div class="w-full flex flex-col mt-5">
                                <label for="editSubTitle" class="mb-2">
                                    <span>توضیحات:</span>
                                </label>
                                <textarea name="editSubTitle"
                                    class="outline-none pr-5 py-3 bg-[#F9F9F9] border border-slate-300 rounded-xl focus:bg-[#f1f1f4]" rows="4"
                                    id="editSubTitle" placeholder="مثال : چاپ انواع طرح ها بر روی تیشرت."></textarea>
                                @error('editSubTitle')
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
    </div>
    {{-- end editForm popup --}}
    {{-- start confirmDelete popup --}}
    <div id="confirmDeletePopup" class="w-full h-dvh fixed top-0 left-0 invisible opacity-0 transition-all duration-400">
        <div class="size-full relative">
            <div class="size-full bg-black/40 absolute top-0 left-0 z-2" onclick="deleteService('close')"></div>
            <div
                class="w-11/12 md:w-1/2 xl:w-1/3 2xl:container 2xl:w-1/3 mx-auto border border-[#D5DFE4] rounded-[10px] text-[#425A8B] p-5 bg-white absolute right-1/2 translate-x-1/2 top-1/2 -translate-y-1/2 z-3">
                <div class="relative">
                    <button
                        class="absolute -top-4 -left-4 z-4 size-6 flex flex-col justify-center items-center cursor-pointer"
                        onclick="deleteService('close')">
                        <span class="w-full h-0.5 rounded-full bg-slate-500 rotate-45 translate-y-1/2"></span>
                        <span class="w-full h-0.5 rounded-full bg-slate-500 -rotate-45 -translate-y-1/2"></span>
                    </button>
                </div>
                <div class="">
                    <p>آیا از حذف سرویس <span id="confirmDeleteServiceName" class="font-bold"> </span> اطمینان دارید؟ </p>
                    <div class="flex items-center justify-center gap-5 mt-10">
                        <a id="yes" class="py-2 px-4 bg-green-200 text-green-500 rounded-xl shadow-lg">بله</a>
                        <span class="py-2 px-4 bg-red-200 text-red-500 rounded-xl shadow-lg cursor-pointer"
                            onclick="deleteService('close')">خیر</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end confirmDelete popup --}}
    {{-- start showSingle popup --}}
    <div id="showSinglePopup" class="w-full h-dvh fixed top-0 left-0 invisible opacity-0 transition-all duration-400">
        <div class="size-full relative">
            <div class="size-full bg-black/40 absolute top-0 left-0 z-2" onclick="show('close')"></div>
            <div
                class="w-10/12 sm:w-8/12 2xl:container 2xl:w-10/12 mx-auto border border-[#D5DFE4] rounded-[10px] text-[#425A8B] p-5 bg-white absolute right-1/2 translate-x-1/2 top-1/2 -translate-y-1/2 z-3">
                <div class="relative">
                    <button
                        class="absolute -top-4 -left-4 z-4 size-6 flex flex-col justify-center items-center cursor-pointer"
                        onclick="show('close')">
                        <span class="w-full h-0.5 rounded-full bg-slate-500 rotate-45 translate-y-1/2"></span>
                        <span class="w-full h-0.5 rounded-full bg-slate-500 -rotate-45 -translate-y-1/2"></span>
                    </button>
                </div>
                <div class="w-full flex flex-col items-start gap-10 p-5 max-h-130 overflow-auto">
                    <div class="w-full flex flex-col sm:flex-row items-center gap-10">
                        <div class="w-full sm:w-1/2 bg-slate-100 rounded-xl px-5 py-2">
                            <h2 class="font-bold text-slate-700 mb-4">عنوان : </h2>
                            <p id="singleTitle"></p>
                        </div>
                        <div class="w-full sm:w-1/2 bg-slate-100 rounded-xl px-5 py-2">
                            <h2 class="font-bold text-slate-700 mb-4">لینک : </h2>
                            <p id="singleLink"></p>
                        </div>
                    </div>
                    <div class="w-full bg-slate-100 rounded-xl px-5 py-2">
                        <h2 class="font-bold text-slate-700 mb-4">زیر عنوان : </h2>
                        <p id="singleSubTitle"></p>
                    </div>
                    <div class="w-full flex flex-col sm:flex-row items-center gap-15">
                        <div class="w-full sm:w-1/2 bg-slate-100 rounded-xl px-5 py-2">
                            <h2 class="font-bold text-slate-700 mb-4">تصویر : </h2>
                            <div id="singleImg">

                            </div>
                        </div>
                        <div class="w-full sm:w-1/2 bg-slate-100 rounded-xl px-5 py-2">
                            <h2 class="font-bold text-slate-700 mb-4">آیکون : </h2>
                            <div id="singleIcon">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end showSingle popup --}}
    <script>
        function show(state, id) {
            let showSinglePopup = document.getElementById('showSinglePopup')
            if (state == 'open') {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    }
                })
                $.ajax({
                    url: "{{ route('settings.service.show') }}",
                    type: "POST",
                    dataType: "json",
                    data: {
                        'id': id,
                    },
                    success: function(data) {
                        document.getElementById('singleTitle').innerText = data.title
                        document.getElementById('singleLink').innerText = data.link
                        document.getElementById('singleSubTitle').innerText = data.subTitle
                        let singleImg = document.getElementById('singleImg')
                        singleImg.innerHTML = ''
                        if (data.img) {
                            let img = document.createElement('img')
                            img.classList = 'w-full h-50'
                            img.setAttribute('src', data.img)
                            singleImg.appendChild(img)
                        }
                        let singleIcon = document.getElementById('singleIcon')
                        singleIcon.innerHTML = ''
                        if (data.icon) {
                            let icon = document.createElement('img')
                            icon.classList = 'w-full h-50'
                            icon.setAttribute('src', data.icon)
                            singleIcon.appendChild(icon)
                        }
                    },
                    error: function() {
                        alert('error')
                    }
                })
                showSinglePopup.classList.remove('opacity-0', 'invisible')
            }
            if (state == 'close') {
                showSinglePopup.classList.add('opacity-0', 'invisible')
            }
        }

        function editForm(state, id) {
            let editFormPopup = document.getElementById('editFormPopup')
            if (state == 'open') {
                let title = document.getElementById('editTitle')
                let link = document.getElementById('editLink')
                let subTitle = document.getElementById('editSubTitle')
                let service_id = document.getElementById('service_id')
                let service_img = document.getElementById('service_img')
                let service_icon = document.getElementById('service_icon')
                service_icon.innerHTML = ""
                service_img.innerHTML = ""
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    }
                })
                $.ajax({
                    url: "{{ route('settings.service.edit') }}",
                    type: "POST",
                    dataType: "json",
                    data: {
                        'id': id,
                    },
                    success: function(data) {
                        console.log(data);
                        if (data.img) {
                            let img = document.createElement('img')
                            img.classList = "size-20"
                            img.setAttribute('src', data.img)
                            service_img.appendChild(img)
                            let deleteImgBtn = document.createElement('span')
                            deleteImgBtn.setAttribute('onclick', `removeImg(this, "${data.img}", 'img')`)
                            deleteImgBtn.classList = "absolute top-0 left-0 cursor-pointer"
                            deleteImgBtn.innerText = '❌'
                            service_img.appendChild(deleteImgBtn)
                        }
                        if (data.icon) {
                            let icon = document.createElement('img')
                            icon.classList = "size-20"
                            icon.setAttribute('src', data.icon)
                            service_icon.appendChild(icon)
                            let deleteImgBtn = document.createElement('span')
                            deleteImgBtn.setAttribute('onclick', `removeImg(this, "${data.icon}", 'icon')`)
                            deleteImgBtn.classList = "absolute top-0 left-0 cursor-pointer"
                            deleteImgBtn.innerText = '❌'
                            service_icon.appendChild(deleteImgBtn)
                        }
                        title.value = data.title
                        link.value = data.link
                        subTitle.value = data.subTitle
                        service_id.value = data.id
                    },
                    error: function() {
                        alert('error')
                    }
                })
                editFormPopup.classList.remove('invisible', 'opacity-0')
            }
            if (state == 'close') {
                editFormPopup.classList.add('invisible', 'opacity-0')
            }
        }

        function removeImg(el, file, type) {
            let editForm = document.getElementById('editForm')
            let index = file.indexOf('serviceImgs')
            let result = file.slice(index)
            if (type == 'img') {
                let input = document.createElement('input')
                input.setAttribute("type", 'hidden')
                input.setAttribute("name", "removedImgs[img]")
                input.setAttribute("value", result)
                editForm.appendChild(input)
            }
            if (type == 'icon') {
                let input = document.createElement('input')
                input.setAttribute("type", 'hidden')
                input.setAttribute("name", "removedImgs[icon]")
                input.setAttribute("value", result)
                editForm.appendChild(input)
            }
            el.parentElement.remove()
        }

        function deleteService(state, id, serviceTitle) {
            let confirmDeletePopup = document.getElementById('confirmDeletePopup')
            if (state == 'open') {
                let yes = document.getElementById('yes')
                yes.setAttribute('href', `{{ url('settings/service/delete') }}/${id}`)
                let confirmDeleteServiceName = document.getElementById('confirmDeleteServiceName')
                confirmDeleteServiceName.innerText = serviceTitle
                confirmDeletePopup.classList.remove('invisible', 'opacity-0')
            }
            if (state == 'close') {
                confirmDeletePopup.classList.add('invisible', 'opacity-0')
            }
        }
    </script>
@endsection
