<?php

// Product Class Set Properties

class Product
{
    public string $name;
    public string $description;
    public int $price;

    public function __construct($name, $description, $price)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }

    public function setName($value)
    {
        $this->name = $value;
    }
    
}

$product1 = new Product('iPhone 12', 'This is a great iPhone', 799.99);

$product1 = new Product('iPhone 12 Pro', 'This is a great iPhone', 799.99);
