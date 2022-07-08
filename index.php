<?php
 include __DIR__ . '/classes/Product.php';
 include __DIR__ . '/classes/Food.php';
 include __DIR__ . '/classes/Meds.php';
 include __DIR__ . '/classes/Toy.php';
 include __DIR__ . '/classes/Card.php';


//  CLASSE PADRE PRODUCT
//  $product1 = new Product('nome prodotto',0000,0,0,'Marca','tipo di animale');
//  var_dump($product1);


// CLASSE FIGLIO FOOD
 $product_food = new Food('Bocconcini',123,23,10,'Purina','gatto',1007);
 var_dump($product_food);

// CLASSE FIGLIO MEDS
 $product_meds = new Meds('Medicinale',123,23,10,'Purina','cane',1007,'non somministrare agli umani');
 var_dump($product_meds);

// CLASSE FIGLIO TOY
 $product_toy = new Toy('Pallina',123,23,10,'Purina','cane',1007,'non somministrare agli umani', 9);
 var_dump($product_toy);



 $carta = new Card();
 $carta->checkDate();





