<?php
require 'models/model.php';


function indexHome(){

    $model = new Model();

    $items=$model->getDataItems();
    $images=$model->getDataImages();

    $data = [
        'items' => $items,
        'last3Items' => $filteredItems,
        'coockieOk' => $this->checkCookie()
    ];

    $this->view('home', $data);

}



public function view($template, $data) {
    extract($data);
    include(''.$template.'.php');
}

function getPrice($itemPrice)
{   
    if ($itemPrice['stock']==0) {
        $outPrice='нет в наличии';
    } else {
        if ($itemPrice['stock']<2) {
            $outPrice=$itemPrice['price'];
        } else {
            $outPrice=$itemPrice['price']*(1-$itemPrice['disc']/100);
        }
    }
    return($outPrice);
}

function getImage($f_images,$f_item,$f_NoImage)
{   
    $f_OutImage=$f_NoImage;
    foreach ($f_images as $f_image) {
        if ($f_item['id']==$f_image['id']) {
            $f_OutImage=$f_image['img'];
            break;                 
        }
    }
    return($f_OutImage);    
}

function writeArrItemPriceAndImage($f_item){
    $images=getDataImages();
    $noImage=getNoImage();
    $priceDisc=getPrice($f_item);//рассчет цены со скидкой
    $itemImage=getImage($images,$f_item,$noImage);//выбор картинки для товара
    $f_item['priceDisc']=$priceDisc;//добавление нового элемента 'priceDisc' в массив
    $f_item['img']=$itemImage;//добавление нового элемента 'img' в массив
    return $f_item;
}

function indexAd(){
    $model = new Model();
    $items = $model->getCars();
    echo json_encode($items);
}

function indexCars() {

}
