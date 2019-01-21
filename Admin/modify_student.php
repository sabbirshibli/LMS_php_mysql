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

    <title>Student List Modification</title>


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
							<center><h4>Studnet Modification Wizard</h4></center>
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
									$res5=mysqli_query($connection, "select * from student where reg_no='$_POST[t1]'");
									while($row5=mysqli_fetch_array($res5)) {
										$student_name=$row5["name"];
										$student_reg=$row5["reg_no"];
										$student_year=$row5["year"];
										$student_semester=$row5["semester"];
										$student_email=$row5["email"];
										$student_contact_no=$row5["contact_no"];
										$student_bood_group=$row5["blood_group"];
										$student_gender=$row5["gender"];
										$student_address=$row5["address"];
										//$_SESSION["reg_no"]=$student_reg;
									}
									?>
									<form name="form1" action="" method="post">
									<table class="table table-bordered">
										<tr>
											<td>
												<input type="text" class="form-control" placeholder="Student name" name="name" value="<?php echo $student_name; ?>" required="">
											</td>
										</tr>
										<tr>
											<td>
												<input type="text" class="form-control" placeholder="Registration Number" name="reg_no" value="<?php echo $student_reg; ?>" required="">
											</td>
										</tr>
										<tr>
											<td>
												<select class="form-control selectpicker" name="year">
													<option>Select Year</option>
													<option value="1st">1st Year</option>
													<option value="2nd">2nd Year</option>
													<option value="3rd">3rd Year</option>
													<option value="4th">4th Year</option>
													</select>
											</td>
										</tr>
										<br>
										<tr>
											<td>
												<select class="form-control selectpicker" name="semester">
													<option>Select Semester</option>
													<option value="1st">1st Semester</option>
													<option value="2nd">2nd Semester</option>
												</select>
											</td>
										</tr>
										<br>
										<tr>
											<td>
												<input type="text" class="form-control" placeholder="Email" name="email" value="<?php echo $student_email; ?>" required="">
											</td>
										</tr>
										
										<tr>
											<td>
												<input type="text" class="form-control" placeholder="Contact Number" name="contact_no" value="<?php echo $student_contact_no; ?>" required="">
											</td>
										</tr>
										<tr>
											<td>
												<select class="form-control selectpicker" name="blood_group">
													<option>Select Blood Group</option>
													<option value="A+">A+</option>
													<option value="A-">A-</option>
													<option value="B+">B+</option>
													<option value="B-">B-</option>
													<option value="AB+">AB+</option>
													<option value="AB-">AB-</option>
													<option value="O+">O+</option>
													<option value="O-">O-</option>
												</select>
											</td>
										</tr>
										<br>
										<tr>
											<td>
												<select class="form-control selectpicker" name="gender" required="">
													<option>Select Gender</option>
													<option value="Male">Male</option>
													<option value="Male">Female</option>
												</select>
											</td>
										</tr>
										<br>
										<tr>
											<td>
												<input type="text" class="form-control" placeholder="Address" name="address" value="<?php echo $student_address; ?>" required="">
											</td>
										</tr>
										<tr>
											<td>
												<input type="submit" name="submit2" value="Update Member" class="form-control btn btn-default" style="background-color: blue; color: white">
											</td>
										</tr>
										<tr>
											<td>
												<input type="submit" name="submit3" value="Delete Member" class="form-control btn btn-default" style="background-color: blue; color: white">
											</td>
										</tr>
									</table>
									</form>
									<?php
								}
								
								?>
								
								<?php
								if(isset($_POST["submit2"])) {
									mysqli_query($connection, "UPDATE student SET name='$_POST[name]',reg_no='$_POST[reg_no]',year='$_POST[year]',semester='$_POST[semester]',email='$_POST[email]',contact_no='$_POST[contact_no]',blood_group='$_POST[blood_group]',gender='$_POST[gender]',address='$_POST[address]' where reg_no='$_POST[reg_no]'");
									?>
										<div class="alert alert-success col-lg-12 col-lg-push-0">
											Member Successfully Modified!
										</div>
										mysqli_close($connection);
									<?php
								}
								
								else if(isset($_POST["submit3"])) {
									mysqli_query($connection, "DELETE FROM student where reg_no='$_POST[reg_no]'");
									?>
										<div class="alert alert-success col-lg-12 col-lg-push-0">
											Membership Successfully Removed from the Library!
										</div>
										mysqli_close($connection);
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