<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   @extends('dashboard')
   @section('content')
   <p class="text-lime-500">id: <span class="text-rose-500">{{$cu['id']}}</span></p>
   <p class="text-lime-500">name: <span class="text-rose-500">{{$cu['name']}}</span></p>
   <p class="text-lime-500">family: <span class="text-rose-500">{{$cu['family']}}</span></p>
   <p class="text-lime-500">email: <span class="text-rose-500">{{$cu['email']}}</span></p>
   <p class="text-lime-500">phoneNum: <span class="text-rose-500">{{$cu['phoneNum']}}</span></p>
   <p class="text-lime-500">description: <span class="text-rose-500">{{$cu['description']}}</span></p>
   <div>
      <a href="{{route('contactus-edit', [$cu])}}">edit</a>
      <a href="{{route('contactus-delete', [$cu])}}">delete</a>
   </div>
   <br>
   <hr><br>
   @endsection
</body>

</html>