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

// Function to check if a product code already exists
function isProductCodeExists($conn, $code) {
    $sql = "SELECT COUNT(*) as count FROM products WHERE code = '$code'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    return $row['count'] > 0;
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $code = $_POST['code'];
    $price = $_POST['price'];

    // Check if the product code already exists
    if (isProductCodeExists($conn, $code)) {
        echo '<script>alert("This product code is already in use.");</script>';
        header("Location: view_products.php"); // Redirect to add.php with an error message
        exit;
    } else {
        // Upload image
        $targetDirectory = "product-images/";
        $targetFile = $targetDirectory . basename($_FILES['image']['name']);
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Check if the file is a valid image
        $allowedExtensions = array('jpg', 'jpeg', 'png', 'gif', 'bmp', 'tiff');
        if (in_array($imageFileType, $allowedExtensions)) {
            if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
                // Insert data into the database
                $sql = "INSERT INTO products (name, code, price, image) VALUES ('$name', '$code', '$price', '$targetFile')";
                if (mysqli_query($conn, $sql)) {
                    echo '<script>alert("Product added successfully.");</script>';
                    header("Location: view_products.php"); // Redirect to view_products.php on success
                    exit;
                } else {
                    echo '<script>alert("Error: ' . mysqli_error($conn) . '");</script>';
                    header("Location: view_products.php"); // Redirect to add.php with an error message
                    exit;
                }
            } else {
                echo '<script>alert("Error uploading image.");</script>';
                header("Location: view_products.php"); // Redirect to add.php with an error message
                exit;
            }
        } else {
            echo '<script>alert("Invalid image file format. Allowed formats: jpg, jpeg, png, gif, bmp, tiff.");</script>';
            header("Location: view_products.php"); // Redirect to add.php with an error message
            exit;
        }
    }
}
?>
