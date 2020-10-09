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
        <!-- Hero End -->
        <!--? Categories Area Start -->
        <section class="mt-4 mb-4 container">
            <?php
                include_once './src/php/dbh.php';
                $id = $_GET['id'];
                $sql = "SELECT * FROM innovation_contest_sheet1 WHERE id = '$id';";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '
                    <div class="card mt-2 border-0">
                    <div class="card-body">
                        <a href="viewsubmission.php?id='.$row['id'].'">
                        <h1 class="card-title">'.$row['idea_title'].'</h1>
                        </a>
                      <h3 class="card-subtitle mb-2 text-muted">'.$row['instituteName'].'</h3>
                      <h4 class="card-subtitle mb-2 text-muted">'.$row['team_lead_name'].'</h4>
                      <h4 class="card-subtitle mb-2 text-muted">'.$row['mentor_name'].'</h4>
                      <h4>Define Problem</h4>
                      <p class="card-text">
                        '.$row['define_problem'].'
                      </p>
                      <h4>Explain Solution</h4>
                      <p class="card-text">
                        '.$row['explain_solution'].'
                      </p>
                      <h4>Describe Product</h4>
                      <p class="card-text">
                        '.$row['describe_product'].'
                      </p>
                      <h4>Proposed Product</h4>
                      <p class="card-text">
                        '.$row['proposed_product'].'
                      </p>
                      <h4>Innovation Technology</h4>
                      <p class="card-text">
                        '.$row['innovation_technology'].'
                      </p>
                      <h4>Feasibility Specific</h4>
                      <p class="card-text">
                        '.$row['feasibility_specific'].'
                      </p>
                      <h4>Feasibility Measurable</h4>
                      <p class="card-text">
                        '.$row['feasibility_measureable'].'
                      </p>
                      <h4>Feasibility Attainable</h4>
                      <p class="card-text">
                        '.$row['feasibility_attainable'].'
                      </p>
                      <h4>Feasibility Realistic</h4>
                      <p class="card-text">
                        '.$row['feasibility_realistic'].'
                      </p>
                      <h4>Feasibility Timeline</h4>
                      <p class="card-text">
                        '.$row['feasibility_timeline'].'
                      </p>
                      <h4>Applicable Usability</h4>
                      <p class="card-text">
                        '.$row['applicable_usability'].'
                      </p>
                      <h4>Applicable Scalibility</h4>
                      <p class="card-text">
                        '.$row['applicable_scalability'].'
                      </p>
                      <h4>Applicable Economic</h4>
                      <p class="card-text">
                        '.$row['applicable_economic'].'
                      </p>
                      <h4>Applicable Enviorment</h4>
                      <p class="card-text">
                        '.$row['applicable_enviroment'].'
                      </p>
                      <h4>Applicable IP</h4>
                      <p class="card-text">
                        '.$row['applicable_ip'].'
                      </p>
                      <h4>Market Size</h4>
                      <p class="card-text">
                        '.$row['market_size'].'
                      </p>
                    </div>
                  </div>
                    ';
                }
            ?>
            
        </section>
    </main>
<?php include './includes/footer.inc.php' ?>