<!DOCTYPE html>
<html lang="en">

<head>
<title>Login</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
</head>

<body background = "fire.jpeg"; background-size 100% 100% >

    <center>
    
            <div class="col-right">
                <div class="login-form">
                    <h2 style="color: white;">Login</h2>
                    <form action="Log.php" method="post">
                        <p style="color:white;"><label>Username<span>&nbsp;</span></label><input type="text" name = "uname" placeholder="Username" required></p>
                        <p style="color:white;"><label>Password<span>&nbsp;</span></label><input type="password" name = "upassword" placeholder="Password" required></p>
                        <button style="color: black;" type="submit" class = "btn" name="Login">Login</button>
                    </form>
           
    </div>
</center>
</body>

</html>