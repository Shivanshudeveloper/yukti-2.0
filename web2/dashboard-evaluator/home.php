<?php include './includes/header.inc.php' ?>

    <!----------------------------------------------------------------------- 
      
    This template was created with MDB 5 UI KIT (Material Design for Bootstrap 5).

    MDB is a free (MIT license) library, that provides extra features and significantly extends Bootstrap's capabilities.

    Visit our website to learn more: https://mdbootstrap.com/docs/standard/ 
  
    --------------------------------------------------------------------------->
    <!--Main layout-->
    <main class="my-5">
      <div class="container">
        <!--Section: Content-->
        <section class="text-center text-md-left">
          <h4 class="mb-5"><strong>Innovations Assigned (80)</strong></h4>
            <div class="alert alert-info">
              <h5 class="text-center">
                Pending for Evaluations
              </h5>
            </div>
            <?php 
                    if (isset($_GET['s'])) {
                      if ($_GET['s'] == 'g') {
                        echo '
                          <div class="alert alert-success" >
                            <h3>
                              Successfully Approved
                            </h3>
                          </div>
                        ';
                      } else if ($_GET['s'] == 'd') {
                        echo '
                          <div class="alert alert-danger" >
                            <h3>
                              Successfully Disapproved
                            </h3>
                          </div>
                        ';
                      }
                    }
                  ?>
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
            // This ID Shoud come from the Session
            $emailID = 'steve@gmail.com';
            $sql = "SELECT * FROM project_assign WHERE evaluators_id = '$emailID';";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
              $projectID = $row['project_id'];
              $sql2 = "SELECT * FROM allprojects WHERE completed = 0 AND project_id = '$projectID';";
              $result2 = mysqli_query($conn, $sql2);
              $resultChk = mysqli_num_rows($result2);

              if ($resultChk != 0) {
                $sql3 = "SELECT innovation_d_4.*, innovation_d_2.* FROM innovation_d_4, innovation_d_2 WHERE innovation_d_4.project_id = '$projectID' AND innovation_d_2.project_id = '$projectID'";
                $result3 = mysqli_query($conn, $sql3);
                if ($row3 = mysqli_fetch_assoc($result3)) {
                  echo '
                    <div class="card mt-2">
                      <div class="card-body">
                        <h5 class="card-title">'.$row3['name_product'].'</h5>
                        <p class="card-text">
                          '.$row3['innovation_address'].'
                        </p>
                        <a href="info.php?id='.$projectID.'" class="btn btn-primary float-right">Read</a>
                      </div>
                    </div>
                  ';
                }
              } 

            }
          ?>
        </section>
      </div>
    </main>
    <!--Main layout-->
<?php include '../includes/footer.inc.php' ?>
