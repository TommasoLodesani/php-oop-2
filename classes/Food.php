<?php

class Food extends Product 
{
    protected $date_of_expire;

    public function __construct($name,$bar_code, $price, $discount, $brand,$aniaml_category,$date_of_expire){
       
        $this->name = $name;
        $this->bar_code = $bar_code;
        $this->price = $price;
        $this->discount = $discount;
        $this->brand = $brand;
        $this->aniaml_category = $aniaml_category;
        $this->date_of_expire = $date_of_expire;
    }
    
}


// parent::__construct($name,$bar_code, $price, $discount, $brand,$aniaml_category,);
