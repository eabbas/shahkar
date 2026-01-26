    @extends('app.document')
    @section('title', 'دسته بندی دوره')
    @section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

        <table border="1">
            <thead>
                <tr>
                    <th style="background-color:salmon;">ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>parent_id</th>
                    <th>img</th>
                    <th>Show_home</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $coursecategory->id }}</td>
                    <td>{{ $coursecategory->title }}</td>
                    <td>{{ $coursecategory->description }}</td>

                    <td style="background-color:beige;">
                        @if ($coursecategory->parent)
                            {{ $coursecategory->parent->title }}
                        @else
                            بدون دسته بندی
                        @endif
                    </td>

                    <td>
                        <img style="width:50px; height:50px; object-fit:cover;"
                            src="{{ asset('storage/' . $coursecategory->img) }}" alt="{{ $coursecategory->title }}">
                    </td>

                    <td>
                        @if ($coursecategory->show_in_home == 1)
                            ✔
                        @else
                            ❌
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>
    </body>
    
    </html>
    
    @endsection