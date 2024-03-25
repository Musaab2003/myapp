<?php
include 'connect.php';

if(isset($_POST['updateid'])){

    $user_id=$_POST['updateid'];

    $sql= "SELECT * FROM user where id=$user_id";

    $result= $conn->query($sql);

    $response=array();

    while($row=$result->fetch_assoc()){

        $response = $row;

    }
        echo json_encode($response);

}else{
    $response['status']=200;
    $response['message']="بيانات غير موجودة";
}


//update query
if(isset($_POST['hiddendata'])){
    $name=$_POST['hiddendata'];
    $email=$_POST['updatename'];
    $col=$_POST['updateemail'];
    $dep=$_POST['updatefaculty'];
    $cer=$_POST['updatedepartment'];
    $deg=$_POST['updatedepartment'];

    $sql = "UPDATE user set name='$name',email='$email',collage='$col', department='$dep', certificate='$cer', degree='$deg',  where idd=$uniqueid";
    $result= $conn->query($sql);
}
?>