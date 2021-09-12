<?php

namespace Tests\Feature;

use App\Models\Konser;
use App\Http\Controllers\KonserController;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class KonserTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function user_can_view_a_konser()
    {
        $this->withoutExceptionHandling();
        $konser = Konser::factory()->published()->create([
            'title' => 'Aku dan Bintang',
            'subtitle' => 'Persembahan terdalam Peterpan',
            'date'  => Carbon::parse('August 13th, 2019, 8:00pm'),
            'ticket_price'  => 550,
            'venue' => 'Gelora Bungkarno', 
            'venue_address'  => 'Jln Perintis kemerdekaan ',
            'city'  => 'Jakarta',
            'state' => 'Jakarta',
            'zip' => '14100',
            'additional_information' => 'Untuk tiket hubungi guntur 081258014806',
        ]);

        //Act
        //view Concert List
        $response = $this->get('/konsers/'.$konser->id);

        //Assert
        //lihat detail konser
        $response->assertSee('Aku dan Bintang');
        $response->assertSee('Persembahan terdalam Peterpan');
        $response->assertSee('August 13, 2019');
        $response->assertSee('8:00pm');
        $response->assertSee('5.50');
        $response->assertSee('Gelora Bungkarno');
        $response->assertSee('Jln Perintis kemerdekaan');
        $response->assertSee('Jakarta');
        $response->assertSee('14100');
        $response->assertSee('Untuk tiket hubungi guntur 081258014806');
        
    }
}
