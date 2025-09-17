<?php

$login = isset($_POST['login']) ? $_POST['login'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';


$host = $_SERVER['HTTP_HOST'];
$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');


if ($login === 'admin' && $password === 'azerty') {

    header("Location: http://$host$uri/profil.html");
    exit();
}
?>
