<form action="{{ route('suggestion_update', $Suggestion->id) }}" method="POST" style="max-width:600px; margin:auto;">
    @csrf

    <h2 style="font-size:22px; margin-bottom:15px;">
        ویرایش پیشنهاد برای درس {{ $lesson->title }}
    </h2>

    {{-- متن پیشنهاد --}}
    <div style="margin-bottom:15px;">
        <label for="comment">متن پیشنهاد شما:</label><br>
        <textarea name="Suggestion" id="comment" rows="4" style="width:100%; padding:6px;">{{ $Suggestion->Suggestion }}</textarea>
    </div>

    <div style="margin-bottom:15px;">
        <label style="cursor:pointer;">
            <h3>این قسمت برای آدمین های سایت هست 0 یعنی تایید نشده و 1 تایید شده</h3>
            <input type="checkbox" name="status" value="1"
                @if($Suggestion->status == 1) checked @endif>
            وضعیت (فعال / تایید شده)
        </label>
    </div>

    {{-- دکمه ذخیره --}}
    <button type="submit" style="background:#28a745; color:white; padding:8px 20px; border:none; border-radius:5px;">
        بروزرسانی پیشنهاد
    </button>
</form>
