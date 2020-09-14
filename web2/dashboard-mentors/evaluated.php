<?php include './includes/header.inc.php' ?>

    <!----------------------------------------------------------------------- 
      
    This template was created with MDB 5 UI KIT (Material Design for Bootstrap 5).

    MDB is a free (MIT license) library, that provides extra features and significantly extends Bootstrap's capabilities.

    Visit our website to learn more: https://mdbootstrap.com/docs/standard/ 
  
    --------------------------------------------------------------------------->

    <!--Main Navigation-->
    

    <!--Main layout-->
    <main class="my-5">
      <div class="container">
        <select class="form-select float-right w-25" aria-label="Default select example">
          <option selected>-- SORT BY --</option>
          <option value="Approved">Approved</option>
          <option value="Disapproved">Disapproved</option>
        </select>
        <!--Section: Content-->
        <section class="text-center text-md-left">
          <h4 class="mb-5"><strong>Completed Projects</strong></h4>
          <!-- Post -->
          <div class="card mt-2">
            <div class="card-body">
              <h5 class="card-title">Title 1</h5>
              <h6>
                  Evaluation By: Bill Gates
              </h6>
              <h6 class="text-success font-weight-bold">
                Approved
              </h6>
              <p class="card-text">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
              </p>
              <a href="completed-info.php" class="btn btn-primary float-right">Read</a>
            </div>
          </div>

          <div class="card mt-2">
            <div class="card-body">
              <h5 class="card-title">Title 2</h5>
              <h6>
                  Evaluation By: Bill Gates
              </h6>
              <h6 class="text-danger font-weight-bold">
                Disapproved
              </h6>
              <p class="card-text">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
              </p>
              <a href="completed-info.php" class="btn btn-primary float-right">Read</a>
            </div>
          </div>

        </section>
      </div>
    </main>
    <!--Main layout-->
<?php include '../includes/footer.inc.php' ?>
