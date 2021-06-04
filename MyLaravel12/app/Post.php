<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//1 post molti commenti
//molti post molti commenti
class Post extends Model
{
    protected $fillable = [
      'title',
      'text',
    ];

    public function comments() {
      return $this -> hasMany(Comment::class);
    }

    public function users() {
      return $this -> belongsToMany(User::class);
    }
}
