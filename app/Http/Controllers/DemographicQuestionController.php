<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DemographicQuestion;
use App\Demographic;

class DemographicQuestionController extends Controller
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



public function index($id){


$items = DemographicQuestion::where('demographic_id', $id)->get();
$demographics = Demographic::Find($id);

	 return view('admin.pages.add_demographics_question', compact('demographics','items'));
}



public function store(Demographic $id){









	$this->validate(request(), [

	'title' => 'required',


	]);

$id->additem(request('text'));



$flights = Demographic::find($id->id);


   $flights->type = '1';     
               
             
$flights->save();



return back();
}




}
