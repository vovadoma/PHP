<?php

require_once ('Model.php');

class UserModel extends Model {

    protected $table = 'users';

    public function create()
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = password_hash($_POST['pass'], PASSWORD_DEFAULT);
        $stmt = $this->connect->prepare("INSERT INTO users (username,email, pass) VALUES (? ,? ,?)");
        $stmt->bind_param('sss', $username, $email, $password);
        $stmt->execute();
        $result = $stmt->insert_id;
        return $result;
    }

    public function read(){
        $email = $_POST['email'];
        $stmt = $this->connect->prepare('SELECT * FROM users WHERE email = ?');
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = $result->fetch_assoc();
        return $data;
    }
}
