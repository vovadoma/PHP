<?php


class Model {

    public function getDataItems()
    {
        $db = Database::getInstance();
        $db_connect = $db->connection;

        $result = $db_connect->query('SELECT * FROM products');
        $itemsData = $result->fetch_all(MYSQLI_ASSOC);

        $itemsDataObj = [];

        foreach ($itemsData as $item) {
            $itemsDataObj[] = new Item($item);
        }

        var_dump($itemsDataObj);
        exit;
        return $itemsDataObj;
    }


    public function getDataImages()
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

}

class Item {
    public $id;
    public $name;
    public $price;
    protected $count;
    protected $disc;

    function __construct($itemRaw) {
        $this->id = $itemRaw['id'];
        $this->name = $itemRaw['name'];
        $this->count = $itemRaw['stock'];
        $this->disc = $itemRaw['disc'];
        $this->price = $this->getPrice($itemRaw['price']);
    }

    protected function getPrice($price) {
        return $price;
    }

}
