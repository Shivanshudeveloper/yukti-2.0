<?php include '../includes/header.inc.php' ?>
    <!--Main layout-->
    <main class="mt-4 mb-5 container">
        <h2 class="display-4 font-weight-bold">
            DISCLOSURE FORM
        </h2>
        <div class="row mt-4">
        <div class="col ml-4">
            <h4>What basic problem does your innovation address?</h4>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col">
                <div class="form-check">
                    <textarea class="form-control" name="problemInnovation" id="problemInnovation" rows="10"></textarea>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col ml-4">
                <h4>Explain Your Solution/Innovation</h4>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col">
                <div class="form-check">
                    <textarea class="form-control" name="solutionInnovation" id="solutionInnovation" rows="10"></textarea>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col">
                <center>
                <a href='d-form3.php' class="btn btn-lg btn-success w-75">
                    Next
                </a>
                </center>
            </div>
        </div>
    </main>
    <!--Main layout-->
<?php include '../includes/footer.inc.php' ?>