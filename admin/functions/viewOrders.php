   
   <!DOCTYPE html>
    <html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
        <title>Bootstrap Example</title>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <title>Customer Details</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <style>
            .table-container {
                max-width: 1000px; /* Adjust the width as needed */
                overflow-x: auto;
                margin: 0 auto; /* Center the table horizontally */
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            }

            .highlighted-row {
                background-color: #e6f7ff; /* Change this to the desired highlight color */
            }

            /* Style for the "See Validity" button */
            .see-validity-btn {
                background-color: #007BFF;
                border: none;
            }

            /* Style for the "OK" button */
            .ok-btn {
                background-color: #28a745;
                border: none;
            }

            /* Style for the "Not" button */
            .not-btn {
                background-color: #dc3545;
                border: none;
            }
            .view-button {
        background-color: #007BFF;
        color: #fff;
        border: none;
        padding: 5px 10px;
        cursor: pointer;
    }

    .view-button:hover {
        background-color: #0056b3;
    }
        </style>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>

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




    <div class="table-container">
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

    // Fetch customer details one by one based on customer_id in descending order
    $sql = "SELECT * FROM customer_details ORDER BY customer_id DESC"; // Change this line
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table class='table table-bordered table-striped' id='customer-table'>";
        echo "<thead>
                <tr>
                    <th>Customer ID</th>
                    <th>view</th>
                    <th>Ordered Time</th>
                    <th>Price</th>
                    <th>See Validity</th>
                    <th>Actions</th>
                    <th>Order Status</th>
                </tr>
            </thead>";
        echo "<tbody>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr onclick='highlightRow(this)' class='cursor-pointer'>";
            echo "<td>" . $row["customer_id"] . "</td>";
            echo "<td><a href='order_details.php?customer_id=" . $row["customer_id"] . "'><button class='btn btn-secondary' onclick='viewOrderDetails(" . $row["customer_id"] . ")'>View Details</button></a></td>";
            echo "<td>" . $row["data_generate_time"] . "</td>";
            echo "<td>" . $row["TotalAmount"] . "</td>";
            echo "<td><button type='button' class='btn see-validity-btn text-white'>See Validity</button></td>";
            echo "<td>
            <button type='submit' class='btn ok-btn text-white' onclick='updateOrderStatus(" . $row["customer_id"] . ", 1)'>accept</button>
            <button type='submit' class='btn not-btn text-white' onclick='updateOrderStatus(" . $row["customer_id"] . ", 0)'>cancel</button>
            </td>";
            echo "<td name='orderstatus' class='" . ($row["orderstatus"] == 1 ? 'text-success' : ($row["orderstatus"] == 0 ? 'text-danger' : 'text-info')) . "'>" . ($row["orderstatus"] == 1 ? "accept" : ($row["orderstatus"] == 0 ? "cancel" : "you have new order")) . "</td>"; // Display "accept" or "cancel"
            echo "</tr>";
            
        }
        echo "</tbody>";
        echo "</table>";
    } else {
        echo "No records found in the database.";
    }

    // Close the database connection
    $conn->close();
    ?>

    </div>
 <script>
    // Function to update order status via AJAX
    function updateOrderStatus(customerId, newStatus) {
        fetch('update_orderstatus.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ customerId, newStatus })
        })
        .then(response => {
            if (response.ok) {
                // Update the order status on the client side if the request was successful.
                const statusCell = document.querySelector(`#customer-table tr[data-customer-id="${customerId}"] td[name="orderstatus"]`);
                statusCell.textContent = newStatus === 1 ? 'accept' : 'cancel';
                statusCell.className = newStatus === 1 ? 'text-success' : 'text-danger';
            } else {
                console.error('Failed to update order status.');
            }
        })
        .catch(error => {
            console.error('An error occurred while updating order status:', error);
        });
    }

    // Function to view order details
    function viewOrderDetails(customerID) {
        window.location.href = 'order_details.php?customer_id=' + customerID;
    }

    // Function to highlight the row when clicked
    function highlightRow(row) {
        row.classList.toggle('highlighted-row');
    }
</script>

    </body>
    </html>
