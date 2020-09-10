<?php include './includes/header.inc.php' ?>
    <main class="my-5">
      <div class="container">
        <button class="btn btn-success float-right">
            Download PDF
        </button>
        <a href="reports-generatin.php" class="btn btn-danger float-right mr-2">
            Reports Generation
        </a>
        <br />
        <br />
        <div class="row">
            <h5>
                National Snapshots
            </h5>
            <div class="col">
                <div class="card shadow pt-4 pb-4">
                    <div class="card-body text-center">
                        <h5 class="card-title">Successfully Evaluated</h5>
                        <p class="card-text h6">
                        837
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow pt-4 pb-4">
                    <div class="card-body text-center">
                        <h5 class="card-title">Total Innovations</h5>
                        <p class="card-text h6">
                        1374
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow pt-4 pb-4">
                    <div class="card-body text-center">
                        <h5 class="card-title">Under Evaluation</h5>
                        <p class="card-text h6">
                        700
                        </p>
                    </div>
                </div>
            </div>
        </div>   
        <br />
        <br />
        <h5 class="font-weight-bold text-dark">
            State Wise Data
        </h5>
        <section class="text-center text-md-left mt-4">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">State Name</th>
                    <th scope="col">Toal Innovations</th>
                    <th scope="col">Successfully Evaluated</th>
                    <th scope="col">Ongoing</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>
                            <a href="city-data.php">
                                Delhi
                            </a>
                        </td>
                        <td>224</td>
                        <td>4</td>
                        <td>220</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>
                            <a href="city-data.php">
                                Mumbai
                            </a>
                        </td>
                        <td>10</td>
                        <td>1</td>
                        <td>9</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>
                            <a href="city-data.php">
                                Uttrakhand
                            </a>
                        </td>
                        <td>100</td>
                        <td>20</td>
                        <td>80</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>
                            <a href="city-data.php">
                                Uttarpradesh
                            </a>
                        </td>
                        <td>82</td>
                        <td>10</td>
                        <td>72</td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>
                            <a href="city-data.php">
                                Goa
                            </a>
                        </td>
                        <td>10</td>
                        <td>8</td>
                        <td>2</td>
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
