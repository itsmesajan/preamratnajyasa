<header class="header_area header_black">
    <!-- header top starts -->
    <div class="header_top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="social_icone">
                        <ul>
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                            <li><a href="#"><i class="ion-social-linkedin"></i></a></li>
                            <li><a href="#"><i class="ion-social-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="top_right text-right">
                        <ul>
                            <li class="language">
                                <a href="#">English</a>
                            </li>
                            <li class="currency">
                                <a href="#">NRP</a>
                            </li>
                            <?php
                            if (!$_SESSION['loggedin']) {
                            ?>
                                <li class="signup">
                                    <a href="signup.php">signup</a>
                                </li>
                            <?php
                            }
                            ?>
                            <?php
                            if (!$_SESSION['loggedin']) {
                            ?>
                                <li class="Login">
                                    <a href="login.php">Login</a>
                                </li>
                            <?php
                            } else {
                            ?>
                                <li class="top_links">
                                    <a href="#">My Account <i class="ion-chevron-down"></i></a>
                                    <ul class="dropdown_links">
                                        <li><a href="#">Checkout</a></li>
                                        <li class="Login">
                                            <a href="settings.php">Account</a>
                                        </li>
                                        <li><a href="cart.html">Shopping Cart</a></li>
                                        <!-- <li><a href="#">Wishlist</a></li> -->
                                        <?php
                                        if ($_SESSION['loggedin']) {
                                        ?>
                                            <li class="signup">
                                                <a href="logout_script.php">logout</a>
                                            </li>
                                        <?php
                                        }
                                        ?>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header top ends -->

    <!-- header middle starts -->
    <div class="header_middel">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-5">
                    <div class="home_contact">
                        <div class="contact_icone">
                            <img src="images/icon/icon_phone.png" alt="">
                        </div>
                        <div class="contact_box">
                            <p>Inquiry / Helpline : <a href="tel: 1234567894">1234567894</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 col-4">
                    <div class="logo">
                        <a href="index.php"><img src="logo/logo.png" alt=""></a>
                    </div>
                </div>

                <div class="col-lg-5 col-md-7 col-6">
                    <div class="middel_right">
                        <div class="search_btn">
                            <a href="#"><i class="ion-ios-search-strong"></i></a>
                            <div class="dropdown_search">
                                <form action="#">
                                    <input type="text" placeholder="Search Product ....">
                                    <button type="submit"><i class="ion-ios-search-strong"></i></button>
                                </form>
                            </div>
                        </div>
                        <!-- <div class="wishlist_btn">
                            <a href="#"><i class="ion-heart"></i></a>
                        </div> -->
                        <div class="cart_link">
                            <a href="#"><i class="ion-android-cart"></i><span class="cart_text_quantity">Rs.
                                    67,598</span><i class="ion-chevron-down"></i></a>
                            <span class="cart_quantity">2</span>

                            <!-- mini cart -->
                            <div class="mini_cart">
                                <div class="cart_close">
                                    <div class="cart_text">
                                        <h3>cart</h3>
                                    </div>
                                    <div class="mini_cart_close">
                                        <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                                    </div>
                                </div>
                                <div class="cart_item">
                                    <div class="cart_img">
                                        <a href="#"><img src="images/nav-product/product.jpg" alt=""></a>
                                    </div>
                                    <div class="cart_info">
                                        <a href="#">Earings</a>
                                        <span class="quantity">Qty : 1</span>
                                        <span class="price_cart">Rs. 54,599</span>
                                    </div>
                                    <div class="cart_remove">
                                        <a href="#"><i class="ion-android-close"></i></a>
                                    </div>
                                </div>
                                <div class="cart_item">
                                    <div class="cart_img">
                                        <a href="#"><img src="images/nav-product/product2.jpg" alt=""></a>
                                    </div>
                                    <div class="cart_info">
                                        <a href="#">Bracelet</a>
                                        <span class="quantity">Qty : 1</span>
                                        <span class="price_cart">Rs. 12,999</span>
                                    </div>
                                    <div class="cart_remove">
                                        <a href="#"><i class="ion-android-close"></i></a>
                                    </div>
                                </div>
                                <div class="cart_total">
                                    <span>Subtotal : </span>
                                    <span>Rs. 67,598</span>
                                </div>
                                <div class="mini_cart_footer">
                                    <div class="cart_button view_cart">
                                        <a href="cart.php">View Cart</a>
                                    </div>
                                    <div class="cart_button checkout">
                                        <a href="#" class="active">Checkout</a>
                                    </div>
                                </div>
                            </div>
                            <!-- mini cart ends  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- header middle ends -->

    <!-- header bottom starts -->

    <div class="header_bottom sticky-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="main_menu_inner">
                        <div class="logo_sticky">
                            <a href="#"><img src="logo/logo.png" alt="logo"></a>
                        </div>
                        <div class="main_menu">
                            <nav>
                                <ul>
                                    <li class="active">
                                        <a href="#">Home <i class="ion-chevron-down"></i></a>
                                        <ul class="sub_menu">
                                            <li><a href="#">Banner</a></li>
                                            <li><a href="#">Featured</a></li>
                                            <li><a href="#">Collection</a></li>
                                            <li><a href="#">Best Selling</a></li>
                                            <li><a href="#">News</a></li>
                                            <li><a href="#">Blog</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="product.php">Product</a>
                                    </li>
                                    <li><a href="#">About Us</a></li>
                                    <li>
                                        <a href="#">Special Collection <i class="ion-chevron-down"></i></a>
                                        <ul class="sub_menu pages">
                                            <li><a href="#">Gemstone</a></li>
                                            <li><a href="#">Gold</a></li>
                                            <li><a href="#">Rose Gold</a></li>
                                            <li><a href="#">Silver</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header bottom ends -->
</header>