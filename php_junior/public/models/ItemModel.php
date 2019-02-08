<?php

require_once ('Model.php');

class ItemModel extends Model {

    protected $table = 'items';

    /*
    $filter = ['cat' => 55, 'priceM' => 100, 'ids' => [1,2,3,4]];
    $fields = ['name', 'price'];
    $fields = 'count';
    */

    public function listItems($filter = [], $fields = null)
    {
        if(!$fields) {
            $fields = ['name', 'price'];
            //$fields = ['*'];
        }

        $sql = " FROM $this->table ";

        if (!empty($filter)) {
            $sql = $sql. ' WHERE ';
            if (key_exists('çat', $filter)) {
                $sql .= 'category_id = ?';
            }
            if (key_exists('priceM', $filter)) {
                $sql .= 'price < ?';
            }
            if (key_exists('ids', $filter)) {
                $sql .= 'id IN ?';
                $filter['ids'] = "(". join(",", $filter['ids']) .")";
            }
        }

        if ($fields) {
            if ($fields == 'count') {
                $sql = 'SELECT COUNT(*) '.$sql;
            } else {
                $sql = 'SELECT ' .join(",", $fields) .$sql;
            }
        }




        var_dump($sql);

        $stmt = $this->connect->prepare($sql);

        if (!empty($filter)) {
            $array_of_values = [];
            $types = '';
            foreach ($filter as $key => $fl) {
                $array_of_values[] = $fl;
                $types .= (in_array($key, ['id', "price])) ? 'i' : "s";
            }
            $mysqli_stmt->bind_param($types, ...$array_of_values);
        }
        $stmt->execute();
        $result = $stmt->get_result();
        $data = $result->fetch_assoc();

        return $data;
    }


}

 $order = ['priceUp', 'category.name'];
 
 https://rozetka.com.ua/boats/c86168/sort=expensive/
 
 
 https://rozetka.com.ua/ladja_lt220dc/p2644492/
 
 https://www.citrus.ua/noutbuki-i-ultrabuki/apple-macbook-air-mqd32-614780.html