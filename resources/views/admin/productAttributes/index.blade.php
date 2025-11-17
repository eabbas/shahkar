<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>product attributes list</title>
</head>

<body>
   <h2>لیست ویژگی های محصولات</h2>
   <table border="1" style="border-collapse: collapse;">
      <thead>
         <tr>
            <th>آیدی</th>
            <th>نام ویژگی</th>
            <th>مقدار ویژگی</th>
            <th>عنوان محصول</th>
            <th>عملیات</th>
         </tr>
      </thead>
      <tbody>
         @foreach($proAttrs as $proAttr)
         <tr>
            <td>{{$proAttr['id']}}</td>
            <td>{{$proAttr['attribute_key']}}</td>
            <td>{{$proAttr['attribute_value']}}</td>
            <td>{{$proAttr['product']['title']}}</td>
            <td>
               <a href="{{route('productAttribute-show',[$proAttr])}}">نمایش</a>
               <a href="{{route('productAttribute-edit',[$proAttr])}}">ویرایش</a>
               <a href="{{route('productAttribute-delete',[$proAttr])}}">حذف</a>
            </td>
         </tr>
         @endforeach
      </tbody>
   </table>
</body>

</html>