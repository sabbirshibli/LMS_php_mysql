<?php
 
include('dbcon.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Book Information</title>


    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/nprogress.css" rel="stylesheet">
    <!-- <link href="css/custom.min.css" rel="stylesheet"> -->
</head>
        
        <?php //session_start(); ?>
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
							
							<!--Code start from here-->
							<center><h4>Return Book</h4></center>
							<br>
								<form name="form1" action="" method="post">
									<table class="table">
										<tr>
											<td><input type="text" name="t1" placeholder="Enter Reg No." required class="form-control"></td>
											<td><input type="submit" name="submit1" value="Search Member" class="form-control btn btn-default" style="background-color: blue; color: white"></td>
										</tr>
									</table>
								</form>
								
								<?php
								
								/*Code to date+7
								$date=date("d-M-Y");
								$date=strtotime($date);
								$date=strtotime("+7 day",$date);
								end of date+7*/
								
								if(isset($_POST["submit1"])) {
									$res5=mysqli_query($connection, "select * from issue_book where student_reg='$_POST[t1]'");
									echo "<table class='table table-bordered'>";
									echo "<tr>";
									echo "<th>"; echo "Student Name"; echo "</th>";
									echo "<th>"; echo "Registration No."; echo "</th>";
									echo "<th>"; echo "Year"; echo "</th>";
									echo "<th>"; echo "Semester"; echo "</th>";
									echo "<th>"; echo "Email"; echo "</th>";
									echo "<th>"; echo "Book Name"; echo "</th>";
									echo "<th>"; echo "Issue Date"; echo "</th>";
									echo "<th>"; echo "Return Date"; echo "</th>";
									echo "<th>"; echo "Due"; echo "</th>";
									echo "<th>"; echo "Return Book"; echo "</th>";
									echo "</tr>";
									
									while($row5=mysqli_fetch_array($res5)) {
										
										echo "<tr>";
										echo "<td>"; echo $row5["student_name"]; echo "</td>";
										echo "<td>"; echo $row5["student_reg"]; echo "</td>";
										echo "<td>"; echo $row5["student_year"]; echo "</td>";
										echo "<td>"; echo $row5["student_semester"]; echo "</td>";
										echo "<td>"; echo $row5["student_email"]; echo "</td>";
										echo "<td>"; echo $row5["book_name"]; echo "</td>";
										echo "<td>"; echo $row5["book_issue_date"]; echo "</td>";
										echo "<td>"; echo $row5["book_return_date"]; echo "</td>";
										echo "<td>"; echo $row5["book_return_date"]; echo "</td>";
										echo "<td>"; ?> <a href="return.php?student_reg=<?php echo $row5["student_reg"]; ?>">Return This</a> <?php echo "</td>";
										echo "</tr>";
									}
									//echo "</table>";
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