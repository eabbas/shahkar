<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>contact methods list</title>
</head>

<body>
   @extends('admin.app.dashboard')
   @section('content')
   <h2>لیست راه های ارتباطی</h2>
   <table border="1" style="border-collapse: collapse;">
      <thead>
         <tr>
            <th>آیدی</th>
            <th>راه ارتباطی (ایمیل یا شماره تماس)</th>
            <th>عملیات</th>
         </tr>
      </thead>
      <tbody>
         @foreach($homeForms as $homeForm)
         <tr>
            <td>{{$homeForm['id']}}</td>
            <td>{{$homeForm['contactMethod']}}</td>
            <td>
               <!-- <a href="{{route('homeForm-show',[$homeForm])}}">نمایش</a> -->
               <a href="{{route('homeForm-edit',[$homeForm])}}">ویرایش</a>
               <a href="{{route('homeForm-delete',[$homeForm])}}">حذف</a>
            </td>
         </tr>
         @endforeach
      </tbody>
   </table>
   @endsection
</body>

</html>