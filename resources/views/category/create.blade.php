<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>create category</title>
</head>

<body>
   <h2>فرم ایجاد دسته بندی</h2>
   <form action="{{route('category-store')}}" method="post">
      @csrf
      <div>
         <label for="catTitle">عنوان دسته بندی:</label>
         <input type="text" name="title" id="catTitle">
      </div>
      <br>
      <div>
         <label for="cat_desc">توضیحات دسته بندی:</label>
         <input type="text" name="description" id="cat_desc">
      </div>
      <br>
      <input type="submit" value="تایید">
   </form>
</body>

</html>