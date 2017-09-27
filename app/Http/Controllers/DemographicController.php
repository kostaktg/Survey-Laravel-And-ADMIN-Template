<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Demographic;

class DemographicController extends Controller
{
    



    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */






    public function index(){

$demographics = Demographic::All();

    	  return view('admin.pages.add_demographics', compact('demographics'));
    }



    public function store(){


$this->validate(request(), [

	'question' => 'required',



	]);

$question = new Demographic;

$question->question = request('question');
$question->small_info = request('small_info');

$question->save(); 

return back();



    }




        public function update(Request $request ,$id){



$this->validate(request(), [

    'question' => 'required',


    ]);

$question = Demographic::find($id);

$question->question = $request->question;
$question->small_info = $request->small_info;

$question->save(); 

return back();



    }





            public function edit($id)
    {



        $demographic = Demographic::find($id);


        return view('admin.pages.demographic_edit', compact('demographic'));



    }








            public function delete($id)
    {




        $demographic = Demographic::find($id);
        $demographic->delete();



        return back();

}

















}
