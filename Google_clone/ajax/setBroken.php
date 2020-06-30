<?php
require_once("../config.php");
if(isset($_POST["src"])){
    $src = $_POST["src"];
    $query = $con->prepare("UPDATE images SET broken = 1 WHERE imageUrl = :src");
    $query->bindParam(":src",$src);
    $query->execute();
}
else{
    echo "No src passed to page";
}
?>