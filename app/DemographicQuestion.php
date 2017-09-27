<?php

namespace App;


class DemographicQuestion extends Model
{
    		    public function demographic()
    {
        return $this->belongsTo(Demographic::class);
    }
}
