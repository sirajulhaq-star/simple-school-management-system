<?php
$host="localhost";
$user="root";
$pass="";
$db="office";

$con= mysqli_connect($host,$user,$pass,$db);
// if($con){
//     echo "connected";
// }
//     else{
//         echo "error";
//     }
$id = $_POST['id'];
$name = $_POST['name'];
$class = $_POST['class'];
$roll = $_POST['roll'];
$phone = $_POST['phone'];
$address = $_POST['address'];

    $sql="insert into student(id,name,class,roll,phone,address) values ($id,'$name','$class','$roll','$phone','$address')";
    if(mysqli_query($con,$sql)){
        echo "Data inserted successfully";

    }else{
        echo "Error";
    }

mysqli_close($con);
?>