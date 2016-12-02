<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class opp_ext_data extends Model
{
    public function contract_periods()
    {
    	return $this->hasMany(contract_period::class);
    }

    public function organization()
    {
    	return $this->belongsTo(organization::class);
    }

    public function ext_source()
    {
    	return $this->belongsTo(ext_source::class);
    }

    public function competition_type()
    {
    	return $this->belongsTo(competition_type::class);
    }

    public function naics()
    {
    	return $this->belongsToMany(naic::class);
    }

    public function incumbents()
    {
        return $this->hasMany(incumbent::class);
    }
}
