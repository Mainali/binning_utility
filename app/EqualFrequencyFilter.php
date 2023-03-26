<?php

namespace App;

/**
 * This class implements equal width filter algorithm
 */
class EqualFrequencyFilter extends AbstractBaseDiscreteFilter implements FilterInterface
{

    function __construct($input)
    {
        parent::__construct($input);
    }

    function filter()
    {
        try {
            $filteredArray = array_chunk($this->inputArray, ceil(count($this->inputArray)/3.0));
            $this->LowValues = $filteredArray[0];
            $this->MediumValues = $filteredArray[1];
            $this->HighValues = $filteredArray[2];
        }catch (\Exception $e){
            echo $e->getMessage();
        }

    }

}
