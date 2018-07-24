<html>
<head>

<title>forgot password</title>
<link rel="shortcut icon" href="icon.ico" >
<script>
    function f(){
        if(document.form3.id.value==""){
            document.getElementById("lmsg").innerHTML="please enter ID";
        }
        else {
            document.form3.submit();
        }
    }
</script>
<link rel="stylesheet" type="text/css" href="css/style.css">

</head>


<body>
<div style="height:20%;width:100%;background-color:black;"><a href="index.php"  > <img height="100%" width="20%" src="logo.png" alt="mail server"></a></div>
<form name="form3" action="forget2.php" method="post"style="margin-left:40%;margin-top:2%;">
<h1 style="color:rgb(20, 57, 66);"><u>Forget password</u></h1>
<h2 style="color:rgba(80, 19, 22, 0.767);">Don't worry...</h2><br><br>
<label for="id">Enter ID</label>
<input type="text" id="id" name='id' placeholder ="please enter your id" style="margin-left:3%;margin-right:5%;" >
<br><label style="color:red;" id="lmsg"><?php if(isset($_GET['msg4']))echo($_GET['msg4']); else echo ("");?> </label><br><br>
<input type="button" value="submit" onclick="f()">
</form></body>
</html>