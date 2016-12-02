<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\opp; //cahnge model here

class TestController extends Controller
{	public function index()
	{
		$x= opp::all(); //change model here
		return view('test',compact('x'));
	}
		
	public function show(opp $x) //change model here
	{
		return view('test',compact('x'));

	}



}
