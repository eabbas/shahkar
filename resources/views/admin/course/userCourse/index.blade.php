<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
       <table border="1"  style="background-color:teal;color:olive ">
        <thead>
            <tr>
                <th  style="color:black">title</th>
                <th style="color:black">progress</th>
                <th style="color:black">status</th>
                <th style="color:black">option</th>

            </tr>
        </thead>
        <tbody>
        @foreach($userCourses as $userCourse)
           <tr>
            <td style="background-color:white" >{{$userCourse->title}}</td>
            <td style="background-color:white;">{{$userCourse->progress}}</td>
            <td style="background-color:white;">{{$userCourse->status}}</td>
            <td style="background-color:white">
                    <a href="{{ route('userCourse.show', [$userCourse])}}">show</a>
                    <a href="{{ route('userCourse.edit', [$userCourse])}}">edit</a>
                    <a href="{{ route('userCourse.delete', [$userCourse])}}" >delete</a>
                    <a href="{{ route('userCourse.comments', [$userCourse])}}" > نمایش نظرات</a>
                </td>
        </tr>
        </tr>
        @endforeach
       </table>
</body>
</html>
