<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

	protected $fillable = [
		'title',
		'image',
		'author_id',
		'excerpt',
		'body',
		'slug'];
}
