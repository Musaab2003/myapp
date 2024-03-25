<?php
include 'connect.php';

if(isset($_POST['displaysend'])){

    $table='<table class="table">
    <thead class="thead-grey">
    <tr>
        <th scope="col">الاجراءات</th>
        <th scope="col">الدرجة العلمية</th>
        <th scope="col">المؤهل العلمي</th>
        <th scope="col">القسم العلمي</th>
        <th scope="col">الكلية</th>
        <th scope="col">البريد الجامعي</th>
        <th scope="col">الاسم</th>
        <th scope="col">sl no</th>
    </tr>
    </thead>';
    

    $sql= "SELECT * FROM user";

    $result= $conn->query($sql);
    $number=1;

    if(!$result){

        die("invalid query:".$conn->error);

    }
    while($row=$result->fetch_assoc()){
        $name=$row['name'];
        $email=$row['email'];
        $col=$row['collage'];
        $dep=$row['department'];
        $cer=$row['certificate'];
        $deg=$row['degree'];
        $table.='<tr>
        <td scope="row"><button class="btn btn-primary my-1" onclick="updateuser('.$name.')">تعديل</button>
        <button class="btn btn-danger" onclick="deleteuser('.$name.')">حـذف</button></td>
        <td>'.$deg.'</td>
        <td>'.$cer.'</td>
        <td>'.$dep.'</td>
        <td>'.$col.'</td>
        <td>'.$email.'</td>
        <td>'.$name.'</td>
        <td>'.$number.'</td>
      </tr>';
      $number++;
    }
    $table.='</table>';
    echo $table;
}

?>