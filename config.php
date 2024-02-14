<?php 
    try {
        $servername = "localhost";
        $username = "root";
        $database = "patients";
        $password = "";

        
        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $err) {
        echo $err->getMessage();
    }
    
?>