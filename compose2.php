<?php
Session_start();
require("config.php");
$receiver=$_POST['receiver'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$sender=$_SESSION['name'];

$result=mysqli_query($con,"select * from users where userid ='$receiver' ");
if($row=mysqli_fetch_assoc($result)){
    if(mysqli_query($con,"insert into mail (receiver,sender,subject,messsage)  values ('$receiver','$sender','$subject','$message')")>0){
        header("location:compose.php?msg7=message sent successfully");
   
    }
   
    else{
        header("location:compose.php?msg7=sorry your message did not send");
      
}
}  
    else{
    header("location:compose.php?msg6=receiver did not exists");
  
}

?>