
<head>   <title>inbox</title> <link rel="shortcut icon" href="icon.ico">

<style>

form{
    margin-left:30%;
    width:50%;
}
input[type="text"],textarea{
    background-color:rgba(71, 53, 53, 0.678);
}
h1{
margin-left:48%;
margin-top:5%;
}
form a,a::after {
      margin-left: 30%;
      text-decoration: none;
      color: rgb(224, 225,225 );
  }
  button a,a:after{
      color:white;
      font-size:10px;
    text-decoration: none;}
  button{
    height:40px;
    width:90px;
  letter-spacing:1px;
  border-radius:1em;
  border:none;
  box-shadow:2px 3px 3px 2px rgba(23, 14, 56, 0.911);
  background-color:rgba(12, 58, 23, 0.829);
  cursor:pointer;
  
  }
  #sidebar{ position:absolute;
      margin-left:10%;
      margin-top:5%;
      margin-right:10%;
  }
</style>
</head>
<body>
<?php require("head.html")?>
<h1><u>Message</u></h1><br>

<div id="sidebar"> 
<button><a href="inbox.php">Back</a></button><br><br>

<button style="background-color:rgba(197, 21, 21, 0.884);" ><a href="change.php">Logout</a></button>
</div>
<form  action="#" >
<?php require("config.php");

session_start();
$id=$_GET['id'];
$result=mysqli_query($con,"select * from mail where id='$id' ");
while($row=mysqli_fetch_assoc($result)){
    ?>
<label for="sender">From:</label><input type="text" style="margin-left:50px;" id="sender" value="<?php echo $row['sender'];?>"> <br><br>
<label for="receiver">To:</label><input type="text" style="margin-left:65px;"id="receiver" value="<?php echo $row['receiver'];?>"><br><br>
<label for="subject">Subject:</label><input type="text"style="margin-left:37px;" id="subject" value="<?php echo $row['subject'];?>"><br><br>
<label for="Message">Message:</label><textarea style="margin-left:30px;" id="Message"> <?php echo $row['sender'];?></textarea>


<?php } ?></form>
</body>