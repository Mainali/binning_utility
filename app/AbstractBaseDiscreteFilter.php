<?php

namespace App;

/**
 * Base abstract class for the filter contains common attributes and functions
 */
abstract class AbstractBaseDiscreteFilter implements FilterInterface
{
    function __construct($input)
    {
        $this->arrayAndSortInput($input);

    }

    public array $HighValues = array();
    public array $MediumValues = array();
    public array $LowValues = array();

    public array $inputArray;

    /**
     * converts string input into float Array and sort in ascending order
     * @param $input
     * @return void
     */
    public function arrayAndSortInput($input): void{
        $this->inputArray = array_map('floatval',explode(',',$input));
        sort($this->inputArray);
    }

    /**
     * converts the filtered values into formatted string
     * @return string
     */
    public function getFilteredValuesAsString(): string
    {
        return "High: ".implode(',',$this->HighValues).
            "\nMedium: ".implode(',',$this->MediumValues).
            "\nLow: ". implode(',',$this->LowValues);

    }

}
