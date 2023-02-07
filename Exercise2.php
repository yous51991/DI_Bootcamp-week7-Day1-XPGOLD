<?php

// Product Class

class Product
{
    public string $name;
    public string $description;
    public int $price;

    public function setName($value)
    {
        $this->name = $value;
    }
    
}

$product1 = new Product();
$product1->setName("iPhone 14");
echo $product1->name;

$product2 = new Product();
$product2->setName("iPhone 14 Pro");
echo $product2->name;
