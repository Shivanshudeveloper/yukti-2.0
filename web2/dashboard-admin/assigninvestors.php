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
        <h4 class="mb-5"><strong>Investors Under Evaluation </strong></h4>
          <!-- Post -->
          <select class="form-select float-left w-25" aria-label="Default select example">
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
        <br />
        <br />
          <!-- Post -->
          
          <?php
            include_once '../src/php/dbh.php';
            // From Session
            $userId = '12345678';
            $sql = "SELECT * FROM allprojects WHERE investors > 0;";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
              $projectID = $row['project_id'];
              $investors = $row['investors'];

              $sql = "SELECT innovation_d_4.*, innovation_d_2.* FROM innovation_d_4, innovation_d_2 WHERE innovation_d_4.project_id = '$projectID' AND innovation_d_2.project_id = '$projectID'";
              $result2 = mysqli_query($conn, $sql);
              if ($row2 = mysqli_fetch_assoc($result2)) {
                echo '
                  <div class="card mt-2">
                    <div class="card-body">
                      <span class="badge bg-danger float-right h5">Investors: '.$investors.'</span>
                      <h5 class="card-title">'.$row2['name_product'].'</h5>
                      <p class="card-text">
                        '.$row2['innovation_address'].'
                      </p>
                      <a href="investorunderevaluationinfo.php?id='.$projectID.'" class="btn btn-primary float-right">Read</a>
                    </div>
                  </div>
                ';
              }
            }
          ?>


        </section>
      </div>
    </main>
    <!--Main layout-->
<?php include '../includes/footer.inc.php' ?>
