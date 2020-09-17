
<?php include './includes/header.inc.php' ?>
<?php 
include_once '../src/php/dbh.php';
session_start(); 
?>
    <!--Main layout-->
    <main class="mt-4 mb-5">
      <div class="container">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          <div class="col-md-8 mb-4">
            <!--Section: Post data-->
                  <?php 
                    if (isset($_GET['s'])) {
                      if ($_GET['s'] == 'g') {
                        echo '
                          <div class="alert alert-success" >
                            <h3>
                              Evaluators Assign Successfully
                            </h3>
                          </div>
                        ';
                      }
                    }
                  ?>
            <section class="border-bottom mb-4">
              <div class="row align-items-center mb-4">
                <div class="col-lg-6 text-center text-lg-left mb-3 m-lg-0">
                  
                  <span class="h5 text-dark" > 
                    
                    <?php 
                      $projectID = $_GET['id'];
                      $industryUse = '';
                      $sql = "SELECT innovation_d_4.*, innovation_d_3.* FROM innovation_d_4, innovation_d_3 WHERE innovation_d_4.project_id = '$projectID' AND innovation_d_3.project_id = '$projectID' ;";
                      $result = mysqli_query($conn, $sql);
                      if ($row = mysqli_fetch_assoc($result)) { 
                        echo $row['name_product']; 
                        echo '</span>';
                        echo '
                          <p>'.$row['nameInventor'].' (STUDENT)</p>
                        ';
                        $industryUse = $row['industry_use'];
                      }

                      $sql = "SELECT * FROM allprojects WHERE project_id = '$projectID';";
                      $result = mysqli_query($conn, $sql);
                      if ($row = mysqli_fetch_assoc($result)) {
                          $id = $row['id'] + 1000;
                          echo 'Your Reference ID is: '.$id;
                      }
                    ?>  
                </div>
              </div>
            </section>
            <!--Section: Post data-->

            <!--Section: Text-->
            <section>
              <p>
                <?php 
                  $innovation = '';
                  $solution = '';
                  $sql = "SELECT * FROM innovation_d_2 WHERE project_id = '$projectID';";
                  $result = mysqli_query($conn, $sql);
                  if ($row = mysqli_fetch_assoc($result)) { 
                    echo $row['solution'];
                    $innovation = $row['innovation_address'];
                    $solution = $row['solution'];
                  }
                ?>
              </p>

              <!-- <p class="note note-light">
                <strong>Note:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Optio odit consequatur porro sequi ab distinctio modi. Rerum cum dolores sint,
                adipisci ad veritatis laborum eaque illum saepe mollitia ut voluptatum.
              </p> -->
            
              <!-- <h5>
                  Tags
              </h5>
              <ul>
                <li>Lorem</li>
                <li>Ipsum</li>
                <li>Dolor</li>
                <li>Sit</li>
                <li>Amet</li>
              </ul> -->

              <div class="alert alert-info">
                <h2>
                  <?php 
                    $sql = "SELECT * FROM innovation_d_1 WHERE project_id = '$projectID';";
                    $result = mysqli_query($conn, $sql);
                    if ($row = mysqli_fetch_assoc($result)) { 
                      echo '<h4>Asked For: '.$row['support_required'].'</h4>';
                    }
                  ?>
                </h2>
              </div>

              <h5>
              What basic problem does your innovation address? 
              </h5>
              <p>
                <?php echo $innovation ?>
              </p>

              <h5>
              Which industries would your innovation find use in? 
              </h5>
              <p>
                <?php 
                  echo $industryUse;
                ?>
              </p>

              <h5>
              Explain your solution/innovation?
              </h5>
              <p>
                <?php echo $solution; ?>
              </p>

              <h5>
              Has your technology been validated by a 3rd party? 
              </h5>
              <p>
                <?php 
                  $featured = '';
                  $presented = '';
                  $funds = '';
                  $business_status = '';
                  $primary_customers = '';
                  $commercialization = '';
                  $prospective_users = '';
                  $sql = "SELECT * FROM innovation_d_5 WHERE project_id = '$projectID';";
                  $result = mysqli_query($conn, $sql);
                  if ($row = mysqli_fetch_assoc($result)) { 
                    echo $row['third_party_validated'];
                    $featured = $row['featured'];
                    $presented = $row['presented'];
                    $funds = $row['funds'];
                    $prospective_users = $row['prospective_users'];
                    $commercialization = $row['commercialization'];
                    $business_status = $row['business_status'];
                    $primary_customers = $row['primary_customers'];
                  }
                ?>
                <!-- YES <a class="ml-2" href="#!">Download File</a> -->
              </p>

              <h5>
              Has the innovation been featured or described or presented in any publications/conferences/ exhibits?
              </h5>
              <p>
                <?php echo $featured; ?>
                <!-- YES <a class="ml-2" href="#!">Download File</a> -->
              </p>


              <h5>
              Has the innovation/ technology been presented in any competition?
              </h5>
              <p>
                <?php echo $presented; ?>
              </p>

              <h5>
              Awards won 
              </h5>
              <p>
                YES<a class="ml-2" href="#!">Download File</a>
              </p>

              <h5>
              Has the Innovation/ technology earlier received any grant/ funds from government/ non-government organizations?
              </h5>
              <p>
                <?php echo $funds; ?>
                <!-- YES<a class="ml-2" href="#!">Download File</a> -->
              </p>

              <h5>
              What is the business status of the organization developing this innovation? 
              </h5>
              <p>
                <?php echo $business_status; ?>
              </p>

              <h5>
              Who are the primary customers that would purchase it?
              </h5>
              <p>
                <?php echo $primary_customers; ?>
              </p>

              <h5>
              What method of commercialization do you suggest? 
              </h5>
              <p>
              <?php echo $commercialization; ?>
              </p>

              <h5>
              Have any prospective users or buyers shown interest in this innovation? 
              </h5>
              <p>
                <?php echo $prospective_users; ?>
              <!-- YES<a class="ml-2" href="#!">Download File</a> -->
              </p>

              <h5>
              Do you have an Indian patent?  
              </h5>
              <p>
              2992138J<a class="ml-2" href="#!">Download File</a>
              </p>

              <h5>
              Do you have an International Patent for this technology?
              </h5>
              <p>
              2992138J<a class="ml-2" href="#!">Download File</a>
              </p>

              <h5>
              Describe the competition in your product segment?
              </h5>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, temporibus nulla
                voluptatibus accusantium sapiente doloremque. Doloribus ratione laboriosam culpa. Ab
                officiis quidem, debitis nostrum in accusantium dolore veritatis eius est?
              </p>

              <h5>
              Please provide key differentiators that give you an edge over your competitors? 
              </h5>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, temporibus nulla
                voluptatibus accusantium sapiente doloremque. Doloribus ratione laboriosam culpa. Ab
                officiis quidem, debitis nostrum in accusantium dolore veritatis eius est?
              </p>

            <ul class="list-group">
                <li class="list-group-item">Stage of Technology: <b>TRL 9</b></li>
                <li class="list-group-item">name of your product/technology: <b>My Tech</b></li>
            </ul>


            </section>
            <!--Section: Text-->

            <!--Section: Share buttons-->
            <section class="text-center border-top border-bottom py-4 mb-4">
              <button type="button" class="btn btn-primary mr-1">
                Download Documents
              </button>
              <button type="button" class="btn btn-primary mr-1">
                IT Returns
              </button>
              <button type="button" class="btn btn-primary mr-1">
                DUE Diligence
              </button>

              <button type="button" class="btn btn-primary mr-1">
                Financial Projection
              </button>
              <br />
              <br />
              <button type="button" class="btn btn-primary mr-1">
                Business Plan
              </button>
              <button type="button" class="btn btn-primary mr-1">
                Pitch Deck
              </button>
            </section>
            <!--Section: Share buttons-->
            <!--Section: Reply-->
          </div>
          <!--Grid column-->
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-4 mb-4">
            <!--Section: Sidebar-->
            <section class="sticky-top" style="top: 20px;">
              <!--Section: Ad-->
              <section class="border-bottom pb-4 mb-4">
                <h4>
                    Evaluators Assigned
                </h4>
                <form action="../src/php/main.php" method="POST">
                <ul class="list-group">
                    <?php 
                      $sql = "SELECT * FROM project_assign WHERE project_id = '$projectID';";
                      $result = mysqli_query($conn, $sql);
                      while ($row = mysqli_fetch_assoc($result)) {
                        $email = $row['evaluators_id'];

                        $sql2 = "SELECT * FROM evaluators WHERE email = '$email';";
                        $result2 = mysqli_query($conn, $sql2);
                        if ($row2 = mysqli_fetch_assoc($result2)) {
                            echo '
                            <li class="list-group-item">
                                '.$row2['full_name'].' 
                            </li>
                            ';
                        }
                      }
                    ?>
                </ul>
              </section>
              <!--Section: Ad-->

              <!--Section: Video-->
              <section class="">
                <!-- <button type="submit" name="allocateEvaluatorBtn" class="btn mt-2 btn-block btn-lg btn-success">
                    Allocate
                </button> -->
              </section>
              </form>
              <!--Section: Video-->
            </section>
            <!--Section: Sidebar-->
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </div>
    </main>
    <!--Main layout-->

<?php include './includes/footer.inc.php' ?>