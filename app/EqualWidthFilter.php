<?php

namespace App;

/**
 * This class implements equal width filter algorithm
 */
class EqualWidthFilter extends AbstractBaseDiscreteFilter implements FilterInterface
{

    function __construct($input)
    {
        parent::__construct($input);
    }

    public float $width;

    function filter(): void
    {
        try {

            $this->getInputWidth();

            foreach ($this->inputArray as $val){
                if($val <= $this->width){
                    array_push($this->LowValues, $val);
                } elseif ($val <= 2 * $this->width){
                    array_push($this->MediumValues, $val);
                } else {
                    array_push($this->HighValues, $val);
                }
            }
        }catch (\Exception $e){
            echo $e->getMessage();
        }



    }

    /**
     * calculates and assign width of the input
     * @return void
     */
    public function getInputWidth(): void
    {

        try {
            // w = (Max - Min) / bin
            $this->width = ceil(( end($this->inputArray) - $this->inputArray[0])/3.0);
        }catch (\Exception $e){
            echo $e->getMessage();
        }

    }

}
