<form action="{{ route('question_update', $question->id) }}" method="POST">
    @csrf

    <label>سوال شما راجب درس  : {{$lesson -> title}}</label><br>
    <textarea name="question" required>
        {{$question -> question}}
    </textarea>

    <div style="margin-bottom:15px;">
        <label style="cursor:pointer;">
            <h3>این قسمت برای آدمین های سایت هست 0 یعنی تایید نشده و 1 تایید شده</h3>
            <input type="checkbox" name="status" value="1"
                @if($question->status == 1) checked @endif>
            وضعیت (فعال / تایید شده)
        </label>
    </div>

    <button type="submit">ثبت سوال</button>
</form>
