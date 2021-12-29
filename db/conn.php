<?php 

// $host = 'sql11.freemysqlhosting.net';
// $db = 'sql11461292';
// $user = 'sql11461292';
// $pass = 'hBhew9lE4j';
// $charset = 'utf8mb4';
// $port = '3306';

$host = '127.0.0.1';
$db = 'attendance';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset;";

try{
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e){
    throw new PDOException($e -> getMessage());
}

    require_once 'crud.php';
    require_once 'user.php';
    $crud = new crud($pdo);
    $user = new user($pdo);
