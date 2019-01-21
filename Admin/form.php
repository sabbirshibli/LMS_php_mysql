<?php
include("login2.php"); // Include loginserv for checking username and password
?>

<!DOCTYPE html>
<html>
<body>

<center><h2><font color="black">Welcome to Admin Login Area!</font></h2></center>
<div class="login">
<div class="login-triangle"></div>
<h2 class="login-header">Log in</h2>
  <form action="" method="post" style="text-align:center;">
    <p><input type="text" placeholder="Username" id="username" name="username"></p>
    <p><input type="password" placeholder="Password" id="password" name="password"></p>
    <p><input type="submit" value="Login" name="submit"></p>
	<span><?php echo $error; ?></span>
  </form>
  <center><p><font color="black">If you forgot your login information please contact with</font><font color="red"> IT Administration Division.</font></p></center>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  
</body>
</html>