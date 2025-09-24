<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>edit menu</title>
</head>

<body>
   <h2>فرم ویرایش منو</h2>
   <form action="{{route('menu-update')}}" method="post">
      <input type="hidden" name="menu_id" value="{{$menu->id}}">
      @csrf
      <div>
         <label for="menu_title">عنوان آیتم منو:</label>
         <input type="text" name="title" id="menu_title" value="{{$menu->title}}">
      </div>
      <br>
      <div>
         <label for="menu_desc">توضیحات آیتم منو:</label>
         <input type="text" name="description" id="menu_desc" value="{{$menu->description}}">
      </div>
      <br>
      <div>
         <label for="menu_link">لینک آیتم منو:</label>
         <input type="text" name="link" id="menu_link" value="{{$menu->link}}">
      </div>
      <br>
      <div>
         <label for="menu_icon">آیکون آیتم منو:</label>
         <input type="text" name="icon" id="menu_icon" value="{{$menu->icon}}">
      </div>
      <br>
      <div>
         <label for="menu_image">تصویر آیتم منو:</label>
         <input type="text" name="image" id="menu_image" value="{{$menu->image}}">
      </div>
      <br>
      <div>
         <label for="menu_priority">اولویت آیتم منو:</label>
         <input type="number" name="priority" id="menu_priority" value="{{$menu->priority}}">
      </div>
      <br>
      <div>
         <label>فعال بودن آیتم منو:</label>
         <div>
            <label for="active">فعال</label>
            <input type="radio" name="activity" value="1" id="active" @if($menu->active == 1) checked @endif>
            <label for="inactive">غیر فعال</label>
            <input type="radio" name="activity" value="0" id="inactive" @if($menu->active == 0) checked @endif>
         </div>
      </div>
      <br>
      <div>
         <label>منوی والد :</label>
         <select name="parent_id">
            <option value="0">بدون والد</option>
            @foreach($items as $item)
            <option value="{{$item->id}}" @if($item->id == $menu->parent_id) selected @endif>{{$item->title}}</option>
            @endforeach
         </select>
      </div>
      <input type="submit" value="تایید">
   </form>
</body>

</html>