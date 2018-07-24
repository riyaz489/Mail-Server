<?php 
Session_start();
$op=$_POST['op'];
$np=$_POST['np'];
$cp=$_POST['cp'];
$a=$_SESSION['name'];
require("config.php");
$result=mysqli_query($con,"select * from users where userid='$a' && password='$op'");
if(mysqli_fetch_assoc($result)){
   if(mysqli_query($con,"update users set password='$np' where userid='$a'")){
       header("Location:change.php?msg2=password sucessfully changed");
   }
   else 
   header("Location:change.php?msg2=password did not change");
    }
    else{
        header("location:change.php?msg=wrong password entered");
    }

?>