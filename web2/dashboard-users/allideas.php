<?php include './includes/header.inc.php' ?>
<?php session_start(); ?>
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
            <?php 
            if (isset($_GET['s'])) {
                echo '
                    <div class="alert alert-danger">
                        Deleted Successfully
                    </div>
                ';
            }
            ?>
            
            <?php
                include_once '../src/php/dbh.php';
                $userID = $_SESSION['user_id'];

                $sql = "SELECT * FROM ideas WHERE user_id = '$userID';";
                $result = mysqli_query($conn, $sql);

                $resultChk = mysqli_num_rows($result);

                if ($resultChk < 1) {
                    echo '<h2 class="text-center" >No Ideas Yet!</h2>';
                } else {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '
                            <div class="card mt-2" style="width: 20rem;">
                                <img src="../'.$row['documents'].'" class="card-img-top" alt="...">
                                <div class="card-body">
                                <h1 class="card-title">'.$row['title'].'</h1>
                                <p class="card-text">'.$row['description'].'</p>
                                <a href="../src/php/main.php?d2=t&id='.$row['id'].'" class="btn btn-danger">Delete</a>
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
