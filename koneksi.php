<?php

$hostname = "localhost";
$username = "root";
$password = "root";
$database = "toko_buku";

$conn     = mysqli_connect($hostname, $username, $password, $database) or die("Database MySQL tidak terhubung");
