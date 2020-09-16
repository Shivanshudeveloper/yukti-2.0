<?php include './header.php' ?>
    <!--Main layout-->
    <main class="mt-4 mb-5 container">
        <h2 class="display-4 font-weight-bold">
            Startups Related
        </h2>


        <div class="row mt-4 ml-3">
            <div class="col">
                <h5>Do you have a patent?</h5>
            </div>
        </div>

        <div class="row mt-2 ml-4">
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
            <div class="col col-lg-5 ml-4">
                <h5>Please attach a business plan</h5>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <div class="form-file ml-4">
                    <input type="file" class="form-file-input" id="customFile">
                    <label class="form-file-label" for="customFile">
                        <span class="form-file-text">Choose</span>
                        <span class="form-file-button">Browse</span>
                    </label>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col col-lg-5 ml-4">
                <h5>Please attach a pitch deck</h5>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <div class="form-file ml-4">
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
                <a href='s-form1.php' class="btn btn-lg btn-success w-75">
                    Save as Draft
                </a>
                </center>
            </div>
        </div>

    </main>
    <!--Main layout-->
<?php include './footer.php' ?>