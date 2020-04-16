@extends('layout')

@section('content')
<div class=" container">
    <form action="/Exam" class="" method="POST">
        @csrf

        @foreach ($exam->questions->shuffle() as $question)
            
            <h2>{{ $question->question }}</h2>

            @foreach ($question->answers->shuffle() as $answer)
            <div class="custom-control custom-radio m-1">
                <input class="custom-control-input" type="radio" name="{{ $question->id }}" id="{{ $answer->id }}"
                value="{{ $answer->id }}">
                <label class="custom-control-label" for="{{ $answer->id }}">{{ $answer->answer }}</label><br>
            </div>
            @endforeach

        @endforeach

        <button type="submit" class="btn btn-success">Send Your Answers</button>

    </form>
</div>
@endsection