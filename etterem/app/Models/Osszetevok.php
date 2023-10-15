<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Osszetevok extends Model
{
    use HasFactory;

    protected $primaryKey = "osszetevoId";
    
    protected $fillable = [ 
        'elnevezes', 
        'mittartalmaz',

    ];
}
