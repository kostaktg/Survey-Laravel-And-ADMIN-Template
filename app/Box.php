<?php

namespace App;



class Box extends Model
{
    

        public function question()
    {
        return $this->hasMany(Question::class);
    }




    	public function addQuestion($text)
	{




$this->question()->create([


	'text' => request('text'),
	'box_id' => $this->id,
	]);



	}



}
