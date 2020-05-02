<?php
$page_title = 'Raises'; 

include_once('../database/connection.php');

$connect=mysqli_connect(SERVER, USER, PW, DB);

include_once("initialize.php");

check_db_connection($connect);

$userQuery = hourly_wage_less_than_ten_dollars_query();

$result = mysqli_query($connect, $userQuery);

check_that_query_runs($result);

if (mysqli_num_rows($result) == 0) {
	print("No records found with query $userQuery");
}
else { 

	echo "<h1>List of Employees Who Need a Raise</h1>";
	while ($row = mysqli_fetch_assoc($result))
		{
			print (	"<p>".$row['empID']." needs a raise</p>");
		}

}
	mysqli_close($connect); 
	include_once("../includes/footer.php");
?>


