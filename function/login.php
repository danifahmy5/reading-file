<?php
include_once('../data/autoload.php');
$user = file_get_contents('../data/user.json');

$is_error = '';
$username = isset($_GET['username']) ? $_GET['username'] : null;
$password = isset($_GET['password']) ? $_GET['password'] : null;
$remember_me = isset($_GET['remember_me']) ? $_GET['remember_me'] : false;

if ($username !== '' && $password !== '') {
    $objUser = json_decode($user, FALSE);
    $verify = password_verify($password, $objUser->password);
    if ($username == $objUser->username && $verify) {
        if ($remember_me) {
            setcookie('@login', $user, strtotime('+1 year'), '/');
        }
        $_SESSION['@login'] = $user;
        header('Location:' . $base_url);
    } else {
        $is_error = 'username atau password salah';
    }
}
