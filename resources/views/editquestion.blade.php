@extends('layout')

@section('content')
<div class=" container">
    <form action="/Exam/edit/question/{{ $question->id }}" class=" form-actions" method="post">
        @method('put')
        @csrf
        <div class="form-group">
        <h2>Question</h2> <input class="form-control" name="question" type="text" value="{{ $question->question }}" id="{{ $question->id }}"><br>
        <h2>Points</h2><input class="form-control" type="number" name="points" placeholder="Points" value="{{ $question->points }}">
        </div>

        <h2>Answers</h2>
        @foreach ($question->answers as $answer)
        <div class="form-group">
            <input type="hidden" name="answerid{{ $answer->id }}" value="{{ $answer->id }}">
            <input class="form-control" name="{{ $answer->id }}" type="text" value="{{ $answer->answer }}">
        </div>
        @endforeach

        <button type="submit" class="btn btn-primary">Send Edit</button>
    </form>
    <form action="/Exam/edit/question/{{ $question->id }}" method="post">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
</div>
@endsection