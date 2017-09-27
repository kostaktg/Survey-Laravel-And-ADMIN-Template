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

class SurveyDataController extends Controller
{






//QUESTION

    public function questions($id)
    {

      if( session('data')){

        $boxes = Box::All();
        $questions = Question::All();


        return view('survey.questions', compact('boxes','questions','id'));

      }


      return back();

    }











        public function questionsStore($id, Request $request)
    {

$name=1;
$name1=1000;


 $questions = Question::All();

foreach($questions as $question) { 
   
   $obj = new SurveyData;

   $obj->survey_user_id = $id;
   $obj->type = 'question';
   $obj->answer = $request->$name ;
   $obj->question_id = $request->$name1 ;

   $obj-> save();



   $name++;
   $name1++;
}


        return redirect(route('survey_data_choice_card',$id))->with('data', ['true']);
    }

//END QUESTION






//CHOICECARD
    public function choicecard($id)
    {
 if( session('data')){

$user = SurveyUser::find($id);
$set_id=$user->set_id;


        $choicecards = ChoiceCard::All();
        $sets = Set::All();


        $values = Value::All();

return view('survey.choicecards', compact('choicecards','sets','values','id','set_id'));


}


      return back();
    }





    public function choicecardStore($id, Request $request)
    {



        $choicecards = ChoiceCard::All();
        $sets = Set::All();
        $values = Value::All();


$name=1;
$name1=1000;


foreach($choicecards as $choicecard)
if($choicecard->set == $request->set_id){
{

 $obj = new SurveyData;

   $obj->survey_user_id = $id;
   $obj->type = 'choicecard';
   $obj->answer = $request->$name ;
   $obj->question_id = $request->$name1 ;

   $obj-> save();

   $name++;
   $name1++;

}}

  return redirect(route('demographic',$id))->with('data', ['true']);

    }







//END CHOICECARD

    public function demographic($id)
    {
 if( session('data')){

        $demographics = Demographic::All();
        $items = DemographicQuestion::All();


return view('survey.debrief', compact('demographics','items','id'));
}

return back();
    }




    public function demographicStore($id, Request $request)
    {


        $demographics = Demographic::All();
        $items = DemographicQuestion::All();




        $name=1;
$name1=1000;

foreach($demographics as $demographic)
{

 $obj = new SurveyData;

   $obj->survey_user_id = $id;
   $obj->type = 'debrief';
   $obj->answer = $request->$name ;
   $obj->question_id = $request->$name1 ;

   $obj-> save();



   $name++;
   $name1++;

}


  return redirect('/');
    }




    





}
