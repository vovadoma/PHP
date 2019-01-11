<?php
require 'config/config.php';
require 'core/database.php';
require 'controllers/home.php';
require 'controllers/json.php';

$config = config('db');
$db = DB::init($config);

// Routes
$param['page'] = isset($_GET['page']) ? $_GET['page'] : 'home';
$param['act'] = isset($_GET['act']) ? $_GET['act'] : 'index';

var_dump($param);
//exit;
$name = $param['page'];
$act = $param['act'];

// easy
//$c = new $name();
//$c->$act();

$routes = [
    ['url' => 'home/index', 'do' => 'HomeController/index'],
    ['url' => 'auth/login', 'do' => 'LoginController/index']
];

$route = array_filter($routes, function ($el) use($name, $act) {
    return ($el['url'] == $name.'/'.$act);
})[0];

list($contoller, $action) = explode('/', $route['do']);
$c = new $contoller();
$c->$action();




















