@extends('app.document')
@section('title', 'درباره ما')
@section('content')
    
@foreach($aboutus as $au)
<p>{{$au['description']}}</p>
<img src="{{asset($au['image'])}}" alt="aboutus">
@endforeach
@endsection
