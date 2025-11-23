<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
   <meta charset=" UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>comment edit</title>
</head>

<body>
   @extends('admin.app.dashboard')
   @section('content')
   <h2>فرم ویرایش نظر ها</h2>
   <form action="{{route('comment.update')}}" method="post">
      @csrf
      <input type="hidden" name="comment_id" value="{{$comment->id}}">
      <div>
         <label for="text">متن نظر:</label>
         <input type="text" name="comment" id="text" value="{{$comment->comment}}">
      </div>
      <br>
      <div>
         <label for="product_id">محصول مربوطه:</label>
         <select name="product_id" id="product_id">
            @foreach($products as $product)
            <option value="{{$product->id}}" @if($product->id == $comment->product_id) selected @endif>{{$product->title}}</option>
            @endforeach
         </select>
      </div>
      <br>
      <div>
         <label for="parent_id">نظر والد:</label>
         <select name="parent_id" id="parent_id">
            <option value="0">بدون والد</option>
            @foreach($comments as $an)
            <option value="{{$an->id}}" @if($comment->parent_id == $an->id) selected @endif>{{$an->comment}}</option>
            @endforeach
         </select>
      </div>
      <br>
      <div>
         <label for="user_id">کابر مربوطه:</label>
         <select name="user_id" id="user_id">
            @foreach($users as $user)
            <option value="{{$user->id}}" @if($user->id == $comment->user_id) selected @endif>{{$user->name}} {{$user->family}}</option>
            @endforeach
         </select>
      </div>
      <br>
      <button type="submit">ثبت</button>
   </form>
   @endsection
</body>

</html>