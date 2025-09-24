<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>course list</title>
</head>

<body>
   <h2>لیست دوره ها</h2>
   <table border="1" style="border-collapse: collapse;">
      <thead>
         <tr>
            <th>آیدی</th>
            <th>عنوان دوره</th>
            <th>توضیحات دوره</th>
            <th>دسته بندی دوره</th>
            <th>عملیات</th>
         </tr>
      </thead>
      <tbody>
         @foreach($courses as $course)
         <tr>
            <td>{{$course['id']}}</td>
            <td>{{$course['title']}}</td>
            <td>{{$course['description']}}</td>
            <td>{{$course['courseCategory']['title']}}</td>
            <td>
               <a href="{{route('course-show',[$course])}}">نمایش</a>
               <a href="{{route('course-edit',[$course])}}">ویرایش</a>
               <a href="{{route('course-delete',[$course])}}">حذف</a>
            </td>
         </tr>
         @endforeach
      </tbody>
   </table>
</body>

</html>