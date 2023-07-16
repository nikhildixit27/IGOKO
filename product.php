<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Igoko-Product Page</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- fontawesome link  -->

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


    <!-- aos library -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Template Main CSS File -->
    <link href="assets/css/cssforproduct.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class=" ">
        <div class="container d-flex align-items-center">

            <!-- <h1 class="logo me-auto">
        <a href="index.php">Arsha</a>
      </h1> -->
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="index.php" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="index.php#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="index.php#about">About</a></li>
                    <li><a class="nav-link scrollto" href="index.php#services">Services</a></li>
                    <li><a class="nav-link   scrollto" href="productPage.php">Product</a></li>
                    <li><a class="nav-link scrollto" href="index.php#contact">Contact</a></li>
                    <li><a class="getstarted scrollto" href="index.php">Get Started</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle" style="display: 10px solid black;"></i>
            </nav><!-- .navbar -->
    </header>

    <div id="product-container">

        <div id="headOfProduct">
            <div id="product-head">
                <div id="product-head-heading">
                    <h1>"Discover the Ultimate Products: <span>Unleash the Power of Innovation!</span>"</h1>
                </div>
                <div id="product-head-text">
                    <p>Over the years, we have worked with Fortune 100s and brand-new startups. We help ambitious
                        businesses like yours generate more profits by building awareness, driving web traffic,
                        connecting with customers, and growing overall sales. Give us a call.
                    </p>
                </div>
                <a href="#">Get Started</a>
            </div>
            <div id="product-banner">
                <img src="assets/img/productpage.jpg" alt="">
            </div>
        </div>

        <div id="why">
            <div id="why-img">
                <img src="./assets/img/5217215.jpg" alt="">
            </div>
            <div id="why-text">
                <h1>Why Should You Choose Us?</h1>
                <ul>
                    <li data-aos="fade-up" data-aos-duration="2000"
                        style="box-shadow: 2px 2px 2px 2px rgb(243, 243, 162);"><i class="fa-solid fa-wifi"></i> 24/7
                        Support</li>
                    <li data-aos="fade-up" data-aos-duration="2000"
                        style="left: 30%; box-shadow: 2px 2px 2px 2px rgb(148, 239, 148);"><i
                            class="fa-solid fa-phone"></i> High Availability</li>
                    <li data-aos="fade-up" data-aos-duration="2000"
                        style="box-shadow: 2px 2px 2px 2px rgb(246, 185, 123);"><i class="fa-solid fa-layer-group"></i>
                        Passionate Approach</li>
                    <li data-aos="fade-up" data-aos-duration="2000"
                        style="left: 30%; box-shadow: 2px 2px 2px 2px rgb(250, 164, 250);"><i
                            class="fa-brands fa-dropbox"></i> Digital Innovation</li>
                    <li data-aos="fade-up" data-aos-duration="2000"
                        style="box-shadow: 2px 2px 2px 2px rgb(197, 234, 141);"><i class="fa-solid fa-film"></i> High
                        Quality</li>
                    <li data-aos="fade-up" data-aos-duration="2000"
                        style="left: 30%; box-shadow: 2px 2px 2px 2px skyblue;"><i class="fa-solid fa-fax"></i>
                        Transparent Business Model</li>
                </ul>
            </div>
        </div>


        <div id="product-no">
            <div class="div" style="background: rgb(246, 185, 123);">
                <div class="icon">
                    <i class="fa-solid fa-handshake"></i>
                </div>
                <div class="details">
                    <h1 class="num" data-val="500">
                        <?php echo $happy_clients; ?>
                    </h1>
                    <h3>Happy clients</h3>
                </div>
            </div>
            <div class="div" style="background: rgb(243, 243, 162);">
                <div class="icon">
                    <i class="fa-solid fa-desktop"></i>
                </div>
                <div class="details">
                    <h1 class="num" data-val="1500">
                        <?php echo $projects_done; ?>
                    </h1>
                    <h3>Projects done</h3>
                </div>
            </div>
            <div class="div" style="background: rgb(148, 239, 148);">
                <div class="icon">
                    <i class="fa-solid fa-laptop-file"></i>
                </div>
                <div class="details">
                    <h1 class="num" data-val="90k">
                        <?php echo $hours_worked; ?>
                    </h1>
                    <h3>Hours Worked</h3>
                </div>
            </div>
            <div class="div" style="background: rgb(250, 164, 250);">
                <div class="icon">
                    <i class="fa-solid fa-phone-volume"></i>
                </div>
                <div class="details">
                    <h1>24/7</h1>
                    <h3>Support Available</h3>
                </div>
            </div>
        </div>

        <div id="product-body">
            <h1>"Our Services"</h1>
            <div id="products-list">
                <?php
                // Array of services
                $services = array(
                    array(
                        'name' => 'Web Design',
                        'icon' => 'bi-pc-display-horizontal',
                        'description' => 'We have successfully created & launched a number of projects across varied niche for professionals like Dentists, Event, Interior, Gym, yoga, etc, the details of which you can check out in our portfolio.'
                    ),
                    array(
                        'name' => 'Digital Marketing',
                        'icon' => 'bi-intersect',
                        'description' => 'Empowering businesses with impactful digital marketing strategies, IGOKO Avionics Solutions is a leading IT company specializing in driving online success. With expertise in SEO, PPC, social media marketing, and more, we deliver measurable results and help businesses thrive in the digital landscape. Partner with us to elevate your brand\'s online presence and achieve remarkable growth.'
                    ),
                    array(
                        'name' => 'SEO Services',
                        'icon' => 'bi-box-seam-fill',
                        'description' => 'We understand the crucial role that search engine optimization (SEO) plays in enhancing online visibility and driving organic traffic to websites. We offer a wide range of tailored SEO solutions to meet the unique needs and goals of our clients, ensuring their online presence is optimized for success.'
                    ),
                    array(
                        'name' => 'Email Marketing',
                        'icon' => 'bi-building',
                        'description' => 'We understand the power of email marketing as a direct and personalized communication channel. Our team of skilled professionals combines expertise, creativity, and advanced technology to deliver successful email marketing campaigns that engage and convert recipients into loyal customers. We specialize in helping businesses connect with their target audience, build customer relationships, and drive impactful results through effective email campaigns.'
                    ),
                    array(
                        'name' => 'Social Media',
                        'icon' => 'bi-wechat',
                        'description' => 'We understand the unique opportunities and challenges that social media presents. Our team stays up-to-date with the ever-changing social media landscape and best practices. We understand that success in social media marketing is not just about gaining likes and followers but also about driving tangible business outcomes.'
                    )
                );

                // Loop through the services array
                foreach ($services as $service) {
                    $serviceName = $service['name'];
                    $serviceIcon = $service['icon'];
                    $serviceDescription = $service['description'];
                    ?>
                    <div class="product" style="box-shadow: 2px 2px 2px 2px rgb(148, 239, 148);">
                        <div class="product-name">
                            <i class="bi <?php echo $serviceIcon; ?>"></i>
                            <p>
                                <?php echo $serviceName; ?>
                            </p>
                        </div>
                        <div class="down-arrow">
                            <i class="bi bi-chevron-down" onclick="showrowweb()"></i>
                            <i class="bi bi-chevron-up" onclick="hiderowweb()"></i>
                        </div>
                    </div>
                    <div class="arrow-product-des">
                        <h3>
                            <?php echo $serviceName; ?>
                        </h3>
                        <p>
                            <?php echo $serviceDescription; ?>
                        </p>
                        <a href="index.html#pricing">Choose Plan</a>
                    </div>
                    <?php
                }
                ?>
            </div>

            <div class="hide-product-des">
                <div id="product-des">
                    <?php
                    // Loop through the services array
                    foreach ($services as $service) {
                        $serviceName = $service['name'];
                        $serviceIcon = $service['icon'];
                        $serviceDescription = $service['description'];
                        ?>
                        <div id="product-<?php echo strtolower(str_replace(' ', '-', $serviceName)); ?>"
                            class="product-des">
                            <div id="product-des-image">
                                <img src="./assets/img/<?php echo strtolower(str_replace(' ', '_', $serviceName)); ?>.png"
                                    alt="">
                            </div>
                            <div id="product-des-text">
                                <h3>
                                    <?php echo $serviceName; ?>
                                </h3>
                                <p>
                                    <?php echo $serviceDescription; ?>
                                </p>
                                <a href="index.html#pricing">Choose Plan</a>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/jsforproductpage.js"></script>
    <script src="assets/js/main.js"></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        let valueDisplays = document.querySelectorAll(".num");
        let interval = 2000;
        valueDisplays.forEach((valueDisplay) => {
            let startValue = 0;
            let endValue = parseInt(valueDisplay.getAttribute("data-val"));
            let duration = Math.floor(interval / endValue);
            let counter = setInterval(function () {
                startValue += 1;
                valueDisplay.textContent = startValue;
                if (startValue == endValue) {
                    clearInterval(counter);
                }
            }, duration);
        });
    </script>
</body>

</html>