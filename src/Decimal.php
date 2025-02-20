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
        $converted = (string)$number;
        $comma = strpos($converted, '.');
        $value = (int)str_replace('.', '', $converted);

        return new Decimal($value, $comma);
    }

    /**
     * Get the original float value
     *
     * @return float
     */
    public function original(): float
    {
        return (float)substr_replace((string)$this->value, '.', $this->comma, 0);
    }
}
