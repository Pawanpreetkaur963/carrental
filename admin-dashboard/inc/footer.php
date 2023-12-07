 <footer class="off-white-bg">
            <!-- Footer Top Start -->
            <div class="footer-top pt-50 pb-60">
                <div class="container">
                                
                    <div class="row">
                        <!-- Single Footer Start -->
                        <div class="col-lg-4  col-md-7 col-sm-6">
                            <div class="single-footer">
                                <h3>Contact us</h3>
                                <div class="footer-content">
                                    <div class="loc-address">
                                        <span><i class="fa fa-map-marker"></i><?php echo $compinfo['address']; ?></span>
                                        <span><i class="fa fa-envelope-o"></i><?php echo $compinfo['email']; ?></span>
                                        <span><i class="fa fa-phone"></i><?php echo $compinfo['mobileno']; ?></span>
                                    </div>
                                    <div class="payment-mth"><a><img class="img" src="img/footer/1.png" alt="payment-image"></a></div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Footer Start -->
                        <!-- Single Footer Start -->
                        <div class="col-lg-2  col-md-5 col-sm-6 footer-full">
                            <div class="single-footer">
                                <h3 class="footer-title">Information</h3>
                                <div class="footer-content">
                                    <ul class="footer-list">
                                        <li><a href="#">Site Map</a></li>
                                        <li><a href="#">Specials</a></li>
                                        <li><a href="#">Delivery Information</a></li>
                                        <li><a href="#">Order History</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Single Footer Start -->
                        <!-- Single Footer Start -->
                        <div class="col-lg-2  col-md-4 col-md-4 col-sm-6 footer-full">
                            <div class="single-footer">
                                <h3 class="footer-title">My Account</h3>
                                <div class="footer-content">
                                    <ul class="footer-list">
                                        <li><a href="account.html">My account</a></li>
                                        <li><a href="#">Checkout</a></li>
                                        <li><a href="#">Login</a></li>
                                        <li><a href="#">Order status</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Single Footer Start -->
                        <!-- Single Footer Start -->
                        <div class="col-lg-2 col-md-4 col-sm-6 footer-full">
                            <div class="single-footer">
                                <h3 class="footer-title">customer service</h3>
                                <div class="footer-content">
                                    <ul class="footer-list">
                                        
                                        <li><a href="#">Create New Account</a></li>
                                      
                                        <li><a href="#">Return Policy</a></li>
                                        <li><a href="#">Your Orders</a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Single Footer Start -->
                        <!-- Single Footer Start -->
                        <div class="col-lg-2 col-md-4 col-sm-6 footer-full">
                            <div class="single-footer">
                                <h3 class="footer-title">Let Us Help You</h3>
                                <div class="footer-content">
                                    <ul class="footer-list">
                                        <li><a href="#">Your Account</a></li>
                                        <li><a href="#">Your Orders</a></li>
                                        <li><a href="#">Shipping</a></li>
                                        <li><a href="#">Replacements</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Single Footer Start -->
                    </div>
                    <!-- Row End -->
                </div>
                <!-- Container End -->
            </div>
            <!-- Footer Top End -->
            <!-- Footer Bottom Start -->
            <div class="footer-bottom off-white-bg2">
                <div class="container">
                    <div class="footer-bottom-content">
                        <p class="copy-right-text">Copyright © <a  href="#">Aatadal.com</a> All Rights Reserved.</p>
                        <div class="footer-social-content">
                            <ul class="social-content-list">
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-wifi"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Container End -->
            </div>
            <!-- Footer Bottom End -->
        </footer>
        <!-- Footer End -->
    </div>
    <!-- Wrapper End -->
    <!-- jquery 3.12.4 -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- mobile menu js  -->
    <script src="js/jquery.meanmenu.min.js"></script>
    <!-- scroll-up js -->
    <script src="js/jquery.scrollUp.js"></script>
    <!-- owl-carousel js -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- slick js -->
    <script src="js/slick.min.js"></script>
    <!-- wow js -->
    <script src="js/wow.min.js"></script>
    <!-- price slider js -->
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <!-- nivo slider js -->
    <script src="js/jquery.nivo.slider.js"></script>
    <!-- fancybox js -->
    <script src="js/jquery.fancybox.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- popper -->
    <script src="js/popper.js"></script>
    <!-- plugins -->
    <script src="js/plugins.js"></script>
    <!-- main js -->
    <script src="js/main.js"></script>
</body>

<script>
			$('#nav-owl').owlCarousel({
    loop:false,
    margin:10,
    responsive:{
        0:{
            items:3
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})

$('.owl-carousel-arrival').owlCarousel({
    loop:false,
    margin:10,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})

		</script>

</html>