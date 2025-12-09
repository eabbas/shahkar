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
            <option value="1" @if($Error->errortitle == 1) selected @endif>اشکال تایپی</option>
            <option value="2" @if($Error->errortitle == 2) selected @endif>اشکال محتوایی</option>
            <option value="3" @if($Error->errortitle == 3) selected @endif>فنی</option>
            <option value="4" @if($Error->errortitle == 4) selected @endif>نویز دارد</option>
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
            <input type="checkbox" name="status" value="1"
                @if($Error->status == 1) checked @endif>
            وضعیت (فعال / تایید شده)
        </label>
    </div>

    {{-- دکمه ذخیره --}}
    <button type="submit" style="background:#28a745; color:white; padding:8px 20px; border:none; border-radius:5px;">
        بروزرسانی گزارش
    </button>
</form>
