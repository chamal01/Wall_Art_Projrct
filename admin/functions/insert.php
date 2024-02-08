<?php 
include('../../dbconnection.php');

if(isset($_POST['submit']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $contno = $_POST['contactno'];
    $Description = $_POST['Description'];
    $add = $_POST['address'];
    $ppic = $_FILES["profilepic"]["name"];
    $extension = strtolower(pathinfo($ppic, PATHINFO_EXTENSION));
    $allowed_extensions = array("jpg", "jpeg", "png", "gif");

    if(!in_array($extension, $allowed_extensions))
    {
        echo "<script>alert('Invalid format. Only jpg / jpeg / png / gif format allowed');</script>";
    }
    else
    {
        $imgnewfile = md5($ppic . time()) . '.' . $extension;
        $target_directory = "profilepics/";

        if(move_uploaded_file($_FILES["profilepic"]["tmp_name"], $target_directory . $imgnewfile))
        {
            $query = mysqli_query($con, "INSERT INTO tblusers (FirstName, LastName, MobileNumber, Description, Address, ProfilePic) VALUES ('$fname', '$lname', '$contno', '$Description', '$add', '$imgnewfile')");

            if ($query) {
                echo "<script>alert('You have successfully inserted the data');</script>";
                echo "<script type='text/javascript'> document.location ='product.php'; </script>";
            } 
            else {
                echo "<script>alert('Something Went Wrong. Please try again');</script>";
            }
        }
        else
        {
            echo "<script>alert('Error uploading the file');</script>";
        }
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
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>PHP Crud Operation!!</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
	color: #fff;
	background: #63738a;
	font-family: 'Roboto', sans-serif;
}
.form-control {
	height: 40px;
	box-shadow: none;
	color: #969fa4;
}
.form-control:focus {
	border-color: #5cb85c;
}
.form-control, .btn {        
	border-radius: 3px;
}
.signup-form {
	width: 450px;
	margin: 0 auto;
	padding: 30px 0;
  	font-size: 15px;
}
.signup-form h2 {
	color: #636363;
	margin: 0 0 15px;
	position: relative;
	text-align: center;
}
.signup-form h2:before, .signup-form h2:after {
	content: "";
	height: 2px;
	width: 30%;
	background: #d4d4d4;
	position: absolute;
	top: 50%;
	z-index: 2;
}	
.signup-form h2:before {
	left: 0;
}
.signup-form h2:after {
	right: 0;
}
.signup-form .hint-text {
	color: #999;
	margin-bottom: 30px;
	text-align: center;
}
.signup-form form {
	color: #999;
	border-radius: 3px;
	margin-bottom: 15px;
	background: #f2f3f7;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;
}
.signup-form .form-group {
	margin-bottom: 20px;
}
.signup-form input[type="checkbox"] {
	margin-top: 3px;
}
.signup-form .btn {        
	font-size: 16px;
	font-weight: bold;		
	min-width: 140px;
	outline: none !important;
}
.signup-form .row div:first-child {
	padding-right: 10px;
}
.signup-form .row div:last-child {
	padding-left: 10px;
}    	
.signup-form a {
	color: #fff;
	text-decoration: underline;
}
.signup-form a:hover {
	text-decoration: none;
}
.signup-form form a {
	color: #5cb85c;
	text-decoration: none;
}	
.signup-form form a:hover {
	text-decoration: underline;
}  
</style>
</head>
<body>
<div class="signup-form">
    <form  method="POST" enctype="multipart/form-data" >
		<h2>Fill Data</h2>
		<p class="hint-text">Fill below form.</p>
        <div class="form-group">
		<div class="form-group">
    <input type="text" class="form-control" name="address" placeholder="Item Code" required="true" oninput="this.value = this.value.replace(/[^0-9]/g, '');">
</div>
			<div class="row">
				<div class="col"><input type="text" class="form-control" name="fname" placeholder="Product Name" required="true"></div><div class="form-group">
					
    <select class="form-control" name="lname">
		<option value="" disabled selected>Category</option>
        <option value="Wall Art">Wall art</option>
        <option value="Wood Burn Art">Wood burn art</option>
        <option value="Custom">custom</option>
    </select>
</div>
			</div>        	
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="contactno" placeholder="Price" required="true" maxlength="20">
        </div>
        <div class="form-group">
			<textarea class="form-control" id="" required="true" placeholder="Description" name="Description" required="true"></textarea>
        </div>
		
		
  
             <div class="form-group">
        	<input type="file" class="form-control" name="profilepic"  accept=".jpg, .png, .svg, .jpeg, " required="true">
        	<span style="color:red; font-size:12px;">Only jpg / jpeg/ png /svg format allowed.</span>
        </div>      
      
		<div class="form-group">
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Cancel
</button>

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Do you want to cancel?
      </div>
      <div class="modal-footer">
        <a href="product.php"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Yes</button></a>
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">No</button>
      </div>
    </div>
  </div>
</div>

            <button type="submit" class="btn btn-success" name="submit">Add</button>
        </div>
    </form>
</div>
</body>
</html>