<?php include './includes/header.inc.php' ?>
    <main class="my-5">
      <div class="container">
        <select class="form-select float-left w-50" aria-label="Default select example">
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
        <!--Section: Content-->
        <button data-toggle="modal" data-target="#exampleModal" class="btn btn-success float-right">
            Assign Evaluator
        </button>
        
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

        <br />
        <br />
        <section class="text-center text-md-left mt-4">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Project Name</th>
                    <th scope="col">Category</th>
                    <th scope="col">Candidate Name</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>
                            <a href="info.php">
                                Test Project 1
                            </a>
                        </td>
                        <td>Agriculture</td>
                        <td>Shivanshu Gupta</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>
                            <a href="info.php">
                                Test Project 2
                            </a>
                        </td>
                        <td>Sports</td>
                        <td>Shivanshu Gupta</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>
                            <a href="info.php">
                                Test Project 3
                            </a>
                        </td>
                        <td>Sports</td>
                        <td>Shivanshu Gupta</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>
                            <a href="info.php">
                                Test Project 4
                            </a>
                        </td>
                        <td>Sports</td>
                        <td>Shivanshu Gupta</td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>
                            <a href="info.php">
                                Test Project 5
                            </a>
                        </td>
                        <td>Sports</td>
                        <td>Shivanshu Gupta</td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>
                            <a href="info.php">
                                Test Project 6
                            </a>
                        </td>
                        <td>Sports</td>
                        <td>Shivanshu Gupta</td>
                    </tr>
                    <tr>
                        <th scope="row">7</th>
                        <td>
                            <a href="info.php">
                                Test Project 7
                            </a>
                        </td>
                        <td>Sports</td>
                        <td>Shivanshu Gupta</td>
                    </tr>
                    <tr>
                        <th scope="row">7</th>
                        <td>
                            <a href="info.php">
                                Test Project 8
                            </a>
                        </td>
                        <td>Sports</td>
                        <td>Shivanshu Gupta</td>
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
