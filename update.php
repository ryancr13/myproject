<?php
include('connect.php');
$id=$_GET['updateid'];
$sql="select *from info where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$password=$row['password'];

if(isset($_POST['submit'])){
    $na=$_POST['name'];
    $em=$_POST['email'];
    $pa=$_POST['password'];
$sql = "update info set id=$id,name='$na',email='$em',password='$pa' where id=$id";

if ($conn->query($sql) === TRUE) {
  //echo "New record is updated ";
  header('location:display.php');

 //header('location:display.php');
} else {
  echo "The records is not inserted";
}


}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Player oparation</title>
  </head>
  <body>
      <div class="container my-5">
        <h2>Update here!</h2>
      <form method="post">
         <div class="mb-3">
            <label >Player Name</label>
            <input type="text" class="form-control"  placeholder="Enter Your name" name="name" autocomplete="off"
             value="<?php echo $name?>">
         </div>
         <div class="mb-3">
            <label >Email</label>
            <input type="email" class="form-control"  placeholder="Enter Your Email" name="email"autocomplete="off"
            value="<?php echo $email?>">
         </div>
         
         <div class="mb-3">
            <label >Password</label>
            <input type="text" class="form-control"  placeholder="Enter Your Password" name="password"autocomplete="off"
            value="<?php echo $password?>">
         </div>
  
         <button type="submit" class="btn btn-primary" name="submit">update</button>
      </form>
    </div>


    
  </body>
</html>