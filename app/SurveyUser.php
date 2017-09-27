<?php

namespace App;



class SurveyUser extends Model
{



        public function surveyData()
    {
        return $this->hasMany(SurveyData::class);
    }
    



    public function addSurveyData($text)
	{




$this->surveyData()->create([


	'text' => request('text'),
	'survey_user_id' => $this->id,
	]);



	}


















}
