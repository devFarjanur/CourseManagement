<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'title',
        'description',
        'price',
        'photo',
    ];


    public function getFormattedPrice()
    {
        return number_format($this->price, 2); // Format price with two decimal places
    }

}
