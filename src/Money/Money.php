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
        return $this->amount === $object->amount
            && get_class($this) === get_class($object);
    }

    public static function dollar(int $amount): Dollar
    {
        return new Dollar($amount);
    }
}