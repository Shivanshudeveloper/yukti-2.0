<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Yukti 2.0 Registrations</title>
  </head>
  <body>


    <section class="container mt-2 mb-4">
        <center>
            <a href="../index.php">
                <img class="img img-fluid w-25" src="../images/MIC_LOGO.png" alt="MIC" srcset="">
            </a>
        </center>
        <center>
            <div class="card w-50 mt-2 shadow">
                <div class="card-body">
                    <h5 style="color: #ff2400" class="card-title text-center display-4 font-weight-bold">Yukti 2.0</h5>
                    <?php
                        if (isset($_GET['e'])) {
                            if ($_GET['e'] == 'pc') {
                                echo '
                                    <div class="alert alert-danger" >
                                        Please Confirm the Password
                                    </div>
                                ';
                            } elseif ($_GET['e'] == 'ea') {
                                echo '
                                    <div class="alert alert-danger" >
                                        Email Already Registered Please <a href="../login.php">Login</a>
                                    </div>
                                ';
                            } elseif ($_GET['e'] == 'ss') {
                                echo '
                                    <div class="alert alert-success" >
                                        Registered Successfully
                                    </div>
                                ';
                            } 
                        }
                    ?>
                    <form action="../src/php/main.php" method="POST" class="text-left">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Full Name</label>
                            <input type="text" class="form-control" required name="fullname" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <?php
                            if (isset($_GET['t'])) {
                                echo '
                                    <input name="t" type="hidden" value="'.$_GET['t'].'" class="form-control" required id="exampleInputPassword1">
                                ';
                                if ($_GET['t'] == 'i') {
                                    echo '
                                        <input name="type" type="hidden" value="INCUBATOR/ACCELERATOR" class="form-control" required id="exampleInputPassword1">
                                    ';
                                } elseif ($_GET['t'] == 'm') {
                                    echo '
                                        <input name="type" type="hidden" value="MENTORS" class="form-control" required id="exampleInputPassword1">
                                    ';
                                }
                            }
                        ?>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Email</label>
                            <input type="email" name="email" required class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Sector of Incubation</label>
                            <input type="text" name="sector" required class="form-control" id="exampleInputPassword1">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Whether incubator would like to partner for extending support to the technologies/ innovations?</label>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-check">
                                        <input value="YES" class="form-check-input" type="radio" name="rad" id="flexRadioDefault1" checked>
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Yes
                                        </label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-check">
                                        <input value="NO" class="form-check-input" type="radio" name="rad" id="flexRadioDefault2" >
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            No
                                        </label>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Phone No</label>
                            <input type="number" name="phone" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Institute Name</label>
                            <?php include '../includes/search_institutes_copy.php' ?>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="password" required class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                            <input type="password" name="confirmpassword" required class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <a href="" style="text-decoration: none;" class="form-check-label" for="exampleCheck1">I accept Terms & Conditions</a>
                        </div>
                        <button type="submit" name="userForm2SubmitBtn" class="btn btn-primary btn-lg btn-block">Register</button>
                    </form>
                </div>
            </div>
        </center>
    </section>
    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>
</html>