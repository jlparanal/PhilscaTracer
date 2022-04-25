<?php 
	session_start();
	include('config/dbconn.php');
	include('authentication.php');
	include('includes/header.php');
?>
<div class="box-area">
   <?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
	<?php include('message.php'); ?>
	<div class="card">
	<div class="card-header">
						<h2>ANNOUNCEMENT</h2>
					</div>
					<div class="card-header">
						
					</div>
					<div class="card-body">
						<form action="eventsanddonationDB.php" method="POST" enctype="multipart/form-data">
							<div class="form-group mb-3">
								<label>Description</label>
								<input type="text" name="description" class="form-control">
							</div><div class="form-group mb-3">
								<input type="file" name="my_image">
								<input type="submit" name="submit" value="Upload">
							</div>
							
     	
						</form>
					</div>
				</div>
</div>
<?php 
	include('includes/footer.php');
	include('includes/scripts.php');
?>