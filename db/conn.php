<?php 

$host = 'localhost:3306';
$db = 'olivdkff_demo';
$user = 'olivdkff_login';
$pass = 'SobaGPozwzhf';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try{
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e){
    throw new PDOException($e -> getMessage());
}

    require_once 'crud.php';
    $crud = new crud($pdo);

?>
