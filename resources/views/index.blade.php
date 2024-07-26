<!--
Author: ByteFusion
Author URL: http://ByteFusion.com
-->
@extends('layouts.app')

@section('title', 'Home - ByteFusion')

@section('content')
    <!-- banner section -->
    <section id="home" class="w3l-banner py-5">
        <!-- <div class="banner-image"> -->
        <div class="banner-content">
            <div class="container pt-5 pb-md-4">
                <div class="row align-items-center">
                    <div class="col-md-6 pt-md-0 pt-4">
                        <h1 class="mb-lg-4 mb-3 title"><b>We Are </b><span class="typed-text"></span>
                            <span
                                class="cursor">&nbsp</span></h1>
                        <p>Engineered for perfection technology that's easy to use. We believe in the power of generational innovation
                            and excellence collide. If you can dream it, we can build it.
                        </p>
                        <div class="mt-md-5 mt-4 mb-lg-0 mb-4">
                            <a class="btn button-style" href="{{ url('/about') }}">Explore Our Offering</a>
                        </div>
                    </div>
                    <div class="col-md-6 mt-md-0 mt-4">
                        <img class="img-fluid" src="{{('assets/images/bann1.png')}}" alt=" ">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //banner section -->

    <!-- about section -->
    <div class="w3l-content-photo-5 py-5">
        <div class="container py-lg-5 py-4">
            <div class="row align-items-center">
                <div class="col-md-6 content-photo order-md-first order-last">
                    <a href="#image"><img src="{{('assets/images/home-ab.png')}}" class="img-fluid" alt="content-photo"></a>
                </div>
                <div class="col-md-6 content-left mb-md-0 mb-5 pl-lg-5 order-md-last order-first">
                    <h3 class="mb-3">Innovating Tech and Business Space.</h3>
                    <hr>
                    <p>We provide comprehensive support on your appplications and business infrastructure:</p>
                    <p class="mt-3">
                        <ul class='p__list'>
                            <li>Management and Support</li>
                            <li>Software as a Service</li>
                            <li>Security</li>
                            <li>Development</li>
                            <li>Help Desk Services</li>
                            <li>Migration</li>
                        </ul>
                    </p>
                    <a class="btn button-style mt-lg-5 mt-4" href="{{ url('/about') }}">Learn More </a>
                </div>
            </div>
        </div>
    </div>
    <!-- //about section -->

    <!-- team with text section -->
    <section class="w3l-content-11-main">
        <div class="content-design-11 py-5">
            <div class="container">
                <div class="mx-auto text-center mb-sm-5 mb-4" style="max-width:800px">
                    <h3 class="title-main-2 text-center mx-auto mb-sm-4 mb-2" style="max-width:600px">Powering The <span style="color:Skyblue;">Next Big</span></h3>
                    <p class="sub-para-style">Over the years, <i class="fab fa-goggle-icon-color mr-1"></i>Byte<span>Fusion</span> has provided solution for countless business infrastructures.
                        We render Software as a service , managerial services and Consult. If you can dream it, we can build it.
                    </p>
                </div>
                <!-- <div class="row justify-content-center pt-lg-2">
                    <div class="col-md-4 col-sm-6">
                        <div class="position-relative">
                            <img src="assets/images/me.png" class="img-responsive" alt="content-photo">
                            <div class="text-position">
                                <h4><a href="about.blade.php">Suman Khadka</a></h4>
                                <p>CTO</p>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="col-md-4 col-sm-6 mt-sm-0 mt-4">
                        <div class="position-relative">
                            <img src="assets/images/project-image05.png" class="img-responsive" alt="content-photo">
                            <div class="text-position">
                                <h4><a href="about.blade.php">Blessing Bamgboye</a></h4>
                                <p>CFO</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mt-md-0 mt-4">
                        <div class="position-relative">
                            <img src="assets/images/team2.jpg" class="img-responsive" alt="content-photo">
                            <div class="text-position">
                                <h4><a href="about.blade.php">Henry Itondo</a></h4>
                                <p>Subtitle</p>
                            </div>
                        </div>
                    </div> -->
                <!-- </div> -->
            </div>
        </div>
    </section>
    <!-- //team with text section -->

    <!-- features section -->
    <section class="features-section pt-5" id="work">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 left-wthree-img order-lg-first order-last">
                    <img src="{{('assets/images/undraw_software_engineer.svg')}}" alt="" class="img-fluid img-responsive">
                </div>
                <div class="col-lg-8 right-wthree-img align-self order-lg-last order-first">
                    <div class="row text-center">
                        <div class="col-sm-4 col-6 icon-text-style">
                            <i class="fas fa-tablet-alt icon-color"></i>
                            <p><b>Mobile Development</b></p>
                        </div>
                        <div class="col-sm-4 col-6 icon-text-style">
                            <i class="fa fa-bars icon-color"></i>
                            <p><b>Machine Learning & Artificial Intelligence</b></p>
                        </div>
                        <div class="col-sm-4 col-6 icon-text-style  border-right-0">
                            <i class="fab fa-chromecast icon-color"></i>
                            <p><b>Cyber Security</b></p>
                        </div>
                        <div class="col-sm-4 col-6 icon-text-style icon-text-style-2">
                            <i class="fab fa-chromecast icon-color"></i>
                            <p><b>Software infrastructural Planning</b></p>
                        </div>
                        <div class="col-sm-4 col-6 icon-text-style icon-text-style-2">
                            <i class="fas fa-business-time icon-color"></i>
                            <p><b>Cloud Computing</b></p>
                        </div>
                        <div class="col-sm-4 col-6 icon-text-style icon-text-style-2 border-right-0">
                            <i class="fab fa-laravel icon-color"></i>
                            <p><b>Web Development</b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //features section -->

    <!-- blog section -->
    <!-- <section class="w3l-blog-sec pt-5">
        <div class="services-layouts py-md-4 py-3">
            <div class="container">
                <div class="text-center mb-sm-5 mb-4">
                    <label class="sub-title mb-">Works</label> -->
                    <!-- <h3 class="title-big">Blog Posts</h3> -->
                    <!-- <h3 class="title-big">Completed Projects</h3>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 column column-img" id="zoomIn">
                        <div class="services-gd">
                            <div class="serve-info">
                                <a href="#blog">
                                    <figure>
                                        <img class="img-responsive" src="assets/images/project-image05.png" alt="blog-image">
                                    </figure>
                                </a>
                                <h3> <a href="#blog" class="vv-link">Nunc consequat justo</a>
                                </h3>
                                <ul class="admin-list">
                                    <li><a href="#blog"><span class="fa fa-user-circle icon-color"
                                                aria-hidden="true"></span>
                                            Admin</a></li>
                                    <li><a href="#blog"><span class="fa fa-heart icon-color"
                                                aria-hidden="true"></span>9
                                            Likes</a></li>
                                    <li><a href="#blog"><span class="fa fa-comments icon-color"
                                                aria-hidden="true"></span>9 Comments</a>
                                    </li>
                                </ul>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                    laudantium, totam rem aperiam, eaque ipsa quae ab.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 column column-img mt-md-0 mt-5" id="zoomIn">
                        <div class="services-gd">
                            <div class="serve-info">
                                <a href="#blog">
                                    <figure>
                                        <img class="img-responsive" src="assets/images/project-image04.png" alt="blog-image">
                                    </figure>
                                </a>
                                <h3> <a href="#blog" class="vv-link">Fusce ac eros quis</a>
                                </h3>
                                <ul class="admin-list">
                                    <li><a href="#blog"><span class="fa fa-user-circle icon-color"
                                                aria-hidden="true"></span>
                                            Admin</a></li>
                                    <li><a href="#blog"><span class="fa fa-heart icon-color"
                                                aria-hidden="true"></span>9
                                            Likes</a></li>
                                    <li><a href="#blog"><span class="fa fa-comments icon-color"
                                                aria-hidden="true"></span>8 Comments</a>
                                    </li>
                                </ul>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                    laudantium, totam rem aperiam, eaque ipsa quae ab.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-0 mt-md-5 mt-5 column column-img" id="zoomIn">
                        <div class="services-gd">
                            <div class="serve-info">
                                <a href="#blog">
                                    <figure>
                                        <img class="img-responsive" src="assets/images/project-image03.png" alt="blog-image">
                                    </figure>
                                </a>
                                <h3> <a href="#blog" class="vv-link">Cras fringilla enim</a>
                                </h3>
                                <ul class="admin-list">
                                    <li><a href="#blog"><span class="fa fa-user-circle icon-color"
                                                aria-hidden="true"></span>
                                            Admin</a></li>
                                    <li><a href="#blog"><span class="fa fa-heart icon-color"
                                                aria-hidden="true"></span>6
                                            Likes</a></li>
                                    <li><a href="#blog"><span class="fa fa-comments icon-color"
                                                aria-hidden="true"></span>9 Comments</a>
                                    </li>
                                </ul>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                    laudantium, totam rem aperiam, eaque ipsa quae ab.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- //blog section -->

    <!-- Projects section -->
    <section class="w3l-blog-sec pt-5">
        <div class="services-layout py-md-4 py-3">
            <div class="container">
                <div class="text-center mb-sm-5 mb-4">
                    <label class="sub-title mb-5">Works</label>
                    <h3 class="title-big">Completed Projects</h3>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 column column-img" id="zoomIn">
                        <div class="services-gd">
                            <div class="serve-info">
                                <a href="#projects">
                                    <figure>
                                        <img class="img-responsive" src="{{('assets/images/project-image05.png')}}" alt="blog-image">
                                    </figure>
                                </a>
                                <h3> <a href="#projects" class="vv-link">Payment Solution (Application)</a>
                                </h3>
                                <br>
                                <!-- <ul class="admin-list">
                                    <li><a href="#projects"><span class="fa fa-user-circle icon-color"
                                                aria-hidden="true"></span>
                                            Admin</a></li>
                                    <li><a href="#projects"><span class="fa fa-heart icon-color"
                                                aria-hidden="true"></span>9
                                            Likes</a></li>
                                    <li><a href="#projects"><span class="fa fa-comments icon-color"
                                                aria-hidden="true"></span>9 Comments</a>
                                    </li>
                                </ul> -->
                                <p>We have developed various payment solutions with integration of various payment gateways like eSewa ,Khalti making your business more reliable and trustworty.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 column column-img mt-md-0 mt-5" id="zoomIn">
                        <div class="services-gd">
                            <div class="serve-info">
                                <a href="#projects">
                                    <figure>
                                        <img class="img-responsive" src="{{('assets/images/project-image04.png')}}" alt="blog-image">
                                    </figure>
                                </a>
                                <h3> <a href="#projects" class="vv-link">Business Website</a>
                                </h3>
                                <br>
                                <!-- <ul class="admin-list">
                                    <li><a href="#projects"><span class="fa fa-user-circle icon-color"
                                                aria-hidden="true"></span>
                                            Admin</a></li>
                                    <li><a href="#projects"><span class="fa fa-heart icon-color"
                                                aria-hidden="true"></span>9
                                            Likes</a></li>
                                    <li><a href="#projects"><span class="fa fa-comments icon-color"
                                                aria-hidden="true"></span>8 Comments</a>
                                    </li>
                                </ul> -->
                                <p>This is amazing piece of work from our team for the company .They are now getting lot of customers engagements and ofcourse business is going well.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-0 mt-md-5 mt-5 column column-img" id="zoomIn">
                        <div class="services-gd">
                            <div class="serve-info">
                                <a href="#projects">
                                    <figure>
                                        <img class="img-responsive" src="{{('assets/images/project-image03.png')}}" alt="blog-image">
                                    </figure>
                                </a>
                                <h3> <a href="#projects" class="vv-link">Blog site</a>
                                </h3>
                                <br>
                                <!-- <ul class="admin-list">
                                    <li><a href="#projects"><span class="fa fa-user-circle icon-color"
                                                aria-hidden="true"></span>
                                            Admin</a></li>
                                    <li><a href="#projects"><span class="fa fa-heart icon-color"
                                                aria-hidden="true"></span>6
                                            Likes</a></li>
                                    <li><a href="#projects"><span class="fa fa-comments icon-color"
                                                aria-hidden="true"></span>9 Comments</a>
                                    </li>
                                </ul> -->
                                <p>Our customers are happy to share thier creative ideas and thoughts through blogs we have designed for them. With our experts designers and SEO subscribers are booming .</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of Projects section -->

    <!-- testimonials section -->
    <section class="w3l-clients py-5" id="testimonials">
        <div class="container py-md-5 py-4">
            <div class="text-center mb-sm-5 mb-4">
                <label class="sub-title mb-2">Testimonials</label>
                <h3 class="title-big">What Clients Says</h3>
            </div>
            <div id="owl-demo2" class="owl-carousel owl-theme pb-5">
                <div class="item">
                    <div class="testimonial-content">
                        <div class="testimonial">
                            <blockquote>
                                <q>Mission to Global Education Consultancy</q>
                            </blockquote>
                            <p>Byte Fusion's website development has not only boosted our online presence but also set new standards for customer engagement in the education industry. Through their innovative approach, they've seamlessly connected students with global educational opportunities, empowering countless individuals to pursue their academic aspirations confidently.</p>
                        </div>
                        <div class="bottom-info mt-4">
                            <a class="comment-img" href="#url"><img src="{{('assets/images/testi1.jpg')}}"
                                    class="img-responsive" alt="placeholder image"></a>
                            <div class="people-info align-self">
                                <h3>Manoj Khadka</h3>
                                <p class="identity">CEO</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-content">
                        <div class="testimonial">
                            <blockquote>
                                <q>Siddartha Solutions</q>
                            </blockquote>
                            <p>We highly recommend Byte Fusion for their exceptional website development and event management system. Their technical support has significantly improved our customer acquisition efforts, simplified event handling for our employees, and ensured efficient record-keeping.</p>
                        </div>
                        <div class="bottom-info mt-4">
                            <a class="comment-img" href="#url"><img src="{{('assets/images/testi2.jpg')}}"
                                    class="img-responsive" alt="placeholder image"></a>
                            <div class="people-info align-self">
                                <h3>Gopal Khadka</h3>
                                <p class="identity">Founding Member</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-content">
                        <div class="testimonial">
                            <blockquote>
                                <q>MDU Construction</q>
                            </blockquote>
                            <p>We confidently recommend Byte Fusion for their outstanding work. Their expertise in website development and project management systems has greatly enhanced our construction operations, ensuring seamless project execution and client satisfaction.</p>
                        </div>
                        <div class="bottom-info mt-4">
                            <a class="comment-img" href="#url"><img src="{{('assets/images/testi3.jpg')}}"
                                    class="img-responsive" alt="placeholder image"></a>
                            <div class="people-info align-self">
                                <h3>Dilli Dahal</h3>
                                <p class="identity">General Manager</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-content">
                        <div class="testimonial">
                            <blockquote>
                                <q>Cocktail Resturant and Bar</q>
                            </blockquote>
                            <p>Through the marketing service of Byte Fusion we have got impactful increase in our customers.I highly recommend Byte Fusion for the success of your business. </p>
                        </div>
                        <div class="bottom-info mt-4">
                            <a class="comment-img" href="#url"><img src="{{('assets/images/testi4.jpg')}}"
                                    class="img-responsive" alt="placeholder image"></a>
                            <div class="people-info align-self">
                                <h3>Uttsav Bhattrai</h3>
                                <p class="identity">Manager</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-content">
                        <div class="testimonial">
                            <blockquote>
                                <q>Joy Education Consultancy</q>
                            </blockquote>
                            <p>Byte Fusion has helped us to reach next level of success in our consultancy business.Through its adcampaign ,effective marketing Byte Fusion has ensured our success despite of competitive market.</p>
                        </div>
                        <div class="bottom-info mt-4">
                            <a class="comment-img" href="#url"><img src="{{('assets/images/testi5.jpg')}}"
                                    class="img-responsive" alt="placeholder image"></a>
                            <div class="people-info align-self">
                                <h3>Bhim Guragain</h3>
                                <p class="identity">Director</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="item">
                    <div class="testimonial-content">
                        <div class="testimonial">
                            <blockquote>
                                <q>Lorem ipsum dolor sit amet.</q>
                            </blockquote>
                            <p>Lorem ipsum dolor sit amet elit. hic odio tenetur. ante ipsum primis in
                                faucibus orci luctus.</p>
                        </div>
                        <div class="bottom-info mt-4">
                            <a class="comment-img" href="#url"><img src="assets/images/testi3.jpg"
                                    class="img-responsive" alt="placeholder image"></a>
                            <div class="people-info align-self">
                                <h3>Julia sakura</h3>
                                <p class="identity">Subtitle goes here</p>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!-- //testimonials section -->

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
                            <h5><a href="{{ url('/contact') }}">1. Tailored Solutions</a></h5>
                            <p>We understand your business needs and create customized software solutions to drive your growth.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-md-0 mt-2">
                        <div class="features4-grid">
                            <div class="feature-images">
                                <span class="fas fa-laptop-code icon-color" aria-hidden="true"></span>
                            </div>
                            <h5><a href="{{ url('/contact') }}">2. Transparent Communication</a></h5>
                            <p>We keep you informed every step of the way, ensuring your vision is realized through clear and open communication.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-0 mt-2">
                        <div class="features4-grid">
                            <div class="feature-images">
                                <span class="fas fa-clipboard-check icon-color" aria-hidden="true"></span>
                            </div>
                            <h5><a href="{{ url('/contact') }}">3. Quality and Flexibility</a></h5>
                            <p>Our commitment to quality ensures that your software solution is not only tailored to your needs but also adaptable to future changes and growth.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 3 grids -->

    <!-- promocode section -->
    <!-- <section class="w3l-promocode">
        <div class="promo-block py-5">
            <div class="container py-md-5 py-4">
                <div class="row aap-4-section">
                    <div class="col-lg-6 app4-right-image">
                        <img src="assets/images/mobile.png" class="img-fluid" alt="App Device" />
                    </div>
                    <div class="col-lg-6 app4-left-text pl-lg-0 mb-lg-0 mb-5">
                        <h6>For 30% Discount</h6>
                        <h4>Get Our Promocode</h4>
                        <p class="mb-4"> Upscale your business using our services .For first time get upto 30 % discount.  </p>
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
    </section> -->
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
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <!-- //common jquery plugin -->

    <!-- banner image moving effect -->
    <script>
        var lFollowX = 0,
            lFollowY = 0,
            x = 0,
            y = 0,
            friction = 1 / 30;

        function animate() {
            x += (lFollowX - x) * friction;
            y += (lFollowY - y) * friction;

            translate = 'translate(' + x + 'px, ' + y + 'px) scale(1.1)';

            $('.banner-image').css({
                '-webit-transform': translate,
                '-moz-transform': translate,
                'transform': translate
            });

            window.requestAnimationFrame(animate);
        }

        $(window).on('mousemove click', function (e) {

            var lMouseX = Math.max(-100, Math.min(100, $(window).width() / 2 - e.clientX));
            var lMouseY = Math.max(-100, Math.min(100, $(window).height() / 2 - e.clientY));
            lFollowX = (20 * lMouseX) / 100; // 100 : 12 = lMouxeX : lFollow
            lFollowY = (10 * lMouseY) / 100;

        });

        animate();
    </script>
    <!-- //banner image moving effect -->

    <!-- typig-text-->
    <script>
        const typedTextSpan = document.querySelector(".typed-text");
        const cursorSpan = document.querySelector(".cursor");

        const textArray = ["Web Professionals", "Developers", "Creators", "Cyber Experts" ];
        const typingDelay = 300;
        const erasingDelay = 10;
        const newTextDelay = 100; // Delay between current and next text
        let textArrayIndex = 0;
        let charIndex = 0;

        function type() {
            if (charIndex < textArray[textArrayIndex].length) {
                if (!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
                typedTextSpan.textContent += textArray[textArrayIndex].charAt(charIndex);
                charIndex++;
                setTimeout(type, typingDelay);
            } else {
                cursorSpan.classList.remove("typing");
                setTimeout(erase, newTextDelay);
            }
        }

        function erase() {
            if (charIndex > 0) {
                // add class 'typing' if there's none
                if (!cursorSpan.classList.contains("typing")) {
                    cursorSpan.classList.add("typing");
                }
                typedTextSpan.textContent = textArray[textArrayIndex].substring(0, 0);
                charIndex--;
                setTimeout(erase, erasingDelay);
            } else {
                cursorSpan.classList.remove("typing");
                textArrayIndex++;
                if (textArrayIndex >= textArray.length) textArrayIndex = 0;
                setTimeout(type, typingDelay);
            }
        }

        document.addEventListener("DOMContentLoaded", function () { // On DOM Load initiate the effect
            if (textArray.length) setTimeout(type, newTextDelay + 250);
        });
    </script>
    <!-- //typig-text-->

    <!-- owl carousel -->
    <script src="{{ asset('assets/js/owl.carousel.js') }}"></script>

    <!-- script for tesimonials carousel slider -->
    <script>
        $(document).ready(function () {
            $("#owl-demo2").owlCarousel({
                loop: true,
                nav: false,
                margin: 50,
                responsiveClass: true,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplaySpeed: 1000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    736: {
                        items: 1,
                        nav: false
                    },
                    991: {
                        items: 2,
                        margin: 30,
                        nav: false
                    },
                    1080: {
                        items: 3,
                        nav: false
                    }
                }
            })
        })
    </script>
    <!-- //script for tesimonials carousel slider -->
    <!-- //owl carousel -->

    <!-- theme switch js (light and dark)-->
    <script src="{{ asset('assets/js/theme-change.js') }}"></script>

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

    <!-- magnific popup -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>

    <script>
        $(document).ready(function () {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

            $('.popup-with-move-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-slide-bottom'
            });
        });
    </script>
    <!-- //magnific popup -->

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
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <!-- //bootstrap-->
    <!-- //Js scripts -->

@endsection
