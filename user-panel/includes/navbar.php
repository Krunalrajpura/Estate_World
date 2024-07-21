<!-- include at fourth -->

<?php
$current_file = basename($_SERVER['PHP_SELF']);
?>

<!-- php code for the inserting data in the database  -->

<?php

if (isset($_POST["go"])) {


  $name = $_POST["name"];
  $email = $_POST["email"];
  $number = $_POST["number"];
  $pass = $_POST["password"];
  $cpass = $_POST["cpassword"];

  $hashedPass = password_hash($pass, PASSWORD_DEFAULT);

  // Define table and column names
  $tableName = 'login';
  $emailColumn = 'c_email';

  // Check if the email already exists
  if (checkIfDataExists($conn, $tableName, $emailColumn, $email)) {
    // Email already exists
    $warningMessage = "Email already registered!";
    echo "<script>showWarningAlert('$warningMessage');</script>";
  } else {

    if ($cpass === $pass) {
      // $tableName = 'login';
      $data = [
        'c_name' => $name,
        'c_email' => $email,
        'c_number' => $number,
        'c_pass' => $hashedPass
      ];
      $types = 'ssss';
      $successMessage = "Registered Successfully !!!";

      insertData($conn, $tableName, $data, $types, $successMessage);
    } else {
      $warningMessage = "Password Doesn\'t Match !!!";
      echo "<script>showWarningAlert('$warningMessage');</script>";
    }
  }
}

?>

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
          <li class="<?php echo ($current_file == 'index.php') ? 'active' : ''; ?>"><a href="index.php">Home</a></li>
          <li class="has-children <?php echo ($current_file == 'properties.php') ? 'active' : ''; ?>">
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
          <li class="<?php echo ($current_file == 'services.php') ? 'active' : ''; ?>"><a href="services.php">Services</a></li>
          <li class="<?php echo ($current_file == 'about.php') ? 'active' : ''; ?>"><a href="about.php">About</a></li>
          <li class="<?php echo ($current_file == 'contact.php') ? 'active' : ''; ?>"><a href="contact.php">Contact Us</a></li>
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
              <label class="form-label text-dark" for="form5Example5">Email address</label>
              <input type="email" id="form3Example3" class="form-control form-control-lg border-2 myBorder-primary" placeholder="Enter a valid email address" required />
            </div>

            <!-- Password input -->
            <div data-mdb-input-init class="form-outline mb-3">
              <label class="form-label text-dark" for="form4Example4">Password</label>
              <input type="password" id="form6Example6" class="form-control form-control-lg border-2 myBorder-primary" placeholder="Enter password" required />
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
          <form method="POST" action="<?php $_PHP_SELF ?>">

            <!-- Name input -->
            <div data-mdb-input-init class="form-outline mb-4">
              <label class="form-label text-dark" for="form3Example1">Your Name</label>
              <input type="text" id="form3Example1" class="form-control form-control-lg border-2 myBorder-primary" placeholder="Enter your name" name="name" required />
            </div>

            <!-- Email input -->
            <div data-mdb-input-init class="form-outline mb-4 ">
              <label class="form-label text-dark" for="form5Example5">Email address</label>
              <input type="email" id="form7Example7" class="form-control form-control-lg border-2 myBorder-primary" placeholder="Enter a valid email address" name="email" required />
            </div>

            <!-- phone number -->
            <div data-mdb-input-init class="form-outline mb-4">
              <label class="form-label text-dark" for="formPhoneNumber">Phone number</label>
              <input type="tel" id="formPhoneNumber" class="form-control form-control-lg border-2 myBorder-primary" placeholder="Enter a valid phone number" name="number" required />
            </div>

            <!-- Password input -->
            <div data-mdb-input-init class="form-outline mb-3">
              <label class="form-label text-dark" for="form6Example6">Password</label>
              <input type="password" id="form8Example8" class="form-control form-control-lg border-2 myBorder-primary" placeholder="Enter password" name="password" required />
            </div>

            <!-- confirm-password input -->
            <div data-mdb-input-init class="form-outline mb-3">
              <label class="form-label text-dark" for="formConfirmPassword">Confirm Password</label>
              <input type="password" id="formConfirmPassword" class="form-control form-control-lg border-2 myBorder-primary" placeholder="Confirm password" name="cpassword" required />
            </div>

            <button type="submit" name="go" class="myBtn myBtn-primary">Register</button>

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