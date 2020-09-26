<?php include './header.php' ?>
    <!--Main layout-->
    <form action="../../src/php/main.php" method="POST">
    <main class="mt-4 mb-5 container">
        <h2 class="display-4 font-weight-bold">
            DISCLOSURE FORM
        </h2>

        <div class="row mt-4">
            <div class="col col-lg-3">
                <h5>Name of Inventor</h5>
            </div>
            <div class="col">
                <input type="text" required class="form-control" id="nameInventor" name="nameInventor" aria-describedby="emailHelp">
            </div>
        </div>

        <div class="row mt-4">
            <div class="col col-lg-3">
                <h5>Gender</h5>
            </div>
            <div class="col">
                <select class="form-select" required id="gender" name="gender" aria-label="Default select example">
                    <option value="" selected>-- SELECT YOUR OPTIONS --</option>
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
                <select class="form-select" required id="category" name="category" aria-label="Default select example">
                    <option value="" selected>-- SELECT YOUR OPTIONS --</option>
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
                <input type="email" required id="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="example@gmail.com" aria-describedby="emailHelp">
            </div>
        </div>

        <div class="row mt-4">
            <div class="col col-lg-3">
                <h5>Phone No.</h5>
            </div>
            <div class="col">
                <input type="number" required id="phoneno" name="phoneno" class="form-control" id="exampleInputEmail1" placeholder="+91" aria-describedby="emailHelp">
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

        <!-- <div class="row mt-4">
            <div class="col col-lg-3">
                <h5>AISHE Code</h5>
            </div>
            <div class="col">
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="+91" aria-describedby="emailHelp">
            </div>
        </div> -->


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
            <input type="text" required id="contact_full_name" name="contact_full_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
    </div>

    <div class="row mt-4">
        <div class="col col-lg-3">
            <h5>Email</h5>
        </div>
        <div class="col">
            <input type="email" required id="contact_email" name="contact_email" class="form-control" id="exampleInputEmail1" placeholder="example@gmail.com" aria-describedby="emailHelp">
        </div>
    </div>

    <div class="row mt-4">
        <div class="col col-lg-3">
            <h5>Phone No.</h5>
        </div>
        <div class="col">
            <input type="number" required id="contact_phoneno" name="contact_phoneno" class="form-control" id="exampleInputEmail1" placeholder="+91" aria-describedby="emailHelp">
        </div>
    </div>

    <div class="row mt-5">
        <div class="col col-lg-3">

        </div>
        <div class="col">
            <button type="submit" name="d3SubmitBtn" class="btn btn-block btn-lg btn-success">
                Next
            </button>
        </div>
    </div>

    </main>
    </form>
    <!--Main layout-->
<?php include './footer.php' ?>