<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institutions extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id_institution',
        'name',
        'description',
        'image',
    ];
}
