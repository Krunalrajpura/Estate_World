
    // Define success alert function
    function showSuccessAlert(message) {
        Swal.fire({
            title: 'Success!',
            text: message,
            icon: 'success',
            confirmButtonText: 'OK'
        }).then((result) => {
            if (result.isConfirmed) {
                // Redirect to the current page URL
                window.location.href = window.location.href;
            }
        });
    }


    // Define error alert function
    function showErrorAlert(message) {
        Swal.fire({
            title: 'Error!',
            text: message,
            icon: 'error',
            confirmButtonText: 'OK'
        });
        // Redirect after 2 seconds
        setTimeout(function() {
            window.location.href = window.location.href;
        }, 2000);
    }

    // Define warning alert function
    function showWarningAlert(message) {
        Swal.fire({
            title: 'Warning!',
            text: message,
            icon: 'warning',
            confirmButtonText: 'OK'
        });
        // Redirect after 2 seconds
        // setTimeout(function() {
        //     window.location.href = window.location.href;
        // }, 2000);
    }

    function showInfoAlert(message) {
        Swal.fire({
            title: 'Information',
            text: message,
            icon: 'info',
            confirmButtonText: 'OK'
        });
        // Redirect after 2 seconds
        setTimeout(function() {
            window.location.href = window.location.href;
        }, 2000);
    }


// <?php
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     // Simulate form processing
//     $name = $_POST['name'];

//     if (!empty($name)) {
//         // Call the success alert function with a dynamic message
//         $successMessage = "Hello, $name! Your operation was successful.";
//         echo "<script>showSuccessAlert('$successMessage');</>";
//     } elseif ($name == "NULL") {
//         // Example of a warning condition
//         $warningMessage = "This is a warning. Please be cautious.";
//         echo "<script>showWarningAlert('$warningMessage');</script>";
//     } else {
//         // Call the error alert function with a dynamic message
//         $errorMessage = "The name field is required.";
//         echo "<script>showErrorAlert('$errorMessage');</script>";
//     }
// }

// $infoMessage = "This is an informational alert!";
// echo "<script>showInfoAlert('$infoMessage');</script>";
// ?>