<?php

class Card {
   
   protected $name;
   protected $number;
   protected $expiry_date = '16-03-22';
   protected $today_date = '01-01-21';
  

   public function checkDate(){
      if(strtotime(date($this->expiry_date)) > strtotime(date($this->today_date))) {
         echo 'carta valida';

      }else{
         echo 'carta scaduta';
      }
   }

}