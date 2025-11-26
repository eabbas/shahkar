
@extends('app.document')
@section('title', 'دسته بندی')
    @section('content')
   <h2>نمایش دسته بندی</h2>
   <table border="1" style="border-collapse: collapse;">
      <thead>
         <tr>
            <th>آیدی</th>
            <th>عنوان دسته بندی</th>
            <th>توضیحات دسته بندی</th>
            <th>دسته بندی فرزند</th>
            <th>تصویر</th>
         </tr>
      </thead>
      <tbody>
         <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->title}}</td>
            <td>{{$category->description}}</td>
            <td>@if($category->children) @foreach($category->children as $child) {{$child->title}} <br> @endforeach @endif</td>
            <td>{{$category->image}}</td>
      </tbody>
   </table>
   <a href="{{route('category-index')}}">برگشت</a>
@endsection