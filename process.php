<?php 
include "connect.php";
if (isset($_POST["insert"])) {
    $insert = $db -> prepare("INSERT INTO Your_Database_Name set email = :mail, passwd = :passwd");
    $ok = $insert -> execute(array(
        'mail' => $_POST["mail_post"],
        'passwd' => $_POST["password_post"]
    ));    
    if ($ok) {
        Header("Location:index.php?status=ok");
        exit;
    } else{
        Header("Location:index.php?status=no");
        exit;
    }
}
?>