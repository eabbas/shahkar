<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>color settings</title>
</head>

<body>
    @extends('admin.app.dashboard')
    @section('content')
        <div
            class="w-full h-svh bg-[url('https://keenthemes.com/static/metronic/tailwind/dist/assets/media/images/2600x1200/bg-10.png')] bg-cover bg-no-repeat">
            <h2 class="text-3xl text-center font-bold py-10 text-[#425A8B]">فرم رنگ های وبسایت</h2>
            <div class="w-2/3 mx-auto border border-[#D5DFE4] rounded-[10px] text-[#425A8B] p-5 bg-white">

                <form action="{{ route('settings.colors.upsertColor') }}" method="post">
                    @csrf
                    <div class="grid grid-cols-3 gap-5">


                        <div class="w-full flex flex-row items-center justify-between gap-2">
                            <label for="--color-primary">
                                رنگ اصلی:
                            </label>
                            <input type="color" value="{{ $settings[0]->meta_value ?? '#FD9636' }}"
                                class="size-10 outline-none" name="--color-primary" id="--color-primary">
                        </div>


                        <div class="w-full flex flex-row items-center justify-between gap-2">
                            <label for="--color-subheader-btn">
                                رنگ دکمه های ساب هدر:
                            </label>
                            <input type="color" value="{{ $settings[1]->meta_value ?? '#FD9636' }}"
                                class="size-10 outline-none" name="--color-subheader-btn" id="--color-subheader-btn">
                        </div>

                        <div class="w-full flex flex-row items-center justify-between gap-2">
                            <label for="--color-text">
                                رنگ متن ها:
                            </label>
                            <input type="color" value="{{ $settings[2]->meta_value ?? '#425A8B' }}"
                                class="size-10 outline-none" name="--color-text" id="--color-text">
                        </div>

                        <div class="w-full flex flex-row items-center justify-between gap-2">
                            <label for="--color-secondary-text">
                                رنگ متن های فرعی:
                            </label>
                            <input type="color" value="{{ $settings[3]->meta_value ?? '#8C9EC5' }}"
                                class="size-10 outline-none" name="--color-secondary-text" id="--color-secondary-text">
                        </div>

                        <div class="w-full flex flex-row items-center justify-between gap-2">
                            <label for="--color-primary-text">
                                رنگ متن های اصلی:
                            </label>
                            <input type="color" value="{{ $settings[4]->meta_value ?? '#ffffff' }}"
                                class="size-10 outline-none" name="--color-primary-text" id="--color-primary-text">
                        </div>

                        <div class="w-full flex flex-row items-center justify-between gap-2">
                            <label for="--color-bg-card-btn">
                                رنگ دکمه کارت های محصول:
                            </label>
                            <input type="color" value="{{ $settings[5]->meta_value ?? '#425A8B' }}"
                                class="size-10 outline-none" name="--color-bg-card-btn" id="--color-bg-card-btn">
                        </div>

                        <div class="w-full flex flex-row items-center justify-between gap-2">
                            <label for="--color-bg-hover-btn">
                                رنگ هاور دکمه:
                            </label>
                            <input type="color" value="{{ $settings[6]->meta_value ?? '#425A8B' }}"
                                class="size-10 outline-none" name="--color-bg-hover-btn" id="--color-bg-hover-btn">
                        </div>


                        <div class="w-full flex flex-row items-center justify-between gap-2">
                            <label for="--color-primary-btn">
                                رنگ دکمه های اصلی:
                            </label>
                            <input type="color" value="{{ $settings[7]->meta_value ?? '#F0F3F8' }}"
                                class="size-10 outline-none" name="--color-primary-btn" id="--color-primary-btn">
                        </div>

                        <div class="w-full flex flex-row items-center justify-between gap-2">
                            <label for="--color-primary-btn-hover">
                                رنگ هاور دکمه های اصلی:
                            </label>
                            <input type="color" value="{{ $settings[8]->meta_value ?? '#F0F3F8' }}"
                                class="size-10 outline-none" name="--color-primary-btn-hover"
                                id="--color-primary-btn-hover">
                        </div>

                        <div class="w-full flex flex-row items-center justify-between gap-2">
                            <label for="--color-bg-contact-section">
                                رنگ زمینه سکشن ارتباط با ما:
                            </label>
                            <input type="color" value="{{ $settings[9]->meta_value ?? '#425A8B' }}"
                                class="size-10 outline-none" name="--color-bg-contact-section"
                                id="--color-bg-contact-section">
                        </div>

                        <div class="w-full flex flex-row items-center justify-between gap-2">
                            <label for="--color-btn-contact">
                                رنگ دکمه سکشن ارتباط با ما:
                            </label>
                            <input type="color" value="{{ $settings[10]->meta_value ?? '#425A8B' }}"
                                class="size-10 outline-none" name="--color-btn-contact" id="--color-btn-contact">
                        </div>

                        <div class="w-full flex flex-row items-center justify-between gap-2">
                            <label for="--color-btn-contact-hover">
                                رنگ هاور دکمه سکشن ارتباط با ما:
                            </label>
                            <input type="color" value="{{ $settings[11]->meta_value ?? '#334a76' }}"
                                class="size-10 outline-none" name="--color-btn-contact-hover"
                                id="--color-btn-contact-hover">
                        </div>

                        <div class="w-full flex flex-row items-center justify-between gap-2">
                            <label for="--color-border">
                                رنگ بوردر ها:
                            </label>
                            <input type="color" value="{{ $settings[12]->meta_value ?? '#D5DFE4' }}"
                                class="size-10 outline-none" name="--color-border" id="--color-border">
                        </div>

                        <div class="w-full flex flex-row items-center justify-between gap-2">
                            <label for="--color-discount-bg">
                                رنگ پس زمینه تخفیف ها:
                            </label>
                            <input type="color" value="{{ $settings[13]->meta_value ?? '#D36B0B' }}"
                                class="size-10 outline-none" name="--color-discount-bg" id="--color-discount-bg">
                        </div>

                        <div class="w-full flex flex-row items-center justify-between gap-2">
                            <label for="--color-fill">
                                رنگ آیکون ها:
                            </label>
                            <input type="color" value="{{ $settings[14]->meta_value ?? '#425A8B' }}"
                                class="size-10 outline-none" name="--color-fill" id="--color-fill">
                        </div>

                        <div class="w-full flex flex-row items-center justify-between gap-2">
                            <label for="--color-secondary">
                                رنگ ثانویه :
                            </label>
                            <input type="color" value="{{ $settings[15]->meta_value ?? '#0dcaf0' }}"
                                class="size-10 outline-none" name="--color-secondary" id="--color-secondary">
                        </div>

                        <div class="w-full flex flex-row items-center justify-between gap-2">
                            <label for="--color-success-bg">
                                رنگ پس زمینه عملکرد ها:
                            </label>
                            <input type="color" value="{{ $settings[16]->meta_value ?? '#00a049' }}"
                                class="size-10 outline-none" name="--color-success-bg" id="--color-success-bg">
                        </div>

                        <div class="w-full flex flex-row items-center justify-between gap-2">
                            <label for="--color-danger">
                                رنگ اعلان های اضطراری:
                            </label>
                            <input type="color" value="{{ $settings[17]->meta_value ?? '#e6123d' }}"
                                class="size-10 outline-none" name="--color-danger" id="--color-danger">
                        </div>


                        <div class="w-full flex flex-row items-center justify-between gap-2">
                            <label for="--color-info">
                                رنگ آیکون اینفو:
                            </label>
                            <input type="color" value="{{ $settings[18]->meta_value ?? '#1028ff' }}"
                                class="size-10 outline-none" name="--color-info" id="--color-info">
                        </div>


                        <div class="w-full flex flex-row items-center justify-between gap-2">
                            <label for="--color-secondary-bg">
                                رنگ پس زمینه ثانویه:
                            </label>
                            <input type="color" value="{{ $settings[19]->meta_value ?? '#efeff0' }}"
                                class="size-10 outline-none" name="--color-secondary-bg" id="--color-secondary-bg">
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
</body>

</html>
