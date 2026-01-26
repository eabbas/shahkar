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
                    <th style="color:black">status</th>
                    <th style="color:black">opreation</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($statuses as $status)
                    <tr>
                        <td style="background-color:white">{{ $status->title }}</td>
                        <td style="background-color:white">
                            <a href="{{ route('status.show', [$status]) }}">show</a>
                            <a href="{{ route('status.edit', [$status]) }}">edit</a>
                            <a href="{{ route('status.delete', [$status]) }}">delete</a>
                        </td>
                    </tr>
                    </tr>
                @endforeach
        </table>
    @endsection
</body>

</html>
