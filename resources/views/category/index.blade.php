<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>category list</title>
</head>

<body>
   <h2> لیست دسته بندی ها</h2>
   <table border="1" style="border-collapse: collapse;">
      <thead>
         <tr>
            <th>آیدی</th>
            <th>عنوان دسته بندی</th>
            <th>توضیحات دسته بندی</th>
            <th>عملیات</th>
         </tr>
      </thead>
      <tbody>
         @foreach($categories as $category)
         <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->title}}</td>
            <td>{{$category->description}}</td>
            <td>
               <a href="{{route('category-show', [$category])}}">نمایش</a>
               <a href="{{route('category-edit', [$category])}}">ویرایش</a>
               <a href="{{route('category-delete', [$category])}}">حذف</a>
            </td>
         </tr>
         @endforeach
      </tbody>
   </table>
</body>

</html>