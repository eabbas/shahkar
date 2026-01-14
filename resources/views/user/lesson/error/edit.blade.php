<form action="{{ route('error_update', $Error->id) }}" method="POST" style="max-width:600px; margin:auto;">
    @csrf

    <h2 style="font-size:22px; margin-bottom:15px;">
        ویرایش گزارش برای درس {{ $lesson->title }}
    </h2>

    {{-- فیلد انتخاب عنوان گزارش --}}
    <div style="margin-bottom:15px;">
        <label for="errortitle">عنوان گزارش:</label><br>
        <h3>در آینده بعد از ایجاد تیبل برای این قسمت</h3>
        <select name="errortype" id="errortitle" style="width:100%; padding:6px;">
            <option value="0">یک عنوان انتخاب کنید</option>
            @foreach ($errortitles as $errortitle)
                <option value="{{ $errortitle->id }}" @if ($Error->errortype == $errortitle->id) selected @endif>
                    {{ $errortitle->title }}</option>
            @endforeach
        </select>
    </div>

    {{-- متن گزارش --}}
    <div style="margin-bottom:15px;">
        <label for="comment">متن گزارش شما:</label><br>
        <textarea name="error" id="comment" rows="4" style="width:100%; padding:6px;">{{ $Error->error }}</textarea>
    </div>

    <div style="margin-bottom:15px;">
        <label style="cursor:pointer;">
            <h3>این قسمت برای آدمین های سایت هست 0 یعنی تایید نشده و 1 تایید شده</h3>
            <input type="checkbox" name="status" value="1" @if ($Error->status == 1) checked @endif>
            وضعیت (فعال / تایید شده)
        </label>
    </div>

    {{-- دکمه ذخیره --}}
    <button type="submit" style="background:#28a745; color:white; padding:8px 20px; border:none; border-radius:5px;">
        بروزرسانی گزارش
    </button>
</form>
