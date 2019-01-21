<?php
$error=''; //Variable to Store error message;
if(isset($_POST['submit'])){
 if(empty($_POST['username']) || empty($_POST['password'])){
 $error = "Username or Password is Invalid";
 }
 else
 {
 //Define $user and $pass
 $user=$_POST['username'];
 $pass=$_POST['password'];
 //Establishing Connection with server by passing server_name, user_id and pass as a patameter
 $conn = mysqli_connect("localhost", "root", "");
 //Selecting Database
 $db = mysqli_select_db($conn, "final_lms");
 //sql query to fetch information of registerd user and finds user match.
 $query = mysqli_query($conn, "SELECT * FROM admin WHERE password='$pass' AND username='$user'");
 
 $rows = mysqli_num_rows($query);
 if($rows == 1){
 header("Location: admin_index.php"); // Redirecting to other page
 }
 else
 {
	 $msg="<font color='red'>Username or Password is Invalid!</font>";
	$error = $msg;
	//echo "<font color='red'>Username or Password is Invalid!</font>";
 }
 mysqli_close($conn); // Closing connection
 }
}
 
?>