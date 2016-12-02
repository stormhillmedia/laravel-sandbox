<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class opp_cust_data extends Model
{

    protected $fillable =['name'];


    public function capture_notes()
    {
    	return $this->hasMany(capture_note::class);
    }

    public function actions()
    {
    	return $this->hasMany(action::class);
    }
    
    public function opp()
    {
    	return $this->belongsTo(opp::class);
    }

    public function opp_category()
    {
    	return $this->belongsTo(opp_category::class);
    }
}
