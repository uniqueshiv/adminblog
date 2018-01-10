<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected  $primaryKey = 'id';

    public function tags(){
      return $this->belongsToMany('App\Model\user\tag','post_tags');
    }

    public function categories(){
      return $this->belongsToMany('App\Model\user\tag','category_posts');
    }
}
