<?php
require_once __DIR__ . "/../config/db.php";


function getPdoInstance(): PDO
{
    $dsn = DSN;
    $user = USER;
    $pass = PASS;
    try {
        $pdo = new PDO($dsn, $user, $pass);
    } catch (PDOException $e) {
        throw $e;
    }
    return $pdo;
}