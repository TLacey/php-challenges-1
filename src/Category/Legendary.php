<?php

namespace App\Category;

class Legendary implements CategoryInterface
{
    /**
     * {@inheritdoc}
     *
     * Legendary items are not sold so function doesn't modify quality.
     *
     * @param integer $quality Quality to calculate
     * @param integer $sellIn Current sellIn
     *
     * @return int
     */
    public function calculateQuality(int $quality, int $sellIn)
    {
        return $quality;
    }

    /**
     * {@inheritdoc}
     *
     * Legendary items are not sold so function doesn't modify sellIn.
     *
     * @param integer $sellIn Current sellIn
     *
     * @return int
     */
    public function calculateSellIn(int $sellIn)
    {
        return $sellIn;
    }

    /**
     * {@inheritdoc}
     *
     * Legendary items are not sold so function doesn't modify quality.
     *
     * @param integer $quality Quality to set
     *
     * @return int
     */
    public function qualityDefaults(int $quality)
    {
        return $quality;
    }
}
