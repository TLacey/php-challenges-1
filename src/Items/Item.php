<?php

namespace App\Items;

use App\Category\CategoryInterface;
use App\Item as OldItem;

class Item extends OldItem
{
    /** @var CategoryInterface */
    public $category;

    /**
     * Class constructor
     *
     * Calls parent of Item, while setting item category
     *
     * @param integer $name Name of item.
     * @param integer $quality  Starting quality of item.
     * @param integer $sellIn Starting sellIn of item.
     * @param CategoryInterface $category Item category.
     */
    public function __construct(string $name, int $quality, int $sellIn, CategoryInterface $category)
    {
        $this->category = $category;
        parent::__construct($name, $quality, $sellIn);
    }

    /**
     * When triggered on the item, will modify the quality and sellIn depending
     * on the items category.
     *
     * @return void
     */
    public function nextDay()
    {
        $this->sellIn = $this->category->calculateSellIn($this->sellIn);
        $this->quality = $this->category->calculateQuality($this->quality, $this->sellIn);
        $this->quality = $this->category->qualityDefaults($this->quality);
    }
}
