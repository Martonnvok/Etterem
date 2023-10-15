<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etel extends Model
{
    use HasFactory;
    protected $primaryKey = "etelId";
    
    protected $fillable = [ 
        'nev', 
        'egyeb',

    ];
    
}
