<?php

declare(strict_types=1);

namespace Money;

final class Dollar extends Money
{
    public function times(int $multiplier)
    {
        return new Dollar($this->amount * $multiplier);
    }
}