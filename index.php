<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.barrating.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/fontawesome-stars.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <script type="text/javascript" src="js/custom.js"></script>
    <link rel="icon" href="images/logo.png">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>
    <style>
        .container-fluid{
            background-color: white;
        }
    </style>
</head>

<body>
    <div class="bg-white">
        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 bg-white">
            <nav class="my-0 mr-md-auto">
                <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo" style="height: 50px;"> BuyM8</a>
            </nav>
            <nav class="my-2 my-md-0 mr-md-3">
            </nav>
            <?php
            if(isset($_SESSION["name"]))
            {
                if($_SESSION["name"] != "")
                {
                    $name=$_SESSION["name"];
                    echo "<a href='dashboard.php'><h6 style='color:#2196f3;margin-right:5px;padding-top:10px;' class='font-weight-normal'>Welcome ".$name."</h6></a>"." <a class='btn btn-outline-primary' href='logout.php'>Sign Out</a>";
                }
                else
                {
                    echo"<a class='btn btn-outline-primary' href='Login.php' style='margin-right:5px;'>Sign In/ Sign Up</a>";
                }
            }
            else
            {
                echo"<a class='btn btn-outline-primary' href='Login.php' style='margin-right:5px;'>Sign In/Sign up</a>";
            }
            ?>
        </div>
        <div class="d-flex justify-content-center">
            <hr style="margin:0px; background-color: #2196f3; width: 95%">
        </div>
        <div id="mainnav" class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 bg-white border-bottom box-shadow">
            <nav class="my-0 mr-md-auto">
                <a class="p-2 text-dark" href="#">All Products</a>
                <a class="p-2 text-dark" href="#">Today's Deals</a>
                <a class="p-2 text-dark" href="#">BuyM8 Wallet</a>
                <a class="p-2 text-dark" href="#">Sell</a>
                <a class="p-2 text-dark" href="#">Customer Service</a>
            </nav>
            <nav class="my-2 my-md-0 mr-md-3">
            </nav>
            <form class="form-inline">
                <input style="border-radius:0.25rem 0rem 0rem 0.25rem" class="form-control" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary" style="border-radius:0rem 0.25rem 0.25rem 0rem" type="submit"><i class='fas fa-search'></i></button>
                <?php
                    if(isset($_SESSION["name"]))
                    {
                        if($_SESSION["name"]!="")
                        {
                            echo "<a href='cart.php' style='margin-left:5px;' class='btn btn-outline-primary my-2 my-sm-0'><i class='fas fa-shopping-cart'></i> My Cart</a>";
                        }
                    }
                ?>
            </form>
        </div>
    </div>
    <button type="button" class="btn btn-dark" id="topBtn"><img src="images/upArr.png" alt="upArrow"></button>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12" style="margin-bottom: 15px;">
                <div id="demo" class="carousel slide" data-ride="carousel">
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                    </ul>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a href="ProductPage.php"><img src="images/car1.jpg" alt="Los Angeles" width="100%"></a>
                        </div>
                        <div class="carousel-item">
                            <a href="ProductPage.php"><img src="images/car2.jpg" alt="Chicago" width="100%"></a>
                        </div>
                        <div class="carousel-item">
                            <a href="ProductPage.php"><img src="images/car3.jpg" alt="New York" width="100%"></a>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 l-right">
                <h1 class="display-4 text-under">
                    Today's Deals
                </h1>
                <p class="lead">Check out all the deals for today <a href="#">here!</a></p>
                <div class="carousel-container">
                    <div class="main-carousel" data-flickity='{ "groupCells": true, "wrapAround": true }'>
                        <div class="carousel-cell text-center">      
                            <div class="row">
                                <div class="col-lg-12">
                                    <a href="ProductPage.php"><img src="images/random/random1.jpg" alt="Product 1" style="height:101px"></img></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <select class="rater">
                                        <option value="5">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <h5>
                                        <small class="text-muted">
                                            ₹1030
                                        </small>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-cell text-center">
                            <div class="row">
                                <div class="col-lg-12">
                                    <a href="ProductPage.php">
                                        <img src="images/random/random2.jpg" alt="Product 1" style="height:101px">
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <select class="rater">
                                        <option value="4">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <h5>
                                        <small class="text-muted">
                                            ₹1030
                                        </small>
                                    </h5>
                                </div>
                            </div>
                        </div><div class="carousel-cell text-center">
                            <div class="row">
                                <div class="col-lg-12">
                                    <a href="ProductPage.php">
                                        <img src="images/random/random3.jpg" alt="Product 1" style="height:101px">
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <select class="rater">
                                        <option value="3">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <h5>
                                        <small class="text-muted">
                                            ₹1030
                                        </small>
                                    </h5>
                                </div>
                            </div>
                        </div><div class="carousel-cell text-center">
                            <div class="row">
                                <div class="col-lg-12">
                                    <a href="ProductPage.php">
                                        <img src="images/random/random4.jpg" alt="Product 1" style="height:101px">
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <select class="rater">
                                        <option value="3">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <h5>
                                        <small class="text-muted">
                                            ₹1030
                                        </small>
                                    </h5>
                                </div>
                            </div>
                        </div><div class="carousel-cell text-center">
                            <div class="row">
                                <div class="col-lg-12">
                                    <a href="ProductPage.php">
                                        <img src="images/random/random5.png" alt="Product 1" style="height:101px">
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <select class="rater">
                                        <option value="4">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <h5>
                                        <small class="text-muted">
                                            ₹1030
                                        </small>
                                    </h5>
                                </div>
                            </div>
                        </div><div class="carousel-cell text-center">
                            <div class="row">
                                <div class="col-lg-12">
                                    <a href="ProductPage.php">
                                        <img src="images/random/random6.png" alt="Product 1" style="height:101px">
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <select class="rater">
                                        <option value="3">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <h5>
                                        <small class="text-muted">
                                            ₹1030
                                        </small>
                                    </h5>
                                </div>
                            </div>
                        </div><div class="carousel-cell text-center">
                            <div class="row">
                                <div class="col-lg-12">
                                    <a href="ProductPage.php">
                                        <img src="images/random/random7.png" alt="Product 1" style="height:101px">
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <select class="rater">
                                        <option value="5">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <h5>
                                        <small class="text-muted">
                                            ₹1030
                                        </small>
                                    </h5>
                                </div>
                            </div>
                        </div><div class="carousel-cell text-center">
                            <div class="row">
                                <div class="col-lg-12">
                                    <a href="ProductPage.php">
                                        <img src="images/random/random8.png" alt="Product 1" style="height:101px">
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <select class="rater">
                                        <option value="4">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <h5>
                                        <small class="text-muted">
                                            ₹1030
                                        </small>
                                    </h5>
                                </div>
                            </div>
                        </div><div class="carousel-cell text-center">
                            <div class="row">
                                <div class="col-lg-12">
                                    <a href="ProductPage.php">
                                        <img src="images/random/random9.png" alt="Product 1" style="height:101px">
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <select class="rater">
                                        <option value="4">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <h5>
                                        <small class="text-muted">
                                            ₹1030
                                        </small>
                                    </h5>
                                </div>
                            </div>
                        </div><div class="carousel-cell text-center">
                            <div class="row">
                                <div class="col-lg-12">
                                    <a href="ProductPage.php">
                                        <img src="images/random/random10.jpg" alt="Product 1" style="height:101px">
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <select class="rater">
                                        <option value="5">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <h5>
                                        <small class="text-muted">
                                            ₹1030
                                        </small>
                                    </h5>
                                </div>
                            </div>
                        </div><div class="carousel-cell text-center">      
                            <div class="row">
                                <div class="col-lg-12">
                                    <a href="ProductPage.php"><img src="images/random/random11.jpg" alt="Product 1" style="height:101px"></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <select class="rater">
                                        <option value="5">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <h5>
                                        <small class="text-muted">
                                            ₹1030
                                        </small>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-cell text-center">
                            <div class="row">
                                <div class="col-lg-12">
                                    <a href="ProductPage.php">
                                        <img src="images/random/random12.png" alt="Product 1" style="height:101px">
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <select class="rater">
                                        <option value="5">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <h5>
                                        <small class="text-muted">
                                            ₹1030
                                        </small>
                                    </h5>
                                </div>
                            </div>
                        </div><div class="carousel-cell text-center">      
                            <div class="row">
                                <div class="col-lg-12">
                                    <a href="ProductPage.php"><img src="images/random/random13.png" alt="Product 1" style="height:101px"></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <select class="rater">
                                        <option value="5">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <h5>
                                        <small class="text-muted">
                                            ₹1030
                                        </small>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-cell text-center">
                            <div class="row">
                                <div class="col-lg-12">
                                    <a href="ProductPage.php">
                                        <img src="images/random/random14.png" alt="Product 1" style="height:101px">
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <select class="rater">
                                        <option value="5">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <h5>
                                        <small class="text-muted">
                                            ₹1030
                                        </small>
                                    </h5>
                                </div>
                            </div>
                        </div><div class="carousel-cell text-center">      
                            <div class="row">
                                <div class="col-lg-12">
                                    <a href="ProductPage.php"><img src="images/random/random15.png" alt="Product 1" style="height:101px"></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <select class="rater">
                                        <option value="5">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <h5>
                                        <small class="text-muted">
                                            ₹1030
                                        </small>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-cell text-center">      
                            <div class="row">
                                <div class="col-lg-12">
                                    <a href="ProductPage.php"><img src="images/random/random16.png" alt="Product 1" style="height:101px"></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <select class="rater">
                                        <option value="5">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <h5>
                                        <small class="text-muted">
                                            ₹1030
                                        </small>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-cell text-center">
                            <div class="row">
                                <div class="col-lg-12">
                                    <a href="ProductPage.php">
                                        <img src="images/random/random17.png" alt="Product 1" style="height:101px">
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <select class="rater">
                                        <option value="5">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <h5>
                                        <small class="text-muted">
                                            ₹1030
                                        </small>
                                    </h5>
                                </div>
                            </div>
                        </div><div class="carousel-cell text-center">      
                            <div class="row">
                                <div class="col-lg-12">
                                    <a href="ProductPage.php"><img src="images/random/random18.png" alt="Product 1" style="height:101px"></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <select class="rater">
                                        <option value="5">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <h5>
                                        <small class="text-muted">
                                            ₹1030
                                        </small>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-cell text-center">      
                            <div class="row">
                                <div class="col-lg-12">
                                    <a href="ProductPage.php"><img src="images/random/random19.png" alt="Product 1" style="height:101px"></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <select class="rater">
                                        <option value="5">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <h5>
                                        <small class="text-muted">
                                            ₹1030
                                        </small>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-cell text-center">      
                            <div class="row">
                                <div class="col-lg-12">
                                    <a href="ProductPage.php"><img src="images/random/random20.png" alt="Product 1" style="height:101px"></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <select class="rater">
                                        <option value="5">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <h5>
                                        <small class="text-muted">
                                            ₹1030
                                        </small>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-cell text-center">      
                            <div class="row">
                                <div class="col-lg-12">
                                    <a href="ProductPage.php"><img src="images/random/random21.png" alt="Product 1" style="height:101px"></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <select class="rater">
                                        <option value="5">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <h5>
                                        <small class="text-muted">
                                            ₹1030
                                        </small>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-cell text-center">      
                            <div class="row">
                                <div class="col-lg-12">
                                    <a href="ProductPage.php"><img src="images/random/random22.png" alt="Product 1" style="height:101px"></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <select class="rater">
                                        <option value="5">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <h5>
                                        <small class="text-muted">
                                            ₹1030
                                        </small>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-cell text-center">
                            <div class="row">
                                <div class="col-lg-12">
                                    <a href="ProductPage.php">
                                        <img src="images/random/random23.png" alt="Product 1" style="height:101px">
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <select class="rater">
                                        <option value="5">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <h5>
                                        <small class="text-muted">
                                            ₹1030
                                        </small>
                                    </h5>
                                </div>
                            </div>
                        </div><div class="carousel-cell text-center">      
                            <div class="row">
                                <div class="col-lg-12">
                                    <a href="ProductPage.php"><img src="images/random/random24.png" alt="Product 1" style="height:101px"></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <select class="rater">
                                        <option value="5">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <h5>
                                        <small class="text-muted">
                                            ₹1030
                                        </small>
                                    </h5>
                                </div>
                            </div>
                        </div><div class="carousel-cell text-center">      
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <a href="ProductPage.php"><img src="images/random/random25.png" alt="Product 1" style="height:101px"></a>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <select class="rater">
                                                            <option value="5">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <h5>
                                                            <small class="text-muted">
                                                                ₹1030
                                                            </small>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-cell text-center">      
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <a href="ProductPage.php"><img src="images/random/random26.png" alt="Product 1" style="height:101px"></a>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <select class="rater">
                                                            <option value="5">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <h5>
                                                            <small class="text-muted">
                                                                ₹1030
                                                            </small>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                            
                        <div class="carousel-cell text-center">      
                            <div class="row">
                                <div class="col-lg-12">
                                    <a href="ProductPage.php"><img src="images/random/random27.png" alt="Product 1" style="height:101px"></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <select class="rater">
                                        <option value="5">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <h5>
                                        <small class="text-muted">
                                            ₹1030
                                        </small>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-cell text-center">      
                            <div class="row">
                                <div class="col-lg-12">
                                    <a href="ProductPage.php"><img src="images/random/random28.png" alt="Product 1" style="height:101px"></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <select class="rater">
                                        <option value="5">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <h5>
                                        <small class="text-muted">
                                            ₹1030
                                        </small>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <h1 class="display-4 text-under">
                    Featured
                </h1>
                <p class="h5"><a href="ProductPage.php">Awesome Cleaner Stickers</a><small class="text-muted"><br>₹99 Only!</small></p>
                <img src="images/featured.png" alt="Featured Product" class="mw-100 mx-auto d-block">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <center>
                    <hr class="hr-main" width="95%">
                </center>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-12 l-right">
                        <h1 class="display-4 text-under">
                            Inspired by you
                        </h1>
                        <p class="lead">Because everyone's needs are different <a href="ProductPage.php" style="padding-left:25px;"> See All</a></p>
                        <div class="carousel-container">
                            <div class="main-carousel" data-flickity='{ "groupCells": true, "wrapAround": true }'>
                                <div class="carousel-cell text-center">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a href="ProductPage.php">
                                                <img src="images/random/random27.png" alt="Product 1" style="height:101px">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <select class="rater">
                                                <option value="5">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>
                                                <small class="text-muted">
                                                    ₹1030
                                                </small>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell text-center">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a href="ProductPage.php">
                                                <img src="images/random/random25.png" alt="Product 1" style="height:101px">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <select class="rater">
                                                <option value="4">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>
                                                <small class="text-muted">
                                                    ₹1030
                                                </small>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell text-center">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a href="ProductPage.php">
                                                <img src="images/random/random23.png" alt="Product 1" style="height:101px">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <select class="rater">
                                                <option value="3">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>
                                                <small class="text-muted">
                                                    ₹1030
                                                </small>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell text-center">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a href="ProductPage.php">
                                                <img src="images/random/random21.png" alt="Product 1" style="height:101px">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <select class="rater">
                                                <option value="3">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>
                                                <small class="text-muted">
                                                    ₹1030
                                                </small>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell text-center">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a href="ProductPage.php">
                                                <img src="images/random/random19.png" alt="Product 1" style="height:101px">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <select class="rater">
                                                <option value="4">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>
                                                <small class="text-muted">
                                                    ₹1030
                                                </small>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell text-center">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a href="ProductPage.php">
                                                <img src="images/random/random17.png" alt="Product 1" style="height:101px">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <select class="rater">
                                                <option value="3">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>
                                                <small class="text-muted">
                                                    ₹1030
                                                </small>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell text-center">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a href="ProductPage.php">
                                                <img src="images/random/random13.png" alt="Product 1" style="height:101px">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <select class="rater">
                                                <option value="5">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>
                                                <small class="text-muted">
                                                    ₹1030
                                                </small>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell text-center">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a href="ProductPage.php">
                                                <img src="images/random/random30.png" alt="Product 1" style="height:101px">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <select class="rater">
                                                <option value="4">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>
                                                <small class="text-muted">
                                                    ₹1030
                                                </small>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell text-center">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a href="ProductPage.php">
                                                <img src="images/random/random30.png" alt="Product 1" style="height:101px">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <select class="rater">
                                                <option value="4">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>
                                                <small class="text-muted">
                                                    ₹1030
                                                </small>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell text-center">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a href="ProductPage.php">
                                                <img src="images/random/random20.png" alt="Product 1" style="height:101px">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <select class="rater">
                                                <option value="5">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>
                                                <small class="text-muted">
                                                    ₹1030
                                                </small>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell text-center">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a href="ProductPage.php">
                                                <img "images/random/random13.png" alt="Product 1" style="height:101px">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <select class="rater">
                                                <option value="5">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>
                                                <small class="text-muted">
                                                    ₹1030
                                                </small>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell text-center">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a href="ProductPage.php">
                                                <img src="images/random/random8.png" alt="Product 1" style="height:101px">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <select class="rater">
                                                <option value="5">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>
                                                <small class="text-muted">
                                                    ₹1030
                                                </small>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell text-center">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a href="ProductPage.php">
                                                <img src="images/random/random6.png" alt="Product 1" style="height:101px">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <select class="rater">
                                                <option value="5">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>
                                                <small class="text-muted">
                                                    ₹1030
                                                </small>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <center>
                            <hr class="hr-main" width="95%">
                        </center>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 l-right">
                        <div class="row">
                            <div class="col-sm-8">
                                <table class="h-100">
                                    <tr>
                                        <td class="align-middle text-center">
                                            <h1 class="display-4">Upto 35% OFF on Mobiles</h1>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-sm-4 d-flex justify-content-center">
                                <img src="images/mobile_phones_grp.png" alt="mobile group" class="mw-100" style="height:200px;">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 l-right">
                        <div class="row">
                            <div class="col-sm-8">
                                <table class="h-100">
                                    <tr>
                                        <td class="align-middle text-center">
                                            <h1 class="display-4">Headphones under ₹1999</h1>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-sm-4 d-flex justify-content-center">
                                <img src="images/headphones.png" alt="mobile group" class="mw-100" style="height:200px;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <center>
                            <hr class="hr-main" width="95%">
                        </center>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 l-right">
                        <h1 class="display-4 text-under">
                            Summer Bonanza
                        </h1>
                        <p class="lead">Summer's here and so are the best deals on your favourite products! <a href="ProductPage.php" style="padding-left:25px;"> See All</a></p>
                        <div class="carousel-container">
                            <div class="main-carousel" data-flickity='{ "groupCells": true, "wrapAround": true }'>
                                <div class="carousel-cell text-center">      
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a href="ProductPage.php"><img src="images/random/random5.png" alt="Product 1" style="height:101px"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <select class="rater">
                                                <option value="5">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>
                                                <small class="text-muted">
                                                    ₹1030
                                                </small>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell text-center">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a href="ProductPage.php">
                                                <img src="images/random/random6.png" alt="Product 1" style="height:101px">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <select class="rater">
                                                <option value="4">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>
                                                <small class="text-muted">
                                                    ₹1030
                                                </small>
                                            </h5>
                                        </div>
                                    </div>
                                </div><div class="carousel-cell text-center">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a href="ProductPage.php">
                                                <img src="images/random/random30.png" alt="Product 1" style="height:101px">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <select class="rater">
                                                <option value="3">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>
                                                <small class="text-muted">
                                                    ₹1030
                                                </small>
                                            </h5>
                                        </div>
                                    </div>
                                </div><div class="carousel-cell text-center">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a href="ProductPage.php">
                                                <img src="images/random/random29.png" alt="Product 1" style="height:101px">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <select class="rater">
                                                <option value="3">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>
                                                <small class="text-muted">
                                                    ₹1030
                                                </small>
                                            </h5>
                                        </div>
                                    </div>
                                </div><div class="carousel-cell text-center">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a href="ProductPage.php">
                                                <img src="images/random/random27.png" alt="Product 1" style="height:101px">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <select class="rater">
                                                <option value="4">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>
                                                <small class="text-muted">
                                                    ₹1030
                                                </small>
                                            </h5>
                                        </div>
                                    </div>
                                </div><div class="carousel-cell text-center">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a href="ProductPage.php">
                                                <img src="images/random/random25.png" alt="Product 1" style="height:101px">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <select class="rater">
                                                <option value="3">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>
                                                <small class="text-muted">
                                                    ₹1030
                                                </small>
                                            </h5>
                                        </div>
                                    </div>
                                </div><div class="carousel-cell text-center">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a href="ProductPage.php">
                                                <img src="images/random/random12.png" alt="Product 1" style="height:101px">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <select class="rater">
                                                <option value="5">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>
                                                <small class="text-muted">
                                                    ₹1030
                                                </small>
                                            </h5>
                                        </div>
                                    </div>
                                </div><div class="carousel-cell text-center">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a href="ProductPage.php">
                                                <img src="images/random/random7.png" alt="Product 1" style="height:101px">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <select class="rater">
                                                <option value="4">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>
                                                <small class="text-muted">
                                                    ₹1030
                                                </small>
                                            </h5>
                                        </div>
                                    </div>
                                </div><div class="carousel-cell text-center">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a href="ProductPage.php">
                                                <img src="images/random/random8.png" alt="Product 1" style="height:101px">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <select class="rater">
                                                <option value="4">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>
                                                <small class="text-muted">
                                                    ₹1030
                                                </small>
                                            </h5>
                                        </div>
                                    </div>
                                </div><div class="carousel-cell text-center">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a href="ProductPage.php">
                                                <img src="images/random/random9.png" alt="Product 1" style="height:101px">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <select class="rater">
                                                <option value="5">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>
                                                <small class="text-muted">
                                                    ₹1030
                                                </small>
                                            </h5>
                                        </div>
                                    </div>
                                </div><div class="carousel-cell text-center">      
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a href="ProductPage.php"><img src="images/random/random13.png" alt="Product 1" style="height:101px"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <select class="rater">
                                                <option value="5">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>
                                                <small class="text-muted">
                                                    ₹1030
                                                </small>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell text-center">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a href="ProductPage.php">
                                                <img src="images/random/random15.png" alt="Product 1" style="height:101px">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <select class="rater">
                                                <option value="5">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>
                                                <small class="text-muted">
                                                    ₹1030
                                                </small>
                                            </h5>
                                        </div>
                                    </div>
                                </div><div class="carousel-cell text-center">      
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a href="ProductPage.php"><img src="images/random/random16.png" alt="Product 1" style="height:101px"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <select class="rater">
                                                <option value="5">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>
                                                <small class="text-muted">
                                                    ₹1030
                                                </small>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell text-center">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a href="ProductPage.php">
                                                <img src="images/random/random17.png" alt="Product 1" style="height:101px">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <select class="rater">
                                                <option value="5">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>
                                                <small class="text-muted">
                                                    ₹1030
                                                </small>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell text-center">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a href="ProductPage.php">
                                                <img src="images/random/random18.png" alt="Product 1" style="height:101px">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <select class="rater">
                                                <option value="4">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>
                                                <small class="text-muted">
                                                    ₹1030
                                                </small>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell text-center">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a href="ProductPage.php">
                                                <img src="images/random/random19.png" alt="Product 1" style="height:101px">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <select class="rater">
                                                <option value="3">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>
                                                <small class="text-muted">
                                                    ₹1030
                                                </small>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell text-center">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a href="ProductPage.php">
                                                <img src="images/random/random20.png" alt="Product 1" style="height:101px">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <select class="rater">
                                                <option value="3">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>
                                                <small class="text-muted">
                                                    ₹1030
                                                </small>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell text-center">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a href="ProductPage.php">
                                                <img src="images/random/random21.png" alt="Product 1" style="height:101px">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <select class="rater">
                                                <option value="4">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>
                                                <small class="text-muted">
                                                    ₹1030
                                                </small>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell text-center">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a href="ProductPage.php">
                                                <img src="images/random/random22.png" alt="Product 1" style="height:101px">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <select class="rater">
                                                <option value="3">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>
                                                <small class="text-muted">
                                                    ₹1030
                                                </small>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell text-center">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a href="ProductPage.php">
                                                <img src="images/random/random22.png" alt="Product 1" style="height:101px">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <select class="rater">
                                                <option value="5">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>
                                                <small class="text-muted">
                                                    ₹1030
                                                </small>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell text-center">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a href="ProductPage.php">
                                                <img src="images/random/random23.png" alt="Product 1" style="height:101px">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <select class="rater">
                                                <option value="4">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>
                                                <small class="text-muted">
                                                    ₹1030
                                                </small>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell text-center">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a href="ProductPage.php">
                                                <img src="images/random/random24.png" alt="Product 1" style="height:101px">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <select class="rater">
                                                <option value="4">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>
                                                <small class="text-muted">
                                                    ₹1030
                                                </small>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell text-center">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a href="ProductPage.php">
                                                <img src="images/random/random25.png" alt="Product 1" style="height:101px">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <select class="rater">
                                                <option value="5">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>
                                                <small class="text-muted">
                                                    ₹1030
                                                </small>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell text-center">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a href="ProductPage.php">
                                                <img src="images/random/random26.png" alt="Product 1" style="height:101px">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <select class="rater">
                                                <option value="5">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>
                                                <small class="text-muted">
                                                    ₹1030
                                                </small>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell text-center">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a href="ProductPage.php">
                                                <img src="images/random/random27.png" alt="Product 1" style="height:101px">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <select class="rater">
                                                <option value="5">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>
                                                <small class="text-muted">
                                                    ₹1030
                                                </small>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell text-center">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a href="ProductPage.php">
                                                <img src="images/random/random28.png" alt="Product 1" style="height:101px">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <select class="rater">
                                                <option value="5">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>
                                                <small class="text-muted">
                                                    ₹1030
                                                </small>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <center>
                            <hr class="hr-main" width="95%">
                        </center>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 l-right">
                        <div class="row">
                            <div class="col-sm-8">
                                <table class="h-100">
                                    <tr>
                                        <td class="align-middle text-center">
                                            <h1 class="display-4">25% OFF on Smart Devices</h1>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-sm-4 d-flex justify-content-center">
                                <img src="images/googleHome.png" alt="Smart Devices" class="mw-100" style="height:200px;">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 l-right">
                        <div class="row">
                            <div class="col-sm-8">
                                <table class="h-100">
                                    <tr>
                                        <td class="align-middle text-center">
                                            <h1 class="display-4">50% OFF on Select Apple Devices</h1>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-sm-4 d-flex justify-content-center">
                                <img src="images/apple.png" alt="mobile group" class="mw-100" style="height:200px;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <center>
                            <hr class="hr-main" width="95%">
                        </center>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 l-right">
                        <h1 class="display-4 text-under">
                            Books Worth Your Time
                        </h1>
                        <p class="lead">Spend your afternoon enjoying these masterpieces from the best authors out there
                            <a href="ProductPage.php" style="padding-left:25px;"> See All</a>
                        </p>
                        <div class="carousel-container">
                            <div class="main-carousel" data-flickity='{ "groupCells": true, "wrapAround": true }'>
                                <div class="carousel-cell text-center">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a href="ProductPage.php">
                                                <img src="images/Books/book1.jpg" alt="Product 1" style="height:101px">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <select class="rater">
                                                <option value="5">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>
                                                <small class="text-muted">
                                                    ₹1030
                                                </small>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell text-center">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a href="ProductPage.php">
                                                <img src="images/Books/book2.jpg" alt="Product 1" style="height:101px">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <select class="rater">
                                                <option value="4">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>
                                                <small class="text-muted">
                                                    ₹1030
                                                </small>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell text-center">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a href="ProductPage.php">
                                                <img src="images/Books/book3.jpg" alt="Product 1" style="height:101px">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <select class="rater">
                                                <option value="3">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>
                                                <small class="text-muted">
                                                    ₹1030
                                                </small>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell text-center">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a href="ProductPage.php">
                                                <img src="images/Books/book4.jpg" alt="Product 1" style="height:101px">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <select class="rater">
                                                <option value="3">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>
                                                <small class="text-muted">
                                                    ₹1030
                                                </small>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell text-center">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a href="ProductPage.php">
                                                <img src="images/Books/book5.jpg" alt="Product 1" style="height:101px">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <select class="rater">
                                                <option value="4">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>
                                                <small class="text-muted">
                                                    ₹1030
                                                </small>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell text-center">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a href="ProductPage.php">
                                                <img src="images/Books/book6.jpg" alt="Product 1" style="height:101px">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <select class="rater">
                                                <option value="3">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>
                                                <small class="text-muted">
                                                    ₹1030
                                                </small>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell text-center">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a href="ProductPage.php">
                                                <img src="images/Books/book7.jpg" alt="Product 1" style="height:101px">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <select class="rater">
                                                <option value="5">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>
                                                <small class="text-muted">
                                                    ₹1030
                                                </small>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell text-center">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a href="ProductPage.php">
                                                <img src="images/Books/book8.jpg" alt="Product 1" style="height:101px">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <select class="rater">
                                                <option value="4">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>
                                                <small class="text-muted">
                                                    ₹1030
                                                </small>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell text-center">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a href="ProductPage.php">
                                                <img src="images/Books/book9.jpg" alt="Product 1" style="height:101px">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <select class="rater">
                                                <option value="4">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>
                                                <small class="text-muted">
                                                    ₹1030
                                                </small>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell text-center">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a href="ProductPage.php">
                                                <img src="images/Books/book10.jpg" alt="Product 1" style="height:101px">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <select class="rater">
                                                <option value="5">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>
                                                <small class="text-muted">
                                                    ₹1030
                                                </small>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell text-center">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a href="ProductPage.php">
                                                <img src="images/Books/book11.jpg" alt="Product 1" style="height:101px">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <select class="rater">
                                                <option value="5">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>
                                                <small class="text-muted">
                                                    ₹1030
                                                </small>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell text-center">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a href="ProductPage.php">
                                                <img src="images/Books/book12.jpg" alt="Product 1" style="height:101px">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <select class="rater">
                                                <option value="5">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>
                                                <small class="text-muted">
                                                    ₹1030
                                                </small>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell text-center">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a href="ProductPage.php">
                                                <img src="images/Books/book14.jpg" alt="Product 1" style="height:101px">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <select class="rater">
                                                <option value="5">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>
                                                <small class="text-muted">
                                                    ₹1030
                                                </small>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <h1 class="display-4 text-under">
                    Best Sellers
                </h1>
                <ul class="bestsell-list">
                    <li class="bestsell-head">
                        Xbox Accessories
                        <ol>
                            <li style="padding-bottom:25px;">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4>
                                            Product 1
                                            <small class="text-muted">₹1000</small>
                                        </h4>
                                    </div>
                                </div><div class="row">
                                    <div class="col-lg-12" style="padding-bottom:10px; margin-top:-18px;">
                                        <select class="rater">
                                            <option value="5">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <img src="images/xbox.png" alt="" class="mw-100">
                                    </div>
                                </div>
                            </li>
                            <li style="padding-bottom:25px;">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4>
                                            Product 2
                                            <small class="text-muted">₹1000</small>
                                        </h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12" style="padding-bottom:10px; margin-top:-18px;">
                                        <select class="rater">
                                            <option value="5">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <img src="images/xboxcontroller.png" alt="" class="mw-100">
                                    </div>
                                </div>
                            </li>
                            <li style="padding-bottom:25px;">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4>
                                            Product 3
                                            <small class="text-muted">₹1000</small>
                                        </h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12" style="padding-bottom:10px; margin-top:-18px;">
                                        <select class="rater">
                                            <option value="5">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <img src="images/xboxonecat.png" alt="" class="mw-100">
                                    </div>
                                </div>
                            </li>
                        </ol>   
                    </li>
                    <li class="bestsell-head">
                        Lighting Features
                        <ol>
                            <li style="padding-bottom:25px;">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4>
                                            Product 1
                                            <small class="text-muted">₹1000</small>
                                        </h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12" style="padding-bottom:10px; margin-top:-18px;">
                                        <select class="rater">
                                            <option value="5">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <img src="images/lamp.png" alt="" class="mw-100">
                                    </div>
                                </div>
                            </li>
                            <li style="padding-bottom:25px;">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4>
                                            Product 2
                                            <small class="text-muted">₹1000</small>
                                        </h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12" style="padding-bottom:10px; margin-top:-18px;">
                                        <select class="rater">
                                            <option value="5">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <img src="images/lamp2.png" alt="" class="mw-100">
                                    </div>
                                </div>
                            </li>
                        </ol>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <center>
                    <hr class="hr-main" width="95%">
                </center>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 review-row">
                <h1 class="display-4 text-under text-dark">
                    Talk of the Town
                </h1>
                <p class="lead text-dark">Check out what people are saying about us</p>
                <div class="carousel-container">
                    <div class="main-carousel" data-flickity='{ "wrapAround": true, "autoPlay": true}'>
                        <div class="carousel-cell d-flex justify-content-center" style="background: #55ACEE">
                            <table style="width:100%; height:100%">
                                <tr>
                                    <td class="align-middle">
                                        <blockquote class="blockquote text-center">
                                            <img src="images/twitter.png" class="mw-100" alt="Twitter" style="margin:-40px;height:151px;">
                                            <p class="mb-0">Dope stuff, best discounts.</p>
                                            <footer class="blockquote-footer">Huzefa BMX,
                                                <cite title="Source Title"><a href="https://twitter.com/huzon1st">@huzon1st</a></cite>
                                            </footer>
                                        </blockquote>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="carousel-cell d-flex justify-content-center" style="background: #3B5998">
                            <table style="width:100%; height:100%">
                                <tr>
                                    <td class="align-middle">
                                        <blockquote class="blockquote text-center">
                                            <img src="images/fb.png" class="mw-100" alt="Facebook" style="height:50px;">
                                            <p class="mb-0">Literally the best of the best online vendors in India</p>
                                            <footer class="blockquote-footer">Rahim Rehman,
                                                <cite title="Source Title"><a href="https://www.facebook.com/TimesofIndia/">Times of India</a></cite>
                                            </footer>
                                        </blockquote>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="carousel-cell d-flex justify-content-center" style="background: #55ACEE">
                            <table style="width:100%; height:100%">
                                <tr>
                                    <td class="align-middle">
                                        <blockquote class="blockquote text-center">
                                            <img src="images/twitter.png" class="mw-100" alt="Twitter" style="margin:-40px;height:151px;">
                                            <p class="mb-0">The secret to the best deals!!!!!!!! :*</p>
                                            <footer class="blockquote-footer">Alkesh Kat,
                                                <cite title="Source Title"><a href="https://twitter.com/katchristofer">@katchristofer</a></cite>
                                            </footer>
                                        </blockquote>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 10px;">
            <div class="col-lg-12 d-flex justify-content-center" style="background-color: #37474F; padding: 20px;">
                <a href="index.php#top" style="color: white;"> Back to Top</a>
            </div>
        </div>
        <footer class="page-footer font-small unique-color-dark pt-0 text-white" style="background-color:#1A237E;">
            
            <div style="background-color: #1A237E;">
                <div class="container">
                    <div class="row py-4 d-flex align-items-center">
                        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                            <h6 class="mb-0 white-text">Get connected with us on social networks!</h6>
                        </div>
                        <div class="col-md-6 col-lg-7 text-center text-md-right">
                            <a class="fb-ic ml-0" href="#">
                                <i class="fa fa-facebook white-text mr-lg-4"> </i>
                            </a>
                            <a class="tw-ic" href="#">
                                <i class="fa fa-twitter white-text mr-lg-4"> </i>
                            </a>
                            <a class="gplus-ic" href="#">
                                <i class="fa fa-google-plus white-text mr-lg-4"> </i>
                            </a>
                            <a class="li-ic" href="#">
                                <i class="fa fa-linkedin white-text mr-lg-4"> </i>
                            </a>
                            <a class="ins-ic" href="#">
                                <i class="fa fa-instagram white-text mr-lg-4"> </i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="background-color:#1A237E;">
                <div class="col-lg-12">
                    <center>
                        <hr class="hr-main" width="95%" style="color:white; background-color: white;">
                    </center>
                </div>
            </div>
            <div class="container mt-5 mb-4 text-center text-md-left" >
                <div class="row mt-3">
                    <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
                        <h6 class="text-uppercase font-weight-bold">
                            <strong>Company name</strong>
                        </h6>
                        <hr class="accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: white;">
                        <p>BuyM8 is an electronic commerce company headquartered in Bengaluru, India. It was founded in October 2007 by Yash Dave
                            and Huzefa MH.</p>
                        </div>
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                            <h6 class="text-uppercase font-weight-bold">
                                <strong>Products</strong>
                            </h6>
                            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: white;">
                            <p>
                                <a href="#!">BuyM8 Prime</a>
                            </p>
                            <p>
                                <a href="#!">BuyM8 Music</a>
                            </p>
                            <p>
                                <a href="#!">BuyM8 Logistics</a>
                            </p>
                            <p>
                                <a href="#!">BuyM8 Edu</a>                        
                            </p>
                        </div>
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                            <h6 class="text-uppercase font-weight-bold">
                                <strong>Useful links</strong>
                            </h6>
                            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: white;">
                            <p>
                                <a href="#!">Your Account</a>
                            </p>
                            <p>
                                <a href="#!">Become an Affiliate</a>
                            </p>
                            <p>
                                <a href="#!">Shipping Rates</a>
                            </p>
                            <p>
                                <a href="#!">Help</a>
                            </p>
                        </div>
                        <div class="col-md-4 col-lg-3 col-xl-3">
                            <h6 class="text-uppercase font-weight-bold">
                                <strong>Contact</strong>
                            </h6>
                            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: white;">
                            <p>
                                <i class="fa fa-home mr-3"></i> Bengaluru, Karnataka, India
                            </p>
                            <p>
                                <i class="fa fa-envelope mr-3"></i> queries@BuyM8.com
                            </p>
                            <p>
                                <i class="fa fa-phone mr-3"></i> + 91 2341 5671 88
                            </p>
                            <p>
                                <i class="fa fa-print mr-3"></i> + 91 2341 5671 89
                            </p>
                        </div>
                    </div>
                </div>
                <div class="footer-copyright py-3 text-center">
                    © 2018 Copyright:
                    <a href="#">
                        <strong> BuyM8.com</strong>
                    </a>
                </div>
            </footer>
        </div>
    </body>
    
    </html>