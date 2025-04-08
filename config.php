<?php

$host="localhost";
$username="root";
$passeword="";
$db_name="commerce";
$con=mysqli_connect($host,$username,$passeword,$db_name);

if(!$con)
{
echo "database not connected";
}

session_start();






?>