<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\ChoiceCard;
use App\Value;
use App\Attribute;

class ValueController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

	//SHOW
      public function index($id)
    {

               $choicecard = ChoiceCard::find($id);
               $values = Value::where('choice_card_id' ,$id)->orderBy('attribute', 'ASC')->get();
               $attributes = Attribute::All();
$msg = session()->get('data');
       


        return view('admin.pages.add_choice_card_values', compact('choicecard','values','attributes','msg'));
    }




 public function store(ChoiceCard $id)
    {


 $values = Value::All();
foreach($values as $value){

    if($value->attribute==request('attribute') and $value->choice_card_id==$id->id)

return redirect()->back()->with('data', ['Attribute is repeating']);



}

    $this->validate(request(),[


        'attribute' => 'required',

    	'value1' => 'required',
    	'value2' => 'required',
    	'value3' => 'required',
      


    	]);



$id->addValue(request('text'));


return back();

    }



        public function delete($id)
    {





        $question = Value::find($id);
        $question->delete();


        return back();

}





}
