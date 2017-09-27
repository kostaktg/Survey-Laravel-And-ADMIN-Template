<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Home survey

Route::get('/', function(){
	return view('pages.home');
});

Route::get('/contacts', function(){
	return view('pages.contacts');
});





//SURVEY 1
Route::get('/survey/1' , 'SurveyUserController@index');
Route::get('/terms' , 'SurveyUserController@terms');
Route::post('/survey/1' , 'SurveyUserController@store')->name('store_survey_user_data');





//SURVEY 2
Route::get('/survey/{id}', 'SurveyDataController@questions')->name('survey_data_question');
Route::post('/survey/{id}', 'SurveyDataController@questionsStore')->name('survey_data_question_store');





Route::get('/survey_data/{id}', 'SurveyDataController@choicecard')->name('survey_data_choice_card');
Route::post('/survey_data/{id}', 'SurveyDataController@choicecardStore')->name('survey_data_choice_card_store');



// demographic
Route::get('/demographic/{id}', 'SurveyDataController@demographic')->name('demographic');
Route::post('/demographicstore/{id}', 'SurveyDataController@demographicStore')->name('demographic_store');


//ADMIN ROUTS


//TABLE

Route::get('/table', 'TableController@index')->name('admin_table_index');
Route::get('/table_users', 'TableController@users')->name('admin_table_users');
Route::get('/table_users_answer/{id}', 'TableController@show')->name('admin_table_users_answer');

//END TABLE







//DEMOGRAPHICS
Route::get('/demographics', 'DemographicController@index')->name('demofraphics');
Route::post('/create_demographic', 'DemographicController@store')->name('create_demofraphic');
Route::get('/delete_demographic/{id}', 'DemographicController@delete')->name('delete_demographic');
Route::get('/edit_demographic/{id}', 'DemographicController@edit')->name('edit_demographic');
Route::post('/update_demographic/{id}', 'DemographicController@update')->name('update_demographic');
//END DEMOGRAPHICS




//DEMOGRAPHICS QUESTION
Route::get('/demographics_question/{id}', 'DemographicQuestionController@index')->name('demofraphic_question');
Route::post('/create_demographic_question{id}', 'DemographicQuestionController@store')->name('create_demofraphic_question');
//END DEMOGRAPHICS QUESTION





//CHOICE CARD
Route::get('/choice_card', 'ChoiceCardController@index')->name('admin_form_choice_card');
Route::post('/add_choice_card_info_store', 'ChoiceCardController@store')->name('admin_form_choice_card_store');
Route::get('/add_choice_card_info', 'ChoiceCardController@index')->name('admin_form_choice_card');
Route::get('/delete_choice_card/{id}', 'ChoiceCardController@delete')->name('delete_choice_card');
Route::get('/edit_choice_card/{id}', 'ChoiceCardController@edit')->name('edit_choice_card');
Route::post('/update_choice_card/{id}', 'ChoiceCardController@update')->name('update_choice_card');
//ENDCHOICE CARD


//VALUES
Route::get('/add_choicecard_values/{id}', 'ValueController@index')->name('add_choicecard_values');
Route::post('/add_choicecard_values_store/{id}', 'ValueController@store')->name('admin_choice_card_value_store');
Route::get('/deletechoicecardvalues/{id}', 'ValueController@delete')->name('deletevalues');


//END VALUES



//BOXES
Route::get('/home_admin', 'BoxController@index')->name('admin_table');
Route::post('/addboxinfostore', 'BoxController@store')->name('admin_form_store');
Route::get('/addboxinfo', 'BoxController@index')->name('admin_form_box');
Route::get('/deletebox/{id}', 'BoxController@delete')->name('deletebox');
Route::get('/editbox/{id}', 'BoxController@edit')->name('editbox');
Route::post('/updatebox/{id}', 'BoxController@update')->name('updatebox');
//END BOXES


//QUESTION
Route::get('/addboxquestion/{id}', 'QuestionController@index')->name('admin_form_box_question');
Route::post('/addboxquestion/{id}', 'QuestionController@store')->name('admin_form_box_question_store');
Route::get('/deleteboxquestion/{id}', 'QuestionController@delete')->name('deletequestion');
//ENDQUESTION



//ATTRIBUTES

Route::post('/addattribute', 'AttributeController@create')->name('attribute_create');
Route::post('/deleteatr', 'AttributeController@delete')->name('deleteatr');
//END ATTRIBUTES


//SET

Route::post('/set', 'SetController@create')->name('set_create');
Route::post('/delete_set', 'SetController@delete')->name('deleteset');
//END SET



//  terms and conditions
Route::get('/add_terms', 'TermController@index')->name('add_terms');
Route::post('/add_terms_store', 'TermController@store')->name('add_terms_store');
Route::post('/add_terms_store_edit/{id}', 'TermController@edit')->name('add_terms_store_edit');

//END  terms and conditions




Route::get('/add', function () {
    return view('admin.pages.add');
})->name('admin_form');

//END ADMIN





//LANDING PAGE ROUTS

Route::get('/index', function () {
    return view('pages.home');
})->name('index');

//END LANDING PAGE



//AUTH ROUTS

Auth::routes();

Route::get('/home', 'BoxController@index')->name('home');

//END AUTH