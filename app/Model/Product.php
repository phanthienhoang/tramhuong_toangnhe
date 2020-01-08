<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table ='products';
    protected $fillable = ['productName','productLineId','productScale','productVendor',
                                'productDescription','quantityInStock','buyPrice','MSRP'];


                        public $timestamps = false;
}
