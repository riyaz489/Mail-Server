<html>
<head>

<title>Compose</title>
<link rel="shortcut icon" href="icon.ico" >
<script>
    function f(){
        if(document.form.sub.value==""){
            alert(" subject is blank");
        }
         if(document.form.sub.value==""){
            alert( "message is blank");
        }
        if(document.form.to.value==""){
            document.getElementById("lmsg1").innerHTML="please enter reciver id";
        }
        else {
            document.form.submit();
        }
        
        
    }
</script>
<link rel="stylesheet" type="text/css" href="css/style.css">
<style>button a,a:after{
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
      margin-left:20%;
      margin-top:-30%;
      margin-right:10%;
  }</style>
</head>


<body>
<div style="height:20%;width:100%;background-color:black;"><a href="index.php"  > <img height="100%" width="20%" src="logo.png" alt="mail server"></a></div>

<form name="form" action="compose2.php" method="post"style="margin-left:40%;margin-top:2%;">
<h1 style="color:rgb(20, 57, 66);"><u>Compose Message</u></h1>

<label for="to">TO:</label>
<input type="text" id="to" name='receiver' placeholder ="Receiver" style="margin-left:7%;margin-right:5%;" >
<br><label style="color:red;" id="lmsg1"><?php if(isset($_GET['msg6'])) echo($_GET['msg6']);   else echo"";?></label>
<br><br><label for="sub">Subject:</label>
<input type="text" id="sub" name='subject' placeholder ="Subject" style="margin-left:3%;margin-right:5%;" >

<br><br><label for="message">Message:</label>
<textarea id="message" name='message'  style="margin-left:3%;height:90px;width:130px; margin-right:5%;" ></textarea>


<br><br><label style="color:green;" id="lmsg"><?php if(isset($_GET['msg7']))echo($_GET['msg7']); else echo ("");?> </label><br><br>
<input type="button" value="submit" onclick="f()">
</form>
<div id="sidebar"><button style="background-color:rgba(197, 21, 21, 0.884);" ><a href="inbox.php">GO Back</a></button></div>


</body>
</html>