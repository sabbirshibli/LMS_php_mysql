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

    <title>Book Modification</title>


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
							<center><h4>Book Modification Wizard</h4></center>
							<br>
								<form name="form1" action="" method="post">
									<table class="table">
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
										
											
											<td><input type="submit" name="submit1" value="Find Book" class="form-control btn btn-default" style="background-color: blue; color: white"></td>
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
									$res5=mysqli_query($connection, "select * from books where book_name='$_POST[book_name]'");
									while($row5=mysqli_fetch_array($res5)) {
										$book_name=$row5["book_name"];
										$book_author=$row5["book_author"];
										$book_publisher=$row5["book_publisher"];
										$book_purch_date=$row5["book_purch_date"];
										$book_price=$row5["book_price"];
										$book_quantity=$row5["book_quantity"];
										$book_available=$row5["book_available"];
										//$_SESSION["reg_no"]=$student_reg;
									}
									?>
									<form name="form1" action="" method="post">
									<table class="table table-bordered">
										<tr>
											<td>
												<input type="text" class="form-control" placeholder="Book name" name="book_name" value="<?php echo $book_name; ?>" required="">
											</td>
										</tr>
										<tr>
											<td>
												<input type="text" class="form-control" placeholder="Author" name="book_author" value="<?php echo $book_author; ?>" required="">
											</td>
										</tr>
										<tr>
											<td>
												<input type="text" class="form-control" placeholder="Publisher" name="book_publisher" value="<?php echo $book_publisher; ?>" required="">
											</td>
										</tr>
										<tr>
											<td>
												<input type="text" class="form-control" placeholder="Purchase Date" name="book_purch_date" value="<?php echo $book_purch_date; ?>" required="">
											</td>
										</tr>
										<tr>
											<td>
												<input type="text" class="form-control" placeholder="Price" name="book_price" value="<?php echo $book_price; ?>" required="">
											</td>
										</tr>
										
										<tr>
											<td>
												<input type="text" class="form-control" placeholder="Quantity" name="book_quantity" value="<?php echo $book_quantity; ?>" required="">
											</td>
										</tr>
										<tr>
											<td>
												<input type="text" class="form-control" placeholder="Availability" name="book_available" value="<?php echo $book_available; ?>" required="">
											</td>
										</tr>
										<tr>
											<td>
												<input type="submit" name="submit2" value="Update Book" class="form-control btn btn-default" style="background-color: blue; color: white">
											</td>
										</tr>
										<tr>
											<td>
												<input type="submit" name="submit3" value="Delete Book" class="form-control btn btn-default" style="background-color: blue; color: white">
											</td>
										</tr>
									</table>
									</form>
									<?php
								}
								
								?>
								
								<?php
								if(isset($_POST["submit2"])) {
									mysqli_query($connection, "UPDATE books SET book_name='$_POST[book_name]',book_author='$_POST[book_author]',book_publisher='$_POST[book_publisher]',book_purch_date='$_POST[book_purch_date]',book_price='$_POST[book_price]',book_quantity='$_POST[book_quantity]',book_available='$_POST[book_available]' where book_name='$_POST[book_name]'");
									?>
										<div class="alert alert-success col-lg-12 col-lg-push-0">
											Book Successfully Modified!
										</div>
										mysqli_close($connection);
									<?php
								}
								
								else if(isset($_POST["submit3"])) {
									mysqli_query($connection, "DELETE FROM books where book_name='$_POST[book_name]'");
									?>
										<div class="alert alert-success col-lg-12 col-lg-push-0">
											Book Successfully Removed from the Library!
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