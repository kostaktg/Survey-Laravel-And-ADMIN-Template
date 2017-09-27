<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Set;
use App\ChoiceCard;

class SetController extends Controller
{


	 public function __construct()
    {
        $this->middleware('auth');
    }





     public function create()
    {
    

    	$this->validate(request(), [
'name' => 'required',
    		]);

    	$set = new Set;

    	$set->name = request('name');

    	$set->save();

    	return back();

    }




            public function delete()
    {


    $this->validate(request(), [
'set' => 'required',
            ]);


        $set =  Set::find(request('set'));
        $set->delete();


$deletedRows = ChoiceCard::where('set', request('set'))->get();

foreach ($deletedRows as $row) {
    $row->delete();
}

        return back();

}






   
















}
