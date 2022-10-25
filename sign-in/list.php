<?php 
	session_start();
	include('..\AdSide\config\dbconn.php');
	include('includes/header.php');
	include('includes/navbar.php');
	$query = "SELECT * FROM users1 ORDER BY id DESC";  
	$result = mysqli_query($conn, $query); 
?>
 <head>   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
</head>  
      <body>  
           <br />            
           <div class="container" style="width:700px;" align="center">  
                <h3 class="text-center">ALUMNI List</h3><br />  
                <div class="table-responsive" id="employee_table">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th><a class="column_sort" id="id" data-order="desc" href="#">ID</a></th>  
                               <th><a class="column_sort" id="fname" data-order="desc" href="#">First Name</a></th>  
                               <th><a class="column_sort" id="mname" data-order="desc" href="#">Middle Name</a></th>  
                               <th><a class="column_sort" id="lname" data-order="desc" href="#">Last Name</a></th>  
                               <th><a class="column_sort" id="course" data-order="desc" href="#">Course</a></th>
							   <th><a class="column_sort" id="section" data-order="desc" href="#">Section</a></th>
							   <th><a class="column_sort" id="batch" data-order="desc" href="#">Batch</a></th>
  
                          </tr>  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                          ?>  
                          <tr>  
                               <td><?php echo $row["id"]; ?></td>  
                               <td><?php echo $row["fname"]; ?></td>  
                               <td><?php echo $row["mname"]; ?></td>  
                               <td><?php echo $row["lname"]; ?></td>  
                               <td><?php echo $row["course"]; ?></td>
							   <td><?php echo $row["section"]; ?></td> 
							   <td><?php echo $row["batch"]; ?></td> 
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
           <br />  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $(document).on('click', '.column_sort', function(){  
           var column_name = $(this).attr("id");  
           var order = $(this).data("order");  
           var arrow = '';  
           //glyphicon glyphicon-arrow-up  
           //glyphicon glyphicon-arrow-down  
           if(order == 'desc')  
           {  
                arrow = '&nbsp;<span class="glyphicon glyphicon-arrow-down"></span>';  
           }  
           else  
           {  
                arrow = '&nbsp;<span class="glyphicon glyphicon-arrow-up"></span>';  
           }  
           $.ajax({  
                url:"listDb.php",  
                method:"POST",  
                data:{column_name:column_name, order:order},  
                success:function(data)  
                {  
                     $('#employee_table').html(data);  
                     $('#'+column_name+'').append(arrow);  
                }  
           })  
      });  
 });  
 </script>  
<?php 
	include('includes/footer.php');
?>