<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>create product</title>
</head>

<body>
   <h2>فرم ایجاد محصول</h2>
   <form action="{{route('product-store')}}" method="post">
      @csrf
      <div>
         <label for="title">نام محصول:</label>
         <input type="text" name="title" id="title">
      </div>
      <br>
      <div>
         <label for="description">توضیحات محصول:</label>
         <input type="text" name="description" id="description">
      </div>
      <br>
      <div>
         <label for="image">عکس محصول:</label>
         <input type="text" name="image" id="image">
      </div>
      <br>
      <div>
         <label for="summary">خلاصه محصول:</label>
         <input type="text" name="summary" id="summary">
      </div>
      <br>
      <div>
         <label>دسته بندی :</label>
         <select name="category_id">
            <option hidden>یک دسته بندی برای محصول انتخاب کنید</option>
            @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->title}}</option>
            @endforeach
         </select>
      </div>
      <br>
      <input type="submit" value="تایید">
   </form>
</body>

</html>