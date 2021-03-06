<?php include './includes/header.inc.php' ?>
    <header>
      <style>
        #intro {
          background-image: url('../images/mumbai.jpg');
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

      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block" style="z-index: 2000;">
        <div class="container-fluid">
          <!-- Navbar brand -->
          <a
            class="navbar-brand nav-link"
            target="_blank"
            href="https://mdbootstrap.com/docs/standard/"
          >
            <strong>Yukti 2.O Dashboard</strong>
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarExample01"
            aria-controls="navbarExample01"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarExample01">
            <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
              <li class="nav-item active">
                <!-- <a class="nav-link" aria-current="page" href="#intro">Home</a> -->
              </li>
              <li class="nav-item">
                <!-- <a
                  class="nav-link"
                  href="https://www.youtube.com/channel/UC5CF7mLQZhvx8O5GODZAhdA"
                  rel="nofollow"
                  target="_blank"
                  >Learn Bootstrap 5
                  </a> -->
              </li>
              <li class="nav-item">
                <!-- <a class="nav-link" href="https://mdbootstrap.com/docs/standard/" target="_blank"
                  >Download MDB UI KIT</a
                > -->
              </li>
            </ul>

            <ul class="navbar-nav list-inline">
              <!-- Icons -->
              <li class="">
                <a
                  class="nav-link"
                  href="https://www.youtube.com/channel/UC5CF7mLQZhvx8O5GODZAhdA"
                  rel="nofollow"
                  target="_blank"
                >
                  <i class="fab fa-youtube"></i>
                </a>
              </li>
              <li class="">
                <a
                  class="nav-link"
                  href="https://www.facebook.com/mdbootstrap"
                  rel="nofollow"
                  target="_blank"
                >
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="nav-item">
                <a
                  class="nav-link"
                  href="https://twitter.com/MDBootstrap"
                  rel="nofollow"
                  target="_blank"
                >
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="nav-item">
                <a
                  class="nav-link"
                  href="https://github.com/mdbootstrap/mdb-ui-kit"
                  rel="nofollow"
                  target="_blank"
                >
                  <i class="fab fa-github"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Navbar -->

      <!-- Background image -->
      <div id="intro" class="bg-image shadow-2-strong">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.8);">
          <div class="container d-flex align-items-center h-100">
            <div class="row d-flex justify-content-center">
              <div class="col-xl-5 col-md-8">
                <form class="bg-white rounded shadow-5-strong p-4">
                    <center>
                      <img src="../images/MIC_LOGO.png" alt="MIC" class="w-75 mb-2">
                    </center>
                  <!-- Email input -->
                  <div class="form-outline mb-4">
                    <input type="email" id="form1Example1" class="form-control" />
                    <label class="form-label" for="form1Example1">Email address</label>
                  </div>

                  <!-- Password input -->
                  <div class="form-outline mb-4">
                    <input type="password" id="form1Example2" class="form-control" />
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

                  <!-- Submit button -->
                  <!-- <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button> -->
                  <a href="forms/d-form1.php" class="btn btn-primary btn-lg btn-block">Sign in</a>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Background image -->
    </header>
    <!--Main Navigation-->


<?php include './includes/footer.inc.php' ?>