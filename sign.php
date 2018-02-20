<?php
include('server.php');
?>
<!DOCTYPE html>

<html>
<head>
<link rel="stylesheet"
type="text/css"
href="style.css">
</head>
<body>
<div  class="header">
<h2>sign up</h2>
</div>
<form action="sign.php" method="POST">
      <?php include('errors.php'); ?>

          <div class ="input.group">
             <lable>Username</lable>
                <input type="text" name="username" value="<?php echo $username;?>" >
          </div>
         <div class ="input.group">
            <lable>Email</lable>
             <input type="text" name="email" value="<?php echo $email;?>" >
           </div>
          <div class ="input.group">
             <lable>password</lable>
              <input type="password" name="password_1">
           </div>
          <div class ="input.group">
              <lable>confirm password</lable>
                 <input type="password" name="password_2">
           </div>
          <div class ="input.group">
          <button type ="submit" name="signup" class="btn">sign up
          </button>
         </div>
          <p>already there?<a href="login.php">sign in</a></p>
</form>
</body>
</html>