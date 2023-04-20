<?php
$servername="localhost";
$username="root";
$password="";
$database_name="fsm";

$conn=mysqli_connect($servername,$username,$password,$database_name);

if(!$conn)
{
    die("Connection Failed:" . mysqli_error());
}
if(isset($_POST['Login']))
{
    
    $user_name=$_POST['adminid'];
    //echo $user_name;
    $user_password=$_POST['apassword'];
    //echo $user_password;
    $s = " select * from admin where admin_id = '$user_name' and password = '$user_password';";
        
    $result = mysqli_query($conn, $s);

    $num= mysqli_num_rows($result);

    if ($num >0 ){
        header("Location: http://localhost:8080/Fire_management/admin/after%20login/operations/main.php");
        
    }
    else {
        echo '<script type ="text/JavaScript">';  
        echo 'alert("User ID/password does not match")';  
        header("refresh:1; url=http://localhost:8080/Fire_management/admin/admin%20login/signin.php");
        echo '</script>';
        
        
        
        
        
    }
    mysqli_close($conn);
}
?>