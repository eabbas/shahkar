@extends('app.document')
@section('title', ' ابتدا وارد شوید ')
    @section('content')
<h1>ابتدا وارد حساب کاربری خود شوید</h1>
<a href="{{route('user.login')}}">login</a>
@endsection