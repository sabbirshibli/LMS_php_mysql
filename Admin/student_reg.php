<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Student Registration Form | LMS </title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/custom.min.css" rel="stylesheet">
</head>

<br>


<body class="login" style="margin-top: -20px;">



    <div class="login_wrapper">

            <section class="login_content" style="margin-top: -40px;">
                <form name="form1" action="" method="post">
                    <h2>Student Registration Form</h2><br>

                    <div>
                        <input type="text" class="form-control" placeholder="Name" name="name" required=""/>
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="Registration No." name="reg_no" required=""/>
                    </div>
					<div>
                        <td>
							<select class="form-control selectpicker" name="year">
								<option>Select Year</option>
								<option value="1st">1st Year</option>
								<option value="2nd">2nd Year</option>
								<option value="3rd">3rd Year</option>
								<option value="4th">4th Year</option>
							</select>
						</td>
                    </div>
					<br>
					<div>
                        <td>
							<select class="form-control selectpicker" name="semester">
								<option>Select Semester</option>
								<option value="1st">1st Semester</option>
								<option value="2nd">2nd Semester</option>
							</select>
						</td>
                    </div>
					<br>
                    <div>
                        <input type="text" class="form-control" placeholder="Email" name="email" required=""/>
                    </div>
					<div>
                        <input type="text" class="form-control" placeholder="Contact Number" name="contact_no" required=""/>
                    </div>
                    <div>
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
                    </div>
					<br>
                    <div>
                        <td>
							<select class="form-control selectpicker" name="gender" required="">
								<option>Select Gender</option>
								<option value="Male">Male</option>
								<option value="Male">Female</option>
							</select>
						</td>
                    </div>
					<br>
                    <div>
                        <input type="text" class="form-control" placeholder="Address" name="address" required=""/>
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="Enrollment No." name="join_date" required=""/>
                    </div>
                    
                    <div class="col-lg-12  col-lg-push-3">
                        <input class="btn btn-default submit " type="submit" name="submit" value="Register">
                    </div>

                </form>
            </section>
    
	<?php
	
	if(isset($_POST["submit"])) {
		include('dbcon.php');
		mysqli_query($connection,"insert into student values('$_POST[name]','$_POST[reg_no]','$_POST[year]','$_POST[semester]','$_POST[email]','$_POST[contact_no]','$_POST[blood_group]','$_POST[gender]','$_POST[address]','$_POST[join_date]')");
		
		?>
		<div class="alert alert-success col-lg-12 col-lg-push-0">
        Registration successful!
        </div>
		
		<?php
	}
	
	?>


    </div>



</body>
</html>
