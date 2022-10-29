<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'status',
        'total',
        'delivery_address',
        'note',
        'user_id',
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_order');
    }
}
