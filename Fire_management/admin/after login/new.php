<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    
    border: 1px solid black;
    
   
}
</style>
</head>
<body>


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

if(isset($_POST['selectdet'])){


    $l = $_POST['S_num'];
    $sql = "SELECT * FROM employee where S_num='$l';";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
    echo "<table><tr><th>employee</th><th>Name</th></tr>";
    while($row = $result->fetch_assoc())
     {
    echo "<tr><td>" . $row["Emp_id"]. "</td><td>" . $row["Name"]    . "</td><td>". $row["Address"]. "</td><td>" .$row["Gender"] . "</td><td>" .$row["Rank"] . "</td> <td>" .$row["Salary"] . "</td><td>" .$row["age"] . "</td>
<td>" .$row["joining_date"] . "</td>
    <td>" .$row["S_num"] . "</td>
    <td>" .$row["password"] . "</td></tr>";
    }
    echo "</table>";
    } 
    else 
    { echo "0 results"; }
    

}
elseif(isset($_POST['delete'])){
    $a = $_POST['Emp_id'];
    $sql1 = "DELETE FROM employee where Emp_id='$a';";

    if ($conn->query($sql1) === TRUE)
    {
        echo 'Data deleted Successfully...!!';
    }
    else
    {
        echo 'Data is not deleted ...!!';
    }
   


}


$conn->close();
?>