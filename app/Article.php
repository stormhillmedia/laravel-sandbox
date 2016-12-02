<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model
{
    protected $fillable = [
    	'title',
    	'body',
    	'author',
    	'published_at'
    ];

    // setting date fields like this makes them adjustable with methods
    protected $dates = ['published_at'];

    // set <Name> -PublishedAt- (use camelcase when name has underscore) Attribute
    public function setPublishedAtAttribute($date){
    	//print_r($date);
    	$this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d',$date);
    }

    // Query Scope applies as published() in controllers
    public function scopePublished($query){
    	$query->where('published_at', '<=', Carbon::now());
    }

    // Query Scope applies as unpub() in controllers
    public function scopeUnpub($query){
    	$query->where('published_at', '>', Carbon::now());
    }} 
