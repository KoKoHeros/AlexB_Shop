<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $fillable = [
        'client_email',
        'client_name',
        'client_address',
        'client_country',
        'client_phone',
        'client_birthday',
        'product_id',
        'name',
        'product_quantity',
        'price',
        'description',
        'category',
        'main_image',
        'sub_image1',
        'sub_image2',
        'sub_image3'];
}
