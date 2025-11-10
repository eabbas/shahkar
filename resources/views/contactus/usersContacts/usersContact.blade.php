<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   لیست درخواست های تماس با مای شما
   @foreach($user->contactuss as $contactus)
   <p>id: <span>{{$contactus['id']}}</span></p>
   <p>user: <span>{{$contactus['user']['name']}} {{$contactus['user']['family']}}</span></p>
   <p>name: <span>{{$contactus['name']}}</span></p>
   <p>family: <span>{{$contactus['family']}}</span></p>
   <p>email: <span>{{$contactus['email']}}</span></p>
   <p>phoneNum: <span>{{$contactus['phoneNum']}}</span></p>
   <p>description: <span>{{$contactus['description']}}</span></p>
   <p>date: <span>{{$contactus['created_at']}}</span></p>
   <div>
      <a href="{{route('contactus-usersContact-edit', [$contactus])}}">edit</a>
      <a href="{{route('contactus-usersContact-delete', [$contactus])}}">delete</a>
   </div>
   <br>
   <hr><br>
   @endforeach
   <a href="{{route('contactus-create')}}">درخواست تماس با مای جدید</a>
</body>

</html>