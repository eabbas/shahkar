<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @extends('admin.app.dashboard')
    @section('content')
        <form action ="{{ route('courseLevel.store') }}" method="POST">
            @csrf
            <div>
                <labl for="name">title:</label>
                    <input style="background-color:pink" type ="text" id="title" name="title" required>
            </div>

            <button style="background-color:pink; margin-top:50px" type="submit">submit</button>
        </form>
    @endsection
</body>

</html>
