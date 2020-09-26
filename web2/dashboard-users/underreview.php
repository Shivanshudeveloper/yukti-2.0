<?php include './includes/header.inc.php' ?>
<?php session_start(); ?>

    <!--Main layout-->
    <main class="my-5">
      <div class="container">
        <?php
          include_once '../src/php/dbh.php';
          // From Session
          $userId = $_SESSION['user_id'];
          $sql = "SELECT * FROM allprojects WHERE user_id = '$userId';";
          $result = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_assoc($result)) {
            $projectID = $row['project_id'];

            $sql = "SELECT innovation_d_4.*, innovation_d_2.* FROM innovation_d_4, innovation_d_2 WHERE innovation_d_4.project_id = '$projectID' AND innovation_d_2.project_id = '$projectID'";
            $result2 = mysqli_query($conn, $sql);
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
      </div>
    </main>
    <!--Main layout-->
<?php include '../includes/footer.inc.php' ?>
