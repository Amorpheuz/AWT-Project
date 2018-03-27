<?php
session_start();
// Grab User submitted information
$email = $_POST["email"];
$pass = $_POST["pass"];

// Connect to the database
$con = mysqli_connect("localhost","root","");
// Make sure we connected successfully
if(! $con)
{
    die('Connection Failed'.mysql_error());
}

// Select the database to use
mysqli_select_db($con,'awt');

$result = mysqli_query($con,"SELECT * FROM login WHERE email = '$email' AND password= sha1('$pass');");
if (!$result) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}
$row = mysqli_fetch_array($result);

if($row["email"]==$email)
{
    $_SESSION["id"]=$email;
    $_SESSION["ERROR"]="";
    $_SESSION["name"] = $row["name"];
    
    header("location:index.php");
}
    else
    {
        $_SESSION["ERROR"]="WrongPass";
        header("location:Login.php");
    }
?>