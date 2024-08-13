<?php include '../../globalvar/globalvariable.php'; ?>
<?php include  $connToPan . 'config.php'; ?>
<?php include  $mphpToInc . 'header.php'; ?>
<?php include  $funToPan . 'function.php'; ?>
<?php include  $mphpToInc . 'navbar.php'; ?>

<?php
$p_id = $_GET['p_id'];
$c_id = $_GET['c_id'];
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
$where = 'c_id = ? AND p_id = ?';
$values = [$c_id, $p_id];
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

            <div class="d-block agent-box p-5">
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
          </div>
        </div>
      </div>
    </div>

<?php }
} ?>

<?php include  $mphpToInc . 'footer.php'; ?>
<?php include  $mphpToInc . 'loader.php'; ?>
<?php include  $mphpToInc . 'endlinks.php'; ?>