<?php include 'backend/function/meta.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="msapplication-TileColor" content="#0E0E0E">
  <meta name="template-color" content="#0E0E0E">
  <meta name="description" content="<?php echo $description; ?>">
  <meta name="keywords" content="index, page">
  <meta name="author" content="">
  <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/template/fav.png">
  <link href="assets/css/style.css?v=2.0.0" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
  <link
    href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&family=Montserrat:ital@0;1&family=Raleway:ital,wght@0,100..900;1,100..900&family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
  <!-- <link href="https://db.onlinewebfonts.com/c/xxxxxxxxxxxxxxxx?family=AkiraExpanded" rel="stylesheet"> -->


  <title>
    <?php echo $title_name; ?>
  </title>
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>

<body class="dark-mode page-transition alith-magic-cursor">
  <div class="page-loader">
    <div class="page-loader-logo "><img class="h100" src="assets/imgs/page/homepage1/loader.gif" alt="neuron" class=""></div>
     <!-- <div class="page-loader-logo "><img src="assets/imgs/page/homepage1/ct logo 02.gif" alt="neuron" class=""></div> -->
    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>
  </div>
  <div class="follower"></div>
  <div class="cursor"><span class="dot"></span><span class="play"><img src="assets/imgs/template/icons/cursor-play.svg"
        alt="neuron"><span>Play</span></span><span class="drag"><img src="assets/imgs/template/icons/cursor-drag.svg"
        alt="neuron"><span>Drag</span></span><span class="view"><img src="assets/imgs/template/icons/cursor-view.svg"
        alt="neuron"><span>View</span></span></div>



  <div class="scroll-container" id="scroll-container">


    <img class="w-100 mobilenone" src="assets/imgs/page/app/banner.jpg" alt="">
    <img class="w-100 lnone" src="assets/imgs/page/app/4.jpg" alt="">
    <header class="header sticky-bar">
      <div class="container-fluid">
        <div class="main-header d-flex justify-content-between align-items-center">

          <!-- Logo -->
          <div class="header-logo">
            <a href="./"><img src="assets/imgs/page/homepage1/logo.png" alt="neuron" class="img-900"></a>
          </div>

          <!-- Desktop Menu -->
          <nav class="nav-main-menu d-none d-xl-block">

            <div class="bgh">
              <ul class="main-menu">
                <li><a href="https://cybertronlabs.com/cyber-white/">Home</a></li>
                <li class="dropdown">
                  <a href="#">What We Do</a>
                  <ul class="dropdown-content">
                    <div class="dropdown-grid">
                      <div class="col">
                        <li><a href="web-app-development">Web Development</a></li>
                        <li><a href="mobile-app-development">App Development</a></li>
                        <li><a href="custom-software-development">Custom Software Dev</a></li>
                      </div>
                      <div class="col">
                        <li><a href="ui-ux-design">UI/UX Design</a></li>
                        <li><a href="ecommerce">E-Commerce</a></li>
                        <li><a href="design-and-development">Design & Development</a></li>
                      </div>
                      <div class="col">
                        <li><a href="devops">Devops </a></li>
                        <!-- <li><a href="maintainance-and-support">Maintenance & Support</a></li> -->
                        <li><a href="staff-augmentation">Staff Augmentations</a></li>
                      </div>
                      <div class="col">
                        <!-- <li><a href="blog.">News & Events</a></li>
                        <li><a href="blog-2.">Project Management</a></li> -->
                        <li><a href="join">Jobs & Careers</a></li>
                         <li><a href="maintainance-and-support">Maintenance & Support</a></li>
                      </div>
                    </div>
                  </ul>
                </li>

                <li><a href="who-we-are">Who We Are</a></li>
                <!-- <li><a href="golf-master-ar">How we Deliver</a></li> -->

                <li class="D1-item">
                  <a href="#" class="D1-link">How we Deliver ▾</a>
                  <ul class="D1-menu">
                    <!-- <a href="how-we-deliver" class="D1-link">Case-Studies</a> -->

                    <a href="blogs" class="D1-link">Blogs</a>
                    <li><a href="golf-master-ar" class="D1-sub">Golf-Master</a></li>
                    <!-- <li><a href="it-staff-augmentation" class="D1-sub">It-Staff-Augmentation</a></li> -->

                  </ul>
                </li>


                <li><a href="join">Join Cybertron</a></li>
              </ul>
            </div>
          </nav>

          <!-- Mobile Menu Toggle Button -->
          <div class="mobile-menu-toggle d-xl-none">
            <button id="mobileMenuBtn">☰</button>
          </div>

          <!-- Get in Touch Button -->
          <div class="header-account d-none d-xl-block">
            <a href="contact-us" class="btn btn-default grow-up">Get in Touch</a>
          </div>

        </div>
      </div>

      <!-- Mobile Menu -->
      <div id="mobileMenu" class="mobile-menu d-none">
        <ul>
          <li><a href="index">Home</a></li>
          <!-- <li class="dropdown mobile-dropdown">
            <a href="#" class="dropdown-toggle">What We Do</a>
            <ul class="dropdown-content">
              <li>
                <div class="dropdown-grid">
                  <div class="col">
                    <a href="web-app-development">Web Development</a>
                    <a href="mobile-app-development">App Development</a>
                    <a href="custom-software-development">Custom Software Dev</a>
                  </div>
                  <div class="col">
                    <a href="ui-ux-design">UI/UX Design</a>
                    <a href="ecommerce">E-Commerce</a>
                    <a href="design-and-development">Design & Development</a>
                  </div>
                  <div class="col">
                    <a href="devops">DevOps</a>
                    <a href="maintainance-and-support">Maintenance & Support</a>
                    <a href="staff-augmentation">Staff Augmentation</a>
                  </div>
                  <div class="col">
                    <a href="blog.">News & Events</a>
                    <a href="blog-2.">Project Management</a>
                    <a href="join">Jobs & Careers</a>
                  </div>
                </div>
              </li>
            </ul>
          </li> -->
          <!-- <li class="dropdown">
            <a href="#" class="dropdown-toggle">What We Do</a>
            <ul class="dropdown-menu">
              <li><a href="web-app-development">Web Development</a></li>
              <li><a href="mobile-app-development">App Development</a></li>
              <li><a href="custom-software-development">Custom Software Dev</a></li>
              <li><a href="ui-ux-design">UI/UX Design</a></li>
              <li><a href="ecommerce">E-Commerce</a></li>
              <li><a href="design-and-development">Design & Development</a></li>
              <li><a href="devops">DevOps</a></li>
              <li><a href="maintainance-and-support">Maintenance & Support</a></li>
              <li><a href="staff-augmentation">Staff Augmentation</a></li>
              <li><a href="blog.">News & Events</a></li>
              <li><a href="blog-2.">Project Management</a></li>
              <li><a href="join">Jobs & Careers</a></li>
            </ul>
          </li> -->
<?php include 'partials/mobile.php'; ?>

          <li><a href="who-we-are">Who We Are</a></li>
          <li><a href="golf-master-ar">How we Deliver</a></li>
          <li><a href="join">Join Cybertron</a></li>
          <li><a href="contact-us">Get in Touch</a></li>
           <li class="D1-item">
                  <a href="#" class="D1-link">How we Deliver ▾</a>
                  <ul class="D1-menu">
                    <!-- <a href="how-we-deliver" class="D1-link">Case-Studies</a> -->

                    <a href="blogs" class="D1-link">Blogs</a>
                    <li><a href="golf-master-ar" class="D1-sub">Golf-Master</a></li>
                    <!-- <li><a href="it-staff-augmentation" class="D1-sub">It-Staff-Augmentation</a></li> -->

                  </ul>
                </li>
        </ul>
      </div>
    </header>

    <!-- JS for toggling mobile menu -->
    <script>
      const mobileMenuBtn = document.getElementById('mobileMenuBtn');
      const mobileMenu = document.getElementById('mobileMenu');

      mobileMenuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('d-none');
      });
    </script>

    <!-- Basic CSS -->