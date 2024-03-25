<?php
include 'connect.php';
include 'test.php';
include 'write.php';

extract($_POST);

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['collage']) 
&& isset($_POST['department']) && isset($_POST['certificate']) && isset($_POST['degree'])){

$sql =  "INSERT INTO `user` (`name`, `email`, `collage`, `department`, `certificate` , `degree`) VALUES
 ($name, $email, $col, $dep, $cer, $deg);";
    $result = $conn->query($sql);
}
?>