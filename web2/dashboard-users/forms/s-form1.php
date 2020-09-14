<?php include '../includes/header.inc.php' ?>
    <!--Main layout-->
    <main class="mt-4 mb-5 container">
        <h2 class="display-4 font-weight-bold">
            Startups Details
        </h2>

        <div class="row mt-5">
            <div class="col col-lg-3">
                <h5>Name of Startups</h5>
            </div>
            <div class="col">
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
        </div>

        <div class="row mt-4">
            <div class="col col-lg-3">
                <h5>CIN Number of Startup</h5>
            </div>
            <div class="col">
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
        </div>

        <div class="row mt-4">
            <div class="col col-lg-3">
                <h5>Address of Startup</h5>
            </div>
            <div class="col">
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
        </div>

        <div class="row mt-4">
            <div class="col col-lg-3">
                <h5>State</h5>
            </div>
            <div class="col">
            <select onchange="print_city('state', this.selectedIndex);" id="sts" name ="stt" class="form-select" required></select>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col col-lg-3">
                <h5>City</h5>
            </div>
            <div class="col">
            <select id ="state" class="form-select" required></select>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col col-lg-3">
                <h5>Startup Founded by</h5>
            </div>
            <div class="col">
                <select class="form-select" aria-label="Default select example">
                    <option selected>-- SELECT YOUR OPTIONS --</option>
                    <option value="Student">Student</option>
                    <option value="Faculty">Faculty</option>
                    <option value="Faculty and Student">Faculty and Student</option>
                    <option value="Alumni Entrepreneur">Alumni Entrepreneur</option>
                    <option value="Self-Funded">Self-Funded</option>
                    <option value="Other">Other</option>
                </select>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col col-lg-3">
                <h5>Name of Founder</h5>
            </div>
            <div class="col">
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
        </div>

        <div class="row mt-5">
            <div class="col col-lg-3">
                <h5>DIN no of Founder</h5>
            </div>
            <div class="col">
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
        </div>

        <div class="row mt-5">
            <div class="col col-lg-3">
                <h5>Email</h5>
            </div>
            <div class="col">
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
        </div>

        <div class="row mt-5">
            <div class="col col-lg-3">
                <h5>Contact</h5>
            </div>
            <div class="col">
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
        </div>

        <div class="row mt-4 ">
            <div class="col">
                <h5>Whether the startup shares equity with your institute/ institute incubator?</h5>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col col-lg-1">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="rad" id="flexRadioDefault1" checked>
                    <label class="form-check-label" for="flexRadioDefault1">
                        Yes
                    </label>
                </div>
            </div>

            <div class="col-2">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="rad" id="flexRadioDefault2">
                    <label class="form-check-label" for="flexRadioDefault2">
                        No
                    </label>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col">
                <div class="alert alert-info" role="alert">
                    <h5 class="font-weight-bold">
                        Please list contact persons for this technology in your team
                    </h5>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col col-lg-3">
                <h5>Full Name</h5>
            </div>
            <div class="col">
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
        </div>

        <div class="row mt-4">
            <div class="col col-lg-3">
                <h5>Email</h5>
            </div>
            <div class="col">
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="example@gmail.com" aria-describedby="emailHelp">
            </div>
        </div>

        <div class="row mt-4">
            <div class="col col-lg-3">
                <h5>Designation</h5>
            </div>
            <div class="col">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
        </div>

        <div class="row mt-4">
            <div class="col col-lg-3">
                <h5>Phone No.</h5>
            </div>
            <div class="col">
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="+91" aria-describedby="emailHelp">
            </div>
        </div>

        <div class="row mt-4">
            <div class="col">
                <h5>Please attach the IT returns filed over the last 2 years</h5>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <div class="form-file">
                    <input type="file" class="form-file-input" id="customFile">
                    <label class="form-file-label" for="customFile">
                        <span class="form-file-text">Choose</span>
                        <span class="form-file-button">Browse</span>
                    </label>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col">
                <h5>Please attach document on due diligence performed</h5>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <div class="form-file">
                    <input type="file" class="form-file-input" id="customFile">
                    <label class="form-file-label" for="customFile">
                        <span class="form-file-text">Choose</span>
                        <span class="form-file-button">Browse</span>
                    </label>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col">
                <h5>Do you have a patent?</h5>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col col-lg-1">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="rad" id="flexRadioDefault1" checked>
                    <label class="form-check-label" for="flexRadioDefault1">
                        Yes
                    </label>
                </div>
            </div>

            <div class="col-2">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="rad" id="flexRadioDefault2">
                    <label class="form-check-label" for="flexRadioDefault2">
                        No
                    </label>
                </div>
            </div>
        </div>


        <div class="row mt-4">
            <div class="col col-lg-5">
                <h5>Please attach document on financial projection</h5>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <div class="form-file">
                    <input type="file" class="form-file-input" id="customFile">
                    <label class="form-file-label" for="customFile">
                        <span class="form-file-text">Choose</span>
                        <span class="form-file-button">Browse</span>
                    </label>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col col-lg-5">
                <h5>Please attach a business plan</h5>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <div class="form-file">
                    <input type="file" class="form-file-input" id="customFile">
                    <label class="form-file-label" for="customFile">
                        <span class="form-file-text">Choose</span>
                        <span class="form-file-button">Browse</span>
                    </label>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col col-lg-5">
                <h5>Please attach a pitch deck</h5>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <div class="form-file">
                    <input type="file" class="form-file-input" id="customFile">
                    <label class="form-file-label" for="customFile">
                        <span class="form-file-text">Choose</span>
                        <span class="form-file-button">Browse</span>
                    </label>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col">
                <center>
                <a href='#!' class="btn btn-lg btn-success w-75">
                    Save as Draft
                </a>
                </center>
            </div>
        </div>

    </main>
    <!--Main layout-->

    <script src="cities.js"></script>
<script language="javascript">print_state("sts");</script>
<?php include '../includes/footer.inc.php' ?>