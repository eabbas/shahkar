<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>answer list</title>
</head>

<body>
   <h2>لیست پاسخ ها</h2>
   <table border="1" style="border-collapse: collapse;">
      <thead>
         <tr>
            <th>آیدی</th>
            <th>پاسخ</th>
            <th>سوال مربوطه</th>
            <th>پاسخ والد</th>
            <th>محصول مربوطه</th>
            <th>کاربر مربوطه</th>
            <th>عملیات</th>
         </tr>
      </thead>
      <tbody>
         @foreach($answers as $answer)
         <tr>
            <td>{{$answer['id']}}</td>
            <td>{{$answer['text']}}</td>
            <td>{{$answer->question['text']}}</td>
            <td>@if($answer->parent) {{$answer->parent['text']}} @endif</td>
            <td>{{$answer->question->product['id']}} {{$answer->question->product['title']}}</td>
            <td>{{$answer->user['name']}} {{$answer->user['family']}}</td>
            <td>
               <a href="{{route('answer-show',[$answer])}}">نمایش</a>
               <a href="{{route('answer-edit',[$answer])}}">ویرایش</a>
               <a href="{{route('answer-delete',[$answer])}}">حذف</a>
            </td>
         </tr>
         @endforeach
      </tbody>
   </table>
</body>

</html>