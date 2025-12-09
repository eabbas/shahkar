<form action="{{ route('suggestion_store',$lesson -> id) }}" method="POST" style="max-width:600px; margin:auto;">
    @csrf

    <h2 style="font-size:22px; margin-bottom:15px;">افزودن پیشهناد برای درس {{ $lesson->title }}</h2>
    <div style="margin-bottom:15px;">
        <label for="comment">متن پیشنهاد شما:</label><br>
        <textarea name="Suggestion" id="comment" rows="4" style="width:100%; padding:6px;" placeholder="پیشنهاد خود را بنویسید..."></textarea>
    </div>

    <button type="submit" style="background:#007bff; color:white; padding:8px 20px; border:none; border-radius:5px;">
        ثبت پیشنهاد
    </button>
</form>

