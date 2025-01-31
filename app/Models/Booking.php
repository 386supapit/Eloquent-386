<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = ['room_customer_id', 'room_id', 'check_in', 'check_out', 'status', 'total_price'];
    public function roomCustomer() {
        return $this->belongsTo(RoomCustomer::class, 'room_customer_id');
    }
    public function room() {
        return $this->belongsTo(Room::class);
    }
}
