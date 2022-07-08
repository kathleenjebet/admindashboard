<?php
require_once('logics/dbconnection.php');
$sqlquery=mysqli_query($conn,"SELECT * FROM enrollment ");


?>
<!DOCTYPE html>
<html>
<?php require_once('includes/header.php')?>
<body>
	<!-- All our code. write here   -->
	<?php require_once('includes/navbar.php')?>
	<div class="sidebar">
	<?php require_once('includes/sidebar.php')?>

	</div>
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="card-header bg-dark text-white text-center">
						<span>Students</span>
					</div>
                    <div class="card-body">
                        <table class="table table-striped table-hover table-responsive">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Fullname</th>
                                    <th>Phonenumber</th>
                                    <th>Email</th>
                                    <th>Gender</th>
                                    <th>Course</th>
                                    <th>Enrolled On</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                               <?php while($fetchrecords=mysqli_fetch_array($sqlquery)) {?>
                                    <tr>
                                        <td><?php echo $fetchrecords['no']?></td>
                                        <td><?php echo $fetchrecords['fullname']?></td>
                                        <td><?php echo $fetchrecords['emailaddress']?></td>
                                        <td><?php echo $fetchrecords['gender']?></td>
                                        <td><?php echo $fetchrecords['course']?></td>
                                        <td><?php echo $fetchrecords['created_at']?></td>
                                        <td>
                                        <a href="edit-enrollment.php?id=<?php echo $fetchrecords['no']?>" class="btn btn-primary btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="" class="btn btn-info btn-sm">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
				</div>
			</div>
			
			</div>
		</div>
		


	</div>
	
	<?php require_once('includes/scripts.php')?>
</body>
</html>