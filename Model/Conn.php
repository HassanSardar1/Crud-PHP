<?php
    $host = '127.0.0.1';
    $db = 'UserData_DB';
    $user = 'root';
    $pass = 'Hassan123@';

    $dsn = "mysql:host=$host;dbname=$db";

    try{
        $pdo = new PDO($dsn,$user,$pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e)
    {
        throw new PDOExcetion($e->getMessage());
    }
    require_once 'path.php';
    require_once $Crud;
    $Crud = new Crud($pdo);
?>
