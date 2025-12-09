<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    protected $table = "students"; // también corrige esto, debe ser plural igual que tu migración

    protected $fillable = [
        'name',
        'email',
        'phone',
        'language'
    ];
}
