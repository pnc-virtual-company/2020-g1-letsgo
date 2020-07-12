<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Event extends Model
{
    public function Event(){
        return $this->hasMany(User::class);
    }
}
