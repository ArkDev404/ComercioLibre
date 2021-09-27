<?php

$server = "127.0.0.1";
$port = "5432";
$database = "ComercioLibre";
$user = "postgres";
$pass = "2m2x3c4";

$conn = new PDO("pgsql:host=$server;
                port=$port;
                dbname=$database", 
                $user, $pass);


