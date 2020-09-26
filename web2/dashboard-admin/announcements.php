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
          <h4 class="mb-5"><strong>Announcements</strong></h4>
          <a class="float-right" href="viewannouncement.php" >View All</a>
          <?php 
          if (isset($_GET['s'])) {
              echo '
                <div class="alert alert-success">
                    Announcements Posted Successfully
                </div>
              ';
          }
          ?>
          <!-- Post -->
            <form action="../src/php/main.php" method="POST" >
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Title</label>
                    <input type="text" class="form-control" required name="title" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Announcement</label>
                    <textarea class="form-control" required name="announcement" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <button type="submit" name="announcementSubmitBtn" class="btn btn-primary">Submit</button>
            </form>

        </section>
      </div>
    </main>
    <!--Main layout-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<?php include '../includes/footer.inc.php' ?>
