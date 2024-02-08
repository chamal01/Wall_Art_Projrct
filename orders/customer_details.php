<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get customer details from the form
    $OrderName = $_POST['OrderName'];
    $orderCity = $_POST['OrderCity'];
    $orderDistrict = $_POST['OrderDistrict'];
    $orderSTaddress = $_POST['OrderSTaddress'];
    $orderAddress = $_POST['OrderAddress'];
    $orderEmail = $_POST['OrderEmail'];
    $orderMNumber = $_POST['OrderMNumber'];

    // Create a database connection
    $conn = new mysqli('localhost', 'root', '', 'phpcrud');

    // Check if the connection was successful
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Calculate the total value
    $total = 0; // Initialize total

    if (!empty($_SESSION['cart'])) {
        $index = 0;

        foreach ($_SESSION['cart'] as $itemId) {
            $quantity = $_SESSION['qty_array'][$index];
            $sql = "SELECT * FROM tblusers WHERE id = $itemId";
            $query = $conn->query($sql);

            if ($row = $query->fetch_assoc()) {
                $itemPrice = $row['MobileNumber'];
                $total += $quantity * $itemPrice;
            }
            $index++;
        }
    }

    // Insert customer details into the customer_details table
    $insertCustomerSQL = "INSERT INTO customer_details (OrderName, OrderCity, OrderDistrict, OrderSTaddress, OrderAddress, OrderEmail, OrderMNumber, TotalAmount) 
                          VALUES ('$OrderName', '$orderCity', '$orderDistrict', '$orderSTaddress', '$orderAddress', '$orderEmail', '$orderMNumber', '$total')";
    
    if ($conn->query($insertCustomerSQL) === TRUE) {
        // Get the customer_id of the inserted record
        $customerId = $conn->insert_id;

        if (!empty($_SESSION['cart'])) {
            // Insert cart details into the cart_details table
            $index = 0;

            foreach ($_SESSION['cart'] as $itemId) {
                $quantity = $_SESSION['qty_array'][$index];
                $sql = "SELECT * FROM tblusers WHERE id = $itemId";
                $query = $conn->query($sql);

                if ($row = $query->fetch_assoc()) {
                    $itemPrice = $row['MobileNumber'];
                    $subtotal = $quantity * $itemPrice;
                    $insertCartSQL = "INSERT INTO cart_details (customer_id, item_id, address, price, quantity, subtotal) 
                                      VALUES ('$customerId', '$itemId', '$orderAddress', '$itemPrice', '$quantity', '$subtotal')";
                    $conn->query($insertCartSQL);
                }
                $index++;
            }

            // Insert the total amount into the order_totals table
            $insertTotalSQL = "INSERT INTO order_totals (customer_id, total_amount) VALUES ('$customerId', '$total')";
            
            if ($conn->query($insertTotalSQL) === TRUE) {
                // Payment record inserted successfully
                // You can add any further actions or redirection here

                // Clear session data
                session_unset();
                session_destroy();

                // Redirect to a thank you page or any other page as needed
                header("Location: ../index.php");
                exit();
            } else {
                echo "Error inserting total amount: " . $conn->error;
            }
        } else {
            echo "Error inserting customer details: " . $conn->error;
        }
    } else {
        echo "Error inserting customer details: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
