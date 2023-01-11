<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\League;
use App\Models\LeagueReferee;
use App\Models\Referee;

class LeagueRefereeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = LeagueReferee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'league_id' => League::factory(),
            'referee_id' => Referee::factory(),
            'is_active' => $this->faker->boolean,
        ];
    }
}
