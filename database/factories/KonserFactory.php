<?php

namespace Database\Factories;

use App\Models\Konser;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class KonserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Konser::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'title' => 'Peterpan',
        'subtitle' => 'Aku dan Bintang',
        'date'  => Carbon::parse('+2 weeks'),
        'ticket_price'  => 2000,
        'venue' => 'Contoh Teater', 
        'venue_address'  => 'Contoh Jalan',
        'city'  => 'Contoh Kota',
        'state' => 'Indonesia',
        'zip' => '14100',
        'additional_information' => 'Contoh isi ini',
        ];
    }
}
