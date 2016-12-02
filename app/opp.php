<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class opp extends Model
{

	protected $fillable =['ws_name','ws_opp_num','is_qualified'];
	
    public function opp_cust_datas()
    {
    	return $this->hasMany(opp_cust_data::class);
    }
    public function opp_ext_datas()
    {
    	return $this->hasMany(opp_ext_data::class);
    }

}
