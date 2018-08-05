<?php
include_once("db_connect.php");
$sql = "UPDATE employee set " . $_POST["column"] . " = '".$_POST["value"]."' WHERE  id=".$_POST["id"];
mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
exit;  
?>