<?php
include("connect.php");
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from info where id=$id";
   $result=mysqli_query($conn,$sql);
    if($result){
        //echo" My info is well removed";
        header('location:display.php');
    }
    else{
        die("failed to Delete your info" . mysqli_error());
    }
}


?>