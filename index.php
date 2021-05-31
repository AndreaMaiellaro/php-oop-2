<?php

// classe principale
require_once __DIR__ . '/Prodotti-per-casa.php';
require_once __DIR__ . '/Cibo.php';
require_once __DIR__ . '/Smartphone.php';
require_once __DIR__ . '/User.php';

// p1
$shampoo = new ProdottiCasa('Pantene', 1, 5);
// var_dump($shampoo->getInfoData());

// p2
$polpettone = new Cibo('Aia', 2, 4);
// var_dump($polpettone->getInfoData());

// p3
$telefono = new Smartphone('iPhone', 1, 800);
// var_dump($telefono->getInfoData());

// user
$user = new User('Mario', 'Biondi');
//oggetti acquistati
$user->addProduct($shampoo);
$user->addProduct($polpettone);
// var_dump($user);

?>

