<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>create courseCategory</title>
</head>

<body>
   <h2>فرم ایجاد دسته بندی دوره ها</h2>
   <form action="{{route('courseCategory-store')}}" method="post">
      @csrf
      <div>
         <label for="courseCatTitle">عنوان دسته بندی دوره:</label>
         <input type="text" name="title" id="courseCatTitle">
      </div>
      <br>
      <input type="submit" value="تایید">
   </form>
</body>

</html>