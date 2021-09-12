<?php

namespace Tests\Unit;

use App\Models\FakePaymentGateway;
use Tests\TestCase;
use PHPUnit\Util\Test;

class FakePaymentGatewayTest extends TestCase
{
  /** @test */
  public function charges_with_a_valid_payment_token_are_successful()
  {
    $paymentGateway = new FakePaymentGateway;

    $paymentGateway->charge(2500, $paymentGateway->getValidTestToken());

    $this->assertEquals(2500, $paymentGateway->totalCharges());
  }
}
