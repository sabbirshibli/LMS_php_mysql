<?php
$host='localhost';
$user='root';
$pass='';
$db='final_lms';
$connection = mysqli_connect($host, $user, $pass);
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, $db);
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}
if(isset($_POST['username'])) {
	$username=$_POST['username'];
	$password=$_POST['password'];
	$sql= "SELECT * FROM admin WHERE username='".$username."'AND password='".$password."' LIMIT 1";
    $res=mysql_query($sql);
    if(mysql_num_rows($res)==1) {
	    echo "Login Successful!";
	    exit();
    } else {
	    echo "Invalid login information.<br>";
	    exit();
    }
}
?>