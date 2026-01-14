<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فرم عنوان</title>

    <style>
        body {
            font-family: sans-serif;
            background: #f5f6fa;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-box {
            background: #fff;
            padding: 25px 30px;
            width: 350px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .form-box h2 {
            margin-bottom: 20px;
            font-size: 22px;
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-size: 15px;
            color: #444;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 14px;
            box-sizing: border-box;
        }

        input[type="text"]:focus {
            border-color: #007bff;
            outline: none;
            box-shadow: 0 0 5px rgba(0,123,255,0.3);
        }

        button {
            width: 100%;
            padding: 10px;
            margin-top: 18px;
            background: #007bff;
            color: #fff;
            font-size: 15px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
        }

        button:hover {
            background: #0056b3;
        }
    </style>
</head>

<body>
    <form class="form-box" action="{{route('errortitle_update' ,$errortitle -> id )}}" method="POST">
        @csrf
        <h2>افزودن عنوان خطا</h2>

        <label for="title">عنوان:</label>
        <input type="text" id="title" value="{{$errortitle -> title}}" name="title" placeholder="مثلاً: عنوان خطا">

        <button type="submit">ویرایش</button>
    </form>
</body>
</html>
