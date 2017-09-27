<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Box;
use App\Question;

class QuestionController extends Controller
{
  

    public function __construct()
    {
        $this->middleware('auth');
    }



//SHOW
      public function index($id)
    {

               $box = Box::find($id);
               $questions = Question::where('box_id' ,$id)->get();



        return view('admin.pages.add_box_question', compact('box','questions'));
    }




    public function store(Box $id)
    {

    $this->validate(request(),[

    	'text' => 'required',

    	]);

$id->addQuestion(request('text'));


return back();

    }




        public function delete($id)
    {




        $question = Question::find($id);
        $question->delete();



        return back();

}








}
