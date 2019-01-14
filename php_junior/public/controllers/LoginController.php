<?php
require_once 'models/model.php';

class LoginController
{

    public function index()
    {
        echo 'login/index';
        exit;
    }

    public function view($template, $data)
    {
        extract($data);
        include('templates/' . $template . '.php');
    }


}