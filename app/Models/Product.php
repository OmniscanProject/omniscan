<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

     protected $fillable = [
        'name',
        'sku',
        'image',
        'description',
        'slug',
        'stripe_product',
        'most-popular',
        'features'
    ];

     /**
      * Write code on Method
      *
      * @return response()
      */
     public function getRouteKeyName()
     {
         return 'slug';
     }

     public function prices()
     {
         return $this->hasMany(ProductPrice::class, 'stripe_product', 'stripe_product');
     }
}
