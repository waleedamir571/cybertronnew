

          <!-- Desktop Menu -->
          <nav class="nav-main-menu d-none d-xl-block">

            <div class="bgh">
              <ul class="main-menu">
                <li><a href="../">Home</a></li>
                <li class="dropdown">
                  <a href="#">What We Do</a>
                  <ul class="dropdown-content">
                    <div class="dropdown-grid">
                      <div class="col">
                        <li><a href="../web-app-development">Web Development</a></li>
                        <li><a href="../mobile-app-development">App Development</a></li>
                        <li><a href="../custom-software-development">Custom Software Dev</a></li>
                      </div>
                      <div class="col">
                        <li><a href="../ui-ux-design">UI/UX Design</a></li>
                        <li><a href="../ecommerce">E-Commerce</a></li>
                        <li><a href="../design-and-development">Design & Development</a></li>
                      </div>
                      <div class="col">
                        <li><a href="../devops">Devops </a></li>
                        <li><a href="../maintainance-and-support">Maintenance & Support</a></li>
                        <li><a href="../staff-augmentation">Staff Augmentations</a></li>
                      </div>
                      <div class="col">
                        <!-- <li><a href="../blog.">News & Events</a></li>
                        <li><a href="../blog-2.">Project Management</a></li> -->
                        <li><a href="../join">Jobs & Careers</a></li>

                      </div>
                    </div>
                  </ul>
                </li>

                <li><a href="../who-we-are">Who We Are</a></li>
                <!-- <li><a href="golf-master-ar">How we Deliver</a></li> -->

                <li class="D1-item">
                  <a href="#" class="D1-link">How we Deliver ▾</a>
                  <ul class="D1-menu">
                    <!-- <a href="how-we-deliver" class="D1-link">Case-Studies</a> -->

                    <a href="./" class="D1-link">Blogs</a>
                    <li><a href="../golf-master-ar" class="D1-sub">Golf-Master</a></li>
                    <!-- <li><a href="it-staff-augmentation" class="D1-sub">It-Staff-Augmentation</a></li> -->

                  </ul>
                </li>


                <li><a href="../join">Join Cybertron</a></li>
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
          <?php include __DIR__ . '/mobile.php'; ?>


          <li><a href="../who-we-are">Who We Are</a></li>
          <li><a href="../golf-master-ar">How we Deliver</a></li>
          <li><a href="../join">Join Cybertron</a></li>
          <li><a href="../contact-us">Get in Touch</a></li>
          <li class="D1-item">
            <a href="#" class="D1-link">How we Deliver ▾</a>
            <ul class="D1-menu">
              <!-- <a href="how-we-deliver" class="D1-link">Case-Studies</a> -->

              <a href="./" class="D1-link">Blogs</a>
              <li><a href="../golf-master-ar" class="D1-sub">Golf-Master</a></li>
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