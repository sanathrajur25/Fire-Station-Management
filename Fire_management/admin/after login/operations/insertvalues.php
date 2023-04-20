<?php
$servername="localhost";
$username="root";
$password="";
$database_name="fsm";

$conn = mysqli_connect($servername,$username,$password,$database_name);
//echo "Test";
if(!$conn)
{
    die("Connection Failed:" . $mysqli_error());
}
if(isset($_POST['Enter']))
{
        //echo "Inside";
        $a=$_POST['Emp_id'];
        $b=$_POST['Name'];
        $c=$_POST['Address'];
        $d=$_POST['Gender'];
        $e=$_POST['Rank'];
        $f=$_POST['Salary'];
        $g=$_POST['age'];
        $h=$_POST['joining_date'];
        $i=$_POST['S_num'];
        
        $k = $_POST['password'];

        $sql_query="INSERT INTO employee(Emp_id,Name,Address,Gender,Rank,Salary,age,joining_date,S_num,password)
        values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$k')";
        
        if (mysqli_query($conn, $sql_query)){
            echo "Employee $b added";
            header("refresh:2; url=http://localhost:8080/Fire_management/admin/after%20login/operations/insertemp.php");
            //echo "New Customer added";
        }
        else {
            echo "Error: " . $sql . "" . mysqli_error($conn); 
        }

        mysqli_close($conn);   
 
} 

elseif(isset($_POST['addequip']))
{
        //echo "Inside";
        $a=$_POST['E_no'];
        $b=$_POST['Type'];
        $c=$_POST['Name'];
        $d=$_POST['last_service'];
        $e=$_POST['next_service'];
        $f=$_POST['used_time'];
        $g=$_POST['S_num'];

        $sql_query1="INSERT INTO equipment(E_no,Type,Name,last_service,next_service,used_time,S_num)
        values('$a','$b','$c','$d','$e','$f','$g')";
        
        if (mysqli_query($conn, $sql_query1)){
            echo "Equipment $c of type $b with id $a has been added to station number $g";
            header("refresh:3; url=http://localhost:8080/Fire_management/admin/after%20login/operations/insertequip.php");
            //echo "New Customer added";
        }
        else {
            echo "Error: " . $sql . "" . mysqli_error($conn); 
        }

        mysqli_close($conn);   
 
}    
elseif(isset($_POST['addstat']))
{
        //echo "Inside";
        $a=$_POST['S_num'];
        $b=$_POST['SName'];
        $c=$_POST['Address'];
        $e=$_POST['Phone'];


        $sql_query2="INSERT INTO station(S_num,SName,Address,Phone)
        values('$a','$b','$c','$e')";
        
        if (mysqli_query($conn, $sql_query2)){
            echo "New station $b with station number has been added to $c";
            header("refresh:2; url=http://localhost:8080/Fire_management/admin/after%20login/operations/insertstat.php");
            //echo "New Customer added";
        }
        else {
            echo "Error: " . $sql . "" . mysqli_error($conn); 
        }

        mysqli_close($conn);   
 
} 

elseif(isset($_POST['addveh']))
{
        //echo "Inside";
        $a=$_POST['vid'];
        $b=$_POST['vtype'];
        $c=$_POST['vname'];
        $d=$_POST['vpurchase'];
        $e=$_POST['S_num'];
      
        $sql_query3="INSERT INTO vehicle(vid,vtype,vname,vpurchase,S_num)
        values('$a','$b','$c','$d','$e')";
        
        if (mysqli_query($conn, $sql_query3)){
            echo "Vehicle type $b added to staion number $e";
            header("refresh:2; url=http://localhost:8080/Fire_management/admin/after%20login/operations/insertveh.php");
            //echo "New Customer added";
        }
        else {
            echo "Error: " . $sql . "" . mysqli_error($conn); 
        }

        mysqli_close($conn);   
 
} 

elseif(isset($_POST['addeme']))
{
        //echo "Inside";
        $a=$_POST['Em_id'];
        $b=$_POST['Em_loc'];
        $c=$_POST['Em_type'];
        $d=$_POST['Date'];
        $e=$_POST['time'];
        $f = $_POST['S_num'];
      
        $sql_query4="INSERT INTO emergency(Em_id,Em_loc,Em_type,Date,time,S_num)
        values('$a','$b','$c','$d','$e','$f')";
        
        if (mysqli_query($conn, $sql_query4)){
            echo "Emergency type $c added";
            header("refresh:2; url=http://localhost:8080/Fire_management/admin/after%20login/operations/inserteme.php");
            //echo "New Customer added";
        }
        else {
            echo "Error: " . $sql . "" . mysqli_error($conn); 
        }

        mysqli_close($conn);   
 
} 

?>