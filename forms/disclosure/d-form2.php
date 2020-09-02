<?php include '../../inc/header.php' ?>
<link rel="stylesheet" href="../../css/style.css">

<section class="mt-4 container mb-5">
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
                <textarea class="form-control" name="problemInnovation" id="problemInnovation" rows="50"></textarea>
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
                <textarea class="form-control" name="solutionInnovation" id="solutionInnovation" rows="50"></textarea>
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

    
</section>
<script>
    CKEDITOR.replace('problemInnovation', {
        height: 300
    });
    CKEDITOR.replace('solutionInnovation', {
        height: 300
    });
</script>
<script src="../../src/js/main.js"></script>
<script src="../../src/js/ckeditor.js"></script>
<?php include '../../inc/footer.php' ?>