<?php 
 include('..\AdSide\config\dbconn.php');
	 
 $output = '';  
 $order = $_POST["order"];  
 if($order == 'desc')  
 {  
      $order = 'asc';  
 }  
 else  
 {  
      $order = 'desc';  
 }  
 $query = "SELECT * FROM users1 ORDER BY ".$_POST["column_name"]." ".$_POST["order"]."";  
 $result = mysqli_query($conn, $query);  
 $output .= '  
 <table class="table table-bordered">  
      <tr>  
           <th><a class="column_sort" id="id" data-order="'.$order.'" href="#">ID</a></th>  
           <th><a class="column_sort" id="fname" data-order="'.$order.'" href="#">First Name</a></th>  
           <th><a class="column_sort" id="mname" data-order="'.$order.'" href="#">Middle Name</a></th>
		   <th><a class="column_sort" id="lname" data-order="'.$order.'" href="#">Last Name</a></th>
           <th><a class="column_sort" id="course" data-order="'.$order.'" href="#">Course</a></th>  
           <th><a class="column_sort" id="section" data-order="'.$order.'" href="#">Section</a></th>
		   <th><a class="column_sort" id="batch" data-order="'.$order.'" href="#">Batch</a></th>
      </tr>  
 ';  
 while($row = mysqli_fetch_array($result))  
 {  
      $output .= '  
      <tr>  
           <td>' . $row["id"] . '</td>  
           <td>' . $row["fname"] . '</td>
		   <td>' . $row["mname"] . '</td>
		   <td>' . $row["lname"] . '</td>
           <td>' . $row["course"] . '</td>  
           <td>' . $row["section"] . '</td>  
           <td>' . $row["batch"] . '</td>  
      </tr>  
      ';  
 }  
 $output .= '</table>';  
 echo $output;  
 ?>