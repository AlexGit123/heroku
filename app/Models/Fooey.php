<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fooey extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','title', 'excerpt', 'body', 'email', 'link'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}

