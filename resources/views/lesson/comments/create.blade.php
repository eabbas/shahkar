<form action="{{ route('lessonComments_store',$lesson -> id) }}" method="POST" style="max-width:600px; margin:auto;">
    @csrf

    <h2 style="font-size:22px; margin-bottom:15px;">افزودن نظر برای درس {{ $lesson->title }}</h2>
    <div style="margin-bottom:15px;">
        <label for="comment">متن نظر شما:</label><br>
        <textarea name="comment" id="comment" rows="4" style="width:100%; padding:6px;" placeholder="نظر خود را بنویسید..."></textarea>
    </div>

    <button type="submit" style="background:#007bff; color:white; padding:8px 20px; border:none; border-radius:5px;">
        ثبت نظر
    </button>
</form>
