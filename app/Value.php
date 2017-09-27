<?php

namespace App;



class Value extends Model
{
    

	public function choiceCard()
    {
        return $this->belongsTo(ChoiceCard::class);
    }

    public function testMe()
    {
    	return $this->belongsTo(Attribute::class);
    }

}
