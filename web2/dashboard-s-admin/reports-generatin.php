<?php include './includes/header.inc.php' ?>
    <main class="my-5">
      <div class="container">
        <button class="btn btn-success float-right">
            Download PDF
        </button>
        <br />
        <br />
        <h5 class="font-weight-bold text-dark">
            Reports Generation
        </h5>
        <section class="text-center text-md-left mt-4">
            <!-- Tabs navs -->
            <ul class="nav nav-tabs nav-fill mb-3" id="ex1" role="tablist">
                <li class="nav-item" role="presentation">
                    <a
                    class="nav-link active"
                    id="ex2-tab-1"
                    data-toggle="tab"
                    href="#ex2-tabs-1"
                    role="tab"
                    aria-controls="ex2-tabs-1"
                    aria-selected="true"
                    >Category Wise Reports</a
                    >
                </li>
                <li class="nav-item" role="presentation">
                    <a
                    class="nav-link"
                    id="ex2-tab-2"
                    data-toggle="tab"
                    href="#ex2-tabs-2"
                    role="tab"
                    aria-controls="ex2-tabs-2"
                    aria-selected="false"
                    >Custom Reports</a
                    >
                </li>
                <li class="nav-item" role="presentation">
                    <a
                    class="nav-link"
                    id="ex2-tab-3"
                    data-toggle="tab"
                    href="#ex2-tabs-3"
                    role="tab"
                    aria-controls="ex2-tabs-3"
                    aria-selected="false"
                    >All Reports</a
                    >
                </li>
                </ul>
                <!-- Tabs navs -->

                <!-- Tabs content -->
                <div class="tab-content" id="ex2-content">
                <div
                    class="tab-pane fade show active"
                    id="ex2-tabs-1"
                    role="tabpanel"
                    aria-labelledby="ex2-tab-1"
                >
                    <section>
                        <select class="form-select float-left w-25" aria-label="Default select example">
                            <option selected>-- SELECT YOUR Category --</option>
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
                                            <a href="general-info.php">
                                                Test Project 1
                                            </a>
                                        </td>
                                        <td>Agriculture</td>
                                        <td>Shivanshu Gupta</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>
                                            <a href="general-info.php">
                                                Test Project 2
                                            </a>
                                        </td>
                                        <td>Sports</td>
                                        <td>Shivanshu Gupta</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>
                                            <a href="general-info.php">
                                                Test Project 3
                                            </a>
                                        </td>
                                        <td>Sports</td>
                                        <td>Shivanshu Gupta</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>
                                            <a href="general-info.php">
                                                Test Project 4
                                            </a>
                                        </td>
                                        <td>Sports</td>
                                        <td>Shivanshu Gupta</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>
                                            <a href="general-info.php">
                                                Test Project 5
                                            </a>
                                        </td>
                                        <td>Sports</td>
                                        <td>Shivanshu Gupta</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td>
                                            <a href="general-info.php">
                                                Test Project 6
                                            </a>
                                        </td>
                                        <td>Sports</td>
                                        <td>Shivanshu Gupta</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td>
                                            <a href="general-info.php">
                                                Test Project 7
                                            </a>
                                        </td>
                                        <td>Sports</td>
                                        <td>Shivanshu Gupta</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td>
                                            <a href="general-info.php">
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
                <div
                    class="tab-pane fade"
                    id="ex2-tabs-2"
                    role="tabpanel"
                    aria-labelledby="ex2-tab-2"
                >
                    <section>
                        <div class="row">
                                <div class="col">
                                    <select class="form-select float-left" aria-label="Default select example">
                                        <option selected>-- SELECT YOUR TR --</option>
                                        <option value="TR 0">TR 0</option>
                                        <option value="TR 1">TR 1</option>
                                        <option value="TR 2">TR 2</option>
                                        <option value="TR 3">TR 3</option>
                                        <option value="TR 4">TR 4</option>
                                        <option value="TR 5">TR 5</option>
                                        <option value="TR 6">TR 6</option>
                                        <option value="TR 7">TR 7</option>
                                        <option value="TR 8">TR 8</option>
                                        <option value="TR 9">TR 9</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <select class="form-select float-left" aria-label="Default select example">
                                        <option selected>-- SELECT BUSINESS TYPE --</option>
                                        <option value="B2C">B2C</option>
                                        <option value="B2B">B2B</option>
                                        <option value="B2G">B2G</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <select class="form-select float-left" aria-label="Default select example">
                                        <option selected>-- SELECT REGISTRAION TYPE --</option>
                                        <option value="Student">Student</option>
                                        <option value="Faculty">Faculty</option>
                                        <option value="Incubaors">Incubaors</option>
                                        <option value="Mentors">Mentors</option>
                                        <option value="Institutions">Institutions</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <select class="form-select float-left" aria-label="Default select example">
                                        <option selected>-- SELECT OTHERS --</option>
                                        <option value="Have Patent">Have Patent</option>
                                        <option value="Not Patent">Not Patent</option>
                                        <option value="Awards Won">Awards Won</option>
                                        <option value="No Awards Won">No Awards Won</option>
                                        <option value="3rd Party Validated">3rd Party Validated</option>
                                        <option value="No 3rd Party Validated">No 3rd Party Validated</option>
                                        <option value="Funded">Funded</option>
                                        <option value="Not Funded">Not Funded</option>
                                    </select>
                                </div>
                            </div>

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
                                            <a href="general-info.php">
                                                Test Project 1
                                            </a>
                                        </td>
                                        <td>Agriculture</td>
                                        <td>Shivanshu Gupta</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>
                                            <a href="general-info.php">
                                                Test Project 2
                                            </a>
                                        </td>
                                        <td>Sports</td>
                                        <td>Shivanshu Gupta</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>
                                            <a href="general-info.php">
                                                Test Project 3
                                            </a>
                                        </td>
                                        <td>Sports</td>
                                        <td>Shivanshu Gupta</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>
                                            <a href="general-info.php">
                                                Test Project 4
                                            </a>
                                        </td>
                                        <td>Sports</td>
                                        <td>Shivanshu Gupta</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>
                                            <a href="general-info.php">
                                                Test Project 5
                                            </a>
                                        </td>
                                        <td>Sports</td>
                                        <td>Shivanshu Gupta</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td>
                                            <a href="general-info.php">
                                                Test Project 6
                                            </a>
                                        </td>
                                        <td>Sports</td>
                                        <td>Shivanshu Gupta</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td>
                                            <a href="general-info.php">
                                                Test Project 7
                                            </a>
                                        </td>
                                        <td>Sports</td>
                                        <td>Shivanshu Gupta</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td>
                                            <a href="general-info.php">
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
                <div
                    class="tab-pane fade"
                    id="ex2-tabs-3"
                    role="tabpanel"
                    aria-labelledby="ex2-tab-3"
                >
                    <section>
                        <center>
                            <a href="#!" class="btn btn-success btn-lg w-25" >
                                Download PDF
                            </a>
                        </center>
                    </section>
                </div>
            </div>
            <!-- Tabs content -->
        </section>     
        <br />
        <br />
      </div>
    </main>
    <!--Main layout-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<?php include '../includes/footer.inc.php' ?>
