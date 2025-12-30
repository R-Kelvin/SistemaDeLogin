@extends('master')
@section('content')

<a href="{{ route('home') }}">home</a>
<h2>login</h2>

<form action="{{ route('login.store') }} " method="post">

@csrf
<input type="text" name="email" value="ruan123@gmail.com">
<input type="password" name="password" value="123">

<button type="submit">entrar</button>

</form>

@endsection