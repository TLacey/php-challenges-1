<?php

namespace App\Category;

interface CategoryInterface
{
    /**
     * Calculates Quality
     *
     * @param integer $quality Quality to modify
     * @param integer $sellIn Current sellIn
     *
     * @return int
     */
    public function calculateQuality(int $quality, int $sellIn);

    /**
     * Calculates sellIn
     *
     * @param integer $sellIn Current sellIn
     *
     * @return int
     */
    public function calculateSellIn(int $sellIn);

    /**
     * Returns quality set to any defaults determined within the
     * function implementation
     *
     * @param integer $quality Quality to default
     *
     * @return int
     */
    public function qualityDefaults(int $quality);
}
