@extends('layout')

@section('content')
<div class=" container">
    @foreach ($exams as $exam)
        <div><a href="/Exam/edit/{{ $exam->id }}">{{ $exam->title }} of id {{ $exam->id }}</a></div><br>
    @endforeach
</div>
@endsection