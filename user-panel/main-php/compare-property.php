<?php
include '../../globalvar/globalvariable.php';
include $connToPan . 'config.php';
include $mphpToInc . 'header.php';
include $funToPan . 'function.php';
include $mphpToInc . 'navbar.php';

if (!isset($_GET['p_id1']) || !isset($_GET['p_id2'])) {
    echo "<div class='container mt-5 text-center'><h3 class='text-danger'>Invalid request. Please select two properties to compare.</h3></div>";
    exit;
}

$p_id1 = $_GET['p_id1'];
$p_id2 = $_GET['p_id2'];

// Fetch Property Data for Both Properties
$property1 = fetchData($conn, 'tbl_property_listing', '*', 'p_id = ?', [$p_id1])[0] ?? null;
$property2 = fetchData($conn, 'tbl_property_listing', '*', 'p_id = ?', [$p_id2])[0] ?? null;

if (!$property1 || !$property2) {
    echo "<div class='container mt-5 text-center'><h3 class='text-danger'>One or both properties not found.</h3></div>";
    exit;
}

// Fetch Property Images
$image1 = fetchData($conn, 'tbl_property_images', '*', 'property_id = ?', [$p_id1])[0]['image_name'] ?? '';
$image2 = fetchData($conn, 'tbl_property_images', '*', 'property_id = ?', [$p_id2])[0]['image_name'] ?? '';

$imagePath1 = $propImagesToUpan . $image1;
$imagePath2 = $propImagesToUpan . $image2;
?>

<div class="container mt-5">
    <h2 class="text-center text-primary">Compare Properties</h2>
    <div class="table-responsive mt-4">
        <table class="table table-bordered text-center">
            <thead class="table-dark">
                <tr>
                    <th>Feature</th>
                    <th>Property 1</th>
                    <th>Property 2</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Image</td>
                    <td><img src="<?php echo $imagePath1; ?>" alt="Property 1" width="150"></td>
                    <td><img src="<?php echo $imagePath2; ?>" alt="Property 2" width="150"></td>
                </tr>
                <tr>
                    <td>Price</td>
                    <td><i class="fa-solid fa-indian-rupee-sign"></i> <?php echo $property1['price']; ?></td>
                    <td><i class="fa-solid fa-indian-rupee-sign"></i> <?php echo $property2['price']; ?></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><?php echo $property1['address']; ?></td>
                    <td><?php echo $property2['address']; ?></td>
                </tr>
                <tr>
                    <td>Property Type</td>
                    <td><?php echo $property1['propertyType']; ?></td>
                    <td><?php echo $property2['propertyType']; ?></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td><?php echo $property1['req_status']; ?></td>
                    <td><?php echo $property2['req_status']; ?></td>
                </tr>
                <tr>
                    <td>Size (sqft)</td>
                    <td><?php echo $property1['size']; ?></td>
                    <td><?php echo $property2['size']; ?></td>
                </tr>
                <tr>
                    <td>Bedrooms</td>
                    <td><?php echo $property1['bedrooms']; ?></td>
                    <td><?php echo $property2['bedrooms']; ?></td>
                </tr>
                <tr>
                    <td>Bathrooms</td>
                    <td><?php echo $property1['bathrooms']; ?></td>
                    <td><?php echo $property2['bathrooms']; ?></td>
                </tr>
                <tr>
                    <td>Other Features</td>
                    <td><?php echo $property1['features'] ?? 'N/A'; ?></td>
                    <td><?php echo $property2['features'] ?? 'N/A'; ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php include $mphpToInc . 'footer.php'; ?>
<?php include $mphpToInc . 'endlinks.php'; ?>