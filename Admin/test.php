<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM admin WHERE CONCAT('id','username','first','last_name','email','contact_no') LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM admin";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "final_lms");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Admin List</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
    <center>    
        <form action="navbar_adminlist.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="SEARCH"><br><br>
            
            <table>
                <tr>
                    <th>Id</th>
                    <th>Username</th>
					<th>First Name</th>
                    <th>Last Name</th>
					<th>Email</th>
					<th>Contact No.</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['username'];?></td>
                    <td><?php echo $row['first'];?></td>
                    <td><?php echo $row['last_name'];?></td>
					<td><?php echo $row['email'];?></td>
					<td><?php echo $row['contact_no'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
    </center>    
    </body>
</html>