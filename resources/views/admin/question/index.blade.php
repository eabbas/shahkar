<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>question list</title>
</head>

<body>
   @extends('admin.app.dashboard')
   @section('content')
   <h2>لیست سوال ها</h2>
   <table border="1" style="border-collapse: collapse;">
      <thead>
         <tr>
            <th>آیدی</th>
            <th>سوال</th>
            <th>محصول مربوطه</th>
            <th>کاربر مربوطه</th>
            <th>نوع فعالیت</th>
            <th>پاسخ های مربوطه</th>
            <th>عملیات</th>
         </tr>
      </thead>
      <tbody>
         @foreach($questions as $question)
         <tr>
            <td>{{$question['id']}}</td>
            <td>{{$question['text']}}</td>
            <td>{{$question->product['title']}}</td>
            <td>{{$question->user['name']}} {{$question->user['family']}}</td>
            <td>@if($question['active'] == 1) active @elseif($question['active'] == 0) inactive @endif</td>
            <td>
               @foreach($question->answers as $answer)
               {{$answer['text']}}
               <br>
               @endforeach
            </td>
            <td>
               <a href="{{route('question-show',[$question])}}">نمایش</a>
               <a href="{{route('question-edit',[$question])}}">ویرایش</a>
               <a href="{{route('question-delete',[$question])}}">حذف</a>
            </td>
         </tr>
         @endforeach
      </tbody>
   </table>
   @endsection
</body>

</html>