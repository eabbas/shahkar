<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>single answer</title>
</head>

<body>
   @extends('admin.app.dashboard')
   @section('content')
   <h2>پاسخ</h2>
   <table border="1" style="border-collapse: collapse;">
      <thead>
         <tr>
            <th>آیدی</th>
            <th>پاسخ</th>
            <th>سوال مربوطه</th>
            <th>پاسخ والد</th>
            <th>محصول مربوطه</th>
            <th>کاربر مربوطه</th>
         </tr>
      </thead>
      <tbody>
         <tr>
            <td>{{$answer['id']}}</td>
            <td>{{$answer['text']}}</td>
            <td>{{$answer->question['text']}}</td>
            <td>@if($answer->parent) {{$answer->parent['text']}} @endif</td>
            <td>{{$answer->question->product['title']}}</td>
            <td>{{$answer->user['name']}} {{$answer->user['family']}}</td>
         </tr>
      </tbody>
   </table>
   <a href="{{route('answer-index')}}">برگشت</a>
   @endsection
</body>

</html>