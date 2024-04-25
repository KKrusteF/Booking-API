<?php

namespace Database\Factories;

use App\Models\Booking;
use App\Models\Customer;
use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class BookingFactory extends Factory
{
    protected $model = Booking::class;

    public function definition()
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'check_in_date' => Carbon::now(),
            'check_out_date' => Carbon::now(),
            'total_price' => $this->faker->randomFloat(),

            'room_id' => Room::factory(),
            'customer_id' => Customer::factory(),
        ];
    }
}
