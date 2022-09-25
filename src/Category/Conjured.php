<?php

namespace App\Category;

class Conjured extends Normal implements CategoryInterface
{
    /**
     * Constructor function
     *
     * Sets Conjured Items to double quality movement of normal items
     */
    public function __construct()
    {
        $this->qualityMovesBy = $this->qualityMovesBy * 2;
    }
}
