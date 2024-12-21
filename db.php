<?php
$host = 'localhost';
$db = 'calculator';
$user = 'root';
$pass = '';
$port = 3306;

$dsn = "mysql:host=$host;port=$port;dbname=$db";
$options = [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];

$pdo = new PDO($dsn, $user, $pass, $options);