<?php
include('includes/common.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prem Ratna Jyasa Pasa:</title>
  <link rel="shortcut icon" href="logo/logo.jpg" type="image/x-icon">
  <!-- CSS only -->
  <?php
  include('includes/style-links.php');
  ?>
</head>

<body>
  <div class="home_black_version">
    <?php
    include('includes/header.php');
    include 'includes/check-if-added.php';
    ?>

    <section class="product_section p_section1 product_black_section" id="allProducts">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="product_area">
              <div class="product_tab_button">
                <ul class="nav" role="tablist">
                  <li>
                    <a href="#featured" class="active" data-toggle="tab" role="tab"
                      aria-controls="featured" aria-selected="true">Featured</a>
                  </li>
                  <li>
                    <a href="#arrivals" data-toggle="tab" role="tab" aria-controls="arrivals"
                      aria-selected="false">New Arrivals</a>
                  </li>
                  <li>
                    <a href="#onsale" data-toggle="tab" role="tab" aria-controls="onsale"
                      aria-selected="false">On-Sale</a>
                  </li>

                </ul>
              </div>
              <div class="tab-content">
                <div class="tab-pane fade show active" id="featured" role="tabpane1">
                  <div class="product_container">
                    <div class="custom-row product_column3">
                      <div class="custom-col-5">
                        <div class="single_product">
                          <div class="product_thumb">
                            <a href="#" class="primary_img"><img src="images/product/1.jpg"
                                alt="product1"></a>
                            <a href="#" class="secondary_img"><img
                                src="images/product/2.jpg" alt="product1"></a>
                            <div class="quick_button">
                              <a href="#" data-toggle="modal" data-target="#modal_box"
                                data-placement="top"
                                data-original-title="quick view">Quick View</a>
                            </div>
                          </div>
                          <div class="product_content">
                            <div class="tag_cate">
                              <a href="#">Ring, Necklace</a>
                              <a href="#">Earrings</a>
                            </div>
                            <h3><a href="#">Necklace</a></h3>
                            <div class="price_box">
                              <span class="old_price">Rs. 45654</span>
                              <span class="current_price">Rs. 44015</span>
                            </div>
                            <div class="product_hover">
                              <div class="product_ratings">
                                <ul>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                </ul>
                              </div>
                              <div class="product_desc">
                                <p>This is a gold ring with diamond and Lorem ipsum
                                  dolor sit amet.</p>
                              </div>
                              <div class="action_links">
                                <ul>
                                  <li><a href="#" data-placement="top"
                                      title="Add to Wishlist"
                                      data-toggle="tooltip"><span
                                        class="ion-heart"></span></a></li>
                                  <?php if (!isset($_SESSION['email'])) { ?>
                                    <li class="add_to_cart"><a href="login.php" role="button">Buy Now</a></li>
                                    <?php
                                  } else {
                                    // //We have created a function to check whether this particular product is added to cart or not.
                                    if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                      echo '<li class="added_to_cart"><a href="cart.php" class="added_to_cart" disabled>Added to cart</a>';
                                    } else {

                                    ?>
                                      <li class="add_to_cart"><a href="cart-add.php?id=1" name="add" value="add" class="add_to_cart" title="Add to Cart">Add to cart</a></li>
                                  <?php
                                    }
                                  }
                                  ?>
                                  <li><a href="#" title="Compare"><i
                                        class="ion-ios-settings-strong"></i></a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="custom-col-5">
                        <div class="single_product">
                          <div class="product_thumb">
                            <a href="#" class="primary_img"><img src="images/product/3.jpg"
                                alt="product1"></a>
                            <a href="#" class="secondary_img"><img
                                src="images/product/4.jpg" alt="product1"></a>
                            <div class="quick_button">
                              <a href="#" data-toggle="modal" data-target="#modal_box"
                                data-placement="top"
                                data-original-title="quick view">Quick View</a>
                            </div>
                          </div>
                          <div class="product_content">
                            <div class="tag_cate">
                              <a href="#">Ring, Necklace</a>
                              <a href="#">Earrings</a>
                            </div>
                            <h3><a href="#">Earrings</a></h3>
                            <div class="price_box">

                              <span class="current_price">Rs. 45015</span>
                            </div>
                            <div class="product_hover">
                              <div class="product_ratings">
                                <ul>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                </ul>
                              </div>
                              <div class="product_desc">
                                <p>This is a gold ring with diamond and Lorem ipsum
                                  dolor sit amet.</p>
                              </div>
                              <div class="action_links">
                                <ul>
                                  <li><a href="#" data-placement="top"
                                      title="Add to Wishlist"
                                      data-toggle="tooltip"><span
                                        class="ion-heart"></span></a></li>
                                  <?php if (!isset($_SESSION['email'])) { ?>
                                    <li class="add_to_cart"><a href="login.php" role="button">Buy Now</a></li>
                                    <?php
                                  } else {
                                    // //We have created a function to check whether this particular product is added to cart or not.
                                    if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart != 0)
                                      echo '<li class="added_to_cart"><a href="cart.php" class="added_to_cart" disabled>Added to cart</a>';
                                    } else {

                                    ?>
                                      <li class="add_to_cart"><a href="cart-add.php?id=2" name="add" value="add" class="add_to_cart" title="Add to Cart">Add to cart</a></li>
                                  <?php
                                    }
                                  }
                                  ?>
                                  <li><a href="#" title="Compare"><i
                                        class="ion-ios-settings-strong"></i></a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="custom-col-5">
                        <div class="single_product">
                          <div class="product_thumb">
                            <a href="#" class="primary_img"><img src="images/product/5.jpg"
                                alt="product1"></a>
                            <a href="#" class="secondary_img"><img
                                src="images/product/6.jpg" alt="product1"></a>
                            <div class="quick_button">
                              <a href="#" data-toggle="modal" data-target="#modal_box"
                                data-placement="top"
                                data-original-title="quick view">Quick View</a>
                            </div>
                          </div>
                          <div class="product_content">
                            <div class="tag_cate">
                              <a href="#">Ring, Necklace</a>
                              <a href="#">Earrings</a>
                            </div>
                            <h3><a href="#">Bracelet</a></h3>
                            <div class="price_box">
                              <span class="old_price">Rs. 75654</span>
                              <span class="current_price">Rs. 74015</span>
                            </div>
                            <div class="product_hover">
                              <div class="product_ratings">
                                <ul>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                </ul>
                              </div>
                              <div class="product_desc">
                                <p>This is a gold ring with diamond and Lorem ipsum
                                  dolor sit amet.</p>
                              </div>
                              <div class="action_links">
                                <ul>
                                  <li><a href="#" data-placement="top"
                                      title="Add to Wishlist"
                                      data-toggle="tooltip"><span
                                        class="ion-heart"></span></a></li>
                                  <?php if (!isset($_SESSION['email'])) { ?>
                                    <li class="add_to_cart"><a href="login.php" role="button">Buy Now</a></li>
                                    <?php
                                  } else {
                                    // //We have created a function to check whether this particular product is added to cart or not.
                                    if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                      echo '<li class="added_to_cart"><a href="cart.php" class="added_to_cart" disabled>Added to cart</a>';
                                    } else {

                                    ?>
                                      <li class="add_to_cart"><a href="cart-add.php?id=1" name="add" value="add" class="add_to_cart" title="Add to Cart">Add to cart</a></li>
                                  <?php
                                    }
                                  }
                                  ?>
                                  <li><a href="#" title="Compare"><i
                                        class="ion-ios-settings-strong"></i></a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="custom-col-5">
                        <div class="single_product">
                          <div class="product_thumb">
                            <a href="#" class="primary_img"><img src="images/product/7.jpg"
                                alt="product1"></a>
                            <a href="#" class="secondary_img"><img
                                src="images/product/8.jpg" alt="product1"></a>
                            <div class="quick_button">
                              <a href="#" data-toggle="modal" data-target="#modal_box"
                                data-placement="top"
                                data-original-title="quick view">Quick View</a>
                            </div>
                          </div>
                          <div class="product_content">
                            <div class="tag_cate">
                              <a href="#">Ring, Necklace</a>
                              <a href="#">Earrings</a>
                            </div>
                            <h3><a href="#">Bangles</a></h3>
                            <div class="price_box">
                              <span class="old_price">Rs. 45654</span>
                              <span class="current_price">Rs. 44015</span>
                            </div>
                            <div class="product_hover">
                              <div class="product_ratings">
                                <ul>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                </ul>
                              </div>
                              <div class="product_desc">
                                <p>This is a gold ring with diamond and Lorem ipsum
                                  dolor sit amet.</p>
                              </div>
                              <div class="action_links">
                                <ul>
                                  <li><a href="#" data-placement="top"
                                      title="Add to Wishlist"
                                      data-toggle="tooltip"><span
                                        class="ion-heart"></span></a></li>
                                  <?php if (!isset($_SESSION['email'])) { ?>
                                    <li class="add_to_cart"><a href="login.php" role="button">Buy Now</a></li>
                                    <?php
                                  } else {
                                    // //We have created a function to check whether this particular product is added to cart or not.
                                    if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                      echo '<li class="added_to_cart"><a href="cart.php" class="added_to_cart" disabled>Added to cart</a>';
                                    } else {

                                    ?>
                                      <li class="add_to_cart"><a href="cart-add.php?id=1" name="add" value="add" class="add_to_cart" title="Add to Cart">Add to cart</a></li>
                                  <?php
                                    }
                                  }
                                  ?>
                                  <li><a href="#" title="Compare"><i
                                        class="ion-ios-settings-strong"></i></a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="custom-col-5">
                        <div class="single_product">
                          <div class="product_thumb">
                            <a href="#" class="primary_img"><img src="images/product/9.jpg"
                                alt="product1"></a>
                            <a href="#" class="secondary_img"><img
                                src="images/product/10.jpg" alt="product1"></a>
                            <div class="quick_button">
                              <a href="#" data-toggle="modal" data-target="#modal_box"
                                data-placement="top"
                                data-original-title="quick view">Quick View</a>
                            </div>
                          </div>
                          <div class="product_content">
                            <div class="tag_cate">
                              <a href="#">Ring, Necklace</a>
                              <a href="#">Earrings</a>
                            </div>
                            <h3><a href="#">Gemstones</a></h3>
                            <div class="price_box">
                              <span class="old_price">Rs. 45654</span>
                              <span class="current_price">Rs. 44015</span>
                            </div>
                            <div class="product_hover">
                              <div class="product_ratings">
                                <ul>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                </ul>
                              </div>
                              <div class="product_desc">
                                <p>This is a gold ring with diamond and Lorem ipsum
                                  dolor sit amet.</p>
                              </div>
                              <div class="action_links">
                                <ul>
                                  <li><a href="#" data-placement="top"
                                      title="Add to Wishlist"
                                      data-toggle="tooltip"><span
                                        class="ion-heart"></span></a></li>
                                  <?php if (!isset($_SESSION['email'])) { ?>
                                    <li class="add_to_cart"><a href="login.php" role="button">Buy Now</a></li>
                                    <?php
                                  } else {
                                    // //We have created a function to check whether this particular product is added to cart or not.
                                    if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                      echo '<li class="added_to_cart"><a href="cart.php" class="added_to_cart" disabled>Added to cart</a>';
                                    } else {

                                    ?>
                                      <li class="add_to_cart"><a href="cart-add.php?id=1" name="add" value="add" class="add_to_cart" title="Add to Cart">Add to cart</a></li>
                                  <?php
                                    }
                                  }
                                  ?>
                                  <li><a href="#" title="Compare"><i
                                        class="ion-ios-settings-strong"></i></a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="custom-col-5">
                        <div class="single_product">
                          <div class="product_thumb">
                            <a href="#" class="primary_img"><img src="images/product/11.jpg"
                                alt="product1"></a>
                            <a href="#" class="secondary_img"><img
                                src="images/product/12.jpg" alt="product1"></a>
                            <div class="quick_button">
                              <a href="#" data-toggle="modal" data-target="#modal_box"
                                data-placement="top"
                                data-original-title="quick view">Quick View</a>
                            </div>
                          </div>
                          <div class="product_content">
                            <div class="tag_cate">
                              <a href="#">Ring, Necklace</a>
                              <a href="#">Earrings</a>
                            </div>
                            <h3><a href="#">Wedding set</a></h3>
                            <div class="price_box">
                              <span class="old_price">Rs. 45654</span>
                              <span class="current_price">Rs. 44015</span>
                            </div>
                            <div class="product_hover">
                              <div class="product_ratings">
                                <ul>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                </ul>
                              </div>
                              <div class="product_desc">
                                <p>This is a gold ring with diamond and Lorem ipsum
                                  dolor sit amet.</p>
                              </div>
                              <div class="action_links">
                                <ul>
                                  <li><a href="#" data-placement="top"
                                      title="Add to Wishlist"
                                      data-toggle="tooltip"><span
                                        class="ion-heart"></span></a></li>
                                  <?php if (!isset($_SESSION['email'])) { ?>
                                    <li class="add_to_cart"><a href="login.php" role="button">Buy Now</a></li>
                                    <?php
                                  } else {
                                    // //We have created a function to check whether this particular product is added to cart or not.
                                    if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                      echo '<li class="added_to_cart"><a href="cart.php" class="added_to_cart" disabled>Added to cart</a>';
                                    } else {

                                    ?>
                                      <li class="add_to_cart"><a href="cart-add.php?id=1" name="add" value="add" class="add_to_cart" title="Add to Cart">Add to cart</a></li>
                                  <?php
                                    }
                                  }
                                  ?>
                                  <li><a href="#" title="Compare"><i
                                        class="ion-ios-settings-strong"></i></a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="custom-col-5">
                        <div class="single_product">
                          <div class="product_thumb">
                            <a href="#" class="primary_img"><img src="images/product/13.jpg"
                                alt="product1"></a>
                            <a href="#" class="secondary_img"><img
                                src="images/product/14.jpg" alt="product1"></a>
                            <div class="quick_button">
                              <a href="#" data-toggle="modal" data-target="#modal_box"
                                data-placement="top"
                                data-original-title="quick view">Quick View</a>
                            </div>
                          </div>
                          <div class="product_content">
                            <div class="tag_cate">
                              <a href="#">Ring, Necklace</a>
                              <a href="#">Earrings</a>
                            </div>
                            <h3><a href="#">Nose Pin</a></h3>
                            <div class="price_box">
                              <span class="old_price">Rs. 45654</span>
                              <span class="current_price">Rs. 44015</span>
                            </div>
                            <div class="product_hover">
                              <div class="product_ratings">
                                <ul>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                </ul>
                              </div>
                              <div class="product_desc">
                                <p>This is a gold ring with diamond and Lorem ipsum
                                  dolor sit amet.</p>
                              </div>
                              <div class="action_links">
                                <ul>
                                  <li><a href="#" data-placement="top"
                                      title="Add to Wishlist"
                                      data-toggle="tooltip"><span
                                        class="ion-heart"></span></a></li>
                                  <?php if (!isset($_SESSION['email'])) { ?>
                                    <li class="add_to_cart"><a href="login.php" role="button">Buy Now</a></li>
                                    <?php
                                  } else {
                                    // //We have created a function to check whether this particular product is added to cart or not.
                                    if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                      echo '<li class="added_to_cart"><a href="cart.php" class="added_to_cart" disabled>Added to cart</a>';
                                    } else {

                                    ?>
                                      <li class="add_to_cart"><a href="cart-add.php?id=1" name="add" value="add" class="add_to_cart" title="Add to Cart">Add to cart</a></li>
                                  <?php
                                    }
                                  }
                                  ?>
                                  <li><a href="#" title="Compare"><i
                                        class="ion-ios-settings-strong"></i></a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="custom-col-5">
                        <div class="single_product">
                          <div class="product_thumb">
                            <a href="#" class="primary_img"><img src="images/product/15.jpg"
                                alt="product1"></a>
                            <a href="#" class="secondary_img"><img
                                src="images/product/16.jpg" alt="product1"></a>
                            <div class="quick_button">
                              <a href="#" data-toggle="modal" data-target="#modal_box"
                                data-placement="top"
                                data-original-title="quick view">Quick View</a>
                            </div>
                          </div>
                          <div class="product_content">
                            <div class="tag_cate">
                              <a href="#">Ring, Necklace</a>
                              <a href="#">Earrings</a>
                            </div>
                            <h3><a href="#">Diamonds</a></h3>
                            <div class="price_box">
                              <span class="old_price">Rs. 45654</span>
                              <span class="current_price">Rs. 44015</span>
                            </div>
                            <div class="product_hover">
                              <div class="product_ratings">
                                <ul>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                </ul>
                              </div>
                              <div class="product_desc">
                                <p>This is a gold ring with diamond and Lorem ipsum
                                  dolor sit amet.</p>
                              </div>
                              <div class="action_links">
                                <ul>
                                  <li><a href="#" data-placement="top"
                                      title="Add to Wishlist"
                                      data-toggle="tooltip"><span
                                        class="ion-heart"></span></a></li>
                                  <?php if (!isset($_SESSION['email'])) { ?>
                                    <li class="add_to_cart"><a href="login.php" role="button">Buy Now</a></li>
                                    <?php
                                  } else {
                                    // //We have created a function to check whether this particular product is added to cart or not.
                                    if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                      echo '<li class="added_to_cart"><a href="cart.php" class="added_to_cart" disabled>Added to cart</a>';
                                    } else {

                                    ?>
                                      <li class="add_to_cart"><a href="cart-add.php?id=1" name="add" value="add" class="add_to_cart" title="Add to Cart">Add to cart</a></li>
                                  <?php
                                    }
                                  }
                                  ?>
                                  <li><a href="#" title="Compare"><i
                                        class="ion-ios-settings-strong"></i></a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="custom-col-5">
                        <div class="single_product">
                          <div class="product_thumb">
                            <a href="#" class="primary_img"><img src="images/product/17.jpg"
                                alt="product1"></a>
                            <a href="#" class="secondary_img"><img
                                src="images/product/18.jpg" alt="product1"></a>
                            <div class="quick_button">
                              <a href="#" data-toggle="modal" data-target="#modal_box"
                                data-placement="top"
                                data-original-title="quick view">Quick View</a>
                            </div>
                          </div>
                          <div class="product_content">
                            <div class="tag_cate">
                              <a href="#">Ring, Necklace</a>
                              <a href="#">Earrings</a>
                            </div>
                            <h3><a href="#">Ring</a></h3>
                            <div class="price_box">
                              <span class="old_price">Rs. 45654</span>
                              <span class="current_price">Rs. 44015</span>
                            </div>
                            <div class="product_hover">
                              <div class="product_ratings">
                                <ul>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                </ul>
                              </div>
                              <div class="product_desc">
                                <p>This is a gold ring with diamond and Lorem ipsum
                                  dolor sit amet.</p>
                              </div>
                              <div class="action_links">
                                <ul>
                                  <li><a href="#" data-placement="top"
                                      title="Add to Wishlist"
                                      data-toggle="tooltip"><span
                                        class="ion-heart"></span></a></li>
                                  <?php if (!isset($_SESSION['email'])) { ?>
                                    <li class="add_to_cart"><a href="login.php" role="button">Buy Now</a></li>
                                    <?php
                                  } else {
                                    // //We have created a function to check whether this particular product is added to cart or not.
                                    if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                      echo '<li class="added_to_cart"><a href="cart.php" class="added_to_cart" disabled>Added to cart</a>';
                                    } else {

                                    ?>
                                      <li class="add_to_cart"><a href="cart-add.php?id=1" name="add" value="add" class="add_to_cart" title="Add to Cart">Add to cart</a></li>
                                  <?php
                                    }
                                  }
                                  ?>
                                  <li><a href="#" title="Compare"><i
                                        class="ion-ios-settings-strong"></i></a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="custom-col-5">
                        <div class="single_product">
                          <div class="product_thumb">
                            <a href="#" class="primary_img"><img src="images/product/19.jpg"
                                alt="product1"></a>
                            <a href="#" class="secondary_img"><img
                                src="images/product/20.jpg" alt="product1"></a>
                            <div class="quick_button">
                              <a href="#" data-toggle="modal" data-target="#modal_box"
                                data-placement="top"
                                data-original-title="quick view">Quick View</a>
                            </div>
                          </div>
                          <div class="product_content">
                            <div class="tag_cate">
                              <a href="#">Ring, Necklace</a>
                              <a href="#">Earrings</a>
                            </div>
                            <h3><a href="#">Couple Ring</a></h3>
                            <div class="price_box">
                              <span class="old_price">Rs. 45654</span>
                              <span class="current_price">Rs. 44015</span>
                            </div>
                            <div class="product_hover">
                              <div class="product_ratings">
                                <ul>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                </ul>
                              </div>
                              <div class="product_desc">
                                <p>This is a gold ring with diamond and Lorem ipsum
                                  dolor sit amet.</p>
                              </div>
                              <div class="action_links">
                                <ul>
                                  <li><a href="#" data-placement="top"
                                      title="Add to Wishlist"
                                      data-toggle="tooltip"><span
                                        class="ion-heart"></span></a></li>
                                  <?php if (!isset($_SESSION['email'])) { ?>
                                    <li class="add_to_cart"><a href="login.php" role="button">Buy Now</a></li>
                                    <?php
                                  } else {
                                    // //We have created a function to check whether this particular product is added to cart or not.
                                    if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                      echo '<li class="added_to_cart"><a href="cart.php" class="added_to_cart" disabled>Added to cart</a>';
                                    } else {

                                    ?>
                                      <li class="add_to_cart"><a href="cart-add.php?id=1" name="add" value="add" class="add_to_cart" title="Add to Cart">Add to cart</a></li>
                                  <?php
                                    }
                                  }
                                  ?>
                                  <li><a href="#" title="Compare"><i
                                        class="ion-ios-settings-strong"></i></a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="custom-col-5">
                        <div class="single_product">
                          <div class="product_thumb">
                            <a href="#" class="primary_img"><img src="images/product/21.jpg"
                                alt="product1"></a>
                            <a href="#" class="secondary_img"><img
                                src="images/product/22.jpg" alt="product1"></a>
                            <div class="quick_button">
                              <a href="#" data-toggle="modal" data-target="#modal_box"
                                data-placement="top"
                                data-original-title="quick view">Quick View</a>
                            </div>
                          </div>
                          <div class="product_content">
                            <div class="tag_cate">
                              <a href="#">Ring, Necklace</a>
                              <a href="#">Earrings</a>
                            </div>
                            <h3><a href="#">Bracelet</a></h3>
                            <div class="price_box">
                              <span class="old_price">Rs. 45654</span>
                              <span class="current_price">Rs. 44015</span>
                            </div>
                            <div class="product_hover">
                              <div class="product_ratings">
                                <ul>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                </ul>
                              </div>
                              <div class="product_desc">
                                <p>This is a gold ring with diamond and Lorem ipsum
                                  dolor sit amet.</p>
                              </div>
                              <div class="action_links">
                                <ul>
                                  <li><a href="#" data-placement="top"
                                      title="Add to Wishlist"
                                      data-toggle="tooltip"><span
                                        class="ion-heart"></span></a></li>
                                  <?php if (!isset($_SESSION['email'])) { ?>
                                    <li class="add_to_cart"><a href="login.php" role="button">Buy Now</a></li>
                                    <?php
                                  } else {
                                    // //We have created a function to check whether this particular product is added to cart or not.
                                    if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                      echo '<li class="added_to_cart"><a href="cart.php" class="added_to_cart" disabled>Added to cart</a>';
                                    } else {

                                    ?>
                                      <li class="add_to_cart"><a href="cart-add.php?id=1" name="add" value="add" class="add_to_cart" title="Add to Cart">Add to cart</a></li>
                                  <?php
                                    }
                                  }
                                  ?>
                                  <li><a href="#" title="Compare"><i
                                        class="ion-ios-settings-strong"></i></a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="custom-col-5">
                        <div class="single_product">
                          <div class="product_thumb">
                            <a href="#" class="primary_img"><img src="images/product/23.jpg"
                                alt="product1"></a>
                            <a href="#" class="secondary_img"><img
                                src="images/product/24.jpg" alt="product1"></a>
                            <div class="quick_button">
                              <a href="#" data-toggle="modal" data-target="#modal_box"
                                data-placement="top"
                                data-original-title="quick view">Quick View</a>
                            </div>
                          </div>
                          <div class="product_content">
                            <div class="tag_cate">
                              <a href="#">Ring, Necklace</a>
                              <a href="#">Earrings</a>
                            </div>
                            <h3><a href="#">Necklace Set</a></h3>
                            <div class="price_box">
                              <span class="old_price">Rs. 45654</span>
                              <span class="current_price">Rs. 44015</span>
                            </div>
                            <div class="product_hover">
                              <div class="product_ratings">
                                <ul>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                </ul>
                              </div>
                              <div class="product_desc">
                                <p>This is a gold ring with diamond and Lorem ipsum
                                  dolor sit amet.</p>
                              </div>
                              <div class="action_links">
                                <ul>
                                  <li><a href="#" data-placement="top"
                                      title="Add to Wishlist"
                                      data-toggle="tooltip"><span
                                        class="ion-heart"></span></a></li>
                                  <?php if (!isset($_SESSION['email'])) { ?>
                                    <li class="add_to_cart"><a href="login.php" role="button">Buy Now</a></li>
                                    <?php
                                  } else {
                                    // //We have created a function to check whether this particular product is added to cart or not.
                                    if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                      echo '<li class="added_to_cart"><a href="cart.php" class="added_to_cart" disabled>Added to cart</a>';
                                    } else {

                                    ?>
                                      <li class="add_to_cart"><a href="cart-add.php?id=1" name="add" value="add" class="add_to_cart" title="Add to Cart">Add to cart</a></li>
                                  <?php
                                    }
                                  }
                                  ?>
                                  <li><a href="#" title="Compare"><i
                                        class="ion-ios-settings-strong"></i></a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="arrivals" role="tabpane1">
                  <div class="product_container">
                    <div class="custom-row product_column3">
                      <div class="custom-col-5">
                        <div class="single_product">
                          <div class="product_thumb">
                            <a href="#" class="primary_img"><img src="images/product/25.jpg"
                                alt="product1"></a>
                            <a href="#" class="secondary_img"><img
                                src="images/product/26.jpg" alt="product1"></a>
                            <div class="quick_button">
                              <a href="#" data-toggle="modal" data-target="#modal_box"
                                data-placement="top"
                                data-original-title="quick view">Quick View</a>
                            </div>
                          </div>
                          <div class="product_content">
                            <div class="tag_cate">
                              <a href="#">Ring, Necklace</a>
                              <a href="#">Earrings</a>
                            </div>
                            <h3><a href="#">Necklace</a></h3>
                            <div class="price_box">
                              <span class="old_price">Rs. 45654</span>
                              <span class="current_price">Rs. 44015</span>
                            </div>
                            <div class="product_hover">
                              <div class="product_ratings">
                                <ul>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                </ul>
                              </div>
                              <div class="product_desc">
                                <p>This is a gold ring with diamond and Lorem ipsum
                                  dolor sit amet.</p>
                              </div>
                              <div class="action_links">
                                <ul>
                                  <li><a href="#" data-placement="top"
                                      title="Add to Wishlist"
                                      data-toggle="tooltip"><span
                                        class="ion-heart"></span></a></li>
                                  <?php if (!isset($_SESSION['email'])) { ?>
                                    <li class="add_to_cart"><a href="login.php" role="button">Buy Now</a></li>
                                    <?php
                                  } else {
                                    // //We have created a function to check whether this particular product is added to cart or not.
                                    if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                      echo '<li class="added_to_cart"><a href="cart.php" class="added_to_cart" disabled>Added to cart</a>';
                                    } else {

                                    ?>
                                      <li class="add_to_cart"><a href="cart-add.php?id=1" name="add" value="add" class="add_to_cart" title="Add to Cart">Add to cart</a></li>
                                  <?php
                                    }
                                  }
                                  ?>
                                  <li><a href="#" title="Compare"><i
                                        class="ion-ios-settings-strong"></i></a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="custom-col-5">
                        <div class="single_product">
                          <div class="product_thumb">
                            <a href="#" class="primary_img"><img src="images/product/27.jpg"
                                alt="product1"></a>
                            <a href="#" class="secondary_img"><img
                                src="images/product/28.jpg" alt="product1"></a>
                            <div class="quick_button">
                              <a href="#" data-toggle="modal" data-target="#modal_box"
                                data-placement="top"
                                data-original-title="quick view">Quick View</a>
                            </div>
                          </div>
                          <div class="product_content">
                            <div class="tag_cate">
                              <a href="#">Ring, Necklace</a>
                              <a href="#">Earrings</a>
                            </div>
                            <h3><a href="#">Earrings</a></h3>
                            <div class="price_box">

                              <span class="current_price">Rs. 45015</span>
                            </div>
                            <div class="product_hover">
                              <div class="product_ratings">
                                <ul>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                </ul>
                              </div>
                              <div class="product_desc">
                                <p>This is a gold ring with diamond and Lorem ipsum
                                  dolor sit amet.</p>
                              </div>
                              <div class="action_links">
                                <ul>
                                  <li><a href="#" data-placement="top"
                                      title="Add to Wishlist"
                                      data-toggle="tooltip"><span
                                        class="ion-heart"></span></a></li>
                                  <?php if (!isset($_SESSION['email'])) { ?>
                                    <li class="add_to_cart"><a href="login.php" role="button">Buy Now</a></li>
                                    <?php
                                  } else {
                                    // //We have created a function to check whether this particular product is added to cart or not.
                                    if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                      echo '<li class="added_to_cart"><a href="cart.php" class="added_to_cart" disabled>Added to cart</a>';
                                    } else {

                                    ?>
                                      <li class="add_to_cart"><a href="cart-add.php?id=1" name="add" value="add" class="add_to_cart" title="Add to Cart">Add to cart</a></li>
                                  <?php
                                    }
                                  }
                                  ?>
                                  <li><a href="#" title="Compare"><i
                                        class="ion-ios-settings-strong"></i></a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="custom-col-5">
                        <div class="single_product">
                          <div class="product_thumb">
                            <a href="#" class="primary_img"><img src="images/product/29.jpg"
                                alt="product1"></a>
                            <a href="#" class="secondary_img"><img
                                src="images/product/30.jpg" alt="product1"></a>
                            <div class="quick_button">
                              <a href="#" data-toggle="modal" data-target="#modal_box"
                                data-placement="top"
                                data-original-title="quick view">Quick View</a>
                            </div>
                          </div>
                          <div class="product_content">
                            <div class="tag_cate">
                              <a href="#">Ring, Necklace</a>
                              <a href="#">Earrings</a>
                            </div>
                            <h3><a href="#">Bracelet</a></h3>
                            <div class="price_box">
                              <span class="old_price">Rs. 75654</span>
                              <span class="current_price">Rs. 74015</span>
                            </div>
                            <div class="product_hover">
                              <div class="product_ratings">
                                <ul>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                </ul>
                              </div>
                              <div class="product_desc">
                                <p>This is a gold ring with diamond and Lorem ipsum
                                  dolor sit amet.</p>
                              </div>
                              <div class="action_links">
                                <ul>
                                  <li><a href="#" data-placement="top"
                                      title="Add to Wishlist"
                                      data-toggle="tooltip"><span
                                        class="ion-heart"></span></a></li>
                                  <?php if (!isset($_SESSION['email'])) { ?>
                                    <li class="add_to_cart"><a href="login.php" role="button">Buy Now</a></li>
                                    <?php
                                  } else {
                                    // //We have created a function to check whether this particular product is added to cart or not.
                                    if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                      echo '<li class="added_to_cart"><a href="cart.php" class="added_to_cart" disabled>Added to cart</a>';
                                    } else {

                                    ?>
                                      <li class="add_to_cart"><a href="cart-add.php?id=1" name="add" value="add" class="add_to_cart" title="Add to Cart">Add to cart</a></li>
                                  <?php
                                    }
                                  }
                                  ?>
                                  <li><a href="#" title="Compare"><i
                                        class="ion-ios-settings-strong"></i></a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="custom-col-5">
                        <div class="single_product">
                          <div class="product_thumb">
                            <a href="#" class="primary_img"><img src="images/product/31.jpg"
                                alt="product1"></a>
                            <a href="#" class="secondary_img"><img
                                src="images/product/32.jpg" alt="product1"></a>
                            <div class="quick_button">
                              <a href="#" data-toggle="modal" data-target="#modal_box"
                                data-placement="top"
                                data-original-title="quick view">Quick View</a>
                            </div>
                          </div>
                          <div class="product_content">
                            <div class="tag_cate">
                              <a href="#">Ring, Necklace</a>
                              <a href="#">Earrings</a>
                            </div>
                            <h3><a href="#">Bangles</a></h3>
                            <div class="price_box">
                              <span class="old_price">Rs. 45654</span>
                              <span class="current_price">Rs. 44015</span>
                            </div>
                            <div class="product_hover">
                              <div class="product_ratings">
                                <ul>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                </ul>
                              </div>
                              <div class="product_desc">
                                <p>This is a gold ring with diamond and Lorem ipsum
                                  dolor sit amet.</p>
                              </div>
                              <div class="action_links">
                                <ul>
                                  <li><a href="#" data-placement="top"
                                      title="Add to Wishlist"
                                      data-toggle="tooltip"><span
                                        class="ion-heart"></span></a></li>
                                  <?php if (!isset($_SESSION['email'])) { ?>
                                    <li class="add_to_cart"><a href="login.php" role="button">Buy Now</a></li>
                                    <?php
                                  } else {
                                    // //We have created a function to check whether this particular product is added to cart or not.
                                    if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                      echo '<li class="added_to_cart"><a href="cart.php" class="added_to_cart" disabled>Added to cart</a>';
                                    } else {

                                    ?>
                                      <li class="add_to_cart"><a href="cart-add.php?id=1" name="add" value="add" class="add_to_cart" title="Add to Cart">Add to cart</a></li>
                                  <?php
                                    }
                                  }
                                  ?>
                                  <li><a href="#" title="Compare"><i
                                        class="ion-ios-settings-strong"></i></a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="custom-col-5">
                        <div class="single_product">
                          <div class="product_thumb">
                            <a href="#" class="primary_img"><img src="images/product/33.jpg"
                                alt="product1"></a>
                            <a href="#" class="secondary_img"><img
                                src="images/product/34.jpg" alt="product1"></a>
                            <div class="quick_button">
                              <a href="#" data-toggle="modal" data-target="#modal_box"
                                data-placement="top"
                                data-original-title="quick view">Quick View</a>
                            </div>
                          </div>
                          <div class="product_content">
                            <div class="tag_cate">
                              <a href="#">Ring, Necklace</a>
                              <a href="#">Earrings</a>
                            </div>
                            <h3><a href="#">Gemstones</a></h3>
                            <div class="price_box">
                              <span class="old_price">Rs. 45654</span>
                              <span class="current_price">Rs. 44015</span>
                            </div>
                            <div class="product_hover">
                              <div class="product_ratings">
                                <ul>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                </ul>
                              </div>
                              <div class="product_desc">
                                <p>This is a gold ring with diamond and Lorem ipsum
                                  dolor sit amet.</p>
                              </div>
                              <div class="action_links">
                                <ul>
                                  <li><a href="#" data-placement="top"
                                      title="Add to Wishlist"
                                      data-toggle="tooltip"><span
                                        class="ion-heart"></span></a></li>
                                  <?php if (!isset($_SESSION['email'])) { ?>
                                    <li class="add_to_cart"><a href="login.php" role="button">Buy Now</a></li>
                                    <?php
                                  } else {
                                    // //We have created a function to check whether this particular product is added to cart or not.
                                    if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                      echo '<li class="added_to_cart"><a href="cart.php" class="added_to_cart" disabled>Added to cart</a>';
                                    } else {

                                    ?>
                                      <li class="add_to_cart"><a href="cart-add.php?id=1" name="add" value="add" class="add_to_cart" title="Add to Cart">Add to cart</a></li>
                                  <?php
                                    }
                                  }
                                  ?>
                                  <li><a href="#" title="Compare"><i
                                        class="ion-ios-settings-strong"></i></a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="custom-col-5">
                        <div class="single_product">
                          <div class="product_thumb">
                            <a href="#" class="primary_img"><img src="images/product/35.jpg"
                                alt="product1"></a>
                            <a href="#" class="secondary_img"><img
                                src="images/product/36.jpg" alt="product1"></a>
                            <div class="quick_button">
                              <a href="#" data-toggle="modal" data-target="#modal_box"
                                data-placement="top"
                                data-original-title="quick view">Quick View</a>
                            </div>
                          </div>
                          <div class="product_content">
                            <div class="tag_cate">
                              <a href="#">Ring, Necklace</a>
                              <a href="#">Earrings</a>
                            </div>
                            <h3><a href="#">Wedding set</a></h3>
                            <div class="price_box">
                              <span class="old_price">Rs. 45654</span>
                              <span class="current_price">Rs. 44015</span>
                            </div>
                            <div class="product_hover">
                              <div class="product_ratings">
                                <ul>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                </ul>
                              </div>
                              <div class="product_desc">
                                <p>This is a gold ring with diamond and Lorem ipsum
                                  dolor sit amet.</p>
                              </div>
                              <div class="action_links">
                                <ul>
                                  <li><a href="#" data-placement="top"
                                      title="Add to Wishlist"
                                      data-toggle="tooltip"><span
                                        class="ion-heart"></span></a></li>
                                  <?php if (!isset($_SESSION['email'])) { ?>
                                    <li class="add_to_cart"><a href="login.php" role="button">Buy Now</a></li>
                                    <?php
                                  } else {
                                    // //We have created a function to check whether this particular product is added to cart or not.
                                    if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                      echo '<li class="added_to_cart"><a href="cart.php" class="added_to_cart" disabled>Added to cart</a>';
                                    } else {

                                    ?>
                                      <li class="add_to_cart"><a href="cart-add.php?id=1" name="add" value="add" class="add_to_cart" title="Add to Cart">Add to cart</a></li>
                                  <?php
                                    }
                                  }
                                  ?>
                                  <li><a href="#" title="Compare"><i
                                        class="ion-ios-settings-strong"></i></a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="custom-col-5">
                        <div class="single_product">
                          <div class="product_thumb">
                            <a href="#" class="primary_img"><img src="images/product/37.jpg"
                                alt="product1"></a>
                            <a href="#" class="secondary_img"><img
                                src="images/product/38.jpg" alt="product1"></a>
                            <div class="quick_button">
                              <a href="#" data-toggle="modal" data-target="#modal_box"
                                data-placement="top"
                                data-original-title="quick view">Quick View</a>
                            </div>
                          </div>
                          <div class="product_content">
                            <div class="tag_cate">
                              <a href="#">Ring, Necklace</a>
                              <a href="#">Earrings</a>
                            </div>
                            <h3><a href="#">Nose Pin</a></h3>
                            <div class="price_box">
                              <span class="old_price">Rs. 45654</span>
                              <span class="current_price">Rs. 44015</span>
                            </div>
                            <div class="product_hover">
                              <div class="product_ratings">
                                <ul>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                </ul>
                              </div>
                              <div class="product_desc">
                                <p>This is a gold ring with diamond and Lorem ipsum
                                  dolor sit amet.</p>
                              </div>
                              <div class="action_links">
                                <ul>
                                  <li><a href="#" data-placement="top"
                                      title="Add to Wishlist"
                                      data-toggle="tooltip"><span
                                        class="ion-heart"></span></a></li>
                                  <?php if (!isset($_SESSION['email'])) { ?>
                                    <li class="add_to_cart"><a href="login.php" role="button">Buy Now</a></li>
                                    <?php
                                  } else {
                                    // //We have created a function to check whether this particular product is added to cart or not.
                                    if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                      echo '<li class="added_to_cart"><a href="cart.php" class="added_to_cart" disabled>Added to cart</a>';
                                    } else {

                                    ?>
                                      <li class="add_to_cart"><a href="cart-add.php?id=1" name="add" value="add" class="add_to_cart" title="Add to Cart">Add to cart</a></li>
                                  <?php
                                    }
                                  }
                                  ?>
                                  <li><a href="#" title="Compare"><i
                                        class="ion-ios-settings-strong"></i></a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="custom-col-5">
                        <div class="single_product">
                          <div class="product_thumb">
                            <a href="#" class="primary_img"><img src="images/product/39.jpg"
                                alt="product1"></a>
                            <a href="#" class="secondary_img"><img
                                src="images/product/40.jpg" alt="product1"></a>
                            <div class="quick_button">
                              <a href="#" data-toggle="modal" data-target="#modal_box"
                                data-placement="top"
                                data-original-title="quick view">Quick View</a>
                            </div>
                          </div>
                          <div class="product_content">
                            <div class="tag_cate">
                              <a href="#">Ring, Necklace</a>
                              <a href="#">Earrings</a>
                            </div>
                            <h3><a href="#">Diamonds</a></h3>
                            <div class="price_box">
                              <span class="old_price">Rs. 45654</span>
                              <span class="current_price">Rs. 44015</span>
                            </div>
                            <div class="product_hover">
                              <div class="product_ratings">
                                <ul>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                </ul>
                              </div>
                              <div class="product_desc">
                                <p>This is a gold ring with diamond and Lorem ipsum
                                  dolor sit amet.</p>
                              </div>
                              <div class="action_links">
                                <ul>
                                  <li><a href="#" data-placement="top"
                                      title="Add to Wishlist"
                                      data-toggle="tooltip"><span
                                        class="ion-heart"></span></a></li>
                                  <?php if (!isset($_SESSION['email'])) { ?>
                                    <li class="add_to_cart"><a href="login.php" role="button">Buy Now</a></li>
                                    <?php
                                  } else {
                                    // //We have created a function to check whether this particular product is added to cart or not.
                                    if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                      echo '<li class="added_to_cart"><a href="cart.php" class="added_to_cart" disabled>Added to cart</a>';
                                    } else {

                                    ?>
                                      <li class="add_to_cart"><a href="cart-add.php?id=1" name="add" value="add" class="add_to_cart" title="Add to Cart">Add to cart</a></li>
                                  <?php
                                    }
                                  }
                                  ?>
                                  <li><a href="#" title="Compare"><i
                                        class="ion-ios-settings-strong"></i></a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="custom-col-5">
                        <div class="single_product">
                          <div class="product_thumb">
                            <a href="#" class="primary_img"><img src="images/product/41.jpg"
                                alt="product1"></a>
                            <a href="#" class="secondary_img"><img
                                src="images/product/42.jpg" alt="product1"></a>
                            <div class="quick_button">
                              <a href="#" data-toggle="modal" data-target="#modal_box"
                                data-placement="top"
                                data-original-title="quick view">Quick View</a>
                            </div>
                          </div>
                          <div class="product_content">
                            <div class="tag_cate">
                              <a href="#">Ring, Necklace</a>
                              <a href="#">Earrings</a>
                            </div>
                            <h3><a href="#">Ring</a></h3>
                            <div class="price_box">
                              <span class="old_price">Rs. 45654</span>
                              <span class="current_price">Rs. 44015</span>
                            </div>
                            <div class="product_hover">
                              <div class="product_ratings">
                                <ul>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                </ul>
                              </div>
                              <div class="product_desc">
                                <p>This is a gold ring with diamond and Lorem ipsum
                                  dolor sit amet.</p>
                              </div>
                              <div class="action_links">
                                <ul>
                                  <li><a href="#" data-placement="top"
                                      title="Add to Wishlist"
                                      data-toggle="tooltip"><span
                                        class="ion-heart"></span></a></li>
                                  <?php if (!isset($_SESSION['email'])) { ?>
                                    <li class="add_to_cart"><a href="login.php" role="button">Buy Now</a></li>
                                    <?php
                                  } else {
                                    // //We have created a function to check whether this particular product is added to cart or not.
                                    if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                      echo '<li class="added_to_cart"><a href="cart.php" class="added_to_cart" disabled>Added to cart</a>';
                                    } else {

                                    ?>
                                      <li class="add_to_cart"><a href="cart-add.php?id=1" name="add" value="add" class="add_to_cart" title="Add to Cart">Add to cart</a></li>
                                  <?php
                                    }
                                  }
                                  ?>
                                  <li><a href="#" title="Compare"><i
                                        class="ion-ios-settings-strong"></i></a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="custom-col-5">
                        <div class="single_product">
                          <div class="product_thumb">
                            <a href="#" class="primary_img"><img src="images/product/43.jpg"
                                alt="product1"></a>
                            <a href="#" class="secondary_img"><img
                                src="images/product/44.jpg" alt="product1"></a>
                            <div class="quick_button">
                              <a href="#" data-toggle="modal" data-target="#modal_box"
                                data-placement="top"
                                data-original-title="quick view">Quick View</a>
                            </div>
                          </div>
                          <div class="product_content">
                            <div class="tag_cate">
                              <a href="#">Ring, Necklace</a>
                              <a href="#">Earrings</a>
                            </div>
                            <h3><a href="#">Couple Ring</a></h3>
                            <div class="price_box">
                              <span class="old_price">Rs. 45654</span>
                              <span class="current_price">Rs. 44015</span>
                            </div>
                            <div class="product_hover">
                              <div class="product_ratings">
                                <ul>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                </ul>
                              </div>
                              <div class="product_desc">
                                <p>This is a gold ring with diamond and Lorem ipsum
                                  dolor sit amet.</p>
                              </div>
                              <div class="action_links">
                                <ul>
                                  <li><a href="#" data-placement="top"
                                      title="Add to Wishlist"
                                      data-toggle="tooltip"><span
                                        class="ion-heart"></span></a></li>
                                  <?php if (!isset($_SESSION['email'])) { ?>
                                    <li class="add_to_cart"><a href="login.php" role="button">Buy Now</a></li>
                                    <?php
                                  } else {
                                    // //We have created a function to check whether this particular product is added to cart or not.
                                    if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                      echo '<li class="added_to_cart"><a href="cart.php" class="added_to_cart" disabled>Added to cart</a>';
                                    } else {

                                    ?>
                                      <li class="add_to_cart"><a href="cart-add.php?id=1" name="add" value="add" class="add_to_cart" title="Add to Cart">Add to cart</a></li>
                                  <?php
                                    }
                                  }
                                  ?>
                                  <li><a href="#" title="Compare"><i
                                        class="ion-ios-settings-strong"></i></a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="custom-col-5">
                        <div class="single_product">
                          <div class="product_thumb">
                            <a href="#" class="primary_img"><img src="images/product/45.jpg"
                                alt="product1"></a>
                            <a href="#" class="secondary_img"><img
                                src="images/product/46.jpg" alt="product1"></a>
                            <div class="quick_button">
                              <a href="#" data-toggle="modal" data-target="#modal_box"
                                data-placement="top"
                                data-original-title="quick view">Quick View</a>
                            </div>
                          </div>
                          <div class="product_content">
                            <div class="tag_cate">
                              <a href="#">Ring, Necklace</a>
                              <a href="#">Earrings</a>
                            </div>
                            <h3><a href="#">Bracelet</a></h3>
                            <div class="price_box">
                              <span class="old_price">Rs. 45654</span>
                              <span class="current_price">Rs. 44015</span>
                            </div>
                            <div class="product_hover">
                              <div class="product_ratings">
                                <ul>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                </ul>
                              </div>
                              <div class="product_desc">
                                <p>This is a gold ring with diamond and Lorem ipsum
                                  dolor sit amet.</p>
                              </div>
                              <div class="action_links">
                                <ul>
                                  <li><a href="#" data-placement="top"
                                      title="Add to Wishlist"
                                      data-toggle="tooltip"><span
                                        class="ion-heart"></span></a></li>
                                  <?php if (!isset($_SESSION['email'])) { ?>
                                    <li class="add_to_cart"><a href="login.php" role="button">Buy Now</a></li>
                                    <?php
                                  } else {
                                    // //We have created a function to check whether this particular product is added to cart or not.
                                    if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                      echo '<li class="added_to_cart"><a href="cart.php" class="added_to_cart" disabled>Added to cart</a>';
                                    } else {

                                    ?>
                                      <li class="add_to_cart"><a href="cart-add.php?id=1" name="add" value="add" class="add_to_cart" title="Add to Cart">Add to cart</a></li>
                                  <?php
                                    }
                                  }
                                  ?>
                                  <li><a href="#" title="Compare"><i
                                        class="ion-ios-settings-strong"></i></a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="custom-col-5">
                        <div class="single_product">
                          <div class="product_thumb">
                            <a href="#" class="primary_img"><img src="images/product/47.jpg"
                                alt="product1"></a>
                            <a href="#" class="secondary_img"><img
                                src="images/product/48.jpg" alt="product1"></a>
                            <div class="quick_button">
                              <a href="#" data-toggle="modal" data-target="#modal_box"
                                data-placement="top"
                                data-original-title="quick view">Quick View</a>
                            </div>
                          </div>
                          <div class="product_content">
                            <div class="tag_cate">
                              <a href="#">Ring, Necklace</a>
                              <a href="#">Earrings</a>
                            </div>
                            <h3><a href="#">Necklace Set</a></h3>
                            <div class="price_box">
                              <span class="old_price">Rs. 45654</span>
                              <span class="current_price">Rs. 44015</span>
                            </div>
                            <div class="product_hover">
                              <div class="product_ratings">
                                <ul>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                </ul>
                              </div>
                              <div class="product_desc">
                                <p>This is a gold ring with diamond and Lorem ipsum
                                  dolor sit amet.</p>
                              </div>
                              <div class="action_links">
                                <ul>
                                  <li><a href="#" data-placement="top"
                                      title="Add to Wishlist"
                                      data-toggle="tooltip"><span
                                        class="ion-heart"></span></a></li>
                                  <?php if (!isset($_SESSION['email'])) { ?>
                                    <li class="add_to_cart"><a href="login.php" role="button">Buy Now</a></li>
                                    <?php
                                  } else {
                                    // //We have created a function to check whether this particular product is added to cart or not.
                                    if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                      echo '<li class="added_to_cart"><a href="cart.php" class="added_to_cart" disabled>Added to cart</a>';
                                    } else {

                                    ?>
                                      <li class="add_to_cart"><a href="cart-add.php?id=1" name="add" value="add" class="add_to_cart" title="Add to Cart">Add to cart</a></li>
                                  <?php
                                    }
                                  }
                                  ?>
                                  <li><a href="#" title="Compare"><i
                                        class="ion-ios-settings-strong"></i></a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="onsale" role="tabpane1">
                  <div class="product_container">
                    <div class="custom-row product_column3">
                      <div class="custom-col-5">
                        <div class="single_product">
                          <div class="product_thumb">
                            <a href="#" class="primary_img"><img src="images/product/49.jpg"
                                alt="product1"></a>
                            <a href="#" class="secondary_img"><img
                                src="images/product/50.jpg" alt="product1"></a>
                            <div class="quick_button">
                              <a href="#" data-toggle="modal" data-target="#modal_box"
                                data-placement="top"
                                data-original-title="quick view">Quick View</a>
                            </div>
                          </div>
                          <div class="product_content">
                            <div class="tag_cate">
                              <a href="#">Ring, Necklace</a>
                              <a href="#">Earrings</a>
                            </div>
                            <h3><a href="#">Necklace</a></h3>
                            <div class="price_box">
                              <span class="old_price">Rs. 45654</span>
                              <span class="current_price">Rs. 44015</span>
                            </div>
                            <div class="product_hover">
                              <div class="product_ratings">
                                <ul>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                </ul>
                              </div>
                              <div class="product_desc">
                                <p>This is a gold ring with diamond and Lorem ipsum
                                  dolor sit amet.</p>
                              </div>
                              <div class="action_links">
                                <ul>
                                  <li><a href="#" data-placement="top"
                                      title="Add to Wishlist"
                                      data-toggle="tooltip"><span
                                        class="ion-heart"></span></a></li>
                                  <?php if (!isset($_SESSION['email'])) { ?>
                                    <li class="add_to_cart"><a href="login.php" role="button">Buy Now</a></li>
                                    <?php
                                  } else {
                                    // //We have created a function to check whether this particular product is added to cart or not.
                                    if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                      echo '<li class="added_to_cart"><a href="cart.php" class="added_to_cart" disabled>Added to cart</a>';
                                    } else {

                                    ?>
                                      <li class="add_to_cart"><a href="cart-add.php?id=1" name="add" value="add" class="add_to_cart" title="Add to Cart">Add to cart</a></li>
                                  <?php
                                    }
                                  }
                                  ?>
                                  <li><a href="#" title="Compare"><i
                                        class="ion-ios-settings-strong"></i></a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="custom-col-5">
                        <div class="single_product">
                          <div class="product_thumb">
                            <a href="#" class="primary_img"><img src="images/product/2.jpg"
                                alt="product1"></a>
                            <a href="#" class="secondary_img"><img
                                src="images/product/3.jpg" alt="product1"></a>
                            <div class="quick_button">
                              <a href="#" data-toggle="modal" data-target="#modal_box"
                                data-placement="top"
                                data-original-title="quick view">Quick View</a>
                            </div>
                          </div>
                          <div class="product_content">
                            <div class="tag_cate">
                              <a href="#">Ring, Necklace</a>
                              <a href="#">Earrings</a>
                            </div>
                            <h3><a href="#">Earrings</a></h3>
                            <div class="price_box">

                              <span class="current_price">Rs. 45015</span>
                            </div>
                            <div class="product_hover">
                              <div class="product_ratings">
                                <ul>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                </ul>
                              </div>
                              <div class="product_desc">
                                <p>This is a gold ring with diamond and Lorem ipsum
                                  dolor sit amet.</p>
                              </div>
                              <div class="action_links">
                                <ul>
                                  <li><a href="#" data-placement="top"
                                      title="Add to Wishlist"
                                      data-toggle="tooltip"><span
                                        class="ion-heart"></span></a></li>
                                  <?php if (!isset($_SESSION['email'])) { ?>
                                    <li class="add_to_cart"><a href="login.php" role="button">Buy Now</a></li>
                                    <?php
                                  } else {
                                    // //We have created a function to check whether this particular product is added to cart or not.
                                    if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                      echo '<li class="added_to_cart"><a href="cart.php" class="added_to_cart" disabled>Added to cart</a>';
                                    } else {

                                    ?>
                                      <li class="add_to_cart"><a href="cart-add.php?id=1" name="add" value="add" class="add_to_cart" title="Add to Cart">Add to cart</a></li>
                                  <?php
                                    }
                                  }
                                  ?>
                                  <li><a href="#" title="Compare"><i
                                        class="ion-ios-settings-strong"></i></a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="custom-col-5">
                        <div class="single_product">
                          <div class="product_thumb">
                            <a href="#" class="primary_img"><img src="images/product/4.jpg"
                                alt="product1"></a>
                            <a href="#" class="secondary_img"><img
                                src="images/product/5.jpg" alt="product1"></a>
                            <div class="quick_button">
                              <a href="#" data-toggle="modal" data-target="#modal_box"
                                data-placement="top"
                                data-original-title="quick view">Quick View</a>
                            </div>
                          </div>
                          <div class="product_content">
                            <div class="tag_cate">
                              <a href="#">Ring, Necklace</a>
                              <a href="#">Earrings</a>
                            </div>
                            <h3><a href="#">Bracelet</a></h3>
                            <div class="price_box">
                              <span class="old_price">Rs. 75654</span>
                              <span class="current_price">Rs. 74015</span>
                            </div>
                            <div class="product_hover">
                              <div class="product_ratings">
                                <ul>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                </ul>
                              </div>
                              <div class="product_desc">
                                <p>This is a gold ring with diamond and Lorem ipsum
                                  dolor sit amet.</p>
                              </div>
                              <div class="action_links">
                                <ul>
                                  <li><a href="#" data-placement="top"
                                      title="Add to Wishlist"
                                      data-toggle="tooltip"><span
                                        class="ion-heart"></span></a></li>
                                  <?php if (!isset($_SESSION['email'])) { ?>
                                    <li class="add_to_cart"><a href="login.php" role="button">Buy Now</a></li>
                                    <?php
                                  } else {
                                    // //We have created a function to check whether this particular product is added to cart or not.
                                    if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                      echo '<li class="added_to_cart"><a href="cart.php" class="added_to_cart" disabled>Added to cart</a>';
                                    } else {

                                    ?>
                                      <li class="add_to_cart"><a href="cart-add.php?id=1" name="add" value="add" class="add_to_cart" title="Add to Cart">Add to cart</a></li>
                                  <?php
                                    }
                                  }
                                  ?>
                                  <li><a href="#" title="Compare"><i
                                        class="ion-ios-settings-strong"></i></a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="custom-col-5">
                        <div class="single_product">
                          <div class="product_thumb">
                            <a href="#" class="primary_img"><img src="images/product/6.jpg"
                                alt="product1"></a>
                            <a href="#" class="secondary_img"><img
                                src="images/product/7.jpg" alt="product1"></a>
                            <div class="quick_button">
                              <a href="#" data-toggle="modal" data-target="#modal_box"
                                data-placement="top"
                                data-original-title="quick view">Quick View</a>
                            </div>
                          </div>
                          <div class="product_content">
                            <div class="tag_cate">
                              <a href="#">Ring, Necklace</a>
                              <a href="#">Earrings</a>
                            </div>
                            <h3><a href="#">Bangles</a></h3>
                            <div class="price_box">
                              <span class="old_price">Rs. 45654</span>
                              <span class="current_price">Rs. 44015</span>
                            </div>
                            <div class="product_hover">
                              <div class="product_ratings">
                                <ul>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                </ul>
                              </div>
                              <div class="product_desc">
                                <p>This is a gold ring with diamond and Lorem ipsum
                                  dolor sit amet.</p>
                              </div>
                              <div class="action_links">
                                <ul>
                                  <li><a href="#" data-placement="top"
                                      title="Add to Wishlist"
                                      data-toggle="tooltip"><span
                                        class="ion-heart"></span></a></li>
                                  <?php if (!isset($_SESSION['email'])) { ?>
                                    <li class="add_to_cart"><a href="login.php" role="button">Buy Now</a></li>
                                    <?php
                                  } else {
                                    // //We have created a function to check whether this particular product is added to cart or not.
                                    if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                      echo '<li class="added_to_cart"><a href="cart.php" class="added_to_cart" disabled>Added to cart</a>';
                                    } else {

                                    ?>
                                      <li class="add_to_cart"><a href="cart-add.php?id=1" name="add" value="add" class="add_to_cart" title="Add to Cart">Add to cart</a></li>
                                  <?php
                                    }
                                  }
                                  ?>
                                  <li><a href="#" title="Compare"><i
                                        class="ion-ios-settings-strong"></i></a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="custom-col-5">
                        <div class="single_product">
                          <div class="product_thumb">
                            <a href="#" class="primary_img"><img src="images/product/8.jpg"
                                alt="product1"></a>
                            <a href="#" class="secondary_img"><img
                                src="images/product/9.jpg" alt="product1"></a>
                            <div class="quick_button">
                              <a href="#" data-toggle="modal" data-target="#modal_box"
                                data-placement="top"
                                data-original-title="quick view">Quick View</a>
                            </div>
                          </div>
                          <div class="product_content">
                            <div class="tag_cate">
                              <a href="#">Ring, Necklace</a>
                              <a href="#">Earrings</a>
                            </div>
                            <h3><a href="#">Gemstones</a></h3>
                            <div class="price_box">
                              <span class="old_price">Rs. 45654</span>
                              <span class="current_price">Rs. 44015</span>
                            </div>
                            <div class="product_hover">
                              <div class="product_ratings">
                                <ul>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                </ul>
                              </div>
                              <div class="product_desc">
                                <p>This is a gold ring with diamond and Lorem ipsum
                                  dolor sit amet.</p>
                              </div>
                              <div class="action_links">
                                <ul>
                                  <li><a href="#" data-placement="top"
                                      title="Add to Wishlist"
                                      data-toggle="tooltip"><span
                                        class="ion-heart"></span></a></li>
                                  <?php if (!isset($_SESSION['email'])) { ?>
                                    <li class="add_to_cart"><a href="login.php" role="button">Buy Now</a></li>
                                    <?php
                                  } else {
                                    // //We have created a function to check whether this particular product is added to cart or not.
                                    if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                      echo '<li class="added_to_cart"><a href="cart.php" class="added_to_cart" disabled>Added to cart</a>';
                                    } else {

                                    ?>
                                      <li class="add_to_cart"><a href="cart-add.php?id=1" name="add" value="add" class="add_to_cart" title="Add to Cart">Add to cart</a></li>
                                  <?php
                                    }
                                  }
                                  ?>
                                  <li><a href="#" title="Compare"><i
                                        class="ion-ios-settings-strong"></i></a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="custom-col-5">
                        <div class="single_product">
                          <div class="product_thumb">
                            <a href="#" class="primary_img"><img src="images/product/10.jpg"
                                alt="product1"></a>
                            <a href="#" class="secondary_img"><img
                                src="images/product/11.jpg" alt="product1"></a>
                            <div class="quick_button">
                              <a href="#" data-toggle="modal" data-target="#modal_box"
                                data-placement="top"
                                data-original-title="quick view">Quick View</a>
                            </div>
                          </div>
                          <div class="product_content">
                            <div class="tag_cate">
                              <a href="#">Ring, Necklace</a>
                              <a href="#">Earrings</a>
                            </div>
                            <h3><a href="#">Wedding set</a></h3>
                            <div class="price_box">
                              <span class="old_price">Rs. 45654</span>
                              <span class="current_price">Rs. 44015</span>
                            </div>
                            <div class="product_hover">
                              <div class="product_ratings">
                                <ul>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                </ul>
                              </div>
                              <div class="product_desc">
                                <p>This is a gold ring with diamond and Lorem ipsum
                                  dolor sit amet.</p>
                              </div>
                              <div class="action_links">
                                <ul>
                                  <li><a href="#" data-placement="top"
                                      title="Add to Wishlist"
                                      data-toggle="tooltip"><span
                                        class="ion-heart"></span></a></li>
                                  <?php if (!isset($_SESSION['email'])) { ?>
                                    <li class="add_to_cart"><a href="login.php" role="button">Buy Now</a></li>
                                    <?php
                                  } else {
                                    // //We have created a function to check whether this particular product is added to cart or not.
                                    if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                      echo '<li class="added_to_cart"><a href="cart.php" class="added_to_cart" disabled>Added to cart</a>';
                                    } else {

                                    ?>
                                      <li class="add_to_cart"><a href="cart-add.php?id=1" name="add" value="add" class="add_to_cart" title="Add to Cart">Add to cart</a></li>
                                  <?php
                                    }
                                  }
                                  ?>
                                  <li><a href="#" title="Compare"><i
                                        class="ion-ios-settings-strong"></i></a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="custom-col-5">
                        <div class="single_product">
                          <div class="product_thumb">
                            <a href="#" class="primary_img"><img src="images/product/12.jpg"
                                alt="product1"></a>
                            <a href="#" class="secondary_img"><img
                                src="images/product/13.jpg" alt="product1"></a>
                            <div class="quick_button">
                              <a href="#" data-toggle="modal" data-target="#modal_box"
                                data-placement="top"
                                data-original-title="quick view">Quick View</a>
                            </div>
                          </div>
                          <div class="product_content">
                            <div class="tag_cate">
                              <a href="#">Ring, Necklace</a>
                              <a href="#">Earrings</a>
                            </div>
                            <h3><a href="#">Nose Pin</a></h3>
                            <div class="price_box">
                              <span class="old_price">Rs. 45654</span>
                              <span class="current_price">Rs. 44015</span>
                            </div>
                            <div class="product_hover">
                              <div class="product_ratings">
                                <ul>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                </ul>
                              </div>
                              <div class="product_desc">
                                <p>This is a gold ring with diamond and Lorem ipsum
                                  dolor sit amet.</p>
                              </div>
                              <div class="action_links">
                                <ul>
                                  <li><a href="#" data-placement="top"
                                      title="Add to Wishlist"
                                      data-toggle="tooltip"><span
                                        class="ion-heart"></span></a></li>
                                  <?php if (!isset($_SESSION['email'])) { ?>
                                    <li class="add_to_cart"><a href="login.php" role="button">Buy Now</a></li>
                                    <?php
                                  } else {
                                    // //We have created a function to check whether this particular product is added to cart or not.
                                    if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                      echo '<li class="added_to_cart"><a href="cart.php" class="added_to_cart" disabled>Added to cart</a>';
                                    } else {

                                    ?>
                                      <li class="add_to_cart"><a href="cart-add.php?id=1" name="add" value="add" class="add_to_cart" title="Add to Cart">Add to cart</a></li>
                                  <?php
                                    }
                                  }
                                  ?>
                                  <li><a href="#" title="Compare"><i
                                        class="ion-ios-settings-strong"></i></a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="custom-col-5">
                        <div class="single_product">
                          <div class="product_thumb">
                            <a href="#" class="primary_img"><img src="images/product/14.jpg"
                                alt="product1"></a>
                            <a href="#" class="secondary_img"><img
                                src="images/product/15.jpg" alt="product1"></a>
                            <div class="quick_button">
                              <a href="#" data-toggle="modal" data-target="#modal_box"
                                data-placement="top"
                                data-original-title="quick view">Quick View</a>
                            </div>
                          </div>
                          <div class="product_content">
                            <div class="tag_cate">
                              <a href="#">Ring, Necklace</a>
                              <a href="#">Earrings</a>
                            </div>
                            <h3><a href="#">Diamonds</a></h3>
                            <div class="price_box">
                              <span class="old_price">Rs. 45654</span>
                              <span class="current_price">Rs. 44015</span>
                            </div>
                            <div class="product_hover">
                              <div class="product_ratings">
                                <ul>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                </ul>
                              </div>
                              <div class="product_desc">
                                <p>This is a gold ring with diamond and Lorem ipsum
                                  dolor sit amet.</p>
                              </div>
                              <div class="action_links">
                                <ul>
                                  <li><a href="#" data-placement="top"
                                      title="Add to Wishlist"
                                      data-toggle="tooltip"><span
                                        class="ion-heart"></span></a></li>
                                  <?php if (!isset($_SESSION['email'])) { ?>
                                    <li class="add_to_cart"><a href="login.php" role="button">Buy Now</a></li>
                                    <?php
                                  } else {
                                    // //We have created a function to check whether this particular product is added to cart or not.
                                    if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                      echo '<li class="added_to_cart"><a href="cart.php" class="added_to_cart" disabled>Added to cart</a>';
                                    } else {

                                    ?>
                                      <li class="add_to_cart"><a href="cart-add.php?id=1" name="add" value="add" class="add_to_cart" title="Add to Cart">Add to cart</a></li>
                                  <?php
                                    }
                                  }
                                  ?>
                                  <li><a href="#" title="Compare"><i
                                        class="ion-ios-settings-strong"></i></a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="custom-col-5">
                        <div class="single_product">
                          <div class="product_thumb">
                            <a href="#" class="primary_img"><img src="images/product/16.jpg"
                                alt="product1"></a>
                            <a href="#" class="secondary_img"><img
                                src="images/product/17.jpg" alt="product1"></a>
                            <div class="quick_button">
                              <a href="#" data-toggle="modal" data-target="#modal_box"
                                data-placement="top"
                                data-original-title="quick view">Quick View</a>
                            </div>
                          </div>
                          <div class="product_content">
                            <div class="tag_cate">
                              <a href="#">Ring, Necklace</a>
                              <a href="#">Earrings</a>
                            </div>
                            <h3><a href="#">Ring</a></h3>
                            <div class="price_box">
                              <span class="old_price">Rs. 45654</span>
                              <span class="current_price">Rs. 44015</span>
                            </div>
                            <div class="product_hover">
                              <div class="product_ratings">
                                <ul>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                </ul>
                              </div>
                              <div class="product_desc">
                                <p>This is a gold ring with diamond and Lorem ipsum
                                  dolor sit amet.</p>
                              </div>
                              <div class="action_links">
                                <ul>
                                  <li><a href="#" data-placement="top"
                                      title="Add to Wishlist"
                                      data-toggle="tooltip"><span
                                        class="ion-heart"></span></a></li>
                                  <?php if (!isset($_SESSION['email'])) { ?>
                                    <li class="add_to_cart"><a href="login.php" role="button">Buy Now</a></li>
                                    <?php
                                  } else {
                                    // //We have created a function to check whether this particular product is added to cart or not.
                                    if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                      echo '<li class="added_to_cart"><a href="cart.php" class="added_to_cart" disabled>Added to cart</a>';
                                    } else {

                                    ?>
                                      <li class="add_to_cart"><a href="cart-add.php?id=1" name="add" value="add" class="add_to_cart" title="Add to Cart">Add to cart</a></li>
                                  <?php
                                    }
                                  }
                                  ?>
                                  <li><a href="#" title="Compare"><i
                                        class="ion-ios-settings-strong"></i></a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="custom-col-5">
                        <div class="single_product">
                          <div class="product_thumb">
                            <a href="#" class="primary_img"><img src="images/product/20.jpg"
                                alt="product1"></a>
                            <a href="#" class="secondary_img"><img
                                src="images/product/21.jpg" alt="product1"></a>
                            <div class="quick_button">
                              <a href="#" data-toggle="modal" data-target="#modal_box"
                                data-placement="top"
                                data-original-title="quick view">Quick View</a>
                            </div>
                          </div>
                          <div class="product_content">
                            <div class="tag_cate">
                              <a href="#">Ring, Necklace</a>
                              <a href="#">Earrings</a>
                            </div>
                            <h3><a href="#">Couple Ring</a></h3>
                            <div class="price_box">
                              <span class="old_price">Rs. 45654</span>
                              <span class="current_price">Rs. 44015</span>
                            </div>
                            <div class="product_hover">
                              <div class="product_ratings">
                                <ul>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                </ul>
                              </div>
                              <div class="product_desc">
                                <p>This is a gold ring with diamond and Lorem ipsum
                                  dolor sit amet.</p>
                              </div>
                              <div class="action_links">
                                <ul>
                                  <li><a href="#" data-placement="top"
                                      title="Add to Wishlist"
                                      data-toggle="tooltip"><span
                                        class="ion-heart"></span></a></li>
                                  <?php if (!isset($_SESSION['email'])) { ?>
                                    <li class="add_to_cart"><a href="login.php" role="button">Buy Now</a></li>
                                    <?php
                                  } else {
                                    // //We have created a function to check whether this particular product is added to cart or not.
                                    if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                      echo '<li class="added_to_cart"><a href="cart.php" class="added_to_cart" disabled>Added to cart</a>';
                                    } else {

                                    ?>
                                      <li class="add_to_cart"><a href="cart-add.php?id=1" name="add" value="add" class="add_to_cart" title="Add to Cart">Add to cart</a></li>
                                  <?php
                                    }
                                  }
                                  ?>
                                  <li><a href="#" title="Compare"><i
                                        class="ion-ios-settings-strong"></i></a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="custom-col-5">
                        <div class="single_product">
                          <div class="product_thumb">
                            <a href="#" class="primary_img"><img src="images/product/70.jpg"
                                alt="product1"></a>
                            <a href="#" class="secondary_img"><img
                                src="images/product/28.jpg" alt="product1"></a>
                            <div class="quick_button">
                              <a href="#" data-toggle="modal" data-target="#modal_box"
                                data-placement="top"
                                data-original-title="quick view">Quick View</a>
                            </div>
                          </div>
                          <div class="product_content">
                            <div class="tag_cate">
                              <a href="#">Ring, Necklace</a>
                              <a href="#">Earrings</a>
                            </div>
                            <h3><a href="#">Bracelet</a></h3>
                            <div class="price_box">
                              <span class="old_price">Rs. 45654</span>
                              <span class="current_price">Rs. 44015</span>
                            </div>
                            <div class="product_hover">
                              <div class="product_ratings">
                                <ul>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                </ul>
                              </div>
                              <div class="product_desc">
                                <p>This is a gold ring with diamond and Lorem ipsum
                                  dolor sit amet.</p>
                              </div>
                              <div class="action_links">
                                <ul>
                                  <li><a href="#" data-placement="top"
                                      title="Add to Wishlist"
                                      data-toggle="tooltip"><span
                                        class="ion-heart"></span></a></li>
                                  <?php if (!isset($_SESSION['email'])) { ?>
                                    <li class="add_to_cart"><a href="login.php" role="button">Buy Now</a></li>
                                    <?php
                                  } else {
                                    // //We have created a function to check whether this particular product is added to cart or not.
                                    if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                      echo '<li class="added_to_cart"><a href="cart.php" class="added_to_cart" disabled>Added to cart</a>';
                                    } else {

                                    ?>
                                      <li class="add_to_cart"><a href="cart-add.php?id=1" name="add" value="add" class="add_to_cart" title="Add to Cart">Add to cart</a></li>
                                  <?php
                                    }
                                  }
                                  ?>
                                  <li><a href="#" title="Compare"><i
                                        class="ion-ios-settings-strong"></i></a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="custom-col-5">
                        <div class="single_product">
                          <div class="product_thumb">
                            <a href="#" class="primary_img"><img src="images/product/71.jpg"
                                alt="product1"></a>
                            <a href="#" class="secondary_img"><img
                                src="images/product/72.jpg" alt="product1"></a>
                            <div class="quick_button">
                              <a href="#" data-toggle="modal" data-target="#modal_box"
                                data-placement="top"
                                data-original-title="quick view">Quick View</a>
                            </div>
                          </div>
                          <div class="product_content">
                            <div class="tag_cate">
                              <a href="#">Ring, Necklace</a>
                              <a href="#">Earrings</a>
                            </div>
                            <h3><a href="#">Necklace Set</a></h3>
                            <div class="price_box">
                              <span class="old_price">Rs. 45654</span>
                              <span class="current_price">Rs. 44015</span>
                            </div>
                            <div class="product_hover">
                              <div class="product_ratings">
                                <ul>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                  <li><a href="#"><i
                                        class="ion-ios-star-outline"></i></a>
                                  </li>
                                </ul>
                              </div>
                              <div class="product_desc">
                                <p>This is a gold ring with diamond and Lorem ipsum
                                  dolor sit amet.</p>
                              </div>
                              <div class="action_links">
                                <ul>
                                  <li><a href="#" data-placement="top"
                                      title="Add to Wishlist"
                                      data-toggle="tooltip"><span
                                        class="ion-heart"></span></a></li>
                                  <?php if (!isset($_SESSION['email'])) { ?>
                                    <li class="add_to_cart"><a href="login.php" role="button">Buy Now</a></li>
                                    <?php
                                  } else {
                                    // //We have created a function to check whether this particular product is added to cart or not.
                                    if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                      echo '<li class="added_to_cart"><a href="cart.php" class="added_to_cart" disabled>Added to cart</a>';
                                    } else {

                                    ?>
                                      <li class="add_to_cart"><a href="cart-add.php?id=1" name="add" value="add" class="add_to_cart" title="Add to Cart">Add to cart</a></li>
                                  <?php
                                    }
                                  }
                                  ?>
                                  <li><a href="#" title="Compare"><i
                                        class="ion-ios-settings-strong"></i></a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="product_section p_section1 product_black_section bottom">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section_title">
              <h2>Bestselling Products</h2>
            </div>
          </div>
          <div class="col-12">
            <div class="product-area">
              <div class="product_container bottom">
                <div class="custom-row product_row1">
                  <div class="custom-col-5">
                    <div class="single_product">
                      <div class="product_thumb">
                        <a href="#" class="primary_img"><img src="images/product/71.jpg"
                            alt="product1"></a>
                        <a href="#" class="secondary_img"><img src="images/product/72.jpg"
                            alt="product1"></a>
                        <div class="quick_button">
                          <a href="#" data-toggle="modal" data-target="#modal_box"
                            data-placement="top" data-original-title="quick view">Quick
                            View</a>
                        </div>
                      </div>
                      <div class="product_content">
                        <div class="tag_cate">
                          <a href="#">Ring, Necklace,</a>
                          <a href="#">Earrings</a>
                        </div>
                        <h3><a href="#">Necklace Set</a></h3>
                        <div class="price_box">
                          <span class="old_price">Rs. 45654</span>
                          <span class="current_price">Rs. 44015</span>
                        </div>
                        <div class="product_hover">
                          <div class="product_ratings">
                            <ul>
                              <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                              </li>
                              <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                              </li>
                              <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                              </li>
                              <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                              </li>
                              <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                              </li>
                            </ul>
                          </div>
                          <div class="product_desc">
                            <p>This is a gold ring with diamond and Lorem ipsum
                              dolor sit amet.</p>
                          </div>
                          <div class="action_links">
                            <ul>
                              <li><a href="#" data-placement="top" title="Add to Wishlist"
                                  data-toggle="tooltip"><span
                                    class="ion-heart"></span></a></li>
                              <li class="add_to_cart"><a href="#" title="Add to Cart">Add
                                  to Cart</a></li>
                              <li><a href="#" title="Compare"><i
                                    class="ion-ios-settings-strong"></i></a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="custom-col-5">
                    <div class="single_product">
                      <div class="product_thumb">
                        <a href="#" class="primary_img"><img src="images/product/4.jpg"
                            alt="product1"></a>
                        <a href="#" class="secondary_img"><img src="images/product/5.jpg"
                            alt="product1"></a>
                        <div class="quick_button">
                          <a href="#" data-toggle="modal" data-target="#modal_box"
                            data-placement="top" data-original-title="quick view">Quick
                            View</a>
                        </div>
                      </div>
                      <div class="product_content">
                        <div class="tag_cate">
                          <a href="#">Ring, Necklace,</a>
                          <a href="#">Earrings</a>
                        </div>
                        <h3><a href="#">Necklace Set</a></h3>
                        <div class="price_box">
                          <span class="old_price">Rs. 45654</span>
                          <span class="current_price">Rs. 44015</span>
                        </div>
                        <div class="product_hover">
                          <div class="product_ratings">
                            <ul>
                              <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                              </li>
                              <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                              </li>
                              <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                              </li>
                              <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                              </li>
                              <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                              </li>
                            </ul>
                          </div>
                          <div class="product_desc">
                            <p>This is a gold ring with diamond and Lorem ipsum
                              dolor sit amet.</p>
                          </div>
                          <div class="action_links">
                            <ul>
                              <li><a href="#" data-placement="top" title="Add to Wishlist"
                                  data-toggle="tooltip"><span
                                    class="ion-heart"></span></a></li>
                              <li class="add_to_cart"><a href="#" title="Add to Cart">Add
                                  to Cart</a></li>
                              <li><a href="#" title="Compare"><i
                                    class="ion-ios-settings-strong"></i></a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="custom-col-5">
                    <div class="single_product">
                      <div class="product_thumb">
                        <a href="#" class="primary_img"><img src="images/product/10.jpg"
                            alt="product1"></a>
                        <a href="#" class="secondary_img"><img src="images/product/11.jpg"
                            alt="product1"></a>
                        <div class="quick_button">
                          <a href="#" data-toggle="modal" data-target="#modal_box"
                            data-placement="top" data-original-title="quick view">Quick
                            View</a>
                        </div>
                      </div>
                      <div class="product_content">
                        <div class="tag_cate">
                          <a href="#">Ring, Necklace,</a>
                          <a href="#">Earrings</a>
                        </div>
                        <h3><a href="#">Necklace Set</a></h3>
                        <div class="price_box">
                          <span class="old_price">Rs. 45654</span>
                          <span class="current_price">Rs. 44015</span>
                        </div>
                        <div class="product_hover">
                          <div class="product_ratings">
                            <ul>
                              <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                              </li>
                              <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                              </li>
                              <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                              </li>
                              <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                              </li>
                              <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                              </li>
                            </ul>
                          </div>
                          <div class="product_desc">
                            <p>This is a gold ring with diamond and Lorem ipsum
                              dolor sit amet.</p>
                          </div>
                          <div class="action_links">
                            <ul>
                              <li><a href="#" data-placement="top" title="Add to Wishlist"
                                  data-toggle="tooltip"><span
                                    class="ion-heart"></span></a></li>
                              <li class="add_to_cart"><a href="#" title="Add to Cart">Add
                                  to Cart</a></li>
                              <li><a href="#" title="Compare"><i
                                    class="ion-ios-settings-strong"></i></a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="custom-col-5">
                    <div class="single_product">
                      <div class="product_thumb">
                        <a href="#" class="primary_img"><img src="images/product/24.jpg"
                            alt="product1"></a>
                        <a href="#" class="secondary_img"><img src="images/product/22.jpg"
                            alt="product1"></a>
                        <div class="quick_button">
                          <a href="#" data-toggle="modal" data-target="#modal_box"
                            data-placement="top" data-original-title="quick view">Quick
                            View</a>
                        </div>
                      </div>
                      <div class="product_content">
                        <div class="tag_cate">
                          <a href="#">Ring, Necklace,</a>
                          <a href="#">Earrings</a>
                        </div>
                        <h3><a href="#">Necklace Set</a></h3>
                        <div class="price_box">
                          <span class="old_price">Rs. 45654</span>
                          <span class="current_price">Rs. 44015</span>
                        </div>
                        <div class="product_hover">
                          <div class="product_ratings">
                            <ul>
                              <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                              </li>
                              <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                              </li>
                              <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                              </li>
                              <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                              </li>
                              <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                              </li>
                            </ul>
                          </div>
                          <div class="product_desc">
                            <p>This is a gold ring with diamond and Lorem ipsum
                              dolor sit amet.</p>
                          </div>
                          <div class="action_links">
                            <ul>
                              <li><a href="#" data-placement="top" title="Add to Wishlist"
                                  data-toggle="tooltip"><span
                                    class="ion-heart"></span></a></li>
                              <li class="add_to_cart"><a href="#" title="Add to Cart">Add
                                  to Cart</a></li>
                              <li><a href="#" title="Compare"><i
                                    class="ion-ios-settings-strong"></i></a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="custom-col-5">
                    <div class="single_product">
                      <div class="product_thumb">
                        <a href="#" class="primary_img"><img src="images/product/26.jpg"
                            alt="product1"></a>
                        <a href="#" class="secondary_img"><img src="images/product/27.jpg"
                            alt="product1"></a>
                        <div class="quick_button">
                          <a href="#" data-toggle="modal" data-target="#modal_box"
                            data-placement="top" data-original-title="quick view">Quick
                            View</a>
                        </div>
                      </div>
                      <div class="product_content">
                        <div class="tag_cate">
                          <a href="#">Ring, Necklace,</a>
                          <a href="#">Earrings</a>
                        </div>
                        <h3><a href="#">Necklace Set</a></h3>
                        <div class="price_box">
                          <span class="old_price">Rs. 45654</span>
                          <span class="current_price">Rs. 44015</span>
                        </div>
                        <div class="product_hover">
                          <div class="product_ratings">
                            <ul>
                              <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                              </li>
                              <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                              </li>
                              <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                              </li>
                              <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                              </li>
                              <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                              </li>
                            </ul>
                          </div>
                          <div class="product_desc">
                            <p>This is a gold ring with diamond and Lorem ipsum
                              dolor sit amet.</p>
                          </div>
                          <div class="action_links">
                            <ul>
                              <li><a href="#" data-placement="top" title="Add to Wishlist"
                                  data-toggle="tooltip"><span
                                    class="ion-heart"></span></a></li>
                              <li class="add_to_cart"><a href="#" title="Add to Cart">Add
                                  to Cart</a></li>
                              <li><a href="#" title="Compare"><i
                                    class="ion-ios-settings-strong"></i></a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="custom-col-5">
                    <div class="single_product">
                      <div class="product_thumb">
                        <a href="#" class="primary_img"><img src="images/product/28.jpg"
                            alt="product1"></a>
                        <a href="#" class="secondary_img"><img src="images/product/29.jpg"
                            alt="product1"></a>
                        <div class="quick_button">
                          <a href="#" data-toggle="modal" data-target="#modal_box"
                            data-placement="top" data-original-title="quick view">Quick
                            View</a>
                        </div>
                      </div>
                      <div class="product_content">
                        <div class="tag_cate">
                          <a href="#">Ring, Necklace,</a>
                          <a href="#">Earrings</a>
                        </div>
                        <h3><a href="#">Necklace Set</a></h3>
                        <div class="price_box">
                          <span class="old_price">Rs. 45654</span>
                          <span class="current_price">Rs. 44015</span>
                        </div>
                        <div class="product_hover">
                          <div class="product_ratings">
                            <ul>
                              <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                              </li>
                              <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                              </li>
                              <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                              </li>
                              <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                              </li>
                              <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                              </li>
                            </ul>
                          </div>
                          <div class="product_desc">
                            <p>This is a gold ring with diamond and Lorem ipsum
                              dolor sit amet.</p>
                          </div>
                          <div class="action_links">
                            <ul>
                              <li><a href="#" data-placement="top" title="Add to Wishlist"
                                  data-toggle="tooltip"><span
                                    class="ion-heart"></span></a></li>
                              <li class="add_to_cart"><a href="#" title="Add to Cart">Add
                                  to Cart</a></li>
                              <li><a href="#" title="Compare"><i
                                    class="ion-ios-settings-strong"></i></a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="custom-col-5">
                    <div class="single_product">
                      <div class="product_thumb">
                        <a href="#" class="primary_img"><img src="images/product/32.jpg"
                            alt="product1"></a>
                        <a href="#" class="secondary_img"><img src="images/product/33.jpg"
                            alt="product1"></a>
                        <div class="quick_button">
                          <a href="#" data-toggle="modal" data-target="#modal_box"
                            data-placement="top" data-original-title="quick view">Quick
                            View</a>
                        </div>
                      </div>
                      <div class="product_content">
                        <div class="tag_cate">
                          <a href="#">Ring, Necklace,</a>
                          <a href="#">Earrings</a>
                        </div>
                        <h3><a href="#">Necklace Set</a></h3>
                        <div class="price_box">
                          <span class="old_price">Rs. 45654</span>
                          <span class="current_price">Rs. 44015</span>
                        </div>
                        <div class="product_hover">
                          <div class="product_ratings">
                            <ul>
                              <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                              </li>
                              <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                              </li>
                              <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                              </li>
                              <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                              </li>
                              <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                              </li>
                            </ul>
                          </div>
                          <div class="product_desc">
                            <p>This is a gold ring with diamond and Lorem ipsum
                              dolor sit amet.</p>
                          </div>
                          <div class="action_links">
                            <ul>
                              <li><a href="#" data-placement="top" title="Add to Wishlist"
                                  data-toggle="tooltip"><span
                                    class="ion-heart"></span></a></li>
                              <li class="add_to_cart"><a href="#" title="Add to Cart">Add
                                  to Cart</a></li>
                              <li><a href="#" title="Compare"><i
                                    class="ion-ios-settings-strong"></i></a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="custom-col-5">
                    <div class="single_product">
                      <div class="product_thumb">
                        <a href="#" class="primary_img"><img src="images/product/34.jpg"
                            alt="product1"></a>
                        <a href="#" class="secondary_img"><img src="images/product/35.jpg"
                            alt="product1"></a>
                        <div class="quick_button">
                          <a href="#" data-toggle="modal" data-target="#modal_box"
                            data-placement="top" data-original-title="quick view">Quick
                            View</a>
                        </div>
                      </div>
                      <div class="product_content">
                        <div class="tag_cate">
                          <a href="#">Ring, Necklace,</a>
                          <a href="#">Earrings</a>
                        </div>
                        <h3><a href="#">Necklace Set</a></h3>
                        <div class="price_box">
                          <span class="old_price">Rs. 45654</span>
                          <span class="current_price">Rs. 44015</span>
                        </div>
                        <div class="product_hover">
                          <div class="product_ratings">
                            <ul>
                              <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                              </li>
                              <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                              </li>
                              <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                              </li>
                              <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                              </li>
                              <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                              </li>
                            </ul>
                          </div>
                          <div class="product_desc">
                            <p>This is a gold ring with diamond and Lorem ipsum
                              dolor sit amet.</p>
                          </div>
                          <div class="action_links">
                            <ul>
                              <li><a href="#" data-placement="top" title="Add to Wishlist"
                                  data-toggle="tooltip"><span
                                    class="ion-heart"></span></a></li>
                              <li class="add_to_cart"><a href="#" title="Add to Cart">Add
                                  to Cart</a></li>
                              <li><a href="#" title="Compare"><i
                                    class="ion-ios-settings-strong"></i></a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="custom-col-5">
                    <div class="single_product">
                      <div class="product_thumb">
                        <a href="#" class="primary_img"><img src="images/product/38.jpg"
                            alt="product1"></a>
                        <a href="#" class="secondary_img"><img src="images/product/39.jpg"
                            alt="product1"></a>
                        <div class="quick_button">
                          <a href="#" data-toggle="modal" data-target="#modal_box"
                            data-placement="top" data-original-title="quick view">Quick
                            View</a>
                        </div>
                      </div>
                      <div class="product_content">
                        <div class="tag_cate">
                          <a href="#">Ring, Necklace,</a>
                          <a href="#">Earrings</a>
                        </div>
                        <h3><a href="#">Necklace Set</a></h3>
                        <div class="price_box">
                          <span class="old_price">Rs. 45654</span>
                          <span class="current_price">Rs. 44015</span>
                        </div>
                        <div class="product_hover">
                          <div class="product_ratings">
                            <ul>
                              <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                              </li>
                              <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                              </li>
                              <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                              </li>
                              <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                              </li>
                              <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                              </li>
                            </ul>
                          </div>
                          <div class="product_desc">
                            <p>This is a gold ring with diamond and Lorem ipsum
                              dolor sit amet.</p>
                          </div>
                          <div class="action_links">
                            <ul>
                              <li><a href="#" data-placement="top" title="Add to Wishlist"
                                  data-toggle="tooltip"><span
                                    class="ion-heart"></span></a></li>
                              <li class="add_to_cart"><a href="#" title="Add to Cart">Add
                                  to Cart</a></li>
                              <li><a href="#" title="Compare"><i
                                    class="ion-ios-settings-strong"></i></a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="custom-col-5">
                    <div class="single_product">
                      <div class="product_thumb">
                        <a href="#" class="primary_img"><img src="images/product/40.jpg"
                            alt="product1"></a>
                        <a href="#" class="secondary_img"><img src="images/product/41.jpg"
                            alt="product1"></a>
                        <div class="quick_button">
                          <a href="#" data-toggle="modal" data-target="#modal_box"
                            data-placement="top" data-original-title="quick view">Quick
                            View</a>
                        </div>
                      </div>
                      <div class="product_content">
                        <div class="tag_cate">
                          <a href="#">Ring, Necklace,</a>
                          <a href="#">Earrings</a>
                        </div>
                        <h3><a href="#">Necklace Set</a></h3>
                        <div class="price_box">
                          <span class="old_price">Rs. 45654</span>
                          <span class="current_price">Rs. 44015</span>
                        </div>
                        <div class="product_hover">
                          <div class="product_ratings">
                            <ul>
                              <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                              </li>
                              <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                              </li>
                              <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                              </li>
                              <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                              </li>
                              <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                              </li>
                            </ul>
                          </div>
                          <div class="product_desc">
                            <p>This is a gold ring with diamond and Lorem ipsum
                              dolor sit amet.</p>
                          </div>
                          <div class="action_links">
                            <ul>
                              <li><a href="#" data-placement="top" title="Add to Wishlist"
                                  data-toggle="tooltip"><span
                                    class="ion-heart"></span></a></li>
                              <li class="add_to_cart"><a href="#" title="Add to Cart">Add
                                  to Cart</a></li>
                              <li><a href="#" title="Compare"><i
                                    class="ion-ios-settings-strong"></i></a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="custom-col-5">
                    <div class="single_product">
                      <div class="product_thumb">
                        <a href="#" class="primary_img"><img src="images/product/42.jpg"
                            alt="product1"></a>
                        <a href="#" class="secondary_img"><img src="images/product/43.jpg"
                            alt="product1"></a>
                        <div class="quick_button">
                          <a href="#" data-toggle="modal" data-target="#modal_box"
                            data-placement="top" data-original-title="quick view">Quick
                            View</a>
                        </div>
                      </div>
                      <div class="product_content">
                        <div class="tag_cate">
                          <!-- make this corection in all products above -->
                          <a href="#">Ring, Necklace,</a>
                          <a href="#">Earrings</a>
                        </div>
                        <h3><a href="#">Necklace Set</a></h3>
                        <div class="price_box">
                          <span class="old_price">Rs. 45654</span>
                          <span class="current_price">Rs. 44015</span>
                        </div>
                        <div class="product_hover">
                          <div class="product_ratings">
                            <ul>
                              <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                              </li>
                              <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                              </li>
                              <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                              </li>
                              <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                              </li>
                              <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                              </li>
                            </ul>
                          </div>
                          <div class="product_desc">
                            <p>This is a gold ring with diamond and Lorem ipsum
                              dolor sit amet.</p>
                          </div>
                          <div class="action_links">
                            <ul>
                              <li><a href="#" data-placement="top" title="Add to Wishlist"
                                  data-toggle="tooltip"><span
                                    class="ion-heart"></span></a></li>
                              <li class="add_to_cart"><a href="#" title="Add to Cart">Add
                                  to Cart</a></li>
                              <li><a href="#" title="Compare"><i
                                    class="ion-ios-settings-strong"></i></a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php
    include('includes/footer.php');
    ?>
    <!-- footer section ends -->
  </div>

  <!-- modal section starts -->
  <div class="modal fade" id="modal_box" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal_body">
          <div class="container">
            <div class="row">
              <div class="col-lg-5 col-md-5 col-sm-12">
                <div class="modal_tab">
                  <div class="tab-content product-details-large">
                    <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                      <div class="modal_tab_img">
                        <a href="#"><img src="images/product/70.jpg" alt=""></a>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="tab2" role="tabpanel">
                      <div class="modal_tab_img">
                        <a href="#"><img src="images/product/71.jpg" alt=""></a>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="tab3" role="tabpanel">
                      <div class="modal_tab_img">
                        <a href="#"><img src="images/product/72.jpg" alt=""></a>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="tab4" role="tabpanel">
                      <div class="modal_tab_img">
                        <a href="#"><img src="images/product/73.jpg" alt=""></a>
                      </div>
                    </div>
                  </div>
                  <div class="modal_tab_button">
                    <!-- <ul class="nav product_navactive owl-carousel" role="tablist">
                                            <li>
                                                <a href="#tab1" class="nav-link active" data-toggle="tab" role="tab"
                                                    aria-controls="tab1" aria-selected="false"><img
                                                        src="images/product/70.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a href="#tab2" class="nav-link" data-toggle="tab" role="tab"
                                                    aria-controls="tab2" aria-selected="false"><img
                                                        src="images/product/71.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a href="#tab3" class="nav-link button_three" data-toggle="tab"
                                                    role="tab" aria-controls="tab3" aria-selected="false"><img
                                                        src="images/product/72.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a href="#tab4" class="nav-link" data-toggle="tab" role="tab"
                                                    aria-controls="tab4" aria-selected="false"><img
                                                        src="images/product/73.jpg" alt=""></a>
                                            </li>
                                        </ul> -->
                  </div>
                </div>
              </div>
              <div class="col-lg-7 col-md-7 col-sm-12">
                <div class="modal_right">
                  <div class="modal_title mb-10">
                    <h2>Women's Necklace</h2>
                  </div>
                  <div class="modal_price mb-10">
                    <span class="new_price">Rs. 51164</span>
                    <span class="old_price">Rs. 54164</span>
                  </div>
                  <div class="see_all">
                    <a href="#">See All Features</a>
                  </div>
                  <div class="modal_add_to_cart mb-15">
                    <form action="#">
                      <input type="number" min="0" max="100" step="1">
                      <button type="submit">Add To Cart</button>
                    </form>
                  </div>
                  <div class="modal_description mb-15">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus quibusdam
                      nisi voluptas consequatur tempora, recusandae nemo blanditiis eaque odit
                      voluptatibus voluptatem, ipsa incidunt fugiat a.</p>
                  </div>
                  <div class="modal_social">
                    <h2>Share this Product</h2>
                    <ul>
                      <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                      <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                      <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                      <li><a href="#"><i class="ion-social-youtube"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- modal section ends -->




  <?php
  include('includes/script-links.php');
  ?>


</body>

</html>