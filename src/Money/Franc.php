<?php

declare(strict_types=1);

namespace Money;

final class Franc extends Money
{
    public function times(int $multiplier)
    {
        return new Franc($this->amount * $multiplier);
    }
}