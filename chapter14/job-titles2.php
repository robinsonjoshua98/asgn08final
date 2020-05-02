<!DOCTYPE html>
<!--	Author: 
		Date:	
		File:	job-titles2.php
		Purpose:MySQL Exercise
-->

<html>
<head>
	<title>MySQL Query</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>

<?php


include_once('../database/connection.php');

// $server = "localhost";
// $user = "wbip";
// $pw = "wbip123";
// $db = "test";

$connect=mysqli_connect(SERVER, USER, PW, DB);

if( !$connect) 
{
	die("ERROR: Cannot connect to database ".DB." on server ".SERVER."
	using user name ".USER." (".mysqli_connect_errno().
	", ".mysqli_connect_error().")");
}

$jobTitle = $_POST['jobTitle'];

$userQuery = "SELECT lastName, firstName FROM `personnel` WHERE jobTitle='$jobTitle'";  

$result = mysqli_query($connect, $userQuery);

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
	print("<table border = \"1\">");
	print("<tr><th>FIRST NAME</th><th>LAST NAME</th></tr>");
		 
    while ($row = mysqli_fetch_assoc($result))
    {
        print (	"<tr><td>".$row['firstName']."</td><td>".$row['lastName']."</td></tr>");
    }
	
	print ("</table>");
}



mysqli_close($connect);   // close the connection
 
?>
</body>
</html>
