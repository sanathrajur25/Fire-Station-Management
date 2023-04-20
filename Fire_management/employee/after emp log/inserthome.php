
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

if(isset($_POST['selemp'])){


$l = $_POST['S_num'];
$sql = "SELECT * FROM employee where S_num='$l' groupby s_num;";
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