    <footer class="footer_widgets footer_black">
      <div class="container">
        <div class="footer_top">
          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-8">
              <div class="widgets_container contact_us">
                <h3>About Prem Ratna Jyasa Pasa:</h3>
                <div class="footer_contact">
                  <p>Address : Tabahal, Kumaripati, Lalitpur</p>
                  <p>Phone : <a href="tel:+977 981-8695679">+977 981-8695679</a></p>
                  <p>Email : PremRatnaJyasa@gmail.com</p>
                  <ul>
                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                    <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                    <li><a href="#"><i class="ion-social-youtube"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-4 col-6">
              <div class="widgets_container widget_menu">
                <h3>Information</h3>
                <div class="footer_menu">
                  <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Collection</a></li>
                    <li><a href="#">Portfolio</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-5 col-6">
              <div class="widgets_container widget_menu">
                <h3>My Account</h3>
                <div class="footer_menu">
                  <ul>
                    <li><a href="#">My Account</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Checkout</a></li>
                    <li><a href="#">Frequently Questions</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-7">
              <div class="widgets_container product_widget">
                <h3>Top Rated Products</h3>
                <div class="simple_product">
                  <div class="simple_product_items">
                    <div class="simple_product_thumb">
                      <a href="#"><img src="images/product/14.jpg" alt=""></a>
                    </div>
                    <div class="simple_product_content">
                      <div class="tag_cate">
                        <a href="#">Women,</a>
                        <a href="#">Earrings</a>
                      </div>
                      <div class="product_name">
                        <h3><a href="#">Bracelet</a></h3>
                      </div>
                      <div class="product_price">
                        <span class="old_price">Rs. 45612.54</span>
                        <span class="current_price">Rs. 41612.54</span>
                      </div>
                    </div>
                  </div>
                  <div class="simple_product_items">
                    <div class="simple_product_thumb">
                      <a href="./product.php"><img src="images/product/28.jpg" alt=""></a>
                    </div>
                    <div class="simple_product_content">
                      <div class="tag_cate">
                        <a href="#">Women,</a>
                        <a href="#">Earrings</a>
                      </div>
                      <div class="product_name">
                        <h3><a href="#">Ring</a></h3>
                      </div>
                      <div class="product_price">
                        <span class="old_price">Rs. 75612.54</span>
                        <span class="current_price">Rs. 71612.54</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer_bottom">
          <div class="row">
            <div class="col-12">
              <div class="copyright_area">
                <?php
                $year = date('Y');
                $copyrightText =
                  isset($siteRegulars) && is_object($siteRegulars) && isset($siteRegulars->copyright)
                  ? str_replace('{year}', $year, $siteRegulars->copyright)
                  : "© $year Prem Ratna Jyasa Pasa: All rights reserved.";

                echo '<p>' . $copyrightText .
                  ' Developed by <a href="https://maharjan-sajan.com.np/" target="_blank">Sajan Maharjan</a></p>';
                ?>
                <img src="images/icon/papyel2.png" alt="">
              </div>
            </div>
          </div>
        </div>

      </div>
    </footer>