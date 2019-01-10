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

        return $itemsDataObj;
    }

    public function getCars()
    {
        $db = Database::getInstance();
        $db_connect = $db->connection;
        $result = $db_connect->query('SELECT * FROM cars');
        $data = $result->fetch_all(MYSQLI_ASSOC);
        return $data;
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
