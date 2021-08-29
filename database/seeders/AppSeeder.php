<?php

namespace Database\Seeders;

use App\Models\Driver;
use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class AppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Driver :: factory(10)->state(
            new Sequence(
                ['vehicle_id'=>54654],
                ['vehicle_id'=>53544],
                ['vehicle_id'=>22222],
                ['vehicle_id'=>11111],
            ))->create();
        
        Vehicle :: factory(10)->create([

        ]);
    }
}
