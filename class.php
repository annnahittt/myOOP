<?php
class Product {
    public $name;
    public $price;
    public $quantity;
    public function __construct($name, $price, $quantity = 1) {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }
    public function getName() {
        return $this->name;
    }
    public function getPrice() {
        return $this->price;
    }
    public function getQuantity() {
        return $this->quantity;
    }
    public function getTotalCost() {
        return $this->price * $this->quantity;
    }}

      $peach = new Product('Peaches', 0.90, 15);
       echo "Product: {$peach->getName()};\n";
       echo "Price: {$peach->getPrice()} USD;\n";
       echo "Quantity: {$peach->getQuantity()};\n";
       echo "Total Cost: {$peach->getTotalCost()} USD\n";




