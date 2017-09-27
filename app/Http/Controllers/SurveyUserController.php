<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SurveyUser;
use App\Set;
use App\Term;

class SurveyUserController extends Controller
{



public function index()
{

		return view('survey.index');

}




    public function store()
{




$set = Set::min('num');
$sets = Set::where('num', $set)->get()->take(1);

$obj = Set::find($sets[0]->id);

$obj->num = $obj->num +1;

$obj->save();


	$this->validate(request(),[


'fname' => 'required',
'email' => 'required|unique:survey_users,mail|email',
'term'  => 'required',


		]);


	$user = new SurveyUser;

	$user->fname = request('fname');
	$user->lname = request('lname');
	$user->mail = request('email');
	$user->phone = request('phone');
	$user->set_id = $sets[0]->id;

	$user->save();

$id = SurveyUser::where('mail', request('email'))->get();




		return redirect(route('survey_data_question',$id[0]->id))->with('data', ['true']);

}



public function terms()
{


$term = Term::All();
$term = $term[0]->terms;





	return view('survey.terms', compact('term'));

}




















}
