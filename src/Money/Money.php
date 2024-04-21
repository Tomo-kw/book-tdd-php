<?php

namespace Money;

class Money
{
    public function __construct(
        protected int $amount
    )
    {
    }

    public function equals(Money $object): bool
    {
        return $this->amount === $object->amount;
    }
}