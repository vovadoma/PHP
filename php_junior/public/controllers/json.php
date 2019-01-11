<?php
require_once 'models/model.php';

class JsonController
{
    function cars()
    {
        $model = new Model();
        $items = $model->getCars();
        echo json_encode($items);
    }
}