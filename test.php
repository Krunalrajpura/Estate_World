<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modal and SweetAlert Example</title>
  <!-- Include Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Include SweetAlert2 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
  <!-- SweetAlert2 JS -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

  <!-- Button to open the modal -->
  <button type="button" class="btn btn-primary mt-5" data-toggle="modal" data-target="#exampleModal">
    Open Modal
  </button>

  <!-- Modal HTML -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Example Modal</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>This is a modal body.</p>
          <button id="showAlert" class="btn btn-warning">Show SweetAlert</button>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close Modal</button>
        </div>
      </div>
    </div>
  </div>

  <!-- PHP Script to determine success or error -->
  <?php
    // Example PHP logic
    $loginSuccess = true; // Change this to false to test error condition
    $successMessage = "Login Successful! Welcome back!";
    $errorMessage = "Login Failed. Please try again.";

    // Output the appropriate JavaScript based on the result
    if ($loginSuccess) {
      echo "<script>$(document).ready(function() { showSuccessAlert('$successMessage'); });</script>";
    } else {
      echo "<script>$(document).ready(function() { showErrorAlert('$errorMessage'); });</script>";
    }
  ?>

  <!-- Custom script -->
  <script>
    $(document).ready(function() {
      console.log('Document is ready.');

      let isSwalOpen = false;

      // Function to show SweetAlert
      function showSweetAlert(options) {
        console.log('Showing SweetAlert with options:', options);
        isSwalOpen = true;
        Swal.fire(options).then((result) => {
          console.log('SweetAlert result:', result);
          isSwalOpen = false;
        });
      }

      // Define success alert function
      function showSuccessAlert(message) {
        showSweetAlert({
          title: "Success!",
          text: message,
          icon: "success",
          confirmButtonText: "OK"
        });
      }

      // Define error alert function
      function showErrorAlert(message) {
        showSweetAlert({
          title: "Error!",
          text: message,
          icon: "error",
          confirmButtonText: "OK"
        });
      }

      // Prevent modals from closing when SweetAlert is active
      $(document).on('hide.bs.modal', function (e) {
        if (isSwalOpen) {
          console.log('Preventing modal closure because SweetAlert is active.');
          e.preventDefault(); // Prevent the modal from closing
        } else {
          console.log('Modal closing allowed.');
        }
      });

      // Event handler for the SweetAlert button inside the modal
      $('#showAlert').click(function() {
        showSuccessAlert('This is a success message from inside the modal.');
      });
    });
  </script>

</body>
</html>
