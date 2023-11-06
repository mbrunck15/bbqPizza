<?php
$kunde = new Kunde('Manuel', 'Martinez', '55555', 'Berlin', 'Strasse 4');

$bestellung = $kunde->bestellung();

$salami = new Topping('Salami', 1.00);
$pilze = new Topping('Pilze', 0.80);
$ananas = new Topping('Ananas', 20.00);

$pizza1 = new Pizza(true, 8.00);
$pizza1->addTopping($salami, $salami, $pilze);

$bestellung->addBestellitem($pizza1);
$pizza2 = new Pizza(false, 5.00);
$pizza2->addTopping($ananas);
$pizza2->addTopping($pilze);
$bestellung->addBestellitem($pizza2);
$cola = new Getraenk('Cola', 3.00);
$fanta = new Getraenk('Fanta', 2.50);
$bestellung->addBestellitem($cola);
$bestellung->addBestellitem($fanta);


//print_r($pizza1);
//print_r($pizza2);
//print_r($salami);
?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
    <a href="index.php?action=showpizzaerstellen">Pizza erstellen</a>

    <?php
    echo '<pre>';
    print_r($bestellung);
    print_r($bestellung->rechnungsBetrag());
    echo '</pre>';
    ?>


    </body>
    </html>
    <!-- durch GET-Variable action mit Wert showpizzaerstellen teile ich index.php
    mit, welche Seite angezeigt werden soll -->

