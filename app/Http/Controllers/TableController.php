<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Box;
use App\Question;
use App\ChoiceCard;
use App\Set;
use App\Value;
use App\Attribute;
use App\Demographic;
use App\DemographicQuestion;
use App\SurveyUser;
use App\SurveyData;

class TableController extends Controller
{


		 public function __construct()
    {
        $this->middleware('auth');
    }








    public function index()
    {

 $sets =  Set::All();
 $questions =  SurveyData::All();


 return view('admin.pages.table_info', compact('sets','questions'));

    }


        public function users()
    {

 $users =  SurveyUser::All();
 $questions =  SurveyData::All();


 return view('admin.pages.table_users', compact('users','questions'));

    }



public function show($id)
{

$questions =  SurveyData::where('survey_user_id',$id)->get();



	 return view('admin.pages.table_users_answer', compact('questions'));
}





}
