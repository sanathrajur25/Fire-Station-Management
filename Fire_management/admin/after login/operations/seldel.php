<!DOCTYPE html>
<html>
<head>
<style>
              *{
    margin: 0;
    padding: 0;
    font-family:'Nunito', sans-serif;
    box-sizing: border-box;
}
.header{
    height: 140px;
    width: 100%;
    padding: 0 8%;
    background: white;
    position:relative;
    z-index: 12; 
    font-family: 'Nunito', sans-serif;  
        
    
    
}
nav{
    display: flex;
    align-items: center;
    justify-content: space-between;
    font-family: 'Nunito', sans-serif;
}
.logo{
    width: 140px;
}
.nav-links{
    padding: 28px 0;   
    font-family: 'Nunito', sans-serif;
    color:white; 
}
.nav-links li{
    display: inline-block;
    margin: 0 15px;
    font-family: 'Nunito', sans-serif;
    color: #fff;
}
.nav-links li a{
    text-decoration: none;
    color:black;
    padding :20px 0; 
    position: relative;
    font-family: 'Nunito', sans-serif;
}
.nav-links li a::after{
    content: "";
    background: rgba(2, 8, 81, 0.804);
    width:0;
    height: 2px;
    position: absolute;
    bottom: 0;
    left: 0;
    transition: width  0.5s;
}
.nav-links li a:hover::after{
    width: 100%;
}
.contents{
    position:relative;
    width:100wh;
    top: 140px;
}
.leftcontents{
    font-family: 'Nunito', sans-serif;
    font-size: x-large;
    color:white;
    position: relative;
    bottom:250px;
    margin-left: 150px;
}
.imgpos{
    position:relative;
    height:150px;
    width:200px;
    margin-left: 800px;
    bottom :700px;
}
body{
    min-height: 100vh;
    width:100vw;
    overflow-x: hidden;
    overflow-y:visible;
    font-family: 'Nunito', sans-serif;
    
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
  
}
.lists{
    position: relative;
    display: flex;
    justify-content: center;
    margin-top: 20px;
}
.inlist:hover{
    background: rgb(195, 195, 242);
}
.inlist{
    color: black;
    list-style: none;
    padding-left: 20px;
    padding-right: 20px;
    border: 1px solid rgb(119, 119, 213);
    margin-left: 10px;
    border-radius: 20px;
}
.inpara{
    font-size: 20px;
}
.gridimage{
    position: relative;
    display: flex;
    justify-content: center;
   
}
.imgs1, .imgs2{
    display: grid;
    border: 2px solid rgba(2, 8, 81, 0.804);
    height: 70vh;
    width: 100vh;
    padding: 5px;
    margin: 40px;
    margin-top: 10px;
    border-width: 10px;

}
.foot{
    background: rgba(2, 8, 81, 0.804);
    height: 30vh;
}
.h2us{
    color: whitesmoke;
    text-align: center;
    padding: 30px;
    font-size: 40px;
}

.leftcontents h1 p{
    font-family: 'Nunito', sans-serif;

}

 .wow .img3{
    display: flex;
    position: relative;
    margin-bottom:800;
}
.inlist a{
    text-decoration: none;
    color: black ;

}
.justshow button{
   
    margin-top: 50px;
    display: flex;
    justify-content: center;
    border-radius: 8px;
    padding: 0.5% 4%;
    align-items: center;    
}
.phpfile{
     position: relative;
     align-items: center;
     justify-content: center;
     margin-top: 20px;
     padding: 60px;
}
td,tr{
    border: 1px solid black;
    border-radius: 4px;
    background-color: white;
    color:black;
    justify-content: center;
    text-align: center ;
    padding: 30px;
}
th{
    border: 1px solid black;
    border-radius: 4px;
    background-color: rgba(2, 8, 81, 0.804);
    color: white;
    padding: 20px;
}
</style>
        <title>
            Fire Station    
        </title>
</head>
<body>
<div class="header">
            <nav> 
                <img src="Free_Sample_By_Wix.jpg" class="logo">
                <ul class="nav-links">
                    <li><a href="http://localhost:8080/Fire_management/admin/after%20login/operations/main.php">BACK</a></li>
                </ul>
            </nav> 
        </div>


    <center>
    <div class="phpfile">



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

if(isset($_POST['selemp'])){


    $l = $_POST['S_num'];
    $sql = "SELECT * FROM employee where S_num='$l' order by s_num";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
    echo "<table><tr><th>employee</th><th>Name</th><th>Address</th><th>Gender</th><th>Rank</th><th>Salary</th><th>Age</th><th>Joining Year</th><th>Station Number</th><th>Password</th></tr>";
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

elseif(isset($_POST['seleqip'])){


    $l = $_POST['S_num'];
    $q = "SELECT * FROM equipment where S_num='$l' group by S_num order by next_service ;";
    $result = $conn->query($q);
    if ($result->num_rows > 0) {
    // output data of each row
    echo "<table><tr><th>Equipment Number</th><th>Type</th><th>Name</th><th>Last Serviced</th><th>Next Service</th><th>Duration Used</th><th>Station Number</th></tr>";
    while($row = $result->fetch_assoc())
     {
            echo "Displaying details of all equipment in station number: $l";
    echo "<tr><td>" . $row["E_no"]. "</td><td>" . $row["Type"]    . "</td><td>". $row["Name"]. "</td><td>" .$row["last_service"] . "</td><td>" .$row["next_service"] . "</td> <td>" .$row["used_time"] . "</td><td>" .$row["S_num"] . "</td></tr>";
    }
    echo "</table>";
    } 
    else 
    { echo "0 results"; }
    

}


elseif(isset($_POST['selveh'])){


    $l = $_POST['S_num'];
    $q = "SELECT * FROM vehicle where S_num='$l' order by S_num , vtype;";
    $result = $conn->query($q);
    if ($result->num_rows > 0) {
    // output data of each row
    echo "<table><tr><th>Vehicle ID</th><th>Vehicle Type</th><th>Vehicle Name</th><th>Vehicle Purchase</th><th>Station Number</th></tr>";
    while($row = $result->fetch_assoc())
     {
            echo "Displaying details of all equipment in station number: $l";
    echo "<tr><td>" . $row["vid"]. "</td><td>" . $row["vtype"]    . "</td><td>". $row["vname"]. "</td><td>" .$row["vpurchase"] . "</td><td>" .$row["S_num"] . "</td></tr>";
    }
    echo "</table>";
    } 
    else 
    { echo "0 results"; }
    

}


elseif(isset($_POST['seleme'])){


    $l = $_POST['S_num'];
    $q = "SELECT * FROM emergency where S_num='$l'  order by S_num,Date;";
    $result = $conn->query($q);
    if ($result->num_rows > 0) {
    // output data of each row
    echo "Displaying details of all equipment in station number: $l";
    echo "<table><tr><th>Emergency Number</th><th>Emergency Location</th><th>Emergency Type</th><th>Date</th><th>Time</th><th>S_num</th></tr>";
    while($row = $result->fetch_assoc())
     {
            
    echo "<tr><td>" . $row["Em_id"]. "</td><td>" . $row["Em_loc"]    . "</td><td>". $row["Em_type"]. "</td><td>" .$row["Date"] . "</td><td>" .$row["time"] . "</td><td>" .$row["S_num"] . "</td></tr>";
    }
    echo "</table>";
    } 
    else 
    { echo "0 results"; }
    

}


elseif(isset($_POST['deleteemp'])){
    $a = $_POST['Emp_id'];
    $sql1 = "DELETE FROM employee where Emp_id='$a';";

    if ($conn->query($sql1) === TRUE)
    {
        echo "Data $a deleted Successfully...!!";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        
        
        $sql2 = "SELECT * from employee order by S_num";
        $result = $conn->query($sql2);
        if ($result->num_rows > 0) {
        // output data of each row
        echo "<table><tr><th>employee</th><th>Name</th><th>Address</th><th>GEnder</th><th>Rank</th><th>Salary</th><th>Age</th><th>Joining Year</th><th>Station Number</th><th>Password</th></tr>";
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
    else
    {
        echo 'Data is not deleted ...!!';
    } 
}

elseif(isset($_POST['deleteeqip'])){
    $a = $_POST['E_no'];
    $sql3 = "DELETE FROM equipment where E_no='$a';";

    if ($conn->query($sql3) === TRUE)
    {
        echo 'Data deleted Successfully...!!';
        echo '<br>';
        $sql4 = "SELECT * from equipment order by S_num";
        $result = $conn->query($sql4);
        if ($result->num_rows > 0) {
        // output data of each row
        echo "<table><tr><th>Equipment Number</th><th>Type</th><th>Name</th><th>Last Serviced</th><th>Next Service</th><th>Used Time</th><th>Station Number</th></tr>";
        while($row = $result->fetch_assoc())
         {
                
        echo "<tr><td>" . $row["E_no"]. "</td><td>" . $row["Type"]    . "</td><td>". $row["Name"]. "</td><td>" .$row["last_service"] . "</td><td>" .$row["next_service"] . "</td> <td>" .$row["used_time"] . "</td><td>" .$row["S_num"] . "</td></tr>";
        }
        echo "</table>";
        } 
        else 
        { echo "<br>NO Equipments available"; }
    }
    else
    {
        echo 'Data is not deleted ...!!';
    } 
}

elseif(isset($_POST['deleteveh'])){
    $a = $_POST['vid'];
    $sql5 = "DELETE FROM vehicle where vid='$a';";

    if ($conn->query($sql5) === TRUE)
    {
        echo 'Data deleted Successfully...!!';
        echo '<br>';
        $sql6 = "SELECT * from vehicle order by S_num";
        $result = $conn->query($sql6);
        if ($result->num_rows > 0) {
        // output data of each row
        echo "<table><tr><th>Vehicle ID</th><th>Vehicle Type</th><th>Name</th><th>Purchase Year</th><th>Station Number</th></tr>";
        while($row = $result->fetch_assoc())
         {
                
        echo "<tr><td>" . $row["vid"]. "</td><td>" . $row["vtype"]    . "</td><td>". $row["vname"]. "</td><td>" .$row["vpurchase"] . "</td><td>" .$row["S_num"] . "</td></tr>";
        }
        echo "</table>";
        } 
        else 
        { echo "<br>NO vehicle  available"; }
    }
    else
    {
        echo 'Data is not deleted ...!! because of incorrect value  REDIRECTING!!!!';
        header("refresh:4;url:http://localhost:8080/Fire_management/admin/after%20login/operations/deleteveh.php");
    }

}

elseif(isset($_POST['upemp'])){
    $a = $_POST['Emp_id'];
    $b = $_POST['S_num'];
    $u = "UPDATE employee  set S_num ='$b' where Emp_id='$a';";

    if ($conn->query($u) == TRUE)
    {
        echo 'Data Updated Successfully...!!';
        echo "view the data below";
        echo "<br>";
        $up = "SELECT * from employee order by S_num";
        $result = $conn->query($up);
        if ($result->num_rows > 0) {
        // output data of each row
        echo "<table><tr><th>employee</th><th>Name</th><th>Address</th><th>Gender</th><th>Rank</th><th>Salary</th><th>Age</th><th>Joining Year</th><th>Station Number</th><th>Password</th></tr>";
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
    else
    {
        echo 'Data is not deleted ...!! because of incorrect value  REDIRECTING!!!!';
        header("refresh:4;url:http://localhost:8080/Fire_management/admin/after%20login/operations/deleteveh.php");
    }

}



elseif(isset($_POST['upeqip'])){
    $a = $_POST['E_no'];
    $b = $_POST['last_service'];
    $c = $_POST['next_service'];
    $u1 = "UPDATE equipment  set last_service ='$b',next_service='$c' where E_no='$a';";

    if ($conn->query($u1) === TRUE)
    {
        echo 'Data Updated Successfully...!!';
        echo "view the data below";
        echo '<br>';
        $up1 = "SELECT * from equipment order by S_num";
        $result = $conn->query($up1);
        if ($result->num_rows > 0) {
        // output data of each row
        echo "<table><tr><th>Equipment Number</th><th>Equipment Type</th><th>Name</th><th>Last Service</th><th>Next Service</th><th>Use Duration</th><th>Station Number</th></tr>";
        while($row = $result->fetch_assoc())
         {
                echo "<br>";
        echo "<tr><td>" . $row["E_no"]. "</td><td>" . $row["Type"]    . "</td><td>". $row["Name"]. "</td><td>" .$row["last_service"] . "</td><td>" .$row["next_service"] . "</td> <td>" .$row["used_time"] . "</td><td>" .$row["S_num"] . "</td></tr>";
        }
        echo "</table>";
        } 
        else 
        { echo "0 results"; }
    }
    else
    {
        echo 'Data is not updated ...!! because of incorrect value  REDIRECTING!!!!';
        header("refresh:4;url:http://localhost:8080/Fire_management/admin/after%20login/operations/deleteveh.php");
    }

}


elseif(isset($_POST['upveh'])){
    $a = $_POST['vid'];
    $b = $_POST['S_num'];
    $u2 = "UPDATE vehicle  set S_num ='$b' where vid='$a';";

    if ($conn->query($u2) === TRUE)
    {
        echo 'Data Updated Successfully...!!';
        echo "view the data below";
        echo '<br>';
        $up2 = "SELECT * from vehicle order by S_num";
        $result = $conn->query($up2);
        if ($result->num_rows > 0) {
        // output data of each row
        echo "<table><tr><th>Vehicle ID</th><th>Vehicle Type</th><th>Vehicle Name</th><th>Vehicle Purchase year</th><th>Station Number</th></tr>";
        while($row = $result->fetch_assoc())
         {
                echo "<br>";
        echo "<tr><td>" . $row["vid"]. "</td><td>" . $row["vtype"]    . "</td><td>". $row["vname"]. "</td><td>" .$row["vpurchase"] . "</td><td>" .$row["S_num"] . "</td></tr>";
        }
        echo "</table>";
        } 
        else 
        { echo "0 results"; }
    }
    else
    {
        echo 'Data is not deleted ...!! because of incorrect value  REDIRECTING!!!!';
        header("refresh:4;url:http://localhost:8080/Fire_management/admin/after%20login/operations/deleteveh.php");
    }

}
 



?>
    </div>
</center>
</body>
</html>
