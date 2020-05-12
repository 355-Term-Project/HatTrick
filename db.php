<?php
$host = "ec2-34-200-116-132.compute-1.amazonaws.com";
$user = "pdwszmyzomclfz";
$password = "f44f127f236864f768f94650cbdc12dab5218ad3e22449219133b70be23e6aa6";
$dbname = "d3n72r732974e4";
$port = "5432";

try{
    //set DSN data source name
    $dsn = "pgsql:host=" . $host . ";port=" . $port . ";dbname=" . $dbname . ";user=" .$user . ";password=" . $password . ";";

    //create a pdo instance
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    }
?>