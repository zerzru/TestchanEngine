<?php
    require_once 'connection.php';

    mysql_connect($host, $user, $password) or die('Ошибка подключения к базе данных');
    mysql_select_db($database) or die('Ошибка подключения к базе данных');
?>