<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model{
	//Post, laravel buscara => posts
	protected $table = 'posts';

	protected $fillable = ['title','description','url'];
}