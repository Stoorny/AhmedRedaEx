<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\question;
use \App\answer;
use \App\Exam;
class QuestionController extends Controller
{
    public function create(){
        $this->authorize('create', exam::class);
        return view('createquestions');
    }
    public function store(){
        $this->authorize('create', exam::class);
        $question = new question();
        $question->question = request('question'); 
        $question->exam_id = request('examid');
        $question->points = request('points');
        $question->save();

        $answer0= new Answer();
        $answer1= new Answer();
        $answer2= new Answer();
        $answer3= new Answer();

        $answer0->question_id = $question->id;
        $answer1->question_id = $question->id;
        $answer2->question_id = $question->id;
        $answer3->question_id = $question->id;

        $answer0->answer = request('qans1');
        $answer1->answer = request('qans2');
        $answer2->answer = request('qans3');
        $answer3->answer = request('qans4');


        $answer3->correct = true;
        $answer0->save();
        $answer1->save();
        $answer2->save();
        $answer3->save();

        return redirect('/Exam/create/question')
               ->with(['title' => request('examtitle')])
               ->with(['id' => request('examid')]);

    }
    public function edit($id){
        $this->authorize('create', exam::class);
        $question = question::findorfail($id);
        return view('editquestion', compact('question'));
    }
    public function update($id){
        $this->authorize('create', exam::class);
        $question = question::findorfail($id);
        $question->question = request('question');
        $question->points = request('points');
        $question->save();
        foreach($question->answers as $answer){
            $answer = answer::find($answer->id);
            $answer->answer = request($answer->id);
            $answer->save();
        }
        return redirect('/Exam');
    }
    public function delete($id){
        $this->authorize('create', exam::class);
        $question = question::findorfail($id);
        $question->delete();
        $exam = exam::findorfail($question->exam_id);
        return redirect('/Exam/create/question')->with(['title' => $exam->title])->with(['id' => $exam->id]);
    }
}
