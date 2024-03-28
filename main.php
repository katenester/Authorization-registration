<?php

// Маршрутизация запросов
include_once "./create_user.php";
if ($_SERVER['REQUEST_URI']=='/' && $_SERVER['REQUEST_METHOD']=='GET'){
    create_user();
}
?>
