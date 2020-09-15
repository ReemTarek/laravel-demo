@extends('layouts.app')

@section('content')
<form method="post" action="/create">
@csrf
<input type="text" name="PostTitle">
<br>
<input type="text" name="PostDesc">
<br>
<input type="submit">
</form>
@endsection