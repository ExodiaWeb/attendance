<?php 

$host = 'sql11.freemysqlhosting.net';
$db = 'sql11461292';
$user = 'sql11461292';
$pass = 'hBhew9lE4j';
$charset = 'utf8mb4';
$port = '3306';


$dsn = "mysql:host=$host;dbname=$db;charset=$charset; port=$port";

try{
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e){
    throw new PDOException($e -> getMessage());
}

    require_once 'crud.php';
    $crud = new crud($pdo);

?>
