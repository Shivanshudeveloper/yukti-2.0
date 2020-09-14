<?php include '../includes/header.inc.php' ?>
    <!--Main layout-->
    <main class="mt-4 mb-5 container">
        <h2 class="display-4 font-weight-bold">
            DISCLOSURE FORM
        </h2>

        <div class="row mt-4">
            <div class="col col-lg-3">
                <h5>Name of Inventor</h5>
            </div>
            <div class="col">
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
        </div>

        <div class="row mt-4">
            <div class="col col-lg-3">
                <h5>Gender</h5>
            </div>
            <div class="col">
                <select class="form-select" aria-label="Default select example">
                    <option selected>-- SELECT YOUR OPTIONS --</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col col-lg-3">
                <h5>Category</h5>
            </div>
            <div class="col">
                <select class="form-select" aria-label="Default select example">
                    <option selected>-- SELECT YOUR OPTIONS --</option>
                    <option value="General">General</option>
                    <option value="SC">SC</option>
                    <option value="ST">ST</option>
                    <option value="Others">Others</option>
                </select>
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
                <h5>Institute Name</h5>
            </div>
            <div class="col">
                <?php include '../includes/search_institutes.php' ?>
            </div>
        </div>

        <div class="row mt-4">
        <div class="col col-lg-3">
            <h5>AISHE Code</h5>
        </div>
        <div class="col">
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="+91" aria-describedby="emailHelp">
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

    <div class="row mt-4">
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
            <h5>Phone No.</h5>
        </div>
        <div class="col">
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="+91" aria-describedby="emailHelp">
        </div>
    </div>

    <div class="row mt-5">
        <div class="col col-lg-3">

        </div>
        <div class="col">
            <a href='d-form4.php' class="btn btn-block btn-lg btn-success">
                Next
            </a>
        </div>
    </div>

    </main>
    <!--Main layout-->
<?php include '../includes/footer.inc.php' ?>