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
            <a href="logout.php" class="btn btn-outline-danger mb-4 float-right">
              Logout
            </a>
          <?php
          echo '
            <h2>Hey '.$_SESSION['full_name'].' ('.$_SESSION['type'].')</h2>
            <h3>'.$_SESSION['email'].'</h3>
            <h3>'.$_SESSION['phone'].'</h3>
          ';
          ?>

            


        </section>
      </div>
    </main>
    <!--Main layout-->
<?php include '../includes/footer.inc.php' ?>
