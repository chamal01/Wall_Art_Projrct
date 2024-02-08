
<?php
// Set the error reporting level to hide warnings
error_reporting(E_ALL & ~E_WARNING);

try {
    // Create a new database connection
    $db = new mysqli('localhost', 'root', '', 'phpcrud');

    // Disable warnings for the database connection
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    // Your SQL query here
    $result = $db->query('SELECT * FROM customer_details');

    // Rest of your code

    // Close the database connection when you're done
    $db->close();
} catch (Exception $e) {
    // Handle exceptions or errors here
    echo "An error occurred: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Order Details</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
     strong {
        color: black; /* Replace with your desired color code */
    }
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }
        .card {
    border: 1px solid #e0e0e0;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    padding: 20px;
    background-color: #fff;
}

.card h2 {
    font-size: 24px;
    margin-bottom: 15px;
}

table {
    width: 100%;
    border-collapse: collapse;
}

table, th, td {
    border: 1px solid #e0e0e0;
}

th, td {
    padding: 10px;
    text-align: left;
}

thead {
    background-color: #f5f5f5;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}
        .container {
            margin-top: 30px;
        }

        .card {
            background-color: #fff;
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .card h2 {
            font-size: 24px;
            color: #333;
        }

        .card p {
            font-size: 16px;
            color: #555;
        }

        .table {
            width: 100%;
        }

        .table th,
        .table td {
            text-align: left;
            padding: 10px;
        }

        .table th {
            background-color: #f5f5f5;
            font-weight: 600;
        }

        .table tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <?php
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

                // Get customer_id from the URL parameter
                if (isset($_GET['customer_id'])) {
                    $customer_id = $_GET['customer_id'];

                    // Fetch customer details for the specified customer_id
                    $sql = "SELECT * FROM customer_details WHERE customer_id = $customer_id";
                    $result1 = $conn->query($sql);

                    if ($result1->num_rows > 0) {
                        $row1 = $result1->fetch_assoc();
                        echo "<div class='card'>";
                        echo "<h2>Order Details for Customer ID : " . "(" . $customer_id . ")" . "" . "</h2>";
                        echo "<p>Customer Name : <strong>" . $row1["OrderName"] . "</strong></p>";
                        echo "<p>Customer City :<strong> " . $row1["OrderCity"] . "</strong></p>";
                        echo "<p>Customer District :<strong> " . $row1["OrderDistrict"] . "</strong></p>";
                        echo "<p>Customer Street Address :<strong> " . $row1["OrderSTaddress"] . "</strong></p>";
                        echo "<p>Customer Email :<strong>]" . $row1["OrderEmail"] . "</strong></p>";
                        

                        echo "</div>";
                    } else {
                        echo "No customer details found for Customer ID: " . $customer_id;
                    }
                } else {
                    echo "Invalid request. Customer ID not provided.";
                }
                ?>
            </div>
            <div class="col-md-6">
                <?php
                // Continue your right-side card content here
                $sql = "SELECT * FROM cart_details WHERE customer_id = $customer_id";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    echo "<h2>Order Items</h2>";
                    echo "<div class='card'>";
                    echo "<table class='table'>";
                    echo "<thead>
                            <tr>
                                <th>Item ID</th>
                                <th>Address</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Subtotal</th>
                                <th>Ordered Time</th>
                            </tr>
                        </thead>";
                    echo "<tbody>";

                    $previousAddress = null; // Initialize $previousAddress

                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["item_id"] . "</td>";

                        if ($row["address"] !== $previousAddress) {
                            echo "<td>" . $row["address"] . "</td>";
                            $previousAddress = $row["address"];
                        } else {
                            echo "<td></td>";
                        }

                        echo "<td>" . $row["price"] . "</td>";
                        echo "<td>" . $row["quantity"] . "</td>";
                        echo "<td>" . $row["subtotal"] . "</td>";
                        echo "<td>" . $row["data_generate_time"] . "</td>";
                        echo "</tr>";
                    }

                    echo "</tbody>";
                    echo "</table>";
                    echo "</div>";
                } else {
                    echo "No order items found for Customer ID: " . $customer_id;
                }

                // Close the database connection
                $conn->close();
                ?>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
