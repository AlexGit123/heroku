<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fooey extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'excerpt', 'body', 'email'];
}
