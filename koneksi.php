<?php

function koneksi()
{
       $host = "localhost";
       $port = 3306;
       $database = "mario-todolist";
       $username = "root";
       $password = "";


       return new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
}