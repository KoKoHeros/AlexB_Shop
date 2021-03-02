<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filter extends Model
{
    protected $fillable = [
        'name',
        'product_id',
        'price',
        'description',
        'category',
        'sub_image1',
        'sub_image2',
        'sub_image3'
    ];
}
