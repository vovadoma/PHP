<?php

$c = new HomeController();
$c->index();



class HomeController {

    function index() {

        $a = [1, 2, 3, 2, 4, 5, 2, 3, 2, 1, 8];

        // 1.
        $filtered = array_filter($a, function ($el) {
            return !($el % 2);
        });
        print_r($filtered); echo '<br>';


        // 2.
        $func = function ($el) {
            return !($el % 2);
        };
        $filtered = array_filter($a, $func);
        print_r($filtered); echo '<br>';


        // 3.
        function func2($el) {
            return !($el % 2);
        };
        $filtered = array_filter($a, 'func2');
        print_r($filtered); echo '<br>';


        // 4.
        $filtered = array_filter($a, [$this, 'func3']);
        print_r($filtered); echo '<br>';

    }

    function func3($el) {
        return !($el % 2);
    }
}