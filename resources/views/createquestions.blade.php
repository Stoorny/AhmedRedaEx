@extends('layout')

@section('content')
<form action="/Exam/create/question" class=" ml-5 mr-5" method="POST">
    @csrf
    <h2>{{ session()->get( 'title' ) }}</h2>
    <input type="hidden" name="examtitle" value="{{ session()->get( 'title' ) }}">
    <input type="hidden" name="examid" value="{{ session()->get( 'id' ) }}">
    <div class="form-group">
        <input class="form-control" type="text" name="question" placeholder="Question">
        <input type="number" name="points" placeholder="Points">
    </div> 
    <div class="form-group">
        <input style="" type="text" name="qans1" placeholder="answer">
    </div>   
    <div class="form-group">
        <input style="" type="text" name="qans2" placeholder="answer">
    </div>   
    <div class="form-group">
        <input style="" type="text" name="qans3" placeholder="answer">
    </div>   
    <div class="form-group">
        <input style="" type="text" name="qans4" placeholder="Correct Answer">
    </div> 

    <button type="submit" class="btn btn-primary">Submit Another Question</button>
</form>



<script>
// function hello(x){

//     if(x=="a"){
//         var elements =document.getElementsByClassName('first5')
//         for (var i = 0; i < elements.length; i++) {
//             elements[i.style.display = 'none';
//         }    
//         show3();
//     }
//     else if(x=="b"){
//         var elements =document.getElementsByClassName('first5')
//         for (var i = 0; i < elements.length; i++) {
//             elements[i.style.display = 'none';
//         }    
//         show4();
//     }
//     else if(x=="c"){show5();}
// }
// function show3(){
//     var elements =document.getElementsByClassName('first3')
//     for (var i = 0; i < elements.length; i++) {
//         elements[i.style.display = 'block';
//     }
// }
// function show4(){
//     var elements =document.getElementsByClassName('first4')
//     for (var i = 0; i < elements.length; i++) {
//         elements[i.style.display = 'block';
//     }
// }
// function show5(){
//     var elements =document.getElementsByClassName('first5')
//     for (var i = 0; i < elements.length; i++) {
//         elements[i.style.display = 'block';
//     }
// }

</script>
@endsection