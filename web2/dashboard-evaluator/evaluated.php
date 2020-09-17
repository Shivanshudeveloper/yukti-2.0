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
        <select class="form-select float-right w-25" aria-label="Default select example">
          <option selected>-- SORT BY --</option>
          <option value="Approved">Approved</option>
          <option value="Disapproved">Disapproved</option>
        </select>
        <!--Section: Content-->
        <section class="text-center text-md-left">
          <h4 class="mb-5"><strong>Completed Projects</strong></h4>
          <!-- Post -->
          
          <?php 
            include_once '../src/php/dbh.php';
            // This ID Shoud come from the Session
            $emailID = 'steve@gmail.com';
            $sql = "SELECT DISTINCT `project_id` FROM evaluators_reccomendation WHERE evaluators_id = '$emailID';";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
              $projectID = $row['project_id'];
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
                          <span class="badge bg-danger float-right">Approved</span>
                        ';
                      }

                      echo
                      '
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
