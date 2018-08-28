<?php
    $host = 'localhost'; 
    $database = 'testchan';
    $user = 'root';
    $password = '';
    $db = mysql_connect($host, $user, $password);
    mysql_select_db("testchan", $db);
?>