<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductDetail extends Model
{
    protected $table = 'product_details';
    public $timestamps = false;

    protected $fillable = [
        'id','pro_name','unit_price'
    ];

    use softDeletes;
}
