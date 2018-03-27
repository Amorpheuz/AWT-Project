<?php
    session_start();
    $name=$_POST["name"];
    $pass=$_POST["pass"];
    $email=$_POST["email"];
    $cpass=$_POST["cpass"];
    if($pass != $cpass)
    {
        $_SESSION["error"]="notMatch"
    }
    else
    {
    /* check connection */
    $conn =mysqli_connect("localhost", "root", "", "awt");
    if (!$conn) 
        {
            printf("Connect failed: %s\n", mysqli_connect_error());
        }
        $sql = "INSERT INTO login VALUES ('$email','$name','$pass')";
        if(mysqli_query($conn,$sql))
        {
            echo "Record inserted";
        }
        else
        {
            echo mysqli_error($conn);
        }
    }
?>