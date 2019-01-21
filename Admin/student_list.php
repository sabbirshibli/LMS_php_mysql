<?php include('dbcon.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Member Information</title>


    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/nprogress.css" rel="stylesheet">
    <!-- <link href="css/custom.min.css" rel="stylesheet"> -->
</head>


        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3></h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <!--
							<div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                            </div>
							-->
							<?php //include('student_search.php');?>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2></h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
							<form name="form1" action="" method="post">
								<table class="table">
									<tr>
										<td><input type="text" name="t1" placeholder="Enter registration no." required class="form-control"></td>
										<td><input type="submit" name="submit1" value="Search Member" class="form-control btn btn-default"></td>
									</tr>
								</table>
							</form>
							
                                <?php
								include ('AddMemberButton.php');
								include ('ModifyStudentButton.php');
								echo "<br>";
								echo "<center>Member Information Table</center><br>";
								if(isset($_POST["submit1"])) {
									
									$res=mysqli_query($connection,"select * from student where reg_no like('%$_POST[t1]%')");
									echo "<table class='table table-bordered'>";
									echo "<tr>";
									echo "<th>"; echo "Name"; echo "</th>";
									echo "<th>"; echo "Registration No."; echo "</th>";
									echo "<th>"; echo "Year"; echo "</th>";
									echo "<th>"; echo "Semester"; echo "</th>";
									echo "<th>"; echo "Email"; echo "</th>";
									echo "<th>"; echo "Contact No."; echo "</th>";
									echo "<th>"; echo "Blood Group"; echo "</th>";
									echo "<th>"; echo "Gender"; echo "</th>";
									echo "<th>"; echo "Address"; echo "</th>";
									echo "<th>"; echo "Enrollment No."; echo "</th>";
									echo "</tr>";
									while($row=mysqli_fetch_array($res)) {
										echo "<tr>";
										echo "<td>"; echo $row["name"]; echo "</td>";
										echo "<td>"; echo $row["reg_no"]; echo "</td>";
										echo "<td>"; echo $row["year"]; echo "</td>";
										echo "<td>"; echo $row["semester"]; echo "</td>";
										echo "<td>"; echo $row["email"]; echo "</td>";
										echo "<td>"; echo $row["contact_no"]; echo "</td>";
										echo "<td>"; echo $row["blood_group"]; echo "</td>";
										echo "<td>"; echo $row["gender"]; echo "</td>";
										echo "<td>"; echo $row["address"]; echo "</td>";
										echo "<td>"; echo $row["join_date"]; echo "</td>";
										echo "</tr>";
									}
									echo "</table>";
									
								} else {
									
									$res=mysqli_query($connection,"select * from student");
									echo "<table class='table table-bordered'>";
									echo "<tr>";
									echo "<th>"; echo "Name"; echo "</th>";
									echo "<th>"; echo "Registration No."; echo "</th>";
									echo "<th>"; echo "Year"; echo "</th>";
									echo "<th>"; echo "Semester"; echo "</th>";
									echo "<th>"; echo "Email"; echo "</th>";
									echo "<th>"; echo "Contact No."; echo "</th>";
									echo "<th>"; echo "Blood Group"; echo "</th>";
									echo "<th>"; echo "Gender"; echo "</th>";
									echo "<th>"; echo "Address"; echo "</th>";
									echo "<th>"; echo "Enrollment No."; echo "</th>";
									echo "</tr>";
									while($row=mysqli_fetch_array($res)) {
										echo "<tr>";
										echo "<td>"; echo $row["name"]; echo "</td>";
										echo "<td>"; echo $row["reg_no"]; echo "</td>";
										echo "<td>"; echo $row["year"]; echo "</td>";
										echo "<td>"; echo $row["semester"]; echo "</td>";
										echo "<td>"; echo $row["email"]; echo "</td>";
										echo "<td>"; echo $row["contact_no"]; echo "</td>";
										echo "<td>"; echo $row["blood_group"]; echo "</td>";
										echo "<td>"; echo $row["gender"]; echo "</td>";
										echo "<td>"; echo $row["address"]; echo "</td>";
										echo "<td>"; echo $row["join_date"]; echo "</td>";
										echo "</tr>";
									}
									echo "</table>";
								}
								
								?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->


<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="js/fastclick.js"></script>
<!-- NProgress -->
<script src="js/nprogress.js"></script>

<!-- Custom Theme Scripts -->
<script src="js/custom.min.js"></script>
</body>
</html>
