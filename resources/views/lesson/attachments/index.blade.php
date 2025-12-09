<h2>پیوست‌های درس: {{ $lesson->title }}</h2>

@if($lesson->attachments->count() > 0)
    <div style="display:flex; flex-wrap:wrap; gap:20px;">
        @foreach($lesson->attachments as $attachment)
            @php
                $fileUrl = asset('storage/' . $attachment->file_path);
                $extension = strtolower($attachment->type);
                $fileName = basename($attachment->file_path);
            @endphp

            <div style="border:1px solid #ccc; padding:10px; border-radius:5px; width:220px; text-align:center;">
                
                @if(in_array($extension, ['jpg','jpeg','png','gif','webp']))
                    <img src="{{ $fileUrl }}" alt="تصویر" style="max-width:100%; max-height:150px; object-fit:cover;">
                @elseif(in_array($extension, ['mp3','wav','ogg']))
                     {{$attachment -> id}}
                    <audio controls style="width:100%;">
                        <source src="{{ $fileUrl }}" type="audio/{{ $extension }}">
                        مرورگر شما از پخش این فایل صوتی پشتیبانی نمی‌کند.
                    </audio>
                @elseif(in_array($extension, ['mp4','webm','ogg']))
                       
                    <video controls style="width:100%; max-height:150px;">
                        <source src="{{ $fileUrl }}" type="video/{{ $extension }}">
                        مرورگر شما از پخش این ویدئو پشتیبانی نمی‌کند.
                    </video>
                @else
                    <a href="{{ $fileUrl }}" target="_blank" style="display:inline-block; padding:5px 10px; background:#007bff; color:white; border-radius:4px; text-decoration:none;">
                        دانلود {{ $fileName }}
                    </a>
                @endif

                <p style="margin-top:5px; font-size:14px; word-break:break-all;">
                    {{ $fileName }}
                </p>

                <!--  آپدیت فایل -->
                <form action="{{ route('attachment_update', $attachment->id) }}" method="POST" enctype="multipart/form-data" style="margin-top:10px;">
                    @csrf
                    <input type="file" name="file" required style="margin-bottom:5px;">
                    <button type="submit" style="padding:4px 8px; background:#ffc107; color:black; border-radius:4px; border:none; cursor:pointer;">
                        آپدیت فایل
                    </button>
                </form>

                <!-- حذف -->
                 <a href="{{ route('attachment_delete', $attachment->id) }}" style="padding:4px 8px; background:#dc3545; color:white; border:none; border-radius:4px; cursor:pointer;">حذف</a>
                
            </div>
        @endforeach
    </div>
@else
    <p>هیچ فایلی برای این درس وجود ندارد.</p>
@endif
