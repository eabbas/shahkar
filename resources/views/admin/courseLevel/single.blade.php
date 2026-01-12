<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @extends('admin.app.dashboard')
    @section('content')
        <table border="1" style="background-color:teal;color:olive ">
            <thead>
                <tr>
                    <th style="color:black">level</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="background-color:white">{{ $level->title }}</td>
                </tr>
                </tr>
        </table>
    @endsection
</body>

</html>
