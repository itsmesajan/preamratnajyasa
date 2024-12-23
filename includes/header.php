<?php
require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('locationS: index.php');
}
?>
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
                                        <li><a href="cart.php">Shopping Cart</a></li>
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
                            <p>Inquiry / Helpline : <a href="tel: +977 981-8695679">+977 981-8695679</a></p>
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
                        <?php
                        $sum = 0;
                        $id = '';
                        $user_id = !empty($_SESSION['user_id']) ? $_SESSION['user_id'] : '';
                        $query = "SELECT items.price AS Price, items.id As id, items.name AS Name FROM user_item JOIN items ON user_item.item_id = items.id WHERE user_item.user_id='$user_id' and `status`=1";
                        $result = mysqli_query($con, $query) or die($mysqli_error($con));
                        $cart_items = mysqli_num_rows($result);
                        $cart_product_item = '';
                        if (mysqli_num_rows($result) >= 1) {
                            while ($row = mysqli_fetch_array($result)) {
                                $sum += $row["Price"];
                                $cart_product_item .= '
                                <div class="cart_item">
                                    <div class="cart_img">
                                        <a href="#"><img src="images/nav-product/product.jpg" alt=""></a>
                                    </div>
                                    <div class="cart_info">
                                        <a href="#">' . $row["Name"] . '</a>
                                        <span class="price_cart">Rs. ' . $row["Price"] . ' </span>
                                    </div>
                                    <div class="cart_remove">
                                        <a href="cart-remove.php?id=' . $row['id'] . '"><i class="ion-android-close"></i></a>
                                    </div>
                                </div>
                                ';
                            }
                        }
                        ?>
                        <div class="cart_link">
                            <a href="#"><i class="ion-android-cart"></i><span class="cart_text_quantity">Rs.<?php echo $sum ?></span><i class="ion-chevron-down"></i></a>
                            <span class="cart_quantity"><?= $cart_items ?></span>

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
                                <?= $cart_product_item ?>

                                <div class="cart_total">
                                    <span>Subtotal : </span>
                                    <span>Rs. <?php echo $sum ?></span>
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
                                    <?php
                                    $pathInfo = $_SERVER['REQUEST_URI'];
                                    $segments = explode('/', trim($pathInfo, '/')); // e.g., "/category/article-title"
                                    $path = end($segments);
                                    ?>


                                    <li class="<?php echo ($path == "index.php" ? "active" : "") ?>">
                                        <a href="index.php">Home</a>
                                    </li>
                                    <li class="<?php echo ($path == "product.php" ? "active" : "") ?>">
                                        <a href="product.php">Product</a>
                                    </li>
                                    <li class="<?php echo ($path == "aboutus.php" ? "active" : "") ?>">
                                        <a href="aboutus.php">About Us</a>
                                    </li>
                                    <li class="<?php echo ($path == "contactus.php" ? "active" : "") ?>">
                                        <a href="contactus.php">Contact Us</a>
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