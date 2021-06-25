<?php
require_once __DIR__ . '/Shop.php';

class Item extends Shop {
   
    protected $category;
    protected $price;

    
    function __construct($_user_id, $_item, $_category, $_price) {
        parent::__construct($_user_id, $_item);
        $this->category = $_category;
        $this->price = $_price;
    }

    
    public function getCategory() {
        return $this->category;
    }

    public function getPrice() {
        return $this->price;
    }
}