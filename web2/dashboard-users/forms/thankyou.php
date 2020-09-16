<?php include './header.php' ?>
    <!--Main layout-->
    <main class="mt-4 mb-5 container">
        <center>
            <h1 class="font-weight-bold">
                Thank You for your Submission on Yukti 2.O 
            </h1>
            <h4>
                <?php 
                    include_once '../../src/php/dbh.php';
                    $projectID = $_GET['id'];
                    $sql = "SELECT * FROM allprojects WHERE project_id = '$projectID';";
                    $result = mysqli_query($conn, $sql);
                    if ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'] + 1000;
                        echo 'Your Reference ID is: '.$id;
                    }
                ?>
            </h4>
            <img class="img img-fluid w-50" src="https://i.pinimg.com/originals/f0/07/66/f007669223b43a7c17dae49cf45871ce.gif" alt="Image" srcset="">
            <br />
            <a href="d-form1.php" class="btn btn-info">
                Submit Another Innovation
            </a>
        </center>
    </main>
    <!--Main layout-->
<?php include './footer.php' ?>