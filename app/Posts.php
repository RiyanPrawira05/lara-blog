<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{

	   protected $fillable = ([
   		'category_id', 'title', 'slug', 'content'
   		]);

   		public function category()
   		{
   			return $this->belongsTo(Categories::class);
   		}

   		public function comments()
   		{
   			return $this->hasMany(Comment::class);
   		}
}
