<?php 
	
	include('../AdSide/config/dbconn.php');
	include('includes/header.php');
	include('includes/navbar.php');
?>

<div class="box-area">
	<div class="banner-area">
		<h2>" WELCOME TO PHILSCA TRACER "</h2>
	</div>
		
	<div class="content-area">
		<div class="wrapper">
			<h2></h2>
	<div class="card">
					<div class="card-header">
						<h2>FREEDOM WALL</h2>
					</div>
					<div class="card-body">
						<form action="homeDB.php" method="POST" enctype="multipart/form-data">
							<div class="form-group mb-3">
								<label>Description</label>
								<input type="text" name="description" placeholder="Say Something..." class="form-control">
							</div><div class="form-group mb-3">
								<input type="file" name="image">
								<input type="submit" name="upload" value="Upload">
							</div>
						</form>
						 <?php 
							  $sql = "SELECT * FROM upload ORDER BY id DESC";
							  $res = mysqli_query($conn,  $sql);
							  
							  if (mysqli_num_rows($res) > 0) {
								while ($images = mysqli_fetch_assoc($res)) {  ?>
								
							   <div class="gallery-container"> 
								<div class="row">
										<div class="col-md-6 mb-3">
											<td><img src="../sign-in/image/<?=$images['image']?>"></td>
										</div>
								 </div>
									<div class="row">
										<div class="col-md-12 mb-3">
											<?=$images['description']?>
										</div>
									</div>
							  </div>
							 
						<?php } }?>
						<tbody>
						 <?php 
								$query = "SELECT * FROM upload";
								$query_run = mysqli_query($conn, $query);
								if(mysqli_num_rows($query_run) > 0)
								{
									foreach($query_run as $row)
									{
										?>
										<tr>
											<td><?= $row['id'] ?></td>
								<td>
												<form action="delete.php" method="POST">
												<button type="submit" name="user-delete" value="<?= $row['id'];?>" class="btn btn-danger">Delete</button>
												</form>
											</td>
										</tr>
										<?php
									}
								}
								else
								{
									?>
										<tr>
											<td colspan="6"> NO Record Found</td>
										</tr>
									<?php
								}
								?>
						</tbody>
					</div>
				</div>
			</div>
		</div>
</div>
<?php 
	include('includes/footer.php');
?>