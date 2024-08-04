<?php

namespace Bakhodirov\WeightConversions;

class Weight
{
    public static function kilograms(float $kilograms): self
    {
        return new static($kilograms);
    }

    public function __construct(protected float $kilograms) {}

    public function toPounds(): float
    {
        return $this->kilograms * 2.2046;
    }
}

$className = 'Weight';

echo $className::kilograms(200);
