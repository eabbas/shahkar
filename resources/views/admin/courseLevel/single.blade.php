
    @extends('admin.app.dashboard')
    @section('title')
        شاهکار | {{ $level->title }}
    @endsection
    @section('content')

         <div class="w-1/2 mx-auto flex flex-row items-center justify-center gap-5 mt-10 py-3 border border-gray-300 rounded-sm">
        <span class="text-sm font-bold text-gray-600">سطح: </span>
        <h2 class="lg:text-lg font-bold">{{ $level->title }}</h2>
    </div>
    @endsection
