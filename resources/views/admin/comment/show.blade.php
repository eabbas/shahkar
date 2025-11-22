<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>single comment</title>
</head>

<body>
   @extends('admin.app.dashboard')
   @section('content')
   <h2>نظر</h2>
   <table border="1" style="border-collapse: collapse;">
      <thead>
         <tr>
            <th>آیدی</th>
            <th>نظر</th>
            <th>نظر والد</th>
            <th>محصول مربوطه</th>
            <th>کاربر مربوطه</th>
         </tr>
      </thead>
      <tbody>
         <tr>
            <td>{{$comment['id']}}</td>
            <td>{{$comment['comment']}}</td>
            <td>@if($comment->parent) {{$comment->parent['comment']}} @endif</td>
            <td>{{$comment['product']['title']}}</td>
            <td>{{$comment->user['name']}} {{$comment->user['family']}}</td>
         </tr>
      </tbody>
   </table>
   @endsection
</body>

</html>