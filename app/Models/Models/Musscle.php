<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Musscle extends Model
{
   protected $table='musscles';


    protected $fillable =
    [
        'title',
        'content'
    ];
     
    
}
