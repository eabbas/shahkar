<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @extends('admin.app.dashboard')
    @section('content')
        <form action="{{ route('coursecategory.update') }}" enctype='multipart/form-data' method="POST">
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
        </form>
    @endsection
</body>

</html>
