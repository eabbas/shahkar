    @extends('app.document')
    @section('title', 'فایل های پیوست')
    @section('content')
        <h2>پیوست‌های درس: {{ $lesson->title }}</h2>

        @if ($lesson->attachments->count() > 0)
            <div style="display:flex; flex-wrap:wrap; gap:20px;">
                @foreach ($lesson->attachments as $attachment)
                    @php
                        $fileUrl = asset('storage/' . $attachment->file_path);
                        $fileName = basename($attachment->file_path);
                        $extension = strtolower(pathinfo($attachment->file_path, PATHINFO_EXTENSION));
                    @endphp

                    <div style="border:1px solid #ccc; padding:10px; border-radius:5px; width:220px; text-align:center;">

                        {{-- تصویر --}}
                        @if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif', 'webp']))
                            <img src="{{ $fileUrl }}" alt="تصویر"
                                style="width:100%; height:150px; object-fit:cover; border-radius:4px;">

                            {{-- صوت --}}
                        @elseif(in_array($extension, ['mp3', 'wav', 'ogg']))
                            <audio controls style="width:100%;">
                                <source src="{{ $fileUrl }}">
                                مرورگر شما از پخش این فایل صوتی پشتیبانی نمی‌کند.
                            </audio>

                            {{-- ویدئو --}}
                        @elseif(in_array($extension, ['mp4', 'webm', 'ogg']))
                            <video controls style="width:100%; height:150px; object-fit:cover;">
                                <source src="{{ $fileUrl }}">
                                مرورگر شما از پخش این ویدئو پشتیبانی نمی‌کند.
                            </video>

                            {{-- سایر فایل‌ها --}}
                        @else
                            <a href="{{ $fileUrl }}" target="_blank"
                                style="display:inline-block; padding:5px 10px; background:#007bff; color:white; border-radius:4px; text-decoration:none;">
                                دانلود فایل
                            </a>
                        @endif

                        <p style="margin-top:5px; font-size:13px; word-break:break-all;">
                            {{ $fileName }}
                        </p>

                    </div>
                @endforeach
            </div>
        @else
            <p>هیچ فایلی برای این درس وجود ندارد.</p>
        @endif
    @endsection
