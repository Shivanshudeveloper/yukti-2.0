<?php include './includes/header.inc.php' ?>
    
    <main class="my-5">
      <!-- Modal -->
      <div
            class="modal fade"
            id="exampleModal"
            tabindex="-1"
            aria-labelledby="exampleModalLabel"
            aria-hidden="true"
        >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Evaluators</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <input class="form-check-input mr-1" type="checkbox" value="" aria-label="..." />
                            Bill Gates
                        </li>
                        <li class="list-group-item">
                            <input class="form-check-input mr-1" type="checkbox" value="" aria-label="..." />
                            Warren Buffet
                        </li>
                        <li class="list-group-item">
                            <input class="form-check-input mr-1" type="checkbox" value="" aria-label="..." />
                            Mark Zugerberg
                        </li>
                        <li class="list-group-item">
                            <input class="form-check-input mr-1" type="checkbox" value="" aria-label="..." />
                            Jeff Bezos
                        </li>
                        <li class="list-group-item">
                            <input class="form-check-input mr-1" type="checkbox" value="" aria-label="..." />
                            Lio Frennirio
                        </li>
                        <li class="list-group-item">
                            <input class="form-check-input mr-1" type="checkbox" value="" aria-label="..." />
                            Bill Gates
                        </li>
                        <li class="list-group-item">
                            <input class="form-check-input mr-1" type="checkbox" value="" aria-label="..." />
                            Warren Buffet
                        </li>
                        <li class="list-group-item">
                            <input class="form-check-input mr-1" type="checkbox" value="" aria-label="..." />
                            Mark Zugerberg
                        </li>
                        <li class="list-group-item">
                            <input class="form-check-input mr-1" type="checkbox" value="" aria-label="..." />
                            Jeff Bezos
                        </li>
                        <li class="list-group-item">
                            <input class="form-check-input mr-1" type="checkbox" value="" aria-label="..." />
                            Lio Frennirio
                        </li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    Close
                    </button>
                    <button type="button" class="btn btn-primary">Submit</button>
                </div>
                </div>
            </div>
        </div>
      <div class="container">
        <!--Section: Content-->
        <!-- <button data-toggle="modal" data-target="#exampleModal" class="btn btn-success float-right">
              Assign Them
          </button> -->
        <section class="text-center text-md-left">
          <h4 class="mb-5"><strong>All Announcements</strong></h4>
          <?php 
          if (isset($_GET['s'])) {
              echo '
                <div class="alert alert-danger">
                    Deleted Successfully
                </div>
              ';
          }
          ?>
        </section>
        <section class="container mt-4 mb-4">
            <?php
                include_once '../src/php/dbh.php';
                $sql = "SELECT * FROM announcement;";
                $result = mysqli_query($conn, $sql);

                $resultChk = mysqli_num_rows($result);

                if ($resultChk < 1) {
                    echo '<h2 class="text-center" >No Announcements Yet!</h2>';
                } else {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '
                            <div class="card mt-2">
                                <div class="card-body">
                                <h1 class="card-title">'.$row['title'].'</h1>
                                <p class="card-text">'.$row['description'].'</p>
                                <a href="../src/php/main.php?d=t&id='.$row['id'].'" class="btn btn-danger">Delete</a>
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<?php include '../includes/footer.inc.php' ?>
