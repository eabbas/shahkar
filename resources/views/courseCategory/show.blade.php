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
         </tr>
      </thead>
      <tbody>
         <tr>
            <td>{{$courseCategory->id}}</td>
            <td>{{$courseCategory->title}}</td>
      </tbody>
   </table>
   <a href="{{route('courseCategory-index')}}">برگشت</a>
</body>

</html>