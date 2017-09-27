<?php

namespace App;



class Question extends Model
{
   



	    public function box()
    {
        return $this->belongsTo(Box::class);
    }



}
