<?php include './includes/header.inc.php' ?>
<style>
    .avatar {
        vertical-align: middle;
        width: 200px;
        height: 200px;
        border-radius: 50%;
    }
</style>
<main>
        <!--? Hero Start -->
        <div class="slider-area2 section-bg2" data-background="assets/img/hero/hero4.png">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2">
                                <h2>All Submission</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--? Categories Area Start -->
        <section class="mt-4 mb-4 container">
            <?php
                include_once './src/php/dbh.php';
                $sql = "SELECT * FROM innovation_contest_sheet1;";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '
                    <div class="card mt-2">
                    <div class="card-body">
                    <h4 class="card-subtitle mb-2 text-dark float-right">'.$row['type_trl'].'</h4>
                        <a href="#!">
                        <h1 class="card-title">'.$row['idea_title'].'</h1>
                        </a>
                      <h3 class="card-subtitle mb-2 text-dark">'.$row['instituteName'].'</h3>
                      <h4 class="card-subtitle mb-2 text-dark">'.$row['team_lead_name'].'</h4>
                      <h4 class="card-subtitle mb-2 text-dark">'.$row['mentor_name'].'</h4>

                      <p class="card-text">
                        '.$row['describe_product'].'
                      </p>
                    </div>
                  </div>
                    ';
                }
            ?>
            
        </section>
    </main>
<?php include './includes/footer.inc.php' ?>