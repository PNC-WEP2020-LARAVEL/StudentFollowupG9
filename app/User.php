<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Role;
use App\Student;
use App\Comment;
class User extends Model
{
    protected $fillable =[
        'role_id','firstname','lastname','email','address','position','password'
    ];
    public function role() {
        return $this ->belongsTo(Role::class);
    }

    public function students() {
        return $this ->hasMany(Student::class);
    }

    public function comments() {
        return $this ->hasMany(Comment::class);
    }
}
