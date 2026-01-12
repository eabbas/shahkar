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
                <th style="color:black">course</th>
                <th style="color:black">comment</th>

            </tr>
        </thead>
        <tbody>
           <tr>
            <td style="background-color:white" >{{$userCourse->title}}</td>
            <td style="background-color:white;">{{$userCourse->progress}}</td>
            <td style="background-color:white;">{{$userCourse->status}}</td>
            <td style="background-color:white;">{{$user_course->title}}</td>
            <td style="background-color:white">
                <a href="{{ route('comment.create', [$userCourse])}}">افزودن نظر</a>
            </td>
        </tr>
        </tr>
       </table>
</body>
</html>
