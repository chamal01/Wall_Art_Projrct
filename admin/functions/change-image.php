<?php
include('../../dbconnection.php');

if(isset($_POST['submit'])) {
    $userid = $_GET['userid'];
    
    // Check if a file was uploaded without errors
    if(isset($_FILES["profile_pic"]) && $_FILES["profile_pic"]["error"] == 0) {
        $target_dir = "profilepics/";
        $target_file = $target_dir . basename($_FILES["profile_pic"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        
        // Check if the uploaded file is an image
        $check = getimagesize($_FILES["profile_pic"]["tmp_name"]);
        if($check !== false) {
            // Allow only certain file formats (you can add more if needed)
            $allowed_formats = array("jpg", "jpeg", "png", "gif");
            if(in_array($imageFileType, $allowed_formats)) {
                // Generate a unique file name for the uploaded image
                $new_filename = uniqid('profile_', true) . "." . $imageFileType;
                $new_filepath = $target_dir . $new_filename;
                
                // Move the uploaded file to the target directory
                if(move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $new_filepath)) {
                    // Update the user's profile picture in the database
                    $query = mysqli_query($con, "UPDATE tblusers SET ProfilePic='$new_filename' WHERE ID='$userid'");
                    
                    if($query) {
                        // Redirect to edit.php
                        header("Location: edit.php?userid=$userid");
                        exit; // Important to prevent further script execution
                    } else {
                        echo "<script>alert('Failed to update profile picture');</script>";
                    }
                } else {
                    echo "<script>alert('Error uploading file');</script>";
                }
            } else {
                echo "<script>alert('Invalid file format. Allowed formats: jpg, jpeg, png, gif');</script>";
            }
        } else {
            echo "<script>alert('File is not an image');</script>";
        }
    } else {
        echo "<script>alert('No file was uploaded');</script>";
    }
}
?>

<?php
// Set the error reporting level to hide warnings
error_reporting(E_ALL & ~E_WARNING);

try {
    // Create a new database connection
    $db = new mysqli('localhost', 'root', '', 'phpcrud');

    // Disable warnings for the database connection
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    // Your SQL query here
    $result = $db->query('SELECT * FROM tblusers');

    // Rest of your code

    // Close the database connection when you're done
    $db->close();
} catch (Exception $e) {
    // Handle exceptions or errors here
    echo "An error occurred: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Profile Picture</title>
    <!-- Include Bootstrap CSS and JS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.min.js"></script>
    <style>
        /* Custom CSS styles */
        .change-profile-pic-form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-group {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="change-profile-pic-form">
            <form method="POST" enctype="multipart/form-data">
                <h2 class="text-center">Change Profile Picture</h2>
                
                <div class="form-group">
                    <input type="file" class="form-control" name="profile_pic" accept="image/*" required="true">
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Upload</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
