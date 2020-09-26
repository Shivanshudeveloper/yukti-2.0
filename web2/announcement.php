<?php include './includes/header.inc.php' ?>
<main>
        <!--? Hero Start -->
        <div class="slider-area2 section-bg2" data-background="assets/img/hero/hero4.png">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2">
                                <h2>Announcements</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="container mt-4 mb-4">
            <?php
                include_once './src/php/dbh.php';
                $sql = "SELECT * FROM announcement;";
                $result = mysqli_query($conn, $sql);

                $resultChk = mysqli_num_rows($result);

                if ($resultChk < 1) {
                    echo '<h2 class="text-center" >No Announcements Yet!</h2>';
                } else {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '
                            <div class="card mt-2">
                                <div class="card-body">
                                <h1 class="card-title">'.$row['title'].'</h1>
                                <p class="card-text">'.$row['description'].'</p>
                                </div>
                            </div>
                        ';
                    }
                }
            ?>
        </section>
        <!-- Hero End -->
        <!--? Categories Area Start -->
        
    </main>
<?php include './includes/footer.inc.php' ?>