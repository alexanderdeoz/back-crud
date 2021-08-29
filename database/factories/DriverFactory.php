<?php

namespace Database\Factories;

use App\Models\Driver;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class DriverFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Driver::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           'description' =>$this->faker->paragraph(),
           'email' => $this->faker->unique()->safeEmail(),
           'entryDate' =>$this->faker->date(),
           'lastname' =>$this->faker->lastName(),
           'names' =>$this->faker->name(),
        ];
    }
}
