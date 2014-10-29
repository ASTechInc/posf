<?php

// Данные для подключения к MySQL

$host = "localhost";
$user = "nsast";
$password = "ObAIR1Er";
$database = "nsast";

$dbusers = "users";


// Подключение к базе данных

$db = new mysqli($host,$user,$password,$database);
if(mysqli_connect_errno()) {
    echo "Ошибка подключения к базе данных. Проверьте данные для подключения";
}

if(isset($_COOKIE['user'])) {
    define ("iUSER", true);
    define("USER_ID",$_COOKIE['user_id']);
} else {
    define ("iUSER", false);
    define("USER_ID",111);
}
define("iMEMBER", $_COOKIE['user_id'] >= 0 ? 1 : 0);

?>