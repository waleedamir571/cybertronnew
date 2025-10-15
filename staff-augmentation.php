<?php include 'partials/header.php'; ?>

<style>
    .none {
        display: none;
    }

    .accordion-button {
        position: relative;
        display: flex;
        align-items: center;
        width: 100%;
        padding: 1rem 1.25rem;
        font-size: 18px !important;
        color: white !important;
        text-align: left;
        background-color: transparent;
        border: 1px solid rgba(0, 0, 0, .125);
        border-radius: 0;
        overflow-anchor: none;
        transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out, border-radius .15s ease;
    }


    @media (min-resolution: 120dpi) and (max-resolution: 130dpi),
    (-webkit-min-device-pixel-ratio: 1.25) and (-webkit-max-device-pixel-ratio: 1.3) {
        /* Apply your fixes here */

        .accordion-button {
            position: relative;
            display: flex;
            align-items: center;
            width: 100%;
            padding: 1rem 1.25rem;
            font-size: 14px !important;
            color: white !important;
            text-align: left;
            background-color: transparent;
            border: 1px solid rgba(0, 0, 0, .125);
            border-radius: 0;
            overflow-anchor: none;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out, border-radius .15s ease;
        }

        .feature {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            font-size: 14px;
            color: #FAFAFA;
            font-size: 22px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
        }



    }
</style>
<main class="main">
    <section class="section banner-mode">

        <div class="box-content-banner">

            <div class="container-fluid">
                <div class="row mb-4" data-aos="fade-right">
                    <div class="col-md-7 ">
                        <p class="head pb-45">Scale Your<span class="purple"> UAE Tech Team </span>
                            with<span class="bold"> Top IT Staff Augmentation in 48 Hours

                            </span> </p>


                    </div>
                </div>

                <!-- 🔥 EXPANDABLE VIDEO SECTION STARTS -->

                <!-- 🔥 EXPANDABLE VIDEO SECTION ENDS -->

            </div>

        </div>

        <section class="pb-50">
            <div class="container-fluid" data-aos="fade-left">

                <div class="row anchor-center">
                    <div class="col-md-3">
                        <a href="#" class="why-link">
                            <img class="w-24" src="assets/imgs/page/homepage1/arrow.png" alt="">
                            Overview
                        </a>
                    </div>
                    <div class="col-md-9">
                        <p class="cybertron-heading mt-65 color-900 text-opacity">

                            Cybertron Labs’ IT staff augmentation services in the UAE boost your team with expert
                            software, mobile app, and web developers. Scale fast, cut costs by up to 40%, and stay fully
                            compliant.



                        </p>
                        <br><br>
                        <a class="btn btn-default grow-up" href="it-staff-augmentation">Get in Touch</a>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <section class="cybertron-section">
        <div class="container-fluid">
            <div class="row mb-4">
                <div class="col-md-6 " data-aos="fade-right">
                    <p class="head pb-45">Our <span class="purple">Staff Augmentation </span> <span
                            class="bold">Models</span></p>


                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="pb-10">
                        <div class="card-custom">
                            <h4>Staff Augmentation</h4>
                            <p class="pb-20 pt-20">Hire top talent at a fraction of the cost</p>

                            <div class="feature"><span></span>Vetted developer profiles shared within 48 hours</div>
                            <div class="feature"><span></span>Access to senior experts across every major tech stack
                            </div>
                            <div class="feature"><span></span>No long-term hiring or retention challenges</div>
                            <div class="feature"><span></span>Freedom from payroll, HR, and management hassles</div>

                            <div class="feature"><span></span>Dedicated project manager available on request</div>
                            <div class="feature"><span></span>Scale teams up or down based on your needs</div>
                            <!-- <div class="feature"><span></span>Comprehensive quality assurance included</div> -->

                            <hr style="border-color: #333;">

                            <!-- Accordion -->
                            <div class="accordion" id="staffAccordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="button1 accordion-button collapsed white" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#develop1">
                                            What are you looking to develop?
                                        </button>
                                    </h2>
                                    <div id="develop1" class="accordion-collapse collapse"
                                        data-bs-parent="#staffAccordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li> Mobile App Development
                                                </li>
                                                <li>Web App Development</li>
                                                <li>Custom Software Solutions</li>
                                                <li>UI/UX Design Projects</li>
                                                <li>Cloud & DevOps Support</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="button1 accordion-button collapsed white" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#staffing1">
                                            Staffing Within
                                        </button>
                                    </h2>
                                    <div id="staffing1" class="accordion-collapse collapse"
                                        data-bs-parent="#staffAccordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>24 Hours</li>
                                                <li>48 Hours</li>
                                                <li> 1 Week</li>
                                                <li>2 Weeks</li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="button1 accordion-button collapsed white" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#duration1">
                                            For how long?
                                        </button>
                                    </h2>
                                    <div id="duration1" class="accordion-collapse collapse"
                                        data-bs-parent="#staffAccordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li> 1–3 Months</li>
                                                <li> 3–6 Months
                                                </li>
                                                <li> 6–12 Months
                                                </li>
                                                <li> Ongoing / Long-Term
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-50 ">
                                <a class="btn btn-default grow-up w-100" href="#">Get in Touch</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pb-10">
                        <div class="card-custom">
                            <h4>MVP Development</h4>
                            <p class="pb-20 pt-20">Get your products built from scratch</p>

                            <div class="feature"><span></span>Accelerate development with our SaaS Express Dev Kit
                            </div>
                            <div class="feature"><span></span> Pre-built core modules to speed up launc

                            </div>
                            <div class="feature"><span></span>Prototype and wireframing support to validate ideas
                            </div>
                            <div class="feature"><span></span> Dedicated project management team throughout
                            </div>
                            <div class="feature"><span></span> Comprehensive quality assurance at every stage
                            </div>
                            <div class="feature"><span></span> Agile sprint methodology for faster <br> iterations
                            </div>
                            <!-- <div class="feature"><span></span>On-time delivery with transparent timelines
                            </div> -->

                            <hr style="border-color: #333;">

                            <!-- Accordion -->
                            <div class="accordion" id="staffAccordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="button1 accordion-button collapsed white" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#develop2">
                                            When do you plan to launch your MVP?
                                        </button>
                                    </h2>
                                    <div id="develop2" class="accordion-collapse collapse"
                                        data-bs-parent="#staffAccordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li> In 1–3 Months
                                                </li>
                                                <li> In 3–6 Months
                                                </li>
                                                <li> In 6–12 Months
                                                </li>
                                                <li> Not Decided Yet

                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="button1 accordion-button collapsed white" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#staffing2">
                                            Would you like to mention your MVP budget?

                                        </button>
                                    </h2>
                                    <div id="staffing2" class="accordion-collapse collapse"
                                        data-bs-parent="#staffAccordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li> Under $10,000
                                                </li>
                                                <li>$10,000 – $25,000
                                                </li>
                                                <li> $25,000 – $50,000
                                                </li>
                                                <li> Above $50,000
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="button1 accordion-button collapsed white" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#duration2">
                                            Which industry does your MVP target?
                                        </button>
                                    </h2>
                                    <div id="duration2" class="accordion-collapse collapse"
                                        data-bs-parent="#staffAccordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li> FinTech
                                                </li>
                                                <li>HealthTech</li>
                                                <li> E-commerce</li>
                                                <li> EdTech
                                                </li>
                                                <li> SaaS / Enterprise
                                                </li>
                                                <li> Other
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-50 ">
                                <a class="btn btn-default grow-up w-100" href="#">Get in Touch</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-custom">
                        <h4>Time and Material (T&M)</h4>
                        <p class="pb-20 pt-20">Hire dedicated developers for scalable results
                        </p>

                        <div class="feature"><span></span> Transparent and predictable pricing system
                        </div>
                        <div class="feature"><span></span>Pre-built modules to accelerate development cycles
                        </div>
                        <div class="feature"><span></span> Pre-built modules to accelerate development cycles
                        </div>
                        <div class="feature"><span></span> Project manager support from 360 Xpert Solutions</div>
                        <div class="feature"><span></span> Flexible and scalable team structure available
                        </div>
                        <div class="feature"><span></span> Direct developer communication for faster progress
                        </div>
                        <!-- <div class="feature"><span></span>Easily scale teams up or down whenever required</div> -->

                        <hr style="border-color: #333;">

                        <!-- Accordion -->
                        <div class="accordion" id="staffAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="button1 accordion-button collapsed white" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#develop">
                                        What are you looking to develop?
                                    </button>
                                </h2>
                                <div id="develop" class="accordion-collapse collapse" data-bs-parent="#staffAccordion">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>Web Application</li>
                                            <li>Mobile Application</li>
                                            <li>SaaS Platform</li>
                                            <li>Custom Software</li>
                                            <li>Other</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="button1 accordion-button collapsed white" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#staffing">
                                        Staffing Within
                                    </button>
                                </h2>
                                <div id="staffing" class="accordion-collapse collapse" data-bs-parent="#staffAccordion">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>1 Week</li>
                                            <li>2 Weeks</li>
                                            <li>1 Month</li>
                                            <li>Flexible</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="button1 accordion-button collapsed white" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#duration">
                                        For how long?
                                    </button>
                                </h2>
                                <div id="duration" class="accordion-collapse collapse" data-bs-parent="#staffAccordion">
                                    <div class="accordion-body">
                                        <ul>
                                            <li> 1–3 Months
                                            </li>
                                            <li>3–6 Months
                                            </li>
                                            <li> 6–12 Months
                                            </li>
                                            <li>Ongoing</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-50 ">
                            <a class="btn btn-default grow-up w-100" href="#">Get in Touch</a>
                        </div>
                    </div>
                </div>
            </div>





        </div>
    </section>

    <section class="cybertron-section">
        <div class="container-fluid">
            <div class="row mb-4">
                <div class="col-md-6 " data-aos="fade-right">
                    <p class="head pb-45">Our Dynamic <span class="purple">Staffing Solutions </p>

                </div>
            </div>

            <div class="">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">

                        <!-- Slide 1 -->
                        <!-- <div class="swiper-slide">
                            <div class="image-card">
                                <img src="assets/imgs/page/Staff Augmentations/Staff Augmentation.jpg" alt="Software Engineer">
                                <div class="overlay-text">
                                    <h3>Staff Augmentation</h3>
                                    <p>Expand teams quickly with expert talent.</p>
                                </div>
                            </div>

                        </div> -->

                        <!-- Slide 2 -->
                        <div class="swiper-slide">
                            <div class="image-card">
                                <img src="assets/imgs/page/Staff Augmentations/Website Development.jpg"
                                    alt="Software Engineer">
                                <div class="overlay-text">
                                    <h3>Website Development</h3>

                                    <p>Seamless web solutions with expert frontend & backend developers in Dubai.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 3 -->
                        <!-- <div class="swiper-slide">
                            <div class="image-card">
                                <img src="assets/imgs/page/Staff Augmentations/m" alt="Software Engineer">
                                <div class="overlay-text">
                                    <h3>Mobile App Development</h3>
                                    <p> Top staff augmentation services for mobile app development Dubai. Build
                                        iOS/Android apps fast.
                                    </p>
                                </div>
                            </div>
                        </div> -->

                        <!-- Slide 4 -->
                        <div class="swiper-slide">
                            <div class="image-card">
                                <img src="assets/imgs/page/App Development/Deployment.jpg" alt="Software Engineer">
                                <div class="overlay-text">
                                    <h3>Software Development</h3>

                                    <p> Hire full-stack developers to build APIs & systems for UAE’s $25B AI boom.

                                    </p>
                                </div>
                            </div>
                        </div>


                        <!-- Slide 2 -->


                        <!-- Slide 3 -->
                        <div class="swiper-slide">
                            <div class="image-card">
                                <img src="assets/imgs/page/Staff Augmentations/App Development set .jpg"
                                    alt="Software Engineer">
                                <div class="overlay-text">
                                    <h3>Mobile App Development</h3>

                                    <p>Top Dubai staff augmentation for fast, high-quality iOS & Android apps.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 4 -->


                        <div class="swiper-slide">
                            <div class="image-card">
                                <img src="assets/imgs/page/Staff Augmentations/AI & Cloud Expertise.jpg"
                                    alt="Software Engineer">
                                <div class="overlay-text">
                                    <h3>AI & Cloud Expertise </h3>

                                    <p>AI & cloud developers for UAE fintech, smart city, and enterprise projects.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- ✅ Navigation Arrows -->
                    <!-- <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div> -->

                    <!-- ✅ Pagination Dots -->
                    <!-- <div class="swiper-pagination"></div> -->
                </div>
            </div>


        </div>
    </section>

    <section class="section is-mode ">
        <div class="box-services bg-0 box-projects">

            <div class="container-fluid">
                <div class="row align-items-baseline">
                    <div class="col-md-6 " data-aos="fade-left">
                        <!-- <h1 class="text-up"><span class="stroke-900 no-stroke">Services</span></h1> -->
                        <p class="create pb-20">Why <span class="purple">Partner </span> with <span
                                class="bold">Cybertron Labs</span> </p>
                        <p class="lorem">Cybertron Labs’ IT staff augmentation UAE delivers expert developers in 48
                            hours. Trusted by UAE firms for cost-effective, compliant solutions.

                        </p>
                    </div>

                </div>
            </div>

        </div>

        <div class="box-services bg-0 box-projects">
            <div class="container-fluid">
                <div class="row  ">
                    <!-- <div class="col-md-6 " data-aos="fade-right">
              <img src="assets/imgs/page/homepage1/f1.png" alt="">
            </div> -->
                    <div class="col-md-6" data-aos="fade-right">
                        <div class="startup-banner">
                            <div class="overlay"></div>
                            <div class="content">
                                <p class="startup">Launch 50%<br> <span class="purple">Faster
                                    </span></p>
                                <p class="action fw-300 ptb-20">Hire on-demand IT experts in UAE in 48 hours,
                                    accelerating software and app projects

                                </p>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 " data-aos="fade-left">
                        <div class="row">
                            <div class="col-md-12 pb-10">
                                <!-- <img src="assets/imgs/page/homepage1/f2.png" alt=""> -->
                                <div class="fintech-banner">
                                    <div class="fintech-overlay"></div>
                                    <div class="fintech-content">
                                        <p class="startup">Save AED <br><span class="purple">100K+
                                            </span></p>
                                        <p class="action fw-300 ptb-20"> Affordable IT staff augmentation services in
                                            UAE cut costs with zero recruitment fees.


                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 pb-22">
                                <!-- <img src="assets/imgs/page/homepage1/f3.png" alt=""> -->
                                <div class="fintech-banner1">
                                    <div class="fintech-overlay"></div>
                                    <div class="fintech-content">
                                        <p class="startup">Trusted <br> <span class="purple">Expertise
                                            </span></p>
                                        <p class="action fw-300 ptb-20">Vetted outsourced tech talent UAE for mobile app
                                            development, websites, and custom solutions.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- <img src="assets/imgs/page/homepage1/f4.png" alt=""> -->
                                <div class="fintech-banner2">
                                    <div class="fintech-overlay"></div>
                                    <div class="fintech-content">
                                        <p class="startup">Grow
                                            <br>
                                            <span class="purple">Confidently
                                            </span>
                                        </p>
                                        <p class="action fw-300 ptb-20"><b> Staff augmentation for enterprise companies
                                                in
                                                Dubai </b> ensures UAE compliance, 35% better ROI.



                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br>

                    </div>


                </div>
                <div class="row  ">
                    <!-- <div class="col-md-12" data-aos="fade-up">
              <img class="w-100" src="assets/imgs/page/homepage1/f5.png" alt="">
            </div> -->


                </div>
            </div>

        </div>
        </div>
    </section>

    <section class="box-projects">
        <div class="container-fluid">
            <div class="row mb-4">
                <div class="col-md-7 " data-aos="fade-right">
                    <p class="head pb-45">This is how we make <span class="purple"> hiring IT experts in the UAE <br>
                        </span> smooth and hassle-free
                    </p>


                </div>
            </div>

            <div class="row ">
                <div class="col-md-4 " data-aos="fade-right">
                    <div class="pb-10">
                        <div class="hero21 hero-border  ">
                            <div class="hero-content">
                                <!-- Title: یہاں اپنا متن اردو/انگریزی دونوں لکھ سکتے ہیں -->
                                <p class="startup black ">
                                    Consult <span class="purple"></span>
                                </p>
                                <p class="action fw-600 ptb-20 black">
                                    Free session to assess software development or mobile app development needs for UAE
                                    projects.
                                </p>
                            </div>
                            <!-- اگر آپ چاہیں تو بائیں/دائیں اور تصویری عنصر شامل کریں -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4 " data-aos="fade-right">
                    <div class="pb-10">
                        <div class="hero22 hero-border ">
                            <div class="hero-content">
                                <!-- Title: یہاں اپنا متن اردو/انگریزی دونوں لکھ سکتے ہیں -->
                                <p class="startup">
                                    Match <span class="purple"></span>
                                </p>
                                <p class="action fw-600 ptb-20">
                                    Source vetted frontend/backend developers in 48 hours for how to scale IT teams in
                                    Dubai using staff augmentation.

                                </p>
                            </div>
                            <!-- اگر آپ چاہیں تو بائیں/دائیں اور تصویری عنصر شامل کریں -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4 " data-aos="fade-right">
                    <div class="hero21 hero-border ">
                        <div class="hero-content">
                            <!-- Title: یہاں اپنا متن اردو/انگریزی دونوں لکھ سکتے ہیں -->
                            <p class="startup black">
                                Onboard <span class="purple"> <br> </span>
                            </p>
                            <p class="action fw-600 ptb-20 black">
                                Seamless integration via tools like Jira for staff augmentation solutions for startups
                                in UAE.
                            </p>
                        </div>
                        <!-- اگر آپ چاہیں تو بائیں/دائیں اور تصویری عنصر شامل کریں -->
                    </div>
                </div>

            </div>
            <div class="row top-1">
                <div class="col-md-4 left2" data-aos="fade-right">
                    <div class="pb-10">
                        <div class="hero22 hero-border ">
                            <div class="hero-content">
                                <!-- Title: یہاں اپنا متن اردو/انگریزی دونوں لکھ سکتے ہیں -->
                                <p class="startup ">
                                    Execute <span class="purple"></span>
                                </p>
                                <p class="action fw-600 ptb-20 ">
                                    Deliver projects with temporary IT staffing UAE, ensuring speed for apps or
                                    websites.

                                </p>
                            </div>
                            <!-- اگر آپ چاہیں تو بائیں/دائیں اور تصویری عنصر شامل کریں -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4 " data-aos="fade-right">
                    <div class="hero21 hero-border ">
                        <div class="hero-content">
                            <!-- Title: یہاں اپنا متن اردو/انگریزی دونوں لکھ سکتے ہیں -->
                            <p class="startup black">
                                Scale <span class="purple"></span>
                            </p>
                            <p class="action fw-600 ptb-20 black">
                                Adjust team size for staff augmentation for enterprise companies in Dubai, sprints to
                                long-term.

                            </p>
                        </div>
                        <!-- اگر آپ چاہیں تو بائیں/دائیں اور تصویری عنصر شامل کریں -->
                    </div>
                </div>
                <div class="col-md-4 right2" data-aos="fade-right">
                    <div class="hero22 hero-border ">
                        <div class="hero-content">
                            <!-- Title: یہاں اپنا متن اردو/انگریزی دونوں لکھ سکتے ہیں -->
                            <p class="startup ">
                                Support <span class="purple"></span>
                            </p>
                            <p class="action fw-600 ptb-20 ">
                                Ongoing compliance, ROI tracking, per IT project staffing tips for UAE companies.
                                Infographic Alt: Cybertron Labs 6-step IT staffing process UAE
                            </p>
                        </div>
                        <!-- اگر آپ چاہیں تو بائیں/دائیں اور تصویری عنصر شامل کریں -->
                    </div>
                </div>

            </div>


        </div>
    </section>

    <?php include 'partials/slider.php'; ?>
   



    <section class="section ">
        <div class="container-fluid">
            <p class="head text-center pb-45">Frequently Asked Questions
            </p>
            <div class="row ">

                <div class="col-lg-12">
                    <div class="card-custom1">
                        <div class="box-faqs ">


                            <div class="accordion" id="accordionFAQ">
                                <div class="accordion-item ">
                                    <h5 class="accordion-header" id="headingOne">
                                        <button class="accordion-button heading-5 color-900 collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                            aria-expanded="false" aria-controls="collapseOne">What is staff augmentation
                                            in UAE?
                                        </button>
                                    </h5>
                                    <div class="accordion-collapse collapse" id="collapseOne"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionFAQ" style="">
                                        <div class="accordion-body font-lg ">Staff augmentation in UAE temporarily adds
                                            skilled IT experts to your team for projects like software development.
                                            Cybertron Labs provides vetted talent in 48 hours, compliant with PDPL,
                                            saving
                                            40% costs vs. full hires. Explore models.

                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item ">
                                    <h5 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button heading-5 color-900 collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">What is the difference
                                            between staff augmentation
                                            and outsourcing in UAE?
                                        </button>
                                    </h5>
                                    <div class="accordion-collapse collapse" id="collapseTwo"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionFAQ" style="">
                                        <div class="accordion-body font-lg ">Staff augmentation vs outsourcing in UAE:
                                            Augmentation integrates experts into your team for control; outsourcing
                                            delegates full projects. Cybertron Labs’ model suits IT staff augmentation
                                            UAE
                                            for flexibility in Dubai fintech. See comparison.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item ">
                                    <h5 class="accordion-header" id="headingThree">
                                        <button class="accordion-button heading-5 color-900 type="
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="true" aria-controls="collapseThree">How does staff
                                            augmentation help UAE businesses
                                            access global talent?

                                        </button>
                                    </h5>
                                    <div class="accordion-collapse collapse " id="collapseThree"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionFAQ" style="">
                                        <div class="accordion-body font-lg ">Staff augmentation for UAE businesses taps
                                            global pools for hire IT experts UAE, filling skill gaps in mobile app
                                            development. Cybertron Labs delivers remote/on-site pros, cutting
                                            time-to-hire
                                            by 50% amid $52B ICT growth
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item ">
                                    <h5 class="accordion-header" id="headingFour">
                                        <button class="accordion-button heading-5 color-900 collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                            aria-expanded="false" aria-controls="collapseFour">What are the benefits of
                                            staff augmentation for UAE
                                            companies?

                                        </button>
                                    </h5>
                                    <div class="accordion-collapse collapse" id="collapseFour"
                                        aria-labelledby="headingFour" data-bs-parent="#accordionFAQ">
                                        <div class="accordion-body font-lg ">Benefits of staff augmentation for UAE
                                            companies: 40% cost savings, 48-hour scaling, and compliance for temporary
                                            IT
                                            staffing UAE. Cybertron Labs boosts ROI by 35% for startups/enterprises in
                                            Dubai’s tech boom.

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
     <?php include 'partials/case.php'; ?>

    <section class="section bg-900 pt-50">
        <div class="container-fluid">
            <div class="cta-section" aria-label="Cybertron Labs UAE staffing CTA">

                <div class="row align-items-end">
                    <!-- Left Column: Text -->
                    <div class="col-md-6 offset-md-1 cta-text" data-aos="fade-right">
                        <p class="head2">Need expert developers<span class="purple"> </span> <br>
                            <span class="bold">fast?</span>
                        </p>
                        <br>
                        <br>
                        <p class="lorem2 white pb-50">Power software, mobile app, or web development with Cybertron
                            Labs’ IT staff augmentation UAE. Hire top talent in 48 hours

                        </p>
                    </div>

                    <div class="col-md-3 offset-md-2  cta-text" data-aos="fade-up">
                        <a href="contact-us" class="btn btn-default2 grow-up">Book 30 min Free Consultation</a>
                    </div>
                    <!-- Right Column: Button -->

                </div>
                <div class="row align-items-center ">
                    <!-- Left Column: Text -->

                    <!-- Right Column: Button -->
                    <!-- <div class="col-md-4 offset-md-8 " data-aos="fade-left">
                        <a href="contact-us" class="btn btn-default2 grow-up">Book 30 min Free Consultation</a>
                    </div> -->
                </div>
            </div>
        </div>
    </section>

</main>
<!-- Footer Start -->


<?php include 'partials/footer.php'; ?>