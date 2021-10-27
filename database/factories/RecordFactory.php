<?php

namespace Database\Factories;

use App\Models\Record;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

class RecordFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Record::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $patient_ids = DB::table('patients')->pluck('id');
        return [
            'patient_id' => $this->faker->randomElement($patient_ids),
            'pressure' => $this->faker->randomNumber(3),
            'recorded_at' => now()
        ];
    }
}
