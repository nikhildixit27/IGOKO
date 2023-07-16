<?php
$clients = [
    "assets/img/clients/client-1.png",
    "assets/img/clients/client-2.png",
    "assets/img/clients/client-3.png",
    "assets/img/clients/client-4.png",
    "assets/img/clients/client-5.png",
    "assets/img/clients/client-6.png",
]; ?>

<?php
$sectionImage = "./assets/img/aboutus.jpg";
$sectionTitle = "About Us";
$sectionSubtitle = "Powerful Digital Media Company";
$sectionContent =
    "We love to create. We at Igoko Avioncs Solutions provides you different kind of digital solutions. Digital Marketing, SEO, Graphic Designing, Anylatics, Adwords, Web Designing, Web Solutions, Branding, Social Media Marketing, Film & Advertisment, Model Photoshoot etc. We have an experience of more than 4 years & having many trustable clients. Over the years, we have worked with Fortune 100s and brand-new startups. We help ambitious businesses like yours generate more profits by building awareness, driving web traffic, connecting with customers, and growing overall sales. Give us a Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, corrupti!";
?>

<?php $faqs = [
    [
        "question" => "Do You Guys Provide Maintenance?",
        "answer" =>
        "Yes, we do provide maintenance for one year at no cost once your website is completed.",
    ],
    [
        "question" => "What Does Free Maintenance Include?",
        "answer" =>
        "Free maintenance includes server protection, site protection, daily backup, protection from hackers, and all uptime of the website.",
    ],
    [
        "question" => "What Is Payment Procedure?",
        "answer" =>
        "50% advance payment should be made before starting the project, and once the project is completed, the remaining 50% payment needs to be paid.",
    ],
    [
        "question" => "How Much Time It Take To Build Website?",
        "answer" =>
        "Building a website may take from 7 days to 30 days or more. It totally depends on the project. We deliver portfolio websites in just 7 days. Custom projects may take a bit longer.",
    ],
]; ?>


<?php $reviews = [
    [
        "comment" =>
        "Their service is beyond words! Never seen someone so quick, efficient, and perfect.",
        "profile" => "assets/img/client1.jpg",
        "name" => "Sneha Verma",
    ],
    [
        "comment" =>
        "Excellent organization. Have been trusting them for a while now. Very impressed.",
        "profile" => "assets/img/client2.jpg",
        "name" => "Abhishek Singh",
    ],
    [
        "comment" =>
        "They have been developing the mobile app for my events. Great work! Nice team!",
        "profile" => "assets/img/client3.jpg",
        "name" => "Sunaina Sharma",
    ],
]; ?>


<?php $pricingPlans = [
    [
        "title" => "PORTFOLIO",
        "price" => "10,500",
        "duration" => "Yearly Package",
        "features" => [
            "One Year Domain",
            "One Year Maintenance",
            "Wordpress Platform",
            "Fully Customizable",
            "3 Months Service Free",
        ],
        "link" => "https://calendly.com/igokoavionicssolutions/30min",
    ],
    [
        "title" => "E-Commerce",
        "price" => "25,000",
        "duration" => "Yearly Package",
        "features" => [
            "One Year Domain",
            "One Year Maintenance",
            "Wordpress/Shopify",
            "Unlimited Products",
            "3 Months Service Free",
        ],
        "link" => "https://calendly.com/igokoavionicssolutions/30min",
    ],
    [
        "title" => "Portal",
        "price" => "28,000",
        "duration" => "Yearly Package",
        "features" => [
            "One Year Domain",
            "One Year Maintenance",
            "Php/Laravel Etc",
            "Fully Customizable",
            "3 Months Service Free",
        ],
        "link" => "https://calendly.com/igokoavionicssolutions/30min",
    ],
]; ?>










<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>IGOKO || Learn To Lead</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/igoko.png" rel="igoko">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <!-- Template Main CSS File -->
    <link href="assets/css/mainstyle.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="assets/css/oldmainstyle.css"> -->

    <script>
        window.chatbaseConfig = [
            'chatbotId' => 'fewLJzHkLjpca5lKUk0bn',
        ];
    </script>
    <script src="https://www.chatbase.co/embed.min.js" id="fewLJzHkLjpca5lKUk0bn" defer>
    </script>
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header">
        <div class="container d-flex align-items-center">
            <!-- <h1 class="logo me-auto"><a href="index.html">Arsha</a></h1> -->
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li>
                    <li><a class="nav-link   scrollto" href="productPage.html">Product</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    <li><a class="getstarted scrollto" href="tel:+91-9891256009">Call us</a></li>
                    <li><a class="getstarted scrollto" href="https://calendly.com/igokoavionicssolutions/30min"
                            target="_blank">Schedule Meeting</a></li>
                    <li><a class="getstarted scrollto"
                            href="https://docs.google.com/forms/d/e/1FAIpQLSdVfVrqDPDCqjpVN8dCc5oZcV5UkpQI0AvAaRwWh9hDPShqQw/viewform?usp=sf_link"
                            target="_blank">Join Us</a></li>
                    <li><a class="getstarted scrollto" href="#login-form"
                            style="background-color: red; color: white; border: none;">Client Login</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->


            <div id="login-form" class="login-form">
                <h2>Login</h2>
                <form>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <div class="form-group">
                        <div class="itemcheckboxform">
                            <input type="checkbox" id="keep-signed-in" name="keep-signed-in">
                            <label for="keep-signed-in">Keep me signed in</label>
                        </div>
                    </div>
                    <button type="submit" onclick="redirectToDashboard()">Login</button>

                    <script>

                        function redirectToDashboard() {
                            window.location.href = "Login/index.html";
                        }

                    </script>

                </form>
            </div>

            <style>
                /* Add this CSS code to your existing stylesheet or create a new one */

                .itemcheckboxform label {
                    display: inline;
                    padding-left: 10px;
                }

                .login-form {
                    display: none;
                    position: fixed;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    background-color: #f5f5f5;
                    padding: 20px;
                    border-radius: 5px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                    z-index: 9999;
                    width: 400px;
                }

                .login-form h2 {
                    text-align: center;
                    margin-bottom: 20px;
                }

                .login-form .form-group {
                    margin-bottom: 20px;
                }

                .login-form label {
                    /* display: block; */
                    margin-bottom: 5px;
                    display: inline;
                    padding-left: 10px;
                }

                .login-form input[type="email"],
                .login-form input[type="password"] {
                    width: 100%;
                    padding: 10px;
                    border-radius: 3px;
                    border: 1px solid #ccc;
                }

                .item-checkbox-form {
                    display: inline;
                }

                .login-form button {
                    display: block;
                    width: 100%;
                    padding: 10px;
                    background-color: #47b2e4;
                    color: #fff;
                    border: none;
                    border-radius: 3px;
                    cursor: pointer;
                }

                /* Show the login form on button click */

                .login-form.show {
                    display: block;
                }
            </style>

            <script>
                // Add this JavaScript code at the end of your HTML body or in an external script file

                document.addEventListener('DOMContentLoaded', function () {
                    const loginButton = document.querySelector('#navbar .getstarted[href="#login-form"]');
                    const loginForm = document.querySelector('#login-form');

                    loginButton.addEventListener('click', function (event) {
                        event.preventDefault();
                        loginForm.classList.toggle('show');
                    });

                    // Close the popup when clicked outside
                    document.addEventListener('click', function (event) {
                        const target = event.target;
                        if (!loginForm.contains(target) && target !== loginButton) {
                            loginForm.classList.remove('show');
                        }
                    });
                });
            </script>
        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h2>Empower your online presence with innovative</h2>

                    <div class="homeAnimation">
                        <h1> Web Developer</h1>
                    </div>

                    <h3>We are Weaving your dreams into captivating digital experiences</h3>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="#about" class="btn-get-started scrollto">Get Started</a>
                        <a href="#watchvdo" class=" btn-watch-video"><i class="bi bi-play-circle"></i><span
                                data-bs-toggle="modal" data-bs-target="#exampleModal">Watch Video</span></a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="assets/img/hero-img1.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

        <script>
            const HomeAnimationEl = document.querySelector(".homeAnimation");
            const careers = ["Web Designing ", "Digital Marketing", "SEO Service"];

            let careerIndex = 0;
            let charIndex = 0;
            updateText();

            function updateText() {
                charIndex++;
                const career = careers[careerIndex].slice(0, charIndex);
                const coloredCareer = careerIndex === 0 || careerIndex === 2 ? `<span style="color: red;">${career}</span>` : career;
                HomeAnimationEl.innerHTML = `
      <h1>${coloredCareer} </h1>
      `;

                if (charIndex === careers[careerIndex].length) {
                    careerIndex++;
                    charIndex = 0;
                }

                if (careerIndex === careers.length) {
                    careerIndex = 0;
                }
                setTimeout(updateText, 300);
            }
        </script>
    </section>
    <!-- End Hero -->

    <section id="clients" class="clients section-bg">
        <div class="container">
            <div class="row" data-aos="zoom-in">
                <?php foreach ($clients as $client): ?>
                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="<?php echo $client; ?>" class="img-fluid" alt="">
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- End Clients Section -->

    <!-- About us section -->

    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <div class="section-image">
                <img src="<?php echo $sectionImage; ?>" alt="">
            </div>
            <div class="content">
                <h1>
                    <?php echo $sectionTitle; ?>
                </h1>
                <div>
                    <h5>
                        <?php echo $sectionSubtitle; ?>
                    </h5>
                    <p>
                        <?php echo $sectionContent; ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="shape shape1" data-aos="fade-up"></div>
        <div class="shape shape2"></div>
        <div class="shape shape3"></div>
    </section>

    <!-- End About Us Section -->

    <!-- Why us section - FAQ -->

    <section id="why-us" class="why-us section-bg">
        <div class="container-fluid" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch order-2 order-lg-1">
                    <div class="content">
                        <h3><strong>FAQ</strong> Frequently Asked Questions</h3>
                        <p><strong>Answers to your most common questions and embark on a seamless journey</strong></p>
                    </div>
                    <div class="accordion-list">
                        <ul>
                            <?php foreach ($faqs as $index => $faq): ?>
                                <li>
                                    <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-<?php echo $index +
                                        1; ?>"><span>
                                            <?php echo str_pad(
                                                $index + 1,
                                                2,
                                                "0",
                                                STR_PAD_LEFT
                                            ); ?>
                                        </span>
                                        <?php echo $faq[
                                            "question"
                                        ]; ?><i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i>
                                    </a>
                                    <div id="accordion-list-<?php echo $index +
                                        1; ?>" class="collapse <?php echo $index === 0
                                         ? "show"
                                         : ""; ?>" data-bs-parent=".accordion-list">
                                        <p>
                                            <?php echo $faq["answer"]; ?>
                                        </p>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img"
                    style='background-image: url("assets/img/why-us.jpg"); width: 250; height: 1000;' data-aos="zoom-in"
                    data-aos-delay="150">&nbsp;</div>
            </div>

        </div>
    </section>
    <!-- End Why Us Section -->

    <!-- ====== Review Section starts ====== -->
    <section id="swiper-container">
        <!-- <div class="swiper-shape swiper-shape1"></div> -->
        <div class="swiper-shape swiper-shape2"></div>
        <div class="swiper-shape swiper-shape3"></div>
        <div class="swiper-shape swiper-shape4"></div>
        <div class="swiper-shape swiper-shape5"></div>

        <h1>Client's Review</h1>
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <?php foreach ($reviews as $review): ?>
                    <div class="swiper-slide">
                        <div class="flex">
                            <div class="comment">
                                <p>
                                    <?php echo $review["comment"]; ?>
                                </p>
                            </div>
                            <div class="profile">
                                <img src="<?php echo $review["profile"]; ?>" alt="">
                            </div>
                            <div class="details">
                                <p class="name">
                                    <?php echo $review["name"]; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <!-- If we need scrollbar -->
            <!-- <div class="swiper-scrollbar"></div> -->
        </div>
    </section>
    <!-- ====== Review Section ends ====== -->


    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>BEST MARKET PLAN & PACKAGE</h2>
                <p>Unlock the door to success with our comprehensive market plans and packages designed to maximize your
                    brand's visibility and impact.</p>
            </div>
            <div class="row">
                <?php foreach ($pricingPlans as $plan): ?>
                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                        <div class="box">
                            <h3>
                                <?php echo $plan["title"]; ?>
                            </h3>
                            <h4><sup>₹</sup>
                                <?php echo $plan["price"]; ?><span>
                                    <?php echo $plan[
                                        "duration"
                                    ]; ?>
                                </span>
                            </h4>
                            <ul>
                                <?php foreach ($plan["features"] as $feature): ?>
                                    <li><i class="bx bx-check"></i>
                                        <?php echo $feature; ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                            <a href="<?php echo $plan[
                                "link"
                            ]; ?>" class="buy-btn" target="_blank">Acquire Now</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- End Pricing Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Contact</h2>
                <p>Your feedback matters. Contact us and help us serve you better.</p>
            </div>
            <div class="row">
                <div class="col-lg-5 d-flex align-items-stretch">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p>H-53-A GALI NO-2WEST KARAWAL NAGAR, Delhi, India</p>
                        </div>
                        <div class="email">
                            <a href="mailto:amansolanki5254@gmail.com"><i class="bi bi-envelope"></i></a>
                            <h4>Email:</h4>
                            <p>amansolanki5254@gmail.com</p>
                        </div>
                        <div class="phone">
                            <a href="tel:+91-9891256009"><i class="bi bi-phone"></i></a>
                            <h4>Call:</h4>
                            <p>+91-9891256009</p>
                        </div>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                            frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <form action="contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Your Name</label>
                                <input type="text" name="name" class="form-control" id="name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Your Email</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" name="message" rows="10" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center">
                            <button type="submit">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Section -->

    </main><!-- End #main -->
    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-newsletter">
            <div class="container">
            </div>
        </div>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h1><a href="index.html"><strong>IGOKO</strong></a></h1>
                        <p>H-53-A GALI NO-2 <br>WEST KARAWAL NAGAR<br><strong>
                                <h5>Delhi, India</h5>
                            </strong><br><br>
                            <strong>Phone:</strong> +91-9891256009<br>
                            <strong>Email:</strong> amansolanki5254@gmail.com<br>
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Social Networks</h4>
                        <p>Connect with us on social media and stay updated with the latest news, events, and exclusive
                            offers. Join
                            the conversation today</p>
                        <div class="social-links mt-3">
                            <a href="https://twitter.com/igokoavionics?lang=en" class="twitter"><i
                                    class="bx bxl-twitter"></i></a>
                            <a href="https://www.facebook.com/home.php" class="facebook"><i
                                    class="bx bxl-facebook"></i></a>
                            <a href="https://www.instagram.com/igokoavionics/" class="instagram"><i
                                    class="bx bxl-instagram"></i></a>
                            <a href="https://www.skype.com/en/" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="https://www.linkedin.com/company/iga-solutions-private-limited/?originalSubdomain=in"
                                class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container footer-bottom clearfix">
            <div class="credits">
                Designed by <a href="index.html"><img src="assets/img/favicon.png"></a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <!-- <div id="preloader"></div> -->


    <div id="loader">
        <div id="shadow"></div>
        <div id="box"></div>
    </div>

    <div class="phone-call"><a href="#contact"><img
                src="https://cdn2.iconfinder.com/data/icons/social-messaging-ui-color-shapes-2-free/128/social-whatsapp-circle-512.png"
                width="50" alt="Call Now" title="Call Now"></a></div>

    <!-- To add a whats app detail -->

    <!-- https://api.whatsapp.com/send?phone=+918866266554&text=360digit.in -->


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Sample Work</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <video width="400" height="320" controls>
                        <source src="assets/vdo/SaveInsta.App - 3107364148216030339_48887653235.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
    </div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

        });
    </script>
</body>

</html>