<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8" />  
        <title>Fire Station </title>  
        <link rel = "icon" href='Free_Sample_By_Wix.jpg' 
        type = "image/x-icon" >
         <link rel="stylesheet" href="style.css" type="text/css"> 
         <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
    </head>
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
    background-image: url("flat2.jpg");
    
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
     margin-top: 100px;
}
td,tr{
    border: 1px solid black;
    border-radius: 4px;
    background-color: white;
    color:black;
    justify-content: center;
    text-align: center;
    padding:20px 20px;
}
th{
    border: 1px solid black;
    border-radius: 4px;
    background-color: rgba(2, 8, 81, 0.804);
    color: white;
    padding: 20px 20px;
    justify-content: center;
    text-align: center;
    
}
    </style>
    
    <body> 
    <div class="header">
            <nav> 
                <img src="Free_Sample_By_Wix.jpg" class="logo">
                <ul class="nav-links">
                    <li><a href="http://localhost:8080/Fire_management/employee/after%20emp%20log/new.php">BACK</a></li>
                </ul>
            </nav> 
        </div>
       
        <div class="justshow">
            <center>
            <form action="statemelist.php" method="post">
            </form>
</center>

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
            $sql = "SELECT s.S_num,s.Address,e.Em_type,s.SName, count(*) from station s,emergency e where s.S_num=e.S_num GROUP by (s.S_num) HAVING count(s.S_num)>2;";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            // output data of each row
            echo "<table><tr><th>Station Number</th><th>Station Address</th> <th>Emergency Type</th><th>Station Name</th><th>Number of Emergencies</th></tr>";
            while($row = $result->fetch_assoc())
            {
            echo "<tr><td>" . $row["S_num"]. "</td><td>" . $row["Address"]    . "</td><td>". $row["Em_type"]. "</td><td>" .$row["SName"] . "</td><td>" .$row["count(*)"] . "</td></tr>";
            }
            echo "</table>";
            } 
            else 
            { echo "0 results"; }
?>
        </div>
        </center>
        </body>
</html>
   
