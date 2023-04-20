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
    position:fixedz;
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
}
.nav-links li{
    display: inline-block;
    margin: 0 15px;
    font-family: 'Nunito', sans-serif;
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
    background-image: url('fire copy.jpg');

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
    padding: 10px;
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
    color: white ;

}
.h5us{
    color:white;
    text-align: center;
    justify-content: center;
    padding: 20x;
    font-size: 15px;
}

    </style>
    <body> 
        <div class="header" >
            <nav> 
                <img src="Free_Sample_By_Wix.jpg" class="logo">
                <ul class="nav-links">
                    <li><a href="http://localhost:8080/Fire_management/employee/after%20emp%20log/new.php">HOME</a></li>
                    <li><a href='http://localhost:8080/Fire_management/employee/after%20emp%20log/Firestaid.php'>FIRST AID</a></li>
                    <li><a href='http://localhost:8080/Fire_management/admin/after%20login/operations/typeoffire.php'>TYPES OF FIRE </a></li>
                    <li><a href='http://localhost:8080/Fire_management/MainFile/Home.php'>LOG OUT</a></li>
                </ul>
            </nav> 
            <ul class="lists">
                <li  class="inlist"><a href="http://localhost:8080/Fire_management/employee/after%20emp%20log/sp.php">View Stations</a></li>
                <li  class="inlist"><a href="http://localhost:8080/Fire_management/employee/after%20emp%20log/empdet.php">Details of employee</a></li>
                <li  class="inlist"><a href="http://localhost:8080/Fire_management/employee/after%20emp%20log/statemelist.php">Emergencies of Stations List</a> </li>
                <li  class="inlist"><a href="http://localhost:8080/Fire_management/employee/after%20emp%20log/veheqip.php">Vehicle and Equipment details</a></li>
                
            </ul>   
        </div>
     
        <div class="contents" style="background-color:  rgba(2, 8, 81, 0.804);" >
            <script> 
                for(var x=0;x<=10;x++){ 
                document.write("<br>") 
                } 
            </script> 
            <script> 
                for(var x=0;x<=15;x++){ 
                document.write("<br>") 
                } 
            </script>     
        </div>
            
        <div class="leftcontents" >
               <h1>
                <p>Welcome to<br><br>Fire Station<br></p>
                <p class="inpara">Firefighters are those who protect us <br>from fire-related accidents.
                    Firefighter has a special type of machine to put out the fire. <br>
                    The fire engine is their main machine, due to which it mostly extinguishes the fire.
                    <br>
                    Before the firefighter is engaged in this work, many types of training are given.</p>
               </h1>     
        </div>
        <div class="imgpos">
            <img src="Fire vehicle home.jpg">
        </div> 
       
        <div class="gridimage">
            <img src="flat2.jpg" alt="" class="imgs1">
            <img src="fire copy.jpg" alt="" class="imgs2">
        </div>
        <footer class="foot">
            <h2 class="h2us">Contact Us: <br> <h5 class="h5us">Phone:102 <br> Location: Karnataka Fire and Emergency Services Hermit Colony</h5>
            </h2>
        </footer>
    </body>    
</html>