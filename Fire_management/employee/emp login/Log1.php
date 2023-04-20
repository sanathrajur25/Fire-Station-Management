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
    
    $user_name=$_POST['Emp_id'];
    //echo $user_name;
    $user_password=$_POST['password'];
    //echo $user_password;
    $s = " SELECT * from employee where Emp_id = '$user_name' and password = '$user_password';";
        
    $result = mysqli_query($conn, $s);

    $num= mysqli_num_rows($result);

    if ($num >0 ){
        
       
        echo '<script type ="text/JavaScript">';  
        echo 'alert("Sign in Successful")';  
        
        echo '</script>';
        header("Location: http://localhost:8080/Fire_management/employee/after%20emp%20log/new.php");
        
        
    }
    else {
        echo '<script type ="text/JavaScript">';  
        echo 'alert("User ID/password does not match")';  
        header("refresh:1; url=http://localhost:8080/Fire_management/employee/emp%20login/employee%20signin.php");
        echo '</script>';

        
    }
    
    mysqli_close($conn);
}
?>