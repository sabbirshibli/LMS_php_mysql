<?php
include ('dbcon.php');
$student_reg=$_GET["student_reg"];
$res=mysqli_query($connection,"DELETE FROM issue_book where student_reg=$student_reg");

/*$book_name="";
$res=mysqli_query($connection,"select * from books where book_name=$book_name");
while($row=mysqli_fetch_array($res)) {
	$book_name=$row["book_name"];
}
mysqli_query($connection, "update books set book_available=book_available+1 where book_name=$book_name");*/
?>
<script type="text/javascript">
	window.location='navbar_returnbook.php';
</script>