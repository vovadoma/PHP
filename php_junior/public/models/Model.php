<?php


class Model {

    protected $connect;
    protected $table;

    function __construct() {
        $this->connect = DB::connection();
    }

    public function delete($id) {
        $stmt = $this->connect->prepare("DELETE FROM $this->table WHERE id = ? ");
        $stmt->bind_param('i', $id);
        $result = $stmt->execute();
        return $result;
    }

    public function byUser($id) {
        return $this->delete($id,
            "SELECT c.*, g.name FROM cart AS c JOIN goods AS g ON c.product_id = g.id WHERE c.user_id = ?");
    }

    public function join($id, $sql)
    {
        $stmt = $this->connect->prepare($sql);
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = $result->fetch_all(MYSQLI_ASSOC);
        return $data;
    }



}
