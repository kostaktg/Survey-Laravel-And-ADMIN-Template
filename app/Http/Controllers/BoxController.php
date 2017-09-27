<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Box;

class BoxController extends Controller
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





//INDEX
    public function index()
    {

        $boxes = Box::All();


        return view('admin.pages.add_box_info', compact('boxes'));
    }






    public function store(Request $request)
    {

$this->validate($request, [

    'title' => 'required|max:190',
    'info'  => 'required',
    'small_info' => 'max:190'


    ]);

$box = new Box;

$box->title = $request->title;
$box->info = $request->info;
$box->small_info = $request->small_info;

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


$box = Box::find($id);

$box->title = $request->title;
$box->info = $request->info;
$box->small_info = $request->small_info;

$box->save();





        return back();
    }









        public function edit($id)
    {



        $box = Box::find($id);


        return view('admin.pages.box_edit', compact('box'));



    }





        public function delete($id)
    {




        $question = Box::find($id);
        $question->delete();



        return back();

}



}
