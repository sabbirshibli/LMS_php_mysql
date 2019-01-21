<?php include('dbcon.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Information</title>


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
                            <!-- <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span> 
                            </div> -->
							<?php //include('search.php');?>
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
										<td><input type="text" name="t1" placeholder="Enter username" required class="form-control"></td>
										<td><input type="submit" name="submit1" value="Search Admin" class="form-control btn btn-default"></td>
									</tr>
								</table>
							</form>
                                <?php
								echo "<br>";
								echo "<center>Admin Information Table</center><br>";
								if(isset($_POST["submit1"])) {
									$res=mysqli_query($connection,"select * from admin where username like('%$_POST[t1]%')");
									echo "<table class='table table-bordered'>";
									echo "<tr>";
									echo "<th>"; echo "Username"; echo "</th>";
									echo "<th>"; echo "First Name"; echo "</th>";
									echo "<th>"; echo "Last Name"; echo "</th>";
									echo "<th>"; echo "Email"; echo "</th>";
									echo "<th>"; echo "Contact No."; echo "</th>";
									echo "<th>"; echo "Position"; echo "</th>";
									echo "</tr>";
									while($row=mysqli_fetch_array($res)) {
										echo "<tr>";
										echo "<td>"; echo $row["username"]; echo "</td>";
										echo "<td>"; echo $row["first"]; echo "</td>";
										echo "<td>"; echo $row["last_name"]; echo "</td>";
										echo "<td>"; echo $row["email"]; echo "</td>";
										echo "<td>"; echo $row["contact_no"]; echo "</td>";
										echo "<td>"; echo $row["position"]; echo "</td>";
									
										echo "</tr>";
									}
									echo "</table>";
									
								} else {
									$res=mysqli_query($connection,"select * from admin");
									echo "<table class='table table-bordered'>";
									echo "<tr>";
									echo "<th>"; echo "Username"; echo "</th>";
									echo "<th>"; echo "First Name"; echo "</th>";
									echo "<th>"; echo "Last Name"; echo "</th>";
									echo "<th>"; echo "Email"; echo "</th>";
									echo "<th>"; echo "Contact No."; echo "</th>";
									echo "<th>"; echo "Position"; echo "</th>";
									echo "</tr>";
									while($row=mysqli_fetch_array($res)) {
										echo "<tr>";
										echo "<td>"; echo $row["username"]; echo "</td>";
										echo "<td>"; echo $row["first"]; echo "</td>";
										echo "<td>"; echo $row["last_name"]; echo "</td>";
										echo "<td>"; echo $row["email"]; echo "</td>";
										echo "<td>"; echo $row["contact_no"]; echo "</td>";
										echo "<td>"; echo $row["position"]; echo "</td>";
									
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
