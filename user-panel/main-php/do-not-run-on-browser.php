<?php include '../../globalvar/globalvariable.php'; ?>
<?php include $connToPan . 'config.php'; ?>

<?php

$images_per_property = 4;
$total_properties = 500;
$image_counter = 1;
$values = [];

for ($property_id = 1; $property_id <= $total_properties; $property_id++) {
    for ($j = 0; $j < $images_per_property; $j++) {
        $values[] = "($property_id, 'h$image_counter.jpg')";
        $image_counter++;

        // Reset image counter if it exceeds 20
        if ($image_counter > 20) {
            $image_counter = 1;
        }
    }
}

// Convert array to SQL query
$sql = "INSERT INTO tbl_property_images (property_id, image_name) VALUES " . implode(", ", $values);

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('2000 Images inserted successfully!');</script>";
} else {
    echo "<script>alert('Error: " . $conn->error . "');</script>";
}

$conn->close();

?>