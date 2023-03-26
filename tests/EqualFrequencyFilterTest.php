<?php

namespace Tests;

use App\EqualFrequencyFilter;
use PHPUnit\Framework\TestCase;

class EqualFrequencyFilterTest extends TestCase
{

    public static EqualFrequencyFilter $equalFrequencyFilter;
    protected function setUp(): void
    {
        $input = "0.1, 3.4, 3.5, 3.6, 7.0, 9.0, 6.0, 4.4, 2.5, 3.9, 4.5, 2.8";
        self::$equalFrequencyFilter = new EqualFrequencyFilter($input);
    }

    public function testFilter():void
    {
        self::$equalFrequencyFilter->filter();

        self::assertEquals(count(self::$equalFrequencyFilter->HighValues),count(self::$equalFrequencyFilter->MediumValues));
        self::assertEquals(count(self::$equalFrequencyFilter->HighValues),count(self::$equalFrequencyFilter->LowValues));

    }

}
