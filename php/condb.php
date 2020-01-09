<?php

    $mysql_hostname = 'localhost';
    $mysql_username = 'project';
    $mysql_password = 'bitnami';
    $mysql_database = 'project';
    $mysql_port = '3306';
    $mysql_charset = 'utf8';

    $connect = new mysqli($mysql_hostname, $mysql_username, $mysql_password, $mysql_database, $mysql_port);
    
    if ($connect->connect_error) {
        die('conn Connect Error!');
    } 
?>

