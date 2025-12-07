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
                <th  style="color:black">level</th>
                <th style="color:black">opreation</th>

            </tr>
        </thead>
        <tbody>
        @foreach($levels as $level)
           <tr>
            <td   style="background-color:white" >{{$level->title}}</td>
            <td style="background-color:white">
                    <a href="{{ route('courseLevel.show', [$level])}}">show</a>
                    <a href="{{ route('courseLevel.edit', [$level])}}">edit</a>
                    <a href="{{ route('courseLevel.delete', [$level])}}" >delete</a>
                </td>
        </tr>
        </tr>
        @endforeach
       </table>
</body>
</html>
