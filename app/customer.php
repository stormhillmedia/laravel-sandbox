<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    public function search_criterias()
    {
    	return $this->hasMany(search_criteria::class);
    }

    public function customer_fy_goals()
    {
    	return $this->hasMany(customer_fy_goal::class);
    }

    public function customer_factors()
    {
    	return $this->hasMany(customer_factor::class);
    }

    public function User()
    {
    	return $this->hasMany(users::class);
    }
}
