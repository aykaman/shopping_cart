<?php

namespace ShoppingCart;

class Item
{
    /**
     * Item Id
     *
     * @var string $id
     */
    protected $id;

    /**
     * Item name
     *
     * @var string $name
     */
    protected $name;

    /**
     * Item price
     *
     * @var string $price
     */
    protected $price;

    /**
     * Item rating
     *
     * @var string $rating
     */
    protected $rating;

    /**
     * @param string $product Item Product
     * @param string $name Item name
     * @param string $price Item price with two digits after decimal point, e.g. '123.00'
     * @param integer $name Item rating
     *
     * @throws \Exception When the price format is invalid
     */
    public function __construct($id, $name, $price, $rating)
    {
        $this->setId($id);
        $this->setName($name);
        $this->setPrice($price);
        $this->setPrice($rating);
    }

    // Setters

    /**
     * @param integer $product
     */
    public function setId($id)
    {
        $this->id = (integer)$id;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = (string)$name;
    }

    /**
     * @param double $price Item price with two digits after decimal point, e.g. '123.00'
     *
     */
    public function setPrice($price)
    {
        $this->price = (double)$price;
    }

     /**
     * @param integer $rating Item rating
     *
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
    }

    // Getters

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return integer
     */
    public function getRating()
    {
        return $this->rating;
    }
}