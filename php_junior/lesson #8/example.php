<?php

session_start();


var_dump($_SESSION);
echo '<br>';
var_dump($_COOKIE);

exit;

setcookie('already_login', 'YES', time() + 600);


$_SESSION['page'] = isset($_GET['page']) ? $_GET['page'] : '';

if (isset($_GET['page'])) {
    $_SESSION['page'] = $_GET['page'];
}

if (isset($_GET['page']) and $_GET['page']) {
    $_SESSION['page'] = $_GET['page'];
}

$_SESSION['page'] = (isset($_GET['page']) and !empty($_GET['page'])) ? $_GET['page'] : '';

