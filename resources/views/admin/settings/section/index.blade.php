@extends('admin.app.dashboard')
@section('title', 'شاهکار | تنظیمات سکشن')
@section('content')
    @if (session('message'))
        <div
            class="modal py-5 px-8 rounded-lg shadow-lg bg-slate-100 fixed top-10 right-10 z-5 flex justify-center items-center transition-all duration-300">
            <span class="font-bold text-sm text-slate-500"> {{ session('message') }} </span>
        </div>
    @endif
    <div class="w-full h-full pb-10">
        <h2 class="text-3xl text-center font-bold py-5 text-[#425A8B]">فرم ایجاد سکشن </h2>
        <div class="w-full mx-auto border border-[#D5DFE4] rounded-[10px] text-[#425A8B] p-5 bg-white">
            <form action="{{ route('settings.section.store') }}" method="post">
                @csrf
                <div class="flex flex-col items-center gap-10">
                    <div class="w-full">
                        <div class="w-full flex flex-col sm:flex-row items-center sm:gap-10">
                            <div class="w-full sm:w-1/2 flex flex-col mt-3 lg:mt-5">
                                <label for="name" class="mb-2 flex flex-row items-center">
                                    <span>نام سکشن : </span>
                                    <span class="text-rose-500">*</span>
                                </label>
                                <input type="text"
                                    class="outline-none pr-5 py-3 bg-[#F9F9F9] border border-slate-300 rounded-xl focus:bg-[#f1f1f4]"
                                    name="name" id="name" value="{{ old('name') }}" placeholder="مثال : خدمات">
                                @error('name')
                                    <span class="text-xs text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="w-full sm:w-1/2 flex flex-col mt-3 lg:mt-5">
                                <label for="title" class="mb-2 flex flex-row items-center">
                                    <span>عنوان سکشن : </span>
                                    <span class="text-rose-500">*</span>
                                </label>
                                <input type="text"
                                    class="outline-none pr-5 py-3 bg-[#F9F9F9] border border-slate-300 rounded-xl focus:bg-[#f1f1f4]"
                                    name="title" id="title" value="{{ old('title') }}" placeholder="مثال : خدمات ما">
                                @error('title')
                                    <span class="text-xs text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="w-full flex flex-col mt-5">
                            <label for="description" class="mb-2">
                                <span>توضیحات:</span>
                            </label>
                            <textarea name="description"
                                class="outline-none pr-5 py-3 bg-[#F9F9F9] border border-slate-300 rounded-xl focus:bg-[#f1f1f4]" rows="4"
                                id="description" placeholder="توضیحات مربوط به سکشن.">{{ old('description') }}</textarea>
                            @error('description')
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
    @if ($sections->isNotEmpty())
        <div class="w-full h-full pb-10">
            <h2 class="text-3xl text-center font-bold py-5 text-[#425A8B]">لیست سکشن ها</h2>
            <div class="w-full mx-auto border border-[#D5DFE4] rounded-[10px] p-5 bg-white">
                <div
                    class="w-full h-full grid grid-cols-7 sm:grid-cols-13 py-3 divide-x divide-slate-500 bg-slate-400 rounded-xl mb-8">
                    <div class="col-span-1 text-center py-2">
                        <span class="font-bold text-slate-700">ردیف</span>
                    </div>
                    <div class="col-span-1 sm:col-span-2 text-center py-2">
                        <span class="font-bold text-slate-700">نام</span>
                    </div>
                    <div class="col-span-1 sm:col-span-2 text-center py-2">
                        <span class="font-bold text-slate-700">عنوان</span>
                    </div>
                    <div class="col-span-3 sm:col-span-6 text-center py-2">
                        <span class="font-bold text-slate-700">توضیحات</span>
                    </div>
                    <div class="col-span-1 sm:col-span-2 text-center py-2">
                        <span class="font-bold text-slate-700">عملیات</span>
                    </div>
                </div>
                @php
                    $count = 0;
                @endphp
                @foreach ($sections as $section)
                    @php
                        $count++;
                    @endphp
                    <div
                        class="w-full h-full grid grid-cols-7 sm:grid-cols-13 py-3 divide-x divide-slate-500 bg-slate-200 rounded-xl mt-3">
                        <div class="col-span-1 text-center py-2">
                            <span class="text-xs font-bold text-slate-600">{{ $count }}</span>
                        </div>
                        <div class="col-span-1 sm:col-span-2 text-center py-2">
                            <span class="text-xs font-bold text-slate-600">{{ $section['name'] }}</span>
                        </div>
                        <div class="col-span-1 sm:col-span-2 text-center py-2">
                            <span class="text-xs font-bold text-slate-600">{{ $section['title'] }}</span>
                        </div>
                        <div class="col-span-3 sm:col-span-6 text-center py-2">
                            <span class="text-xs font-bold text-slate-600">{{ $section['description'] }}</span>
                        </div>
                        <div class="col-span-1 sm:col-span-2 py-2">
                            <div class="flex flex-col sm:flex-row items-center justify-center gap-5">
                                <span class="p-2 rounded-lg bg-red-200 cursor-pointer" title="حذف"
                                    onclick="deleteForm('open', {{ $section['id'] }}, '{{ $section['name'] }}')">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                        class="size-4 fill-red-600">
                                        <path
                                            d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z" />
                                    </svg>
                                </span>
                                <span class="p-2 rounded-lg bg-yellow-200 cursor-pointer" title="ویرایش"
                                    onclick="editForm('open', {{ $section['id'] }})">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                        class="size-4 fill-yellow-600">
                                        <path
                                            d="M441 58.9L453.1 71c9.4 9.4 9.4 24.6 0 33.9L424 134.1 377.9 88 407 58.9c9.4-9.4 24.6-9.4 33.9 0zM209.8 256.2L344 121.9 390.1 168 255.8 302.2c-2.9 2.9-6.5 5-10.4 6.1l-58.5 16.7 16.7-58.5c1.1-3.9 3.2-7.5 6.1-10.4zM373.1 25L175.8 222.2c-8.7 8.7-15 19.4-18.3 31.1l-28.6 100c-2.4 8.4-.1 17.4 6.1 23.6s15.2 8.5 23.6 6.1l100-28.6c11.8-3.4 22.5-9.7 31.1-18.3L487 138.9c28.1-28.1 28.1-73.7 0-101.8L474.9 25C446.8-3.1 401.2-3.1 373.1 25zM88 64C39.4 64 0 103.4 0 152V424c0 48.6 39.4 88 88 88H360c48.6 0 88-39.4 88-88V312c0-13.3-10.7-24-24-24s-24 10.7-24 24V424c0 22.1-17.9 40-40 40H88c-22.1 0-40-17.9-40-40V152c0-22.1 17.9-40 40-40H200c13.3 0 24-10.7 24-24s-10.7-24-24-24H88z" />
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
    @error('editName')
        <div
            class="modal py-5 px-8 rounded-lg shadow-lg bg-red-100 fixed top-10 right-10 z-5 flex justify-center items-center transition-all duration-300">
            <span class="font-bold text-sm text-red-500"> {{ $message }} </span>
        </div>
    @enderror
    @error('editTitle')
        <div
            class="modal py-5 px-8 rounded-lg shadow-lg bg-red-100 fixed top-30 right-10 z-5 flex justify-center items-center transition-all duration-300">
            <span class="font-bold text-sm text-red-500"> {{ $message }} </span>
        </div>
    @enderror
    <div id="editFormPopup" class="w-full h-dvh fixed top-0 left-0 invisible opacity-0 transition-all duration-400">
        <div class="size-full relative">
            <div class="size-full bg-black/40 absolute top-0 left-0 z-2" onclick="editForm('close')"></div>
            <div
                class="w-8/12 2xl:container mx-auto border border-[#D5DFE4] rounded-[10px] text-[#425A8B] p-5 bg-white absolute right-1/2 translate-x-1/2 top-1/2 -translate-y-1/2 z-3">
                <div class="relative">
                    <button
                        class="absolute -top-4 -left-4 z-4 size-6 flex flex-col justify-center items-center cursor-pointer"
                        onclick="editForm('close')">
                        <span class="w-full h-0.5 rounded-full bg-slate-500 rotate-45 translate-y-1/2"></span>
                        <span class="w-full h-0.5 rounded-full bg-slate-500 -rotate-45 -translate-y-1/2"></span>
                    </button>
                </div>
                <div id="popupContent">
                    <form action="{{ route('settings.section.update') }}" method="post">
                        @csrf
                        <input type="hidden" name="section_id" id="section_id">
                        <div class="flex flex-col items-center gap-10">
                            <div class="w-full">
                                <div class="w-full flex flex-col sm:flex-row items-center sm:gap-10">
                                    <div class="w-full sm:w-1/2 flex flex-col mt-3 lg:mt-5">
                                        <label for="editName" class="mb-2 flex flex-row items-center">
                                            <span>نام سکشن : </span>
                                            <span class="text-rose-500">*</span>
                                        </label>
                                        <input type="text"
                                            class="outline-none pr-5 py-3 bg-[#F9F9F9] border border-slate-300 rounded-xl focus:bg-[#f1f1f4]"
                                            name="editName" id="editName" placeholder="مثال : خدمات">
                                        @error('editName')
                                            <span class="text-xs text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="w-full sm:w-1/2 flex flex-col mt-3 lg:mt-5">
                                        <label for="editTitle" class="mb-2 flex flex-row items-center">
                                            <span>عنوان سکشن : </span>
                                            <span class="text-rose-500">*</span>
                                        </label>
                                        <input type="text"
                                            class="outline-none pr-5 py-3 bg-[#F9F9F9] border border-slate-300 rounded-xl focus:bg-[#f1f1f4]"
                                            name="editTitle" id="editTitle" placeholder="مثال : خدمات ما">
                                        @error('editTitle')
                                            <span class="text-xs text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="w-full flex flex-col mt-5">
                                    <label for="editDesc" class="mb-2">
                                        <span>توضیحات:</span>
                                    </label>
                                    <textarea name="editDesc"
                                        class="outline-none pr-5 py-3 bg-[#F9F9F9] border border-slate-300 rounded-xl focus:bg-[#f1f1f4]" rows="4"
                                        id="editDesc" placeholder="توضیحات مربوط به سکشن."></textarea>
                                    @error('editDesc')
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
    </div>
    {{-- end editForm popup --}}
    {{-- start confirmDelete popup --}}
    <div id="confirmDeletePopup" class="w-full h-dvh fixed top-0 left-0 invisible opacity-0 transition-all duration-400">
        <div class="size-full relative">
            <div class="size-full bg-black/40 absolute top-0 left-0 z-2" onclick="deleteForm('close')"></div>
            <div
                class="w-1/3 2xl:container mx-auto border border-[#D5DFE4] rounded-[10px] text-[#425A8B] p-5 bg-white absolute right-1/2 translate-x-1/2 top-1/2 -translate-y-1/2 z-3">
                <div class="relative">
                    <button
                        class="absolute -top-4 -left-4 z-4 size-6 flex flex-col justify-center items-center cursor-pointer"
                        onclick="deleteForm('close')">
                        <span class="w-full h-0.5 rounded-full bg-slate-500 rotate-45 translate-y-1/2"></span>
                        <span class="w-full h-0.5 rounded-full bg-slate-500 -rotate-45 -translate-y-1/2"></span>
                    </button>
                </div>
                <div class="">
                    <p>آیا از حذف سکشن <span id="confirmDeleteSectionName" class="font-bold"> </span> اطمینان دارید؟ </p>
                    <div class="flex items-center justify-center gap-5 mt-10">
                        <a id="yes" class="py-2 px-4 bg-green-200 text-green-500 rounded-xl shadow-lg">بله</a>
                        <span class="py-2 px-4 bg-red-200 text-red-500 rounded-xl shadow-lg cursor-pointer"
                            onclick="deleteForm('close')">خیر</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end confirmDelete popup --}}
    <script>
        function editForm(state, id) {
            let editFormPopup = document.getElementById('editFormPopup')
            if (state == 'open') {
                let name = document.getElementById('editName')
                let title = document.getElementById('editTitle')
                let desc = document.getElementById('editDesc')
                let section_id = document.getElementById('section_id')
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    }
                })
                $.ajax({
                    url: "{{ route('settings.section.edit') }}",
                    type: "POST",
                    dataType: "json",
                    data: {
                        'id': id,
                    },
                    success: function(data) {
                        name.value = data.name
                        title.value = data.title
                        desc.value = data.description
                        section_id.value = data.id
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

        function deleteForm(state, id, sectionName) {
            let confirmDeletePopup = document.getElementById('confirmDeletePopup')
            if (state == 'open') {
                let yes = document.getElementById('yes')
                yes.setAttribute('href', `{{ url('settings/section/delete') }}/${id}`)
                let confirmDeleteSectionName = document.getElementById('confirmDeleteSectionName')
                confirmDeleteSectionName.innerText = sectionName
                confirmDeletePopup.classList.remove('invisible', 'opacity-0')
            }
            if (state == 'close') {
                confirmDeletePopup.classList.add('invisible', 'opacity-0')
            }
        }
    </script>
@endsection
