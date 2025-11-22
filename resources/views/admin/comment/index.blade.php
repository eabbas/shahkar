<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>comment list</title>
</head>

<body>
   @extends('admin.app.dashboard')
   @section('content')
   <h2>لیست نظر ها</h2>
   <table border="1" style="border-collapse: collapse;">
      <thead>
         <tr>
            <th>آیدی</th>
            <th>نظر</th>
            <th>نظر والد</th>
            <th>محصول مربوطه</th>
            <th>کاربر مربوطه</th>
            <th>عملیات</th>
         </tr>
      </thead>
      <tbody>
         @foreach($comments as $comment)
         <tr>
            <td>{{$comment['id']}}</td>
            <td>{{$comment['comment']}}</td>
            <td>@if($comment->parent) {{$comment->parent['comment']}} @endif</td>
            <td>{{$comment['product']['title']}}</td>
            <td>{{$comment->user['name']}} {{$comment->user['family']}}</td>
            <td>
               <a href="{{route('comment.show',[$comment])}}">نمایش</a>
               <a href="{{route('comment.edit',[$comment])}}">ویرایش</a>
               <a href="{{route('comment.delete',[$comment])}}">حذف</a>
            </td>
         </tr>
         @endforeach
      </tbody>
   </table>
   @endsection
</body>

</html>