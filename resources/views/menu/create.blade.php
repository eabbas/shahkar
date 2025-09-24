<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>create menu</title>
</head>

<body>
   <h2>فرم ایجاد آیتم های منو</h2>
   <form action="{{route('menu-store')}}" method="post">
      @csrf
      <div>
         <label for="menu_title">عنوان آیتم منو:</label>
         <input type="text" name="title" id="menu_title">
      </div>
      <br>
      <div>
         <label for="menu_desc">توضیحات آیتم منو:</label>
         <input type="text" name="description" id="menu_desc">
      </div>
      <br>
      <div>
         <label for="menu_link">لینک آیتم منو:</label>
         <input type="text" name="link" id="menu_link">
      </div>
      <br>
      <div>
         <label for="menu_icon">آیکون آیتم منو:</label>
         <input type="text" name="icon" id="menu_icon">
      </div>
      <br>
      <div>
         <label for="menu_image">تصویر آیتم منو:</label>
         <input type="text" name="image" id="menu_image">
      </div>
      <br>
      <div>
         <label for="menu_priority">اولویت آیتم منو:</label>
         <input type="number" name="priority" id="menu_priority">
      </div>
      <br>
      <div>
         <label>فعال بودن آیتم منو:</label>
         <div>
            <label for="active">فعال</label>
            <input type="radio" name="activity" value="1" id="active">
            <label for="inactive">غیر فعال</label>
            <input type="radio" name="activity" value="0" id="inactive">
         </div>
      </div>
      <br>
      <div>
         <label>منوی والد :</label>
         <select name="parent_id">
            <option value="0">بدون والد</option>
            @foreach($items as $item)
            <option value="{{$item->id}}">{{$item->title}}</option>
            @endforeach
         </select>
      </div>
      <input type="submit" value="تایید">
   </form>
</body>

</html>