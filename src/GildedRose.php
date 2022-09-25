<?php

namespace App;

use App\Items\Item;

class GildedRose
{
    /** @var array */
    private $items;

    /**
     * Class constructor
     *
     * @param array $items
     */
    public function __construct(array $items)
    {
        $this->items = $items;
    }

    /**
     * Accessor function for items, if which provided then will attempt
     * to return an item at that index or null if doesn't exist.
     *
     * Otherwise will return full array of items
     *
     * @param int $which Index of item to access
     *
     * @return Item|array|null
     */
    public function getItem(int $which = null)
    {
        return ($which === null
            ? $this->items
            : ($this->items[$which] ?? null)
        );
    }

    /**
     * Loops all items and triggers the next day functionality for each one.
     *
     * @return void
     */
    public function nextDay()
    {
        foreach ($this->items as $item) {
            $item->nextDay();
        }
    }
}
