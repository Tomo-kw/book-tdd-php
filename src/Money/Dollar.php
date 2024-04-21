<?php

declare(strict_types=1);

namespace Money;

final class Dollar extends Money
{
    public function times(int $multiplier)
    {
        return new Dollar($this->amount * $multiplier);
    }

    public function equals(Dollar $object): bool
    {
        return $this->amount === $object->amount;
    }
}