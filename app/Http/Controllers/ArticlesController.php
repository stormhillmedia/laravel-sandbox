<?php

namespace App\Http\Controllers;
use App\Article;
use Carbon\Carbon;

use Illuminate\Http\Request;
//use Request;

class ArticlesController extends Controller {
    public function index(){
    	$articles = Article::latest('published_at')->unpub()->get();
    	//return $articles;
    	return view('articles.index',compact('articles')); 
    }

    public function show($id){
    	$article = Article::findOrFail($id);
    	dd($article->published_at);
    	//return $article;

    	return view('articles.show',compact('article'));
    }

    public function create(){
    	return view('articles.create');
    }

     public function store(Request $request){
     	//$input = Request::all();
     	//$input['published_at'] = Carbon::now();
     	//$title = Request::get('title');
     	$this->validate($request, [
     			'title' => 'required',
     			'body' => 'required'
     		]);
     	Article::create($request->all());
     	return redirect('articles');
    }


}  
