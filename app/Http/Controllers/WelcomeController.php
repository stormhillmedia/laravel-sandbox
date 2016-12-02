<?php
// Added by Jim Camomle
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class WelcomeController extends Controller {
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index(){
        return view('welcome');
      // return 'hello world';
    }

     public function contact(){
        return 'contact stuff';
      // return 'hello world';
    }
}