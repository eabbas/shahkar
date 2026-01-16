

@extends('app.document')
@section('title', 'پاسخ')
@section('content')
    <form action="{{ route('answer_store', $question->id) }}" method="post">
        @csrf

        <label for="answer">Answer:</label>
        <textarea id="answer" name="answer" style="width:100%; height:120px;"></textarea>

        <br><br>


        <button type="submit">Submit</button>
    </form>
@endsection
