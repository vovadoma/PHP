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
}
