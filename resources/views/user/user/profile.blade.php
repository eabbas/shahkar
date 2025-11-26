@extends('app.document')
@section('title', 'پروفایل')
@section('content')

    <aside class="hidden w-3/12 lg:h-[500px] border-l border-gray-300 lg:block">
        <ul class="w-full p-2">
            <li class="border-b border-gray-300">
                <a href="{{ route('user.edit', [$user]) }}" class="inline-block w-full py-3 px-4 text-sm">ادیت پروفایل</a>
            </li>
            <li class="border-b border-gray-300">
                <a href="{{ route('user.delete', [$user]) }}" class="inline-block w-full py-3 px-4 text-sm">حذف حساب
                    کاربری</a>
            </li>
            <li class="border-b border-gray-300">
                <a href="{{ route('user.logout') }}" class="inline-block w-full py-3 px-4 text-sm">خروج از حساب کاربری</a>
            </li>

            @if ($user->is_admin)
                <li class="border-b border-gray-300">
                    <a href="{{ route('user.index') }}" class="inline-block w-full py-3 px-4 text-sm">نمایش کاربران</a>
                </li>
            @endif
        </ul>
    </aside>


    <div class="w-9/12">
    </div>



    <script>
        let hamburgerMenu = document.getElementById('hamburgerMenu')

        function mobileMenu(state) {
            if (state == "open") {
                hamburgerMenu.classList.remove('-right-full')
                hamburgerMenu.classList.add('right-0')
            }
            if (state == "close") {
                hamburgerMenu.classList.remove('right-0')
                hamburgerMenu.classList.add('-right-full')
            }
        }
    </script>
@endsection
