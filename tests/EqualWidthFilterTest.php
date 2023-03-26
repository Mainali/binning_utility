<?php

namespace Tests;

use App\EqualWidthFilter;
use PHPUnit\Framework\TestCase;

/**
 * Test class for EqualWidthFilter
 */
class EqualWidthFilterTest extends TestCase
{

    private static EqualWidthFilter $equalWidthFilter;

    /**
     * Define input and initialize the filter class
     * @return void
     */
    protected function setUp(): void
    {
        //$input = "0,10,11,17,20,30,40,50,55,56,60,70,80,85,90,97,100";
        $input = "0.1, 3.4, 3.5, 3.6, 7.0, 9.0, 6.0, 4.4, 2.5, 3.9, 4.5, 2.8";
        self::$equalWidthFilter = new EqualWidthFilter($input);
    }

    public function testgetInputWidth(): void
    {
        self::$equalWidthFilter->getInputWidth();
        self::assertEquals(3.0, self::$equalWidthFilter->width);
    }

    public function testfilter(): void
    {
        self::$equalWidthFilter->filter();
        $width = self::$equalWidthFilter->width;

        self::assertLessThanOrEqual($width, end(self::$equalWidthFilter->LowValues));
        self::assertLessThanOrEqual(2*$width, end(self::$equalWidthFilter->MediumValues));
        self::assertLessThanOrEqual(3*$width, end(self::$equalWidthFilter->HighValues));

    }


}
