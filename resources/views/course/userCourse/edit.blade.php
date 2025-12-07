<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action ="{{route('userCourse.update')}}" method="POST"> 
        @csrf
        <div>
            <input type ="hidden" id="id" name="id" value="{{$userCourse->id}}">
        </div>
        <div>
            <labl for="progress"> progress:</label>
            <input type ="text" id=" progress" name="progress" required value="{{$userCourse->progress}}">
        </div>
        <div>
            <labl for="status"> status:</label>
            <input type ="text" id=" status" name="status" required value="{{$userCourse->status}}">
        </div>
        <div>
            <labl for="course"> course:</label>
             <select name="course_id">
            @foreach($courses as $course)
            <option value="{{$course->id}}"  @if($course->id==$userCourse->course_id) {{ "selected" }}  @endif>{{$course->title}}</option>
            @endforeach
            </select>
        </div>
        <button type="submit" >edit</button>
    </form>
</body>
</html>
