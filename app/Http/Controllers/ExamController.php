<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\exam;
use \App\answer;
use App\question;
use App\User;

class ExamController extends Controller
{
    public function index(){
        $this->authorize('create', exam::class);
        $exams= exam::all();
        return view('showallexams', compact('exams'));
    }
    public function show($id){
        $exam = \App\Exam::findorFail($id);
        return view('Exam', compact('exam'));
    }
    public function create(){
        $this->authorize('create', exam::class);
        return view('createExam');
    }
    public function store(){
        $this->authorize('create', exam::class);
        $exam = new exam();
        $exam->title = request('examtitle');
        $exam->save();
        return redirect('/Exam/create/question')->with(['title' => $exam->title])->with(['id' => $exam->id]);
    }
    public function edit($id){
        $this->authorize('create', exam::class);
        $exam = exam::findorfail($id);
        return view('editexam', compact('exam'));
    }
    public function delete($id){
        $this->authorize('create', exam::class);

        $exam = exam::findorfail($id);
        $exam->delete();
        return view('createexam');
    }
    public function addquestion($id){
        $this->authorize('create', exam::class);
        $exam = exam::findorfail($id);
        return redirect('/Exam/create/question')->with(['title' => $exam->title])->with(['id' => $exam->id]);
    }
    public function correct(User $user, Request $request){
        $ids = $request->except('_token');
        $count =0;
        foreach($ids as $id){
            $answer = answer::find($id);
            $question = question::find($answer->question_id);
            if($answer->correct == true){
                $count += $question->points;
            }
        }
        $user = auth()->user();
        $user->grade=$count;
        $user->save();
        return view('/home');
    }
}
