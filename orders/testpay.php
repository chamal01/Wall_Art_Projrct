<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Page</title>
    <!-- Add your CSS and JavaScript libraries and stylesheets here -->
    <link rel="stylesheet" href="your-styles.css">
</head>
<body>
    <!-- Initialize the session -->
    <?php
    session_start();

    // Initialize the database connection
    $conn = new mysqli('localhost', 'root', '', 'phpcrud');
    ?>

    <nav class="navbar">
        <!-- Your navigation bar content -->
    </nav>

    <div class="container">
        <h1 class="page-header text-center">Checkout Details</h1>
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (!empty($_SESSION['cart'])) {
                                $total = 0;
                                $index = 0;

                                foreach ($_SESSION['cart'] as $cartItem) {
                                    // Fetch the item details from your database (adjust as needed)
                                    $sql = "SELECT * FROM tblusers WHERE id = $cartItem";
                                    $query = $conn->query($sql);
                                    $row = $query->fetch_assoc();

                                    // Calculate subtotal
                                    $subtotal = $_SESSION['qty_array'][$index] * $row['MobileNumber'];
                                    $total += $subtotal;
                                    ?>
                                    <tr>
                                        <td><img src="admin/functions/profilepics/<?php echo $row['ProfilePic']; ?>" class="product-image" alt="Product Image"></td>
                                        <td><?php echo $row['FirstName']; ?></td>
                                        <td><span>$</span><?php echo number_format($row['MobileNumber'], 2); ?></td>
                                        <td><?php echo $_SESSION['qty_array'][$index]; ?></td>
                                        <td><span class="sub-total" data-price="<?php echo $row['MobileNumber']; ?>"><?php echo number_format($subtotal, 2); ?></span></td>
                                    </tr>
                                    <?php
                                    $index++;
                                }
                            } else {
                                ?>
                                <tr>
                                    <td colspan="5" class="text-center">Your cart is empty.</td>
                                </tr>
                                <?php
                            }
                            ?>
                            <tr class="total-row">
                                <td colspan="4" align="right"><b>Total</b></td>
                                <td><b><span id="checkout-total"><?php echo number_format($total, 2); ?></span></b></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Your "Proceed To Checkout" button (replace the URL with your actual checkout page URL) -->
    <a href="checkout.php" class="btn btn-success">Proceed To Checkout</a>

    <!-- Your JavaScript code and libraries (if any) -->

    <!-- Close the database connection if necessary -->
    <?php
    $conn->close();
    ?>

</body>
</html>
