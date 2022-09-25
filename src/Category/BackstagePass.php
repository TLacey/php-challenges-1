<?php

namespace App\Category;

class BackstagePass extends Normal implements CategoryInterface
{
    /** @var integer Backstage Passes increase in quality by 1 */
    public $qualityMovesBy = 1;

    /**
     * {@inheritdoc}
     *
     * Backstage Passes increase in Quality as its SellIn value approaches; Quality increases by
     * 2 when there are 10 days or less and by 3 when there are 5 days or less but
     * Quality drops to 0 after the concert
     *
     * @param integer $quality Quality to calculate
     * @param integer $sellIn Current sellIn
     *
     * @return int
     */
    public function calculateQuality(int $quality, int $sellIn)
    {
        $quality += $this->qualityMovesBy;
        if ($sellIn < 10) {
            $quality += $this->qualityMovesBy;
        }
        if ($sellIn < 5) {
            $quality += $this->qualityMovesBy;
        }
        if ($sellIn < 0) {
            return 0;
        }
        return $quality;
    }
}
