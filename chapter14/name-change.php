<?php

$page_title = 'Name Change'; 

include_once("initialize.php");

check_db_connection($connect);

$result = mysqli_query($connect, change_name());

check_that_query_runs($result);

if (!$result) 
{
	die("Could not successfully run query ($userQuery) from $db: " .	
		mysqli_error($connect) );
}
else
{
	print("	<h1>UPDATE</h1>");
	print ("<p>The employee update has been completed.</p>");
}


mysqli_close($connect);   // close the connection
include_once("../includes/footer.php");
?>

