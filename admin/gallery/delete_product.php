<?php
// Database connection settings (replace with your database credentials)
$hostname = "localhost";
$username = "root";
$password = "";
$database = "phpcrud";

// Create a connection to the database
$conn = mysqli_connect($hostname, $username, $password, $database);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the product ID is provided in the URL
if (isset($_GET['id_gallery'])) {
    $productId = $_GET['id_gallery'];

    // Delete the product from the database
    $sql = "DELETE FROM products WHERE id_gallery = $productId";
    if (mysqli_query($conn, $sql)) {
        echo '<script>alert("Product deleted successfully.");</script>';
        header("Location: view_products.php"); // Redirect back to the product list
    } else {
        echo "Error deleting product: " . mysqli_error($conn);
    }
} else {
    echo "Invalid product ID.";
}
?>
