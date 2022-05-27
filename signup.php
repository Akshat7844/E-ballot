<!DOCTYPE html>
    <html>
    <head>
        <meta charset = "utf-8" />
        <title></title>
        <link rel="stylesheet" type="text/css" href="signstyle.css">
        <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lemonada:wght@500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/a2dee345c3.js" crossorigin="anonymous"></script>
    </head>
    <body>
     <div class="container">e-Ballots.io</div>
        <div class="omg"></div>
     <form action="signupcheck.php" method="post">
     	<h2>REGISTER</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Full Name</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"><br>
          <?php }?>

          <label>Voter ID</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="vote" 
                      placeholder="YCV0164822"
                      value="<?php echo $_GET['vote']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="vote" 
                      placeholder="YCV0164822"><br>
          <?php }?>

          <label>Email</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="e-mail" 
                      placeholder="example@gmail.com"
                      value="<?php echo $_GET['e-mail']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="e-mail" 
                      placeholder="example@gmail.com"><br>
          <?php }?>

          <label>Contact_Number</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="phone" 
                      placeholder="Mobile"
                      value="<?php echo $_GET['phone']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="phone" 
                      placeholder="Mobile"><br>
          <?php }?>

          <label>User Name</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"><br>
          <?php }?>


     	<label>Password</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br>

          <label>Confirm Password</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Re-Enter_Password"><br>

     	<button type="submit"><a style="position:relative;bottom:12%;font-weight:600;">Register</a></button>
          <button type="submit" class="cool"><a href="login.php">LOGIN</a></button>
          <a href="login.php" class="ca">Already have an account?</a>
     </form>
     <div class="found" style="width:fit-content;position: relative;bottom:68%;left: 40%;">
    <ul>
      <li><a href="https://www.termsandconditionsgenerator.com/live.php?token=8XFhvYFUx0kgAFgn29vS1zeZyB9tPKOq" target="_blank" 
        style="text-decoration: none;position: relative;height:0"><p>Terms and Conditions</p></a></li>
      <li><a href="https://www.privacypolicygenerator.info/live.php?token=dO2WQROjWRNf8Tg6FBKGcfDsbLNWptwr" target="_blank" 
        style="text-decoration: none;position: relative;left:72%;height:0"><p>Policy</p></a></li>
    </ul>
</body>
</html>