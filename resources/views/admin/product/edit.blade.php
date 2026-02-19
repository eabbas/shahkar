<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>edit product</title>
    <style>
        :root {
            <?php
            foreach ($settings as $setting) {
                echo '--color-' . $setting->meta_key . ': ' . $setting->meta_value . ';';
            }
            ?>
        }
    </style>
</head>

<body>
    @extends('admin.app.dashboard')
    @section('content')
        <div class="w-full h-full pb-10">
            <h2 class="text-3xl text-center font-bold py-5 text-[#425A8B]">فرم ویرایش محصول</h2>
            <div class="w-full mx-auto border border-[#D5DFE4] rounded-[10px] text-[#425A8B] p-5 bg-white">
                <form action="{{ route('product-update') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{ $product['id'] }}">
                    <div class="flex flex-col md:flex-row gap-3 md:gap-5">
                        <div class="w-2/3">
                            <div class="w-full flex flex-col">
                                <label for="title" class="mb-2 flex flex-row items-center">
                                    <span>نام محصول:</span>
                                    <span class="text-rose-500">*</span>
                                </label>
                                <input type="text"
                                    class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4]" name="title"
                                    id="title" value="{{ $product['title'] }}" required>
                            </div>
                            <div class="w-full flex flex-col mt-5">
                                <label for="description" class="mb-2">توضیحات محصول:</label>
                                <textarea name="description" class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4]" rows="4"
                                    id="description">{{ $product['description'] }}</textarea>
                            </div>
                            <div class="w-full flex flex-col mt-3 lg:mt-5">
                                <label for="summary" class="mb-2">خلاصه محصول:</label>
                                <input type="text"
                                    class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4]"
                                    value="{{ $product['summary'] }}" name="summary" id="summary">
                            </div>
                            <div class="flex flex-row justify-between items-center gap-3 lg:gap-5 mt-3 lg:mt-5">
                                <div class="w-full md:w-1/2 flex flex-col gap-3">
                                    <label for="category_id">دسته بندی :</label>
                                    <select name="category_id" id="categoroy_id"
                                        class="w-full bg-[#F9F9F9] py-3 pr-5 rounded-[10px]">
                                        {{-- <option value="0">بدون والد</option> --}}
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                @if ($product['category']['id'] == $category['id']) selected @endif>{{ $category->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="md:w-1/2 flex flex-col">
                                    <label for="brand" class="mb-2"> برند محصول :</label>
                                    <input type="text"
                                        class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4]"
                                        value="{{ $product['brand'] }}" name="brand" id="brand">
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="w-full flex flex-col items-center gap-5">
                                    <div class="">
                                        @foreach ($product->attributes as $attribute)
                                            @if ($attribute['attribute_key'] == 'اندازه')
                                                <div
                                                    class="flex flex-row justify-between items-end gap-3 lg:gap-5 mt-3 md:mt-5">
                                                    <div class="w-full flex flex-col">
                                                        <label class="mb-2">اندازه محصول :</label>
                                                        <input type="text"
                                                            class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4]"
                                                            value="{{ $attribute['attribute_value'] }}"
                                                            name="proAttr[اندازه][]">
                                                    </div>
                                                    <div class="flex items-end">
                                                        <button type="button"
                                                            class="p-3 text-sm rounded-md bg-rose-500 hover:bg-rose-600 text-white cursor-pointer"
                                                            onclick="remove(this)">حذف</button>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                    <button type="button" onclick="add(this, 'size')"
                                        class="p-2 text-sm rounded-md bg-[#1B84FF] hover:bg-[#056EE9] text-white cursor-pointer">
                                        افزودن اندازه +
                                    </button>
                                </div>
                                <div class="w-full flex flex-col items-center gap-5">
                                    <div class="">
                                        @foreach ($product->attributes as $attribute)
                                            @if ($attribute['attribute_key'] == 'جنس')
                                                <div
                                                    class="flex flex-row justify-between items-end gap-3 lg:gap-5 mt-3 md:mt-5">
                                                    <div class="w-full flex flex-col">
                                                        <label class="mb-2">جنس محصول :</label>
                                                        <input type="text"
                                                            class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4]"
                                                            value="{{ $attribute['attribute_value'] }}"
                                                            name="proAttr[جنس][]">
                                                    </div>
                                                    <div class="flex items-end">
                                                        <button type="button"
                                                            class="p-3 text-sm rounded-md bg-rose-500 hover:bg-rose-600 text-white cursor-pointer"
                                                            onclick="remove(this)">حذف</button>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                    <button type="button" onclick="add(this, 'material')"
                                        class="p-2 text-sm rounded-md bg-[#1B84FF] hover:bg-[#056EE9] text-white cursor-pointer">
                                        افزودن جنس +
                                    </button>
                                </div>
                            </div>

                        </div>
                        <div class="w-1/3">

                            <div class="w-full md:w-1/2 flex flex-row items-center gap-3">
                                <label for="is_in_home">نمایش در خانه :</label>
                                <input type="checkbox" value="1" name="is_in_home" id="is_in_home"
                                    @if ($product['is_in_home']) checked @endif>
                            </div>
                            <div class="flex flex-col mt-3 lg:mt-5">
                                <label class="mb-2"> تعداد :</label>
                                <div class="flex">
                                    <div class="bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4] flex flex-row items-center">
                                        <button type="button"
                                            class="inline-block size-7 rounded-lg bg-[#1B84FF] hover:bg-[#056EE9] cursor-pointer text-white"
                                            onclick="calculate('+')">+</button>
                                        <input type="number" min="1" value="{{ $product['price']['quantity'] }}"
                                            class="outline-none w-14 text-center text-xs" name="quantity" id="quantity"
                                            dir="ltr">
                                        <button type="button"
                                            class="inline-block size-7 rounded-lg bg-[#1B84FF] hover:bg-[#056EE9] cursor-pointer text-white"
                                            onclick="calculate('-')">-</button>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full mt-3 lg:mt-5 flex flex-col">
                                <label for="mainImage" class="mb-2">عکس اصلی:</label>
                                <input type="file"
                                    class="w-full outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4]"
                                    name="mainImage" id="mainImage">
                            </div>
                            <div class="w-full mt-3 lg:mt-5 flex flex-col">
                                <label for="gallery" class="mb-2">گالری تصاویر :</label>
                                <input type="file"
                                    class="w-full outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4]"
                                    name="gallery[]" id="gallery" multiple>
                            </div>
                            <div class="w-full flex flex-col gap-3 md:gap-5 mt-3 lg:mt-5">
                                <div class="w-full flex flex-col gap-3">
                                    <label for="price"> قیمت اصلی :
                                        <span class="text-rose-500">*</span>
                                    </label>
                                    <input type="number"
                                        class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4]"
                                        name="price" id="price" value="{{ $product['price']['price'] }}" required>
                                </div>
                                <div class="w-full flex flex-col gap-3">
                                    <label for="discount"> قیمت ویژه :</label>
                                    <input type="number"
                                        class="outline-none pr-5 py-3 bg-[#F9F9F9] rounded-xl focus:bg-[#f1f1f4]"
                                        name="discount" id="discount" value="{{ $product['price']['discount'] }}">
                                </div>

                            </div>
                            <div class="mt-5 text-center">
                                <button type="submit"
                                    class="py-3 px-10 rounded-[10px] bg-[#1B84FF] hover:bg-[#056EE9] text-white cursor-pointer">ثبت</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <script src="{{ url('assets/js/attribute.js') }}"></script>
    @endsection
</body>

</html>
