<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

	protected $table = 'posts';

	public $primaryKey = 'id';

	protected $fillable = [
		'title',
		'image',
		'author_id',
		'excerpt',
		'body',
		'slug'];
}
