<!-- below functon is for the inserting the data  -->
<?php
function insertData($conn, $tableName, $data, $types, $successMessage, $errorMessage = '')
{
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
        // $successMessage = "Registered Successfully !!!";
        echo "<script>showSuccessAlert('$successMessage');</script>";
        return true;
    } else {
        if ($errorMessage = '') {
            $errorMessage = "Error: " . $stmt->error;
        }
        echo "<script>showErrorAlert('$errorMessage');</script>";
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


<!-- below function is for the fetching the data from the table  -->

<?php
function fetchData($conn, $tableName, $columns = '*', $where = '', $values = [])
{
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

    // Bind parameters if there are any
    if (!empty($values)) {
        // Create an array of types for the bind_param function
        $types = str_repeat('s', count($values)); // Assuming all values are strings
        $stmt->bind_param($types, ...$values);
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

<!-- below function is for the checking the similar data from the database  -->

<?php

function checkIfDataExists($conn, $tableName, $conditions)
{
    // Initialize an array to hold the WHERE clause parts
    $whereClauses = [];
    // Initialize an array to hold the values
    $values = [];

    // Loop through the conditions array to build the WHERE clause and values array
    foreach ($conditions as $column => $value) {
        $whereClauses[] = "$column = ?";
        $values[] = $value;
    }

    // Join the WHERE clauses with 'AND'
    $where = implode(' AND ', $whereClauses);

    // Fetch data from the table using fetchData
    $result = fetchData($conn, $tableName, '*', $where, $values);

    // Check if any row exists
    if (count($result) > 0) {
        return true;
    }
}



// Example usage


// $tableName = 'users';
// $conditions = [
//     'username' => 'john_doe',
//     'email' => 'john@example.com'
// ];

// $result = checkIfDataExists($conn, $tableName, $conditions);
// if ($result) {
//     echo 'Data exists';
// } else {
//     echo 'Data does not exist';
// }


?>