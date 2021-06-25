<?php


class Shop {
    
    protected $user_id;
    protected $item;

    
    function __construct($_user_id, $_item) {
        $this->user_id = $_user_id;
        $this->item = $_item;
    }

    
    public function getUserID() {
        return $this->user_id;
    }

    public function getItem() {
        return $this->item;
    }
}