<?php

declare(strict_types=1);

namespace Money;
final class Dollar
{
    public int $amount;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function times(int $multiplier)
    {
        return new Dollar($this->amount * $multiplier);
    }
}