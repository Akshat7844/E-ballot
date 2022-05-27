<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8" />
    <title></title>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a2dee345c3.js" crossorigin="anonymous"></script>
</head>
<style>
        
  body{
      padding: 0;
      margin: 0;
      height: 900px; 
  }
  .login-box{
    border: 10px solid;
    padding: 40px;
    border-color: #175719;
    border-radius: 20;
    width: 300px;
    height: 300px;
    position: relative;
    top:15%;
    transform: translate(50%,-200%);
    background: rgba(0,0,0,.75);
    box-shadow: -7px -7px 7px #ffffff73;
  }
  .login-box h1{
    font-size: 40px;
    margin-bottom: 40px;
    color:white;
    font-family:'Ubuntu', sans-serif;
    position: relative;
    bottom: 2pc;
    }
    .button{
      height: 50px;
      width: 160px;
      border-radius:6px;
      font-size: 20pt;
      margin-top: 20px;
      border: #175719;
      color: white;
      background-color: #175719;
      position: relative;
      bottom:5px;
      font-family: 'Fredoka One', cursive;
 }
  .tot1{
     position: relative;
     bottom: 58pc;
     left:2pc;
     white-space: nowrap;
    }
    .tot{
     position: relative;
     bottom: 63pc;
     left:23pc;
    }
  span
  {
    opacity:0;
    transition: all 1.2s ease;
  }
  span.fade
  {
    opacity:1;
  }
  html
  {
    height: 900px;
  }
</style>
<body>
    <div class="container background-Orange" style="height:950px;">
      <div class="img" style="background:url(icons/par.jpg);background-size:cover;width:100%;height:60pc;filter: blur(5px);"></div>
            <ul style="position:relative;bottom: 110px;">
            <a class="tot1" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-size:4pc;color:rgb(15, 14, 14);position: relative;
            bottom:50pc;">Welcome to</a>
           <a class="tot" style="font-family:'Alfa Slab One', cursive;font-size: 4pc;color:rgb(12, 12, 12);position: relative;bottom:49.7pc;left:36px;">"E-Ballots.io"</a>
        </ul>
           </div>
      <div class="login-box"> 
        <h1>Login or Register..!!</h1>
        <a href="login.php"><button type="button" class="button" onclick="getInfo()" style="border-bottom: 2px solid white;cursor:pointer"> Login </button></a>
        <a href="signup.php"><button type="button" class="button" onclick="getInfo()" style="border-bottom: 2px solid white;cursor:pointer"> Register </button></a>
    </div>
    <h2 class="img1" style="position:relative;bottom:110%;left:65pc;color:white;width: 40%;font-family:'Merienda', cursive;font-size: 2.3pc;text-align:left;">"Hola,The motto of 
    our work is "Creed Cöde & CЯack..~" and our theme rests on REVOLUTION.We develop, we contribute and we stand with the people,by the people and for the people.Our vision constitutes subtle innovations and 
    futuristic software developments & our mission is to channelize such projects forward by granting resources..."                                                                 
                                                                                                                                                                              
                                                                                                                                                                                                                                         
                                                                                                                                                               
  </h2>
  <script src="welcome.js"></script>
</body>
</html>






