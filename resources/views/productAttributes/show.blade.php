<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>product attribute single</title>
</head>

<body>
   <h2>نمایش ویژگی های محصول</h2>
   <table border="1" style="border-collapse: collapse;">
      <thead>
         <tr>
            <th>آیدی</th>
            <th>نام ویژگی</th>
            <th>مقدار ویژگی</th>
            <th>عنوان محصول</th>
         </tr>
      </thead>
      <tbody>
         <tr>
            <td>{{$productAttribute['id']}}</td>
            <td>{{$productAttribute['attribute_key']}}</td>
            <td>{{$productAttribute['attribute_value']}}</td>
            <td>{{$productAttribute['product']['title']}}</td>
         </tr>
      </tbody>
   </table>
   <a href="{{route('productAttribute-index')}}">برگشت</a>
</body>

</html>