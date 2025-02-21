<?php include '../../globalvar/globalvariable.php'; ?>
<?php include $connToPan . 'config.php'; ?>
<?php include $mphpToInc . 'header.php'; ?>
<?php include $funToPan . 'function.php'; ?>
<?php include $mphpToInc . 'navbar.php'; ?>
<style>
  .blur {
    filter: blur(8px);
    /* Adjust the blur intensity as needed */
    pointer-events: none;
    /* Prevent interaction with blurred content */
    user-select: none;
    /* Prevent text selection */
  }

  .unblur {
    filter: none;
    pointer-events: auto;
    user-select: auto;
  }
</style>
<?php
$p_id = $_GET['p_id'];
if (isset($_GET['c_id'])) {
  $c_id = $_GET['c_id'];
} else {
  $c_id = false;
}
?>

<!-- code for the hero bg  -->
<?php
$where2 = 'property_id = ?';
$values2 = [$p_id];
$data2 = fetchData($conn, 'tbl_property_images', '*', $where2, $values2);
$count = 0;
foreach ($data2 as $row2) {
  $count++;
  if ($count > 1) {
    break;
  } else {
    $hero_bg = $propImagesToUpan . $row2['image_name'];
  }
}
?>

<?php
if ($c_id) {
  $where = 'c_id = ? AND p_id = ?';
  $values = [$c_id, $p_id];
} else {
  $where = 'p_id = ?';
  $values = [$p_id];
}
$data = fetchData($conn, 'tbl_property_listing', '*', $where, $values);

// Check if there are rows in the data
if (count($data) > 0) {
  foreach ($data as $row) {

    ?>
    <div class="hero page-inner overlay" style="background-image: url('<?php echo $hero_bg; ?>')">
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-9 text-center mt-5">
            <h1 class="heading" data-aos="fade-up">
              <?php echo $row['address']; ?>
            </h1>

            <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
              <ol class="breadcrumb text-center justify-content-center">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item">
                  <a href="list_property.php">List Property</a>
                </li>
                <li class="breadcrumb-item">
                  <a href="properties.php" class="text-decoration-underline">Properties</a>
                </li>
                <li class="breadcrumb-item active text-white-50 text-decoration-underline" aria-current="page">
                  <?php echo $row['address']; ?>
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>

    <div class="section">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-7">
            <div class="img-property-slide-wrap">
              <div class="img-property-slide">
                <?php
                $where1 = 'property_id = ?';
                $values1 = [$p_id];
                $data1 = fetchData($conn, 'tbl_property_images', '*', $where1, $values1);
                foreach ($data1 as $row1) {
                  ?>
                  <img src="<?php echo $propImagesToUpan . $row1['image_name']; ?>" alt="Image" class="img-fluid" />
                <?php } ?>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <h2 class="heading text-primary"> <?php echo $row['address']; ?></h2>
            <p class="meta"> <?php echo $row['propertyType']; ?></p>
            <p class="text-black-50">
              <?php echo $row['interiorFeatures']; ?>
            </p>
            <p class="text-black-50">
              <?php echo $row['exteriorFeatures']; ?>
            </p>
            <p class="text-black-50">
              <?php echo $row['specialFeatures']; ?>
            </p>

            <div class="d-block agent-box p-5 blur" id="agent-details">
              <div class="img mb-4">
                <img src="../images/person_2-min.jpg" alt="Image" class="img-fluid" />
              </div>
              <div class="text">
                <h3 class="mb-0"><?php echo $row['contactName']; ?></h3>
                <div class="meta"><?php echo $row['contactEmail']; ?></div>
                <div class="meta mb-3"><?php echo $row['contactNumber']; ?></div>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Ratione laborum quo quos omnis sed magnam id ducimus saepe
                </p>
                <ul class="list-unstyled social dark-hover d-flex">
                  <li class="me-1">
                    <a href="#"><span class="icon-instagram"></span></a>
                  </li>
                  <li class="me-1">
                    <a href="#"><span class="icon-twitter"></span></a>
                  </li>
                  <li class="me-1">
                    <a href="#"><span class="icon-facebook"></span></a>
                  </li>
                  <li class="me-1">
                    <a href="#"><span class="icon-linkedin"></span></a>
                  </li>
                </ul>
              </div>
            </div>

            <button class="btn btn-primary mt-3 py-2 px-3 reveal-btn" data-cid="<?php echo $_SESSION['c_id'] ?>" data-pid="<?php echo $p_id; ?>" data-email="<?php $_SESSION['email'] ?>"
              onclick="toggleBlur()">Reveal
              Details</button>

          </div>
        </div>
      </div>
    </div>

  <?php }
} ?>

<script>
  // function toggleBlur() {
  //   const detailsDiv = document.getElementById('agent-details');
  //   detailsDiv.classList.toggle('blur');
  //   detailsDiv.classList.toggle('unblur');
  // }

  document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".reveal-btn").forEach(button => {
      button.addEventListener("click", function () {
        let cid = this.getAttribute("data-cid");
        let pid = this.getAttribute("data-pid");
        let email = this.getAttribute("data-email");
        // console.log(cid);

        fetch("../../api/reveal_property.php", {
          method: "POST",
          headers: {
            "Content-Type": "application/json"
          },
          body: JSON.stringify({ cid: cid, pid:pid, email: email })
        })
          .then(response => response.text()) // Get response as text first
          .then(text => {
            // console.log("Raw Response:", text); // Log the raw response
            return JSON.parse(text); // Try parsing JSON
          })
          .then(data => {
            // console.log("Status Code:", data.status_code);
            if (data.status_code == 422) {
              alert("Something went Wrong");
            }
            if (data.status_code == 200) {
              const detailsDiv = document.getElementById('agent-details');
              detailsDiv.classList.toggle('blur');
              document.querySelectorAll(".reveal-btn").forEach(button => {
                button.classList.add("d-none");
              });
            }
          })
          .catch(error => {
            console.error("Parsing Error:", error);
            alert("Something went Wrong");
          });

      });
    });
  });
</script>


<?php
// ---------------------- Reveal Owner Details Section ----------------------- */

if (isset($_POST['reveal'])) {
  // Retrieve inputs from POST
  if (!isset($_POST['email']) || !isset($_POST['property_id'])) {
    echo "Error: Required fields not found";
    exit;
  } else {
    $emailInSession = $_POST['email'];
    $property_id = $_POST['property_id']; // Must be passed via a hidden field

    // 1. Get customer id from the login table
    $stmt = $conn->prepare("SELECT c_id FROM login WHERE c_email = ?");
    $stmt->bind_param("s", $emailInSession);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows == 0) {
      die("Error: No data found for email: " . $emailInSession);
    }
    $row = $result->fetch_assoc();
    $c_id = $row['c_id'];
    $stmt->close();

    // 2. Pre-populate tbl_revealed_details: insert a row with revealed_at = NULL if it doesn't exist.
    $stmt = $conn->prepare("INSERT INTO tbl_revealed_details (c_id, property_id, revealed_at) VALUES (?, ?, NULL)
                            ON DUPLICATE KEY UPDATE revealed_at = revealed_at");
    $stmt->bind_param("ii", $c_id, $property_id);
    if (!$stmt->execute()) {
      echo "Error inserting/pre-populating reveal record: " . $stmt->error;
      exit;
    }
    $stmt->close();

    // 3. Retrieve the current reveal status.
    $stmt = $conn->prepare("SELECT revealed_at FROM tbl_revealed_details WHERE c_id = ? AND property_id = ?");
    $stmt->bind_param("ii", $c_id, $property_id);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows == 0) {
      echo "Error: Record not found";
      exit;
    }
    $row = $result->fetch_assoc();
    $revealed_at = $row['revealed_at'];
    $stmt->close();

    // 4. If revealed_at is NULL, then the property hasn't been revealed yet.
    if (is_null($revealed_at)) {
      // 4a. Fetch customer's current plan points from tbl_plans_details
      $stmt = $conn->prepare("SELECT points FROM tbl_plans_details WHERE c_id = ?");
      $stmt->bind_param("i", $c_id);
      $stmt->execute();
      $result = $stmt->get_result();
      if ($result->num_rows == 0) {
        echo "Plan details not found";
        exit;
      }
      $row = $result->fetch_assoc();
      $currentPoints = (int) $row['points'];
      $stmt->close();

      if ($currentPoints < 1) {
        echo "<script>showErrorAlert('Insufficient points to reveal details');</script>";
        exit;
      }

      // 4b. Deduct one point from tbl_plans_details
      $newPoints = $currentPoints - 1;
      $stmt = $conn->prepare("UPDATE tbl_plans_details SET points = ? WHERE c_id = ?");
      $stmt->bind_param("ii", $newPoints, $c_id);
      if (!$stmt->execute()) {
        echo "Error updating points: " . $stmt->error;
        exit;
      }
      $stmt->close();

      // 4c. Update tbl_revealed_details: set revealed_at to current timestamp
      $revealed_at = date('Y-m-d H:i:s');
      $stmt = $conn->prepare("UPDATE tbl_revealed_details SET revealed_at = ? WHERE c_id = ? AND property_id = ?");
      $stmt->bind_param("sii", $revealed_at, $c_id, $property_id);
      if (!$stmt->execute()) {
        echo "Error updating reveal record: " . $stmt->error;
        exit;
      }
      $stmt->close();

      echo "Reveal action recorded. Points deducted.";
    } else {
      echo "Property already revealed. No point deduction.";
    }

    // 5. Proceed to show owner details (replace with your actual logic)
    echo "<script>showOwnerDetails('$property_id');</script>";
  }
}
?>


<?php include $mphpToInc . 'footer.php'; ?>
<?php include $mphpToInc . 'loader.php'; ?>
<?php include $mphpToInc . 'endlinks.php'; ?>