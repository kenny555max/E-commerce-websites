<?php 
    session_start(); 
    ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Website</title>
    <!-- links -->
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/font-awesome.min.css">
    <link rel="stylesheet" href="dist/css/themify-icons.css">
    <link rel="stylesheet" href="dist/css/jquery-ui.min.css">
    <link rel="stylesheet" href="dist/css/owl.carousel.min.css">
    <link rel="stylesheet" href="dist/css/main.css">
    <style>
        .shop-contents .container .left-content ul{
            padding: 0 20px;
            line-height: 2;
            list-style: none;
        }
        .shop-contents .container .left-content a{
            color: #000;
            text-decoration: none;
        }
        .shop-contents .container .left-content .brand input{
            border: 0;
            display: none;
            background-color: transparent;
        }
        .shop-contents .container .left-content .brand label{
            display: block;
            position: relative;
            padding-left: 30px;
        }
        .shop-contents .container .left-content .brand #checkmark{
            width: 15px;
            height: 15px;
            border: 1px solid #000;
            border-radius: 2px;
            position: absolute;
            left: 5px;
            top: 5px;
        }
        .shop-contents .container .left-content .brand input:checked ~ #checkmark{
            background-color: #ffa500;
        }
        .shop-contents .container .left-content .brand #checkmark:after{
            left: 2px;
            top: 2px;
            border: solid #fff;
            border-width: 2px 2px 0 0;
            width: 9px;
            height: 6px;
            content: "";
            position: absolute;
            transform: rotate(127deg);
        }
        .shop-contents .container .left-content h3{
            padding: 20px 0;
            font-size: 1.5rem;
        }
        .shop-contents .container .left-content .size label input{
            display: none;
            background-color: transparent;
            border: 0;
        }
        .shop-contents .container .left-content .size label input:checked ~ .checkmark-size{
            background-color: #000;
            color: #fff;
        }
        .shop-contents .container .left-content .size label .checkmark-size{
            padding: 8px 15px;
            border: 1px solid lightgrey;
        }
        .shop-contents .container .left-content .tags .tag-list{
            display: flex;
            flex-wrap: wrap;
        }
        .shop-contents .container .left-content .tags ul.tag-list li{
            margin: 10px;
            border: 1px solid lightgrey;
        }
    </style>
    <style>
        .cart{
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 20px;
        }
        @media (max-width: 767px) {
            .cart{
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 500px) {
            .cart{
                grid-template-columns: repeat(1, 1fr);
            }
        }
        .cart .cart-items .cart-img{
            height: 300px;
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }
        .cart .cart-items .cart-img-text{
            text-align: center;
            padding: 20px 0;
        }
        .cart .cart-items .cart-img-text .item_price{
            color: #ffa500;
        }
        .cart .cart-items .cart-img-text .item_price span{
            color: lightgrey;
        }
        .cart .cart-items .cart-img{
            position: relative;
            overflow: hidden;
        }
        .cart .cart-items .cart-img .view{
            position: absolute;
            bottom: 0;
            height: 40px;
            width: 100%;
            right: 5px;
            left: 5px;
            display: flex;
            transform: translateY(100px);
            transition: all 0.5s ease-in-out;
        }
        .cart .cart-items:hover .cart-img .view{
            transform: translateY(0);
        }
        .cart .cart-items .cart-img .view p{
            background-color: #ffa500;
            height: 40px;
            flex-basis: 55%;
            color: #fff;
            font-weight: 600;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 5px;
        }
        .cart .cart-items .cart-img .view p i{
            margin-right: 5px;
        }
        .cart .cart-items .cart-img .view .fa-shopping-bag,
        .cart .cart-items .cart-img .view .fa-street-view{
            flex-basis: 20%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #000;
            background-color: #fff;
            height: 40px;
        }
    </style>

    <?php
        include "controller/function.php";
    ?>
</head>
<body>
<header>
        <!-- top-header -->
        <section class="top-header border-bottom">
            <div class="col-lg-12">
                <div class="container p-0">
                    <div class="row m-0">
                        <div class="col-lg-6 p-0">
                            <div class="left-topheader">
                                <ul class="list-unstyled d-flex mb-0">
                                    <li class="d-flex border-right">
                                        <i class="fa fa-envelope mr-2 mt-1"></i>
                                        <p>hello.colorlib@gmail.com</p>
                                    </li>
                                    <li class="d-flex border-right">
                                        <i class="fa fa-phone mr-2 mt-1"></i>
                                        <p>+234 7065539202</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 p-0">
                            <div class="right-topheader mb-0">
                                <div class="row m-0">
                                    <div class="social-links border-right">
                                        <ul class="list-unstyled mb-0 d-flex">
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-linkedin"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-pinterest"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="language border-right p-2">
                                        <select class="language_drop border-0" name="countries" id="countries">
                                            <option value="'yt'" data-image="images/flag/flag-1.jpg" data-title="English">English</option>
                                            <option value="'yu'" data-image="img/flag-2.jpg" data-title="Germany">Germany</option>
                                            <option value="'yy'" data-image="" data-title="Korean">Korean</option>
                                            <option value="'yy'" data-image="" data-title="Chinese">Chinese</option>
                                        </select>
                                    </div>
                                    <div class="login">
                                        <li class="list-unstyled pt-2 pl-2 d-flex">
                                            <i class="fa fa-user mt-1 mr-2"></i>
                                            <p>Login</p>
                                        </li>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- top-header ends -->

        <!-- middle header -->
        <section class="middle-header">
            <div class="container">
                <div class="products-info d-flex justify-content-between">
                    <div class="navigation-menu p-0 bg-warning position-absolute">
                        <div class="menu-icon d-flex">
                            <p>MENU</p>
                            <p class="ml-2">
                                <i class="fa fa-navicon"></i>
                            </p>
                        </div>
                    </div>
                    <div class="logo mt-2">
                        <img src="images/logo/logo.png" alt="">
                    </div>

                    <div class="categories border d-flex">
                        <h5 class="border-right">
                            <span>All Catogories</span>
                            <i class="fa fa-angle-down ml-4"></i>
                        </h5>

                        <form class="d-flex">
                            <input type="text" class="form-control" placeholder="What do you need?">
                            <button type="button" class="btn btn-warning text-white">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                    </div>

                    <div class="cart-details mt-2 d-flex">
                        <div class="wishlist mr-3">
                            <h5>
                                <a href="wishlist.php" class="text-dark">
                                    <i class="fa fa-heart"></i>
                                </a>
                                <span class="wishlist-item"><?php echo isset($_SESSION['id']) ? count($cart->selectWishlist($_SESSION['id'])) : "0" ?></span>
                            </h5>
                        </div>
                        <div class="cart mr-3">
                            <h5 class="position-relative">
                                <a href="shopping-cart.php" class="text-dark">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                                <span class="cart-item"><?php echo isset($_SESSION['id']) ? count($cart->selectCart($_SESSION['id'])) : "0" ?></span>
                            </h5>
                        </div>
                        <div class="subtotal">
                            <h5 class="price-subtotal"></h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- middle header ends -->


        <!-- bottom header -->
        <section class="bottom-header">
            <div class="container p-0">
                <div class="departments-links text-white col-lg-3 col-md-4 col-sm-5 d-flex align-items-center justify-content-between">
                    <i class="fa fa-navicon"></i>
                    <h6>ALL DEPARTMENTS</h6>
                    <i class="fa fa-angle-down"></i>
    
                    <ul class="nav-list position-absolute" id="depts">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">Women's clothing</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Men's clothing</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Kid's clothing</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Underwear</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Brand fashion</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Accessories/Shoes</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Luxury Brands</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Brand Outdoor Apparel</a>
                        </li>
                    </ul>
                </div>
                <div class="info-list">
                    <ul class="nav-list" id="port-links">
                        <li class="nav-item active">
                            <?php
                                if (!isset($_SESSION['id'])) {
                                    echo '<a href="index.php" class="nav-link">home</a>';
                                }else{
                                    echo '<a href="index.php?user_id='.$_SESSION['id'].'" class="nav-link">home</a>';
                                }
                            ?>
                        </li>
                        <li class="nav-item">
                                <?php
                                    if (!isset($_SESSION['id'])) {
                                        echo '<a href="shop.php" class="nav-link">shop</a>';
                                    }else{
                                        echo '<a href="shop.php?user_id='.$_SESSION['id'].'" class="nav-link">shop</a>';
                                    }
                                ?>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link">collection</a>
                            <ul class="nav-list" id="dropdown-menu">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Women's</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Men's</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Kid's</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">contact</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link">pages</a>
                            <ul class="nav-list" id="dropdown-menu">
                                <li class="nav-item">
                                    <a href="blog-details.php" class="nav-link">Blog Details</a>
                                </li>
                                <li class="nav-item">
                                    <a href="shopping-cart.php" class="nav-link">Shopping Cart</a>
                                </li>
                                <li class="nav-item">
                                    <a href="checkout.php" class="nav-link">Checkout</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#faq.php" class="nav-link">Faq</a>
                                </li>
                                <li class="nav-item">
                                    <a href="register.php" class="nav-link">Register</a>
                                </li>
                                <li class="nav-item">
                                    <a href="login.php" class="nav-link">Login</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- bottom header ends -->
    </header>
