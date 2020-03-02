<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Student extends Model
{

    function user() {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'firstname', 'lastname','gender','class','year','picture','province','status',
   ];
}
