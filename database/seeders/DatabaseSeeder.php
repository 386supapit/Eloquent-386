<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;
use App\Models\ProductCustomer;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\RoomCustomer;
use App\Models\RoomType;
use App\Models\Room;
use App\Models\Booking;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Course;
use App\Models\Register;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ProductSeeder::class,
            ProductCustomerSeeder::class,
            OrderSeeder::class,
            OrderDetailSeeder::class,
            RoomCustomerSeeder::class,
            RoomTypeSeeder::class,
            RoomSeeder::class,
            BookingSeeder::class,
            StudentSeeder::class,
            TeacherSeeder::class,
            CourseSeeder::class,
            RegisterSeeder::class,
        ]);
    }
}
