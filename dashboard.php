<!DOCTYPE html>
<html lang="en">

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
    <link rel="stylesheet" href="css/custom.css">
    <script type="text/javascript" src="js/custom.js"></script>
    <link rel="icon" href="images/logo.png">
    <style>
        .container-fluid{
            background-color: white;
        }
        td{
            border:0px !important;
        }
        th{
            border: 0px !important;
        }
    </style>
</head>

<body>
    <div class="bg-white">
        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 bg-white">
            <nav class="my-0 mr-md-auto">
                <a class="navbar-brand" href="index.php">BuyM8</a>
            </nav>
            <nav class="my-2 my-md-0 mr-md-3">
            </nav>
            <a class="btn btn-outline-primary" href="#">Sign In</a>
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
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </div>
    <button type="button" class="btn btn-dark" id="topBtn"><img src="images/upArr.png" alt="upArrow"></button>
    <div class="container-fluid" style="margin-top:25px;">
        <div class="row">
            <div class="col-lg-3">
                <img src="images/personBig.png" alt="User" class="mw-100">
            </div>
            <div class="col-lg-9 l-left">
                <h1 class="display-1" style="padding-left: 25px;">
                    User Name
                </h1>
                <center>
                    <hr class="hr-main" width="95%">
                </center>
                <table class="table">
                    <tbody>
                        <tr>
                            <th scope="row">Name</th>
                            <td>User</td>
                        </tr>
                        <tr>
                            <th scope="row">E - Mail</th>
                            <td>User@emailer.com</td>
                        </tr>
                        <tr>
                            <th scope="row">Change Password</th>
                            <td>
                                <form class="form-inline">
                                    <div class="form-group mr-sm-3 mb-2">
                                        <label for="inputPassword2" class="sr-only">Password</label>
                                        <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
                                    </div>
                                    <button type="submit" class="btn btn-primary mb-2">Confirm identity</button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Address</th>
                            <td>Vasna - Bhayli Main Rd, Bhayli, Vadodara, Gujarat 391410</td>
                        </tr>
                        <tr>
                            <th scope="row">Phone Number</th>
                            <td>+91 9727835873</td>
                        </tr>
                    </tbody>
                </table>
                <h1 class="display-4" style="padding-left: 25px;">
                    WishList
                </h1>
                <center>
                    <hr class="hr-main" width="95%">
                </center>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Product</th>
                            <th scope="col"> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>
                                <img src="images/placeholder256.png" alt="img">
                            </td>
                            <td>
                                <h4>
                                    <a href="#">Product 1</a>
                                    <small class="text-muted">₹190</small>
                                </h4>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque temporibus, rerum mollitia debitis obcaecati suscipit
                                quis, possimus officia esse sequi sit necessitatibus ullam libero quasi velit nulla aliquid, animi eaque.
                                Excepturi velit fugit nihil obcaecati minus non soluta neque cum accusantium magni, perferendis nesciunt
                                provident doloremque consequatur recusandae at quisquam alias praesentium, inventore odit eius unde est natus?
                                Magni dolor sequi praesentium asperiores odit molestiae, atque magnam eius dicta deleniti repellendus, iste
                                porro recusandae, tempore a aspernatur quod laborum nulla aperiam? Ab quaerat sed eius laborum at vero maxime
                                aliquid deleniti nobis, blanditiis voluptate officia id dicta, maiores porro inventore.
                                <br>
                                <br>
                                <button type="button" class="btn btn-outline-danger">Remove Item</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>
                                <img src="images/placeholder256.png" alt="img">
                            </td>
                            <td>
                                <h4>
                                    <a href="#">Product 2</a>
                                    <small class="text-muted">₹190</small>
                                </h4>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque temporibus, rerum mollitia debitis obcaecati suscipit
                                quis, possimus officia esse sequi sit necessitatibus ullam libero quasi velit nulla aliquid, animi eaque.
                                Excepturi velit fugit nihil obcaecati minus non soluta neque cum accusantium magni, perferendis nesciunt
                                provident doloremque consequatur recusandae at quisquam alias praesentium, inventore odit eius unde est natus?
                                Magni dolor sequi praesentium asperiores odit molestiae, atque magnam eius dicta deleniti repellendus, iste
                                porro recusandae, tempore a aspernatur quod laborum nulla aperiam? Ab quaerat sed eius laborum at vero maxime
                                aliquid deleniti nobis, blanditiis voluptate officia id dicta, maiores porro inventore.
                                <br>
                                <br>
                                <button type="button" class="btn btn-outline-danger">Remove Item</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>
                                <img src="images/placeholder256.png" alt="img">
                            </td>
                            <td>
                                <h4>
                                    <a href="#">Product 3</a>
                                    <small class="text-muted">₹190</small>
                                </h4>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque temporibus, rerum mollitia debitis obcaecati suscipit
                                quis, possimus officia esse sequi sit necessitatibus ullam libero quasi velit nulla aliquid, animi eaque.
                                Excepturi velit fugit nihil obcaecati minus non soluta neque cum accusantium magni, perferendis nesciunt
                                provident doloremque consequatur recusandae at quisquam alias praesentium, inventore odit eius unde est natus?
                                Magni dolor sequi praesentium asperiores odit molestiae, atque magnam eius dicta deleniti repellendus, iste
                                porro recusandae, tempore a aspernatur quod laborum nulla aperiam? Ab quaerat sed eius laborum at vero maxime
                                aliquid deleniti nobis, blanditiis voluptate officia id dicta, maiores porro inventore.
                                <br>
                                <br>
                                <button type="button" class="btn btn-outline-danger">Remove Item</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <footer class="page-footer font-small unique-color-dark pt-0 text-white" style="background-color:#1A237E; margin-top: 25px;">
            
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