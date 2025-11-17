<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
   <meta charset=" UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>question edit</title>
</head>

<body>
   <h2>فرم ویرایش سوال ها</h2>
   <form action="{{route('question-update')}}" method="post">
      @csrf
      <input type="hidden" name="question_id" value="{{$question->id}}">
      <div>
         <label for="text">متن سوال:</label>
         <input type="text" name="text" id="text" value="{{$question->text}}">
      </div>
      <br>
      <div>
         <label>نوع فعالیت:</label>
         <label for="active">فعال</label>
         <input type="radio" name="activity" id="active" value="1" @if($question->active == 1) checked @endif>
         <label for="inactive">غیر فعال</label>
         <input type="radio" name="activity" id="inactive" value="0" @if($question->active == 0) checked @endif>
      </div>
      <br>
      <div>
         <label for="product_id">محصول مربوطه:</label>
         <select name="product_id" id="product_id">
            @foreach($products as $product)
            <option value="{{$product->id}}" @if($product->id == $question->product_id) selected @endif>{{$product->title}}</option>
            @endforeach
         </select>
      </div>
      <br>
      <div>
         <label for="user_id">کابر مربوطه:</label>
         <select name="user_id" id="user_id">
            @foreach($users as $user)
            <option value="{{$user->id}}" @if($user->id == $question->user_id) selected @endif>{{$user->name}} {{$user->family}}</option>
            @endforeach
         </select>
      </div>
      <button type="submit">ثبت</button>
   </form>
</body>

</html>