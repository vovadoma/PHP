<?php

$items = [
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

foreach ($items as &$item) {
    $item['new'] = 1;
}

print_r($items);

foreach ($items as $key => $item) {
    $items[$key]['new'] = 1;
}

print_r($items);

$result = [];
foreach ($items as $item) {
    $item['new'] = 1;
    $result[] = $item;
}
$items = $result;

print_r($items);

$items = array_map(function ($item) {
    $item['new'] = 1;
    return $item;
}, $items);

print_r($items);

foreach ($items as &$item) {
    $priceDisc=getPrice($item);//рассчет цены со скидкой
    $priceImg=getImage($images,$item,$noImage);//выбор картинки для товара
    $item=writeArrItem($item,$priceDisc,$priceImg);//добавление цены со скидкой и картинки в массив товаров
}

print_r($items);

$items = array_map(function ($item) {
    $priceDisc=getPrice($item);//рассчет цены со скидкой
    $priceImg=getImage($images,$item,$noImage);//выбор картинки для товара
    $item=writeArrItem($item,$priceDisc,$priceImg);//добавление цены со скидкой и картинки в массив товаров
    return $item;
}, $items);

print_r($items);

$items = array_map(writeArrItemPriceAndImage, $items);

function writeArrItemPriceAndImage($f_ArrItem)
{
    $priceDisc=getPrice($item);//рассчет цены со скидкой
    $priceImg=getImage($images,$item,$noImage);//выбор картинки для товара
    $f_ArrItem['priceDisc']=$priceDisc;
    $f_ArrItem['img']=$priceImg;
    return $f_ArrItem;
}

print_r($items);