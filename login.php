<!DOCTYPE html>
    <html>
    <head>
        <meta charset = "utf-8" />
        <title></title>
        <link rel="stylesheet" type="text/css" href="loginstyles.css">
        <link href="https://fonts.googleapis.com/css2?family=Ma+Shan+Zheng&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lemonada:wght@500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/a2dee345c3.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">e-Ballots.io</div>
        <div class="omg"></div>
        <form action="logincheck.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name or Voter ID</label>
     	<input type="text" name="integral" placeholder="user_name/voter_Id"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit"><a style="position:relative;bottom:4px;">Login</a></button>
          <a href="signup.php" class="ca">Create an account</a>
     </form>
     <div class="found" style="width:fit-content;position: relative;bottom: 80%;left: 40%;">
    <ul>
      <li><a href="https://www.termsandconditionsgenerator.com/live.php?token=8XFhvYFUx0kgAFgn29vS1zeZyB9tPKOq" target="_blank" 
        style="text-decoration: none;position: relative;right:6%;bottom:32%;"><p>Terms and Conditions</p></a></li>
      <li><a href="https://www.privacypolicygenerator.info/live.php?token=dO2WQROjWRNf8Tg6FBKGcfDsbLNWptwr" target="_blank" 
        style="text-decoration: none;position: relative;left:70%;bottom: 32%;"><p>Policy</p></a></li>
    </ul>
    </div>
   </body>
  </html>