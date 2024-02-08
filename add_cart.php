<?php
	session_start();

	// Check if product is already in the cart
	if(!in_array($_GET['id'], $_SESSION['cart'])){
		array_push($_SESSION['cart'], $_GET['id']);
		$_SESSION['message'] = 'Product added to cart';
		$alertClass = 'alert-success'; // Set the alert class for success
	}
	else{
		$_SESSION['message'] = 'Product already in cart';
		$alertClass = 'alert-warning'; // Set the alert class for warning
	}

	header('location: products.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Notification</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
	<div class="container mt-5">
		<?php if(isset($_SESSION['message'])): ?>
			<div class="alert <?php echo $alertClass; ?> alert-dismissible fade show" role="alert">
				<?php echo $_SESSION['message']; ?>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<?php unset($_SESSION['message']); ?>
		<?php endif; ?>
	</div>

	<script src="bootstrap/js/bootstrap.min.js">
	</script>
</body>
</html>
