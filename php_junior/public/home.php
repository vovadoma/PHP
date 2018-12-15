<?php

function indexHome() {
    foreach ($items as &$item) {
        //$item['priceDisc']=getPrice($item);
        //$item['img']=getImage($images,$item,$noImage);
        $priceDisc=getPrice($item);//рассчет цены со скидкой
        $priceImg=getImage($images,$item,$noImage);//выбор картинки для товара
        $item=writeArrItem($item,$priceDisc,$priceImg);//добавление цены со скидкой и картинки в массив товаров
    }
    include 'template/template.php';
}

indexHome();
