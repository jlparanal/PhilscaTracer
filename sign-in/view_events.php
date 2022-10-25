<?php 
	session_start();
	include('..\AdSide\config\dbconn.php');
	include('includes/header.php');
	include('includes/navbar.php');
?>
		<div class="banner-area">
		<h2></h2>
		</div>
		<div class="content-area">
		<div class="wrapper">
			<h2>Events & Donation Drive</h2>  
		<div class="container">
	     <?php 
          $sql = "SELECT * FROM images ORDER BY id DESC";
          $res = mysqli_query($conn,  $sql);

          if (mysqli_num_rows($res) > 0) {
          	while ($images = mysqli_fetch_assoc($res)) {  ?>
        
           <div class="gallery-container"> 
			<div class="row">
					<div class="col-md-6 mb-3">
						<img src="../AdSide/uploads/<?=$images['image_url']?>">
					</div>
             </div>
				<div class="row">
					<div class="col-md-12 mb-3">
						<?=$images['description']?>
					</div>
				</div>
          </div>
		
		
		<?php } }?>
			</div>
		</div>
	</div>
<?php  
	include('includes/footer.php');
?>