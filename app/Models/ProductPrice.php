<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPrice extends Model
{
    use HasFactory;

    protected $table = 'products_prices';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'stripe_product',
        'stripe_price',
        'recurring_interval',
        'active',
        'price'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
