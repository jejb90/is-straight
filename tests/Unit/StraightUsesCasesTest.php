<?php

namespace Tests\Unit;

use App\UsesCases\StraightUseCase;
use Tests\TestCase;

class StraightUsesCasesTest extends TestCase
{
    /**
     * @test
     */
    public function testIsStraight()
    {
        $straightUsesCases = new StraightUseCase();

        $this->assertEquals(true, $straightUsesCases->validateStraight([2, 3, 4, 5, 6]));
        $this->assertEquals(true, $straightUsesCases->validateStraight([14, 5, 4, 2, 3]));
        $this->assertEquals(false, $straightUsesCases->validateStraight([7, 7, 12, 11, 3, 4, 14]));
        $this->assertEquals(false, $straightUsesCases->validateStraight([7, 3, 2]));

    }
}
