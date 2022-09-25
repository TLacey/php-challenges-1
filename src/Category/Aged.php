<?php

namespace App\Category;

class Aged extends Normal implements CategoryInterface
{
    /** @var integer Aged Items increase in quality by 1 */
    public $qualityMovesBy = 1;
}
