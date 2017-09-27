<?php

namespace App;



class ChoiceCard extends Model
{
   


    public function value()
    {
        return $this->hasMany(Value::class);
    }




    	public function addValue($text)
	{




$this->value()->create([


	'value1' => request('value1'),
	'value2' => request('value2'),
	'value3' => request('value3'),
	'choice_card_id' => $this->id,
	'attribute' => request('attribute'),
	]);



	}



}
