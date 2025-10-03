<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>product list</title>
</head>

<body>
   <h2>لیست محصولات</h2>
   <table border="1" style="border-collapse: collapse;">
      <thead>
         <tr>
            <th>آیدی</th>
            <th>عنوان محصول</th>
            <th>توضیحات محصول</th>
            <th>عکس محصول</th>
            <th>خلاصه محصول</th>
            <th>دسته بندی محصول</th>
            <th>عملیات</th>
         </tr>
      </thead>
      <tbody>
         @foreach($products as $product)
         <tr>
            <td>{{$product['id']}}</td>
            <td>{{$product['title']}}</td>
            <td>{{$product['description']}}</td>
            <td>{{$product['image']}}</td>
            <td>{{$product['summary']}}</td>
            <td>@if($product['category']) {{$product['category']['title']}} @endif</td>
            <td>
               <a href="{{route('product-show',[$product])}}">نمایش</a>
               <a href="{{route('product-edit',[$product])}}">ویرایش</a>
               <a href="{{route('product-delete',[$product])}}">حذف</a>
            </td>
         </tr>
         @endforeach
      </tbody>
   </table>
</body>

</html>