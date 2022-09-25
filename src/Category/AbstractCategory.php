<?php

namespace App\Category;

use App\Constants\QualityConstants;

abstract class AbstractCategory
{
    /**
     * Quality cannot be higher or lower then certain amounts. This function
     * ensures these restrictions are met.
     *
     * @param integer $quality Quality to check.
     *
     * @return int Quality depending on restrictions.
     */
    public function qualityDefaults(int $quality)
    {
        // Quality has a minimum it can be, default to min if below
        if ($quality < QualityConstants::MIN_QUALITY) {
            return QualityConstants::MIN_QUALITY;
        }
        // Quality has a maximum it can be, default to max if above
        if ($quality > QualityConstants::MAX_QUALITY) {
            return QualityConstants::MAX_QUALITY;
        }
        return $quality;
    }
}
