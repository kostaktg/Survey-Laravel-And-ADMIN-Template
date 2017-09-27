<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attribute;
use App\Value;

class AttributeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
    

    	$this->validate(request(), [
'addattribute' => 'required',
    		]);

    	$atr = new Attribute;

    	$atr->name = request('addattribute');

    	$atr->save();

    	return back();

    }



            public function delete()
    {

    $this->validate(request(), [
'id' => 'required',
            ]);


        $question =  Attribute::find(request('id'));
        $question->delete();


$deletedRows = Value::where('attribute', request('id'))->get();

foreach ($deletedRows as $row) {
    $row->delete();
}

        return back();

}


}
