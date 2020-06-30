<?php
ob_start();
try{
    $con = new PDO("mysql:dbname=doodle;host=localhost","phpmyadmin" , "M1976gbA");
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
}
catch(PDOException $e){
    echo "Connection failed!" . $e->getMessage();
}
?>