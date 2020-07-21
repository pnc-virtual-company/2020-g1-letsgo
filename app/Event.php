<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Category;
class Event extends Model
{
    public function Event(){
        return $this->hasMany(User::class);
    }
    public function category(){
        return $this->belongsTo(Category::class, 'cat_id');
    }
}
