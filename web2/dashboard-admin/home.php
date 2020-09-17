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
          <h4 class="mb-5"><strong>Pending (80)</strong></h4>
          <!-- Post -->
          <select class="form-select float-left w-25" aria-label="Default select example">
                    <option selected>-- SORT BY --</option>
                    <option value="Aerospace, Aviation, Space">Aerospace, Aviation, Space</option>
                    <option value="Agriculture and Allied Industries">Agriculture and Allied Industries</option>
                    <option value="Chemicals">Chemicals</option>
                    <option value="Clean Tech">Clean Tech</option>
                    <option value="Consumer Goods and Retail">Consumer Goods and Retail</option>
                    <option value="Conventional Energy">Conventional Energy</option>
                    <option value="Defence & Security">Defence & Security</option>
                    <option value="Education">Education</option>
                    <option value="Electronics and IoT">Electronics and IoT</option>
                    <option value="Fashion and Textiles">Fashion and Textiles</option>
                    <option value="Healthcare and Pharma">Healthcare and Pharma</option>
                    <option value="Information and Communication Technologies">Information and Communication Technologies</option>
                    <option value="Infrastructure">Infrastructure</option>
                    <option value="Manufacturing">Manufacturing</option>
                    <option value="Mining, Metals, Materials">Mining, Metals, Materials</option>
                    <option value="Mobility">Mobility</option>
                    <option value="Sports">Sports</option>
                    <option value="Technologies for Grassroots impact">Technologies for Grassroots impact</option>
                    <option value="Tourism and Hospitality">Tourism and Hospitality</option>
                    <option value="Water, Sanitation and Waste Management">Water, Sanitation and Waste Management</option>
                    <option value="Others">Others</option>
          </select>
        <br />
        <br />
        <?php
          include_once '../src/php/dbh.php';
          // From Session
          $userId = '12345678';
          $sql = "SELECT * FROM allprojects WHERE progress < 3;";
          $result = mysqli_query($conn, $sql);
          $resultChk = mysqli_num_rows($result);
          if ($resultChk < 1) {
              echo '
                <h2 class="text-center mt-4 mb-4" >
                  No Projects Found!
                  <br />
                  <br />
                </h2>
              ';
          } else {
            while ($row = mysqli_fetch_assoc($result)) {
              $projectID = $row['project_id'];
              $sql = "SELECT innovation_d_4.*, innovation_d_2.* FROM innovation_d_4, innovation_d_2 WHERE innovation_d_4.project_id = '$projectID' AND innovation_d_2.project_id = '$projectID'";
              $result2 = mysqli_query($conn, $sql);
              if ($row2 = mysqli_fetch_assoc($result2)) {
                echo '
                  <div class="card mt-2">
                    <div class="card-body">
                      <span class="badge bg-danger float-right h5">'.$row['progress'].'</span>
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
