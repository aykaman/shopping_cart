<?php

namespace ShoppingCart;

class Item
{
    /**
     * Item Product
     *
     * @var string $product
     */
    protected $product;

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
     * @param string $product Item Product
     * @param string $name Item name
     * @param string $price Item price with two digits after decimal point, e.g. '123.00'
     *
     * @throws \Exception When the price format is invalid
     */
    public function __construct($product, $name, $price)
    {
        $this->setproduct($product);
        $this->setName($name);
        $this->setPrice($price);
    }

    // Setters

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = (string)$name;
    }

    /**
     * @param string $product
     */
    public function setproduct($product)
    {
        $this->product = (string)$product;
    }

    /**
     * @param string $price Item price with two digits after decimal point, e.g. '123.00'
     *
     * @throws \Exception When the price format is invalid
     */
    public function setPrice($price)
    {
        $this->validateAmountFormat($price);
        $this->price = (string)$price;
    }

    // Getters

    /**
     * @return string
     */
    public function getproduct()
    {
        return $this->product;
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
     * Validate amount format
     *
     * Checks if amount is a number with two digits after decimal point
     *
     * @param mixed $amount
     *
     * @throws \Exception When the amount format is invalid
     */
    protected function validateAmountFormat($amount)
    {
        if (! preg_match('/^\d+\.\d{2}$/', $amount)) {
            throw new \Exception('Invalid amount format');
        }
    }
}