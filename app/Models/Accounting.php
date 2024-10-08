<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accounting extends Model
{
    use HasFactory;


    protected $fillable = [
        'Name',
        'Price',
        'From',

        'Mobile',
        'Description',
        'Insurance',

        'Payment',
        'Print',
        'Date',

        'Day',
        'WeekDay',
        'Moon',
        'Year',
        'UserId',
    ];
}
