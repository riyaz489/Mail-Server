<html>
<head>

<title>change password</title>
<link rel="shortcut icon" href="icon.ico" >
<script>
    function f(){
        if(document.form3.op.value==""){
            document.getElementById("lmsg").innerHTML="please enter your old password";
            document.getElementById("lmsg2").innerHTML="";
            document.getElementById("lmsg3").innerHTML="";
        }  else if(document.form3.np.value==""){
            document.getElementById("lmsg2").innerHTML="please enter your new password";
            document.getElementById("lmsg").innerHTML="";
            document.getElementById("lmsg3").innerHTML="";
        
        }
       else if(document.form3.cp.value==""){
            document.getElementById("lmsg3").innerHTML="please enter you confirmation password";
            document.getElementById("lmsg2").innerHTML="";
            document.getElementById("lmsg").innerHTML="";
        
        }
        else if(document.form3.cp.value!=(document.form3.np.value)){
            document.getElementById("lmsg3").innerHTML="password did not match";
            document.getElementById("lmsg2").innerHTML="";
            document.getElementById("lmsg").innerHTML="";
        }
        else {
            document.form3.submit();
        }
    }


    
function func3() {
    var b = document.form3.np.value;
    var el1 = document.getElementById("lmsg");
    var el2 = document.getElementById("lmsg2");
    var el3 = document.getElementById("lmsg3");


    if (b.length < 6 || b.length > 15) {
        el2.innerHTML = "password should be less than 15 and greater than 5";
        el1.innerHTML = "";
        el3.innerHTML = "";

        document.form3.np.focus();

    } else
    if (!(/[a-z]/g.test(b) && /[A-Z]/g.test(b) && /[0-9]/g.test(b) && /[!@#\$%\^&\*]/g.test(b))) {
        el2.innerHTML = "password should containt atleast one upper,one lowercase ,one numeric and one special character";
        el1.innerHTML = "";
        el3.innerHTML = "";
        document.form3.np.focus();


    } else el2.innerHTML = "";
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
<form name="form3" action="change2.php" method="post"style="margin-left:40%;margin-top:2%;">
<h1 style="color:rgb(20, 57, 66);"><u>Change password</u></h1>
<br>
<label for="op">Enter Old Password:</label>
<input type="text" id="op" name='op' placeholder ="enter your old password" style="margin-left:3%;margin-right:5%;width:180px;" >
<br><label style="color:red;" id="lmsg"><?php if(isset($_GET['msg']))echo($_GET['msg']); else echo ("");?> </label><br>
<label for="np">Enter New Password:</label>
<input type="password" id="np" name='np' placeholder ="enter your new password" onblur="func3()" style="margin-left:3%;margin-right:5%;width:180px;" >
<br><label style="color:red;" id="lmsg2"> </label><br>
<label for="cp">Confirm Password:</label>
<input type="password" id="cp" name='cp' placeholder ="Confirm your password" style="margin-left:3%;margin-right:5%;width:180px;" >
<br><label style="color:red;" id="lmsg3"> </label><br>
<input type="button" value="submit" onclick="f()">
</form>

<br><label style="color:green;margin-left:45%;" id="lmsg4"><?php if(isset($_GET['msg2']))echo($_GET['msg2']); else echo ("");?> </label><br><br>

<div id="sidebar"><button style="background-color:rgba(197, 21, 21, 0.884);" ><a href="inbox.php">GO Back</a></button></div>


</body>
</html>