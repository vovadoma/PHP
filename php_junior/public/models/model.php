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
        $db_connect = DB::connection();
        $result = $db_connect->query('SELECT * FROM cars');
        $data = $result->fetch_all(MYSQLI_ASSOC);
        return $data;
    }

    public function getUser()
    {
        $id = 5;
        $db_connect = DB::connection();
        $stmt = $db_connect->stmt_init();
        $stmt->prepare('SELECT * FROM cars WHERE ID = ?');
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = $result->fetch_row();
        var_dump($data);
        return $data;
    }

    public function newUser()
    {
        $db_connect = DB::connection();
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
