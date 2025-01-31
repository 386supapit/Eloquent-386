<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['product_customer_id', 'order_date', 'order_status', 'total_amount',
    ];
    protected $attributes = [
        'order_status' => 'pending', // ค่าเริ่มต้น
    ];
    public function customer() {
        return $this->belongsTo(ProductCustomer::class, 'product_customer_id');
    }
    public function orderDetails() {
        return $this->hasMany(OrderDetail::class);
    }
}
