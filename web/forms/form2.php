<?php include '../inc/header.php' ?>
<section class="mt-4 container">
    <h2 class="display-4 font-weight-bold">
        A bit about You ?
    </h2>
    
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
            <h5>Institute Name</h5>
        </div>
        <div class="col">
            <?php include '../inc/search_institutes.php' ?>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col col-lg-3">
            <h5>Sector of Incubation</h5>
        </div>
        <div class="col">
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Example: NAAC" aria-describedby="emailHelp">
        </div>
    </div>

    <div class="row mt-4">
        <div class="col">
            <h5>Whether incubator would like to partner for extending support to the technologies/ innovations?</h5>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col col-lg-3">

        </div>
        <div class="col">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                <label class="form-check-label" for="flexRadioDefault1">
                    Yes
                </label>
            </div>
        </div>

        <div class="col-2">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                <label class="form-check-label" for="flexRadioDefault2">
                    No
                </label>
            </div>
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
            <h5>Phone No.</h5>
        </div>
        <div class="col">
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="+91" aria-describedby="emailHelp">
        </div>
    </div>

    <div class="row mt-4">
        <div class="col col-lg-3">
            <h5>Password</h5>
        </div>
        <div class="col">
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
    </div>

    <div class="row mt-5">
        <div class="col col-lg-3">

        </div>
        <div class="col">
            <a href='disclosure/d-form1.php' class="btn btn-block btn-lg btn-success">
                Procced
            </a>
        </div>
    </div>

    
</section>
<?php include '../inc/footer.php' ?>