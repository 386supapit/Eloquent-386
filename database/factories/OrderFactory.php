<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\ProductCustomer;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    protected $model = Order::class;

    public function definition(): array
    {
        return [
            'product_customer_id' => ProductCustomer::factory(), // สร้าง Customer ใหม่อัตโนมัติ
            'order_date' => $this->faker->date(), // สร้างวันที่แบบสุ่ม
            'order_status' => $this->faker->randomElement(['pending', 'completed', 'canceled']), // สุ่มสถานะ
            'total_amount' => $this->faker->randomFloat(2, 100, 1000), // ค่ารวมระหว่าง 100 - 1000 บาท
        ];
    }
}
