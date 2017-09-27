<?php

namespace App;



class SurveyData extends Model
{
    	    public function SurveyUser()
    {
        return $this->belongsTo(SurveyUser::class);
    }
}
