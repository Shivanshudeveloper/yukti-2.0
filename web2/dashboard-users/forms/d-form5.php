<?php include './header.php' ?>
    <!--Main layout-->
    <form action="../../src/php/main.php" method="POST">
    <main class="mt-4 mb-5 container">
        <h2 class="display-4 font-weight-bold">
            DISCLOSURE FORM
        </h2>

        <div class="row mt-4">
            <div class="col">
                <h5>Has your technology been validated by a 3rd party?</h5>
            </div>
        </div>

        <div class="row mt-2">
            
            <div class="col col-lg-1">
                <div class="form-check">
                    <input class="form-check-input" value="Yes" type="radio" name="rad" id="flexRadioDefault1" checked>
                    <label class="form-check-label" for="flexRadioDefault1">
                        Yes
                    </label>
                </div>
            </div>

            <div class="col-2">
                <div class="form-check">
                    <input class="form-check-input" value="No" type="radio" name="rad" id="flexRadioDefault2">
                    <label class="form-check-label" for="flexRadioDefault2">
                        No
                    </label>
                </div>
            </div>
        </div>


        <div class="row mt-4">
            <div class="col">
                <h5>Has the innovation been featured or described or presented in any publications/conferences/ exhibits?</h5>
            </div>
        </div>

        <div class="row mt-2">
            
            <div class="col col-lg-1">
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="Yes" name="rad2" id="flexRadioDefault3" checked>
                    <label class="form-check-label" for="flexRadioDefault3">
                        Yes
                    </label>
                </div>
            </div>

            <div class="col-2">
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="No" name="rad2" id="flexRadioDefault4">
                    <label class="form-check-label" for="flexRadioDefault4">
                        No
                    </label>
                </div>
            </div>
        </div>


        <div class="row mt-4">
            <div class="col">
                <h5>Has the innovation/ technology been presented in any competition?</h5>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col col-lg-1">
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="Yes" name="rad3" id="flexRadioDefault5" checked>
                    <label class="form-check-label" for="flexRadioDefault5">
                        Yes
                    </label>
                </div>
            </div>

            <div class="col-2">
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="No" name="rad3" id="flexRadioDefault6">
                    <label class="form-check-label" for="flexRadioDefault6">
                        No
                    </label>
                </div>
            </div>
        </div>


        <div class="row mt-4">
            <div class="col">
                <h5>Has the Innovation/ technology earlier received any grant/ funds from government/ non-government organizations?</h5>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col col-lg-1">
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="Yes" name="rad4" id="flexRadioDefault7" checked>
                    <label class="form-check-label" for="flexRadioDefault7">
                        Yes
                    </label>
                </div>
            </div>

            <div class="col-2">
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="No" name="rad4" id="flexRadioDefault8">
                    <label class="form-check-label" for="flexRadioDefault8">
                        No
                    </label>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col">
                <h5>Any Awards Won?</h5>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col col-lg-1">
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="Yes" name="awards" id="flexRadioDefault7" checked>
                    <label class="form-check-label" for="flexRadioDefault7awards">
                        Yes
                    </label>
                </div>
            </div>

            <div class="col-2">
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="No" name="awards" id="flexRadioDefault8">
                    <label class="form-check-label" for="flexRadioDefault8awards">
                        No
                    </label>
                </div>
            </div>
        </div>


        <div class="row mt-4">
            <div class="col">
                <h5>What is the business status of the organization developing this innovation?</h5>
            </div>
        </div>

        <div class="row mt-2">
            
            <div class="col">
                <select class="form-select" required name="businessStatus" id="businessStatus" aria-label="Default select example">
                    <option value="" selected>-- SELECT YOUR OPTIONS --</option>
                    <option value="Incorporated Company">Incorporated Company</option>
                    <option value="Academic Institution">Academic Institution</option>
                    <option value="Govt. Laboratory">Govt. Laboratory</option>
                    <option value="Private Laboratory">Private Laboratory</option>
                    <option value="Individual">Individual</option>
                    <option value="Others">Others</option>
                </select>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col">
                <h5>Who are the primary customers that would purchase it?</h5>
            </div>
        </div>

        <div class="row mt-2">
            
            <div class="col">
                <select class="form-select" required name="primaryCustomers" id="primaryCustomers" aria-label="Default select example">
                    <option value="" selected>-- SELECT YOUR OPTIONS --</option>
                    <option value="B2B">B2B</option>
                    <option value="B2C">B2C</option>
                    <option value="B2G">B2G</option>
                </select>
            </div>
        </div>


        <div class="row mt-4">
            <div class="col">
                <h5>What method of commercialization do you suggest?</h5>
            </div>
        </div>

        <div class="row mt-2">
            
            <div class="col">
                <select class="form-select" required name="commercialization" id="commercialization" aria-label="Default select example">
                    <option value="" selected>-- SELECT YOUR OPTIONS --</option>
                    <option value="Manufacturing & Distribution">Manufacturing & Distribution</option>
                    <option value="Licensing">Licensing</option>
                    <option value="Sale of Product/Service">Sale of Product/Service</option>
                    <option value="Establish a new company">Establish a new company</option>
                    <option value="Others">Others</option>
                </select>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col">
                <h5>Have any prospective users or buyers shown interest in this innovation?</h5>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col col-lg-1">
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="Yes" name="rad5" id="flexRadioDefault9" checked>
                    <label class="form-check-label" for="flexRadioDefault9">
                        Yes
                    </label>
                </div>
            </div>

            <div class="col-2">
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="No" name="rad5" id="flexRadioDefault10">
                    <label class="form-check-label" for="flexRadioDefault10">
                        No
                    </label>
                </div>
            </div>
        </div>
        <hr />
        <div class="row mt-4">
            <div class="col ml-4">
                <h4>Describe the competition in your product segment?</h4>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col">
                <div class="form-check">
                    <textarea class="form-control" required name="describeSegement" id="describeSegement" rows="10"></textarea>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col ml-4">
                <h4>Please provide key differentiators and Unique selling proposition that give you an edge over your competitors?</h4>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col">
                <div class="form-check">
                    <textarea class="form-control" required name="uniqueSelling" id="uniqueSelling" rows="10"></textarea>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col">
                <center>
                <button type="submit" name="d5SubmitBtn" class="btn btn-lg btn-success w-75">
                    Submit
                </button>
                </center>
            </div>
        </div>
    </main>
    </form>
    <!--Main layout-->
<?php include './footer.php' ?>