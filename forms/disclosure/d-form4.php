<?php include '../../inc/header.php' ?>
<link rel="stylesheet" href="../../css/style.css">

<section class="mt-4 container mb-5">
    <h2 class="display-4 font-weight-bold">
        DISCLOSURE FORM
    </h2>

    <div class="row mt-4">
        <div class="col col-lg-5 ml-4">
            <h5>What is the name of your product/technology?</h5>
        </div>
        <div class="col">
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
    </div>

    <div class="row mt-4">
        <div class="col ml-4">
            <h4>Which industries would your innovation find use in?</h4>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col">
            <div class="form-check">
                <textarea class="form-control" name="innovation" id="innovation" rows="50"></textarea>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col col-lg-5 ml-4">
            <h5>Document with detailed description?</h5>
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
            <h5>Photos of product/ technology</h5>
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

    <div class="row mt-2 ml-2">
        <div class="col">
            <div class="alert alert-info" role="alert">
                <h5 class="font-weight-bold">
                Not Applicable in case of TRL 0-2
                </h5>
            </div>
        </div>
    </div>


    <div class="row mt-4">
        <div class="col col-lg-5 ml-4">
            <h5>Please provide the link(s) of the technology/ startup?</h5>
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Webpage/ LinkedIn/ Facebook/ Twitter/ YouTube" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
    </div>

    <div class="row mt-2 ml-2">
        <div class="col">
            <div class="alert alert-info" role="alert">
                <h5 class="font-weight-bold">
                Not Applicable in case of TRL 0-2
                </h5>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col col-lg-5 ml-4">
            <h5>Application Demo Link (If Any)</h5>
        </div>
        <div class="col">
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
    </div>

    <div class="row mt-4">
        <div class="col col-lg-5 ml-4">
            <h5>Application Demo User ID (If Any)</h5>
        </div>
        <div class="col">
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
    </div>

    <div class="row mt-4">
        <div class="col col-lg-5 ml-4">
            <h5>Application Demo User Password (If Any)</h5>
        </div>
        <div class="col">
            <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
    </div>

    


   

    <div class="row mt-5">
        <div class="col">
            <center>
            <a href='d-form5.php' class="btn btn-lg btn-success w-75">
                Next
            </a>
            </center>
        </div>
    </div>

    
</section>
<script>
    CKEDITOR.replace('innovation', {
        height: 300
    });
    CKEDITOR.replace('solutionInnovation', {
        height: 300
    });
</script>
<script src="../../src/js/main.js"></script>
<script src="../../src/js/ckeditor.js"></script>
<?php include '../../inc/footer.php' ?>