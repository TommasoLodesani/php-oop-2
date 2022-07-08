<?php
 include __DIR__ . '/classes/Product.php';
 include __DIR__ . '/classes/Food.php';
 include __DIR__ . '/classes/Meds.php';
 include __DIR__ . '/classes/Toy.php';


//  $product1 = new Product('nome prodotto',0000,0,0,'Marca','tipo di animale');

 $product_food = new Food('Bocconcini',123,23,10,'Purina','gatto',1007);

//  var_dump($product1);
 var_dump($product_food);


