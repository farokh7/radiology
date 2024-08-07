<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hoghogh extends Model
{
    use HasFactory;




    protected $fillable = [
        'Name',
        'Price',
        'Hour',

        'PayForHour',
        'OverPay',
        'Business',
        'discription',
        'Moon',
        'Year',
    
    ];
}
