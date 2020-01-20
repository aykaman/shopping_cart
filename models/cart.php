<?php

namespace ShoppingCart;

use Countable;
use Iterator;

class Cart implements Iterator, Countable
{
    /**
     * Array stores the list of items in the cart
     *
     * @var array $items
     */
    protected $items = [];

    /**
     * For tracking iterations
     *
     * @var int $position
     */
    protected $position = 0;

    /**
     * For storing the Ids, as a convenience
     *
     * @var array $ids
     */
    protected $ids = [];


    public function __construct()
    {
        
    }

    /**
     * Returns a Boolean indicating if the cart is empty
     *
     * @return bool
     */
    public function isEmpty()
    {
        return empty($this->items);
    }

    /**
     * Gets an item with given id from the cart
     *
     * @param integer $id
     *
     * @return array
     */
    public function getItem($id)
    {
        if (isset($this->items[$id])) {
            $item = $this->items[$id];
        } else {
            $item = [];
        }

        return $item;
    }

    /**
     * Adds a new item to the cart
     *
     * @param Item $item
     */
    public function addItem(Item $item)
    {
        $id = $item->getId();

        if (isset($this->items[$id])) {
            $this->updateItem($item, $this->items[$id]['qty'] + 1);
        } else {
            $this->items[$id] = array('item' => $item, 'qty' => 1);
            $this->ids[] = $id;
        }
    }

    /**
     * Changes an item already in the cart
     *
     * @param Item $item
     * @param integer $qty If the quantity is 0, then the item is removed from the cart, otherwise updates quantity
     */
    public function updateItem(Item $item, $qty)
    {
        $id = $item->getId();

        if ($qty === 0) {
            $this->deleteItem($item);
        } elseif (($qty > 0) && ($qty != $this->items[$id]['qty'])) {
            $this->items[$id]['qty'] = $qty;
        }

    }

    /**
     * Removes an item from the cart
     *
     * @param Item $item
     */
    public function deleteItem(Item $item)
    {
        $id = $item->getId();

        if (isset($this->items[$id])) {
            unset($this->items[$id]);

            $index = array_search($id, $this->ids);
            unset($this->ids[$index]);

            // Recreate array to prevent holes:
            $this->ids = array_values($this->ids);
        }
    }

    /**
     * Get the total price of all the cart items
     *
     * @return string
     */
    public function total()
    {
        $sum = '0.00';
        foreach ($this->items as $item) {
            $price = bcmul($item['item']->getPrice(), (string)$item['qty'], 2);
            $sum = bcadd($sum, $price, 2);
        }
        return $sum;
    }


    /**
     * Count all items; required by Countable
     *
     * @return int
     */
    public function count()
    {
        $num = 0;
        foreach ($this->items as $item) {
            $num += $item['qty'];
        }

        return $num;
    }

    /**
     * Count unique items
     *
     * @return int
     */
    public function countUnique()
    {
        return count($this->items);
    }

    /**
     * Required by Iterator; returns the current value
     *
     * @return array
     */
    public function current()
    {
        $index = $this->ids[$this->position];

        return $this->items[$index];

    }

    /**
     * Required by Iterator; returns the current key
     *
     * @return int
     */
    public function key()
    {
        return $this->position;
    }

    /**
     * Required by Iterator; increments the position
     */
    public function next()
    {
        $this->position++;
    }

    /**
     * Required by Iterator; returns the position to the first spot
     */
    public function rewind()
    {
        $this->position = 0;
    }

    /**
     * Required by Iterator; returns a Boolean indiating if a value is indexed at this position
     *
     * @return bool
     */
    public function valid()
    {
        return (isset($this->ids[$this->position]));
    }
}