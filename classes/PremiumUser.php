<?php
require_once __DIR__ . '/User.php';



class PremiumUser extends User {
    
    private $is_premium;

   
    function __construct($_name, $_lastname, $_mail, $_is_premium = false) {
        parent::__construct($_name, $_lastname, $_mail);
        $this->is_premium = $_is_premium;
    }

   
    protected function calcDiscount() {
        if ($this->is_premium) {
            $this->discount = 30;
        } elseif ($this->age > 60) {
            $this->discount = 20;
        } else {
            $this->discount = 0;
        }
    }
}