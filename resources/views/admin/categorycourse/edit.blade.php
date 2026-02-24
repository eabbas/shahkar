
    @extends('admin.app.dashboard')
    @section('title')
        شاهکار | ویرایش {{ $coursecategory->title }}
    @endsection
    @section('content')
        {{-- <form action="{{ route('coursecategory.update') }}" enctype='multipart/form-data' method="POST">
            @csrf
            <div class="min-h-screen flex items-start justify-center">
                <div class="bg-white rounded-2xl shadow-md p-3 w-full md:w-9/12">
                    <!-- هدر -->
                    <div class="text-center mb-4">
                    </div class="w-full">
                    <div class="md:flex md:flex-row md:w-full md:items-center md:gap-5">

                        <div class="md:flex md:flex-col md:w-full">
                            <fieldset class="mt-2 text-sm md:text-base border border-gray-400 rounded-[15px] py-1 pr-3">
                                <legend
                                    class="kelass p-1 w-30 bg-[#1cb7fd] text-white rounded-full flex flex-row justify-center text-sm">
                                    عکس</legend>
                                <input type="file" name='img'
                                    class="w-full px-2 py-1 md:px-2 outline-none text-gray-500">
                            </fieldset>
                            <div>
                                <input type="hidden" name="id" value="{{ $coursecategory->id }}">
                            </div>
                            <div>
                                <label for="title">Title:</label>
                                <input type="text" id="title" name="title" value="{{ $coursecategory->title }}"
                                    required>
                            </div>
                            <div>
                                <label for="description">Description:</label>
                                <input type="text" id="description" name="description"
                                    value="{{ $coursecategory->description }}" required>
                            </div>
                            <div>
                            </div>
                            <select name="parent_id">
                                <option value="0">بدون والد</option>
                                @foreach ($categories as $cat)
                                    <option value="{{ $cat->id }}" @if ($cat->id == $coursecategory->parent_id) selected @endif>
                                        {{ $cat->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="show_in_home">Showhome:</label>
                            <input type="checkbox" name="homes" value="1"
                                @if ($coursecategory->show_in_home) {{ 'checked' }} @endif>
                        </div>

                        <button type="submit"
                            class="active:bg-[#0080e5] mt-2 w-full bg-[#03A9F4] text-white py-3 rounded-md hover:bg-blue-700 transition duration-200 font-medium">
                            ارسال اطلاعات
                        </button>
                    </div>
                </div>
                </fieldset>
        </form> --}}

         <div class="w-full h-full pb-10">
        <h2 class="text-3xl text-center font-bold py-10 text-[#425A8B]">ویرایش {{ $coursecategory->title }}</h2>
        <div class="lg:w-2/3 w-full mx-auto border border-[#D5DFE4] rounded-[10px] text-[#425A8B] p-5 bg-white">
            <form action="{{ route('coursecategory.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $coursecategory->id }}">
                <div class="w-full grid grid-cols-1 lg:grid-cols-2 gap-5">
                    <div class="w-full flex flex-col">
                        <label for="catTitle" class="mb-2 flex flex-row items-center">
                            <span>
                                عنوان دسته بندی:
                                <span class="text-rose-500">*</span>
                            </span>
                        </label>
                        <input type="text" class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4]"
                            name="title" id="catTitle" placeholder="نام دسته را وارد کنید" required value="{{ $coursecategory->title }}">
                    </div>
                    <div class="w-full flex flex-col">
                        <label for="image" class="mb-2">تصویر دسته بندی:</label>
                        <input type="file"
                            class="w-full outline-none pr-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4]" name="image"
                            id="image">
                    </div>
    
                    <div class="w-full flex flex-col">
                        <label for="parent_id">دسته بندی :</label>
                        <select name="parent_id" id="parent_id" class="w-full bg-[#F9F9F9] py-3 pr-5 rounded-[10px]">
                            <option value="0">بدون والد</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" @if ($category->id == $coursecategory->parent_id) selected @endif>{{ $category->title }}</option>
                            @endforeach
                        </select>
                    </div>
    
                    <div class="w-full flex flex-row items-center gap-5">
                        <label for="image" class="mb-2">نمایش در خانه</label>
                        <input type="checkbox"
                            class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4]" name="homes"
                            value="1" @if ($coursecategory->show_in_home) {{ 'checked' }} @endif>
                    </div>

                    <div class="w-full flex flex-col lg:col-span-2">
                        <label for="cat_desc" class="mb-2">توضیحات دسته بندی:</label>
                        <textarea class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-[12px] focus:bg-[#f1f1f4]"
                            placeholder="توضیحات" name="description" id="cat_desc">{{ $coursecategory->description }}</textarea>
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
