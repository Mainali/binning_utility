<?php

namespace App;

/**
 *Interface for filter
 */
interface FilterInterface
{

    /**
     * has a filter method that needs to be implemented by the  concrete classes
     * @return mixed
     */
    public function filter();

}
