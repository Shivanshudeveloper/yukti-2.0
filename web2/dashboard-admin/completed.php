<?php include './includes/header.inc.php' ?>

    <!----------------------------------------------------------------------- 
      
    This template was created with MDB 5 UI KIT (Material Design for Bootstrap 5).

    MDB is a free (MIT license) library, that provides extra features and significantly extends Bootstrap's capabilities.

    Visit our website to learn more: https://mdbootstrap.com/docs/standard/ 
  
    --------------------------------------------------------------------------->

    <!--Main Navigation-->
    

    <!--Main layout-->
    <main class="my-5">
      <div class="container">
        <!--Section: Content-->
        <section class="text-center text-md-left">
          <h4 class="mb-5"><strong>Completed (80)</strong></h4>
          <!-- Post -->
          <div class="row">
            <div class="col">
                <select class="form-select" aria-label="Default select example">
                        <option selected>-- SORT BY --</option>
                        <option value="Aerospace, Aviation, Space">Aerospace, Aviation, Space</option>
                        <option value="Agriculture and Allied Industries">Agriculture and Allied Industries</option>
                        <option value="Chemicals">Chemicals</option>
                        <option value="Clean Tech">Clean Tech</option>
                        <option value="Consumer Goods and Retail">Consumer Goods and Retail</option>
                        <option value="Conventional Energy">Conventional Energy</option>
                        <option value="Defence & Security">Defence & Security</option>
                        <option value="Education">Education</option>
                        <option value="Electronics and IoT">Electronics and IoT</option>
                        <option value="Fashion and Textiles">Fashion and Textiles</option>
                        <option value="Healthcare and Pharma">Healthcare and Pharma</option>
                        <option value="Information and Communication Technologies">Information and Communication Technologies</option>
                        <option value="Infrastructure">Infrastructure</option>
                        <option value="Manufacturing">Manufacturing</option>
                        <option value="Mining, Metals, Materials">Mining, Metals, Materials</option>
                        <option value="Mobility">Mobility</option>
                        <option value="Sports">Sports</option>
                        <option value="Technologies for Grassroots impact">Technologies for Grassroots impact</option>
                        <option value="Tourism and Hospitality">Tourism and Hospitality</option>
                        <option value="Water, Sanitation and Waste Management">Water, Sanitation and Waste Management</option>
                        <option value="Others">Others</option>
                  </select>
            </div>
            <div class="col">
                <select class="form-select" aria-label="Default select example">
                  <option selected>-- RECOMMENDED FOR --</option>
                  <option value="Market Research">Market Research</option>
                  <option value="Funding">Funding</option>
                  <option value="Pre-Incubation">Pre-Incubation</option>
                  <option value="Licencing / Commercialization">Licencing / Commercialization</option>
                  <option value="IP Protection">IP Protection</option>
                  <option value="Mentorship">Mentorship</option>
                  <option value="Distribution Network">Distribution Network</option>
                </select>
            </div>
          </div>
          <center>
            <a href="disapproved.php" class="btn btn-danger mt-2">All Dsiapproved Projects</a>
          </center>
        <br />
        <br />
          <!-- Post -->
          
          
          

          <?php 
            include_once '../src/php/dbh.php';
            // This ID Shoud come from the Session
            $evaluatorsName = '';
            $sql = "SELECT DISTINCT `project_id`, `evaluators_id` FROM evaluators_reccomendation;";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
              $projectID = $row['project_id'];
              $evaluatorsEmail = $row['evaluators_id'];

              $sqlInvestors = "SELECT `investors` FROM allprojects WHERE project_id = '$projectID' AND investors = 0 AND mentors = 0;";
              $resultInvestor = mysqli_query($conn, $sqlInvestors);
              $resultChk = mysqli_num_rows($resultInvestor);
              if ($resultChk > 0) {
                $sqlEvaluator = "SELECT `title`, `full_name` FROM evaluators WHERE email = '$evaluatorsEmail';";
                $resultEvaluator = mysqli_query($conn, $sqlEvaluator);
                if ($rowEvaluator = mysqli_fetch_assoc($resultEvaluator)) {
                  $evaluatorsName = $rowEvaluator['title']. '. '.$rowEvaluator['full_name'];
                }
                $sqlApproved = "SELECT * FROM evaluators_reccomendation WHERE project_id = '$projectID';";
                $resultApproved = mysqli_query($conn, $sqlApproved);
                $approvedRecommendation = '';
                while ($rowApproved = mysqli_fetch_assoc($resultApproved)) {
                  $approvedRecommendation = $rowApproved['assign'] . ', ' . $approvedRecommendation;
                }
                $approvedRecommendation = substr($approvedRecommendation, 0, -1);
                $sql2 = "SELECT * FROM allprojects WHERE project_id = '$projectID';";
                $result2 = mysqli_query($conn, $sql2);
                while ($row2 = mysqli_fetch_assoc($result2)) {
                  $status = $row2['status'];
                  $sql3 = "SELECT innovation_d_4.*, innovation_d_2.* FROM innovation_d_4, innovation_d_2 WHERE innovation_d_4.project_id = '$projectID' AND innovation_d_2.project_id = '$projectID'";
                  $result3 = mysqli_query($conn, $sql3);
                  if ($row3 = mysqli_fetch_assoc($result3)) {
                    echo '
                      <div class="card mt-2">
                        <div class="card-body">
                        ';
                        if ($status == 3 || $status == 1 ) {
                          echo '
                            <span class="badge bg-success float-right">Approved</span>
                          ';
                        } elseif ($status == -1) {
                          echo '
                            <span class="badge bg-danger float-right">Dsiapproved</span>
                          ';
                        }
                        echo
                        '
                          <h5 class="card-title">'.$row3['name_product'].'</h5>
                          <h6>
                              Evaluated By: '.$evaluatorsName.'
                          </h6>
                          <h5><span class="badge bg-primary">Recommended for: '.substr($approvedRecommendation, 0, -1).'</span></h5>
                          <p class="card-text">
                            '.$row3['innovation_address'].'
                          </p>
                          <a href="investorinfo.php?id='.$projectID.'" class="btn btn-primary float-right">Read</a>
                        </div>
                      </div>
                    ';
                  }
                }
              }
            }
          ?>
        </section>
      </div>
    </main>
    <!--Main layout-->
<?php include '../includes/footer.inc.php' ?>
