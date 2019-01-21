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
							<center><h4>Book Issue Wizard</h4></center>
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
								
								//Code to date+7
								$date=date("d-M-Y");
								$date=strtotime($date);
								$date=strtotime("+7 day",$date);
								//end of date+7
								
								if(isset($_POST["submit1"])) {
									$res5=mysqli_query($connection, "select * from student where reg_no='$_POST[t1]'");
									while($row5=mysqli_fetch_array($res5)) {
										$student_name=$row5["name"];
										$student_reg=$row5["reg_no"];
										$student_year=$row5["year"];
										$student_semester=$row5["semester"];
										$student_email=$row5["email"];
										//$_SESSION["reg_no"]=$student_reg;
									}
									?>
									<form name="form1" action="" method="post">
									<table class="table table-bordered">
										<tr>
											<td>
												<input type="text" class="form-control" placeholder="Student name" name="student_name" value="<?php echo $student_name; ?>" required="">
											</td>
										</tr>
										<tr>
											<td>
												<input type="text" class="form-control" placeholder="Student Registration No." name="student_reg" value="<?php echo $student_reg; ?>" required="">
											</td>
										</tr>
										<tr>
											<td>
												<input type="text" class="form-control" placeholder="Year" name="student_year" value="<?php echo $student_year; ?>" required="">
											</td>
										</tr>
										<tr>
											<td>
												<input type="text" class="form-control" placeholder="Semester" name="student_semester" value="<?php echo $student_semester; ?>" required="">
											</td>
										</tr>
										<tr>
											<td>
												<input type="text" class="form-control" placeholder="Student Email" name="student_email" value="<?php echo $student_email; ?>" required="">
											</td>
										</tr>
										<tr>
											<td>
												<!--<input type="text" class="form-control" placeholder="Book Name" name="book_name" required="">-->
												<select name="book_name" class="form-control selectpicker">
													<?php
														$res=mysqli_query($connection, "select book_name from books");
														echo"<option>";
																echo "Select Book";
															echo "</option>";
														while($row=mysqli_fetch_array($res)) {
															echo"<option>";
																echo $row["book_name"];
															echo "</option>";
														}
													?>
												</select>
											</td>
										</tr>
										<tr>
											<td>
												<input type="text" class="form-control" placeholder="Issue Date" name="book_issue_date" value="<?php echo date("d-M-Y"); ?>" required="">
											</td>
										</tr>
										<tr>
											<td>
												<input type="text" class="form-control" placeholder="Return Date" name="book_return_date" value="<?php echo date("d-M-Y", $date); ?>" required="">
											</td>
										</tr>
										<tr>
											<td>
												<input type="submit" name="submit2" value="Issue Book" class="form-control btn btn-default" style="background-color: blue; color: white">
											</td>
										</tr>
									</table>
									</form>
									<?php
								}
								
								?>
								
								<?php
								
								if(isset($_POST["submit2"])) {
									mysqli_query($connection, "insert into issue_book values('','$_POST[student_name]','$_POST[student_reg]','$_POST[student_year]','$_POST[student_semester]','$_POST[student_email]','$_POST[book_name]','$_POST[book_issue_date]','$_POST[book_return_date]')");
									mysqli_query($connection, "update books set book_available=book_available-1 where book_name='$_POST[book_name]'");
									?>
										<div class="alert alert-success col-lg-12 col-lg-push-0">
											Book Successfully Issued!
										</div>
									<?php
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