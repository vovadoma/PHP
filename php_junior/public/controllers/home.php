<?php
require_once 'models/model.php';

class HomeController
{

    function index()
    {
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