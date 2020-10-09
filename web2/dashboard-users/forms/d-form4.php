<?php include './header.php' ?>
    <?php 
    session_start();
    ?>
    <!--Main layout-->
    <form action="../../src/php/main.php" enctype="multipart/form-data" method="POST">
    <main class="mt-4 mb-5 container">
        <h2 class="display-4 font-weight-bold">
            DISCLOSURE FORM
        </h2>

        <div class="row mt-4">
            <div class="col col-lg-5 ml-4">
                <h5>What is the name of your product/technology?</h5>
            </div>
            <div class="col">
                <input type="text" required class="form-control" id="technologyName" name="technologyName" aria-describedby="emailHelp">
            </div>
        </div>

        <div class="row mt-4">
            <div class="col ml-4">
                <h4>Which industries would your innovation find use in?</h4>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col">
                <div class="form-check">
                    <textarea class="form-control" required name="innovation" id="innovation" rows="10"></textarea>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col col-lg-5 ml-4">
                <h5>Document with detailed description?</h5>
            </div>
            
        </div>

        <div class="row mt-2">
            <div class="col">
                <div class="form-file ml-4">
                    <input type="file" class="form-file-input" required name="document" id="document">
                    <label class="form-file-label" for="customFile">
                        <span class="form-file-text">Choose</span>
                        <span class="form-file-button">Browse</span>
                    </label>
                </div>
            </div>
        </div>


        <div class="row mt-4">
            <div class="col col-lg-5 ml-4">
                <h5>Photos of product/ technology</h5>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <div class="form-file ml-4">
                    <input type="file" name="image" id="image" required class="form-file-input">
                    <label class="form-file-label" for="customFile">
                        <span class="form-file-text">Choose</span>
                        <span class="form-file-button">Browse</span>
                    </label>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col col-lg-5 ml-4">
                <h5>IT Returns (If any)</h5>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <div class="form-file ml-4">
                    <input type="file" name="itreturns" id="itreturns" class="form-file-input">
                    <label class="form-file-label" for="customFile">
                        <span class="form-file-text">Choose</span>
                        <span class="form-file-button">Browse</span>
                    </label>
                </div>
            </div>
        </div>

        <?php
            include_once '../../src/php/dbh.php';
            $projectID = $_SESSION['projectID'];
            $sql = "SELECT * FROM innovation_d_1 WHERE project_id = '$projectID';";
            $result = mysqli_query($conn, $sql);
            if ($row = mysqli_fetch_assoc($result)) {
                if ($row['stage'] != 'TRL 2') {
                    echo '
                        <div class="row mt-4">
                            <div class="col col-lg-5 ml-4">
                                <h5>Please provide the link(s) of the technology/ startup?</h5>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" id="any_link" name="any_link" placeholder="Webpage/ LinkedIn/ Facebook/ Twitter/ YouTube" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                        </div>
                
                        <div class="row mt-4">
                            <div class="col col-lg-5 ml-4">
                                <h5>Application Demo Link (If Any)</h5>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" id="demo_link" name="demo_link" aria-describedby="emailHelp">
                            </div>
                        </div>
                
                        <div class="row mt-4">
                            <div class="col col-lg-5 ml-4">
                                <h5>Application Demo User ID (If Any)</h5>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" id="demo_user_id" name="demo_user_id" aria-describedby="emailHelp">
                            </div>
                        </div>
                
                        <div class="row mt-4">
                            <div class="col col-lg-5 ml-4">
                                <h5>Application Demo User Password (If Any)</h5>
                            </div>
                            <div class="col">
                                <input type="password" class="form-control" id="demo_password" name="demo_password" aria-describedby="emailHelp">
                            </div>
                        </div>
                    ';
                }
            }
        ?>

        <div class="row mt-5">
            <div class="col">
                <center>
                <button type="submit" name="d4SubmitBtn" class="btn btn-lg btn-success w-75">
                    Next
                </button>
                </center>
            </div>
        </div>
    </main>
    </form>
    <!--Main layout-->
<?php include './footer.php' ?>