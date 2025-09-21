<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>edit course</title>
</head>

<body>
   <h2>فرم ویرایش دوره</h2>
   <form action="{{route('course-update')}}" method="post">
      <input type="hidden" name="course_id" value="{{$course->id}}">
      @csrf
      <div>
         <label for="title">نام دوره:</label>
         <input type="text" name="title" id="title" value="{{$course->title}}">
      </div>
      <br>
      <div>
         <label for="description">توضیحات دوره:</label>
         <input type="text" name="description" id="description" value="{{$course->description}}">
      </div>
      <br>
      <div>
         <label>دسته بندی :</label>
         <select name="courseCategory_id">
            <option hidden>یک دسته بندی برای دوره انتخاب کنید</option>
            @foreach($courseCategories as $courseCategory)
            <option value="{{$courseCategory->id}}" @if($courseCategory->id == $course->courseCategory_id) selected @endif >{{$courseCategory->title}}</option>
            @endforeach
         </select>
      </div>
      <br>
      <input type="submit" value="تایید">
   </form>
</body>

</html>