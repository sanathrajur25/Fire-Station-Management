<?php
$servername="localhost";
$username="root";
$password="";
$database_name="fsm";

$conn = mysqli_connect($servername,$username,$password,$database_name);
//echo "Test";
if(!$conn)
{
    die("Connection Failed:" . mysqli_error());
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
        $j = $_POST['password'];

        $sql_query="INSERT INTO employee(Emp_id,Name,Address,Gender,Rank,Salary,age,joining_date,S_num,password)
        values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j')";
        
        if (mysqli_query($conn, $sql_query)){
            header("Location: http://localhost:8080/Fire_management/adminhome.php");
            //echo "New Customer added";
        }
        else {
            echo "Error: " . $sql . "" . mysqli_error($conn); 
        }

        mysqli_close($conn);   
 
}
elseif(isset($_POST['selectdet'])){
    
    $l = $_POST['S_num'];

    $q1=  " select * from employee where S_num = '$l';";
    $result1=mysqli_query($conn,$q1);

    
		if(mysqli_affected_rows($conn)>0)
		{
			while($row=mysqli_fetch_array($result1))
			{
				echo "<br/> Employee ID: "  .$row['Emp_id'];
				echo "<br>Name: " .$row['Name'];				
				echo "<br/>Address: ".$row['Address'];
				echo "<br/>Gender: ".$row['Gender'];
				echo "<br/>Rank: ".$row['Rank'];
				echo "<br/>Salary: ".$row['Salary'];
				echo "<br/Age: ".$row['age'];
				echo "<br/>Joining Date: ".$row['joining_date'];
				echo "<br/>Station Number: ".$row['S_num'];
                echo "<br/>Password: ".$row['password'];

				
			}
				
		}
		else
		{
			echo 'Data is not found ...!!';
		}
}
elseif(isset($_POST['delete'])){
       
}
    
?>