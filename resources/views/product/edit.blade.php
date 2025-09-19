<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>create product</title>
</head>

<body>
   <h2>فرم ویرایش محصول</h2>
   <form action="{{route('product-update')}}" method="post">
      <input type="hidden" name="product_id" value="{{$product->id}}">
      @csrf
      <div>
         <label for="title">نام محصول:</label>
         <input type="text" name="title" id="title" value="{{$product->title}}">
      </div>
      <br>
      <div>
         <label for="description">توضیحات محصول:</label>
         <input type="text" name="description" id="description" value="{{$product->description}}">
      </div>
      <br>
      <div>
         <label for="image">عکس محصول:</label>
         <input type="text" name="image" id="image" value="{{$product->image}}">
      </div>
      <br>
      <div>
         <label for="summary">خلاصه محصول:</label>
         <input type="text" name="summary" id="summary" value="{{$product->summary}}">
      </div>
      <br>
      <div>
         <label>دسته بندی :</label>
         <select name="category_id">
            <option hidden>یک دسته بندی برای محصول انتخاب کنید</option>
            @foreach($categories as $category)
            <option value="{{$category->id}}" @if($category->id == $product->category_id) selected @endif >{{$category->title}}</option>
            @endforeach
         </select>
      </div>
      <br>
      <input type="submit" value="تایید">
   </form>
</body>

</html>