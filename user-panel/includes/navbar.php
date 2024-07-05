<!-- include at fourth -->

<div class="site-mobile-menu site-navbar-target">
  <div class="site-mobile-menu-header">
    <div class="site-mobile-menu-close">
      <span class="icofont-close js-menu-toggle"></span>
    </div>
  </div>
  <div class="site-mobile-menu-body"></div>
</div>

<nav class="site-nav">
  <div class="container">
    <div class="menu-bg-wrap">
      <div class="site-navigation">
        <a href="index.php" class="logo m-0 float-start">Property</a>

        <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end">
          <li class="active"><a href="index.php">Home</a></li>
          <li class="has-children">
            <a href="properties.php">Properties</a>
            <ul class="dropdown">
              <li><a href="#">Buy Property</a></li>
              <li><a href="#">Sell Property</a></li>
              <li class="has-children">
                <a href="#">Dropdown</a>
                <ul class="dropdown">
                  <li><a href="#">Sub Menu One</a></li>
                  <li><a href="#">Sub Menu Two</a></li>
                  <li><a href="#">Sub Menu Three</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="services.php">Services</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="contact.php">Contact Us</a></li>
          <!-- <li><i class="fa-solid fa-right-to-bracket text-white bg-outline-white"></i></li> -->
          <li>
            <button type="button" class="myBtn myBtn-primary myBtn-spehov" data-bs-toggle="modal" data-bs-target="#login">
              login <i class="fa-solid fa-right-to-bracket text-white bg-outline-white ml-2"></i>
            </button>
          </li>
        </ul>

        <a href="#" class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none" data-toggle="collapse" data-target="#main-navbar">
          <span></span>
        </a>
      </div>
    </div>
  </div>
</nav>


<!-- the Modal Section starts ... -->

<!-- Modal for the login -->
<div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Login</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="m-3">
          <form>

            <!-- Email input -->
            <div data-mdb-input-init class="form-outline mb-4 ">
              <label class="form-label text-dark" for="form3Example3">Email address</label>
              <input type="email" id="form3Example3" class="form-control form-control-lg border-2 myBorder-primary" placeholder="Enter a valid email address" />
            </div>

            <!-- Password input -->
            <div data-mdb-input-init class="form-outline mb-3">
              <label class="form-label text-dark" for="form3Example4">Password</label>
              <input type="password" id="form3Example4" class="form-control form-control-lg border-2 myBorder-primary" placeholder="Enter password" />
            </div>

            <div class="d-flex justify-content-between align-items-center">
              <a href="#!" class="text-dark">Forgot password?</a>
            </div>

            <button type="button" class="myBtn myBtn-primary">Login</button>

        </div>
      </div>
      <div class="modal-footer">
        <p class="small fw-bold mt-2 pt-1 mb-0">Do not have an account?
          <button type="button" class="myBtn myBtn-primary" data-bs-toggle="modal" data-bs-target="#registration">
            Register
          </button>
          <button type="button" class="myBtn myBtn-dark" data-bs-dismiss="modal">Close</button>
        </p>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- modal for the registration  -->
<div class="modal fade" id="registration" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Registration</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="m-3">
          <form>

            <!-- Name input -->
            <div data-mdb-input-init class="form-outline mb-4">
              <label class="form-label text-dark" for="form3Example1">Your Name</label>
              <input type="text" id="form3Example1" class="form-control form-control-lg border-2 myBorder-primary" placeholder="Enter your name" />
            </div>

            <!-- Email input -->
            <div data-mdb-input-init class="form-outline mb-4 ">
              <label class="form-label text-dark" for="form3Example3">Email address</label>
              <input type="email" id="form3Example3" class="form-control form-control-lg border-2 myBorder-primary" placeholder="Enter a valid email address" />
            </div>

            <!-- Password input -->
            <div data-mdb-input-init class="form-outline mb-3">
              <label class="form-label text-dark" for="form3Example4">Password</label>
              <input type="password" id="form3Example4" class="form-control form-control-lg border-2 myBorder-primary" placeholder="Enter password" />
            </div>

            <div class="d-flex justify-content-between align-items-center">
              <a href="#!" class="text-dark">Forgot password?</a>
            </div>

            <button type="button" class="myBtn myBtn-primary">Register</button>

        </div>
      </div>
      <div class="modal-footer">
        <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account?
          <button type="button" class="myBtn myBtn-primary" data-bs-toggle="modal" data-bs-target="#login">
            Login
          </button>
          <button type="button" class="myBtn myBtn-dark" data-bs-dismiss="modal">Close</button>
        </p>
        </form>
      </div>
    </div>
  </div>
</div>