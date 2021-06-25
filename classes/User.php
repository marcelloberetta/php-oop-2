<?php


class User {
  
    protected $name;
    protected $lastname;
    protected $mail;
    protected $age;
    protected $discount;

  
    function __construct($_name, $_lastname, $_mail) {
        $this->name = $_name;
        $this->lastname = $_lastname;
        $this->mail = $_mail;
    }

    
    public function getFullName() {
        return $this->name . ' ' . $this->lastname;
    }

    public function getMail() {
        return $this->mail;
    }

    public function setAge($_age) {
        if (is_numeric($_age) && $_age > 0 && $_age < 120) {
            $this->age = $_age;
        } elseif (!is_numeric($_age)) {
            throw new Exception($_age . ' non è un numero.');
        } else {
            throw new Exception($_age . ' non è un numero valido.');
        }
    }

    public function getAge() {
        return $this->age;
    }

    protected function calcDiscount() {
        $this->discount = $this->age > 55 ? 15 : 0;
    }

    public function getDiscount() {
        $this->calcDiscount();

        return $this->discount;
    }

}