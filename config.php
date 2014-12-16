<?php
//We start sessions
session_start();

$link = mysqli_connect('localhost', 'root', '', 'cheapomail');

//Top site root URL
$url_root = 'localhost/cheapomail';

//Home page file name
$url_home = 'index.php';

?>