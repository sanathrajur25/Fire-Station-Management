<!DOCTYPE html>
<head>
    <title>
      Admin Sign In
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <meta charset ="utf-8">  
    <link rel = "icon" href='Free_Sample_By_Wix.jpg' 
        type = "image/x-icon" >
         <link rel="stylesheet" href="adminsignin.css" type="text/css"> 
         <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
</head>

<body>
        <div class="header" >
            <nav> 
                <img src="Free_Sample_By_Wix.jpg" class="logo">
                <ul class="nav-links">
                <li><a href ='http://localhost:8080/Fire_management/MainFile/Home.php'>HOME</a></li>
                <li><a href ='http://localhost:8080/Fire_management/employee/emp%20login/employee%20signin.php'>EMPLOYEE LOGIN</a></li>
                </ul>
            </nav>    
        </div>
    <div class="container" >
        
        <div class="leftside">
            <form action="Log.php" method="post">
                <center>
                <Label>
                    <span class="txt">Admin-id</span><br><input type="text" name="adminid" class="inp"><br><br>
                    <span class="txt">Password</span><br><input type="password" name="apassword" class="inp"><br><br>
                    <button name="Login" class='but'>SIGN IN</button>
                </Label>
                </center>
            </form>
        </div>
    </div>
    <footer class="foot">
            <h2 class="h2us">Contact Us : <br> <h5 class="h5us">Phone:102 <br> Location: Karnataka Fire and Emergency Services Hermit Colony</h5></h2>
    </footer>
</body>
</html>
   