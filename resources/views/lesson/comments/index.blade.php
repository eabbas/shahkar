<h2 style="font-size:20px; margin-bottom:15px;">نظرات برای درس: {{ $lesson->title }}</h2>

{{-- 📌 فرم ثبت نظر جدید --}}
<form action="{{ route('lessonComments_store', $lesson->id) }}" method="POST" style="margin-bottom:30px;">
    @csrf

    <div style="margin-bottom:15px;">
        <label for="comment">نظر شما:</label><br>
        <textarea name="comment" id="comment" rows="3" style="width:100%; padding:8px;" placeholder="نظر خود را بنویسید..."></textarea>
    </div>

    <button type="submit" style="background:#007bff; color:white; padding:8px 16px; border:none; border-radius:5px;">
        ارسال نظر
    </button>
</form>

<hr style="margin:20px 0;">

{{-- 📜 لیست نظرات --}}
@if($lessoncomments->count() > 0)
    <h2>بعد از کامل شدن یوزر ها فقط نظرات تایید شده می اد</h2>
    <h3 style="font-size:18px; margin-bottom:10px;">تمام نظرات:</h3>

    @foreach($lessoncomments as $comment)
        <div style="border:1px solid #ddd; padding:10px; border-radius:8px; margin-bottom:10px;">
            <p style="margin:5px 0;">{{ $comment->comment }}</p>

            {{-- 🔗 لینک‌های ویرایش و حذف --}}
            <div style="margin-top:8px;">
                <a href="{{ route('lessonComments_edit', ['lesson' => $lesson->id, 'lessoncomments' => $comment->id]) }}" 
                   style="color:#007bff; text-decoration:none; margin-right:10px;">✏️   مشاهده و ویرایش</a>
                <a href="{{ route('lessonComments_delete', ['lesson' => $lesson->id, 'lessoncomments' => $comment->id]) }}" 
                   style="color:red; text-decoration:none; margin-right:10px;">حذف</a>

                
            </div>
        </div>
    @endforeach

@else
    <p>هنوز نظری ثبت نشده است.</p>
@endif
