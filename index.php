<?php
include_once __DIR__ . '/classes/prodotti.php';

$prodotto_1 = new Prodotto("Garnier", 2.0, "shampoo");
$prodotto_2 = new Prodotto("Garnier", 3.0, "balsamo");
$prodotto_3 = new Prodotto("L'Oréal", 2.5, "shampoo");
$prodotto_4 = new Prodotto("L'Oréal", 3.5, "balsamo");

$prodotto_5 = new InOfferta("Pantene", 2.5, "shampoo");
$prodotto_6 = new InOfferta("Pantene", 3.0, "balsamo");
$prodotto_7 = new InOfferta("Elvive", 3.0, "shampoo");
$prodotto_8 = new InOfferta("Elvive", 4.0, "balsamo");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prodotti cosmesi</title>
</head>
<body>
    <h1>Lista prodotti</h1>

    <h2>Shampoo</h2>
    <ul>
        <li><?php echo "<strong>Shampoo: </strong>". $prodotto_1->getFullInfo() . "." ?></li>
        <li><?php echo "<strong>Shampoo: </strong>". $prodotto_3->getFullInfo() . "." ?></li>
    </ul>

    <h2>Balsami</h2>
    <ul>
        <li><?php echo "<strong>Balsamo: </strong>". $prodotto_2->getFullInfo() . "." ?></li>
        <li><?php echo "<strong>Balsamo: </strong>". $prodotto_4->getFullInfo() . "." ?></li>
    </ul>

    <h1>Prodotti in offerta</h1>
    
    <h2>Shampoo</h2>
    <ul>
        <li><?php echo "<strong>Shampoo in offerta: </strong>". $prodotto_5->getFullInfo() .". <strong>Sconto di: </strong>". $prodotto_5->getSconto() . "€" ?></li>
        <li><?php echo "<strong>Shampoo in offerta: </strong>". $prodotto_7->getFullInfo() .". <strong>Sconto di: </strong>". $prodotto_7->getSconto() . "€" ?></li>
    </ul>

    <h2>Balsami</h2>
    <ul>
        <li><?php echo "<strong>Balsamo in offerta: </strong>". $prodotto_6->getFullInfo() .". <strong>Sconto di:</strong> ". $prodotto_6->getSconto() . "€" ?></li>
        <li><?php echo "<strong>Balsamo in offerta: </strong>". $prodotto_8->getFullInfo() .". <strong>Sconto di: </strong>". $prodotto_8->getSconto() . "€" ?></li>
    </ul>
</body>
</html>