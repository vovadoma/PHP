<?php 

$description = "Some quick example text to build on the card title and make up the bulk of the card's content.";

function getDataItems(){
$itemsData = [
    ['id' => '1', 'name' => 'Монитор',      'price' => '1200.00', 'stock' => '5', 'disc' => '10'],
    ['id' => '2', 'name' => 'Компьютер',    'price' => '4200.00', 'stock' => '7', 'disc' => '10'],
    ['id' => '3', 'name' => 'Ноутбук',      'price' => '7700.00', 'stock' => '2', 'disc' => '10'],
    ['id' => '4', 'name' => 'Принтер',      'price' => '1800.00', 'stock' => '1', 'disc' => '10'],
    ['id' => '5', 'name' => 'Стол',         'price' => '1100.00', 'stock' => '0', 'disc' => '20'],
    ['id' => '6', 'name' => 'Стул',         'price' => '2200.00', 'stock' => '0', 'disc' => '20'],
    ['id' => '7', 'name' => 'Шкаф',         'price' => '1260.00', 'stock' => '8', 'disc' => '20'],
    ['id' => '8', 'name' => 'Кресло',       'price' => '4250.00', 'stock' => '9', 'disc' => '20'],
    ['id' => '9', 'name' => 'Диван',        'price' => '9800.00', 'stock' => '1', 'disc' => '30'],
];
return $itemsData;
}


function getDataImages()
{
$imagesData = [
    ['id' => '1', 'img' => 'assets/images/monitor.jpeg'],
    ['id' => '2', 'img' => 'assets/images/computer.jpg'],
    ['id' => '3', 'img' => 'assets/images/notebook.jpg'],
    ['id' => '4', 'img' => 'assets/images/printer.jpg'],
    ['id' => '7', 'img' => 'assets/images/wardrobe.jpg'],
    ['id' => '8', 'img' => 'assets/images/armchair.jpg']
];
return $imagesData;
}
?>