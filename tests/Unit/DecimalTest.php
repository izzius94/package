<?php

namespace Izzius\Package\Test\Unit;

use Izzius\Package\Decimal;
use PHPUnit\Framework\TestCase;

class DecimalTest extends TestCase
{
    public function testCanCreateADecimalFromAFloat()
    {
        $decimal = Decimal::fromFloat(10.808);

        $this->assertEquals(10808, $decimal->value);
        $this->assertEquals(2, $decimal->comma);
    }

    public function testCanGetTheOriginalValue()
    {
        $original = 10.808;
        $decimal = Decimal::fromFloat($original);

        $this->assertEquals($original, $decimal->original());
    }
}
