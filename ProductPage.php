<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    <head>
        
        <title>Bootstrap Example</title>
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
        <link rel="icon" href="images/logo.png">
        <script src="js/custom.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="css/prodPage.css">
    </head>
    
    <body>
        <div class="container-fluid">
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
            <button type="button" class="btn btn-dark" id="topBtn">
                <img src="images/upArr.png" alt="upArrow">
            </button>
            <div class="row">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Electronics</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Personal Electronics</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Mobiles</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Apple</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                iPhone X 64 GB
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4" style="padding:100px 0px;">
                    <div class="imgcarousel">
                        <div class="imgcarousel-cell">
                            <img src="images/iPhoneX1.png" alt="orange tree" />
                        </div>
                        <div class="imgcarousel-cell">
                            <img src="images/iPhoneX2.jpg" alt="One World Trade" />
                        </div>
                        <div class="imgcarousel-cell">
                            <img src="images/iPhoneX3.png" alt="drizzle" />
                        </div>
                        <div class="imgcarousel-cell">
                            <img src="images/iPhoneX4.jpg" alt="cat nose" />
                        </div>
                    </div>                   
                </div>
                <div class="col-lg-8">
                    <div style="margin-left:10px;" class="l-left">
                        <div class="row">
                            <div class="col-lg-12">
                                <h1 class="display-4 text-under">iPhone X 64GB
                                </h1>
                                <div style="margin-left:10px;">
                                    <select class="rater">
                                        <option value="4">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h3 style="padding-left:10px;">Price:
                                            <small class="text-muted">₹101337 -
                                                <strong> Free Delivery </strong>
                                                <a href="#">Details</a>
                                            </small>
                                        </h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12" style="padding-left:10px;">
                                        <h4 class="text-success font-weight-normal">Only 5 left in Stock</h4>
                                        <strong>EMI</strong> Eligible
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="row">
                                    <div class="col-sm-12" style="margin:5px 0px;">
                                        <button type="button" class="btn btn-outline-primary btn-lg float-right" style="width: 250px;">Add to Cart</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12" style="margin:5px 0px;">
                                        <button type="button" class="btn btn-outline-primary btn-lg float-right" style="width: 250px;">Buy Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12"  style="padding-left:10px;">
                                <p class="lead">
                                    Sold by <a href="#">Shyam Tech</a>  (4.7 out of 5 | 84 ratings) and Garunteed by BuyM8. Gift-wrap available.
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12"  style="padding-left:10px;">
                                <p class="text-justify">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi laudantium expedita voluptas labore, repellat ratione
                                    corporis nulla aut? Incidunt eius cupiditate eveniet laudantium dignissimos culpa quis, quibusdam ipsa aut!
                                </p>    
                                <ul>
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, error.</li>
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, error.</li>
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, error.</li>
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, error.</li>
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, error.</li>
                                </ul>
                                <p class="text-justify">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, consectetur reprehenderit eos aut provident at beatae ex
                                    iusto soluta perspiciatis quasi placeat qui laudantium consequatur porro facilis? Labore assumenda inventore officiis? Rerum
                                    quasi mollitia ab nesciunt pariatur beatae? Obcaecati dolore in est commodi veritatis voluptatum, a debitis assumenda natus.
                                    A, facilis asperiores beatae nulla enim molestiae ex ullam laboriosam ratione doloribus quaerat, recusandae dolorum, hic
                                    consectetur rerum consequatur magnam itaque excepturi doloremque natus. Aut enim tenetur temporibus totam error amet quidem
                                    culpa, hic id minus incidunt iusto doloremque dolorem quam asperiores porro modi aliquam ex dolorum delectus aliquid minima
                                    impedit?
                                </p>
                                <button type="button" class="btn btn-outline-info" disabled>Limited Quantity</button>
                                <button type="button" class="btn btn-outline-danger" disabled>No Refund Available</button>
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
                <div class="col-lg-12">
                    <h1 class="display-3 text-under">Reviews
                    </h1>
                    <br>
                    <div class="row">
                        <div class="col-sm-1 d-flex justify-content-center">
                            <img src="images/person.png" alt="User" class="border-primary rounded-circle" height="64px;">
                        </div>
                        <div class="col-sm-11">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h4>
                                        <small class="text-muted">
                                            User ABC
                                        </small>
                                    </h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
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
                                <div class="col-sm-12">
                                    15 July, 2017
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <strong style="color: #2196F3"> Verified Purchase</strong>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos illo eveniet eius iste dolorum illum ipsa. Nostrum hic provident mollitia repudiandae, itaque saepe officiis suscipit esse. Sunt nam quae possimus!
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-1 d-flex justify-content-center">
                            <img src="images/person.png" alt="User" class="border-primary rounded-circle" height="64px;">
                        </div>
                        <div class="col-sm-11">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h4>
                                        <small class="text-muted">
                                            User ABC
                                        </small>
                                    </h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
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
                                <div class="col-sm-12">
                                    15 July, 2017
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <strong style="color: #2196F3"> Verified Purchase</strong>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos illo eveniet eius iste dolorum illum ipsa. Nostrum hic provident
                                    mollitia repudiandae, itaque saepe officiis suscipit esse. Sunt nam quae possimus!
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-1 d-flex justify-content-center">
                            <img src="images/person.png" alt="User" class="border-primary rounded-circle" height="64px;">
                        </div>
                        <div class="col-sm-11">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h4>
                                        <small class="text-muted">
                                            User ABC
                                        </small>
                                    </h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
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
                                <div class="col-sm-12">
                                    15 July, 2017
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <strong style="color: #2196F3"> Verified Purchase</strong>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos illo eveniet eius iste dolorum illum ipsa. Nostrum hic provident
                                    mollitia repudiandae, itaque saepe officiis suscipit esse. Sunt nam quae possimus!
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-1 d-flex justify-content-center">
                            <img src="images/person.png" alt="User" class="border-primary rounded-circle" height="64px;">
                        </div>
                        <div class="col-sm-11">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h4>
                                        <small class="text-muted">
                                            User ABC
                                        </small>
                                    </h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
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
                                <div class="col-sm-12">
                                    15 July, 2017
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <strong style="color: #2196F3"> Verified Purchase</strong>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos illo eveniet eius iste dolorum illum ipsa. Nostrum hic provident
                                    mollitia repudiandae, itaque saepe officiis suscipit esse. Sunt nam quae possimus!
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top:25px;">
                        <div class="col-lg-1">

                        </div>
                        <div class="col-lg-11">
                            <h4><a href="#">View More <img src="images/down.png" alt="down"></a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="page-footer font-small unique-color-dark pt-0 text-white" style="background-color:#1A237E; margin-top:25px;">
                
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
                <div class="container mt-5 mb-4 text-center text-md-left">
                    <div class="row mt-3">
                        <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
                            <h6 class="text-uppercase font-weight-bold">
                                <strong>Company name</strong>
                            </h6>
                            <hr class="accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: white;">
                            <p>BuyM8 is an electronic commerce company headquartered in Bengaluru, India. It was founded in October 2007
                                by Yash Dave and Huzefa MH.</p>
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