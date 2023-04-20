<!DOCTYPE html>
<head>
    <meta charset = "utf-8" />  
    <title>Fire Station </title>  
    <link rel = "icon" href='Free_Sample_By_Wix.jpg'  type = "image/x-icon" > 
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
.inp{
    border-radius: 8px;
    padding: 4px 6px;
}
span{
    font-size: large;
    font-weight: bold;
}
.leftside{
    position: relative;
    top:80px;
}
.but{
   
   height:30px;
   padding:0 20px;
   border-radius: 8px;
   color: white;
   background-color: rgb(2, 8, 81);
}
</style>

<body>
    <div class="header">
        <nav> 
            <img src="Free_Sample_By_Wix.jpg" class="logo">
            <ul class="nav-links">
                <li><a href="http://localhost:8080/Fire_management/admin/after%20login/operations/uhome.php">BACK</a></li>
            </ul>
        </nav> 
    </div>
    <div class="leftside">
        <form action="seldel.php" method="post">
            <center>
            <Label>
                <span>Station Number :</span><br><input type="text" name="S_num" class="inp"><br><br>
                <button name="selemp" class="but">Enter</button>
            </Label>
            </center>
            
        </form>
    </div>
</body>
</html>
