
<head>   <title>inbox</title> <link rel="shortcut icon" href="icon.ico">

<style>

form{
    margin-left:30%;
    width:50%;
}
table{ background-color:rgba(32, 96, 170, 0.726);
   }
td{
    margin-left:25px;
    padding-left:30px;
}th{
    margin-left:25px;
    padding-left:30px;
background-color:rgba(19, 11, 65, 0.726);
color:rgba(222, 222, 225, 0.926);}
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
<h1><u>INBOX</u></h1><br>

<div id="sidebar"> 
<button><a href="compose.php">Compose</a></button><br><br>
<button><a href="change.php">Change password</a></button><br><br>
<button style="background-color:rgba(197, 21, 21, 0.884);" ><a href="logout.php">Logout</a></button>
</div>
<form  action="delete.php" method="post">
<table border=2 >
    <tr><th><input type="submit" style="margin-left:-20px; background: linear-gradient(to right bottom, rgb(216, 90, 213), rgb(108, 40, 198));
" value="Delete"></th>
<th>Serial No.</th>
<th>Sender</th>
<th>Receiver</th>
<th>Subject</th>

</tr>
<?php require("config.php");
$i=0;
session_start();
$id=$_SESSION['name'];
$result=mysqli_query($con,"select id,sender,subject from mail where receiver='$id' ");
while($row=mysqli_fetch_assoc($result)){
    $i++;?>
<tr><td><input type="checkbox" name="ck<?php echo $i;?>"></td> <?php $_SESSION['ck'.$i]=$row['id'];?>
<td><?php echo $i;?></td>
<td><?php echo $row['sender'];?></td>
<td><?php echo $id;?></td>
<td><a href="show.php?id=<?php echo $row['id'];?>"><?php echo $row['subject'];?></a></td>

</tr>
<?php } ?></table>
<input type="hidden" name="count" value="<?php echo $i;?>"></form>
<br><label style="color:red; margin-left:60%;" ><?php if(isset($_GET['msg5']))echo($_GET['msg5']);
                else echo ("");?></label>
</body>