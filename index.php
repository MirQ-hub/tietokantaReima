<?php
try{$dbcon = new PDO("mysql:host=127.0.0.1;dbname=classicmodels", "root", "");
    echo "Onnistui";
    $dbcon->exec("INSERT INTO");
}
catch(PDOException $e){
    echo $e ->getMessage();
}