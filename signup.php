<?php
require("config.php");
$id=$_POST['n1'];
$pass=$_POST['p1'];
$ques=$_POST['s1'];
$ans=$_POST['h1'];
$result =mysqli_query($con,"select * from users where userid ='$id'");
if(mysqli_fetch_assoc($result)){
header("location:index.php?msg2=username already exists");
}else{

    $result2=mysqli_query($con,"insert into users values('$id','$pass','$ques','$ans')");
  
    header("location:index.php?msg3=signed in sucessfully <br> now you are ready to login..");
}
?>