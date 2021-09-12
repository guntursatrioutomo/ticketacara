<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FakePaymentGateway implements PaymentGateway{

    private $charges;
  
    public function __construct()
    {
      $this->charges = collect();
    } 

    //mendapatkan valid token
    public function getValidTestToken()
    {
      return 'valid-token';
    }
  
    //menghubungkan dengan model PaymentGateway
    public function charge($amount, $token)
    {
      $this->charges[] = $amount;
    }
    //menghitung total charge
    public function totalCharges()
    {
       return $this->charges->sum();
    }
  } 