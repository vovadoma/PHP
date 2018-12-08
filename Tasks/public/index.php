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

$noImage = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAACACAMAAAD04JH5AAAAM1BMVEX///+9vb26urq3t7f6+vrExMT29vbs7Ozi4uLNzc3p6enJycnZ2dnd3d3v7+/T09OxsbESHj3zAAAEZElEQVR4nO2Z6bK0JhCG2WUV7/9q042sOlNJDiSn6iveHzMjo/IAvaGEbG1tbW1tbW1tbW1tbW1tbS2VUKClNwweFT41PjuyXvJb1OhVFEIyRhnjum9UDMWP4UyNZxbBT3MuAsi3FD1AahkAlGy9ZwbqVwKw+AJgHcDJnv3jCU687vdjgKG71wxY/u4er5HzBBWA0u8AZ7f0zhhHy3wwuRCANU/IALaeU/ozRxqysq60TNtBNwOszudjBkLpzbbrQl4UPuuOPYD5AlD6H/rS7HHRPEAb4QhQJsCOV/pMMBkOegBajHoEcJ+Hmq+ctYIBoNxsAFD0y0jzFLglAHIwqQEgx4C3y5/ZDufM8AZg1tzDkW+Ae6BDpMzK0HNGkAF0nujb9wcAc69AeF/rukumAcqKppn+ADCmy1uRfUP7CQDJRh2fAN/HuRjg4NXaP83A8b52MQBpdvjJBv4HAJVDm/6lJWjhXfxDL8j/LPICVA66UfQA8e/iwIfF+SnAWRZBdnfWnX8Oyku2JhJmL/d95ZcBzm9ZL3wjmwAQA8Dd5b0e7zUQ8nP7FACxHUFZ3JL4P9cDk6ngCUAce84AUaUkHua6oM6WpU+AWgB35l2gZGduR277lCOmAGoB1sUeVZtCKZnisrr8BUBqidQcXBcCxpwPAfaoFWl6j/oGOPgLgPi2M8Jta1umuSD0GaAkpSHEDQGiaS4KfwMQDy9ICvyFwObnn5Rt1wBQlnwM8iKOCJzOZcF2XweS41ymNicfIUYFd5sAGIE0dsHW/N9LnRplz1/pfevPlS8+qGMUEOZjc4kQe1fXxsXqGWdELXHFur81HPKP5m3DrSjvejDcRXqV4KC5M8YseVJHy87fUOlJlA0gMNmyncbsKKSvh2seVA4AMjoifQOQ8mjh0DD8rAFAc2/1mge2HQAMi1leAE6oNlrJ5yiYizMxI9wV0YJsNAAoHqmqAJ6ZIGvGwRmwQZYi2P4nS0Aoc6QCQMQ3rtZcNhmkKwArbaB6AQVL9+TKAPbS/b8kgt1LXpbEcgkJa7Imv1VfFmhPDnD0EgdsWm7tm91BHKiLfkbv/Zo4sLX1+zIQ0BRFj/JckZgqVM1OUTKRurfgBupgCp6hefILjS+7ZvfG+f74INoxTDUSivL0WBrijLgyACRI9D5HtfYQB/Sl7lavdVgRizU1HMd1QPAPEGAMPjFGgDID0kmMRk6m3w1gVSiUTkFXCpKgBxAIhxiLOwB16YCzbihEHnY2AAMVyQIIuD9mAewZhqdYgCPRA3hGBGYEQyE1gIGsBkjbPphOzQPcPeQs2wDS3gm34UgJZwt93Ua4aAnA8EIIWIRw3GynI/CIDCAE7JZjCBHsAhKhIJEKnAFxG41YsEE5Us6TVBDHDTlTKnQcegEvwNfKMV6IeUVoBbcDzwhXerGs8ZBNvi8BnWmTp+BTWZW+8UjBD2FRx5E8zYKP4KHAf9OP+2v+AcHW1tbW1tbW1tbW1tbW1tafr78AsNAkdmul3o0AAAAASUVORK5CYII=';
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
