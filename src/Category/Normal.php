<?php

namespace App\Category;

class Normal extends AbstractCategory implements CategoryInterface
{
    /** @var integer Normal items decrease in quality by 1 */
    public $qualityMovesBy = -1;

    /**
     * {@inheritdoc}
     *
     * Normal item quality moves by set amount, this is double when
     * the sellIn date has passed.
     *
     * @param integer $quality Quality to calculate
     * @param integer $sellIn Current sellIn
     *
     * @return int
     */
    public function calculateQuality(int $quality, int $sellIn)
    {
        if ($sellIn <= 0) {
            return $quality + ($this->qualityMovesBy * 2);
        } else {
            return $quality + $this->qualityMovesBy;
        }
    }

    /**
     * {@inheritdoc}
     *
     * Normal item sellIn reduces by 1.
     *
     * @param integer $sellIn Current sellIn
     *
     * @return int
     */
    public function calculateSellIn(int $sellIn)
    {
        return --$sellIn;
    }
}
