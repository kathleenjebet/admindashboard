<?php
require_once('logics/dbconnection.php');
$sqlquery=mysqli_query($conn,"SELECT * FROM contactus ");
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
						<span>Messages</span>
					</div>
                    <div class="card-body">
                        <table class="table table-striped table-hover" style="font-size:16px">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Firstname</th>
                                    <th>lastname</th>
                                    <th>Email</th>
                                    <th>message</th>
                                    <th>created_at</th>

                                </tr>
                            </thead>
                            <tbody>
                               <?php while($fetchrecords=mysqli_fetch_array($sqlquery)) {?>
                                    <tr>
                                        <td><?php echo $fetchrecords['no']?></td>
                                        <td><?php echo $fetchrecords['firstname']?></td>
                                        <td><?php echo $fetchrecords['lastname']?></td>
                                        <td><?php echo $fetchrecords['email']?></td>
                                        <td><?php echo $fetchrecords['message']?></td>
                                        <td><?php echo $fetchrecords['created_at']?></td>
                                        <td>
                                        </td>
                                    </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        
                    </div>
				</div>
			</div>
			
			</div>
		</div>
		


	</div>
	
	<?php require_once('includes/scripts.php')?>
</body>
</html>