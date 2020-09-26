<?php include './header.php' ?>
    <!--Main layout-->
    <form action="../../src/php/main.php" method="POST">
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
                    <textarea class="form-control" required name="problemInnovation" id="problemInnovation" rows="10"></textarea>
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
                    <textarea class="form-control" required name="solutionInnovation" id="solutionInnovation" rows="10"></textarea>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col">
                <center>
                <button type="submit" name="d2SubmitBtn" class="btn btn-lg btn-success w-75">
                    Next
                </button>
                </center>
            </div>
        </div>
    </main>
    </form>
    <!--Main layout-->
<?php include './footer.php' ?>