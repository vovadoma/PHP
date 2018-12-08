<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

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

$noImage = 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/600px-No_image_available.svg.png';

$images = [
    ['id' => '1', 'img' => ''],
    ['id' => '2', 'img' => ''],
    ['id' => '3', 'img' => ''],
    ['id' => '4', 'img' => ''],
    ['id' => '7', 'img' => ''],
    ['id' => '8', 'img' => '']
];

$description = "Some quick example text to build on the card title and make up the bulk of the card's content.";


// 1) Вывести все товары ввиде карточек - шаблон 1.
//    выводим развание, описание для всех $description и цену
// 2) Цену расчитать со скидкой указаной в % колонка 'disc'.
// 3) Если товара меньше 2-х, скидка не дается. Кол-во на складе это 'stock'.
// 4) Если товара нет, то вместо цены выводим - "нет в наличии"

foreach ($items as $item) {
    echo '<h5 class="card-title">' . $item['name'] . '</h5>';
    echo '<p class="card-text">'.$description.'</p>';
}

// 5) Вывести все поля товаров в виде таблицы

// 6*) Вывести в карточке картинку товара, посмотреть на https://getbootstrap.com/docs/4.1/components/card/
//     Имена файлов или ссылки добавить в таблицу $images в поле 'img'. Для товара у которого нет картинки
//     в списке вывести - $noImage

echo '
<table class="table table-bordered">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
    </tr>
    </thead>
    <tbody>
';

echo '<br>';

foreach ($items as $item) {
    // вывести строку таблицы <tr> </tr> в которой будет товар
}

echo '
    </tbody>
</table>
';


?>

// Шаблон 1
https://getbootstrap.com/docs/4.1/components/card/

<div class="card border-success mb-3" style="max-width: 18rem;">
    <div class="card-header bg-transparent border-success">Header</div>
    <div class="card-body text-success">
        <h5 class="card-title">Success card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
    <div class="card-footer bg-transparent border-success">Footer</div>
</div>

// Шаблон 2
https://getbootstrap.com/docs/4.1/content/tables/#bordered-table

<table class="table table-bordered">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
    </tr>
    <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
    </tr>
    <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
    </tr>
    </tbody>
</table>
