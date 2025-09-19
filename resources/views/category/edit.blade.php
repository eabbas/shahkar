<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>edit category</title>
</head>

<body>
   <h2>فرم ویرایش دسته بندی</h2>
   <form action="{{route('category-update')}}" method="post">
      @csrf
      <input type="hidden" name="category_id" value="{{$category->id}}">
      <div>
         <label for="catTitle">عنوان دسته بندی:</label>
         <input type="text" name="title" id="catTitle" value="{{$category->title}}">
      </div>
      <br>
      <div>
         <label for="cat_desc">توضیحات دسته بندی:</label>
         <input type="text" name="description" id="cat_desc" value="{{$category->description}}">
      </div>
      <br>
      <input type="submit" value="تایید">
   </form>
</body>

</html>