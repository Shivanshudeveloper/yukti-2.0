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
                    <div class="alert alert-success">
                        Approved Successfully
                    </div>
                ';
            }
            ?>
            
            <?php
                include_once '../src/php/dbh.php';
                $sql = "SELECT * FROM ideas WHERE approved = 0;";
                $result = mysqli_query($conn, $sql);
                $resultChk = mysqli_num_rows($result);
                if ($resultChk < 1) {
                    echo '<h2 class="text-center" >No Ideas Yet!</h2>';
                } else {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '
                            <div class="card w-100 mt-2">
                                <center>
                                <img src="../'.$row['documents'].'" class="card-img-top w-25" alt="...">
                                </center>
                                <div class="card-body">
                                <h1 class="card-title">'.$row['title'].'</h1>
                                <p class="card-text">'.$row['description'].'</p>
                                <a href="../src/php/main.php?ap=t&id='.$row['id'].'" class="btn btn-danger">Approved</a>
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
