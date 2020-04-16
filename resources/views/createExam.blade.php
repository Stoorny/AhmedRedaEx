@extends('layout')

@section('content')
<form action="/Exam/create" class="" method="POST">
    @csrf

    <input type="text" name="examtitle" placeholder="Exam Title">
    <button type="submit" class="btn btn-primary">Send Your Answers</button>

</form>
@endsection