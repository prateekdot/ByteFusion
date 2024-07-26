@extends('layouts.app')

@section('title', 'ByteFusion  - Services : ByteFusion')

@section('content')

    <!-- inner banner -->
    <div class="inner-banner">
        <section class="w3l-breadcrumb">
            <div class="container">
                <h4 class="inner-text-title font-weight-bold mb-2">Services</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.blade.php">Home</a></li>
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>Services</li>
                </ul>
            </div>
        </section>
    </div>
    <!-- //inner banner -->

    <!-- service section -->
    <section class="w3l-servicesblock py-5">
        <div class="container py-lg-5 py-md-3">
            <div class="row">
                <div class="col-lg-6 about-right-faq align-self pr-lg-5">
                    <h3 class="title-big">Powerful Solution For Your Startup Business</h3>
                    <p class="mt-3 mb-4">Byte Fusion empowers startups with cutting-edge solutions tailored for success.
                        With Byte Fusion, your startup has the tools it needs to thrive in today's competitive landscape.
                    </p>
                    <div class="progress-info info1">
                        <h6 class="progress-tittle"> MVP Development <span class="">80%</span></h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 80%"
                                aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <div class="progress-info info2">
                        <h6 class="progress-tittle">Scalable Infrastructure <span class="">95%</span>
                        </h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 95%"
                                aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <div class="progress-info info3 mb-0">
                        <h6 class="progress-tittle">Strategic Consultation <span class="">75%</span></h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 75%"
                                aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 left-wthree-img mt-lg-0 mt-5">
                    <img src="assets/images/service2.png" alt="" class="img-fluid radius-image">
                </div>
            </div>
            <div class="row mt-5 pt-5">
                <div class="col-lg-6 left-wthree-img mt-lg-0 mt-5 order-lg-first order-last">
                    <img src="assets/images/service1.png" alt="" class="img-fluid radius-image">
                </div>
                <div class="col-lg-6 about-right-faq align-self pl-lg-5 order-lg-last order-first">
                    <h3 class="title-big">We Provide Awesome Services For You</h3>
                    <p class="mt-3">At Byte Fusion, our service is awesome because we combine expertise, innovation, collaboration, quality, and
                        ongoing support to deliver exceptional solutions.
                        We're not just a service provider; we're your partner in success, committed to creating remarkable outcomes together.</p>
                    <a class="btn button-style mt-lg-5 mt-4" href="about.blade.php">Learn More </a>
                </div>
            </div>
        </div>
    </section>
    <!-- //service section -->

    <!-- bottom-grids-->
    <section class="w3l-bottom-grids-6 py-5">
        <div class="container py-lg-5 py-md-4">
            <div class="text-center mb-sm-5 mb-4">
                <label class="sub-title mb-2">Features</label>
                <h3 class="title-big">What We Provide</h3>
            </div>
            <div class="grids-area-hny main-cont-wthree-fea row">
                <div class="col-lg-4 col-md-6 grids-feature">
                    <div class="area-box">
                        <span class="fab fa-windows icon-color"></span>
                        <h4><a href="#feature" class="title-head">Software Development</a></h4>
                        <p>Byte Fusion specializes in custom software development, crafting tailored solutions to meet your unique business needs. With expertise in various technologies and industries, we deliver high-quality software.</p>
                        <a href="#url" class="more">Read More </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grids-feature mt-md-0 mt-4">
                    <div class="area-box">
                        <span class="fas fa-tablet-alt icon-color"></span>
                        <h4><a href="#feature" class="title-head">Mobile Apps</a></h4>
                        <p>Byte Fusion excels in Mobile Application Development, crafting innovative solutions for iOS, Android, and cross-platform, ensuring engaging user interfaces and experiences for your successful business.</p>
                        <a href="#url" class="more">Read More </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grids-feature mt-lg-0 mt-4">
                    <div class="area-box">
                        <span class="fab Font-Awesome-Icons-CSS icon-color"></span>
                        <h4><a href="#feature" class="title-head">Web Development</a></h4>
                        <p>Byte Fusion specializes in web development, delivering tailored solutions with cutting-edge design and functionality. From responsive websites to scalable web applications, we create your digital world. </p>
                        <a href="#url" class="more">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grids-feature mt-lg-5 mt-4">
                    <div class="area-box">
                        <span class="fab fa-pinterest-p icon-color"></span>
                        <h4><a href="#feature" class="title-head">SEO Service</a></h4>
                        <p>Byte Fusion offers SEO services to boost your online presence. With data-driven strategies and targeted optimization, we improve your search engine rankings, driving more traffic and business opportunities.</p>
                        <a href="#url" class="more">Read More </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grids-feature mt-lg-5 mt-4">
                    <div class="area-box">
                        <span class="fab fa-twitter icon-color"></span>
                        <h4><a href="#feature" class="title-head"> Digital Marketing</a></h4>
                        <p>Byte Fusion maximizes brand visibility on Facebook, Instagram, and TikTok. Our ads campaigns ,engaging contents drive meaningful engagement, boosting your brand's online presence ,delivering measurable results.</p>
                        <a href="#url" class="more">Read More </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grids-feature mt-lg-5 mt-4">
                    <div class="area-box">
                        <span class="fas fa-coffee icon-color"></span>
                        <h4><a href="#feature" class="title-head">IT Consulting</a></h4>
                        <p>Byte Fusion offers expert IT consulting services, providing tailored solutions to optimize your technology infrastructure. With our guidance, you can enhance efficiency, scalability and security, ensuring long-term success.</p>
                        <a href="#url" class="more">Read More </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //bottom-grids-->

    <!-- 3 grids -->
    <section class="w3l-features-4">
        <div class="features4-block text-center py-5">
            <div class="container py-md-5 py-3">
                <div class="row features4-grids justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="features4-grid">
                            <div class="feature-images">
                                <span class="fas fa-business-time icon-color" aria-hidden="true"></span>
                            </div>
                            <h5><a href="contact.blade.php">1. Tailored Solutions</a></h5>
                            <p>We understand your business needs and create customized software solutions to drive your growth.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-md-0 mt-2">
                        <div class="features4-grid">
                            <div class="feature-images">
                                <span class="fas fa-laptop-code icon-color" aria-hidden="true"></span>
                            </div>
                            <h5><a href="contact.blade.php">2. Transparent Communication</a></h5>
                            <p>We keep you informed every step of the way, ensuring your vision is realized through clear and open communication.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-0 mt-2">
                        <div class="features4-grid">
                            <div class="feature-images">
                                <span class="fas fa-clipboard-check icon-color" aria-hidden="true"></span>
                            </div>
                            <h5><a href="contact.blade.php">3. Quality and Flexibility</a></h5>
                            <p>Our commitment to quality ensures that your software solution is not only tailored to your needs but also adaptable to future changes and growth.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 3 grids -->

    <!-- promocode section -->
    <section class="w3l-promocode">
        <div class="promo-block py-5">
            <div class="container py-md-5 py-4">
                <div class="row aap-4-section">
                    <div class="col-lg-6 app4-right-image">
                        <img src="assets/images/mobile.png" class="img-fluid" alt="App Device" />
                    </div>
                    <div class="col-lg-6 app4-left-text pl-lg-0 mb-lg-0 mb-5">
                        <h6>For 30% Discount</h6>
                        <h4>Get Our Promocode</h4>
                        <p class="mb-4"> Planning to use our service the for first time .Type in your email and get 30% on every deal. </p>
                        <div class="app-4-connection">
                            <div class="newsletter">
                                <label>Never Miss a Deal !</label>
                                <form action="#" methos="GET" class="d-flex wrap-align">
                                    <input type="email" placeholder="Enter your email id" required="required" />
                                    <button type="submit" class="button-style">Get Promocode</button>
                                </form>
                            </div>
                            <p class="mobile-text-app mt-4 pt-2">(Or) To Get Our Mobile Apps</p>
                            <div class="app-4-icon">
                                <ul>
                                    <li><a href="#url" title="Apple" class="app-icon apple-vv"><span
                                                class="fab fa-apple  icon-color" aria-hidden="true"></span></a></li>
                                    <li><a href="#url" title="Google play" class="app-icon play-vv"><span
                                                class="fab fa-google-play icon-color" aria-hidden="true"></span></a>
                                    </li>
                                    <li><a href="#url" title="Microsoft" class="app-icon windows-vv"><span
                                                class="fab fa-windows icon-color" aria-hidden="true"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //promocode section -->

    <!-- Js scripts -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fas fa-level-up-alt" aria-hidden="true"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- //move top -->

    <!-- common jquery plugin -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- //common jquery plugin -->

    <!-- theme switch js (light and dark)-->
    <script src="assets/js/theme-change.js"></script>
    <script>
        function autoType(elementClass, typingSpeed) {
            var thhis = $(elementClass);
            thhis.css({
                "position": "relative",
                "display": "inline-block"
            });
            thhis.prepend('<div class="cursor" style="right: initial; left:0;"></div>');
            thhis = thhis.find(".text-js");
            var text = thhis.text().trim().split('');
            var amntOfChars = text.length;
            var newString = "";
            thhis.text("|");
            setTimeout(function () {
                thhis.css("opacity", 1);
                thhis.prev().removeAttr("style");
                thhis.text("");
                for (var i = 0; i < amntOfChars; i++) {
                    (function (i, char) {
                        setTimeout(function () {
                            newString += char;
                            thhis.text(newString);
                        }, i * typingSpeed);
                    })(i + 1, text[i]);
                }
            }, 1500);
        }

        $(document).ready(function () {
            // Now to start autoTyping just call the autoType function with the
            // class of outer div
            // The second paramter is the speed between each letter is typed.
            autoType(".type-js", 200);
        });
    </script>
    <!-- //theme switch js (light and dark)-->

    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!--bootstrap-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- //bootstrap-->
    <!-- //Js scripts -->

@endsection

