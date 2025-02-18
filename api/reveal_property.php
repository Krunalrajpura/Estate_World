<?php
header("Content-Type: application/json");
include '../connection/config.php'; // Your database connection file

$data = json_decode(file_get_contents("php://input"), true);
$cid = isset($data['cid']) ? intval($data['cid']) : 0;

if ($cid > 0) {
    // Check if c_id exists in the database
    $query = "SELECT points FROM tbl_points_details WHERE c_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $cid);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        // Check if points are greater than 0
        if ($row['points'] > 0) {
            // Reduce points by 1
            $newPoints = $row['points'] - 1;
            $updateQuery = "UPDATE tbl_points_details SET points = ? WHERE c_id = ?";
            $updateStmt = $conn->prepare($updateQuery);
            $updateStmt->bind_param("ii", $newPoints, $cid);

            if ($updateStmt->execute()) {
                echo json_encode(["success" => true, "status_code" => 200, "message" => "Points deducted successfully"]);
            } else {
                echo json_encode(["success" => false, "status_code" => 500, "message" => "Failed to update points"]);
            }
        } else {
            echo json_encode(["success" => false, "status_code" => 400, "message" => "Insufficient points"]);
        }
    } else {
        echo json_encode(["success" => false, "status_code" => 404, "message" => "No record found for given c_id"]);
    }
} else {
    echo json_encode(["success" => false, "status_code" => 422, "message" => "Invalid data"]);
}
?>