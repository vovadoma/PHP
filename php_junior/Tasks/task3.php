
1) Добавляем в index.php файл https://github.com/vovadoma/PHP/blob/19347faa680419bea2643d59baebe704cb8b323f/php_junior/public/core/database.php
Там три варианта подключения к базе данных. В Model у меня 3-й вариант, можете попробовать любой ихз трех.
Так же посмотрите на config.php и сделайте так же у себя.

2) Получение items Model делаем из базы данных.

3) Получение картинок:
- для основной картинки добавляем поле в таблицу товаров, поле строка 255 символов.
- для дополнительных картинок создаем еще одну таблицу как наш массив. для связи с продуктами
в таблице добавляем поле product_id (int) 11. Т.е. id это будет для самой картинки, а product_id
к какому товару относится.

4) Делаем home admin контроллеры объектами и из index их вызываем как:
$controller = new HomeController();
$controller->index();
по аналогии и Admin контроллер.

5) В Admin контроллере тоже используем Model для получения данных из базы. Модели общие для home и admin.

======

6) Общие функции выносим в core - functions.php, работа с csv в classes.php как $csv::saveFile() -> CsvClass::saveFile()
$csv = CsvClass::class;
