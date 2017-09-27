<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ChoiceCard;
use App\Set;

class ChoiceCardController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $choicecards = ChoiceCard::All();
        $sets = Set::All();


        return view('admin.pages.add_choice_card_info', compact('choicecards','sets'));
    }




    //         public function edit($id)
    // {



    //     $chicecard = ChoiceCard::find($id);


    //     return view('admin.pages.add_chice_card_values', compact('chicecard '));



    // }






        public function store(Request $request)
    {




$this->validate($request, [

    'title' => 'required|max:190',
    'info'  => 'required',
    'small_info' => 'max:190',
    'set' => 'required',


    ]);

$box = new ChoiceCard;

$box->title = $request->title;
$box->info = $request->info;
$box->small_info = $request->small_info;
$box->set = $request->set;

$box->save();





        return back();
    }



 public function update(Request $request ,$id)
    {

$this->validate($request, [

    'title' => 'required|max:190',
    'info'  => 'required',
    'small_info' => 'max:190'


    ]);

$choicecard = ChoiceCard::find($id);

$choicecard->title = $request->title;
$choicecard->info = $request->info;
$choicecard->small_info = $request->small_info;

$choicecard->save();





        return back();
    }




 public function edit($id)
    {



        $choicecard = ChoiceCard::find($id);


        return view('admin.pages.choice_card_edit', compact('choicecard'));



    }






        public function delete($id)
    {




        $question = ChoiceCard::find($id);
        $question->delete();



        return back();

}




}
