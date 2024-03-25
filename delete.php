<?php
include 'connect.php';

if(isset($_POST['deletesend'])){
    $unigue=$_POST['deletesend'];

    $sql= "DELETE FROM user where name='$unigue'";
    $result= $conn->query($sql);
}
?>