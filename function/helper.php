<?php
include_once('../data/autoload.php');
$user = file_get_contents('../data/user.json');


function auth()
{
    $cookie = $_COOKIE['@login'];
    $session = $_SESSION['@login'];

    var_dump($cookie);
    var_dump($session);
}
