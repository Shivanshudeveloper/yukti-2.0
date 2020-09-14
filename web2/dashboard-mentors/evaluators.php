<?php include './includes/header.inc.php' ?>
    <main class="my-5">
      <div class="container">
        <button class="btn btn-success float-right">
            Download PDF
        </button>
        <select class="form-select float-left w-50" aria-label="Default select example">
                    <option selected>-- SORT BY --</option>
                    <option value="Under Evaluation">Under Evaluation</option>
                    <option value="Completed">Completed</option>
                    <option value="Not Active">Not Active</option>
        </select>
        <br />
        <br />
        <section class="text-center text-md-left mt-4">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Evaluators Name</th>
                    <th scope="col">Project Assign</th>
                    <th scope="col">Status</th>
                    <th scope="col">Recent Activity</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>
                            <a href="info.php">
                                Akhil Joshi
                            </a>
                        </td>
                        <td>Technology Project 1</td>
                        <td>Under Evaluation</td>
                        <td>9/9/20</td>
                    </tr>

                    <tr>
                        <th scope="row">2</th>
                        <td>
                            <a href="info.php">
                                Rohhan Roy
                            </a>
                        </td>
                        <td>Technology Project 2</td>
                        <td>Under Evaluation</td>
                        <td>9/9/20</td>
                    </tr>

                    <tr>
                        <th scope="row">3</th>
                        <td>
                            <a href="info.php">
                                Kriti Singh
                            </a>
                        </td>
                        <td>Technology Project 3</td>
                        <td>Completed</td>
                        <td>1/9/20</td>
                    </tr>

                    <tr>
                        <th scope="row">4</th>
                        <td>
                            <a href="info.php">
                                Manan Goel
                            </a>
                        </td>
                        <td>Technology Project 4</td>
                        <td>Completed</td>
                        <td>3/9/20</td>
                    </tr>
                    
                </tbody>
            </table>
        </section>
      </div>
    </main>
    <!--Main layout-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<?php include '../includes/footer.inc.php' ?>
