<?php

class Toy extends Product 
{
    protected  $dimension;

    public function __construct($name,$bar_code, $price, $discount, $brand,$aniaml_category,$date_of_expire,$dimension){
       
        $this->name = $name;
        $this->bar_code = $bar_code;
        $this->price = $price;
        $this->discount = $discount;
        $this->brand = $brand;
        $this->aniaml_category = $aniaml_category;
        $this->date_of_expire = $date_of_expire;
        $this->dimension = $dimension;
    }
    
}
