<?php 
try{
    $db = NEW PDO("mysql:dbname=Your_Database_Name;host=Your_Host_IP;charset=utf8","Your Database Username","YouR Database Password");
    //echo "Database Connect Susscesful...";
}catch(PDOExpection $e){
    echo $e -> getMessage();
}
?>