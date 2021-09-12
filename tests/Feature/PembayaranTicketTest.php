<?php

namespace Tests\Feature;

use App\Models\FakePaymentGateway;
use App\Models\Konser;
use App\Models\PaymentGateway;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PembayaranTicketTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function kustomer_dapat_membayar_ticket_konser()
    {
        
        //Exception Handling
        $this->withoutExceptionHandling();

        //membuat fake pembayaran tiket
        $paymentGateway = new FakePaymentGateway;
        app()->instance(PaymentGateway::class, $paymentGateway);

        $konser = Konser::factory()->create([
            'ticket_price' => 3250
        ]);

        //membuat response order ticket pembayaran
        $response = $this->json('POST', "/konsers/{$konser->id}/orders", [
            'email' => 'john@example.com',
            'ticket_quantity' => 3,
            'payment_token'=> $paymentGateway->getValidTestToken()
            ]);

        //Aksi 
        $response->assertStatus(201);

        $this->assertEquals(9750, $paymentGateway->totalCharges());

        $order = $konser->orders()->where('email', 'john@example.com')->first();

        $this->assertNotNull($order);
        $this->assertEquals(3, $order->tickets()->count());
    }
}
