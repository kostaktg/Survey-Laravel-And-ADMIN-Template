<?php

namespace App;



class Demographic extends Model
{
       public function item()
    {
        return $this->hasMany(DemographicQuestion::class);
    }




    	public function addItem($text)
	{




$this->item()->create([


	'title' => request('title'),
	'demographic_id' => $this->id,
	]);



	}
}
