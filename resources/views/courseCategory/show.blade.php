<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>course category single</title>
</head>

<body>
   <h2>نمایش دسته بندی دوره ها</h2>
   <table border="1" style="border-collapse: collapse;">
      <thead>
         <tr>
            <th>آیدی</th>
            <th>عنوان دسته بندی دوره</th>
            <th>دسته بندی فرزند</th>
         </tr>
      </thead>
      <tbody>
         <tr>
            <td>{{$courseCategory->id}}</td>
            <td>{{$courseCategory->title}}</td>
            <td>@if($courseCategory->children) @foreach($courseCategory->children as $child) {{$child->title}} <br> @endforeach @endif</td>
         </tr>
      </tbody>
   </table>
   <a href="{{route('courseCategory-index')}}">برگشت</a>
</body>

</html>