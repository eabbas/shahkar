<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>menu item single</title>
</head>

<body>
   <h2>نمایش آیتم منو</h2>
   <table border="1" style="border-collapse: collapse;">
      <thead>
         <tr>
            <th>آیدی</th>
            <th>عنوان</th>
            <th>توضیحات</th>
            <th>لینک</th>
            <th>آیکون</th>
            <th>تصویر</th>
            <th>اولویت</th>
            <th>نوع فعالیت</th>
            <th>والد</th>
         </tr>
      </thead>
      <tbody>
         <tr>
            <td>{{$menu->id}}</td>
            <td>{{$menu->title}}</td>
            <td>{{$menu->description}}</td>
            <td>{{$menu->link}}</td>
            <td>{{$menu->icon}}</td>
            <td>{{$menu->image}}</td>
            <td>{{$menu->priority}}</td>
            <td>@if($menu->active == 0) غیر فعال @endif @if($menu->active == 1) فعال @endif</td>
            <td>@if(!$menu->parent) بدون والد @else {{$menu->parent->title}} @endif</td>
      </tbody>
   </table>
   <a href="{{route('menu-index')}}">برگشت</a>
</body>

</html>