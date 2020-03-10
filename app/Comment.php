<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Student;

class Comment extends Model
{
    protected $fillable =[
        'user_id','student_id','comment'
    ];

    function user() {
        return $this->belongsTo(User::class);
    }
    function student() {
        return $this->belongsTo(Student::class);
    }
}
