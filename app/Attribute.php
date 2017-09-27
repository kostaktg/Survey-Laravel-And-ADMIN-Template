<?php

namespace App;



class Attribute extends Model
{
    public function values()
    {
    	return $this->hasMany(Value::class);
 
    }
}
