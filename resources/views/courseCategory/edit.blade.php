<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>edit course category</title>
</head>

<body>
   <h2>فرم ویرایش دسته بندی دوره</h2>
   <form action="{{route('courseCategory-update')}}" method="post">
      @csrf
      <input type="hidden" name="courseCategory_id" value="{{$courseCategory->id}}">
      <div>
         <label for="courseCatTitle">عنوان دسته بندی دوره:</label>
         <input type="text" name="title" id="courseCatTitle" value="{{$courseCategory->title}}">
      </div>
      <br>
      <input type="submit" value="تایید">
   </form>
</body>

</html>