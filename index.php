<?php
echo '<pre>';
print_r($_REQUEST);
echo '</pre>';
$action = (isset($_REQUEST['action'])) ? $_REQUEST['action'] : '';
echo $action;

function myAutoloader($className)
{
    $classFile = "class/" . $className . '.php'; //class/Kundedfgfdg.php

    if (file_exists($classFile)) {
        require_once $classFile;
    }
}

spl_autoload_register('myAutoloader');


if ($action === 'showpizzaerstellen') {
    //echo 'pizzaerstellen.php anzeigen';
    include 'view/pizzaerstellen.php';

} elseif ($action === '') {
    // Standardseite
    include 'view/manuelslieferung.php';
//echo $bestellung->rechnungHtml();
} elseif ($action === 'showpizza'){
    include 'view/showpizza.php';
} else {
    include 'view/fehler.php';
}