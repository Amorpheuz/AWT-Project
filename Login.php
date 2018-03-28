<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/logo.png">
    
    <title>Log IN - BuyM8</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/floating-labels.css" rel="stylesheet">
    <link rel="stylesheet" href="css/custom.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body background="images/bg.jpg">
    <div class="login-box">
        <form class="form-signin" _lpchecked="1" method="POST" action="signin.php">
            <div class="text-center mb-4">
                <a href="index.php"><img class="mb-4" src="images/logo.png" alt="" height="150"></a>
                <h1 class="h3 mb-3">Log IN</h1>
                <?php
                    if(isset($_SESSION["ERROR"]))
                    {
                        if($_SESSION["ERROR"] == "WrongPass")
                        {
                            echo "Wrong Email/Password! Try Again";
                            $_SESSION["ERROR"]="";
                        }
                        else if($_SESSION["ERROR"] == "notMatch")
                        {
                            echo "Passwords didn't Match! Failed to register";
                            $_SESSION["ERROR"]="";
                        }
                        else if($_SESSION["ERROR"] == "exists")
                        {
                            echo "Email Exists! Failed to register";
                            $_SESSION["ERROR"]="";
                        }
                        else if($_SESSION["ERROR"] == "none")
                        {
                            echo "Successfully Registered";
                            $_SESSION["ERROR"]="";
                        }
                    }
                ?>
            </div>
            
            <div class="form-label-group">
                <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="" autocomplete="off">
                <label for="inputEmail">Email address</label>
            </div>
            
            <div class="form-label-group">
                <input type="password" name="pass" id="inputPassword" class="form-control" placeholder="Password" required=""  autocomplete="off">
                <label for="inputPassword">Password</label>
            </div>
            
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me</input>
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            
        </form>
        <div class="text-center"><button class="btn btn-link" data-toggle="modal" data-target="#myModal">Create Account</button></div>
        <p class="mt-5 mb-3 text-center">©BuyM8 2017-2018</p>
    </div>
    
</body>
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
                
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <img class="mb-4" src="images/logo.png" alt="" height="100"><h2 class="font-weight-normal"style="padding:30px 10px;">BuyM8</h2>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        
                    </div>
                    <div class="modal-body">
                        <div style="width: 450px; background-color: rgba(255, 255, 255, 0.5);">
                            <form class="form-signin" _lpchecked="1" method="POST" action="input.php">
                                <div class="text-center mb-4">
                                    <h1 class="h3 mb-3 font-weight-normal">Sign Up</h1>
                                    
                                </div>
                                
                                <div class="form-label-group">
                                    <input type="email" name="email" id="inputEmaill" class="form-control" placeholder="Email address" required="" autofocus="" autocomplete="off">
                                    <label for="inputEmaill">Email address</label>
                                </div>
                                <div class="form-label-group">
                                    <input type="text"  name="name" id="inputName" class="form-control" placeholder="Full Name" required="" autofocus="" autocomplete="off">
                                    <label for="inputName">Full Name</label>
                                </div>
                                <div class="form-label-group">
                                    <input type="password" name="pass" id="inputPasswordl" class="form-control" placeholder="Password" required=""  autocomplete="off">
                                    <label for="inputPasswordl">Password</label>
                                </div>
                                <div class="form-label-group">
                                    <input type="Password" name="cpass" id="inputRePassword" class="form-control" placeholder="Confirm Password" required=""  autocomplete="off">
                                    <label for="inputRePassword">Confirm Password</label>
                                </div>
                                
                                
                                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
                                <p class="mt-5 mb-3 text-muted text-center">©BuyM8 2017-2018</p>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        
</html>