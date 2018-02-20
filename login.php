<?php include('server.php');?>
<!DOCTYPE html>

<html>
<head>
<link rel="stylesheet"
type="text/css"
href="style.css">
</head>
<body>
<div  class="header">
<h2>login</h2>
</div>
<form action="login.php" method="POST">
<?php include('errors.php'); ?>
<div class ="input.group">
<lable>Username</lable>
<input type="text" name="username">
</div>

<div class ="input.group">
<lable>password</lable>
<input type="password" name="password">
<div class ="input.group">
<button type ="submit" name="login" class="btn">login
</button>
</div>
<p>
not yet a member?<a href="sign.php">sign up</a></p>
</form>
</body>
</html>