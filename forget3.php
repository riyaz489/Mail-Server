<html>
<head>

<title>forgot password</title>
<link rel="shortcut icon" href="icon.ico" >
<script>
    function f(){
        if(document.form4.ans.value==""){
            document.getElementById("lmsg").innerHTML="please enter ID";
        }
        else {
            document.form4.submit();
        }
    }
</script>
<link rel="stylesheet" type="text/css" href="css/style.css">

</head>


<body>
<?php require("config.php");
Session_start();
$a=$_SESSION['id'];
$result=mysqli_query($con,"select hintquestion from users where userid='$a'");
$row=mysqli_fetch_assoc($result);
$ques=$row['hintquestion'];
?>
<?php if(isset($_POST['ans'])){

$b=$_POST['ans'];

$result2=mysqli_query($con,"select password from users where userid='$a' &&  hintanswer='$b'");
if($row2=mysqli_fetch_assoc($result2)){
$_SESSION['pass']=$row2['password'];
    header("Location:forget4.php");
}
else{
    header("Location:forget3.php?msg4=wrong answer");
} }?>


<div style="height:20%;width:100%;background-color:black;"><a href="index.php"  > <img height="100%" width="20%" src="logo.png" alt="mail server"></a></div>
<form name="form4" action="#" method="post"style="margin-left:40%;margin-top:2%;">

<h2 style="color:rgba(80, 19, 22, 0.767);">Security Question</h2><br><br>
<label for="ans"><?php echo $ques;?> </label>
<input type="text" id="ans" name='ans' placeholder ="enter your answer" style="margin-left:3%;margin-right:5%;" >
<br><label style="color:red;" id="lmsg"><?php if(isset($_GET['msg4']))echo($_GET['msg4']); else echo ("");?> </label><br><br>
<input type="button" value="submit" onclick="f()">
</form></body>
</html>