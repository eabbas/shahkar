<form action="{{ route('lessonComments_update', $lessoncomments->id) }}" method="POST"
    style="max-width:600px; margin:auto;">
    @csrf

    <h2 style="font-size:22px; margin-bottom:15px;">افزودن نظر برای درس {{ $lesson->title }}</h2>
    <div style="margin-bottom:15px;">
        <label for="comment">متن نظر شما:</label><br>
        <textarea name="comment" id="comment" rows="4" style="width:100%; padding:6px;" placeholder="نظر خود را بنویسید...">
            {{ $lessoncomments->comment }}
        </textarea>
    </div>
    <h3>سطح دسترسی در آینده</h3>
    <div style="margin-bottom:15px;">
        <label>
            <input type="checkbox" name="status" value="1">
            تایید
        </label>
    </div>
    <input type="hidden" name="lesson_id"value="{{ $lesson->id }}">

    <button type="submit" style="background:#007bff; color:white; padding:8px 20px; border:none; border-radius:5px;">
        ویزایش نظر
    </button>
</form>
