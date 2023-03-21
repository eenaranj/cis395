<?php

/* 
 *  Eduardo E. Naranjo, MS
 *  Software Engineer
 *  This File: config.php
 *  Sep 21, 2022, 12:39:54 AM
*/

$host     = 'localhost:0000';     // Your MySQL server name and port
$dbname   = 'database_name'; // Database/Schema name
$username = 'user_name';               // Username
$password = 'password';               // Password

$con = mysqli_connect($host, $username, $password, $dbname);

$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);