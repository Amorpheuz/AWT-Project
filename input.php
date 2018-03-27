<?php
    session_start();
    $name=$_POST["name"];
    $pass=$_POST["pass"];
    $email=$_POST["email"];
    $cpass=$_POST["cpass"];
    if($pass != $cpass)
    {
        $_SESSION["ERROR"]="notMatch";
        header("location:Login.php");
    }
    else
    {
    /* check connection */
    $conn =mysqli_connect("localhost", "root", "", "awt");
    if (!$conn) 
        {
            printf("Connect failed: %s\n", mysqli_connect_error());
        }
        $sql = "INSERT INTO login VALUES ('$email','$name',sha1('$pass'))";
        if(mysqli_query($conn,$sql))
        {
            $_SESSION["ERROR"]="none";
            header("location:Login.php");
        }
        else
        {
            $_SESSION["ERROR"]="exists";
            header("location:Login.php");
        }
    }
?>