<footer class="footer-emp-wvls py-5">
        <div class="container py-xl-5 py-lg-3">
            <div class="row footer-top">
                <div class="col-lg-5 footer-grid-wthree">
                    <h1 class="footer-title text-white mb-4">Get In Touch</h1>
                    <div class="contact-info">
                        <!-- <h4 class="text-light text-uppercase mb-2">Location :</h4>
                        <p>JMD Megapolis, <span>Gurgaon.</span></p> -->
                        <div class="phone mt-4 pt-2">
                            <h4 class="text-light text-uppercase mb-2">Contact :</h4>
                            <p>Phone : +91 97110 00152</p>
                            <p>Email :
                                <a href="mailto:info@example.com">info@weevaa.com</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 footer-grid-wthree mt-lg-0 mt-4">
                    <h2 class="footer-title text-white mb-4">Quick Links</h2>
                    <ul class="links list-unstyled">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li class="my-2">
                            <a href="about.php">About Us</a>
                        </li>
                        <li class="my-2">
                            <a href="gallery.php">Gallery</a>
                        </li>
                        <li>
                            <a href="contact.php">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 footer-grid-wthree mt-lg-0 mt-5">
                    <div class="footer-title">
                        <a class="navbar-brand" href="index.php">
                            <img src="images/logo.png" class="logo img-fluid" alt="">
                        </a>
                    </div>
                    <p class="copy-right text-center mt-4" style="margin-top: 5.5rem !important;">&copy; 2022. All
                        Rights Reserved | Design by
                        <a href="http://weevaa.com/"> weevaa </a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- //footer -->


    <!-- Js files -->
    <!-- JavaScript -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- Default-JavaScript-File -->

    <!-- navigation -->
    <!-- dropdown smooth -->
    <script>
    $(document).ready(function() {
        $(".dropdown").hover(
            function() {
                $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                $(this).toggleClass('open');
            },
            function() {
                $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                $(this).toggleClass('open');
            }
        );
    });
    </script>
    <!-- //dropdown smooth -->
    <!-- fixed nav -->
    <script>
    $(window).scroll(function() {
        if ($(document).scrollTop() > 50) {
            $('nav').addClass('shrink');
        } else {
            $('nav').removeClass('shrink');
        }
    });
    </script>
    <!-- //fixed nav -->
    <!-- //navigation -->

    <!-- carousel -->
    <script src="js/carousel.js"></script>
    <link rel="stylesheet" href="css/carousel.css" type="text/css" media="all" />
    <!-- //carousel -->

    <!-- smooth scrolling -->
    <script src="js/SmoothScroll.min.js"></script>
    <!-- move-top -->
    <script src="js/move-top.js"></script>
    <!-- easing -->
    <script src="js/easing.js"></script>
    <!--  necessary snippets for few javascript files -->
    <script src="js/look.js"></script>

    <script src="js/bootstrap.js"></script>
    <!-- Necessary-JavaScript-File-For-Bootstrap -->
    <!-- //Js files -->


</body>

</html>