@extends('app.document')
@section('title', 'دوره')
    @section('content')
        
   <h2>نمایش دوره</h2>
   <table border="1" style="border-collapse: collapse;">
      <thead>
         <tr>
            <th>آیدی</th>
            <th>عنوان دوره</th>
            <th>توضیحات دوره</th>
            <th>دسته بندی دوره</th>
         </tr>
      </thead>
      <tbody>
         <tr>
            <td>{{$course['id']}}</td>
            <td>{{$course['title']}}</td>
            <td>{{$course['description']}}</td>
            <td>@if($course['courseCategory']) {{$course['courseCategory']['title']}} @endif</td>
         </tr>
      </tbody>
   </table>
   <a href="{{route('course-index')}}">برگشت</a>
@endsection