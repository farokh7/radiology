<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accounting extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'price',
        'From',

        'mobile',
        'Description',
        'Insurance',

        'Payment',
        'Print',
        'date',

        'Day',
        'WeekDay',
        'Moon',
        'Year',
        'UserId',
    ];
}
