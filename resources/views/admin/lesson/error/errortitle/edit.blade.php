<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فرم عنوان</title>

</head>

<body>
    @extends('admin.app.dashboard')
    @section('content')
        <form class="form-box" action="{{ route('errortitle_update', $errortitle->id) }}" method="POST">
            @csrf
            <h2>افزودن عنوان خطا</h2>

            <label for="title">عنوان:</label>
            <input type="text" id="title" value="{{ $errortitle->title }}" name="title"
                placeholder="مثلاً: عنوان خطا">

            <button type="submit">ویرایش</button>
        </form>
    @endsection
</body>

</html>
