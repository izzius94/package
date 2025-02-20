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
        $comma = strpos($number, '.');
        $value = str_replace('.', '', $number);

        return new Decimal($value, $comma);
    }

    /**
     * Get the original float value
     *
     * @return float
     */
    public function original(): float
    {
        return substr_replace($this->value, '.', $this->comma, 0);
    }
}
