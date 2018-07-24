<head><title>passowrd recovered</title><link rel="shortcut icon" href="icon.ico" ></head>
<?php session_start();
$a=$_SESSION['pass']?>
<div style="height:20%;width:100%;background-color:black;"><a href="index.php"  > <img height="100%" width="20%" src="logo.png" alt="mail server"></a></div>
<div style="margin-left:40%;margin-top:2%;">
<h1 style="color:rgb(20, 57, 66);"><u>Your password</u></h1>
<input type="text" id="id" name='id' placeholder ="please enter your id" value="<?php echo $a;?>"  style="margin-left:3%;margin-right:5%;" >
<br><br><br>
<br><br><a href="index.php">Want to login</a></div>
