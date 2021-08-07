<?php 

    try {
        $pdo = new PDO("mysql:host=localhost;dbname=nova","root","");
    }
    catch(PDOException $pdo){
        die("Unsuccessful connection");
    }
    
?>