<?php
require 'config/config.php';
require 'core/database.php';
require 'controllers/home.php';
require 'controllers/json.php';

$config = config('db');
$db = DB::init($config);

// Routes
$routes['page'] = isset($_GET['page']) ? $_GET['page'] : 'home';
$routes['act'] = isset($_GET['act']) ? $_GET['act'] : 'cars';

//var_dump($routes);

switch ($routes['page']) {
    case 'json': {
        $c = new JsonController();
        break;
    }
    default: {
        $c = new HomeController();
    }
}

switch ($routes['act']) {
    case 'cars': {
        $c->cars();
        break;
    }
    default: {
        $c->index();
    }
}



