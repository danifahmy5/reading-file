<?php
include_once('../data/autoload.php');

unset($_SESSION['@login']);
unset($_COOKIE['@login']);
setcookie('@login', '', strtotime('+1 year'), '/');


header('Location:' . $base_url);
