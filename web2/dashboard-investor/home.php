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
          <h4 class="mb-5"><strong>All Projects</strong></h4>
          <!-- Post -->
          <?php
            include_once '../src/php/dbh.php';
            // WILL COME FROM Session
            $investorsID = 'lafnel@gmail.com';
            $sql = "SELECT DISTINCT `project_id` FROM project_assign_investors WHERE investors_id = '$investorsID';";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
              $projectID = $row['project_id'];
              $sql2 = "SELECT innovation_d_4.*, innovation_d_2.* FROM innovation_d_4, innovation_d_2 WHERE innovation_d_4.project_id = '$projectID' AND innovation_d_2.project_id = '$projectID'";
              $result2 = mysqli_query($conn, $sql2);
              if ($row2 = mysqli_fetch_assoc($result2)) {
                echo '
                  <div class="card mt-2">
                    <div class="card-body">
                      <h5 class="card-title">'.$row2['name_product'].'</h5>
                      <p class="card-text">
                        '.$row2['innovation_address'].'
                      </p>
                      <a href="info.php?id='.$projectID.'" class="btn btn-primary float-right">Read</a>
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
