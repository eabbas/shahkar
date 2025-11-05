<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}" type="text/css">
    <style>
        :root {
            <?php
            foreach ($settings as $setting) {
                echo "--color-" . $setting->meta_key . ": " . $setting->meta_value . ";";
            }
            ?>
        }
    </style>
    <title>search</title>
</head>

<body>

    <header class="2xl:container 2xl:px-4 mx-auto w-full border-b border-[var(--color-border)] py-3">

        <!-- desktop header -->

        <div class="2xl:w-full w-[98%] mx-auto lg:flex xl:flex-row hidden lg:flex-col items-center gap-5">
            <div class="xl:w-8/12 w-full flex flex-row justify-center gap-5 xl:justify-start items-center">
                <!-- logo -->
                <div class="w-1/12 h-[33px]">
                    <a href="#" class="inline-block size-full">
                        <img src="https://elango.steelthemes.com/ecom/el2/wp-content/plugins/ecom-addons/assets/image/logo.svg"
                            class="size-full" alt="logo">
                    </a>
                </div>
                <!-- logo -->

                <div class="2xl:w-5/12 xl:w-6/12 ">
                    <form action="" method=""
                        class="border border-[var(--color-border)] rounded-full min-w-[395px] w-[395px] p-1 text-sm flex flex-row">
                        <select name="category" class="min-w-[150px] text-[var(--color-text)]" id="">
                            <option value="all">
                                همه دسته ها
                            </option>
                            <option value="1">
                                دسته 1
                            </option>
                            <option value="2">
                                دسته 2
                            </option>
                            <option value="3">
                                دسته 3
                            </option>
                        </select>
                        <input type="text"
                            class="w-full border-r border-[var(--color-border)] pr-1.5 mr-1.5 text-[var(--color-text)] text-sm py-1 outline-none rounded-l-full"
                            placeholder="جست و جوی دسته بندی، محصول ..." name="" id="">
                    </form>
                </div>

                <!-- chocolate menu -->

                <div class="size-9 p-2 hidden 2xl:hidden lg:flex flex-col gap-1 bg-[var(--color-primary-btn)] rounded-sm cursor-pointer"
                    id="chocIcon">
                    <div class="flex flex-row justify-between items-center">
                        <span class="size-1 bg-[var(--color-text)] rounded-full"></span>
                        <span class="size-1 bg-[var(--color-text)] rounded-full"></span>
                        <span class="size-1 bg-[var(--color-text)] rounded-full"></span>
                    </div>
                    <div class="flex flex-row justify-between items-center">
                        <span class="size-1 bg-[var(--color-text)] rounded-full"></span>
                        <span class="size-1 bg-[var(--color-text)] rounded-full"></span>
                        <span class="size-1 bg-[var(--color-text)] rounded-full"></span>
                    </div>
                    <div class="flex flex-row justify-between items-center">
                        <span class="size-1 bg-[var(--color-text)] rounded-full"></span>
                        <span class="size-1 bg-[var(--color-text)] rounded-full"></span>
                        <span class="size-1 bg-[var(--color-text)] rounded-full"></span>
                    </div>
                </div>



                <!-- chocolate menu -->

                <!-- 2xl menu -->
                <ul class="w-6/12 hidden 2xl:flex flex-row justify-start items-center gap-4 text-[var(--color-text)]">
                    <li>
                        <a href="#" class="font-semibold text-sm gap-1 transition-all duration-300 py-4 menuLink">
                            خانه
                        </a>
                    </li>
                    <li class="menuItemParent">
                        <a href="#"
                            class="font-semibold text-sm flex flex-row items-center gap-1 transition-all duration-300 py-4 menuLink">
                            <span>
                                دسته بندی
                            </span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-3" viewBox="0 0 448 512">
                                <path fill="var(--color-fill)"
                                    d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z" />
                            </svg>
                        </a>
                        <div
                            class="absolute w-full py-5 max-h-0 border border-[var(--color-border)] bg-white opacity-0 mt-8 right-0 invisible z-[9999] transition-all duration-500">
                            <div class="w-11/12 mx-auto flex flex-row items-start gap-10">
                                <div class="w-1/5 flex flex-col justify-start gap-4">
                                    <button
                                        class="block rounded-[10px] text-[var(--color-text)] py-4 px-9 bg-[var(--color-primary-btn)] transitin-all duration-300 hover:bg-[var(--color-bg-hover-btn)] hover:text-[var(--color-primary-text)] cursor-pointer activeSubMenuCat subMenuCat">عنوان
                                        تستی</button>
                                    <button
                                        class="block rounded-[10px] text-[var(--color-text)] py-4 px-9 bg-[var(--color-primary-btn)] transitin-all duration-300 hover:bg-[var(--color-bg-hover-btn)] hover:text-[var(--color-primary-text)] cursor-pointer subMenuCat">عنوان
                                        تستی</button>
                                    <button
                                        class="block rounded-[10px] text-[var(--color-text)] py-4 px-9 bg-[var(--color-primary-btn)] transitin-all duration-300 hover:bg-[var(--color-bg-hover-btn)] hover:text-[var(--color-primary-text)] cursor-pointer subMenuCat">عنوان
                                        تستی</button>
                                    <button
                                        class="block rounded-[10px] text-[var(--color-text)] py-4 px-9 bg-[var(--color-primary-btn)] transitin-all duration-300 hover:bg-[var(--color-bg-hover-btn)] hover:text-[var(--color-primary-text)] cursor-pointer subMenuCat">عنوان
                                        تستی</button>
                                    <button
                                        class="block rounded-[10px] text-[var(--color-text)] py-4 px-9 bg-[var(--color-primary-btn)] transitin-all duration-300 hover:bg-[var(--color-bg-hover-btn)] hover:text-[var(--color-primary-text)] cursor-pointer subMenuCat">عنوان
                                        تستی</button>
                                </div>
                                <div class="w-4/5">
                                    <!-- contents -->
                                    <div class="grid grid-cols-4 gap-4 max-h-[575px] overflow-y-auto">
                                        <div class="p-4 border border-[var(--color-border)] rounded-[10px]">
                                            <a href="#" class="block mb-1">
                                                <img src="https://elango.steelthemes.com/ecom/el2/wp-content/uploads/2025/07/category-1.png"
                                                    class="w-[85px] h-20 mx-auto" alt="product">
                                                <span class="inline-block w-full text-center pt-3">محصول تستی</span>
                                            </a>
                                            <span
                                                class="block text-center text-[14px] text-[var(--color-secondary-text)]">تست
                                                آیتم</span>
                                            <span
                                                class="block text-center text-[12px] text-[var(--color-secondary-text)]">10
                                                آیتم</span>
                                        </div>
                                        <div class="p-4 border border-[var(--color-border)] rounded-[10px]">
                                            <a href="#" class="block mb-1">
                                                <img src="https://elango.steelthemes.com/ecom/el2/wp-content/uploads/2025/07/category-1.png"
                                                    class="w-[85px] h-20 mx-auto" alt="product">
                                                <span class="inline-block w-full text-center pt-3">محصول تستی</span>
                                            </a>
                                            <span
                                                class="block text-center text-[14px] text-[var(--color-secondary-text)]">تست
                                                آیتم</span>
                                            <span
                                                class="block text-center text-[12px] text-[var(--color-secondary-text)]">10
                                                آیتم</span>
                                        </div>
                                        <div class="p-4 border border-[var(--color-border)] rounded-[10px]">
                                            <a href="#" class="block mb-1">
                                                <img src="https://elango.steelthemes.com/ecom/el2/wp-content/uploads/2025/07/category-1.png"
                                                    class="w-[85px] h-20 mx-auto" alt="product">
                                                <span class="inline-block w-full text-center pt-3">محصول تستی</span>
                                            </a>
                                            <span
                                                class="block text-center text-[14px] text-[var(--color-secondary-text)]">تست
                                                آیتم</span>
                                            <span
                                                class="block text-center text-[12px] text-[var(--color-secondary-text)]">10
                                                آیتم</span>
                                        </div>
                                        <div class="p-4 border border-[var(--color-border)] rounded-[10px]">
                                            <a href="#" class="block mb-1">
                                                <img src="https://elango.steelthemes.com/ecom/el2/wp-content/uploads/2025/07/category-1.png"
                                                    class="w-[85px] h-20 mx-auto" alt="product">
                                                <span class="inline-block w-full text-center pt-3">محصول تستی</span>
                                            </a>
                                            <span
                                                class="block text-center text-[14px] text-[var(--color-secondary-text)]">تست
                                                آیتم</span>
                                            <span
                                                class="block text-center text-[12px] text-[var(--color-secondary-text)]">10
                                                آیتم</span>
                                        </div>
                                        <div class="p-4 border border-[var(--color-border)] rounded-[10px]">
                                            <a href="#" class="block mb-1">
                                                <img src="https://elango.steelthemes.com/ecom/el2/wp-content/uploads/2025/07/category-1.png"
                                                    class="w-[85px] h-20 mx-auto" alt="product">
                                                <span class="inline-block w-full text-center pt-3">محصول تستی</span>
                                            </a>
                                            <span
                                                class="block text-center text-[14px] text-[var(--color-secondary-text)]">تست
                                                آیتم</span>
                                            <span
                                                class="block text-center text-[12px] text-[var(--color-secondary-text)]">10
                                                آیتم</span>
                                        </div>
                                        <div class="p-4 border border-[var(--color-border)] rounded-[10px]">
                                            <a href="#" class="block mb-1">
                                                <img src="https://elango.steelthemes.com/ecom/el2/wp-content/uploads/2025/07/category-1.png"
                                                    class="w-[85px] h-20 mx-auto" alt="product">
                                                <span class="inline-block w-full text-center pt-3">محصول تستی</span>
                                            </a>
                                            <span
                                                class="block text-center text-[14px] text-[var(--color-secondary-text)]">تست
                                                آیتم</span>
                                            <span
                                                class="block text-center text-[12px] text-[var(--color-secondary-text)]">10
                                                آیتم</span>
                                        </div>
                                        <div class="p-4 border border-[var(--color-border)] rounded-[10px]">
                                            <a href="#" class="block mb-1">
                                                <img src="https://elango.steelthemes.com/ecom/el2/wp-content/uploads/2025/07/category-1.png"
                                                    class="w-[85px] h-20 mx-auto" alt="product">
                                                <span class="inline-block w-full text-center pt-3">محصول تستی</span>
                                            </a>
                                            <span
                                                class="block text-center text-[14px] text-[var(--color-secondary-text)]">تست
                                                آیتم</span>
                                            <span
                                                class="block text-center text-[12px] text-[var(--color-secondary-text)]">10
                                                آیتم</span>
                                        </div>
                                        <div class="p-4 border border-[var(--color-border)] rounded-[10px]">
                                            <a href="#" class="block mb-1">
                                                <img src="https://elango.steelthemes.com/ecom/el2/wp-content/uploads/2025/07/category-1.png"
                                                    class="w-[85px] h-20 mx-auto" alt="product">
                                                <span class="inline-block w-full text-center pt-3">محصول تستی</span>
                                            </a>
                                            <span
                                                class="block text-center text-[14px] text-[var(--color-secondary-text)]">تست
                                                آیتم</span>
                                            <span
                                                class="block text-center text-[12px] text-[var(--color-secondary-text)]">10
                                                آیتم</span>
                                        </div>



                                    </div>
                                    <!-- contents -->
                                </div>
                            </div>
                        </div>
                    </li>


                    <li class="relative menuItemParent">
                        <a href="#"
                            class="text-[var(--color-text)] font-semibold text-sm flex flex-row items-center gap-1 transition-all duration-300 py-4 menuLink">
                            <span>
                                فروشگاه
                            </span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-3" viewBox="0 0 448 512">
                                <path fill="var(--color-fill)"
                                    d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z" />
                            </svg>
                        </a>


                        <ul
                            class="absolute min-w-[250px] py-4 px-6 border border-[var(--color-border)] bg-white top-full opacity-0 mt-8 right-0 invisible z-[9999] transition-all duration-500 menuItemChild">
                            <li>
                                <a href="#"
                                    class="block py-2.5 text-sm font-semibold transitin-all duration-300 hover:text-[var(--color-primary)]">عنوان
                                    تستی</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block py-2.5 text-sm font-semibold transitin-all duration-300 hover:text-[var(--color-primary)]">عنوان
                                    تستی</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block py-2.5 text-sm font-semibold transitin-all duration-300 hover:text-[var(--color-primary)]">عنوان
                                    تستی</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block py-2.5 text-sm font-semibold transitin-all duration-300 hover:text-[var(--color-primary)]">عنوان
                                    تستی</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block py-2.5 text-sm font-semibold transitin-all duration-300 hover:text-[var(--color-primary)]">عنوان
                                    تستی</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block py-2.5 text-sm font-semibold transitin-all duration-300 hover:text-[var(--color-primary)]">عنوان
                                    تستی</a>
                            </li>
                        </ul>


                    </li>


                    <li class="relative menuItemParent">
                        <a href="#"
                            class="text-[var(--color-text)] font-semibold text-sm flex flex-row items-center gap-1 transition-all duration-300 py-4 menuLink">
                            <span>
                                دست فروش
                            </span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-3" viewBox="0 0 448 512">
                                <path fill="var(--color-fill)"
                                    d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z" />
                            </svg>
                        </a>
                        <ul
                            class="absolute min-w-[250px] py-4 px-6 border border-[var(--color-border)] bg-white top-full opacity-0 mt-8 right-0 invisible z-[9999] transition-all duration-500 menuItemChild">
                            <li>
                                <a href="#"
                                    class="block py-2.5 text-sm font-semibold transitin-all duration-300 hover:text-[var(--color-primary)]">عنوان
                                    تستی</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block py-2.5 text-sm font-semibold transitin-all duration-300 hover:text-[var(--color-primary)]">عنوان
                                    تستی</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block py-2.5 text-sm font-semibold transitin-all duration-300 hover:text-[var(--color-primary)]">عنوان
                                    تستی</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#"
                            class="text-[var(--color-text)] font-semibold text-sm gap-1 transition-all duration-300 py-4 menuLink">

                            ارتباط با ما

                        </a>
                    </li>

                </ul>
                <!-- 2xl menu -->


            </div>
            <div class="xl:w-4/12 w-full">
                <div class="flex flex-row md:justify-center xl:justify-end items-center gap-5">
                    <a href="#" class="flex items-center gap-5">
                        <div class="size-6">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-full" viewBox="0 0 448 512">
                                <path fill="var(--color-fill)"
                                    d="M320 128a96 96 0 1 0 -192 0 96 96 0 1 0 192 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM32 480H416c-1.2-79.7-66.2-144-146.3-144H178.3c-80 0-145 64.3-146.3 144zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z" />
                            </svg>
                        </div>
                        <div>
                            <span class="block text-[var(--color-text)] leading-[22px] font-medium text-sm">اکانت
                                من</span>
                            <span class="block text-[var(--color-text)] leading-[22px] text-xs">با احترام وارد
                                شوید</span>
                        </div>
                    </a>
                    <a href="#" class="inline-block w-8 h-6 relative">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-6" viewBox="0 0 512 512">
                            <path fill="var(--color-fill)"
                                d="M225.8 468.2l-2.5-2.3L48.1 303.2C17.4 274.7 0 234.7 0 192.8v-3.3c0-70.4 50-130.8 119.2-144C158.6 37.9 198.9 47 231 69.6c9 6.4 17.4 13.8 25 22.3c4.2-4.8 8.7-9.2 13.5-13.3c3.7-3.2 7.5-6.2 11.5-9c0 0 0 0 0 0C313.1 47 353.4 37.9 392.8 45.4C462 58.6 512 119.1 512 189.5v3.3c0 41.9-17.4 81.9-48.1 110.4L288.7 465.9l-2.5 2.3c-8.2 7.6-19 11.9-30.2 11.9s-22-4.2-30.2-11.9zM239.1 145c-.4-.3-.7-.7-1-1.1l-17.8-20c0 0-.1-.1-.1-.1c0 0 0 0 0 0c-23.1-25.9-58-37.7-92-31.2C81.6 101.5 48 142.1 48 189.5v3.3c0 28.5 11.9 55.8 32.8 75.2L256 430.7 431.2 268c20.9-19.4 32.8-46.7 32.8-75.2v-3.3c0-47.3-33.6-88-80.1-96.9c-34-6.5-69 5.4-92 31.2c0 0 0 0-.1 .1s0 0-.1 .1l-17.8 20c-.3 .4-.7 .7-1 1.1c-4.5 4.5-10.6 7-16.9 7s-12.4-2.5-16.9-7z" />
                        </svg>
                        <span
                            class="flex justify-center items-center -top-2.5 -left-2.5 absolute size-5 bg-[var(--color-primary)] rounded-full text-[var(--color-primary-text)] text-sm">0</span>
                    </a>
                    <a href="#" class="inline-block w-8 h-6 relative">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-6" viewBox="0 0 448 512">
                            <path fill="var(--color-fill)"
                                d="M103 497c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-55-55L424 408c13.3 0 24-10.7 24-24s-10.7-24-24-24L81.9 360l55-55c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0L7 367c-9.4 9.4-9.4 24.6 0 33.9l96 96zM441 145c9.4-9.4 9.4-24.6 0-33.9L345 15c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l55 55L24 104c-13.3 0-24 10.7-24 24s10.7 24 24 24l342.1 0-55 55c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l96-96z" />
                        </svg>
                        <span
                            class="flex justify-center items-center -top-2.5 -left-2.5 absolute size-5 bg-[var(--color-primary)] rounded-full text-[var(--color-primary-text)] text-sm">0</span>
                    </a>
                    <a href="#" class="inline-block w-8 h-6 relative">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-6 rotate-y-180" viewBox="0 0 576 512">
                            <path fill="var(--color-fill)"
                                d="M24 0C10.7 0 0 10.7 0 24S10.7 48 24 48H69.5c3.8 0 7.1 2.7 7.9 6.5l51.6 271c6.5 34 36.2 58.5 70.7 58.5H488c13.3 0 24-10.7 24-24s-10.7-24-24-24H199.7c-11.5 0-21.4-8.2-23.6-19.5L170.7 288H459.2c32.6 0 61.1-21.8 69.5-53.3l41-152.3C576.6 57 557.4 32 531.1 32h-411C111 12.8 91.6 0 69.5 0H24zM131.1 80H520.7L482.4 222.2c-2.8 10.5-12.3 17.8-23.2 17.8H161.6L131.1 80zM176 512a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm336-48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0z" />
                        </svg>
                        <span
                            class="flex justify-center items-center -top-2.5 -left-2.5 absolute size-5 bg-[var(--color-primary)] rounded-full text-[var(--color-primary-text)] text-sm">0</span>
                    </a>
                    <div
                        class="flex flex-row items-center gap-5 p-2 border border-[var(--color-border)] rounded-full cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 384 512">
                            <path fill="var(--color-fill)"
                                d="M336 192c0-79.5-64.5-144-144-144S48 112.5 48 192c0 12.4 4.5 31.6 15.3 57.2c10.5 24.8 25.4 52.2 42.5 79.9c28.5 46.2 61.5 90.8 86.2 122.6c24.8-31.8 57.8-76.4 86.2-122.6c17.1-27.7 32-55.1 42.5-79.9C331.5 223.6 336 204.4 336 192zm48 0c0 87.4-117 243-168.3 307.2c-12.3 15.3-35.1 15.3-47.4 0C117 435 0 279.4 0 192C0 86 86 0 192 0S384 86 384 192zm-160 0a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm-112 0a80 80 0 1 1 160 0 80 80 0 1 1 -160 0z" />
                        </svg>
                        <span class="text-sm text-[var(--color-text)]">
                            بناب
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- desktop header -->

        <!-- mobile header -->

        <div class="w-11/12 mx-auto lg:hidden flex flex-row justify-between items-center py-4">
            <!-- logo -->
            <div class="h-[33px]">
                <a href="#" class="inline-block size-full">
                    <img src="https://elango.steelthemes.com/ecom/el2/wp-content/plugins/ecom-addons/assets/image/logo.svg"
                        class="size-full" alt="logo">
                </a>
            </div>
            <!-- logo -->

            <div class="flex flex-row justify-end items-center gap-5">
                <a href="#" class="inline-block w-8 h-6 relative">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 512 512">
                        <path fill="var(--color-fill)"
                            d="M225.8 468.2l-2.5-2.3L48.1 303.2C17.4 274.7 0 234.7 0 192.8v-3.3c0-70.4 50-130.8 119.2-144C158.6 37.9 198.9 47 231 69.6c9 6.4 17.4 13.8 25 22.3c4.2-4.8 8.7-9.2 13.5-13.3c3.7-3.2 7.5-6.2 11.5-9c0 0 0 0 0 0C313.1 47 353.4 37.9 392.8 45.4C462 58.6 512 119.1 512 189.5v3.3c0 41.9-17.4 81.9-48.1 110.4L288.7 465.9l-2.5 2.3c-8.2 7.6-19 11.9-30.2 11.9s-22-4.2-30.2-11.9zM239.1 145c-.4-.3-.7-.7-1-1.1l-17.8-20c0 0-.1-.1-.1-.1c0 0 0 0 0 0c-23.1-25.9-58-37.7-92-31.2C81.6 101.5 48 142.1 48 189.5v3.3c0 28.5 11.9 55.8 32.8 75.2L256 430.7 431.2 268c20.9-19.4 32.8-46.7 32.8-75.2v-3.3c0-47.3-33.6-88-80.1-96.9c-34-6.5-69 5.4-92 31.2c0 0 0 0-.1 .1s0 0-.1 .1l-17.8 20c-.3 .4-.7 .7-1 1.1c-4.5 4.5-10.6 7-16.9 7s-12.4-2.5-16.9-7z" />
                    </svg>
                    <span
                        class="flex justify-center items-center -top-2 -left-2 absolute size-4 bg-[var(--color-primary)] rounded-full text-[var(--color-primary-text)] text-sm">0</span>
                </a>
                <a href="#" class="inline-block w-8 h-6 relative">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 448 512">
                        <path fill="var(--color-fill)"
                            d="M103 497c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-55-55L424 408c13.3 0 24-10.7 24-24s-10.7-24-24-24L81.9 360l55-55c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0L7 367c-9.4 9.4-9.4 24.6 0 33.9l96 96zM441 145c9.4-9.4 9.4-24.6 0-33.9L345 15c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l55 55L24 104c-13.3 0-24 10.7-24 24s10.7 24 24 24l342.1 0-55 55c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l96-96z" />
                    </svg>
                    <span
                        class="flex justify-center items-center -top-2 -left-2 absolute size-4 bg-[var(--color-primary)] rounded-full text-[var(--color-primary-text)] text-sm">0</span>
                </a>
                <!-- chocolate menu -->

                <div class="size-7 p-1 flex flex-col gap-1 bg-[var(--color-primary-btn)] rounded-sm cursor-pointer"
                    id="chocIconMobile">
                    <div class="flex flex-row justify-between items-center">
                        <span class="size-1 bg-[var(--color-text)] rounded-full"></span>
                        <span class="size-1 bg-[var(--color-text)] rounded-full"></span>
                        <span class="size-1 bg-[var(--color-text)] rounded-full"></span>
                    </div>
                    <div class="flex flex-row justify-between items-center">
                        <span class="size-1 bg-[var(--color-text)] rounded-full"></span>
                        <span class="size-1 bg-[var(--color-text)] rounded-full"></span>
                        <span class="size-1 bg-[var(--color-text)] rounded-full"></span>
                    </div>
                    <div class="flex flex-row justify-between items-center">
                        <span class="size-1 bg-[var(--color-text)] rounded-full"></span>
                        <span class="size-1 bg-[var(--color-text)] rounded-full"></span>
                        <span class="size-1 bg-[var(--color-text)] rounded-full"></span>
                    </div>
                </div>



                <!-- chocolate menu -->
            </div>
        </div>

        <!-- mobile header -->


        <!-- modal -->
        <div class="fixed z-[9999] w-full h-svh bg-black/70 top-0 -right-full transition-all duration-500"
            id="chocolateMenu">
            <div class="relative w-11/12 mx-auto mt-5 bg-white rounded-md h-[565px] p-7 opacity-0  transition-all duration-300 delay-600"
                id="boxC">
                <button
                    class="absolute size-10 rounded-full bg-[var(--color-primary-btn)] font-bold -top-3 -right-3 z-20 flex justify-center items-center cursor-pointer"
                    onclick="closeChocMenu()">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-7" viewBox="0 0 384 512">
                        <path fill="var(--color-fill)"
                            d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                    </svg>
                </button>
                <ul class="w-full h-[444px] overflow-y-auto">
                    <li class="my-1">
                        <a href="#"
                            class="inline-block w-full text-[var(--color-text)] font-semibold py-3 transition-all duration-300 px-3 rounded-lg hover:bg-[var(--color-primary-btn-hover)]">
                            خانه
                        </a>
                    </li>
                    <li class="my-1">
                        <div
                            class="flex flex-row justify-between items-center gap-1 transition-all duration-300 px-3 rounded-lg hover:bg-[var(--color-primary-btn-hover)]">
                            <a href="#" class="inline-block w-11/12 text-[var(--color-text)] font-semibold py-3 ">
                                دسته بندی
                            </a>
                            <div class="w-1/12 flex items-center justify-end subMenuActive">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5 transition-all duration-150"
                                    viewBox="0 0 448 512">
                                    <path fill="var(--color-fill)"
                                        d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z" />
                                </svg>
                            </div>
                        </div>
                        <div class="w-full max-h-0 overflow-hidden transition-all duration-500 mt-2 subItem">






                            <div class="w-full flex flex-col xl:flex-row items-start gap-10">
                                <div
                                    class="w-full xl:w-1/4 flex flex-row xl:flex-col justify-between gap-4 overflow-x-auto px-3 xl:px-0">
                                    <button
                                        class="block rounded-[10px] text-[var(--color-text)] py-4 px-9 bg-[var(--color-primary-btn)] transitin-all duration-300 hover:bg-[var(--color-bg-hover-btn)] hover:text-[var(--color-primary-text)] cursor-pointer activeSubMenuCat subMenuCat">عنوان
                                        تستی</button>
                                    <button
                                        class="block rounded-[10px] text-[var(--color-text)] py-4 px-9 bg-[var(--color-primary-btn)] transitin-all duration-300 hover:bg-[var(--color-bg-hover-btn)] hover:text-[var(--color-primary-text)] cursor-pointer subMenuCat">عنوان
                                        تستی</button>
                                    <button
                                        class="block rounded-[10px] text-[var(--color-text)] py-4 px-9 bg-[var(--color-primary-btn)] transitin-all duration-300 hover:bg-[var(--color-bg-hover-btn)] hover:text-[var(--color-primary-text)] cursor-pointer subMenuCat">عنوان
                                        تستی</button>
                                    <button
                                        class="block rounded-[10px] text-[var(--color-text)] py-4 px-9 bg-[var(--color-primary-btn)] transitin-all duration-300 hover:bg-[var(--color-bg-hover-btn)] hover:text-[var(--color-primary-text)] cursor-pointer subMenuCat">عنوان
                                        تستی</button>
                                    <button
                                        class="block rounded-[10px] text-[var(--color-text)] py-4 px-9 bg-[var(--color-primary-btn)] transitin-all duration-300 hover:bg-[var(--color-bg-hover-btn)] hover:text-[var(--color-primary-text)] cursor-pointer subMenuCat">عنوان
                                        تستی</button>
                                </div>
                                <div class="w-full xl:w-3/4 xl:overflow-y-auto">
                                    <!-- contents -->
                                    <div
                                        class="grid sm:grid-cols-2 grid-cols-1 gap-4 max-h-[575px] overflow-y-auto text-[var(--color-text)]">
                                        <div class="p-4 border border-[var(--color-border)] rounded-[10px]">
                                            <a href="#" class="block mb-1">
                                                <img src="https://elango.steelthemes.com/ecom/el2/wp-content/uploads/2025/07/category-1.png"
                                                    class="w-[85px] h-20 mx-auto" alt="product">
                                                <span class="inline-block w-full text-center pt-3">محصول
                                                    تستی</span>
                                            </a>
                                            <span
                                                class="block text-center text-[14px] text-[var(--color-secondary-text)]">تست
                                                آیتم</span>
                                            <span
                                                class="block text-center text-[12px] text-[var(--color-secondary-text)]">10
                                                آیتم</span>
                                        </div>
                                        <div class="p-4 border border-[var(--color-border)] rounded-[10px]">
                                            <a href="#" class="block mb-1">
                                                <img src="https://elango.steelthemes.com/ecom/el2/wp-content/uploads/2025/07/category-1.png"
                                                    class="w-[85px] h-20 mx-auto" alt="product">
                                                <span class="inline-block w-full text-center pt-3">محصول
                                                    تستی</span>
                                            </a>
                                            <span
                                                class="block text-center text-[14px] text-[var(--color-secondary-text)]">تست
                                                آیتم</span>
                                            <span
                                                class="block text-center text-[12px] text-[var(--color-secondary-text)]">10
                                                آیتم</span>
                                        </div>
                                        <div class="p-4 border border-[var(--color-border)] rounded-[10px]">
                                            <a href="#" class="block mb-1">
                                                <img src="https://elango.steelthemes.com/ecom/el2/wp-content/uploads/2025/07/category-1.png"
                                                    class="w-[85px] h-20 mx-auto" alt="product">
                                                <span class="inline-block w-full text-center pt-3">محصول
                                                    تستی</span>
                                            </a>
                                            <span
                                                class="block text-center text-[14px] text-[var(--color-secondary-text)]">تست
                                                آیتم</span>
                                            <span
                                                class="block text-center text-[12px] text-[var(--color-secondary-text)]">10
                                                آیتم</span>
                                        </div>
                                        <div class="p-4 border border-[var(--color-border)] rounded-[10px]">
                                            <a href="#" class="block mb-1">
                                                <img src="https://elango.steelthemes.com/ecom/el2/wp-content/uploads/2025/07/category-1.png"
                                                    class="w-[85px] h-20 mx-auto" alt="product">
                                                <span class="inline-block w-full text-center pt-3">محصول
                                                    تستی</span>
                                            </a>
                                            <span
                                                class="block text-center text-[14px] text-[var(--color-secondary-text)]">تست
                                                آیتم</span>
                                            <span
                                                class="block text-center text-[12px] text-[var(--color-secondary-text)]">10
                                                آیتم</span>
                                        </div>
                                        <div class="p-4 border border-[var(--color-border)] rounded-[10px]">
                                            <a href="#" class="block mb-1">
                                                <img src="https://elango.steelthemes.com/ecom/el2/wp-content/uploads/2025/07/category-1.png"
                                                    class="w-[85px] h-20 mx-auto" alt="product">
                                                <span class="inline-block w-full text-center pt-3">محصول
                                                    تستی</span>
                                            </a>
                                            <span
                                                class="block text-center text-[14px] text-[var(--color-secondary-text)]">تست
                                                آیتم</span>
                                            <span
                                                class="block text-center text-[12px] text-[var(--color-secondary-text)]">10
                                                آیتم</span>
                                        </div>
                                        <div class="p-4 border border-[var(--color-border)] rounded-[10px]">
                                            <a href="#" class="block mb-1">
                                                <img src="https://elango.steelthemes.com/ecom/el2/wp-content/uploads/2025/07/category-1.png"
                                                    class="w-[85px] h-20 mx-auto" alt="product">
                                                <span class="inline-block w-full text-center pt-3">محصول
                                                    تستی</span>
                                            </a>
                                            <span
                                                class="block text-center text-[14px] text-[var(--color-secondary-text)]">تست
                                                آیتم</span>
                                            <span
                                                class="block text-center text-[12px] text-[var(--color-secondary-text)]">10
                                                آیتم</span>
                                        </div>
                                        <div class="p-4 border border-[var(--color-border)] rounded-[10px]">
                                            <a href="#" class="block mb-1">
                                                <img src="https://elango.steelthemes.com/ecom/el2/wp-content/uploads/2025/07/category-1.png"
                                                    class="w-[85px] h-20 mx-auto" alt="product">
                                                <span class="inline-block w-full text-center pt-3">محصول
                                                    تستی</span>
                                            </a>
                                            <span
                                                class="block text-center text-[14px] text-[var(--color-secondary-text)]">تست
                                                آیتم</span>
                                            <span
                                                class="block text-center text-[12px] text-[var(--color-secondary-text)]">10
                                                آیتم</span>
                                        </div>
                                        <div class="p-4 border border-[var(--color-border)] rounded-[10px]">
                                            <a href="#" class="block mb-1">
                                                <img src="https://elango.steelthemes.com/ecom/el2/wp-content/uploads/2025/07/category-1.png"
                                                    class="w-[85px] h-20 mx-auto" alt="product">
                                                <span class="inline-block w-full text-center pt-3">محصول
                                                    تستی</span>
                                            </a>
                                            <span
                                                class="block text-center text-[14px] text-[var(--color-secondary-text)]">تست
                                                آیتم</span>
                                            <span
                                                class="block text-center text-[12px] text-[var(--color-secondary-text)]">10
                                                آیتم</span>
                                        </div>



                                    </div>
                                    <!-- contents -->
                                </div>
                            </div>









                        </div>
                    </li>
                    <li class="my-1">
                        <div
                            class="flex flex-row justify-between items-center gap-1 transition-all duration-300 px-3 rounded-lg hover:bg-[var(--color-primary-btn-hover)]">
                            <a href="#" class="inline-block w-11/12 text-[var(--color-text)] font-semibold py-3 ">
                                فروشگاه
                            </a>
                            <div class="w-1/12 flex items-center justify-end subMenuActive">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5 transition-all duration-150"
                                    viewBox="0 0 448 512">
                                    <path fill="var(--color-fill)"
                                        d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z" />
                                </svg>
                            </div>
                        </div>
                        <ul class="w-full max-h-0 overflow-hidden transition-all duration-500 pr-5 mt-2 subItem">
                            <li>
                                <a href="#"
                                    class="inline-block w-full text-[var(--color-text)] font-semibold py-3 transition-all duration-300 px-3 rounded-lg hover:bg-[var(--color-primary-btn-hover)]">
                                    asiodfhkjaldshf
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="inline-block w-full text-[var(--color-text)] font-semibold py-3 transition-all duration-300 px-3 rounded-lg hover:bg-[var(--color-primary-btn-hover)]">
                                    asiodfhkjaldshf
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="inline-block w-full text-[var(--color-text)] font-semibold py-3 transition-all duration-300 px-3 rounded-lg hover:bg-[var(--color-primary-btn-hover)]">
                                    asiodfhkjaldshf
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="inline-block w-full text-[var(--color-text)] font-semibold py-3 transition-all duration-300 px-3 rounded-lg hover:bg-[var(--color-primary-btn-hover)]">
                                    asiodfhkjaldshf
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="my-1">
                        <div
                            class="flex flex-row justify-between items-center gap-1 transition-all duration-300 px-3 rounded-lg hover:bg-[var(--color-primary-btn-hover)]">
                            <a href="#" class="inline-block w-11/12 text-[var(--color-text)] font-semibold py-3 ">
                                تست
                            </a>
                            <div class="w-1/12 flex items-center justify-end subMenuActive">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5 transition-all duration-150"
                                    viewBox="0 0 448 512">
                                    <path fill="var(--color-fill)"
                                        d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z" />
                                </svg>
                            </div>
                        </div>
                        <ul class="w-full max-h-0 overflow-hidden transition-all duration-500 pr-5 mt-2 subItem">
                            <li>
                                <a href="#"
                                    class="inline-block w-full text-[var(--color-text)] font-semibold py-3 transition-all duration-300 px-3 rounded-lg hover:bg-[var(--color-primary-btn-hover)]">
                                    asiodfhkjaldshf
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="inline-block w-full text-[var(--color-text)] font-semibold py-3 transition-all duration-300 px-3 rounded-lg hover:bg-[var(--color-primary-btn-hover)]">
                                    asiodfhkjaldshf
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="inline-block w-full text-[var(--color-text)] font-semibold py-3 transition-all duration-300 px-3 rounded-lg hover:bg-[var(--color-primary-btn-hover)]">
                                    asiodfhkjaldshf
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="inline-block w-full text-[var(--color-text)] font-semibold py-3 transition-all duration-300 px-3 rounded-lg hover:bg-[var(--color-primary-btn-hover)]">
                                    asiodfhkjaldshf
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="my-1">
                        <a href="#"
                            class="inline-block w-full text-[var(--color-text)] font-semibold py-3 transition-all duration-300 px-3 rounded-lg hover:bg-[var(--color-primary-btn-hover)] ">
                            <span>
                                ارتباط با ما
                            </span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <!-- modal -->


    </header>

    <main class="2xl:container 2xl:px-4 mx-auto 2xl:w-full w-[98%] px-5 lg:px-0">

        <!-- address nav -->

        <nav class="w-full py-2 lg:py-5 flex flex-row items-center gap-3">
            <a href="#" class="text-xs leading-[2.17] text-[var(--color-secondary-text)]">
                فروشگاه اینترنتی شاهکار
            </a>
            <span class="text-xs leading-[2.17] text-[var(--color-secondary-text)]">/</span>
            <a href="#" class="text-xs leading-[2.17] text-[var(--color-secondary-text)]">
                {{$category->title}}
            </a>
        </nav>

        <!-- address nav -->

        <!-- title search -->

        <section class="w-full my-3 lg:mb-5 text-[var(--color-text)]">
            <h2 class="text-lg font-semibold">
                گوشی موبایل
            </h2>
        </section>

        <!-- title search -->

        <!-- custom orders -->

        <section class="text-[var(--color-text)]">
            <div class="lg:border border-[var(--color-border)] rounded-[16px] lg:py-0 py-2 mb-0 lg:mb-5 lg:mx-0">
                <div class="w-full overflow-x-auto">
                    <div class="flex flex-row items-center">

                        <div class="flex flex-col justify-center items-center pl-3 px-0 lg:px-8 py-5">
                            <div class="flex items-center mb-2 lg:mb-4 gap-2">
                                <span class="text-xs text-[var(--color-secondary-text)]">
                                    سفارشی
                                </span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 512 512">
                                    <path fill="var(--color-danger)"
                                        d="M416 44.2c0-7.2-8.8-10.8-13.8-5.5L378.4 63.9C336.5 108 282.7 138.4 224 151.5V328.5c58.7 13.1 112.5 43.4 154.4 87.6l23.8 25.1c5 5.3 13.8 1.7 13.8-5.5V44.2zM192 323.1V156.9c-5.8 .7-11.6 1.1-17.5 1.5L144.9 160l-.4 0H144 64c-17.7 0-32 14.3-32 32v96c0 17.7 14.3 32 32 32h80 .4l.4 0 29.7 1.6c5.8 .3 11.7 .8 17.5 1.5zM379 16.7c24.9-26.3 69-8.7 69 27.5V435.8c0 36.2-44.2 53.8-69 27.5l-23.8-25.1c-43.3-45.7-101-74.9-163.1-82.8V456c0 30.9-25.1 56-56 56H120c-30.9 0-56-25.1-56-56V352c-35.3 0-64-28.7-64-64V192c0-35.3 28.7-64 64-64l79.6 0 29.2-1.6c69.4-3.9 134.6-34.1 182.4-84.5L379 16.7zM96 352V456c0 13.3 10.7 24 24 24h16c13.3 0 24-10.7 24-24V352.9l-16.4-.9H96zM496 192c8.8 0 16 7.2 16 16v64c0 8.8-7.2 16-16 16s-16-7.2-16-16V208c0-8.8 7.2-16 16-16z" />
                                </svg>
                            </div>
                            <a href="#" class="inline-block size-[80px] max-w-[80px] max-h-[80px]">
                                <div class="size-full">
                                    <img class="inline-block size-full"
                                        src="https://dkstatics-public.digikala.com/digikala-brands/6842.png?x-oss-process=image/resize,m_lfit,h_160,w_160/quality,q_80"
                                        alt="brand icon">
                                </div>
                            </a>
                            <div class="max-w-[80px] text-center mt-2 lg:mt-3 text-xs">
                                آنر
                            </div>
                        </div>

                        <!-- without discount -->
                        <a href="#"
                            class="lg:border-l border-[var(--color-border)] inline-block min-w-[144px] max-w-[144px] lg:max-w-[183px] py-2 lg:py-6 px-3 lg:px-4">
                            <img class="size-[120px] lg:size-[150px]"
                                src="https://dkstatics-public.digikala.com/digikala-products/290f68ffb62d8236403347d5a659c930af439693_1758547179.jpg?x-oss-process=image/resize,m_lfit,h_300,w_300/format,webp/quality,q_80"
                                alt="product image">
                            <span class="inline-block mt-2 text-xs font-semibold"
                                title="گوشی موبایل آنر مدل X8c دو سیم کارت ظرفیت 256 گیگابایت و رم 8 گیگابایت">
                                گوشی موبایل آنر مدل X8c...
                            </span>
                            <div class="mt-6 flex flex-row items-center gap-1">
                                <span class="font-semibold">
                                    20,360,800
                                </span>
                                <span class="text-xs">
                                    تومان
                                </span>
                            </div>
                        </a>
                        <!-- without discount end -->

                        <!-- with discount -->
                        <a href="#"
                            class="lg:border-l border-[var(--color-border)] inline-block min-w-[144px] max-w-[144px] lg:max-w-[183px] py-2 lg:py-6 px-3 lg:px-4">
                            <img class="size-[120px] lg:size-[150px]"
                                src="https://dkstatics-public.digikala.com/digikala-products/290f68ffb62d8236403347d5a659c930af439693_1758547179.jpg?x-oss-process=image/resize,m_lfit,h_300,w_300/format,webp/quality,q_80"
                                alt="product image">
                            <span class="inline-block mt-2 text-xs font-semibold"
                                title="گوشی موبایل آنر مدل X8c دو سیم کارت ظرفیت 256 گیگابایت و رم 8 گیگابایت">
                                گوشی موبایل آنر مدل X8c...
                            </span>
                            <div class="flex flex-row items-center gap-2 mt-2 mb-1">
                                <span
                                    class="text-xs text-[var(--color-primary-text)] bg-[var(--color-danger)] px-2 rounded-full">
                                    2%
                                </span>
                                <span class="text-xs text-[var(--color-secondary-text)] line-through">7,121,200</span>
                            </div>
                            <div class="flex flex-row items-center gap-1">
                                <span class="font-semibold">
                                    20,360,800
                                </span>
                                <span class="text-xs">
                                    تومان
                                </span>
                            </div>
                        </a>
                        <!-- with discount end -->

                    </div>

                </div>
            </div>
        </section>

        <!-- custom orders -->

        <!-- filter and products -->

        <section class="text-[var(--color-text)]">
            <div class="flex flex-row gap-5">
                <aside class="min-w-[270px] w-[300px] hidden lg:block">

                    <div
                        class="sticky top-3 overflow-y-auto w-full border border-[var(--color-border)] rounded-lg px-5 py-4">
                        <div class="text-lg font-semibold mb-4 leading-[2.17]">
                            فیلتر ها
                        </div>

                        <div class="w-full cursor-pointer sidebarFeatures">
                            <div class="w-full">
                                <div class="flex flex-row justify-between items-center py-3">
                                    <span class="font-medium">
                                        برند
                                    </span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4 transition-all duration-300" viewBox="0 0 448 512">
                                        <path fill="var(--color-fill)"
                                            d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="w-full max-h-0 overflow-hidden pr-5 transitin-all duration-300 ease-in">

                                <div
                                    class="w-full flex flex-row justify-between items-center py-3 border-b border-[var(--color-border)]">
                                    <div class="flex flex-row items-center gap-3">
                                        <input type="checkbox">
                                        <label class="font-medium">آنر</label>
                                    </div>
                                    <span class="text-xs text-[var(--color-secondary-text)]">Honor</span>
                                </div>
                                <div
                                    class="w-full flex flex-row justify-between items-center py-3 border-b border-[var(--color-border)]">
                                    <div class="flex flex-row items-center gap-3">
                                        <input type="checkbox">
                                        <label class="font-medium">اپل</label>
                                    </div>
                                    <span class="text-xs text-[var(--color-secondary-text)]">Apple</span>
                                </div>
                                <div
                                    class="w-full flex flex-row justify-between items-center py-3 border-b border-[var(--color-border)]">
                                    <div class="flex flex-row items-center gap-3">
                                        <input type="checkbox">
                                        <label class="font-medium">سامسونگ</label>
                                    </div>
                                    <span class="text-xs text-[var(--color-secondary-text)]">Samsung</span>
                                </div>
                                <div
                                    class="w-full flex flex-row justify-between items-center py-3 border-b border-[var(--color-border)]">
                                    <div class="flex flex-row items-center gap-3">
                                        <input type="checkbox">
                                        <label class="font-medium">شیائومی</label>
                                    </div>
                                    <span class="text-xs text-[var(--color-secondary-text)]">Xiaomi</span>
                                </div>





                            </div>
                        </div>
                        <div class="w-full cursor-pointer sidebarFeatures">
                            <div class="w-full">
                                <div class="flex flex-row justify-between items-center py-3">
                                    <span class="font-medium">
                                        رنگ
                                    </span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4 transition-all duration-300" viewBox="0 0 448 512">
                                        <path fill="var(--color-fill)"
                                            d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="w-full max-h-0 overflow-hidden pr-5 transitin-all duration-300 ease-in">

                                <div
                                    class="w-full flex flex-row justify-between items-center py-3 border-b border-[var(--color-border)]">
                                    <div class="flex flex-row items-center gap-3">
                                        <input type="checkbox">
                                        <label class="font-medium">آنر</label>
                                    </div>
                                    <span class="text-xs text-[var(--color-secondary-text)]">Honor</span>
                                </div>
                                <div
                                    class="w-full flex flex-row justify-between items-center py-3 border-b border-[var(--color-border)]">
                                    <div class="flex flex-row items-center gap-3">
                                        <input type="checkbox">
                                        <label class="font-medium">اپل</label>
                                    </div>
                                    <span class="text-xs text-[var(--color-secondary-text)]">Apple</span>
                                </div>
                                <div
                                    class="w-full flex flex-row justify-between items-center py-3 border-b border-[var(--color-border)]">
                                    <div class="flex flex-row items-center gap-3">
                                        <input type="checkbox">
                                        <label class="font-medium">سامسونگ</label>
                                    </div>
                                    <span class="text-xs text-[var(--color-secondary-text)]">Samsung</span>
                                </div>
                                <div
                                    class="w-full flex flex-row justify-between items-center py-3 border-b border-[var(--color-border)]">
                                    <div class="flex flex-row items-center gap-3">
                                        <input type="checkbox">
                                        <label class="font-medium">شیائومی</label>
                                    </div>
                                    <span class="text-xs text-[var(--color-secondary-text)]">Xiaomi</span>
                                </div>
                            </div>
                        </div>
                        <div class="w-full cursor-pointer sidebarFeatures">
                            <div class="w-full">
                                <div class="flex flex-row justify-between items-center py-3">
                                    <span class="font-medium">
                                        محدوده قیمت
                                    </span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4 transition-all duration-300" viewBox="0 0 448 512">
                                        <path fill="var(--color-fill)"
                                            d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="w-full max-h-0 overflow-hidden pr-5 transitin-all duration-300 ease-in">

                                <div
                                    class="w-full flex flex-row justify-between items-center py-3 border-b border-[var(--color-border)]">
                                    <div class="flex flex-row items-center gap-3">
                                        <input type="checkbox">
                                        <label class="font-medium">آنر</label>
                                    </div>
                                    <span class="text-xs text-[var(--color-secondary-text)]">Honor</span>
                                </div>
                                <div
                                    class="w-full flex flex-row justify-between items-center py-3 border-b border-[var(--color-border)]">
                                    <div class="flex flex-row items-center gap-3">
                                        <input type="checkbox">
                                        <label class="font-medium">اپل</label>
                                    </div>
                                    <span class="text-xs text-[var(--color-secondary-text)]">Apple</span>
                                </div>
                                <div
                                    class="w-full flex flex-row justify-between items-center py-3 border-b border-[var(--color-border)]">
                                    <div class="flex flex-row items-center gap-3">
                                        <input type="checkbox">
                                        <label class="font-medium">سامسونگ</label>
                                    </div>
                                    <span class="text-xs text-[var(--color-secondary-text)]">Samsung</span>
                                </div>
                                <div
                                    class="w-full flex flex-row justify-between items-center py-3 border-b border-[var(--color-border)]">
                                    <div class="flex flex-row items-center gap-3">
                                        <input type="checkbox">
                                        <label class="font-medium">شیائومی</label>
                                    </div>
                                    <span class="text-xs text-[var(--color-secondary-text)]">Xiaomi</span>
                                </div>
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="flex flex-row justify-between items-center py-3">
                                <span class="font-medium inline-block max-w-[168px]">
                                    ارسال رایگان
                                </span>
                                <div class="w-10 h-5 border-2 border-gray-400 rounded-full cursor-pointer px-0.5 flex flex-row items-center justify-start transitin-all duration-300"
                                    onclick="btn(this)">
                                    <div
                                        class="size-3 bg-gray-400 rounded-full transitin-all duration-300 translate-x-0">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="flex flex-row justify-between items-center py-3">
                                <span class="font-medium inline-block max-w-[168px]">
                                    فقط کالا های موجود در انبار شاهکار
                                </span>
                                <div class="w-10 h-5 border-2 border-gray-400 rounded-full cursor-pointer px-0.5 flex flex-row items-center justify-start transitin-all duration-300"
                                    onclick="btn(this)">
                                    <div
                                        class="size-3 bg-gray-400 rounded-full transitin-all duration-300 translate-x-0">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full cursor-pointer sidebarFeatures">
                            <div class="w-full">
                                <div class="flex flex-row justify-between items-center py-3">
                                    <span class="font-medium">
                                        نوع فروش
                                    </span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4 transition-all duration-300" viewBox="0 0 448 512">
                                        <path fill="var(--color-fill)"
                                            d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="w-full max-h-0 overflow-hidden pr-5 transitin-all duration-300 ease-in">

                                <div
                                    class="w-full flex flex-row justify-between items-center py-3 border-b border-[var(--color-border)]">
                                    <div class="flex flex-row items-center gap-3">
                                        <input type="checkbox">
                                        <label class="font-medium">آنر</label>
                                    </div>
                                    <span class="text-xs text-[var(--color-secondary-text)]">Honor</span>
                                </div>
                                <div
                                    class="w-full flex flex-row justify-between items-center py-3 border-b border-[var(--color-border)]">
                                    <div class="flex flex-row items-center gap-3">
                                        <input type="checkbox">
                                        <label class="font-medium">اپل</label>
                                    </div>
                                    <span class="text-xs text-[var(--color-secondary-text)]">Apple</span>
                                </div>
                                <div
                                    class="w-full flex flex-row justify-between items-center py-3 border-b border-[var(--color-border)]">
                                    <div class="flex flex-row items-center gap-3">
                                        <input type="checkbox">
                                        <label class="font-medium">سامسونگ</label>
                                    </div>
                                    <span class="text-xs text-[var(--color-secondary-text)]">Samsung</span>
                                </div>
                                <div
                                    class="w-full flex flex-row justify-between items-center py-3 border-b border-[var(--color-border)]">
                                    <div class="flex flex-row items-center gap-3">
                                        <input type="checkbox">
                                        <label class="font-medium">شیائومی</label>
                                    </div>
                                    <span class="text-xs text-[var(--color-secondary-text)]">Xiaomi</span>
                                </div>
                            </div>
                        </div>





                    </div>
                </aside>

                <div class="w-full">
                    <div
                        class="w-full border-b border-[var(--color-border)] lg:flex flex-row justify-between items-center hidden">
                        <div class="flex flex-row items-center gap-4">

                            <div class="flex flex-row items-center gap-2 py-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 576 512">
                                    <path fill="var(--color-fill)"
                                        d="M151.6 469.6C145.5 476.2 137 480 128 480s-17.5-3.8-23.6-10.4l-88-96c-11.9-13-11.1-33.3 2-45.2s33.3-11.1 45.2 2L96 365.7V64c0-17.7 14.3-32 32-32s32 14.3 32 32V365.7l32.4-35.4c11.9-13 32.2-13.9 45.2-2s13.9 32.2 2 45.2l-88 96zM320 480c-17.7 0-32-14.3-32-32s14.3-32 32-32h32c17.7 0 32 14.3 32 32s-14.3 32-32 32H320zm0-128c-17.7 0-32-14.3-32-32s14.3-32 32-32h96c17.7 0 32 14.3 32 32s-14.3 32-32 32H320zm0-128c-17.7 0-32-14.3-32-32s14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H320zm0-128c-17.7 0-32-14.3-32-32s14.3-32 32-32H544c17.7 0 32 14.3 32 32s-14.3 32-32 32H320z" />
                                </svg>
                                <span class="font-semibold text-sm">
                                    مرتب سازی :
                                </span>
                            </div>
                            <ul class="flex flex-row items-center gap-4">
                                <li>
                                    <a href="#" class="text-xs text-[var(--color-secondary-text)] py-4">
                                        پرفروش ترین
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-xs text-[var(--color-secondary-text)] py-4">
                                        مرتبط ترین
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-xs text-[var(--color-secondary-text)] py-4">
                                        پربازدید ترین
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-xs text-[var(--color-secondary-text)] py-4">
                                        جدید ترین
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-xs text-[var(--color-secondary-text)] py-4">
                                        ارزان ترین
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-xs text-[var(--color-secondary-text)] py-4">
                                        گران ترین
                                    </a>
                                </li>
                            </ul>

                        </div>
                        <span class="text-xs text-[var(--color-secondary-text)]">
                            3,633 کالا
                        </span>
                    </div>


                    <!-- navigation mobile -->

                    <div class="py-2 flex flex-row items-center overflow-x-auto lg:hidden">

                        <div class="px-3 py-1 ml-2 rounded-full border border-[var(--color-border)]">
                            <div class=" flex flex-row items-center gap-1 cursor-pointer max-w-[100px] w-[74px]">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-3" viewBox="0 0 576 512">
                                    <path fill="var(--color-fill)"
                                        d="M151.6 469.6C145.5 476.2 137 480 128 480s-17.5-3.8-23.6-10.4l-88-96c-11.9-13-11.1-33.3 2-45.2s33.3-11.1 45.2 2L96 365.7V64c0-17.7 14.3-32 32-32s32 14.3 32 32V365.7l32.4-35.4c11.9-13 32.2-13.9 45.2-2s13.9 32.2 2 45.2l-88 96zM320 480c-17.7 0-32-14.3-32-32s14.3-32 32-32h32c17.7 0 32 14.3 32 32s-14.3 32-32 32H320zm0-128c-17.7 0-32-14.3-32-32s14.3-32 32-32h96c17.7 0 32 14.3 32 32s-14.3 32-32 32H320zm0-128c-17.7 0-32-14.3-32-32s14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H320zm0-128c-17.7 0-32-14.3-32-32s14.3-32 32-32H544c17.7 0 32 14.3 32 32s-14.3 32-32 32H320z" />
                                </svg>
                                <span class="text-xs">
                                    مرتب سازی:
                                </span>

                            </div>
                        </div>

                        <div class="px-3 py-1 ml-2 rounded-full border border-[var(--color-border)]">
                            <div class=" flex flex-row items-center gap-1 cursor-pointer max-w-[100px]">

                                <svg xmlns="http://www.w3.org/2000/svg" class="size-3" viewBox="0 0 512 512">
                                    <path fill="var(--color-fill)"
                                        d="M0 416c0 17.7 14.3 32 32 32l54.7 0c12.3 28.3 40.5 48 73.3 48s61-19.7 73.3-48L480 448c17.7 0 32-14.3 32-32s-14.3-32-32-32l-246.7 0c-12.3-28.3-40.5-48-73.3-48s-61 19.7-73.3 48L32 384c-17.7 0-32 14.3-32 32zm128 0a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zM320 256a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm32-80c-32.8 0-61 19.7-73.3 48L32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l246.7 0c12.3 28.3 40.5 48 73.3 48s61-19.7 73.3-48l54.7 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-54.7 0c-12.3-28.3-40.5-48-73.3-48zM192 128a32 32 0 1 1 0-64 32 32 0 1 1 0 64zm73.3-64C253 35.7 224.8 16 192 16s-61 19.7-73.3 48L32 64C14.3 64 0 78.3 0 96s14.3 32 32 32l86.7 0c12.3 28.3 40.5 48 73.3 48s61-19.7 73.3-48L480 128c17.7 0 32-14.3 32-32s-14.3-32-32-32L265.3 64z" />
                                </svg>
                                <span class="text-xs">
                                    فیلتر
                                </span>
                            </div>
                        </div>

                        <div class="px-3 py-1 ml-2 rounded-full border border-[var(--color-border)]">
                            <div class=" flex flex-row items-center gap-1 cursor-pointer max-w-[100px]">

                                <svg xmlns="http://www.w3.org/2000/svg" class="size-3" viewBox="0 0 448 512">
                                    <path fill="var(--color-fill)"
                                        d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                                </svg>
                                <span class="text-xs">
                                    برند
                                </span>
                            </div>
                        </div>
                        <div class="px-3 py-1 ml-2 rounded-full border border-[var(--color-border)]">
                            <div class=" flex flex-row items-center gap-1 cursor-pointer max-w-[100px]">

                                <svg xmlns="http://www.w3.org/2000/svg" class="size-3" viewBox="0 0 448 512">
                                    <path fill="var(--color-fill)"
                                        d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                                </svg>
                                <span class="text-xs">
                                    رنگ
                                </span>
                            </div>
                        </div>
                        <div class="px-3 py-1 ml-2 rounded-full border border-[var(--color-border)]">
                            <div class=" flex flex-row items-center gap-1 cursor-pointer max-w-[100px] w-[55px]">
                                <span class="text-xs">
                                    ارسال سریع
                                </span>
                            </div>
                        </div>
                        <div class="px-3 py-1 ml-2 rounded-full border border-[var(--color-border)]">
                            <div class=" flex flex-row items-center gap-1 cursor-pointer max-w-[100px] w-[88px]">

                                <svg xmlns="http://www.w3.org/2000/svg" class="size-3" viewBox="0 0 448 512">
                                    <path fill="var(--color-fill)"
                                        d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                                </svg>
                                <span class="text-xs">
                                    محدوده قیمت
                                </span>
                            </div>
                        </div>



                    </div>

                    <!-- navigation mobile -->


                    <div
                        class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 lg:divide-x lg:divide-y divide-[var(--color-border)]">
                        @foreach($category->products as $product)
                        <a href="{{route('product-show', [$product])}}" target="_blank"
                            class="lg:block flex flex-row w-full py-5 border-b border-[var(--color-border)] lg:py-3 lg:px-2 productGrid">
                            <div class="mb-1 hidden lg:flex items-center h-4"></div>
                            <div class="w-1/3 lg:w-full relative">
                                <img src="@foreach($product->medias as $media) @if($media['is_main'] == 1) {{asset($media['path'])}} @endif @endforeach"
                                    class="block size-[118px] lg:size-[240px] m-auto"
                                    alt="product image">
                                <div
                                    class="lg:absolute top-0 flex flex-row justify-center lg:justify-start my-3 lg:flex-col items-center gap-2 left-3">
                                    <span class="inline-block size-1.5 bg-[#2196f3] rounded-full"></span>
                                    <span class="inline-block size-1.5 bg-[#c99212] rounded-full"></span>
                                    <span class="inline-block size-1.5 bg-[#212121] rounded-full"></span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-2" viewBox="0 0 448 512">
                                        <path fill="var(--color-fill)"
                                            d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="w-2/3 lg:w-full">
                                <div class="h-7 flex flex-row items-center"></div>
                                <h3 class="text-sm font-medium hidden lg:block leading-[2.17]">{{$product->title}} <br> {{$product->description}}</h3>
                                <h3 class="text-xs font-medium lg:hidden leading-[180%]">{{$product->title}} <br> {{$product->description}}</h3>
                                <div class="flex flex-row justify-between items-center my-1">
                                    <div class="flex flex-row items-center gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="lg:size-5 size-3"
                                            viewBox="0 0 448 512">
                                            <path fill="var(--color-secondary)"
                                                d="M240 64H342.4c12.6 0 24.1 7.4 29.2 19l34.2 77H240V64zm0 128H416V416c0 17.7-14.3 32-32 32H64c-17.7 0-32-14.3-32-32V192H208h32zm-32-32H42.1L76.3 83c5.1-11.6 16.6-19 29.2-19H208v96zM400.9 70c-10.3-23.1-33.2-38-58.5-38H105.6C80.3 32 57.4 46.9 47.1 70L5.5 163.6c-3.6 8.2-5.5 17-5.5 26V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V189.6c0-9-1.9-17.8-5.5-26L400.9 70zM331.3 251.3c6.2-6.2 6.2-16.4 0-22.6s-16.4-6.2-22.6 0L192 345.4l-52.7-52.7c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6l64 64c6.2 6.2 16.4 6.2 22.6 0l128-128z" />
                                        </svg>
                                        <span class="text-xs text-[var(--color-secondary-text)]">
                                            موجود در انبار شاهکار
                                        </span>
                                    </div>
                                    <div class="flex flex-row items-center gap-2">
                                        <span class="text-xs">4.4</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="lg:size-4 size-2"
                                            viewBox="0 0 576 512">
                                            <path fill="gold"
                                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                        </svg>

                                    </div>
                                </div>
                                <div class="pt-1 flex flex-row justify-end items-center">
                                    <span class="font-semibold lg:text-base text-xs">18,320,000</span>
                                    <span class="text-xs">
                                        تومان
                                    </span>
                                </div>
                            </div>
                        </a>
                        @endforeach
                    </div>



                </div>

            </div>
        </section>

        <!-- filter and products end -->

    </main>


    <footer class="text-[var(--color-text)] pt-3">
        <div class="py-10 bg-[var(--color-primary-btn)]">
            <p class="text-center">
                طراحی شده توسط
                <span class="font-bold">فائوس</span>
            </p>
        </div>
    </footer>
    <script src="{{ url('assets/js/main.js') }}"></script>
</body>

</html>