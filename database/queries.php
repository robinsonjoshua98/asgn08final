<?php

function hourly_wage_less_than_ten_dollars_query () {
    $userQuery = "SELECT empID, firstName, lastName";
    $userQuery .= " FROM personnel";
    $userQuery .= " WHERE hourlyWage < 10.00";
    return $userQuery;
}


function change_name() {
    $userQuery =  "Update personnel SET jobTitle='Manager',
     lastName='Jackson' WHERE empID='12353' ";
  return $userQuery;
}

function job_title(){
    $jobTitle = $_POST['jobTitle'];
    $userQuery = "SELECT lastName, firstName FROM `personnel` WHERE jobTitle='$jobTitle'";  
    return $userQuery;
}




function wage_report() {
    $hourlyWage = $_POST['hourlyWage'];
    $jobTitle = $_POST['jobTitle'];
    $userQuery = "SELECT empID FROM personnel
     WHERE jobTitle = '".$jobTitle."' 
    AND hourlyWage <=  ".$hourlyWage." ";
    return $userQuery;
}

function add_sales_person() {
$empID = $_POST['empID'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];

$userQuery = "INSERT INTO personnel 
(empID, firstName, lastName, jobTitle, hourlyWage)
VALUES ('$empID', '$firstName', '$lastName', 'Sales', '8.25')"; 

return $userQuery;
}