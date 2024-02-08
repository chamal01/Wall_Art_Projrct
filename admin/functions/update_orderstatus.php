<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "phpcrud";

    // Create a connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $requestData = json_decode(file_get_contents('php://input'));
    $customerId = $requestData->customerId;
    $newStatus = $requestData->newStatus;

    // Update the orderstatus in the database
    $sql = "UPDATE customer_details SET orderstatus = $newStatus WHERE customer_id = $customerId";
    if ($conn->query($sql) === TRUE) {
        echo 'Order status updated successfully';
    } else {
        echo 'Error updating order status: ' . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
