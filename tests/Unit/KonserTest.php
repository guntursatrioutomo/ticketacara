<?php

namespace Tests\Unit;

use App\Models\Konser;
use Carbon\Carbon;
use PHPUnit\Util\Test;

use Tests\TestCase;

class KonserTest extends TestCase
{
    /** @test */
    public function can_get_formated_date()
    {
        $konser = Konser::factory()->make([
            'date' => Carbon::parse('2019-12-01, 8:00pm')
        ]);

        $this->assertEquals('December 1, 2019', $konser->formatted_date);
    }

    /** @test */
    public function can_get_formated_start_time()
    {
        $konser = Konser::factory()->make([
            'date' => Carbon::parse('2019-12-01, 17:00:00')
        ]);

        $this->assertEquals('5:00pm', $konser->formatted_start_time);
    }

        /** @test */
        public function can_get_ticket_price_in_dollars()
        {
    
            $konser = Konser::factory()->make([
                'ticket_price'  => 450,
            ]);
    
            $this->assertEquals('4.50', $konser->ticket_price_in_dollars);
        }
           /** @test */
    // public function concerts_with_published_at_date_are_published()
    // {
    //     $publishedConcertA = Konser::factory()->create([ 'published_at'   => Carbon::parse('-1 week') ]);
    //     $publishedConcertB = Konser::factory()->create([ 'published_at'   => Carbon::parse('-1 week') ]);
    //     $unpublishedConcertC = Konser::factory()->create([ 'published_at' => null ]);

    //     $publishedConcerts = Konser::published()->get();

    //     $this->assertTrue($publishedConcerts->contains($publishedConcertA));
    //     $this->assertTrue($publishedConcerts->contains($publishedConcertB));
    //     $this->assertFalse($publishedConcerts->contains($unpublishedConcertC));

    // }
}
