<?php

namespace Izzius\Package;

readonly class Decimal
{

    /**
     * @param int $value The value without comma
     * @param int $comma The position of the comma
     */
    protected function __construct(public int $value, public int $comma)
    {
    }

    /**
     * Generate a new instance with a float
     *
     * @param float $number
     * @return Decimal
     */
    public static function fromFloat(float $number): Decimal
    {
        return new Decimal(0, 0);
    }

    /**
     * Get the original float value
     *
     * @return float
     */
    public function original(): float
    {
        return 0;
    }
}
