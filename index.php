<?php

// classe principale
require_once __DIR__ . '/ProdottiCasa.php';
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Riepilogo ordine</h1>

    <?php foreach($user->getProducts() as $product) { ?>
        <div>
            <ul>
                <li>Marca: <?php echo $product->marca  ?>;</li>
                <li>Prezzo: <?php echo $product->prezzo . ' euro'; ?>;</li>
                <li>Quantità: <?php echo $product->quantita ?>;</li>    
            </ul>
        </div>
    <?php } ?>

</body>
</html>