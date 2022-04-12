<?php
    define("DATA_LAYER_CONFIG", [
        "driver" => "mysql",
        "host" => "localhost",
        "port" => 3306,
        "dbname" => "mvc",
        "username" => "root",
        "passwd" => "",
        "options" => [
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", //tipo de letra
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, //Tipo de erro
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, // fetch né pai
            PDO::ATTR_CASE => PDO::CASE_NATURAL //como vai passar do banco para o sistema
        ]
    ]);