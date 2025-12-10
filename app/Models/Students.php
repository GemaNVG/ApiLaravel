<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Students extends Model
{
    //
    use HasFactory;
    protected $table = "students";
    protected $fillable = [
        'name',
        'email',
        'phone',
        'language'
    ];
}