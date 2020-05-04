<?php
$page_title = 'Job Titles'; 

include_once("initialize.php");

check_db_connection($connect);

$jobTitle = $_POST['jobTitle'];

$userQuery = job_title();

$result = mysqli_query($connect, $userQuery);


check_that_query_runs($result);


if (mysqli_num_rows($result) == 0) 
{
	print("No records found with query $userQuery");
}
else 
{ 
	print("<h1>RESULTS</h1>");
	print("<table border = \"1\">");
	print("<tr><th>FIRST NAME</th><th>LAST NAME</th></tr>");
		 
    while ($row = mysqli_fetch_assoc($result))
    {
        print (	"<tr><td>".$row['firstName']."</td><td>".$row['lastName']."</td></tr>");
    }
	
	print ("</table>");
}

mysqli_close($connect);   // close the connection
include_once("../includes/footer.php");
