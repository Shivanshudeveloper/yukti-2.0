<?php include './dashboard-users/includes/header.inc.php' ?>
    <header>
      <style>
        #intro {
          background-image: url('./images/mumbai.jpg');
          height: 100vh;
        }

        /* Height for devices larger than 576px */
        @media (min-width: 992px) {
          #intro {
            margin-top: -58.59px;
          }
        }

        .navbar .nav-link {
          color: #fff !important;
        }
      </style>


      <!-- Background image -->
      <div id="intro" class="bg-image shadow-2-strong">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.8);">
          <div class="container d-flex align-items-center h-100">
            <div class="row d-flex justify-content-center">
              <div class="col-xl-5 col-md-8">
                    <?php
                        if (isset($_GET['e'])) {
                            if ($_GET['e'] == 'nu') {
                                echo '
                                    <div class="alert alert-danger" >
                                        No User Found!
                                    </div>
                                ';
                            } elseif ($_GET['e'] == 'wp') {
                                echo '
                                    <div class="alert alert-danger" >
                                        Wrong Password
                                    </div>
                                ';
                            }
                        }
                    ?>
                <form method="POST" action="./src/php/main.php" class="bg-white rounded shadow-5-strong p-4">
                    <center>
                      <img src="./images/MIC_LOGO.png" alt="MIC" class="w-75 mb-2">
                    </center>
                  <!-- Email input -->
                  <form action="../src/php/main.php" method="POST" class="text-left">
                  <div class="form-outline mb-4">
                    <input type="email" name="email" required id="form1Example1" class="form-control" />
                    <label class="form-label" for="form1Example1">Email address</label>
                  </div>

                  <!-- Password input -->
                  <div class="form-outline mb-4">
                    <input type="password" name="password" required id="form1Example2" class="form-control" />
                    <label class="form-label" for="form1Example2">Password</label>
                  </div>

                  <!-- 2 column grid layout for inline styling -->
                  <div class="row mb-4">
                    <div class="col d-flex justify-content-center">
                      <!-- Checkbox -->
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="checkbox"
                          value=""
                          id="form1Example3"
                          checked
                        />
                        <label class="form-check-label" for="form1Example3">
                          Remember me
                        </label>
                      </div>
                    </div>

                    <div class="col text-center">
                      <!-- Simple link -->
                      <a href="#!">Forgot password?</a>
                    </div>
                  </div>
                  <button type="submit" name="submitLoginBtn" class="btn btn-primary btn-lg btn-block">Sign in</button>
                  </form>


                  <!-- Submit button -->
                  <!-- <a href="forms/d-form1.php" class="btn btn-primary btn-lg btn-block">Sign in</a> -->
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Background image -->
    </header>
    <!--Main Navigation-->


<?php include './dashboard-users/includes/footer.inc.php' ?>