<!DOCTYPE html>
<head>
    <title>
       Employee Sign In
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <meta charset ="utf-8"> 
    <link rel = "icon" href='Free_Sample_By_Wix.jpg' 
        type = "image/x-icon" >
         <link rel="stylesheet" href="emplogin.css" type="text/css"> 
         <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
</head>
<body>
        <div class="header" >
            <nav> 
                <img src="Free_Sample_By_Wix.jpg" class="logo">
                <ul class="nav-links">
                <li><a href ='http://localhost:8080/Fire_management/MainFile/Home.php'>HOME</a></li>
                <li><a href ='http://localhost:8080/Fire_management/admin/admin%20login/signin.php'>ADMIN LOGIN</a></li>
                </ul>
            </nav>    
        </div>
    <div class="container">
        <div class="leftside">
            <form action="Log1.php" method="post">
                <center>
                <Label>
                    <span class="txt">EMPLOYEE ID</span><br><input type="text" name="Emp_id" class="inp" placeholder="Employee Id"><br><br>
                    <span class="txt">PASSWORD</span><br><input type="password" name="password" class="inp" placeholder="Password"><br><br>
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
   