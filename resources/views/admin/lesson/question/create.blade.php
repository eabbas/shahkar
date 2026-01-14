<form action="{{ route('question_store', $lesson->id) }}" method="POST">
    @csrf

    <label>سوال شما راجب درس  : {{$lesson -> title}}</label><br>
    <textarea name="question" required></textarea>

    <!-- <label>
        <input type="checkbox" name="status" value="1">
        وضعیت فعال
    </label> -->

    <button type="submit">ثبت سوال</button>
</form>
