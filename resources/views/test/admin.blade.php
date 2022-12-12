@extends("layouts.app")
@section("content")
<form method="POST">
    @csrf
    <input type="text" name="login">
    <input type="password" name="password">
    <input type="submit">
</form>
@endsection