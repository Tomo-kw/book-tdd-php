<?php

declare(strict_types=1);

namespace Tests\Money;

use Money\Dollar;
use PHPUnit\Framework\TestCase;

final class MoneyTest extends TestCase
{
    public function testMultiplication()
    {
        $five = new Dollar(5);
        $product = $five->times(2);
        $this->assertEquals(10, $product->amount);
        $product = $five->times(3);
        $this->assertEquals(15, $product->amount);
    }
}

