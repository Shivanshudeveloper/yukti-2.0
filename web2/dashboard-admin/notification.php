<?php include './includes/header.inc.php' ?>
    <!--Main layout-->
    <main class="my-5">
      <div class="container">
        <!--Section: Content-->
        <section class="text-center text-md-left">
            <ul class="list-group">
            <?php
                include_once '../src/php/dbh.php';
                $sql = "SELECT * FROM notification;";
                $result = mysqli_query($conn, $sql);
                $resultChk = mysqli_num_rows($result);

                if ($resultChk < 1) {
                    echo '
                        <h2 class="text-center">No Notification Yet!</h2>
                    ';
                } else {
                    echo '
                        <h2 class="text-left">All Notifications</h2>
                    ';
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '
                            <li class="list-group-item">
                            <div class="float-right" >'.$row['date'].'</div>
                            '.$row['notification'].'
                            </li>
                        ';
                    }
                }
            ?>
            </ul>
        </section>
      </div>
    </main>
    <!--Main layout-->
<?php include '../includes/footer.inc.php' ?>
