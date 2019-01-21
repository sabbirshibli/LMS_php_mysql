
<?php include('dbcon.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Add Books | LMS</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/custom.min.css" rel="stylesheet">
</head>

<br>


<body class="login" style="margin-top: -20px;">



    <div class="login_wrapper">

            <section class="login_content" style="margin-top: -40px;">
                <form name="form1" action="" method="post">
                    <h2>Add Books</h2><br>

                    <div>
                        <input type="text" class="form-control" placeholder="Book Name" name="book_name" required=""/>
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="Author Name" name="book_author" required=""/>
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="Publisher" name="book_publisher" required=""/>
                    </div>
					<div>
                        <input type="text" class="form-control" placeholder="Purchase Date" name="book_purch_date" value="<?php echo date("d-M-Y"); ?>" required=""/>
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="Price in Taka" name="book_price" required=""/>
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="Total Stock" name="book_quantity" required=""/>
                    </div>
					<div>
                        <input type="text" class="form-control" placeholder="Available Stock" name="book_available" required=""/>
                    </div>
					<div>
                        <td>
							<select class="form-control selectpicker" name="purchased_by">
								<option>Select Admin</option>
								<?php
								$res=mysqli_query($connection, "select username from admin");
								while($row=mysqli_fetch_array($res)) {
									echo "<option>";
									echo $row['username'];
									echo "</option>";
								}
								?>
							</select>
						</td>
                    </div>
					<br>
                    <div class="col-lg-12  col-lg-push-3">
                        <input class="btn btn-default submit " type="submit" name="submit" value="Register">
                    </div>

                </form>
            </section>
    
	<?php
	
	if(isset($_POST["submit"])) {
		
		mysqli_query($connection,"insert into books values('','$_POST[book_name]','$_POST[book_author]','$_POST[book_publisher]','$_POST[book_purch_date]','$_POST[book_price]','$_POST[book_quantity]','$_POST[book_available]','$_POST[purchased_by]')");
		
		?>
		<div class="alert alert-success col-lg-12 col-lg-push-0">
        Book Successfully Added!
        </div>
		
		<?php
	}
	
	?>


    </div>



</body>
</html>
