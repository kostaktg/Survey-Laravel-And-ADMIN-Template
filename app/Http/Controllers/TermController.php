<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Term;

class TermController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


public function index(){

$terms=Term::All();

	    return view('admin.pages.add_terms_and_conditions',compact('terms') );
}



public function store(){




	$this->validate(request(), [

		'terms' => 'required',

		]);

	$term = new Term;

	$term->terms = request('terms') ;

	$term->save();



$terms=Term::All();
return view('admin.pages.terms_and_conditions',compact('terms') );

}




public function edit($id){



	$this->validate(request(), [

		'terms' => 'required',

		]);

	$term = Term::find($id);

	$term->terms = request('terms') ;

	$term->save();


$terms=Term::All();


return view('admin.pages.terms_and_conditions',compact('terms') );

}
 }
