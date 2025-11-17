<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
   <meta charset=" UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>answer edit</title>
</head>

<body>
   <h2>فرم ویرایش پاسخ ها</h2>
   <form action="{{route('answer-update')}}" method="post">
      @csrf
      <input type="hidden" name="answer_id" value="{{$answer->id}}">
      <div>
         <label for="text">متن پاسخ:</label>
         <input type="text" name="text" id="text" value="{{$answer->text}}">
      </div>
      <br>
      <div>
         <label for="question_id">سوال مربوطه:</label>
         <select name="question_id" id="question_id">
            @foreach($questions as $question)
            <option value="{{$question->id}}" @if($question->id == $answer->question_id) selected @endif>{{$question->text}}</option>
            @endforeach
         </select>
      </div>
      <br>
      <div>
         <label for="parent_id">پاسخ والد:</label>
         <select name="parent_id" id="parent_id">
            <option value="0">بدون والد</option>
            @foreach($answers as $an)
            <option value="{{$an->id}}" @if($answer->parent_id == $an->id) selected @endif>{{$an->text}}</option>
            @endforeach
         </select>
      </div>
      <br>
      <div>
         <label for="user_id">کابر مربوطه:</label>
         <select name="user_id" id="user_id">
            @foreach($users as $user)
            <option value="{{$user->id}}" @if($user->id == $answer->user_id) selected @endif>{{$user->name}} {{$user->family}}</option>
            @endforeach
         </select>
      </div>
      <br>
      <button type="submit">ثبت</button>
   </form>
</body>

</html>