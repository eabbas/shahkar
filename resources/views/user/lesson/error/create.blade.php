    @extends('app.document')
    @section('title', 'گزارش خطا')
    @section('content')

        <form action="{{ route('error_store', $lesson->id) }}" method="POST" style="max-width:600px; margin:auto;">
            @csrf

            <h2 style="font-size:22px; margin-bottom:15px;">افزودن گذارش برای درس {{ $lesson->title }}</h2>


            <div style="margin-bottom:15px;">
                <label for="errortitle">عنوان گزارش:</label><br>
                <select name="errortype" id="errortitle" style="width:100%; padding:6px;">
                    <option value="0">یک عنوان انتخاب کنید</option>
                    @foreach ($errortitles as $errortitle)
                        <option value="{{ $errortitle->id }}"> {{ $errortitle->title }}</option>
                    @endforeach
                </select>
            </div>

            <div style="margin-bottom:15px;">
                <label for="comment">متن گذارش شما:</label><br>
                <textarea name="error" id="comment" rows="4" style="width:100%; padding:6px;"
                    placeholder="نظر خود را بنویسید..."></textarea>
            </div>

            <button type="submit"
                style="background:#007bff; color:white; padding:8px 20px; border:none; border-radius:5px;">
                ثبت گذارش
            </button>
        </form>

    @endsection
