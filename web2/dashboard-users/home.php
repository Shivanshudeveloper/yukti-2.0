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
          echo '
            <h2>Welcome '.$_SESSION['full_name'].'</h2>
          ';
          ?>

          <center>
            <h2 class="text-center mt-4">
                Start Submitting Projects            
            </h2>
            <a href="forms/d-form1.php" class="btn btn-primary mb-4">
              Start Now
            </a>
          </center>
          




        </section>
      </div>
    </main>
    <!--Main layout-->
<?php include '../includes/footer.inc.php' ?>
