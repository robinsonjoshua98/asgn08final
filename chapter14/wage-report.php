
<?php

$hourlyWage = $_POST['hourlyWage'];
$jobTitle = $_POST['jobTitle'];
$page_title = 'Name Change'; 

include_once("initialize.php");

check_db_connection($connect);

$result = mysqli_query($connect, change_name());

check_that_query_runs($result);


$result = mysqli_query($connect, wage_report());

if (!$result) 
{
	die("Could not successfully run query ($userQuery) from ".DB.": " .	
		mysqli_error($connect) );
}

if (mysqli_num_rows($result) == 0) 
{
	print("No records found with query $userQuery");
}
else 
{ 
	print("<h1>RESULTS</h1>");
	print("<p>The following employees have the $jobTitle job title, and an hourly wage of $".
			number_format($hourlyWage, 2)." or higher:</p>");
			
	print("<table border = \"1\">");
	print("<tr><th>EMP ID</th></tr>");

	while ($row = mysqli_fetch_assoc($result))
    {
        print (	"<tr><td>".$row['empID']."</td></tr>");
    }
	

	print ("</table>");
}
mysqli_close($connect);   // close the connection
 
include_once("../includes/footer.php");