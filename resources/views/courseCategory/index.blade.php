<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>course category list</title>
</head>

<body>
   <h2> لیست دسته بندی دوره</h2>
   <table border="1" style="border-collapse: collapse;">
      <thead>
         <tr>
            <th>آیدی</th>
            <th>عنوان دسته بندی دوره</th>
            <th>عملیات</th>
         </tr>
      </thead>
      <tbody>
         @foreach($courseCategories as $courseCategory)
         <tr>
            <td>{{$courseCategory->id}}</td>
            <td>{{$courseCategory->title}}</td>
            <td>
               <a href="{{route('courseCategory-show', [$courseCategory])}}">نمایش</a>
               <a href="{{route('courseCategory-edit', [$courseCategory])}}">ویرایش</a>
               <a href="{{route('courseCategory-delete', [$courseCategory])}}">حذف</a>
            </td>
         </tr>
         @endforeach
      </tbody>
   </table>
</body>

</html>