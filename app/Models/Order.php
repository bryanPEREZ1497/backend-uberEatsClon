<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'app.orders';
    protected $fillable = [
        'calification',
        'delivery_cost',
        'delivery_date',
        'state',
        'payment_method',
        'wait_time',
        'total_price',
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'app.order_details', 'product_id', 'order_id')
            ->withTimestamps();
    }
    public function client()
    {
        return $this->hasOne(Client::class);
    }
    public function deliveryMan()
    {
        return $this->hasOne(DeliveryMan::class);
    }
}
