<?php

declare(strict_types=1);

namespace Money;

final class Franc
{
    public function __construct(
        private int $amount
    )
    {
    }

    public function times(int $multiplier)
    {
        return new Franc($this->amount * $multiplier);
    }

    public function equals(Franc $object): bool
    {
        return $this->amount === $object->amount;
    }
}