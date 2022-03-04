<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;
    /*
    protected $fillable = [
        'id',
        'name',
        'description',
        'video',
        'image',
        'speakers',
        'hosts',
        'spaces',
        'category',
        'language',
        'date'
    ];
    */
    
    protected $fillable = [
        'id_event',
        'id_institution',
        'enable_event',
        'category',
        'type',
        'name',
        'description',
        'video',
        'speakers',
        'appointment',
        'date_start',
        'date_end',
        'schedule_from',
        'schedule_to',
    ];
}
