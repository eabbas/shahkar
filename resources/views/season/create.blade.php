<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Season</title>
    <style>
        body { font-family: sans-serif; background: #f5f5f5; padding: 20px; }
        form { max-width: 600px; margin: auto; background: white; padding: 20px; border-radius: 10px; }
        label { display: block; margin-top: 10px; font-weight: bold; }
        input, textarea, select { width: 100%; padding: 8px; margin-top: 4px; border-radius: 5px; border: 1px solid #ccc; }
        button { margin-top: 20px; padding: 10px 20px; background: #03A9F4; color: white; border: none; border-radius: 5px; cursor: pointer; }
        button:hover { background: #0288d1; }
    </style>
</head>
<body>

<form action="{{ route('season.store') }}" method="POST">
    @csrf


    <label for="title">عنوان فصل</label>
    <input type="text" name="title" id="title" required>


    <label for="description">توضیحات</label>
    <textarea name="description" id="description" rows="4" required></textarea>


    <label for="price">قیمت (تومان)</label>
    <input type="number" name="price" id="price" step="0.01" required>

    <label for="order">ترتیب فصل</label>
    <input type="number" name="order" id="order" step="1" required>

    <label>
        <input type="checkbox" name="free" value="1">
        رایگان
    </label>

    <label for="course_id">انتخاب دوره والد</label>
    <select name="course_id" id="course_id" required>
        <option value="">انتخاب کنید</option>
        @foreach($courses as $cour)
            <option value="{{ $cour->id }}" @if(isset($course) && $course->id == $cour->id) selected @endif>

            {{ $cour->title }}
            
            </option>
        @endforeach
    </select>

    <button type="submit">ایجاد فصل</button>
</form>

</body>
</html>
