<!-- below functon is for the inserting the data  -->
<?php
function insertData($conn, $tableName, $data, $types) {
    // Build the SQL statement
    $columns = implode(", ", array_keys($data));
    $placeholders = implode(", ", array_fill(0, count($data), '?'));
    $sql = "INSERT INTO $tableName ($columns) VALUES ($placeholders)";

    // Prepare the statement
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die("Prepare failed: " . $conn->error);
    }

    // Bind the parameters
    $stmt->bind_param($types, ...array_values($data));

    // Execute the statement
    if ($stmt->execute()) {
        echo "<script>alert('Data Inserted Successfully !!')</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// usage of the function 

// $tableName = 'your_table';
// $data = [
//     'column1' => 'value1',
//     'column2' => 'value2',
// ];
// $types = 'ss';

// insertData($conn, $tableName, $data, $types);
?>


<!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->
<!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->
<!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->


<!-- below function is for the fethinf the data from the table  -->

<?php
function fetchData($conn, $tableName, $columns = '*', $where = '') {
    // Build the SQL statement
    $sql = "SELECT $columns FROM $tableName";
    if ($where != '') {
        $sql .= " WHERE $where";
    }

    // Prepare the statement
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die("Prepare failed: " . $conn->error);
    }

    // Execute the statement
    if ($stmt->execute()) {
        // Get the result
        $result = $stmt->get_result();

        // Fetch all data
        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

        // Free the result
        $result->free();
    } else {
        die("Execute failed: " . $stmt->error);
    }

    // Close the statement
    $stmt->close();

    return $data;
}

// usage of the function 

// $tableName = 'your_table';
// $columns = '*'; // You can specify columns like 'column1, column2'
// $where = 'column1 = "value1"'; // Optional WHERE clause

// $data = fetchData($conn, $tableName, $columns, $where);

// foreach ($data as $row) {
//     // Process each row
//     echo "Column1: " . $row['column1'] . "<br>";
//     echo "Column2: " . $row['column2'] . "<br>";
// }
?>


<!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->
<!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->
<!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->
