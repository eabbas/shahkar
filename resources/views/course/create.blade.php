<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>create course</title>
</head>

<body>
   <h2>فرم ایجاد دوره</h2>
   <form action="{{route('course-store')}}" method="post">
      @csrf
      <div>
         <label for="title">نام دوره:</label>
         <input type="text" name="title" id="title">
      </div>
      <br>
      <div>
         <label for="description">توضیحات دوره:</label>
         <input type="text" name="description" id="description">
      </div>
      <br>
      <div>
         <label>دسته بندی دوره :</label>
         <select name="courseCategory_id">
            <option hidden>یک دسته بندی برای دوره انتخاب کنید</option>
            @foreach($courseCategories as $courseCategory)
            <option value="{{$courseCategory->id}}">{{$courseCategory->title}}</option>
            @endforeach
         </select>
      </div>
      <br>
      <input type="submit" value="تایید">
   </form>
</body>

</html>