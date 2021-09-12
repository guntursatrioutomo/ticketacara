<?php

namespace App\Http\Controllers;

use App\Models\Konser;
use App\Models\PaymentGateway;
use Illuminate\Http\Request;

class KonserOrderController extends Controller
{
    protected $paymentGateway;

    public function __construct(PaymentGateway $paymentGateway)
    {
        $this->paymentGateway = $paymentGateway;
    }
    public function store(Konser $konser)
    {
        $token = request('valid_token');
        $ticketQuantity = request('ticket_quantity');
        $amount = $ticketQuantity * $konser->ticket_price;

        $this->paymentGateway->charge($amount, $token);

        $order = $konser->orders()->create([
            'email' => request('email')
        ]);

        foreach (range(1, $ticketQuantity) as $i) {
            $order->tickets()->create([]);
        }

        return response()->json([], 201);
    }
}
