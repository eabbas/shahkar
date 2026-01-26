<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Season</title>
    <style>
        body {
            font-family: sans-serif;
            background: #f5f5f5;
            padding: 20px;
        }

        form {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
        }

        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }

        input,
        textarea,
        select {
            width: 100%;
            padding: 8px;
            margin-top: 4px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        button {
            margin-top: 20px;
            padding: 10px 20px;
            background: #03A9F4;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background: #0288d1;
        }
    </style>
</head>

<body>
    @extends('admin.app.dashboard')
    @section('content')
        <form action ="{{ route('season.update') }}" method="POST">
            @csrf
            <input type ="hidden" id="id" name="id" value="{{ $season->id }}">

            <!-- عنوان فصل -->
            <label for="title">عنوان فصل</label>
            <input type="text" name="title" id="title" value="{{ $season->title }}" required>

            <!-- توضیحات -->
            <label for="description">توضیحات</label>
            <textarea name="description" id="description" rows="4" required>{{ $season->description }}</textarea>

            <!-- قیمت -->
            <label for="price">قیمت (تومان)</label>
            <input type="number" name="price" id="price" step="0.01" value="{{ $season->price }}" required>

            <!-- ترتیب / order -->
            <label for="order">ترتیب فصل</label>
            <input type="number" name="order" id="order" step="1" value="{{ $season->order }}" required>

            <!-- رایگان؟ -->
            <label>
                <input type="checkbox" name="free" value="1" {{ $season->free ? 'checked' : '' }}>
                رایگان
            </label>

            <!-- انتخاب دوره والد -->
            <label for="course_id">انتخاب دوره والد</label>
            <select name="course_id" id="course_id" required>
                <option value="">انتخاب کنید</option>
                @foreach ($courses as $course)
                    <option value="{{ $course->id }}" {{ $season->course_id == $course->id ? 'selected' : '' }}>
                        {{ $course->title }}
                    </option>
                @endforeach
            </select>

            <button type="submit">ویرایش فصل</button>
        </form>
    @endsection
</body>

</html>
