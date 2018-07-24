

<?php require("config.php");

session_start();
$j=0;
$k=0;
$i=$_POST['count'];
$id=$_SESSION['name'];
for ($j=1;$j<=$i;$j++) {
    $s=$_POST["ck".$j];
    
    if ($s=="on") {
        $ck=$_SESSION['ck'.$j];
        if((mysqli_query($con, "delete from mail where id='$ck' "))>0) 
        $k++;
    }
}

if($k>0)

    header("Location:inbox.php?msg5=$k rows deleted");
    else
    header("Location:inbox.php?msg5=no row is  deleted");
    
    ?>
