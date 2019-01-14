<?php
require_once 'models/model.php';

class HomeController
{

    public function index()
    {
        $model = new Model();
        $user = $items = $model->getUser();

        echo 'home/index';
        exit;

        $model = new Model();
        $data = [
            'items' => $model->getDataItems()
        ];
        $this->view('home', $data);
    }


    public function view($template, $data)
    {
        extract($data);
        include('templates/' . $template . '.php');
    }

    function cars()
    {
        $model = new Model();
        $data['cars'] = $items = $model->getCars();
        $this->view('cars', $data);
    }

}