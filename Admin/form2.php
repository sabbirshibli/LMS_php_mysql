<?php
include("login2.php"); // Include loginserv for checking username and password
?>
 
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
</head>
<body>
<div class="login">
<h1 align="center">Login</h1>
<form action="" method="post" style="text-align:center;">
<input type="text" placeholder="Username" id="username" name="username"><br/><br/>
<input type="password" placeholder="Password" id="password" name="password"><br/><br/>
<input type="submit" value="Login" name="submit">
<!-- Error Message -->
<span><?php echo $error; ?></span>
</form>
<center><p><font color="white">If you forgot your login information please contact with</font><font color="red"> IT Administartion Division.</font></p></center>
</body>
</html>