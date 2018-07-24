<?php 
Session_start();
$a=$_POST['id'];
$_SESSION['id']=$a;
require("config.php");
$result=mysqli_query($con,"select * from users where userid='$a'");
if(mysqli_fetch_assoc($result)){
    header("Location:forget3.php");
    }
    else{
        header("location:forget.php?msg4=user id did not exists");
    }

?>