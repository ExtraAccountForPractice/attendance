<?php

    $host = 'localhost'; // 127.0.0.1
    $db = 'attendance_db';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host, dbname=$db, chartset=$charset";
    
    try {
        $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo 'Hello Database Connection';
    } catch(PDOException $e) {
        //echo "<h1 class='text-danger'>No Database Found</h1>";
        throw new PDOException($e->getMessage());
    }

    //require_once 'crud.php';
    //$crud = new crud($pdo);

?>