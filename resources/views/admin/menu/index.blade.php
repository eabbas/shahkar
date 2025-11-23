<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>menu</title>
</head>

<body>
   @extends('admin.app.dashboard')
   @section('content')
   <ul>
      @foreach($items as $item)
      <li>
         <a href="{{$item['link']}}">{{$item['title']}}</a>
         <!-- <i>{{$item['icon']}}</i>
         <img src="{{$item['image']}}"> -->
         <div>
            <a href="{{route('menu-show', [$item])}}">show</a>
            <a href="{{route('menu-edit', [$item])}}">edit</a>
            <a href="{{route('menu-delete', [$item])}}">delete</a>
         </div>
      </li>
      @endforeach
   </ul>
   @endsection
</body>

</html>