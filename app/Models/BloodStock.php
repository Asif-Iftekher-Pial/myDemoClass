<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodStock extends Model
{
    use HasFactory;
    protected $fillable=[
        'donar_id',
        'blood_group',
        'avalability'
    ];

    
}
