<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'price',
        'description',
        'tags',
        'inventory',
        'category',
        'main_image',
        'sub_image1',
        'sub_image2',
        'sub_image3'
    ];

}
