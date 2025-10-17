<?php include 'partials/header.php'; ?>
<?php
require_once 'backend/config/dbc.php';
require_once 'backend/function/functions.php';
$positions = getActiveJobPositions($connection);
?>
<main class="main">
    <section class="section banner-mode">


        <div class="box-content-banner">

            <div class="container-fluid">

                <!-- 🔥 EXPANDABLE VIDEO SECTION STARTS -->
                <img class="w-100" src="assets/imgs/page/join/join.png" alt="">
                <!-- 🔥 EXPANDABLE VIDEO SECTION ENDS -->

            </div>

        </div>

        <!-- 🔽 NEXT SECTION STARTS -->
    
    </section>



    <section class="section">
        <div class="box-why-us1 bg-900">
            <div class="container-fluid">
                <div class="pb-45" data-aos="fade-right">
                    <p class="head">Open <span class="purple">Positions </span> <br>
                    </p>
                </div>
                <div class="row">
                    <?php foreach ($positions as $p): ?>
                        <a href="job-details?id=<?= (int) $p['id'] ?>">
                            <div class="col-sm-12 pb-50" data-aos="fade-right">
                                <p class="job1 "><?= htmlspecialchars($p['name']) ?></p>
                                <p class="job2 pb-20 pt-20"><?= htmlspecialchars($p['description']) ?></p>
                                <br>
                                <svg xmlns="http://www.w3.org/2000/svg" width="1920" height="2" viewBox="0 0 1920 2"
                                    fill="none">
                                    <path d="M0 1H1920" stroke="#AAAAAA" stroke-width="0.5" />
                                </svg>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>



            </div>

        </div>
    </section>




    <?php include 'partials/get.php'; ?>







</main>
<!-- Footer Start -->






<?php include 'partials/footer.php'; ?>