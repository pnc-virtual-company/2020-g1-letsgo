<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Category;
class Event extends Model
{
    public function users(){
        return $this->belongsToMany(User::class);
    }
    public function category(){
        return $this->belongsTo(Category::class,'cat_id');
    }
}
