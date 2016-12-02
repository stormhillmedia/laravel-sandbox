<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about(){
    	$data = [];
    	$first = 'Jim';
    	$last = 'Cam';
    	return view('pages.about')->with(compact('first','last'));
    }
}
