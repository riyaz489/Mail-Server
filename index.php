<!Doctype HTML>
<html>

<head>
    <title>mail server</title>
    <link rel="shortcut icon" href="icon.ico" >
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script language="Javascript" src="script/valid1.js">
    </script>


</head>


<body>
    <div class="row">
        <div class="col-1-1">
            <a href="index.php"> <img src="logo.png" alt="mail server"></a>
            <form name="f1" action="login.php" method="post">
                <label class="lbl" for="id">Enter Id:</label>
                <input type="text" id="id" name="n1" placeholder="enter your id">
                <label class="id-msg" id="l1"><?php if(isset($_GET['msg1']))echo($_GET['msg1']);
                else echo ("");?> </label>
                <label class="lbl" for="pwd">Enter password:</label>
                <input type="password" id="pwd" name="p1" placeholder="enter your password">
                <label class="id-msg" id="l2"></label>
                
               
                <input type="button" value="Login" onclick="func1()">
                <a href="forget.php">Forget password</a>
            </form>

        </div>
    </div>

    <div class="row">
        <div class="col-2-1">
            <div class="box">
                <div class="content">
                    <h1><u><center>About Project</center></u></h1><br><br>
                    <p>This is a local mail server that handles and delivers e-mails over a network. this mail server can receive mails and deliver them to their clients. here user can see his/her mails and they can delete them also.
                    </p>
                </div>
            </div>

        </div>
        <div class="col-2-2">

            <form name="f2" action="signup.php" method="post">

                <h2><u>New User?</u></h2>
                <label class="lbl" for="id2">Enter Id:</label>
                <input style="margin-left:19%;margin-bottom:-10%; " type="text" id="id2" name="n1" placeholder="enter your id">
                <br><label class="f2-id-msg" id="l2-1"> <?php if(isset($_GET['msg2']))echo($_GET['msg2']);
                else echo ("");?></label>
                <br>
                <label class="lbl" for="pwd2">Enter password:</label>
                <input type="password" style="margin-left:7.5%;" id="pwd2" name="p1" onblur="func3()" placeholder="enter your password">
                <br><label class="f2-id-msg" id="l2-2"></label>

            <br>
                <label class="lbl" for="hq">Select Hint Question:</label>
                <select name="s1" id="hq">
                    <option selected value="nick name">whats your nick name?</option>
                    <option  value="food name">whats your favourite food?</option>
                    <option  value="DOB">whats your DOB?</option>
                    <option  value="birth city name">whats your birth city name?</option>
                    <option  value="father name">whats your father name?</option>
                </select>
                <br><br>
                <label class="lbl" for="ha">Enter Hint Answer:</label>
                <input type="text" style="margin-left:3%;" id=" ha " name="h1" placeholder="enter your answer ">
                <br><label class="f2-id-msg" id="l2-3"></label>
                
                <br><input type="button" name="btn" style="margin-top: -10%;background: linear-gradient(to right,rgba(18, 72, 143, 0.575),rgba(92, 231, 11, 0.685));" value="SignUp " onclick="func2() ">
                <input type="reset">


                
               <br> <label class="f2-id-msg" style="color:green; "><div style="  margin-top:-10px;margin-left:50%;"> <?php if(isset($_GET['msg3']))echo($_GET['msg3']);
                else echo ("");?></div></label>
            </form>


        </div>

    </div>
</body>

</html>