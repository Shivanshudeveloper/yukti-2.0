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
            <div>
            <a href="allideas.php" class="float-right">
                All Submission
            </a>
            <h2 class="text-center mt-4">
                Submit an Idea        
            </h2>
            <?php 
            if (isset($_GET['s'])) {
                echo '
                    <div class="alert alert-success">
                        Idea Posted Successfully
                    </div>
                ';
            }
            ?>
            <form action="../src/php/main.php" enctype="multipart/form-data" method="POST" >
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Title</label>
                    <input type="text" class="form-control" required name="title" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                    <textarea class="form-control" required name="description" id="exampleFormControlTextarea1" rows="5"></textarea>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <div class="form-file">
                            <input type="file" name="document" id="document" class="form-file-input">
                            <label class="form-file-label" for="customFile">
                                <span class="form-file-text">Upload a Picture</span>
                                <span class="form-file-button">Browse</span>
                            </label>
                        </div>
                    </div>
                </div>
                <center>
                    <button type="submit" name="ideaSubmitBtn" class="btn btn-primary mt-2 w-25">Submit</button>
                </center>
            </form>
            </div>
          




        </section>
      </div>
    </main>
    <!--Main layout-->
<?php include '../includes/footer.inc.php' ?>
