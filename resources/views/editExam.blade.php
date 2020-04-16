@extends('layout')

@section('content')
<div class=" container">
    @foreach ($exam->questions as $question)
        <div><a href="/Exam/edit/question/{{ $question->id }}">{{ $question->question }}</a></div><br>
        @foreach ($question->answers as $answer)
            <input type="radio" name="question" id="{{ $answer->id}}">
            <label for="question">{{ $answer->answer }}</label><br>
        @endforeach

    @endforeach
    <form action="/Exam/edit/{{ $exam->id }}" method="post">
        @csrf
        <button type="submit" class="btn btn-pirates1">Add New Question</button>
    </form>
    <form action="/Exam/edit/{{ $exam->id }}" method="post">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
</div>
@endsection