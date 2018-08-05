<?php 
include_once("db_connect.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>phpzag.com : Demo Inline Editing using PHP MySQL and jQuery Ajax</title>

	<link rel="stylesheet" type="text/css" href="bootstrap.min.css"/>


	

</head>
<body>
	<div class="container">
	<h2>Example: Inline Editing using PHP MySQL and jQuery ajax</h2>
	<?php
	$sql = "SELECT * FROM device_table LIMIT 5";
	$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
	?>
	<table class="table table-condensed table-hover table-striped bootgrid-table">
		<thead>
		  <tr>			
			<th>Primary email address</th>
			<th>Secondary</th>			
		  </tr>
		</thead>
		<tbody>
		 <?php
		 while( $rows = mysqli_fetch_assoc($resultset) ) { 
		 ?>
			  <tr>				  
				  <p contenteditable="true" data-old_value="<?php echo $rows["user_registered"]; ?>" onBlur="saveInlineEdit(this,'employee_name','<?php echo $rows["id"]; ?>')" onClick="highlightEdit(this);"><?php echo $rows["user_registered"]; ?></p>
				  <td contenteditable="true" data-old_value="<?php echo $rows["user_registered2"]; ?>"  onBlur="saveInlineEdit(this,'employee_salary','<?php echo $rows["id"]; ?>')" onClick="highlightEdit(this);"><?php echo $rows["user_registered2"]; ?></td>
			  </tr>
		<?php
		}
		?>
		</tbody>
	</table>

		  
	
</div>

<script type="text/javascript" src="script/functions.js"></script>


	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</body>
</html>

