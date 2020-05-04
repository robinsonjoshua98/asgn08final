<?php


if($_SERVER['HTTP_HOST'] == "joshuadrobinson.com")
{
    define("SERVER", "localhost");
    define("USER", "joshua99_wbip");
    define("PW", "Joshuarob17");
    define("DB", "joshua99_test");

}
else {
define("SERVER", "localhost");
define("USER", "wbip");
define("PW", "wbip123");
define("DB", "test");
}

 global $connect;
$connect = mysqli_connect(SERVER, USER, PW, DB);



// siteground
// $server = "localhost";
// $user = "charl989_admin";
// $pw = "Gabc";
// $db = "charl989_test";
