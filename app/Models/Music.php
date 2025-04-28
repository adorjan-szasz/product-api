<?php

namespace App\Models;

class Music extends Product
{
    protected $table = 'products';

    protected $fillable = ['type', 'name', 'artist', 'media', 'image', 'price', 'discount', 'quantity'];
}
