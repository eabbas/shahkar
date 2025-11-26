@extends('app.document')
@section('title', 'دسته بندی های دوره ها')
    @section('content')
        
   <h2> لیست دسته بندی دوره</h2>
   <table border="1" style="border-collapse: collapse;">
      <thead>
         <tr>
            <th>آیدی</th>
            <th>عنوان دسته بندی دوره</th>
            <th>دسته بندی فرزند</th>
            <th>عملیات</th>
         </tr>
      </thead>
      <tbody>
         @foreach($courseCategories as $courseCategory)
         <tr>
            <td>{{$courseCategory->id}}</td>
            <td>{{$courseCategory->title}}</td>
            <td>@if($courseCategory->children) @foreach($courseCategory->children as $child) {{$child->title}} <br> @endforeach @endif</td>
            <td>
               <a href="{{route('courseCategory-show', [$courseCategory])}}">نمایش</a>
            </td>
         </tr>
         @endforeach
      </tbody>
   </table>
@endsection